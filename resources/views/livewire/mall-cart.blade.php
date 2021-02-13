<div>
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
                                    <td class="image" data-title="No"><img src="{{ asset('public/storage/'.$cartItem['associatedModel']['cover_img']) }}" alt="#"></td>
                                    <td class="product-des" data-title="Description">
                                        <p class="product-name"><a href="#">{{ strlen($cartItem['name']) > 50 ? substr($cartItem['name'],0,50).'...' : $cartItem['name'] }}</a></p>
                                        {{-- <p class="product-des">{{ $cartItem->associatedModel->description }}</p> --}}
                                    </td>
                                    <td class="price" data-title="Price"><span>৳{{ $cartItem['price'] }}</span></td>
                                    <td class="qty" data-title="Qty"><!-- Input Order -->
                                        <div class="input-group">
                                            <livewire:cart-update-form :cartItem="$cartItem" :key="$cartItem['id']"/>
                                        </div>
                                        <!--/ End Input Order -->
                                    </td>
                                    <td class="total-amount" data-title="Total"><span>৳{{ Cart::session(auth()->id())->get($cartItem['id'])->getPriceSum() }}</span></td>
                                    <td class="action" data-title="Remove"><a href="{{ route('cart.destroy', $cartItem['id']) }}"><i class="ti-trash remove-icon"></i></a></td>
                                </tr>
                            @endforeach
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
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
										<form action="{{ route('cart.coupon') }}" method="GET">
											<input name="coupon_code" placeholder="Enter Your Coupon">
											<button class="btn" type="submit" name="submit">Apply</button>
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
										<li>Cart Subtotal<span>৳{{ \Cart::session(auth()->id())->getTotal() }}</span></li>
										<li>Shipping<span>Free</span></li>
										<li class="last">You Pay<span>৳{{ \Cart::session(auth()->id())->getTotal() }}</span></li>
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
</div>
