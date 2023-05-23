@extends('user.app')

@section('content')
  <!-- Start Content -->
  <div class="container py-5">
    <div class="row">

        <div class="col-lg-3">
            <h1 class="h2 pb-4">Categories</h1>
            <ul class="list-unstyled templatemo-accordion">
                <li class="pb-3">
                    @if ($categories)
                        <div class="sidebar-widget mb-45">
                 
                            <div class="sidebar-categories">
                                <ul>
                                    @foreach ($categories as $category)
                                            <li><a href="{{ url('products?category='. $category->slug) }}">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                </li>
            </ul>
        </div>

        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-inline shop-top-menu pb-3 pt-1">
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3" href="#">All</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3" href="#">Men's</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none" href="#">Women's</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 pb-4">
                    <div class="d-flex">
                        <select class="form-control">
                            <option>Featured</option>
                            <option>A to Z</option>
                            <option>Item</option>
                        </select>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        @forelse ($products as $product)
                        <div class="card rounded-0">
                            <a href="{{ url('product/'. $product->slug) }}">
                                @if ($product->productImages->first())
                                <img class="card-img rounded-0 img-fluid" src="{{ asset('storage/'.$product->productImages->first()->path) }}" alt="{{ $product->name }}">
                                @else
                                    <img src="{{ asset('themes/ezone/assets/img/product/fashion-colorful/1.jpg') }}" alt="{{ $product->name }}">
                                @endif
                            </a>
                            <span>hot</span>
                            <div class="product-action">
                                <a class="animate-left add-to-fav" title="Favorite"  product-slug="{{ $product->slug }}" href="">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-top add-to-card" title="Add To Cart" href="" product-id="{{ $product->id }}" product-type="{{ $product->type }}" product-slug="{{ $product->slug }}">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-right quick-view" data-toggle="modal" data-target="#exampleModal" title="Quick View" product-slug="{{ $product->slug }}" href="">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="{{ url('product/'. $product->slug) }}">{{ $product->name }}</a></h4>
                                <span>{{ number_format($product->priceLabel()) }}</span>
                            </div>
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @empty
                     No product found!
                    @endforelse
                </div>

            </div> --}}
            <div class="shop-product-content tab-content">
                <div id="grid-sidebar3" class="tab-pane fade active show">
                <!-- grid view -->
                    <div class="row">
                        @forelse ($products as $product)
                            <!-- grid box -->
                            <div class="col-md-6 col-xl-4">
                                <div class="product-wrapper mb-30">
                                    <div class="product-img">
                                        <a href="{{ url('product/'. $product->slug) }}">
                                            @if ($product->productImages->first())
                                            <img class="card-img rounded-0 img-fluid" src="{{ asset('storage/'.$product->productImages->first()->path) }}" alt="{{ $product->name }}">
                                            @else
                                                <img src="{{ asset('themes/ezone/assets/img/product/fashion-colorful/1.jpg') }}" alt="{{ $product->name }}">
                                            @endif
                                        </a>
                                        <span>hot</span>
                                        <div class="product-action">
                                            <a class="animate-left add-to-fav" title="Favorite"  product-slug="{{ $product->slug }}" href="">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                            <a class="animate-top add-to-card" title="Add To Cart" href="" product-id="{{ $product->id }}" product-type="{{ $product->type }}" product-slug="{{ $product->slug }}">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-right quick-view" data-toggle="modal" data-target="#exampleModal" title="Quick View" product-slug="{{ $product->slug }}" href="">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="{{ url('product/'. $product->slug) }}">{{ $product->name }}</a></h4>
                                        <span>{{ number_format($product->priceLabel()) }}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->
                        @empty
                            No product found!
                        @endforelse
                    </div>
                <!-- end -->
                </div>
                <div id="grid-sidebar4" class="tab-pane fade">
                    <!-- list view -->
                    <div class="row">
                        @forelse ($products as $product)
                        <div class="col-lg-12">
                            <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                <div class="product-img list-img-width">
                                    <a href="{{ url('product/'. $product->slug) }}">
                                        @if ($product->productImages->first())

                                        <img class="card-img rounded-0 img-fluid" src="{{ asset('storage/'.$product->productImages->first()->path) }}" alt="{{ $product->name }}">
                                        @else
                                            <img src="{{ asset('themes/ezone/assets/img/product/fashion-colorful/1.jpg') }}" alt="{{ $product->name }}">
                                        @endif
                                    </a>
                                    <span>hot</span>
                                    <div class="product-action-list-style">
                                        <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content-list">
                                    <div class="product-list-info">
                                        <h4><a href="{{ url('product/'. $product->slug) }}">{{ $product->name }}</a></h4>
                                        <span>{{ number_format($product->priceLabel()) }}</span>
                                        <p>{!! $product->short_description !!}</p>
                                    </div>
                                    <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-list-cart-wishlist">
                                        <div class="product-list-cart">
                                            <a class="btn-hover list-btn-style add-to-card" href=""  product-id="{{ $product->id }}" product-type="{{ $product->type }}" product-slug="{{ $product->slug }}">add to cart</a>
                                        </div>
                                        <div class="product-list-wishlist">
                                            <a class="btn-hover list-btn-wishlist add-to-fav" title="Favorite"  product-slug="{{ $product->slug }}" href="">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            No product found!
                        @endforelse
                    </div>
                    <!-- end -->
                </div>
            </div>
            <div div="row">
                <ul class="pagination pagination-lg justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- End Content -->
@endsection


