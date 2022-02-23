@extends('layouts.admin')

@section('title')
    <title>Antigen</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Antigen Bandung  Jaswita</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Antigen Jaswita
                                {{-- <a href="{{ route('antigens.create') }}" class="btn btn-primary btn-sm float-right"><i class="fa fa-magic"></i>&nbsp;Tambah</a>|
                              <a href="/antigens/export">Laporan</a> --}}
                               
                            </h4>
                        </div>
                        <div class="card-body">
                            <!-- JIKA TERDAPAT FLASH SESSION, MAKA TAMPILAKAN -->
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                            <!-- JIKA TERDAPAT FLASH SESSION, MAKA TAMPILAKAN -->

                            <!-- BUAT FORM UNTUK PENCARIAN, METHODNYA ADALAH GET -->
                           
                            <!--<form action="{{ route('antigens.index') }}" method="get">-->
                            <!--    <div class="input-group mb-3 col-md-3 float-right">-->
                            <!--        <input type="text" name="q" class="form-control" placeholder="Cari..." value="{{ request()->q }}">-->
                            <!--        <div class="input-group-append">-->
                            <!--            <button class="btn btn-secondary" type="button">Cari</button>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</form>-->
                          
                            <!-- TABLE UNTUK MENAMPILKAN DATA PRODUK -->
                            <div class="table-responsive">
                               
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                             <th>No</th>
                                            <th>No Registrasi</th>
                                       
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                           
                                            <th>Jenis Test</th>
                                            <th>Hasil</th>
                                            <th>cabang</th>
                                            <th>Dibuat</th>
                                            <th>Admin Input</th>
                                            <th>Swabber</th>

                                            <th>*</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- LOOPING DATA TERSEBUT MENGGUNAKAN FORELSE -->
                                        <!-- ADAPUN PENJELASAN ADA PADA ARTIKEL SEBELUMNYA -->
                                           
                                        @forelse ($Antigen as $key => $row)
                                        
                                        <tr>
                                            <td>{{$key+1}}</td>
                                           <td>
                                              <strong>{{ $row->noreg }}</strong><br>
                                                                                         </td>
                                           <td>
                                               
                                               <strong>{{ $row->customer->NIK }}</strong><br>
                                               <!-- ADAPUN NAMA KATEGORINYA DIAMBIL DARI HASIL RELASI PRODUK DAN KATEGORI -->
                                             
                                           </td>
                                           {{-- <td>{{ $row->customer->name }} </td> --}}
                                       </td>
                                      
                                           
                                         
                                           <td>{{ $row->customer->name }} </td>
                                           <td>{{ $row->customer->jenis_kelamin }} </td>
                                           <td>{{ $row->category->name }} </td>
                                           <td>{{ $row->hasil }} </td>
                                           <td>{{ $row->cabang->name }} </td>
                                           <td>{{ $row->created_at->format(' H:i') }} WIB</td>
                                           <td >{{ $row->user->name }}</td> 
                                          
                                           
                                           
                                           <td>{{ $row->swabber->name }}</td>   
                                           {{-- <td>{{ $row->district->city->name }}</a></td> --}}
                                           
                                           <!-- KARENA BERISI HTML MAKA KITA GUNAKAN { !! UNTUK MENCETAK DATA -->
                                       
                                           <td>
                                               <!-- FORM UNTUK MENGHAPUS DATA PRODUK -->
                                               <a href="/branch/show/{{Crypt::encrypt($row->id)}}" class="btn btn-success btn-sm shadow "><i class="nav-icon icon-share"> SHARE </i></a>
                                               <a href="/branch/cetak/{{Crypt::encrypt($row->id)}}" class="btn btn-warning btn-sm shadow "><i class="nav-icon icon-docs"> CETAK</i> </a>
                                              
                                              
                                               
                                              
                                           </td>
                                          
                                    
                                       </tr>
               
                                        @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada data</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{ $Antigen->links() }}
    </div>
</main>
@endsection