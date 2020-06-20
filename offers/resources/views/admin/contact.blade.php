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
            <h1 class="m-0 text-dark">Contact </h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              
                   

                  <!-- <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div> -->
                
              
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
                      <th>Email</th>
                      <th>Phone No</th>
                      <th>Subject</th>
                      <th>Message</th>
                      <!-- <th>Status</th>
                      <th>Reason</th> -->
                    
                      <!-- <th>Status</th>
                      <th>Reason</th> -->
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($contact as $contact)
                    <tr>
                      <td>{{$contact->name}}</td>
                      <td>{{$contact->email}}</td>
                      <td>{{$contact->phoneno}}</td>
                      <td>{{$contact->subject}}</td>
                      <td>{{$contact->message}}</td>

                    </tr>
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
