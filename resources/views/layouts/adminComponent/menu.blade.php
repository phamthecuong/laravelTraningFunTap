 <!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MAIN NAVIGATION</li>
  
   <li class="active treeview menu-open">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Category</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="active"><a href="{!! url('/admin/category') !!}"><i class="fa fa-circle-o"></i>List</a></li>
      <li><a href="{!! url('/admin/category/create') !!}"><i class="fa fa-circle-o"></i>Add new category</a></li>
    </ul>
  </li>

   <li class="treeview menu-open">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Product</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="{!! url('admin/product') !!}"><i class="fa fa-circle-o"></i>List</a></li>
      <li class=""><a href="{!! url('admin/product/create') !!}"><i class="fa fa-circle-o"></i>Add new product</a></li>
    </ul>
  </li>
 
</ul>