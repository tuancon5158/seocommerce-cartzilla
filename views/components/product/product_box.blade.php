       <div id="product-views-<?php echo json_encode($product->id); ?>"  class="card product-card card-static pb-3">
           @include('cartzilla::components.product.icon_add_wishlist')
           <a class="card-img-top d-block overflow-hidden" href="{{ route('product', ['slug' => $product->slug]) }}"><img src="{{ \App\Helpers\Image::resizeMedia(300, $product->thumbnail) }}" alt="..." alt="Product"></a>
           <div class=" py-2">
               {{--<a class="product-meta d-block fs-xs pb-1" href="{{ route('product', ['slug' => $product->slug]) }}">{{ $product->title}}</a> --}}
               <h3 class="product-title fs-sm text-truncate"><a href="{{ route('product', ['slug' => $product->slug]) }}">{{ $product->title}}</a></h3>
               <div class="product-price"><span class="text-accent"> {{ App\Helpers\Price::format($product->price) }}</span></div>
           </div>
           <div class="product-floating-btn">
           </div>
       </div>
