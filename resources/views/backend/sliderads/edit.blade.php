@extends('backend.layout.app')
@section('content')





    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
         
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}/frontend">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a>
                                    </li>
                                    <li class="breadcrumb-item active">Logo Edit
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="content-body">
                <!-- Simple Validation start -->
                <section class="simple-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                
                                <div class="card-content">
                                    <div class="card-body">
                                        @foreach($slider as $l)
                                        <form method="post" action="{{url('/')}}/sliderads/update" enctype="multipart/form-data">

                                        	

                                            @csrf

                                            <input type="hidden" name="id" id="id" value="{{$l->id}}">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls"><h3>Slider Ads</h3>
                                                            <input type="file" name="image" id="image" value="{{$l->image}}" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>

                                                 
                                                
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </form>

                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Validation end -->

               

                

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>





@endsection




 