<x-app-layout>
    @extends('template.app')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h2>Barang</h2>
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <h4>Data barang</h4> --}}
                        <a class="btn btn-primary" href={{ url('barang/create') }}>
                            <i class="fas fa-plus"></i>
                            Tambah
                        </a>
                    </div>
                    @php
                    $i=1;
                    @endphp

                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Barang</th>
                                <th>stok</th>
                                <th>kategori</th>
                                <th>harga</th>
                                <th>keterangan</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $item)
                            <tr class="table-primary">
                                {{-- @foreach ($kategori as $kat) --}}
                                <td>{{ $i }}.</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->stok }}</td>
                                <td>{{ $item->kategori->nama_kategori}}</td>
                                <td>Rp. {{ $item->harga_barang }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>
                                    <a class="btn btn-success" href={{ url('/barang/'.$item->id_barang.'/edit') }}>
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-danger" href={{ url('/barang/'.$item->id_barang.'/delete') }}>
                                        <i class="fas fa-eraser"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            @php
                            $i++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>


                </tbody>
                </table>
            </div>


            </div>
            </div>
            </div>
            </div>
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- isisisisisisisi --}}

</x-app-layout>
