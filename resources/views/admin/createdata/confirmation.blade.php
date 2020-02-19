@extends('admin.layouts.app')
@section('content')
   
    <div class="container">
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
							<table class="table borderless">
                            <center>
<h4>CONFIRMATION</h4></center>
        <tr>
        <td>{{Form::label('nama', 'Nama Lengkap')}}</td>
        <td>:</td>
        <td>{{$createdata->nama}}</td>
        </tr>
        <tr>
        <td>{{Form::label('from', 'NIM / No. Identitas')}}</td>
        <td>:</td>
        <td>{{$createdata->from}}</td>
        </tr>
        <tr>
        <td>{{Form::label('no_hp', 'NO HP')}}</td>
        <td>:</td>
        <td>{{$createdata->no_hp}}</td>
        </tr>
        <tr>
        <td>{{Form::label('email', 'Email')}}</td>
        <td>:</td>
        <td>{{$createdata->email}}</td>
        </tr>
        <tr>
        <td>{{Form::label('tgl_daftar', 'Tgl Daftar')}}</td>
        <td>:</td>
        <td>{{$date}}</td>
        </tr>
        <tr>
        <td>{{Form::label('username', 'Registered By')}}</td>
        <td>:</td>
        <td>{{$name->name}}</td>
        </tr>
        </table>
    <center></div>
    <a href="{{ route('admin.createdata.ticket',$createdata->id) }}" button type="button" class="btn btn-block btn-warning">Beli Tiket</a>
    </center>
@endsection
</div></div></div>