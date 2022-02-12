@extends('layouts.admin')

@section('title')
    <title>Antigen Bandung</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Tambah </li>
    </ol>
    <form action="{{route('payment.store')}}" method="post">
        @csrf
      <div class="container-fluid">
          <div class="row">
              <div class="col-6">
                  <div class="card">
                      <div class="card-body">

                          <div class="form-group">
                              <label for="exampleInputName">Keterangan metode Pembayaran</label>
                              <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Keterangan Metode Pembayaran" name="metode_payment" value="{{old('metode_payment')}}">
                              @error('harga') <span class="text-danger">{{$message}}</span> @enderror
                          </div>

                          

                      </div>

                      <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Simpan</button>
                          <a href="{{route('setting.index')}}" class="btn btn-default">
                            Batal
                        </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</main>
@endsection