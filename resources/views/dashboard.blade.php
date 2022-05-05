
@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category"></h5>
                            <h2 class="card-title">Employee Performance</h2>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                <div class="chart-area">
                        <canvas id="chartLinePurple"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card card-tasks">
                <div class="card-header ">
                    <p class="card-category d-inline">today's Task</p>
                    <div class="dropdown">
                        <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                            <i class="tim-icons icon-settings-gear-63"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#pablo">Action</a>
                            <a class="dropdown-item" href="#pablo">Another action</a>
                            <a class="dropdown-item" href="#pablo">Something else</a>
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="table-full-width table-responsive">
                        <table class="table">
                            <tbody>
                                
                                    
                                    <td>
                                        <p class="title">Installing new software in Machinary-IA248</p>
                                        <p class="text-muted">Software is been updated in the machinary-IA248 under unit-6.</p>
                                    </td>
                                    
                                
                                <tr>
                                    
                                    <td>
                                        <p class="title">GDPR Compliance</p>
                                        <p class="text-muted">The GDPR is a regulation that requires businesses to protect the personal data and privacy of Europe citizens for transactions that occur within EU member states.</p>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    
                                    <td>
                                        <p class="title">Solve the issues</p>
                                        <p class="text-muted">Fifty percent of all respondents said they would be more likely to shop at a company </p>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    
                                    <td>
                                        <p class="title">Under Maintainence</p>
                                        <p class="text-muted">Cleaning and maintaining work areas at 11 pm tomorrow in the Unit area 3 and 4.</p>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    
                                    <td>
                                        <p class="title">Export the processed files</p>
                                        <p class="text-muted">The report also shows that consumers will not easily forgive a company once a breach exposing their personal data occurs. </p>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    
                                    <td>
                                        <p class="title">Arival at export process</p>
                                        <p class="text-muted">Capitol Hill, Seattle, WA 12:34 AM</p>
                                    </td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        
        <!--
        <div class="col-lg-6 col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Monthly Turnover</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter" id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>
                                        Location
                                    </th>
                                    <th>
                                        Division
                                    </th>
                                    <th>
                                        Month
                                    </th>
                                    <th class="text-center">
                                        Turnover
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                      TamilNadu 
                                    </td>
                                    <td>
                                      Thoraipakkam,Chennai
                                    </td>
                                    <td>
                                      February
                                    </td>
                                    <td class="text-center">
                                    ₹36,738
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Kerala
                                    </td>
                                    <td>
                                        Cochin
                                    </td>
                                    <td>
                                        March
                                    </td>
                                    <td class="text-center">
                                    ₹23,789
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Karnataka
                                    </td>
                                    <td>
                                        Bangalore
                                    </td>
                                    <td>
                                        March
                                    </td>
                                    <td class="text-center">
                                    ₹56,142
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        TamilNadu
                                    </td>
                                    <td>
                                        Coimbatore
                                    </td>
                                    <td>
                                        March
                                    </td>
                                    <td class="text-center">
                                    ₹63,542
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>-->



    </div>
@endsection

@push('js')
    <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
<!--


@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Total Shipments</h5>
                            <h2 class="card-title">Performance</h2>
                        </div>
                        <div class="col-sm-6">
                            <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                            <label class="btn btn-sm btn-primary btn-simple active" id="0">
                                <input type="radio" name="options" checked>
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Trading</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-single-02"></i>
                                </span>
                            </label>
                            <label class="btn btn-sm btn-primary btn-simple" id="1">
                                <input type="radio" class="d-none d-sm-none" name="options">
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Purchases</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-gift-2"></i>
                                </span>
                            </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                    <canvas id="chartLinePurple"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Total Locations</h5>
                    <h3 class="card-title"><i class="tim-icons icon-square-pin text-primary"></i> 20</h3>
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Total Facility</h5>
                    <h3 class="card-title"><i class="tim-icons icon-vector text-info"></i> 150</h3>
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Registered Employees</h5>
                    <h3 class="card-title"><i class="tim-icons icon-single-02 text-success"></i> 20000</h3>
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card card-tasks">
                <div class="card-header ">
                    <h6 class="title d-inline">Tasks(5)</h6>
                    <p class="card-category d-inline">today</p>
                    <div class="dropdown">
                        <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                            <i class="tim-icons icon-settings-gear-63"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#pablo">Action</a>
                            <a class="dropdown-item" href="#pablo">Another action</a>
                            <a class="dropdown-item" href="#pablo">Something else</a>
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="table-full-width table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="title">Installing new software in Machinary-IA248</p>
                                        <p class="text-muted">Software is been updated in the machinary-IA248 under unit-6.</p>
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                            <i class="tim-icons icon-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked="">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="title">GDPR Compliance</p>
                                        <p class="text-muted">The GDPR is a regulation that requires businesses to protect the personal data and privacy of Europe citizens for transactions that occur within EU member states.</p>
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                            <i class="tim-icons icon-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="title">Solve the issues</p>
                                        <p class="text-muted">Fifty percent of all respondents said they would be more likely to shop at a company </p>
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                            <i class="tim-icons icon-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="title">Under Maintainence</p>
                                        <p class="text-muted">Cleaning and maintaining work areas at 11 pm tomorrow in the Unit area 3 and 4.</p>
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                            <i class="tim-icons icon-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="title">Export the processed files</p>
                                        <p class="text-muted">The report also shows that consumers will not easily forgive a company once a breach exposing their personal data occurs. </p>
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                            <i class="tim-icons icon-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="title">Arival at export process</p>
                                        <p class="text-muted">Capitol Hill, Seattle, WA 12:34 AM</p>
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                            <i class="tim-icons icon-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Monthly Turnover</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter" id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>
                                        Location
                                    </th>
                                    <th>
                                        Division
                                    </th>
                                    <th>
                                        Month
                                    </th>
                                    <th class="text-center">
                                        Turnover
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                      TamilNadu 
                                    </td>
                                    <td>
                                      Thoraipakkam,Chennai
                                    </td>
                                    <td>
                                      February
                                    </td>
                                    <td class="text-center">
                                    ₹36,738
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Kerala
                                    </td>
                                    <td>
                                        Cochin
                                    </td>
                                    <td>
                                        March
                                    </td>
                                    <td class="text-center">
                                    ₹23,789
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Karnataka
                                    </td>
                                    <td>
                                        Bangalore
                                    </td>
                                    <td>
                                        March
                                    </td>
                                    <td class="text-center">
                                    ₹56,142
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        TamilNadu
                                    </td>
                                    <td>
                                        Coimbatore
                                    </td>
                                    <td>
                                        March
                                    </td>
                                    <td class="text-center">
                                    ₹63,542
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush


    -->
