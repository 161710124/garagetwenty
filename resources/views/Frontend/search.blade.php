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
                    @foreach ($produk as $item)
                    <div class="single_product list_item">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-5">
                                @foreach($item->foto_produk as $data_foto)
                                @if ($loop->first)
                                <div class="product_thumb">
                                    <a href="/detailproduk/{{$data->slug}}"><img src="{{ asset('img/'.$item->foto) }}" alt=""></a>
                                </div>
                                @endif                                
                                @endforeach 
                            </div>
                            <div class="col-lg-9 col-md-7">
                                <div class="product_content">
                                    <h3><a href="product-details.html">{{ $item->nama_produk }}</a></h3>
                                    <div class="product_price">
                                        <span class="current_price">Rp. {{ number_format($item->harga) }}</span>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach                            
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