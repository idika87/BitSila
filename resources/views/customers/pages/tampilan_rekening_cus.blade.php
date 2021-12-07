@extends('customers/layouts/main')

@section('title','Balitekno | Down Payment')

@section('content-header', 'Pembayaran')

@section('content')

<section class="content">
  <div class="contaianer">
    <div class="row">
      <div class="col-md-12">
        <div class="card">

          <!-- /.card-header -->
          <div class="card-body">
            @isset($bank, $noRek, $a_n, $jumlah)
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-info"></i> Pemberitahuan!</h4>
              Silahkan transfer ke rekening <b>{{$bank}}</b> No Rek : <b>{{$noRek}}</b> a/n <b>{{$a_n}}</b> sejumlah <b>Rp. {{number_format($jumlah)}}</b>
            </div>
            @else
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h5><i class="icon fas fa-info"></i> Alert!</h5>
              Silahkan Pilih Metode Yang Akan Digunakan
            </div>
            @endisset
            <form method="post" action="/tampilan_rekening_cus_bayar">
              <div class="form-group row">
                @csrf
                <div class="col-md-2">
                  <label for="bank">Melalui</label>
                </div>
                <div class="col-md-8">
                  @isset($jumlah)
                  <input hidden="" type="number" name="remaining_payments" value="{{$jumlah}}">
                  @endisset
                  <select required="" name="bank" class="form-control" id="bank" >
                    @foreach($customer_payment as $cp)
                    <option>{{$cp->metode_nama}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-2">
                  <button type="submit" class="btn btn-secondary">Bayar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection