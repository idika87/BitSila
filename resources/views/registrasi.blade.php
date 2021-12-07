<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BALITEKNO (Registrasi) </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte/')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/')}}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <h4>Silahkan Masukan Data Diri Anda Dengan Benar</h4>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <h4><b><p style="color: black;" class="login-box-msg">Registrasi</p></b></h4>

        <form action="/registrasi_proses" method="post" enctype="multipart/form-data">
          @csrf
          <label style="color: black;" for="name">Nama</label>
          <div class="input-group mb-3">
            <div class="input-group mb-3">
              <input required="" name="customers_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Input Text">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
          </div>
          <label style="color: black;" for="name">Email</label>
          <div class="input-group mb-3">
            <input required="" name="customers_email"type="email" class="form-control" id="exampleInputEmail1" placeholder="Input Text">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <label style="color: black;" for="name">Ktp</label>
          <div class="input-group mb-3">
            <input required="" name="photos_ktp" type="file" class="custom-file-input" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            <div class="input-group-append">
            </div>
          </div>

          <div class="row">
            <!-- /.col -->
            <div class="col-8">
              <a href="/login" class="text-center">I already have a membership</a>
            </div>
            <div class="col-4">
              <button href="/login" type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>

          

        </div>
        <!-- /.col -->
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('lte/')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('lte/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte/')}}/dist/js/adminlte.min.js"></script>
<!-- garafik -->
<script src="lte/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('lte/')}}/dist/js/demo.js"></script>
<!-- garafik -->
<script src="lte/dist/js/pages/dashboard3.js"></script>
@include('sweetalert::alert')
</body>
</html>
