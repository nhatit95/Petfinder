@extends('templates.admin.master')
@section('title')
Manage categories of event
@endsection
@section('content')


<div class="content-wrapper">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">List of categories</h3>
              @if(Session::has('msg'))
                  <p class="category success">{{ Session::get('msg') }}</p>
              @endif
              <p style="text-align: center;">
                <a href="{{route('admin.event_cat.add')}}" class="addtop"><img src="assets/img/add.png" alt="" /> 
                  <button type="button" class="btn bg-green margin">Creat a new item</button>
                </a>
              </p>

        </div>
            <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Event ID/th>
          <th>Event Name</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>
          @foreach($oItems as $Item)
            @php
              $cat_id  = $Item->cat_id;
              $cat_name = $Item->cat_name;;
              $urlEdit   =   route('admin.event_cat.edit', [$cat_id]);
              $urlDel    =   route('admin.event_cat.del', [$cat_id]);
            @endphp
          <tr>
            <td>{{$cat_id}}</td>
            <td>{{$cat_name}}</td>
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