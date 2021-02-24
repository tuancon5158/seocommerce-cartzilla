 @extends('cartzilla::layouts.default')
 @section('content')
 	<?php
	    // Get 3 newest
	    $posts = \App\Models\Post::orderBy('id', 'desc')->take(3)->get();

	   

	?>
 <div class="bg-secondary py-4">
 {{   $posts  }}
     <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
         <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
                     <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
                     <li class="breadcrumb-item text-nowrap"><a href="#">Blog</a>
                     </li>
                     <li class="breadcrumb-item text-nowrap active" aria-current="page">List no sidebar</li>
                 </ol>
             </nav>
         </div>
         <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
             <h1 class="h3 mb-0">Blogs</h1>
         </div>
     </div>
 </div>
 <div class="container pb-5 mb-2 mb-md-4">
     <!-- Featured posts carousel-->
     <div class="featured-posts-carousel tns-carousel pt-5">
         <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;nav&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;700&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 20},&quot;991&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 30}}}">
             <article><a class="blog-entry-thumb mb-3" href="blog-single-sidebar.html"><span class="blog-entry-meta-label fs-sm"><i class="ci-time"></i>Sep 10</span><img src="/themes/cartzilla/assets/img/blog/featured/01.jpg" alt="Featured post"></a>
                 <div class="d-flex justify-content-between mb-2 pt-1">
                     <h2 class="h5 blog-entry-title mb-0"><a href="blog-single-sidebar.html">Healthy Food - New Way of Living</a></h2><a class="blog-entry-meta-link fs-sm text-nowrap ms-3 pt-1" href="blog-single-sidebar.html#comments"><i class="ci-message"></i>13</a>
                 </div>
                 <div class="d-flex align-items-center fs-sm"><a class="blog-entry-meta-link" href="#">
                         <div class="blog-entry-author-ava"><img src="/themes/cartzilla/assets/img/blog/meta/04.jpg" alt="Olivia Reyes"></div>Olivia Reyes
                     </a><span class="blog-entry-meta-divider"></span>
                     <div class="fs-sm text-muted">in <a href='#' class='blog-entry-meta-link'>Lifestyle</a>, <a href='#' class='blog-entry-meta-link'>Nutrition</a></div>
                 </div>
             </article>
             <article><a class="blog-entry-thumb mb-3" href="blog-single-sidebar.html"><span class="blog-entry-meta-label fs-sm"><i class="ci-time"></i>Aug 27</span><img src="/themes/cartzilla/assets/img/blog/featured/02.jpg" alt="Featured post"></a>
                 <div class="d-flex justify-content-between mb-2 pt-1">
                     <h2 class="h5 blog-entry-title mb-0"><a href="blog-single-sidebar.html">Online Payment Security Tips for Shoppers</a></h2><a class="blog-entry-meta-link fs-sm text-nowrap ms-3 pt-1" href="blog-single-sidebar.html#comments"><i class="ci-message"></i>9</a>
                 </div>
                 <div class="d-flex align-items-center fs-sm"><a class="blog-entry-meta-link" href="#">
                         <div class="blog-entry-author-ava"><img src="/themes/cartzilla/assets/img/blog/meta/05.jpg" alt="Rafael Marquez"></div>Rafael Marquez
                     </a><span class="blog-entry-meta-divider"></span>
                     <div class="fs-sm text-muted">in <a href='#' class='blog-entry-meta-link'>Online shpopping</a></div>
                 </div>
             </article>
             <article><a class="blog-entry-thumb mb-3" href="blog-single-sidebar.html"><span class="blog-entry-meta-label fs-sm"><i class="ci-time"></i>Aug 16</span><img src="/themes/cartzilla/assets/img/blog/featured/03.jpg" alt="Featured post"></a>
                 <div class="d-flex justify-content-between mb-2 pt-1">
                     <h2 class="h5 blog-entry-title mb-0"><a href="blog-single-sidebar.html">We Launched New Store in San Francisco!</a></h2><a class="blog-entry-meta-link fs-sm text-nowrap ms-3 pt-1" href="blog-single-sidebar.html#comments"><i class="ci-message"></i>23</a>
                 </div>
                 <div class="d-flex align-items-center fs-sm"><a class="blog-entry-meta-link" href="#">
                         <div class="blog-entry-author-ava"><img src="/themes/cartzilla/assets/img/blog/meta/03.jpg" alt="Paul Woodred"></div>Paul Woodred
                     </a><span class="blog-entry-meta-divider"></span>
                     <div class="fs-sm text-muted">in <a href='#' class='blog-entry-meta-link'>Cartzilla news</a></div>
                 </div>
             </article>
         </div>
     </div>
     <hr class="mt-5">
     <div class="row justify-content-center pt-5 mt-2">
         <!-- Entries list-->
         <section class="col-lg-9">
             <!-- Entry-->
             <article class="blog-list border-bottom pb-4 mb-5">
                 <div class="blog-start-column">
                     <div class="d-flex align-items-center fs-sm pb-2 mb-1"><a class="blog-entry-meta-link" href="#">
                             <div class="blog-entry-author-ava"><img src="/themes/cartzilla/assets/img/blog/meta/01.jpg" alt="Emma Gallaher"></div>Emma Gallaher
                         </a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Aug 15</a></div>
                     <h2 class="h5 blog-entry-title"><a href="blog-single.html">Global Travel and Vacations on a Tight Budget</a></h2>
                 </div>
                 <div class="blog-end-column">
                     <div class="d-flex justify-content-between mb-1">
                         <div class="fs-sm text-muted pe-2 mb-2">in <a href='#' class='blog-entry-meta-link'>Travel</a>, <a href='#' class='blog-entry-meta-link'>Personal finance</a></div>
                         <div class="fs-sm mb-2"><a class="blog-entry-meta-link text-nowrap" href="blog-single.html#comments"><i class="ci-message"></i>8</a></div>
                     </div>
                     <p class="fs-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt… <a href='blog-single.html' class='blog-entry-meta-link fw-medium'>[Read more]</a></p>
                 </div>
             </article>
             <!-- Entry-->
             <article class="blog-list border-bottom pb-4 mb-5">
                 <div class="blog-start-column">
                     <div class="d-flex align-items-center fs-sm pb-2 mb-1"><a class="blog-entry-meta-link" href="#">
                             <div class="blog-entry-author-ava"><img src="/themes/cartzilla/assets/img/blog/meta/02.jpg" alt="Cynthia Gomez"></div>Cynthia Gomez
                         </a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Jul 23</a></div>
                     <h2 class="h5 blog-entry-title"><a href="blog-single.html">Top New Trends in Suburban High Fashion</a></h2>
                 </div>
                 <div class="blog-end-column"><a class="blog-entry-thumb mb-3" href="blog-single.html"><img src="/themes/cartzilla/assets/img/blog/01.jpg" alt="Post"></a>
                     <div class="d-flex justify-content-between mb-1">
                         <div class="fs-sm text-muted pe-2 mb-2">in <a href='#' class='blog-entry-meta-link'>Shopping</a>, <a href='#' class='blog-entry-meta-link'>Fashion</a></div>
                         <div class="fs-sm mb-2"><a class="blog-entry-meta-link text-nowrap" href="blog-single.html#comments"><i class="ci-message"></i>19</a></div>
                     </div>
                     <p class="fs-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation… <a href='blog-single.html' class='blog-entry-meta-link fw-medium'>[Read more]</a></p>
                 </div>
             </article>
             <!-- Entry-->
             <article class="blog-list border-bottom pb-4 mb-5">
                 <div class="blog-start-column">
                     <div class="d-flex align-items-center fs-sm pb-2 mb-1"><a class="blog-entry-meta-link" href="#">
                             <div class="blog-entry-author-ava"><img src="/themes/cartzilla/assets/img/blog/meta/03.jpg" alt="Paul Woodred"></div>Paul Woodred
                         </a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Jul 6</a></div>
                     <h2 class="h5 blog-entry-title"><a href="blog-single.html">Shopping Tips. Places Where to Buy Cheap</a></h2>
                 </div>
                 <div class="blog-end-column"><a class="blog-entry-thumb mb-3" href="blog-single.html"><img src="/themes/cartzilla/assets/img/blog/02.jpg" alt="Post"></a>
                     <div class="d-flex justify-content-between mb-1">
                         <div class="fs-sm text-muted pe-2 mb-2">in <a href='#' class='blog-entry-meta-link'>Shopping</a>, <a href='#' class='blog-entry-meta-link'>Personal finance</a></div>
                         <div class="fs-sm mb-2"><a class="blog-entry-meta-link text-nowrap" href="blog-single.html#comments"><i class="ci-message"></i>15</a></div>
                     </div>
                     <p class="fs-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation… <a href='blog-single.html' class='blog-entry-meta-link fw-medium'>[Read more]</a></p>
                 </div>
             </article>
             <!-- Entry-->
             <article class="blog-list border-bottom pb-4 mb-4">
                 <div class="blog-start-column">
                     <div class="d-flex align-items-center fs-sm pb-2 mb-1"><a class="blog-entry-meta-link" href="#">
                             <div class="blog-entry-author-ava"><img src="/themes/cartzilla/assets/img/blog/meta/04.jpg" alt="Olivia Reyes"></div>Olivia Reyes
                         </a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Jun 12</a></div>
                     <h2 class="h5 blog-entry-title"><a href="blog-single.html">Google Pay is Now Available in All Outlets</a></h2>
                 </div>
                 <div class="blog-end-column">
                     <div class="d-flex justify-content-between mb-1">
                         <div class="fs-sm text-muted pe-2 mb-2">in <a href='#' class='blog-entry-meta-link'>Cartzilla news</a></div>
                         <div class="fs-sm mb-2"><a class="blog-entry-meta-link text-nowrap" href="blog-single.html#comments"><i class="ci-message"></i>7</a></div>
                     </div>
                     <p class="fs-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt… <a href='blog-single.html' class='blog-entry-meta-link fw-medium'>[Read more]</a></p>
                 </div>
             </article>
             <!-- Entry-->
             <article class="blog-list border-bottom pb-4 mb-5">
                 <div class="blog-start-column">
                     <div class="d-flex align-items-center fs-sm pb-2 mb-1"><a class="blog-entry-meta-link" href="#">
                             <div class="blog-entry-author-ava"><img src="/themes/cartzilla/assets/img/blog/meta/05.jpg" alt="Rafael Marquez"></div>Rafael Marquez
                         </a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">May 29</a></div>
                     <h2 class="h5 blog-entry-title"><a href="blog-single.html">We Launched Regular Drone Delivery in California. Watch Demo Video</a></h2>
                 </div>
                 <div class="blog-end-column gallery"><a class="blog-entry-thumb gallery-item video-item mb-3" href="https://www.youtube.com/watch?v=TedKIlo0c04"><span class="blog-entry-meta-label fs-sm"><i class="ci-video"></i><span class="fs-ms">Watch video</span></span><img src="/themes/cartzilla/assets/img/blog/03.jpg" alt="Post"></a>
                     <div class="d-flex justify-content-between mb-1">
                         <div class="fs-sm text-muted pe-2 mb-2">in <a href='#' class='blog-entry-meta-link'>Cartzilla news</a></div>
                         <div class="fs-sm mb-2"><a class="blog-entry-meta-link text-nowrap" href="blog-single.html#comments"><i class="ci-message"></i>31</a></div>
                     </div>
                     <p class="fs-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation… <a href='blog-single.html' class='blog-entry-meta-link fw-medium'>[Read more]</a></p>
                 </div>
             </article>
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
