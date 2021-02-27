@extends('cartzilla::layouts.default')

@section('content')
<div class="bg-secondary py-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
                    <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
                    <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
                    </li>
                    <li class="breadcrumb-item text-nowrap active" aria-current="page">Categories</li>
                </ol>
            </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 mb-0">Shop categories</h1>
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
