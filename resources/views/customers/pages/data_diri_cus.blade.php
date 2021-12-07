@extends('customers/layouts/main')

@section('title','Balitekno | Data Diri')

@section('content-header', 'Data Diri')

@section('content')

<section class="content">
  <div class="contaianer">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> Data Diri </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body text-center">
            <div class="col-sm-12 table-responsive">
              <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th >Nama</th>
                    <th >Email</th>
                    <th >Username</th>
                    <th >KTP</th> 
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_diri as $dd)
                  <tr class="odd">
                    <td>{{$dd->customers_name}}</td>
                    <td>{{$dd->customers_email}}</td>
                    <td>{{$dd->customers_username}}</td>
                    <!-- button eye -->
                    <td>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content bg-secondary">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <img style="width: 200px" src="lte/dist/img/landing_page/customer/{{$dd->photos_ktp}}">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-secondary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="btn  btn-sm"><i class="fa fa-eye" data-toggle="modal" data-target="#exampleModal"></i></a>
                    </td>

                    <!-- /.modal ubah -->
                    <div class="modal fade" id="exampleModal{{$dd->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content bg-secondary">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah  Data Diri</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <!-- /.form tambah -->
                            <div class="card-body">
                              <form method="post" action="/data_diri_cus/ubah/{{$dd->id}}">
                                @csrf
                                <div class="form-group">
                                  <label class="float-left" for="customers_name">Nama</label>
                                  <input required="" name="customers_name" type="text" class="form-control" id="customers_name" value="{{$dd->customers_name}}">
                                </div>
                                <div class="form-group">
                                  <label class="float-left" for="customers_email">Email</label>
                                  <input required="" name="customers_email" type="text" class="form-control" id="customers_email" value="{{$dd->customers_email}}">
                                </div>

                                <div class="form-group">
                                  <label class="float-left" for="exampleInputFile">Foto</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input name="picture" value="{{$dd->photos_ktp}}" type="file" class="custom-file-input" id="exampleInputFile">
                                      <label class="custom-file-label" for="exampleInputFile">{{$dd->photos_ktp}}</label>
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
                  </td>

                  <td>
                    <button type="button" data-toggle="modal" data-target="#exampleModal{{$dd->id}}" class="btn  btn-sm"><i class="fa fa-pen"></i></button>
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