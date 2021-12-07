<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="dropdown user user-menu">
      <!-- Menu Toggle Button -->
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <!-- The user image in the navbar-->
        <img src="{{ asset('lte/dist/img/noprofil.jpg') }}" class="user-image" alt="User Image">
        <!-- hidden-xs hides the username on small devices so only the image appears. -->
        <span class="hidden-xs">{{session()->get('dataLoginCustomer')['customers_name']}}</span>
      </a>
      <ul class="dropdown-menu">
        <!-- The user image in the menu -->
        
        <li class="user-header">
          <img src="{{ asset('lte/dist/img/noprofil.jpg') }}" class="img-circle" alt="User Image">

          <p>
            {{session()->get('dataLoginCustomer')['customers_name']}}
            <!-- <small>Member since Nov. 2012</small> -->
          </p>
        </li>
        <!-- Menu Body -->
        <li class="user-body">
            <!-- <div class="row">
              <div class="col-xs-4 text-center">
                <a href="#">Followers</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Sales</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Friends</a>
              </div>
            </div> -->
            <!-- /.row -->
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <!-- <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div> -->
            <div class="text-center">
              <a href="/logout" class="btn btn-default btn-flat">Logout</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </nav>