@extends('frontend.layout.app')
@section('content')

<section class="bg-white pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Breadcrumb -->
                    <ul class="breadcrumbs bg-light mb-4">
                        <li class="breadcrumbs__item">
                            <a href="{{url('/')}}" class="breadcrumbs__url">
                                <i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="#" class="breadcrumbs__url">News</a>
                        </li>
                        <li class="breadcrumbs__item breadcrumbs__item--current">
                            World
                        </li>
                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="col-md-8">
                    <!-- Social media animation -->
                    <div class="social__media__animation ">
                        <ul class="menu topLeft bg__card-shadow">
                            <li class="share bottom">
                                <i class="fa fa-share-alt"></i>
                                <ul class="list__submenu">
                                    <li><a href="http://www.facebook.com/sharer.php" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://twitter.com/share?url=https://indiabignews.in&text=Simple Share Buttons&hashtags=simplesharebuttons" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="googlePlus"><i class="fa fa-whatsapp"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                   
                    <!-- Article detail -->
                    <div class="wrap__article-detail">
                        
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{url('/')}}/images/{{$News->image}}" alt="Los Angeles" style="width:100%;height:400px">
      </div>
@foreach($gallery as $g)
      <div class="item">
        <img src="{{url('/')}}/images/{{$g->gallery}}" alt="Chicago" style="width:100%;height:400px">
      </div>
      @endforeach
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

                        <div class="wrap__article-detail-title">
                            <h1>
                                {{$News->title}}
                            </h1>
                            
                        </div>
                        <hr>
                        <div class="wrap__article-detail-info">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <figure class="image-profile">
                                        <img src="images/profile2.png" alt="">
                                    </figure>
                                </li>
                                <li class="list-inline-item">

                                    <span>
                                        by
                                    </span>
                                    <a href="#">
                                        {{$News->author}},
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <span class="text-dark text-capitalize ml-1">
                                        {{$News->created_at}}
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span class="text-dark text-capitalize">
                                        in
                                    </span>
                                    <a href="#">
                                        {{$News->newstype}}
                                    </a>
                                    ,

                                </li>
                               
                                <!-- <li class="list-inline-item d-none d-md-block d-lg-none">

                <a href="#comments" class="text-dark">
                    <i class="fa fa-comment"></i>
                    3 comments
                </a>

            </li> -->
                            </ul>
                        </div>
                        <hr>

                        <div class="wrap__article-detail-content">

                            <p class="has-drop-cap-fluid">{{ strip_tags($News->description)}}
                            </p>




                        </div>
                    </div>

                

                    <!-- News Tags -->
                    <div class="blog-tags">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <i class="fa fa-tags">
                                </i>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    {{$News->tags}}
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    #sea
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    #programming
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    #sea
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    #property
                                </a>
                            </li>
                        </ul>
                    </div>


                    <!-- Profile author -->
                    <div class="wrap__profile">
                          <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">


      <div class="item active">
        <img src="{{url('/')}}/images/185291646803303.png" alt="Los Angeles" style="width:100%;height:200px">
      </div>

    
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
                    </div>


                    <!-- Comment  -->
                    <div id="comments" class="comments-area">
                        <h3 class="comments-title">Comments:</h3>

                        <ol class="comment-list">

                            @foreach($comment as $comm)
                            <li class="comment">
                                <aside class="comment-body">
                                    <div class="comment-meta">
                                        <div class="comment-author vcard">
                                            
                                            <b class="fn">{{$comm->name}}</b>
                                            <span class="says">says:</span>
                                        </div>

                                        <div class="comment-metadata">
                                            <a href="#">
                                                <span>{{$comm->created_at}}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="comment-content">
                                        <p>{{$comm->description}}
                                        </p>
                                    </div>

                                    <div class="reply">
                                        <a href="#" class="comment-reply-link">Reply</a>
                                    </div>
                                </aside>

                                
                            </li>
                            @endforeach

                            
                        </ol>

                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Leave a Reply</h3>

                            <form class="comment-form" method="post" action="{{url('/')}}/news-details">
                                @csrf
                                <input type="hidden" value="{{$News->id}}" name="news_id" id="news_id">

                                <p class="comment-notes">
                                    <span id="email-notes">Your email address will not be published.</span>
                                    Required fields are marked
                                    <span class="required">*</span>
                                </p>
                                <p class="comment-form-comment">
                                    <label for="comment">Comment <span class="text-danger">@error('description'){{$message}} @enderror</span></label>
                                    <textarea name="description" id="description" cols="45" rows="5" maxlength="65525"
                                        required="required"></textarea>
                                </p>
                                <p class="comment-form-author">
                                    <label>Name <span class="text-danger">@error('name'){{$message}} @enderror</span></label>
                                    <input type="text" name="name" id="neme" required="required">
                                </p>
                                <p class="comment-form-email">
                                    <label for="email">Email <span class="text-danger">@error('email'){{$message}} @enderror</span></label>
                                    <input type="email" id="email" name="email" required="required">
                                </p>
                                
                                
                                <p class="form-submit">
                                    <input type="submit" name="submit" id="submit" class="submit" value="Post Comment">
                                </p>
                            </form>
                        </div>
                    </div>
                    <!-- Comment -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="single_navigation-prev">
                                <a href="#">
                                    <span>previous post</span>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, similique.
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_navigation-next text-left text-md-right">
                                <a href="#">
                                    <span>next post</span>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, nesciunt.
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="related-article">
                        <h4>
                            you may also like
                        </h4>

                        <div class="article__entry-carousel-three">
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="#">
                                            <img src="images/newsimage9.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    by david hall
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    descember 09, 2016
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="#">
                                                Maecenas accumsan tortor ut velit pharetra mollis.
                                            </a>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="#">
                                            <img src="images/newsimage9.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    by david hall
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    descember 09, 2016
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="#">
                                                Maecenas accumsan tortor ut velit pharetra mollis.
                                            </a>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="#">
                                            <img src="images/newsimage9.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    by david hall
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    descember 09, 2016
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="#">
                                                Maecenas accumsan tortor ut velit pharetra mollis.
                                            </a>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="#">
                                            <img src="images/newsimage9.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    by david hall
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    descember 09, 2016
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="#">
                                                Maecenas accumsan tortor ut velit pharetra mollis.
                                            </a>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="#">
                                            <img src="images/newsimage9.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    by david hall
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    descember 09, 2016
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="#">
                                                Maecenas accumsan tortor ut velit pharetra mollis.
                                            </a>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <aside class="wrapper__list__article">
                        <div class="wrapper__list__article-small">
                            <!-- Post Article -->
                            <div class="article__entry">
                                <div class="article__image">
                                    <a href="#">
                                        <img src="images/news9.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="article__content">
                                    <div class="article__category">
                                        travel
                                    </div>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-primary">
                                                by david hall
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span class="text-dark text-capitalize">
                                                descember 09, 2016
                                            </span>
                                        </li>

                                    </ul>
                                    <h5>
                                        <a href="#">
                                            Proin eu nisl et arcu iaculis placerat sollicitudin ut est
                                        </a>
                                    </h5>
                                    <p>
                                        Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis
                                        placerat sollicitudin ut
                                        est. In fringilla dui dui.
                                    </p>
                                    <a href="#" class="btn btn-outline-primary mb-4 text-capitalize"> read more</a>
                                </div>
                            </div>
                            <div class="wrapper__list__article-small">
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="#">
                                                <img src="images/thumb/news6.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>


                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                by david hall
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                descember 09, 2016
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="#">
                                                            6 Best Tips for Building a Good Shipping Boat
                                                        </a>
                                                    </h6>
                                                    <!-- <p class="d-none d-lg-block d-xl-block">
                    Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                    sollicitudin ut est. In fringilla dui dui.
                </p> -->

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="#">
                                                <img src="images/thumb/news7.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>


                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                by david hall
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                descember 09, 2016
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="#">
                                                            Pembalap mulai melaju kencang
                                                        </a>
                                                    </h6>
                                                    <!-- <p class="d-none d-lg-block d-xl-block">
                    Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                    sollicitudin ut est. In fringilla dui dui.
                </p> -->

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="#">
                                                <img src="images/thumb/news8.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>


                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                by david hall
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                descember 09, 2016
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="#">
                                                            Cristian ronaldo mulai mengocek lawannya,
                                                        </a>
                                                    </h6>
                                                    <!-- <p class="d-none d-lg-block d-xl-block">
                    Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                    sollicitudin ut est. In fringilla dui dui.
                </p> -->

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="#">
                                            <img src="images/newsimage9.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <div class="article__category">
                                            travel
                                        </div>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    by david hall
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="text-dark text-capitalize">
                                                    descember 09, 2016
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="#">
                                                Proin eu nisl et arcu iaculis placerat sollicitudin ut est
                                            </a>
                                        </h5>
                                        <p>
                                            Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu
                                            iaculis placerat sollicitudin ut
                                            est. In fringilla dui dui.
                                        </p>
                                        <a href="#" class="btn btn-outline-primary mb-4 text-capitalize"> read more</a>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="#">
                                                <img src="images/thumb/news7.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>


                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                by david hall
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                descember 09, 2016
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="#">
                                                            Pembalap mulai melaju kencang
                                                        </a>
                                                    </h6>
                                                    <!-- <p class="d-none d-lg-block d-xl-block">
                    Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                    sollicitudin ut est. In fringilla dui dui.
                </p> -->

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </aside>

                    <!-- social media -->
                    <aside class="wrapper__list__article">
                        <h4 class="border_section">stay conected</h4>
                        <!-- widget Social media -->
                        <div class="wrap__social__media">
                            <a href="#" target="_blank">
                                <div class="social__media__widget facebook">
                                    <span class="social__media__widget-icon">
                                        <i class="fa fa-facebook"></i>
                                    </span>
                                    <span class="social__media__widget-counter">
                                        19,243 fans
                                    </span>
                                    <span class="social__media__widget-name">
                                        like
                                    </span>
                                </div>
                            </a>
                            <a href="#" target="_blank">
                                <div class="social__media__widget twitter">
                                    <span class="social__media__widget-icon">
                                        <i class="fa fa-twitter"></i>
                                    </span>
                                    <span class="social__media__widget-counter">
                                        2.076 followers
                                    </span>
                                    <span class="social__media__widget-name">
                                        follow
                                    </span>
                                </div>
                            </a>
                            <a href="#" target="_blank">
                                <div class="social__media__widget youtube">
                                    <span class="social__media__widget-icon">
                                        <i class="fa fa-youtube"></i>
                                    </span>
                                    <span class="social__media__widget-counter">
                                        15,200 followers
                                    </span>
                                    <span class="social__media__widget-name">
                                        subscribe
                                    </span>
                                </div>
                            </a>

                        </div>
                    </aside>
                    <!-- End social media -->

                    <!-- Newsletter news -->
                    <aside class="wrapper__list__article">
                        <h4 class="border_section">newsletter</h4>
                        <!-- Form Subscribe -->
                        <div class="widget__form-subscribe bg__card-shadow">
                            <h6>
                                The most important world news and events of the day.
                            </h6>
                            <p><small>Get magzrenvi daily newsletter on your inbox.</small></p>
                            <div class="input-group ">
                                <input type="text" class="form-control" placeholder="Your email address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">sign up</button>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- End Newsletter news -->

                    <div class="sidebar-section">
                        <aside class="wrapper__list__article">
                            <h4 class="border_section">trending sports</h4>
                            <!-- List Article -->
                            <div class="card__post__content p-3 card__post__body-border-all">
                                <div class="card__post__category text-capitalize">
                                    travel
                                </div>
                                <div class="card__post__author-info mb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <span class="text-primary">
                                                by david hall
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span class="text-dark text-capitalize">
                                                descember 09, 2016
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="card__post__title">
                                    <h5>
                                        <a href="#">
                                            Proin eu nisl et arcu iaculis placerat sollicitudin ut est
                                        </a>
                                    </h5>
                                    <!-- <p>
            Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et
            arcu
            iaculis
            placerat
            sollicitudin ut est. In fringilla dui dui.
        </p>
        <a href="#" class="btn btn-primary float-right">
            read more
        </a> -->
                                </div>

                            </div>
                            <!-- List Article -->
                            <div class="card__post__content p-3 card__post__body-border-all">
                                <div class="card__post__category text-capitalize">
                                    travel
                                </div>
                                <div class="card__post__author-info mb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <span class="text-primary">
                                                by david hall
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span class="text-dark text-capitalize">
                                                descember 09, 2016
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="card__post__title">
                                    <h5>
                                        <a href="#">
                                            Proin eu nisl et arcu iaculis placerat sollicitudin ut est
                                        </a>
                                    </h5>
                                    <!-- <p>
            Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et
            arcu
            iaculis
            placerat
            sollicitudin ut est. In fringilla dui dui.
        </p>
        <a href="#" class="btn btn-primary float-right">
            read more
        </a> -->
                                </div>

                            </div>
                            <!-- List Article -->
                            <div class="card__post__content p-3 card__post__body-border-all">
                                <div class="card__post__category text-capitalize">
                                    travel
                                </div>
                                <div class="card__post__author-info mb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <span class="text-primary">
                                                by david hall
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span class="text-dark text-capitalize">
                                                descember 09, 2016
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="card__post__title">
                                    <h5>
                                        <a href="#">
                                            Proin eu nisl et arcu iaculis placerat sollicitudin ut est
                                        </a>
                                    </h5>
                                    <!-- <p>
            Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et
            arcu
            iaculis
            placerat
            sollicitudin ut est. In fringilla dui dui.
        </p>
        <a href="#" class="btn btn-primary float-right">
            read more
        </a> -->
                                </div>

                            </div>
                            <!-- List Article -->
                            <div class="card__post__content p-3 card__post__body-border-all">
                                <div class="card__post__category text-capitalize">
                                    travel
                                </div>
                                <div class="card__post__author-info mb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <span class="text-primary">
                                                by david hall
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span class="text-dark text-capitalize">
                                                descember 09, 2016
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="card__post__title">
                                    <h5>
                                        <a href="#">
                                            Proin eu nisl et arcu iaculis placerat sollicitudin ut est
                                        </a>
                                    </h5>
                                    <!-- <p>
            Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et
            arcu
            iaculis
            placerat
            sollicitudin ut est. In fringilla dui dui.
        </p>
        <a href="#" class="btn btn-primary float-right">
            read more
        </a> -->
                                </div>

                            </div>
                        </aside>

                        <!-- Tags news -->
                        <aside class="wrapper__list__article">
                            <h4 class="border_section">tags</h4>
                            <div class="blog-tags p-0">
                                <ul class="list-inline">

                                    <li class="list-inline-item">
                                        <a href="#">
                                            #property
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #sea
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #programming
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #sea
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #property
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #life style
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #technology
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #framework
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #sport
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #game
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #wfh
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #sport
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #game
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #wfh
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #framework
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </aside>
                        <!-- End Tags news -->

                        <!-- Category news -->
                        <aside class="wrapper__list__article">
                            <h4 class="border_section">category</h4>
                            <!-- Widget Category -->
                            <div class="widget widget__category">
                                <ul class="list-unstyled ">
                                    <li>
                                        <a href="#">
                                            Life style
                                            <span class="badge">14</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            photos
                                            <span class="badge">4</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            video
                                            <span class="badge">2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            tranding
                                            <span class="badge">8</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            travel
                                            <span class="badge">10</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            health
                                            <span class="badge">12</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </aside>
                        <!-- End Category news -->

                        <!-- Banner news -->
                        <aside class="wrapper__list__article">
                            <h4 class="border_section">Advertise</h4>
                            <a href="#">
                                <figure>
                                    <img src="images/banner6.jpg" alt="" class="img-fluid">
                                </figure>
                            </a>

                        </aside>
                        <!-- End Banner news -->


                    </div>
                </div>
                <div class="clearfix"></div>

            </div>

        </div>
    </section>

    @endsection