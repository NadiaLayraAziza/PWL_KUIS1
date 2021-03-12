@extends('layouts.app')
@section('content')
    <div class="bg-light text-white" id="family">
            <br><br>
            <span><h1 align="center">Tabel Barang</h1></span>
            <br><br>
            <table class="table table-bordered table-striped table-hover text-center">
                <tr>
                    <th>No.</th><th>Gambar</th><th>Kode Barang</th><th>Nama Barang</th><th>Stok</th><th>Harga Barang</th>
                </tr>
                @foreach ($barang as $item)
                    <tr>
                        <td>{{$item->id}}</td><td><img src="{{$item->gambar}}"></td><td>{{$item->kode}}</td><td>{{$item->nama_barang}}</td><td>{{$item->stok}}</td><td>{{$item->harga}}</td>
                    </tr>
                @endforeach
            </table>
            <div class="row">
                <div class="col-12">
                    {{$barang->links('paginate')}}
                </div>
            </div>
    </div>
@endsection
