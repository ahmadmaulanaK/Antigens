<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Antigen Bandung</title>
</head>

<style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    body {
        margin: 0;
        padding: 0;
        font-size: 10pt ;
        text-align: justify;
        text-justify: inter-word;
        background-color: #FAFAFA;
        font-family: 'Poppins', sans-serif;
       
    }

    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }

    .page {
        width: 21cm;
        min-height: 29.7cm;

        margin: 1cm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        /*background-image: url('{{ asset('assets/img/watermack.png')}}');*/
        background-position: auto;
        background-size: cover;
        background-repeat: no-repeat;
    }
        table, th, td {
    /* border:1px solid black; */
    border-collapse: collapse;
    }
    .content{
        margin: 5cm 1.5cm 0.5cm 1.5cm;
    }
    .list{
        margin-top:2cm;
    }

    #customers {
        font-family: 'Poppins', sans-serif;
        border-collapse: collapse;
        /* text-align: center; */
        width: 100%;
        margin-top: 25px;
    }

    #customers td,
    #customers th {
        border: 1.5px solid black;
        padding: 8px;

    }

    #customers td {
        height: 50px;
        text-align: center;
    }





    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        text-align: center;
        background-color: #252a64;
        color: white;
    }
    /* .subpage {
        padding: 1cm;
        border: 5px red solid;
        height: 256mm;
        outline: 2cm #FFEAEA solid;
    } */

    @page {
        size: A4;
        margin: 0;
    }

    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
            /*background-image: url('{{ asset('assets/img/watermack.png')}}');*/
            background-position: auto;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .content{
        margin: 2cm 1.5cm 0.1cm 1.5cm;
    }

    #customers {
        font-family: 'Poppins', sans-serif;
        border-collapse: collapse;
        /* text-align: center; */
        width: 100%;
        margin-top: 25px;
    }

    #customers td,
    #customers th {
        border: 1px solid black;
        padding: 8px;

    }

    #customers td {
        height: 50px;
        text-align: center;
    }





    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        text-align: center;
        background-color: #252a64;
        color: white;
    }


    }
</style>


<body>
    <div class="book">

        <div class="page">
            <div class="row mb-5 ">
                <div class="col-4">
                    
                    <img src="{{ asset('assets/img/top.png') }}" width="350px" height="100%">
                    <!--<img src="{{ asset('assets/img/ttd2.png') }}" width="100%" height="155px">-->
                </div>
                <div class="col-4">
                    
                   
                    <!--<img src="{{ asset('assets/img/ttd2.png') }}" width="100%" height="155px">-->
                </div>
                <div class="col-4">
                    
                    <!-- <img src="logo panggil dokter.png" width="250px" height="100%"> -->
                    <!--<img src="{{ asset('assets/img/ttd2.png') }}" width="100%" height="155px">-->
                </div>
            </div>
           
<div class="content mt-3">
    <div style="background-color: #252a64;">
        <h4 class="text-center" style="color:rgb(255, 255, 255);">HASIL PEMERIKSAAN
            {{ $antigen->category->name }}</h4>
     </div>
           <table style="width:100%" class="mt-1" >
                   <tr>
                    <td valign="top" class="textt">No Registrasi</td>
                    <td valign="top">:</td>
                    <td>{{ $antigen->noreg }}</td>

                </tr>
                <tr>
                    <td width="25%" valign="top" class="textt">Nama</td>
                    <td width="2%">:</td>
                    <td width="25%" style="color: rgb(7, 10, 1); font-weight:bold"  class="text-capitalize">
                       {{ $antigen->customer->name }} </td>
                </tr>
                <tr>
                    <td class="textt">Nomor Identitas/KTP</td>
                    <td>:</td>
                    <td style="width:50%" >{{$antigen->customer->NIK}}</td>
                </tr>
                <tr>
                    <td class="textt">Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{$antigen->customer->TTL}}</td>
                </tr>
                <tr>
                    <td class="textt">Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{$antigen->customer->jenis_kelamin}}</td>
                    

                </tr>

                <tr>
                    <td class="textt">Alamat</td>
                    <td>:</td>
                    <td width="25%" valign="top" class="textt">{{$antigen->customer->address}}</td>
                    <td class="kanan">




                    </td>
                </tr>
                <tr>
                    <td class="textt">Tanggal Periksa</td>
                    <td>:</td>
                    <td>{{ $antigen->created_at->format('d F, Y | H:i ') }}WIB</td>
                  

                    <td></td>
                </tr>
                <tr>
                    <td class="textt">Layanan</td>
                    <td>:</td>
                    <td>{{ $antigen->pelayanan }}</td>


                </tr>
             
                <tr>
                    <td valign="top" class="textt">Spesimen </td>
                    <td valign="top">:</td>
                    <td>{{ $antigen->spesimen }}</td>

                </tr>
                
              </table>

              <table id="customers">
                <tr>
                    <th>Nama Test</th>
                    <th>Hasil</th>
                    <th>Satuan</th>
                    <th>Nilai Rujukan</th>
                </tr>


                <tr>
                    <td>{{ $antigen->category->name }}</td>
                    <td>{{ $antigen->hasil }}</td>
                    <td>-</td>
                    <td>{{ $antigen->rujukan }}</td>
                </tr>
            </table>
            <div class="col-12 mx-auto">
               <div class="mt-3"><h5 class="">Implementasi & Saran</h5></div>
        
        
        
                <p>
                     Hasil Positif tidak memastikan adanya infeksi SARS CoV2. Tetap perlu dikonfirmasi dengan
                    pemeriksaan RT PCR SARS CoV2. <br><br>
                    Hasil Negatif tidak menyingkirkan kemungkinan infeksi oleh SARS CoV2, terutama jika
                    disertai gejala Covid19, tetap perlu melaksanakan gaya hidup bersih sehat, selalu menerapkan 6M
                    mencuci tangan, memakai masker, menjaga jarak, menjauhi kerumunan, membatasi mobilitas, dan melakukan vaksinansi.
                </p>
            </div>
            <p>Admin :  {{$antigen->user->name}} <br>
                Swabber :{{$antigen->swabber->name}}</p>
                <table style="width:100%"  >
                    <tbody>
                        <tr  >
                            <td style="width:60%"><p class="font-weight-bold" >Verfikasi Data</p>
                                {!! DNS2D::getBarcodeSVG(URL::current(), 'QRCODE',2,2) !!}
                                <div class="" ></div>
                            
                            
                                <span class=" font-weight-light " style="font-size:10px">(Scan Disini untuk memeriksa
                                    keaslian data)</span></td></td>
                           
                            <td style="width:40%"><p>Bandung, {{ $antigen->created_at->format('d F, Y') }}
                                <br>Penanggung Jawab <br>
                                <img src="{{ asset('assets/img/ttddok.png') }}" alt="" width="140" height="90">
                                <br>
                                <span class="font-weight-bold">Dr. Evi Novitasari, M.M<br>3121100217124463
                                </p></td>
                        </tr>
                    </tbody>
                </table>
    
                <div class="row">
                    <div class="col " style="font-size:10px" ><br>
                    
                    <p class="font-size:10px"> Note:
                    *Data Pasien terlampir merupakan data asli yang terdaftar di website http://antigenbandung.com/
                    <br>
                    *Apabila data tidak muncul ada kemungkinan surat PCR yang diterbitkan merupakan surat palsu
                </p>
                        
                   </div>    
                    
                </div>


                
                <div class="row  mt-5">
                    <div class="col-6 ml-5  text-center" style="font-size:12px"></div>
                    
                    <div class="col-6  text-center" style="font-size:12px" ><br>
                    <!--<p class="text-break">Jl.Gatot Subroto No.305A, Kota Bandung</p> <br>-->
                  
                </div>
                   
                </div>
            
                <!-- end content -->
         
            </div>
            <!-- end content -->
                        <div class="row mt-3 ">
               
            <div class="col"> <img src="" width="100%" height=""></div>
        </div>
           
            
           

                                            
        </div>
       
    </div>

  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

</body>

</html>