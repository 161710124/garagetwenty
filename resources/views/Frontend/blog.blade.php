@extends('layouts.frontend')
@section('content')
<div class="col-lg-9 order-lg-1 order-1">
                            <div class="row li-main-content">
                                <div class="col-lg-12">
                                    <div class="li-blog-single-item pb-30">
                                        <div class="li-blog-banner">
                                            <a href="blog-details.html"><img class="img-full" src="{{ asset('img/'.$blog->foto) }}" alt=""></a>
                                        </div>
                                        <div class="li-blog-content">
                                            <div class="li-blog-details">
                                                <h3 class="li-blog-heading pt-25"><a href="#">{{$blog->judul}}</a></h3>
                                                <div class="li-blog-meta">
                                                    <a class="post-time" href="#"><i class="fa fa-calendar"></i> 25 nov 2018</a>
                                                </div>
                                                <p></p>
                                                <!-- Begin Blog Blockquote Area -->
                                                <div class="li-blog-blockquote">
                                                    <blockquote>
                                                        <p>{!! $blog->artikel !!}.</p>
                                                    </blockquote>
                                                </div>
                                                <!-- Blog Blockquote Area End Here -->
                                                <p> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endsection