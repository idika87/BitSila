@extends('customers/layouts/main')

@section('title','Balitekno | Data Pesanan')

@section('content-header', 'Data Pesanan')

@section('content')

<section class="content">
  <div class="contaianer">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> Data Pesanan </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body text-center">
            <div class="col-sm-12 table-responsive">
              <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr style="text-align: center;">
                    <th style="vertical-align: middle; text-align: center;" rowspan="2">No</th>
                    <th style="vertical-align: middle; text-align: center;" rowspan="2">Nama Sistem</th>
                    <th style="vertical-align: middle; text-align: center;" rowspan="2">Harga sistem</th>
                    <th style="vertical-align: middle; text-align: center;" rowspan="2">Katagori Prodak</th>
                    <th style="vertical-align: middle; text-align: center;" rowspan="2">DP</th>
                    <th style="vertical-align: middle; text-align: center;" rowspan="2">Bayar Lunas</th>
                    <th style="vertical-align: middle; text-align: center;" rowspan="2">Sisa Pembayaran</th>
                    <th style="vertical-align: middle; text-align: center;" rowspan="2">Total Pembayaran</th>
                    <th style="vertical-align: middle; text-align: center;" rowspan="2">Status</th>
                    <th style="vertical-align: middle; text-align: center;" rowspan="2">Bukti Pembayaran</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($orderc as $i => $oc)
                  <tr class="odd">
                    <td>{{$i+1}}</td>
                    <td>{{$oc->system_name}}</td>
                    <td>{{$oc->system_price}}</td>
                    <td>{{$oc->system_category}}</td>
                    <td>{{$oc->down_payments}}</td>
                    <td>{{$oc->direct_payments}}</td>
                    <td>{{$oc->remaining_payments}}</td>
                    <td>{{$oc->system_price}}</td>
                    <td>{{$oc->status}}</td>
                    <!-- button up -->
                    <td>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModledit{{$oc->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content bg-secondary">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="card-body">
                                <form method="post" action="/data_pesanan_cus/ubah/{{$oc->id}}" enctype="multipart/form-data">
                                  @csrf

                                  <div class="form-group">
                                    <label class="float-left" for="exampleInputFile">Foto</label>
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input name="orderc" type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">{{$oc->evidence_payments}}</label>
                                      </div>
                                    </div>
                                  </div>

                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary">Simpan</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      @if($oc->status != "Lunas" && $oc->evidence_payments == null)
                      <button type="button" data-toggle="modal" data-target="#exampleModledit{{$oc->id}}" class="btn  btn-sm"><i class="fa fa-upload"></i></button>
                      @elseif($oc->evidence_payments != null && $oc->status != "Lunas")
                      <button type="button" data-toggle="modal" data-target="#exampleModledit{{$oc->id}}" class="btn btn-sm"><i class="fa fa-upload text-primary"></i></button>
                      @else
                      <button type="button" data-toggle="modal" data-target="#" class="btn btn-sm"><i class="fa fa-upload text-danger"></i></button>
                      @endif
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