@extends('templates.admin.master')
@section('title')
Thêm tin
@endsection
@section('content')
	<div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Thêm danh mục tin tức</h4>
                </div>
                <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form role="form" action="{{ route('admin.news.add') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Tên tin tức</label>
                                        <input type="text" name="name" class="form-control border-input" placeholder="Tên tin tức" value="" />
                                    </div>

                                    <div class="form-group">
                                        <label>Danh mục tin</label>
                                        <select class="form-control border-input" name="id_cat">
                                            @foreach($oItems as $oItem)
                                                <option value="{{$oItem->id_cat}}">{{$oItem->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh</label>
                                        <input type="file" name="hinhanh" />
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea class="form-control border-input" id="preview_text" rows="4" name="preview_text" placeholder="Mô tả tóm tắt về tin tức"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Chi tiết</label>
                                        <textarea class="form-control border-input" id="detail_text" rows="5" name="detail_text" placeholder="Mô tả chi tiết về tin tức"></textarea>
                                        <script>
                                             CKEDITOR.replace( 'detail_text',
                                              {
                                                filebrowserBrowseUrl : '{{ $adminUrl }}ckfinder/ckfinder.html',
                                                filebrowserImageBrowseUrl : '{{ $adminUrl }}ckfinder/ckfinder.html?type=Images',
                                                filebrowserFlashBrowseUrl : '{{ $adminUrl }}ckfinder/ckfinder.html?type=Flash',
                                                filebrowserUploadUrl : '{{ $adminUrl }}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                                filebrowserImageUploadUrl : '{{ $adminUrl }}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                                filebrowserFlashUploadUrl : '{{ $adminUrl }}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                                              });
                                          </script>
                                    </div>
                                    <div class="form-group" style="text-align: center;">
                                        <input type="submit" class="btn btn-info btn-fill btn-wd" st value="Thêm tin" />
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                </div>
            </div>
        </div>


    </div>
@stop