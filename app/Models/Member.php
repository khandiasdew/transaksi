<?php

namespace App\Models;

use App\Http\Controllers\MemberController;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    // public function member(){

    //     return $this->belongsTo('App\Models\transaksi');
    // }
    public function transaksi(){
        return $this->hasOne(transaksi::class, "id_member","member_id");
    }

    protected $table = 'member';
    protected  $primaryKey= 'id_member';

    protected $fillable =[
        'nama_member'
    ];
}
