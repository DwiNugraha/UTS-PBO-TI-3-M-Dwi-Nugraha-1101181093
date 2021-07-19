<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('') }}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/FP.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ asset('') }}" class="d-block">Muhammad Dwi Nugraha</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ asset('') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Home</p>
            </a>
          </li>
          @foreach ($data_menu as $category)
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>{{ $category->namamenu }}<i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              @foreach ($category->childrenCategories as $childCategory)
                  @include('layout.child_category', ['child_category' => $childCategory])
              @endforeach
              </ul>
          </li>
          @endforeach
          <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Account<i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ asset('') }}user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset ('')}}logout" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Log out</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
