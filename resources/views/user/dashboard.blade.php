@extends('layouts.layout')
@section('title', 'Admin Dashboard')
@section('content')
<div class="row ">
    <div class="col-lg-12">

        <div class="breadcrumb-main">
            <h4 class="text-capitalize breadcrumb-title">My Dashboard</h4>
            <div class="breadcrumb-action justify-content-center flex-wrap">
                <div class="action-btn">

                    <div class="form-group mb-0">
                        <div class="input-container icon-left position-relative">
                            <span class="input-icon icon-left">
                                <span data-feather="calendar"></span>
                            </span>
                            <input type="text" class="form-control form-control-default date-ranger" name="date-ranger" placeholder="Aug 30, 2022 - {{ Carbon\Carbon::now()->format('M d, Y') }}">
                            <span class="input-icon icon-right">
                                <span data-feather="chevron-down"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="dropdown action-btn">
                    <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="la la-download"></i> Export
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <span class="dropdown-item">Export With</span>
                        <div class="dropdown-divider"></div>
                        <a href="" class="dropdown-item">
                            <i class="la la-print"></i> Printer</a>
                        <a href="" class="dropdown-item">
                            <i class="la la-file-pdf"></i> PDF</a>
                        <a href="" class="dropdown-item">
                            <i class="la la-file-text"></i> Google Sheets</a>
                        <a href="" class="dropdown-item">
                            <i class="la la-file-excel"></i> Excel (XLSX)</a>
                        <a href="" class="dropdown-item">
                            <i class="la la-file-csv"></i> CSV</a>
                    </div>
                </div>
                <div class="dropdown action-btn">
                    <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="la la-share"></i> Share
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                        <span class="dropdown-item">Share Link</span>
                        <div class="dropdown-divider"></div>
                        <a href="" class="dropdown-item">
                            <i class="la la-facebook"></i> Facebook</a>
                        <a href="" class="dropdown-item">
                            <i class="la la-twitter"></i> Twitter</a>
                        <a href="" class="dropdown-item">
                            <i class="la la-google"></i> Google</a>
                        <a href="" class="dropdown-item">
                            <i class="la la-feed"></i> Feed</a>
                        <a href="" class="dropdown-item">
                            <i class="la la-instagram"></i> Instagram</a>
                    </div>
                </div>
                <div class="action-btn">
                    <a href="" class="btn btn-sm btn-primary btn-add">
                        <i class="la la-plus"></i> Add New</a>
                </div>
            </div>
        </div>

    </div>
    <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
        <!-- Card 1 -->
        <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
            <div>





                <div class="overview-content">
                    <h1>74</h1>
                    <p>Uploaded Cars</p>
                    <div class="ap-po-details-time">
                        <span class="color-success"><i class="las la-arrow-up"></i>
                            <strong>25%</strong></span>
                        <small>In the last 1 month</small>
                    </div>
                </div>

            </div>
            <div class="ap-po-timeChart">
                <div class="overview-single__chart d-md-flex align-items-end">
                    <div class="parentContainer">
                        <div>
                            <canvas id="mychart8"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 1 End -->
    </div>
    <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
        <!-- Card 2 End  -->
        <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
            <div>
                <div class="overview-content">
                    <h1>23</h1>
                    <p>Bids Submited</p>

                </div>

            </div>
            <div class="ap-po-timeChart">
                <div class="overview-single__chart d-md-flex align-items-end">
                    <div class="parentContainer">


                        <div>
                            <canvas id="mychart9"></canvas>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- Card 2 End  -->
    </div>
    <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
        <!-- Card 3 -->
        <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
            <div>





                <div class="overview-content">
                    <h1>Ksh: 230,000</h1>
                    <p>Highest Bid Price</p>

                </div>

            </div>
            <div class="ap-po-timeChart">
                <div class="overview-single__chart d-md-flex align-items-end">
                    <div class="parentContainer">
                        <div>
                            <canvas id="mychart10"></canvas>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- Card 3 End -->
    </div>
    <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
        <!-- Card 1 -->
        <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
            <div>





                <div class="overview-content">
                    <h1>KES 29380</h1>
                    <p>Lowest Bid</p>

                </div>

            </div>
            <div class="ap-po-timeChart">
                <div class="overview-single__chart d-md-flex align-items-end">
                    <div class="parentContainer">


                        <div>
                            <canvas id="mychart11"></canvas>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- Card 1 End -->
    </div>
    <div class="col-xxl-6 mb-30">

        <div class="card broder-0">
            <div class="card-header">
                <h6>Cars Upload Timeline</h6>
                <div class="card-extra">
                    <ul class="card-tab-links mr-3 nav-tabs nav" role="tablist">
                        <li>
                            <a href="#tl_revenue-week" data-toggle="tab" id="tl_revenue-week-tab" role="tab" aria-selected="false">Week</a>
                        </li>
                        <li>
                            <a href="#tl_revenue-month" data-toggle="tab" id="tl_revenue-month-tab" role="tab" aria-selected="false">Month</a>
                        </li>
                        <li>
                            <a class="active" href="#tl_revenue-year" data-toggle="tab" id="tl_revenue-year-tab" role="tab" aria-selected="true">Year</a>
                        </li>
                    </ul>
                    <div class="dropdown dropleft">
                        <a href="#" role="button" id="revenue1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span data-feather="more-horizontal"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="revenue1">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ends: .card-header -->
            <div class="card-body pt-0">
                <div class="tab-content">
                    <div class="tab-pane fade" id="tl_revenue-week" role="tabpanel" aria-labelledby="tl_revenue-week-tab">
                        <div class="revenue-labels">
                            <div>
                                <strong class="text-primary">KES 7, 284, 800</strong>
                                <span>Highest Bid</span>
                            </div>
                            <div>
                                <strong>KES 520,458</strong>
                                <span>Lowest Bid</span>
                            </div>
                        </div>
                        <!-- ends: .performance-stats -->

                        <div class="wp-chart">
                            <div class="parentContainer">


                                <div>
                                    <canvas id="myChart6W"></canvas>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tl_revenue-month" role="tabpanel" aria-labelledby="tl_revenue-month-tab">
                        <div class="revenue-labels">
                            <div>
                                <strong class="text-primary">KES 7, 284, 800</strong>
                                <span>Highest Bid</span>
                            </div>
                            <div>
                                <strong>KES 520,458</strong>
                                <span>Lowest Bid</span>
                            </div>
                        </div>
                        <!-- ends: .performance-stats -->

                        <div class="wp-chart">
                            <div class="parentContainer">


                                <div>
                                    <canvas id="myChart6M"></canvas>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="tl_revenue-year" role="tabpanel" aria-labelledby="tl_revenue-year-tab">
                        <div class="revenue-labels">
                            <div>
                                <strong class="text-primary">KES 7, 284, 800</strong>
                                <span>Highest Bid</span>
                            </div>
                            <div>
                                <strong>KES 520,458</strong>
                                <span>Lowest Bid</span>
                            </div>
                        </div>
                        <!-- ends: .performance-stats -->

                        <div class="wp-chart">
                            <div class="parentContainer">


                                <div>
                                    <canvas id="myChart6"></canvas>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ends: .card-body -->
        </div>

    </div>
    <div class="col-xxl-6 mb-30">

        <div class="card border-0">
            <div class="card-header">
                <h6>Latest 5  Cars Bids Submited</h6>
                <div class="card-extra">
                    <ul class="card-tab-links mr-3 nav-tabs nav">
                        <li>
                            <a href="#s_revenue-today" class="active" data-toggle="tab" id="s_revenue-today-tab" role="tab" area-controls="s_revenue-table" aria-selected="true">Today</a>
                        </li>
                        <li>
                            <a href="#s_revenue-week" data-toggle="tab" id="s_revenue-week-tab" role="tab" area-controls="s_revenue-table" aria-selected="false">Week</a>
                        </li>
                        <li>
                            <a href="#s_revenue-month" data-toggle="tab" id="s_revenue-month-tab" role="tab" area-controls="s_revenue-table" aria-selected="false">Month</a>
                        </li>
                        <li>
                            <a href="#s_revenue-year" data-toggle="tab" id="s_revenue-year-tab" role="tab" area-controls="s_revenue-table" aria-selected="false">Year</a>
                        </li>
                    </ul>
                    <div class="dropdown dropleft">
                        <a href="#" role="button" id="action" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span data-feather="more-horizontal"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="action">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="s_revenue-today" role="tabpanel" aria-labelledby="s_revenue-today-tab">
                        <div class="table-responsive table-revenue">
                            <table class="table table--default">
                                <thead>
                                    <tr>
                                        <th>Car Name</th>
                                        <th>Bids Placed</th>
                                        <th>Highest Bid</th>
                                        <th>Lowest Price</th>
                                        <th>Trend</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Hatchback</td>
                                        <td>30</td>
                                        <td>ksh:120,156</td>
                                        <td>Ksh. 92,225</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm1"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sedan</td>
                                        <td>458</td>
                                        <td>KES 210,584</td>
                                        <td>KES 190,753</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm2"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>SUV</td>
                                        <td>10</td>
                                        <td>KES 600, 000</td>
                                        <td>KES 300, 000</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm3"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Convertible</td>
                                        <td>2,856</td>
                                        <td>KES 800,256</td>
                                        <td>KES 750,456</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm4"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Crossover</td>
                                        <td>9,456</td>
                                        <td>KES 1, 036,478</td>
                                        <td>KES 930,852</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm5"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="s_revenue-week" role="tabpanel" aria-labelledby="s_revenue-week-tab">
                        <div class="table-responsive table-revenue">
                            <table class="table table--default">
                                <thead>
                                    <tr>
                                        <th>Car Name</th>
                                        <th>Bids Placed</th>
                                        <th>Highest Bid</th>
                                        <th>Lowest Price</th>
                                        <th>Trend</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Hatchback</td>
                                        <td>30</td>
                                        <td>ksh:120,156</td>
                                        <td>Ksh. 92,225</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm1"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sedan</td>
                                        <td>458</td>
                                        <td>KES 210,584</td>
                                        <td>KES 190,753</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm2"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>SUV</td>
                                        <td>10</td>
                                        <td>KES 600, 000</td>
                                        <td>KES 300, 000</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm3"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Convertible</td>
                                        <td>2,856</td>
                                        <td>KES 800,256</td>
                                        <td>KES 750,456</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm4"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Crossover</td>
                                        <td>9,456</td>
                                        <td>KES 1, 036,478</td>
                                        <td>KES 930,852</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm5"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="s_revenue-month" role="tabpanel" aria-labelledby="s_revenue-month-tab">
                        <div class="table-responsive table-revenue">
                            <table class="table table--default">
                                <thead>
                                    <tr>
                                        <th>Car Name</th>
                                        <th>Bids Placed</th>
                                        <th>Highest Bid</th>
                                        <th>Lowest Price</th>
                                        <th>Trend</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Hatchback</td>
                                        <td>30</td>
                                        <td>ksh:120,156</td>
                                        <td>Ksh. 92,225</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm1"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sedan</td>
                                        <td>458</td>
                                        <td>KES 210,584</td>
                                        <td>KES 190,753</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm2"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>SUV</td>
                                        <td>10</td>
                                        <td>KES 600, 000</td>
                                        <td>KES 300, 000</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm3"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Convertible</td>
                                        <td>2,856</td>
                                        <td>KES 800,256</td>
                                        <td>KES 750,456</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm4"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Crossover</td>
                                        <td>9,456</td>
                                        <td>KES 1, 036,478</td>
                                        <td>KES 930,852</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm5"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="s_revenue-year" role="tabpanel" aria-labelledby="s_revenue-year-tab">
                        <div class="table-responsive table-revenue">
                            <table class="table table--default">
                                <thead>
                                    <tr>
                                        <th>Car Name</th>
                                        <th>Bids Placed</th>
                                        <th>Highest Bid</th>
                                        <th>Lowest Price</th>
                                        <th>Trend</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Hatchback</td>
                                        <td>30</td>
                                        <td>ksh:120,156</td>
                                        <td>Ksh. 92,225</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm1"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sedan</td>
                                        <td>458</td>
                                        <td>KES 210,584</td>
                                        <td>KES 190,753</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm2"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>SUV</td>
                                        <td>10</td>
                                        <td>KES 600, 000</td>
                                        <td>KES 300, 000</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm3"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Convertible</td>
                                        <td>2,856</td>
                                        <td>KES 800,256</td>
                                        <td>KES 750,456</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm4"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Crossover</td>
                                        <td>9,456</td>
                                        <td>KES 1, 036,478</td>
                                        <td>KES 930,852</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <canvas id="lineChartSm5"></canvas>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- ends: .row -->
@endsection
