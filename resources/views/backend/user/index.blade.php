@extends('backend.layout.app')


@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">User</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">User
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="content-body">
                <!-- Basic Tables start -->
            
                <!-- Basic Tables end -->

                <!--  Inverse table start -->
                <div class="row" id="table-inverse">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">User</h4>
                            </div>
                            <div class="card-content">
                                
                                <div class="table-responsive">
                                    <table class="table  mytable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>image</th>
                                                
                                                 <th>Status</th>

                                                 <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                    </table>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inverse table end -->


            </div>
        </div>
    </div>
    <!-- END: Content-->

    @endsection



    @section('js')

<script>
    

datatablefetch();

function datatablefetch()
{
        var dataTable = $('.mytable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax:{
                url: "{{url('/')}}/user"
            },
            columns: [
               

                {
                    data:'id',
                    name:'id'
                },

                {
                    data:'name',
                    name:'name'
                },

                

                  {
                    data:'email',
                    name:'email'
                },

                  {
                    data:'phone',
                    name:'phone'
                },

               

                


                {
    render: function(data, type, full, meta){
     return "<img src={{ URL::to('/') }}/images/" + full.image + " width='70' class='img-thumbnail' />";
    },
    orderable: false
   },




            { sortable: false, "render": function(data, type, full, meta) {
                var status = full.status
                if(status==1)
                {
                  return '<span class="badge badge-pill badge-success" style="margin: 5px;">Active</span>';
                }
                if(status==0){
                  return '<span class="badge badge-pill badge-danger" style="margin: 5px;">Inactive</span>';
                }
                
              }
            },



              { sortable: false, "render": function(data, type, full, meta) {
                                
         return '<a class="btn   btn-success" href="<?php echo url('/');?>/edit/'+full.id+'" style="margin: 5px;">Edit</a><a class="btn btn-danger" href="<?php echo url('/');?>/delete/'+full.id+'" style="margin: 5px;">Delete</a>';

               
              }

            },



             

                 
               
            ]
        });
}
</script>



        @endsection