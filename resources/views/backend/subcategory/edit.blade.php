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
                            <h2 class="btn btn-success"><a href="{{url('/')}}/subcategory" >Back To Sub-Category</a></h2>
                           
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="content-body">
               
               

                <section class="simple-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Simple Form Validation</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                      @foreach($data as $d)
                                        <form method="post" action="{{url('/')}}/subcategory/{{$d->id}}">

                                           
                                            @method('put')
                                            @csrf
                                            <input type="hidden" name="id" id="id" value="{{$d->id}}">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <select name="category_id" id="category_id" class="form-control">
                                                                @foreach($category as $c)
  <option value="{{$c->id}}" <?php if($c->id==$d->category_id){echo 'selected';} ?> >{{$c->category}}</option>
  @endforeach
  </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="subcategory" id="subcategory" value="{{$d->subcategory}}" class="form-control" placeholder="Inter Your Sub-Category" required data-validation-required-message="This Sub-Category field is required">
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

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

  @endsection
