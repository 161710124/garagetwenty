@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data CheckOut
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Produk</th>
					  <th>Jumlah</th>
					  <th>Nama</th>
					  <th>Email</th>
					  <th>No Telepon</th>
					  <th>Alamat</th>
					  <th>Kota</th>
					  <th>Provinsi</th>
					  <th>Kode Pos</th>
					  <th>Catatan</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($cek as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->produk_id }}</td>
				    	<td>{{ $data->jumlah }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td>{{ $data->email }}</td>
				    	<td>{{ $data->no_telp }}</td>
				    	<td>{{ $data->alamat }}</td>
				    	<td>{{ $data->kota }}</td>
				    	<td>{{ $data->provinsi }}</td>
				    	<td>{{ $data->kodepos }}</td>
				    	<td>{{ $data->catatan }}</td>
						<td>
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