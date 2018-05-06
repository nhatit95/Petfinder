@extends('templates.admin.master')
@section('title')
Manage roles
@endsection
@section('content')


<div class="content-wrapper">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">List of Role</h3>
              @if(Session::has('msg'))
                  <p class="category success">{{ Session::get('msg') }}</p>
              @endif
              <p style="text-align: center;">
                <a href="{{route('admin.role.add')}}" class="addtop"><img src="assets/img/add.png" alt="" /> 
                  <button type="button" class="btn bg-green margin">Creat a new item</button>
                </a>
              </p>

        </div>
            <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Role ID/th>
          <th>Role name</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>
          @foreach($oItems as $Item)
            @php
              $role_id   = $Item->role_id;
              $role_name = $Item->role_name;;
              $urlEdit   =   route('admin.role.edit', [$role_id]);
              $urlDel    =   route('admin.role.del', [$role_id]);
            @endphp
          <tr>
            <td>{{$role_id}}</td>
            <td>{{$role_name}}</td>
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