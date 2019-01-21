@extends('layouts.admin')
@section('content')

<section class="card">
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Blog 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('blog.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group">
                    	<label for="foto">Gambar</label>
                    	<input type="file" id="foto" name="foto">
                	</div>
			  		<div class="form-group {{ $errors->has('nama_kategori') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('artikel') ? ' has-error' : '' }}">
			  			<label class="control-label">Artikel</label>	
			  			<textarea type="text" name="artikel" class="form-control"  required>
			  			@if ($errors->has('artikel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('artikel') }}</strong>
                            </span>
                        @endif
                    </textarea>
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
</section>

@endsection