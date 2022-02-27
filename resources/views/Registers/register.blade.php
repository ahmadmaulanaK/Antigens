<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Antigen Bandung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.1.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-J2WCKfhPxbtZAT+USOoPNCnZVozpAaGtaH/LUcSKXjdCXN85i5fGMTy1Agp8HChK" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="row m-3 justify-content-center ">
        <div class=" mt-5 col-lg-5 col-md-5 col-sm-12 bg-white ">
      
            <div class="row ">
                <div class="col-4">

                    <img src="{{ asset('assets/img/header.png') }}" width="350px" height="100%">

                </div>
                <div class="col-4">



                </div>
                <div class="col-4">
                    <br>
                    <br>
                    <br>
                  
                </div>
            </div>
          
        <h1 class="text-center">Pendaftaran</h1>
        <form action="{{ route('pendaftaran.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <p class="text-muted text-center">Pemeriksaan Antigen Bandung</p>
          <hr>
            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>


            @endif

            @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <br>
            
            <label for="basic-url ">Nomor Indentitas</label>
            <div class="input-group mb-3 ">
                <div class="input-group-prepend">
                    <span class="input-group-text">NIK</span>
                </div>
               
                <input type="text" class="form-control" placeholder="" name="NIK"
                    value="{{ old('NIK') }}">
                <br>
                <p class="text-danger">{{ $errors->first('NIK') }}</p>
            </div>
            <label for="basic-url">Nama Lengkap</label>
            <div class="input-group mb-3">
              
                <input type="text" class="form-control" placeholder="" name="name" value="{{ old('Name') }}">
                <br> <p class="text-danger">{{ $errors->first('name') }}</p>
            </div>
            <label for="basic-url">Email Aktif</label>
            <div class="input-group mb-3">
               
                <input type="text" class="form-control" placeholder="" name="email" value="{{ old('email') }}">
                <br> <p class="text-danger">{{ $errors->first('email') }}</p>
            </div>
            <label for="basic-url">Nomor Telphone</label>
            <div class="input-group mb-3">
               
                <input type="tell" class="form-control" placeholder="Nomor Whatsapp" value="+62" name="phone_number" value="{{old('phone_number')}}">
                <br><p class="text-danger">{{ $errors->first('phone_number') }}</p>
            </div>
            <div class="input-group mb-3">
                <div class="row">
                    <label for="basic-url">Tanggal Lahir</label>
                    <div class="col">
                    <input style="" type="date" id="start" name="TTL" value="{{ old('TTL') }}" min="1950-01-01">
                    <p class="text-danger">{{ $errors->first('TTL') }}</p>
                   </div>
                   <label for="basic-url">Jenis Kelamin</label>
                   <div class="col">
                      <select name="jenis_kelamin" class="custom-select" id="inputGroupSelect01">
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
               </div>
               

                

              
            </div>
         
            <label for="basic-url">Alamat Lengkap</label>
            <div class="input-group mb-3">
               
                <textarea class="form-control" name="address" aria-label="With textarea"
                            value="{{ old('address') }}">{{ old('address') }}</textarea>
                        <p class="text-danger">{{ $errors->first('address') }}</p>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Jenis Tes</span>
                </div>
                <select name="category_id" class="custom-select">
                  <option value="">Pilih ....
                  </option>
                  @foreach ($category as $row)
                  <option value="{{ $row->id }}"
                      {{ old('category_id') == $row->id ? 'selected':'' }}>{{ $row->name }}
                  </option>
                  @endforeach
              </select>
              <p class="text-danger">{{ $errors->first('category_id') }}</p>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Pilih Lokasi</span>
                </div>
               
                <select name="titik_id" class="custom-select">
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

            <div class="input-group mb-3 mt-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                    <label class="form-check-label" for="flexCheckDefault" >
                        Dengan ini menyatakan data yang saya isi adalah sebenar-benarnya, dan saya bersedia
                        untuk diambil spesimen untuk pemeriksaan Covid-19.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
                    <label class="form-check-label " for="flexCheckChecked">
                        Apabila hasil akan dimasukan ke dalam database pemerintah lewat program all record
                        kementrian kesehatan
                    </label>
                </div>

                <div class="card mt-3">
                    <div class="card-body" style='text-align:justify;font-size:11px;'>
                        Untuk hasil tes PCR & Tes Antigen Home Service akan dikirimkan melalui Whatsapp atau
                        email yang tertera didalam informed consent ini, Hasil pemeriksaan hanya berlaku
                        pada saat pemeriksaan dilakukan
                    </div>
                </div>
                
            </div>
            <button type="submit" class="btn btn-block btn-success float-right">Register</button>
        </form>
            
          
          
        </div>
    </div>
</body>

</html>
