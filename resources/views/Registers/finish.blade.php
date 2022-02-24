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
        <div class=" mt-5 col-lg-5 col-md-5 col-sm-12 ">
      
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
        
           
            

        
            
            
            
           
            <h3 class="text-center">Success</h3>
            <div class="input-group mb-3 mt-3">
             

                <div class="card mt-3 ">
                    <div class="card-body" >


                        <table style="width:100%" class="mt-1 justify-content-center" >
                            <tr>
                                <td valign="top" class="textt">No Registrasi</td>
                                <td valign="top">:</td>
                                <td>{{ $antigen->noreg }}</td>
        
                            </tr>
                         
                            <tr>
                                <td class="textt">Nomor Identitas/KTP</td>
                                <td>:</td>
                                <td >{{$antigen->customer->NIK}}</td>
                            </tr>
                            <tr>
                                <td width="50%" valign="top" class="textt">Nama</td>
                                <td width="10%">:</td>
                                <td width="" style="color: rgb(7, 10, 1); font-weight:bold" class="text-capitalize">
                                    {{ $antigen->customer->name }} </td>
                            </tr>
                            <tr>
                                <td class="textt">Jenis Kelamin</td>
                                <td>:</td>
                                <td>{{$antigen->customer->jenis_kelamin}}</td>
        
        
                            </tr>
                            <tr>
                                <td class="textt">Tanggal Lahir</td>
                                <td>:</td>
                                <td>{{$antigen->customer->TTL}}</td>
                            </tr>
                         
        
                            <tr>
                                <td class="textt">Alamat</td>
                                <td>:</td>
                                <td  valign="top" class="textt">{{$antigen->customer->address}}</td>
                                <td class="kanan">
        
        
        
        
                                </td>
                            </tr>
                            <tr>
                                <td class="textt">Tanggal Periksa</td>
                                <td>:</td>
                                <td width="50%">{{ $antigen->created_at->format('d F, Y  ') }}WIB</td>
        
        
                                <td></td>
                            </tr>
                            <tr>
                                <td class="textt">Lokasi</td>
                                <td>:</td>
                                <td>{{$antigen->titik->name}}</td>
        
        
                                <td></td>
                            </tr>
                           
        
                        </table>
                    </div>
                </div>
                
            </div>
            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>


            @endif

            @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
        
          
          
          
        </div>
    </div>
</body>

</html>
