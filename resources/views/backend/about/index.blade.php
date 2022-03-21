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
                                        
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>

                                                <thead>
                                                    @foreach($about as $a)
                                                    <tr>
                                                        
                                                        <th>{{$a->title}}</th>
                                                      <th>{{$a->description}}</th>
                                                        <th><a href="{{url('/')}}/about/edit/{{$a->id}}" class="btn btn-primary">Edit</a></th>
                                                        
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
