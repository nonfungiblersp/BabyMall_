@include('userside.header')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  body {
  margin: 40px;
}

.rating {
  margin-top: 40px;
  border: none;
  float: left;
}

.rating > label {
  color: #90A0A3;
  float: right;
}

.rating > label:before {
  margin: 5px;
  font-size: 2em;
  font-family: FontAwesome;
  content: "\f005";
  display: inline-block;
}

.rating > input {
  display: none;
}

.rating > input:checked ~ label,
.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
  color: #F79426;
}

.rating > input:checked + label:hover,
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label,
.rating > input:checked ~ label:hover ~ label {
  color: #FECE31;
}
</style>
<section class="product-single theme1 pt-60">
    <div class="container">
      @if($message=Session::get('success'))
    <div class="alert alert-danger text-center ms-5" role="alert">
        {{$message}}
    </div> 
    @endif
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div>
            <div class="position-relative">
              <span class="badge badge-danger top-right">New</span>
            </div>
            <div class="product-sync-init mb-20">
              <div class="single-product">
                <div class="product-thumb">
                  <img src="{{asset('product')}}/{{$pro->pic1}}" alt="product-thumb" />
                </div>
              </div>
              <!-- single-product end -->
              <div class="single-product">
                <div class="product-thumb">
                  <img src="{{asset('product')}}/{{$pro->pic2}}" alt="product-thumb" />
                </div>
              </div>
              <!-- single-product end -->
              <div class="single-product">
                <div class="product-thumb">
                  <img src="{{asset('product')}}/{{$pro->pic3}}" alt="product-thumb" />
                </div>
              </div>
              <!-- single-product end -->
             
              <!-- single-product end -->
            </div>
          </div>
          <div class="product-sync-nav single-product">
            <div class="single-product">
              <div class="product-thumb">
                <a href="javascript:void(0)">
                  <img src="{{asset('product')}}/{{$pro->pic1}}" alt="product-thumb"
                /></a>
              </div>
            </div>
            <!-- single-product end -->
            <div class="single-product">
              <div class="product-thumb">
                <a href="javascript:void(0)">
                  <img src="{{asset('product')}}/{{$pro->pic2}}" alt="product-thumb"
                /></a>
              </div>
            </div>
            <!-- single-product end -->
            <div class="single-product">
              <div class="product-thumb">
                <a href="javascript:void(0)"
                  ><img src="{{asset('product')}}/{{$pro->pic3}}" alt="product-thumb"
                /></a>
              </div>
            </div>
            <!-- single-product end -->
            <div class="single-product">
              {{-- <div class="product-thumb">
                <a href="javascript:void(0)"
                  ><img src="{{asset('product')}}/{{$pro->pic3}}" alt="product-thumb"
                /></a>
              </div> --}}
            </div>
            <!-- single-product end -->
          </div>
        </div>
        <div class="col-lg-6">
          <div class="single-product-info">
            <div class="single-product-head">
              <h2 class="title mb-20">{{$pro->name}}</h2>
              <div class="star-content mb-20">
                <div class="star-rating mb-10">
                  @php
                  $randomNumber = rand(1, 5);
      
              @endphp
              @for ($i = 0; $i < $randomNumber; $i++)
              <span class="ion-ios-star"></span>
              @endfor            
                </div>
</div>
               
                <a href="#" id="write-comment"
                  ><span class="ms-2"><i class="far fa-comment-dots"></i></span>
                  Read reviews <span>(1)</span></a
                >
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"
                  ><span class="edite"><i class="far fa-edit"></i></span> Write a
                  review</a
                >
              </div>
            </div>
            <div class="product-body mb-40">
              <div class="d-flex align-items-center mb-30">
                <span class="product-price me-2"
                  ><del class="del">₹{{$pro->price * 2}}</del>
                  <span class="onsale">₹{{$pro->price}}</span></span
                >
                <span class="badge position-static bg-dark rounded-0"
                  >SAVE {{$pro->dis}}</span
                >
              </div>
              <p>
                {{$pro->desc}}
              </p>
              {{-- <ul>
                <li>Part of the Kaval Collection.</li>
                <li>
                  Regular fit is eased, but not sloppy, and perfect for any
                  activity.
                </li> --}}
                <li>
                  <b>Shade:</b> {{$pro->shade}}
                </li>
                
            
            </div>
            <div class="product-footer">
              <div
                class="product-count style d-flex flex-column flex-sm-row mt-30 mb-30"
              >
                {{-- <div class="count d-flex">
                  <input type="number" min="1" max="10" step="1" value="1" />
                  <div class="button-group">
                    <button class="count-btn increment">
                      <i class="fas fa-chevron-up"></i>
                    </button>
                    <button class="count-btn decrement">
                      <i class="fas fa-chevron-down"></i>
                    </button>
                  </div> --}}
                </div>
                <div>
                  <a href="/addtocart/{{$pro->id}}" class="btn btn-dark btn--xl mt-5 mt-sm-0">
                    <span class="me-2"><i class="ion-android-add"></i></span>
                    Add to cart
                  </a>
                          </div>
              </div>
              <div class="addto-whish-list">
                
                
                <a class="action" href="/add/wishlist/{{$pro->id}}"><i class="icon-heart"></i> Add to wishlist</a>
                
                
              </div>
              {{-- <div class="pro-social-links mt-10">
                <ul class="d-flex align-items-center">
                  <li class="share">Share</li>
                  <li>
                    <a href="#"><i class="ion-social-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="ion-social-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="ion-social-google"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="ion-social-pinterest"></i></a>
                  </li>
                </ul>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<div class="product-tab theme1 bg-white pt-60 pb-80">
    <div class="container">
      <div class="product-tab-nav">
        <div class="row align-items-center">
          <div class="col-12">
            <nav class="product-tab-menu single-product">
              <ul
                class="nav nav-pills justify-content-center"
                id="pills-tab"
                role="tablist"
              >
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    id="pills-home-tab"
                    data-bs-toggle="pill"
                    href="#pills-home"
                    role="tab"
                    aria-controls="pills-home"
                    aria-selected="true"
                    >Description</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link "
                    id="pills-profile-tab"
                    data-bs-toggle="pill"
                    href="#pills-profile"
                    role="tab"
                    aria-controls="pills-profile"
                    aria-selected="false"
                    >Product Details</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link "
                    id="pills-contact-tab"
                    data-bs-toggle="pill"
                    href="#pills-contact"
                    role="tab"
                    aria-controls="pills-contact"
                    aria-selected="false"
                    >Reviews</a
                  >
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!-- product-tab-nav end -->
      <div class="row">
        <div class="col-12">
          <div class="tab-content" id="pills-tabContent">
            <!-- first tab-pane -->
            <div
              class="tab-pane fade"
              id="pills-home"
              role="tabpanel"
              aria-labelledby="pills-home-tab"
            >
              <div class="single-product-desc">
                <p>
                  {{$pro->desc}}
                </p>
              </div>
            </div>
            <!-- second tab-pane -->
            <div
              class="tab-pane fade"
              id="pills-profile"
              role="tabpanel"
              aria-labelledby="pills-profile-tab"
            >
              <div class="single-product-desc">
                <div class="product-anotherinfo-wrapper">
                  <ul>
                    <li><span>Expiry Date</span>{{$pro->exdate}}</li>
                    <li><span>Menufacturing Date</span>{{$pro->menufac}}</li>
                    {{-- <li><</li>
                    <li>
                      <span>Other Info</span> American heirloom jean shorts pug
                      seitan letterpress
                    </li> --}}
                  </ul>
                </div>
              </div>
            </div>
            <!-- third tab-pane -->
            <div
              class="tab-pane fade show active"
              id="pills-contact"
              role="tabpanel"
              aria-labelledby="pills-contact-tab"
            >
              <div class="single-product-desc">
                <div class="row">
                  <div class="col-lg-7">
                    <div class="review-wrapper">
                     
                      @foreach ($reviews as $item)
                          
                      <div class="single-review child-review">
                        <div class="review-img">
                          <img src="assets/img/testimonial-image/2.png" alt="" />
                        </div>
                        <div class="review-content">
                          <div class="review-top-wrap">
                            <div class="review-left">
                              <div class="review-name">
                                <h4>{{$item->name}}</h4>
                                <h6>{{$item->email}}</h6>

                              </div>
                              <div class="rating-product">
                                @for ($i = 0; $i < $item->rating; $i++)
                                <i class="ion-android-star"></i>
                                    
                                @endfor
                              </div>
                            </div>
                           
                          </div>
                          <div class="review-bottom">
                            <p>
                              {{$item->message}}

                            </p>
                          </div>
                        </div>
                      </div>
                      @endforeach

                    </div>
                    {{$reviews->links()}}
                  </div>
                  <div class="col-lg-5">
                    <div class="ratting-form-wrapper">
                      <h3>Add a Review</h3>
                      <div class="ratting-form">
                        <form action="/add/review" method="POST">
                          @csrf
                          <div class="star-box">
                            <span>Your Rating:</span>
                            <div class="rating">
                              <input type="radio" id="star5" name="rating" value="5" />
                              <label class="star" for="star5" title="Awesome" aria-hidden="true"></label>
                              <input type="radio" id="star4" name="rating" value="4" />
                              <label class="star" for="star4" title="Great" aria-hidden="true"></label>
                              <input type="radio" id="star3" name="rating" value="3" />
                              <label class="star" for="star3" title="Very good" aria-hidden="true"></label>
                              <input type="radio" id="star2" name="rating" value="2" />
                              <label class="star" for="star2" title="Good" aria-hidden="true"></label>
                              <input type="radio" id="star1" name="rating" value="1" />
                              <label class="star" for="star1" title="Bad" aria-hidden="true"></label>
                            </div>
                      </div>
                    </div>
                         <div class="row">
                            <div class="col-md-6">
                              <div class="rating-form-style mb-10">
                                <input placeholder="Name" name="name" type="text" />
                              </div>
                            </div>
                            <input type="hidden" name="pid" value="{{$pro->id}}"/>
                            <div class="col-md-6">
                              <div class="rating-form-style mb-10">
                                <input placeholder="Email" name="email" type="email" />
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="rating-form-style form-submit">
                                <textarea
                                  name="message"
                                  placeholder="Message"
                                ></textarea>
                                <input type="submit" value="Submit" />
                              </div>
                              
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- <section class="theme1 bg-white pb-80">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h2 class="title pb-3 mb-3">You might also like</h2>
            <p class="text mt-10">Add Related products to weekly line up</p>
          </div>
        </div>
        <div class="col-12">
          <div class="product-slider-init theme1 slick-nav">
            <div class="slider-item">
              <div class="card product-card">
                <div class="card-body p-0">
                  <div class="media flex-column">
                    <div class="product-thumbnail position-relative">
                      <span class="badge badge-danger top-right">New</span>
                      <a href="single-product.html">
                        <img
                          class="first-img"
                          src="assets/img/product/1.png"
                          alt="thumbnail"
                        />
                      </a>
                      <!-- product links -->
                      <ul class="actions d-flex justify-content-center">
                        <li>
                          <a class="action" href="wishlist.html">
                            <span
                              data-bs-toggle="tooltip"
                              data-placement="bottom"
                              title="add to wishlist"
                              class="icon-heart"
                            >
                            </span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="action"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#compare"
                          >
                            <span
                              data-bs-toggle="tooltip"
                              data-placement="bottom"
                              title="Add to compare"
                              class="icon-shuffle"
                            ></span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="action"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#quick-view"
                          >
                            <span
                              data-bs-toggle="tooltip"
                              data-placement="bottom"
                              title="Quick view"
                              class="icon-magnifier"
                            ></span>
                          </a>
                        </li>
                      </ul>
                      <!-- product links end-->
                    </div>
                    <div class="media-body">
                      <div class="product-desc">
                        <h3 class="title">
                          <a href="shop-grid-4-column.html"
                            >All Natural Makeup Beauty Cosmetics</a
                          >
                        </h3>
                        <div class="star-rating">
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star de-selected"></span>
                        </div>
                        <div
                          class="d-flex align-items-center justify-content-between"
                        >
                          <span class="product-price">$11.90</span>
                          <button
                            class="pro-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#add-to-cart"
                          >
                            <i class="icon-basket"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- slider-item end -->
            <div class="slider-item">
              <div class="card product-card">
                <div class="card-body p-0">
                  <div class="media flex-column">
                    <div class="product-thumbnail position-relative">
                      <span class="badge badge-danger top-right">New</span>
                      <a href="single-product.html">
                        <img
                          class="first-img"
                          src="assets/img/product/2.png"
                          alt="thumbnail"
                        />
                      </a>
                      <!-- product links -->
                      <ul class="actions d-flex justify-content-center">
                        <li>
                          <a class="action" href="wishlist.html">
                            <span
                              data-bs-toggle="tooltip"
                              data-placement="bottom"
                              title="add to wishlist"
                              class="icon-heart"
                            >
                            </span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="action"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#compare"
                          >
                            <span
                              data-bs-toggle="tooltip"
                              data-placement="bottom"
                              title="Add to compare"
                              class="icon-shuffle"
                            ></span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="action"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#quick-view"
                          >
                            <span
                              data-bs-toggle="tooltip"
                              data-placement="bottom"
                              title="Quick view"
                              class="icon-magnifier"
                            ></span>
                          </a>
                        </li>
                      </ul>
                      <!-- product links end-->
                    </div>
                    <div class="media-body">
                      <div class="product-desc">
                        <h3 class="title">
                          <a href="shop-grid-4-column.html"
                            >On Trend Makeup and Beauty Cosmetics</a
                          >
                        </h3>
                        <div class="star-rating">
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star de-selected"></span>
                        </div>
                        <div
                          class="d-flex align-items-center justify-content-between"
                        >
                          <span class="product-price">$11.90</span>
                          <button
                            class="pro-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#add-to-cart"
                          >
                            <i class="icon-basket"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- slider-item end -->
            <div class="slider-item">
              <div class="card product-card">
                <div class="card-body p-0">
                  <div class="media flex-column">
                    <div class="product-thumbnail position-relative">
                      <span class="badge badge-danger top-right">New</span>
                      <a href="single-product.html">
                        <img
                          class="first-img"
                          src="assets/img/product/3.png"
                          alt="thumbnail"
                        />
                      </a>
                      <!-- product links -->
                      <ul class="actions d-flex justify-content-center">
                        <li>
                          <a class="action" href="wishlist.html">
                            <span
                              data-bs-toggle="tooltip"
                              data-placement="bottom"
                              title="add to wishlist"
                              class="icon-heart"
                            >
                            </span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="action"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#compare"
                          >
                            <span
                              data-bs-toggle="tooltip"
                              data-placement="bottom"
                              title="Add to compare"
                              class="icon-shuffle"
                            ></span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="action"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#quick-view"
                          >
                            <span
                              data-bs-toggle="tooltip"
                              data-placement="bottom"
                              title="Quick view"
                              class="icon-magnifier"
                            ></span>
                          </a>
                        </li>
                      </ul>
                      <!-- product links end-->
                    </div>
                    <div class="media-body">
                      <div class="product-desc">
                        <h3 class="title">
                          <a href="shop-grid-4-column.html"
                            >The Cosmetics and Beauty brand Shoppe</a
                          >
                        </h3>
                        <div class="star-rating">
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star de-selected"></span>
                        </div>
                        <div
                          class="d-flex align-items-center justify-content-between"
                        >
                          <span class="product-price">$21.51</span>
                          <button
                            class="pro-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#add-to-cart"
                          >
                            <i class="icon-basket"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- slider-item end -->
            <div class="slider-item">
              <div class="card product-card">
                <div class="card-body p-0">
                  <div class="media flex-column">
                    <div class="product-thumbnail position-relative">
                      <span class="badge badge-danger top-right">New</span>
                      <a href="single-product.html">
                        <img
                          class="first-img"
                          src="assets/img/product/4.png"
                          alt="thumbnail"
                        />
                      </a>
                      <!-- product links -->
                      <ul class="actions d-flex justify-content-center">
                        <li>
                          <a class="action" href="wishlist.html">
                            <span
                              data-bs-toggle="tooltip"
                              data-placement="bottom"
                              title="add to wishlist"
                              class="icon-heart"
                            >
                            </span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="action"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#compare"
                          >
                            <span
                              data-bs-toggle="tooltip"
                              data-placement="bottom"
                              title="Add to compare"
                              class="icon-shuffle"
                            ></span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="action"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#quick-view"
                          >
                            <span
                              data-bs-toggle="tooltip"
                              data-placement="bottom"
                              title="Quick view"
                              class="icon-magnifier"
                            ></span>
                          </a>
                        </li>
                      </ul>
                      <!-- product links end-->
                    </div>
                    <div class="media-body">
                      <div class="product-desc">
                        <h3 class="title">
                          <a href="shop-grid-4-column.html"
                            >orginal Age Defying Cosmetics Makeup</a
                          >
                        </h3>
                        <div class="star-rating">
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star de-selected"></span>
                        </div>
                        <div
                          class="d-flex align-items-center justify-content-between"
                        >
                          <span class="product-price">$11.90</span>
                          <button
                            class="pro-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#add-to-cart"
                          >
                            <i class="icon-basket"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- slider-item end -->
            <div class="slider-item">
              <div class="card product-card">
                <div class="card-body p-0">
                  <div class="media flex-column">
                    <div class="product-thumbnail position-relative">
                      <span class="badge badge-danger top-right">New</span>
                      <a href="single-product.html">
                        <img
                          class="first-img"
                          src="assets/img/product/5.png"
                          alt="thumbnail"
                        />
                        <img
                          class="second-img"
                          src="assets/img/product/6.png"
                          alt="thumbnail"
                        />
                      </a>
                      <!-- product links -->
                      <ul class="actions d-flex justify-content-center">
                        <li>
                          <a class="action" href="wishlist.html">
                            <span
                              data-bs-toggle="tooltip"
                              data-placement="bottom"
                              title="add to wishlist"
                              class="icon-heart"
                            >
                            </span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="action"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#compare"
                          >
                            <span
                              data-bs-toggle="tooltip"
                              data-placement="bottom"
                              title="Add to compare"
                              class="icon-shuffle"
                            ></span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="action"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#quick-view"
                          >
                            <span
                              data-bs-toggle="tooltip"
                              data-placement="bottom"
                              title="Quick view"
                              class="icon-magnifier"
                            ></span>
                          </a>
                        </li>
                      </ul>
                      <!-- product links end-->
                    </div>
                    <div class="media-body">
                      <div class="product-desc">
                        <h3 class="title">
                          <a href="shop-grid-4-column.html"
                            >orginal Clear Water Cosmetics On Trend</a
                          >
                        </h3>
                        <div class="star-rating">
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star de-selected"></span>
                        </div>
                        <div
                          class="d-flex align-items-center justify-content-between"
                        >
                          <span class="product-price">$11.90</span>
                          <button
                            class="pro-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#add-to-cart"
                          >
                            <i class="icon-basket"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- slider-item end -->
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  
  @include('userside.footer')