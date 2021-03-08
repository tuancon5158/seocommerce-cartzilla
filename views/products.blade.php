 @extends('cartzilla::layouts.default')
 @section('content')
 <!-- Page-->
 <?php

        $breadcrumb = array(
            [
                "text" => "Products",
                "link" => "#"
            ]
        );

    ?>

 <!-- BREADCRUMB -->
 <main class="container" style="padding-top: 1rem;">
     <section class="ps-lg-4 pe-lg-3 pt-4">
         <div class="px-3 pt-2">
             <!-- Page title + breadcrumb-->
             <div class="d-flex justify-content-between align-items-center">
                 <ul class="nav nav-tabs mb-3 d-flex " role="tablist">
                     <li class="nav-item"><a class="nav-link active" href="#">All</a></li>
                     @foreach(App\Models\Tag::whereNull('parent_id')->where('visibility', 'public')->orderBy('updated_at', 'desc')->take(5)->get() as $tag)
                     <li class="nav-item"><a class="nav-link " href="{{ route('tag', ['slug' => $tag->slug]) }}" title="{{ $tag->title }}">{{ $tag->title }}</a></li>
                     @endforeach
                     <a class="nav-link" href="{{ route('tags') }}">All Tags</a>
                 </ul>
                 {{-- @include('cartzilla::components.breadcrumb', ['links' => $breadcrumb]) --}}
                 @include('cartzilla::components.sort')
             </div>
             {{-- <div class="row">
                 <div class="d-flex justify-content-between align-items-center">

                     <ul class="nav nav-tabs mb-3 d-flex " role="tablist">
                         <li class="nav-item"><a class="nav-link active" href="#">All</a></li>
                         @foreach(App\Models\Tag::whereNull('parent_id')->where('visibility', 'public')->orderBy('updated_at', 'desc')->take(5)->get() as $tag)
                         <a class="nav-link" href="{{ route('tag', ['slug' => $tag->slug]) }}" title="{{ $tag->title }}">{{ $tag->title }}</a>
             <li class="nav-item"><a class="nav-link" ref="{{ route('tag', ['slug' => $tag->slug]) }}" title="{{ $tag->title }}"><span class="widget-filter-item-text"> {{ $tag->title }}</span></a></li>

             @endforeach
             <a class="nav-link" href="{{ route('tags') }}">All Tags</a>
             </ul>


         </div>

         </div> --}}
         <!-- Product grid-->
         <div class="row g-0 mx-n2 mt-5">
             <!-- Product-->
             @if($products and $products->count() > 0)
             @foreach($products as $product)
             <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 px-2 mb-3">

                 @include('cartzilla::components.product.custom', ['product' => $product])
             </div>
             @endforeach
             @endif
         </div>
         <div class="py-4 pb-md-5 mb-4 mt-2">
             <!-- Pagination-->
             @include('cartzilla::components.paginator', ['paginator' => $products])
         </div>
         </div>
     </section>
     <!-- Footer-->
 </main>
 @stop
