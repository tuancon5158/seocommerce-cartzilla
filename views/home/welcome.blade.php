<?php
    // Get 10 newest
    $collections = \App\Models\Collection::take(1)->with('thumbnail')->get();
?>
<?php
    // Get 10 newest
    $products = \App\Models\Product::orderBy('updated_at', 'desc')->where('visibility', 'public')->take(6)->with('reviews', 'thumbnail')->get();
        $tests = \App\Models\Product::orderBy('updated_at', 'desc')->where('visibility', 'public')->take(4)->with('reviews', 'thumbnail')->get();

?>
<section class="tns-carousel tns-controls-lg mb-4 mb-lg-5">
    <div class="tns-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;responsive&quot;: {&quot;0&quot;:{&quot;nav&quot;:true, &quot;controls&quot;: false},&quot;992&quot;:{&quot;nav&quot;:false, &quot;controls&quot;: true}}}">
        <!-- Item-->
        @foreach($collections as $collection)
        @include('cartzilla::home.carousel_item', ['collection' => $collection])
        @endforeach
    </div>
</section>
<!-- Category (Women)-->
<section class="container pt-lg-3 mb-4 mb-sm-5">
    <div class="row">
        <!-- Banner with controls-->
        <div class="col-md-5">
            <div class="d-flex flex-column h-100 overflow-hidden rounded-3" style="background-color: #f6f8fb;">
                <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                    <div>
                        <h3 class="mb-1">Water</h3><a class="fs-md" href="shop-grid-ls.html">Shop for Bottle <i class="ci-arrow-right fs-xs align-middle ms-1"></i></a>
                    </div>
                    <div class="tns-carousel-controls" id="for-women">
                        <button type="button"><i class="ci-arrow-left"></i></button>
                        <button type="button"><i class="ci-arrow-right"></i></button>
                    </div>
                </div><a class="d-none d-md-block mt-auto" href="shop-grid-ls.html"><img class="d-block w-100" src="https://img.btdmp.com/10110/10110793/products/0x720@1599706085cbd1ec632b.jpeg" alt="For Women"></a>
            </div>
        </div>
        <!-- Product grid (carousel)-->
        <div class="col-md-7 pt-4 pt-md-0">
            <div class="tns-carousel">
                <div class="tns-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#for-women&quot;}">
                    <!-- Carousel item-->
                    <div>
                        <div class="row mx-n2">
                            @foreach($products as $product)
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                @include('cartzilla::components.product.product_box', ['product' => $product])
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category (Men)-->
<section class="container pt-lg-4 mb-4 mb-sm-5">
    <div class="row">
        <!-- Banner with controls-->
        <div class="col-md-5 order-md-2">
            <div class="d-flex flex-column h-100 overflow-hidden rounded-3" style="background-color: #f6f8fb;">
                <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                    <div class="order-md-2">
                        <h3 class="mb-1">Water</h3><a class="fs-md" href="shop-grid-ls.html">Shop for Bottle <i class="ci-arrow-right fs-xs align-middle ms-1"></i></a>
                    </div>
                    <div class="tns-carousel-controls order-md-1" id="for-men">
                        <button type="button"><i class="ci-arrow-left"></i></button>
                        <button type="button"><i class="ci-arrow-right"></i></button>
                    </div>
                </div><a class="d-none d-md-block mt-auto" href="shop-grid-ls.html"><img class="d-block w-100" src="https://img.btdmp.com/10110/10110793/products/0x540@1604142682c47a42703f.jpeg" alt="For Men"></a>
            </div>
        </div>
        <!-- Product grid (carousel)-->
        <div class="col-md-7 pt-4 pt-md-0 order-md-1">
            <div class="tns-carousel">
                <div class="tns-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#for-men&quot;}">
                    <!-- Carousel item-->
                    <div>
                        <div class="row mx-n2">
                            @foreach($products as $product)
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                @include('cartzilla::components.product.product_box', ['product' => $product])
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Carousel item-->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category (Kids)-->
<section class="container pt-lg-4 mb-4 mb-md-5">
    <div class="row">
        <!-- Banner with controls-->
        <div class="col-md-5">
            <div class="d-flex flex-column h-100 overflow-hidden rounded-3" style="background-color: #f6f8fb;">
                <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                    <div>
                        <h3 class="mb-1">Water</h3><a class="fs-md" href="shop-grid-ls.html">Shop for Bottle <i class="ci-arrow-right fs-xs align-middle ms-1"></i></a>
                    </div>
                    <div class="tns-carousel-controls" id="for-kids">
                        <button type="button"><i class="ci-arrow-left"></i></button>
                        <button type="button"><i class="ci-arrow-right"></i></button>
                    </div>
                </div><a class="d-none d-md-block mt-auto" href="shop-grid-ls.html"><img class="d-block w-100" src="https://img.btdmp.com/10110/10110793/products/0x540@1605782878b748fb638d.jpeg" alt="For Kids"></a>
            </div>
        </div>
        <!-- Product grid (carousel)-->
        <div class="col-md-7 pt-4 pt-md-0">
            <div class="tns-carousel">
                <div class="tns-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#for-kids&quot;}">
                    <!-- Carousel item-->
                    <div>
                        <div class="row mx-n2">
                            @foreach($products as $product)
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                @include('cartzilla::components.product.product_box', ['product' => $product])
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop by brand-->
<!-- Product widgets-->
<section class="container pt-md-3 pb-4 pb-md-5 mb-lg-2">
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-2 py-3">
            <div class="widget">
                <h3 class="widget-title">New arrivals</h3>
                @foreach($tests as $product)
                <div class="d-flex align-items-center pb-2 border-bottom">
                    <a class="d-block " href="{{ route('product', ['slug' => $product->slug]) }}"><img src="{{ \App\Helpers\Image::resizeMedia(50, $product->thumbnail) }}" alt="..." alt="Product"></a>

                    <div class="ps-2">
                        <h6 class="widget-product-title"><a href="{{ route('product', ['slug' => $product->slug]) }}">{{ $product->title}}</a></h6>
                        <div class="widget-product-meta"><span class="text-accent me-2">{{ App\Helpers\Price::format($product->price) }}</span></div>
                    </div>
                </div>
                @endforeach
                <p class="mb-0">...</p><a class="fs-sm" href="shop-grid-ls.html">View more<i class="ci-arrow-right fs-xs ms-1"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-2 py-3">
            <div class="widget">
                <h3 class="widget-title">New arrivals</h3>
                @foreach($tests as $product)
                <div class="d-flex align-items-center pb-2 border-bottom">
                    <a class="d-block " href="{{ route('product', ['slug' => $product->slug]) }}"><img src="{{ \App\Helpers\Image::resizeMedia(50, $product->thumbnail) }}" alt="..." alt="Product"></a>

                    <div class="ps-2">
                        <h6 class="widget-product-title"><a href="{{ route('product', ['slug' => $product->slug]) }}">{{ $product->title}}</a></h6>
                        <div class="widget-product-meta"><span class="text-accent me-2">{{ App\Helpers\Price::format($product->price) }}</span></div>
                    </div>
                </div>
                @endforeach
                <p class="mb-0">...</p><a class="fs-sm" href="shop-grid-ls.html">View more<i class="ci-arrow-right fs-xs ms-1"></i></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 d-none d-lg-block"><a class="d-block" href="shop-grid-ls.html"><img class="d-block rounded-3" src="https://img.btdmp.com/10110/10110793/products/0x540@1605782878b748fb638d.jpeg" alt="Promo banner"></a></div>
    </div>
</section>
<!-- Blog + Instagram info cards-->
<section class="container-fluid px-0">
    <div class="row g-0">
        <div class="col-md-12"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-primary" href="blog-list-sidebar.html">
                <div class="card-body text-center"><i class="ci-edit h3 mt-2 mb-4 text-primary"></i>
                    <h3 class="h5 mb-1">Read the blog</h3>
                    <p class="text-muted fs-sm">Latest store, fashion news and trends</p>
                </div>
            </a></div>
        {{-- <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-accent" href="#">
                <div class="card-body text-center"><i class="ci-instagram h3 mt-2 mb-4 text-accent"></i>
                    <h3 class="h5 mb-1">Follow on Instagram</h3>
                    <p class="text-muted fs-sm">#ShopWithCartzilla</p>
                </div>
            </a></div> --}}
    </div>
</section>
