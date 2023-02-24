@extends('template.app')
@section('title')
Barang siapa
@section('judul')
Tambah kategori
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
                        <h3 class="card-title">Data kategori</h3>
                    </div>
                    <form class="form-horizontal" action="{{ route('member.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Inputmember" class="col-sm-2 col-form-label">member</label>
                                <div class="col-sm-10"></div>
                                <input type="text" name="nama_member" class="form-control" id="Inputmember"
                                    placeholder="" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('member.index') }}" class="btn btn-danger">Cancel</a>
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
