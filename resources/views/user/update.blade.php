@extends('template.app')
@section('title')
user siapa
@section('judul')
Edit user
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
                        <h3 class="card-title">Data user</h3>
                        {{-- <span> --}}
                        {{-- </span> --}}
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{ route('user.update', $user->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('user.index') }}" class="btn btn-danger">Cancel</a>
                            <div class="form-group row">
                                <label for="InputName" class="col-sm-6 col-form-label">Nama user</label>
                                <div class="col-sm-10"></div>
                                <input type="text" name="name" value={{ $user->name }} class="form-control"
                                    id="InputNama" placeholder="" required>
                            </div>
                            <div class="form-group row">
                                <label for="Inputusername" class="col-sm-2 col-form-label">username</label>
                                <div class="col-sm-10"></div>
                                <input type="text" name="username" value={{ $user->username }} class="form-control"
                                    id="Inputusername" placeholder="" required>
                            </div>
                            {{-- <div class="form-group row">
                  <label for="Inputstok" class="col-sm-2 col-form-label">stok</label>
                  <div class="col-sm-10"></div>
                    <input type="text" name="stok" value={{ $user->stok }} class="form-control" id="Inputstok"
                            placeholder="" required>
                        </div> --}}
                        {{-- <div class="form-group row">
                  <label for="Inputid_kategori" class="col-sm-2 col-form-label">kategori</label>
                  <div class="col-sm-10"></div>
                    <input type="text" name="id_kategori" class="form-control" id="Inputid_kategori" placeholder="" required>
                </div> --}}
                        <div class="form-group row">
                            <label for="Inputemail" class="col-sm-2 col-form-label">email</label>
                            <div class="col-sm-10"></div>
                            <input type="text" name="email" value={{ $user->email }} class="form-control"
                                id="Inputketerangan" placeholder="" required>
                        </div>
                        <div class="form-group row">
                            <label for="inputid" class="col-sm-2 col-form-label">level</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="id" id="inputid" required>
                                    @foreach ( $user ->item )
                                    <option value={{ $item->id }}>{{ $item->level }}</option>
                                    @endforeach
                                    {{-- <option value="">Perempuan</option>
                        </select> --}}
                            </div>
                        </div>
                        {{-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label form-control" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>--}}


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