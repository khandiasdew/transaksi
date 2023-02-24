<x-app-layout>
    @extends('template.app')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h2>member</h2>
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data member</h1>
                        <a class="btn btn-primary" href={{ url('member/create') }}>
                        <i class="fas fa-plus"></i>
                        Tambah
                        </a>
                    </div>
                    <table class="table">

              <thead>
                  <tr>
                    <th>No.</th>
                    <th>member</th>
                    <th>aksi</th>
                  </tr>
                </thead>
                <tbody>
                        @foreach ($member as $kat)
                        @php
                         $i=1;
                        @endphp
                  <tr class="table-info">
                    <td>{{ $loop->iteration }}.</td>
                    <td>{{ $kat->nama_member }}</td>
                    <td center>
                        <a class="btn btn-success" href={{ url('/member/'.$kat->id.'/edit') }}>
                            <i class="fas fa-edit"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger" href={{ url('/member/'.$kat->id.'/delete') }}>
                            <i class="fas fa-eraser"></i>
                            Delete
                        </a>
                  </tr>
                  @endforeach
                  @php
                    //   $i++;
                  @endphp
                </tbody>
              </table>
            </div>
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- isisisisisisisi --}}

</x-app-layout>

@extends('template.app')
@section('title')
Barang siapa
@section('judul')
data
@section('isi')
@section('deskripsi')
titipan



@endsection
@endsection
@endsection
@endsection
@section('footer')
