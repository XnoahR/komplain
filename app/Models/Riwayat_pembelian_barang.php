<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_pembelian_barang extends Model
{
    use HasFactory;
    protected $table = 'riwayat_pembelian_barang';
    protected $primarykey = 'id_riwayat';
}
