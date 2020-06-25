<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = ['id', 'nama_product', 'ket', 'harga', 'jumlah'];
}
