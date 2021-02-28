@extends('layouts.front')

@section('content')
    <!-- Start Product Area -->
    {{-- <div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>{{ isset($category->name) ? $category->name : 'All' }} Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <!-- Start Single Tab -->
                        <div class="tab-single">
                            <div class="row">
                                @each('product._single_product', $products, 'product', 'product.no-products')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Product Area -->

    <!-- Product Style -->
    <section class="product-area shop-sidebar shop section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    @include('product._shop_sidebar')
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <!-- Shop Top -->
                            <div class="shop-found">
                                <p><span>{{$products->total()}}</span> Products Found</p>
                            </div>
                            <!--/ End Shop Top -->
                        </div>
                    </div>
                    <div class="row">
                            {{-- <div class="single-product">
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
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">Women Hot Collection</a></h3>
                                    <div class="product-price">
                                        <span>$29.00</span>
                                    </div>
                                </div>
                            </div> --}}
                            @each('product._single_product', $products, 'product', 'product.no-products')
                    </div>

                    {{ $products->appends(['search'=>request('search')])->render()}}
                </div>

            </div>
        </div>
    </section>
    <!--/ End Product Style 1  -->
</div>
@endsection
