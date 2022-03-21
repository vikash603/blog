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
                        
                    </div>
                </div>
               
            </div>
            <div class="content-body">
               

                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <h3><a href="{{url('/')}}/sliderads/create" class="btn btn-primary">Add slider Ads</a></h3>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Slider Ads</th>
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>

                                                <thead>
                                                    @foreach($slider as $l)
                                                    <tr>
                                                        <th>Id</th>
                                                        <th><img src="{{url('/')}}/images/{{$l->image}}" alt="Girl in a jacket" style="width: 20%;
    height: 20%;"></th>
                                                     
                                                        <th><a href="{{url('/')}}/sliderads/edit/{{$l->id}}" class="btn btn-primary">Edit</a> <a href="{{url('/')}}/sliderads/delete/{{$l->id}}" class="btn btn-danger" style="margin-top: 3px;">Delete</a></th>
                                                        
                                                    </tr>
                                                    @endforeach
                                                </thead>
                                              
                                                
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>





@endsection

@section('js')







        @endsection
