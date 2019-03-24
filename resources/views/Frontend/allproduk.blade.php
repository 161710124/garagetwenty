@extends('layouts.frontend')
@section('content')
<div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <!-- <li><a href="index.html">Home</a></li>
                            <li class="active">Shop Left Sidebar</li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Content Wraper Area -->
            <div class="content-wraper pt-60 pb-60 pt-sm-30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-1 order-lg-2">
                            <!-- Li's Banner Area End Here -->
                            <!-- shop-top-bar start -->
                            
                            <!-- shop-top-bar end -->
                            <!-- shop-products-wrapper start -->
                            <div class="shop-products-wrapper">
                                <div class="tab-content">
                                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                        <div class="product-area shop-product-area">
                                            <div class="row">
                                                @foreach($produk as $data)
                                                <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                        @foreach($data->fotoproduk()->get() as $datas)
                                                        @if($loop->first)
                                                            <a href="/detailproduk/{{$data->slug}}">
                                                                <img src="{{ asset('img/'.$datas->foto) }}" alt="Li's Product Image" style="width: 270px; height: 181px;">
                                                            </a>
                                                            @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <h4><a class="product_name" href="/detailproduk/{{$data->slug}}">{!! str_limit($data->nama_produk,29)!!}</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">Rp. {{ number_format($data->harga) }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul class="add-actions-link">
                                                                    <li class="add-cart active"><a href="/detailproduk/{{$data->slug}}">LIHAT DETAIL <i class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- shop-products-wrapper end -->
                        </div>
                    </div>
                </div>
            </div>
            @endsection