@extends('cartzilla::layouts.default')

@section('content')

<?php
		$breadcrumb = array(
			[
				"text" => "Blog"
			]
		);
	?>

<!-- BREADCRUMB -->

<!-- CONTENT -->
<section class="pt-2 pb-12">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mt-5">
            @include('cartzilla::components.breadcrumb', ['links' => $breadcrumb])
        </div>
        <div class="row  mb-5">
            <div class="col-12 mt-7">

                <!-- Heading -->
                <h3 class="mb-7 text-center mt-5 me-3">
                    {{ $title ?: 'Our Blog' }}
                </h3>
                <div class="row">
                    <ul class="nav nav-tabs mb-3 d-flex justify-content-center" role="tablist">
                        <li class="nav-item"><a class="nav-link  {{ $category ? '' : 'active'}}" href="{{ route('blog') }}">All</a></li>
                        @foreach($categories as $categoryItem)
                        <li class="nav-item"><a class="nav-link  {{ ($category and $category->slug == $categoryItem->slug) ? 'active' : ''}}" href="{{ route('blog', ['slug' => $categoryItem->slug]) }}"> {{ $categoryItem->title }}</a></li>
                        @endforeach

                    </ul>

                </div>

            </div>
        </div>
        <div class="row  pb-5">
            @if($posts and $posts->count() > 0)
            @foreach($posts as $post)
            <div class="col-12 col-md-6 col-lg-4">

                @include('cartzilla::components.post_box_1', ['post' => $post])

            </div>
            @endforeach
            @else
            <div class="alert alert-secondary my-5" role="alert">
                No post found!
            </div>
            @endif
        </div>
        @if($posts->count() > 0)
        <div class="row">
            <div class="col-12 mb-5">

                <!-- Pagination -->
                @include('cartzilla::components.paginator', ['paginator' => $posts])

            </div>
        </div>
        @endif
    </div>
</section>

@stop
