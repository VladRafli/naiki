<?php

namespace App\Http\Controllers;
use App\Models\Item;

use Illuminate\Http\Request;

class searchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Item::where('nama_barang', 'like', '%'.request('search') . '%')->get();
        
        return view('home', compact('items'));
    }
}
