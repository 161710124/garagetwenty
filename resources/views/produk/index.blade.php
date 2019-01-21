@extends('layouts.admin')
@section('content')

<div class="container">
<div class="row">
<div class="col-md-12">
	<a class="btn btn-default" href="{{ route('produks.create') }}">Tambah</a>
<ul class="breadcrumb">
<li><a href="{{ url('/home') }}">Dashboard</a></li>
<li class="active">Produk</li>
</ul>
<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title">Produk</h2>
</div>
<div class="panel-body">
{!! $html->table(['class'=>'table-striped']) !!}
</div>
</div>
</div>
</div>
</div>

@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection
