<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themes/ezone/assets/img/favicon.png') }}">

		<!-- all css here -->
        <link rel="stylesheet" href="{{ asset('themes/ezone/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/ezone/assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/ezone/assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/ezone/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/ezone/assets/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/ezone/assets/css/pe-icon-7-stroke.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/ezone/assets/css/icofont.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/ezone/assets/css/meanmenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/ezone/assets/css/easyzoom.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/ezone/assets/css/bundle.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/ezone/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/ezone/assets/css/responsive.css') }}">
        <script src="{{ asset('themes/ezone/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

        <!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header -->

        <header>
            <div class="header-top-furniture wrapper-padding-2 res-header-sm">
                <div class="container-fluid">
                    <div class="header-bottom-wrapper">
                        <div class="logo-2 furniture-logo ptb-30">
                            <a href="/">
                                <img src="{{ asset('themes/ezone/assets/img/logo/gff.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="menu-style-2 furniture-menu menu-hover">
                            <nav>
                                <ul>
                                    <li><a href="/">home</a>
                                    </li>
                                    <li><a href="#">pages</a>
                                    </li>
                                    <li><a href="{{ url('products') }}">shop</a>

                                    </li>
                                    <li><a href="blog.html">blog</a>
                                    </li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-cart">
                            <a class="icon-cart-furniture" href="{{ url('carts') }}">
                                <i class="ti-shopping-cart"></i>
                                <span class="shop-count-furniture green">{{ Cart::count() }}</span>
                            </a>
                            <!-- @if (Cart::count() > 0)
                                <ul class="cart-dropdown">
                                    @foreach (Cart::content() as $item)
                                        @php
                                            $product = isset($item->model->parent) ? $item->model->parent : $item->model;
                                            $image = !empty($product->productImages->first()) ? asset('storage/'.$product->productImages->first()->path) : asset('themes/ezone/assets/img/cart/3.jpg')
                                        @endphp
                                        <li class="single-product-cart">
                                            <div class="cart-img">
                                                <a href="{{ url('product/'. $product->slug) }}"><img src="{{ $image }}" alt="{{ $product->name }}" style="width:100px"></a>
                                            </div>
                                            <div class="cart-title">
                                                <h5><a href="{{ url('product/'. $product->slug) }}">{{ $item->name }}</a></h5>
                                                <span>{{ number_format($item->price) }} x {{ $item->quantity }}</span>
                                            </div>
                                            <div class="cart-delete">
                                                <a href="{{ url('carts/remove/'. $item->id)}}" class="delete"><i class="ti-trash"></i></a>
                                            </div>
                                        </li>
                                    @endforeach
                                    <li class="cart-space">
                                        <div class="cart-sub">
                                            <h4>Subtotal</h4>
                                        </div>
                                        <div class="cart-price">
                                            <h4>{{ Cart::subtotal() }}</h4>
                                        </div>
                                    </li>
                                    <li class="cart-btn-wrapper">
                                        <a class="cart-btn btn-hover" href="{{ url('carts') }}">view cart</a>
                                        <a class="cart-btn btn-hover" href="{{ url('orders/checkout') }}">checkout</a>
                                    </li>
                                </ul>
                            @endif -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
                                        <li><a href="/">HOME</a>

                                        </li>
                                        <li><a href="#">pages</a>

                                        </li>
                                        <li><a href="{{ url('products') }}">shop</a>

                                        </li>
                                        <li><a href="#">BLOG</a>

                                        </li>
                                        <li><a href="contact.html"> Contact  </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom-furniture wrapper-padding-2 border-top-3">
                <div class="container-fluid">
                    <div class="furniture-bottom-wrapper">
                        <div class="furniture-login">
                            <ul>
                                @guest
                                    <li>Get Access: <a href="{{ url('login') }}">Login</a></li>
                                    <li><a href="{{ url('register') }}">Register</a></li>
                                @else
                                    <li>Hello: <a href="{{ url('profile') }}">{{ Auth::user()->first_name }}</a></li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @endguest
                            </ul>
                        </div>
                        <div class="furniture-search">
                        <form action="{{ url('products') }}" method="GET">
                            <input placeholder="I am Searching for . . ." type="text" name="q" value="{{ isset($q) ? $q : null }}">
                            <button>
                                <i class="ti-search"></i>
                            </button>
                        </form>
                        </div>
                        <div class="furniture-wishlist">
                            <ul>
                                <li><a href="{{ url('wishlists') }}"><i class="ti-heart"></i> Favorites</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end -->

        @yield('content')

        <!-- services -->
        <div class="services-area wrapper-padding-4 gray-bg pt-120 pb-80">
            <div class="container-fluid">
                <div class="services-wrapper">
                    <div class="single-services mb-40">
                        <div class="services-img">
                            <img src="{{ asset('themes/ezone/assets/img/icon-img/26.png') }}" alt="">
                        </div>
                        <div class="services-content">
                            <h4>Bebas Biaya Pengiriman</h4>
                            <p>"Kami memberikan kemudahan dan kenyamanan bagi Anda dengan menawarkan layanan bebas pengiriman."</p>
                        </div>
                    </div>
                    <div class="single-services mb-40">
                        <div class="services-img">
                            <img src="{{ asset('themes/ezone/assets/img/icon-img/27.png') }}" alt="">
                        </div>
                        <div class="services-content">
                            <h4>Layanan pelanggan tersedia 24 jam sehari</h4>
                            <p>"Dukungan pelanggan kami selalu siap sedia 24 jam sehari, 7 hari seminggu" </p>
                        </div>
                    </div>
                    <div class="single-services mb-40">
                        <div class="services-img">
                            <img src="{{ asset('themes/ezone/assets/img/icon-img/28.png') }}" alt="">
                        </div>
                        <div class="services-content">
                            <h4>Pembayaran Aman</h4>
                            <p>"Bayar dengan aman dan terlindungi dengan pembayaran yang secure, <br>Memberikan ketenangan dan kepercayaan untuk transaksi online Anda."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->

        <!-- footer -->
        <footer class="footer-area">
            <div class="footer-top-area pt-70 pb-35 wrapper-padding-5">
                <div class="container-fluid">
                    <div class="widget-wrapper">
                        <div class="footer-widget mb-30">
                            <a href="#"><img src="{{ asset('themes/ezone/assets/img/logo/gff.jpg') }}" alt=""></a>
                            <div class="footer-about-2">
                                <p>Galery Fashion Jaya Murah berada di jalan A. Yani RT. 02 RW. 01<br> genengan Kawedanan Kabupaten Magetan.<br>Kami buka dari jam delapan pagi sampai jam sembilan malam.<br> </p>
                            </div>
                        </div>
                        <div class="footer-widget mb-30">
                            <h3 class="footer-widget-title-5">Contact Info</h3>
                            <div class="footer-info-wrapper-3">
                                <div class="footer-address-furniture">
                                    <div class="footer-info-icon3">
                                        <span>Address: </span>
                                    </div>
                                    <div class="footer-info-content3">
                                        <p> Jl. A. Yani, RT.02/RW.01, Sekolanan, Genengan, <br>Kawedanan, Kabupaten Magetan, Jawa Timur 63382, Indonesia </p>
                                    </div>
                                </div>
                                <div class="footer-address-furniture">
                                    <div class="footer-info-icon3">
                                        <span>Phone: </span>
                                    </div>
                                    <div class="footer-info-content3">
                                        <p>0812-3425-776</p>
                                    </div>
                                </div>
                                <div class="footer-address-furniture">
                                    <div class="footer-info-icon3">
                                        <span>E-mail: </span>
                                    </div>
                                    <div class="footer-info-content3">
                                        <p><a href="#"> email@domain.com</a> <br><a href="#"> domain@mail.info</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-widget mb-30">
                            <h3 class="footer-widget-title-5">Newsletter</h3>
                            <div class="footer-newsletter-2">
                                <p>Send us your mail or next updates</p>
                                <div id="mc_embed_signup" class="subscribe-form-5">
                                    <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="mc-form">
                                            <input type="email" value="" name="EMAIL" class="email" placeholder="Enter mail address">
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom ptb-20 gray-bg-8">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="copyright-furniture">
                                <p>Copyright © <a href="https://hastech.company/">Naqsya </a> 2023 . All Right Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end -->
        <div id="loader" style="display: none;">
            <div id="loading" style="z-index:99999;position: fixed;top:0;left:0;right:0;bottom:0;background-color:rgba(0,0,0,.3);display: flex;justify-content:center;align-items: center;" class="mx-auto">
                <p><img src="{{ asset('themes/ezone/assets/img/loading.gif') }}" /> Please Wait</p>
            </div>
        </div>

        <!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="pe-7s-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog modal-quickview-width" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="qwick-view-left">
                            <div class="quick-view-learg-img">
                                <div class="quick-view-tab-content tab-content">
                                    <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                        <img src="{{ asset('themes/ezone/assets/img/quick-view/l1.jpg') }}" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal2" role="tabpanel">
                                        <img src="{{ asset('themes/ezone/assets/img/quick-view/l2.jpg') }}" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal3" role="tabpanel">
                                        <img src="{{ asset('themes/ezone/assets/img/quick-view/l3.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="quick-view-list nav" role="tablist">
                                <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                    <img src="{{ asset('themes/ezone/assets/img/quick-view/s1.jpg') }}" alt="">
                                </a>
                                <a href="#modal2" data-toggle="tab" role="tab">
                                    <img src="{{ asset('themes/ezone/assets/img/quick-view/s2.jpg') }}" alt="">
                                </a>
                                <a href="#modal3" data-toggle="tab" role="tab">
                                    <img src="{{ asset('themes/ezone/assets/img/quick-view/s3.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="qwick-view-right">
                            <div class="qwick-view-content">
                                <h3>Handcrafted Supper Mug</h3>
                                <div class="price">
                                    <span class="new">$90.00</span>
                                    <span class="old">$120.00  </span>
                                </div>
                                <div class="rating-number">
                                    <div class="quick-view-rating">
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                    </div>
                                    <div class="quick-view-number">
                                        <span>2 Ratting (S)</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                <div class="quick-view-select">
                                    <div class="select-option-part">
                                        <label>Size*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">900</option>
                                            <option value="">700</option>
                                        </select>
                                    </div>
                                    <div class="select-option-part">
                                        <label>Color*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">orange</option>
                                            <option value="">pink</option>
                                            <option value="">yellow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                    </div>
                                    <div class="quickview-btn-cart">
                                        <a class="btn-hover-black" href="#">add to cart</a>
                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="pe-7s-close" aria-hidden="true" style="cursor: pointer;"></span>
            </button>
            <div class="modal-dialog" role="document" style="margin: 150px auto;">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="login">
                            <div class="login-form-container" style="width:400px">
                                <div class="login-form">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-12">
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label for="remember">{{ __('Remember Me') }}</label>
                                                        <a href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
                                                    </div>
                                                    <button type="submit" class="default-btn floatright">Login</button>
                                                </div>
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
        <!-- end -->


		<!-- all js here -->
        <script src="{{ asset('themes/ezone/assets/js/vendor/jquery-1.12.0.min.js') }}"></script>
        <script src="{{ asset('themes/ezone/assets/js/popper.js') }}"></script>
        <script src="{{ asset('themes/ezone/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('themes/ezone/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('themes/ezone/assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('themes/ezone/assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('themes/ezone/assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('themes/ezone/assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('themes/ezone/assets/js/ajax-mail.js') }}"></script>
        <script src="{{ asset('themes/ezone/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('themes/ezone/assets/js/plugins.js') }}"></script>
        <script src="{{ asset('themes/ezone/assets/js/main.js') }}"></script>
        <script src="{{ asset('themes/ezone/assets/js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(".delete").on("click", function () {
                return confirm("Do you want to remove this?");
            });
        </script>
        @stack('script-alt')
    </body>
</html>
