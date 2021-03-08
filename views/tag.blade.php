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
                    <li class="breadcrumb-item"><a class="text-nowrap" href="{{ route('tags') }}"><i class="ci-home"></i>Tags</a></li>
                    <li class="breadcrumb-item text-nowrap" href="#"><a href="#"> {{ $tag->title  }}</a>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">{{ $tag->seo_h1 ?: $tag->title }}</h1>

        </div>
    </div>
    <div class="container pb-2">
        @if($desc = $tag->seo_description)
        <p class="text-light text-center">{{ $desc }}</p>
        @endif
    </div>
</div>
<div class="container pb-5 mb-2 mb-md-4 mt-5">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">

            <ul class="nav nav-tabs mb-3 d-flex " role="tablist">
                <li class="nav-item"><a class="nav-link active" href="#">View all</a></li>
            </ul>
            @include('cartzilla::components.sort')
        </div>

    </div>
    <div class="row">
        <!-- Content  -->
        <section class="col-lg-12 mt-5">
            <!-- Toolbar-->
            <div class="d-flex justify-content-center justify-content-sm-between align-items-center pt-2 pb-4 pb-sm-5">
                <div class="d-flex flex-wrap">
                    <div class="d-flex align-items-center flex-nowrap me-3 me-sm-4 pb-3">
                    </div>
                </div>
            </div>
            <!-- Products grid-->
            <div class="row mx-n2">
                @if($products and $products->count() > 0)
                @foreach($products as $product)
                <div class="col-md-3 col-sm-6 px-2 mb-4">
                    @include('cartzilla::components.product.product_box', ['product' => $product])
                </div>
                @endforeach
                <div class="col-12">
                    <!-- Pagination -->
                    @include('cartzilla::components.paginator', ['paginator' => $products])
                </div>
                @else
                <div class="alert alert-secondary" role="alert">
                    No product found!
                </div>
                @endif
            </div>
        </section>
    </div>
</div>
@stop
