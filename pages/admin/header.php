<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../design/logo/logo.png">
    <title>Erudite Tutors - <?php echo $web_title; ?></title>
	<link rel="canonical" href="#" />
    <!-- chartist CSS -->
    <link href="../../design/admin/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../../design/admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="../../design/admin/assets/libs/morris.js/morris.css" rel="stylesheet">
    <link href="../../design/admin/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../design/admin/assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="../../design/admin/assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <!-- needed css -->
    <link href="../../design/admin/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
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
            <nav class="navbar top-navbar navbar-expand-lg navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-lg-none sidebartoggler" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../design/logo/logo.png" alt="homepage" class="dark-logo" height="40px" width="40px"/> -->
                            <!-- Light Logo icon -->
                            <!-- <img src="../../design/logo/logo.png" alt="homepage" class="light-logo" /> -->
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            Erudite Tutors logo
                             <!-- dark Logo text -->
                             <!-- <img src="../../design/logo/logo.png" alt="homepage" class="dark-logo" height="40px" width="40px" /> -->
                             <!-- Light Logo text -->    
                             <!-- <img src="../../design/logo/logo.png" class="light-logo" alt="homepage" /> -->
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li> -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-18 mdi mdi-gmail"></i>
                                <div class="notify">
                                    <span class="heartbit"></span>
                                    <span class="point"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title border-bottom">You have 1 new message</div>
                                    </li>
                                    <li>
                                        <div class="message-center message-body">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img"> <img src="../../design/admin/assets/images/users/1.jpg" alt="user" class="rounded-circle"> <span class="profile-status online pull-right"></span> </span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">New Course</h5> <span class="mail-desc">A new course has been added</span> <span class="time">9:30 AM</span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link text-dark" href="javascript:void(0);"> <b>See all Notifications</b> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> 
                            <form class="app-search d-none d-lg-block">
                                <input type="text" class="form-control" placeholder="Search...">
                                <a href="" class="active"><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../../design/logo/logo.png" alt="user" class="rounded-circle" width="31">
                                <span class="ml-2 user-text font-medium">Steve</span><span class="fas fa-angle-down ml-2 user-text"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">
                                    <div class=""><img src="../../design/logo/logo.png" alt="user" class="rounded" width="80"></div>
                                    <div class="ml-2">
                                        <h4 class="mb-0">Erudite Tutors</h4>
                                        <p class=" mb-0 text-muted">erudite@gmail.com</p>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger text-white mt-2 btn-rounded">View Profile</a>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user mr-1 ml-1"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email mr-1 ml-1"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
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
                        <!-- User Profile-->
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Dashboard</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-av-timer"></i><span class="hide-menu">Dashboard </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="index.php" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Finance </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-book-open-page-variant"></i><span class="hide-menu">Course Management </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="create_course.php" class="sidebar-link"><i class="mdi mdi-cards-variant"></i><span class="hide-menu"> Create New Course </span></a></li>
                                <li class="sidebar-item"><a href="manage_course.php" class="sidebar-link"><i class="mdi mdi-book-open-page-variant"></i><span class="hide-menu"> Manage Courses </span></a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Configuration & Staff</span></li>
                        <li class="sidebar-item mega-dropdown"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Staff Management </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="create_staff.php" class="sidebar-link"><i class="mdi mdi-account-check"></i><span class="hide-menu"> Create New Staff </span></a></li>
                                <li class="sidebar-item"><a href="manage_staff.php" class="sidebar-link"><i class="mdi mdi-account-multiple"></i> <span class="hide-menu">Manage Staff</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link two-column has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Blog </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">
                                        <i class="mdi mdi-checkbox-marked-circle"></i>
                                        <span class="hide-menu"> Create New Post</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">
                                        <i class="mdi mdi-comment"></i>
                                        <span class="hide-menu"> Manage Comments</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">
                                        <i class="mdi mdi-briefcase"></i>
                                        <span class="hide-menu"> Manage Blog Post</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span class="hide-menu">Category & Institution</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="manage_institution.php" aria-expanded="false"><i class="mdi mdi-cube-send"></i><span class="hide-menu">Manage Institution</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="manage_category.php" aria-expanded="false"><i class="mdi mdi-creation"></i><span class="hide-menu">Manage Categories</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Notification</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link two-column has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-apps"></i><span class="hide-menu">Chat & Notification </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">
                                        <i class="mdi mdi-comment-processing-outline"></i>
                                        <span class="hide-menu">Chat Message</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">
                                        <i class="mdi mdi-notification-clear-all"></i>
                                        <span class="hide-menu"> Notification </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->