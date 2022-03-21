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
                                    <li class="breadcrumb-item active">Ad Banner Edit
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
                                        @foreach($ad as $l)
                                        <form method="post" action="{{url('/')}}/adbanner/update" enctype="multipart/form-data">

                                        	

                                            @csrf

                                            <input type="hidden" name="id" id="id" value="{{$l->id}}">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls"><h3>Header Ad-Banner</h3><p>Width 770pixels, Height 90pixels</p>
                                                            <input type="file" name="image" id="image" value="{{$l->image}}" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls"><h3>2nd Ad-Banner</h3><p>Width 950pixels, Height 150pixels</p>
                                                            <input type="file" name="image1" id="image1" value="{{$l->image1}}" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls"><h3>3rd Ad-Banner</h3><p>Width 300pixels, Height 300pixels</p>
                                                            <input type="file" name="image2" id="image2" value="{{$l->image2}}" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls"><h3>4th Ad-Banner</h3><p>Width 300pixels, Height 300pixels</p>
                                                            <input type="file" name="image3" id="image3" value="{{$l->image3}}" class="form-control" >
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




 