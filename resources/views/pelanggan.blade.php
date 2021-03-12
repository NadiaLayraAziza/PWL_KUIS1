@extends('layouts.app')
@section('content')
    <div class="bg-light text-white" id="family">
            <br><br>
            <span><h1 align="center">Tabel Pelanggan</h1></span>
            <br><br>
            <table class="table table-bordered table-striped table-hover text-center">
                <tr>
                    <th>No.</th><th>Id Pelanggan</th><th>Nama</th><th>Alamat</th><th>Nomor HP</th>
                </tr>
                @foreach ($pelanggan as $item)
                    <tr>
                        <td>{{$item->id}}</td><td>{{$item->id_pelanggan}}</td><td>{{$item->nama}}</td><td>{{$item->alamat}}</td><td>{{$item->nomor_hp}}</td>
                    </tr>
                @endforeach
            </table>
            <div class="row">
                <div class="col-12">
                    {{$pelanggan->links('paginate')}}
                </div>
            </div>
    </div>
@endsection
