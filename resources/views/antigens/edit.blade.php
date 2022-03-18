@extends('layouts.admin')

@section('title')
<title>Edit Data</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Antigen Bandung</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">


            <form action="{{ route('antigens.update', $antigen->id) }}"  method="POST" >

                
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Diri</h4>
                                <div class="row">
                                    <div class="col">


                                        <div class="card" style="width: 18rem;">
                                            <div class="card-header">
                                                <i class="fa fa-info"></i>Info&nbsp;
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Jika data tidak ada isi form/kolom dengan
                                                    huruf "0"</li>
                                                <li class="list-group-item">Harap Isi kolom sesuai format contoh yang
                                                    telah ditampilkan </li>

                                            </ul>
                                        </div>



                                    </div>
                                    <div class="col">

                                        <div class="card" style="width: 18rem;">
                                            <div class="card-header">
                                                <i class="fa fa-info"></i>Info&nbsp;
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Untuk nomor HP, angka 0 didepan ganti dengan
                                                    +62</li>
                                                <li class="list-group-item">Jika kolom no.Telphone/email kosong maka
                                                    tidak bisa dishare langsung </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="row">

                                    <div class=" col-6">
                                        <label for="NIK">NIK</label>
                                        <input type="text" name="NIK" class="form-control"
                                            value="{{ old('NIK', $antigen->customer->NIK) }}" 
                                            placeholder="ketik '0' Jika tidak ada NIK">

                                        <p class="text-danger">{{ $errors->first('NIK') }}</p>
                                    </div>

                                    <div class=" col-6">
                                        <label for="telphone">No Telphone </label>
                                        <input type="text" name="phone_number" class="form-control"
                                            value="{{ old('phone_number', $antigen->customer->phone_number) }}"
                                            placeholder="+6281120210811" >

                                        <p class="text-danger">{{ $errors->first('phone_number') }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=" col-6">
                                        <label for="name">Nama Lengkap </label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ old('name', $antigen->customer->name) }}" >

                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    </div>

                                    <div class=" col-6">

                                        <label for="email">Email </label>
                                        <input type="text" email="email" name="email" class="form-control"
                                            value="{{ old('email', $antigen->customer->email) }}" placeholder=""
                                            >

                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <label for="basic-url">Tanggal Lahir</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                    id="basic-addon3">Bulan/Tanggal/Tahun</span>
                                            </div>
                                            <input type="text" class="form-control" id="basic-url" name="TTL"
                                                placeholder="12/08/2008" aria-describedby="basic-addon3"
                                                value="{{ old('TTL', $antigen->customer->TTL) }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="email">Jenis Kelamin </label>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" >
                                            <option value="">Choose....</option>
                                            <option value="Perempuan"
                                                {{ $antigen->customer->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>
                                                Perempuan</option>
                                            <option value="Laki-laki"
                                                {{ $antigen->customer->jenis_kelamin == 'Laki-laki' ? 'selected' : ''}}>
                                                Laki-laki</option>
                                        </select>

                                   
                                </div>
                            </div>


                            <br>


                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Alamat</span>
                                </div>
                                <textarea class="form-control" name="address" aria-label="With textarea" value=""
                                    >{{ old('address', $antigen->customer->address) }}</textarea>
                            </div>

                            <br>
                            <div class="row">
                                <div class=" col-6">
                                    <div class="form-group">
                                        <label for="status">Pilih Lokasi </label>
                                        <select name="titik_id" class="form-control" >
                                            <option value="" >Pilih Lokasi
                                            </option>
                                            @foreach ($titik as $row)
                                            <option value="{{ $row->id }}"
                                                {{ $antigen->titik_id == $row->id ? 'selected':'' }}>{{ $row->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger">{{ $errors->first('category') }}</p>
                                    </div>
                                </div>

                                <div class=" col-6">


                                    <label for="swabber_id">Petugas Swabber</label>

                                    <select name="swabber_id" class="form-control" >
                                        <option value="">Pilih Swabber
                                        </option>
                                        @foreach ($swabber as $row)
                                        <option value="{{ $row->id }}"
                                            {{ $antigen->swabber_id == $row->id ? 'selected':'' }}>{{ $row->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <p class="text-danger">{{ $errors->first('swabber_id') }}</p>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pengujian</h4>
                        </div>
                        <div class="card-body">



                            <div class="form-group">
                                <label for="status">Jenis Layanan</label>
                                <select name="pelayanan" class="form-control" >
                                    <option value="">Pilih Layanan
                                    </option>
                                    <option value="Home Visit" {{($antigen->pelayanan === 'Home Visit') ? 'Selected' : ''}} >Home Visit
                                    </option>
                                    <option value="Drive THRU" {{($antigen->pelayanan === 'Drive THRU') ? 'Selected' : ''}}>Drive THRU
                                    </option>
                                    <option value="Onsite" {{($antigen->pelayanan === 'Onsite') ? 'Selected' : ''}}>Onsite
                                    </option>

                                </select>
                                <p class="text-danger">{{ $errors->first('category') }}</p>
                            </div>


                           



                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="multiple-select">Jenis Tes</label>
                                <div class="col-md-8">
                                    <select id="multiple-select" name="category_id" class="form-control" size="5"
                                        multiple="" >
                                  
                                        @foreach ($category as $row)
                                    <option value="{{ $row->id }}"
                                        {{ $antigen->category_id == $row->id ? 'selected':'' }}>{{ $row->name }}
                                    </option>
                                    @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="multiple-select">Hasil</label>
                                <div class="col-md-8">
                                    <select id="multiple-select" name="hasil" class="form-control" size="5"
                                        multiple="" >
                                        <option value="Positif" {{($antigen->hasil === 'Positif') ? 'Selected' : ''}} >Positif</option>
                                        <option value="Negatif" {{($antigen->hasil === 'Negatif') ? 'Selected' : ''}}>Negatif</option>
                                        <option value="Sameday" {{($antigen->hasil === 'Sameday') ? 'Selected' : ''}}>Sameday</option>
                                        <option value="H(+1)" {{($antigen->hasil === 'H(+1)') ? 'Selected' : ''}}>H+1</option>
                                        <option value="CITO" {{($antigen->hasil === 'CITO') ? 'Selected' : ''}}>CITO</option>
                                       

                                    </select>
                                </div>
                            </div>
                      
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="multiple-select">Spesimen</label>
                                <div class="col-md-8">
                                    <select id="multiple-select" name="spesimen" class="form-control" size="5"
                                        multiple="" >
                                        <option value="Nasal" {{($antigen->spesimen === 'Nasal') ? 'Selected' : ''}} >Nasal</option>
                                        <option value="Saliva" {{($antigen->spesimen === 'Saliva') ? 'Selected' : ''}} >Saliva</option>
                                        <option value="Darah" {{($antigen->spesimen === 'Darah') ? 'Selected' : ''}}>Darah</option>
                                        <option value="Swab Nasofaring" {{($antigen->spesimen === 'Swab Nasofaring') ? 'Selected' : ''}}>Swab Nasofaring</option>
                                        <option value="Swab Orofaring" {{($antigen->spesimen === 'Swab Orofaring') ? 'Selected' : ''}}>Swab Orofaring</option>
                                        <option value="Swab Orofaring&Nasofaring" {{($antigen->spesimen === 'Swab Orofaring&Nasofaring') ? 'Selected' : ''}}>Swab Orofaring&Nasofaring</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="status">Hasil IgG</label>
                                <select name="hasil_IgG" class="form-control" >
                                    <option value="-">Hasil IgG
                                    </option>
                                    <option value="Reaktif" {{($antigen->hasil_IgG === 'Reaktif') ? 'Selected' : ''}}>Reaktif</option>
                                    <option value="Non-reaktif" {{($antigen->hasil_IgG === 'Non-reaktif') ? 'Selected' : ''}}>Non-reaktif
                                    </option>

                                </select>
                                <p class="text-danger">{{ $errors->first('hasil_IgG') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="status">Hasil IgM</label>
                                <select name="hasil_IgM" class="form-control" >
                                    <option value="-">Hasil IgM
                                    </option>
                                    <option value="Reaktif" {{($antigen->hasil_IgM === 'Reaktif') ? 'Selected' : ''}}>Reaktif</option>
                                    <option value="Non-reaktif" {{($antigen->hasil_IgM === 'Non-reaktif') ? 'Selected' : ''}}>Non-reaktif
                                    </option>

                                </select>
                                <p class="text-danger">{{ $errors->first('hasil_IgM') }}</p>
                            </div>



                        </div>
                    </div>
                </div>
        </div>
        {{-- PEMBAYARAN --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pembayaran</h4>
                      
                    </div>
                    <div class="card-body">

                        <div class="row">
                            
                        
                            <div class="col-3">
                             <div class="form-group">
                                 <label for="status" >Metode Pembayaran</label>
                                 <select name="payment_id" class="form-control" >
                                     <option value="" >pilih....
                                     </option>
                                     @foreach ($Metode as $row)
                                     <option value="{{ $row->id }}"
                                        {{ $antigen->payment_id == $row->id ? 'selected':'' }}>{{ $row->metode_payment }}
                                     </option>
                                     @endforeach
                                 </select>
                                 <p class="text-danger">{{ $errors->first('payment_id') }}</p>
                             </div>
                            </div>
                            <div class="col-3">
                             <div class="form-group">
                                 <label for="status" >Nominal</label>
                                 <select name="price_id" class="form-control" >
                                     <option value="" >Rp
                                     </option>
                                     @foreach ($price as $row)
                                     <option value="{{ $row->id }}"
                                        {{ $antigen->price_id == $row->id ? 'selected':'' }}>{{ number_format($row->harga) }}
                                     </option>
                                     @endforeach
                                 </select>
                                 <p class="text-danger">{{ $errors->first('price_id') }}</p>
                             </div>
                            </div>
                            
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="status" >Branch</label>
                                    <select name="cabang_id" class="form-control" >
                                        <option value="" >Pilih....
                                        </option>
                                        @foreach ($Branch as $row)
                                        <option value="{{ $row->id }}"
                                            {{ $antigen->cabang_id == $row->id ? 'selected':'' }}>{{ $row->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <p class="text-danger">{{ $errors->first('cabang_id') }}</p>
                                </div>
                               </div>
                            <button class="btn btn-primary ">Edit</button>
                         <div class="form-group">

                             
                         </div>
                          

                          
                           
                             
                            
                         </div>
                      
                     </div>

                </div>
            </div>
        </div>
        </form>
    </div>
    </div>
</main>
@endsection
