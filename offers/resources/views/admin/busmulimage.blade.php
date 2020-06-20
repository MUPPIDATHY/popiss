@extends('admin.layout.master')
@section('content')
@include("admin.layout.admin-nav")
  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"style="padding: 1px;">
    <!-- Content Header (Page header) -->
   <section class="content">
      <div class="container-fluid">
        <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Business Multiple Image</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

        <div class="row">
    <!-- Main content -->
<div class="col-12">
            <div class="card ">
                            <div class="card-body"style="margin-left: 46px;">
                <div class="row">
                @foreach($bus as $bus)
                  <div class="col-1-5 ">
                   
                     <img id="admin"src="data:image/png;base64,{{$bus->mulimage}}">
                     
     <div class="col-sm-2"id="sb">



<button id="button"type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-sm{{$bus->id}}">
              DELETE
                </button> </div></div>

                <section class="content">
   

      
  <!-- /.modal -->

  <div class="modal fade" id="modal-sm{{$bus->id}}">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <strong>DELETE</strong>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="container"style="padding: 20px;">
    <div class="col-md-10 mx-auto">
      <form action="/admin/busmulimage/{{$bus->id}}" method="POST">
           @csrf
           {{ method_field('DELETE') }}
               <div class="form-group row">
                <h4 class="modal-title">Are you sure?</h4>  
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
  </div>
  <div class="modal-body">
    <p id="p">Do you really want to delete these records?</p></div>
            
           
                         
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div></div></div></form>
  <!-- /.modal -->
</section>
  <!-- /.modal -->


                  @endforeach
                </div></div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
 <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Main content -->
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!--  //edit modal-->   
<!-- Main content -->
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop
