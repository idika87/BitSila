<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../../index3.html" class="brand-link">
   <!--  <img src="lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
   <span class="brand-text font-weight-light">BaliTekno</span>
 </a>

 <!-- Sidebar -->
 <div class="sidebar">
  <!-- Sidebar user (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="lte/dist/img/noprofil.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">{{session()->get('dataLoginAdmin')['name']}}</a>
    </div>
  </div>

  <!-- SidebarSearch Form -->

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item">
        <a href="/dashboard_adm" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard 
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/data_admin" class="nav-link">
          <i class="nav-icon fas fa-folder"></i>
          <p>
            Data Admin
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/pesan_masuk" class="nav-link">
          <i class="nav-icon fas fa-envelope"></i>
          <p>
            Pesan Masuk 
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/data_customers" class="nav-link">
          <i class="nav-icon fas fa-folder"></i>
          <p>
            Data Customer
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/admin_order_data" class="nav-link">
          <i class="nav-icon fas fa-folder"></i>
          <p>
            Data Pesanan
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/payment_method" class="nav-link">
          <i class="nav-icon fas fa-folder"></i>
          <p>
            Data MP
          </p>
        </a>
      </li>
      <!-- Sidebar drop down -->
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>
            Landing Page
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/lp_home" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/lp_carousels" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Carousels</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/lp_produk" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Produk</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/lp_client" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Client</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/lp_team" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Team</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/lp_tamplate" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Tamplate</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/lp_bonus" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Bonus</p>
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