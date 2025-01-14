@extends('frontend.layout.app')
@section ('content')


<section style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- breadcrumb -->
                    <!-- Breadcrumb -->
                    <ul class="breadcrumbs bg-light mb-4">
                        <li class="breadcrumbs__item">
                            <a href="{{url('/')}}" class="breadcrumbs__url">
                                <i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="index.html" class="breadcrumbs__url">News</a>
                        </li>
                        <li class="breadcrumbs__item breadcrumbs__item--current">
                            World
                        </li>
                    </ul>
                    <!-- End breadcrumb -->

                    @foreach($about as $ab)

                    <div class="wrap__about-us">
                        <h2>{{$ab->title}}</h2>
                        
                        <p>

                            {{$ab->description}}
                        </p>

                     
                       
                        <div class="clearfix"></div>
                        <h2>Our Valuable Team Members</h2>
                        <!-- team member -->
                        <div class="team-member row">

                            @foreach($tem as $t)
                            <div class="col-md-3">
                                <figure class="member"> <img src="images/{{$t->image}}" class="img-fluid" alt="Image">
                                    <figcaption>
                                        <h4>{{$t->name}}</h4>
                                        <small>{{$t->designation}}</small>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="{{$t->facebook}}" target="_blank"><i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="{{$t->instagram}}" target="_blank"><i class="fa fa-twitter"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="{{$t->twitter}}" target="_blank"><i class="fa fa-youtube-play"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="{{$t->linkedin}}" target="_blank"><i class="fa fa-linkedin"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            
                            @endforeach
                           
                        </div>
                       

                    </div>

                    @endforeach
                </div>


            </div>
        </div>
    </section>

@endsection
