@extends('layouts.admin')

@section('content')

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">List product</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
            <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Updated_at</th>
                  <th>Creted_at</th>
                  <th>Action</th>
                </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
    <!-- /.box -->

@endsection

@push('script')
  <script type="text/javascript">
    $(document).ready(function() {
        $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! url('ajax/product') !!}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'description', name: 'description'},
                {data: 'image', name: 'image'},
                {data: 'created_at', name: 'created_at'},
                {data: 'updated_at', name: 'updated_at'},
                {data: 'action', name: 'action'}
            ]
        });
    });
  </script>
@endpush