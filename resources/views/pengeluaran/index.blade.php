@extends('layouts.admin')

@section('title')
    <title>List Pengeluaran</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Pengeluaran</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pengeluaran</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('pengeluaran.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Jenis Pengeluaran</label>
                                    <input type="text" name="name" class="form-control"  value="{{old('name')}}">
                                    
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah </label>
                                    <input type="text" name="jumlah" class="form-control"  value="{{old('jumlah')}}">
                                    
                                    <p class="text-danger">{{ $errors->first('jumlah') }}</p>
                                </div>
                         
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Rincian Pengeluaran</h4>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Jenis Pengeluaran</th>
                                            <th>Jumlah</th>
                                            <th>Created At</th>
                                            <th>Aksi</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pengeluaran as $val)
                                        <tr>
                                            <td></td>
                                            <td><strong>{{ $val->name }}</strong></td>
                                            <td><strong>Rp. {{ number_format($val->jumlah) }}</strong></td>
                                          
                                          	<!-- MENGGUNAKAN TERNARY OPERATOR, UNTUK MENGECEK, JIKA $val->parent ADA MAKA TAMPILKAN NAMA PARENTNYA, SELAIN ITU MAKA TANMPILKAN STRING - -->
                                            <td>{{ $val->updated_at->format('d-m-Y H:i') }}</td>
                                          
                                            <!-- FORMAT TANGGAL KETIKA KATEGORI DIINPUT SESUAI FORMAT INDONESIA -->
                                        
                                            <td>
                                              
                                                <!-- FORM ACTION UNTUK METHOD DELETE -->
                                                <form action="{{ route('pengeluaran.destroy', $val->id) }}" method="post">
                                                    <!-- KONVERSI DARI @ CSRF & @ METHOD AKAN DIJELASKAN DIBAWAH -->
                                                    @csrf
                                                    @method('DELETE')
                                                                                                       <button class="btn btn-danger btn-sm">Hapus</button>
                                                </form>
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
                            {{-- {!! $category->links() !!} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
