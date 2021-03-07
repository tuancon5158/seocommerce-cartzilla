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
                 @include('cartzilla::components.breadcrumb', ['links' => $breadcrumb])
                 @include('cartzilla::components.sort')
             </div>
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
