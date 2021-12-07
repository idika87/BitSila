@extends('admins/layouts/main')

@section('title','Balitekno | Landing Page Produk')

@section('content-header', 'Produk')

@section('content')

<section class="content">
  <div class="contaianer">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> Produk </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body text-center">
            <div class="col-sm-12 table-responsive">

              <!-- /.modal tambah -->
              <div class="modal fade" id="modaltambahlpproduk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content bg-secondary">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Data Produk</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!-- /.form tambah -->
                      <form method="post" action="/lp_produk/tambah" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                          <label class="float-left" for="exampleInputFile">Foto</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input name="picture_produk" type="file" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="float-left" for="exampleInputtext">Nama Sistem</label>
                          <input required="" name="system_name"type="text" class="form-control" id="exampleInputtext" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputtext">Kategori</label>
                          <input required="" name="system_category"type="text" class="form-control" id="exampleInputtext" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputtext">Harga</label>
                          <input required="" name="system_price"type="text" class="form-control" id="exampleInputtext" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputtext">Keterangan Sistem</label>
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
              <button type="button" data-toggle="modal" data-target="#modaltambahlpproduk" class="btn btn-secondary btn-sm float-right mb-2"> Tambah </button>

              <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th>No</th>
                    <th >Nama Sistem</th>
                    <th >Kategori</th>
                    <th >Harga</th>
                    <th >Keterangan Sistem</th>
                    <th >Foto</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($alpproduct as $i => $p)
                  <tr class="odd">
                    <td>{{$i+1}}</td>
                    <td>{{$p->system_name}}</td>
                    <td>{{$p->system_category}}</td>
                    <td>{{$p->system_price}}</td>
                    <td>{{$p->description}}</td>
                    <!-- button eye -->
                    <td>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModallihat{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content bg-secondary">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <img style="width: 400px" src="lte/dist/img/landing_page/produk/{{$p->pictures}}">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="btn  btn-sm"><i class="fa fa-eye" data-toggle="modal" data-target="#exampleModallihat{{$p->id}}"></i></a>
                    </td>
                    <!-- button pen & trash -->
                    <td>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModledit{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <form method="post" action="/lp_produk/ubah/{{$p->id}}" enctype="multipart/form-data">
                                  @csrf

                                  <div class="form-group">
                                    <label class="float-left" for="exampleInputFile">Foto</label>
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input name="picture_produk" value="{{$p->pictures}}" type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">{{$p->pictures}}</label>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="float-left" for="system_name">Nama Sistem</label>
                                    <input required="" name="system_name" type="text" class="form-control" id="system_name" value="{{$p->system_name}}">
                                  </div>
                                  <div class="form-group">
                                    <label class="float-left" for="system_category">Keterangan</label>
                                    <input required="" name="system_category" type="text" class="form-control" id="system_category" value="{{$p->system_category}}">
                                  </div>
                                  <div class="form-group">
                                    <label class="float-left" for="system_price">Harga</label>
                                    <input required="" name="system_price" type="text" class="form-control" id="system_price" value="{{$p->system_price}}">
                                  </div>
                                  <div class="form-group">
                                    <label class="float-left" for="description">Keterangan Sistem</label>
                                    <input required="" name="description" type="text" class="form-control" id="description" value="{{$p->description}}">
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
                      <button type="button" data-toggle="modal" data-target="#exampleModledit{{$p->id}}" class="btn  btn-sm"><i class="fa fa-pen"></i></button>
                      <a href="/lp_produk/hapus/{{$p->id}}" class="btn  btn-sm"><i class="fa fa-trash"></i></a>
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