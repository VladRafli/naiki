<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    public function item()
    {
        return $this->belongsTo('App\Models\Item', 'id_barang', 'id');
    }
    public function pesanan()
    {
        return $this->belongsTo('App\Models\Pesanan', 'user_id', 'id');
    }
    use HasFactory;
}
