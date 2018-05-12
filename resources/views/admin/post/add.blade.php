@extends('templates.admin.master')
@section('title')
Create a new Post
@endsection
@section('content')
	<div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="content-wrapper">
                <div class="box-header">
                  <h3 class="box-title">Create a new Post</h3>                     

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
                    <form role="form" action="{{ route('admin.post.add') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                              <label for="">Post name</label>
                              <input type="text" class="form-control" required="true" name="post_name" id="post_name" placeholder="Enter the name of post">
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
                              <label for="">Author</label>
                              <input type="text" class="form-control" disabled="true" required="true" name="username" id="username" placeholder="{{Auth::user()->username}}">
                            </div>

                            <div class="form-group">
                              <label for="">Discription</label>
                              <input type="text" class="form-control" required="true" name="discription" id="discription" placeholder="Enter the age of post">
                            </div>

                            <div class="form-group">
                                <label>Avatar</label>
                                <input type="file" name="hinhanh" required="true" />
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