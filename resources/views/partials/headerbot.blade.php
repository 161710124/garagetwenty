<div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                                <div class="hb-menu">
                                    <nav>
                                        <ul>
                                            <li class="dropdown-holder"><a href="{{ route('frontend') }}">Home</a>
                                                <ul class="hb-dropdown">
                                                    <li class="active"><a href="#">Home One</a></li>
                                                    <li><a href="#">Home Two</a></li>
                                                    <li><a href="#">Home Three</a></li>
                                                    <li><a href="#">Home Four</a></li>
                                                </ul>
                                            </li>
                                             <li class="megamenu-static-holder"><a href="#">KATEGORI</a>
                                                <ul class="megamenu hb-megamenu">
                                                    @foreach($kategori as $data)
                                                    <li><a href="/indexproduk/kategori/{{$data->slug}}">{{$data->nama_kategori}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('indexblog') }}">Blog</a></li>
                                            <li><a href="{{ route('indexproduk') }}">Product</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>