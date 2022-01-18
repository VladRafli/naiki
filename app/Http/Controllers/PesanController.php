<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use App\Models\User;
use Auth;
use Alert;
use Carbon\carbon;
class PesanController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
    }

    public function index($id)
    {
        $item = Item::where('id_barang', $id)->first();

        return view('pesan.index', compact('item'));
    }

    public function pesan(Request $request, $id)
    {
        $item = Item::where('id_barang', $id)->first();
        $tanggal = Carbon::now();

        // validasi stok
        if($request->jumlah_pesan > $item->stok_barang)
        {
            return redirect('pesan/'.$id);
            // alert("Jumlah stok tidak mencukupi");
        }

        // validasi
        $cek_pesanan = Pesanan::where('user_id', Auth::user()-> id)-> where('status', 0)-> first();
        if(empty($cek_pesanan))
        {
            $pesanan = new Pesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
            // $pesanan->jumlah_harga = $item->harga_barang*$request->jumlah_pesan;
            $pesanan->jumlah_harga = 0;
            // $pesanan->kode = mt_rand(100, 999);
            $pesanan->save();
        }

        // simpan pesanan detail
        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        // cek pesanan detail
        $cek_pesanan_detail = PesananDetail::where('barang_id', $item->id_barang)->where('pesanan_id', $pesanan_baru->id)->first();
        if(empty($cek_pesanan_detail))
        {
            $pesanan_detail = new PesananDetail;
            $pesanan_detail->user_id = Auth::user()->id;
            $pesanan_detail->barang_id = $item->id_barang;
            $pesanan_detail->pesanan_id = $pesanan_baru->id;
            $pesanan_detail->jumlah = $request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $item->harga_barang*$request->jumlah_pesan;
            $pesanan_detail->save();
        }

        else
        {
            $pesanan_detail = PesananDetail::where('barang_id', $item->id_barang)->where('pesanan_id', $pesanan_baru->id)->first();
            $pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

            // harga terbaru
            $harga_pesanan_detail_baru = $item->harga_barang*$request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_pesan+$harga_pesanan_detail_baru;
            $pesanan_detail->update();
        }
        // jumlah total
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
    	$pesanan->jumlah_harga = $pesanan->jumlah_harga+$item->harga_barang*$request->jumlah_pesan;
    	$pesanan->update();
    	
        // Alert::success('Pesanan Sukses Masuk Keranjang', 'Success');
        return redirect('home');
    }

    public function check_out()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
 	    $pesanan_details = [];
        if(!empty($pesanan))
        {
            $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
        }
        
        return view('pesan.check_out', compact('pesanan', 'pesanan_details'));
    }


    public function check_out_delete() //delete checkout cart
    {
        $pesanan_detail = PesananDetail::where('user_id', Auth::user()->id);
        $pesanan_detail->delete();
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan->status = 1;
        $pesanan->update();
        return redirect('check-out');
    }

    public function delete($id)
    {
        $pesanan_detail = PesananDetail::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
        $pesanan->update();


        $pesanan_detail->delete();

        Alert::error('Pesanan sukses terhapus', 'Hapus');
        return redirect('check-out');
    }

    public function konfirmasi()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->alamat))
        {
            Alert::error('Data alamat tidak ditemukan, harap isi', 'Error');
            return redirect('profile');
        }

        if(empty($user->nohp))
        {
            Alert::error('Nomor handphone tidak ditemukan, harap isi', 'Error');
            return redirect('profile');
        }

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();

        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_details as $pesanan_detail) {
            $barang = Item::where('id', $pesanan_detail->barang_id)->first();
            $barang->stok = $barang->stok-$pesanan_detail->jumlah;
            $barang->update();
        }

        Alert::success('Checkout berhasil, mohon pembayaran diselesaikan segera', 'Success');
        return redirect('history/'.$pesanan_id);

    }
}