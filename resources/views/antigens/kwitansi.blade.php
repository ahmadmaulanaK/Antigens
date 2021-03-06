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
        min-height: 15.7cm;

        margin: 1cm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        background-image: url('{{ asset('assets/img/watermack.png')}}');
        background-position: auto;
        background-size: cover;
        background-repeat: no-repeat;
    }
        table, th, td {
    /* border:1px solid black; */
    border-collapse: collapse;
    }
    .content{
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
        border: 1.5px solid rgb(218, 41, 41);
        padding: 10px;

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
            background-image: url('{{ asset('assets/img/watermack.png')}}');
            background-position: auto;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .content{
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
    <div class="book">

        <div class="page">
            <div class="row ">
                <div class="col-4">
                    
                    <img src="{{ asset('assets/img/header.png') }}" width="350px" height="100%">
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
            <div class="row ">
               
                <div class="col"> <img src="{{ asset('assets/img/line.png') }}" width="100%" height=""></div>
            </div>
<div class="content mt-3">
    <div style="">
        
        </h5>
     </div>
           <div class="row">
               <div class="col-4"></div>
               <div class="col-4"><h5 class="text-center" style="color:#252a64;"><strong><u> KWITANSI </u></strong><P  style="font-size:8px">No.{{$antigen->noreg}}</P></div>
               <div class="col-4"><br><p style="font-size:10px"><abbr title="attribute">Lokasi : {{$antigen->titik->name}} </abbr></p></div>
           </div>
          
           <table style="width:100%; " class="mt-1 " >
            <tr>
             <td valign="top" class="textt " style="width:30%">Telah Diterima Dari</td>
             <td valign="top">:</td>
             <td >{{ $antigen->customer->name }}</td>

         </tr>
            <tr>
             <td valign="top" class="textt" style="width:30%">Uang Sebesar</td>
             <td valign="top">:</td>
             <td class="bg-warning">Rp. {{ number_format($antigen->price->harga) }}</td>

         </tr>
            <tr>
             <td valign="top" class="textt" style="width:30%">Untuk Pembayaran</td>
             <td valign="top">:</td>
             <td>{{ $antigen->category->name }}</td>

         </tr>
            <tr>
             <td valign="top" class="textt" style="width:30%">Lainnya</td>
             <td valign="top">:</td>
             <td>{{ $antigen->category->name }}</td>

         </tr>
        
         
      

  
         
         
       </table>

  
           <div class="row mt-4">
               <div class="col-4 bg-warning" >Jumlah : Rp.{{ number_format($antigen->price->harga) }}</div>
               <div class="col-3" ></div>
               
               <div class="col-5"><p style="font-size:10px"> Bandung : {{ $antigen->created_at->format('d F, Y | H:i ') }}WIB </p>
               </div>
           </div>
           <div class="row ">
              <div class="col-4"></div>
              <div class="col-3"></div>
               <div class="col-5">
                {!! DNS2D::getBarcodeSVG(URL::current(), 'QRCODE',1,1) !!}
                <div class="" ></div>
            
            
                <span class=" font-weight-light " style="font-size:10px">(Scan Disini untuk memeriksa
                    keaslian data)</span></div>
           </div>
              
               
                <div class="row">
                    <div class="col " style="font-size:10px" ><br>
                    
                    <p class="font-size:10px"> Note:
                    *Data Pasien terlampir merupakan data asli yang terdaftar di website http://antigenbandung.com/
                    <br>
                    *Apabila data tidak muncul ada kemungkinan surat PCR yang diterbitkan merupakan surat palsu
                </p>
                        
                   </div>    
                    
                </div>

                
                <!--Kantor Cabang -->
     
                <a href="mailto:{{$antigen->customer->email}}?subject=Surat%20Keterangan%20Hasil&body=Yth%20{{ $antigen->customer->name }}%20%2C%0AHasil%20{{ $antigen->category->name }}%20Anda%20telah%20selesai%2C%20Anda%20dapat%20melihat%20dan%20mengunduh%20melalui%20link%20di%20bawah%20ini%3A%20%0A%0A{{URL::current()}}%0A%0AAnda%20juga%20bisa%20menentukan%20sendiri%20lokasi%20dan%20waktu%20sesuai%20keinginan%20dengan%20layanan%20Home%20%26%20Corporate%20Service.%20Jika%20tertarik%2C%20silahkan%20cek%20link%20dibawah%20ini%20%3A%0A%0Ahttps://bio.link/panggild%0ATerima%20kasih%20telah%20mempercayakan%20%20Anda%20pada%20Antigen%20Bandung%2C%20semoga%20sehat%20selalu.%0A%0ASalam%20hangat%2C%0AAntigen%20Bandung%20%0ACall%20center%20%3A%20081112130811%0ALive%20Chat%20%3A%20081120210811" target="_blank" class="btn btn-secondary btn-sm mt-5" ><i>Share To Email</i></a>
       <a href="https://wa.me/{{$antigen->customer->phone_number}}?text=Yth%20{{ $antigen->customer->name }}%20%2C%0AKwitansi%20pembayaran%20Anda%20telah%20selesai%2C%20Anda%20dapat%20melihat%20dan%20mengunduh%20melalui%20link%20di%20bawah%20ini%3A%20%0A%0A{{URL::current()}}%0A%0A%0A%0ASalam%20hangat%2C%0AAntigen%20Bandung%20%0ACall%20center%20%3A%20081112130811%0ALive%20Chat%20%3A%20081120210811%0A%0Ainfo%20%3A%20Harap%20simpan%20kontak%20telphone%20pengirim%20hasil%20terlebih%20dahulu%20agar%20link%20hasil%20pemeriksaan%20dapat%20diakses." target="_blank" class="btn btn-success btn-sm yellow mt-5 "><i class="nav-icon icon-printer" > Share Whatsapp</i> </a>
           
                <!-- end content -->
         
            </div>
            <!-- end content -->
                        <div class="row mt-3 ">
               

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