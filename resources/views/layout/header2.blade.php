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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>@yield('title')</title>
    <!-- This Page CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/node_modules/summernote/dist/summernote-bs4.css">
    <link href="../assets/dist/css/pages/stylish-tooltip.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../assets/dist/css/style.min.css" rel="stylesheet">
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
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="light-logo" />
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
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/5.jpg" alt="user" class=""> <span class="hidden-md-down">{{ Auth::user()->username }} &nbsp;<i class="fa fa-angle-down"></i></span> </a>
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
                        <li> <a class="waves-effect waves-dark" href="{{ url('/admin/dashboard') }}"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-people"></i><span class="hide-menu">Staff Registration</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('/admin/lecturers') }}">All Staff</a></li>
                                <li><a href="{{ url('/admin/archived-lecturers') }}">Archived Staff</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-graduation-cap"></i><span class="hide-menu">Students Info</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('/admin/students') }}">All Students</a></li>
                                <li><a href="{{ url('/admin/archived-student')}}">Archived Student</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-bars"></i><span class="hide-menu">Courses</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('/admin/courses') }}">All Courses</a></li>
                                <li><a href="{{ url('/admin/archived-courses') }}">Archived Course</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Library</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('/admin/libary') }}">Library Assets</a></li>
                                <li><a href="{{ url('/admin/archived-libary')}}">Archived Library Asset</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-building"></i><span class="hide-menu">Department</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('/admin/department') }}">Departments</a></li>
                                <li><a href="{{ url('/admin/archived-department') }}">Archived Department</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-chart"></i><span class="hide-menu">Reports</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('/admin/general-report') }}">General Report</a></li>
                                <li><a href="{{ url('/admin/financial-report') }}">Financial Report</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-user"></i><span class="hide-menu">Users</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('/admin/users') }}">All Users</a></li>
                                <li><a href="{{ url('/admin/archived-user') }}">Archived Users</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-calendar"></i><span class="hide-menu">Events</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('/admin/events') }}">All Events</a></li>
                                <li><a href="{{ url('/admin/archived-event') }}">Archived Events</a></li>
                            </ul>
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
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="../assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../assets/dist/js/custom.min.js"></script>
    <script src="../assets/node_modules/summernote/dist/summernote-bs4.min.js"></script>
    <script>
    $(function() {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });

        window.edit = function() {
            $(".click2edit").summernote()
        },
        window.save = function() {
            $(".click2edit").summernote('destroy');
        }
    </script>
</body>

</html>
