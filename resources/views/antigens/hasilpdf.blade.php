<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $antigen->customer->name }}</title>
</head>
{{-- <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    body {
        margin: 0;
        padding: 0;
        font-size: 10pt;
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
        /* background-image: url('{{ asset('assets/img/watermack.png')}}');
        
        background-position: auto;
        background-size: cover;
        background-repeat: no-repeat; */
    }

    table,
    th,
    td {
        /* border:1px solid black; */
        border-collapse: collapse;
    }

    .content {
        margin: 0cm 1.5cm 0.5cm 1.5cm;
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

        }

        .content {
            margin: 0cm 1.5cm 0.1cm 1.5cm;
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

</style> --}}
<style>
    .page-break {
        page-break-after: always;
    }
    body {
        margin: 0;
        padding: 0;
        font-size: 10pt;
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
        /* background-image: url('{{ asset('assets/img/watermack.png')}}');
        
        background-position: auto;
        background-size: cover;
        background-repeat: no-repeat; */
    }

    table,
    th,
    td {
        /* border:1px solid black; */
        border-collapse: collapse;
    }

    .content {
        margin: 0cm 1.5cm 0.5cm 1.5cm;
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
    </style>
<body>

    <div class="row ">
        <div class="col-3 ">

            <img src="{{ asset('assets/img/headerpg.png') }}" width="220px" height="103px">
           
        </div>
        <div class="col-4  ">
            <img src="{{ asset('assets/img/branch/'. $antigen->cabang->cap) }}" alt=""  style="margin-left: 35px ; margin-top:15px;" width="155px" height="85px">

            
        </div>
        <div class="col-4">

            <!-- <img src="logo panggil dokter.png" width="250px" height="100%"> -->
            <!--<img src="{{ asset('assets/img/ttd2.png') }}" width="100%" height="155px">-->
        </div>
    </div>
    
      <div style="background-color: #252a64;">
                    <h4 class="text-center" style="color:rgb(255, 255, 255);">HASIL PEMERIKSAAN
                        {{ $antigen->category->name }}</h4>
                </div>

                <table style="width:100%" class="mt-1">
                    <tr>
                        <td valign="top" class="textt">No Registrasi</td>
                        <td valign="top">:</td>
                        <td>{{ $antigen->noreg }}</td>

                    </tr>
                    <tr>
                        <td width="25%" valign="top" class="textt">Nama</td>
                        <td width="2%">:</td>
                        <td width="25%" style="color: rgb(7, 10, 1); font-weight:bold" class="text-capitalize">
                            {{ $antigen->customer->name }} </td>
                    </tr>
                    <tr>
                        <td class="textt">Nomor Identitas/KTP</td>
                        <td>:</td>
                        <td style="width:50%">{{$antigen->customer->NIK}}</td>
                    </tr>
                    <tr>
                        <td class="textt">Tempat,Tanggal Lahir</td>
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
                        <td class="textt">Lokasi</td>
                        <td>:</td>
                        <td>{{$antigen->titik->name}}</td>


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
    <div class="page-break"></div>
    <h1>Page 2</h1>
</body>


</html>