@extends('admin.layouts.app')
@section('content')

    <div class="container">
    <!-- Error Catch -->
		<div class="col-md-12">
			<center><h4>Belum Hadir</h4></center>
			<a href="{{route('admin.Event.create')}}"><button class="btn btn-success"><span class="fa fa-plus"></span> Add Event</button></a>
			<div class="panel panel-default">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th valign="middle">No</th>
								<th valign="middle">Nama Acara</th>
								<th valign="middle">Tanggal</th>
								<th valign="middle">Lokasi</th>
								<th valign="middle">Kuota</th>
								<th valign="middle">Sisa Kuota</th>
								<th valign="middle">Total Tiket</th>
								<th valign="middle">Total Acc</th>
								<th valign="middle">Total Belum Acc</th>
								<th valign="middle">Harga</th>
								<th valign="middle">Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($acara as $index => $a)
							<tr>
								<td>{{$index+1}}</td>
								<td>{{$a->nama}}</td>
								<td>{{$a->tgl}}</td>
								<td>{{$a->lokasi}}</td>
								<td>{{$a->jumlah}}</td>
								<?php
								$transaction_total = App\transaction::where('transactions.deleted', '=', null)->where('transactions.jenis_tiket', '=', $a->id)->count();
								$transaction_acc = App\transaction::where('transactions.deleted', '=', null)->where('transactions.status_pembayaran', '=', 1)->where('transactions.jenis_tiket', '=', $a->id)->count();
								$transaction_not_acc = App\transaction::where('transactions.deleted', '=', null)->where('transactions.status_pembayaran', '!=', 1)->where('transactions.jenis_tiket', '=', $a->id)->count();
								?>
								<td>{{$a->jumlah-$transaction_total}}</td>
								<td>{{ $transaction_total}}</td>
								<td>{{ $transaction_acc}}</td>
								<td>{{ $transaction_not_acc}}</td>
								<td>{{$a->harga}}</td>
								<td>
									<form method="POST" action="{{ route('admin.createdata.destroy', $a->id) }}" accept-charset="UTF-8">
										<input name="_method" type="hidden" value="DELETE">
										<input name="_token" type="hidden" value="{{ csrf_token() }}">
										<a href="{{ route('admin.Event.edit', $a->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
										<a href="{{ route('admin.Event.show', $a->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
										@if($a->status == 'enable')
											<a href="{{route('admin.event.status', $a->id)}}" type="button" class="btn btn-danger">Disable Event</a>
										@else
											<a href="{{route('admin.event.status', $a->id)}}" type="button" class="btn btn-success">Enable Event</a>
										@endif
									</form>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
