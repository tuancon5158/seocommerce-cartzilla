<header class="shadow-sm">
    <!-- Topbar-->
    <div class="topbar topbar-dark bg-dark">
        <div class="container">
            <div class="topbar-text dropdown d-md-none"><a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Useful links</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="tel:00331697720"><i class="ci-support text-muted me-2"></i>(00) 33 169 7720</a></li>
                    <li><a class="dropdown-item" href="{{ route('tracking') }}"><i class="ci-location text-muted me-2"></i>Order tracking</a></li>
                </ul>
            </div>
            <div class="topbar-text text-nowrap d-none d-md-inline-block"><i class="ci-support"></i><span class="text-muted me-1">Support</span><a class="topbar-link" href="tel:00331697720">(00) 33 169 7720</a></div>
            <div class="tns-carousel tns-controls-static d-none d-md-block">
                <div class="tns-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false}">
                    <div class="topbar-text">Free shipping for order over $200</div>
                    <div class="topbar-text">We return money within 30 days</div>
                    <div class="topbar-text">Friendly 24/7 customer support</div>
                </div>
            </div>
            <div class="ms-3 text-nowrap"><a class="topbar-link me-4 d-none d-md-inline-block" href="order-tracking.html"><i class="ci-location"></i>Order tracking</a>
                <div class="topbar-text dropdown disable-autohide"><a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><img class="me-2" src="/themes/cartzilla/assets/img/flags/en.png" width="20" alt="English">Eng / $</a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li class="dropdown-item">
                            <select class="form-select form-select-sm">
                                <option value="usd">$ USD</option>
                            </select>
                        </li>
                        <li><a class="dropdown-item pb-1" href="#"><img class="me-2" src="/themes/cartzilla/assets/img/flags/fr.png" width="20" alt="Français">Français</a></li>
                        <li><a class="dropdown-item pb-1" href="#"><img class="me-2" src="/themes/cartzilla/assets/img/flags/de.png" width="20" alt="Deutsch">Deutsch</a></li>
                        <li><a class="dropdown-item" href="#"><img class="me-2" src="/themes/cartzilla/assets/img/flags/it.png" width="20" alt="Italiano">Italiano</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <div class="navbar-sticky bg-light">
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="container"><a class="navbar-brand d-none d-sm-block flex-shrink-0" href="index.html"><img src="/themes/cartzilla/assets/img/logo-dark.png" width="142" alt="Cartzilla"></a><a class="navbar-brand d-sm-none flex-shrink-0 me-2" href="index.html"><img src="/themes/cartzilla/assets/img/logo-icon.png" width="74" alt="Cartzilla"></a>
                <div class="input-group d-none d-lg-flex mx-4">
                    <form style="width:100%" action="{{ route('search') }}" method="GET" class="text-center">
                        <div class="input-group input-group-merge">
                            {{-- <input name="query" class="form-control" type="search" placeholder="Search..."> --}}
                            <input name="query" class="form-control rounded-end pe-5" type="search" placeholder="Search for products"><i class="ci-search position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3"></i>
                            <div class="input-group-append">
                                <button class="btn btn-outline-border" type="submit">
                                    <i class="fe fe-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    {{-- <input class="form-control rounded-end pe-5" type="text" placeholder="Search for products"><i class="ci-search position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3"></i> --}}
                </div>
                <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool navbar-stuck-toggler" href="{{route("cart")}}"><span class="navbar-tool-tooltip">Expand menu</span>
                        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-menu"></i></div>
                    </a><a class="navbar-tool d-none d-lg-flex" href="{{ route('wishlist') }}"><span class="navbar-tool-tooltip">Wishlist</span>
                        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-heart"></i></div>
                    </a><a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal" data-bs-toggle="modal">
                        {{-- <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
                <div class="navbar-tool-text ms-n3"><small>Hello, Sign in</small>My Account</div></a> --}}
                        <div class="navbar-tool dropdown ms-3"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="shop-cart.html"><span class="navbar-tool-label">4</span><i class="navbar-tool-icon ci-cart"></i></a><a class="navbar-tool-text" href="shop-cart.html"><small>My Cart</small>$265.00</a>
                            <!-- Cart dropdown-->
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem;">
                                    <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                                        <div class="widget-cart-item pb-2 border-bottom">
                                            <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                            <div class="d-flex align-items-center"><a class="flex-shrink-0" href="shop-single-v1.html"><img src="/themes/cartzilla/assets/img/shop/cart/widget/01.jpg" width="64" alt="Product"></a>
                                                <div class="ps-2">
                                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h6>
                                                    <div class="widget-product-meta"><span class="text-accent me-2">$150.<small>00</small></span><span class="text-muted">x 1</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-cart-item py-2 border-bottom">
                                            <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                            <div class="d-flex align-items-center"><a class="flex-shrink-0" href="shop-single-v1.html"><img src="/themes/cartzilla/assets/img/shop/cart/widget/02.jpg" width="64" alt="Product"></a>
                                                <div class="ps-2">
                                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h6>
                                                    <div class="widget-product-meta"><span class="text-accent me-2">$79.<small>50</small></span><span class="text-muted">x 1</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-cart-item py-2 border-bottom">
                                            <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                            <div class="d-flex align-items-center"><a class="flex-shrink-0" href="shop-single-v1.html"><img src="/themes/cartzilla/assets/img/shop/cart/widget/03.jpg" width="64" alt="Product"></a>
                                                <div class="ps-2">
                                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h6>
                                                    <div class="widget-product-meta"><span class="text-accent me-2">$22.<small>50</small></span><span class="text-muted">x 1</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-cart-item py-2 border-bottom">
                                            <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                            <div class="d-flex align-items-center"><a class="flex-shrink-0" href="shop-single-v1.html"><img src="/themes/cartzilla/assets/img/shop/cart/widget/04.jpg" width="64" alt="Product"></a>
                                                <div class="ps-2">
                                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">Cotton Polo Regular Fit</a></h6>
                                                    <div class="widget-product-meta"><span class="text-accent me-2">$9.<small>00</small></span><span class="text-muted">x 1</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                                        <div class="fs-sm me-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent fs-base ms-1">$265.<small>00</small></span></div><a class="btn btn-outline-secondary btn-sm" href="{{route("cart")}}">Expand cart<i class="ci-arrow-right ms-1 me-n1"></i></a>
                                    </div><a class="btn btn-primary btn-sm d-block w-100" href="checkout-details.html"><i class="ci-card me-2 fs-base align-middle"></i>Checkout</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Search-->

                    <!-- Primary menu-->
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{ route('login') }}" data-bs-toggle="dropdown">All Product</a>
                        </li>

                        @foreach($collections->where('parent_id', null) as $collection)
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" {{ ($collection->children and $collection->children->count()) ? "data-bs-toggle=dropdown" : "" }} href="{{ route('collection', ['slug' => $collection->slug]) }}"> {{ $collection->title }}</a>
                            @if($collection->children and $collection->children->count())
                            <ul class="dropdown-menu">
                                @foreach($collection->children as $childCollection)
                                <li><a class="dropdown-item" href="{{ route('collection', ['slug' => $childCollection->slug]) }}"> {{ str_replace($collection->title, '', $childCollection->title) }}
                                    </a></li>
                                @endforeach
                            </ul>
                            @endif
                        </li>

                        @endforeach
                        {{-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Collection</a>
                            <div class="dropdown-menu p-0">
                                <div class="d-flex flex-wrap flex-sm-nowrap px-2">
                                    <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                                        <div class="widget widget-links mb-4">
                                            <h6 class="fs-base mb-3">Shop layouts</h6>
                                            <ul class="widget-list">
                                                <li class="widget-list-item"><a class="widget-list-link" href="shop-grid-ls.html">Shop Grid - Left Sidebar</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="shop-grid-rs.html">Shop Grid - Right Sidebar</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="shop-grid-ft.html">Shop Grid - Filters on Top</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="shop-list-ls.html">Shop List - Left Sidebar</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="shop-list-rs.html">Shop List - Right Sidebar</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="shop-list-ft.html">Shop List - Filters on Top</a></li>
                                            </ul>
                                        </div>
                                        <div class="widget widget-links">
                                            <h6 class="fs-base mb-3">Marketplace</h6>
                                            <ul class="widget-list">
                                                <li class="widget-list-item"><a class="widget-list-link" href="marketplace-category.html">Category Page</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="marketplace-single.html">Single Item Page</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="marketplace-vendor.html">Vendor Page</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="marketplace-cart.html">Cart</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="marketplace-checkout.html">Checkout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                                        <div class="widget widget-links">
                                            <h6 class="fs-base mb-3">Shop pages</h6>
                                            <ul class="widget-list">
                                                <li class="widget-list-item"><a class="widget-list-link" href="shop-categories.html">Shop Categories</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="shop-single-v1.html">Product Page v.1</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="shop-single-v2.html">Product Page v.2</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="shop-cart.html">Cart</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="checkout-details.html">Checkout - Details</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="checkout-shipping.html">Checkout - Shipping</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="checkout-payment.html">Checkout - Payment</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="checkout-review.html">Checkout - Review</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="checkout-complete.html">Checkout - Complete</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="order-tracking.html">Order Tracking</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="comparison.html">Product Comparison</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                                        <div class="widget widget-links mb-4">
                                            <h6 class="fs-base mb-3">Grocery store</h6>
                                            <ul class="widget-list">
                                                <li class="widget-list-item"><a class="widget-list-link" href="grocery-catalog.html">Product Catalog</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="grocery-single.html">Single Product Page</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="grocery-checkout.html">Checkout</a></li>
                                            </ul>
                                        </div>
                                        <div class="widget widget-links">
                                            <h6 class="fs-base mb-3">Food Delivery</h6>
                                            <ul class="widget-list">
                                                <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-category.html">Category Page</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-single.html">Single Item (Restaurant)</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-cart.html">Cart (Your Order)</a></li>
                                                <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-checkout.html">Checkout (Address &amp; Payment)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{ route('login') }}" data-bs-toggle="dropdown">Account</a>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('page', ['slug' => 'faq']) }}">FAQ</a></li>
                                <li><a class="dropdown-item" href="{{ route('page', ['slug' => 'contact-us']) }}">Contacts us</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"> <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
