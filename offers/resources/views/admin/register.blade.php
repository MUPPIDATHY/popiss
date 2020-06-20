@extends('admin.layout.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"style="margin: 10px;">
    <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
         
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

            <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-info"id="login">
              <div class="card-header">
                <h3 class="card-title">Register Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                   <div class="form-group row">
                    <label for="inputname3" class="col-sm-2 col-form-label">User Name</label>
                    <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Username">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Sign Up</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
    <!-- Main content -->
    
    <!-- /.content -->
  @stop