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

              <h3 class="profile-username text-center" style="font-size: 22px; "><strong>{{Auth::user()->username}}</strong></h3>

              <p class="text-muted text-center">{{Auth::user()->fullname}}</p>

              <ul class="list-group list-group-unbordered" id="profile_content">
                <li class="list-group-item">
                  <b>{{Auth::user()->email}}</b> <a class="pull-right"></a>
                </li>
                <li class="list-group-item">
                  <b>{{Auth::user()->birthday}}</b> <a class="pull-right"></a>
                </li>
                <li class="list-group-item">
                  <b>{{Auth::user()->phone_number}}</b> <a class="pull-right"></a>
                </li>
                <li class="list-group-item">
                  <b>{{Auth::user()->gender}}</b> <a class="pull-right"></a>
                </li>
                <li class="list-group-item">
                  <b>{{Auth::user()->status}}</b> <a class="pull-right"></a>
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
                      <h3 class="box-title">Create your Post</h3>                     
                      <hr style="margin-bottom: 15px" />
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
                        <form role="form" action="{{ route('petfinder.profile.postadd') }}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                  <label for="">Post name</label>
                                  <input type="text" class="form-control" required="true" name="post_name" id="post_name" placeholder="Enter the name of post">
                                </div>

                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control select2" name="cat_id" id="cat_id" required="true" style="width: 100%; margin-left: 10px;">
                                      @foreach($arPostCats as $arPostCat)
                                        <option selected="false" value="{{$arPostCat->cat_id}}">{{$arPostCat->cat_name}}</option>
                                      @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                  <label for="">Author</label>
                                  <input type="text" class="form-control" disabled="true" required="true" name="username" id="username" placeholder="{{Auth::user()->username}}">
                                </div>

                                <div class="form-group">
                                  <label for="">Discription</label>
                                  <input type="text" class="form-control" required="true" name="discription" id="discription" placeholder="Enter the age of post">
                                </div>

                                <div class="form-group">
                                    <label>Avatar</label>
                                    <input style="margin-left: 10px" type="file" name="hinhanh" required="true" />
                                </div>

                                <div class="form-group">
                                  <label for="">Status</label>
                                  <input type="text" class="form-control" required="true" name="status" id="status" placeholder="Enter the status">
                                </div>

                                <div class="form-group">
                                    <label>Contents</label>
                                    <textarea class="ckeditor" id="content" required="true" rows="5" name="content" placeholder="Enter your email content"></textarea>
                                    <script>
                                         CKEDITOR.replace( 'content',
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
                                  <input type="text" class="form-control" name="user_id" value="{{Auth::user()->id}}" >
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