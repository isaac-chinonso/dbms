<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>@yield('title')</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="../../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="../../assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Morris CSS -->
    <link href="../../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../assets/dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="../../assets/dist/css/pages/dashboard1.css" rel="stylesheet">
</head>

<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Database Management System</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index-2.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../../assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <span class="hidden-xs"><span class="font-bold">DBMS</span> AJAYI</span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        
                        <!-- ============================================================== -->
                        <!-- User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/5.jpg" alt="user" class=""> <span class="hidden-md-down">{{ Auth::user()->username }} &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="{{ url('/logout')}}" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> 
                            <a class="waves-effect waves-dark" href="{{ url('/student/') }}"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="{{ url('/student/my-profile') }}" aria-expanded="false"><i class="icon-user"></i>My Profile</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="{{ url('/student/events') }}" aria-expanded="false"><i class="ti-calendar"></i>Events</a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="http://eliteadmin.themedesigner.in/demos/bt4/documentation/documentation.html" aria-expanded="false"><i class="far fa-circle text-danger"></i><span class="hide-menu">Documentation</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="{{ url('/logout')}}" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">Log Out</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        @yield('content')

        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2019 Database Management System by Dcode Arena
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="../../assets/node_modules/popper/popper.min.js"></script>
    <script src="../../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="../../assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../assets/dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="../../assets/node_modules/raphael/raphael-min.js"></script>
    <script src="../../assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="../../assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Popup message jquery -->
    <script src="../../assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="../../assets/dist/js/dashboard1.js"></script>
</body>

</html>
