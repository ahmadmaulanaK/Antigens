<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>{{ $antigen->customer->name }}|{{ $antigen->created_at->format('d F, Y ') }}</title>
</head>

<style>
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
        /* .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;

        } */
        .page {
        width: 21cm;
        min-height: 29.7cm;
        margin-bottom: 2cm;
      

        margin: auto;
        /* border: 1px #D3D3D3 solid; */
       
        /* background: white; */
       
        /* background-image: url('{{ asset('assets/img/watermack.png')}}');
        
        background-position: auto;
        background-size: cover;
        background-repeat: no-repeat; */
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

</style>


<body>
    <div class="book ">

        <div class="page bg-" style=" background-image: url('{{ asset('assets/img/bg.jpg')}}');
        background-position: auto;
        background-size: cover;
        opacity: 0,2;
        background-repeat: no-repeat;">
            <div class="row ">
                <div class="col-3 ">

                    {{-- <img src="{{ asset('assets/img/headerpg.png') }}" width="220px" height="103px"> --}}
                   
                </div>
                <div class="col-4  ">
                    <img src="{{ asset('assets/img/branch/'. $antigen->cabang->cap) }}" alt=""  style="margin-left: 25px ; margin-top:15px;" width="155px" height="65px">

                    
                </div>
                <div class="col-4">

                    <!-- <img src="logo panggil dokter.png" width="250px" height="100%"> -->
                    <!--<img src="{{ asset('assets/img/ttd2.png') }}" width="100%" height="155px">-->
                </div>
            </div>
            {{-- <div class="row mt-4">

                <div class="col"> <img src="{{ asset('assets/img/line.png') }}" width="100%" height=""></div>
            </div> --}}
            <br>
          
            <div class="content " style="margin-top: 1cm">
                <div style="background-color: #252a64;">
                    <h4 class="text-center" style="color:rgb(255, 255, 255);">
                        {{ $antigen->category->name }}RESULT TEST</h4>
                </div>
                <table style="width:100%" class="mt-1">
                    <tr>
                        <td valign="top" class="textt">Registration Number</td>
                        <td valign="top">:</td>
                        <td>{{ $antigen->noreg }}</td>

                    </tr>
                    <tr>
                        <td width="25%" valign="top" class="textt">Name</td>
                        <td width="2%">:</td>
                        <td width="25%" style="color: rgb(7, 10, 1); font-weight:bold" class="text-capitalize">
                            {{ $antigen->customer->name }} </td>
                    </tr>
                    <tr>
                        <td class="textt">Identity Number / KTP</td>
                        <td>:</td>
                        <td style="width:50%">{{$antigen->customer->NIK}}</td>
                    </tr>
                    <tr>
                        <td class="textt">Place & Date of Birth</td>
                        <td>:</td>
                        <td>{{$antigen->customer->TTL}}</td>
                    </tr>
                    <tr>
                        <td class="textt">Gender</td>
                        <td>:</td>
                        <td>{{$antigen->customer->jenis_kelamin}}</td>


                    </tr>

                    <tr>
                        <td class="textt">Address</td>
                        <td>:</td>
                        <td width="25%" valign="top" class="textt">{{$antigen->customer->address}}</td>
                        <td class="kanan">




                        </td>
                    </tr>
                    <tr>
                        <td class="textt">Inspection Date</td>
                        <td>:</td>
                        <td>{{ $antigen->created_at->format('d F, Y | H:i ') }}WIB</td>


                        <td></td>
                    </tr>
                    <tr>
                        <td class="textt">Location</td>
                        <td>:</td>
                        <td>{{$antigen->titik->name}}</td>


                        <td></td>
                    </tr>
                    <tr>
                        <td class="textt">Type of Service	</td>
                        <td>:</td>
                        <td>{{ $antigen->pelayanan }}</td>


                    </tr>

                    <tr>
                        <td valign="top" class="textt">Specimens </td>
                        <td valign="top">:</td>
                        <td>{{ $antigen->spesimen }}</td>

                    </tr>

                </table>

                <table id="customers" >
                    <tr>
                        <th>Test Name</th>
                        <th>Result</th>
                        <th>Unit</th>
                        <th>Referral  Value</th>
                    </tr>


                    <tr>
                        <td>{{ $antigen->category->name }}</td>
                        <td>{{ $antigen->hasil }}</td>
                        <td>-</td>
                        <td>{{ $antigen->rujukan }}</td>
                    </tr>
                </table>
                <div class="col-12 mx-auto " style="margin-top:1cm;">
                    <div class="mt-3">
                        <h5 class="">Implementation & Suggestion</h5>
                    </div>



                    <p>
                        A Positive Result does not confirm the presence of SARS CoV2 infection. Confirmation is required with RT PCR SARS CoV2 infection. <br><br>
                        Negative Result do not rule out the possibility of infection by SARS CoV2, especially accompanied by symptoms of Covid-19. Still need to carry out a healthy clean lifestyle, always implementing  6M. Don’t not forget to wash your hands, wear mask, keep your distance, stay away from crowds, limit mobility and get vaccinate.
                    </p>
                </div>
                <p class="text-capitalize" style="margin-top:1cm;">Admin : {{$antigen->user->name}} <br>
                    Swaber :{{$antigen->swabber->name}}</p>
                <table style="width:100%;margin-top:1cm;" >
                    <tbody>
                        <tr>
                            <td style="width:60%">
                                <p class="font-weight-bold">Data Verification</p>
                                {!! DNS2D::getBarcodeSVG(URL::current(), 'QRCODE',2,2) !!}
                                <div class=""></div>


                                <span class=" font-weight-light " style="font-size:10px">(Scan here to check the authentivity of the test result)</span>
                            </td>
                            </td>

                            <td style="width:40%">
                                <p>Bandung, {{ $antigen->created_at->format('d F, Y') }}
                                    <br>Responsible Person <br>
                                    {{-- <img src="{{ asset('assets/img/ttd/'. $antigen->cabang->cap) }}" alt="" width="150" height="90"> --}}
                                    <img src="{{ asset('assets/img/pangdok.png') }}" alt=""   width="155px" height="85px">
                                    <br>
                                    <span class="font-weight-bold">Dr. Evi Novitasari, M.M<br>3121100217124463
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="row " >
                    <div class="col " style="font-size:10px"><br>

                        <p class="font-size:10px"> Note:
                            Notes: 
                            <br> the Attached Patient’s data is the original data listed on the https://antigenbandung.com/


                            <br>
                            *If the data does not appear there is a possibility that the published document is a fake letter
                        </p>

                    </div>

                </div>


                <!--Kantor Cabang -->



                <!-- end content -->

            </div>
            <!-- end content -->
            {{-- <div class="row mt-3 ">

                <div class="col"> <img src="{{ asset('assets/img/footer2.png') }}" width="100%" height=""></div>

            </div> --}}








        </div>

        <div class="page  " >
            <div class="row   ">

                <div class="row" style="margin-top: 1cm" >

                    {{-- <div class="col" style="margin-left:20px"> <img src="{{ asset('assets/img/ORNA 1.png') }}" width="100%" height=""></div> --}}
                </div>
                <div class="row">

                    <div class="col" style="margin-left:20px"> <img src="{{ asset('assets/img/ly2.jpg') }}" width="100%" height=""></div>
                </div>


                </a>
            </div>
        </div>
        <div class="page">
            <div class="row  " >

                <div class="row"  style="margin-top: 2cm">

                    {{-- <div class="col" style="margin-left:20px" > <img src="{{ asset('assets/img/ORNA 1.png') }}" width="100%" height=""></div> --}}
                </div>
                <div class="row">

                    <div class="col" style="margin-left:20px"> <img src="{{ asset('assets/img/ly3.jpg') }}" width="100%" height=""></div>
                </div>
                <div class="row">

                    {{-- <div class="col" style="margin-left:20px"> <img src="{{ asset('assets/img/ORNA 4.png') }}" width="100%" height=""> --}}

                        <a href="mailto:{{$antigen->customer->email}}?subject=Surat%20Keterangan%20Hasil&body=Yth%20{{ $antigen->customer->name }}%20%2C%0AHasil%20{{ $antigen->category->name }}%20Anda%20telah%20selesai%2C%20Anda%20dapat%20melihat%20dan%20mengunduh%20melalui%20link%20di%20bawah%20ini%3A%20%0A%0A{{URL::current()}}%0A%0AAnda%20juga%20bisa%20menentukan%20sendiri%20lokasi%20dan%20waktu%20sesuai%20keinginan%20dengan%20layanan%20Home%20%26%20Corporate%20Service.%20Jika%20tertarik%2C%20silahkan%20cek%20link%20dibawah%20ini%20%3A%0A%0Ahttps://bio.link/panggild%0ATerima%20kasih%20telah%20mempercayakan%20%20Anda%20pada%20Antigen%20Bandung%2C%20semoga%20sehat%20selalu.%0A%0ASalam%20hangat%2C%0AAntigen%20Bandung%20%0ACall%20center%20%3A%20081112130811%0ALive%20Chat%20%3A%20081120210811"
                            target="_blank" class="btn btn-secondary btn-sm mt-5"><i>Share To Email</i></a>
                        <a href="https://wa.me/{{$antigen->customer->phone_number}}?text=Yth%20{{ $antigen->customer->name }}%20%2C%0AHasil%20{{ $antigen->category->name }}%20Anda%20telah%20selesai%2C%20Anda%20dapat%20melihat%20dan%20mengunduh%20melalui%20link%20di%20bawah%20ini%3A%20%0A%0A{{URL::current()}}%0A%0AAnda%20juga%20bisa%20menentukan%20sendiri%20lokasi%20dan%20waktu%20sesuai%20keinginan%20dengan%20layanan%20Home%20%26%20Corporate%20Service.%20Jika%20tertarik%2C%20silahkan%20cek%20link%20dibawah%20ini%20%3A%0A%0Ahttps://bio.link/panggild%0ATerima%20kasih%20telah%20mempercayakan%20Pemeriksaan%20anda%20pada%20Antigen%20Bandung%2C%20semoga%20sehat%20selalu.%0A%0ASalam%20hangat%2C%0AAntigen%20Bandung%20%0ACall%20center%20%3A%20081112130811%0ALive%20Chat%20%3A%20081120210811%0A%0Ainfo%20%3A%20Harap%20simpan%20kontak%20telphone%20pengirim%20hasil%20terlebih%20dahulu%20agar%20link%20hasil%20pemeriksaan%20dapat%20diakses."
                            target="_blank" class="btn btn-success btn-sm yellow mt-5 "><i class="nav-icon icon-printer"> Share
                                Whatsapp</i> </a>
                    </div>

                   
                </div>


              
            </div>

           
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>
