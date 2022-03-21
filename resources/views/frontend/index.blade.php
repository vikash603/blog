@extends('frontend.layout.app')
@section('content')


<!-- Popular Content news -->
    <section class="bg-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Popular news carousel -->
                    <div class="card__post-carousel">

                        @foreach($news as $n)
                        <div class="item">
                            <!-- Post Article -->
                            <div class="card__post">
                                <div class="card__post__body">
                                    <a href="{{url('/')}}/news-details/{{$n->slug}}">
                                        <img src="{{url('/')}}/images/{{$n->image}}" class="img-fluid" alt="">
                                    </a>
                                    <div class="card__post__content bg__post-cover">
                                        
                                        <div class="card__post__category">
                                       {{$n->newstype}}
                                        </div>
                                      

                                        <div class="card__post__title">
                                            <h2>
                                                <a href="{{url('/')}}/news-details/{{$n->slug}}">
                                                    {{$n->title}}
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="card__post__author-info">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="{{url('/')}}/news-details/{{$n->slug}}">
                                                        by {{$n->author}}
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                        {{$n->created_at}}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                    <!-- End Popular news carousel -->
                   @foreach($adbanner as $ad)
                    <!-- Banner ads -->
                    <figure class="mt-4 mb-4">
                        <a href="#">
                            <img src="{{url('/')}}/images/{{$ad->image1}}" alt="" class="img-fluid">
                        </a>
                    </figure>
                    <!-- End Banner ads -->
                    @endforeach


                    <!-- Popular news Category -->
                    <div class="wrapper__list__article">
                        <h4 class="border_section">featured</h4>
                        <div class="row ">
                            <div class="col-lg-6 pd-0">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="#">
                                            <img src="{{url('/')}}/frontend/images/newsimage21.png" alt="" class="img-fluid">
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
                                                <img src="{{url('/')}}/frontend/images/thumb/news6.jpg" class="img-fluid" alt="">
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
                                                            Formula one akan di adakan di indonesia
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
                                                <img src="{{url('/')}}/frontend/images/thumb/news7.jpg" class="img-fluid" alt="">
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

                            </div>
                            <div class="col-lg-6 pd-0">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="#">
                                            <img src="{{url('/')}}/frontend/images/newsimage23.png" alt="" class="img-fluid">
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
                                                Tips and trick bagaimana cara memegang bola yang benar
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
                                                <img src="{{url('/')}}/frontend/images/thumb/news8.jpg" class="img-fluid" alt="">
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
                                                            cristian ronaldo sedang mengocek lawan dengan teknik yang
                                                            baik
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
                                                <img src="{{url('/')}}/frontend/images/thumb/news9.jpg" class="img-fluid" alt="">
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
                            </div>
                        </div>
                    </div>
                    <!-- Popular news Category -->

                    <!-- Popular 3 news carousel -->
                    <div class="wrapper__list__article">
                        <h4 class="border_section">latest post</h4>
                        <div class="row ">
                            <div class="col-lg-12 pd-0">
                                <div class="article__entry-carousel-three">
                                    <div class="item">
                                        <!-- Post Article -->
                                        <div class="article__entry">
                                            <div class="article__image">
                                                <a href="#">
                                                    <img src="{{url('/')}}/frontend/images/newsimage24.png" alt="" class="img-fluid">
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
                                                    <img src="{{url('/')}}/frontend/images/newsimage25.png" alt="" class="img-fluid">
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
                                                        atlet team sedang melakukan rapat strategi.
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
                                                    <img src="{{url('/')}}/frontend/images/newsimage26.png" alt="" class="img-fluid">
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
                                                        Pemain bola sedang menginjak bola.
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
                                                    <img src="{{url('/')}}/frontend/images/newsimage21.png" alt="" class="img-fluid">
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
                                                    <img src="{{url('/')}}/frontend/images/newsimage22.png" alt="" class="img-fluid">
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
                    </div>
                    <!-- End Popular 3 news carousel -->

                    <!-- Category news -->
                    <div class="wrapper__list__article">
                        <h4 class="border_section">Football</h4>
                        <div class="wrapp__list__article-responsive">
                            <!-- Post Article List -->
                            <div class="card__post card__post-list card__post__transition mt-30">
                                <div class="row ">
                                    <div class="col-md-5">
                                        <div class="card__post__transition">
                                            <a href="#">
                                                <img src="{{url('/')}}/frontend/images/newsimage26.png" class="img-fluid w-100" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 my-auto pl-0">
                                        <div class="card__post__body ">
                                            <div class="card__post__content  ">
                                                <div class="card__post__category ">
                                                    travel
                                                </div>
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
                                                    <h5>
                                                        <a href="#">
                                                            Melakukan pemanasan sebelum pertandingan
                                                        </a>
                                                    </h5>
                                                    <p class="d-none d-lg-block d-xl-block mb-0">
                                                        Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl
                                                        et arcu iaculis placerat
                                                        sollicitudin ut est. In fringilla dui dui.
                                                    </p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Post Article List -->
                            <div class="card__post card__post-list card__post__transition mt-30">
                                <div class="row ">
                                    <div class="col-md-5">
                                        <div class="card__post__transition">
                                            <a href="#">
                                                <img src="{{url('/')}}/frontend/images/newsimage27.png" class="img-fluid w-100" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 my-auto pl-0">
                                        <div class="card__post__body ">
                                            <div class="card__post__content  ">
                                                <div class="card__post__category ">
                                                    travel
                                                </div>
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
                                                    <h5>
                                                        <a href="#">
                                                            Pemain sepak bola wanita sedang berlari
                                                        </a>
                                                    </h5>
                                                    <p class="d-none d-lg-block d-xl-block mb-0">
                                                        Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl
                                                        et arcu iaculis placerat
                                                        sollicitudin ut est. In fringilla dui dui.
                                                    </p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Post Article List -->
                            <div class="card__post card__post-list card__post__transition mt-30">
                                <div class="row ">
                                    <div class="col-md-5">
                                        <div class="card__post__transition">
                                            <a href="#">
                                                <img src="{{url('/')}}/frontend/images/newsimage28.png" class="img-fluid w-100" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 my-auto pl-0">
                                        <div class="card__post__body ">
                                            <div class="card__post__content  ">
                                                <div class="card__post__category ">
                                                    travel
                                                </div>
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
                                                    <h5>
                                                        <a href="#">
                                                            Keper sedang melesat menangkap bola.
                                                        </a>
                                                    </h5>
                                                    <p class="d-none d-lg-block d-xl-block mb-0">
                                                        Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl
                                                        et arcu iaculis placerat
                                                        sollicitudin ut est. In fringilla dui dui.
                                                    </p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Post Article List -->
                            <div class="card__post card__post-list card__post__transition mt-30">
                                <div class="row ">
                                    <div class="col-md-5">
                                        <div class="card__post__transition">
                                            <a href="#">
                                                <img src="{{url('/')}}/frontend/images/newsimage29.png" class="img-fluid w-100" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 my-auto pl-0">
                                        <div class="card__post__body ">
                                            <div class="card__post__content  ">
                                                <div class="card__post__category ">
                                                    travel
                                                </div>
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
                                                    <h5>
                                                        <a href="#">
                                                            Keseriuasan pemain u-18 dalam bermain sepak bola.
                                                        </a>
                                                    </h5>
                                                    <p class="d-none d-lg-block d-xl-block mb-0">
                                                        Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl
                                                        et arcu iaculis placerat
                                                        sollicitudin ut est. In fringilla dui dui.
                                                    </p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Post Article List -->
                            <div class="card__post card__post-list card__post__transition mt-30">
                                <div class="row ">
                                    <div class="col-md-5">
                                        <div class="card__post__transition">
                                            <a href="#">
                                                <img src="{{url('/')}}/frontend/images/newsimage22.png" class="img-fluid w-100" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 my-auto pl-0">
                                        <div class="card__post__body ">
                                            <div class="card__post__content  ">
                                                <div class="card__post__category ">
                                                    travel
                                                </div>
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
                                                    <h5>
                                                        <a href="#">
                                                            Exercitation Ullamco Laboris Nisi Ut Aliquip
                                                        </a>
                                                    </h5>
                                                    <p class="d-none d-lg-block d-xl-block mb-0">
                                                        Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl
                                                        et arcu iaculis placerat
                                                        sollicitudin ut est. In fringilla dui dui.
                                                    </p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Category news -->

                <div class="col-md-4">
                    <aside class="wrapper__list__article">
                        <div class="wrapper__list__article-small">
                            <!-- Post Article -->
                            <div class="article__entry">
                                <div class="article__image">
                                    <a href="#">
                                        <img src="{{url('/')}}/images/{{$ad->image2}}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                
                            </div>
                            <hr>
                            <div class="mb-3">
                                <!-- Post Article -->
                                <div class="card__post card__post-list">
                                    <div class="image-sm">
                                        <a href="#">
                                            <img src="{{url('/')}}/frontend/images/thumb/news7.jpg" class="img-fluid" alt="">
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
                                            <img src="{{url('/')}}/frontend/images/thumb/news11.jpg" class="img-fluid" alt="">
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
                                            <img src="{{url('/')}}/frontend/images/thumb/news12.jpg" class="img-fluid" alt="">
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
                                    <img src="{{url('/')}}/images/{{$ad->image3}}" alt="" class="img-fluid">
                                </figure>
                            </a>
                        </aside>
                        <!-- End Banner news -->
                    </div>
                </div>
                <div class="mx-auto">
                    <!-- Pagination -->
                    <div class="pagination-area">
                        <div class="pagination wow fadeIn animated" data-wow-duration="2s" data-wow-delay="0.5s"
                            style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                            <a href="#">
                                «
                            </a>
                            <a href="#">
                                1
                            </a>
                            <a class="active" href="#">
                                2
                            </a>
                            <a href="#">
                                3
                            </a>
                            <a href="#">
                                4
                            </a>
                            <a href="#">
                                5
                            </a>

                            <a href="#">
                                »
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <!-- End Popular Content news -->

	
		@endsection
		
		
