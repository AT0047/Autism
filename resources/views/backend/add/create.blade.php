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
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/froala/css/froala_editor.pkgd.min.css') }}"
        type="text/css">
    <style>
        #fr-logo {
            display: none;
        }
    </style>
</head>

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
                            <a class="nav-link active" href="">
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
                            <a class="nav-link" href="">
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
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
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
                </div>
            </div>
        </nav>
        <!-- Header -->
        <!-- Header -->
        <div class="header pb-6 d-flex align-items-center"
            style="min-height: 150px; background-image: url(../assets/backend/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-11 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Add Post</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action ="" method ="POST" enctype="multipart/form-data">
                                <h6 class="heading-small text-muted mb-4">Post information</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Post
                                                    Title</label>
                                                <input type="text" name="post_title" class="form-control"
                                                    placeholder="Post Title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Post
                                                    Category</label>
                                                <select name="cat_id" class ="form-control">
                                                    <option value="1">Web Development</option>
                                                    <option value="2">Fashion</option>
                                                    <option value="3">Inspiration</option>
                                                    <option value="4">Vacation</option>
                                                    <option value="5">Worship</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-lg-4 ">
                                    <div class="form-group ">
                                        <label class="form-control-label ">Post Content</label>
                                        <textarea id="postContent" name="post_content" rows="19" class="form-control " placeholder="Enter post title"></textarea>
                                    </div>
                                </div>
                                <div class="pl-lg-4 ">
                                    <label class="form-control-label ">Upload Post image</label>
                                    <div class="input-group">
                                        <input type="file" name = "post_image" class="form-control"
                                            id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"
                                            aria-label="Upload">
                                    </div>
                                </div>
                                <div class="d-flex mt-3 justify-content-end">
                                    <a href="" class="btn btn-secondary">Back</a>
                                    <button type="submit" class="btn btn-success">Add Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="footer pt-0 ">
                <div class="row align-items-center justify-content-lg-between ">
                    <div class="col-lg-6 ">
                        <div class="copyright text-center text-lg-left text-muted ">
                            &copy; 2020 <a href="https://www.creative-tim.com " class="font-weight-bold ml-1 "
                                target="_blank ">Creative Tim</a>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end ">
                            <li class="nav-item ">
                                <a href="https://www.creative-tim.com " class="nav-link " target="_blank ">Creative
                                    Tim</a>
                            </li>
                            <li class="nav-item ">
                                <a href="https://www.creative-tim.com/presentation " class="nav-link "
                                    target="_blank ">About Us</a>
                            </li>
                            <li class="nav-item ">
                                <a href="http://blog.creative-tim.com " class="nav-link " target="_blank ">Blog</a>
                            </li>
                            <li class="nav-item ">
                                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md "
                                    class="nav-link " target="_blank ">MIT License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('dashboard/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/froala/js/froala_editor.pkgd.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('dashboard/vendor/js-cookie/js.cookie.js ') }}"></script>
    <script src="{{ asset('dashboard/vendor/jquery.scrollbar/jquery.scrollbar.min.js ') }}"></script>
    <script src="{{ asset('dashboard/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js ') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('dashboard/js/argon.js?v=1.2.0') }} "></script>

    <script>
        var editor = new FroalaEditor('#postContent', {
            heightMin: 350
        });
    </script>
</body>

</html>
