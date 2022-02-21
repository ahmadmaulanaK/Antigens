@extends('layouts.admin')

@section('title')
<title>Antigen</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Data PCR</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Data PCR {{$nowTimeDate,true}}||
                                <a href="{{ route('antigens.create') }}" class="btn btn-primary  float-right"><i
                                        class="fa fa-magic"></i>&nbsp;Tambah</a>

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
                                    <input type="text" name="search" class="form-control" placeholder="Cari..."
                                        value="{{ request('search')}}">
                                    <button class="btn btn-success" type="submit">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div> --}}


                    <div class="row">
                        @forelse ($Antigen as $key => $row)
                        <div class="col-sm-6 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <strong>{{ $row->customer->name }}</strong>

                                    <span class="badge badge-pill badge-danger float-right">{{$key+1}}</span>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <table style="width:100%" class="mt-1">
                                            <tr>
                                                <td valign="top" class="textt">No Registrasi</td>
                                                <td valign="top">:</td>
                                                <td>{{ $row->noreg }}</td>
                        
                                            </tr>
                                          
                                            <tr>
                                                <td class="textt">Nomor Identitas/KTP</td>
                                                <td>:</td>
                                                <td style="width:50%">{{$row->customer->NIK}}</td>
                                            </tr>
                                            <tr>
                                                <td class="textt">Tanggal Lahir</td>
                                                <td>:</td>
                                                <td>{{$row->customer->TTL}}</td>
                                            </tr>
                                            <tr>
                                                <td class="textt">Jenis Kelamin</td>
                                                <td>:</td>
                                                <td>{{$row->customer->jenis_kelamin}}</td>
                        
                        
                                            </tr>
                        
                                            <tr>
                                                <td class="textt">Alamat</td>
                                                <td>:</td>
                                                <td width="25%" valign="top" class="textt">{{$row->customer->address}}</td>
                                                <td class="kanan">
                        
                        
                        
                        
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>------------------</td>
                                            </tr>
                                            <tr>
                                                <td class="textt">Pemeriksaan </td>
                                                <td>:</td>
                                                <td>{{ $row->created_at->format('d F, Y | H:i ') }}</td> 
                                                
                        
                        
                                                <td></td>
                                            </tr>
                                        
                        
                                            <tr>
                                                <td valign="top" class="textt">Spesimen </td>
                                                <td valign="top">:</td>
                                                <td>{{ $row->spesimen }}</td>
                        
                                            </tr>
                                            <tr>
                                                <td valign="top" class="textt">Jenis Pelayanan </td>
                                                <td valign="top">:</td>
                                                <td>{{ $row->hasil }}</td>
                        
                                            </tr>
                                           
                                            <tr>
                                                <td class="textt">Lokasi</td>
                                                <td>:</td>
                                                <td>{{$row->titik->name}}</td>
                        
                        
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="textt">Cabang</td>
                                                <td>:</td>
                                                <td>{{$row->cabang->name}}</td>
                        
                        
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="textt">Layanan</td>
                                                <td>:</td>
                                                <td>{{ $row->pelayanan }}</td>
                        
                        
                                            </tr>
                                            <tr>
                                                <td class="textt">Swabber</td>
                                                <td>:</td>
                                                <td>{{ $row->swabber->name }}</td>
                        
                        
                                            </tr>
                                            <tr>
                                                <td class="textt">Admin Input</td>
                                                <td>:</td>
                                                <td>{{ $row->user->name }}</td>
                        
                        
                                            </tr>
                        
                                        </table>
                                  
                                      

                                    </div>
                               
                                  
                                </div>
                            </div>
                        </div>

                        @empty
                        <div class="card-body">
                           Tidak Ada Data
                        </div>
                        @endforelse


                    </div>
                 
                </div>
            </div>
        </div>
    </div>

    
    </div>
</main>
@endsection
