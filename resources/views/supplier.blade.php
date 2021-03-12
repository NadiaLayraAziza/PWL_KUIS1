@extends('layouts.app')
@section('content')
    <div class="bg-light text-white" id="family">
            <br><br>
            <span><h1 align="center">TABEL SUPPLIER</h1></span>
            <br><br>
            <table class="table table-bordered table-striped table-hover text-center">
                <tr>
                    <th>No.</th>
                    <th>Logo Perusahaan</th>
                    <th>Nama Perusahaan</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Persediaan</th>
                </tr>
                @foreach ($supplier as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td><img src="{{$item->logo}}"></td>
                        <td>{{$item->nama_perusahaan}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->telepon}}</td>
                        <td>{{$item->persediaan}}</td>
                    </tr>
                @endforeach
            </table>
            <div class="row">
                <div class="col-12">
                    {{$supplier->links('paginate')}}
                </div>
            </div>
    </div>
@endsection
