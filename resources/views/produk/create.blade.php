@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>			
			  <div class="panel-body">
			  	<form action="{{ route('produks.store') }}" method="post"  enctype="multipart/form-data" >
					  {{ csrf_field() }}
                    
                      <div class="form-group {{ $errors->has('nama_produk') ? ' has-error' : '' }}">
			  			<label class="control-label">nama_produk</label>	
			  			<input type="text" name="nama_produk" class="form-control"  required>
			  			@if ($errors->has('nama_produk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_produk') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">harga</label>	
			  			<input type="number" name="harga" class="form-control"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group {{ $errors->has('stock') ? ' has-error' : '' }}">
			  			<label class="control-label">stock</label>	
			  			<input type="number" name="stock" class="form-control"  required>
			  			@if ($errors->has('stock'))
                            <span class="help-block">
                                <strong>{{ $errors->first('stock') }}</strong>
                            </span>
                        @endif
                      </div>

                      <div class="form-group {{ $errors->has('kode_barang') ? ' has-error' : '' }}">
			  			<label class="control-label">kode_barang</label>	
			  			<input type="number" name="kode_barang" class="form-control"  required>
			  			@if ($errors->has('kode_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode_barang') }}</strong>
                            </span>
                        @endif
                      </div>
                      
                      <div class="form-group {{ $errors->has('kategori_id') ? ' has-error' : '' }}">
			  			<label class="control-label">kategori</label>	
			  			<select name="kategori_id" class="form-control">
						  <option>---</option>
							@foreach($kategori as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
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
			  			<select name="merk_id" class="form-control">
						  <option>---</option>
							@foreach($merk as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_merk }}</option>
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
                    <a href="{{ url()->previous() }}" >kembali</a>
                    </div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection

