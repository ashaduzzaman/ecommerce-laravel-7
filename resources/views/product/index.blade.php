@extends('layouts.front')

@section('content')
    <!-- Start Product Area -->
    <div class="product-area section">
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
    </div>
	<!-- End Product Area -->
</div>
@endsection
