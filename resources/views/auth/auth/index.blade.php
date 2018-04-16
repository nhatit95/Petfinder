@extends('templates.admin.master')
@section('title')
Quản lý người dùng
@endsection
@section('content')
	<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Danh sách người dùng</h4>
                    @if(Session::has('msg'))
                        <p class="category success">{{ Session::get('msg') }}</p>
                    @endif
                    <a href="{{route('admin.user.add')}}" class="addtop"><img src="assets/img/add.png" alt="" /> Thêm</a>
                </div>
                
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th>ID User</th>
                            <th>Tên</th>
                            <th>Tên đầy đủ</th>
                        	<th>Mật khẩu</th>
                        	<th>Chức năng</th>
                        </thead>
                        <tbody>
                            @foreach($oItems as $Item)
                            @php
                                $userName       =   $Item->username;
                                $userFullName   =   $Item->fullname;
                                $userPassword   =   $Item->password;
                                $idUser         =   $Item->id;
                                $urlEdit        =   route('admin.user.edit', [$idUser]);
                                $urlDel         =   route('admin.user.del', [$idUser]);
                            @endphp
                            <tr>
                                <td>{{$idUser}}</td>
                                <td>{{$userName}}</td>
                                <td>{{$userFullName}}</td>
                            	<td>{{$userPassword}}</td>
                            	<td>
                            		<a href="{{$urlEdit}}"><img src="{{$adminUrl}}img/edit.gif" alt="" /> Sửa</a> &nbsp;||&nbsp;
                            		<a href="{{$urlDel}}"><img src="{{$adminUrl}}img/del.gif" alt="" /> Xóa</a>
                            	</td>
                            </tr>
                            @endforeach
                            
                        </tbody>

                    </table>

					<div class="text-center">
					    <ul class="pagination">
					        <li><a href="?p=0" title="">1</a></li> 
					        <li><a href="?p=1" title="">2</a></li> 
					        <li><a href="?p=1" title="">3</a></li> 
					        <li><a href="?p=1" title="">4</a></li> 
					    </ul>
					</div>
                </div>
            </div>
        </div>


    </div>
</div>
@stop