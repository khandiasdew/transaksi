<?php

namespace App\Http\Controllers;

use App\Models\Barang as ModelsBarang;
use App\Models\Kategori as kat;
use App\Kategori;
use App\Models\Kategori as ModelsKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;
use Illuminate\Support\Facades\DB as FacadesDB;

class barang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Modelsbarang::all();
        return view('barang.barang' ,compact('barang'));

        // $barang = DB::table('barangs')
        // ->join('kategoris', 'kategoris.id', 'barangs.id_barang')
        // ->get();
        // return view('barang.barang')->with('barang', $barang);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kat::all();
        return view('barang.tambahBarang', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // $barang = new  arang::create($request->all());

    $barang = Modelsbarang::create($request->all());
    return redirect()->route('barang.index');
    // if ($barang->save()) {
    //     return redirect()->route('barang.index');
    // } else {
    //     return redirect()->back();
    // }
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Modelsbarang::all();
        return view('barang.update', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = kat::all();
        $barang = Modelsbarang::where('id_barang',$id)->get()->first();
        return view('barang.update', compact('barang','kategori'));
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
        $barang = Modelsbarang::find($id);
        $barang->update($request->all());
        $barang->save();
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete($id){
        $barang = ModelsBarang::find($id);
        $barang->delete();
        return redirect()->route('barang.index');
    }
}
