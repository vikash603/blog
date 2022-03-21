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
                            <h2 class="content-header-title float-left mb-0">Form Validation</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
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
                <!-- Simple Validation start -->
                <section class="simple-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                
                                <div class="card-content">
                                    <div class="card-body">
                                        
                                        <form class="categoryForm" method="post" action="{{url('/')}}/category">

                                        	@csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="category" id="category" class="form-control" placeholder="Insert Category" required data-validation-required-message="This Insert Category field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Validation end -->

                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Zero configuration</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration mytable">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Category Name</th>
                                                        <th>Date</th>
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
$(".categoryForm").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);

    var formData = new FormData(this);
    $.ajax({
            type: "POST",
            url: "{{url('/')}}/category",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
           success: function(data)
           {
            $(".categoryForm")[0].reset();
             swal("Success!", "Your request is successfully sent !!", "success");
           }
         });

    
});

</script>



<script>
    

$( document ).ready(function() {
   datatablefetch();
});

function datatablefetch()
{
    alert();

        var dataTable = $('.mytable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax:{
                url: "{{url('/')}}/category"
            },
            columns: [
               

                {
                    data:'id',
                    name:'id'
                },

                {
                    data:'category',
                    name:'category'
                },

                 {
                    data:'created_at',
                    name:'created_at'
                },

                
                

              { sortable: false, "render": function(data, type, full, meta) {
                                
         return '<a class="btn   btn-success" href="<?php echo url('/');?>/editcategory/'+full.id+'" style="margin: 5px;">Edit</a><a class="btn btn-danger" href="<?php echo url('/');?>/delete/'+full.id+'" style="margin: 5px;">Delete</a>';

               
              }

            },
    
               
            ]
        });
}
</script>



        @endsection
