@extends('admins/layouts/main')

@section('title','Balitekno | Landing Page Bonus')

@section('content-header', 'Bonus')

@section('content')

<section class="content">
  <div class="contaianer">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> Bonus </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body text-center">
            <div class="col-sm-12 table-responsive">

              <!-- /.modal tambah -->
              <div class="modal fade" id="modaltambahlpbonus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content bg-secondary">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Data Client</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!-- /.form tambah -->
                      <form method="post" action="/lp_bonus/tambah" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label class="float-left" for="exampleInputtext">Nama Diskon</label>
                          <input required="" name="name"type="text" class="form-control" id="exampleInputtext" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputtext">Harga</label>
                          <input required="" name="price"type="text" class="form-control" id="exampleInputtext" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputtext">Didkon (%)</label>
                          <input required="" name="discount"type="number" min="1" max="100" class="form-control" id="exampleInputtext" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputtext">Keterangan</label>
                          <input required="" name="description"type="text" class="form-control" id="exampleInputtext" placeholder="Input Text">
                        </div>

                        <div class="card-footer">
                          <button type="submit" class="btn btn-secondary">Simpan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.button tambah -->
              <button type="button" data-toggle="modal" data-target="#modaltambahlpbonus" class="btn btn-secondary btn-sm float-right mb-2"> Tambah </button>

              <!-- /.end modal tambah -->
              <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th >No</th>
                    <th >Nama Diskon</th>
                    <th >Harga</th>
                    <th >Didkon</th>
                    <th >Harga Didkon</th>
                    <th >Dekripsi</th>
                    <th >Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($alpbonus as $i => $b)
                  <tr class="odd">
                    <td>{{$i+1}}</td>
                    <td>{{$b->name}}</td>
                    <td>{{$b->price}}</td>
                    <td>{{$b->price_discount}}</td>
                    <td>{{$b->discount}}</td>
                    <td>{{$b->description}}</td>
                    <!-- button pen & trash -->
                    <td>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModledit{{$b->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content bg-secondary">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal Ubah Bonus</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="card-body">
                                <form method="post" action="/lp_bonus/ubah/{{$b->id}}" enctype="multipart/form-data">
                                  @csrf

                                  <div class="form-group">
                                    <label class="float-left" for="name">Nama Diskon (%)</label>
                                    <input required="" name="name" type="text" class="form-control" id="name" value="{{$b->name}}">
                                  </div>
                                  <div class="form-group">
                                    <label class="float-left" for="price">Harga</label>
                                    <input required="" name="price" type="text" class="form-control" id="price" value="{{$b->price}}">
                                  </div>
                                  <div class="form-group">
                                    <label class="float-left" for="discount">Didkon</label>
                                    <input required="" name="discount" type="number" min="1" max="100" class="form-control" id="discount" value="{{$b->discount}}">
                                  </div>
                                  <div class="form-group">
                                    <label class="float-left" for="description">Dekripsi</label>
                                    <input required="" name="description" type="text" class="form-control" id="description" value="{{$b->description}}">
                                  </div>

                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembai</button>
                                <button type="submit" class="btn btn-secondary">Simpan</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <button type="button" data-toggle="modal" data-target="#exampleModledit{{$b->id}}" class="btn  btn-sm"><i class="fa fa-pen"></i></button>
                      <a href="/lp_bonus/hapus/{{$b->id}}" class="btn  btn-sm"><i class="fa fa-trash"></i></a>
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