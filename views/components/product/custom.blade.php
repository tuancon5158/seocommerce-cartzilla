<div class="modal-quick-view modal fade" id="quick-view-p-{{$product->id}}" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title product-title"><a href="{{ route('product', ['slug' => $product->slug]) }}" data-bs-toggle="tooltip" data-bs-placement="right" title="Go to product page">{{$product->title}}<i class="ci-arrow-right fs-lg ms-2"></i></a></h4>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
                    @include('cartzilla::components.product.actions1')

                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-3 col-sm-6 px-2 mb-4">
    <div class="card product-card">
                   @include('cartzilla::components.product.icon_add_wishlist')
<a class="card-img-top d-block overflow-hidden" href="{{ route('product', ['slug' => $product->slug]) }}"><img src="{{ \App\Helpers\Image::resizeMedia(300, $product->thumbnail) }}" alt="..."></a>
        <div class="card-body py-2">
            <h3 class="product-title fs-sm"><a href="{{ route('product', ['slug' => $product->slug]) }}">{{ $product->title }}</a></h3>
            <div class="d-flex justify-content-between">
                <div class="product-price"><span class="text-accent"> {{ App\Helpers\Price::format($product->price) }}</span></div>
                @if($product->rating > 0 and $product->review_count > 0)
                <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                </div>
                @endif
            </div>
        </div>
        <div class="card-body card-body-hidden">
            {{-- <div class="text-center pb-2">
                <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size1" id="s-75">
                    <label class="form-option-label" for="s-75">7.5</label>
                </div>
                <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                    <label class="form-option-label" for="s-80">8</label>
                </div>
                <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size1" id="s-85">
                    <label class="form-option-label" for="s-85">8.5</label>
                </div>
                <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size1" id="s-90">
                    <label class="form-option-label" for="s-90">9</label>
                </div>
            </div> --}}
            {{-- <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button> --}}
            <div class="text-center"><a class="nav-link-style fs-ms primary" href="#quick-view-p-{{$product->id}}" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
        </div>
    </div>
    <hr class="d-sm-none">
</div>
