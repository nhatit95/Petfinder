@extends('templates.admin.master')
@section('title')
Thêm User
@endsection
@section('content')
	<div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="content-wrapper">
                <div class="box-header">
                  <h3 class="box-title">Create a new account</h3>                     

                </div>
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
                    <form role="form" action="{{ route('admin.user.add') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                              <label for="">Username</label>
                              <input type="text" class="form-control" required="true" name="username" id="username" placeholder="Enter username">
                            </div>

                            <div class="form-group">
                              <label for="">Full of name</label>
                              <input type="text" class="form-control" required="true" name="fullname" id="fullname" placeholder="Enter fullname">
                            </div>

                            <div class="form-group">
                              <label for="">Password</label>
                              <input type="password" class="form-control" required="true" name="password" id="password" placeholder="Enter password">
                            </div>

                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control select2" name="role" id="role" required="true" style="width: 100%;">
                                  @foreach($arRoles as $arRole)
                                    <option selected="false" value="{{$arRole->role_id}}">{{$arRole->role_name}}</option>
                                  @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" required="true" name="email" id="email" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label>Phone number:</label>

                                <input type="tel" required="true" pattern="^[0-9-+s()]*$" name="phone_number" id="phone_number" class="form-control" placeholder="Enter your phone number">
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control select2" name="gender" id="gender" required="true" style="width: 100%;">
                                  <option selected="selected">Man</option>
                                  <option>Women</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Date masks:</label>

                                <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="date" id="birthday" name="birthday" class="form-control" placeholder ="'dd/mm/yyyy'" data-mask>
                                </div>
                                <!-- /.input group -->
                              </div>
                            
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" id="status" required="true" style="width: 100%;">
                                  <option selected="selected">Actived</option>
                                  <option>Blocked</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Avatar</label>
                                <input type="file" name="hinhanh" required="true" />
                            </div>
                            </div>
                          <!-- /.box-body -->

                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>

                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>


    </div>
@stop