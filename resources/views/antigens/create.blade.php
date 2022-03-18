@extends('layouts.admin')

@section('title')
<title>Tambah Data</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Antigen Bandung</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">


            <form action="{{ route('antigens.store') }}" method="post" enctype="multipart/form-data">
                @csrf
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
                                            value="{{ old('NIK') }}"
                                            placeholder="ketik '0' Jika tidak ada NIK">

                                        <p class="text-danger">{{ $errors->first('NIK') }}</p>
                                    </div>

                                    <div class=" col-6">
                                        <label for="telphone">No Telphone </label>
                                        <input type="text" name="phone_number" class="form-control"
                                            value="+62{{ old('phone_number') }}" placeholder="+6281120210811">

                                        <p class="text-danger">{{ $errors->first('phone_number') }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=" col-6">
                                        <label for="name">Nama Lengkap </label>
                                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">

                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    </div>

                                    <div class=" col-6">

                                        <label for="email">Email </label>
                                        <input type="text" email="email" name="email" class="form-control"
                                            value="{{ old('email') }}" placeholder="">

                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    {{-- <div class="col-6">

                                        <label for="start">Tanggal Lahir</label><br>

                                        <input style="" type="date" id="start" name="TTL" value="{{ old('TTL') }}"
                                            min="1910-01-01">

                                            <p class="text-danger">{{ $errors->first('TTL') }}</p>

                                    </div> --}}
                                    <div class="col-6">
                                        <label for="email">Jenis Kelamin </label>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                            <option value="">Pilih....</option>
                                            <option value="Perempuan"
                                                {{ old('jenis_kelamin') == 'Perempuan' ? 'selected':'' }}>Perempuan
                                            </option>
                                            <option value="Laki-laki"
                                                {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected':'' }}>Laki-laki
                                            </option>
                                        </select>

                                        <p class="text-danger">{{ $errors->first('jenis_kelamin') }}</p>
                                    </div>
                                </div>


                                <br>


                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Alamat</span>
                                    </div>
                                    <textarea class="form-control" name="address" aria-label="With textarea"
                                        value="{{ old('address') }}">{{ old('address') }}</textarea>
                                    <p class="text-danger">{{ $errors->first('address') }}</p>
                                </div>

                                <br>
                                <div class="row">
                                    <div class=" col-6">
                                        <div class="form-group">
                                            <label for="status">Pilih Lokasi </label>
                                            <select name="titik_id" class="form-control">
                                                <option value="">pilih Lokasi....
                                                </option>
                                                @foreach ($titik as $row)
                                                <option value="{{ $row->id }}"
                                                    {{ old('titik_id') == $row->id ? 'selected':'' }}>{{ $row->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <p class="text-danger">{{ $errors->first('titik_id') }}</p>
                                        </div>
                                    </div>

                                    <div class=" col-6">


                                        <label for="swabber_id">Petugas Swabber</label>

                                        <select name="swabber_id" class="form-control">
                                            <option value="">Pilih ....
                                            </option>
                                            @foreach ($swabber as $row)
                                            <option value="{{ $row->id }}"
                                                {{ old('swabber_id') == $row->id ? 'selected':'' }}>{{ $row->name }}
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
                                    <select name="pelayanan" class="form-control">
                                        <option value="">Pilih ....
                                        </option>
                                        <option value="Home Visit "
                                            {{ old('pelayanan') == 'Home Visit' ? 'selected':'' }}>Home Visit
                                        </option>
                                        <option value="Drive THRU"
                                            {{ old('pelayanan') == 'Drive THRU' ? 'selected':'' }}>Drive THRU
                                        </option>
                                        <option value="Onsite" {{ old('pelayanan') == 'Onsite' ? 'selected':'' }}>Onsite
                                        </option>

                                    </select>
                                    <p class="text-danger">{{ $errors->first('pelayanan') }}</p>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label" for="multiple-select">Jenis Tes</label>
                                    <div class="col-md-8">
                                        <select id="multiple-select" name="category_id" class="form-control" size="5"
                                            multiple="" >
                                      
                                            @foreach ($category as $row)
                                        <option value="{{ $row->id }}"
                                            {{ old('category_id') == $row->id ? 'selected':'' }}>{{ $row->name }}
                                        </option>
                                        @endforeach
    
                                        </select>
                                        <p class="text-danger">{{ $errors->first('category_id') }}</p>
                                    </div>
                                </div>
                             
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label" for="multiple-select">Hasil</label>
                                    <div class="col-md-8">
                                        <select id="multiple-select" name="hasil" class="form-control" size="5"
                                            multiple="" >
                                          
                                            <option value="Positif" {{old('hasil') == 'Positif' ? 'selected':'' }} >Positif</option>
                                            <option value="Negatif" {{old('hasil') == 'Negatif' ? 'selected':'' }}>Negatif</option>
                                            <option value="Sameday" {{old('hasil') == 'Sameday' ? 'selected':'' }}>Sameday</option>
                                            <option value="H(+1)" {{old('hasil') == 'H(+1)' ? 'selected':'' }}>H+1</option>
                                            <option value="CITO" {{old('hasil') == 'CITO' ? 'selected':'' }}>CITO</option>
                                           
    
                                        </select>
                                        <p class="text-danger">{{ $errors->first('hasil') }}</p>
                                    </div>
                                </div>

                           



                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="multiple-select">Spesimen</label>
                                    <div class="col-md-9">
                                        <select id="multiple-select" name="spesimen" class="form-control" size="5"
                                            multiple="">
                                            <option value="Swab Nasofaring"
                                            {{ old('spesimen') == 'Swab Nasofaring' ? 'selected':'' }}>Swab
                                            Nasofaring</option>
                                        <option value="Swab Orofaring"
                                            {{ old('spesimen') == 'Swab Orofaring' ? 'selected':'' }}>Swab Orofaring
                                        </option>
                                        <option value="Swab Orofaring&Nasofaring"
                                            {{ old('spesimen') == 'Swab Orofaring&Nasofaring' ? 'selected':'' }}>
                                            Swab Orofaring&Nasofaring</option>
                                            <option value="Nasal" {{ old('spesimen') == 'Nasal' ? 'selected':'' }}>Nasal
                                            </option>
                                            <option value="Saliva" {{ old('spesimen') == 'Saliva' ? 'selected':'' }}>Saliva
                                            </option>
                                            <option value="Darah" {{ old('spesimen') == 'Darah' ? 'selected':'' }}>Darah
                                            </option>
                                           

                                        </select>
                                        <p class="text-danger">{{ $errors->first('spesimen') }}</p>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label for="status">Hasil IgG</label>
                                    <select name="hasil_IgG" class="form-control">
                                        <option value="-">Hasil IgG
                                        </option>
                                        <option value="Reaktif">Reaktif</option>
                                        <option value="Non-reaktip">Non-reaktif
                                        </option>

                                    </select>
                                    <p class="text-danger">{{ $errors->first('hasil_IgG') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="status">Hasil IgM</label>
                                    <select name="hasil_IgM" class="form-control">
                                        <option value="-">Hasil IgM
                                        </option>
                                        <option value="Reaktip">Reaktif</option>
                                        <option value="Non-reaktip">Non-reaktif
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
                                            <label for="status">Metode Pembayaran</label>
                                            <select name="payment_id" class="form-control">
                                                <option value="">Pilih</option>
                                                @foreach ($Metode as $row)
                                                <option value="{{ $row->id }}"
                                                    {{ old('payment_id') == $row->id ? 'selected':'' }}>
                                                    {{ $row->metode_payment }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <p class="text-danger">{{ $errors->first('payment_id') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="status">Nominal</label>
                                            <select name="price_id" class="form-control">
                                                <option value="">pilih
                                                </option>
                                                @foreach ($price as $row)
                                                <option value="{{ $row->id }}"
                                                    {{ old('price_id') == $row->id ? 'selected':'' }}>
                                                    {{ number_format($row->harga) }}
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
                                                    {{ old('cabang_id') == $row->id ? 'selected':'' }}>{{ $row->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <p class="text-danger">{{ $errors->first('cabang_id') }}</p>
                                        </div>
                                       </div>
                                    <button class="btn btn-primary ">Tambah</button>
                                    <div class="form-group">


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
