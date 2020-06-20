@extends('admin.layout.master')
@section('content')
@include("admin.layout.admin-nav")
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Categories </h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" id="srch" onkeyup="search()" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
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
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 590px;
    min-height: 100%;
    /* overflow-x: hidden; */
    overflow-y: scroll;
    overflow: auto;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>NAME</th>
                      <th>IMAGE</th>
                      <th>ACTION</th>
                      <!-- <th>Status</th>
                      <th>Reason</th> -->
                    
                      <!-- <th>Status</th>
                      <th>Reason</th> -->
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($buscat as $buscat)
                    <tr>
                      <td>{{$buscat->name}}</td>
                      <td><img id="admin"src="data:image/png;base64,{{$buscat->image}}"></td>
                     
 <td><div class="card-tools">
<button type="button"id="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-kk{{$buscat->id}}">
             EDIT
                </button>   

<button type="button"id="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-sm{{$buscat->id}}">
              DELETE
                </button> 
                                             
                  <!-- <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div> -->
                </div></td>
                    </tr>

                    <section class="content">
  

      
  <!-- /.modal -->

  <div class="modal fade" id="modal-kk{{$buscat->id}}">
    <div class="modal-dialog modal-kk">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Business category Edit</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="container"style="padding: 20px;">
    <div class="col-md-10 mx-auto">
      <form action="/admin/buscat/{{$buscat->id}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('PATCH')}}
             <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">Category Name</label>
                        <input type="text" name="name" class="form-control" id="inputFirstname" placeholder="Business Category">
                    </div>
               <div class="col-sm-6">
                        <input type="image" id="imge" width="180" height="150" src="https://img.icons8.com/ios-filled/150/000000/company.png" alt="img" id="blah">
                    </div></div>              
                <div class="form-group row">
                                      <div class="col-sm-6">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" onChange="readadd(this)"class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" id="namee" for="exampleInputFile"> Upload</label>
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

</section>
<section class="content">
  

      
  <!-- /.modal -->

  <div class="modal fade" id="modal-sm{{$buscat->id}}">
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
      <form action="/admin/buscat/{{$buscat->id}}" method="post">
            @csrf
            {{method_field('DELETE')}}

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



                    @endforeach
                    
                        
                    
                    
                   
                   
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<!--  //modal edit -->
   <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!--   // add modal-->


 
   
    <!-- Main content -->
    <section class="content">
  

      
      <!-- /.modal -->

      <div class="modal fade" id="modal-gl">
        <div class="modal-dialog modal-gl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Business Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="container"style="padding: 20px;">
        <div class="col-md-10 mx-auto">
          <form action="/admin/buscat" method="post" enctype="multipart/form-data">
                @csrf
                 <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">Category Name</label>
                        <input type="text" name="name" class="form-control" id="inputFirstname" placeholder="Business Category">
                    </div>
               <div class="col-sm-6">
                        <input type="image" id="imge" width="180" height="150" src="https://img.icons8.com/ios-filled/150/000000/company.png" alt="img" id="blah">
                    </div></div>              
                <div class="form-group row">
                                      <div class="col-sm-6">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" onChange="readadd(this)"class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" id="namee" for="exampleInputFile"> Upload</label>
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
  
<!-- //delete modal-->



 
   
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
function search(){
    var query = $("#srch").val();
    $.ajax({
      url:"/buscatsrch",
      method:'GET',
      data:{query:query},
      dataType:'json',
      success:function(send)
      {
        $('tbody').html(send);
      }
    })

}

</script>