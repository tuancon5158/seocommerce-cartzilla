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
             Search
         </h3>

         <div class="row justify-content-center mb-8">

             <!-- Search -->
             <div class="col-md-8 col-lg-5">

                 <!-- Errors -->
                 {{-- @include('baby::components.errors', ['errors' => $errors]) --}}

                 <form action="{{ route('search') }}" method="GET" class="text-center">
                     <div class="input-group input-group-merge">
                         <input name="query" class="form-control" type="search" placeholder="Search...">
                         <div class="input-group-append">
                             <button class="btn btn-outline-border" type="submit">
                                 <i class="fe fe-search"></i>
                             </button>
                         </div>
                     </div>
                 </form>
             </div>

         </div>

         @if($products and $products->count() > 0)
         <hr />

         <div class="row mt-5">

             @foreach($products as $product)
             <div class="col-6 col-md-4 col-lg-3">
                 {{-- @include('baby::components.product_box_1', ['product' => $product]) --}}
             </div>
             @endforeach

         </div>

         @include('baby::components.paginator', ['paginator' => $products])

         @endif

     </div>
 </section>
 @stop
