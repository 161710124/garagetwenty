@extends('layouts.admin')

@section('content')

<div class="col-lg-3">
    <div class="logo pb-sm-30 pb-xs-30">
        <a href="{{ route('frontend') }}">
            <img src="{{ asset('assets/Frontend/images/banner/garage.png') }}" alt=""
            style="width: 250px; height: 120px;">
        </a>
    </div>
</div>

@endsection