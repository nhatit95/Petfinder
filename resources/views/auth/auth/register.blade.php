@extends('templates.petfinder.master')
@section('title')
Register
@endsection
@section('content')
	<div class="content-wrapper1">
        <div class="">
        <div class="">
            <div class="card">
                <div class="content">
                    @if(Session::has('msg'))
                        <p class="category success">{{ Session::get('msg') }}</p>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="singin-box">
                      <div class="login-logo">
                        <a href="{{ route('auth.auth.register') }}"><b>REGISTER</b> Petfinder</a>
                      </div>
                      <!-- /.login-logo -->
                      <div class="login-box-body">
                        <p class="login-box-msg">Sign up to become a member</p>

                       <form role="form" action="{{ route('auth.auth.register') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                          <div class="box-body">
                              <div class="form-group has-feedback">
                                <label for="">Username</label>
                                <input type="text" class="form-control" required="true" name="username" id="username" placeholder="Enter username">
                              </div>

                              <div class="form-group has-feedback">
                                <label for="">Full of name</label>
                                <input type="text" class="form-control" required="true" name="fullname" id="fullname" placeholder="Enter fullname">
                              </div>

                              <div class="form-group has-feedback">
                                <label for="">Password</label>
                                <input type="password" class="form-control" required="true" name="password" id="password" placeholder="Enter password">
                              </div>

                              <div class="form-group has-feedback">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" required="true" name="email" id="email" placeholder="Enter email">
                              </div>

                              <div class="form-group">
                                <label>Phone number</label>

                                <input type="tel" required="true" pattern="^[0-9-+s()]*$" name="phone_number" id="phone_number" style="border: 1px solid #3c8dbc; width: 100%; font-size: 18px !important height: 36px !important; padding: 10px; margin-left: 10px;" placeholder="Enter your phone number">
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="gender" id="gender" required="true" style="border: 1px solid #3c8dbc; width: 100%; font-size: 18px !important; height: 40px !important; margin-left: 10px;">
                                  <option selected="selected">Man</option>
                                  <option>Woman</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Birthday</label>

                                <div class="form-group">                                
                                  <input style="border: 1px solid #3c8dbc; width: 100%; font-size: 18px !important; height: 36px !important; padding: 10px; margin-left: 10px;" required="true" type="date" id="birthday" name="birthday" class="form-control" >
                                </div>
                                <!-- /.input group -->
                              </div>
                              

                              <div class="form-group">
                                  <label>Avatar</label>
                                  <input type="file" name="hinhanh" required="true" />
                              </div>
                              </div>
                            <!-- /.box-body -->

                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>

                            <button type="button" class="btn btn-primary btn-block btn-flat">
                              <a href="{{ route('auth.auth.login') }}">Comeback to login</a><br>
                            </button>

                           
                            <input  type="hidden" class="form-control"  name="role" id="role" value="2">
                            <input  type="hidden" class="form-control"  name="status" id="status" value="Actived">

                          <div class="clearfix"></div>


                      </form>

                              
                        <!-- /.social-auth-links -->

                        
                        

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