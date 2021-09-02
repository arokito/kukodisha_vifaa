<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="{{asset('dist/img/kodisha.png')}}" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">KODISHA VIFAA</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar sidebar-no-expand nav-legacy nav-child-indent">
      <!-- Sidebar Menu -->
      <nav class="mt-2 ">
        <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item ">
            <a href="/dashboard" class="nav-link    {{ request()->is('dashboard')?  'active ' : '' }} " >
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeveiw menu-open ">
            <a href="#" class="nav-link {{ request()->is('items*')?  'active ' : '' }}">
              <i class="nav-icon fas fa-list"></i>
              <p>
               Manage Items
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('items.create')}}" class="nav-link  {{ request()->is('items/create')?  'active ' : '' }} ">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add item</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('items.index')}}" class="nav-link {{ request()->is('items')?  'active ' : '' }}">
                  <i class="fa fa-clipboard-list nav-icon"></i>
                  <p>Item list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ request()->is('items/rented-items')?  'active ' : '' }}">
                  <i class="fa fa-stream nav-icon"></i>
                  <p>Rented list</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link {{ request()->is('categories*')?  'active ' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Categories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('categories.create')}}" class="nav-link {{ request()->is('categories/create')?  'active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('categories.index')}}" class="nav-link {{ request()->is('categories')?  'active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category list</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                User List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fa fa-comment"></i>
              <p>
                SMS API
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fa fa-credit-card"></i>
              <p>
                Payment API
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>