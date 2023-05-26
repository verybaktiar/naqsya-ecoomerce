@extends('frontend.layout')

@section('content')
	<!-- header end -->
	{{-- <div class="breadcrumb-area pt-205 breadcrumb-padding pb-210" style="background-image: url({{ asset('themes/ezone/assets/img/bg/breadcrumb.jpg') }})">
		<div class="container">
			<div class="breadcrumb-content text-center">
				<h2>Checkout Page</h2>
				<ul>
					<li><a href="{{ url('/') }}">home</a></li>
					<li> Checkout Page</li>
				</ul>
			</div>
		</div>
	</div> --}}
	<!-- checkout-area start -->
	<div class="checkout-area ptb-100">
		<div class="container">
            <form action="{{ route('orders.checkout') }}" method="post">
				@csrf
			<div class="row">
				<div class="col-lg-6 col-md-12 col-12">
					<div class="checkbox-form">
						<h3>Detail Tagihan</h3>
						<div class="row">
							<div class="col-6">
								<div class="checkout-form-list">
									<label>Nama Depan <span class="required">*</span></label>
									<input type="text" name="first_name" value="{{ old('first_name', auth()->user()->first_name) }}">
								</div>
							</div>
							<div class="col-6">
								<div class="checkout-form-list">
									<label>Nama Belakang <span class="required">*</span></label>
									<input type="text" name="last_name" value="{{ old('last_name', auth()->user()->last_name) }}">
								</div>
							</div>
							<div class="col-md-12">
								<div class="checkout-form-list">
									<label>Alamat <span class="required">*</span></label>
									<input type="text" name="address1" value="{{ old('address1', auth()->user()->address1) }}">
								</div>
							</div>
							<div class="col-md-12">
								<div class="checkout-form-list">
                                	<input type="text" name="address2" value="{{ old('address2', auth()->user()->address2) }}">
								</div>
							</div>
							<div class="col-md-12">
								<div class="checkout-form-list">
									<label>Provinsi<span class="required">*</span></label>
									<select name="province_id" id="shipping-province">
										<option value="">-- Pilih Provinsi --</option>
										@foreach($provinces as $id => $province)
											<option {{ auth()->user()->province_id == $id ? 'selected' : null }} value="{{ $id }}">{{ $province }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="checkout-form-list">
									<label>Kota<span class="required">*</span></label>
									<select name="shipping_city_id" id="shipping-city">
										<option value="">-- Pilih Kota --</option>
										@if($cities)
											@foreach($cities as $id => $city)
												<option value="{{ $id }}">{{ $city }}</option>
											@endforeach
										@endif
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="checkout-form-list">
									<label>Kode Pos<span class="required">*</span></label>
									<input type="text" name="postcode" value="{{ old('postcode', auth()->user()->postcode) }}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="checkout-form-list">
									<label>Nomor Telepon  <span class="required">*</span></label>
									<input type="text" name="phone" value="{{ old('phone', auth()->user()->phone) }}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="checkout-form-list">
									<label>Alamat Email</label>
									<input type="text" name="email" value="{{ old('email', auth()->user()->email) }}">
								</div>
							</div>
						</div>
						<div class="different-address">
							<div class="ship-different-title">
								<h3>
									<label>Alamat Tambahan?</label>
									<input id="ship-box" type="checkbox" name="ship_to"/>
								</h3>
							</div>
							<div id="ship-box-info">
								<div class="row">
									<div class="col-md-6">
										<div class="checkout-form-list">
											<label>Nama Depan <span class="required">*</span></label>
											<input type="text" name="customer_first_name" value="{{ old('customer_first_name') }}">
										</div>
									</div>
									<div class="col-md-6">
										<div class="checkout-form-list">
											<label>Nama Belakang <span class="required">*</span></label>
											<input type="text" name="customer_last_name" value="{{ old('customer_last_name') }}">
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list">
											<label>Alamat <span class="required">*</span></label>
											<input type="text" name="customer_address1" value="{{ old('address1') }}">
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list">
                                        <input type="text" name="customer_address2" value="{{ old('address2') }}">
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list">
											<label>Provinsi<span class="required">*</span></label>
											<select name="customer_province_id" id="">
												<option value="ntm">Ntb</option>
												<option value="jaksel">Jakarta Selatan</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="checkout-form-list">
											<label>City<span class="required">*</span></label>
											<select name="customer_shipping_city_id" id="customer_shipping_city">
												<option value="mataram">Mataram</option>
												<option value="kuta">Kuta</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="checkout-form-list">
											<label>Kode Pos <span class="required">*</span></label>
											<input type="text" name="customer_postcode" value="{{ old('postcode') }}">
										</div>
									</div>
									<div class="col-md-6">
										<div class="checkout-form-list">
											<label>Nomor Telepon<span class="required">*</span></label>
											<input type="text" name="customer_phone" value="{{ old('customer_phone') }}">
										</div>
									</div>
									<div class="col-md-6">
										<div class="checkout-form-list">
											<label>Email </label>
											<input type="text" name="customer_email" value="{{ old('customer_email') }}">
										</div>
									</div>
								</div>
							</div>
							<div class="order-notes">
								<div class="checkout-form-list mrg-nn">
									<label>Catatan</label>
									<input type="text" name="note" value="{{ old('note') }}">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-12">
					<div class="your-order">
						<h3>Pesanan</h3>
						<div class="your-order-table table-responsive">
							<table>
								<thead>
									<tr>
										<th class="product-name">Produk</th>
										<th class="product-total">Total</th>
									</tr>
								</thead>
								<tbody>
									@forelse ($items as $item)
										@php
											$product = isset($item->model->parent) ? $item->model->parent : $item->model;
											$image = !empty($product->productImages->first()) ? asset('storage/'.$product->productImages->first()->path) : asset('themes/ezone/assets/img/cart/3.jpg')
										@endphp
										<tr class="cart_item">
											<td class="product-name">
												{{ $item->name }}	<strong class="product-quantity"> × {{ $item->qty }}</strong>
											</td>
											<td class="product-total">
												<span class="amount">Rp{{ $item->price * $item->qty }}</span>
											</td>
										</tr>
									@empty
										<tr>
											<td colspan="2">Produk Belum Dipilih </td>
										</tr>
									@endforelse
								</tbody>
								<tfoot>
									<tr class="cart-subtotal">
										<th>Subtotal</th>
										<td><span class="amount">Rp{{ Cart::subtotal(0, ",", ".") }}</span></td>
									</tr>
									<!-- <tr class="cart-subtotal">
										<th>Tax</th>
										<td><span class="amount">jnfjk</span></td>
									</tr> -->
									<tr class="cart-subtotal">
										<th>Biaya Pengiriman (100 kg)</th>
										<td><select id="shipping-cost-option" required name="shipping_service">

										</select></td>
									</tr>
									<tr class="order-total">
										<th>Total Pesanan</th>
										<td><strong>Rp<span class="total-amount">{{ Cart::subtotal(0, ",", ".") }}</span></strong>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
						<div class="payment-method">
							<div class="payment-accordion">
								<div class="panel-group" id="faq">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h5 class="panel-title"><a data-toggle="collapse" aria-expanded="true" data-parent="#faq" href="#payment-1">Direct Bank Transfer.</a></h5>
										</div>
										<div id="payment-1" class="panel-collapse collapse show">
											<div class="panel-body">
												<p>Lakukan pembayaran langsung ke rekening bank kami. Harap gunakan ID Pesanan Anda sebagai referensi pembayaran. Pesanan Anda tidak akan dikirim sampai dana telah dicairkan di rekening kami.</p>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-2">Cheque Payment</a></h5>
										</div>
										<div id="payment-2" class="panel-collapse collapse">
											<div class="panel-body">
												<p>Lakukan pembayaran langsung ke rekening bank kami. Harap gunakan ID Pesanan Anda sebagai referensi pembayaran. Pesanan Anda tidak akan dikirim sampai dana telah dicairkan di rekening kami.</p>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-3">PayPal</a></h5>
										</div>
										<div id="payment-3" class="panel-collapse collapse">
											<div class="panel-body">
												<p>Lakukan pembayaran langsung ke rekening bank kami. Harap gunakan ID Pesanan Anda sebagai referensi pembayaran. Pesanan Anda tidak akan dikirim sampai dana telah dicairkan di rekening kami.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="order-button-payment">
									<input type="submit" value="Place order" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </form>
		</div>
	</div>
@endsection
