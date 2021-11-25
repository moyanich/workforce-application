<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- CoreUI for Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.0.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-jTLdEzvDirhpT2iVYVF2UkZI/gZbvaLs6ZoVvEOsnaR2j0913ZM/Uk+AVBxWyEXs" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        @include('partials.menu')

        <div class="wrapper d-flex flex-column min-vh-100 bg-light dark:bg-transparent">
            <header class="header header-sticky mb-4">
            <div class="container-fluid">
            <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
            </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg></a>
            <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
            </ul>
            <nav class="header-nav ms-auto me-4">
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
            <input class="btn-check" id="btn-light-theme" type="radio" name="theme-switch" autocomplete="off" value="light" onchange="handleThemeChange(this)">
            <label class="btn btn-primary" for="btn-light-theme">
            <svg class="icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-sun"></use>
            </svg>
            </label>
            <input class="btn-check" id="btn-dark-theme" type="radio" name="theme-switch" autocomplete="off" value="dark" onchange="handleThemeChange(this)">
            <label class="btn btn-primary" for="btn-dark-theme">
            <svg class="icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-moon"></use>
            </svg>
            </label>
            </div>
            </nav>
            <ul class="header-nav me-3">
            <li class="nav-item dropdown d-md-down-none"><a class="nav-link" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <svg class="icon icon-lg my-1 mx-2">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
            </svg><span class="badge rounded-pill position-absolute top-0 end-0 bg-danger-gradient">5</span></a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg pt-0">
            <div class="dropdown-header bg-light"><strong>You have 5 notifications</strong></div><a class="dropdown-item" href="#">
            <svg class="icon me-2 text-success">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-follow"></use>
            </svg> New user registered</a><a class="dropdown-item" href="#">
            <svg class="icon me-2 text-danger">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-unfollow"></use>
            </svg> User deleted</a><a class="dropdown-item" href="#">
            <svg class="icon me-2 text-info">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart"></use>
            </svg> Sales report is ready</a><a class="dropdown-item" href="#">
            <svg class="icon me-2 text-success">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-basket"></use>
            </svg> New client</a><a class="dropdown-item" href="#">
            <svg class="icon me-2 text-warning">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
            </svg> Server overloaded</a>
            <div class="dropdown-header bg-light"><strong>Server</strong></div><a class="dropdown-item d-block" href="#">
            <div class="text-uppercase mb-1"><small><b>CPU Usage</b></small></div><span class="progress progress-thin">
            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </span><small class="text-medium-emphasis">348 Processes. 1/4 Cores.</small>
            </a><a class="dropdown-item d-block" href="#">
            <div class="text-uppercase mb-1"><small><b>Memory Usage</b></small></div><span class="progress progress-thin">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </span><small class="text-medium-emphasis">11444GB/16384MB</small>
            </a><a class="dropdown-item d-block" href="#">
            <div class="text-uppercase mb-1"><small><b>SSD 1 Usage</b></small></div><span class="progress progress-thin">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </span><small class="text-medium-emphasis">243GB/256GB</small>
            </a>
            </div>
            </li>
            <li class="nav-item dropdown d-md-down-none"><a class="nav-link" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <svg class="icon icon-lg my-1 mx-2">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
            </svg><span class="badge rounded-pill position-absolute top-0 end-0 bg-warning-gradient">5</span></a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg pt-0">
            <div class="dropdown-header bg-light"><strong>You have 5 pending tasks</strong></div><a class="dropdown-item d-block" href="#">
            <div class="small mb-1">Upgrade NPM &amp; Bower<span class="float-end"><strong>0%</strong></span></div><span class="progress progress-thin">
            <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
            </a><a class="dropdown-item d-block" href="#">
            <div class="small mb-1">ReactJS Version<span class="float-end"><strong>25%</strong></span></div><span class="progress progress-thin">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
            </a><a class="dropdown-item d-block" href="#">
            <div class="small mb-1">VueJS Version<span class="float-end"><strong>50%</strong></span></div><span class="progress progress-thin">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
            </a><a class="dropdown-item d-block" href="#">
            <div class="small mb-1">Add new layouts<span class="float-end"><strong>75%</strong></span></div><span class="progress progress-thin">
            <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
            </a><a class="dropdown-item d-block" href="#">
            <div class="small mb-1">Angular 8 Version<span class="float-end"><strong>100%</strong></span></div><span class="progress progress-thin">
            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
            </a><a class="dropdown-item text-center border-top" href="#"><strong>View all tasks</strong></a>
            </div>
            </li>
            <li class="nav-item dropdown d-md-down-none"><a class="nav-link" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <svg class="icon icon-lg my-1 mx-2">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
            </svg><span class="badge rounded-pill position-absolute top-0 end-0 bg-info-gradient">7</span></a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg pt-0">
            <div class="dropdown-header bg-light"><strong>You have 4 messages</strong></div><a class="dropdown-item" href="#">
            <div class="message">
            <div class="py-3 me-3 float-start">
            <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
            </div>
            <div><small class="text-medium-emphasis">John Doe</small><small class="text-medium-emphasis float-end mt-1">Just now</small></div>
            <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> Important message</div>
            <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
            </div>
            </a><a class="dropdown-item" href="#">
            <div class="message">
            <div class="py-3 me-3 float-start">
            <div class="avatar"><img class="avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"><span class="avatar-status bg-warning"></span></div>
            </div>
            <div><small class="text-medium-emphasis">John Doe</small><small class="text-medium-emphasis float-end mt-1">5 minutes ago</small></div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
            </div>
            </a><a class="dropdown-item" href="#">
            <div class="message">
            <div class="py-3 me-3 float-start">
            <div class="avatar"><img class="avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"><span class="avatar-status bg-danger"></span></div>
            </div>
            <div><small class="text-medium-emphasis">John Doe</small><small class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
            </div>
            </a><a class="dropdown-item" href="#">
            <div class="message">
            <div class="py-3 me-3 float-start">
            <div class="avatar"><img class="avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"><span class="avatar-status bg-info"></span></div>
            </div>
            <div><small class="text-medium-emphasis">John Doe</small><small class="text-medium-emphasis float-end mt-1">4:03 PM</small></div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
            </div>
            </a><a class="dropdown-item text-center border-top" href="#"><strong>View all messages</strong></a>
            </div>
            </li>
            </ul>
            <ul class="header-nav me-4">
            <li class="nav-item dropdown d-flex align-items-center"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-end pt-0">
            <div class="dropdown-header bg-light py-2">
            <div class="fw-semibold">Account</div>
            </div><a class="dropdown-item" href="#">
            <svg class="icon me-2">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
            </svg> Updates<span class="badge badge-sm bg-info-gradient ms-2">42</span></a><a class="dropdown-item" href="#">
            <svg class="icon me-2">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
            </svg> Messages<span class="badge badge-sm badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
            <svg class="icon me-2">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
            </svg> Tasks<span class="badge badge-sm bg-danger-gradient ms-2">42</span></a><a class="dropdown-item" href="#">
            <svg class="icon me-2">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
            </svg> Comments<span class="badge badge-sm bg-warning-gradient ms-2">42</span></a>
            <div class="dropdown-header bg-light py-2">
            <div class="fw-semibold">Settings</div>
            </div><a class="dropdown-item" href="#">
            <svg class="icon me-2">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
            </svg> Profile</a><a class="dropdown-item" href="#">
            <svg class="icon me-2">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
            </svg> Settings</a><a class="dropdown-item" href="#">
            <svg class="icon me-2">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
            </svg> Payments<span class="badge badge-sm bg-secondary-gradient text-dark ms-2">42</span></a><a class="dropdown-item" href="#">
            <svg class="icon me-2">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
            </svg> Projects<span class="badge badge-sm bg-primary-gradient ms-2">42</span></a>
            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
            <svg class="icon me-2">
             <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
            </svg> Lock Account</a><a class="dropdown-item" href="#">
            <svg class="icon me-2">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
            </svg> Logout</a>
            </div>
            </li>
            </ul>
            <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#aside')).show()">
            <svg class="icon icon-lg">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-applications-settings"></use>
            </svg>
            </button>
            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
            <span>Home</span>
            </li>
            <li class="breadcrumb-item active"><span>Dashboard</span></li>
            </ol>
            </nav>
            </div>
            </header>
            <div class="body flex-grow-1 px-3">
            <div class="container-lg">
            <div class="row">
            <div class="col-sm-6 col-lg-3">
            <div class="card mb-4 text-white bg-primary-gradient">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
            <div class="fs-4 fw-semibold">26K <span class="fs-6 fw-normal">(-12.4%
            <svg class="icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom"></use>
            </svg>)</span></div>
            <div>Users</div>
            </div>
            <div class="dropdown">
            <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg class="icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
            </svg>
            </button>
            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
            </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
            <canvas class="chart" id="card-chart1" height="70" width="252" style="display: block; box-sizing: border-box; height: 70px; width: 252px;"></canvas>
            <div class="chartjs-tooltip" style="opacity: 0; left: 101.667px; top: 101.831px;"><table style="margin: 0px;"><thead class="chartjs-tooltip-header"><tr class="chartjs-tooltip-header-item" style="border-width: 0px;"><th style="border-width: 0px;">March</th></tr></thead><tbody class="chartjs-tooltip-body"><tr class="chartjs-tooltip-body-item"><td style="border-width: 0px;"><span style="background: rgb(50, 31, 219); border-color: rgba(255, 255, 255, 0.55); border-width: 2px; margin-right: 10px; height: 10px; width: 10px; display: inline-block;"></span>My First dataset: 84</td></tr></tbody></table></div></div>
            </div>
            </div>
            
            <div class="col-sm-6 col-lg-3">
            <div class="card mb-4 text-white bg-info-gradient">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
            <div class="fs-4 fw-semibold">$6.200 <span class="fs-6 fw-normal">(40.9%
            <svg class="icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
            </svg>)</span></div>
            <div>Income</div>
            </div>
            <div class="dropdown">
            <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg class="icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
            </svg>
            </button>
            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
            </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
             <canvas class="chart" id="card-chart2" height="70" width="252" style="display: block; box-sizing: border-box; height: 70px; width: 252px;"></canvas>
            </div>
            </div>
            </div>
            
            <div class="col-sm-6 col-lg-3">
            <div class="card mb-4 text-white bg-warning-gradient">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
            <div class="fs-4 fw-semibold">2.49% <span class="fs-6 fw-normal">(84.7%
            <svg class="icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
            </svg>)</span></div>
            <div>Conversion Rate</div>
            </div>
            <div class="dropdown">
            <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg class="icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
            </svg>
            </button>
            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
            </div>
            </div>
            <div class="c-chart-wrapper mt-3" style="height:70px;">
            <canvas class="chart" id="card-chart3" height="70" width="284" style="display: block; box-sizing: border-box; height: 70px; width: 284px;"></canvas>
            </div>
            </div>
            </div>
            
            <div class="col-sm-6 col-lg-3">
            <div class="card mb-4 text-white bg-danger-gradient">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
            <div>
            <div class="fs-4 fw-semibold">44K <span class="fs-6 fw-normal">(-23.6%
            <svg class="icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom"></use>
            </svg>)</span></div>
            <div>Sessions</div>
            </div>
            <div class="dropdown">
            <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg class="icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
            </svg>
            </button>
            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
            </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
            <canvas class="chart" id="card-chart4" height="70" width="252" style="display: block; box-sizing: border-box; height: 70px; width: 252px;"></canvas>
            </div>
            </div>
            </div>
            
            </div>
            
            <div class="card mb-4">
            <div class="card-body">
            <div class="d-flex justify-content-between">
            <div>
            <h4 class="card-title mb-0">Traffic</h4>
            <div class="small text-medium-emphasis">January - July 2021</div>
            </div>
            <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
            <div class="btn-group btn-group-toggle mx-3" data-coreui-toggle="buttons">
            <input class="btn-check" id="option1" type="radio" name="options" autocomplete="off">
            <label class="btn btn-outline-secondary"> Day</label>
            <input class="btn-check" id="option2" type="radio" name="options" autocomplete="off" checked="">
            <label class="btn btn-outline-secondary active"> Month</label>
            <input class="btn-check" id="option3" type="radio" name="options" autocomplete="off">
            <label class="btn btn-outline-secondary"> Year</label>
            </div>
            <button class="btn btn-primary" type="button">
            <svg class="icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cloud-download"></use>
            </svg>
            </button>
            </div>
            </div>
            <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
            <canvas class="chart" id="main-chart" height="300" width="1177" style="display: block; box-sizing: border-box; height: 300px; width: 1177px;"></canvas>
            </div>
            </div>
            <div class="card-footer">
            <div class="row row-cols-1 row-cols-md-5 text-center">
            <div class="col mb-sm-2 mb-0">
            <div class="text-medium-emphasis">Visits</div>
            <div class="fw-semibold">29.703 Users (40%)</div>
            <div class="progress progress-thin mt-2">
            <div class="progress-bar bg-success-gradient" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            <div class="col mb-sm-2 mb-0">
            <div class="text-medium-emphasis">Unique</div>
            <div class="fw-semibold">24.093 Users (20%)</div>
            <div class="progress progress-thin mt-2">
            <div class="progress-bar bg-info-gradient" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            <div class="col mb-sm-2 mb-0">
            <div class="text-medium-emphasis">Pageviews</div>
            <div class="fw-semibold">78.706 Views (60%)</div>
            <div class="progress progress-thin mt-2">
            <div class="progress-bar bg-warning-gradient" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            <div class="col mb-sm-2 mb-0">
            <div class="text-medium-emphasis">New Users</div>
            <div class="fw-semibold">22.123 Users (80%)</div>
            <div class="progress progress-thin mt-2">
            <div class="progress-bar bg-danger-gradient" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            <div class="col mb-sm-2 mb-0">
            <div class="text-medium-emphasis">Bounce Rate</div>
            <div class="fw-semibold">40.15%</div>
            <div class="progress progress-thin mt-2">
            <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            </div>
            </div>
            </div>
            
            <div class="row">
            <div class="col-sm-6 col-lg-4">
            <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
            <div class="card-header position-relative d-flex justify-content-center align-items-center">
            <svg class="icon text-white my-4" style="height: 3rem; width: 3rem;">
            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-facebook-f"></use>
            </svg>
            <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
            <canvas id="social-box-chart-1" height="90"></canvas>
            </div>
            </div>
            <div class="card-body row text-center">
            <div class="col">
            <div class="fs-5 fw-semibold">89k</div>
            <div class="text-uppercase text-medium-emphasis small">friends</div>
            </div>
             <div class="vr"></div>
            <div class="col">
            <div class="fs-5 fw-semibold">459</div>
            <div class="text-uppercase text-medium-emphasis small">feeds</div>
            </div>
            </div>
            </div>
            </div>
            
            <div class="col-sm-6 col-lg-4">
            <div class="card mb-4" style="--cui-card-cap-bg: #00aced">
            <div class="card-header position-relative d-flex justify-content-center align-items-center">
            <svg class="icon text-white my-4" style="height: 3rem; width: 3rem;">
            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-twitter"></use>
            </svg>
            <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
            <canvas id="social-box-chart-2" height="90"></canvas>
            </div>
            </div>
            <div class="card-body row text-center">
            <div class="col">
            <div class="fs-5 fw-semibold">973k</div>
            <div class="text-uppercase text-medium-emphasis small">followers</div>
            </div>
            <div class="vr"></div>
            <div class="col">
            <div class="fs-5 fw-semibold">1.792</div>
            <div class="text-uppercase text-medium-emphasis small">tweets</div>
            </div>
            </div>
            </div>
            </div>
            
            <div class="col-sm-6 col-lg-4">
            <div class="card mb-4" style="--cui-card-cap-bg: #4875b4">
            <div class="card-header position-relative d-flex justify-content-center align-items-center">
            <svg class="icon text-white my-4" style="height: 3rem; width: 3rem;">
            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-linkedin"></use>
            </svg>
            <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
            <canvas id="social-box-chart-3" height="90"></canvas>
            </div>
            </div>
            <div class="card-body row text-center">
            <div class="col">
            <div class="fs-5 fw-semibold">500+</div>
            <div class="text-uppercase text-medium-emphasis small">contacts</div>
            </div>
            <div class="vr"></div>
            <div class="col">
            <div class="fs-5 fw-semibold">292</div>
            <div class="text-uppercase text-medium-emphasis small">feeds</div>
            </div>
            </div>
            </div>
            </div>
            
            </div>
            
            <div class="row">
            <div class="col-md-12">
            <div class="card mb-4">
            <div class="card-header">Traffic &amp; Sales</div>
            <div class="card-body">
            <div class="row">
            <div class="col-sm-6">
            <div class="row">
            <div class="col-6">
            <div class="border-start border-start-4 border-start-info px-3 mb-3"><small class="text-medium-emphasis">New Clients</small>
            <div class="fs-5 fw-semibold">9,123</div>
            </div>
            </div>
            
            <div class="col-6">
            <div class="border-start border-start-4 border-start-danger px-3 mb-3"><small class="text-medium-emphasis">Recuring Clients</small>
            <div class="fs-5 fw-semibold">22,643</div>
            </div>
            </div>
            
            </div>
            
            <hr class="mt-0">
            <div class="progress-group mb-4">
            <div class="progress-group-prepend"><span class="text-medium-emphasis small">Monday</span></div>
            <div class="progress-group-bars">
            <div class="progress progress-thin">
            <div class="progress-bar bg-info-gradient" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress progress-thin">
            <div class="progress-bar bg-danger-gradient" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            </div>
            <div class="progress-group mb-4">
            <div class="progress-group-prepend"><span class="text-medium-emphasis small">Tuesday</span></div>
            <div class="progress-group-bars">
            <div class="progress progress-thin">
            <div class="progress-bar bg-info-gradient" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress progress-thin">
            <div class="progress-bar bg-danger-gradient" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            </div>
            <div class="progress-group mb-4">
            <div class="progress-group-prepend"><span class="text-medium-emphasis small">Wednesday</span></div>
            <div class="progress-group-bars">
            <div class="progress progress-thin">
            <div class="progress-bar bg-info-gradient" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress progress-thin">
            <div class="progress-bar bg-danger-gradient" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            </div>
            <div class="progress-group mb-4">
            <div class="progress-group-prepend"><span class="text-medium-emphasis small">Thursday</span></div>
            <div class="progress-group-bars">
            <div class="progress progress-thin">
            <div class="progress-bar bg-info-gradient" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress progress-thin">
            <div class="progress-bar bg-danger-gradient" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            </div>
            <div class="progress-group mb-4">
            <div class="progress-group-prepend"><span class="text-medium-emphasis small">Friday</span></div>
            <div class="progress-group-bars">
            <div class="progress progress-thin">
            <div class="progress-bar bg-info-gradient" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress progress-thin">
            <div class="progress-bar bg-danger-gradient" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            </div>
            <div class="progress-group mb-4">
            <div class="progress-group-prepend"><span class="text-medium-emphasis small">Saturday</span></div>
            <div class="progress-group-bars">
            <div class="progress progress-thin">
            <div class="progress-bar bg-info-gradient" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress progress-thin">
            <div class="progress-bar bg-danger-gradient" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            </div>
            <div class="progress-group mb-4">
            <div class="progress-group-prepend"><span class="text-medium-emphasis small">Sunday</span></div>
            <div class="progress-group-bars">
            <div class="progress progress-thin">
            <div class="progress-bar bg-info-gradient" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress progress-thin">
            <div class="progress-bar bg-danger-gradient" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            </div>
            </div>
            
            <div class="col-sm-6">
            <div class="row">
            <div class="col-6">
            <div class="border-start border-start-4 border-start-warning px-3 mb-3"><small class="text-medium-emphasis">Pageviews</small>
            <div class="fs-5 fw-semibold">78,623</div>
            </div>
            </div>
            
            <div class="col-6">
            <div class="border-start border-start-4 border-start-success px-3 mb-3"><small class="text-medium-emphasis">Organic</small>
            <div class="fs-5 fw-semibold">49,123</div>
            </div>
            </div>
            
            </div>
            
            <hr class="mt-0">
            <div class="progress-group">
            <div class="progress-group-header">
            <svg class="icon icon-lg me-2">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
            </svg>
            <div>Male</div>
            <div class="ms-auto fw-semibold">43%</div>
            </div>
            <div class="progress-group-bars">
            <div class="progress progress-thin">
            <div class="progress-bar bg-warning-gradient" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            </div>
            <div class="progress-group mb-5">
            <div class="progress-group-header">
            <svg class="icon icon-lg me-2">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-female"></use>
            </svg>
            <div>Female</div>
            <div class="ms-auto fw-semibold">37%</div>
            </div>
            <div class="progress-group-bars">
            <div class="progress progress-thin">
             <div class="progress-bar bg-warning-gradient" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            </div>
            <div class="progress-group">
            <div class="progress-group-header">
            <svg class="icon icon-lg me-2">
            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-google"></use>
            </svg>
            <div>Organic Search</div>
            <div class="ms-auto fw-semibold me-2">191.235</div>
            <div class="text-medium-emphasis small">(56%)</div>
            </div>
            <div class="progress-group-bars">
            <div class="progress progress-thin">
            <div class="progress-bar bg-success-gradient" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            </div>
            <div class="progress-group">
            <div class="progress-group-header">
            <svg class="icon icon-lg me-2">
            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-facebook-f"></use>
            </svg>
            <div>Facebook</div>
            <div class="ms-auto fw-semibold me-2">51.223</div>
            <div class="text-medium-emphasis small">(15%)</div>
            </div>
            <div class="progress-group-bars">
            <div class="progress progress-thin">
            <div class="progress-bar bg-success-gradient" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            </div>
            <div class="progress-group">
            <div class="progress-group-header">
            <svg class="icon icon-lg me-2">
            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-twitter"></use>
            </svg>
            <div>Twitter</div>
            <div class="ms-auto fw-semibold me-2">37.564</div>
            <div class="text-medium-emphasis small">(11%)</div>
            </div>
            <div class="progress-group-bars">
            <div class="progress progress-thin">
            <div class="progress-bar bg-success-gradient" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            </div>
            <div class="progress-group">
            <div class="progress-group-header">
            <svg class="icon icon-lg me-2">
            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-linkedin"></use>
            </svg>
            <div>LinkedIn</div>
            <div class="ms-auto fw-semibold me-2">27.319</div>
            <div class="text-medium-emphasis small">(8%)</div>
            </div>
            <div class="progress-group-bars">
            <div class="progress progress-thin">
            <div class="progress-bar bg-success-gradient" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
            </div>
            </div>
            
            </div>
            <br>
             <div class="table-responsive">
            <table class="table border mb-0">
            <thead class="table-light fw-semibold">
            <tr class="align-middle">
            <th class="text-center">
            <svg class="icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-people"></use>
            </svg>
            </th>
            <th>User</th>
            <th class="text-center">Country</th>
            <th>Usage</th>
            <th class="text-center">Payment Method</th>
            <th>Activity</th>
            <th></th>
            </tr>
            </thead>
            <tbody>
            <tr class="align-middle">
            <td class="text-center">
            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/1.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
            </td>
            <td>
            <div>Yiorgos Avraamu</div>
            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan 1, 2020</div>
            </td>
            <td class="text-center">
            <svg class="icon icon-xl">
            <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-us"></use>
            </svg>
            </td>
            <td>
            <div class="clearfix">
            <div class="float-start">
            <div class="fw-semibold">50%</div>
            </div>
            <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
            </div>
            <div class="progress progress-thin">
            <div class="progress-bar bg-success-gradient" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </td>
            <td class="text-center">
            <svg class="icon icon-xl">
            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-mastercard"></use>
            </svg>
            </td>
            <td>
            <div class="small text-medium-emphasis">Last login</div>
            <div class="fw-semibold">10 sec ago</div>
            </td>
            <td>
            <div class="dropdown">
            <button class="btn btn-transparent p-0 dark:text-high-emphasis" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg class="icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
            </svg>
            </button>
            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
            </div>
            </td>
            </tr>
            <tr class="align-middle">
            <td class="text-center">
            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/2.jpg" alt="user@email.com"><span class="avatar-status bg-danger-gradient"></span></div>
            </td>
            <td>
             <div>Avram Tarasios</div>
            <div class="small text-medium-emphasis"><span>Recurring</span> | Registered: Jan 1, 2020</div>
            </td>
            <td class="text-center">
            <svg class="icon icon-xl">
            <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-br"></use>
            </svg>
            </td>
            <td>
            <div class="clearfix">
            <div class="float-start">
            <div class="fw-semibold">10%</div>
            </div>
            <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
            </div>
            <div class="progress progress-thin">
            <div class="progress-bar bg-info-gradient" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </td>
            <td class="text-center">
            <svg class="icon icon-xl">
            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-visa"></use>
            </svg>
            </td>
            <td>
            <div class="small text-medium-emphasis">Last login</div>
            <div class="fw-semibold">5 minutes ago</div>
            </td>
            <td>
            <div class="dropdown">
            <button class="btn btn-transparent p-0 dark:text-high-emphasis" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg class="icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
            </svg>
            </button>
            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
            </div>
            </td>
            </tr>
            <tr class="align-middle">
            <td class="text-center">
            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/3.jpg" alt="user@email.com"><span class="avatar-status bg-warning-gradient"></span></div>
            </td>
            <td>
            <div>Quintin Ed</div>
            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan 1, 2020</div>
            </td>
            <td class="text-center">
            <svg class="icon icon-xl">
            <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-in"></use>
            </svg>
            </td>
            <td>
            <div class="clearfix">
            <div class="float-start">
            <div class="fw-semibold">74%</div>
            </div>
            <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
            </div>
            <div class="progress progress-thin">
            <div class="progress-bar bg-warning-gradient" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </td>
            <td class="text-center">
            <svg class="icon icon-xl">
            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-stripe"></use>
            </svg>
            </td>
            <td>
            <div class="small text-medium-emphasis">Last login</div>
            <div class="fw-semibold">1 hour ago</div>
            </td>
            <td>
            <div class="dropdown">
            <button class="btn btn-transparent p-0 dark:text-high-emphasis" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg class="icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
            </svg>
            </button>
            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
            </div>
            </td>
            </tr>
            <tr class="align-middle">
            <td class="text-center">
            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"><span class="avatar-status bg-secondary-gradient"></span></div>
            </td>
            <td>
            <div>Enéas Kwadwo</div>
            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan 1, 2020</div>
            </td>
            <td class="text-center">
            <svg class="icon icon-xl">
            <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-fr"></use>
            </svg>
            </td>
            <td>
            <div class="clearfix">
            <div class="float-start">
            <div class="fw-semibold">98%</div>
            </div>
            <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
            </div>
            <div class="progress progress-thin">
            <div class="progress-bar bg-danger-gradient" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </td>
            <td class="text-center">
            <svg class="icon icon-xl">
            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-paypal"></use>
            </svg>
            </td>
            <td>
            <div class="small text-medium-emphasis">Last login</div>
            <div class="fw-semibold">Last month</div>
            </td>
            <td>
            <div class="dropdown">
            <button class="btn btn-transparent p-0 dark:text-high-emphasis" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg class="icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
            </svg>
            </button>
            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
            </div>
            </td>
            </tr>
            <tr class="align-middle">
            <td class="text-center">
            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
            </td>
            <td>
            <div>Agapetus Tadeáš</div>
            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan 1, 2020</div>
            </td>
            <td class="text-center">
            <svg class="icon icon-xl">
            <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-es"></use>
            </svg>
            </td>
            <td>
            <div class="clearfix">
            <div class="float-start">
            <div class="fw-semibold">22%</div>
            </div>
            <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
            </div>
            <div class="progress progress-thin">
            <div class="progress-bar bg-info-gradient" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </td>
            <td class="text-center">
            <svg class="icon icon-xl">
            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-apple-pay"></use>
            </svg>
            </td>
            <td>
            <div class="small text-medium-emphasis">Last login</div>
            <div class="fw-semibold">Last week</div>
            </td>
            <td>
            <div class="dropdown dropup">
            <button class="btn btn-transparent p-0 dark:text-high-emphasis" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg class="icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
            </svg>
            </button>
            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
            </div>
            </td>
            </tr>
            <tr class="align-middle">
            <td class="text-center">
            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"><span class="avatar-status bg-danger-gradient"></span></div>
            </td>
            <td>
            <div>Friderik Dávid</div>
            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan 1, 2020</div>
            </td>
            <td class="text-center">
            <svg class="icon icon-xl">
            <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-pl"></use>
            </svg>
            </td>
            <td>
            <div class="clearfix">
            <div class="float-start">
            <div class="fw-semibold">43%</div>
            </div>
            <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
            </div>
            <div class="progress progress-thin">
            <div class="progress-bar bg-success-gradient" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </td>
            <td class="text-center">
            <svg class="icon icon-xl">
            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-amex"></use>
            </svg>
            </td>
            <td>
            <div class="small text-medium-emphasis">Last login</div>
            <div class="fw-semibold">Yesterday</div>
            </td>
            <td>
            <div class="dropdown dropup">
            <button class="btn btn-transparent p-0 dark:text-high-emphasis" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg class="icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
            </svg>
            </button>
            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
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
            <footer class="footer">
            <div><a href="https://coreui.io">CoreUI</a> © 2021 creativeLabs.</div>
            <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/pro/">CoreUI PRO</a></div>
            </footer>
            </div>

            

        <div class="wrapper d-flex flex-column min-vh-100 bg-light dark:bg-transparent">
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

        </div>
        



        
        <?php /*
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div> */ ?>

        <!-- Option 1: CoreUI for Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.0.0/dist/js/coreui.bundle.min.js" integrity="sha384-caJEC8fMoc6Q3cPepbgNz8nEv350Wy42/1qEtfZnUn6NGNTJWLkzCzXXz08CVs/B" crossorigin="anonymous"></script>



    </body>
</html>
