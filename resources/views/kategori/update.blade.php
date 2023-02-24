@extends('template.app')
@section('title')
Barang siapa
@section('judul')
Edit kategori
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
                        <h3 class="card-title"> Edit Data kategori</h3>
                    </div>
                    <form class="form-horizontal" action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Inputkategori" class="col-sm-2 col-form-label">kategori</label>
                                <div class="col-sm-10"></div>
                                <input type="text" value={{ $kategori->nama_kategori }} name="nama_kategori" class="form-control" id="InputNama"
                                    placeholder="" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('kategori.index') }}" class="btn btn-danger">Cancel</a>
                            <div class="card-footer">
                            </div>
                            <td>
                            </td>
                    </form>
                </div>
            </div>
            @endsection
            @endsection
            @endsection
            @endsection
            @section('footer')
        </div>
    </div>
</section>
