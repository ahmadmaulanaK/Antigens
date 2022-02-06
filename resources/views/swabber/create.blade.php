@extends('layouts.admin')

@section('title')
    <title> Swabber</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Tambah </li>
    </ol>
    <form action="{{route('swabbers.store')}}" method="post">
      @csrf
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">

                          <div class="form-group">
                              <label for="exampleInputName">Nama</label>
                              <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Nama lengkap" name="name" value="{{old('name')}}">
                              @error('name') <span class="text-danger">{{$message}}</span> @enderror
                          </div>

                          <div class="form-group">
                              <label for="exampleInputEmail">Email address</label>
                              <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Masukkan Email" name="email" value="{{old('email')}}">
                              @error('email') <span class="text-danger">{{$message}}</span> @enderror
                          </div>
                          <div class="form-group">
                              <label for="TelphoneActiv">Telphone aktip</label>
                              <input type="text" class="form-control @error('telphone') is-invalid @enderror" id="TelphoneActiv" placeholder="Masukkan telphone" name="telphone" value="{{old('telphone')}}">
                              @error('telphone') <span class="text-danger">{{$message}}</span> @enderror
                          </div>
                          <fieldset class="form-group">
                              <div class="row">
                                  <label for="status">Jenis Kelamin :</label>
                              
                                <div class="col-sm-10">
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="Perempuan" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                      Perempuan
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="Laki-laki">
                                    <label class="form-check-label" for="gridRadios2">
                                      Laki-laki
                                    </label>
                                  </div>
                                  
                                </div>
                              </div>
                            </fieldset>

                      </div>

                      <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Simpan</button>
                          <a href="{{route('swabbers.index')}}" class="btn btn-default">
                              Batal
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</main>
@endsection