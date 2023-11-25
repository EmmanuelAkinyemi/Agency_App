@extends('user.userLayout')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto  d-lg-block">
                <h2 class="text-black font-w600">Dashboard</h2>
                <p class="mb-0">Welcome <span class="mr-3 ">{{ auth()->user()->email }}</span></p>
            </div>
            <a href="index.html" class="btn btn-primary rounded light me-3">Refresh</a>
            <a href="javascript:void(0);" class="btn btn-primary rounded"><i class="fas fa-cog me-0"></i></a>
        </div>
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">

                                        <div class="media-body me-3">

                                                <h2 class="fs-36 text-black font-w600">
                                                    ${{ number_format($totalDeposit) }}
                                                </h2>
                                                <p class="fs-18 mb-0 text-black font-w500">Total Deposit
                                                </p>


                                        </div>

                                        <div class="d-inline-block position-relative donut-chart-sale">
                                            <span class="donut1"
                                                data-peity='{ "fill": ["rgb(60, 76, 184)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'></span>
                                            <small class="text-primary"></small>
                                            <span class="circle bgl-primary"></span>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                        <div class="media-body me-3">
                                                <h2 class="fs-36 text-primary font-w600">
                                                    ${{ number_format($activeDeposit) }}
                                                </h2>
                                                <p class="fs-18 mb-0 text-black font-w500">Active Deposit
                                                </p>
                                        </div>

                                        <div class="d-inline-block position-relative donut-chart-sale">
                                            <span class="donut1"
                                                data-peity='{ "fill": ["rgb(60, 76, 184)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'></span>
                                            <small class="text-primary"></small>
                                            <span class="circle bgl-primary"></span>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body me-3">
                                        <h2 class="fs-36 text-black font-w600">${{ number_format($totalWithdrawal) }}</h2>
                                        <p class="fs-18 mb-0 text-black font-w500">Total Withdrawal</p>

                                    </div>
                                    <div class="d-inline-block position-relative donut-chart-sale">
                                        <span class="donut1"
                                            data-peity='{ "fill": ["rgb(55, 209, 90)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'></span>
                                        <small class="text-info"></small>
                                        <span class="circle bgl-success"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body me-3">
                                        <h2 class="fs-36 text-success font-w600" >${{ number_format($totalProfit) }}</h2>
                                        <p class="fs-18 mb-0 text-black font-w500">Total Profit</p>

                                    </div>
                                    <div class="d-inline-block position-relative donut-chart-sale">
                                        <span class="donut1"
                                            data-peity='{ "fill": ["rgb(55, 209, 90)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'></span>
                                        <small class="text-success"></small>
                                        <span class="circle bgl-success"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
