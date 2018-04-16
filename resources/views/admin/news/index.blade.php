@extends('templates.admin.master')
@section('title')
Quản lý tin
@endsection
@section('content')
	<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Danh sách tin tức</h4>
                    @if(Session::has('msg'))
                        <p class="category success">{{Session::get('msg')}}</p>
                    @endif
                    <a href="{{route('admin.news.add')}}" class="addtop"><img src="{{$adminUrl}}img/add.png" alt="" /> Thêm</a>
                </div>
                <form method="post" action="javascript:void(0);">
                    <input onclick="searchNews()" type="submit" name="search" value="Tìm kiếm" class="btn btn-warning btn-sm" style="float:right" />
                    <input type="search" class="form-control input-sm" id="story_name" placeholder="Nhập tên tin tức" style="float:right; width: 300px;" />
                    <div style="clear:both"></div>
                </form><br />
                 <script type="text/javascript">
                    function searchNews(){
                        var newName          = $('#name').val();
                        if (newName == '') {
                            alert("Hãy nhập từ khóa tìm kiếm");
                            return;
                        }else{
                            $.ajax({
                            url: 'search.blade.php',
                            type: 'POST',
                            //cache: false,
                            data: {anewName: newName},
                            success: function(data){
                                $("#search-result").html(data);
                            },
                            error: function (){
                                alert('Có lỗi xảy ra');
                            }
                            });
                        }
                    }
                </script>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th>ID </th>
                            <th>Tên tin tức</th>
                        	<th>Mô tả</th>
                            <th>Hình ảnh</th>
                            <th>Danh mục tin</th>
                        	<th>Chức năng</th>
                        </thead>
                        <tbody>
                            @foreach($oItems as $Item)
                            @php
                                $idNews         =   $Item->id_news;
                                $newsName       =   $Item->name;
                                $catName        =   $Item->cname;
                                $newsPicture    =   $Item->picture;
                                $created_at    =   $Item->created_at;
                                $newsPreview    =   str_limit($Item->preview_text, 150)."...";
                                $picUrl         =   asset('storage/app/files/'.$newsPicture);
                                $nopicUrl       =   asset('storage/app/files/nopic.jpg');
                                $urlEdit        =   route('admin.news.edit', ['id'  =>$idNews]);
                                $urlDel         =   route('admin.news.del', ['id' => $idNews]);
                            @endphp
                            <tr>
                                <td id="name" class="name">{{$idNews}}</td>
                                <td style="width: 30%">{{$newsName}}</td>
                            	<td >{{$newsPreview}}</td>
                                <td>
                                    @if($newsPicture == '')
                                        <img src="{{$nopicUrl}}" alt="" height="80px" width="100px" />
                                    @else
                                        <img src="{{$picUrl}}" alt="" height="80px" width="100px" />
                                    @endif
                                </td>
                                <td style="width: 15%">{{$catName}}</td>
                            	<td style="width: 15%">
                            		<a href="{{$urlEdit}}"><img src="{{$adminUrl}}img/edit.gif" alt="" /> Sửa</a> &nbsp;||&nbsp;
                            		<a href="{{$urlDel}}"><img src="{{$adminUrl}}img/del.gif" alt="" /> Xóa</a>
                            	</td>
                            </tr>
                            @endforeach
                            
                        </tbody>

                    </table>

    				<div class="text-center">
    				    <ul class="pagination">
    				        {{$oItems->links()}} 
    				    </ul>
    				</div>
                </div>
            </div>
        </div>


    </div>
    </div>
@stop