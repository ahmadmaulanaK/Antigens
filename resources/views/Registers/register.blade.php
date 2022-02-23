<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="row m-3 justify-content-center ">
        <div class=" mt-5 col-lg-5 col-md-5 col-sm-12 ">
      

        <h1>Pendaftaran</h1>
        <form action="{{ route('pendaftaran.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <p class="text-muted">Pemeriksaan Antigen Bandung</p>

            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>


            @endif

            @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <label for="basic-url ">Nomor Indentitas</label>
            <div class="input-group mb-3 ">
               
                <input type="text" class="form-control" placeholder="NIK" name="NIK"
                    value="{{ old('NIK') }}">
                <br>
                <p class="text-danger">{{ $errors->first('NIK') }}</p>
            </div>
            <label for="basic-url">Nama Lengkap</label>
            <div class="input-group mb-3">
               
                <input type="text" class="form-control" placeholder="......." name="name" value="{{ old('Name') }}">
                <br> <p class="text-danger">{{ $errors->first('name') }}</p>
            </div>
            <label for="basic-url">Email Aktip</label>
            <div class="input-group mb-3">
               
                <input type="text" class="form-control" placeholder="email" name="email" value="{{ old('email') }}">
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
                   <label for="basic-url">Tanggal Lahir</label>
                   <div class="col">
                      <select class="custom-select" id="inputGroupSelect01">
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
            <label for="basic-url">Nomor Indentitas</label>
            <div class="input-group mb-3">
               
              
            </div>
            <label for="basic-url">Nomor Indentitas</label>
            <div class="input-group mb-3">
               
                <input type="text" class="form-control" placeholder="Nomor Identitas/NIK" name="NIK"
                    value="{{ old('NIK') }}">
                <br>
                <p class="text-danger">{{ $errors->first('NIK') }}</p>
            </div>
            <label for="basic-url">Nomor Indentitas</label>
            <div class="input-group mb-3">
               
                <input type="text" class="form-control" placeholder="Nomor Identitas/NIK" name="NIK"
                    value="{{ old('NIK') }}">
                <br>
                <p class="text-danger">{{ $errors->first('NIK') }}</p>
            </div>
            <label for="basic-url">Nomor Indentitas</label>
            <div class="input-group mb-3">
               
                <input type="text" class="form-control" placeholder="Nomor Identitas/NIK" name="NIK"
                    value="{{ old('NIK') }}">
                <br>
                <p class="text-danger">{{ $errors->first('NIK') }}</p>
            </div>
          
        </div>
    </div>
</body>

</html>
