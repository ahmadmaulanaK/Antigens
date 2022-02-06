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
        font-size: 9pt;
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

        width: 29.7cm;
        min-height: 21cm;

        margin: 1cm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        /* box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); */
        /* background-image: url('{{ asset('assets/img/watermack.png')}}'); */
        background-position: auto;
        background-size: cover;
        background-repeat: no-repeat;
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

    }

    #customers td,
    #customers th {
        border: 1.5px solid black;
        padding: 2px;

    }

    #customers td {
        /* height: 50px; */
        text-align: center;
    }





    #customers th {
        padding-top: 5px;
        padding-bottom: 5px;
        text-align: left;
        text-align: center;
        background-color: #252a64;
        color: white;
    }

    #pembayaran {
    font-family: 'Poppins', sans-serif;
    border-collapse: collapse;
    /* text-align: center; */
    width: 100%;
    margin-top: 25px;
}

#pembayaran td,
#pembayaran th {
    border: 1px solid black;
    padding: 8px;

}

#pembayaran td {

    text-align: center;
}





#pembayaran th {
    padding-top: 8px;
    padding-bottom: 8px;
    text-align: left;
    text-align: center;
    background-color: rgb(236, 190, 37);
    color: white;
}

    @page {
        size: A4 landscape;
        max-height: 100%;
        max-width: 100%
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
            /* background-image: url('{{ asset('assets/img/watermack.png')}}'); */
            background-position: auto;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .content {
            margin: 0cm 1.5cm 0.1cm 1.5cm;
        }

        #customers {
        font-family: 'Poppins', sans-serif;
        border-collapse: collapse;
        /* text-align: center; */
        width: 100%;

    }

    #customers td,
    #customers th {
        border: 1.5px solid black;
        padding: 2px;

    }

    #customers td {
        /* height: 50px; */
        text-align: center;
    }





    #customers th {
        padding-top: 5px;
        padding-bottom: 5px;
        text-align: left;
        text-align: center;
        background-color: #252a64;
        color: white;
    }
        #pembayaran {
    font-family: 'Poppins', sans-serif;
    border-collapse: collapse;
    /* text-align: center; */
    width: 100%;
    margin-top: 25px;
}

#pembayaran td,
#pembayaran th {
    border: 1px solid black;
    padding: 8px;

}

#pembayaran td {

    text-align: center;
}





#pembayaran th {
    padding-top: 8px;
    padding-bottom: 8px;
    text-align: left;
    text-align: center;
    background-color: rgb(236, 190, 37);
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
                   
                </div>
                <div class="col-4">


                  
                </div>
                <div class="col-4">

                  
                </div>
            </div>
            <div style="background-color: #252a64;">
                <h4 class="text-center" style="color:rgb(255, 255, 255);">LAPORAN HARIAN
                    </h4>
            </div>



            <div class="row ">

           
                <div class="row mt-3">

                    <div class="col-md-2">
                        <p class="text-center font-weight-bold">Total Swab Antigen</p>
                        <p class="text-center h5">{{$tesAntigen->count()}}</p>                      
                    </div>
                    <div class="col-md-2">
                        <p class="text-center font-weight-bold">Total PCR</p>
                        <p class="text-center h5">{{$tesPCR->count()}}</p>                      
                    </div>
                    <div class="col-md-2">
                        <p class="text-center font-weight-bold">Total Rapid Antibodi</p>
                        <p class="text-center h5">{{$tesRapidantibodi->count()}}</p>                      
                    </div>
                    <div class="col-md-2">
                        <p class="text-center font-weight-bold">Total Tes pengujian</p>
                        <p class="text-center h5">{{$totalSwabHarian->count()}}</p>                      
                    </div>
                    <div class="col-md-2">
                        <p class="text-center font-weight-bold">Hasil Positif</p>
                        <p class="text-center h5">{{$Positif->count()}}</p>                      
                    </div>
                    <div class="col-md-2">
                        <p class="text-center font-weight-bold">Hasil Negatif</p>
                        <p class="text-center h5">{{$Negatif->count()}}</p>                      
                    </div>

                </div>

               
                <div class="table-responsive ">

                    <table id="pembayaran" class="p-4">
                        <thead>
                            <tr>
                                <th>pemasukan</th>
                            </tr>
                            
                            <tr>
                                <th>Cash</th>
                                <th>BCA Dr.Evi</th>


                                <th>BRI Dr.Evi</th>
                                <th>BNI Dr.Evi</th>

                                <th>BJB PT</th>
                                <th>BCA PT</th>
                                <th>BNI PT</th>
                                <th>MANDIRI PT</th>
                                <th>PIUTANG</th>


                            </tr>
                        </thead>
                        <tbody>
                            <!-- LOOPING DATA TERSEBUT MENGGUNAKAN FORELSE -->
                            <!-- ADAPUN PENJELASAN ADA PADA ARTIKEL SEBELUMNYA -->
                            <tr>
                                <td>Rp.{{number_format($cash)}}</td>
                                <td>Rp.{{number_format($BCA_Dr)}}</td>
                                <td>Rp.{{number_format($BRI_Dr)}}</td>
                                <td>Rp.{{number_format($BNI_Dr)}}</td>
                                <td>Rp.{{number_format($Mandiri_Pt)}}</td>
                                <td>Rp.{{number_format($BNI_Pt)}}</td>
                                <td>Rp.{{number_format($BCA_Pt)}}</td>
                                <td>Rp.{{number_format($BJB_Pt)}}</td>
                                <td>Rp.{{number_format($Piutang)}}</td>
                            </tr>
                           
                        
                            
                           
                           

                            <tr>
                                <td colspan="9" ><h5>Jumlah Pemasukan : {{number_format($total)}}</h5></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive mt-5">

                    <table id="customers" class="p-4">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Registrasi</th>


                                <th>Nama</th>
                                <th>Jenis Kelamin</th>

                                <th>Jenis Test</th>
                                <th>Hasil</th>
                                <th>Created At</th>
                                <th>Admin Input</th>
                                <th>Swabber</th>


                            </tr>
                        </thead>
                        <tbody>
                            <!-- LOOPING DATA TERSEBUT MENGGUNAKAN FORELSE -->
                            <!-- ADAPUN PENJELASAN ADA PADA ARTIKEL SEBELUMNYA -->

                            @forelse ($Antigen as $key => $row)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    <strong>{{ $row->noreg }}</strong><br>
                                </td>

                                {{-- <td>{{ $row->customer->name }} </td> --}}
                                </td>



                                <td>{{ $row->customer->name }} </td>
                                <td>{{ $row->customer->jenis_kelamin }} </td>
                                <td>{{ $row->category->name }} </td>
                                <td>{{ $row->hasil }} </td>
                                <td>{{ $row->created_at->format('d F, Y H:i') }} </td>
                                <td>{{ $row->user->name }}</td>
                                <td>{{ $row->swabber->name }}</td>
                                {{-- <td>{{ $row->district->city->name }}</a></td> --}}

                                <!-- KARENA BERISI HTML MAKA KITA GUNAKAN { !! UNTUK MENCETAK DATA -->



                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>


            </div>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->


</body>

</html>
