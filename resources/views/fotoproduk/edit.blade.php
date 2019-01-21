@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Kategori 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('fp.update',$foto->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}<br>

					<div class="form-group {{ $errors->has('produk_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Produk</label>	
			  			<select type="text" name="produk_id" class="form-control"  value="{{ $foto->produk_id}}"  required>
			  				<option>---</option>
			  					@foreach($produk as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_produk}}</option>
			  					@endforeach
			  			</select>
			  			@if ($errors->has('produk_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('produk_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
			  			<label class="control-label">foto</label>	
			  			<input type="file" name="foto" class="form-control"  value="{{ $foto->foto }}" >
			  			@if(isset($foto)&& $foto->foto)
			  			<p>
			  				<br><img src="{{ asset('/img/'.$foto->foto) }}">
			  			</p>@endif
			  			@if ($errors->has('foto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
			  		</div>


			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Finish</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection