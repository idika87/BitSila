@extends('admins/layouts/main')

@section('title','Balitekno | test')

@section('content-header', 'text')

@section('content')

<section class="content">
  <div class="contaianer">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> text </h3>
          </div>

          
          <div class="row">
            <!-- garafik -->
            <div class="col-lg-4 col-12">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Sales</h3>
                    <a href="javascript:void(0);">View Report</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <p class="d-flex flex-column">
                      <span class="text-bold text-lg">$18,230.00</span>
                      <span>Sales Over Time</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                      <span class="text-success">
                        <i class="fas fa-arrow-up"></i> 33.1%
                      </span>
                      <span class="text-muted">Since last month</span>
                    </p>
                  </div>
                  <!-- /.d-flex -->

                  <div class="position-relative mb-4">
                    <canvas id="sales-chart" height="200"></canvas>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                      <i class="fas fa-square text-primary"></i> This year
                    </span>

                    <span>
                      <i class="fas fa-square text-gray"></i> Last year
                    </span>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- end garafik -->
            
            <!-- garafik -->
            <div class="col-lg-4 col-12">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Sales</h3>
                    <a href="javascript:void(0);">View Report</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <p class="d-flex flex-column">
                      <span class="text-bold text-lg">$18,230.00</span>
                      <span>Sales Over Time</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                      <span class="text-success">
                        <i class="fas fa-arrow-up"></i> 33.1%
                      </span>
                      <span class="text-muted">Since last month</span>
                    </p>
                  </div>
                  <!-- /.d-flex -->

                  <div class="position-relative mb-4">
                    <canvas id="sales-chart2" height="200"></canvas>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                      <i class="fas fa-square text-primary"></i> This year
                    </span>

                    <span>
                      <i class="fas fa-square text-gray"></i> Last year
                    </span>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- end garafik --> 

            <!-- garafik -->
            <div class="col-lg-4 col-12">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Sales</h3>
                    <a href="javascript:void(0);">View Report</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <p class="d-flex flex-column">
                      <span class="text-bold text-lg">$18,230.00</span>
                      <span>Sales Over Time</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                      <span class="text-success">
                        <i class="fas fa-arrow-up"></i> 33.1%
                      </span>
                      <span class="text-muted">Since last month</span>
                    </p>
                  </div>
                  <!-- /.d-flex -->

                  <div class="position-relative mb-4">
                    <canvas id="sales-chart3" height="200"></canvas>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                      <i class="fas fa-square text-primary"></i> This year
                    </span>

                    <span>
                      <i class="fas fa-square text-gray"></i> Last year
                    </span>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- end garafik --> 
          </div>



          <!-- /.card-header -->
          <div class="card-body text-center">
            <div class="col-sm-12 table-responsive">

              <!-- /.modal tambah -->
              <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content bg-secondary">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!-- /.form tambah -->
                      <form>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputEmail1">text</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputEmail1">text</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputEmail1">text</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Input Text">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label class="float-left" for="exampleInputFile">File input</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text">Upload</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="button" class="btn btn-secondary">Simpan</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.button tambah -->
            <button type="button" data-toggle="modal" data-target="#exampleModal2" class="btn btn-secondary btn-sm float-right mb-2"> Tambah </button>

            <!-- /.end modal tambah -->

            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
              <thead>
                <tr role="row">
                  <th >text</th>
                  <th >text</th>
                  <th >text</th>
                  <th >text</th>
                  <th >text</th>
                  <th >text</th>
                  <th >text</th>
                </tr>
              </thead>
              <tbody>
                <tr class="odd">
                  <td>text</td>
                  <td>text</td>
                  <td>text</td>
                  <td>text</td>
                  <td>text</td>
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
                            text/icons
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
                  <!-- button pen & trash -->
                  <td>
                   <!-- /.modal tambah -->
                   <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content bg-secondary">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- /.form tambah -->
                          <div class="card-body">
                            <div class="form-group">
                              <label for="exampleInputnama_customers">Nama Costomer</label>
                              <input type="nama_customers" class="form-control" id="exampleInputnama_customers">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputnama_sistem">Nama Sistem</label>
                              <input type="password" class="form-control" id="exampleInputnama_sistem">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputharga_sistem">Harga sistem</label>
                              <input type="password" class="form-control" id="exampleInputharga_sistem">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputdp">Dp</label>
                              <input type="password" class="form-control" id="exampleInputdp">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputkategori">Kategori</label>
                              <input type="password" class="form-control" id="exampleInputkategori">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputststus_pembayaran">Status Pembayaran</label>
                              <input type="password" class="form-control" id="exampleInputststus_pembayaran">
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembai</button>
                          <button type="button" class="btn btn-secondary">Simpan</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.button tambah -->
                  <button type="button" data-toggle="modal" data-target="#exampleModal2" class="btn  btn-sm"><i class="fa fa-pen"></i></button>
                  <a class="btn  btn-sm"><i class="fa fa-trash"></i></a>
                </td>
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