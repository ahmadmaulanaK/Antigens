@extends('layouts.admin')

@section('title')
<title>Tambah Produk</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Product</li>
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
                                                  <li class="list-group-item">Jika data tidak ada isi form/kolom dengan huruf "0"</li>
                                                  <li class="list-group-item">Harap Isi kolom sesuai format contoh yang telah ditampilkan </li>
                                                
                                                </ul>
                                              </div>
                                           
                                        
                                    
                                    </div>
                                    <div class="col">
                                       
                                        <div class="card" style="width: 18rem;">
                                            <div class="card-header">
                                                <i class="fa fa-info"></i>Info&nbsp;
                                            </div>
                                            <ul class="list-group list-group-flush">
                                              <li class="list-group-item">Untuk nomor HP, angka 0 didepan ganti dengan +62</li>
                                              <li class="list-group-item">Jika kolom no.Telphone/email kosong maka tidak bisa dishare langsung </li>
                                              
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
                                            value="{{ old('phone_number') }}" required
                                            placeholder="ketik '0' Jika tidak ada NIK">

                                        <p class="text-danger">{{ $errors->first('NIK') }}</p>
                                    </div>

                                    <div class=" col-6">
                                        <label for="telphone">No Telphone </label>
                                        <input type="text" name="phone_number" class="form-control"
                                            value="{{ old('phone_number') }}"  placeholder="+6281120210811" required>
                                             
                                        <p class="text-danger">{{ $errors->first('phone_number') }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=" col-6">
                                        <label for="name">Nama Lengkap </label>
                                        <input type="text" name="name" class="form-control"   value="{{ old('name') }}" 
                                            required>
                                             
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    </div>

                                    <div class=" col-6">

                                        <label for="email">Email </label>
                                        <input type="text" email="email" name="email" class="form-control"
                                            value="{{ old('email') }}" placeholder="" required>
                                           
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
                                                value="{{ old('TTL') }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="email">Jenis Kelamin </label>


                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                id="peremuan" value="Perempuan" required>
                                            <label class="form-check-label" for="peremuan">
                                                Perempuan
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                id="laki-laki" value="Laki-laki" >
                                            <label class="form-check-label" for="laki-laki" required>
                                                Laki-laki
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <br>
                                <!--<div class="row">-->


                                <!--    <div class="col-md-4 form-group p_star">-->
                                <!--        <label for="">Propinsi</label>-->
                                <!--        <select class="form-control" name="province_id" id="province_id" required>-->
                                <!--            <option value="">Pilih Propinsi</option>-->
                                <!--            @foreach ($provinces as $row)-->
                                <!--            <option value="{{ $row->id }}">{{ $row->name }}</option>-->
                                <!--            @endforeach-->
                                <!--        </select>-->
                                <!--        <p class="text-danger">{{ $errors->first('province_id') }}</p>-->
                                <!--        </select>-->
                                <!--        <p class="text-danger">{{ $errors->first('province_id') }}</p>-->
                                <!--    </div>-->


                                <!--    <div class="col-md-4 form-group p_star">-->
                                <!--        <label for="">Kabupaten / Kota</label>-->
                                <!--        <select class="form-control" name="city_id" id="city_id" required>-->
                                <!--            <option value="">Pilih Kabupaten/Kota</option>-->
                                <!--        </select>-->
                                <!--        <p class="text-danger">{{ $errors->first('city_id') }}</p>-->
                                <!--    </div>-->
                                <!--    <div class="col-md-4 form-group p_star">-->
                                <!--        <label for="">Kecamatan</label>-->
                                <!--        <select class="form-control" name="district_id" id="district_id" required>-->
                                <!--            <option value="">Pilih Kecamatan</option>-->
                                <!--        </select>-->
                                <!--        <p class="text-danger">{{ $errors->first('district_id') }}</p>-->
                                <!--    </div>-->

                                <!--</div>-->

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Alamat</span>
                                    </div>
                                    <textarea class="form-control" name="address" aria-label="With textarea"
                                        value="{{ old('address') }}" required></textarea>
                                </div>
                              
                                <br>
                                <div class="row">
                                    <div class=" col-6">
                                        <label for="name">Lokasi </label>
                                        <input type="text" name="lokasi" class="form-control" value="{{ old('Lokasi') }}"
                                            required>
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    </div>

                                    <div class=" col-6">

                                        
                                            <label for="swabber_id">Petugas Swabber</label>
        
                                            <select name="swabber_id" class="form-control" required>
                                                <option value="" >Pilih Swabber
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
                                    <select name="pelayanan" class="form-control" required>
                                        <option value="" >Pilih Layanan
                                        </option>
                                        <option value="Home Visit" >Home Visit
                                        </option>
                                        <option value="Drive THRU" >Drive THRU
                                        </option>
                                        <option value="Onsite" >Onsite
                                        </option>

                                    </select>
                                    <p class="text-danger">{{ $errors->first('category') }}</p>
                                </div>
                               
                                <div class="form-group">
                                    <label for="swabber_id">Jenis Tes</label>

                                    <select name="category_id" class="form-control" required>
                                        <option value="" >Jenis tes
                                        </option>
                                        @foreach ($category as $row)
                                        <option value="{{ $row->id }}"
                                            {{ old('category_id') == $row->id ? 'selected':'' }}>{{ $row->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <p class="text-danger">{{ $errors->first('category_id') }}</p>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-6 col-form-label font-weight-bold">Hasil</label>
                                    <div class="col-md-9 col-form-label">
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" type="radio" id="inline-radio1"
                                                value="Positif" name="hasil" required>
                                            <label class="form-check-label" for="inline-radio1">Positif</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" type="radio" id="inline-radio2"
                                                value="Negatif" name="hasil" required>
                                            <label class="form-check-label" for="inline-radio2">Negatif</label>
                                        </div>

                                    </div>
                                </div>
                                
                             

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="multiple-select">Spesimen</label>
                                    <div class="col-md-9">
                                    <select id="multiple-select" name="spesimen" class="form-control" size="5" multiple="" required>
                                    <option value="Nasal">Nasal</option>
                                    <option value="Darah">Darah</option>
                                    <option value="Swab Nasofaring">Swab Nasofaring</option>
                                    <option value="Swab Orofaring">Swab Orofaring</option>
                                    <option value="Swab Orofaring&Nasofaring">Swab Orofaring&Nasofaring</option>
    
                                    </select>
                                    </div>
                                    </div>

                                <div class="form-group">
                                    <label for="status">Hasil IgG</label>
                                    <select name="hasil_IgG" class="form-control" required>
                                        <option value="-" >Hasil IgG
                                        </option>
                                        <option value="Reaktif" >Reaktip</option>
                                        <option value="Non-reaktip" >Non-reaktip
                                        </option>

                                    </select>
                                    <p class="text-danger">{{ $errors->first('hasil_IgG') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="status" >Hasil IgM</label>
                                    <select name="hasil_IgM" class="form-control" required>
                                        <option value="-" >Hasil IgM
                                        </option>
                                        <option value="Reaktip" >Reaktip</option>
                                        <option value="Non-reaktip" >Non-reaktip
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
                                <h4 class="card-title">Pembayaran</h4><p><i class="fa fa-info"></i>&nbsp;Tambah Jika ada perubahan harga konfirmasi ke cs : 0896-3954-8898 (ahmad)</p>
                            </div>
                            <div class="card-body">

                           <div class="row">
                               
                           
                               <div class="col-3">
                                <div class="form-group">
                                    <label for="status" >Cash</label>
                                    <select name="cash" class="form-control" >
                                        <option value="-" >Cash
                                        </option>
                                        <option value="0" >0</option>
                                        <option value="99000" >99,000</option>
                                        <option value="149000" >149,000</option>
                                        <option value="275000" >275,000</option>
                                        <option value="325000" >325,000</option>
                                        <option value="425000" >425,000</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('cash') }}</p>
                                </div>
                               </div>
                               <div class="col-3">
                                <div class="form-group">
                                    <label for="status" >BCA Dr.Evi</label>
                                    <select name="BCA_Dr" class="form-control" >
                                        <option value="-" >BCA Dr.Evi
                                        </option>
                                        <option value="0" >0</option>
                                        <option value="99000" >99,000</option>
                                        <option value="149000" >149,000</option>
                                        <option value="275000" >275,000</option>
                                        <option value="325000" >325,000</option>
                                        <option value="425000" >425,000</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('BCA-Dr') }}</p>
                                </div>
                               </div>
                               <div class="col-3">
                                <div class="form-group">
                                    <label for="status" >BRI Dr.Evi</label>
                                    <select name="BRI_Dr" class="form-control" >
                                        <option value="-" >BRI Dr.Evi
                                        </option>
                                        <option value="0" >0</option>
                                        <option value="99000" >99,000</option>
                                        <option value="149000" >149,000</option>
                                        <option value="275000" >275,000</option>
                                        <option value="325000" >325,000</option>
                                        <option value="425000" >425,000</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('BRI-Dr') }}</p>
                                </div>
                               </div>
                               <div class="col-3">
                                <div class="form-group">
                                    <label for="status" >BNI Dr.Evi</label>
                                    <select name="BNI_Dr" class="form-control" >
                                        <option value="-" >BNI Dr.Evi
                                        </option>
                                        <option value="0" >0</option>
                                        <option value="99000" >99,000</option>
                                        <option value="149000" >149,000</option>
                                        <option value="275000" >275,000</option>
                                        <option value="325000" >325,000</option>
                                        <option value="425000" >425,000</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('BNI-Dr') }}</p>
                                </div>
                               </div>
                            </div>
                           <div class="row">
                               
                           
                               <div class="col-3">
                                <div class="form-group">
                                    <label for="status" >BNI PT</label>
                                    <select name="BNI_PT" class="form-control" >
                                        <option value="-" >BNI PT
                                        </option>
                                        <option value="0" >0</option>
                                        <option value="99000" >99,000</option>
                                        <option value="149000" >149,000</option>
                                        <option value="275000" >275,000</option>
                                        <option value="325000" >325,000</option>
                                        <option value="425000" >425,000</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('BNI-PT') }}</p>
                                </div>
                               </div>
                               <div class="col-3">
                                <div class="form-group">
                                    <label for="status" >BJB PT</label>
                                    <select name="BJB_PT" class="form-control" >
                                        <option value="-" >BJB PT
                                        </option>
                                        <option value="0" >0</option>
                                        <option value="99000" >99,000</option>
                                        <option value="149000" >149,000</option>
                                        <option value="275000" >275,000</option>
                                        <option value="325000" >325,000</option>
                                        <option value="425000" >425,000</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('BJB-PT') }}</p>
                                </div>
                               </div>
                               <div class="col-3">
                                <div class="form-group">
                                    <label for="status" >BCA PT</label>
                                    <select name="BCA_PT" class="form-control" >
                                        <option value="-" >Hasil IgM
                                        </option>
                                        <option value="0" >0</option>
                                        <option value="99000" >99,000</option>
                                        <option value="149000" >149,000</option>
                                        <option value="275000" >275,000</option>
                                        <option value="325000" >325,000</option>
                                        <option value="425000" >425,000</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('BCA-PT') }}</p>
                                </div>
                               </div>
                               <div class="col-3">
                                <div class="form-group">
                                    <label for="status" >MANDIRI PT</label>
                                    <select name="MANDIRI_PT" class="form-control" >
                                        <option value="-" >MANDIRI PT
                                        </option>
                                        <option value="0" >0</option>
                                        <option value="99000" >99,000</option>
                                        <option value="149000" >149,000</option>
                                        <option value="275000" >275,000</option>
                                        <option value="325000" >325,000</option>
                                        <option value="425000" >425,000</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('MANDIRI-PT') }}</p>
                                </div>
                               </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="status" >Piutang</label>
                                        <select name="PIUTANG" class="form-control" >
                                            <option value="_" >Piutang
                                            </option>
                                            <option value="0" >0</option>
                                            <option value="99000" >99,000</option>
                                            <option value="149000" >149,000</option>
                                            <option value="275000" >275,000</option>
                                            <option value="325000" >325,000</option>
                                            <option value="425000" >425,000</option>
    
                                        </select>
                                        <p class="text-danger">{{ $errors->first('PIUTANG') }}</p>
                                    </div>
                                   </div>
                            </div>

                            <div class="form-group">

                                <button class="btn btn-primary btn-sm">Tambah</button>
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


