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
            <h1 class="m-0 text-dark">Slider </h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

        <div class="row">
    <!-- Main content -->
<div class="col-12">
            <div class="card ">
              <div class="card-header">
                  <!-- SEARCH FORM -->
   
                        <div class="card-tools">
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-gl">
              ADD
                </button>                         

                  <!-- <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div> -->
                </div>

              </div>
              <div class="card-body"style="margin-left: 46px;">
                <div class="row">
                @foreach($slider as $slider)
                  <div class="col-1-5 ">
                   
                     <img id="admin"src="data:image/png;base64,{{$slider->slider}}">
                     <td>
     <div class="col-sm-2"id="sb">
<button id="buttonn"type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-kk{{$slider->id}}">
  <i class="fas fa-edit"></i>
            
                </button> 


<button id="buttonn"type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-sm{{$slider->id}}">
  <i class="fas fa-trash"></i>
                  </button> </div></div>

                <section class="content">
  

      
  <!-- /.modal -->

  <div class="modal fade" id="modal-sm{{$slider->id}}">
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
      <form action="/admin/slider/{{$slider->id}}" method="POST">
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

  <!-- /.modal -->

</section>
<section class="content">
  

      
  <!-- /.modal -->

  <div class="modal fade" id="modal-kk{{$slider->id}}">
    <div class="modal-dialog modal-kk">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Slider Edit</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="container"style="padding: 20px;">
    <div class="col-md-10 mx-auto">
      <form method="post" enctype="multipart/form-data" action="/admin/slider/{{$slider->id}}">
      @csrf
      {{ method_field('PATCH')}}
             <div class="form-group row">
                <div class="col-sm-6">
                    <label for="inputFirstname">Sort Order</label>
                    <input type="text" class="form-control" name="sort_order" id="inputFirstname" value="{{$slider->sort_order}}">
                </div>
                <div class="col-sm-6">
                    <!-- <input type="image" id="ime{{$slider->id}}" width="180" height="150" src="https://img.icons8.com/ios-filled/150/000000/stack-of-photos.png"/ alt="img" id="blah"> -->
<img id="ime" src="https://img.icons8.com/ios-filled/150/000000/stack-of-photos.png"/ alt="img" width="180" height="150">

                </div>
<!-- <img id="output" src="https://img.icons8.com/metro/104/000000/user-male-circle.png" width="100" height="100">

<input style="margin: 10px;"name="photo" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])"> -->
           </div>
            
            <div class="form-group row">
                                  <div class="col-sm-6">

                <label for="exampleInpuFile">File input</label>
                <div class="input-group">
                <div class="custom-file">
                     <input type="file" name="photo"  onchange="document.getElementById('ime').src = window.URL.createObjectURL(this.files[0])">
                       
                  </div>
                  </div></div></div>
                         
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save </button>
        </div>
      
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div></div></div></form>
  <!-- /.modal -->

  <!-- /.modal -->

</section>




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
 

  <!-- // add modal -->



 
   
    <!-- Main content -->
    <section class="content">
  

      
      <!-- /.modal -->

      <div class="modal fade" id="modal-gl">
        <div class="modal-dialog modal-gl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Slider Image</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="container"style="padding: 20px;">
        <div class="col-md-10 mx-auto">
          <form acton="/admin/slider" method="POST" enctype="multipart/form-data">  
          @csrf            
                <div class="form-group row">
                <div class="col-sm-6">
                        <label for="inputFirstname">Sort Order</label>
                        <input type="text" class="form-control" id="inputFirstname" name="sort_order">
                    </div>
                    <div class="col-sm-6">
                        <input type="image" id="imge" width="180" height="150" src="https://img.icons8.com/material/150/000000/stack-of-photos--v1.png"alt="img" id="blah">
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="slider" onChange="readadd(this)"class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" id="name" for="exampleInputFile"> Upload</label>
                      </div>
                      </div></div></div>
                             
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save </button>
            </div>
          
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div></div></div></form>
      <!-- /.modal -->

      <!-- /.modal -->

    </section>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
function readadd(input) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    var file = input.files[0];
    name = file.name;  
    reader.onload = function(e) {
      $('#imge').attr('src', e.target.result);
      $('#namee').text(name);
    }
    reader.readAsDataURL(input.files[0]); 
  }
}
</script>