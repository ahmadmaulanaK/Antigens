@extends('layouts.admin')

@section('title')
    <title>Antigen</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Antigen</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      Traffic &amp; Sales
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                              <div class="card text-white bg-primary ng-scope" ng-controller="cardChartCtrl1">
                                <div class="card-body pb-0">
                                  <div class="btn-group float-right">
                                    <i class="icon-settings"></i>
                                   
                                  </div>
                                  <h4>Drive THRU</h4>
                                  <h4 class="mb-0">{{$DriveTHRU->count()}}</h4>
                                  <p>Pemeriksaan</p>
                                </div>
                                
                              </div>
                            </div>
                            <!--/.col-->
                        
                            <div class="col-sm-6 col-lg-3">
                              <div class="card text-white bg-info ng-scope" ng-controller="cardChartCtrl2">
                                <div class="card-body pb-0">
                                  <button type="button" class="btn btn-transparent p-0 float-right">
                                    <i class="icon-location-pin"></i>
                                  </button>
                                  <h4>Onsite</h4>
                                  <h4 class="mb-0">{{$Onsite->count()}}</h4>
                                  <p>Pemeriksaan</p>
                                </div>
                                
                              </div>
                            </div>
                            <!--/.col-->
                        
                            <div class="col-sm-6 col-lg-3">
                              <div class="card text-white bg-warning ng-scope" ng-controller="cardChartCtrl3">
                                <div class="card-body pb-0">
                                  <div class="btn-group float-right">
                                    <i class="icon-settings"></i>
                                   
                                  </div>
                                  <h4>Home Visit</h4>
                                  <h4 class="mb-0">{{$HomeVisit->count()}}</h4>
                                  <p>Pemeriksaan</p>
                                </div>
                               
                              </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                              <div class="card text-white bg-danger ng-scope" ng-controller="cardChartCtrl3">
                                <div class="card-body pb-0">
                                  <div class="btn-group float-right">
                                    <i class="icon-settings"></i>
                                    
                                  
                                  </div>
                                  <h4>Total Pemasukan</h4>
                                  <h4 class="mb-0">Rp. {{number_format($total)}}</h4>
                                  <p>/Hari</p>
                                </div>
                               
                              </div>
                            </div>
                            <!--/.col-->
                        
                            
                            <!--/.col-->
                          </div>

                      <div class="row">
                        <div class="col-sm-12 col-lg-4">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="callout callout-info">
                                <small class="text-muted">Hasil Negatif</small>
                                <br>
                                <strong class="h4">{{$Negatif->count()}}</strong>
                                <div class="chart-wrapper ng-scope" ng-controller="sparklineChartCtrl"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                  <canvas class="chart chart-line ng-isolate-scope chartjs-render-monitor" chart-data="data4" chart-labels="labels" chart-legend="false" chart-series="series" chart-options="options" chart-colors="primary" width="118" height="34" style="display: block; width: 59px; height: 17px;"></canvas>
                                </div>
                              </div>
                            </div>
                            <!--/.col-->
                            <div class="col-sm-6">
                              <div class="callout callout-danger">
                                <small class="text-muted">Hasil Positif</small>
                                <br>
                                <strong class="h4">{{$Positif->count()}}</strong>
                                <div class="chart-wrapper ng-scope" ng-controller="sparklineChartCtrl"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                  <canvas class="chart chart-line ng-isolate-scope chartjs-render-monitor" chart-data="data3" chart-labels="labels" chart-legend="false" chart-series="series" chart-options="options" chart-colors="danger" width="118" height="34" style="display: block; width: 59px; height: 17px;"></canvas>
                                </div>
                              </div>
                            </div>
                            <!--/.col-->
                          </div>
                          <!--/.row-->
                          <hr class="mt-0">
                          
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6 col-lg-4">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="callout callout-warning">
                                <small class="text-muted">Jumlah</small>
                                <br>
                                <strong class="h4">{{$totalSwabHarian->count()}}</strong>
                                <div class="chart-wrapper ng-scope" ng-controller="sparklineChartCtrl"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                  <canvas class="chart chart-line ng-isolate-scope chartjs-render-monitor" chart-data="data4" chart-labels="labels" chart-legend="false" chart-series="series" chart-options="options" chart-colors="warning" width="118" height="34" style="display: block; width: 59px; height: 17px;"></canvas>
                                </div>
                              </div>
                            </div>
                            <!--/.col-->
                            <div class="col-sm-6">
                              <div class="callout callout-success">
                                <small class="text-muted">Rapid Antibodi</small>
                                <br>
                                <strong class="h4">{{$tesRapidantibodi->count()}}</strong>
                                <div class="chart-wrapper ng-scope" ng-controller="sparklineChartCtrl"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                  <canvas class="chart chart-line ng-isolate-scope chartjs-render-monitor" chart-data="data3" chart-labels="labels" chart-legend="false" chart-series="series" chart-options="options" chart-colors="success" width="118" height="34" style="display: block; width: 59px; height: 17px;"></canvas>
                                </div>
                              </div>
                            </div>
                            <!--/.col-->
                          </div>
                          <!--/.row-->
                          <hr class="mt-0">
                        
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6 col-lg-4">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="callout">
                                <small class="text-muted">Swab Antigen</small>
                                <br>
                                <strong class="h4">{{$tesAntigen->count()}}</strong>
                                <div class="chart-wrapper ng-scope" ng-controller="sparklineChartCtrl"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                  <canvas class="chart chart-line ng-isolate-scope chartjs-render-monitor" chart-data="data4" chart-labels="labels" chart-legend="false" chart-series="series" chart-options="options" chart-colors="default" width="118" height="34" style="display: block; width: 59px; height: 17px;"></canvas>
                                </div>
                              </div>
                            </div>
                            <!--/.col-->
                            <div class="col-sm-6">
                              <div class="callout callout-primary">
                                <small class="text-muted">PCR</small>
                                <br>
                                <strong class="h4">{{$tesPCR->count()}}</strong>
                                <div class="chart-wrapper ng-scope" ng-controller="sparklineChartCtrl"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                  <canvas class="chart chart-line ng-isolate-scope chartjs-render-monitor" chart-data="data3" chart-labels="labels" chart-legend="false" chart-series="series" chart-options="options" chart-colors="primary" width="118" height="34" style="display: block; width: 59px; height: 17px;"></canvas>
                                </div>
                              </div>
                            </div>
                            <!--/.col-->
                            
                          </div>
                          <!--/.row-->
                          <hr class="mt-0">
                         
                        </div>
                        <!--/.col-->
                      </div>
                      <!--/.row-->
                      <br>
                      <table class="table table-hover table-outline mb-0 hidden-sm-down">
                        <thead class="thead-light">
                          <tr>
                            <th class="text-center"><i class="icon-people"></i></th>
                            <th>Rekening Penerima</th>
                            <th class="text-center"></th>
                            <th>Pemasukan</th>
                            <th class="text-center">Activity</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody ng-controller="usersTableCtrl" class="ng-scope">
                          <!-- ngRepeat: user in users --><tr ng-repeat="user in users" class="ng-scope">
                            <td class="text-center">
                              <div class="avatar">
                               BNI
                              </div>
                            </td>
                            <td>
                              <div class="ng-binding">Dr.Evi</div>
                              <div class="small text-muted ng-binding">
                                <!-- ngIf: user.new == true --><span ng-if="user.new == true" class="ng-scope">New</span><!-- end ngIf: user.new == true -->
                                <!-- ngIf: user.new == false -->
                                | Registered: </div>
                            </td>
                            <td class="text-center">
                              <i class="h4 mb-0 flag-icon flag-icon-us" title="us" id="us"></i>
                            </td>
                            <td>
                              <div class="clearfix">
                                <div class="float-left">
                                  <strong class="ng-binding">Rp. {{number_format($BNI_Dr)}} </strong>
                                </div>
                                <div class="float-right">
                                  <small class="text-muted ng-binding"></small>
                                </div>
                              </div>
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success" ng-class="{ 'bg-info'    : user.usage <= 25,
                                  'bg-success' : user.usage > 25 &amp;&amp; user.usage <= 50,
                                  'bg-warning' : user.usage > 50 &amp;&amp; user.usage <= 75,
                                  'bg-danger'  : user.usage > 75 &amp;&amp; user.usage <= 100 }" value="50" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td class="text-center">
                              <i class="></i>
                            </td>
                            <td>
                              <div class="small text-muted"></div>
                              <strong class="ng-binding">{{$nowTimeDate,true}}</strong>
                            </td>
                          </tr><!-- end ngRepeat: user in users --><tr ng-repeat="user in users" class="ng-scope">
                          <!-- ngRepeat: user in users --><tr ng-repeat="user in users" class="ng-scope">
                            <td class="text-center">
                              <div class="avatar">
                                BCA
                              </div>
                            </td>
                            <td>
                              <div class="ng-binding">Dr.Evi</div>
                              <div class="small text-muted ng-binding">
                                <!-- ngIf: user.new == true --><span ng-if="user.new == true" class="ng-scope">New</span><!-- end ngIf: user.new == true -->
                                <!-- ngIf: user.new == false -->
                                | Registered: </div>
                                <td class="text-center">
                                  <i class="h4 mb-0 flag-icon flag-icon-us" title="us" id="us"></i>
                                </td>
                                <td>
                                  <div class="clearfix">
                                    <div class="float-left">
                                      <strong class="ng-binding">Rp. {{number_format($BCA_Dr)}} </strong>
                                    </div>
                                    <div class="float-right">
                                      <small class="text-muted ng-binding"></small>
                                    </div>
                                  </div>
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" ng-class="{ 'bg-info'    : user.usage <= 25,
                                      'bg-success' : user.usage > 25 &amp;&amp; user.usage <= 50,
                                      'bg-warning' : user.usage > 50 &amp;&amp; user.usage <= 75,
                                      'bg-danger'  : user.usage > 75 &amp;&amp; user.usage <= 100 }" value="50" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <i class="></i>
                                </td>
                                <td>
                                  <div class="small text-muted"></div>
                                  <strong class="ng-binding">{{$nowTimeDate,true}}</strong>
                                </td>
                          </tr><!-- end ngRepeat: user in users --><tr ng-repeat="user in users" class="ng-scope">
                          <!-- ngRepeat: user in users --><tr ng-repeat="user in users" class="ng-scope">
                            <td class="text-center">
                              <div class="avatar">
                                BRI
                              </div>
                            </td>
                            <td>
                              <div class="ng-binding">Dr.Evi</div>
                              <div class="small text-muted ng-binding">
                                <!-- ngIf: user.new == true --><span ng-if="user.new == true" class="ng-scope">New</span><!-- end ngIf: user.new == true -->
                                <!-- ngIf: user.new == false -->
                                | Registered: </div>
                                <td class="text-center">
                                  <i class="h4 mb-0 flag-icon flag-icon-us" title="us" id="us"></i>
                                </td>
                                <td>
                                  <div class="clearfix">
                                    <div class="float-left">
                                      <strong class="ng-binding">Rp. {{number_format($BRI_Dr)}} </strong>
                                    </div>
                                    <div class="float-right">
                                      <small class="text-muted ng-binding"></small>
                                    </div>
                                  </div>
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" ng-class="{ 'bg-info'    : user.usage <= 25,
                                      'bg-success' : user.usage > 25 &amp;&amp; user.usage <= 50,
                                      'bg-warning' : user.usage > 50 &amp;&amp; user.usage <= 75,
                                      'bg-danger'  : user.usage > 75 &amp;&amp; user.usage <= 100 }" value="50" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <i class="></i>
                                </td>
                                <td>
                                  <div class="small text-muted"></div>
                                  <strong class="ng-binding">{{$nowTimeDate,true}}</strong>
                                </td>
                          </tr><!-- end ngRepeat: user in users --><tr ng-repeat="user in users" class="ng-scope">
                          <!-- ngRepeat: user in users --><tr ng-repeat="user in users" class="ng-scope">
                            <td class="text-center">
                              <div class="avatar">
                                cash
                              </div>
                            </td>
                            <td>
                              <div class="ng-binding">Pt.Panggil Dokter</div>
                              <div class="small text-muted ng-binding">
                                <!-- ngIf: user.new == true --><span ng-if="user.new == true" class="ng-scope">New</span><!-- end ngIf: user.new == true -->
                                <!-- ngIf: user.new == false -->
                                | Registered: </div>
                                <td class="text-center">
                                  <i class="h4 mb-0 flag-icon flag-icon-us" title="us" id="us"></i>
                                </td>
                                <td>
                                  <div class="clearfix">
                                    <div class="float-left">
                                      <strong class="ng-binding">Rp. {{number_format($cash)}} </strong>
                                    </div>
                                    <div class="float-right">
                                      <small class="text-muted ng-binding"></small>
                                    </div>
                                  </div>
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" ng-class="{ 'bg-info'    : user.usage <= 25,
                                      'bg-success' : user.usage > 25 &amp;&amp; user.usage <= 50,
                                      'bg-warning' : user.usage > 50 &amp;&amp; user.usage <= 75,
                                      'bg-danger'  : user.usage > 75 &amp;&amp; user.usage <= 100 }" value="50" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <i class="></i>
                                </td>
                                <td>
                                  <div class="small text-muted"></div>
                                  <strong class="ng-binding">{{$nowTimeDate,true}}</strong>
                                </td>
                          </tr><!-- end ngRepeat: user in users --><tr ng-repeat="user in users" class="ng-scope">
                            <td class="text-center">
                                <div class="avatar">
                                    BCA
                                   </div>
                            </td>
                            <td>
                              <div class="ng-binding">Pt.Panggil Dokter</div>
                              <div class="small text-muted ng-binding">
                                <!-- ngIf: user.new == true -->
                                <!-- ngIf: user.new == false --><span ng-if="user.new == false" class="ng-scope">Recurring</span><!-- end ngIf: user.new == false -->
                                | Registered: </div>
                                <td class="text-center">
                                  <i class="h4 mb-0 flag-icon flag-icon-us" title="us" id="us"></i>
                                </td>
                                <td>
                                  <div class="clearfix">
                                    <div class="float-left">
                                      <strong class="ng-binding">Rp. {{number_format($BCA_Pt)}} </strong>
                                    </div>
                                    <div class="float-right">
                                      <small class="text-muted ng-binding"></small>
                                    </div>
                                  </div>
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" ng-class="{ 'bg-info'    : user.usage <= 25,
                                      'bg-success' : user.usage > 25 &amp;&amp; user.usage <= 50,
                                      'bg-warning' : user.usage > 50 &amp;&amp; user.usage <= 75,
                                      'bg-danger'  : user.usage > 75 &amp;&amp; user.usage <= 100 }" value="50" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <i class="></i>
                                </td>
                                <td>
                                  <div class="small text-muted"></div>
                                  <strong class="ng-binding">{{$nowTimeDate,true}}</strong>
                                </td>
                          </tr><!-- end ngRepeat: user in users --><tr ng-repeat="user in users" class="ng-scope">
                            <td class="text-center">
                                <div class="avatar">
                                    BNI
                                   </div>
                            </td>
                            <td>
                              <div class="ng-binding">Pt.Panggil Dokter</div>
                              <div class="small text-muted ng-binding">
                                <!-- ngIf: user.new == true --><span ng-if="user.new == true" class="ng-scope">New</span><!-- end ngIf: user.new == true -->
                                <!-- ngIf: user.new == false -->
                                | Registered: </div>
                                <td class="text-center">
                                  <i class="h4 mb-0 flag-icon flag-icon-us" title="us" id="us"></i>
                                </td>
                                <td>
                                  <div class="clearfix">
                                    <div class="float-left">
                                      <strong class="ng-binding">Rp. {{number_format($BNI_Pt)}} </strong>
                                    </div>
                                    <div class="float-right">
                                      <small class="text-muted ng-binding"></small>
                                    </div>
                                  </div>
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" ng-class="{ 'bg-info'    : user.usage <= 25,
                                      'bg-success' : user.usage > 25 &amp;&amp; user.usage <= 50,
                                      'bg-warning' : user.usage > 50 &amp;&amp; user.usage <= 75,
                                      'bg-danger'  : user.usage > 75 &amp;&amp; user.usage <= 100 }" value="50" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <i class="></i>
                                </td>
                                <td>
                                  <div class="small text-muted"></div>
                                  <strong class="ng-binding">{{$nowTimeDate,true}}</strong>
                                </td>
                          </tr><!-- end ngRepeat: user in users --><tr ng-repeat="user in users" class="ng-scope">
                            <td class="text-center">
                                <div class="avatar">
                                    BJB
                                   </div>
                            </td>
                            <td>
                              <div class="ng-binding">Pt.Panggil Dokter</div>
                              <div class="small text-muted ng-binding">
                                <!-- ngIf: user.new == true --><span ng-if="user.new == true" class="ng-scope">New</span><!-- end ngIf: user.new == true -->
                                <!-- ngIf: user.new == false -->
                                | Registered: </div>
                                <td class="text-center">
                                  <i class="h4 mb-0 flag-icon flag-icon-us" title="us" id="us"></i>
                                </td>
                                <td>
                                  <div class="clearfix">
                                    <div class="float-left">
                                      <strong class="ng-binding">Rp. {{number_format($BJB_Pt)}} </strong>
                                    </div>
                                    <div class="float-right">
                                      <small class="text-muted ng-binding"></small>
                                    </div>
                                  </div>
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" ng-class="{ 'bg-info'    : user.usage <= 25,
                                      'bg-success' : user.usage > 25 &amp;&amp; user.usage <= 50,
                                      'bg-warning' : user.usage > 50 &amp;&amp; user.usage <= 75,
                                      'bg-danger'  : user.usage > 75 &amp;&amp; user.usage <= 100 }" value="50" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <i class="></i>
                                </td>
                                <td>
                                  <div class="small text-muted"></div>
                                  <strong class="ng-binding">{{$nowTimeDate,true}}</strong>
                                </td>
                          </tr><!-- end ngRepeat: user in users --><tr ng-repeat="user in users" class="ng-scope">
                            <td class="text-center">
                                <div class="avatar">
                                    MANDIRI
                                   </div>
                            </td>
                            <td>
                              <div class="ng-binding">Pt.Panggil Dokter</div>
                              <div class="small text-muted ng-binding">
                                <!-- ngIf: user.new == true --><span ng-if="user.new == true" class="ng-scope">New</span><!-- end ngIf: user.new == true -->
                                <!-- ngIf: user.new == false -->
                                | Registered: </div>
                                <td class="text-center">
                                  <i class="h4 mb-0 flag-icon flag-icon-us" title="us" id="us"></i>
                                </td>
                                <td>
                                  <div class="clearfix">
                                    <div class="float-left">
                                      <strong class="ng-binding">Rp. {{number_format($Mandiri_Pt)}} </strong>
                                    </div>
                                    <div class="float-right">
                                      <small class="text-muted ng-binding"></small>
                                    </div>
                                  </div>
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" ng-class="{ 'bg-info'    : user.usage <= 25,
                                      'bg-success' : user.usage > 25 &amp;&amp; user.usage <= 50,
                                      'bg-warning' : user.usage > 50 &amp;&amp; user.usage <= 75,
                                      'bg-danger'  : user.usage > 75 &amp;&amp; user.usage <= 100 }" value="50" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <i class="></i>
                                </td>
                                <td>
                                  <div class="small text-muted"></div>
                                  <strong class="ng-binding">{{$nowTimeDate,true}}</strong>
                                </td>
                          </tr><!-- end ngRepeat: user in users --><tr ng-repeat="user in users" class="ng-scope">
                            <td class="text-center">
                                <div class="avatar">
                                    PIUTANG
                                   </div>
                            </td>
                            <td>
                              <div class="ng-binding">Pt.Panggil Dokter</div>
                              <div class="small text-muted ng-binding">
                                <!-- ngIf: user.new == true --><span ng-if="user.new == true" class="ng-scope">New</span><!-- end ngIf: user.new == true -->
                                <!-- ngIf: user.new == false -->
                                | Registered: </div>
                                <td class="text-center">
                                  <i class="h4 mb-0 flag-icon flag-icon-us" title="us" id="us"></i>
                                </td>
                                <td>
                                  <div class="clearfix">
                                    <div class="float-left">
                                      <strong class="ng-binding">Rp. {{number_format($Piutang)}} </strong>
                                    </div>
                                    <div class="float-right">
                                      <small class="text-muted ng-binding"></small>
                                    </div>
                                  </div>
                                  <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" ng-class="{ 'bg-info'    : user.usage <= 25,
                                      'bg-success' : user.usage > 25 &amp;&amp; user.usage <= 50,
                                      'bg-warning' : user.usage > 50 &amp;&amp; user.usage <= 75,
                                      'bg-danger'  : user.usage > 75 &amp;&amp; user.usage <= 100 }" value="50" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <i class="></i>
                                </td>
                                <td>
                                  <div class="small text-muted"></div>
                                  <strong class="ng-binding">{{$nowTimeDate,true}}</strong>
                                </td>
                          </tr><!-- end ngRepeat: user in users -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!--/.col-->
              </div>
        </div>
    </div>

    
</main>
@endsection
