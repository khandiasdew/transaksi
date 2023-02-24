<?php

namespace App\Models;

use App\Http\Controllers\barang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    public function barang(){
        return $this->hasOne(barang::class, 'id_barang');
    }
    protected $table ="kategoris";
    protected $primarykey = 'id';
    protected $fillable =[
     'id',
     'nama_kategori'
    ];

}
