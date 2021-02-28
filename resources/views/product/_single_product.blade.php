<div class="col-xl-4 col-lg-3 col-md-3 col-12">
    <div class="single-product">
        <div class="product-img">
            <a href="{{route('products.show', $product->id)}}">
                <img class="default-img" src="{{ asset('public/storage/'.$product->cover_img) }}" alt="#">
                <img class="hover-img" src="{{ asset('public/storage/'.$product->cover_img) }}" alt="#">
            </a>
            <div class="button-head">
                <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal{{$product->id}}" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                    {{-- <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> --}}
                </div>
                <div class="product-action-2">
                    <a title="Add to cart" href="{{route('cart.add', $product->id)}}">Add to cart
                    </a>
                </div>
            </div>
        </div>
        <div class="product-content">
            <h3><a href="{{route('products.show', $product->id)}}">{{ strlen($product->name) > 50 ? substr($product->name,0,50).'...' : $product->name     }}</a></h3>
            <div class="product-price">
                @if ($product->is_sale)
                    <span class="old">৳ {{ $product->price}}</span>
                    <span>৳ {{ $product->sale_price }}</span>
                @else
                    <span>৳ {{ $product->price }}</span>
                @endif
                {{-- <span>৳{{ $product->price }}</span> --}}
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <!-- Product Slider -->
                            <div class="product-gallery">
                                <div class="quickview-slider-active">
                                    @for ($i = 0; $i < 2; $i++)
                                        <div class="single-slider">
                                            <img src="{{ 'public/storage/'.$product->cover_img }}" alt="#">
                                        </div>
                                    @endfor
                                    {{-- <div class="single-slider">
                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img src="https://via.placeholder.com/569x528" alt="#">
                                    </div> --}}
                                </div>
                            </div>
                        <!-- End Product slider -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="quickview-content">
                            <h2>{{ $product->name }}</h2>
                            {{-- <div class="quickview-ratting-review">
                                <div class="quickview-ratting-wrap">
                                    <div class="quickview-ratting">
                                        <i class="yellow fa fa-star"></i>
                                        <i class="yellow fa fa-star"></i>
                                        <i class="yellow fa fa-star"></i>
                                        <i class="yellow fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <a href="#"> (1 customer review)</a>
                                </div>
                                <div class="quickview-stock">
                                    <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                </div>
                            </div> --}}
                            <h3>৳ {{ $product->price }}</h3>
                            <div class="quickview-peragraph">
                                {{-- {!! strlen($product->description) > 200 ? substr($product->description,0,200).'...' : $product->description !!} --}}
                            </div>
                            <div class="quickview-actions">
                                <div class="quantity">
                                    <!-- Input Order -->
                                    <div class="input-group">
                                        <form action="{{route('cart.add', $product->id)}}" type="post">
                                        @csrf
                                            <div class="button minus">
                                                <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quanttity">
                                                    <i class="ti-minus"></i>
                                                </button>
                                            </div>
                                            <input type="text" name="quanttity" class="input-number"  data-min="1" data-max="1000" value="1">
                                            <div class="button plus">
                                                <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quanttity">
                                                    <i class="ti-plus"></i>
                                                </button>
                                            </div>
                                    </div>
                                    <!--/ End Input Order -->
                                </div>
                                <div class="add-to-cart">
                                    {{-- <a href="#" class="btn">Add to cart</a> --}}
                                    <button class="btn" type="submit">add to cart</button>
                                </div>
                            </div>
                            </form>
                            <div class="default-social">
                                <h4 class="share-now">Share:</h4>
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
