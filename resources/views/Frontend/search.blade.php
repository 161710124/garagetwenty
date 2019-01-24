@extends('layouts.frontend')
@section('content')
<br>
<!--shop wrapper start-->
<div class="shop_wrapper shop_fullwidth">
    <div class="container">
        <!--shop tab product-->
        <div class="shop_tab_product">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="list" role="tabpanel">
                    @if (count($produk) > 0)
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
                                                                <h4><a class="product_name" href="/detailproduk/{{$data->slug}}">{{$data->nama_produk}}</a></h4>
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
                    @else
                    <br><br> 
                    <h3>
                        <b>
                            <i>
                                <center>Mohon Maaf produk Yang Anda Cari Tidak Ada.</center>
                            </i>
                        </b>
                    </h3>
                    @endif
                </div>
            </div>
        </div>
        <!--shop tab product end-->
        <!--pagination style start--> 
        <div class="row">
            <div class="col-12">
                <div class="panel pull-right">
                    <ul>
                        {{ $produk->links() }}
                    </ul>
                </div>
            </div>
        </div>
        <!--pagination style end-->    
    </div>
</div>
<!--shop wrapper end-->
@endsection