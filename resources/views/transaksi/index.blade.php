<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
Transaksiii
            @extends('template.app')
<section class="section">
    <div class="section-header">
     <h1>Order </h1>
    </div>
    <div class="row">
        @if ($message = Session::get('pesan'))
                 <div class="alert alert-primary">
                   <button class="close">
                     <span>&times;</span>
                   </button>
                   <strong>{{$message}}</strong>
                 </div>
             @endif
        <div class="col-12 col-md-4">
            <div class="card card-primary">
         <form action="{{route('transaksi.store')}}" method="post">
            @csrf
           @method('POST')
           <div class="card-header">
             <h4>Pilih Barang</h4>
           </div>
           <div class="card-body">
             <label for="">Nama Barang</label>
              <select name="barang_id" class="form-control">
               <option value="0">Pilih Barang</option>
               @foreach ($barang as $item)
                   <option value="{{$item->id_barang}}">{{$item->nama_barang}} - Rp.{{$item->harga_barang}}</option>
               @endforeach
              </select>
             {{-- <label for="">Nama member</label>
              <select name="id_member" class="form-control">
               <option value="0">Pilih member</option>
               @foreach ($member as $mem)
                   <option value="{{$mem->id_member}}">{{$mem->nama_member}}</option>
               @endforeach --}}
              </select>
              <div class="invalid-feedback">
               404
              </div>
           </div>
           <div class="card-footer d-flex justify-content-beetwen">
             <div class="row">
               <div class="col-11">
                 <input type="number" class="form-control" name="jumlah" required>
               </div>
             </div>
             <button class="btn btn-primary">Tambah</button>
           </div>
         </form>
        </div>
     </div>
     <div class="col-12 col-md-8">
       <div class="card card-primary">
         <div class="card-header">
           <h4>CeckOut</h4>
         </div>

         <div class="card-body">
           <div class="table-responsive">
             <table class="table table-striped">
               <thead>
                 <tr>
                   <th>No</th>
                   <th>Nama Barang</th>
                   <th>Nama Member</th>
                   <th>waktu</th>
                   <th>Jumlah</th>
                   <th colspan="2">Total Harga</th>

                 </tr>
               </thead>
               <tbody>
                 @foreach ($transaksi as $trans)
                 <tr>
                   <td>{{ $loop->iteration }}</td>
                   <td>{{ $trans->barang->nama_barang}}</td>
                   <td>{{ $trans->member}}</td>
                   <td>{{ $trans->created_at }}</td>
                   <td>{{ $trans->jumlah }}</td>
                   <td>{{ $trans->total_bayar }}</td>
                   <td>
                     <div class="d-flex flex-row">
                            @csrf
                        {{-- @method(DELETE) --}}
                        <a class="btn btn-danger" href={{ url('/transaksi/'.$item->id.'/delete') }}>
                            {{-- <i class="fas fa-eraser" onclick="retur    n confirm('Yakin kidzzz?')"></i> --}}
                            Delete
                        </a>
                        @endforeach
                       </div>
                   </td>
                 </tr>
               </tbody>
             </table>
           </div>
           <hr>
           <div class="text-right">
              @if ($transaksi)
              <p class="h5">
               Total Harga : Rp {{$transaksi->sum('total_bayar')}}
             </p>
              @endif
             <hr>
           </div>
           <div class="card-footer text-right">
            {{-- total --}}
            {{-- <a href="" class="btn btn-primary">
                <i class="fas fa-shopping-cart"></i>checkout
            </a> --}}
           </div>
         </div>
       </div>
     </div>
    </div>
 </section>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            </div>
        </div>
    </div>
</x-app-layout>


