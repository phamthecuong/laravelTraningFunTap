@extends('layouts.admin')

@section('content')

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Add new category</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="row">
            <form class="form-horizontal">
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                </div>
            </form>
        </div>
      </div>
      
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Sign in</button>
      </div>
      <!-- /.box-footer -->
    </div>
    <!-- /.box -->

@endsection