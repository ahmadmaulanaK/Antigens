<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('ecommerce/vendors/jquery-ui/jquery-ui.css') }}">
    <link href="{{ asset('assets/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">
    <title>REKAP ADMIN {{$user_id}}|{{$nowTimeDate,true}} </title>
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

        width: 30cm;
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
                    <br>
                    <br>
                    <br>
                    <p class="text-center font-weight-bold">Dibuat oleh : {{$user_id}} <BR> {{$nowTimeDate,true}}</p>
                </div>
            </div>
            <span class="badge badge-pill badge-primary">Primary</span>
            <div style="background-color: #252a64;" class="mt-2">
                <h4 class="text-center" style="color:rgb(255, 255, 255);">LAPORAN HARIAN ANTIGEN BANDUNG
                </h4>
            </div>



            <div class="row p-2 ">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header">
                            Rekapitulasi
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <!--/.col-->
                                <div class="col-sm-4 col-lg-4">
                                    <div class="row">



                                        @forelse ($category_qtt as $val)
                                        <div class="col-sm-6">
                                            <div class="callout callout-primary">
                                                <small class="text-muted">{{ $val->name }}</small>
                                                <br>
                                                <strong class="h4">{{ $val->jml_category }}</strong>
                                                <div class="chart-wrapper ng-scope" ng-controller="sparklineChartCtrl">
                                                    <div class="chartjs-size-monitor"
                                                        style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                        <div class="chartjs-size-monitor-expand"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                            </div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <canvas
                                                        class="chart chart-line ng-isolate-scope chartjs-render-monitor"
                                                        chart-data="data4" chart-labels="labels" chart-legend="false"
                                                        chart-series="series" chart-options="options"
                                                        chart-colors="warning" width="118" height="34"
                                                        style="display: block; width: 59px; height: 17px;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="col-sm-6">
                                            <div class="callout callout-primary">
                                                <small class="text-muted"></small>
                                                <br>
                                                <strong class="h4">Tidak ada data</strong>
                                                <div class="chart-wrapper ng-scope" ng-controller="sparklineChartCtrl">
                                                    <div class="chartjs-size-monitor"
                                                        style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                        <div class="chartjs-size-monitor-expand"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                            </div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <canvas
                                                        class="chart chart-line ng-isolate-scope chartjs-render-monitor"
                                                        chart-data="data4" chart-labels="labels" chart-legend="false"
                                                        chart-series="series" chart-options="options"
                                                        chart-colors="warning" width="118" height="34"
                                                        style="display: block; width: 59px; height: 17px;"></canvas>
                                                </div>
                                            </div>
                                        </div>

                                        @endforelse





                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                                    <hr class="mt-0">


                                </div>

                                <div class="col-sm-4 col-lg-4">
                                    <div class="row">


                                        @forelse ($t as $val)
                                        <div class="col-sm-6">
                                            <div class="callout callout-info">
                                                <small class="text-muted">{{ $val->hasil }}</small>
                                                <br>
                                                <strong class="h4">{{ $val->total }}</strong>
                                                <div class="chart-wrapper ng-scope" ng-controller="sparklineChartCtrl">
                                                    <div class="chartjs-size-monitor"
                                                        style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                        <div class="chartjs-size-monitor-expand"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                            </div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <canvas
                                                        class="chart chart-line ng-isolate-scope chartjs-render-monitor"
                                                        chart-data="data4" chart-labels="labels" chart-legend="false"
                                                        chart-series="series" chart-options="options"
                                                        chart-colors="warning" width="118" height="34"
                                                        style="display: block; width: 59px; height: 17px;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="col-sm-6">
                                            <div class="callout callout-warning">
                                                <small class="text-muted"></small>
                                                <br>
                                                <strong class="h4">Tidak ada data</strong>
                                                <div class="chart-wrapper ng-scope" ng-controller="sparklineChartCtrl">
                                                    <div class="chartjs-size-monitor"
                                                        style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                        <div class="chartjs-size-monitor-expand"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                            </div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <canvas
                                                        class="chart chart-line ng-isolate-scope chartjs-render-monitor"
                                                        chart-data="data4" chart-labels="labels" chart-legend="false"
                                                        chart-series="series" chart-options="options"
                                                        chart-colors="warning" width="118" height="34"
                                                        style="display: block; width: 59px; height: 17px;"></canvas>
                                                </div>
                                            </div>
                                        </div>

                                        @endforelse




                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                                    <hr class="mt-0">

                                    </ul>
                                </div>
                                <!--/.col-->
                                <div class="col-sm-3 col-lg-4">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="callout callout-info">
                                                <small class="text-muted">Pasien Baru</small>
                                                <br>
                                                <strong class="h4">{{ $totalSwabHarian->count() }}</strong>
                                                <div class="chart-wrapper ng-scope" ng-controller="sparklineChartCtrl">
                                                    <div class="chartjs-size-monitor"
                                                        style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                        <div class="chartjs-size-monitor-expand"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                            </div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <canvas
                                                        class="chart chart-line ng-isolate-scope chartjs-render-monitor"
                                                        chart-data="data4" chart-labels="labels" chart-legend="false"
                                                        chart-series="series" chart-options="options"
                                                        chart-colors="warning" width="118" height="34"
                                                        style="display: block; width: 59px; height: 17px;"></canvas>
                                                </div>
                                            </div>
                                        </div>

                                        @forelse ($HomeVisit as $val)
                                        <div class="col-sm-6">
                                            <div class="callout callout-primary">
                                                <small class="text-muted">{{ $val->pelayanan }}</small>
                                                <br>
                                                <strong class="h4">{{ $val->TotalHomeVisit }}</strong>
                                                <div class="chart-wrapper ng-scope" ng-controller="sparklineChartCtrl">
                                                    <div class="chartjs-size-monitor"
                                                        style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                        <div class="chartjs-size-monitor-expand"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                            </div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <canvas
                                                        class="chart chart-line ng-isolate-scope chartjs-render-monitor"
                                                        chart-data="data4" chart-labels="labels" chart-legend="false"
                                                        chart-series="series" chart-options="options"
                                                        chart-colors="warning" width="118" height="34"
                                                        style="display: block; width: 59px; height: 17px;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="col-sm-6">
                                            <div class="callout callout-warning">
                                                <small class="text-muted"></small>
                                                <br>
                                                <strong class="h4">Tidak ada data</strong>
                                                <div class="chart-wrapper ng-scope" ng-controller="sparklineChartCtrl">
                                                    <div class="chartjs-size-monitor"
                                                        style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                        <div class="chartjs-size-monitor-expand"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                            </div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <canvas
                                                        class="chart chart-line ng-isolate-scope chartjs-render-monitor"
                                                        chart-data="data4" chart-labels="labels" chart-legend="false"
                                                        chart-series="series" chart-options="options"
                                                        chart-colors="warning" width="118" height="34"
                                                        style="display: block; width: 59px; height: 17px;"></canvas>
                                                </div>
                                            </div>
                                        </div>

                                        @endforelse
                                        <!--/.col-->

                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                                    <hr class="mt-0">


                                    <!-- ngRepeat: row in source -->

                                    </ul>
                                </div>

                                <!--/.col-->
                            </div>
                            <!--/.row-->

                            <div class="row mt-3">
                                <div class="col-sm-6 col-lg-6">
                                    <ul class="horizontal-bars ng-scope" ng-controller="horizontalBarsCtrl">
                                        <button type="button" class="btn btn-sm btn-link text-muted"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="show more"><i class="icon-options"></i></button>
                                        <span class="badge badge-pill badge-warning">Jenis Kelamin</span>

                                        <!-- ngRepeat: row in data -->
                                        @foreach ($jenkel as $val)


                                        <li ng-repeat="row in gender" class="ng-scope">
                                            <i ng-class="row.icon" class="icon-user"></i>
                                            <div class="float-right">
                                                <span class="value ng-binding">{{ $val->jml_jenkel }}</span>
                                                <small class="text-muted ng-binding">Person </small>
                                            </div>
                                            <span class="title ng-binding">{{ $val->jenis_kelamin }}</span>

                                            <div class="bars">
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 43%" aria-valuenow="43" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-lg-6">


                                    <ul class="horizontal-bars ng-scope" ng-controller="horizontalBarsCtrl">
                                        <button type="button" class="btn btn-sm btn-link text-muted"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="show more"><i class="icon-options"></i></button>
                                        <span class="badge badge-pill badge-warning">Swabber</span>

                                        <!-- ngRepeat: row in data -->
                                        @foreach ($swabber_qtt as $sw)


                                        <li ng-repeat="row in data" class="ng-scope">
                                            <div class="float-right">

                                                <span class="value ng-binding">{{$sw->jml_swabber}}</span>
                                                <small class="text-muted ng-binding">Person </small>
                                            </div>
                                            <div class="title ng-binding">
                                                {{$sw->name}}
                                            </div>

                                            <div class="bars">

                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 78%" aria-valuenow="78" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>

                                            </div>
                                        </li><!-- end ngRepeat: row in data -->
                                        <!-- end ngRepeat: row in data -->
                                        @endforeach
                                </div>
                              
                            </div>
                            <div class="row mt-3">
                            
                                <div class="col-sm-6 col-lg-6">

                                    <ul class="horizontal-bars type-2 ng-scope" ng-controller="horizontalBarsType2Ctrl">
                                        <!-- ngRepeat: row in gender -->
                                        <button type="button" class="btn btn-sm btn-link text-muted"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="show more"><i class="icon-options"></i></button>
                                        <span class="badge badge-pill badge-warning">Cabang</span>

                                        <!-- end ngRepeat: row in gender -->


                                        @forelse ($cabangs as $tl)
                                        <li ng-repeat="row in source" class="ng-scope">
                                            <i ng-class="row.icon" class="icon-globe"></i>
                                            <div class="float-right">

                                                <span class="value ng-binding">{{$tl->jumlah}}</span>
                                                <small class="text-muted ng-binding">Person </small>
                                            </div>
                                            <span class="title ng-binding">{{$tl->name}}</span>

                                            <div class="bars">
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 56%" aria-valuenow="56" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </li>
                                        @empty
                                        <li ng-repeat="row in source" class="ng-scope">
                                            <i ng-class="row.icon" class="icon-globe"></i>
                                            <div class="float-right">

                                                <span class="value ng-binding"></span>
                                                <small class="text-muted ng-binding">Person </small>
                                            </div>
                                            <span class="title ng-binding"></span>
                                            <span class="value ng-binding">Tidak Ada Data

                                            </span>
                                            <div class="bars">
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 56%" aria-valuenow="56" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </li>

                                        @endforelse
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <ul class="horizontal-bars type-2 ng-scope" ng-controller="horizontalBarsType2Ctrl">
                                        <!-- ngRepeat: row in gender -->
                                        <button type="button" class="btn btn-sm btn-link text-muted"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="show more"><i class="icon-options"></i></button>
                                        <span class="badge badge-pill badge-warning">Titik Lokasi</span>

                                        <!-- end ngRepeat: row in gender -->


                                        @forelse ($titik_loc as $tl)
                                        <li ng-repeat="row in source" class="ng-scope">
                                            <i ng-class="row.icon" class="icon-globe"></i>
                                            <div class="float-right">

                                                <span class="value ng-binding">{{$tl->jml_titik}}</span>
                                                <small class="text-muted ng-binding">Person </small>
                                            </div>
                                            <span class="title ng-binding">{{$tl->name}}</span>

                                            <div class="bars">
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 56%" aria-valuenow="56" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </li>
                                        @empty
                                        <li ng-repeat="row in source" class="ng-scope">
                                            <i ng-class="row.icon" class="icon-globe"></i>
                                            <div class="float-right">

                                                <span class="value ng-binding"></span>
                                                <small class="text-muted ng-binding">Person </small>
                                            </div>
                                            <span class="title ng-binding"></span>
                                            <span class="value ng-binding">Tidak Ada Data

                                            </span>
                                            <div class="bars">
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 56%" aria-valuenow="56" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </li>

                                        @endforelse
                                        <!-- end ngRepeat: row in gender -->
                                </div>
                            </div>

                            <br>




                            <table class="table table-hover table-outline mb-0 hidden-sm-down">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center"><i class="icon-people"></i> Rekening penerima</th>
                                        <th class="text-center"></th>
                                        <th>Pemasukan</th>
                                        <th class="text-center"></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody ng-controller="usersTableCtrl" class="ng-scope">
                                    <!-- ngRepeat: user in users -->

                                    @forelse ($payment as $key => $item)
                                    <tr ng-repeat="user in users" class="ng-scope">
                                        <td class="text-center">
                                            <div class="avatar">
                                                {{$key+1}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="ng-binding">{{$item->metode_payment}}</div>
                                            <div class="small text-muted ng-binding">
                                                <!-- ngIf: user.new == true --><span ng-if="user.new == true"
                                                    class="ng-scope">Termasuk Pembayaran</span>
                                                <!-- end ngIf: user.new == true -->
                                                <!-- ngIf: user.new == false -->
                                                | Debit/Transfer/QRIS</div>
                                        </td>
                                        <td class="text-center">
                                            <i class="h4 mb-0 flag-icon flag-icon-us" title="us" id="us"></i>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong class="ng-binding">Rp.
                                                        {{number_format($item->jml_harga)}}</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted ng-binding">{{$nowTimeDate,true}}</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" ng-class="{ 'bg-info'    : user.usage <= 25,
          'bg-success' : user.usage > 25 &amp;&amp; user.usage <= 50,
          'bg-warning' : user.usage > 50 &amp;&amp; user.usage <= 75,
          'bg-danger'  : user.usage > 75 &amp;&amp; user.usage <= 100 }" value="50" role="progressbar"
                                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">

                                        </td>
                                        <td>

                                        </td>
                                    </tr><!-- end ngRepeat: user in users -->
                                    @empty
                                    <tr ng-repeat="user in users" class="ng-scope">
                                        <td class="text-center">
                                            <div class="avatar">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="ng-binding">Tidak Ada Data</div>
                                            <div class="small text-muted ng-binding">
                                                <!-- ngIf: user.new == true --><span ng-if="user.new == true"
                                                    class="ng-scope">Termasuk Pembayaran</span>
                                                <!-- end ngIf: user.new == true -->
                                                <!-- ngIf: user.new == false -->
                                                | Debit/Transfer/QRIS</div>
                                        </td>
                                        <td class="text-center">
                                            <i class="h4 mb-0 flag-icon flag-icon-us" title="us" id="us"></i>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong class="ng-binding">Tidak ada data</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted ng-binding"></small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" ng-class="{ 'bg-info'    : user.usage <= 25,
          'bg-success' : user.usage > 25 &amp;&amp; user.usage <= 50,
          'bg-warning' : user.usage > 50 &amp;&amp; user.usage <= 75,
          'bg-danger'  : user.usage > 75 &amp;&amp; user.usage <= 100 }" value="50" role="progressbar"
                                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">

                                        </td>
                                        <td>

                                        </td>
                                    </tr><!-- end ngRepeat: user in users -->
                                    @endforelse


                                    @forelse($jml_harga_all as $item)

                                    <tr ng-repeat="user in users" class="ng-scope">
                                        <td class="text-center">
                                            <div class="avatar">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="ng-binding">Jumlah Pemasukan</div>
                                            <div class="small text-muted ng-binding">
                                                <!-- ngIf: user.new == true --><span ng-if="user.new == true"
                                                    class="ng-scope">New</span><!-- end ngIf: user.new == true -->
                                                <!-- ngIf: user.new == false -->
                                                | {{$nowTimeDate,true}}</div>
                                        </td>
                                        <td class="text-center">
                                            <i class="h4 mb-0 flag-icon flag-icon-us" title="us" id="us"></i>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong class="ng-binding">Rp.
                                                        {{number_format($item->jml_harga_1)}}</strong>

                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted ng-binding">{{$nowTimeDate,true}}</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" ng-class="{ 'bg-info'    : user.usage <= 25,
                      'bg-success' : user.usage > 25 &amp;&amp; user.usage <= 50,
                      'bg-warning' : user.usage > 50 &amp;&amp; user.usage <= 75,
                      'bg-danger'  : user.usage > 75 &amp;&amp; user.usage <= 100 }" value="50" role="progressbar"
                                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">

                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    @empty
                                    <tr ng-repeat="user in users" class="ng-scope">
                                        <td class="text-center">
                                            <div class="avatar">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="ng-binding">Jumlah Pemasukan</div>
                                            <div class="small text-muted ng-binding">
                                                <!-- ngIf: user.new == true --><span ng-if="user.new == true"
                                                    class="ng-scope">New</span><!-- end ngIf: user.new == true -->
                                                <!-- ngIf: user.new == false -->
                                                |{{$nowTimeDate,true}}</div>
                                        </td>
                                        <td class="text-center">
                                            <i class="h4 mb-0 flag-icon flag-icon-us" title="us" id="us"></i>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong class="ng-binding">Tidak Ada Data</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted ng-binding">Jun 11, 2015 - Jul 10,
                                                        2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" ng-class="{ 'bg-info'    : user.usage <= 25,
                      'bg-success' : user.usage > 25 &amp;&amp; user.usage <= 50,
                      'bg-warning' : user.usage > 50 &amp;&amp; user.usage <= 75,
                      'bg-danger'  : user.usage > 75 &amp;&amp; user.usage <= 100 }" value="50" role="progressbar"
                                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">

                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    @endforelse
                                    <!-- end ngRepeat: user in users -->
                                    <!-- end ngRepeat: user in users -->
                                </tbody>
                            </table>
                            <table class="table table-hover table-outline mb-0 hidden-sm-down mt-3">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center"><i class="icon-people"></i> Rincian Pengeluaran</th>
                                        <th class="text-center"></th>
                                        <th>Pengeluaran</th>
                                        <th class="text-center"></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody ng-controller="usersTableCtrl" class="ng-scope">
                                    <!-- ngRepeat: user in users -->

                                    @forelse ($pengeluaran as $key => $item)
                                    <tr ng-repeat="user in users" class="ng-scope">
                                        <td class="text-center">
                                            <div class="avatar">
                                                {{$key+1}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="ng-binding">{{$item->name}}</div>
                                            <div class="small text-muted ng-binding">
                                                <!-- ngIf: user.new == true --><span ng-if="user.new == true"
                                                    class="ng-scope">---------------------------</span>
                                                <!-- end ngIf: user.new == true -->
                                                <!-- ngIf: user.new == false -->
                                                -------------- </div>
                                        <td class="text-center">
                                            <i class="h4 mb-0 flag-icon flag-icon-us" title="us" id="us"></i>
                                        </td>

                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong class="ng-binding">Rp.
                                                        {{number_format($item->jumlah)}}</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted ng-binding">{{$nowTimeDate,true}}</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" ng-class="{ 'bg-info'    : user.usage <= 25,
          'bg-success' : user.usage > 25 &amp;&amp; user.usage <= 50,
          'bg-warning' : user.usage > 50 &amp;&amp; user.usage <= 75,
          'bg-danger'  : user.usage > 75 &amp;&amp; user.usage <= 100 }" value="50" role="progressbar"
                                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">

                                        </td>
                                        <td>

                                        </td>
                                    </tr><!-- end ngRepeat: user in users -->
                                    @empty
                                    <tr ng-repeat="user in users" class="ng-scope">
                                        <td class="text-center">
                                            <div class="avatar">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="ng-binding">Tidak Ada Data</div>
                                            <div class="small text-muted ng-binding">
                                                <!-- ngIf: user.new == true --><span ng-if="user.new == true"
                                                    class="ng-scope">Termasuk Pembayaran</span>
                                                <!-- end ngIf: user.new == true -->
                                                <!-- ngIf: user.new == false -->
                                                | Debit/Transfer/QRIS</div>
                                        </td>
                                        <td class="text-center">
                                            <i class="h4 mb-0 flag-icon flag-icon-us" title="us" id="us"></i>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong class="ng-binding">Tidak ada data</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted ng-binding"></small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" ng-class="{ 'bg-info'    : user.usage <= 25,
          'bg-success' : user.usage > 25 &amp;&amp; user.usage <= 50,
          'bg-warning' : user.usage > 50 &amp;&amp; user.usage <= 75,
          'bg-danger'  : user.usage > 75 &amp;&amp; user.usage <= 100 }" value="50" role="progressbar"
                                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">

                                        </td>
                                        <td>

                                        </td>
                                    </tr><!-- end ngRepeat: user in users -->
                                    @endforelse




                                    <tr ng-repeat="user in users" class="ng-scope">
                                        <td class="text-center">
                                            <div class="avatar">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="ng-binding">Jumlah Pengeluaran</div>
                                            <div class="small text-muted ng-binding">
                                                <!-- ngIf: user.new == true --><span ng-if="user.new == true"
                                                    class="ng-scope">New</span><!-- end ngIf: user.new == true -->
                                                <!-- ngIf: user.new == false -->
                                                | {{$nowTimeDate,true}}</div>
                                        </td>
                                        <td class="text-center">
                                            <i class="h4 mb-0 flag-icon flag-icon-us" title="us" id="us"></i>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong class="ng-binding">Rp.
                                                        {{number_format($jml_pengeluaran)}}</strong>

                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted ng-binding">{{$nowTimeDate,true}}</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" ng-class="{ 'bg-info'    : user.usage <= 25,
                      'bg-success' : user.usage > 25 &amp;&amp; user.usage <= 50,
                      'bg-warning' : user.usage > 50 &amp;&amp; user.usage <= 75,
                      'bg-danger'  : user.usage > 75 &amp;&amp; user.usage <= 100 }" value="50" role="progressbar"
                                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">

                                        </td>
                                        <td>

                                        </td>
                                    </tr>

                                    <!-- end ngRepeat: user in users -->
                                    <!-- end ngRepeat: user in users -->
                                </tbody>
                            </table>
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
                                            <th>Jenis layanan</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Jumlah</th>

                                            <th>Lokasi</th>
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
                                            <td>{{ $row->pelayanan }} </td>
                                            <td>{{ $row->payment->metode_payment }} </td>
                                            <td>{{ number_format($row->price->harga) }}</td>


                                            <td>{{ $row->titik->name }} </td>


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


                <!--/.col-->
            </div>









        </div>

    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script>
        window.print();

    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('ecommerce/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('ecommerce/js/popper.js') }}"></script>
    <script src="{{ asset('ecommerce/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('ecommerce/js/stellar.js') }}"></script>
    <script src="{{ asset('ecommerce/vendors/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ asset('ecommerce/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('ecommerce/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('ecommerce/vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{ asset('ecommerce/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('ecommerce/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('ecommerce/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('ecommerce/vendors/flipclock/timer.js') }}"></script>
    <script src="{{ asset('ecommerce/vendors/counter-up/jquery.counterup.js') }}"></script>
    <script src="{{ asset('ecommerce/js/mail-script.js') }}"></script>
    <script src="{{ asset('ecommerce/js/theme.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/coreui.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-tooltips.min.js') }}"></script>
    @yield('js')

</body>

</html>
