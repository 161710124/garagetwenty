@extends('layouts.frontend')
@section('content')
<!--breadcrumbs area start-->
<div class="breadcrumbs_area commun_bread">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3>keranjang</h3>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>keranjang</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<!--breadcrumbs area end-->

 <!--shopping cart area start -->
<div class="shopping_cart_area">
    <div class="container">  
        <form action="#"> 
            <div class="row">
                <div class="col-10">
                    <div class="table_desc">
                        <div class="cart_page table-responsive">
                            <table>
                        <thead>
                            <tr>
                                <th class="product_remove">Hapus</th>
                                {{-- <th class="product_thumb">Foto</th> --}}
                                <th class="product_name">Produk</th>
                                <th class="product-price">Harga</th>
                                <th class="product_quantity">Jumlah</th>
                                <th class="product_total">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $data)
                            <tr>
                               <td class="product_remove"><a href="{{ route('destroy') }}"><i class="fa fa-trash-o"></i></a></td>                                                                                                                              
                                {{-- <td class="product_thumb"><a href="#"><img src="assets/img/cart/cart6.jpg" alt=""></a></td> --}}
                                <td class="product_name"><a href="#"></a>{{ $data->produk->nama_produk }}</td>
                                <td class="product-price">Rp. {{ number_format($data->produk->harga) }}</td>
                                <td class="product_quantity"><input name="quantity" min="0" max="100" value="{{ $data->quantity }}" type="number"></td>
                                <td class="product_total">Rp. {{ number_format($data->total_harga) }}</td>
                            </tr>                            
                            @endforeach
                        </tbody>
                    </table>   
                        </div>  
                        <div class="cart_submit">
                            <button type="submit">update cart</button>
                        </div>      
                    </div>
                 </div>
             </div>
             <!--coupon code area start-->
            <div class="coupon_area">
                <div class="row">                    
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">                        
                               <div class="cart_subtotal">
                                   <p>Total</p>
                                   <p class="cart_amount">Rp. {{ number_format($cart->sum('total_harga')) }}</p>
                               </div>
                               <div class="checkout_btn">
                                   <a href="#">Proceed to Checkout</a>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area end-->
        </form> 
    </div>     
</div>
 <!--shopping cart area end -->
 <br><br>
@endsection