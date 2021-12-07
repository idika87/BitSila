@extends('admins/layouts/main')

@section('title','Balitekno |  Pesan Masuk')

@section('content-header', 'Pesan Masuk')

@section('content')

<section class="content">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Pesan Masuk</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="col-sm-12">
          <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
            <thead>
              <tr role="row">
                <th >No</th>
                <th >Nama</th>
                <th >Email</th>
                <th >Subject</th>
                <th >Message</th>
                <th >Tanggal</th>
              </tr>
            </thead>

            <tbody>
              @foreach($contact_a as $i => $pa)
              <tr class="odd">
                <td>{{$i+1}}</td>
                <td>{{$pa->nama}}</td>
                <td>{{$pa->email}}</td>
                <td>{{$pa->subject}}</td>
                <td>{{$pa->messange}}</td>
                <td>{{$pa->created_at}}</td>
                @endforeach
              </tr>
            </tbody>

          </table>
        </div>
      </div>

    </div>
    <!-- /.card -->
  </div>
</section>

@endsection
