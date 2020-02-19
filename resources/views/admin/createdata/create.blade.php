@extends('admin.layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        @if (session('status')=="Masukan Data yang sesuai!")
        <div class="alert alert-danger fade in">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error!</strong> {{ session('status') }}
        </div>
        @endif
            <div class="panel panel-default">
							<div class="table-responsive">
                            <center>
<h4>CREATE</h4></center>
{!! Form::open(['route'=>'admin.createdata.store','method'=>'POST'])  !!}
    <div class="col-md-10 col-md-offset-1">
        <div class="form-group @if ($errors->has('nama')) has-error @endif">
        {!! Form::label('nama','Nama Lengkap') !!}
        {!! Form::text('nama', null, array('class' =>'form-control','placeholder' => 'Masukkan Nama Lengkap')) !!}
        @if ($errors->has('nama')) <h6 class="help-block" style="color:#000!important;">{{ $errors->first('nama') }}</h6> @endif
        </div>
    </div>
    <div class="col-md-offset-1 col-md-5">
        <div class="form-group @if ($errors->has('from')) has-error @endif">
        {!! Form::label('from','NIM / No. Identitas') !!}
        {!! Form::text('from', null, array('class' =>'form-control','placeholder' => 'Masukkan NIM / No. Identitas')) !!}
        @if ($errors->has('from')) <h6 class="help-block" style="color:#000!important;">{{ $errors->first('from') }}</h6> @endif
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group @if ($errors->has('no_hp')) has-error @endif">
        {!! Form::label('no_hp','NO. HP') !!}
        {!! Form::text('no_hp', null, array('class' =>'form-control','placeholder' => 'Masukkan NO. HP')) !!}
        @if ($errors->has('no_hp')) <h6 class="help-block" style="color:#000!important;">{{ $errors->first('no_hp') }}</h6> @endif
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="form-group @if ($errors->has('email')) has-error @endif">
        {!! Form::label('email','Email') !!}
        {!! Form::text('email', null, array('class' =>'form-control','placeholder' => 'Masukkan Email')) !!}
        @if ($errors->has('email')) <h6 class="help-block" style="color:#000!important;">{{ $errors->first('email') }}</h6> @endif
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