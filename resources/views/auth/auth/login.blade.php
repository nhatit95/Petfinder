@extends('templates.admin.master')
@section('title')
Thêm User
@endsection
@section('content')
	<div class="content-wrapper">
        <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h4 style="text-align: center; font-size: 30px;" class="title">Log in</h4>
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

                    <form action="{{ route('auth.auth.login') }}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control border-input" placeholder="Tên đăng nhập" value="">
                                </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control border-input" placeholder="Họ tên" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-info btn-fill btn-wd" value="Đăng nhập" />
                        </div>
                        <div class="clearfix"></div>
                    </form>
                    @if(Session::get('msg') != null)
                        <p class="category success" style="text-align: center; color: red; padding: 50px">{{ Session::get('msg') }}</p>
                    @endif
                </div>
            </div>
        </div>
        
        </div>   
    </div>
@stop