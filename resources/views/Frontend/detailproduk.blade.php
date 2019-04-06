@extends('layouts.frontend')
@section('content')
<div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Single Product</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- content-wraper start -->
            <div class="content-wraper">
                <div class="container">
                    <div class="row single-product-area">
                        <div class="col-lg-5 col-md-6">
                           <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-navigation-1">
                                    <div class="lg-image">
                                        @foreach($produk->fotoproduk()->get() as $data)
                                        @if($loop->first)
                                        <a class="popup-img venobox vbox-item" href="images/product/large-size/1.jpg" data-gall="myGallery">
                                            <img src="{{ asset('img/'.$data->foto) }}" alt="product image">
                                        </a>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!--// Product Details Left -->
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <div class="product-details-view-content pt-60">
                                <div class="product-info">
                                    <h2>{{$produk->nama_produk}}</h2>
                                    <div class="price-box pt-20">
                                        <span class="new-price new-price-2">Rp. {{ number_format($produk->harga) }}<br><br> <h6>Stock : {{ $produk->stock }}</h6></span>
                                    </div>
                                    <div class="product-desc">
                                        <p>
                                            <span>{!!($produk->deskripsi)!!}
                                            </span>
                                        </p>
                                    </div>
                                    @role('member')
                                    <div class="single-add-to-cart">
                                        <form id="#formCart" method="POST" class="cart-quantity" enctype="multipart/form-data">
                                            {{ csrf_field() }} {{ method_field('POST') }}
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                                            <!-- <div class="quantity">
                                                <label>jumlah</label>
                                                <div class="cart-plus-minus">
                                                    <input min="1" max="{{ $produk->stock }}" name="jumlah" class="cart-plus-minus-box" type="number" required>
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </div> -->
                                            <a class="add-to-cart" href="{{url('add-cart',$data->produk->id)}}" type="submit">Add to cart</a>
                                        </form>
                                    </div>
                                    @endrole
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            {{-- <script src="{{ asset('js/cart.js') }}"> --}}
            @endsection
            @section('js')
<script>
$(document).ready(function(){
    createData();
    function createData(){
        $('#formCart').submit(function(e){
            $.ajaxSetup({
                header: {
                    'X-CSRF-TOKEN' :$('meta[name="csrf-token"').attr('content')
                }
            });
            e.preventDefault();
            $.ajax({
                url : '/barang',
                type : 'post',
                data : new FormData(this),
                chace : true,
                contentType : false,
                processData : false,
                async : false,
                dataType : 'json',
                success : function(json) {
                    console.log(json);
                    location.reload();
                    if (json['redirect']) {
                        location = json['redirect'];
                    }
                }            
            });
        });
    }
});
</script>
@endsection