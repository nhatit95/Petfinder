@extends('templates.admin.master')
@section('title')
Create a new message
@endsection
@section('content')
	<div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="content-wrapper">
                <div class="box-header">
                  <h3 class="box-title">Create a new message</h3>                     

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
                    <form role="form" action="{{ route('admin.message.add') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                              <label for="">Message Title</label>
                              <input type="text" class="form-control" required="true" name="mess_title" placeholder="Enter message title">
                            </div>

                            <div class="form-group">
                              <label for="">From</label>
                              <input type="text" class="form-control" disabled="true" required="true" name="from_name" value="{{Auth::user()->fullname}}" >
                            </div>
                            <div class="form-group">
                              <label for="">To</label>
                              <input type="text" class="form-control" required="true" name="to_id" placeholder="Enter your friend name">
                            </div>

                            <div class="form-group" style="visibility: hidden;">
                              <input type="text" class="form-control" name="from_id" value="{{Auth::user()->id}}" >
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

                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop