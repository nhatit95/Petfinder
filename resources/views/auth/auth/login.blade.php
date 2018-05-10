@extends('templates.petfinder.master')
@section('title')
Login
@endsection
@section('content')
	<div class="content-wrapper1">
        <div class="">
        <div class="">
            <div class="card">
                <div class="content">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="login-box">
                      <div class="login-logo">
                        <a href="{{ route('auth.auth.login') }}"><b>LOGIN</b> Petfinder</a>
                      </div>
                      <!-- /.login-logo -->
                      <div class="login-box-body">
                        <p class="login-box-msg">Sign in to start your session</p>

                          <form action="{{ route('auth.auth.login') }}" method="post" enctype="multipart/form-data">
                          {{csrf_field()}}
                          <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                          </div>
                          <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                          </div>
                          <div class="row">
                            <div class="col-xs-8">
                              <div class="checkbox icheck">
                                <label>
                                  <input type="checkbox"> Remember Me
                                </label>
                              </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                            </div>
                            <!-- /.col -->
                          </div>
                        </form>

                        <!-- /.social-auth-links -->

                        <a href="#">I forgot my password</a><br>
                        <a href="{{ route('auth.auth.register') }}" class="text-center">Register a new membership</a>

                      </div>
                      <!-- /.login-box-body -->
                    </div>

                    @if(Session::get('msg') != null)
                        <p class="category success" style="text-align: center; color: red; padding: 50px">{{ Session::get('msg') }}</p>
                    @endif
                </div>
            </div>
        </div>
        
        </div>   
    </div>
@stop