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
                                            <table class="table zero-configuration mytable">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Category Name</th>
                                                        <th>Sub Category Name</th>
                                                        <th>News Publisher Name</th>
                                                        <th>News Title</th>
                                                        <th>News Image</th>
                                                        
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                        <th>Add Galley</th>
                                                        <th>Button</th>
                                                        
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
                url: "{{url('/')}}/news"
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
                    data:'subcategory',
                    name:'subcategory'
                },

                {
                    data:'author',
                    name:'author'
                },

                {
                    data:'title',
                    name:'title'
                },

                 {
                    data:'image',
                    name:'image'
                },

                 {
                    data:'created_at',
                    name:'created_at'
                },

                
                

               { sortable: false, "render": function(data, type, full, meta) {
                                
         return '<a class="btn   btn-success" href="<?php echo url('/');?>/news/'+full.id+'/edit" style="margin: 5px;">Edit</a><button class="btn btn-danger" onclick="deletetr('+full.id+')" style="margin: 5px;">Delete</button>';

               
              }

            },



              { sortable: false, "render": function(data, type, full, meta) {
                                
         return '<a class="btn   btn-success" href="<?php echo url('/');?>/news/gallery/'+full.id+'" style="margin: 5px;">Gallery</a> ';

               
              }

            },


    
    
               
            ]
        });
}


function deletetr(id)
{
     $.ajax({
            type: "DELETE",
            url: "{{url('/')}}/news/"+id,
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
