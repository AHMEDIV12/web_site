<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tatee Theme Templates">
    <meta name="author" content="AuCreative">
    <meta name="keywords" content="Tatee Theme Templates">

    <!-- Title Page-->
    <title>About Us</title>
	<script src="https://unpkg.com/scrollreveal@4"></script>

    {{--  font awesome 4  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css" integrity="sha512-72McA95q/YhjwmWFMGe8RI3aZIMCTJWPBbV8iQY3jy1z9+bi6+jHnERuNrDPo/WGYEzzNs4WdHNyyEr/yXJ9pA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Icons font CSS-->
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/themify-font/themify-icons.css')}}" rel="stylesheet" media="all">
    <!-- Base fonts of theme-->
    <link href="{{asset('css/poppins-font.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->

    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/main.min.css')}}" rel="stylesheet" media="all">

    <style>
    
    .modal-style {
    background-color: rgb(215 215 215);
    border: 1px solid #eeeeee4a;
    padding: 22px;
    padding-bottom: 3px;
    }

    .btn-focus {
    position: relative;
    z-index: 100;
    top: 20vh;
    width: 30px;
    height: 30px;
    right: -4000%;
    border: 1px solid #ffffff;
    border-radius: 15%;
    margin: 0px;
    padding: 10px;
    color: rgb(235, 235, 235);
    background-color: #c5bda5;
    opacity: 1;
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform-origin: 50% 50% 0px;
    visibility: inherit;
    }

    .btn-focus:focus{
        outline: 0;
        box-shadow: 0 0 0 0.2rem #f9f19f40;
    }

    .modal-btn{
    color: #fff;
    background-color: #6c757d;
    border-color: #007bff00;
    }

    .modal-btn:hover{
    color: #fff;
    background-color: #444a4e;
    border-color: #6c757d;
    }

    .justify-between{
    display: flex;
    justify-content: space-between;
    align-items: center
    }

    </style>

    @stack("css")

    <!--Favicons-->
    <link rel="shortcut icon" href="images/icon/favicon.jpg">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
</head>

<body class="animsition js-preloader">
    <div class="page-wrapper">
        <!-- HEADER-->
        <header id="header">
            <div class="header header-1 d-none d-lg-block js-header-1">
                <div class="header__bar">
                    <div class="wrap wrap--w1790">
                        <div class="container-fluid">
                            <div class="header__content">
                                <div class="logo">
                                    <a href="#">
                                        <img src="{{asset('images/icon/logo-black.png')}}" alt="Tatee" />
                                    </a>
                                </div>
                                <div class="header__content-right">
                                    <nav class="header-nav-menu">
                                        <ul class="menu nav-menu">
                                            <li class="menu-item menu-item-has-children">
                                                <a href="{{route('main')}}">Home</a>
                                                {{-- <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="home-main.html">Main home</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-project-hover.html">Project Hover</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-vertical-slide.html">Vertical Slider</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-vertical-slide-video-background.html">Vertical Slider (Video Background)</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-onepage.html">Onepage</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-onepage-video-background.html">Onepage (Video Background)</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-revo-slide.html">Revolution Slider</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-revo-slide-video-background.html">Revolution Slider (Video Background)</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-project-showcase.html">Project Showcase</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-masonry-project.html">Masonry Project</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-creative-showcase.html">Creative Showcase</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="index.html">Landing</a>
                                                    </li>
                                                </ul> --}}
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('about.index')}}">about</a>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="{{route('all_projects.index')}}">Project</a>
                                                {{-- <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="project-grid-full.html">Project grid fullwidth</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="project-grid-stand.html">Project Grid Standard</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="project-masonry.html">Project masonry</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="project-carousel.html">Project carousel</a>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="project-detail-1.html">Project detail</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item">
                                                                <a href="project-detail-1.html">Project detail v1</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="project-detail-2.html">Project detail v2</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="project-detail-3.html">Project detail v3</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="project-detail-4.html">Project detail v4</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul> --}}
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="my-account.html">pages</a>
                                                {{-- <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="my-account.html">my account</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">shop</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="product-detail.html">product detail</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="cart.html">cart</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="checkout.html">checkout</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="coming-soon.html">coming soon</a>
                                                    </li>
                                                </ul> --}}
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="blog-grid.html">blog</a>
                                                {{-- <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="blog-grid.html">blog grid</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-sidebar.html">blog with sidebar</a>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="blog-detail-sidebar.html">blog detail with sidebar</a>
                                                        <ul class="sub-menu sub-menu--left">
                                                            <li class="menu-item">
                                                                <a href="blog-detail-sidebar.html">blog detail with sidebar</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-detail-img.html">blog detail image</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-detail-gallery.html">blog detail gallery</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-detail-video.html">blog detail video</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul> --}}
                                            </li>
                                            <li class="menu-item">
                                                <a href="contact.html">contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="header-social">
                                        <ul class="list-social">
                                            <li class="list-social__item">
                                                <a class="ic-fb" href="#">
                                                    <i class="zmdi zmdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-social__item">
                                                <a class="ic-insta" href="#">
                                                    <i class="zmdi zmdi-instagram"></i>
                                                </a>
                                            </li>
                                            <li class="list-social__item">
                                                <a class="ic-twi" href="#">
                                                    <i class="zmdi zmdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-social__item">
                                                <a class="ic-pinterest" href="#">
                                                    <i class="zmdi zmdi-pinterest"></i>
                                                </a>
                                            </li>
                                            <li class="list-social__item">
                                                <a class="ic-google" href="#">
                                                    <i class="zmdi zmdi-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile__bar-inner">
                            <a class="logo" href="index.html">
                                <img src="{{asset('images/icon/logo-black.png')}}" alt="Tatee" />
                            </a>
                            <button class="hamburger hamburger--slider float-right" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="header-nav-menu-mobile">
                    <div class="container-fluid">
                        <ul class="menu nav-menu menu-mobile">
                            <li class="menu-item menu-item-has-children">
                                <a href="home-main.html">Home</a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="home-main.html">Main home</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-project-hover.html">Project Hover</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-vertical-slide.html">Vertical Slider</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-vertical-slide-video-background.html">Vertical Slider (Video Background)</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-onepage.html">Onepage</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-onepage-video-background.html">Onepage (Video Background)</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-revo-slide.html">Revolution Slider</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-revo-slide-video-background.html">Revolution Slider (Video Background)</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-project-showcase.html">Project Showcase</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-masonry-project.html">Masonry Project</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-creative-showcase.html">Creative Showcase</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="index.html">Landing</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="about-us.html">about</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="project-grid-full.html">Project</a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="project-grid-full.html">Project grid fullwidth</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="project-grid-stand.html">Project Grid Standard</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="project-masonry.html">Project masonry</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="project-carousel.html">Project carousel</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="project-detail-1.html">Project detail</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="project-detail-1.html">Project detail v1</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="project-detail-2.html">Project detail v2</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="project-detail-3.html">Project detail v3</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="project-detail-4.html">Project detail v4</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="my-account.html">pages</a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="my-account.html">my account</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="shop.html">shop</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="product-detail.html">product detail</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="cart.html">cart</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="checkout.html">checkout</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="coming-soon.html">coming soon</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="blog-grid.html">blog</a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="blog-grid.html">blog grid</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="blog-sidebar.html">blog with sidebar</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="blog-detail-sidebar.html">blog detail with sidebar</a>
                                        <ul class="sub-menu sub-menu--left">
                                            <li class="menu-item">
                                                <a href="blog-detail-sidebar.html">blog detail with sidebar</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="blog-detail-img.html">blog detail image</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="blog-detail-gallery.html">blog detail gallery</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="blog-detail-video.html">blog detail video</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="contact.html">contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- END HEADER-->

        <!-- MAIN-->
        @yield('content')
        <!-- END MAIN-->

    <!-- FOOTER-->
        <footer class="footer bg-parallax">
            <div class="bg-overlay bg-overlay--p85"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-col">
                            <div class="widget m-b-25">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="Tatee" />
                                </a>
                            </div>
                            <div class="widget widget-address">
                                <ul>
                                    <li>Address : 991 White St . Dawsonville, GA 30534 , New York</li>
                                    <li>Phone number : + (898) 784-7217</li>
                                    <li>Email : Tatee.architecture@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-col p-l-70 p-md-l-0">
                            <div class="widget widget_pages">
                                <h4 class="widget-title">Link</h4>
                                <ul>
                                    <li>
                                        <a href="#">About us</a>
                                    </li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-col p-l-70 p-md-l-0">
                            <h4 class="widget-title">Social</h4>
                            <div class="widget widget_socials">
                                <ul class="list-social list-social-2">
                                    <li class="list-social__item">
                                        <a class="ic-fb" href="#">
                                            <i class="zmdi zmdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-insta" href="#">
                                            <i class="zmdi zmdi-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-twi" href="#">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-pinterest" href="#">
                                            <i class="zmdi zmdi-pinterest"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-google" href="#">
                                            <i class="zmdi zmdi-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-col">
                            <div class="widget widget_text">
                                <h4 class="widget-title">copyright</h4>
                                <p>?? 2018 TATEE . Designed by Authemes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!-- END FOOTER-->
    </div>


    
    {{--  sesion errors --}}
    <div class="modal fade" style="background-color:rgb(143 86 86 / 0%);"
            id="errors" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-style">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ERROR</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-bold">
                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{$error}}!</strong> You should check in on some of those fields below.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="modal-footer">
                    <button  class="btn modal-btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> <!-- end modal-->

    {{--  sesion success message --}}
    <div class="modal fade" style="background-color:rgb(143 86 86 / 0%);"
            id="success_message" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-style">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">MESSAGE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-bold">

                    @if(session()->has('success'))
                            <div class="alert alert-success text-center">
                                {{ session()->get('success') }}
                            </div>
                    @endif
                </div>

                <div class="modal-footer">
                    <button  class="btn modal-btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> <!-- end modal-->

    <!-- Jquery JS-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <!-- Bootstra J-->
    <script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor J-->
    <script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('vendor/slick/slick.min.js')}}"></script>
    <script src="{{asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/isotope/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/matchHeight/jquery.matchHeight-min.js')}}"></script>
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('vendor/noUiSlider/nouislider.min.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('js/global.js')}}"></script>

    {{-- session flash masseges --}}
    @if($errors->any())
        <script>
            $('#errors').modal('toggle')
        </script>  
    @endif

    @if(session()->has('success'))
        <script>
            $('#success_message').modal('toggle')
        </script>
    @endif

</body>

</html>
<!-- end document-->