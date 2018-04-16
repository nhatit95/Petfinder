@extends('templates.admin.master')
@section('title')
Quản lý người dùng
@endsection
@section('content')


<div class="content-wrapper">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">List of Account</h3>
              @if(Session::has('msg'))
                  <p class="category success">{{ Session::get('msg') }}</p>
              @endif
              <p style="text-align: center;">
                <a href="{{route('admin.user.add')}}" class="addtop"><img src="assets/img/add.png" alt="" /> 
                  <button type="button" class="btn bg-green margin">Creat a new item</button>
                </a>
              </p>

        </div>
            <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>User name</th>
          <th>Role</th>
          <th>Email</th>
          <th>Birthday</th>
          <th>Phone number</th>
          <th>Avatar</th>
          <th>Gender</th>
          <th>Status</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>
          @foreach($oItems as $Item)
            @php
              $username     = $Item->username;
              $role         = $Item->role;
              $email        = $Item->email;
              $birthday     = $Item->birthday;
              $phone_number = $Item->phone_number;
              $avartar      = $Item->avartar;
              $gender       = $Item->gender;
              $status       = $Item->status;
              $user_id      = $Item->id;
              $picUrl         =   asset('/storage/app/files/'.$avartar);
              $nopicUrl       =   asset('/storage/app/files/nopic.jpg');
              $urlEdit        =   route('admin.user.edit', [$user_id]);
              $urlDel         =   route('admin.user.del', [$user_id]);
            @endphp
          <tr>
            <td>{{$username}}</td>
            <td>{{$role}}</td>
            <td>{{$email}}</td>
            <td>{{$birthday}}</td>
            <td>{{$phone_number}}</td>
            <td>
                @if($avartar == '')
                    <img src="{{$nopicUrl}}" alt="" height="80px" width="100px" />
                @else
                    <img src="{{$picUrl}}" alt="" height="80px" width="100px" />
                @endif
            </td>
            <td>{{$gender}}</td>
            <td>{{$status}}</td>
            <td>
              <a href="{{$urlEdit}}"> <button type="button" class="btn bg-green margin">Edit</button> </a>              
            </td>
            <td>
              <a href="{{$urlDel}}"> <button type="button" class="btn bg-red margin">Del</button> </a>
            </td>
          </tr>
          @endforeach
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
</div>
@stop