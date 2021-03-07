@extends('cartzilla::layouts.default')
<?php

	    $breadcrumb = array(
			[
				"text" => "Collections"
			]
		);

	?>
@section('content')
<div class=" py-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2 text-light">
            @include('cartzilla::components.breadcrumb', ['links' => $breadcrumb,'color'=>'light'])
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-light text-lg-start">
            <h1 class="h3 mb-0">Collections </h1>
        </div>
    </div>
</div>
<div class="container pb-4 pb-sm-5">
    <!-- Categories grid-->
    <div class="row pt-5">
        <!-- Catogory-->
        @foreach($collections as $collection)
        <div class="col-md-4 col-sm-6 mb-3">
            <div class="card border-0"><a class="d-block overflow-hidden rounded-3" href="{{ route('collection', ['slug' => $collection->slug]) }}"><img class="d-block w-100" src="{{ \App\Helpers\Image::resizeMedia(300, $collection->thumbnail) }}" alt="{{ $collection->title }}" alt="{{ $collection->title }}"></a>
                <div class="card-body">
                    <h2 class="h5">{{ $collection->title }}</h2>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Catogory-->

    </div>
    <!-- Popular brands-->

</div>
@stop
