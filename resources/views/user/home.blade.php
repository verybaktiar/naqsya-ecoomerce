@extends('frontend.layout')

@section('content')

<div class="slider-area">
    <div class="slider-active owl-carousel">
        @foreach($slides as $slide)
            <div class="single-slider-4 slider-height-7 bg-img" style="background-image: url({{ Storage::url($slide->path) }})">
                <div class="container">
                    <div class="row">
                        <div class="ml-auto col-lg-6">
                            <div class="furniture-content fadeinup-animated">
                                <h2 class="animated">{{ $slide->title }}</h2>
                                <p class="animated">{{ $slide->body }}</p>
                                <a class="furniture-slider-btn btn-hover animated" href="{{ $slide->url }}">Go</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
<!-- End Banner Hero -->

<!-- Start Categories of The Month -->
{{-- <section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Categories of The Month</h1>
            <p>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="{{ asset ('user/assets/img/category_img_01.jpg') }}" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">Watches</h5>
            <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="{{ asset ('user/assets/img/category_img_02.jpg') }}" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Shoes</h2>
            <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="{{ asset ('user/assets/img/category_img_03.jpg') }}" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Accessories</h2>
            <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
        </div>
    </div>
</section> --}}
<!-- End Categories of The Month -->


<!-- Start Featured Product -->
<section class="bg-light">
    @if ($products)
	<div class="popular-product-area wrapper-padding-3 pt-115 pb-115">
		<div class="container-fluid">
			<div class="section-title-6 text-center mb-50">
				<h2>Produk Terpopuler</h2>
				<p>"Saatnya ubah gaya hidup Anda dengan koleksi pakaian terpopuler dari kami - Dengan berbagai macam model dan warna yang stylish serta kualitas yang terbaik, Anda akan tampil percaya diri dan memukau setiap saat!"</p>
			</div>
			<div class="product-style">
				<div class="popular-product-active owl-carousel">
					@foreach ($products as $product)
						@php
							$product = $product->parent ?: $product;
						@endphp
						<div class="product-wrapper">
							<div class="product-img">
								<a href="{{ url('product/'. $product->slug) }}">
									@if ($product->productImages->first())
										<img src="{{ Storage::url($product->productImages->first()->path) }}" alt="{{ $product->name }}">
									@else
										<img src="{{ asset('themes/ezone/assets/img/product/fashion-colorful/1.jpg') }}" alt="{{ $product->name }}">
									@endif
								</a>
								<div class="product-action">
									<a class="animate-left add-to-fav" title="Wishlist"  product-slug="{{ $product->slug }}" href="">
										<i class="pe-7s-like"></i>
									</a>
									<a class="animate-top add-to-card" title="Add To Cart" href="" product-id="{{ $product->id }}" product-type="{{ $product->type }}" product-slug="{{ $product->slug }}">
										<i class="e-p7s-cart"></i>
									</a>
									<a class="animate-right quick-view" title="Quick View" product-slug="{{ $product->slug }}" href="">
										<i class="pe-7s-look"></i>
									</a>
								</div>
							</div>
							<div class="funiture-product-content text-center">
								<h4><a href="{{ url('product/'. $product->slug) }}">{{ $product->name }}</a></h4>
								<span>Rp{{ number_format($product->priceLabel(), 0, ",", ".") }}</span>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>


	<!-- product area end -->
@endif
</section>
@endsection
