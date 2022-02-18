@extends('layouts.admin')

<!-- TAG YANG DIAPIT OLEH SECTION('TITLE') AKAN ME-REPLACE @YIELD('TITLE') PADA MASTER LAYOUTS -->
@section('title')
<title>Dashboard</title>
@endsection

<!-- TAG YANG DIAPIT OLEH SECTION('CONTENT') AKAN ME-REPLACE @YIELD('CONTENT') PADA MASTER LAYOUTS -->
@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
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
                            <div class="row mt-5 p-3">
                           
                                @forelse ($user as $tl)
                                <div class="col-3">
                                    <button type="button" class="btn btn-sm btn-link text-muted"
                                    data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="show more"><i class="icon-options"></i></button>
                                <span class="badge badge-pill badge-dark">Admin Hasil</span>
                                
                                <li ng-repeat="row in source" class="ng-scope">
                                    <i ng-class="row.icon" class="icon-check"></i>
                                    <div class="float-right">

                                        <span class="value ng-binding">{{$tl->jumlahUser}}</span>
                                        <small class="text-muted ng-binding">Person </small>
                                    </div>
                                    <span class="title ng-binding">{{$tl->name}}</span>

                                    <div class="bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                style="width: 56%" aria-valuenow="56" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                                @empty
                                <div class="col-3">
                                    
                               
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
                            </div>

                            <hr>
                            <hr>
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
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 43%" aria-valuenow="43" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    {{--  --}}
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
                                                    <div class="progress-bar bg-success" role="progressbar"
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
                                        {{-- jjj --}}
                                </div>

                            </div>
                            <div class="row mt-3">

                               
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
                                                    <div class="progress-bar bg-success" role="progressbar"
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
                                <div class="col-sm-6 col-lg-6">
                                    <ul class="horizontal-bars type-2 ng-scope" ng-controller="horizontalBarsType2Ctrl">
                                        <!-- ngRepeat: row in gender -->
                                        <button type="button" class="btn btn-sm btn-link text-muted"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="show more"><i class="icon-options"></i></button>
                                        <span class="badge badge-pill badge-warning">Swabber</span>

                                        <!-- end ngRepeat: row in gender -->


                                        @forelse ($swabber_qtt as $tl)
                                        <li ng-repeat="row in source" class="ng-scope">
                                            <i ng-class="row.icon" class="icon-people"></i>
                                            <div class="float-right">

                                                <span class="value ng-binding">{{$tl->jml_swabber}}</span>
                                                <small class="text-muted ng-binding">Person </small>
                                            </div>
                                            <span class="title ng-binding">   {{$tl->name}}</span>

                                            <div class="bars">
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-success" role="progressbar"
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

                            <hr>
                            <hr>
                           
                        
                       






                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection
