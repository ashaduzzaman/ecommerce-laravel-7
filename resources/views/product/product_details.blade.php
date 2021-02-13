@extends('layouts.front')

@section('content')

<div class="product-details ptb-100 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-12 d-none d-sm-block">
                <div class="shop-sidebar">
                    <!-- Single Widget -->
                    <div class="single-widget category">
                        <h3 class="title">Categories</h3>
                        <ul class="categor-list">
                            @foreach ($categories as $category)
                                <li><a href="{{ route('products.index', ['category_id' => $category->id]) }}">{{ $category->name }}</a>
                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="single-widget range">
                        <h3 class="title">Shop by Price</h3>
                        <div class="price-filter">
                            <div class="price-filter-inner">
                                <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                    <div class="label-input">
                                        <span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="check-box-list">
                            <li>
                                <label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">$20 - $50<span class="count">(3)</span></label>
                            </li>
                            <li>
                                <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">$50 - $100<span class="count">(5)</span></label>
                            </li>
                            <li>
                                <label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox">$100 - $250<span class="count">(8)</span></label>
                            </li>
                        </ul>
                    </div>
                    <div class="single-widget recent-post">
                        <h3 class="title">Recent post</h3>
                        <!-- Single Post -->
                        <div class="single-post first">
                            <div class="image">
                                <img src="https://via.placeholder.com/75x75" alt="#">
                            </div>
                            <div class="content">
                                <h5><a href="#">Girls Dress</a></h5>
                                <p class="price">$99.50</p>
                                <ul class="reviews">
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li><i class="ti-star"></i></li>
                                    <li><i class="ti-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Post -->
                        <!-- Single Post -->
                        <div class="single-post first">
                            <div class="image">
                                <img src="https://via.placeholder.com/75x75" alt="#">
                            </div>
                            <div class="content">
                                <h5><a href="#">Women Clothings</a></h5>
                                <p class="price">$99.50</p>
                                <ul class="reviews">
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li><i class="ti-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Post -->
                        <!-- Single Post -->
                        <div class="single-post first">
                            <div class="image">
                                <img src="https://via.placeholder.com/75x75" alt="#">
                            </div>
                            <div class="content">
                                <h5><a href="#">Man Tshirt</a></h5>
                                <p class="price">$99.50</p>
                                <ul class="reviews">
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Post -->
                    </div>
                    <div class="single-widget category">
                        <h3 class="title">Manufacturers</h3>
                        <ul class="categor-list">
                            <li><a href="#">Forever</a></li>
                            <li><a href="#">giordano</a></li>
                            <li><a href="#">abercrombie</a></li>
                            <li><a href="#">ecko united</a></li>
                            <li><a href="#">zara</a></li>
                        </ul>
                    </div> --}}
                </div>
                {{-- <div class="product-details-category">
                    <h4>Product Categories</h4>
                    <ul class="product-category">
                        @foreach ($categories as $category)
                            <li><a href="{{ route('products.index', ['category_id' => $category->id]) }}">{{ $category->name }}</a>
                        @endforeach
                    </ul>
                </div> --}}
            </div>
            <div class="col-md-9 col-lg-9 col-12">
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-12">
                        <div class="product-details-5 pr-70">
                            <img src="{{ asset('public/storage/'. $product->cover_img) }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 col-12">
                        <div class="sidebar-active product-details-content">
                            <h3>{{ $product->name }}</h3>
                            <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="pe-7s-star red-star"></i>
                                    <i class="pe-7s-star red-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                                {{-- <div class="quick-view-number">
                                    <span>2 Ratting (S)</span>
                                </div> --}}
                            </div>
                            <div class="details-price">
                                <span>৳ {{ $product->price }}</span>
                            </div>
                            {{-- <div class="product-color-2">
                                <h4 class="details-title">Color*</h4>
                                <div class="product-color-style2">
                                    <ul>
                                        <li class="orange"></li>
                                        <li class="blue2"></li>
                                        <li class="pink"></li>
                                        <li class="yellow"></li>
                                    </ul>
                                </div>
                            </div> --}}
                            {{-- <div class="product-size-2">
                                <h4 class="details-title">Size*</h4>
                                <div class="product-size-style2">
                                    <ul>
                                        <li><a href="#">xl</a></li>
                                        <li><a href="#">ml</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">sl</a></li>
                                        <li><a href="#">ls</a></li>
                                    </ul>
                                </div>
                            </div> --}}
                            <div class="quickview-plus-minus">

                                <div class="description-qty" data-title="Qty">
                                    <div class="input-group">
                                <form action="{{route('cart.add', $product->id)}}" type="post">
                                @csrf
                                        <div class="button minus">
                                            <button type="button" class="btn btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" name="quanttity" class="input-number"  data-min="1" data-max="100" value="1">
                                        <div class="button plus">
                                            <button type="button" class="btn btn-number" data-type="plus" data-field="quanttity">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="quickview-btn-cart">
                                    <button class="btn" type="submit">add to cart</button>
                                </div>
                            </form>

                                {{-- <div class="quickview-btn-wishlist">
                                    <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                </div> --}}
                            </div>
                            <div class="product-details-cati-tag mt-35">
                                <ul>
                                    <li class="categories-title">Categories :</li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">electronics</a></li>
                                    <li><a href="#">toys</a></li>
                                    <li><a href="#">food</a></li>
                                    <li><a href="#">jewellery</a></li>
                                </ul>
                            </div>
                            <div class="product-details-cati-tag mtb-10">
                                <ul>
                                    <li class="categories-title">Tags :</li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">electronics</a></li>
                                    <li><a href="#">toys</a></li>
                                    <li><a href="#">food</a></li>
                                    <li><a href="#">jewellery</a></li>
                                </ul>
                            </div>
                            {{-- <div class="product-share">
                                <ul>
                                    <li class="categories-title">Share :</li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-flikr"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-description-review-area pb-90">
    <div class="container">
        <div class="product-description-review text-center">
            <div class="description-review-title nav" role=tablist>
                <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">
                    Description
                </a>
                <a href="#pro-review" data-toggle="tab" role="tab" aria-selected="false">
                    Reviews (0)
                </a>
            </div>
            <div class="description-review-text tab-content">
                <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
                    <p>{{ $product->description }}</p>
                </div>
                <div class="tab-pane fade" id="pro-review" role="tabpanel">
                    <a href="#">Be the first to write your review!</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product area start -->
<div class="product-area pb-95">
    <div class="container">
        <div class="section-title text-center mb-50">
            <h2>Related products</h2>
        </div>
        <div class="product-style">
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <!-- Start Single Tab -->
                        <div class="tab-single">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                                <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                            </a>
                                            <div class="button-head">
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Add to cart" href="#">Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.html">ashdah</a></h3>
                                            <div class="product-price">
                                                <span>$20</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                                <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                            </a>
                                            <div class="button-head">
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Add to cart" href="#">Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.html">ashdah</a></h3>
                                            <div class="product-price">
                                                <span>$20</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
