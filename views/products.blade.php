 @extends('cartzilla::layouts.default')
 @section('content')
 <!-- Page-->
 <?php

        $breadcrumb = array(
           []
        );

    ?>

 <!-- BREADCRUMB -->
 @include('cartzilla::components.breadcrumb', ['links' => $breadcrumb])
 <main class="container" style="padding-top: 1rem;">
     <section class="ps-lg-4 pe-lg-3 pt-4">
         <div class="px-3 pt-2">
             <!-- Page title + breadcrumb-->
             <div class="d-flex justify-content-between align-items-center">
                 <nav class="mb-4" aria-label="breadcrumb">
                     <ol class="breadcrumb flex-lg-nowrap">
                         <li class="breadcrumb-item"><a class="text-nowrap" href="home-grocery-store.html"><i class="ci-home"></i>Home</a></li>
                         <li class="breadcrumb-item text-nowrap active" aria-current="page">Product catalog</li>
                     </ol>
                 </nav>

                 <!-- Content-->
                 <!-- Sorting-->
                 @include('cartzilla::components.sort')
             </div>


             {{-- <section class="d-md-flex justify-content-between align-items-center mb-4 pb-2">
                 <h1 class="h2 mb-3 mb-md-0 me-3">Product catalog</h1>
                 <div class="d-flex align-items-center">
                     <div class="d-none d-sm-block py-2 fs-sm text-muted text-nowrap me-2">Sort by:</div>
                     <ul class="nav nav-tabs fs-sm mb-0">
                         <li class="nav-item"><a class="nav-link active" href="#">Popular</a></li>
                         <li class="nav-item"><a class="nav-link" href="#">Cheap</a></li>
                         <li class="nav-item"><a class="nav-link" href="#">Expensive</a></li>
                     </ul>
                 </div>
             </section> --}}
             <!-- Product grid-->
             <div class="row g-0 mx-n2 mt-2">
                 <!-- Product-->
                 @if($products and $products->count() > 0)
                 @foreach($products as $product)
                 @include('cartzilla::components.product.product_box', ['product' => $product])
                 @endforeach
                 @endif
                 <!-- Product-->
             </div>
             <div class="py-4 pb-md-5 mb-4">
                 <!-- Pagination-->
                 @include('cartzilla::components.paginator', ['paginator' => $products])
             </div>
         </div>
     </section>
     <!-- Footer-->
 </main>
 @stop
