@extends('layouts.admin')

@section('title')
    <title>Antigen</title>
@endsection

@section('content')
<main class="main mt-5">
  <div class="container-fluid">
    <div class="">
        <div class="card p-5">
            <img class="navbar-brand-full" src="{{ asset('assets/img/logofix.png') }}" width="189" height="75" alt="">

              <div class=" mx-auto b"  media="print" style="width: 900px;">
                <div class="register-logo " >
                 
                </div>
                
              </div>

              <div class="row invoice-info mt-5">
                <div class="col-sm-4 invoice-col">
                    <h4> Panggil Dokter</h4>
                  <address>
                    @forelse ($contact as $val)
                    <strong>Admin, Inc.</strong><br>
                    instagram: {{ $val->instagram }} <br>
                    other: {{ $val->other }} <br>
                    address : {{ $val->alamat }} <br>
                    Phone: {{ $val->telphone }}<br>
                    Email: {{ $val->email }}
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data</td>
                    </tr>
                    @endforelse
                  </address>
                  <a href="{{ route('contact.edit', $val->id) }}" class="btn btn-warning ">Edit</a>
                </div>
                <!-- /.col -->
               
               

</main>
@endsection