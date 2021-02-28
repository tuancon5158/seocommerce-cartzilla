@extends('cartzilla::layouts.default')

@section('content')

	<?php
		$breadcrumb = array(
			[
				"text" => "Order Tracking"
			]
		);
	?>

	<!-- BREADCRUMB -->
	@include('cartzilla::components.breadcrumb', ['links' => $breadcrumb])

	<!-- HEADER -->
	<section class="pt-7 pb-12">
		<div class="container">

			<!-- Heading -->
			<h3 class="mb-10 text-center">Order Tracking</h3>

			<div class="row justify-content-center">

				@if($order)
				<div class="col-12 col-md-7">

					<!-- Status -->
					<div class="row mb-6">
						<div class="col-6 mb-2">
							<span class="text-muted">Payment status:</span>
							<strong>{{ ucfirst($order->payment_status) }}</strong>
						</div>
						<div class="col-6 mb-2">
							<span class="text-muted">Support status:</span>
							<strong>{{ ucfirst(str_replace('-', ' ', $order->support_status)) }}</strong>
						</div>
						<div class="col-6 mb-2">
							<span class="text-muted">Fulfillment status:</span>
							<strong>{{ ucfirst($order->fulfillment_status) }}</strong>
						</div>
						<div class="col-6 mb-2">
							<span class="text-muted">Last update:</span>
							<strong>{{ $order->updated_at->diffForHumans() }}</strong>
						</div>
						<div class="col-12 mb-2">
							<hr />
							<span class="text-muted">Shipping address:</span>
							<span>
								@include('cartzilla::components.tracking.address', ['address' => $order->shipping_address])
							</span>
							<hr />
							<span class="text-muted">Billing address:</span>
							<span>
								@include('cartzilla::components.tracking.address', ['address' => $order->billing_address])
							</span>
						</div>
						@if($order->fulfillments)
						<div class="col-12 mb-2">
							<hr class="mt-0" />
							<div class="text-muted">Fulfillments:</div>
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

					<!-- Cart items -->
					<ul class="list-group list-group-lg list-group-flush-x mb-6">
						<!-- Cart item -->
						@foreach($order->order_items as $item)
						<li class="list-group-item">
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
										<a class="text-body" href="{{ route('product', ['slug' => @$item->captured_data['product']['slug']]) }}">
											{{ @$item->captured_data['product']['title'] }}
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

					<!-- Send message -->
					<div class="align-items-end justify-content-between mb-10 mb-md-0">

						<!-- Messages -->
						<div class="mb-7 mb-md-0">
							<label class="font-size-sm font-weight-bold">
								Message:
							</label>

							@foreach($messages->reverse() as $message)
								@if($message->user)
									<div class="pl-4 mb-2">
							            <small><strong>{{ $message->user->name }}</strong></small>
							            <div class="d-inline-block bg-light px-5 py-1 text-muted" style="max-width: 200px; line-height: 1.25; border-radius: 1rem;">
								        	{{ $message->message }}
								        </div>
								    </div>
						        @elseif($message->is_customer)
						        	<div class="pl-4 mb-2 text-right">
							            <div class="d-inline-block px-5 py-1 text-muted text-left" style="max-width: 200px; line-height: 1.25; border-radius: 1rem;background: #e6f9ff">
								        	{{ $message->message }}
								        </div>
								        <small style="color: #3b9ebd"><strong>You</strong></small>
								    </div>
						        @endif
						    @endforeach

    						<form action="{{ route('sendMessage') }}" method="POST">
							@csrf
								<div class="row form-row mt-3">

									<div class="col">

										<!-- Input -->
										<input name="message" class="form-control form-control-sm" id="messageTracking" type="text" placeholder="Message..." />

									</div>
									<div class="col-auto">

										<!-- Button -->
										<button class="btn btn-sm btn-dark" type="submit">
											Send message
										</button>

									</div>
								</div>
							</form>
						</div>

					</div>

				</div>
				<div class="col-12 col-md-5 col-lg-4 offset-lg-1">

					<!-- Total -->
					<div class="card mb-7 bg-light">
						<div class="card-body">
							<ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
								<li class="list-group-item d-flex">
									<span>Subtotal</span> <span class="ml-auto font-size-sm">{{ App\Helpers\Price::format($order->subtotal) }}</span>
								</li>
								<li class="list-group-item d-flex">
									<span>Tax</span> <span class="ml-auto font-size-sm">{{ App\Helpers\Price::format($order->tax) }}</span>
								</li>
								<li class="list-group-item d-flex">
									<span>Shipping fee</span> <span class="ml-auto font-size-sm">{{ App\Helpers\Price::format($order->shipping_fee) }}</span>
								</li>
								<li class="list-group-item d-flex">
									<span>Discounted</span> <span class="ml-auto font-size-sm">{{ App\Helpers\Price::format($order->discounted) }}</span>
								</li>
								<li class="list-group-item d-flex font-size-lg font-weight-bold">
									<span>Total</span> <span class="ml-auto font-size-sm">{{ App\Helpers\Price::format($order->total) }}</span>
								</li>
							</ul>
						</div>
					</div>

					<!-- Button -->
					<form action="{{ route('unauthorizeOrderTracking') }}" method="post">
						@csrf

						<button type="submit" class="btn btn-block btn-dark mb-2">
							Exit tracking
						</button>
					</form>

				</div>

				@else

				<!-- Search -->
				<div class="col-md-8 col-lg-5">

					<!-- Errors -->
					@include('cartzilla::components.errors', ['errors' => $errors])

					<!-- Success -->
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
						<button type="submit" class="btn btn-dark">
							Search
						</button>
					</form>
				</div>

				@endif

			</div>
		</div>
	</section>

@stop
