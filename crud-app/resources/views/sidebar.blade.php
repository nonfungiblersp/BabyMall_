<!-- 
 =========================================================
 Light Bootstrap Dashboard PRO - v2.0.1
 =========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard-pro
 Copyright 2019 Creative Tim (https://www.creative-tim.com)

 Coded by Creative Tim

 =========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Dec 2023 15:18:40 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets')}}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{asset('assets')}}/img/favicon.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>BabyMall</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
        name="viewport" />

    <link rel="canonical" href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro" />

    <meta name="keywords"
        content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, light bootstrap 4 dashboard, frontend, responsive bootstrap dashboard">
    <meta name="description"
        content="Forget about boring dashboards, get a bootstrap 4 admin template designed to be simple and beautiful.">

    <meta itemprop="name" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta itemprop="description"
        content="Forget about boring dashboards, get a bootstrap 4 admin template designed to be simple and beautiful.">
    <meta itemprop="image"
        content="../../../s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg">

    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta name="twitter:description"
        content="Forget about boring dashboards, get a bootstrap 4 admin template designed to be simple and beautiful.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image"
        content="../../../s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg">
    <meta name="twitter:data1" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta name="twitter:label1" content="Product Type">
    <meta name="twitter:data2" content="$39">
    <meta name="twitter:label2" content="Price">

    <meta property="og:title" content="Light Bootstrap Dashboard PRO by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="dashboard.html" />
    <meta property="og:image"
        content="../../../s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg" />
    <meta property="og:description"
        content="Forget about boring dashboards, get a bootstrap 4 admin template designed to be simple and beautiful." />
    <meta property="og:site_name" content="Creative Tim" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/light-bootstrap-dashboard790f.css?v=2.0.1" rel="stylesheet" />

    <link href="{{asset('assets')}}/css/demo.css" rel="stylesheet" />

    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');</script>

</head>

<body>

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="{{asset('assets')}}/img/sidebar-5.jpg">

            <div class="sidebar-wrapper">
                {{-- <div class="logo">
                    <a href="https://www.creative-tim.com/" class="simple-text logo-mini">
                        Ct
                    </a>
                    <a href="https://www.creative-tim.com/" class="simple-text logo-normal">
                        Creative Tim
                    </a>
                </div> --}}
                <div class="user">
                    <div class="photo">
                        <img src="{{asset('assets')}}/img/download.jpeg" />
                    </div>
                    <div class="info ">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>BabyMall
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a class="profile-dropdown" href="#pablo">
                                        <span class="sidebar-mini">MP</span>
                                        <span class="sidebar-normal">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="profile-dropdown" href="#pablo">
                                        <span class="sidebar-mini">EP</span>
                                        <span class="sidebar-normal">Edit Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="profile-dropdown" href="#pablo">
                                        <span class="sidebar-mini">S</span>
                                        <span class="sidebar-normal">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="/adminhome">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="/banners">
                                <i class="nc-icon nc-chart-pie-35"></i>
                                <p>Banners</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="/categories">
                                <i class="nc-icon nc-chart-pie-35"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="/subcategories">
                                <i class="nc-icon nc-chart-pie-35"></i>
                                <p>Subcategories</p>
                            </a>
                        </li>
                    </ul>


                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="/product1">
                                <i class="nc-icon nc-chart-pie-35"></i>
                                <p>Product</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="/contact1">
                                <i class="nc-icon nc-chart-pie-35"></i>
                                <p>Contact Us</p>
                            </a>
                        </li>
                    </ul>

                    {{-- <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="/review">
                                <i class="nc-icon nc-chart-pie-35"></i>
                                <p>Review</p>
                            </a>
                        </li> --}}
                    </ul>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                            {{-- <i class="nc-icon nc-puzzle-10"></i> --}}
                            {{-- <p>
                                Pages
                                <b class="caret"></b>
                            </p> --}}
                        </a>
                        <div class="collapse " id="pagesExamples">
                            <ul class="nav">
                                <li class="nav-item ">
                                    {{-- <a class="nav-link" href="pages/login.html">
                                        <span class="sidebar-mini">LP</span>
                                        <span class="sidebar-normal">Login Page</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="pages/register.html">
                                        <span class="sidebar-mini">RP</span>
                                        <span class="sidebar-normal">Register Page</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="pages/lock.html">
                                        <span class="sidebar-mini">LSP</span>
                                        <span class="sidebar-normal">Lock Screen Page</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a class="nav-link" href="pages/user.html">
                                        <span class="sidebar-mini">UP</span>
                                        <span class="sidebar-normal">User Page</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a class="nav-link" href="#lbd">
                                        <span class="sidebar-mini">MCS</span>
                                        <span class="sidebar-normal">More coming soon...</span>
                                    </a> --}}
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">

            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar"
                                class="btn btn-primary btn-fill btn-round btn-icon d-none d-lg-block">
                                <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                                <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo"> Admin Panel </a>
                    </div>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="nav navbar-nav mr-auto">
                            <form class="navbar-form navbar-left navbar-search-form" role="search">
                                <div class="input-group">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <input type="text" value class="form-control" placeholder="Search...">
                                </div>
                            </form>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Create New Post</a>
                                    <a class="dropdown-item" href="#">Manage Something</a>
                                    <a class="dropdown-item" href="#">Do Nothing</a>
                                    <a class="dropdown-item" href="#">Submit to live</a>
                                    <li class="divider"></li>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </ul>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-bell-55"></i>
                                    <span class="notification">9</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Notification 5</a>
                                    <a class="dropdown-item" href="#">Notification 6</a>
                                    <a class="dropdown-item" href="#">Notification 7</a>
                                    <a class="dropdown-item" href="#">Notification 8</a>
                                    <a class="dropdown-item" href="#">Notification 9</a>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="https://example.com/"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="nc-icon nc-bullet-list-67"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">
                                        <i class="nc-icon nc-email-85"></i> Messages
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="nc-icon nc-umbrella-13"></i> Help Center
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="nc-icon nc-settings-90"></i> Settings
                                    </a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="nc-icon nc-lock-circle-open"></i> Lock Screen
                                    </a>
                                    <a href="/logout" class="dropdown-item text-danger">
                                        <i class="nc-icon nc-button-power"></i> Log out
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>