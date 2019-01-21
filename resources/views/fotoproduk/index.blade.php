@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Foto Produk
			  	<div class="panel-title pull-right"><a href="{{ route('fp.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  
					  <th>Nama Produk</th>
					  <th>Foto</th>
					  <th colspan="2">Option</th>
			  		</tr>
				  	</thead>
				  	<tbody>
                            <tr role="row" class="odd">
                                <?php $nomor = 1; ?>
                                <?php $bebe = null ?>
                                @foreach($foto as $data)
                                <td>
                                @if($bebe!=$data->produk->nama_produk)
                                {{$data->produk->nama_produk}}
                                <?php $bebe=$data->produk->nama_produk?>
                                @endif
                                </td>
                                <td><img src="{{ asset('/img/'.$data->foto) }}" style="height:125px;width:125px;margin-top:7px;"></td> 				    	
                                <!-- <td>
                                    <a class="btn btn-warning" href="{{ route('fp.edit',$data->id) }}">Edit</a>
                                </td> -->
                                <td>
                                    <form method="post" action="{{ route('fp.destroy',$data->id) }}">
                                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                        <input type="hidden" name="_method" value="DELETE" >

                                        <button type="submit" class="btn btn-danger">Delete</button>
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