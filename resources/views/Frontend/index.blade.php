@extends('layouts.frontend')
@section('content')
            <div class="li-static-home">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Li's Static Home Image Area -->
                            <div class="li-static-home-image"></div>
                            <!-- Li's Static Home Image Area End Here -->
                            <!-- Begin Li's Static Home Content Area -->
                            <!-- Li's Static Home Content Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Li's Static Home Area End Here -->
            <!-- Begin Li's Trending Product Area -->
            <section class="product-area li-trending-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Tab Menu Area -->
                        <div class="col-lg-12">
                            <div class="li-product-tab li-trending-product-tab">
                                <h2>
                                    <span>Produk Terbaru</span>
                                </h2>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                            <div class="tab-content li-tab-content li-trending-product-content">
                                <div id="home1" class="tab-pane show fade in active">
                                    <div class="row">
                                        <div class="product-active owl-carousel">
                                        	@foreach( $produk as $data )
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                	@foreach($data->fotoproduk()->get() as $datas)
                                                    <div class="product-image">
                                                        <a href="/detailproduk/{{$data->slug}}">
                                                            <img src="{{ asset('img/'.$datas->foto) }}" alt="Li's Product Image" style="width: 210px; height: 181px;">
                                                        </a>
                                                    </div>
                                                    @endforeach
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <h4><a class="product_name" href="/detailproduk/{{$data->slug}}">{{ $data->nama_produk }}</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price">Rp. {{ number_format($data->harga) }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="/detailproduk/{{$data->slug}}">LIHAT DETAIL <i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>

                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Menu Content Area End Here -->
                        </div>
                        <!-- Tab Menu Area End Here -->
                    </div>
                </div>
            </section>

@endsection