@extends('layouts.frontend')
@section('content')
<div class="Shopping-cart-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="{{url('cart/edit/'.Auth::user()->id)}}">
                                {{csrf_field()}}
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove">remove</th>
                                                <th class="li-product-thumbnail">Foto</th>
                                                <th class="cart-product-name">Produk</th>
                                                <th class="li-product-price">Harga</th>
                                                <th class="li-product-quantity">Jumlah</th>
                                                <th class="li-product-subtotal">Total Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $total_all = 0;
                                            @endphp
                                            @foreach($cart as $data)
                                            @php 
                                                $t_s = $data->jumlah * $data->produk->harga;
                                                $total_all = $total_all + $t_s;
                                            @endphp
                                            <tr>
                                                <input type="hidden" name="id[]" value="{{$data->id}}">
                                                <td class="li-product-remove"><a href="{{url('cart/delete', $data->id)}}"><i class="fa fa-times"></i></a></td>
                                                @foreach($data->produk->fotoproduk as $data1)
                                                <td class="li-product-thumbnail"><a href="#"><img src="{{ asset('img/'.$data1->foto) }}" alt="Li's Product Image" style="width: 210px; height: 181px;"></a></td>
                                                @endforeach
                                                <td class="li-product-name"><a href="#">{{$data->produk->nama_produk}}</a></td>
                                                <td class="li-product-price"><span class="amount">Rp. {{ number_format($data->produk->harga) }}</span></td>
                                                <td class="quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" name="jumlah[]" type="number" value="{{$data->jumlah}}" min="1" max="{{ $data->produk->stock }}">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal"><span class="amount">Rp. {{ number_format($data->jumlah * $data->produk->harga) }}</span></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <!-- <div class="coupon">
                                                <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                                <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                            </div> -->
                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="Update cart" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <li>Subtotal <span>Rp.{{number_format($total_all,2,',','.')}}</span></li>
                                                <li>Total <span>Rp.{{number_format($total_all,2,',','.')}}</span></li>
                                            </ul>
                                            <a href="{{url('check', Auth::user()->id)}}">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection