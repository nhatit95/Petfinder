@extends('templates.admin.master')
@section('title')
Thêm danh mục tin
@endsection
@section('content')
	<div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Thêm danh mục tin tức</h4>
                </div>
                <div class="content">
                    <form action="{{ route('admin.cat.add') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                    <input type="text" name="name" class="form-control border-input" placeholder="Nhập tên danh mục" value="">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-info btn-fill btn-wd" value="Thêm tin" />
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>


    </div>
@stop