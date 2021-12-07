@extends('customers/layouts/main')

@section('title','Balitekno | Pelunasan')

@section('content-header', 'Pembayaran')

@section('content')

<section class="content">
  <div class="contaianer">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> Pelunasan </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body text-center">
            <div class="col-sm-12 table-responsive">
              <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th>No</th>
                    <th >Nama Sistem</th>
                    <th >Harga</th>
                    <th >Kategori</th>
                    <th >Tunggakan</th>
                    <th >Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($orderc as $i => $oc)
                  <tr class="odd">
                    <td>{{$i+1}}</td>
                    <td>{{$oc->system_name}}</td>
                    <td>{{$oc->system_price}}</td>
                    <td>{{$oc->system_category}}</td>
                    <td>{{$oc->remaining_payments}}</td>
                    <td>
                      <a href="/tampilan_rekening_cus{{$oc->id}}" class="btn btn-secondary"><i class="fa fa-send"></i>Bayar</a>
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