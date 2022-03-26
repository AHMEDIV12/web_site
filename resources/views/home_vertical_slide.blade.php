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
    <title>Home Vertical Slide</title>

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
    <link href="{{asset('vendor/revolution/css/layers.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/revolution/css/navigation.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/revolution/css/settings.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/pagePiling/css/jquery.pagepiling.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/main.min.css')}}" rel="stylesheet" media="all">
    {{-- edit main css --}}
    <style>
    .btn-focus:focus{
        outline: 0;
        box-shadow: 0 0 0 0.2rem #f9f19f40;
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

    .modal-style {
        background-color: rgb(215 215 215);
        border: 1px solid #eeeeee4a;
        padding: 22px;
        padding-bottom: 3px;
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

    .fit-content{
        height: auto;
    }
    </style>
    <!--Favicons-->
    <link rel="shortcut icon" href="images/icon/favicon.jpg">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
</head>

<body class="animsition js-preloader">
    <!-- MAIN-->
    <main id="main">
        <!-- HEADER PAGE PILLING-->
        <header id="header">
            <div class="header header-2 header-page-pilling d-none d-lg-block" >
                <div class="header__bar">
                    <div class="wrap wrap--w1790">
                        <div class="container-fluid">
                            <div class="header__content">
                                <div class="logo">
                                    <a href="#">
                                        <img src="images/icon/logo-white.png" alt="Tatee" />
                                    </a>
                                </div>
                                <div class="header__content-right">
                                    <button class="hamburger hamburger--slider float-right hamburger--sm js-menusb-btn" type="button">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="menu-sidebar js-menusb" id="sidebar">
                <a class="btn-close" href="#" id="js-close-btn">
                    <span class="ti-close"></span>
                </a>
                <div class="menu-sidebar__content">
                    <nav class="menu-sidebar-nav-menu">
                        <ul class="menu nav-menu" id="nav-menu-sidebar">
                            <li class="menu-item menu-item-has-children">
                                <a href="{{route('main')}}" data-toggle="collapse" data-target="#sub1" aria-expanded="true" aria-controls="sub1">Home</a>
                                <ul class="sub-menu collapse" id="sub1" data-parent="#nav-menu-sidebar">
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
                                <a href="{{route('about.index')}}">about</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="{{route('all_projects.index')}}" data-toggle="collapse" data-target="#sub2" aria-expanded="true" aria-controls="sub2">Project</a>
                                {{-- <ul class="sub-menu collapse" id="sub2" data-parent="#nav-menu-sidebar">
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
                                </ul> --}}
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#" data-toggle="collapse" data-target="#sub3" aria-expanded="true" aria-controls="sub3">pages</a>
                                <ul class="sub-menu collapse" id="sub3" data-parent="#nav-menu-sidebar">
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
                                <a href="#" data-toggle="collapse" data-target="#sub4" aria-expanded="true" aria-controls="sub4">blog</a>
                                {{-- <ul class="sub-menu collapse" id="sub4" data-parent="#nav-menu-sidebar">
                                    <li class="menu-item">
                                        <a href="blog-grid.html">blog grid</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="blog-sidebar.html">blog with sidebar</a>
                                    </li>
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
                                </ul> --}}
                            </li>
                            <li class="menu-item">
                                <a href="contact.html">contact</a>
                            </li>
                        </ul>
                    </nav>
                    <ul class="list-social list-social--big">
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
                <div class="menu-sidebar__footer">
                    <div class="copyright">
                        <p>© 2018 TATEE . Designed by Authemes</p>
                    </div>
                </div>
            </aside>
            <div id="menu-sidebar-overlay"></div>
            <div class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile__bar-inner">
                            <a class="logo" href="index.html">
                                <img src="images/icon/logo-black.png" alt="Tatee" />
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
                    </div>
                </nav>
            </div>
        </header>
        <!-- END HEADER PAGE PILLING-->

        <!-- PAGE INFO-->
        <div class="page-info" id="js-pageinfo">
            <ul class="list-social-3">
                <li class="list-social__item">
                    <a href="#">facebook
                        <i class="fab fa-facebook-f icon"></i>
                    </a>
                </li>
                <li class="list-social__item">
                    <a href="#">instagram
                        <i class="fab fa-instagram icon"></i>
                    </a>
                </li>
                <li class="list-social__item">
                    <a href="#">twitter
                        <i class="fab fa-twitter icon"></i>
                    </a>
                </li>
                <li class="list-social__item">
                    <a href="#">pinterest
                        <i class="fab fa-pinterest-p icon"></i>
                    </a>
                </li>
                <li class="list-social__item">
                    <a href="#">google
                        <i class="fab fa-google-plus-g icon"></i>
                    </a>
                </li>
            </ul>
            <div class="copyright">© 2018 TATEE</div>
            <h3 class="page-info__title">About us</h3>
        </div>
        <!-- END PAGE INFO-->

        <!-- PAGE PILLING-->
        <div class="page-pagepiling-wrap js-pagepilling">

            {{-- SECTION  MainView --}}
            @include('sections.main_view')
            <!-- END SLIDER-->

            <!-- SECTION  field of work-->
            @include('sections.fields_of_work')
            <!-- END SECTION-->

            <!-- SECTION  projects_images_slider  -->
            @include('sections.projects_images_slider')
            <!-- END SECTION-->

            <!-- SECTION why us-->
            @include('sections.why_us')
            <!-- END SECTION-->

            <!-- SECTION  Sponsers and Reviews -->
            @include('sections.sponsers')
            <!-- END SECTION-->

            <!-- SECTION  Send message-->
            @include('sections.send_massege')
            <!-- END SECTION-->
        </div>
        <!-- END PAGE PILLING-->
    </main>


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
    <!-- Bootstrap JS-->
    <script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS-->
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
    <script type="text/javascript" src="{{asset('vendor/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!--
    | (Load Extensions only on Local File Systems !
    | The following part can be removed on Server for On Demand Loading)
    -->
    <script type="text/javascript" src="{{asset('vendor/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/revolution/js/extensions/revolution.extension.kenburn.min.js    ')}} "></script>
    <script type="text/javascript" src="{{asset('vendor/revolution/js/extensions/revolution.extension.navigation.min.js ')}} "></script>
    <script type="text/javascript" src="{{asset('vendor/revolution/js/extensions/revolution.extension.migration.min.js  ')}} "></script>
    <script type="text/javascript" src="{{asset('vendor/revolution/js/extensions/revolution.extension.parallax.min.js   ')}} "></script>
    <script type="text/javascript" src="{{asset('vendor/revolution/js/extensions/revolution.extension.carousel.min.js   ')}} "></script>
    <!-- Config Revolution Slider-->
    <script src="{{asset('js/config-revolution.min.js                                                        ')}}"type="text/javascript"></script>
    <script src="{{asset('vendor/pagePiling/js/jquery.pagepiling.js                                          ')}}"></script>
    <script src="{{asset('js/config-pagePilling.js                                                           ')}}"></script>
    <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyAEmXgQ65zpsjsEAfNPP9mBAz-5zjnIZBw')}}"></script>
    <script src="{{asset('js/theme-map.js                                                                    ')}}"></script>
    <script src="{{asset('js/config-contact.js                                                               ')}} "></script>

    <!-- Main JS-->
    <script src="{{asset('js/global.js')}}"></script> 
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



{{-- Lorem ipsum dolor sit amet, consectetur adipist pricing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. --}}