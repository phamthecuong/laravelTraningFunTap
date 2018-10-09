@extends('layouts.admin')

@section('content')
	<div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Update profile</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
        </div>
      </div>
      <!-- /.box-header -->
       <form class="form-horizontal" action="{!! url('/admin/profile') !!}" method="POST">
       	@csrf
			<div class="box-body">
				<div class="row">
				    <div class="box-body">
				      <div class="form-group">
				        <label for="inputEmail3" class="col-sm-2 control-label">User name</label>
				        <div class="col-sm-10">
				          <input type="text" class="form-control" id="inputEmail3" placeholder="User name" value="{{\Auth::user()->name}}" name="username">
				        </div>
				      </div>
				      <div class="form-group">
				        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				        <div class="col-sm-10">
				          <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="{{\Auth::user()->email}}" name="email">
				        </div>
				      </div>
				      <div class="form-group">
				        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				        <div class="col-sm-10">
				          <input type="password" class="form-control" id="inputPassword3" placeholder="Type to change password" name="password">
				        </div>
				      </div>
				    </div>
				</div>
			</div>
      
			<div class="box-footer">
				<button type="submit" class="btn btn-info pull-right">Update</button>
			</div>
       </form>
    </div>

@endsection