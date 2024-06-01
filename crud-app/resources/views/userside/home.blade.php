@include('userside.header')

<!-- main slider start -->
<section class="bg-light">
    <div class="main-slider dots-style theme1">
      <div class="slider-item bg-img ">
        <div class="container">
          <div class="row align-items-center slider-height">
            <div class="col-12">
              <div class="slider-content">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                 <div class="carousel-inner">
               

                    @foreach ($banner as $item)
                    <div class="carousel-item active">
                      <img src="{{asset('banner')}}/{{$item->banner_pic}}" class="d-block w-100" alt="...">
                    </div>
                    @endforeach
                   </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- staic media start -->
<section class="static-media-section theme-bg py-45">
    <div class="container">
      <div class="static-media-wrap p-0">
        <div class="row">
          <div class="col-lg-3 col-sm-6 py-3">
            <div class="d-flex static-media2 flex-column flex-sm-row">
              <img
                class="align-self-center mb-2 mb-sm-0 me-auto me-sm-3"
                src="{{asset('userside')}}/assets/img/icon/2.png"
                alt="icon"
              />
              <div class="media-body">
                <h4 class="title text-capitalize text-white">Free Shipping</h4>
                <p class="text text-white">On all orders over $75.00</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 py-3">
            <div class="d-flex static-media2 flex-column flex-sm-row">
              <img
                class="align-self-center mb-2 mb-sm-0 me-auto me-sm-3"
                src="{{asset('userside')}}/assets/img/icon/3.png"
                alt="icon"
              />
              <div class="media-body">
                <h4 class="title text-capitalize text-white">Free Returns</h4>
                <p class="text text-white">Returns are free within 9 days</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 py-3">
            <div class="d-flex static-media2 flex-column flex-sm-row">
              <img
                class="align-self-center mb-2 mb-sm-0 me-auto me-sm-3"
                src="{{asset('userside')}}/assets/img/icon/5.png"
                alt="icon"
              />
              <div class="media-body">
                <h4 class="title text-capitalize text-white">Support 24/7</h4>
                <p class="text text-white">Contact us 24 hours a day</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 py-3">
            <div class="d-flex static-media2 flex-column flex-sm-row">
              <img
                class="align-self-center mb-2 mb-sm-0 me-auto me-sm-3"
                src="{{asset('userside')}}/assets/img/icon/4.png"
                alt="icon"
              />
              <div class="media-body">
                <h4 class="title text-capitalize text-white">
                  100% Payment Secure
                </h4>
                <p class="text text-white">Your payment are safe with us.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- staic media end -->

  <section class="static-media-section theme-bg py-45">
    <div class="container">
      <div class="static-media-wrap p-0">
        <div class="row">
          <div class="col-lg-3 col-sm-6 py-3">
            <div class="d-flex static-media2 flex-column flex-sm-row">
              <img
                class="align-self-center mb-2 mb-sm-0 me-auto me-sm-3"
                src="{{asset('userside')}}/assets/img/icon/2.png"
                alt="icon"
              />
              <div class="media-body">
                <h4 class="title text-capitalize text-white">Free Shipping</h4>
                <p class="text text-white">On all orders over ₹75.00</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 py-3">
            <div class="d-flex static-media2 flex-column flex-sm-row">
              <img
                class="align-self-center mb-2 mb-sm-0 me-auto me-sm-3"
                src="{{asset('userside')}}/assets/img/icon/3.png"
                alt="icon"
              />
              <div class="media-body">
                <h4 class="title text-capitalize text-white">Free Returns</h4>
                <p class="text text-white">Returns are free within 9 days</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 py-3">
            <div class="d-flex static-media2 flex-column flex-sm-row">
              <img
                class="align-self-center mb-2 mb-sm-0 me-auto me-sm-3"
                src="{{asset('userside')}}/assets/img/icon/5.png"
                alt="icon"
              />
              <div class="media-body">
                <h4 class="title text-capitalize text-white">Support 24/7</h4>
                <p class="text text-white">Contact us 24 hours a day</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 py-3">
            <div class="d-flex static-media2 flex-column flex-sm-row">
              <img
                class="align-self-center mb-2 mb-sm-0 me-auto me-sm-3"
                src="{{asset('userside')}}/assets/img/icon/4.png"
                alt="icon"
              />
              <div class="media-body">
                <h4 class="title text-capitalize text-white">
                  100% Payment Secure
                </h4>
                <p class="text text-white">Your payment are safe with us.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- staic media end -->
  
  <!-- common banner  start -->
  <div class="common-banner bg-white pb-50 pt-80">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-30">
          <div class="banner-thumb">
            <a
              class="zoom-in d-block overflow-hidden position-relative"
              href="shop-grid-4-column.html"
              ><img src="{{asset('userside')}}/assets/img/banner/" alt="banner-thumb-naile"
            /></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-30">
          <div class="banner-thumb">
            <a
              class="zoom-in d-block overflow-hidden position-relative"
              href="shop-grid-4-column.html"
            >
              <img src="{{asset('userside')}}/assets/img/banner/" alt="banner-thumb-naile"
            /></a>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 mb-30">
          <div class="banner-thumb">
            <a
              class="zoom-in d-block overflow-hidden position-relative"
              href="shop-grid-4-column.html"
            >
              <img src="{{asset('userside')}}/assets/img/banner/" alt="banner-thumb-naile"
            /></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- popular-section  start -->
<div class="popular-section popular-bg1 theme1 bg-white px-md-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h2 class="title pb-3 mb-3">Categories</h2>
            <p class="text">
              Explore Our Categoriers To Find Best Product
            </p>
          </div>
        </div>
        <div class="col-12">
          <div class="popular-slider-init dots-style">
            @foreach ($cat as $item)
                
            <div class="slider-item">
              <div class="card popular-card zoom-in d-block overflow-hidden">
                <div class="card-body">
                  <a href="/subcat/{{$item->id}}" class="thumb-naile">
                    <img
                      class="d-block mx-auto"
                      src="{{asset('category')}}/{{$item->cpic}}"
                      alt="img"
                  /></a>
                  <h3 class="popular-title">
                    <a href="/subcat/{{$item->id}}"> {{$item->ctitle}} </a>
                  </h3>
                </div>
              </div>
            </div>
            @endforeach

            
            <!-- slider-item end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- popular-section  end -->
  
  <section class="product-tab bg-white pt-80 pb-80">
    <div class="container">
      <div class="product-tab-nav mb-50">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="section-title text-center">
              <h2 class="title pb-3 mb-3">Latest Products</h2>
              <p class="text">
                See Our Awesome Product
              </p>
            </div>
          </div>
          <div class="col-12">
            <nav class="product-tab-menu theme1">
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
                    >new products</a
                  >
                </li>
                {{-- <li class="nav-item">
                  <a
                    class="nav-link"
                    id="pills-profile-tab"
                    data-bs-toggle="pill"
                    href="#pills-profile"
                    role="tab"
                    aria-controls="pills-profile"
                    aria-selected="false"
                    >onsale</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    id="pills-contact-tab"
                    data-bs-toggle="pill"
                    href="#pills-contact"
                    role="tab"
                    aria-controls="pills-contact"
                    aria-selected="false"
                    >upcoming products</a
                  >
                </li> --}}
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
              class="tab-pane fade show active"
              id="pills-home"
              role="tabpanel"
              aria-labelledby="pills-home-tab"
            >
              <div class="product-slider-init theme1 slick-nav">
                @foreach ($pro as $item)
                    
                <div class="slider-item">
                  <div class="card product-card">
                    <div class="card-body p-0">
                      <div class="media flex-column">
                        <div class="product-thumbnail position-relative">
                          <span class="badge badge-danger top-right">New</span>
                          <a href="/product/details/{{$item->id}}">
                            <img
                              class="first-img"
                              src="{{asset('product')}}/{{$item->pic1}}"
                              alt="thumbnail"
                              height="300px"
                              width="250px"
                            />
                          </a>
  
                          <!-- product links -->
                          <ul class="actions d-flex justify-content-center">
                            <li>
                              <a class="action" href="/add/wishlist/{{$item->id}}">
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
                              {{-- <a
                                class="action"
                                href="#"
                                data-bs-toggle="modal"
                                data-bs-target="#compare"
                              > --}}
                                {{-- <span
                                  data-bs-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Add to compare"
                                  class="icon-shuffle"
                                ></span> --}}
                              {{-- </a> --}}
                            </li>
                            <li>
                              {{-- <a
                                class="action"
                                href="#"
                                data-bs-toggle="modal"
                                data-bs-target="#quick-view"
                              > --}}
                                {{-- <span
                                  data-bs-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Quick view"
                                  class="icon-magnifier"
                                ></span> --}}
                             {{--  </a> ` --}}
                            </li>
                          </ul>
                          <!-- product links end-->
                        </div>
                        <div class="media-body">
                          <div class="product-desc">
                            <h3 class="title">
                              <a href="shop-grid-4-column.html"   
                                >{{$item->name}}</a
                              >
                            </h3>
                            <div class="star-rating">
                              @php
                              $randomNumber = rand(1, 5);
                  
                          @endphp
                          @for ($i = 0; $i < $randomNumber; $i++)
                          <span class="ion-ios-star"></span>
                          @endfor            
                            
                            </div>
                            <div
                              class="d-flex align-items-center justify-content-between"
                            >
                              <span class="product-price">₹{{$item->price}}</span>
                              {{-- 
                                 --}}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach

                <!-- slider-item end -->
                
                <!-- slider-item end -->
              </div>
            </div>
            <!-- second tab-pane -->
            <div
              class="tab-pane fade"
              id="pills-profile"
              role="tabpanel"
              aria-labelledby="pills-profile-tab"
            >
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
            <!-- third tab-pane -->
            <div
              class="tab-pane fade"
              id="pills-contact"
              role="tabpanel"
              aria-labelledby="pills-contact-tab"
            >
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
      </div>
    </div>
  </section>
@include('userside.footer')
