@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data CheckOut
			  	<div class="panel-title pull-right"><a href="{{ route('check.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama User</th>
					  <th>ID Cart</th>
					  <th>Alamat</th>
					  <th>No Telp</th>
					  <th colspan="2">Option</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($cek as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->User->name }}</td>
				    	<td>{{ $data->cart->id }}</td>
				    	<td>{{ $data->alamat }}</td>
				    	<td>{{ $data->no_telp }}</td>
				    	<td>
						<a class="btn btn-warning" href="{{ route('check.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<form method="post" action="{{ route('check.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Hapus</button>
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
</div>
@endsection