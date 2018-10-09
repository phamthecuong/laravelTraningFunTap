@extends('layouts.admin')

@section('content')

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">List category</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
        </div>

      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          @if(Session::has('message'))
            @include('templates.alert',['message' =>  Session::get('message')])
          @endif
          <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
            <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Craeted_at</th>
                  <th>Updated_at</th>
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
            ajax: '{!! url('ajax/category') !!}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'created_at', name: 'created_at'},
                {data: 'updated_at', name: 'updated_at'},
                {data: 'action', name: 'action'}
            ]
        });
    });
  </script>
@endpush
