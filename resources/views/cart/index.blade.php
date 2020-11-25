@extends('layouts.front')

@section('content')
    {{-- <h2>Your Cart</h2> --}}

    {{-- <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $cartItem)
                <tr>
                <td scope="row">{{ $cartItem->name }}</td>
                <td>{{ Cart::session(auth()->id())->get($cartItem->id)->getPriceSum() }}</td>
                <td>
                <form action="{{ route('cart.update',$cartItem->id) }}">
                    <input type="number" name="quantity" id="" value="{{ $cartItem->quantity }}">
                    <input type="submit" value="Update">
                </form>
                </td>
                <td>
                <a href="{{ route('cart.destroy', $cartItem->id) }}">X</a>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <h3>
            Total: $ {{ \Cart::session(auth()->id())->getTotal() }}
        </h3>
    <a name="" id="" class="btn btn-primary" href="{{ route('cart.checkout') }}" role="button">Proceed to checkout</a> --}}
    	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">UNIT PRICE</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">TOTAL</th>
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($cartItems as $cartItem)
                                <tr>
                                    <td class="image" data-title="No"><img src="https://via.placeholder.com/100x100" alt="#"></td>
                                    <td class="product-des" data-title="Description">
                                        <p class="product-name"><a href="#">{{ $cartItem->name }}</a></p>
                                        <p class="product-des">{{ $cartItem->associatedModel->description }}</p>
                                    </td>
                                    <td class="price" data-title="Price"><span>${{ $cartItem->price }}</span></td>
                                    <td class="qty" data-title="Qty"><!-- Input Order -->
                                        <div class="input-group">
                                            <form action="{{ route('cart.update',$cartItem->id) }}">
                                            <div class="button minus">
                                                <button onclick="myFunction()" type="button" class="btn btn-primary btn-number" data-type="minus" data-field="quant[{{ $cartItem->id }}]">
                                                    <i class="ti-minus"></i>
                                                </button>
                                            </div>
                                            <input type="text" name="quant[{{ $cartItem->id }}]" class="input-number"  data-min="1" data-max="100" value="{{ $cartItem->quantity }}">
                                            <div class="button plus">
                                                <button onclick="myFunction()" type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[{{ $cartItem->id }}]">
                                                    <i class="ti-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!--/ End Input Order -->
                                    </td>
                                    <td class="total-amount" data-title="Total"><span>${{ Cart::session(auth()->id())->get($cartItem->id)->getPriceSum() }}</span></td>
                                    <td class="action" data-title="Remove"><a href="{{ route('cart.destroy', $cartItem->id) }}"><i class="ti-trash remove-icon"></i></a></td>
                                </tr>
                            @endforeach
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
            </div>
            <div class="row" id="update-cart" style="display:none;">
                <div class="col-12">
                    <div class="update-cart">
                        <button type="submit" class="btn">Update Cart</button>
                    </div>
                </form>
                </div>
            </div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
									<div class="coupon">
										<form action="#" target="_blank">
											<input name="Coupon" placeholder="Enter Your Coupon">
											<button class="btn">Apply</button>
										</form>
									</div>
									<div class="checkbox">
										<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Shipping (+10$)</label>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li>Cart Subtotal<span>${{ \Cart::session(auth()->id())->getTotal() }}</span></li>
										<li>Shipping<span>Free</span></li>
										{{-- <li>You Save<span>$20.00</span></li> --}}
										<li class="last">You Pay<span>${{ \Cart::session(auth()->id())->getTotal() }}</span></li>
									</ul>
									<div class="button5">
										<a href="{{ route('cart.checkout') }}" class="btn">Checkout</a>
                                        <a href="{{ route('home') }}" class="btn">Continue shopping</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->

	<!-- Start Shop Services Area  -->
	{{-- <section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section> --}}
	<!-- End Shop Services Area -->
@endsection

@section('scripts')
<script type="text/javascript">
    function myFunction() {
      document.getElementById('update-cart').style.display = "block";
    }
    </script>

@endsection
