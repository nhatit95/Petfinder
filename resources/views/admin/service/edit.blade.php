@extends('templates.admin.master')
@section('title')
Update information about service
@endsection
@section('content')
	<div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="content-wrapper">
                <div class="box-header">
                  <h3 class="box-title">Update infomation</h3>                     

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

                    <form role="form" action="{{ route('admin.service.edit', ['id' => $oItem->service_id]) }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">

                            <div class="form-group">
                              <label for="">Service name</label>
                              <input type="text" class="form-control" required="true" name="service_name" id="service_name" value="{{$oItem->service_name}}">
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control select2" name="cat_id" id="cat_id" required="true" style="width: 100%;">
                                  @foreach($arCats as $arCat)
                                    @if($oItem->cat_id == $arCat->cat_id)
                                        <option selected="selected" value="{{$arCat->cat_id}}">{{$arCat->cat_name}}</option>
                                    @else
                                        <option value="{{$arCat->cat_id}}">{{$arCat->cat_name}}</option>
                                    @endif
                                  @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                              <label for="">User</label>
                              <input type="text" class="form-control" disabled="true" required="true" name="username" id="username" placeholder="{{Auth::user()->username}}">
                            </div>

                            <div class="form-group">
                              <label for="">Description</label>
                              <input type="text" class="form-control" required="true" name="description" id="description" value="{{$oItem->description}}">
                            </div>

                            <div class="form-group">
                                <label>Choose a new picture</label>
                                <input type="file" name="newPicture" placeholder="Choose your picture" value="Choose your picture" />
                            </div>
                            <div class="form-group">
                                <label>Your current picture</label> <br />
                                <img src="{{ asset('storage/app/files/'.$oItem->avatar) }}" name="oldPicture" width="30%" height="30%">
                            </div>

                            <div class="form-group">
                              <label for="">Service's price</label>
                              <input type="text" class="form-control" required="true" name="price" id="price" value="{{$oItem->price}}">
                            </div>

                            <div class="form-group">
                              <label for="">Status</label>
                              <input type="text" class="form-control" required="true" name="status" id="status" value="{{$oItem->status}}">
                            </div>

                            <div class="form-group">
                                <label>Contents</label>
                                <textarea class="ckeditor" id="content" required="true" rows="5" name="content">{{$oItem->content}}</textarea>
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