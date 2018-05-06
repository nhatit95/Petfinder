@extends('templates.admin.master')
@section('title')
Manage messages
@endsection
@section('content')


<div class="content-wrapper">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">List of Messages</h3>
          <hr>
              @if(Session::has('msg'))
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {{ Session::get('msg') }}
                </div>
              @endif
              <p style="text-align: center;">
                <a href="{{route('admin.message.add')}}" class="addtop"><img src="assets/img/add.png" alt="" /> 
                  <button type="button" class="btn bg-green margin">Creat a new item</button>
                </a>
              </p>

        </div>
            <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Message Title</th>
          <th>From</th>
          <th>To</th>
          <th>Content</th>
          <th>Time</th>
          <!-- <th>Edit</th> -->
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>
          @foreach($oItems as $Item)
            @php
              $mess_id      = $Item->mess_id;
              $from_id      = $Item->from_id;
              $to_id        = $Item->to_id;
              $mess_title   = $Item->mess_title;
              $mess_content = $Item->mess_content;
              $create_at    = $Item->create_at;
              $urlEdit      =   route('admin.message.edit', [$mess_id]);
              $urlDel       =   route('admin.message.del', [$mess_id]);
            @endphp
          <tr>
            <td>{{$mess_title}}</td>
            @foreach($arUsers as $arUser)
              @if($from_id  == $arUser->id)
                  <td >{{$arUser->fullname}}</td>
              @endif
            @endforeach

            @foreach($arUsers as $arUser)
              @if($to_id  == $arUser->id)
                  <td >{{$arUser->fullname}}</td>
              @endif
            @endforeach

            <td>{{$mess_content}}</td>
            <td>{{$create_at}}</td>
            <!-- <td>
              <a href="{{$urlEdit}}"> <button type="button" class="btn bg-green margin">Edit</button> </a>              
            </td> -->
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