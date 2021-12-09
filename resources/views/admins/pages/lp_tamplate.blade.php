@extends('admins/layouts/main')

@section('title','Balitekno | Landing Page Template')

@section('content-header', 'Template')

@section('content')

<section class="content">
  <div class="contaianer">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> Template </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body text-center">
            <div class="col-sm-12 table-responsive">

              <!-- /.modal tambah -->
              <div class="modal fade" id="modaltambahlptamplate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content bg-secondary">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Data Template</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!-- /.form tambah -->
                      <form method="post" action="/lp_tamplate/tambah" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                          <label class="float-left" for="exampleInputFile">Thumbnail</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input name="pictures_thumbnail" type="file" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="float-left" for="exampleInputtext">Nama</label>
                          <input required="" name="name_tamplate"type="text" class="form-control" id="exampleInputtext" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputtext">Keterangan</label>
                          <input required="" name="description_tamplate"type="text" class="form-control" id="exampleInputtext" placeholder="Input Text">
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
              <button type="button" data-toggle="modal" data-target="#modaltambahlptamplate" class="btn btn-secondary btn-sm float-right mb-2"> Tambah </button>

              <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th >No</th>
                    <th >Nama</th>
                    <th >Keterangan</th>
                    <th >Thumbnail</th>
                    <th >Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($alptamplate as $i => $t)
                  <tr class="odd">
                    <td>{{$i+1}}</td>
                    <td>{{$t->name_tamplate}}</td>
                    <td>{{$t->description_tamplate}}</td>
                    <!-- button eye -->
                    <td>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModallihat{{$t->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content bg-secondary">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <img style="width: 400px" src="lte/dist/img/landing_page/tamplate/{{$t->thumbnail}}">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="btn  btn-sm"><i class="fa fa-eye" data-toggle="modal" data-target="#exampleModallihat{{$t->id}}"></i></a>
                    </td>
                    <!-- button pen & trash -->
                    <td>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModledit{{$t->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <form method="post" action="/lp_tamplate/ubah/{{$t->id}}" enctype="multipart/form-data">
                                  @csrf

                                  <div class="form-group">
                                    <label class="float-left" for="exampleInputFile">Thumbnail</label>
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input name="pictures_thumbnail" value="{{$t->thumbnail}}" type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">{{$t->thumbnail}}</label>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="float-left" for="name_tamplate">Nama Client</label>
                                    <input required="" name="name_tamplate" type="text" class="form-control" id="name_tamplate" value="{{$t->name_tamplate}}">
                                  </div>
                                  <div class="form-group">
                                    <label class="float-left" for="description_tamplate">Keterangan</label>
                                    <input required="" name="description_tamplate" type="text" class="form-control" id="description_tamplate" value="{{$t->description_tamplate}}">
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
                      <button type="button" data-toggle="modal" data-target="#exampleModledit{{$t->id}}" class="btn  btn-sm"><i class="fa fa-pen"></i></button>
                      
                      <a lpte_id="{{$t->id}}" class="btn btn-sm delete_lpte"><i class="fa fa-trash"></i></a>
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