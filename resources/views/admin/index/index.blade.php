@extends('templates.admin.master')
@section('title')
Trang quản trị
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
    </div>
    <div class="content-wrapper">
      @if(Auth::check())
        <p>Da dang nhap</p>
        <p>{{Auth::user()->id  }}</p>
        <p>{{Auth::user()->fullname  }}</p>
        <p>{{Auth::user()->password  }}</p>
        <p>{{Auth::user()->username  }}</p>
        <p>{{Auth::user()->phone_number  }}</p>
        <p>{{Auth::user()->email  }}</p>
        <p>{{Auth::user()->role_id  }}</p>
        <p>{{Auth::user()->birthday  }}</p>
      @else
        <p>chu dang nhap</p>
      @endif
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <!-- <b>Version</b> 2.4.0 -->
        </div>
        <strong>Copyright &copy; 2018-2019 <a href="https://www.facebook.com/NhatNguyenIT">Nguyễn Văn Nhật - 13T1</a>.</strong> All rights
        reserved.
    </footer>
 @stop