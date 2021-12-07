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
            <h3 class="card-title"> Cetak Pemesanan </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body text-center">
            <div class="col-sm-12 table-responsive">

              <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th>No</th>
                    <th>Nama Prodak</th>
                    <th>Katagori Prodak</th>
                    <th>Harga Prodak</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_orde as $i => $do)
                  <tr class="odd">
                    <td>{{$i+1}}</td>
                    <td>{{$do->system_name}}</td>
                    <td>{{$do->system_category}}</td>
                    <td>{{$do->system_price}}</td>
                    
                    <td>
                      <div>
                        <a href="report_pemesanan_cus{{$do->id}}" class=" text-center btn btn-secondary"><i class="fa fa-send "></i>Cetak</a>
                      </div>
                    </td>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

@endsection