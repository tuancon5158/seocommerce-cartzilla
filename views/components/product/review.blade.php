 <div class="border-top border-bottom my-lg-3 py-5">
     <div class="container pt-md-2" id="reviews">
         {{-- <div class="row pb-3">
             <div class="col-lg-4 col-md-5">
                 <h2 class="h3 mb-4">74 Reviews</h2>
                 <div class="star-rating me-2"><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star fs-sm text-muted me-1"></i></div><span class="d-inline-block align-middle">4.1 Overall rating</span>
                 <p class="pt-3 fs-sm text-muted">58 out of 74 (77%)<br>Customers recommended this product</p>
             </div>
             <div class="col-lg-8 col-md-7">
                 <div class="d-flex align-items-center mb-2">
                     <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">5</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                     <div class="w-100">
                         <div class="progress" style="height: 4px;">
                             <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </div><span class="text-muted ms-3">43</span>
                 </div>
                 <div class="d-flex align-items-center mb-2">
                     <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">4</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                     <div class="w-100">
                         <div class="progress" style="height: 4px;">
                             <div class="progress-bar" role="progressbar" style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </div><span class="text-muted ms-3">16</span>
                 </div>
                 <div class="d-flex align-items-center mb-2">
                     <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">3</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                     <div class="w-100">
                         <div class="progress" style="height: 4px;">
                             <div class="progress-bar" role="progressbar" style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </div><span class="text-muted ms-3">9</span>
                 </div>
                 <div class="d-flex align-items-center mb-2">
                     <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">2</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                     <div class="w-100">
                         <div class="progress" style="height: 4px;">
                             <div class="progress-bar" role="progressbar" style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </div><span class="text-muted ms-3">4</span>
                 </div>
                 <div class="d-flex align-items-center">
                     <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">1</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                     <div class="w-100">
                         <div class="progress" style="height: 4px;">
                             <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </div><span class="text-muted ms-3">2</span>
                 </div>
             </div>
         </div>
         <hr class="mt-4 mb-3"> --}}
         <div class="row pt-4">
             <!-- Reviews list-->
             <div class="col-md-12">
                 <h4 class="mb-6 text-center">Customer Reviews</h4>
                 @include('cartzilla::components.errors', ['errors' => $errors])


                 <div class="d-flex justify-content-end pb-4">
                     <div class="d-flex align-items-center flex-nowrap">
                         <label class="fs-sm text-muted text-nowrap me-2 d-none d-sm-block" for="sort-reviews">Sort by:</label>
                         <select class="form-select form-select-sm" id="sort-reviews">
                             <option>Newest</option>
                             <option>Oldest</option>
                             {{-- <option>Popular</option>
                             <option>High rating</option>
                             <option>Low rating</option> --}}
                         </select>
                     </div>
                 </div>
                 <!-- Review-->
                 {{-- <div class="product-review pb-4 mb-4 border-bottom">
                     <div class="d-flex mb-3">
                         <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="/themes/cartzilla/assets/img/shop/reviews/01.jpg" width="50" alt="Rafael Marquez">
                             <div class="ps-3">
                                 <h6 class="fs-sm mb-0">Rafael Marquez</h6><span class="fs-ms text-muted">June 28, 2019</span>
                             </div>
                         </div>
                         <div>
                             <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                             </div>
                             <div class="fs-ms text-muted">83% of users found this review helpful</div>
                         </div>
                     </div>
                     <p class="fs-md mb-2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est...</p>
                     <ul class="list-unstyled fs-ms pt-1">
                         <li class="mb-1"><span class="fw-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                         <li class="mb-1"><span class="fw-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
                     </ul>
                     <div class="text-nowrap">
                         <button class="btn-like" type="button">15</button>
                         <button class="btn-dislike" type="button">3</button>
                     </div>
                 </div> --}}

             </div>
             <!-- Leave review form-->
             <div class="col-md-12 mt-2 pt-4 mt-md-0 pt-md-0">
                 <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-3">
                     <h3 class="h4 pb-2">Write a review</h3>
                     <form class="needs-validation" method="POST" action="{{ route('createReview') }}" novalidate>
                         @csrf
                         <div class="row mb-3">
                             <div class="col-12 col-sm-6">
                                 <label class="form-label" for="reviewName">Your name<span class="text-danger">*</span></label>
                                 <input value="{{ old('name') }}" name="name" class="form-control" type="text" required id="reviewName">
                                 <div class="invalid-feedback">Please enter your name!</div><small class="form-text text-muted">Will be displayed on the comment.</small>
                             </div>
                             <div class="col-12 col-sm-6">
                                 <label class="form-label" for="reviewEmail">Your email<span class="text-danger">*</span></label>
                                 <input value="{{ old('email') }}" name="email" class="form-control" type="email" required id="reviewEmail">
                                 <div class="invalid-feedback">Please provide valid email address!</div><small class="form-text text-muted">Authentication only - we won't spam you.</small>
                             </div>
                         </div>

                         <div class="mb-3">
                             <label class="form-label" for="review-rating">Rating<span class="text-danger">*</span></label>
                             <select name="rating" class="form-select" required id="review-rating">
                                 <option value="">Choose rating</option>
                                 <option value="5">5 stars</option>
                                 <option value="4">4 stars</option>
                                 <option value="3">3 stars</option>
                                 <option value="2">2 stars</option>
                                 <option value="1">1 star</option>
                             </select>
                             <div class="invalid-feedback">Please choose rating!</div>
                         </div>
                         <div class="mb-3">
                             <label class="form-label" for="orderId">Order ID</label>
                             <textarea value="{{ old('order_id') }}" name="order_id" class="form-control" rows="1" required placeholder="Order ID" id="orderId"></textarea>
                         </div>
                         <div class="mb-3">
                             <label class="form-label" for="reviewText">Review<span class="text-danger">*</span></label>
                             <textarea value="{{ old('content') }}" name="content" class="form-control" rows="6" required id="reviewText"></textarea>
                         </div>


                         <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Submit a Review</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
