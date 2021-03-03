 @extends('cartzilla::layouts.default')
 @section('content')
 <?php

        $breadcrumb = array(
            [
                "text" => "Search"
            ]
        );

    ?>
 <section class="pt-7 pb-12 py-5">
     <div class="container">

         <!-- Heading -->
         <h3 class="mb-4 text-center">
             Search :  {{ Request::get('query') }}
         </h3>

         <div class="row justify-content-center mb-8">

             <!-- Search -->
             <div class="col-md-8 col-lg-5">

                 <!-- Errors -->
                 {{-- @include('baby::components.errors', ['errors' => $errors]) --}}


             </div>

         </div>

         @if($products and $products->count() > 0)
         <hr />

         <div class="row g-0 mx-n2">
             <!-- Product-->
             @if($products and $products->count() > 0)
             @foreach($products as $product)
                                 <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 px-2 mb-3">

             @include('cartzilla::components.product.product_box', ['product' => $product])
            </div>
             @endforeach
             @endif
             <!-- Product-->
         </div>

         {{-- @include('baby::components.paginator', ['paginator' => $products]) --}}

         @endif

     </div>
 </section>
 @stop
