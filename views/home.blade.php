
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cartzilla | Multipurpose Bootstrap E-commerce Template</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/themes/cartzilla/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/themes/cartzilla/assets/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="/themes/cartzilla/assets/vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="/themes/cartzilla/assets/vendor/tiny-slider/dist/tiny-slider.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" href="/themes/cartzilla/assets/css/theme.min.css">
  </head>
  <!-- Body-->
  <body class="handheld-toolbar-enabled">
  <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-secondary">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true"><i class="ci-unlocked me-2 mt-n1"></i>Sign in</a></li>
              <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>Sign up</a></li>
            </ul>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body tab-content py-4">
            <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
              <div class="mb-3">
                <label class="form-label" for="si-email">Email address</label>
                <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3 d-flex flex-wrap justify-content-between">
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" id="si-remember">
                  <label class="form-check-label" for="si-remember">Remember me</label>
                </div><a class="fs-sm" href="#">Forgot password?</a>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign in</button>
            </form>
            <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
              <div class="mb-3">
                <label class="form-label" for="su-name">Full name</label>
                <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                <div class="invalid-feedback">Please fill in your name.</div>
              </div>
              <div class="mb-3">
                <label for="su-email">Email address</label>
                <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-password-confirm">Confirm password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password-confirm" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="bg-light shadow-sm navbar-sticky">
      <div class="navbar navbar-expand-lg navbar-light">
        <div class="container"><a class="navbar-brand d-none d-sm-block me-4 order-lg-1" href="index.html"><img src="/themes/cartzilla/assets/img/logo-dark.png" width="142" alt="Cartzilla"></a><a class="navbar-brand d-sm-none me-2 order-lg-1" href="index.html"><img src="/themes/cartzilla/assets/img/logo-icon.png" width="74" alt="Cartzilla"></a>
          <div class="navbar-toolbar d-flex align-items-center order-lg-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="btn btn-primary btn-shadow" href="https://themes.getbootstrap.com/product/cartzilla-bootstrap-e-commerce-template-ui-kit/" target="_blank" rel="noopener"><i class="ci-cart me-2"></i>Buy now</a>
          </div>
          <div class="collapse navbar-collapse me-auto order-lg-2" id="navbarCollapse">
            <hr class="my-3">
            <!-- Primary menu-->
            <ul class="navbar-nav">
              <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Home</a>
                <ul class="dropdown-menu">
                  <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-fashion-store-v1.html"><span class="d-block text-heading">Fashion Store v.1</span><small class="d-block text-muted">Classic shop layout</small></a>
                    <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-fashion-store-v1.html" style="width: 250px;"><img src="/themes/cartzilla/assets/img/home/preview/th01.jpg" alt="Fashion Store v.1"></a></div>
                  </li>
                  <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-electronics-store.html"><span class="d-block text-heading">Electronics Store</span><small class="d-block text-muted">Slider + Promo banners</small></a>
                    <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-electronics-store.html" style="width: 250px;"><img src="/themes/cartzilla/assets/img/home/preview/th03.jpg" alt="Electronics Store"></a></div>
                  </li>
                  <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-marketplace.html"><span class="d-block text-heading">Marketplace</span><small class="d-block text-muted">Multi-vendor, digital goods</small></a>
                    <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-marketplace.html" style="width: 250px;"><img src="/themes/cartzilla/assets/img/home/preview/th04.jpg" alt="Marketplace"></a></div>
                  </li>
                  <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-grocery-store.html"><span class="d-block text-heading">Grocery Store</span><small class="d-block text-muted">Full width + Side menu</small></a>
                    <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-grocery-store.html" style="width: 250px;"><img src="/themes/cartzilla/assets/img/home/preview/th06.jpg" alt="Grocery Store"></a></div>
                  </li>
                  <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-food-delivery.html"><span class="d-block text-heading">Food Delivery Service</span><small class="d-block text-muted">Food &amp; Beverages delivery</small></a>
                    <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-food-delivery.html" style="width: 250px;"><img src="/themes/cartzilla/assets/img/home/preview/th07.jpg" alt="Food Delivery Service"></a></div>
                  </li>
                  <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-fashion-store-v2.html"><span class="d-block text-heading">Fashion Store v.2</span><small class="d-block text-muted">Slider + Featured categories</small></a>
                    <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-fashion-store-v2.html" style="width: 250px;"><img src="/themes/cartzilla/assets/img/home/preview/th02.jpg" alt="Fashion Store v.2"></a></div>
                  </li>
                  <li class="dropdown position-static mb-0"><a class="dropdown-item py-2" href="home-single-store.html"><span class="d-block text-heading">Single Product Store</span><small class="d-block text-muted">Single product / mono brand</small></a>
                    <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-single-store.html" style="width: 250px;"><img src="/themes/cartzilla/assets/img/home/preview/th05.jpg" alt="Single Product / Brand Store"></a></div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop</a>
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
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Account</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop User Account</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="account-orders.html">Orders History</a></li>
                      <li><a class="dropdown-item" href="account-profile.html">Profile Settings</a></li>
                      <li><a class="dropdown-item" href="account-address.html">Account Addresses</a></li>
                      <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a></li>
                      <li><a class="dropdown-item" href="account-wishlist.html">Wishlist</a></li>
                      <li><a class="dropdown-item" href="account-tickets.html">My Tickets</a></li>
                      <li><a class="dropdown-item" href="account-single-ticket.html">Single Ticket</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Vendor Dashboard</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="dashboard-settings.html">Settings</a></li>
                      <li><a class="dropdown-item" href="dashboard-purchases.html">Purchases</a></li>
                      <li><a class="dropdown-item" href="dashboard-favorites.html">Favorites</a></li>
                      <li><a class="dropdown-item" href="dashboard-sales.html">Sales</a></li>
                      <li><a class="dropdown-item" href="dashboard-products.html">Products</a></li>
                      <li><a class="dropdown-item" href="dashboard-add-new-product.html">Add New Product</a></li>
                      <li><a class="dropdown-item" href="dashboard-payouts.html">Payouts</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="account-signin.html">Sign In / Sign Up</a></li>
                  <li><a class="dropdown-item" href="account-password-recovery.html">Password Recovery</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Navbar Variants</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="navbar-1-level-light.html">1 Level Light</a></li>
                      <li><a class="dropdown-item" href="navbar-1-level-dark.html">1 Level Dark</a></li>
                      <li><a class="dropdown-item" href="navbar-2-level-light.html">2 Level Light</a></li>
                      <li><a class="dropdown-item" href="navbar-2-level-dark.html">2 Level Dark</a></li>
                      <li><a class="dropdown-item" href="navbar-3-level-light.html">3 Level Light</a></li>
                      <li><a class="dropdown-item" href="navbar-3-level-dark.html">3 Level Dark</a></li>
                      <li><a class="dropdown-item" href="home-electronics-store.html">Electronics Store</a></li>
                      <li><a class="dropdown-item" href="home-marketplace.html">Marketplace</a></li>
                      <li><a class="dropdown-item" href="home-grocery-store.html">Side Menu (Grocery)</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="about.html">About Us</a></li>
                  <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Help Center</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="help-topics.html">Help Topics</a></li>
                      <li><a class="dropdown-item" href="help-single-topic.html">Single Topic</a></li>
                      <li><a class="dropdown-item" href="help-submit-request.html">Submit a Request</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">404 Not Found</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="404-simple.html">404 - Simple Text</a></li>
                      <li><a class="dropdown-item" href="404-illustration.html">404 - Illustration</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog List Layouts</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="blog-list-sidebar.html">List with Sidebar</a></li>
                      <li><a class="dropdown-item" href="blog-list.html">List no Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Blog Grid Layouts</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="blog-grid-sidebar.html">Grid with Sidebar</a></li>
                      <li><a class="dropdown-item" href="blog-grid.html">Grid no Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Single Post Layouts</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="blog-single-sidebar.html">Article with Sidebar</a></li>
                      <li><a class="dropdown-item" href="blog-single.html">Article no Sidebar</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Docs / Components</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="docs/dev-setup.html">
                      <div class="d-flex">
                        <div class="lead text-muted pt-1"><i class="ci-book"></i></div>
                        <div class="ms-2"><span class="d-block text-heading">Documentation</span><small class="d-block text-muted">Kick-start customization</small></div>
                      </div></a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="components/typography.html">
                      <div class="d-flex">
                        <div class="lead text-muted pt-1"><i class="ci-server"></i></div>
                        <div class="ms-2"><span class="d-block text-heading">Components<span class="badge bg-info ms-2">40+</span></span><small class="d-block text-muted">Faster page building</small></div>
                      </div></a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="docs/changelog.html">
                      <div class="d-flex">
                        <div class="lead text-muted pt-1"><i class="ci-edit"></i></div>
                        <div class="ms-2"><span class="d-block text-heading">Changelog<span class="badge bg-success ms-2">v2.0</span></span><small class="d-block text-muted">Regular updates</small></div>
                      </div></a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="mailto:support@createx.studio">
                      <div class="d-flex">
                        <div class="lead text-muted pt-1"><i class="ci-help"></i></div>
                        <div class="ms-2"><span class="d-block text-heading">Support</span><small class="d-block text-muted">support@createx.studio</small></div>
                      </div></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <!-- Hero section-->
    <section class="bg-accent bg-position-center bg-size-cover py-3 py-sm-5" style="background-image: url(/themes/cartzilla/assets/img/intro/intro-hero.jpg);">
      <div class="container py-5">
        <div class="row pt-md-5 pb-lg-5 justify-content-center">
          <div class="col-xl-7 col-lg-8 col-md-10 text-center py-xl-3">
            <h1 class="text-light pb-sm-3"><span class='fw-light'>Multipurpose</span> Bootstrap 5<br>E-Commerce <span class='fw-light'>Template</span></h1><span class="d-inline-block h5 text-light fw-light mx-2 opacity-70">Single / Multi-vendor</span><span class="d-inline-block h3 text-light fw-light mx-2">Marketplace</span><span class="d-inline-block h4 text-light fw-light mx-2 opacity-70">Fashion</span><span class="d-inline-block h3 text-light fw-light mx-2 opacity-90">Electronics</span><span class="d-inline-block h6 text-light fw-light mx-2 opacity-60">Cart</span><span class="d-inline-block h3 text-light fw-light mx-2">Grocery store</span><span class="d-inline-block h5 text-light fw-light mx-2 opacity-80">Checkout</span><span class="d-inline-block h4 text-light fw-light mx-2">Food Delivery</span><span class="d-inline-block fs-lg text-light fw-light mx-2 opacity-60">Account / Dasboard</span>
            <div class="py-4 py-sm-5"><a class="btn btn-primary btn-lg" href="#demos" data-scroll>View Demos<i class="ci-arrow-down-circle ms-2"></i></a></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Demos section-->
    <section class="container pt-5 pb-3 pb-lg-5" id="demos">
      <div class="text-center pt-md-4 pb-2">
        <h2><span class='fw-light'>Explore</span> Cartzilla Demos</h2>
        <p class="text-muted">Explore the collection of carefully built homepages. More to come soon!</p>
      </div>
      <div class="row pt-4">
        <div class="col-sm-6 mb-4">
          <div class="card product-card-alt">
            <div class="product-thumb border">
              <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="home-fashion-store-v1.html"><i class="ci-eye"></i></a><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="https://themes.getbootstrap.com/product/cartzilla-bootstrap-e-commerce-template-ui-kit/" target="_blank" rel="noopener"><i class="ci-cart"></i></a></div><a class="product-thumb-overlay" href="home-fashion-store-v1.html"></a><img src="/themes/cartzilla/assets/img/home/preview/01.jpg" alt="Fashion Store v.1">
            </div>
            <div class="card-body text-center">
              <h3 class="product-title fs-lg pt-2"><a href="home-fashion-store-v1.html">Fashion Store v.1</a></h3>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mb-4">
          <div class="card product-card-alt">
            <div class="product-thumb border">
              <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="home-electronics-store.html"><i class="ci-eye"></i></a><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="https://themes.getbootstrap.com/product/cartzilla-bootstrap-e-commerce-template-ui-kit/" target="_blank" rel="noopener"><i class="ci-cart"></i></a></div><a class="product-thumb-overlay" href="home-electronics-store.html"></a><img src="/themes/cartzilla/assets/img/home/preview/03.jpg" alt="Electronics Store">
            </div>
            <div class="card-body text-center">
              <h3 class="product-title fs-lg pt-2"><a href="home-electronics-store.html">Electronics Store</a></h3>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mb-4">
          <div class="card product-card-alt">
            <div class="product-thumb border">
              <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="home-food-delivery.html"><i class="ci-eye"></i></a><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="https://themes.getbootstrap.com/product/cartzilla-bootstrap-e-commerce-template-ui-kit/" target="_blank" rel="noopener"><i class="ci-cart"></i></a></div><a class="product-thumb-overlay" href="home-food-delivery.html"></a><img src="/themes/cartzilla/assets/img/home/preview/07.jpg" alt="Food Delivery Service">
            </div>
            <div class="card-body text-center">
              <h3 class="product-title fs-lg pt-2"><a href="home-food-delivery.html">Food Delivery Service</a></h3>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mb-4">
          <div class="card product-card-alt">
            <div class="product-thumb border">
              <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="home-marketplace.html"><i class="ci-eye"></i></a><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="https://themes.getbootstrap.com/product/cartzilla-bootstrap-e-commerce-template-ui-kit/" target="_blank" rel="noopener"><i class="ci-cart"></i></a></div><a class="product-thumb-overlay" href="home-marketplace.html"></a><img src="/themes/cartzilla/assets/img/home/preview/04.jpg" alt="Multi-vendor Marketplace">
            </div>
            <div class="card-body text-center">
              <h3 class="product-title fs-lg pt-2"><a href="home-marketplace.html">Multi-vendor Marketplace</a></h3>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mb-4">
          <div class="card product-card-alt">
            <div class="product-thumb border">
              <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="home-grocery-store.html"><i class="ci-eye"></i></a><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="https://themes.getbootstrap.com/product/cartzilla-bootstrap-e-commerce-template-ui-kit/" target="_blank" rel="noopener"><i class="ci-cart"></i></a></div><a class="product-thumb-overlay" href="home-grocery-store.html"></a><img src="/themes/cartzilla/assets/img/home/preview/06.jpg" alt="Grocery Store">
            </div>
            <div class="card-body text-center">
              <h3 class="product-title fs-lg pt-2"><a href="home-grocery-store.html">Grocery Store</a></h3>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mb-4">
          <div class="card product-card-alt">
            <div class="product-thumb border">
              <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="home-fashion-store-v2.html"><i class="ci-eye"></i></a><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="https://themes.getbootstrap.com/product/cartzilla-bootstrap-e-commerce-template-ui-kit/" target="_blank" rel="noopener"><i class="ci-cart"></i></a></div><a class="product-thumb-overlay" href="home-fashion-store-v2.html"></a><img src="/themes/cartzilla/assets/img/home/preview/02.jpg" alt="Fashion Store v.2">
            </div>
            <div class="card-body text-center">
              <h3 class="product-title fs-lg pt-2"><a href="home-fashion-store-v2.html">Fashion Store v.2</a></h3>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mb-4">
          <div class="card product-card-alt">
            <div class="product-thumb border">
              <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="home-single-store.html"><i class="ci-eye"></i></a><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="https://themes.getbootstrap.com/product/cartzilla-bootstrap-e-commerce-template-ui-kit/" target="_blank" rel="noopener"><i class="ci-cart"></i></a></div><a class="product-thumb-overlay" href="home-single-store.html"></a><img src="/themes/cartzilla/assets/img/home/preview/05.jpg" alt="Single Product / Brand Store">
            </div>
            <div class="card-body text-center">
              <h3 class="product-title fs-lg pt-2"><a href="home-single-store.html">Single Product / Brand Store</a></h3>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mb-4">
          <div class="card product-card-alt">
            <div class="product-thumb"><img src="/themes/cartzilla/assets/img/home/preview/coming.png" alt="Coming Soon"></div>
            <div class="card-body text-center">
              <h3 class="fs-lg pt-2">Coming Soon</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Cartzilla pages section-->
    <section class="bg-dark py-5">
      <div class="container py-3 py-lg-4">
        <div class="row align-items-center">
          <div class="col-xl-4 col-lg-5 pb-4 pb-lg-0">
            <h2 class="text-light"><span class='fw-light'>Complete</span> E-Commerce Front-End <span class='fw-light'>Solution</span></h2>
            <p class="text-light opacity-70">All you need for your next e-commerce project</p>
            <ul class="text-light list-unstyled pt-3">
              <li><i class="ci-check-circle text-success me-2"></i>Shop Grid / List Layout Options</li>
              <li><i class="ci-check-circle text-success me-2"></i>Multiple Product Page Variations</li>
              <li><i class="ci-check-circle text-success me-2"></i>Complete Order Workflow: Cart + Checkout</li>
              <li><i class="ci-check-circle text-success me-2"></i>Shop Customer Account Pages</li>
              <li><i class="ci-check-circle text-success me-2"></i>Vendor Dashboard for Multi-vendor Marketplaces</li>
              <li><i class="ci-check-circle text-success me-2"></i>Ready for any Content: Fashion, Electronics, Digital (Downloadable) Products, etc.</li>
              <li><i class="ci-check-circle text-success me-2"></i>Blog Pages: Blog Layouts + Single Post</li>
              <li><i class="ci-check-circle text-success me-2"></i>Help Center / Support Pages</li>
              <li><i class="ci-check-circle text-success me-2"></i>Secondary Pages: About, Contacts, 404, etc.</li>
              <li><i class="ci-check-circle text-success me-2"></i>40+ Flexible Components</li>
            </ul>
          </div>
          <div class="col-lg-7 offset-xl-1"><img src="/themes/cartzilla/assets/img/intro/pages-showcase.jpg" alt="Cartzilla pages"></div>
        </div>
      </div>
    </section>
    <!-- Cartzill handheld toolbar-->
    <section class="bg-secondary py-4">
      <div class="container pt-4 pt-md-0">
        <div class="row align-items-center">
          <div class="col-xl-4 offset-xl-1 col-lg-5 offset-lg-1 col-md-6 text-center text-md-left"><span class="badge badge-info fs-sm mb-4">From v1.2</span>
            <h2><span class='fw-light'>Even More</span> Mobile Friendly <span class='fw-light'>Interface</span></h2>
            <p class="text-muted pb-2">New <span class='fw-medium'>Toolbar</span> designed specifically for handheld devices to further improve user experience.</p>
            <p class="fs-sm">Scan QR code below to cartzilla on your device:</p><img src="/themes/cartzilla/assets/img/intro/qrcode.png" width="150" alt="QR code">
          </div>
          <div class="col-md-6"><img class="d-block mx-auto" src="/themes/cartzilla/assets/img/intro/handheld-toolbar.jpg" alt="Toolbar"></div>
        </div>
      </div>
    </section>
    <!-- Cartzilla features section-->
    <section class="py-5">
      <div class="container py-3 py-lg-4">
        <h2 class="text-center mb-4">Cartzilla Feature <span class='fw-light'>Highlights</span></h2>
        <div class="row text-center pt-4">
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="/themes/cartzilla/assets/img/intro/features/01.png" width="90" alt="Gulp icon">
            <h6>Kick-start Your Development</h6>
            <p class="fs-ms text-muted mb-0">Start your development process fast and easy with Node.js and Gulp setup. Configuration files are included in download package. Full tasks automation.</p>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="/themes/cartzilla/assets/img/intro/features/02.png" width="90" alt="Sass icon">
            <h6>Easy to Customize with Sass</h6>
            <p class="fs-ms text-muted mb-0">Cartzilla is built using Sass. Easily change colors, typography and much more. It is the most mature, stable, and powerful CSS extension language in the world.</p>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="/themes/cartzilla/assets/img/intro/features/03.png" width="90" alt="Pug icon">
            <h6>Pug - Node Templating Engine</h6>
            <p class="fs-ms text-muted mb-0">No need to write huge amount of HTML, if you don’t want to. Pug provides features not available in plain HTML like variables, includes, mixins, functions, etc.</p>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="/themes/cartzilla/assets/img/intro/features/04.png" width="90" alt="Bootstrap icon">
            <h6>Built With Bootstrap 5</h6>
            <p class="fs-ms text-muted mb-0">Cartzilla is the powerful e-commerce front-end solution based on Bootstrap 5 - the world's most popular responsive, mobile-first front-end component library.</p>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="/themes/cartzilla/assets/img/intro/features/05.png" width="90" alt="Web Components icon">
            <h6>40+ Flexible Components</h6>
            <p class="fs-ms text-muted mb-0">Besides styling all default Bootstrap 5 components Cartzilla introduces lots of new flexible, customizable and reusable elements you can use across the website.</p>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="/themes/cartzilla/assets/img/intro/features/06.png" width="90" alt="Mobile Friendly icon">
            <h6>Mobile Friendly Interface</h6>
            <p class="fs-ms text-muted mb-0">It's not a surprise that nowadays over 70% of users shop online using their mobile devices. Cartzilla is 100% responsive and optimized for small touch screens.</p>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="/themes/cartzilla/assets/img/intro/features/07.png" width="90" alt="Google Fonts icon">
            <h6>Google Fonts</h6>
            <p class="fs-ms text-muted mb-0">Cartzilla uses Google fonts which are free, fast to load and of very high quality. Currently Google fonts library includes 870+ font families to choose from.</p>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="/themes/cartzilla/assets/img/intro/features/08.png" width="90" alt="Touch icon">
            <h6>Touch-enabled Sliders</h6>
            <p class="fs-ms text-muted mb-0">In the era of touch screens it's important to ensure great user experience on handheld devices, especially when it comes to such frequently used interface component as slider.</p>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="/themes/cartzilla/assets/img/intro/features/09.png" width="90" alt="Vector icon">
            <h6>Vector Based HD Ready Icons</h6>
            <p class="fs-ms text-muted mb-0">Cartzilla is equiped with font-based icon pack to ensure that infographics and interface icons look sharp on any device with any screen resolution and pixel density.</p>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="/themes/cartzilla/assets/img/intro/features/10.png" width="90" alt="HTML5 icon">
            <h6>W3C Valid HTML Code</h6>
            <p class="fs-ms text-muted mb-0">All HTML files are checked via W3C validator to ensure 100% valid code. As you probably know invalid HTML limits innovation, but Cartzilla is innovative at its core.</p>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="/themes/cartzilla/assets/img/intro/features/11.png" width="90" alt="JavaScript icon">
            <h6>Future-proof JavaScript</h6>
            <p class="fs-ms text-muted mb-0">Cartzilla core scripts as well as all dependencies are written in vanilla JS. And now with Bootstrap 5 we finally drops jQuery and uses ES6 modules.</p>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="/themes/cartzilla/assets/img/intro/features/12.png" width="90" alt="Documentation icon">
            <h6>Detailed Documentation</h6>
            <p class="fs-ms text-muted mb-0">Download package includes links to online documentation. It covers all crucial information about how to get started, customize template and components usage.</p>
          </div>
        </div>
        <h6 class="text-center">And much more...</h6>
      </div>
    </section>
    <!-- Footer-->
    <footer class="border-top py-5">
      <div class="container text-center pt-3 pt-lg-4">
        <h3 class="fw-light">Still not convinced?</h3>
        <h2 class="pb-4">Add premium support and lifetime updates to this.</h2><a class="btn btn-primary btn-lg" href="https://themes.getbootstrap.com/product/cartzilla-bootstrap-e-commerce-template-ui-kit/" target="_blank" rel="noopener"><i class="ci-cart me-2"></i>Buy Cartzilla</a>
        <hr class="my-5">
        <div class="fs-ms text-muted text-center">© All rights reserved. Made by <a class="text-muted" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
      </div>
    </footer>
    <!-- Toolbar for handheld devices (Default)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="account-wishlist.html"><span class="handheld-toolbar-icon"><i class="ci-heart"></i></span><span class="handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="shop-cart.html"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1">4</span></span><span class="handheld-toolbar-label">$265.00</span></a></div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>
</html>