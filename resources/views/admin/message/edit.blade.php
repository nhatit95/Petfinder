@extends('templates.admin.master')
@section('title')
Update information
@endsection
@section('content')
	<div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="content-wrapper">
                <div class="box-header">
                  <h3 class="box-title">Update infomation</h3>                     

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
                    <form role="form" action="{{ route('admin.user.edit', ['id' => $oItem->id]) }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                              <label for="">Username</label>
                              <input type="text" class="form-control" required="true" name="username" id="username" value="{{$oItem->username}}">
                            </div>

                            <div class="form-group">
                              <label for="">Full of name</label>
                              <input type="text" class="form-control" required="true" name="fullname" id="fullname" value="{{$oItem->fullname}}">
                            </div>

                            <div class="form-group">
                              <label for="" style="color: red">New Password</label>
                              <input type="password" class="form-control"  name="new_password" id="new_password" placeholder="Enter password">
                            </div>


                            <!-- <div class="form-group">
                              <label for="">Role</label>
                              <input type="text" class="form-control" id="role" placeholder="Enter role">
                            </div> -->

                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control select2" name="role" id="role" required="true" style="width: 100%;">
                                  @foreach($arRoles as $arRole)
                                    @if($oItem->role_id == $arRole->role_id)
                                        <option selected="selected" value="{{$arRole->role_id}}">{{$arRole->role_name}}</option>
                                    @else
                                        <option value="{{$arRole->role_id}}">{{$arRole->role_name}}</option>
                                    @endif
                                  @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" required="true" name="email" id="email" value="{{$oItem->email}}"/>
                            </div>

                            <div class="form-group">
                                <label>Phone number:</label>

                                <input type="tel" required="true" pattern="^[0-9-+s()]*$" name="phone_number" id="phone_number" class="form-control" value="{{$oItem->phone_number}}">
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control select2" name="gender" id="gender" required="true" style="width: 100%;">
                                  <option selected="selected">Man</option>
                                  <option>Woman</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Date masks:</label>

                                <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="date" id="birthday" name="birthday" class="form-control" value="{{$oItem->birthday}}" data-mask>
                                </div>
                                <!-- /.input group -->
                              </div>
                            
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" id="status" required="true" style="width: 100%;">
                                  @if($oItem->status == 'Actived')
                                    <option selected="true">Actived</option>
                                    <option >Blocked</option>
                                  @else
                                    <option >Actived</option>
                                    <option selected="true">Blocked</option>
                                  @endif

                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Choose a new picture</label>
                                <input type="file" name="newPicture" placeholder="Choose your picture" value="Choose your picture" />
                            </div>
                            <div class="form-group">
                                <label>Your current picture</label> <br />
                                <img src="{{ asset('storage/app/files/'.$oItem->avatar) }}" name="oldPicture" width="30%" height="30%">
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