
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
                            <h2 class="btn btn-success"><a href="{{url('/')}}/subcategory/create" >Add Sub-Category</a></h2>
                           
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="content-body">
               
               

                <!-- Scroll - horizontal and vertical table -->
                <section id="horizontal-vertical">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Scroll - horizontal and vertical</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                       
                                        <div class="table-responsive">
                                            <table class="table nowrap scroll-horizontal-vertical mytable">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Category id</th>
                                                        <th>Sub Category</th>
                                                        <th>Date $ Time</th>
                                                        
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
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

  @endsection

   @section('js')


<script>

 $( document ).ready(function() {
   datatablefetch();
});

function datatablefetch()
{
        var dataTable = $('.mytable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax:{
                url: "{{url('/')}}/subcategory"
            },
            columns: [
               

                {
                    data:'id',
                    name:'id'
                },

                {
                    data:'category_id',
                    name:'category_id'
                },

                  {
                    data:'subcategory',
                    name:'subcategory'
                },

                  {
                    data:'created_at',
                    name:'created_at'
                },

              { sortable: false, "render": function(data, type, full, meta) {
                                
         return '<a class="btn   btn-success" href="<?php echo url('/');?>/subcategory/'+full.id+'/edit" style="margin: 5px;">Edit</a><button class="btn btn-danger" onclick="deletetr('+full.id+')" style="margin: 5px;">Delete</button>';

               
              }

            },    
               
            ]
        });
}


function deletetr(id)
{
     $.ajax({
            type: "DELETE",
            url: "{{url('/')}}/subcategory/"+id,
             data: {
            "_token": "{{ csrf_token() }}",
        },
            
           success: function(data)
           {
            $('.mytable').DataTable().destroy();
datatablefetch();
             swal("Success!", "Your request is successfully deleted !!", "success");
           }
         });
}
</script>



        @endsection