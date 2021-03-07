@extends('cartzilla::layouts.default')

@section('content')

<?php

	    $breadcrumb = array(
			[
				"text" => $page->title ?: 'Page'
			]
		);

	?>

<!-- CONTENT -->
<section class="pt-5 pb-10">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            @include('cartzilla::components.breadcrumb', ['links' => $breadcrumb])
        </div>
        <!-- Heading -->
        <h3 class="mb-5 text-center">{{ $page->title }}</h3>

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
                <form class="needs-validation" method="POST" action="{{ route('contact') }}" novalidate>
                    @csrf
                    <div class="row mb-3 mt-5">
                        <div class="col-12 col-sm-12">
                            <label class="form-label" for="contactName">Your name<span class="text-danger">*</span></label>
                            <input value="{{ old('name') }}" name="name" class="form-control form-control-sm" id="contactName" type="text" placeholder="Your Name *" required>
                            <div class="invalid-feedback">Please enter your name!</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 col-sm-12">
                            <label class="form-label" for="email"> Your Email <span class="text-danger">*</span></label>
                            <input value="{{ old('email') }}" name="email" class="form-control form-control-sm" id="contactEmail" type="email" placeholder="Your Email *" required>
                            <div class="invalid-feedback">Please enter your email!</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 col-sm-12">
                            <label class="form-label" for="contactMessage">Message<span class="text-danger">*</span></label>
                            <textarea name="message" class="form-control form-control-sm" id="contactMessage" rows="5" placeholder="Message *" required>{{ old('message') }}</textarea>
                            <div class="invalid-feedback">Please enter your message!</div>
                        </div>
                    </div>
                    <div class="form-group mb-7">
                        <div class="mb-3">{!! captcha_img() !!}</div>
                        <label class="form-label" for="captcha">
                            Captcha <span class="text-danger">*</span>
                        </label>
                        <input name="captcha" class="form-control form-control-sm" id="captcha" placeholder="Captcha *" required />
                    </div>
                    <button class="btn btn-primary mt-2 btn-sm">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@stop
