 @extends('cartzilla::layouts.default')
 @section('head')
 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
 @stop
 @section('foot')

 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

 <script type="text/javascript">
     $(document).ready(function() {
         $('.js-select2-search').select2({
             selectionCssClass: 'custom-select'
             , width: '100%'
         });
     });

 </script>

 @stop
 @section('content')

 <?php
    $countries = App\Helpers\Country::getData();
		$breadcrumb = array(
			[
				"text" => "Wishlist"
			]
		);
	?>
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
             <h1 class="h3 text-light mb-0">Checkout</h1>
         </div>
     </div>
 </div>
 <div class="container pb-5 mb-2 mb-md-4">
     @if ($cart and $cart->cart_items->count() > 0)
     <div class="row">

         <section class="col-lg-8">
             <!-- Steps-->
             <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="/cart">
                     <div class="step-progress"><span class="step-count">1</span></div>
                     <div class="step-label"><i class="ci-cart"></i>Cart</div>
                 </a><a class="step-item active current" href="#">
                     <div class="step-progress"><span class="step-count">2</span></div>
                     <div class="step-label"><i class="ci-user-circle"></i>Information</div>
                 </a><a class="step-item " href="#">
                     <div class="step-progress"><span class="step-count">3</span></div>
                     <div class="step-label"><i class="ci-card"></i>Payment</div>
                 </a></div>
             <!-- Autor info-->
             <!-- Error messages -->
             @include('cartzilla::components.errors', ['errors' => $errors])

             <!-- Success message -->
             @if(session('success'))
             <div class="alert alert-success" role="alert">
                 Success: {{ session('success') }}
             </div>
             @endif
             <!-- Shipping address-->
             <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Shipping address</h2>
             <form class="needs-validation" method="POST" action="{{ route('checkout') }}" novalidate>
                 @csrf
                 <input type="hidden" name="cart_id" value="{{ $cart->id }}" />
                 <div class="row">
                     <div class="col-sm-6">
                         <div class="mb-3">
                             <label class="form-label" for="checkoutShippingFirstName">First Name <span class="text-danger">*</span></label>
                             <input class="form-control" name="shipping_first_name" value="{{ old('shipping_first_name', $checkout?->shipping_address?->first_name) }}" class="form-control" id="checkoutShippingFirstName" type="text" placeholder="First Name" required>
                             <div class="invalid-feedback">Please enter First name!</div><small class="form-text text-muted"></small>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="mb-3">
                             <label class="form-label" for="checkoutShippingLastName">Last Name <span class="text-danger">*</span></label>
                             <input name="shipping_last_name" value="{{ old('shipping_last_name', $checkout?->shipping_address?->last_name) }}" class="form-control" id="checkoutShippingLastName" type="text">
                             <div class="invalid-feedback">Please enter Last name!</div><small class="form-text text-muted"></small>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-12">
                         <div class="mb-3">
                             <label class="form-label" for="checkoutShippingEmail">Email <span class="text-danger">*</span></label>
                             <input required name="shipping_email" value="{{ old('shipping_email', $checkout?->shipping_address?->email) }}" class="form-control" id="checkoutShippingEmail" type="email" placeholder="Email">
                             <div class="invalid-feedback">Please provide valid email address!</div><small class="form-text text-muted"></small>
                         </div>
                     </div>

                 </div>
                 <div class="row">
                     <div class="col-sm-12">
                         <div class="mb-3">
                             <label class="form-label" for="checkoutShippingAddressOne">Address Line 1 <span class="text-danger">*</span></label>
                             <input name="shipping_address1" value="{{ old('shipping_address1', $checkout?->shipping_address?->address1) }}" class="form-control" id="checkoutShippingAddressOne" type="text" required>
                             <div class="invalid-feedback">Please enter Address Line 1</div><small class="form-text text-muted"></small>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-12">
                         <div class="mb-3">
                             <label class="form-label" for="checkoutShippingAddressTwo">Address Line 2 </label>
                             <input name="shipping_address2" value="{{ old('shipping_address2', $checkout?->shipping_address?->address2) }}" class="form-control" id="checkoutShippingAddressTwo" type="text">
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-sm-6">
                         <div class="mb-3">
                             <label class="form-label" for="checkoutShippingCountry">Country <span class="text-danger">*</span></label>
                             <select id="checkoutShippingCountry" name="shipping_country_code" class="form-select custom-select js-select2-search">
                                 <option value="">-- Select country --</option>
                                 @foreach($countries as $key => $country)
                                 <option value="{{ $key }}" {{ old('shipping_country_code', $checkout?->shipping_address?->country_code) == $key ? 'selected' : '' }}>
                                     {{ $country }}
                                 </option>
                                 @endforeach
                             </select>
                             {{-- <input class="form-control" name="shipping_first_name" value="{{ old('shipping_first_name', $checkout?->shipping_address?->first_name) }}" class="form-control" id="checkoutShippingFirstName" type="text" placeholder="First Name" required>
                             <div class="invalid-feedback">Please enter First name!</div><small class="form-text text-muted"></small> --}}
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="mb-3">
                             <label class="form-label" for="checkoutShippingState">State <span class="text-danger">*</span></label>
                             <input required name="shipping_state" value="{{ old('shipping_state', $checkout?->shipping_address?->state) }}" class="form-control" id="checkoutShippingState" type="text" placeholder="State">
                             <div class="invalid-feedback">Please enter State</div><small class="form-text text-muted"></small>
                         </div>
                     </div>
                 </div>


                 <div class="row">
                     <div class="col-sm-6">
                         <div class="mb-3">
                             <label class="form-label" for="checkoutShippingTown">Town / City <span class="text-danger">*</span></label>
                             <input required name="shipping_city" value="{{ old('shipping_city', $checkout?->shipping_address?->city) }}" class="form-control" id="checkoutShippingTown" type="text" placeholder="Town / City" required>
                             <div class="invalid-feedback">Please enter Town / City</div><small class="form-text text-muted"></small>

                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="mb-3">
                             <label class="form-label" for="checkoutShippingZIP">ZIP / Postcode <span class="text-danger">*</span></label>
                             <input required name="shipping_zip" value="{{ old('shipping_zip', $checkout?->shipping_address?->zip) }}" class="form-control" id="checkoutShippingZIP" type="text" placeholder="ZIP / Postcode" required>
                             <div class="invalid-feedback"> Please enter ZIP / Postcode</div><small class="form-text text-muted"></small>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-12">
                         <label class="form-label" for="checkoutShippingPhone">Mobile Phone <span class="text-danger">*</span></label>
                         <input required name="shipping_phone" value="{{ old('shipping_phone', $checkout?->shipping_address?->phone) }}" class="form-control" id="checkoutShippingPhone" type="tel" placeholder="Mobile Phone">
                         <div class="invalid-feedback">Please enter Mobile Phone</div><small class="form-text text-muted"></small>
                     </div>
                 </div>
                 <h6 class="mb-3 py-3 border-bottom">Billing address</h6>
                 <div class="row">
                     <div class="col-sm-12">
                         <input name="same_address" class="form-check-input" value="1" {{ old('same_address') === '1' ? 'checked' : '' }} type="checkbox" checked id="checkoutBillingAddress">
                         <label class="form-check-label" for="checkoutBillingAddress"> Use the same address?</label>
                     </div>
                 </div>
                 <h6 class="mb-3 py-3 border-bottom">Billing address</h6>
                 <div class="table-responsive mb-7">
                     <table class="table table-bordered table-sm table-hover mb-0">
                         <tbody>
                             @foreach($shippings as $index => $shipping)
                             <tr>
                                 <td>
                                     <div class="form-check">
                                         <input class=" form-check-input" id="checkoutShipping{{ $shipping->id }}" name="shipping_id" value="{{ $shipping->id }}" type="radio" {{ $loop->first ? 'checked' : '' }} />
                                         <label class="form-check-input text-body text-nowrap" for="checkoutShipping{{ $shipping->id }}">
                                             {{ $shipping->title }}
                                         </label>
                                     </div>
                                 </td>
                                 <td class="text-center">{{ $shipping->description }}</td>
                                 <td class="text-center">
                                     From {{ App\Helpers\Price::format($shipping->default_price) }}
                                 </td>
                             </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>
                 <div class="d-none d-lg-flex pt-4 mt-3">
                     <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Submit</button>

                 </div>
             </form>
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
                         <li class="d-flex justify-content-between align-items-center"><span class="me-2">Discounted:</span><span class="text-end"> {{ App\Helpers\Price::format($cart->discounted) }}</span></li>
                         <li class="d-flex justify-content-between align-items-center"><span class="me-2">Discount Code:</span><span class="text-end"> <span class="ml-auto font-size-sm">
                                     @if($cart->discount)
                                     <form action="{{ route('removeDiscount') }}" method="post">
                                         @csrf
                                         {{ $cart->discount?->code }}
                                         <button class="text-danger border-0 bg-transparent">
                                             <i class="fe fe-x"></i>
                                         </button>
                                     </form>
                                     @endif
                                 </span></span></li>
                     </ul>
                     {{-- //Total --}}
                     <h3 class="fw-normal text-center my-4"> {{ App\Helpers\Price::format($cart->total) }}</h3>
                     <form novalidate action="{{ route('discount') }}" method="post">
                         @csrf
                         <div class="mb-3">
                             <input class="form-control" name="code" id="discount" type="text" placeholder="Code" required>
                             <div class="invalid-feedback">Please provide discount.</div>
                         </div>
                         <button class="btn btn-outline-primary d-block w-100" type="submit">Apply</button>
                     </form>
                 </div>
             </div>
         </aside>
     </div>
     <!-- Navigation (mobile)-->
     <div class="row d-lg-none">
         <div class="col-lg-8">
             <div class="d-flex pt-4 mt-3">
                 <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="shop-cart.html"><i class="ci-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">Back to Cart</span><span class="d-inline d-sm-none">Back</span></a></div>
                 <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100" href="checkout-shipping.html"><span class="d-none d-sm-inline">Proceed to Shipping</span><span class="d-inline d-sm-none">Next</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a></div>
             </div>
         </div>
     </div>
     @else
     <div class="row">
         Your cart is empty!
     </div>
     @endif
 </div>
 @stop
