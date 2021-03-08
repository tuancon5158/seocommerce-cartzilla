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

<div class="page-title-overlap bg-dark pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                    <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="ci-home"></i>Home</a></li>
                    <li class="breadcrumb-item text-nowrap"><a href="/checkout">Checkout Information</a>
                    </li>
                    <li class="breadcrumb-item text-nowrap active" aria-current="page">Checkout Payment</li>
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
                    </a><a class="step-item active " href="/checkout">
                        <div class="step-progress"><span class="step-count">2</span></div>
                        <div class="step-label"><i class="ci-user-circle"></i>Information</div>
                    </a><a class="step-item  active current" href="#">
                        <div class="step-progress"><span class="step-count">3</span></div>
                        <div class="step-label"><i class="ci-card"></i>Payment</div>
                    </a></div>
                <!-- Payment methods accordion-->
                <h2 class="h6 pb-3 mb-2">Payment method</h2>
                <div class="row">

                    <div class="col-12 col-md-12">

                        <!-- Heading -->

                        <!-- List group -->
                        <div class="list-group list-group-sm mb-7">
                            @foreach($paymentGateways as $paymentGateway)
                            <div class="list-group-item">

                                <!-- Radio -->
                                <div class="form-check custom-radio">

                                    <!-- Input -->
                                    <input class="form-check-input" id="checkoutPaymentPaypal" name="payment_gateway_id" type="radio" value="{{ $paymentGateway->id }}" {{ $loop->first ? 'checked' : '' }}>

                                    <!-- Label -->
                                    <label class="form-check-label  font-size-sm text-body text-nowrap" for="checkoutPaymentPaypal">
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
                            @foreach($cart->cart_items as $item)
                            <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0" href="{{ route('product', ['slug' => $item->product->slug]) }}"><img src="{{ \App\Helpers\Image::resizeMedia(200, $item->product->thumbnail) }}" alt="{{ $item->product->title }}" width="64" alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="{{ route('product', ['slug' => $item->product->slug]) }}">{{ $item->product->title }}</a></h6>
                                    <div class="widget-product-meta"><span class="text-accent me-2">{{ App\Helpers\Price::format($item->product->price) }}</span><span class="text-muted">x {{$item->quantity}}</span></div>
                                    @if($item->custom_price)
                                    <div class="widget-product-meta"><span class="text-accent me-2">(Customization {{ App\Helpers\Price::format($item->custom_price) }})</span><span class="text-muted">x {{$item->quantity}}</span></div>
                                    @endif
                                    @if($item->variant->title)
                                    <div class="widget-product-meta"><span class="text-accent me-2">
                                            {{ $item->variant->title }}
                                        </span>
                                    </div>
                                    @endif
                                    @if($item->custom_data)
                                    <div class="font-size-sm">
                                        @foreach($item->custom_data as $title => $custom)
                                        <div>
                                            {{ $title }}:
                                            @if(substr($custom['value'], 0, 4) == 'tmp/' and in_array(substr($custom['value'], -4), [".jpg", "jpeg", ".png", ".gif", ".bmp"]) )
                                            <div>
                                                <img width="70" src="{{ \Storage::url('/').$custom['value'] }}">
                                            </div>
                                            @else
                                            <span>
                                                {{ $custom['value'] }}
                                            </span>
                                            @endif
                                        </div>
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <ul class="list-unstyled fs-sm pb-2 border-bottom">
                            <li class="d-flex justify-content-between align-items-center"><span class="me-2">Subtotal:</span><span class="text-end"> {{ App\Helpers\Price::format($cart->subtotal) }}</span></li>
                            <li class="d-flex justify-content-between align-items-center"><span class="me-2">Tax:</span><span class="text-end"> {{ App\Helpers\Price::format($cart->discounted) }}</span></li>
                            <li class="d-flex justify-content-between align-items-center"><span class="me-2">Shipping fee:</span><span class="text-end"> {{ App\Helpers\Price::format($checkout->shipping_fee) }} <span class="ml-auto font-size-sm">
                            </li>
                            <li class="d-flex justify-content-between align-items-center"><span class="me-2">Discounted:</span><span class="text-end"> {{ App\Helpers\Price::format($checkout->discounted) }}<span class="ml-auto font-size-sm">
                            </li>
                            </li>
                        </ul>
                        {{-- //Total --}}
                        <h3 class="fw-normal text-center my-4"> {{ App\Helpers\Price::format($cart->total) }}</h3>

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
