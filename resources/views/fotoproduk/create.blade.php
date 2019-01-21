@extends('layouts.admin')
@section('content')

<section class="card">
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Foto Produk 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('fp.store') }}" method="post" enctype="multipart/form-data" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('produk_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Produk</label>	
			  			<select name="produk_id" class="form-control">
			  				<option>--</option>
			  				@foreach($produk as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_produk }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('produk_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('produk_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<label for="foto">Gambar</label>
			  			<input type="file" id="foto" name="foto[]" accept="image/*" multiple>
			  		</div>
			  		<br>
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
</section>

@endsection