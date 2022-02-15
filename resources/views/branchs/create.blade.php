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
    <form action="{{route('branch.store')}}" method="post">
        @csrf
      <div class="container-fluid">
          <div class="row">
              <div class="col-6">
                  <div class="card">
                      <div class="card-body">

                          <div class="form-group">
                              <label for="exampleInputName">Nama cabang</label>
                              <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="" name="metode_payment" value="{{old('metode_payment')}}">
                              @error('name') <span class="text-danger">{{$message}}</span> @enderror
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName">Nama Logo</label>
                              <input type="text" class="form-control @error('cap') is-invalid @enderror" id="exampleInputName" placeholder="" name="cap" value="{{old('cap')}}">
                              @error('cap') <span class="text-danger">{{$message}}</span> @enderror
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