<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  @include('layout.adminlte.stylesheet')
  @stack('adminstylesheet')
</head>

<body class="hold-transition sidebar-mini layout-fixed {{request()->is('admin/') ? '' : 'sidebar-collapse' }} ">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{asset('asset/adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo"
        height="60" width="60">
    </div>
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{asset('asset/adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo"
        height="60" width="60">
    </div>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <p class="nav-link">@yield('heading-navbar')</p>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
        @endauth
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="admin" class="brand-link">
        <img src="{{asset('asset/adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('asset/adminlte/dist/img/me.jpg')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          @auth
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->username }}</a>
          </div>
          @else
          <div class="info">
            <a href="{{ route('login') }}" class="d-block">Login</a>
          </div>
          @endauth
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{ url('/admin') }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/order') }}" class="nav-link {{ request()->is('admin/order') ? 'active' : '' }}">
                <i class="nav-icon fas fa-boxes"></i>
                <p>
                  Order
                </p>
              </a>
            </li>
            <li class="nav-item {{ request()->is('admin/tables/productsList') ? 'menu-open' : '' }}">
              <a href="{{ url('admin/tables/productsList') }}"
                class="nav-link {{ request()->is('admin/tables/productsList') ? 'active' : '' }}">
                <i class="nav-icon fas fa-layer-group"></i>
                <p>
                  Master Product
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('admin/tables/productsList') }}"
                    class="nav-link {{ request()->is('admin/tables/productsList') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Product List</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item {{ request()->is('admin/tables/user') ? 'menu-open' : '' }}">
              <a href="{{ url('admin/tables/user') }}"
                class="nav-link {{ request()->is('admin/tables/user') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Master User
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('admin/tables/user') }}"
                    class="nav-link {{ request()->is('admin/tables/user') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>User List</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item {{ request()->is('admin/voucher/*') ? 'menu-open' : '' }}">
              <a href="{{ url('admin/voucher/*') }}"
                class="nav-link {{ request()->is('admin/voucher/*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-ticket-alt"></i>
                <p>
                  Master Voucher
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('admin/voucher/list') }}"
                    class="nav-link {{ request()->is('admin/voucher/list') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Voucher List</p>
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

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      @yield('content-header')
      <!-- /.content-header -->
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          @yield('content')
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>

  @include('layout.adminlte.js')
  <script>
    window.addEventListener('toastr', event => {
      let status = event.detail.status;
      toastr.options = {
        "preventDuplicates": true,
        "positionClass": "toast-top-center",
      };
      switch (status) {
        case 'success':
          toastr.success(event.detail.message);
          break;
        case 'error':
          toastr.error(event.detail.message);
          break;
        case 'warning':
          toastr.warning(event.detail.message);
          break;
        case 'info':
          toastr.info(event.detail.message);
          break;
        default:
          break;
      }
    })
  </script>
  @stack('adminscript')
</body>

</html>