<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('dashboard/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/argon.css?v=1.2.0') }}" type="text/css">
</head>

<style>
    .notification-bell-wrapper {
        /* position:relative; */
    }

    .notification-circle {
        height: 18px;
        width: 18px;
        border-radius: 50%;
        background: linear-gradient(180deg, #fb6340 0, #f56036 100%) !important;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        bottom: 15px;
        right: 25px;
        z-index: 10;
        font-size: 12px;
    }
</style>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="../../assets/backend/img/brand/blue.png" class="navbar-brand-img" alt="...">
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="../posts/dashboard.php">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../posts/">
                                <i class="ni ni-bullet-list-67 text-default"></i>
                                <span class="nav-link-text">Posts</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../categories/">
                                <i class="ni fa fa-list-alt text-default"></i>
                                <span class="nav-link-text">Categories</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../comments/">
                                <i class="ni fa fa-comment text-default"></i>
                                <span class="nav-link-text">Comments</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../login.php?action=logout">
                                <i class="ni ni-key-25 text-info"></i>
                                <span class="nav-link-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                </div>
            </div>
        </div>
    </nav> <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Search form -->
                    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control" placeholder="Search" type="text">
                            </div>
                        </div>
                        <button type="button" class="close" data-action="search-close"
                            data-target="#navbar-search-main" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </form>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                                data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show"
                                data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link notification-bell-wrapper" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class = "notification-circle">4</span>
                                <i class="ni ni-bell-55 notification-bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                                <!-- Dropdown header -->
                                <div class="px-3 py-3">
                                    <h6 class="text-sm text-muted m-0">You have <strong
                                            class="text-primary">13</strong> notifications.</h6>
                                </div>
                                <!-- List group -->
                                <div class="list-group list-group-flush">
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder"
                                                    src="../../assets/backend/img/theme/team-1.jpg"
                                                    class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>2 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder"
                                                    src="../../assets/backend/img/theme/team-2.jpg"
                                                    class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>3 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder"
                                                    src="../../assets/backend/img/theme/team-3.jpg"
                                                    class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>5 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder"
                                                    src="../../assets/backend/img/theme/team-4.jpg"
                                                    class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>2 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder"
                                                    src="../../assets/backend/img/theme/team-5.jpg"
                                                    class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>3 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- View all -->
                                <a href="#!"
                                    class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="../../assets/backend/img/theme/team-4.jpg">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>My profile</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span>Settings</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-calendar-grid-58"></i>
                                    <span>Activity</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-support-16"></i>
                                    <span>Support</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Posts</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Admin</li>
                                    <li class="breadcrumb-item active" aria-current="page">Posts</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="add.php" class="btn btn-sm btn-neutral">Add New</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">Posts</h3>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="sort" data-sort="name">Post Title</th>
                                        <th scope="col" class="sort" data-sort="budget">Post content</th>
                                        <th scope="col" class="sort" data-sort="Comments">Comments</th>
                                        <th scope="col" class="sort" data-sort="Comments">Featured</th>
                                        <th scope="col" class="sort" data-sort="Status">Category</th>
                                        <th scope="col" class="sort" data-sort="completion">Action</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar  mr-3">
                                                    <img width = '60' height = '48'
                                                        src="../../post_images/post_19/alesia-kazantceva-VWcPlbHglYc-unsplash.jpg" />
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">Another movie title</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            sdf ...
                                        </td>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <i class=""></i>
                                                <span class="status">0</span>
                                            </span>
                                        </td>
                                        <td style="column-width: 50px;">
                                            <span class="badge badge-dot mr-4">
                                                <i class="bg-success"></i>
                                                <span class="status">Yes</span>
                                            </span>
                                        </td>
                                        <td style="column-width: 80px;">
                                            Vacation </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="edit.php?post-id=19">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <a class="dropdown-item"
                                                        href="?action=mark-as-featured&post-id=19">Mark as featured</a>
                                                    <a class="dropdown-item"
                                                        href="?action=mark-as-unfeatured&post-id=19">Mark as
                                                        unfeatured</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar  mr-3">
                                                    <img width = '60' height = '48'
                                                        src="../../post_images/post_18/toa-heftiba-FV3GConVSss-unsplash.jpg" />
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">This is a test tile</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            sdf ...
                                        </td>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <i class=""></i>
                                                <span class="status">2</span>
                                            </span>
                                        </td>
                                        <td style="column-width: 50px;">
                                            <span class="badge badge-dot mr-4">
                                                <i class="bg-success"></i>
                                                <span class="status">No</span>
                                            </span>
                                        </td>
                                        <td style="column-width: 80px;">
                                            Web Development </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="edit.php?post-id=18">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <a class="dropdown-item"
                                                        href="?action=mark-as-featured&post-id=18">Mark as featured</a>
                                                    <a class="dropdown-item"
                                                        href="?action=mark-as-unfeatured&post-id=18">Mark as
                                                        unfeatured</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar  mr-3">
                                                    <img width = '60' height = '48'
                                                        src="../../post_images/post_17/clayton-malquist-P2iaN5Kqk-4-unsplash.jpg" />
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">test test</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            sdfsdf ...
                                        </td>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <i class=""></i>
                                                <span class="status">0</span>
                                            </span>
                                        </td>
                                        <td style="column-width: 50px;">
                                            <span class="badge badge-dot mr-4">
                                                <i class="bg-success"></i>
                                                <span class="status">No</span>
                                            </span>
                                        </td>
                                        <td style="column-width: 80px;">
                                            Inspiration </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="edit.php?post-id=17">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <a class="dropdown-item"
                                                        href="?action=mark-as-featured&post-id=17">Mark as featured</a>
                                                    <a class="dropdown-item"
                                                        href="?action=mark-as-unfeatured&post-id=17">Mark as
                                                        unfeatured</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar  mr-3">
                                                    <img width = '60' height = '48'
                                                        src="../../post_images/post_16/forest-simon-OLOZGO5NjpY-unsplash.jpg" />
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">Test</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            Test ...
                                        </td>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <i class=""></i>
                                                <span class="status">0</span>
                                            </span>
                                        </td>
                                        <td style="column-width: 50px;">
                                            <span class="badge badge-dot mr-4">
                                                <i class="bg-success"></i>
                                                <span class="status">Yes</span>
                                            </span>
                                        </td>
                                        <td style="column-width: 80px;">
                                            Web Development </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="edit.php?post-id=16">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <a class="dropdown-item"
                                                        href="?action=mark-as-featured&post-id=16">Mark as featured</a>
                                                    <a class="dropdown-item"
                                                        href="?action=mark-as-unfeatured&post-id=16">Mark as
                                                        unfeatured</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar  mr-3">
                                                    <img width = '60' height = '48'
                                                        src="../../post_images/post_15/prince-oamil-YbOGL8o1Yz8-unsplash.jpg" />
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">Oceans</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            Oceans where th ...
                                        </td>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <i class=""></i>
                                                <span class="status">0</span>
                                            </span>
                                        </td>
                                        <td style="column-width: 50px;">
                                            <span class="badge badge-dot mr-4">
                                                <i class="bg-success"></i>
                                                <span class="status">Yes</span>
                                            </span>
                                        </td>
                                        <td style="column-width: 80px;">
                                            Web Development </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="edit.php?post-id=15">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <a class="dropdown-item"
                                                        href="?action=mark-as-featured&post-id=15">Mark as featured</a>
                                                    <a class="dropdown-item"
                                                        href="?action=mark-as-unfeatured&post-id=15">Mark as
                                                        unfeatured</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar  mr-3">
                                                    <img width = '60' height = '48'
                                                        src="../../post_images/post_14/hillshire-farm-TWy3jXvtDdc-unsplash.jpg" />
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">This is test title</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            Test titleDonec ...
                                        </td>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <i class=""></i>
                                                <span class="status">0</span>
                                            </span>
                                        </td>
                                        <td style="column-width: 50px;">
                                            <span class="badge badge-dot mr-4">
                                                <i class="bg-success"></i>
                                                <span class="status">Yes</span>
                                            </span>
                                        </td>
                                        <td style="column-width: 80px;">
                                            Inspiration </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="edit.php?post-id=14">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <a class="dropdown-item"
                                                        href="?action=mark-as-featured&post-id=14">Mark as featured</a>
                                                    <a class="dropdown-item"
                                                        href="?action=mark-as-unfeatured&post-id=14">Mark as
                                                        unfeatured</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar  mr-3">
                                                    <img width = '60' height = '48'
                                                        src="../../post_images/post_13/tyler-nix-_nA3wE8LCw8-unsplash.jpg" />
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">Visited Cape Town late at
                                                        night</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            luctus est. Dui ...
                                        </td>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <i class=""></i>
                                                <span class="status">0</span>
                                            </span>
                                        </td>
                                        <td style="column-width: 50px;">
                                            <span class="badge badge-dot mr-4">
                                                <i class="bg-success"></i>
                                                <span class="status">No</span>
                                            </span>
                                        </td>
                                        <td style="column-width: 80px;">
                                            Web Development </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="edit.php?post-id=13">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <a class="dropdown-item"
                                                        href="?action=mark-as-featured&post-id=13">Mark as featured</a>
                                                    <a class="dropdown-item"
                                                        href="?action=mark-as-unfeatured&post-id=13">Mark as
                                                        unfeatured</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar  mr-3">
                                                    <img width = '60' height = '48'
                                                        src="../../post_images/post_12/asia-culturecenter-YgFUJ4Ef2EY-unsplash.jpg" />
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">Cumque facere odio s</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            Donec pulvinar ...
                                        </td>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <i class=""></i>
                                                <span class="status">0</span>
                                            </span>
                                        </td>
                                        <td style="column-width: 50px;">
                                            <span class="badge badge-dot mr-4">
                                                <i class="bg-success"></i>
                                                <span class="status">No</span>
                                            </span>
                                        </td>
                                        <td style="column-width: 80px;">
                                            Fashion </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="edit.php?post-id=12">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <a class="dropdown-item"
                                                        href="?action=mark-as-featured&post-id=12">Mark as featured</a>
                                                    <a class="dropdown-item"
                                                        href="?action=mark-as-unfeatured&post-id=12">Mark as
                                                        unfeatured</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer py-4">
                            <nav aria-label="...">
                                <ul class="pagination justify-content-end mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">
                                            <i class="fas fa-angle-left"></i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2 <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="fas fa-angle-right"></i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="footer pt-0">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6">
                        <div class="copyright text-center  text-lg-left  text-muted">
                            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                                target="_blank">Creative Tim</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative
                                    Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md"
                                    class="nav-link" target="_blank">MIT License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{asset('dashboard/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
