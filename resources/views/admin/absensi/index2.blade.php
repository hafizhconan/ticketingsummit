@extends('layouts.app')
@section('content')

    <div class="container">
    <div class="col-md-12">
    <div class="col-md-12">
    <center>
        <div class="col-md-2 col-md-offset-3">
            <h5>Total Peserta Hadir : {{$total}}</h5>
        </div>
        <div class="col-md-2">
            <h5>Peserta Tryout : {{$tryout}}</h5>
        </div>
        <div class="col-md-2">
            <h5>Peserta Aula : {{$aula}}</h5>
        </div>
    </center>
    </div>
	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 1</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>
	@foreach($kelas1 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>
	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 2</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>

	@foreach($kelas2 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>


	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 3</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>
	@foreach($kelas3 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>
	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 4</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>
	@foreach($kelas4 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>




	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 5</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>
	@foreach($kelas5 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>
	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 6</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>
	@foreach($kelas6 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>




	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 7</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>
	@foreach($kelas7 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>
	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 8</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>
	@foreach($kelas8 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>



	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 9</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>
	@foreach($kelas9 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>
	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 10</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>
	@foreach($kelas10 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>
<!-- Sepuluh -->



	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 11</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>
	@foreach($kelas11 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>
	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 12</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>

	@foreach($kelas12 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>


	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 13</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>
	@foreach($kelas13 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>
	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 14</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>
	@foreach($kelas14 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>




	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 15</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>
	@foreach($kelas15 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>
	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 16</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>
	@foreach($kelas16 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>




	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 17</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>
	@foreach($kelas17 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>
	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 18</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>
	@foreach($kelas18 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>



	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 19</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>
	@foreach($kelas19 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>
	<div class="col-md-6">
            <div class="panel panel-default">
							<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<caption><CENTER><B>KELAS 20</B></CENTER></caption>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Asal</th>
			<!-- <th>Action</th> -->
		</tr>
	</thead>
	<tbody>
	@foreach($kelas20 as $index => $createdatas)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$createdatas->nama}}</td>
			<td>{{$createdatas->from}}</td>
			<!-- <td>
				<form method="POST" action="{{ route('createdata.destroy', $createdatas->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('createdata.edit', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	              	<a href="{{ route('createdata.show', $createdatas->id) }}" type="submit" button type="button" class="btn btn-warning">Detail</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td> -->
		</tr>
	@endforeach
	</tbody>
</table>
<!-- <center>
<a href="{{ route('createdata.create') }}" button type="button" class="btn btn-info btn-lg btn-block">Create</a></button>
</center> -->
</div></div></div>



</div>
</div>
</div>
@endsection
