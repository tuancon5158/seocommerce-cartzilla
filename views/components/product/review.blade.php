 <div class="border-top border-bottom my-lg-3 py-5">
     <div class="container pt-md-2" id="reviews">


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
                         </select>
                     </div>
                 </div>
                 <!-- Review-->
             </div>
             @if($product->reviews->count() > 0)
             <div class="row pb-3">
                 @foreach($reviews as $review)
                 <div class="product-review pb-4 mb-4 border-bottom">
                     <div class="d-flex mb-3">
                         <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="/themes/cartzilla/assets/img/shop/reviews/01.jpg" width="50" alt="Rafael Marquez">
                             <div class="ps-3">
                                 <h6 class="fs-sm mb-0"> {{ $review->name }},</h6><span class="fs-ms text-muted"> {{ $review->created_at->format('d M Y') }}</span>
                             </div>
                         </div>
                         <div>
                             <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                             </div>
                             {{-- <div class="fs-ms text-muted">83% of users found this review helpful</div> --}}
                         </div>
                     </div>
                     <p class="fs-md mb-2"> {!! $review->content !!}</p>


                 </div>
                 @endforeach
             </div>
             @include('cartzilla::components.paginator', ['paginator' => $reviews])
             @endif
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
