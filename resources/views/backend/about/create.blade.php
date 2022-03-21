@extends('backend.layout.app')
@section('content')





    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            
            <div class="content-body">
                <!-- Simple Validation start -->
                <section class="simple-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                
                                <div class="card-content">
                                    <div class="card-body">
                                        
                                        <form class="logoForm" method="post" enctype="multipart/form-data" action="{{url('/')}}/about/create">

                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls"><h3>About Title</h3>
                                                            <input type="text" name="title" id="title" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>About Description</label>
                                                        <div class="controls">
                                                            <textarea name="description" id="description"></textarea>

                                                             
                                                        </div>
                                                    </div>
                                                </div> 

                                                
                                                
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                            <a href="{{url('/')}}/about/index" class="btn btn-primary">Go To logo Page</a>
                                        </form>

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

<script>
$(".logoForm").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);

    var formData = new FormData(this);
    $.ajax({
            type: "POST",
            url: "{{url('/')}}/about/create",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
           success: function(data)
           {
            $(".logoForm")[0].reset();
             swal("Success!", "Your request is successfully sent !!", "success");
           }
         });

    
});

</script>

<script>CKEDITOR.replace( 'description' );</script>




        @endsection
