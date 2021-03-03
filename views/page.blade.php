@extends('cartzilla::layouts.default')

@section('content')

	<?php

	    $breadcrumb = array(
			[
				"text" => $page->title ?: 'Page'
			]
		);

	?>

	<!-- BREADCRUMB -->
	@include('cartzilla::components.breadcrumb', ['links' => $breadcrumb])

	<!-- CONTENT -->
	<section class="pt-5 pb-10">
		<div class="container">

			<!-- Heading -->
			<h3 class="mb-10 text-center">{{ $page->title }}</h3>

			<!-- Page content -->
			<div class="row justify-content-center">
				<div class="col-12 col-md-9">

					<!-- Error messages -->
					@include('cartzilla::components.errors', ['errors' => $errors])

					@if(session('success'))
					<div class="alert alert-success" role="alert">
					  	{{ session('success') }}
					</div>
					@endif

					{!! $page->html !!}

					<!-- Form -->
					<form method="POST" action="{{ route('contact') }}">
						@csrf

						<!-- Name -->
						<div class="form-group">
							<label class="sr-only" for="contactName">
								Your Name *
							</label>
							<input value="{{ old('name') }}" name="name" class="form-control form-control-sm" id="contactName" type="text" placeholder="Your Name *" required>
						</div>

						<!-- Email -->
						<div class="form-group">
							<label class="sr-only" for="contactEmail">
								Your Email *
							</label>
							<input value="{{ old('email') }}" name="email" class="form-control form-control-sm" id="contactEmail" type="email" placeholder="Your Email *" required>
						</div>

						<!-- Message -->
						<div class="form-group">
							<label class="sr-only" for="contactMessage">
								Message *
							</label>
							<textarea name="message" class="form-control form-control-sm" id="contactMessage" rows="5" placeholder="Message *" required>{{ old('message') }}</textarea>
						</div>

						<!-- Captcha -->
						<div class="form-group mb-7">
							<div class="mb-3">{!! captcha_img() !!}</div>
							<label class="sr-only" for="captcha">
								Captcha *
							</label>
							<input name="captcha" class="form-control form-control-sm" id="captcha" placeholder="Captcha *" required />
						</div>

						<!-- Button -->
						<button class="btn btn-dark">
							Send Message
						</button>

					</form>

				</div>
			</div>
		</div>
	</section>

@stop
