@extends('templates.petfinder.master')
@section('content')
<hr />
<hr />
<div class="wrapper1">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper1">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-align: center; ">
        
      </h1><!-- 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <div style="text-align: center;">
                <a href="#" id="no-active-btn-shopping">
                   <img style="width: 200px; height: 200px;" src="{{$PIC_URL}}{{Auth::user()->avatar}}" class="img-circle" alt="User Image">
                </a>
              </div>

              <h3 class="profile-username text-center" style="font-size: 22px; "><strong>{{$arUser->username}}</strong></h3>

              <p class="text-muted text-center">{{$arUser->fullname}}</p>

              <ul class="list-group list-group-unbordered" id="profile_content">
                <li class="list-group-item">
                  <b>{{$arUser->email}}</b> <a class="pull-right"></a>
                </li>
                <li class="list-group-item">
                  <b>{{$arUser->birthday}}</b> <a class="pull-right"></a>
                </li>
                <li class="list-group-item">
                  <b>{{$arUser->phone_number}}</b> <a class="pull-right"></a>
                </li>
                <li class="list-group-item">
                  <b>{{$arUser->gender}}</b> <a class="pull-right"></a>
                </li>
                <li class="list-group-item">
                  <b>{{$arUser->status}}</b> <a class="pull-right"></a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-8">
          
            <div class="row">
              <div class="col-lg-12 col-md-12">
                  <div class="">
                      <div class="box-header">
                        <h3 class="box-title">Create a new message</h3>                     
                        <hr style="margin-bottom: 10px" />
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
                          <form role="form" action="{{ route('petfinder.profile.guestmessageadd') }}" method="post" enctype="multipart/form-data">
                              {{csrf_field()}}
                              <div class="box-body">
                                  <div class="form-group">
                                    <label for="">Message Title</label>
                                    <input type="text" class="form-control" required="true" name="mess_title" placeholder="Enter message title">
                                  </div>

                                  <div class="form-group">
                                    <label >Activity</label>
                                    <input disabled="true" type="text"  class="form-control" required="true" value='Adopt pet' >
                                  </div>

                                  <div class="form-group">
                                    <label for="">From</label>
                                    <input type="text" class="form-control" disabled="true" required="true" name="from_name" value="{{Auth::user()->fullname}}" >
                                  </div>
                                  <div class="form-group">
                                    <label for="">To</label>
                                    <input type="text" class="form-control" disabled="true" required="true" name="to_name" value="{{$arUser->fullname}}">
                                  </div>
                                  <div class="form-group">
                                      <label>Content</label>
                                      <textarea class="ckeditor" id="mess_content" required="true" rows="5" name="mess_content" placeholder="Enter your email content"></textarea>
                                      <script>
                                           CKEDITOR.replace( 'mess_content',
                                            {
                                              filebrowserBrowseUrl : '{{ $ADMIN_URL }}ckfinder/ckfinder.html',
                                              filebrowserImageBrowseUrl : '{{ $ADMIN_URL }}ckfinder/ckfinder.html?type=Images',
                                              filebrowserFlashBrowseUrl : '{{ $ADMIN_URL }}ckfinder/ckfinder.html?type=Flash',
                                              filebrowserUploadUrl : '{{ $ADMIN_URL }}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                              filebrowserImageUploadUrl : '{{ $ADMIN_URL }}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                              filebrowserFlashUploadUrl : '{{ $ADMIN_URL }}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                                            });
                                        </script>
                                  </div>
                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <div class="form-group" style="visibility: hidden;">
                                    <input type="text" class="form-control" name="from_id" value="{{Auth::user()->id}}" >
                                  </div>

                                  <div class="form-group" style="visibility: hidden;">
                                    <input type="text" class="form-control" name="to_id" value="{{$arUser->id}}" >
                                  </div>
                                  <div class="form-group" style="visibility: hidden;">
                                    <input type="text" class="form-control" name="activity" value="<a target='_blank' href='http://petfinder.biz:8088/petdetail/{{$arPet->pet_id}}'>Adopt pet <br /><strong>{{$arPet->pet_name}}</strong></a>">
                                  </div>
                              <div class="clearfix"></div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@stop