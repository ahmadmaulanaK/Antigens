@extends('layouts.auth')

@section('title')
    <title>Login</title>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card mx-4">
          <div class="card-body p-4">
            <h1>Register</h1>
            <p class="text-muted">Create your account</p>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Username">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" placeholder="Email">
            </div>

            

            <button type="button" class="btn btn-block btn-success">Register</button>
          </div>
          <div class="card-footer p-4">
              
            <div class="row">

              <div class="col-6">
                <img src="{{ asset('assets/img/logo antigen.png') }}" width="100%" height="">
               
              </div>
              <div class="col-6">
                <img src="{{ asset('assets/img/logofix.png') }}" width="100%" height="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection