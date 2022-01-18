<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Items')->insert([
        [
            'id_barang' => '1',
            'nama_barang' => 'Nike Air Zoom Alphafly',
            'gambar' => 'alphafly'.'.jpg',
            'harga_barang' => '4299000',
            'stok_barang' => '10',
            'warna_barang' => 'Amarillo Magma, Orange Healing',
            'detail_barang' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec."',
        ],[
            'id_barang' => '2',
            'nama_barang' => 'Nike Dunk High Retro SE',
            'gambar' => 'dunk'.'.jpg',
            'harga_barang' => '1799000',
            'stok_barang' => '10',
            'warna_barang' => 'Black, Black/White, Hyper Royal',
            'detail_barang' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec."',
        ],[
            'id_barang' => '3',
            'nama_barang' => 'Nike React Metcon Turbo',
            'gambar' => 'react'.'.jpg',
            'harga_barang' => '2279000',
            'stok_barang' => '10',
            'warna_barang' => 'Black, Total Orange/Clear, Emerald/White',
            'detail_barang' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec."',
        ],[
            'id_barang' => '4',
            'nama_barang' => 'Air Jordan 4 Crimson',
            'gambar' => 'crimson'.'.jpg',
            'harga_barang' => '2779000',
            'stok_barang' => '10',
            'warna_barang' => '1 Colour',
            'detail_barang' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec."',
        ],[
            'id_barang' => '5',
            'nama_barang' => 'Nike Court Vision Low',
            'gambar' => 'vision'.'.jpg',
            'harga_barang' => '1029000',
            'stok_barang' => '10',
            'warna_barang' => '1 Colour',
            'detail_barang' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec."',
        ],[
            'id_barang' => '6',
            'nama_barang' => 'Nike Air Max Pre-Day',
            'gambar' => 'preday'.'.jpg',
            'harga_barang' => '1979000',
            'stok_barang' => '10',
            'warna_barang' => '2 Colours',
            'detail_barang' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec."',
        ],[
            'id_barang' => '7',
            'nama_barang' => 'Nike Air Max 90',
            'gambar' => '90'.'.jpg',
            'harga_barang' => '999000',
            'stok_barang' => '10',
            'warna_barang' => '1 Colour',
            'detail_barang' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec."',
        ],[
            'id_barang' => '8',
            'nama_barang' => 'Nike Victori One',
            'gambar' => 'victori'.'.jpg',
            'harga_barang' => '449000',
            'stok_barang' => '10',
            'warna_barang' => '1 Colour',
            'detail_barang' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec."',
        ],[
            'id_barang' => '9',
            'nama_barang' => 'Nike SB Ishod Wair',
            'gambar' => 'ishod'.'.jpg',
            'harga_barang' => '1429000',
            'stok_barang' => '10',
            'warna_barang' => '2 Colours',
            'detail_barang' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec."',
        ],[
            'id_barang' => '10',
            'nama_barang' => 'Kyrie Infinity EP',
            'gambar' => 'infinity'.'.jpg',
            'harga_barang' => '1979000',
            'stok_barang' => '10',
            'warna_barang' => '3 Colours',
            'detail_barang' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec."',
        ],[
            'id_barang' => '11',
            'nama_barang' => 'LeBron 19',
            'gambar' => 'lebron'.'.jpg',
            'harga_barang' => '2999000',
            'stok_barang' => '10',
            'warna_barang' => '1 Colour',
            'detail_barang' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec."',
        ],[
            'id_barang' => '12',
            'nama_barang' => 'NikeCourt React Vapor NXT',
            'gambar' => 'vapor'.'.jpg',
            'harga_barang' => '2389000',
            'stok_barang' => '10',
            'warna_barang' => '1 Colour',
            'detail_barang' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec."',
        ]
        ]);
    }
}
