@extends('layouts.admin')

@section('content')
    <div class="box">
      <form class="form-horizontal" method="POST" action='{!! url("/admin/category/$category->id") !!}'>
        @csrf
        <input type="hidden" name="_method" value="PUT" />
        <div class="box-header with-border">
          <h3 class="box-title">Edit category</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="category name" value="{{$category->name}}">
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="box-footer" style="padding-right: 40px;">
          <button type="submit" class="btn btn-info pull-right">Update</button>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>
    <!-- /.box -->

@endsection

