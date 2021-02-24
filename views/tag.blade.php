@extends('cartzilla::layouts.default')

@section('content')

	<!-- HEADER -->
	<header class="py-13 jarallax" data-jarallax data-speed=".8" style="background: url({{ \App\Helpers\Image::resizeMedia(\App\Helpers\DeviceDetector::isMobile() ? 450 : 1000, $tag->thumbnail) }}) center center/cover no-repeat; margin-top: -1.25rem;">
		<div class="container">
			<div class="row">
				<div class="col-12">

					<!-- Heading -->
					<h1 class="h3 text-center text-white">{{ $tag->seo_h1 ?: $tag->title }}</h1>

					<!-- Description -->
					@if($desc = $tag->seo_description)
						<p class="text-white">{{ $desc }}</p>
					@endif

					<!-- Breadcrumb -->
					<ol class="breadcrumb justify-content-center mb-0 text-center text-white font-size-xs">
						<li class="breadcrumb-item">
							<a class="text-reset align-top" href="/">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a class="text-reset align-top" href="{{ route('tags') }}">Tags</a>
						</li>
						<li class="breadcrumb-item align-top">
							<a class="text-reset align-top" href="#">{{ $tag->title }}</a>
						</li>
					</ol>

				</div>
			</div>
		</div>
	</header>

	<!-- Actions -->
	{{-- <section class="py-7 border-bottom">
		<div class="container">
			<div class="row align-items-right">
				<div class="col-12 col-md">

					<!-- Categories -->
					<nav class="nav nav-overflow mb-6 mb-md-0">
						<a class="nav-link active" href="#">All</a>
					</nav>

				</div>
				<div class="col-12 col-md-auto text-right">

					<!-- Filter -->
					<!-- <a class="text-body" data-toggle="collapse" href="#collapseFilter" role="button">
						<i class="fe fe-list mr-2"></i> Filter
					</a> -->

					<!-- Sort -->
					@include('cartzilla::components.sorter_1')

				</div>
			</div>
		</div>
	</section>

	<!-- CONTENT -->
	<section class="py-12">
		<div class="container">
			@if($products and $products->count() > 0)
			<div class="row">
				@foreach($products as $product)
				<div class="col-6 col-md-3">

					@include('cartzilla::components.product_box_1', ['product' => $product])

				</div>
				@endforeach
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Pagination -->
					@include('cartzilla::components.paginator', ['paginator' => $products])
				</div>
			</div>
			@else
				<div class="alert alert-secondary" role="alert">
				  	No product found!
				</div>
			@endif
		</div>
	</section> --}}
@stop
