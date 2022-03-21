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
                        <div class="col-6">
                            <h3 class="content-header-title float-left mb-0"><a href="{{url('/')}}/news/create" class="btn   btn-success">Create News</a></h3>

                           
  <div id="contact"><button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#contact-modal">Show Contact Form</button></div>



<div id="contact-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <form id="newsForm" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="modal-body">                
                    <div class="form-group">
                        <label for="gallery">Gallery</label>
                        <input type="file" name="gallery" id="gallery" class="form-control">
                    </div>
                    
                                     
                </div>
                <div class="modal-footer">                  
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
  
  

                            
                        </div>
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

                                            <thead>
                                                    
                                                    <tr>
                                                        
                                                        <h3>hh</h3><br>
                                                        <h3>hkjl</h3><br>
                                                        
                                                        
                                                    </tr>
                                                 
                                                    
                                                </thead>




                                            <table class="table zero-configuration mytable">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>News Image</th>
                                                        
                                                        <th>Action</th>
                                                      
                                                        
                                                    </tr>
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

<script>
$(".newsForm").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);

    var formData = new FormData(this);
    $.ajax({
            type: "POST",
            url: "{{url('/')}}/news/store",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
           success: function(data)
           {
            $(".newsForm")[0].reset();
             swal("Success!", "Your request is successfully sent !!", "success");
           }
         });

    
});

</script>

<script>
    

    $(document).ready(function(){   
    $("#contactForm").submit(function(event){
        submitForm();
        return false;
    });
});
</script>

@endsection


