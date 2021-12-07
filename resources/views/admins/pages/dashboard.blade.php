@extends('admins/layouts/main')

@section('title','Balitekno |Dashboard')

@section('content-header', 'Dashboard')

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
                <h3>{{$jumlahMenungguPelunasan}}</h3>

                <p>Menunggu Pelunasan</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="admin_order_data" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-12">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$jumlahLunas}}</h3>

                <p>Lunas</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="admin_order_data" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</section>
<script type="text/javascript">
  var $salesChart = $('#sales-chart')
  // eslint-disable-next-line no-unused-vars
  var salesChart = new Chart($salesChart, {
    type: 'bar',
    data: {
      labels: ['JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
      datasets: [
      {
        backgroundColor: '#007bff',
        borderColor: '#007bff',
        data: [1000, 2000, 3000, 2500, 2700, 2500, 3000]
      },
      {
        backgroundColor: '#ced4da',
        borderColor: '#ced4da',
        data: [700, 1700, 2700, 2000, 1800, 1500, 2000]
      }
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: mode,
        intersect: intersect
      },
      hover: {
        mode: mode,
        intersect: intersect
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          // display: false,
          gridLines: {
            display: true,
            lineWidth: '4px',
            color: 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks: $.extend({
            beginAtZero: true,

            // Include a dollar sign in the ticks
            callback: function (value) {
              if (value >= 1000) {
                value /= 1000
                value += 'k'
              }

              return '$' + value
            }
          }, ticksStyle)
        }],
        xAxes: [{
          display: true,
          gridLines: {
            display: false
          },
          ticks: ticksStyle
        }]
      }
    }
  })
</script>
@endsection