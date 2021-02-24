   <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 px-2 mb-3">
       <div class="card product-card card-static pb-3">
           @include('cartzilla::components.product.icon_add_wishlist')
           <a class="card-img-top d-block overflow-hidden" href="grocery-single.html"><img src="{{ \App\Helpers\Image::resizeMedia(300, $product->thumbnail) }}" alt="..." alt="Product"></a>
           <div class=" py-2">
               {{--<a class="product-meta d-block fs-xs pb-1" href="{{ route('product', ['slug' => $product->slug]) }}">{{ $product->title}}</a> --}}
               <h3 class="product-title fs-sm text-truncate"><a href="{{ route('product', ['slug' => $product->slug]) }}">{{ $product->title}}</a></h3>
               <div class="product-price"><span class="text-accent"> {{ App\Helpers\Price::format($product->price) }}</span></div>
           </div>
           <div class="product-floating-btn">
               <button class="btn btn-primary btn-shadow btn-sm" type="button">+<i class="ci-cart fs-base ms-1"></i></button>
           </div>
       </div>
   </div>
