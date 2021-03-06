<div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="{{ route('frontend') }}">
                                        <img src="{{ asset('assets/Frontend/images/banner/garage.png') }}" alt=""
                                        style="width: 250px; height: 120px;">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="{{ route('search') }}" class="hm-searchbox" method="GET">
                                    {{ csrf_field() }}
                                    <input type="text" placeholder="Enter your search key ..." name="search">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <span class="item-text">Keranjangku
                                                    <span class="cart-item-count"></span>
                                                </span>
                                            </div>
                                            <span></span>
                                            @role('member')
                                            <div class="minicart">
                                                <ul class="minicart-product-list">
                                                    
                                                <div class="minicart-button">
                                                    <a href="{{url('cart', Auth::user()->id)}}" class="li-button li-button-fullwidth li-button-dark">
                                                        <span>View Full Cart</span>
                                                    </a>
                                                    <a href="{{url('check', Auth::user()->id)}}" class="li-button li-button-fullwidth">
                                                        <span>Checkout</span>
                                                    </a>
                                                </div>
                                            </div>
                                            @endrole
                                                @if(Route::has('login'))
                                                @auth
                                                <li>
                                                <a href="{{ route('logout') }}" class="li-button li-button-fullwidth li-button-dark" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                        <span>LOGOUT</span>
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf</form>
                                                </li>
                                                @else
                                                <li><a class="li-button li-button-fullwidth li-button-dark" href="{{ route('login') }}">Masuk</a></li>
                                                @endauth
                                                @endif
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>