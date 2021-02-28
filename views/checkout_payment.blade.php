@extends('cartzilla::layouts.default')

@section('content')

<?php

	    $breadcrumb = array(
			[
				"text" => "Shopping Cart",
				"link" => "/cart"
			],
			[
				"text" => "Checkout Information",
				"link" => "/checkout"
			],
			[
				"text" => "Checkout Payment"
			]
		);

	?>

<!-- BREADCRUMB -->
@include('cartzilla::components.breadcrumb', ['links' => $breadcrumb])

<div class="page-title-overlap bg-dark pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                    <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
                    <li class="breadcrumb-item text-nowrap"><a href="shop-grid-ls.html">Shop</a>
                    </li>
                    <li class="breadcrumb-item text-nowrap active" aria-current="page">Checkout</li>
                </ol>
            </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Shipping & payment</h1>
        </div>
    </div>
</div>
@if ($cart and $cart->cart_items->count() > 0)
<form action="{{ route('createCheckoutPayment', ['checkout' => $checkout]) }}" method="post">
    @csrf
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            <section class="col-lg-8">
                <!-- Steps-->
                <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="/cart">
                        <div class="step-progress"><span class="step-count">1</span></div>
                        <div class="step-label"><i class="ci-cart"></i>Cart</div>
                    </a><a class="step-item active " href="checkout-details.html">
                        <div class="step-progress"><span class="step-count">2</span></div>
                        <div class="step-label"><i class="ci-user-circle"></i>Information</div>
                    </a><a class="step-item  active current" href="checkout-payment.html">
                        <div class="step-progress"><span class="step-count">3</span></div>
                        <div class="step-label"><i class="ci-card"></i>Payment</div>
                    </a></div>
                <!-- Payment methods accordion-->
                <h2 class="h6 pb-3 mb-2">Payment method</h2>
                <div class="row">

                    <div class="col-12 col-md-7">

                        <!-- Heading -->

                        <!-- List group -->
                        <div class="list-group list-group-sm mb-7">
                            @foreach($paymentGateways as $paymentGateway)
                            <div class="list-group-item">

                                <!-- Radio -->
                                <div class="custom-control custom-radio">

                                    <!-- Input -->
                                    <input class="custom-control-input" id="checkoutPaymentPaypal" name="payment_gateway_id" type="radio" value="{{ $paymentGateway->id }}" {{ $loop->first ? 'checked' : '' }}>

                                    <!-- Label -->
                                    <label class="custom-control-label font-size-sm text-body text-nowrap" for="checkoutPaymentPaypal">
                                        {{ $paymentGateway->title }}
                                    </label>

                                </div>

                            </div>
                            @endforeach
                        </div>

                    </div>

                </div>
            </section>
            <!-- Sidebar-->
            <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
                <div class="bg-white rounded-3 shadow-lg p-4 ms-lg-auto">
                    <div class="py-2 px-xl-2">
                        <div class="widget mb-3">
                            <h2 class="widget-title text-center">Order summary</h2>
                            <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/01.jpg" width="64" alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h6>
                                    <div class="widget-product-meta"><span class="text-accent me-2">$150.<small>00</small></span><span class="text-muted">x 1</span></div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/02.jpg" width="64" alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h6>
                                    <div class="widget-product-meta"><span class="text-accent me-2">$79.<small>50</small></span><span class="text-muted">x 1</span></div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/03.jpg" width="64" alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h6>
                                    <div class="widget-product-meta"><span class="text-accent me-2">$22.<small>50</small></span><span class="text-muted">x 1</span></div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/04.jpg" width="64" alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">Cotton Polo Regular Fit</a></h6>
                                    <div class="widget-product-meta"><span class="text-accent me-2">$9.<small>00</small></span><span class="text-muted">x 1</span></div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled fs-sm pb-2 border-bottom">
                            <li class="d-flex justify-content-between align-items-center"><span class="me-2">Subtotal:</span><span class="text-end">$265.<small>00</small></span></li>
                            <li class="d-flex justify-content-between align-items-center"><span class="me-2">Shipping:</span><span class="text-end">—</span></li>
                            <li class="d-flex justify-content-between align-items-center"><span class="me-2">Taxes:</span><span class="text-end">$9.<small>50</small></span></li>
                            <li class="d-flex justify-content-between align-items-center"><span class="me-2">Discount:</span><span class="text-end">—</span></li>
                        </ul>
                        <h3 class="fw-normal text-center my-4">$274.<small>50</small></h3>
                        <button class="btn btn-primary d-block w-100" type="submit">Pay now</button>
                    </div>
                </div>
            </aside>
        </div>
        <!-- Navigation (mobile)-->
</form>
@endif
</div>

@stop
