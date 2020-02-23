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
								<th>No</th>
								<th>Nama Acara</th>
								<th>Tanggal</th>
								<th>Lokasi</th>
								<th>Jumlah</th>
								<th>Harga</th>
								<th>Action</th>
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
								<td>{{$a->harga}}</td>
								<td>
									<form method="POST" action="{{ route('admin.createdata.destroy', $a->id) }}" accept-charset="UTF-8">
										<input name="_method" type="hidden" value="DELETE">
										<input name="_token" type="hidden" value="{{ csrf_token() }}">
										<a href="{{ route('admin.Event.edit', $a->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
										<a href="{{ route('admin.Event.show', $a->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
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
