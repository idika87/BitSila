@extends('admins/layouts/main')

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
          <div class="card-body text-left">
            <div class="col-sm-12 table-responsive">

              <button class="btn btn-secondary" data-toggle="modal" data-target="#modal_cari_data_oder"><span>Cari Data</span>
              </button>

              <div class="row text-center">
                <div class="modal fade modal-success" id="modal_cari_data_oder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cari Data Berdasarkan Tangal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-left">
                        <form method="post" action="/admin_order_data_cari">
                          {{csrf_field()}}

                          <div class="form-group">
                            <label for="tgl_awal">Tanggal Awal</label>
                            <input required="" name="tgl_awal" type="date" class="form-control" id="tgl_awal">
                          </div>

                          <div class="form-group">
                            <label for="tgl_akhir">Tanggal Akhir</label>
                            <input required="" name="tgl_akhir" type="date" class="form-control" id="tgl_awal">
                          </div>

                          <div class="modal-footer">
                            <button class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>

                            <button class="btn btn-primary btn-sm" type="submit">Cari
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- /.modal tambah -->
              <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content bg-secondary">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Pesanan</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!-- /.form tambah -->
                      <form method="post" action="/admin_order_data/tambah">
                        @csrf
                        <div class="form-group">
                          <label class="float-left" for="exampleInputtexto">Nama Costomer</label>
                          <select name="customer_id" class="custom-select">
                            @foreach($customer as $c)
                            <option value="{{$c->id}}">{{$c->customers_name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputtexto">Nama Sistem</label>
                          <input required="" name="system_name" type="text" class="form-control" id="exampleInputtexto" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputtexto">Harga sistem</label>
                          <input required="" name="system_price" type="text" class="form-control" id="exampleInputtexto" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputtexto">Dp</label>
                          <input name="down_payments" type="number" class="form-control" id="exampleInputtexto" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputtexto">Kategori</label>
                          <input required="" name="system_category" type="text" class="form-control" id="exampleInputtexto" placeholder="Input Text">
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                          <button type="submit" class="btn btn-secondary">Simpan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.button tambah -->


              <button type="button" data-toggle="modal" data-target="#exampleModal2" class="btn btn-secondary btn-sm float-right mb-2"> Tambah </button>
              <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                <thead>
                  <th>No</th>
                  <th>Nama Costomer</th>
                  <th>Nama Sistem</th>
                  <th>Tanggal</th>
                  <th>Harga sistem</th>
                  <th>Dp</th>
                  <th>Bayar Lunas</th>
                  <th>Sisa Pembayaran</th>
                  <th>Kategori</th>
                  <th>Status Pembayaran</th>
                  <th>Bukti Pembayaran</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($order as $i => $o)
                <tr class="odd">
                  <td>{{$i+1}}</td>
                  <td>{{$o->customers_name}}</td>
                  <td>{{$o->system_name}}</td>
                  <td>{{$o->created_at}}</td>
                  <td>{{$o->system_price}}</td>
                  <td>{{$o->down_payments}}</td>
                  <td>{{$o->direct_payments}}</td>
                  <td>{{$o->remaining_payments}}</td>
                  <td>{{$o->system_category}}</td>
                  <td>{{$o->status}}</td>
                  
                  <!-- button eye -->
                  <td>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModallihat{{$o->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content bg-secondary">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <img style="width: 400px" src="lte/dist/img/bukti_pembayaran/{{$o->evidence_payments}}">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    @if($o->evidence_payments != null && $o->status != "Lunas")
                    <a class="btn  btn-sm"><i class="fa fa-eye text-primary" data-toggle="modal" data-target="#exampleModallihat{{$o->id}}"></i></a>
                    @elseif($o->status != "Lunas" && $o->evidence_payments == null)
                    <a class="btn  btn-sm"><i class="fa fa-eye" data-toggle="modal" data-target="#"></i></a>
                    @else
                    <a class="btn  btn-sm"><i class="fa fa-eye text-danger" data-toggle="modal" data-target="#"></i></a>
                    @endif
                  </td>

                  <!-- button pen & trash -->
                  <td>
                   <!-- /.modal ubah -->
                   <div class="modal fade" id="exampleModal{{$o->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content bg-secondary">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Ubah Pesanan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- /.form edit -->
                          <div class="card-body">
                            <form method="post" action="/admin_order_data/ubah/{{$o->id}}">
                              @csrf

                              <div class="form-group">
                                <label class="float-left" for="exampleInputtexto">Nama Costomer</label>
                                <select name="customer_id" class="custom-select">
                                  @foreach($customer as $c)
                                  <option value="{{$c->id}}">{{$c->customers_name}}</option>
                                  @endforeach
                                </select>
                              </div>

                              <div class="form-group">
                                <label class="float-left" for="system_name">Nama Sistem</label>
                                <input required="" name="system_name" type="text" class="form-control" id="system_name" value="{{$o->system_name}}">
                              </div>
                              <div class="form-group">
                                <label class="float-left" for="system_price">Harga sistem</label>
                                <input required="" name="system_price" type="text" class="form-control" id="system_price" value="{{$o->system_price}}">
                              </div>
                              <div class="form-group">
                                <label class="float-left" for="down_payments">DP</label>
                                <input name="down_payments" type="text" class="form-control" id="down_payments" value="{{$o->down_payments}}">
                              </div>
                              <div class="form-group">
                                <label class="float-left" for="direct_payments">Bayar Lunas</label>
                                <input name="direct_payments" type="text" class="form-control" id="direct_payments" value="{{$o->direct_payments}}">
                              </div>
                              <div class="form-group">
                                <label class="float-left" for="remaining_payments">Sisa Pembayaran</label>
                                <input name="remaining_payments" type="text" class="form-control" id="remaining_payments" value="{{$o->remaining_payments}}">
                              </div>  
                              <div class="form-group">
                                <label class="float-left" for="system_category">Kategori</label>
                                <input required="" name="system_category" type="text" class="form-control" id="system_category" value="{{$o->system_category}}">
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
                  <!-- /.button -->
                  <button type="button" data-toggle="modal" data-target="#exampleModal{{$o->id}}" class="btn  btn-sm"><i class="fa fa-pen"></i></button>
                  <a href="/admin_order_data/hapus/{{$o->id}}" class="btn  btn-sm"><i class="fa fa-trash"></i></a>



                  <!-- /.modal bayar -->
                  <div class="modal fade" id="exampleModabayar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content bg-secondary">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Sisa Pembayaran</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- /.form tambah -->
                          <div class="card-body">
                            <form method="post" action="/admin_order_data/bayar/{{$o->id}}">
                              @csrf

                              <!-- ./col -->
                              <div class="col-lg-12 col-12">
                                <!-- small box -->
                                <div class="small-box bg-light">
                                  <div class="inner text-left">
                                    <h3>{{$o->remaining_payments}}</h3>

                                    <p>{{$o->system_name}}</p>
                                  </div>
                                  <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="float-left" for="exampleInputtexto">Bayar</label>
                                <input required="" name="bayar" type="text" class="form-control" id="exampleInputtexto" placeholder="Input Jumlah">
                              </div>

                              <div class="card-footer">
                                <button type="submit" class="btn btn-secondary">Bayar</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.button tambah -->
                  <button type="button" data-toggle="modal" data-target="#exampleModabayar" class="btn  btn-sm"><i class="fa fa-credit-card"></i></button>
                </td>
                @endforeach
              </tr>
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