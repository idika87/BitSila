@extends('customers/layouts/main')

@section('title','Balitekno | dashboard')

@section('content-header', 'dashboard')

@section('content')

<section class="content">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Dashboard</h3>
      </div>


      <!-- /.card-header -->
      <div class="card-body text-center">
        <div class="row">
          <div class="col-lg-6 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$jumlahLunas}}</h3>

                <p>Lunas</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="pelunasan_cus" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-12">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$jumlahMenungguPelunasan}}</h3>

                <p>Menunggu Pelunasan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="data_pesanan_cus" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</section>

@endsection