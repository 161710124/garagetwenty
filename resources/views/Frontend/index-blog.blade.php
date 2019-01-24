@extends('layouts.frontend')
@section('content')
<div class="li-main-blog-page pt-60 pb-55">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Main Content Area -->
                        <div class="col-lg-9 order-1">
                            <div class="row li-main-content">
                                <div class="col-lg-6 col-md-6">
                                    @foreach($indexblog as $data)
                                    <div class="li-blog-single-item pb-25">
                                        <div class="li-blog-banner">
                                            <a href="{{route('singleblog', $data->id)}}"><img class="img-full" src="{{ asset('img/'.$data->foto) }}" alt="" style="width: 320px; height: 179px;"></a>
                                        </div>
                                        <div class="li-blog-content">
                                            <div class="li-blog-details">
                                                <h3 class="li-blog-heading pt-25"><a href="{{route('singleblog', $data->id)}}">{{ $data->judul }}</a></h3>
                                                <div class="li-blog-meta">
                                                    <a class="post-time" href="#"><i class="fa fa-calendar"></i> {{ $data->created_at->diffForHumans()}}</a>
                                                </div>
                                                <p>{!! str_limit($data->artikel,50)!!}.</p>
                                                <a class="read-more" href="{{route('singleblog', $data->id)}}">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- Begin Li's Pagination Area -->
                                <div class="col-lg-12">
                                    <div class="li-paginatoin-area text-center pt-25">
                                        <div class="row">
                                            <!-- <div class="col-lg-12">
                                                <ul class="li-pagination-box">
                                                    <li><a class="Previous" href="#">Previous</a></li>
                                                    <li class="active"><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a class="Next" href="#">Next</a></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Pagination End Here Area -->
                            </div>
                        </div>
                        <!-- Li's Blog Sidebar Area End Here -->
                    </div>
                </div>
            </div>
                        @endsection