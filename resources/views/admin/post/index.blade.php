@extends('templates.admin.master')
@section('title')
Manage Posts
@endsection
@section('content')


<div class="content-wrapper">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">List of Posts</h3>
          <hr>
              @if(Session::has('msg'))
                  <p class="alert alert-success">{{ Session::get('msg') }}</p>
              @endif
              <p style="text-align: center;">
                <a href="{{route('admin.post.add')}}" class="addtop"><img src="assets/img/add.png" alt="" /> 
                  <button type="button" class="btn bg-green margin">Creat a new item</button>
                </a>
              </p>

        </div>
            <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Post ID</th>
          <th>Post Name</th>
          <th>Category</th>
          <th>Author</th>
          <th>Discription</th>
          <th>Avatar</th>
          <th>Create at</th>
          <th>Update at</th>
          <th>Status</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>
          @foreach($oItems as $Item)
            @php
              $post_id     = $Item->post_id;
              $post_name   = $Item->post_name;
              $cat_id      = $Item->cat_id;
              $user_id     = $Item->user_id;
              $discription = $Item->discription;
              $avatar      = $Item->avatar;
              $create_at   = $Item->create_at;
              $update_at   = $Item->update_at;              
              $status      = $Item->status;
              $picUrl      = asset('/storage/app/files/'.$avatar);
              $nopicUrl    = asset('/storage/app/files/nopic.jpg');
              $urlEdit     = route('admin.post.edit', [$post_id]);
              $urlDel      = route('admin.post.del', [$post_id]);
            @endphp
          <tr>
            <td>{{$post_id}}</td>
            <td>{{$post_name}}</td>
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

            <td>{{$discription}}</td>
            <td>
                @if($avatar == '')
                    <img src="{{$nopicUrl}}" alt="" height="80px" width="80px" />
                @else
                    <img src="{{$picUrl}}" alt="" height="80px" width="80px" />
                @endif
            </td>
            <td>{{$create_at}}</td>
            <td>{{$update_at}}</td>
            <td>{{$status}}</td>

            <td >
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