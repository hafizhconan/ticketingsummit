@extends('admin.layouts.app')

@section('content')



    <div class="container">

    <!-- Error Catch -->

        @if (session('status')=="Data tidak ditemukan!")

        <div class="alert alert-danger fade in">

            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

            <strong>Error!</strong> {{ session('status') }}

        </div>

        @elseif (session('status')=="Data berhasil dihapus!")

        <div class="alert alert-success fade in">

            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

            <strong>Success!</strong> {{ session('status') }}

        </div>

        @elseif (session('status')=="Data berhasil diubah!")

        <div class="alert alert-success fade in">

            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

            <strong>Success!</strong> {{ session('status') }}

        </div>

        @elseif (session('status')=="Data berhasil dibuat!")

        <div class="alert alert-success fade in">

            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

            <strong>Success!</strong> {{ session('status') }}

        </div>

        @elseif (session('status')=="Tiket Berhasil di ACC!")

        <div class="alert alert-success fade in">

            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

            <strong>Success!</strong> {{ session('status') }}

        </div>

        @endif

                {!! Form::open(['method'=>'get']) !!}

        <div class="col-md-12">

            <div class="col-md-5 form-group" style="float:right;">

                <div class="input-group">

                    <input class="form-control" id="search"

                           value="{{ request('search') }}"

                           placeholder="Search by Name or No Hp or Email" name="search"

                           type="text" id="search"/>

                    <div class="input-group-btn">

                        <button type="submit" class="btn btn-warning"

                        >

                            Search

                        </button>

                    </div>

                    

                </div>

            </div>

            <div class="col-md-1 form-group">

                    <a href="{{ route('admin.createdata.index') }}" button type="button" class="btn btn-info">Clear Search</a>

                    </div>

            

        {!! Form::close() !!}

        </div>

        <div class="col-md-12">

        <center>

            <div class="col-md-2 col-md-offset-3">

                <h5>Jumlah Data MM Tiket : {{$transaction_total}}</h5>

            </div>

            <div class="col-md-2">

                <h5>Jumlah Tiket MM Di ACC : {{$transaction_acc}}</h5>

            </div>

            <div class="col-md-2">

                <h5>Jumlah Tiket MM Belum ACC : {{$transaction_not_acc}}</h5>

            </div>

        </center>

        </div>

    <div class="col-md-12">

            <div class="panel panel-default">

							<div class="table-responsive">



<table class="table table-striped">

	<thead>

		<tr>

			<th>@sortablelink('id', 'ID')</th>

            <th>@sortablelink('acara', 'Acara')</th>

			<th>@sortablelink('nama', 'Nama')</th>

			<th>@sortablelink('status', 'Status')</th>

			<th>@sortablelink('no_hp', 'NO HP')</th>

			<th>@sortablelink('email', 'Email')</th>

			<th>Action</th>

		</tr>

	</thead>

	<tbody>

    

	@foreach($createdata as $createdatas)

		<tr>

			<td>{{$createdatas->id}}</td>

            <td><?php

                if($createdatas->jenis_tiket == 2){
                    echo '<label class="label label-success">Data Debunked Day</label>';
                }else if($createdatas->jenis_tiket == 4){
                    echo '<label class="label label-primary">MM</label>';
                }else{
                    echo '<label class="label label-danger">Error</label>';
                }
            ?></td>

			<td>{{$createdatas->nama}}</td>

			<td>

            <?php 

            if($createdatas->status_pembayaran == 0){

             echo '<label class="label label-primary">Menunggu Pembayaran</label>';

            }else if($createdatas->status_pembayaran == 1){

              echo '<label class="label label-success">Selesai</label>';

            }else if($createdatas->status_pembayaran == 2){

              echo '<label class="label label-danger">Menunggu Verifikasi Pembayaran</label>';

            }else{

              echo '<label class="label label-default">Unknown</label>';

            }

            ?>         

            </td>

			<td>{{$createdatas->no_hp}}</td>

			<td>{{$createdatas->email}}</td>

			<td>
						@if ($createdatas->status_pembayaran != 1)

			            <a onclick="return confirm('Anda yakin sudah menerima pembayaran tiket ini ?');" href="{{ route('admin.createdata.acc', $createdatas->id) }}" type="submit" button type="button" class="btn btn-danger">ACC Tiket</a>

			            <br>

			            @endif

				<form method="POST" action="{{ route('admin.createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">

	                <input name="_method" type="hidden" value="DELETE">

	                <input name="_token" type="hidden" value="{{ csrf_token() }}">

	              	<a href="{{ route('admin.createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>

	              	<a href="{{ route('admin.createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>

					@if ($createdatas->status_pembayaran != 1)

	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />

	                @endif

	            </form>

			</td>

		</tr>

	@endforeach

	</tbody>

</table>

<center>{{ $createdata->appends(['sort' => $sort,'direction' => $direction])->links() }}</center>

<center></div></div>

<a href="{{ route('admin.createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Tiket Baru</a></button>

</center>

</div></div></div>

@endsection

