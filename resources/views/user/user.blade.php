<x-app-layout>
    @extends('template.app')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h2>user</h2>
            <div class="container-fluid">
                <div class="row mb-2">

                    {{-- @php
                    $i=1;
                    @endphp --}}

                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>user</th>
                                <th>username</th>
                                <th>email</th>
                                <th>password</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-primary">
                                {{-- @foreach ($kategori as $kat) --}}
                                @foreach ($user as $item)
                                <td>{{ $loop->iteration }}.</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ $item->password }}</td>
                                {{-- <td> --}}
                                    {{-- <a class="btn btn-success" href={{ url('/user/'.$item->id.'/edit') }}>
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a> --}}
                                    {{-- @csrf --}}
                                    {{-- @method('DELETE') --}}
                                    {{-- <a class="btn btn-danger" href={{ url('/user/'.$item->id.'/delete') }}>
                                        <i class="fas fa-eraser"></i>
                                        Delete
                                    </a>
                                </td> --}}
                            </tr>
                            {{-- @php
                            // $i++;
                            @endphp --}}
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

</x-app-layout>
