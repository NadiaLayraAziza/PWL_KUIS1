@extends('layouts.app')
@section('content')
    <div class="bg-light text-white" id="family">
            <br><br>
            <span><h1 align="center">TABEL PEGAWAI</h1></span>
            <br><br>
            <table class="table table-bordered table-striped table-hover text-center">
                <tr>
                    <th>No.</th>
                    <th>Foto</th>
                    <th>ID Pegawai</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Divisi</th>
                </tr>
                @foreach ($pegawai as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td><img src="{{$item->foto}}"></td>
                        <td>{{$item->id_pegawai}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->telepon}}</td>
                        <td>{{$item->divisi}}</td>
                    </tr>
                @endforeach
            </table>
            <div class="row">
                <div class="col-12">
                    {{$pegawai->links('paginate')}}
                </div>
            </div>
    </div>
@endsection
