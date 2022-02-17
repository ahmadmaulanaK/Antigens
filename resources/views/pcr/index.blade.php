@extends('layouts.auth')

@section('title')
<title>Pendaftaran </title>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <h1>Pendaftaran</h1>
                    <form action="#" method="post" enctype="multipart/form-data">
                        @csrf
                        <p class="text-muted">Pemeriksaan PCR Bandung</p>

                        @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-credit-card"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nomor Identitas/NIK" name="NIK"
                                value="{{ old('NIK') }}">
                            <br>
                            <p class="text-danger">{{ $errors->first('NIK') }}</p>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nama lengkap" name="name"
                                value="{{ old('Name') }}">
                            <br>
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                        </div>


                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email" name="email"
                                value="{{ old('email') }}">
                            <br>
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-phone"></i></span>
                            </div>
                            <input type="tell" class="form-control" placeholder="No telphone/Whatsapp" value="+62"
                                name="phone_number" value="{{old('phone_number')}}">
                            <br>
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Tanggal Lahir</span>
                            </div>
                            <input style="" type="date" id="start" name="TTL" value="{{ old('TTL') }}" min="1950-01-01">
                            <p class="text-danger">{{ $errors->first('TTL') }}</p>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">jenis Kelamin</span>
                            </div>

                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="">Pilih....</option>
                                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected':'' }}>
                                    Perempuan
                                </option>
                                <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected':'' }}>
                                    Laki-laki
                                </option>
                            </select>

                            <p class="text-danger">{{ $errors->first('jenis_kelamin') }}</p>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Alamat</span>
                            </div>

                            <textarea class="form-control" name="address" aria-label="With textarea"
                                value="{{ old('address') }}">{{ old('address') }}</textarea>
                            <p class="text-danger">{{ $errors->first('address') }}</p>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Jenis Tes</span>
                            </div>
                            <select name="category_id" class="form-control">
                                <option value="">Pilih ....
                                </option>
                                @foreach ($category as $row)
                                <option value="{{ $row->id }}" {{ old('category_id') == $row->id ? 'selected':'' }}>
                                    {{ $row->name }}
                                </option>
                                @endforeach
                            </select>
                            <p class="text-danger">{{ $errors->first('category_id') }}</p>
                        </div>
                        <div class="input-group mb-3">
                            <label for="">Screaning : </label>
                            <div class="card">
                                
                                <div class="card-body">
                                    <label for="">Demam : </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">tidak</label>
                                      </div>
                                    <label for="">Nyeri Otot :  </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">tidak</label>
                                      </div>
                                    <label for="">Sesak  : </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">tidak</label>
                                      </div>
                                    <label for="">Batuk : </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">tidak</label>
                                      </div>
                                </div>
                              </div>
                        </div>
                   
                    
                        <div class="input-group mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Dengan ini menyatakan data yang saya isi adalah sebenar-benarnya, dan saya bersedia
                                    untuk diambil spesimen untuk pemeriksaan Covid-19.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label " for="flexCheckChecked">
                                    Apabila hasil akan dimasukan ke dalam database pemerintah lewat program all record
                                    kementrian kesehatan
                                </label>
                            </div>

                            <div class="card mt-3">
                                <div class="card-body" style='text-align:justify;'>
                                    Untuk hasil tes PCR & Tes Antigen Home Service akan dikirimkan melalui Whatsapp atau
                                    email yang tertera didalam informed consent ini, Hasil pemeriksaan hanya berlaku
                                    pada saat pemeriksaan dilakukan
                                </div>
                            </div>
                        </div>
                </div>

                {{-- <button class="btn btn-primary ">Tambah</button> --}}
                <button class="btn btn-block btn-success">Register</button>
            </div>

            </form>
            <div class="card-footer p-4">

                <div class="row">

                    <div class="col-6">
                        <img src="{{ asset('assets/img/branch/bandung.png') }}" width="100%" height="">

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
