@extends('templates.admin.master')
@section('title')
Create a new Event
@endsection
@section('content')
	<div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="content-wrapper">
                <div class="box-header">
                  <h3 class="box-title">Create a new Event</h3>                     

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
                    <form role="form" action="{{ route('admin.event.add') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                              <label for="">Event name</label>
                              <input type="text" class="form-control" required="true" name="event_name" id="event_name" placeholder="Enter the name of event">
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control select2" name="cat_id" id="cat_id" required="true" style="width: 100%;">
                                  @foreach($arCats as $arCat)
                                    <option selected="false" value="{{$arCat->cat_id}}">{{$arCat->cat_name}}</option>
                                  @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                              <label for="">User name</label>
                              <input type="text" class="form-control" disabled="true" required="true" name="username" id="username" placeholder="{{Auth::user()->username}}">
                            </div>

                            <div class="form-group">
                              <label>Time will be held</label>

                              <div class="input-group">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" id="time" name="time" class="form-control" placeholder ="'dd/mm/yyyy'" data-mask>
                              </div>
                              <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label>Avatar</label>
                                <input type="file" name="hinhanh" required="true" />
                            </div>

                            <div class="form-group">
                              <label for="">Location</label>
                              <input type="text" class="form-control" required="true" name="location" id="location" placeholder="Enter the location of event">
                            </div>

                            <div class="form-group">
                              <label for="">Price</label>
                              <input type="text" class="form-control" required="true" name="price" id="price" placeholder="Enter the price of event">
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
@stop