
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
              <form class="form-horizontal" method="POST" action="{{ route('register') }}">
              @csrf
                <div class="card-body">
                   <div class="form-group row">
                    <label for="inputname3" class="col-sm-2 col-form-label">User Name</label>
                    <div class="col-sm-10">
                  <input type="text" class="form-control @error('name') is-invalid @enderror"  placeholder="Username" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

</div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="inputEmail3" placeholder="Email">
                      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                       </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="inputPassword3" placeholder="Password">
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                            <label for="password-confirm" class="col-md-2 col-form-label ">{{ __('Confirm Password') }}</label>

                            <div class="col-md-10">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"placeholder="Confirm Password">
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