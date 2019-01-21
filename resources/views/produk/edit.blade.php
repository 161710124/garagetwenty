@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Produk 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('produks.update',$produk->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}<br>

			  		<div class="form-group {{ $errors->has('nama_produk') ? ' has-error' : '' }}">
			  			<label class="control-label">nama_produk</label>	
			  			<input type="text" name="nama_produk" class="form-control" value="{{ $produk->nama_produk }}"  required>
			  			@if ($errors->has('nama_produk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_produk') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">harga</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $produk->harga }}"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('stock') ? ' has-error' : '' }}">
			  			<label class="control-label">stock</label>	
			  			<input type="text" name="stock" class="form-control" value="{{ $produk->stock }}"  required>
			  			@if ($errors->has('stock'))
                            <span class="help-block">
                                <strong>{{ $errors->first('stock') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kode_barang') ? ' has-error' : '' }}">
			  			<label class="control-label">kode_barang</label>	
			  			<input type="text" name="kode_barang" class="form-control" value="{{ $produk->kode_barang }}"  required>
			  			@if ($errors->has('kode_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode_barang') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kategori_id') ? ' has-error' : '' }}">
			  			<label class="control-label">kategori_id</label>	
			  			<select type="text" name="kategori_id" class="form-control"  value="{{ $produk->kategori_id}}"  required>
			  				<option>-Kategori-</option>
			  					@foreach($kategori as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_kategori}}</option>
			  					@endforeach
			  			</select>
			  			@if ($errors->has('kategori_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategori_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('merk_id') ? ' has-error' : '' }}">
			  			<label class="control-label">merk_id</label>	
			  			<select type="text" name="merk_id" class="form-control"  value="{{ $produk->merk_id }}"  required>
			  				<option>-Merk-</option>
			  					@foreach($merk as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_merk}}</option>
			  					@endforeach
			  			</select>
			  			@if ($errors->has('merk_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('merk_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection