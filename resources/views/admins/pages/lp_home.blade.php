@extends('admins/layouts/main')

@section('title','Balitekno | Landing Page Home')

@section('content-header', 'Home')

@section('content')

<section class="content">
  <div class="contaianer">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> Home </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body text-center">
            <div class="col-sm-12 table-responsive">

              <!-- /.modal tambah -->
              <div class="modal fade" id="modaltambahlphome" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content bg-secondary">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Data Home</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!-- /.form tambah -->
                      <form method="post" action="/lp_home/tambah" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label class="float-left" for="exampleInputtext">Nama Prusahaan</label>
                          <input required="" name="title" type="text" class="form-control" id="exampleInputtext" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputtext">Alamat</label>
                          <input required="" name="dekskripsi"type="text" class="form-control" id="exampleInputtext" placeholder="Input Text">
                        </div>
                        
                        <div class="form-group">
                          <label class="float-left" for="exampleInputFile">Logo</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input name="pictures" type="file" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                          </div>
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
              <button type="button" data-toggle="modal" data-target="#modaltambahlphome" class="btn btn-secondary btn-sm float-right mb-2"> Tambah </button>

              <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th>No</th>
                    <th >Nama Prusahaan</th>
                    <th >Alamat</th>
                    <th >Logo</th>
                    <th >Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($alphome as $i => $h)
                  <tr class="odd">
                    <td>{{$i+1}}</td>
                    <td>{{$h->title}}</td>
                    <td>{{$h->dekskripsi}}</td>
                    <!-- button eye -->
                    <td>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModallihat{{$h->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content bg-secondary">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <img style="width: 400px" src="lte/dist/img/landing_page/home/{{$h->logo}}">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="btn  btn-sm"><i class="fa fa-eye" data-toggle="modal" data-target="#exampleModallihat{{$h->id}}"></i></a>
                    </td>
                    <!-- button pen & trash -->
                    <td>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModledit{{$h->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <form method="post" action="/lp_home/ubah/{{$h->id}}" enctype="multipart/form-data">
                                  @csrf
                                  <div class="form-group">
                                    <label class="float-left" for="title">Nama Perusahaan</label>
                                    <input required="" name="title" type="text" class="form-control" id="title" value="{{$h->title}}">
                                  </div>
                                  <div class="form-group">
                                    <label class="float-left" for="dekskripsi">Alamat</label>
                                    <input required="" name="dekskripsi" type="text" class="form-control" id="dekskripsi" value="{{$h->dekskripsi}}">
                                  </div>

                                  <div class="form-group">
                                    <label class="float-left" for="exampleInputFile">Logo</label>
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input name="pictures" value="{{$h->logo}}" type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">{{$h->logo}}</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembai</button>
                                <button type="submit" class="btn btn-secondary">Simpan</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <button type="button" data-toggle="modal" data-target="#exampleModledit{{$h->id}}" class="btn  btn-sm"><i class="fa fa-pen"></i></button>
                      
                      <a lph_id="{{$h->id}}" class="btn btn-sm delete_lph"><i class="fa fa-trash"></i></a>
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