@extends('layouts.admin')

@section('title')
    <title>Antigen</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Antigen Bandungg</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Antigen Bandung
                                <a href="{{ route('antigens.create') }}" class="btn btn-primary  float-right"><i class="fa fa-magic"></i>&nbsp;Tambah</a>|
                         
                                {{-- <div class="input-group mb-3 col-md-3 float-right">
                                    <div class="input-group-append">
                                    <input type="text" name="search" class="form-control" placeholder="Cari..." value="{{ request('search')}}">
                                    <button class="btn btn-secondary" type="submit">Cari</button>
                                </div>
                                </div> --}}
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
                           
                            {{-- <form action="{{ route('antigens.index') }}" method="get"> --}}
                            <!--    <div class="input-group mb-3 col-md-3 float-right">-->
                            <!--        <input type="text" name="q" class="form-control" placeholder="Cari..." value="{{ request()->q }}">-->
                            <!--        <div class="input-group-append">-->
                            <!--            <button class="btn btn-secondary" type="button">Cari</button>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</form>-->
                            
                            {{-- <div class="row justify-content-center ">
                                <div class="col-md-4">
                                    <form action="/antigens/report">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" class="form-control" placeholder="Masukan Noregistrasi" value="{{ request('search')}}">
                                        <button class="btn btn-success" type="submit">Cari</button>
                                    </div>
                                </form>
                                </div>
                            </div> --}}
                           
                            Halaman : {{ $Antigen->currentPage() }} <br/>
                            Jumlah Data : {{ $Antigen->total() }} <br/>
                          
                                <div class="input-group-append">
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
                                            <th>Created At</th>
                                            <th>Admin Input</th>
                                            <th>Swabber</th>

                                            <th>*</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- LOOPING DATA TERSEBUT MENGGUNAKAN FORELSE -->
                                        <!-- ADAPUN PENJELASAN ADA PADA ARTIKEL SEBELUMNYA -->
                                           
                                        @forelse ($Antigen as $key => $row)
                                        @if ($row->user_id == 1)
                                        <tr class="bg-danger">
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
                                            <td>Perlu diproses</td>
                                            <td>Perlu diproses</td>
                                            
                                            {{-- <td>{{ $row->cabang->name }} </td> --}}
                                            <td>{{ $row->created_at->format('d F, Y H:i') }} </td>
                                            <td >{{ $row->user->name }}</td> 
                                           
                                            
                                            
                                            {{-- <td>Perlu diproses</td>    --}}
                                            {{-- <td>{{ $row->district->city->name }}</a></td> --}}
                                            
                                            <!-- KARENA BERISI HTML MAKA KITA GUNAKAN { !! UNTUK MENCETAK DATA -->
                      
                                           <td> <a href="{{ route('antigens.edit', $row->id) }}" class="btn btn-sm btn-dark shadow "><i class="nav-icon icon-note"></i> Edit</a></td>
                                            <td colspan="3">
                                                
                                               
                                                 <form action="{{ route('antigens.destroy', $row->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            
                                                 <button class="btn btn-dark  btn-sm shadow"><i class="nav-icon icon-trash"></i> Hapus</button>
                                                
                                            </form>
                                        </td>
                                       
                                        </tr>
                                    
                                        @else
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
                                           <td>{{ $row->created_at->format('d F, Y H:i') }} </td>
                                           <td >{{ $row->user->name }}</td> 
                                          
                                           
                                           
                                           <td>{{ $row->swabber->name }}</td>   
                                           {{-- <td>{{ $row->district->city->name }}</a></td> --}}
                                           
                                           <!-- KARENA BERISI HTML MAKA KITA GUNAKAN { !! UNTUK MENCETAK DATA -->
                                       
                                           <td>
                                               <!-- FORM UNTUK MENGHAPUS DATA PRODUK -->
                                               <a href="/antigens/show/{{Crypt::encrypt($row->id)}}" class="btn btn-success btn-sm shadow "><i class="nav-icon icon-share"> SHARE </i></a>
                                               <a href="/antigens/cetak/{{Crypt::encrypt($row->id)}}" class="btn btn-warning btn-sm shadow "><i class="nav-icon icon-docs"> CETAK</i> </a>
                                               <a href="/antigens/kwitansi/{{Crypt::encrypt($row->id)}}" class="btn btn-primary btn-sm shadow "><i class="nav-icon icon-docs"> KWITANSI</i> </a>
                                              
                                               @if($row->user_id == 18)
                                               <a href="{{ route('antigens.edit', $row->id) }}" class="btn btn-sm btn-dark shadow "><i class="nav-icon icon-note"></i> Edit</a>
                                               @endif
                                              
                                           </td>
                                           <td>
                                               
                                              
                                       </td>
                                       <td> </td>
                                       </tr>
                                        @endif
                                       
                                        @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada data</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                        <div class="row bg-info">
                            <div class="col">
                                {{-- {{ $Antigen->links() }} --}}
                                
                            </div>
                        </div>
                       
                        {{ $Antigen->links() }}
                       

                      
                    </div>
                </div>
            </div>
        </div>

        {{-- {{ $Antigen->links() }} --}}
    </div>
</main>
@endsection