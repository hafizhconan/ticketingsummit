@extends('admin.layouts.app')
@section('content')
   
    <div class="container">
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
							<div class="table-responsive">
                            <center>
<h4>EDIT</h4></center>
{!! Form::model($acara, ['route'=>['admin.Event.update', $acara->id], 'method'=> 'PATCH','enctype'=>'multipart/form-data'])  !!}
    <div class="col-md-10 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('nama','Nama Acara') !!}
        {!! Form::text('nama', $acara->nama, array('class' =>'form-control','placeholder' => 'Masukkan Nama Acara')) !!}
        </div>
    </div>
    <img src="{{ asset($acara->logo)}}" alt="" width="100%">
    <div class="col-md-10 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('logo','Logo') !!}
        <input type="file" name="logo" id="logo" class="form-control">
        </div>
    </div>
    <div class="col-md-offset-1 col-md-5">
        <div class="form-group">
        {!! Form::label('pemateri','Pemateri') !!}
        {!! Form::text('pemateri', $acara->pemateri, array('class' =>'form-control','placeholder' => 'Masukkan Pemateri')) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
        {!! Form::label('tgl','Tanggal Acara') !!}
        {!! Form::date('tgl', \Carbon\Carbon::now(), array('class' =>'form-control','placeholder' => 'Masukkan Tanggal Daftar')) !!}
       </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
        {!! Form::label('time','Waktu Mulai') !!}
        {!! Form::time('time', \Carbon\Carbon::now(), array('class' =>'form-control','placeholder' => 'Masukkan Tanggal Daftar')) !!}
       </div>
    </div>
    <div class="col-md-offset-1 col-md-5">
        <div class="form-group">
        {!! Form::label('jumlah','Jumlah') !!}
        {!! Form::text('jumlah', $acara->jumlah, array('class' =>'form-control','placeholder' => 'Masukkan Jumlah Kuota')) !!}
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
        {!! Form::label('harga','Harga') !!}
        {!! Form::text('harga', $acara->harga, array('class' =>'form-control','placeholder' => 'Masukkan Harga')) !!}
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('lokasi','Lokasi') !!}
        {!! Form::text('lokasi', $acara->lokasi, array('class' =>'form-control','placeholder' => 'Masukkan Lokasi')) !!}
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('keterangan','Keterangan') !!}
        {!! Form::text('keterangan', $acara->keterangan, array('class' =>'form-control','placeholder' => 'Masukkan Keterangan')) !!}
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('header','Header Email') !!}
        {!! Form::text('header', $acara->header, array('class' =>'form-control','placeholder' => 'https://i.imgur.com/linknya.png')) !!}
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('nama_singkat','Nama Singkat') !!}
        {!! Form::text('nama_singkat', $acara->nama_singkat, array('class' =>'form-control','placeholder' => 'Masukkan Nama Singkat Acara')) !!}
        </div>
    </div>
        <div class="col-md-6 col-md-offset-1">
            <div class="form-group">
           {!! Form::submit('Simpan', array('class' => 'btn btn-primary')) !!}
            </div>
        </div>
{!! Form::close() !!}
@endsection
      </div>
    </div></div></div></div>