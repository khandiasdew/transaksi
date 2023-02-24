
@extends('template.app')
@section('title')
Barang siapa
@section('judul')
Edit barang
@section('isi')
@section('deskripsi')
{{-- kulak --}}


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Data Barang</h3>
                        {{-- <span> --}}
                            {{-- </span> --}}
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="{{ route('barang.update', $barang->id_barang) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('barang.index') }}" class="btn btn-danger">Cancel</a>
                                <div class="form-group row">
                  <label for="InputNama_barang" class="col-sm-6 col-form-label">Nama Barang</label>
                  <div class="col-sm-10"></div>
                    <input type="text" name="nama_barang" value={{ $barang->nama_barang }} class="form-control" id="InputNama" placeholder="" required>
                </div>
                <div class="form-group row">
                  <label for="Inputharga" class="col-sm-2 col-form-label">harga</label>
                  <div class="col-sm-10"></div>
                    <input type="number" name="harga_barang" value={{ $barang->harga_barang }} class="form-control" id="Inputharga" placeholder="Rp." required>
                </div>
                <div class="form-group row">
                  <label for="Inputstok" class="col-sm-2 col-form-label">stok</label>
                  <div class="col-sm-10"></div>
                    <input type="text" name="stok" value={{ $barang->stok }} class="form-control" id="Inputstok" placeholder="" required>
                </div>
                {{-- <div class="form-group row">
                  <label for="Inputid_kategori" class="col-sm-2 col-form-label">kategori</label>
                  <div class="col-sm-10"></div>
                    <input type="text" name="id_kategori" class="form-control" id="Inputid_kategori" placeholder="" required>
                </div> --}}
                <div class="form-group row">
                  <label for="Inputketerangan" class="col-sm-2 col-form-label">keterangan</label>
                  <div class="col-sm-10"></div>
                    <input type="text" name="keterangan" value={{ $barang->keterangan }} class="form-control" id="Inputketerangan" placeholder="" required>
                </div>
                <div class="form-group row">
                    <label for="inputid" class="col-sm-2 col-form-label">kategori</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="id" id="inputid" required>
                            @foreach ( $kategori as $kat )
                            <option value={{ $kat->id }}>{{ $kat->nama_kategori }}</option>
                            @endforeach
                            </div>
                </div>
            <div class="card-footer">
            </div>
            <td>
                </td>
            </form>
          </div></div>
            @endsection
            @endsection
            @endsection
            @endsection
            @section('footer')
        </div>
    </div>
</section>
