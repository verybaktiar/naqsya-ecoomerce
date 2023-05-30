<header>
    {{-- <div class="header-top-furniture wrapper-padding-2 res-header-sm">
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
                            <li><a href="/">Home</a>
                            </li>
                            <li><a href="#">Tentang</a>
                            </li>
                            <li><a href="{{ url('products') }}">Belanja</a>

                            </li>
                            </li>
                            <li><a href="contact.html">Kontak</a></li>
                        </ul>

                    </nav>
                </div>
                <div class="header-cart">

                    <a class="icon-cart-furniture" href="{{ url('carts') }}">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="shop-count-furniture green">{{ Cart::count() }}</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="login">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a> --}}
                    <nav class="navbar navbar-expand-lg navbar-light shadow">
                        <div class="container d-flex justify-content-between align-items-center">

                            <a class="navbar-brand text-success logo h1 align-self-center" href="/">
                                <img src="{{ url('img/logo.png') }}" width="50" class="mb-3" />
                            </a>

                            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                                <div class="flex-fill">
                                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="tentang">Tentang</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="shop">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="kontak">Kontak</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="navbar align-self-center d-flex">
                                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                                            <div class="input-group-text">
                                                <i class="fa fa-fw fa-search"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                                    </a>
                                    <a class="nav-icon position-relative text-decoration-none" href="{{ url('carts') }}">
                                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">{{ Cart::count() }}</span>
                                    </a>
                                    <a class="nav-icon position-relative text-decoration-none" href="login">
                                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                                    </a>
                                    <ul>
                                        @guest
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
                            </div>

                        </div>
                    </nav>

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
                                <li><a href="#">Tentang</a>

                                </li>
                                <li><a href="{{ url('products') }}">Belanja</a>

                                </li>
                                </li>
                                <li><a href="contact.html"> Kontak </a></li>
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

                </div>
                {{-- <div class="furniture-search">
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
                </div> --}}
            </div>
        </div>
    </div>
</header>
</header>
