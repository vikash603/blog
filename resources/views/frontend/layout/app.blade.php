<?php
use App\Logo;
use App\Category;
use App\Subcategory;
use App\News;
use App\Adbanner;

$logo=Logo::find(1);
$sub=Subcategory::with('sub')->get();
$cat=Category::with('getnews')->get();
$news=News::get();
$adbanner=Adbanner::get();

?>

<!DOCTYPE html>
<html lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <title>India Big News </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="icon.png">

    <meta name="theme-color" content="#030303">
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,700;1,300;1,500&amp;family=Poppins:ital,wght@0,300;0,500;0,700;1,300;1,400&amp;display=swap"
        rel="stylesheet">
    <!-- compile css -->
    <link href="{{url('/')}}/frontend/css/styles3875.css?1fcca2a2c42e9d47a3eb" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:image" content="">
<meta property="og:url" content="">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="body-box bg-news-image">
    <!-- loading -->
    <div class="loading-container">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <ul class="list-unstyled">
                <li>
                    <img src="{{url('/')}}/frontend/images/loading.png" alt="Alternate Text" height="100" />

                </li>
                <li>

                    <div class="spinner">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>

                    </div>

                </li>
                <li>
                    <p>Loading</p>
                </li>
            </ul>
        </div>
    </div>
    <!-- End loading -->

    <!-- Header news -->
    <header>
        <!-- Navbar  -->
        <div class="topbar d-none d-sm-block">
            <div class="container ">
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="topbar-left">
                            <div class="topbar-text">
                               <?php
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'D, d F, Y' );
echo $currentTime;
?>  
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="list-unstyled topbar-right">
                            <ul class="topbar-link">
                                <li><a href="{{url('/')}}/career" title="">Career</a></li>
                                <li><a href="{{url('/')}}/contact" title="">Contact Us</a></li>
                                <li><a href="{{url('/')}}/login" title="">Login</a></li>
                            </ul>
                            <ul class="topbar-sosmed">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white ">
            <div class="container">
                <div class="row">
                    <div class=" col-sm-12 col-md-4 my-auto d-none d-sm-block ">
                        
                        <figure class="mb-0">
                            
                            <a href="{{url('/')}}">
                                <img src="{{url('/')}}/images/{{$logo->image2}}" alt="" class="img-fluid logo" style="width: 33%;">
                            </a>
                            
                        </figure>
                        
                    </div>
                    <div class="col-md-8 d-none d-sm-block ">
                        @foreach($adbanner as $ad)
                        <figure class="mt-3 ">
                            <a href="#">
                                <img src="{{url('/')}}/images/{{$ad->image}}" alt="" class="img-fluid">
                            </a>
                        </figure>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        <!-- Navbar menu -->
        <div class="navigation-wrap navigation-shadow bg-white">
            <nav class="navbar navbar-hover navbar-expand-lg navbar-soft  ">
                <div class="container">
                    <div class="offcanvas-header">
                        <div data-toggle="modal" data-target="#modal_aside_right" class="btn-md">
                            <span class="navbar-toggler-icon"></span>
                        </div>
                    </div>
                    <figure class="mb-0 mx-auto d-block d-sm-none sticky-logo">
                        <a href="homepage-v2.html">
                            <img src="{{url('/')}}/images/{{$logo->image}}" alt="" class="img-fluid logo" style="    width: 22%;
    margin-top: -47px;
    margin-left: 148px;">
                        </a>
                    </figure>
                    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99">
                <span class="navbar-toggler-icon"></span>
            </button> -->
                    <div class="collapse navbar-collapse justify-content-between" id="main_nav99">
                        <ul class="navbar-nav">
                           
                          <!--  <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Pages </a>
                                <ul class="dropdown-menu animate fade-up">

                                    <li><a class="dropdown-item icon-arrow" href="#"> Blog </a>
                                        <ul class="submenu dropdown-menu  animate fade-up">
                                            <li><a class="dropdown-item" href="category-style-v1.html">Style 1</a></li>
                                            <li><a class="dropdown-item" href="category-style-v2.html">Style 2</a></li>
                                            <li><a class="dropdown-item" href="category-style-v3.html">Style 3</a></li>
                                            <li><a class="dropdown-item icon-arrow" href="#">Submenu item 3 </a>
                                                <ul class="submenu dropdown-menu  animate fade-up">
                                                    <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                                                    <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
                                            <li><a class="dropdown-item" href="#">Submenu item 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item icon-arrow" href="#"> Blog single detail </a>
                                        <ul class="submenu dropdown-menu  animate fade-up">
                                            <li><a class="dropdown-item" href="article-detail-v1.html">Style 1</a></li>
                                            <li><a class="dropdown-item" href="article-detail-v2.html">Style 2</a></li>
                                            <li><a class="dropdown-item" href="article-detail-v3.html">Style 3</a></li>
                                            <li><a class="dropdown-item" href="article-detail-v4.html">Style 4</a></li>
                                        </ul>
                                    </li>

                                    <li><a class="dropdown-item icon-arrow" href="#"> Search Result </a>
                                        <ul class="submenu dropdown-menu  animate fade-up">
                                            <li><a class="dropdown-item" href="search-result.html">Style 1</a></li>
                                            <li><a class="dropdown-item" href="search-result-v1.html">Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="login.html">Login </a>
                                    <li><a class="dropdown-item" href="register.html"> Register </a>
                                    <li><a class="dropdown-item" href="contact.html"> Contact </a>
                                    <li><a class="dropdown-item" href="404.html"> 404 Error </a>
                                </ul>
                            </li> -->

                            @foreach($cat as $ca)

                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown"> {{$ca->category}} </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    @foreach($sub as $su)
                                    <li><a class="dropdown-item" href="#"> {{$su->subcategory}} </a>
                                    </li>

                                   @endforeach
                                    

                                </ul>
                            </li>

                            @endforeach

                             

                             

                             


                            <li class="nav-item dropdown has-megamenu">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> अन्य </a>
                                <div class="dropdown-menu animate fade-down megamenu mx-auto" role="menu">
                                    <div class="container wrap__mobile-megamenu">
                                        <div class="col-megamenu">
                                            <h5 class="title">Recent news</h5>
                                            <hr>
                                            <!-- Popular news carousel -->
                                            <div class="popular__news-header-carousel">

                                                <div class="top__news__slider">
                                                    @foreach($news as $ne)
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="{{url('/')}}/images/{{$ne->image}}" alt=""
                                                                        class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by {{$ne->author}}
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            {{$ne->created_at}}
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        {{$ne->title}}
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    





                                                </div>
                                            </div>
                                        </div> <!-- col-megamenu.// -->
                                    </div>
                                </div> <!-- dropdown-mega-menu.// -->
                            </li>
                            
                        </ul>


                        <!-- Search bar.// -->
                        <ul class="navbar-nav ">
                            <li class="nav-item search hidden-xs hidden-sm "> <a class="nav-link" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- Search content bar.// -->
                        <div class="top-search navigation-shadow">
                            <div class="container">
                                <div class="input-group ">
                                    <form action="#">
                                        <div class="row no-gutters mt-3">
                                            <div class="col">
                                                <input class="form-control border-secondary border-right-0 rounded-0"
                                                    type="search" value="" placeholder="Search">
                                            </div>
                                            <div class="col-auto">
                                                <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right"
                                                    href="search-result.html">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Search content bar.// -->


                    </div> <!-- navbar-collapse.// -->
                </div>
            </nav>

        </div>
        <!-- End Navbar menu -->
        <!-- modal.// -->
        <div id="modal_aside_right" class="modal fixed-left fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-aside" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="widget__form-search-bar  ">
                            <div class="row no-gutters">
                                <div class="col">
                                    <input class="form-control border-secondary border-right-0 rounded-0" value=""
                                        placeholder="Search">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <nav class="list-group list-group-flush">
                            <ul class="navbar-nav ">
                                <li class="nav-item dropdown">
                                    <a class="nav-link active dropdown-toggle text-dark" href="#"
                                        data-toggle="dropdown"> Home
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-left">
                                        <li><a class="dropdown-item text-dark" href="homepage-v1.html"> Home version
                                                one </a>
                                        </li>
                                        <li><a class="dropdown-item text-dark" href="homepage-v2.html"> Home version two
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item text-dark" href="homepage-v3.html"> Home version
                                                three </a>
                                        </li>
                                        <li><a class="dropdown-item text-dark" href="homepage-v4.html"> Home version
                                                four </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle  text-dark" href="#" data-toggle="dropdown">
                                        Pages </a>
                                    <ul class="dropdown-menu animate fade-up">

                                        <li><a class="dropdown-item icon-arrow  text-dark" href="#"> Blog </a>
                                            <ul class="submenu dropdown-menu  animate fade-up">
                                                <li><a class="dropdown-item" href="category-style-v1.html">Style 1</a>
                                                </li>
                                                <li><a class="dropdown-item" href="category-style-v2.html">Style 2</a>
                                                </li>
                                                <li><a class="dropdown-item" href="category-style-v3.html">Style 3</a>
                                                </li>

                                                <li><a class="dropdown-item icon-arrow  text-dark" href="#">Submenu item
                                                        3 </a>
                                                    <ul class="submenu dropdown-menu  animate fade-up">
                                                        <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                                                        <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item  text-dark" href="#">Submenu item 4</a></li>
                                                <li><a class="dropdown-item" href="#">Submenu item 5</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item icon-arrow  text-dark" href="#"> Blog single detail
                                            </a>
                                            <ul class="submenu dropdown-menu  animate fade-up">
                                                <li><a class="dropdown-item" href="article-detail-v1.html">Style 1</a>
                                                </li>
                                                <li><a class="dropdown-item" href="article-detail-v2.html">Style 2</a>
                                                </li>
                                                <li><a class="dropdown-item" href="article-detail-v3.html">Style 3</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li><a class="dropdown-item icon-arrow  text-dark" href="#"> Search Result </a>
                                            <ul class="submenu dropdown-menu  animate fade-up">
                                                <li><a class="dropdown-item" href="search-result.html">Style 1</a></li>
                                                <li><a class="dropdown-item" href="search-result-v1.html">Style 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item  text-dark" href="login.html">Login </a>
                                        <li><a class="dropdown-item  text-dark" href="register.html"> Register </a>
                                        <li><a class="dropdown-item  text-dark" href="contact.html"> Contact </a>
                                        <li><a class="dropdown-item  text-dark" href="404.html"> 404 Error </a>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link active dropdown-toggle  text-dark" href="#"
                                        data-toggle="dropdown"> About
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-left">
                                        <li><a class="dropdown-item" href="about-us.html"> Style 1 </a>
                                        </li>
                                        <li><a class="dropdown-item" href="about-us-v1.html"> Style 2 </a></li>

                                    </ul>
                                </li>


                                <li class="nav-item"><a class="nav-link  text-dark" href="#"> Category </a></li>
                                <li class="nav-item"><a class="nav-link  text-dark" href="contact.html"> contact </a>
                                </li>
                            </ul>

                        </nav>
                    </div>
                    <div class="modal-footer">


                        <p>© 2020 <a href="http://retenvi.com/"
                                title="Premium WordPress news &amp; magazine theme">Magzrenvi</a>
                            -
                            Premium template news, blog & magazine &amp;
                            magazine theme by <a href="http://retenvi.com/" title="retenvi">RETENVI.COM</a>.</p>

                    </div>

                </div>
            </div> <!-- modal-bialog .// -->
        </div> <!-- modal.// -->
        <!-- End Navbar  -->
        <!-- Tranding News -->
        <div class="bg-white">
            <!-- Trending News Start -->
            <div class="trending-news pt-4 border-tranding">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="trending-news-inner">
                                <div class="title">
                                    <i class="fa fa-bolt"></i>
                                    <strong>trending news</strong>
                                </div>
                                <div class="trending-news-slider">

                                    @foreach($news as $new)
                                    <div class="item-single">
                                        <a href="{{url('/')}}/news-details/{{$new->slug}}">{{$new->title}}
                                            .</a>
                                    </div>
                                   @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Trending News End -->
        </div>
        <!-- End Tranding News -->
    </header>
    <!-- End Header news -->


@yield('content')


	 <section class="wrapper__section p-0">
        <div class="wrapper__section__components">
            <!-- Footer  -->
            <footer>
                <div class="wrapper__footer bg__footer ">
                    <div class=" container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="widget__footer">
                                    <!-- <h4 class="footer-title">company info</h4> -->
                                   
                                    <figure>
                                        <img src="{{url('/')}}/images/{{$logo->image2}}" alt="" class="logo-footer" style="width: 33%;">
                                    </figure>
                                   
                                    <p>
                                        Retnews is a premium magazine template based on Bootstrap 4.
                                        We bring you the best Premium Themes that perfect for news, magazine, personal
                                        blog, etc.
                                        <br>
                                        <!-- <a href=" #" class="btn btn-primary mt-4 text-white">About us</a> -->
                                    </p>
                                </div>
                                <div class="border-line"></div>
                                <div class="widget__footer">
                                    <h4 class="footer-title">follow us </h4>
                                    <!-- <p>
                            Follow us and stay in touch to get the latest news
                        </p> -->
                                    <p>
                                        <button class="btn btn-social btn-social-o facebook mr-1">
                                            <i class="fa fa-facebook-f"></i>
                                        </button>
                                        <button class="btn btn-social btn-social-o twitter mr-1">
                                            <i class="fa fa-twitter"></i>
                                        </button>

                                        <button class="btn btn-social btn-social-o linkedin mr-1">
                                            <i class="fa fa-linkedin"></i>
                                        </button>
                                        <button class="btn btn-social btn-social-o instagram mr-1">
                                            <i class="fa fa-instagram"></i>
                                        </button>

                                        <button class="btn btn-social btn-social-o youtube mr-1">
                                            <i class="fa fa-youtube"></i>
                                        </button>
                                    </p>
                                </div>
                            </div>

                            <!-- Category -->
                            <div class="col-md-4">
                                <div class="widget__footer">
                                    <h4 class="footer-title">category</h4>
                                    <div class="link__category">
                                        <ul class="list-unstyled ">
                                            <li class="list-inline-item">
                                                <a href="#">apps</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">business</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">entertainment</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">fashion</a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#">Food</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Gadget</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Gaming</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Health</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Lifestyle</a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#">Science</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Travel</a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#">Startup</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Sports</a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="widget__footer">
                                    <h4 class="footer-title">newsletter</h4>
                                    <!-- Form Newsletter -->

                                    <div class="widget__form-newsletter ">
                                        <p>

                                            Don’t miss to subscribe to our news feeds, kindly fill the form below
                                        </p>
                                        <div class="mt-3">
                                            <input type="text" class="form-control mb-2"
                                                placeholder="Your email address">

                                            <button class="btn btn-primary btn-block" type="button">subscribe

                                            </button>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>

                    </div>
                </div>

                <!-- Footer Bottom -->
                <div class="bg__footer-bottom ">
                    <div class="container">
                        <div class="row flex-column-reverse flex-md-row">
                            <div class="col-md-6">
                                <span>
                                    © 2020 Magzrenvi - Premium laravel news & magazine theme by
                                    <a href="#">retenvi.com</a>
                                </span>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-inline ">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            privacy
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            contact
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            about
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            faq
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer  -->
        </div>
    </section>


    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>



    <script src="{{url('/')}}/frontend/js/index.bundle3875.js?1fcca2a2c42e9d47a3eb"></script>
</body>



</html>
