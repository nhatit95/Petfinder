@extends('templates.admin.master')
@section('title')
Sửa User
@endsection
@section('content')
	<div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Thêm danh mục tin tức</h4>
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
                    <form action="{{ route('admin.user.edit', [$oItem->id]) }}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>ID User</label>
                                    <input type="text" name="id" class="form-control border-input" disabled="true" value="{{ $oItem->id }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tên đăng nhập</label>
                                    <input type="text" name="username" class="form-control border-input"  value="{{ $oItem->username }}" readonly="true">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tên đầy đủ</label>
                                    <input type="text" name="fullname" class="form-control border-input" placeholder="Họ tên" value="{{ $oItem->fullname }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input type="text" name="password" class="form-control border-input" placeholder="Họ tên" value="">
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="text-center">
                            <input type="submit" class="btn btn-info btn-fill btn-wd" value="Sửa tin" />
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>


    </div>
@stop