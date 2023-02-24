<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Member;
use App\Models\Transaksi as ModelsTransaksi;
use Illuminate\Http\Request;
use Auth;

class transaksi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $barang = Barang::all();
        $member = Member::all();
        $barang = Barang::all();
        $transaksi = ModelsTransaksi::all();
        // $transaksi = ModelsTransaksi::where('id_user', Auth::user()->id_barang)->where('status', '0')->with('barang')->get();
        return view ('transaksi.index' , compact('barang', 'transaksi', 'member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        //
        if($r->barang_id == 0){
            return redirect()->route('transaksi.index')->with('pesan', 'milih barang dulu kidz');
        }
        $check = ModelsTransaksi::where('id', $r->barang_id)->where('status','0')->first();
        // $check = Member::where('id_member', $r->member_id)->first();

        $harga =Barang::where('id_barang', $r->barang_id)->first();
        // $hargacheck =Member::where('id_member', $r->member_id)->first();
        if($check == null){
            $trns = new ModelsTransaksi;
            $trns ->barang_id = $r->barang_id;
            $trns ->jumlah = $r->jumlah;

            // $mem = new Member;
            // $mem ->member_id = $r->member_id;
        }else{
            $trns = ModelsTransaksi::where('barang_id', $r->barang_id)->where('status', '0')->first();
            $trns->barang_id = $r->barang_id;
            $trns->jumlah += $r->jumlah;
            // $mem = Member::where('id_member', $r->member_id)->first();
            // $mem->id_member = $r->member_id;
        }
        $trns ->total_bayar = $harga->harga_barang * $r->jumlah;
        // $trns ->id_user = Auth::user()->id;
        // $trns =Member::create($r->all());
        // $mem->save();
        $trns->save();
        // $mem->save();
        // return $trns;
        // dd($trns);
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $dlt = ModelsTransaksi::find($id);
        // $dlt->delete();
        // return redirect()->route('transaksi.index');
    }
    public function delete($id){
        $transaksi = ModelsTransaksi::find($id);
        return $transaksi;
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }
}
