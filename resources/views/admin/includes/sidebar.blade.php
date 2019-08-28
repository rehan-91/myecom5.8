<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview ">
          <a href="{url('/admin')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="ion ion-bag"></i>
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('product.index')}}"><i class="fa fa-circle-o"></i> All Products</a></li>
            <li><a href="{{route('product.create')}}"><i class="fa fa-circle-o"></i> Add Products</a></li>
                        
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="ion ion-bag"></i>
            <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i> All Category</a></li>
            <li><a href="{{route('category.create')}}"><i class="fa fa-circle-o"></i> Add Category</a></li>             
          </ul>

        </li>

          <li class="treeview">
          <a href="#">
            <i class="ion ion-bag"></i>
            <span>SubCategories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li><a href="{{route('subcategory.index')}}"><i class="fa fa-circle-o"></i> All Sub-Category</a></li>
            <li><a href="{{route('subcategory.create')}}"><i class="fa fa-circle-o"></i> Add Sub-Category</a></li>
          </ul>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
