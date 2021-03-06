@extends('templates.admin.master')
@section('title')
Manage Events
@endsection
@section('content')


<div class="content-wrapper">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">List of Events</h3>
          <hr>
              @if(Session::has('msg'))
                  <p class="alert alert-success">{{ Session::get('msg') }}</p>
              @endif
              <p style="text-align: center;">
                <a href="{{route('admin.event.add')}}" class="addtop"><img src="assets/img/add.png" alt="" /> 
                  <button type="button" class="btn bg-green margin">Creat a new item</button>
                </a>
              </p>

        </div>
            <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Event ID</th>
          <th>Event name</th>
          <th>Category</th>
          <th>Host</th>
          <th>Time</th>
          <th>Avatar</th>
          <th>Location</th>
          <th>Price</th>
          <!-- <th>Content</th> -->
          <th>Status</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>
          @foreach($oItems as $Item)
            @php
              $event_id   = $Item->event_id;
              $event_name = $Item->event_name;
              $cat_id     = $Item->cat_id;
              $user_id    = $Item->user_id;
              $time       = $Item->time;
              $avatar     = $Item->avatar;
              $location   = $Item->location;
              $price      = $Item->price;
              $content    = $Item->content;
              $status     = $Item->status;
              $picUrl     = asset('/storage/app/files/'.$avatar);
              $nopicUrl   = asset('/storage/app/files/nopic.jpg');
              $urlEdit    = route('admin.event.edit', [$event_id]);
              $urlDel     = route('admin.event.del', [$event_id]);
            @endphp
          <tr>
            <td>{{$event_id}}</td>
            <td>{{$event_name}}</td>
            @foreach($arCats as $arCat)
              @if($cat_id  == $arCat->cat_id)
                  <td >{{$arCat->cat_name}}</td>
              @endif
            @endforeach
            @foreach($arUsers as $arUser)
              @if($user_id  == $arUser->id)
                  <td >{{$arUser->username}}</td>
              @endif
            @endforeach

            <td>{{$time}}</td>
            <td>
                @if($avatar == '')
                    <img src="{{$nopicUrl}}" alt="" height="80px" width="80px" />
                @else
                    <img src="{{$picUrl}}" alt="" height="80px" width="80px" />
                @endif
            </td>
            <td>{{$location}}</td>
            <td>{{$price}}</td>
            <!-- <td>{{$content}}</td> -->
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