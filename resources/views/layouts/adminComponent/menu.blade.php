@php
  $sg = Request::segment(2);
  $action = Request::segment(3);
@endphp

<ul class="sidebar-menu" data-widget="tree">
  <li class="header"></li>
  
   <li class="@if($sg == 'category') active @endif treeview menu-open">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Category</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="@if($sg == 'category' && $action =='' ) active @endif"><a href="{!! url('/admin/category') !!}"><i class="fa fa-circle-o"></i>List</a></li>
      <li class="@if($sg == 'category' && $action =='create' ) active @endif"><a href="{!! url('/admin/category/create') !!}"><i class="fa fa-circle-o"></i>Add  </a></li>
    </ul>
  </li>

   <li class="@if($sg == 'product') active @endif treeview menu-open">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Product</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="@if($sg == 'product' && $action =='' ) active @endif"><a href="{!! url('admin/product') !!}"><i class="fa fa-circle-o"></i>List</a></li>
      <li class="@if($sg == 'product' && $action =='create' ) active @endif"><a href="{!! url('admin/product/create') !!}"><i class="fa fa-circle-o"></i>Add  </a></li>
    </ul>
  </li>
</ul>