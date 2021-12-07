@extends('admins/layouts/main')

@section('title','Balitekno | Data Customer')

@section('content-header', 'Data Customer')

@section('content')

<section class="content">
  <div class="contaianer">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> Data Customer </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="col-sm-12 table-responsive">

              <!-- /.modal tambah -->
              <div class="modal fade" id="modaltambahpayment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content bg-secondary">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Customer</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!-- /.form tambah -->
                      <form method="post" action="/data_customers/tambah" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label class="float-left" for="exampleInputEmail1">Nama</label>
                          <input required="" name="customers_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputEmail1">Email</label>
                          <input required="" name="customers_email"type="text" class="form-control" id="exampleInputEmail1" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputFile">KTP</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input name="photos_ktp" type="file" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                          </div>
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

              <table id="example1" class="table text-center table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th >No</th>
                    <th >Nama</th>
                    <th >Email</th>
                    <th >Username</th>
                    <th >KTP</th>
                    <th >Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_customers as $i => $c)
                  <tr class="odd">
                    <td>{{$i+1}}</td>
                    <td>{{$c->customers_name}}</td>
                    <td>{{$c->customers_email}}</td>
                    <td>{{$c->customers_username}}</td>
                    
                    <!-- button eye -->
                    <td>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModallihat{{$c->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content bg-secondary">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <img style="width: 200px" src="lte/dist/img/landing_page/customer/{{$c->photos_ktp}}">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="btn  btn-sm"><i class="fa fa-eye" data-toggle="modal" data-target="#exampleModallihat{{$c->id}}"></i></a>
                    </td>
                    <!-- /.modal ubah -->
                    <div class="modal fade" id="exampleModal{{$c->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content bg-secondary">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah  Data Customer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <!-- /.form ubah -->
                            <div class="card-body">
                              <form method="post" action="/data_customers/ubah_{{$c->id}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <label class="float-left" for="customers_name">Nama</label>
                                  <input required="" name="customers_name" type="text" class="form-control" id="customers_name" value="{{$c->customers_name}}">
                                </div>
                                <div class="form-group">
                                  <label class="float-left" for="customers_email">Email</label>
                                  <input required="" name="customers_email" type="text" class="form-control" id="customers_email" value="{{$c->customers_email}}">
                                </div>
                                
                                <div class="form-group">
                                  <label class="float-left" for="exampleInputFile">KTP</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input name="photos_ktp" value="{{$c->photos_ktp}}" type="file" class="custom-file-input" id="exampleInputFile">
                                      <label class="custom-file-label" for="exampleInputFile">{{$c->photos_ktp}}</label>
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

                    <td>
                      <button type="button" data-toggle="modal" data-target="#exampleModal{{$c->id}}" class="btn  btn-sm"><i class="fa fa-pen"></i></button>
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