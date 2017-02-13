@extends('layouts.admin')
@section('meta')
@endsection
@section('content')
    <div class="wrapper wrapper-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <span class="label label-success pull-right">月</span>
                            <h5>用户数</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">386,200</h1>
                            <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i>
                            </div>
                            <small>总量</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <span class="label label-info pull-right">月</span>
                            <h5>群组</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">80,800</h1>
                            <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i>
                            </div>
                            <small>新群组</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <span class="label label-primary pull-right">今天</span>
                            <h5>通话</h5>
                        </div>
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="no-margins">&yen; 406,420</h1>
                                    <div class="font-bold text-navy">44% <i class="fa fa-level-up"></i> <small>增长较快</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="no-margins">206,120</h1>
                                    <div class="font-bold text-navy">22% <i class="fa fa-level-up"></i> <small>增长较慢</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>月收入</h5>
                            <div class="ibox-tools">
                                <span class="label label-primary">2017.02 更新</span>
                            </div>
                        </div>
                        <div class="ibox-content no-padding">
                            <div class="flot-chart m-t-lg" style="height: 55px;">
                                <div class="flot-chart-content" id="flot-chart1">&nbsp;&nbsp;数据读取中...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section("script")

@endsection
