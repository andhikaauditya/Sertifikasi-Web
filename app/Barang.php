<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function pesanan_datail() 
    {
     return $this->hasMany('App\PesananDetail','barang_id', 'id');
    }
}
