<?php

namespace App\Http\Controllers;


use App\Models\Kategori as ModelsKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;



class kategori extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = ModelsKategori::all();
        return view('kategori.index' ,compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('kategori.tambahkategori' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = ModelsKategori::create($request->all());
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = ModelsKategori::all();
        return view('kategori.update' , compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $kategori = ModelsKategori::where('id',$id)->get()->first();
        return view('kategori.update', compact('kategori'));
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
        // $barang->update($request->all());

        // $kategori = DB::table('kategoris')
        // ->where('id_kategori', $id)
        // ->update('kategoris.nama_kategori');
        // return $kategori;
        // $kategori = ModelsKategori::where('id_kategori',$id_kategori)->first();
        // $kategori->update($request->all());

        // $kategori = ModelsKategori::where('id_kategori',$id);
        // $kategori->nama_kategori->$request->input('nama_kategori');
        // $kategori->dd();

        // $kategori = ModelsKategori::where('id_kategori',$id_kategori)->first();
        $kategori = ModelsKategori::find($id);
        // $kategori->update();
        // return $request;
        $kategori->update($request->all());

        return redirect()->route('kategori.index');
        // return ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $cls =ModelsKategori::find($id)
    }
    public function delete($id){
        $barang = ModelsKategori::find($id);
        $barang->delete();

        // return redirect()->route('barang.index');
        return redirect()->route('kategori.index');
    }
}
