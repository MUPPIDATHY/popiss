@extends('admin.layout.master')
@section('content')
@include("admin.layout.admin-nav")
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Business </h1>
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
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

                <div class="card-tools">
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-xl">
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
                      <th>CODE</th>
                      <th>IMG</th>
                      <th>MUlTIPLE IMG</th>
                      <th>DESCRIPTION</th>
                      <TH>ADDRESS</TH>
                      <TH>CONTACT</TH>
                      <th>EMAIL</th>
                      <TH>OWNER</TH>
                      <th>OWNER IMG</th>
                      <th>ACTION</th>
                      <!-- <th>Status</th>
                      <th>Reason</th> -->
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($bus as $bus)
                    <tr>
                      <td>{{$bus->name}}</td>
                      <td>{{$bus->code}}</td>
                      <td><img id="admin"src="data:image/png;base64,{{$bus->image}}"></td>
                      <td><a href="/admin/business/{{$bus->id}}">SHOW</a></td>
                      <td>{{$bus->desription}}</td>
                      <td>{{$bus->address}},{{$bus->city}},{{$bus->state}},{{$bus->country}}</td>
                      <td>{{$bus->phone}}</td>
                      <td>{{$bus->email}}</td>
                      <td>{{$bus->owner}}</td>
                      <td><img id="admin"src="data:image/png;base64,{{$bus->ownimg}}"></td>
 <td><div class="card-tools">
<button type="button" id="button"class="btn btn-warning" data-toggle="modal" data-target="#modal-lx{{$bus->id}}">
            Edit

                </button>


                 </div></td>
<td><div class="card-tools">
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-sm{{$bus->id}}">
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

  <div class="modal fade " id="modal-lx{{$bus->id}}">
    <div class="modal-dialog modal-lx">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Business Edit</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="container"style="padding: 20px;">
    <div class="col-md-10 mx-auto">
    <form action="/admin/business/{{$bus->id}}" method="post" enctype="multipart/form-data">
                @csrf
                {{method_field('PATCH')}}
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">Company name</label>
                        <input type="text" class="form-control" name="name" id="inputFirstname" placeholder="Company name">
                    </div>
                    <div class="col-sm-3">
                            <label for="exampleInputFile">Company Image</label>
                           
<input style="margin: 10px;"name="photo" type="file" accept="image/*" onchange="document.getElementById('out').src = window.URL.createObjectURL(this.files[0])">
                      </div>
                      <img id="out" src="https://img.icons8.com/ios-filled/104/000000/company.png"width="100" height="100">

                    </div>
                  
                    <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputLastname">Owner Name</label>
                        <input type="text" name="owner" class="form-control" id="inputLastname" placeholder="Owner">
                    </div>
                    <div class="col-sm-3">
                            <label id="owner" for="exampleInputFile">Owner Image </label>
                           
<input style="margin: 10px;"name="photo" type="file" accept="image/*" onchange="document.getElementById('outt').src = window.URL.createObjectURL(this.files[0])">
                      </div>
                      <img id="outt" src="https://img.icons8.com/metro/104/000000/user-male-circle.png" width="100" height="100">

                      
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">Category</label>
                        <select name="buscat_id" id="cat" class="form-control">
                                        <option value="">Choose...</option>
                                        @foreach($buscat as $buscat)
                                        <option value="{{$buscat->id}}">{{$buscat->name}}</option>
                                        @endforeach
                         </select>
                     </div>
                    
                    <div class="col-sm-6">
                         <label for="inputAddressLine1">Description</label>
                        <textarea id="w3review" name="desription" class="form-control" name="w3review" rows="4" cols="50">
                        </textarea>
                    </div>
                  </div>
                    
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label>Contact Number</label>
                        <input type="text" name="phoneno" class="form-control" id="inputContactNumber" placeholder="Contact Number" required>
                    </div>
                     <div class="col-sm-6">
                        <label for="inputWebsite">Email</label>
                        <input type="text" name="email" class="form-control" id="inputWebsite" placeholder="Website">
                    </div>
                </div>    
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Address</label>
                        <input type="text" name="address" class="form-control" id="inputContactNumber" placeholder="Contact Number" required >
                    </div>
                     <div class="col-sm-6">
                        <label for="inputWebsite">City</label>
                        <input type="text" name="city" class="form-control" id="inputWebsite" placeholder="Website">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">State</label>
                        <input type="text" name="state" class="form-control" id="inputContactNumber" placeholder="Contact Number" required>
                    </div>
                     <div class="col-sm-6">
                        <label for="inputWebsite">Country</label>
                        <input type="text" name="country" class="form-control" id="inputWebsite" placeholder="Website">
                    </div>
                </div>     
              
                  <div class="form-group row">
                    <div class="col-sm-3">
                            <label for="exampleInputFile">File input(Multiple Image)</label>
                            <input type="file" id="file-input" multiple />


                      </div>
<div id="thumb-output"></div>
                  </div> 
            </div>         
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

  <!-- /.modal -->

</section>  

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
      <form action="/admin/business/{{$bus->id}}" method="post">
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

<!--   //modal-->



 
   
    <!-- Main content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- edit modal-->


 
   
    <!-- Main content -->
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<!-- //del modal -->


 
   
    <!-- Main content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!--   //add modal-->
 
    <!-- Main content -->
    <section class="content">
  

      
      <!-- /.modal -->

      <div class="modal fade " id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Business</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="container"style="padding: 20px;">
        <div class="col-md-10 mx-auto">
          <form action="/admin/business" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">Company name</label>
                        <input type="text" class="form-control" name="name" id="inputFirstname" placeholder="Company name">
                    </div>
                    <div class="col-sm-3">
                            <label for="exampleInputFile">Company Image</label>
                           
<input style="margin: 10px;"name="image" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                      </div>
                      <img id="output" src="https://img.icons8.com/ios-filled/104/000000/company.png"width="100" height="100">

                    </div>
                  
                    <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputLastname">Owner Name</label>
                        <input type="text" name="owner" class="form-control" id="inputLastname" placeholder="Owner">
                    </div>
                    <div class="col-sm-3">
                            <label id="owner" for="exampleInputFile">Owner Image </label>
                           
<input style="margin: 10px;"name="ownimage" type="file" accept="image/*" onchange="document.getElementById('outpt').src = window.URL.createObjectURL(this.files[0])">
                      </div>
                      <img id="outpt" src="https://img.icons8.com/metro/104/000000/user-male-circle.png" width="100" height="100">

                      
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">Category</label>
                        <select name="buscat_id" id="cat" class="form-control">
                                        <option value="">Choose...</option>
                                        @foreach($buscat as $buscat)
                                        <option value="{{$buscat->id}}">{{$buscat->name}}</option>
                                        @endforeach
                         </select>
                     </div>
                    
                    <div class="col-sm-6">
                         <label for="inputAddressLine1">Description</label>
                        <textarea id="w3review" name="desription" class="form-control" name="w3review" rows="4" cols="50">
                        </textarea>
                    </div>
                  </div>
                    
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label>Contact Number</label>
                        <input type="text" name="phoneno" class="form-control" id="inputContactNumber" placeholder="Contact Number" required>
                    </div>
                     <div class="col-sm-6">
                        <label for="inputWebsite">Email</label>
                        <input type="text" name="email" class="form-control" id="inputWebsite" placeholder="Website">
                    </div>
                </div>    
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Address</label>
                        <input type="text" name="address" class="form-control" id="inputContactNumber" placeholder="Contact Number" required >
                    </div>
                     <div class="col-sm-6">
                        <label for="inputWebsite">City</label>
                        <input type="text" name="city" class="form-control" id="inputWebsite" placeholder="Website">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">State</label>
                        <input type="text" name="state" class="form-control" id="inputContactNumber" placeholder="Contact Number" required>
                    </div>
                     <div class="col-sm-6">
                        <label for="inputWebsite">Country</label>
                        <input type="text" name="country" class="form-control" id="inputWebsite" placeholder="Website">
                    </div>
                </div>     
              
                  <div class="form-group row">
                    <div class="col-sm-3">
                            <label for="exampleInputFile">File input(Multiple Image)</label>
                            <input type="file" name="mulimage" id="file-input" multiple />


                      </div>
<div id="thumb-output"></div>
                  </div> 
            </div>         
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




 @stop


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
function readURL(input) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    var file = input.files[0];
    name = file.name;  
    reader.onload = function(e) {
     // $('#img').attr('src', e.target.result);
      $('#name').text(name);
    }
    reader.readAsDataURL(input.files[0]); 
  }
}
function readadd(input) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    var file = input.files[0];
    name = file.name;  
    reader.onload = function(e) {
     // $('#imge').attr('src', e.target.result);
      $('#namee').text(name);
    }
    reader.readAsDataURL(input.files[0]); 
  }
}
function red(input) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    var file = input.files[0];
    name = file.name;  
    reader.onload = function(e) {
     // $('#img').attr('src', e.target.result);
      $('#na').text(name);
    }
    reader.readAsDataURL(input.files[0]); 
  }
}
function read(input) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    var file = input.files[0];
    name = file.name;  
    reader.onload = function(e) {
     // $('#imge').attr('src', e.target.result);
      $('#nam').text(name);
    }
    reader.readAsDataURL(input.files[0]); 
  }
}
</script>