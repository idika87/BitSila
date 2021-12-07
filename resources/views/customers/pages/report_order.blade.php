@extends('customers/layouts/main')

@section('title','Balitekno | Cetak Pemesanan')

@section('content-header', 'Cetak Pemesanan')

@section('content')

<section class="content">
  <div class="contaianer">
    <div class="row">
      <div class="col-md-12">
        <div class="card">

          <div class="card-header">
            <h3 class="card-title"> Rincian Pemesanan </h3>
          </div>

          <!-- /.card-header -->
          <div class="card-body text-center">
            <div class="col-sm-12 table-responsive">


              <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                  <div class="col-12">
                    <h4>
                      <img style="width: 50px" src="lte/dist/img/landing_page/home/{{$lphome->first()->logo}}" class="img-fluid animated"> {{$lphome->first()->title}}
                      <small class="float-right">Tanggal {{date('d/M/Y')}}</small>
                      <hr>
                    </h4>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                  <div class="col-sm-4 invoice-col">
                    From
                    <address>
                      <strong>{{$lphome->first()->title}}</strong><br>
                      {{$lphome->first()->dekskripsi}}<br>
                      Email: anhdikaparmana87@gmail.com
                    </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    To
                    <address>
                      <strong>{{$data_orde_detail->customers_name}}</strong><br>
                      Email: {{$data_orde_detail->Customer->customers_email}}
                    </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    <b>Invoice #007612</b><br>
                    <br>
                    <b>Order ID:</b> 4F3S8J<br>
                    <b>Payment Due:</b> {{$data_orde_detail->created_at}}<br>
                    <b>Account:</b> 968-34567
                  </div>
                </div>
                <hr>
                <!-- /.row -->


                <!-- Table row -->
                <div class="float-float">
                  <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th width="250px">Nama Sistem : </th>
                        <td>{{$data_orde_detail->system_name}}</td>
                      </tr>
                      <tr>
                        <th width="250px">Tanggal Pesan : </th>
                        <td>{{$data_orde_detail->created_at}}</td>
                      </tr>
                      <tr>
                        <th width="250px">Tanggal Lunas : 49/00/99</th>
                        <td>{{$data_orde_detail->updated_at}}</td>
                      </tr>
                      <tr>
                        <th width="250px">Katagori Prodak : </th>
                        <td>{{$data_orde_detail->system_category}}</td>
                      </tr>
                      <tr>
                        <th width="250px">Harga Produk : </th>
                        <td>{{$data_orde_detail->system_price}}</td>
                      </tr>

                    </table>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->



                <!-- this row will not appear when printing -->
                <div class="row no-print">
                  <div class="col-12">
                    <a onclick="return window.print();" href="#" rel="noopener" target="_blank" class="btn btn-default float-right"><i class="fas fa-print"></i> Print</a>
                  </button>

                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

@endsection