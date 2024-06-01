@include('userside.header')
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-4 text-dark text-capitalize">About Us</h2>
        </div>
      </div>
      <div class="col-12">
        <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
      </div>
    </div>
  </div>
</nav>
<section class="about-section pt-80 pb-50">
  <div class="container">
    <div class="row">
      <div class="col-12 col-xl-11 mx-auto mb-30">
        <div class="about-content text-center">
          <div class="about-left-image mb-30">
            <img src="{{asset('userside')}}/assets/img/blog-post/images_scrolling_1.jpg" alt="img"
              class="img-responsive" />
          </div>
          <div>
            <h2 class="title mb-30">
              The Babymall Story
            </h2>
            <p class="mb-30">
              Revolutionize your shopping experience with the Babymall shopping cart.
              Not just a cart, it's a comfortable haven for your child and a stress-free zone for you.
              Packed with innovative features like best website for the baby items ,
              Babymall empowers smooth sailing through the aisles,
              transforming grocery runs into quality time with your little one.
            </p>
            <img src="assets/img/blog-post/signature.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="static-media-section theme-bg py-45">
  <div class="container">
    <div class="static-media-wrap p-0">
      <div class="row">
        <div class="col-lg-3 col-sm-6 py-3">
          <div class="d-flex static-media2 flex-column flex-sm-row">
            <img class="align-self-center mb-2 mb-sm-0 me-auto me-sm-3" src="assets/img/icon/2.png" alt="icon" />
            <div class="media-body">
              <h4 class="title text-capitalize text-white">Free Shipping</h4>
              <p class="text text-white">On all orders over ₹75.00</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 py-3">
          <div class="d-flex static-media2 flex-column flex-sm-row">
            <img class="align-self-center mb-2 mb-sm-0 me-auto me-sm-3" src="assets/img/icon/3.png" alt="icon" />
            <div class="media-body">
              <h4 class="title text-capitalize text-white">Free Returns</h4>
              <p class="text text-white">Returns are free within 9 days</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 py-3">
          <div class="d-flex static-media2 flex-column flex-sm-row">
            <img class="align-self-center mb-2 mb-sm-0 me-auto me-sm-3" src="assets/img/icon/5.png" alt="icon" />
            <div class="media-body">
              <h4 class="title text-capitalize text-white">Support 24/7</h4>
              <p class="text text-white">Contact us 24 hours a day</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 py-3">
          <div class="d-flex static-media2 flex-column flex-sm-row">
            <img class="align-self-center mb-2 mb-sm-0 me-auto me-sm-3" src="assets/img/icon/4.png" alt="icon" />
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
<section class="service-section pt-80 pb-50">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-lg-4 mb-4">
        <div class="single-blog">
          <div class="single-thumb mb-25 zoom-in d-block overflow-hidden">
            <img src="{{asset('userside')}}/assets/img/service/product_1.jpeg.JPG" alt="single-thumb-naile" />
          </div>
          <div class="single-service">
            <h3 class="title text-capitalize mb-20">What do we do?</h3>
            <p>
              Babymall is your one-stop shop for all things baby!
              We offer a wide selection of high-quality products
              to meet all your child's needs, from feeding and
              diapering to playtime and travel.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 mb-4">
        <div class="single-blog">
          <div class="single-thumb mb-20 zoom-in d-block overflow-hidden">
            <img src="{{asset('userside')}}/assets/img/service/product_2.jpeg.JPG" alt="single-thumb-naile" />
          </div>
          <div class="single-service">
            <h3 class="title text-capitalize mb-20">Our Vision</h3>
            <p>
              Every little moment, a world of joy.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 mb-4">
        <div class="single-blog">
          <div class="single-thumb mb-20 zoom-in d-block overflow-hidden">
            <img src="{{asset('userside')}}/assets/img/service/product_3.jpeg.JPG" alt="single-thumb-naile" />
          </div>
          <div class="single-service">
            <h3 class="title text-capitalize mb-20">Mission</h3>
            <p>
            At Babymall, we curate a world of wonder for parents and little ones.
            Through a collection of delightful and genuine products, 
            we aim to elevate the joys of parenthood and 
            nurture the magic of childhood.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('userside.footer')