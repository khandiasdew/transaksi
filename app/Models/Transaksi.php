<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public function barang(){
        return $this->hasOne(Barang::class, 'id_barang', 'barang_id');
    }
    public function member(){
        return $this->belongsTo(Member::class, 'id_member', 'member_id');
    }
    protected $primarykey = 'id';
    // protected $fillable = [
    //     'id_barang',
    //     'quantity',
    //     'status'
    // ];
}
