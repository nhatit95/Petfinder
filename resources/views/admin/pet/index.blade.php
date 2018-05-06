@extends('templates.admin.master')
@section('title')
Manage Pets
@endsection
@section('content')


<div class="content-wrapper">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">List of Pets</h3>
          <hr>
              @if(Session::has('msg'))
                  <p class="alert alert-success">{{ Session::get('msg') }}</p>
              @endif
              <p style="text-align: center;">
                <a href="{{route('admin.pet.add')}}" class="addtop"><img src="assets/img/add.png" alt="" /> 
                  <button type="button" class="btn bg-green margin">Creat a new item</button>
                </a>
              </p>

        </div>
            <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Pet ID</th>
          <th>Pet Name</th>
          <th>Category</th>
          <th>Owner</th>
          <th>Age</th>
          <th>Avatar</th>
          <th>Gender</th>
          <th>City</th>
          <th>Addres</th>
          <th>Map_coordinates</th>
          <!-- <th>Discription</th> -->
          <th>Status</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>
          @foreach($oItems as $Item)
            @php
              $pet_id          = $Item->pet_id;
              $pet_name        = $Item->pet_name;
              $cat_id          = $Item->cat_id;
              $user_id         = $Item->user_id;
              $age             = $Item->age;
              $avatar          = $Item->avatar;
              $gender          = $Item->gender;
              $city            = $Item->city;
              $address         = $Item->address;
              $map_coordinates = $Item->map_coordinates;
              $discription     = $Item->discription;
              $status          = $Item->status;
              $picUrl          = asset('/storage/app/files/'.$avatar);
              $nopicUrl        = asset('/storage/app/files/nopic.jpg');
              $urlEdit         = route('admin.pet.edit', [$pet_id]);
              $urlDel          = route('admin.pet.del', [$pet_id]);
            @endphp
          <tr>
            <td>{{$pet_id}}</td>
            <td>{{$pet_name}}</td>
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

            <td>{{$age}}</td>
            <td>
                @if($avatar == '')
                    <img src="{{$nopicUrl}}" alt="" height="80px" width="80px" />
                @else
                    <img src="{{$picUrl}}" alt="" height="80px" width="80px" />
                @endif
            </td>
            <td>{{$gender}}</td>
            <td>{{$city}}</td>
            <td>{{$address}}</td>
            <td>{{$map_coordinates}}</td>
            <!-- <td>{{$discription}}</td> -->
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