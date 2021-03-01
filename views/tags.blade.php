@extends('cartzilla::layouts.default')

@section('content')

	<!-- HEADER -->
    <div class="mt-5">
      	<div class="container">
        	<div class="row">
          		<div class="col-12">

            		<!-- Heading -->
            		<h1 class="mb-5 text-center">
            			{{ $title ?: 'All Tags - '.\App\Models\Option::getValue('siteName') }}
            		</h1>

            	</div>
            </div>
        </div>
    </div>

    <!-- CONTENT -->
	<section class="py-12">
		<div class="container mt-5">

			@if($tags and $tags->count() > 0)
			<div class="row">

				@foreach($tags as $tag)
				<div class="col-6 col-md-3 col-lg-2">

					<!-- Card -->
					<div class="card mb-5">

						<!-- Image -->
						<div class="card-img">
							<a href="{{ route('tag', ['slug' => $tag->slug]) }}">

								<!-- Image -->
								<img src="{{ \App\Helpers\Image::resizeMedia(200, $tag->thumbnail) }}" alt="{{ $tag->title }}" class="card-img-top">

							</a>
						</div>

						<!-- Body -->
						<div class="card-body font-weight-bold text-center">
							<a class="text-body" href="{{ route('tag', ['slug' => $tag->slug]) }}">
								{{ $tag->title }}
							</a>
						</div>

					</div>

				</div>
				@endforeach
			</div>
			@else

				<div class="modal-body flex-grow-0 my-auto text-center">

					<!-- Heading -->
					<h6 class="mb-5 text-center">Tags not found 😞</h6>

					<!-- Button -->
					<a href="{{ route('products') }}" class="btn btn-outline-dark">
						All products
					</a>

				</div>

			@endif

		</div>
	</section>

@stop
