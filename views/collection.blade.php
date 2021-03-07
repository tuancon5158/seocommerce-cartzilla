@extends('cartzilla::layouts.default')

@section('content')

<!-- Navbar 3 Level (Light)-->

<!-- Page Title-->
<div class=" bg-dark pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                    <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="ci-home"></i>Home</a></li>
                    <li class="breadcrumb-item text-nowrap" href="#"><a href="#">	{{ $collection->title }}</a>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">{{ $collection->seo_h1 ?: $collection->title }}</h1>

        </div>
    </div>
    <div class="container pb-2">
        @if($desc = $collection->seo_description ?: $collection->description)
        <p class="text-light text-center">{{ $desc }}</p>
        @endif
    </div>
</div>
<div class="container pb-5 mb-2 mb-md-4 mt-5">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">

            <ul class="nav nav-tabs mb-3 d-flex " role="tablist">
                <li class="nav-item"><a class="nav-link active" href="#">View all</a></li>

                @foreach($collection->children as $children)
                <li class="nav-item"><a class="nav-link" href="{{ route('collection', ['slug' => $children->slug]) }}"><span class="widget-filter-item-text"> {{ $children->title }}</span></a></li>

                {{-- <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="{{ route('collection', ['slug' => $children->slug]) }}"><span class="widget-filter-item-text"> {{ $children->title }}</span></a></li> --}}
                @endforeach
                {{-- {{ $collection }} --}}
                @if($collection->tags and $collection->tags->count() > 0)
                @foreach($collection->tags as $tag)

                @if($loop->index < 5)

                 <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="{{ route('tag', ['slug' => $tag->slug]) }}" title="{{ $tag->title }}"><span class="widget-filter-item-text"> {{ $children->title }}</span></a></li>
                    @endif
                    @endforeach
                    <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="{{ route('tags', ['collection_id' => $collection->id]) }}"><span class="widget-filter-item-text"> All Tags</span></a></li>
                    @endif
            </ul>
            @include('cartzilla::components.sort')
        </div>

    </div>
    <div class="row">
        <!-- Sidebar-->
        <!-- Content  -->
        <section class="col-lg-12 mt-5">
            <!-- Toolbar-->

            <div class="d-flex justify-content-center justify-content-sm-between align-items-center pt-2 pb-4 pb-sm-5">
                <div class="d-flex flex-wrap">
                    <div class="d-flex align-items-center flex-nowrap me-3 me-sm-4 pb-3">
                        @if($desc = $collection->seo_description ?: $collection->description)
                        <span class="fs-sm text-light opacity-75 text-nowrap ms-2 d-none d-md-block">{{ $desc }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Products grid-->
            <div class="row mx-n2">
                <!-- Product-->
                @foreach($products as $product)
                <div class="col-md-3 col-sm-6 px-2 mb-4">
                    @include('cartzilla::components.product.custom', ['product' => $product])
                </div>
                @endforeach
                <!-- Product-->

            </div>




            <!-- Banner-->
        </section>

    </div>
    <div class="row  mb-5">
        <div class="col-12">
            <!-- Pagination -->
            @include('cartzilla::components.paginator', ['paginator' => $products])
        </div>
    </div>
    @if($collection->content)
    <hr />
    <div class="row mt-5">
        {!! $collection->content !!}
    </div>
    @endif
</div>
@stop
@section('head')
<meta property="og:title" content="{{ $collection->title }} - {{ App\Models\Option::getValue('siteName') }}" />
<meta property="og:description" content="{{ $collection->seo_description ?: $collection->description }}" />
<meta property="og:url" content="{{ url(Request::path()) }}" />
<meta property="og:image" content="{{ App\Helpers\Image::resizeMedia(300, $collection->thumbnail) }}" />
@stop
