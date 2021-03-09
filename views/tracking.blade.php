<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
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
                                    <span class="text-muted"> <strong>Shipping address:</strong></span>
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
                                    <span class="text-muted"> <strong>Billing address: </strong></span>
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
                                @if($order->fulfillments)
                                <div class="col-12 mb-2">
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
                            </div>

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
</body>
</html>
