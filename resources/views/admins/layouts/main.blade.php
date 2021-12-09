<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="lte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    @include('admins/layouts/header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admins/layouts/sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Page of @yield('content-header')</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      @yield('content')
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('admins/layouts/footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- sweetalert2 -->
  <script src="lte/plugins/sweetalert2/sweetalert2.all.js"></script>
  <!-- AdminLTE App -->
  <script src="lte/dist/js/adminlte.min.js"></script>
  <!-- garafik -->
  <script src="lte/plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="lte/dist/js/demo.js"></script>
  <!-- garafik -->
  <script src="lte/dist/js/pages/dashboard3.js"></script>

  <script type="text/javascript">
    $( document ).ready(function() {
      // hapus ad
      $('.delete_ad').on('click', function() {
        var ad_id=$(this).attr('ad_id');
        Swal.fire({
          title: 'Yakin Hapus?',
          showDenyButton: true,
          confirmButtonText: 'Yakin',
          denyButtonText: 'Tidak',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location="/data_admin/hapus/"+ad_id;
            Swal.fire('Data Terhapus', '', 'success')
          } else if (result.isDenied) {
            Swal.fire('Data Tidak Dihapus', '', 'error')
          }
        })
      })
      // end hapus ad

      // hapus order
      $('.delete_order').on('click', function() {
        var order_id=$(this).attr('order_id');
        Swal.fire({
          title: 'Yakin Hapus?',
          showDenyButton: true,
          confirmButtonText: 'Yakin',
          denyButtonText: 'Tidak',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location="/admin_order_data/hapus/"+order_id;
            Swal.fire('Data Terhapus', '', 'success')
          } else if (result.isDenied) {
            Swal.fire('Data Tidak Dihapus', '', 'error')
          }
        })
      })
      // end hapus order

      // hapus pm
      $('.delete_pm').on('click', function() {
        var pm_id=$(this).attr('pm_id');
        Swal.fire({
          title: 'Yakin Hapus?',
          showDenyButton: true,
          confirmButtonText: 'Yakin',
          denyButtonText: 'Tidak',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location="/payment_method/hapus/"+pm_id;
            Swal.fire('Data Terhapus', '', 'success')
          } else if (result.isDenied) {
            Swal.fire('Data Tidak Dihapus', '', 'error')
          }
        })
      })
      // end hapus pm

      // hapus lph
      $('.delete_lph').on('click', function() {
        var lph_id=$(this).attr('lph_id');
        Swal.fire({
          title: 'Yakin Hapus?',
          showDenyButton: true,
          confirmButtonText: 'Yakin',
          denyButtonText: 'Tidak',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location="/lp_home/hapus/"+lph_id;
            Swal.fire('Data Terhapus', '', 'success')
          } else if (result.isDenied) {
            Swal.fire('Data Tidak Dihapus', '', 'error')
          }
        })
      })
      // end hapus lph

      // hapus lpc
      $('.delete_lpc').on('click', function() {
        var lpc_id=$(this).attr('lpc_id');
        Swal.fire({
          title: 'Yakin Hapus?',
          showDenyButton: true,
          confirmButtonText: 'Yakin',
          denyButtonText: 'Tidak',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location="/lp_carousels/hapus/"+lpc_id;
            Swal.fire('Data Terhapus', '', 'success')
          } else if (result.isDenied) {
            Swal.fire('Data Tidak Dihapus', '', 'error')
          }
        })
      })
      // end hapus lpc

      // hapus lpp
      $('.delete_lpp').on('click', function() {
        var lpp_id=$(this).attr('lpp_id');
        Swal.fire({
          title: 'Yakin Hapus?',
          showDenyButton: true,
          confirmButtonText: 'Yakin',
          denyButtonText: 'Tidak',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location="/lp_produk/hapus/"+lpp_id;
            Swal.fire('Data Terhapus', '', 'success')
          } else if (result.isDenied) {
            Swal.fire('Data Tidak Dihapus', '', 'error')
          }
        })
      })
      // end hapus lpp

      // hapus lpc
      $('.delete_lpc').on('click', function() {
        var lpc_id=$(this).attr('lpc_id');
        Swal.fire({
          title: 'Yakin Hapus?',
          showDenyButton: true,
          confirmButtonText: 'Yakin',
          denyButtonText: 'Tidak',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location="/lp_client/hapus/"+lpc_id;
            Swal.fire('Data Terhapus', '', 'success')
          } else if (result.isDenied) {
            Swal.fire('Data Tidak Dihapus', '', 'error')
          }
        })
      })
      // end hapus lpc

      // hapus lpt
      $('.delete_lpt').on('click', function() {
        var lpt_id=$(this).attr('lpt_id');
        Swal.fire({
          title: 'Yakin Hapus?',
          showDenyButton: true,
          confirmButtonText: 'Yakin',
          denyButtonText: 'Tidak',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location="/lp_team/hapus/"+lpt_id;
            Swal.fire('Data Terhapus', '', 'success')
          } else if (result.isDenied) {
            Swal.fire('Data Tidak Dihapus', '', 'error')
          }
        })
      })
      // end hapus lpt

      // hapus lpte
      $('.delete_lpte').on('click', function() {
        var lpte_id=$(this).attr('lpte_id');
        Swal.fire({
          title: 'Yakin Hapus?',
          showDenyButton: true,
          confirmButtonText: 'Yakin',
          denyButtonText: 'Tidak',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location="/lp_tamplate/hapus/"+lpte_id;
            Swal.fire('Data Terhapus', '', 'success')
          } else if (result.isDenied) {
            Swal.fire('Data Tidak Dihapus', '', 'error')
          }
        })
      })
      // end hapus lpte

      // hapus lpb
      $('.delete_lpb').on('click', function() {
        var lpb_id=$(this).attr('lpb_id');
        Swal.fire({
          title: 'Yakin Hapus?',
          showDenyButton: true,
          confirmButtonText: 'Yakin',
          denyButtonText: 'Tidak',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location="/lp_bonus/hapus/"+lpb_id;
            Swal.fire('Data Terhapus', '', 'success')
          } else if (result.isDenied) {
            Swal.fire('Data Tidak Dihapus', '', 'error')
          }
        })
      })
      // end hapus lpb


    });
  </script>
  @include('sweetalert::alert')
</body>
</html>
