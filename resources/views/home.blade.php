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
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Aktivitas Keseluruhan</h4>
                        </div>
                        <div class="card-body">
                            
                            <div class="row">
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
                              




                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                                    <hr class="mt-0">

                                  
                                </div>
                                <div class="col-sm-3 col-lg-4">
                                    <div class="row">


                                        @forelse ($category_qtt as $val)
                                        <div class="col-sm-6">
                                            <div class="callout callout-warning">
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

                                 
                                </div>
                                <!--/.col-->
                                <div class="col-sm-3 col-lg-4">
                                    <div class="row">


                                        @forelse ($t as $val)
                                        <div class="col-sm-6">
                                            <div class="callout callout-danger">
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

                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                                    <hr class="mt-0">
                                    
                                </div>
                           

                                {{-- <div class="col-md-3">
                                    <div class="callout callout-info">
                                        <small class="text-muted">Total Swab Antigen</small>
                                        <br>
                                        <strong class="h4">{{$totalSwab->count()}}</strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="callout callout-danger">
                                        <small class="text-muted">Total Perhari</small>
                                        <br>
                                        <strong class="h4">{{$totalSwabHarian->count()}}</strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="callout callout-primary">
                                        <small class="text-muted">Perlu Diproses</small>
                                        <br>
                                        <strong class="h4">0</strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="callout callout-success">
                                        <small class="text-muted">Total Transaksi</small>
                                        <br>
                                        <strong class="h4">0</strong>
                                    </div>
                                </div> --}}
                            </div>

                            <div class="row">
                                <div class="col">
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

                                <div class="col">
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
                                    </ul>

                                </div>

                                <div class="col">
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

                                        <!-- ngRepeat: row in source -->

                                    </ul>

                                </div>

                                <div class="col">
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
                                        <!-- end ngRepeat: row in gender -->

                                        <!-- ngRepeat: row in source -->

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
</main>
@endsection