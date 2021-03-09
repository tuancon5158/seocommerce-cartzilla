 @extends('cartzilla::layouts.default')
 @section('content')
 <?php

        $breadcrumb = array(
            [
                "text" => "Search"
            ]
        );

    ?>
 <div class="page-title-overlap bg-dark pt-4">
     <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
         <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                     <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="ci-home"></i>Home</a></li>
                     <li class="breadcrumb-item text-nowrap"><a href="#">Product</a>
                     </li>
                     {{-- <li class="breadcrumb-item text-nowrap active" aria-current="page">Product Page v.1</li> --}}
                 </ol>
             </nav>
         </div>
         <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
             <h1 class="h3 text-light mb-0">{{ $product->title }}</h1>
         </div>
     </div>
 </div>
 <div class="container">
     <!-- Gallery + details-->
     <div class="bg-light shadow-lg rounded-3 px-4 py-3 mb-5">
         <div class="px-lg-3">
             <div class="row">
                 <!-- Product gallery-->
                 <div class="col-lg-7 pe-lg-0 pt-lg-4">
                     <div class="product-gallery">
                         <div class="product-gallery-preview order-sm-2">
                             <div class="product-gallery-preview order-sm-2">
                                 @foreach($product->getMedia('images') as $media)
                                 <div class="product-gallery-preview-item {{ $loop->index == 0 ? 'active' : '' }}" id="image-{{ $loop->index }}">
                                     <img class="image-zoom" src="{{ \App\Helpers\Image::resizeMedia(\App\Helpers\DeviceDetector::isMobile() ? 450 : 400, $media) }}" alt="{{ $product->seo_title ?: $product->title }}" data-zoom="{{ \App\Helpers\Image::resizeMedia(\App\Helpers\DeviceDetector::isMobile() ? 450 : 600, $media) }}">
                                     <div class="image-zoom-pane"></div>
                                 </div>

                                 @endforeach

                             </div>

                         </div>
                         <div class="product-gallery-thumblist order-sm-1">
                             @foreach($product->getMedia('images') as $media)
                             <a class="product-gallery-thumblist-item {{ $loop->index == 0 ? 'active' : '' }}" href="#image-{{ $loop->index }}">
                                 <img src="{{ \App\Helpers\Image::resizeMedia(\App\Helpers\DeviceDetector::isMobile() ? 450 : 600, $media) }}" alt="{{ $product->seo_title ?: $product->title }}">
                             </a>
                             @endforeach

                         </div>
                     </div>
                 </div>
                 @include('cartzilla::components.product.actions',['product_detail'=> $product] )
                 <div class="form-group">
                 </div>
             </div>
         </div>
     </div>
     <!-- Product description section 1-->
     <!-- Description -->
 </div>
 <div>
     <div class="container pt-5">
         @include('cartzilla::components.product.description')
     </div>
 </div>
 <!-- Product carousel (Style with)-->
 @if($relatedProducts = $product->getRelatedProducts() and $relatedProducts->count())
 @include('cartzilla::components.product_slider', [
 'heading' => 'You might also like',
 'products' => $relatedProducts
 ])
 @endif

 <!-- Recently viewed products -->
 @if($recentProducts = \App\Helpers\RecentlyViewed::getProducts())
 @include('cartzilla::components.product_slider', [
 'heading' => 'Recently viewed',
 'products' => $recentProducts
 ])
 @endif
 @include('cartzilla::components.product.review')
 @stop
 @section('head')
 <meta property="og:title" content="{{ $product->title }} - {{ App\Models\Option::getValue('siteName') }}" />
 <meta property="og:description" content="{{ $product->seo_description ?: $product->description }}" />
 <meta property="og:url" content="{{ url(Request::path()) }}" />
 <meta property="og:image" content="{{ App\Helpers\Image::getMediaUrl($product->thumbnail) }}" />
 @stop

