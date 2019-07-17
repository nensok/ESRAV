
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Ersav - Admin</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition sidebar-mini">
<div id="app" class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Search form here -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications component here Dropdown Menu -->
      <notification></notification>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-secondary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="logo/smartphone.png" alt="ESRAV-Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ESRAV</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="logo/users.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
             <router-link to="/home" class="nav-link">
                <i class="fas fa-home nav-icon"></i>
                <p>Home</p>
             </router-link>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
                <i class="fas fa-cogs"></i>
              <p>
                ESRAV Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/emergency-unit" class="nav-link">
                  <i class="fas fa-ambulance nav-icon"></i>
                  <p>Emergency Unit</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/reports" class="nav-link">
                    <i class="fas fa-book nav-icon"></i>
                    <p>Reports</p>
                </router-link>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Another Link</p>
                </a>
              </li>
              <li class="nav-item">
                <router-link to="/profile" class="nav-link">
                    <i class="fas fa-user nav-icon"></i>
                    <p>Edit Profile</p>
                </router-link>
              </li>
            </ul>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
               <i class="nav-icon fas fa-sign-out-alt red"></i>

                <p>{{ __('Logout') }}</p>
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
             </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <br><br>
    <router-view></router-view>
    <!-- Main content -->
    {{-- <div class="content">
      <div class="container-fluid"> 
      </div>
    </div> --}}
    <!-- content -->
  </div>
  <!-- content-wrapper -->

  <!--Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="#">ESRAV footer</a>.</strong> All rights reserved.
  </footer>
</div>


<script src="js/app.js"></script>
</body>
</html>
