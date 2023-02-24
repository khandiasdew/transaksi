<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailTransaksi extends Model
{
    use HasFactory;
    protected $primarykey = 'id_detailtransaksi';
    protected $fillable =[
        'id_transaksi',
        'id_barang',
        'quantity',
        'status'
    ];
}
