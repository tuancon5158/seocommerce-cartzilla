<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<?php
    $countries = App\Helpers\Country::getData();
	?>
<body class="bg-light">
    <div class="border-bottom shadow-sm py-1" style="background:#2b3445">
        <div id="carouselExampleControls" class="d-flex justify-content-center text-light" data-bs-ride="carousel">
            <strong> Welcome to order tracking page </strong>
        </div>
    </div>
    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 py-4 bg-body border-bottom shadow-sm">
        <p class="h5 my-0 me-md-auto fw-bold"></p>
        <nav class="d-flex my-2 my-md-0 me-md-3 list-unstyled">
            <a class="nav-link p-2 text-dark list-unstyled" href="/products">All product</a>
            <a class=" nav-link p-2 text-dark" href="/collections">Collections</a>
        </nav>
    </header>
    <div class="container">
        <div class="row ">
            <div class="col d-flex justify-content-center fs-3">
                <strong> Order Tracking </strong>
            </div>
        </div>
        <div class="row ">
            <div class="col d-flex justify-content-between mt-5 mb-3">
                <nav aria-label="breadcrumb me-md-auto">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Order Tracking</li>
                    </ol>
                </nav>
                @if($order)
                <form action="{{ route('unauthorizeOrderTracking') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-block btn-success mb-2">
                        Exit tracking
                    </button>
                </form>
                @endif
            </div>

        </div>
        @if($order)
        <div class="row gy-5 mb-10 pb-10" style="padding-bottom:100px">
            <div class="col col-sm-7">
                <div class="shadow-sm rounded bg-body" style="height: 100%">
                    <div class="row justify-content-center py-5">
                        <div class="col-12 col-md-12">
                            <div class="row mb-6 px-5 py-2">
                                <div class="col-6 mb-2">
                                    <span class="text-muted"> <strong>Payment status: </strong></span>
                                    <span>{{ ucfirst($order->payment_status) }}</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <span class="text-muted"> <strong>Support status: </strong></span>
                                    <span>{{ ucfirst(str_replace('-', ' ', $order->support_status)) }}</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <span class="text-muted"><strong>Fulfillment status: </strong></span>
                                    <span>{{ ucfirst($order->fulfillment_status) }}</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <span class="text-muted"> <strong>Last update: </strong></span>
                                    <span>{{ $order->updated_at->diffForHumans() }}</span>
                                </div>
                                <div class="col-12 mt-2">
                                    <hr />
                                    <span class="mb-2 text-muted d-flex justify-content-between"> <strong>Shipping address:</strong>
                                        @if (empty($order->fulfillments->count()))
                                        <button id="shipping_address_hash" type="button" class="ml-2 btn btn-success" data-bs-toggle="modal" data-bs-target="#modalChangeAddress">Change address</button>
                                        @endif
                                    </span>
                                    <span class="lh-lg">
                                        <p>{{$order->shipping_address->first_name }} {{ $order->shipping_address->last_name }}, {{ $order->shipping_address->email }},

                                            @if($order->shipping_address->phone)
                                            {{ $order->shipping_address->phone }},
                                            @endif

                                            {{ $order->shipping_address->address1 }},
                                            @if($order->shipping_address->address2)
                                            Address2: {{ $order->shipping_address->address2 }},
                                            @endif
                                            {{ $order->shipping_address->city }}, {{ $order->shipping_address->state }}, {{ $order->shipping_address->zip }}, {{ \App\Helpers\Country::getCountryNameByCode($order->shipping_address->country_code) }}</p>

                                    </span>
                                    <hr />
                                    <span class="text-muted d-flex justify-content-between mb-2"> <strong>Billing address: </strong>
                                        @if (empty($order->fulfillments->count()))
                                        <button id="billing_address_hash" type="button" class="ml-2 btn btn-success" data-bs-toggle="modal" data-bs-target="#modalChangeAddress">Change address</button>
                                        @endif
                                    </span>
                                    <span class="lh-lg">
                                        <p>{{$order->billing_address->first_name }} {{ $order->billing_address->last_name }}, {{ $order->billing_address->email }},

                                            @if($order->billing_address->phone)
                                            {{ $order->billing_address->phone }},
                                            @endif

                                            {{ $order->billing_address->address1 }},
                                            @if($order->billing_address->address2)
                                            Address2: {{ $order->billing_address->address2 }},
                                            @endif
                                            {{ $order->billing_address->city }}, {{ $order->billing_address->state }}, {{ $order->billing_address->zip }}, {{ \App\Helpers\Country::getCountryNameByCode($order->billing_address->country_code) }}</p>
                                    </span>
                                </div>
                                @if($order->fulfillments->count())
                                <div class="col-12 mt-2">
                                    <hr class="mt-0" />
                                    <div class="text-muted"> <strong>Fulfillments:</strong></div>
                                    @foreach($order->fulfillments as $fulfillment)
                                    <div class="card ml-5 mb-2 mt-2 bg-light py-2 px-4 rounded">
                                        <div class="pt-4">
                                            <!-- Time -->
                                            <p class="text-muted">
                                                Last update: {{ $fulfillment->updated_at->format('M d Y \a\t H:i') }} ({{ $fulfillment->updated_at->diffForHumans() }})
                                            </p>
                                        </div>
                                        <div class="">
                                            <table class="table table-borderless">
                                                <tr>
                                                    <td>Status:</td>
                                                    <td>{{ ucfirst($fulfillment->status) }}</td>
                                                </tr>

                                                @if($fulfillment->carrier)
                                                <tr>
                                                    <td>Carrier:</td>
                                                    <td>{{ $fulfillment->carrier }}</td>
                                                </tr>
                                                @endif

                                                @if($fulfillment->tracking)
                                                <tr>
                                                    <td>Tracking:</td>
                                                    <td>{!! $fulfillment->tracking !!}</td>
                                                </tr>
                                                @endif

                                            </table>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                                <ul class="list-group list-group-lg list-group-flush-x mb-6">
                                    @foreach($order->order_items as $item)
                                    <li class="list-group-item py-2">
                                        <div class="row align-items-center">
                                            <div class="col-4 col-md-3">

                                                <!-- Image -->
                                                <a href="{{ route('product', ['slug' => @$item->captured_data['product']['slug']]) }}">
                                                    <img src="{{ @\App\Helpers\Image::resizeMedia(150, $item->captured_data['product']['thumbnail']) }}" alt="{{ @$item->captured_data['product']['title'] }}" class="img-fluid">
                                                </a>

                                            </div>
                                            <div class="col">

                                                <!-- Title -->
                                                <p class="mb-0 font-size-sm font-weight-bold">
                                                    <a style="text-decoration:none;color:#198754" class="text-body; " href="{{ route('product', ['slug' => @$item->captured_data['product']['slug']]) }}">
                                                        <strong> {{ @$item->captured_data['product']['title'] }} </strong>
                                                    </a>

                                                    <span class="text-muted">
                                                        @if($variantTitle = @$item->captured_data['variant']['title']) <p class="mb-0"><small>{{ $variantTitle }}</small></p> @endif
                                                        <p class="mb-0"><small>Price: {{ App\Helpers\Price::format($item->unit_price) }}</small></p>

                                                        @if($item->custom_data and count($item->custom_data))
                                                        @foreach($item->custom_data as $customKey => $data)
                                                        <p class="mb-0"><small>{{ $customKey }}: {{ $data['value'] }} @if($data['price']) ({{ App\Helpers\Price::format($data['price']) }}) @endif</small></p>
                                                        @endforeach
                                                        @endif

                                                        <p class="mb-0"><small>Qty: {{ $item->quantity }}</small></p>

                                                        <hr />
                                                        <strong>Total</strong>: {{ App\Helpers\Price::format($item->price) }}
                                                    </span>
                                                </p>

                                                <!-- Variant data -->
                                                @if($variantTitle = @$orderItem->captured_data['variant']['title'])
                                                <div class="font-size-sm">
                                                    ({{ $variantTitle }})
                                                </div>
                                                @endif

                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-sm-5 pa-2" style="height: 100%">
                <div class="shadow-sm rounded bg-body pa-2 mb-3">
                    <div class="col-12 px-3 py-5">
                        <table style="width:100%">
                            <tbody>
                                <tr>
                                    <td> <strong>Subtotal</strong></td>
                                    <td><span class="ml-auto font-size-sm">{{ App\Helpers\Price::format($order->subtotal) }}</span></td>
                                </tr>

                                <tr>
                                    <td><strong>Tax</strong></td>
                                    <td><span class="ml-auto font-size-sm">{{ App\Helpers\Price::format($order->tax) }}</span></td>
                                </tr>
                                <tr>
                                    <td> <strong>Shipping fee </strong></td>
                                    <td><span class="ml-auto font-size-sm">{{ App\Helpers\Price::format($order->shipping_fee) }}</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Discounted</strong></td>
                                    <td><span class="ml-auto font-size-sm">{{ App\Helpers\Price::format($order->discounted) }}</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Total</strong></td>
                                    <td> <span class="ml-auto font-size-sm">{{ App\Helpers\Price::format($order->total) }}</span></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="shadow-sm rounded bg-body pa-2">

                    <div class="align-items-end justify-content-between mb-10 mb-md-0 ">
                        <!-- Messages -->
                        <div class="mb-5 mb-md-0 py-4 px-4">
                            <div class="d-flex justify-content-center">
                                <p class="fs-4">
                                    <strong> Conversation </strong>
                                </p>
                            </div>


                            @foreach($messages->reverse() as $message)
                            @if($message->user)
                            <div class="pl-4 mb-2">
                                <small><strong>{{ $message->user->name }}</strong></small>
                                <div class="d-inline-block bg-light px-5 py-1 text-muted" style="max-width: 300px; line-height: 1.25; border-radius: 1rem;">
                                    {{ $message->message }}
                                </div>
                            </div>
                            @elseif($message->is_customer)
                            <div class="pl-4 mb-2 text-end">
                                <div class="d-inline-block px-5 py-1 text-muted text-left" style="max-width: 300px; line-height: 1.25; border-radius: 1rem;background: #bee2d1">
                                    {{ $message->message }}
                                </div>
                                <small style="color: #198754"><strong>You</strong></small>
                            </div>
                            @endif
                            @endforeach

                            <form action="{{ route('sendMessage') }}" method="POST">
                                @csrf
                                <div class="row form-row mt-3">

                                    <div class="col">

                                        <!-- Input -->
                                        <input name="message" class="form-control form-control" id="messageTracking" type="text" placeholder="Message..." />

                                    </div>
                                    <div class="col-auto">

                                        <!-- Button -->
                                        <button class="btn  btn-success" type="submit">
                                            Send message
                                        </button>

                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                @else
                <div class="shadow-sm rounded bg-body pa-2  d-flex justify-content-center">
                    <div class="col-md-8 col-lg-6 py-5 px-5">
                        @if(isset($errors) and $errors->count() > 0)
                        <div class="alert alert-danger" role="alert">
                            <ul class="mb-0">
                                @foreach((array) $errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif

                        <form action="{{ route('tracking') }}" method="post" class="text-center">
                            @csrf
                            <div class="input-group mb-4">
                                <input name="order_id" class="form-control" type="search" placeholder="Order ID">
                            </div>
                            <div class="input-group mb-4">
                                <input name="email" class="form-control" type="search" placeholder="Email">
                            </div>
                            <!-- Button -->
                            <button type="submit" class="btn btn-success">
                                Search
                            </button>
                        </form>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    </div>
    <footer class="footer mt-auto py-3 fixed-bottom" style="background:#2b3445">
        <div class="container">
            <div class=" fs-xs text-light opacity-50 text-center text-md-start"> © 2021 {{ App\Models\Option::getValue('siteName') }} All rights reserved.</div>
        </div>
    </footer>
    <div class="modal fade " id="modalChangeAddress" tabindex="-1" aria-labelledby="modalChangeAddress" aria-hidden="true">
        <form class="row g-3 needs-validation">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalChangeAddress">Change Address</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="firstName">First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" name="first_name" class="form-control" id="firstName" type="text" placeholder="First Name" required>
                                    <div class="invalid-feedback">Please enter First name!</div><small class="form-text text-muted"></small>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="lastName">Last Name <span class="text-danger">*</span></label>
                                    <input name="last_name" class="form-control" id="lastName" type="text">
                                    <div class="invalid-feedback">Please enter Last name!</div><small class="form-text text-muted"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
                                    <input required name="email" class="form-control" id="email" type="email" placeholder="Email">
                                    <div class="invalid-feedback">Please provide valid email address!</div><small class="form-text text-muted"></small>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="addressOne">Address Line 1 <span class="text-danger">*</span></label>
                                    <input name="address1" class="form-control" id="addressOne" type="text" required>
                                    <div class="invalid-feedback">Please enter Address Line 1</div><small class="form-text text-muted"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="addressTwo">Address Line 2 </label>
                                    <input name="address2" class="form-control" id="addressTwo" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3 form-group">
                                    <label class="form-label" for="country">Country <span class="text-danger">*</span></label>
                                    <div>
                                        <select id="country" name="country_code" class=" form-select custom-select js-select2-search">
                                            <option value="">-- Select country --</option>
                                            @foreach($countries as $key => $country)
                                            <option value="{{ $key }}">
                                                {{ $country }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="state">State <span class="text-danger">*</span></label>
                                    <input required name="state" class="form-control" id="state" type="text" placeholder="State">
                                    <div class="invalid-feedback">Please enter State</div><small class="form-text text-muted"></small>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="town">Town / City <span class="text-danger">*</span></label>
                                    <input required name="city" class="form-control" id="town" type="text" placeholder="Town / City" required>
                                    <div class="invalid-feedback">Please enter Town / City</div><small class="form-text text-muted"></small>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="ZIP">ZIP / Postcode <span class="text-danger">*</span></label>
                                    <input required name="zip" class="form-control" id="ZIP" type="text" placeholder="ZIP / Postcode" required>
                                    <div class="invalid-feedback"> Please enter ZIP / Postcode</div><small class="form-text text-muted"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="form-label" for="phone">Mobile Phone <span class="text-danger">*</span></label>
                                <input required name="phone" class="form-control" id="phone" type="tel" placeholder="Mobile Phone">
                                <div class="invalid-feedback">Please enter Mobile Phone</div><small class="form-text text-muted"></small>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button id="IDModal" type="submit" class="btn btn-success openBtn">
                            <span id="loadingButton" class="d-none spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>

                            Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        var order = < ? php echo json_encode(json_decode($order)); ? > ;
        //shipping_address_hash / billing_address_hash
        var fieldAddressChange = 'shipping_address_hash'
        $("#shipping_address_hash").click(function() {
            fieldAddressChange = 'shipping_address_hash'
            var dataDefault = order.shipping_address
            $('#lastName').val(dataDefault.last_name)
            $('#firstName').val(dataDefault.first_name)
            $('#email').val(dataDefault.email)
            $('#country').val(dataDefault.country_code)
            $('#phone').val(dataDefault.phone)
            $('#addressOne').val(dataDefault.address1)
            $('#addressTwo').val(dataDefault.address2)
            $('#town').val(dataDefault.city)
            $('#state').val(dataDefault.state)
            $('#ZIP').val(dataDefault.zip)
            $('#country option').each(function(index) {
                if (dataDefault.country_code == $(this).val()) {
                    $(this).attr('selected', 'selected');
                }
            });
        })
        $("#billing_address_hash").click(function() {
            fieldAddressChange = 'billing_address_hash'
            var dataDefault = order.billing_address
            $('#lastName').val(dataDefault.last_name)
            $('#firstName').val(dataDefault.first_name)
            $('#email').val(dataDefault.email)
            $('#country').val(dataDefault.country_code)
            $('#phone').val(dataDefault.phone)
            $('#addressOne').val(dataDefault.address1)
            $('#addressTwo').val(dataDefault.address2)
            $('#town').val(dataDefault.city)
            $('#state').val(dataDefault.state)
            $('#ZIP').val(dataDefault.zip)
            $('#country option').each(function(index) {
                if (dataDefault.country_code == $(this).val()) {
                    $(this).attr('selected', 'selected');
                }
            });


        })
        $("#IDModal").click(function(e) {
            const last_name = $('#lastName').val()
            const first_name = $('#firstName').val()
            const email = $('#email').val()
            const phone = $('#phone').val()
            const address1 = $('#addressOne').val()
            const address2 = $('#addressTwo').val()
            const city = $('#town').val()
            const state = $('#state').val()
            const country_code = $('#country').val()
            const zip = $('#ZIP').val()
            $('#loadingButton').removeClass("d-none")
            $.ajax({
                type: 'POST'
                , url: ' /ajax/addresses'
                , data: {
                    last_name
                    , first_name
                    , email
                    , phone
                    , address1
                    , address2
                    , city
                    , state
                    , country_code
                    , zip
                }
                , headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                , success: function(data) {
                    $.ajax({
                        type: 'PATCH'
                        , url: '/ajax/orders/' + order.id
                        , data: {
                            [fieldAddressChange]: data.hash

                        }
                        , headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                        , success: function(data) {
                            if (data) {
                                location.reload()
                            }

                        }
                        , error: function(msg) {
                            console.log(msg.responseJSON);
                        }
                    });

                }
                , error: function(msg) {
                    console.log(msg.responseJSON);
                }
            });
            e.preventDefault();
        });

        function setFormData() {
            console.log("set")
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-select2-search').select2({
                selectionCssClass: 'custom-select'
                , width: '100%'
            });
        });

    </script>
</body>
<style type="text/css">
    .select2-selection--single {
        border: none !important;
        padding: .2rem 1rem !important;
        border: 1px solid #dae1e7 !important;
        height: auto !important
    }

    .select2-selection__arrow {
        top: 10px !important;
    }

</style>

</html>
