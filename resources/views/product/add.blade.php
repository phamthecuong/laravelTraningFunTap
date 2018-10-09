@extends('layouts.admin')

@section('content')

    <div class="box">
      <form class="form-horizontal" method="POST" action='{!! url("/admin/product") !!}' enctype="multipart/form-data">
        @csrf
        <div class="box-header with-border">
          <h3 class="box-title">Add new product</h3>
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
                <div class="col-sm-6">
                  <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Category name">
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Decription</label>
                <div class="col-sm-6">
                  <input type="text" name="description" class="form-control" id="inputEmail3" placeholder="Description">
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                <div class="col-sm-6">
                  	<input type="file" name="img">
                </div>
              </div>

               <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Category type</label>
                <div class="col-sm-6">
                  <select name="categoryId">
                  	<option value="0">Chose category name</option>
                  	@foreach($category as $c)
                  		<option value="{{$c->id}}">{{$c->name}}</option>
                  	@endforeach
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right">Submit</button>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>
    <!-- /.box -->

@endsection

