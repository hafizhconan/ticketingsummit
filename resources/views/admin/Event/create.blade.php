@extends('admin.layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
							<div class="table-responsive">
                            <center>
<h4>CREATE</h4></center>
{!! Form::open(['route'=>'admin.Event.store','method'=>'POST','enctype'=>'multipart/form-data'])  !!}
    <div class="col-md-10 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('nama','Nama Acara') !!}
        {!! Form::text('nama', null, array('class' =>'form-control','placeholder' => 'Masukkan Nama Acara')) !!}
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('logo','Logo') !!}
        <input type="file" name="logo" id="logo" class="form-control">
        </div>
    </div>
    <div class="col-md-offset-1 col-md-5">
        <div class="form-group">
        {!! Form::label('pemateri','Pemateri') !!}
        {!! Form::text('pemateri', null, array('class' =>'form-control','placeholder' => 'Masukkan Pemateri')) !!}
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
        {!! Form::text('jumlah', null, array('class' =>'form-control','placeholder' => 'Masukkan Jumlah Kuota')) !!}
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
        {!! Form::label('harga','Harga') !!}
        {!! Form::text('harga', null, array('class' =>'form-control','placeholder' => 'Masukkan Harga')) !!}
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('lokasi','Lokasi') !!}
        {!! Form::text('lokasi', null, array('class' =>'form-control','placeholder' => 'Masukkan Lokasi')) !!}
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="form-group">
        {!! Form::label('keterangan','Keterangan') !!}
        {!! Form::text('keterangan', null, array('class' =>'form-control','placeholder' => 'Masukkan Keterangan')) !!}
        </div>
    </div>
        <div class="col-md-6 col-md-offset-1">
            <div class="form-group">
           {!! Form::submit('Simpan', array('class' => 'btn btn-primary')) !!}
            </div>
        </div>
{!! Form::close() !!}
@endsection
</center>
</div></div></div></div></div>