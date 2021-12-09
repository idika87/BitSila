@extends('admins/layouts/main')

@section('title','Balitekno | Data Admin')

@section('content-header', 'Data Admin')

@section('content')

<section class="content">
  <div class="contaianer">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> Data Admin </h3>
          </div>

          <!-- /.card-header -->
          <div class="card-body text-center">
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
                      <form method="post" action="/data_admin/tambah" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label class="float-left" for="exampleInputEmail1">Nama</label>
                          <input required="" name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputEmail1">Email</label>
                          <input required="" name="email"type="email" class="form-control" id="exampleInputEmail1" placeholder="Input Text">
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

              <!-- /.end modal tambah -->

              <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th >No</th>
                    <th >Nama</th>
                    <th >Username</th>
                    <th >Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_admin as $i => $ad)
                  <tr class="odd">
                    <td>{{$i+1}}</td>
                    <td>{{$ad->name}}</td>
                    <td>{{$ad->admins_username}}</td>
                    <!-- button trash -->
                    <td>
                      <a ad_id="{{$ad->id}}" class="btn btn-sm delete_ad"><i class="fa fa-trash"></i></a>
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