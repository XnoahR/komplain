<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_pembelian_barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'amount',
        'brand',
        'warranty',
        'buy_date',
        'struct'
    ];
    protected $table = 'riwayat_pembelian_barang';
    protected $primarykey = 'id';
}
