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
                                        
                                        <form class="temForm" method="post" action="{{url('/')}}/tem">

                                        	@csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="name" id="neme" class="form-control" placeholder="Insert name" required data-validation-required-message="This Insert name field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="designation" id="designation" class="form-control" placeholder="Insert designation" required data-validation-required-message="This Insert designation field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="url" name="facebook" id="facebook" class="form-control" placeholder="https://facebook.com" required data-validation-required-message="This Insert facebook field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="instagram" id="instagram" class="form-control" placeholder="https://instagram.com" required data-validation-required-message="This Insert instagram field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="twitter" id="twitter" class="form-control" placeholder="https://twitter.com" required data-validation-required-message="This Insert twitter field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="linkedin" id="linkedin" class="form-control" placeholder="https://linkedin.com" required data-validation-required-message="This Insert linkedin field is required">
                                                        </div>
                                                    </div>
                                                </div>


                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="file" name="image" id="image" class="form-control" placeholder="Insert linkedin" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                            <a href="{{url('/')}}/tem" class="btn btn-primary">Go To Tem Page</a>
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
$(".temForm").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);

    var formData = new FormData(this);
    $.ajax({
            type: "POST",
            url: "{{url('/')}}/tem",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
           success: function(data)
           {
            $(".temForm")[0].reset();
             swal("Success!", "Your request is successfully sent !!", "success");
           }
         });

    
});

</script>




        @endsection
