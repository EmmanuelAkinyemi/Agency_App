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
                                        <h2 class="fs-36 text-black font-w600">2,356</h2>
                                        <p class="fs-18 mb-0 text-black font-w500">Properties for Sale</p>
                                        <span class="fs-13">Target 3k/month</span>
                                    </div>
                                    <div class="d-inline-block position-relative donut-chart-sale">
                                        <span class="donut1"
                                            data-peity='{ "fill": ["rgb(60, 76, 184)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'>5/8</span>
                                        <small class="text-primary">71%</small>
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
                                        <h2 class="fs-36 text-black font-w600">2,206</h2>
                                        <p class="fs-18 mb-0 text-black font-w500">Properties for Rent</p>
                                        <span class="fs-13">Target 3k/month</span>
                                    </div>
                                    <div class="d-inline-block position-relative donut-chart-sale">
                                        <span class="donut1"
                                            data-peity='{ "fill": ["rgb(55, 209, 90)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'>7/8</span>
                                        <small class="text-success">90%</small>
                                        <span class="circle bgl-success"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h3 class="fs-20 text-black">Total Revenue</h3>
                        <div class="dropdown ms-auto">
                            <div class="btn-link" data-bs-toggle="dropdown">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                        <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                        <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                    </g>
                                </svg>
                            </div>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-2 pb-0">
                        <div class="d-flex flex-wrap align-items-center">
                            <span class="fs-36 text-black font-w600 me-3">$678,345</span>
                            <p class="me-sm-auto me-3 mb-sm-0 mb-3">last month $563,443</p>
                            <div class="d-flex align-items-center">
                                <svg class="me-3" width="87" height="47" viewBox="0 0 87 47" fill="none"
                                    xmlns="../../www.w3.org/2000/svg.html">
                                    <path
                                        d="M29.8043 20.9254C15.2735 14.3873 5.88029 27.282 3 34.5466V46.2406H85V4.58005C70.8925 -0.868404 70.5398 8.66639 60.8409 19.5633C51.1419 30.4602 47.9677 29.0981 29.8043 20.9254Z"
                                        fill="url(#paint0_linear)" />
                                    <path
                                        d="M3 35.2468C5.88029 27.9822 15.2735 15.0875 29.8043 21.6257C47.9677 29.7984 51.1419 31.1605 60.8409 20.2636C70.5398 9.36665 70.8925 -0.168147 85 5.28031"
                                        stroke="#37D159" stroke-width="6" />
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="44" y1="-36.4332" x2="44"
                                            y2="45.9686" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#37D159" offset="0" />
                                            <stop offset="1" stop-color="#37D159" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <span class="fs-22 text-success me-2">7%</span>
                                <svg width="12" height="6" viewBox="0 0 12 6" fill="none"
                                    xmlns="../../www.w3.org/2000/svg.html">
                                    <path d="M0 6L6 2.62268e-07L12 6" fill="#37D159" />
                                </svg>
                            </div>
                        </div>
                        <div id="chartTimeline"></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
