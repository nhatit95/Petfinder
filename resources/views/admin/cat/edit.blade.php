@extends('templates.admin.master')
@section('title')
Sửa danh mục tin
@endsection
@section('content')
	<div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Sửa danh mục tin</h4>
                </div>
                <div class="content">
                    <form action="{{ route('admin.cat.edit', [$oItem->id_cat]) }}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>ID</label>
                                    <input type="text" name="id" class="form-control border-input" disabled="" value="1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                    <input type="text" name="name" class="form-control border-input" placeholder="Tên danh mục" value="{{ $oItem->name }}">
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="text-center">
                            <input type="submit" class="btn btn-info btn-fill btn-wd" value="Sửa danh mục" />
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>


    </div>
@stop