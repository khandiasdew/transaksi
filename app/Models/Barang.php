<?php

namespace App\Models;

use App\Http\Controllers\kategori;
use App\Models\Kategori as ModelsKategori;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public function kategori(){
        return $this->belongsTo(ModelsKategori::class, "id","id");
    }
    protected $table ="barangs";
    protected $primaryKey = 'id_barang';
    protected $fillable = [
        // 'id_barang',
        'nama_barang',
        'harga_barang',
        'stok',
        'id',
        'keterangan'
    ];


}
