@extends('layouts.auth')

@section('title')
<title>Login</title>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-group">
            <div class="card p-4">
                <div class="card-body">


                    <!-- ACTIONNYA MENGARAH PADA URL /LOGIN -->
                    <!-- UNTUK MENCARI TAU TUJUAN URI DARI ROUTE NAME DIBAWAH, PADA COMMAND LINE, KETIKKAN PHP ARTISAN ROUTE:LIST DAN CARI URI YANG MENGGUNAKAN METHOD POST -->
                    <!-- KARENA URI /LOGIN DENGAN METHOD GET DIGUNAKAN UNTUK ME-LOAD VIEW HALAMAN LOGIN -->
                    <!-- PENGGUNAAN ROUTE() APABILA ROUTING TERSEBUT MEMILIKI NAMA, ADAPUN NAMENYA ADA PADA COLOM NAME ROUTE:LIST -->
                    <!-- JIKA ROUTINGNYA TIDAK MEMILIKI NAMA, MAKA GUNAKAN HELPER URL() DAN DIDALAMNYA ADALAH URINYA. CONTOH URL('/LOGIN') -->
                    <h2>Selamat Datang</h2>
                    <p class="fst-italic"> Resep kesuksesan adalah bekerja keras dan pantang menyerah.</p>


                    @if (Route::has('login'))

                    @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-success active "><i class=""> LOGIN</i></a>


                    @endauth

                    @endif
                </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                <div class="card-body text-center">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection