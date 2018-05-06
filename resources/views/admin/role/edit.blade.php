@extends('templates.admin.master')
@section('title')
Edit a new role
@endsection
@section('content')
  <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="content-wrapper">
                <div class="box-header">
                  <h3 class="box-title">Edit a new role</h3>                     

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
                    <form role="form" action="{{ route('admin.role.edit', ['id' => $oItem->role_id]) }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                              <label for="">Role name</label>
                              <input type="text" class="form-control" required="true" name="role_name" value="{{$oItem->role_name}}">
                            </div>  

                          <!-- /.box-body -->
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>

                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>


    </div>
@stop