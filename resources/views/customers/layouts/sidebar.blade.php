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
      <a href="#" class="d-block">{{session()->get('dataLoginCustomer')['customers_name']}}</a>
    </div>
  </div>

  <!-- SidebarSearch Form -->

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
     
      <li class="nav-item">
        <a href="dashboard_cus" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard 
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="data_diri_cus" class="nav-link">
          <i class="nav-icon fas fa-envelope"></i>
          <p>
            Data Diri
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="data_pesanan_cus" class="nav-link">
          <i class="nav-icon fas fa-folder"></i>
          <p>
            Data Pesanan
          </p>
        </a>
      </li>

      <!-- Sidebar drop down -->
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>
            Pembayaran
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/pelunasan_cus" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Pelunasan</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="report_pemesanan_cus" class="nav-link">
          <i class="nav-icon fas fa-folder"></i>
          <p>
            Cetak Pesanan
          </p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>