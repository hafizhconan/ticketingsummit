@extends('admin.layouts.app')
@section('content')

    <div class="container">
    <!-- Error Catch -->
	<div>
		<form action="{{route('admin.list.index')}}" method="get">
		<select name="acara" id="" class="form-control" onchange="this.form.submit();">
			@foreach ($acara as $a)
				@if($a->id == $id)
					<option value="{{Crypt::encryptString($a->id)}}" selected>{{$a->nama}}</option>
				@else
					<option value="{{Crypt::encryptString($a->id)}}">{{$a->nama}}</option>
				@endif
			@endforeach
		</select>
		</form>
	</div>
	<br>
    <div class="col-md-6">
                <center>
            <h4>Belum Hadir</h4>
            </center>
            <div class="panel panel-default">

							<div class="table-responsive">

<table class="table table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIM</th>
		</tr>
	</thead>
	<tbody>
	@foreach($belum_hadir as $index => $belum_hadirs)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$belum_hadirs->nama}}</td>
			<td>{{$belum_hadirs->from}}</td>
		</tr>
	@endforeach
	</tbody>
</table>
</div></div></div>
<div class="col-md-6">
<center>
            <h4>Hadir</h4>
            </center>
            <div class="panel panel-default">
							<div class="table-responsive">

<table class="table table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIM</th>
		</tr>
	</thead>
	<tbody>
	@foreach($hadir as $index => $hadirs)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$hadirs->nama}}</td>
			<td>{{$hadirs->from}}</td>
		</tr>
	@endforeach
	</tbody>
</table><center>
</center>
</div></div></div>
</div></div>
@endsection
