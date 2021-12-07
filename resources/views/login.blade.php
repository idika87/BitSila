<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BALITEKNO (LOGIN) </title>

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
      <h2><b>BALITEKNO</b></h2>
      <h4>Jl. Halmahera No.47A, Kota Denpasar, Bali, Phone (0361)-4748222</h4>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <h4><b><p class="login-box-msg">LOGIN</p></b></h4>

        <form action="/login_proses" method="post">
          @csrf
          <label for="name">Username</label>
          <div class="input-group mb-3">
            <input required="" name="username" autocomplete="off" type="text" class="form-control" placeholder="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <label for="name">Password</label>
          <div class="input-group mb-3">
            <input required="" name="password" autocomplete="off" type="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-8">
              <a href="/registrasi" class="text-center">Register a new membership</a>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
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
