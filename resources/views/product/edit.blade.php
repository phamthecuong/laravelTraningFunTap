@extends('layouts.admin')

@section('content')

    <div class="box">
      <form class="form-horizontal" method="POST" action='{!! url("/admin/category") !!}'>
        @csrf
        <div class="box-header with-border">
          <h3 class="box-title">Edit product</h3>
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
                  <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Category name" value="{{$product->name}}">
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Decription</label>
                <div class="col-sm-6">
                  <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Decription" value="{{$product->description}}">
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
                  <select>
                    <option>Chose category name</option>
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

