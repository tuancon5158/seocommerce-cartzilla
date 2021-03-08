@extends('cartzilla::layouts.default')

@section('content')

<?php
	    // Get 3 newest
	    $posts = \App\Models\Post::orderBy('id', 'desc')->take(3)->get();

	    $breadcrumb = array(
			[
				"text" => "Blog",
				"link" => "/blog"
			],
			[
				"text" => $post->categories?->count() ? $post->categories->first()->title : null,
				"link" => $post->categories?->count() ? "/blog/".$post->categories->first()->slug : null,
			],
			[
				"text" => $post->title
			]
		);

	?>

<!-- BREADCRUMB -->
{{-- @include('cartzilla::components.breadcrumb', ['links' => $breadcrumb]) --}}

<!-- ARTICLE -->
<article class="pt-7 post-content">
    {{-- {{  $posts }} --}}
    <!-- HEADER -->
    <header class="container">
        <div class="d-flex justify-content-between align-items-center mt-5">
            @include('cartzilla::components.breadcrumb', ['links' => $breadcrumb])
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">

                <!-- Heading -->
                <h1 class="mb-3 h3">{{ $post->title }}</h1>

                <!-- Subheading -->
                <p class="mb-0 text-muted">
                    By Admin
                    /
                    {{ $post->updated_at->format('M d, Y') }}
                </p>

            </div>
        </div>
    </header>

    <!-- Image -->
    <section class="pt-10">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">

                    <!-- Image -->
                    <img class="img-fluid" src="{{ \App\Helpers\Image::resizeMedia(\App\Helpers\DeviceDetector::isMobile() ? 450 : 950, $post->thumbnail) }}" alt="{{ $post->title }}">

                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="pt-10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 font-size-lg text-gray-500">

                    {!! $post->content !!}

                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="pt-0">
        <div class="container">
            @if($categories = $post->categories and $categories->count())
            <div class="row mb-5">
                <div class="col-12 text-center">
                    @foreach($categories as $category)
                    <a class="btn btn-xs btn-outline-border font-weight-normal text-gray-500 mr-3 mb-3" href="{{ route('blog', ['slug' => $category->slug]) }}">
                        {{ $category->title }}
                    </a>
                    @endforeach
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-12 text-center">

                    <!-- Buttons -->
                    <a class="btn btn-facebook mr-3 mb-3" href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}" target="_blank">
                        <i class="fab fa-facebook-f mr-2"></i> Share on Facebook
                    </a>
                    <a class="btn btn-twitter mr-3 mb-3" href="https://twitter.com/share?url={{ Request::url() }}&hashtag={{ str_replace('_', '', Illuminate\Support\Str::snake(\App\Models\Option::getValue('siteName'))) }}" target="_blank">
                        <i class="fab fa-twitter mr-2"></i> Share on Twitter
                    </a>
                    <a class="btn btn-pinterest mr-3 mb-3" href="https://pinterest.com/pin/create/button/?url={{ Request::url() }}" target="_blank">
                        <i class="fab fa-pinterest-p mr-2"></i> Share on Pinterest
                    </a>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-6">
                    @if($previousPost = App\Models\Post::where('created_at', '<', $post->created_at)->first())
                        <strong>Previous post</strong>
                        <p><a href="{{ route('post', ['slug' => $previousPost->slug]) }}">{{ $previousPost->title }}</a></p>
                        @endif
                </div>
                <div class="col-6 text-end">
                    @if($nextPost = App\Models\Post::where('created_at', '>', $post->created_at)->first())
                    <strong>Next post</strong>
                    <p><a href="{{ route('post', ['slug' => $nextPost->slug]) }}">{{ $nextPost->title }}</a></p>
                    @endif
                </div>
            </div>
        </div>
    </footer>

</article>

<!-- LATEST POSTS -->
@include('cartzilla::components.post.latest_posts')

@stop

@section('head')
<meta property="og:title" content="{{ $post->title }} - {{ App\Models\Option::getValue('siteName') }}" />
<meta property="og:description" content="{{ $post->seo_description ?: $post->description }}" />
<meta property="og:url" content="{{ url(Request::path()) }}" />
<meta property="og:image" content="{{ App\Helpers\Image::resizeMedia(300, $post->thumbnail) }}" />
@stop
