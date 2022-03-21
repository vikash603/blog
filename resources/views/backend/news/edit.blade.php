@extends('backend.layout.app');
@section('content');
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Form Validation</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a>
                                    </li>
                                    <li class="breadcrumb-item active">Form Validation
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                

                <!-- Input Validation start -->
                <section class="input-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Inputs Validation</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">



                                       @foreach($data as $d)
                                       <form method="post" action="{{url('/')}}/news/{{$d->id}}" enctype="multipart/form-data">
                                           @method('put')
                                            @csrf

                                            <input type="hidden" name="id" value="{{$d->id}}">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Select Category</label>
                                                        <div class="controls">

                                                              <fieldset class="form-group">
                                                    <select class="custom-select" name="category" id="category">


                                                        

                                                       @foreach($category as $c)
  <option value="{{$c->id}}" <?php if($c->id==$d->category_id){echo 'selected';} ?> >{{$c->category}}</option>
  @endforeach
                                                    </select>
                                                </fieldset>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Select Sub-Category</label>
                                                        <div class="controls">

                                                              <fieldset class="form-group">
                                                    <select class="custom-select" name="subcategory" id="subcategory">
                                                        
                                                       @foreach($subcategory as $sub)
                                                        <option value="{{$sub->category_id}}" <?php if ($sub->id==$d->category_id){echo 'selected';}?>>{{$sub->subcategory}}</option>
                                                       @endforeach
                                                    </select>
                                                </fieldset>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Select News Type</label>
                                                        <div class="controls">

                                                              <fieldset class="form-group">
                                                    <select class="custom-select" name="newstype" id="newstype">
                                                       @foreach ($newstype as $n)
                                                        <option value="{{$n->id}}" <?php if ($n->id==$d->id){echo 'selected';}?>>{{$n->newstype}}</option>
                                                        @endforeach
                                                        
                                                        
                                                    </select>
                                                </fieldset>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                    <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>News Publisher Name</label>
                                                        <div class="controls">
                                                            <input type="text" name="author" id="author" value="{{$d->author}}" class="form-control"placeholder="News Publisher Name" >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>News Tags</label>
                                                        <div class="controls">
                                                            <input type="text" name="tags" id="tags" value="{{$d->tags}}" class="form-control"placeholder="News Tags" data-role="tagsinput">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Image Alt</label>
                                                        <div class="controls">
                                                            <input type="text" name="alt" id="alt" value="{{$d->alt}}" class="form-control"placeholder="Image Alt Tags" >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Url Slug</label>
                                                        <div class="controls">
                                                            <input type="text" name="slug" id="slug" value="{{$d->slug}}" class="form-control"placeholder="News Tags" >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>News Title</label>
                                                        <div class="controls">
                                                            <input type="text" name="title" id="title" value="{{$d->title}}" class="form-control"placeholder="News Title">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Youtub Url</label>
                                                        <div class="controls">
                                                            <input type="text" name="youtube" id="youtube" value="{{$d->youtube}}" class="form-control" data-validation-regex-regex="^(http(s)?:\/\/)?(www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$" data-validation-regex-message="Must be a valid url" placeholder="Enter valid url">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>News Image</label>
                                                        <div class="controls">
                                                            <input type="file" name="image" id="image" value="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div> 

                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>News Description</label>
                                                        <div class="controls">
                                                            <textarea name="description" id="description" class="form-control">{{$d->description}}</textarea>
                                                        </div>
                                                    </div>
                                                </div> 




                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
    @endsection
@section('js')
    <script>CKEDITOR.replace( 'description' );</script>
    @endsection

