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
            <div class="container"><a class="navbar-brand d-none d-sm-block flex-shrink-0" href="{{ route('home') }}"><img src="/themes/cartzilla/assets/img/logo-dark.png" width="142" alt="Cartzilla"></a><a class="navbar-brand d-sm-none flex-shrink-0 me-2" href="index.html"><img src="/themes/cartzilla/assets/img/logo-icon.png" width="74" alt="Cartzilla"></a>
                <div class="input-group d-none d-lg-flex mx-4">
                    <form style="width:100%" action="{{ route('search') }}" method="GET" class="text-center">
                        <div class="input-group input-group-merge">
                            <input name="query" class="form-control rounded-end pe-5" type="search" placeholder="Search for products"><i class="ci-search position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3"></i>
                            <div class="input-group-append">
                                <button class="btn btn-outline-border" type="submit">
                                    <i class="fe fe-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool navbar-stuck-toggler" href="{{route("cart")}}"><span class="navbar-tool-tooltip">Expand menu</span>
                        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-menu"></i></div>
                    </a><a class="navbar-tool d-none d-lg-flex" href="{{ route('wishlist') }}"><span class="navbar-tool-tooltip">Wishlist</span>
                        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-heart"></i></div>
                    </a><a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal" data-bs-toggle="modal">

                        @include('cartzilla::components.navbar.cart_icon')
                </div>
            </div>
        </div>
        <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Search-->

                    <!-- Primary menu-->
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="/products">All Product</a>
                        </li>

                        @foreach($collections->where('parent_id', null) as $collection)
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" {{ ($collection->children and $collection->children->count()) ? "" : "" }} href="{{ route('collection', ['slug' => $collection->slug]) }}"> {{ $collection->title }}</a>
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

                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{ route('login') }}">Account</a>
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
