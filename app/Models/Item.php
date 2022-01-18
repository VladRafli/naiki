<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function pesanan_detail()
    {
        return $this->belongsTo('App\PesananDetail', 'id_barang', 'id');
    }
    use HasFactory;
}
