@extends('templates.admin.master')
@section('title')
Danh sách danh mục tin
@endsection
@section('content')
	<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Danh sách tin tức</h4>
                                @if(Session::get('msg') != null)
                                    <p class="category success">{{ Session::get('msg') }}</p>
                                @endif
                                <a href="{{ route('admin.cat.add') }}" class="addtop"><img src="assets/img/add.png" alt="" /> Thêm</a>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID Tin tức</th>
                                    	<th>Tên tin tức</th>
                                    	<th>Chức năng</th>
                                    </thead>
                                    <tbody>
                                        @foreach($oItems as $Item)
                                        @php
                                            $nameCat    =   $Item->name;
                                            $idCat      =   $Item->id_cat;
                                            $urlEdit    =  route('admin.cat.edit', [$idCat]);
                                            $urlDel     =  route('admin.cat.del', [$idCat]);
                                        @endphp
                                        <tr>
                                        	<td>{{$idCat}}</td>
                                        	<td><a href="{{ $urlEdit }}">{{$nameCat}}</a></td>
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