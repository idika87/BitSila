@extends('admins/layouts/main')

@section('title','Balitekno | payment_method')

@section('content-header', 'Data Metode Pembayaran')

@section('content')

<section class="content">
  <div class="contaianer">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> Data Metode Pembayaran </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body text-center">
            <div class="col-sm-12 table-responsive">

              <!-- /.modal tambah -->
              <div class="modal fade" id="modaltambahpayment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content bg-secondary">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Metode Pembayaran</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!-- /.form tambah -->
                      <form method="post" action="/payment_method/tambah">
                        @csrf
                        <div class="form-group">
                          <label class="float-left" for="exampleInputEmail1">Nama</label>
                          <input required="" name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputEmail1">Nama Pembayaran</label>
                          <input required="" name="metode_nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputEmail1">Kode Pembayaran</label>
                          <input required="" name="urayan"type="text" class="form-control" id="exampleInputEmail1" placeholder="Input Text">
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
              <button type="button" data-toggle="modal" data-target="#modaltambahpayment" class="btn btn-secondary btn-sm float-right mb-2"> Tambah </button>

              <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th>NO</th>
                    <th >Nama</th>
                    <th >Nama Pembayaran</th>
                    <th >Kode Pembayaran</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($payment as $i => $p)
                  <tr class="odd">
                    <td>{{$i+1}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->metode_nama}}</td>
                    <td>{{$p->urayan}}</td>
                    <!-- button pen & trash -->
                    <td>
                     <!-- /.modal ubah -->
                     <div class="modal fade" id="exampleModal{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content bg-secondary">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Metode Pembayaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <!-- /.form edit -->
                            <div class="card-body">
                              <form method="post" action="/payment_method/ubah/{{$p->id}}">
                                @csrf
                                <div class="form-group">
                                  <label class="float-left" for="name">Kode Pembayaran</label>
                                  <input required="" name="name" type="text" class="form-control" id="name" value="{{$p->name}}">
                                </div>
                                <div class="form-group">
                                  <label class="float-left" for="metode_nama">Nama Pembayaran</label>
                                  <input required="" name="metode_nama" type="text" class="form-control" id="metode_nama" value="{{$p->metode_nama}}">
                                </div>
                                <div class="form-group">
                                  <label class="float-left" for="urayan">Kode Pembayaran</label>
                                  <input required="" name="urayan" type="text" class="form-control" id="urayan" value="{{$p->urayan}}">
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
                    <button type="button" data-toggle="modal" data-target="#exampleModal{{$p->id}}" class="btn  btn-sm"><i class="fa fa-pen"></i></button>
                    <a pm_id="{{$p->id}}" class="btn btn-sm delete_pm"><i class="fa fa-trash"></i></a>
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