@extends('cartzilla::layouts.default')

@section('content')
<div class="page-title-overlap bg-dark pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                    <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
                    <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
                    </li>
                    <li class="breadcrumb-item text-nowrap active" aria-current="page">List left sidebar</li>
                </ol>
            </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Shop list left sidebar</h1>
        </div>
    </div>
</div>
<div class="container pb-5 mb-2 mb-md-4">
    <div class="row">
        <!-- Sidebar-->
        <aside class="col-lg-4">
            <!-- Sidebar-->
            <div class="offcanvas offcanvas-collapse bg-white w-100 rounded-3 shadow-lg py-1" id="shop-sidebar" style="max-width: 22rem;">
                <div class="offcanvas-cap align-items-center shadow-sm">
                    <h2 class="h5 mb-0">Filters</h2>
                    <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body py-grid-gutter px-lg-grid-gutter">
                    <!-- Categories-->
                    <div class="widget widget-categories mb-4 pb-4 border-bottom">
                        <h3 class="widget-title">Categories</h3>
                        <div class="accordion mt-n1" id="shop-categories">
                            <!-- Shoes-->
                            <div class="accordion-item">
                                <h3 class="accordion-header"><a class="accordion-button collapsed" href="#shoes" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="shoes">Shoes</a></h3>
                                <div class="accordion-collapse collapse" id="shoes" data-bs-parent="#shop-categories">
                                    <div class="accordion-body">
                                        <div class="widget widget-links widget-filter">
                                            <div class="input-group input-group-sm mb-2">
                                                <input class="widget-filter-search form-control rounded-end" type="text" placeholder="Search"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                                            </div>
                                            <ul class="widget-list widget-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">View all</span><span class="fs-xs text-muted ms-3">1,953</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Pumps &amp; High Heels</span><span class="fs-xs text-muted ms-3">247</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Ballerinas &amp; Flats</span><span class="fs-xs text-muted ms-3">156</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Sandals</span><span class="fs-xs text-muted ms-3">310</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Sneakers</span><span class="fs-xs text-muted ms-3">402</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Boots</span><span class="fs-xs text-muted ms-3">393</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Ankle Boots</span><span class="fs-xs text-muted ms-3">50</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Loafers</span><span class="fs-xs text-muted ms-3">93</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Slip-on</span><span class="fs-xs text-muted ms-3">122</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Flip Flops</span><span class="fs-xs text-muted ms-3">116</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Clogs &amp; Mules</span><span class="fs-xs text-muted ms-3">24</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Athletic Shoes</span><span class="fs-xs text-muted ms-3">31</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Oxfords</span><span class="fs-xs text-muted ms-3">9</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Smart Shoes</span><span class="fs-xs text-muted ms-3">18</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Clothing-->
                            <div class="accordion-item">
                                <h3 class="accordion-header"><a class="accordion-button" href="#clothing" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="clothing">Clothing</a></h3>
                                <div class="accordion-collapse collapse show" id="clothing" data-bs-parent="#shop-categories">
                                    <div class="accordion-body">
                                        <div class="widget widget-links widget-filter">
                                            <div class="input-group input-group-sm mb-2">
                                                <input class="widget-filter-search form-control rounded-end" type="text" placeholder="Search"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                                            </div>
                                            <ul class="widget-list widget-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">View all</span><span class="fs-xs text-muted ms-3">2,548</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Blazers &amp; Suits</span><span class="fs-xs text-muted ms-3">235</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Blouses</span><span class="fs-xs text-muted ms-3">410</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Cardigans &amp; Jumpers</span><span class="fs-xs text-muted ms-3">107</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Dresses</span><span class="fs-xs text-muted ms-3">93</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Hoodie &amp; Sweatshirts</span><span class="fs-xs text-muted ms-3">122</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Jackets &amp; Coats</span><span class="fs-xs text-muted ms-3">116</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Jeans</span><span class="fs-xs text-muted ms-3">215</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Lingerie</span><span class="fs-xs text-muted ms-3">150</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Maternity Wear</span><span class="fs-xs text-muted ms-3">8</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Nightwear</span><span class="fs-xs text-muted ms-3">26</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Shirts</span><span class="fs-xs text-muted ms-3">164</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Shorts</span><span class="fs-xs text-muted ms-3">147</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Socks &amp; Tights</span><span class="fs-xs text-muted ms-3">139</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Sportswear</span><span class="fs-xs text-muted ms-3">65</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Swimwear</span><span class="fs-xs text-muted ms-3">18</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">T-shirts &amp; Vests</span><span class="fs-xs text-muted ms-3">209</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Tops</span><span class="fs-xs text-muted ms-3">132</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Trousers</span><span class="fs-xs text-muted ms-3">105</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Underwear</span><span class="fs-xs text-muted ms-3">87</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Bags-->
                            <div class="accordion-item">
                                <h3 class="accordion-header"><a class="accordion-button collapsed" href="#bags" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="bags">Bags</a></h3>
                                <div class="accordion-collapse collapse" id="bags" data-bs-parent="#shop-categories">
                                    <div class="accordion-body">
                                        <div class="widget widget-links widget-filter">
                                            <div class="input-group input-group-sm mb-2">
                                                <input class="widget-filter-search form-control rounded-end" type="text" placeholder="Search"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                                            </div>
                                            <ul class="widget-list widget-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">View all</span><span class="fs-xs text-muted ms-3">801</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Handbags</span><span class="fs-xs text-muted ms-3">238</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Backpacks</span><span class="fs-xs text-muted ms-3">116</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Wallets</span><span class="fs-xs text-muted ms-3">104</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Luggage</span><span class="fs-xs text-muted ms-3">115</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Lumbar Packs</span><span class="fs-xs text-muted ms-3">17</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Duffle Bags</span><span class="fs-xs text-muted ms-3">9</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Bag / Travel Accessories</span><span class="fs-xs text-muted ms-3">93</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Diaper Bags</span><span class="fs-xs text-muted ms-3">5</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Lunch Bags</span><span class="fs-xs text-muted ms-3">8</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Messenger Bags</span><span class="fs-xs text-muted ms-3">2</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Laptop Bags</span><span class="fs-xs text-muted ms-3">31</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Briefcases</span><span class="fs-xs text-muted ms-3">45</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Sport Bags</span><span class="fs-xs text-muted ms-3">18</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sunglasses-->
                            <div class="accordion-item">
                                <h3 class="accordion-header"><a class="accordion-button collapsed" href="#sunglasses" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="sunglasses">Sunglasses</a></h3>
                                <div class="collapse" id="sunglasses" data-bs-parent="#shop-categories">
                                    <div class="accordion-body">
                                        <div class="widget widget-links">
                                            <ul class="widget-list">
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>View all</span><span class="fs-xs text-muted ms-3">1,842</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Fashion Sunglasses</span><span class="fs-xs text-muted ms-3">953</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Sport Sunglasses</span><span class="fs-xs text-muted ms-3">589</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Classic Sunglasses</span><span class="fs-xs text-muted ms-3">300</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Watches-->
                            <div class="accordion-item">
                                <h3 class="accordion-header"><a class="accordion-button collapsed" href="#watches" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="watches">Watches</a></h3>
                                <div class="accordion-collapse collapse" id="watches" data-bs-parent="#shop-categories">
                                    <div class="accordion-body">
                                        <div class="widget widget-links">
                                            <ul class="widget-list">
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>View all</span><span class="fs-xs text-muted ms-3">734</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Fashion Watches</span><span class="fs-xs text-muted ms-3">572</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Casual Watches</span><span class="fs-xs text-muted ms-3">110</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Luxury Watches</span><span class="fs-xs text-muted ms-3">34</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Sport Watches</span><span class="fs-xs text-muted ms-3">18</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Accessories-->
                            <div class="accordion-item">
                                <h3 class="accordion-header"><a class="accordion-button collapsed" href="#accessories" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="accessories">Accessories</a></h3>
                                <div class="accordion-collapse collapse" id="accessories" data-bs-parent="#shop-categories">
                                    <div class="accordion-body">
                                        <div class="widget widget-links">
                                            <ul class="widget-list">
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>View all</span><span class="fs-xs text-muted ms-3">920</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Belts</span><span class="fs-xs text-muted ms-3">364</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Hats</span><span class="fs-xs text-muted ms-3">405</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Jewelry</span><span class="fs-xs text-muted ms-3">131</span></a></li>
                                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Cosmetics</span><span class="fs-xs text-muted ms-3">20</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Price range-->
                </div>
            </div>
        </aside>
        <!-- Content  -->
        <section class="col-lg-8">
            <!-- Toolbar-->
            <div class="d-flex justify-content-center justify-content-sm-between align-items-center pt-2 pb-4 pb-sm-5">
                <div class="d-flex flex-wrap">
                    <div class="d-flex align-items-center flex-nowrap me-3 me-sm-4 pb-3">
                        <label class="text-light fs-sm opacity-75 text-nowrap me-2 d-none d-sm-block" for="sorting">Sort by:</label>
                        <select class="form-select" id="sorting">
                            <option>Popularity</option>
                            <option>Low - Hight Price</option>
                            <option>High - Low Price</option>
                            <option>Average Rating</option>
                            <option>A - Z Order</option>
                            <option>Z - A Order</option>
                        </select><span class="fs-sm text-light opacity-75 text-nowrap ms-2 d-none d-md-block">of 287 products</span>
                    </div>
                </div>
                <div class="d-flex pb-3"><a class="nav-link-style nav-link-light me-3" href="#"><i class="ci-arrow-left"></i></a><span class="fs-md text-light">1 / 5</span><a class="nav-link-style nav-link-light ms-3" href="#"><i class="ci-arrow-right"></i></a></div>
                <div class="d-none d-sm-flex pb-3"><a class="btn btn-icon nav-link-style nav-link-light me-2" href="shop-grid-ls.html"><i class="ci-view-grid"></i></a><a class="btn btn-icon nav-link-style bg-light text-dark disabled opacity-100" href="#"><i class="ci-view-list"></i></a></div>
            </div>
            <!-- Products list-->
            <!-- Product-->
            <div class="card product-card product-list">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
                <div class="d-sm-flex align-items-center"><a class="product-list-thumb" href="shop-single-v1.html"><img src="/themes/cartzilla/assets/img/shop/catalog/01.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                        <h3 class="product-title fs-base"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$154.<small>00</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden">
                            <div class="pb-2">
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
                            </div>
                            <button class="btn btn-primary btn-sm mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                            <div class="text-start"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top pt-3 mt-3"></div>
            <!-- Product-->
            <div class="card product-card product-list"><span class="badge bg-danger badge-shadow">Sale</span>
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
                <div class="d-sm-flex align-items-center"><a class="product-list-thumb" href="shop-single-v1.html"><img src="/themes/cartzilla/assets/img/shop/catalog/02.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Women’s T-shirt</a>
                        <h3 class="product-title fs-base"><a href="shop-single-v1.html">Cotton Lace Blouse</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$28.<small>50</small></span>
                                <del class="fs-sm text-muted">38.<small>50</small></del>
                            </div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden">
                            <div class="pb-2">
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color1" id="white" checked>
                                    <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color1" id="blue">
                                    <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color1" id="yellow">
                                    <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color1" id="pink">
                                    <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                                </div>
                            </div>
                            <div class="d-flex mb-2">
                                <select class="form-select form-select-sm me-2" style="max-width: 6rem;">
                                    <option>XS</option>
                                    <option>S</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                </select>
                                <button class="btn btn-primary btn-sm" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                            </div>
                            <div class="text-start"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top pt-3 mt-3"></div>
            <!-- Product-->
            <div class="card product-card product-list">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
                <div class="d-sm-flex align-items-center"><a class="product-list-thumb" href="shop-single-v1.html"><img src="/themes/cartzilla/assets/img/shop/catalog/03.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Women’s Shorts</a>
                        <h3 class="product-title fs-base"><a href="shop-single-v1.html">Mom High Waist Shorts</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$39.<small>50</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden">
                            <div class="pb-2">
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size2" id="xs">
                                    <label class="form-option-label" for="xs">XS</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size2" id="s" checked>
                                    <label class="form-option-label" for="s">S</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size2" id="m">
                                    <label class="form-option-label" for="m">M</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size2" id="l">
                                    <label class="form-option-label" for="l">L</label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                            <div class="text-start"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top pt-3 mt-3"></div>
            <!-- Product-->
            <div class="card product-card product-list">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
                <div class="d-sm-flex align-items-center"><a class="product-list-thumb" href="shop-single-v1.html"><img src="/themes/cartzilla/assets/img/shop/catalog/04.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sportswear</a>
                        <h3 class="product-title fs-base"><a href="shop-single-v1.html">Women Sports Jacket</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$68.<small>40</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden">
                            <div class="pb-2">
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size3" id="xs2" checked>
                                    <label class="form-option-label" for="xs2">XS</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size3" id="s2">
                                    <label class="form-option-label" for="s2">S</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size3" id="m2">
                                    <label class="form-option-label" for="m2">M</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size3" id="l2">
                                    <label class="form-option-label" for="l2">L</label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                            <div class="text-start"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top pt-3 mt-3"></div>
            <!-- Product-->
            <div class="card product-card product-list">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
                <div class="d-sm-flex align-items-center"> <a class="product-list-thumb" href="shop-single-v1.html"><img src="/themes/cartzilla/assets/img/shop/catalog/05.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Sunglasses</a>
                        <h3 class="product-title fs-base"><a href="shop-single-v1.html">Polarized Sunglasses</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-muted fs-sm">Out of stock</span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden"><a class="btn btn-secondary btn-sm mb-2" href="shop-single-v1.html">View details</a>
                            <div class="text-start"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top pt-3 mt-3"></div>
            <!-- Product-->
            <div class="card product-card product-list">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
                <div class="d-sm-flex align-items-center"><a class="product-list-thumb" href="shop-single-v1.html"><img src="/themes/cartzilla/assets/img/shop/catalog/06.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Backpacks</a>
                        <h3 class="product-title fs-base"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$79.<small>50</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden">
                            <div class="pb-2">
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color2" id="khaki" checked>
                                    <label class="form-option-label rounded-circle" for="khaki"><span class="form-option-color rounded-circle" style="background-color: #97947c;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color2" id="jeans">
                                    <label class="form-option-label rounded-circle" for="jeans"><span class="form-option-color rounded-circle" style="background-color: #99a8be;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color2" id="white2">
                                    <label class="form-option-label rounded-circle" for="white2"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                            <div class="text-start"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner-->
            <div class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden my-4 rounded-3">
                <div class="py-4 my-2 my-md-0 py-md-5 px-4 ms-md-3 text-center text-sm-start">
                    <h4 class="fs-lg fw-light mb-2">Converse All Star</h4>
                    <h3 class="mb-4">Make Your Day Comfortable</h3><a class="btn btn-primary btn-shadow btn-sm" href="#">Shop Now</a>
                </div><img class="d-block ms-auto" src="/themes/cartzilla/assets/img/shop/catalog/banner.jpg" alt="Shop Converse">
            </div>
            <!-- Product-->
            <div class="card product-card product-list">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
                <div class="d-sm-flex align-items-center"><a class="product-list-thumb" href="shop-single-v1.html"><img src="/themes/cartzilla/assets/img/shop/catalog/07.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Women's Swimwear</a>
                        <h3 class="product-title fs-base"><a href="shop-single-v1.html">Two-Piece Bikini in Print</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$18.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden">
                            <div class="pb-2">
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size4" id="xs3" checked>
                                    <label class="form-option-label" for="xs3">XS</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size4" id="s3">
                                    <label class="form-option-label" for="s3">S</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size4" id="m3">
                                    <label class="form-option-label" for="m3">M</label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                            <div class="text-start"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top pt-3 mt-3"></div>
            <!-- Product-->
            <div class="card product-card product-list">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
                <div class="d-sm-flex align-items-center"><a class="product-list-thumb" href="shop-single-v1.html"><img src="/themes/cartzilla/assets/img/shop/catalog/08.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Kid's Toys</a>
                        <h3 class="product-title fs-base"><a href="shop-single-v1.html">Soft Panda Teddy Bear</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$14.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden">
                            <button class="btn btn-primary btn-sm mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                            <div class="text-start"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top pt-3 mt-3"></div>
            <!-- Product-->
            <div class="card product-card product-list">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
                <div class="d-sm-flex align-items-center"><a class="product-list-thumb" href="shop-single-v1.html"><img src="/themes/cartzilla/assets/img/shop/catalog/09.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Cosmetics</a>
                        <h3 class="product-title fs-base"><a href="shop-single-v1.html">Metallic Lipstick (Crimson)</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$12.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden">
                            <div class="pb-2">
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color3" id="crimson" checked>
                                    <label class="form-option-label rounded-circle" for="crimson"><span class="form-option-color rounded-circle" style="background-color: #bd3c82;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color3" id="creamy">
                                    <label class="form-option-label rounded-circle" for="creamy"><span class="form-option-color rounded-circle" style="background-color: #ebae81;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color3" id="palm">
                                    <label class="form-option-label rounded-circle" for="palm"><span class="form-option-color rounded-circle" style="background-color: #ca8799;"></span></label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                            <div class="text-start"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top pt-3 mt-3"></div>
            <!-- Product-->
            <div class="card product-card product-list">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
                <div class="d-sm-flex align-items-center"><a class="product-list-thumb" href="shop-single-v1.html"><img src="/themes/cartzilla/assets/img/shop/catalog/10.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Accessories</a>
                        <h3 class="product-title fs-base"><a href="shop-single-v1.html">5-Pack Multicolor Bracelets</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$7.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden">
                            <button class="btn btn-primary btn-sm mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                            <div class="text-start"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top pt-3 mt-3"></div>
            <!-- Product-->
            <div class="card product-card product-list">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
                <div class="d-sm-flex align-items-center"><a class="product-list-thumb" href="shop-single-v1.html"><img src="/themes/cartzilla/assets/img/shop/catalog/11.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Sandals</a>
                        <h3 class="product-title fs-base"><a href="shop-single-v1.html">Soft Footbed Sandals</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$99.<small>50</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden">
                            <div class="pb-2">
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color4" id="blue2" checked>
                                    <label class="form-option-label rounded-circle" for="blue2"><span class="form-option-color rounded-circle" style="background-color: #879fb3;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color4" id="brown">
                                    <label class="form-option-label rounded-circle" for="brown"><span class="form-option-color rounded-circle" style="background-color: #9c6d4a;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color4" id="black">
                                    <label class="form-option-label rounded-circle" for="black"><span class="form-option-color rounded-circle" style="background-color: #333333;"></span></label>
                                </div>
                            </div>
                            <div class="d-flex mb-2">
                                <select class="form-select form-select-sm me-2" style="max-width: 6rem;">
                                    <option>9.5</option>
                                    <option>10</option>
                                    <option>10.5</option>
                                    <option>11</option>
                                    <option>11.5</option>
                                </select>
                                <button class="btn btn-primary btn-sm" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                            </div>
                            <div class="text-start"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top pt-3 mt-3"></div>
            <!-- Product-->
            <div class="card product-card product-list">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
                <div class="d-sm-flex align-items-center"><a class="product-list-thumb" href="shop-single-v1.html"><img src="/themes/cartzilla/assets/img/shop/catalog/12.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Hats</a>
                        <h3 class="product-title fs-base"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$25.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden">
                            <div class="pb-2">
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size5" id="s4" checked>
                                    <label class="form-option-label" for="s4">S</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size5" id="m4">
                                    <label class="form-option-label" for="m4">M</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size5" id="l4">
                                    <label class="form-option-label" for="l4">L</label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                            <div class="text-start"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top pt-3 mt-3"></div>
            <!-- Pagination-->
            <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"><i class="ci-arrow-left me-2"></i>Prev</a></li>
                </ul>
                <ul class="pagination">
                    <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
                    <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
                </ul>
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="ci-arrow-right ms-2"></i></a></li>
                </ul>
            </nav>
        </section>
    </div>
</div>
@stop
