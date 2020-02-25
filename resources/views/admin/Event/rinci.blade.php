@extends('admin.layouts.app')
@section('content')
   
    <div class="container">
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
							<table class="table borderless">
                            <center>
<h4>DETAIL</h4></center>
        <img src="{{ asset($acara->logo)}}" alt="" width="100%">
        <tr>
        <td>{{Form::label('nama', 'Nama Acara')}}</td>
        <td>:</td>
        <td>{{$acara->nama}}</td>
        </tr>
        <tr>
        <td>{{Form::label('tgl', 'Tanggal')}}</td>
        <td>:</td>
        <td>{{$acara->tgl}}</td>
        </tr>
        <tr>
        <td>{{Form::label('lokasi', 'Lokasi')}}</td>
        <td>:</td>
        <td>{{$acara->lokasi}}</td>
        </tr>
        <tr>
        <td>{{Form::label('pemateri', 'Pemateri')}}</td>
        <td>:</td>
        <td>{{$acara->pemateri}}</td>
        </tr>
        <tr>
        <td>{{Form::label('jumlah', 'Jumlah')}}</td>
        <td>:</td>
        <td>{{$acara->jumlah}}</td>
        </tr>
        <tr>
        <td>{{Form::label('harga', 'Harga')}}</td>
        <td>:</td>
        <td>{{$acara->harga}}</td>
        </tr>
        <tr>
        <td>{{Form::label('keterangan', 'keterangan')}}</td>
        <td>:</td>
        <td>{{$acara->keterangan}}</td>
        </tr>
    <center>
    <tr><td><a href="{{ route('admin.Event.index') }}" button type="button" class="btn btn-warning">Back</a></td>
    </tr>
    </center></table>
@endsection
    </div></div></div></div>