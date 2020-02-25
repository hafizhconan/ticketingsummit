@extends('admin.layouts.app')

@section('content')

   

    <div class="container">

        <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">

							<table class="table borderless">

                            <center>

<h4>DETAIL</h4></center>
        <tr>

        <td>{{Form::label('acara', 'Acara')}}</td>

        <td>:</td>

        <td>
            <label class="label label-success">{{ $acara->nama }}</label>
        </td>

        </tr>

        <tr>

        <td>{{Form::label('nama', 'Nama Lengkap')}}</td>

        <td>:</td>

        <td>{{$buyer->nama}}</td>

        </tr>

        <tr>

        <td>{{Form::label('from', 'NIM / No.Identitas')}}</td>

        <td>:</td>

        <td>{{$buyer->from}}</td>

        </tr>

        <tr>

        <td>{{Form::label('no_hp', 'NO HP')}}</td>

        <td>:</td>

        <td>{{$buyer->no_hp}}</td>

        </tr>

        <tr>

        <td>{{Form::label('email', 'Email')}}</td>

        <td>:</td>

        <td>{{$buyer->email}}</td>

        </tr>

        <tr>

        <td>{{Form::label('tgl_daftar', 'Tgl Daftar')}}</td>

        <td>:</td>

        <td>{{$date}}</td>

        </tr>

        <tr>

        <td>{{Form::label('tgl_daftar', 'Tgl Dateline Pembayaran')}}</td>

        <td>:</td>

        <td>{{$dateline}}</td>

        </tr>

        <tr>

        <td>{{Form::label('username', 'Registered By')}}</td>

        <td>:</td>

        <td>{{$user->name}}</td>

        </tr>

        <tr>

        <td>{{Form::label('status1', 'Absensi 1')}}</td>

        <td>:</td>

        <td>

        <?php

            if($ticket->Absensi_1 == 1){

                echo "Hadir";

            }else{

                echo "Belum Hadir";

            }

          ?></td>

        </tr>

        <tr>

        <td>{{Form::label('status2', 'Absensi 2')}}</td>

        <td>:</td>

        <td>

        <?php

            if($ticket->Absensi_2 == 1){

                echo "Hadir";

            }else{

                echo "Belum Hadir";

            }

          ?></td>

        </tr>

        <tr>

        <td>{{Form::label('acc', 'Status Tiket')}}</td>

        <td>:</td>

        <td>

        <?php

            if($createdata->status_pembayaran == 1){

                echo "Lunas";

            }else{

                echo "Belum Lunas";

            }

          ?></td>

        </tr>

        @foreach($bukti as $buktis)

        <tr>

        <td>{{Form::label('nama_pengirim', 'Nama Rekening Pengirim')}}</td>

        <td>:</td>

        <td>{{$buktis->nama_pengirim}}</td>

        </tr>

        <tr>

        <td>{{Form::label('bank_pengirim', 'Bank Rekening Pengirim')}}</td>

        <td>:</td>

        <td>{{$buktis->bank_pengirim}}</td>

        </tr>

        <tr>

        <td>{{Form::label('bank_pengirim', 'Bukti Pembayaran')}}</td>

        <td>:</td>

        <?php

         $gambar = $buktis->bukti;

        ?>

        <td><img class="img" width="300px" src="/uploads/{{$buktis->bukti}}" alt="" /></td>

        </tr>

        @endforeach

        <tr>

        <td>{{Form::label('contentQR', 'QR')}}</td>

        <td>:</td>

        <td><?php
                echo QrCode::size(200)->generate($ticket->Barcode);
        ?></td>

        </tr>

    <center>

    <tr><td><a href="{{ route('admin.createdata.index') }}" button type="button" class="btn btn-warning">Back</a>

    </tr>

    </center></table>

@endsection

    </div></div></div></div>