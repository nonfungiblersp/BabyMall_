     <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="" />
    <title>BabyMall</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('userside')}}/assets/img/favicon.ico" />

    <!--********************************** 
        all css files 
    *************************************-->

    <!--*************************************************** 
       fontawesome,bootstrap,plugins and main style css
     ***************************************************-->
    <!-- cdn links -->

    <link rel="stylesheet" href="{{asset('userside')}}/assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="{{asset('userside')}}/assets/css/ionicons.min.css" />
    <link rel="stylesheet" href="{{asset('userside')}}/assets/css/simple-line-icons.css" />
    <link rel="stylesheet" href="{{asset('userside')}}/assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="{{asset('userside')}}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('userside')}}/assets/css/plugins/plugins.css" />
    <link rel="stylesheet" href="{{asset('userside')}}/assets/css/style.min.css" />
<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
  <div class="container">
    {{-- <form action="{{route('/userside.login_register')}}" method="post" enctype="multipart/form-data">
      @csrf --}}

    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-4 text-dark text-capitalize">login & register</h2>
        </div>
      </div>
      <div class="col-12">
        <ol
          class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            Log in to your account
          </li>
        </ol>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->

<!-- login area start -->
<div class="login-register-area pt-80 pb-80">
  <div class="container">
    @if ($msg=Session::get('success'))
        {{$msg}}
    @endif
    <div class="row">
      <div class="col-lg-7 col-md-12 ms-auto me-auto">
        <div class="login-register-wrapper">
          <div class="login-register-tab-list nav">
            <a class="active" data-bs-toggle="tab" href="#lg1">
              <h4>login</h4>
            </a>
            <a data-bs-toggle="tab" href="#lg2">
              <h4>register</h4>
            </a>
          </div>
          <div class="tab-content">
            <div id="lg1" class="tab-pane active">
              <div class="login-form-container">
                <div class="login-register-form">
                  <form action="/loggedin" method="POST" >
                    @csrf
                    <input
                      type="text"
                      name="uname"
                      placeholder="Username"
                    />
                    <input
                      type="password"
                      name="pass"
                      placeholder="Password"
                    />
                    <div class="button-box">
                      <div class="login-toggle-btn">
                        <input id="remember" type="checkbox" />
                        <label for="remember">Remember me</label>
                      </div>
                      <button type="submit" class="btn btn-dark btn--md">
                        <span>Login</span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div id="lg2" class="tab-pane">
              <div class="login-form-container">
                <div class="login-register-form">
                  <form action="/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input
                      type="text"
                      name="uname"
                      placeholder="Username"
                    />
                    <input
                      type="password"
                      name="pass"
                      placeholder="Password"
                    />
                    <input name="email" placeholder="Email" type="email" />
                    <div class="button-box">
                      <button type="submit" class="btn btn-dark btn--md">
                        <span>Register</span>
                      </button>
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
<!-- login area end -->
<!-- footer strat -->
<footer class="bg-light theme1 position-relative">
  <!-- footer bottom start -->
  <div class="footer-bottom pt-80 pb-30">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-4 mb-30">
          <div class="footer-widget mx-w-400">
            <div class="footer-logo mb-25">
              <a href="index.html">
                <img src="{{asset('userside')}}/assets/img/logo/logo.png" alt="footer logo" />
              </a>
            </div>
            <p class="text mb-30">
              We are a team of professional designers and developers that create
              high quality wordpress plugins, Html, React Template.
            </p>

            <div class="social-network">
              <ul class="d-flex">
                <li>
                  <a href="https://www.facebook.com/" target="_blank"
                    ><span class="icon-social-facebook"></span
                  ></a>
                </li>
                <li>
                  <a href="https://twitter.com/" target="_blank"
                    ><span class="icon-social-twitter"></span
                  ></a>
                </li>
                <li>
                  <a href="https://www.youtube.com/" target="_blank"
                    ><span class="icon-social-youtube"></span
                  ></a>
                </li>
                <li class="mr-0">
                  <a href="https://www.instagram.com/" target="_blank"
                    ><span class="icon-social-instagram"></span
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-2 mb-30">
          <div class="footer-widget">
            <div class="border-bottom cbb1 mb-25">
              <div class="section-title">
                <h2 class="title">Information</h2>
              </div>
            </div>
            <!-- footer-menu start -->
            <ul class="footer-menu">
              <li><a href="about-us.html">About us</a></li>
              <li><a href="#">payment</a></li>
              <li><a href="contact.html">Contact us</a></li>
              <li><a href="#">Stores</a></li>
            </ul>
            <!-- footer-menu end -->
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-2 mb-30">
          <div class="footer-widget">
            <div class="border-bottom cbb1 mb-25">
              <div class="section-title">
                <h2 class="title">social Links</h2>
              </div>
            </div>
            <!-- footer-menu start -->
            <ul class="footer-menu">
              <li><a href="#">New products</a></li>
              <li><a href="#">Best sales</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="myaccount.html">My account</a></li>
            </ul>
            <!-- footer-menu end -->
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4 mb-30">
          <div class="footer-widget">
            <div class="border-bottom cbb1 mb-25">
              <div class="section-title">
                <h2 class="title">Newsletter</h2>
              </div>
            </div>
            <p class="text mb-20">
              Subcribe to the TheFace mailing list to receive update on mnew
              arrivals, special offers and other discount information.
            </p>
            <div class="nletter-form mb-35">
              <form
                class="form-inline position-relative"
                action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                target="_blank"
                method="post"
              >
                <input
                  class="form-control"
                  type="text"
                  placeholder="Your email address"
                />
                <button
                  class="btn news-letter-btn text-capitalize"
                  type="submit"
                >
                  Sign up
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer bottom end -->
  <!-- coppy-right start -->
  <div class="coppy-right bg-dark py-15">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-xl-4 order-last order-md-first">
          <div class="text-md-start text-center mt-3 mt-md-0">
            <p>
              Copyright &copy; <a href="https://hasthemes.com/">HasThemes</a>.
              All Rights Reserved
            </p>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-8">
          <div class="text-md-end text-center">
            <img src="{{asset('userside')}}/assets/img/payment/1.png" alt="img" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- coppy-right end -->
</footer>
<!-- footer end -->
<!-- search-box and overlay start -->
<div class="overlay">
  <div class="scale"></div>
  <form class="search-box" action="#">
    <input type="text" name="search" placeholder="Search products..." />
    <button id="close" type="submit">
      <i class="ion-ios-search-strong"></i>
    </button>
  </form>
  <button class="close"><i class="ion-android-close"></i></button>
</div>
<!-- search-box and overlay end -->


    <!--*********************** 
        all js files
     ***********************-->

    <!--****************************************************** 
        jquery,modernizr ,poppe,bootstrap,plugins and main js
     ******************************************************-->

    <script src="{{asset('userside')}}/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{asset('userside')}}/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="{{asset('userside')}}/assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="{{asset('userside')}}/assets/js/plugins/jquery-ui.min.js"></script>
    <script src="{{asset('userside')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('userside')}}/assets/js/plugins/plugins.js"></script>
    <script src="{{asset('userside')}}/assets/js/plugins/ajax-contact.js"></script>
    <script src="{{asset('userside')}}/assets/js/main.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!--*************************** 
          Minified  js 
     ***************************-->

    <!--*********************************** 
         vendor,plugins and main js
      ***********************************-->

    <!-- <script src="{{asset('userside')}}/assets/js/vendor/vendor.min.js"></script>
    <script src="{{asset('userside')}}/assets/js/plugins/plugins.min.js"></script>
    <script src="{{asset('userside')}}/assets/js/main.js"></script> -->

  
</body>


<!-- Mirrored from htmldemo.net/looki/looki/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2024 07:12:03 GMT -->
</html>