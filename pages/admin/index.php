<?php
$web_title = "Dashboard";
include("header.php");
?>
<!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb border-bottom">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-xs-12 align-self-center">
                        <h5 class="font-medium text-uppercase mb-0">Dashboard</h5>
                    </div>
                    <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">
                        <a href="manage_course.php" class="btn btn-danger text-white float-right ml-3 d-none d-md-block">Manage Courses</a>
                        <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                            <ol class="breadcrumb mb-0 justify-content-end p-0">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Finance</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="page-content container-fluid">
                <!-- ============================================================== -->
                <!-- Card Group  -->
                <!-- ============================================================== -->
                <div class="card-group">
                    <div class="card p-2 p-lg-3">
                        <div class="p-lg-3 p-2">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-circle btn-danger text-white btn-lg" href="javascript:void(0)">
                                <i class="ti-clipboard"></i>
                            </button>
                                <div class="ml-4" style="width: 38%;">
                                    <h4 class="font-light">Total Projects</h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="display-7 mb-0">23</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-2 p-lg-3">
                        <div class="p-lg-3 p-2">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-circle btn-cyan text-white btn-lg" href="javascript:void(0)">
                                <i class="ti-wallet"></i>
                            </button>
                                <div class="ml-4" style="width: 38%;">
                                    <h4 class="font-light">Total Earnings</h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="display-7 mb-0">76</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-2 p-lg-3">
                        <div class="p-lg-3 p-2">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-circle btn-warning text-white btn-lg" href="javascript:void(0)">
                                <i class="fas fa-dollar-sign"></i>
                            </button>
                                <div class="ml-4" style="width: 38%;">
                                    <h4 class="font-light">Total Earnings</h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="display-7 mb-0">83</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Products yearly sales, Weather Cards Section  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="bg-danger">
                                <div id="ct-daily-sales" style="height: 304px"></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h2 class="font-medium">Week Sales</h2>
                                        <h5 class="card-subtitle mb-0">Ios app - 160 sales</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <button class="btn btn-circle btn-info text-white btn-lg" href="javascript:void(0)">
                                            <i class="ti-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="bg-danger">
                                <div id="ct-daily-sales" style="height: 304px"></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h2 class="font-medium">Week Sales</h2>
                                        <h5 class="card-subtitle mb-0">Ios app - 160 sales</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <button class="btn btn-circle btn-info text-white btn-lg" href="javascript:void(0)">
                                            <i class="ti-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="bg-danger">
                                <div id="ct-daily-sales" style="height: 304px"></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h2 class="font-medium">Week Sales</h2>
                                        <h5 class="card-subtitle mb-0">Ios app - 160 sales</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <button class="btn btn-circle btn-info text-white btn-lg" href="javascript:void(0)">
                                            <i class="ti-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Manage Table & Walet Cards Section  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs manage-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#users" role="tab">
                                        <span class="hidden-sm-up">
                                            <h4><i class="ti-user"></i></h4>
                                        </span>
                                        <span class="d-none d-md-block">Select Users</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#permissions" role="tab">
                                        <span class="hidden-sm-up">
                                            <h4><i class="ti-lock"></i></h4>
                                        </span>
                                        <span class="d-none d-md-block">Set Permissions</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                                        <span class="hidden-sm-up">
                                            <h4><i class="ti-receipt"></i></h4>
                                        </span>
                                        <span class="d-none d-md-block">Message Users</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#save" role="tab">
                                        <span class="hidden-sm-up">
                                            <h4><i class="ti-check-box"></i></h4>
                                        </span>
                                        <span class="d-none d-md-block">Save and Finish</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="users" role="tabpanel">
                                    <div class="row py-4 px-5 no-gutters mt-3">
                                        <div class="col-sm-12 col-md-6">
                                            <h3 class="font-light">Select Users to Manage</h3>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <ul class="list-inline dl mb-0 float-left float-md-right">
                                                <li class="list-inline-item text-info mr-3">
                                                    <a href="#">
                                                        <button class="btn btn-circle btn-success text-white" href="javascript:void(0)">
                                                            <i class="ti-plus"></i>
                                                        </button>
                                                        <span class="ml-2 font-normal text-dark">Add User</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item text-danger">
                                                    <a href="#">
                                                        <button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
                                                            <i class="ti-pencil-alt"></i>
                                                        </button>
                                                        <span class="ml-2 font-normal text-dark">Edit</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light">
                                        <div class="table-responsive border-top manage-table px-4 py-3">
                                            <table class="table no-wrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-0"></th>
                                                        <th scope="col" class="border-0"></th>
                                                        <th scope="col" class="border-0">Name</th>
                                                        <th scope="col" class="border-0">Position</th>
                                                        <th scope="col" class="border-0">Joined</th>
                                                        <th scope="col" class="border-0">Location</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="advanced-table active">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c1" checked="">
                                                                <label class="custom-control-label" for="c1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="../../design/admin/assets/images/users/1.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Andrew Simons</td>
                                                        <td>Modulator</td>
                                                        <td>6 May 2016</td>
                                                        <td>Gujrat, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c2">
                                                                <label class="custom-control-label" for="c2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="../../design/admin/assets/images/users/2.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Hanna Gover</td>
                                                        <td>Admin </td>
                                                        <td>13 Jan 2005</td>
                                                        <td>Texas, United states</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c3">
                                                                <label class="custom-control-label" for="c3">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="../../design/admin/assets/images/users/3.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Joshi Nirav</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2001</td>
                                                        <td>Bhavnagar, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c4">
                                                                <label class="custom-control-label" for="c4">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="../../design/admin/assets/images/users/4.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Joshi Sunil</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2004</td>
                                                        <td>Gujarat, India</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center p-4 mt-2">
                                        <h3 class="font-light">1 members selected</h3>
                                        <div class="ml-auto">
                                            <button class="btn btn-danger text-white btn-rounded py-2 px-3">Next <i class="ti-arrow-right ml-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="permissions" role="tabpanel">
                                    <div class="row py-4 px-5 no-gutters mt-3">
                                        <div class="col-sm-12 col-md-6">
                                            <h3 class="font-light">Set Users Permission</h3>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <ul class="list-inline dl mb-0 float-left float-md-right">
                                                <li class="list-inline-item text-info mr-3">
                                                    <a href="#">
                                                        <button class="btn btn-circle btn-success text-white" href="javascript:void(0)">
                                                            <i class="ti-plus"></i>
                                                        </button>
                                                        <span class="ml-2 font-normal text-dark">Add User</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item text-danger">
                                                    <a href="#">
                                                        <button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
                                                            <i class="ti-pencil-alt"></i>
                                                        </button>
                                                        <span class="ml-2 font-normal text-dark">Edit</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light">
                                        <div class="table-responsive border-top manage-table px-4 py-3">
                                            <table class="table no-wrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-0"></th>
                                                        <th scope="col" class="border-0"></th>
                                                        <th scope="col" class="border-0">Name</th>
                                                        <th scope="col" class="border-0">Position</th>
                                                        <th scope="col" class="border-0">Joined</th>
                                                        <th scope="col" class="border-0">Location</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c5">
                                                                <label class="custom-control-label" for="c5">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="../../design/admin/assets/images/users/1.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Andrew Simons</td>
                                                        <td>Modulator</td>
                                                        <td>6 May 2016</td>
                                                        <td>Gujrat, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table active">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c6" checked="">
                                                                <label class="custom-control-label" for="c6">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="../../design/admin/assets/images/users/2.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Hanna Gover</td>
                                                        <td>Admin </td>
                                                        <td>13 Jan 2005</td>
                                                        <td>Texas, United states</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c7">
                                                                <label class="custom-control-label" for="c7">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="../../design/admin/assets/images/users/3.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Joshi Nirav</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2001</td>
                                                        <td>Bhavnagar, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c8">
                                                                <label class="custom-control-label" for="c8">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="../../design/admin/assets/images/users/4.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Joshi Sunil</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2004</td>
                                                        <td>Gujarat, India</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center p-4 mt-2">
                                        <h3 class="font-light">1 members selected</h3>
                                        <div class="ml-auto">
                                            <button class="btn btn-danger text-white btn-rounded py-2 px-3">Next <i class="ti-arrow-right ml-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="messages" role="tabpanel">
                                    <div class="row py-4 px-5 no-gutters mt-3">
                                        <div class="col-sm-12 col-md-6">
                                            <h3 class="font-light">Manage Users</h3>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <ul class="list-inline dl mb-0 float-left float-md-right">
                                                <li class="list-inline-item text-info mr-3">
                                                    <a href="#">
                                                        <button class="btn btn-circle btn-success text-white" href="javascript:void(0)">
                                                            <i class="ti-plus"></i>
                                                        </button>
                                                        <span class="ml-2 font-normal text-dark">Add User</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item text-danger">
                                                    <a href="#">
                                                        <button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
                                                            <i class="ti-pencil-alt"></i>
                                                        </button>
                                                        <span class="ml-2 font-normal text-dark">Edit</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light">
                                        <div class="table-responsive border-top manage-table px-4 py-3">
                                            <table class="table no-wrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-0"></th>
                                                        <th scope="col" class="border-0"></th>
                                                        <th scope="col" class="border-0">Name</th>
                                                        <th scope="col" class="border-0">Position</th>
                                                        <th scope="col" class="border-0">Joined</th>
                                                        <th scope="col" class="border-0">Location</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c9">
                                                                <label class="custom-control-label" for="c9">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="../../design/admin/assets/images/users/1.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Andrew Simons</td>
                                                        <td>Modulator</td>
                                                        <td>6 May 2016</td>
                                                        <td>Gujrat, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c10">
                                                                <label class="custom-control-label" for="c10">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="../../design/admin/assets/images/users/2.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Hanna Gover</td>
                                                        <td>Admin </td>
                                                        <td>13 Jan 2005</td>
                                                        <td>Texas, United states</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table active">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c11" checked="">
                                                                <label class="custom-control-label" for="c11">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="../../design/admin/assets/images/users/3.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Joshi Nirav</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2001</td>
                                                        <td>Bhavnagar, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c12">
                                                                <label class="custom-control-label" for="c12">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="../../design/admin/assets/images/users/4.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Joshi Sunil</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2004</td>
                                                        <td>Gujarat, India</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center p-4 mt-2">
                                        <h3 class="font-light">1 members selected</h3>
                                        <div class="ml-auto">
                                            <button class="btn btn-danger text-white btn-rounded py-2 px-3">Next <i class="ti-arrow-right ml-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="save" role="tabpanel">
                                    <div class="row py-4 px-5 no-gutters mt-3">
                                        <div class="col-sm-12 col-md-6">
                                            <h3 class="font-light">Save and finish</h3>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <ul class="list-inline dl mb-0 float-left float-md-right">
                                                <li class="list-inline-item text-info mr-3">
                                                    <a href="#">
                                                        <button class="btn btn-circle btn-success text-white" href="javascript:void(0)">
                                                            <i class="ti-plus"></i>
                                                        </button>
                                                        <span class="ml-2 font-normal text-dark">Add User</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item text-danger">
                                                    <a href="#">
                                                        <button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
                                                            <i class="ti-pencil-alt"></i>
                                                        </button>
                                                        <span class="ml-2 font-normal text-dark">Edit</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light">
                                        <div class="table-responsive border-top manage-table px-4 py-3">
                                            <table class="table no-wrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-0"></th>
                                                        <th scope="col" class="border-0"></th>
                                                        <th scope="col" class="border-0">Name</th>
                                                        <th scope="col" class="border-0">Position</th>
                                                        <th scope="col" class="border-0">Joined</th>
                                                        <th scope="col" class="border-0">Location</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c13">
                                                                <label class="custom-control-label" for="c13">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="../../design/admin/assets/images/users/1.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Andrew Simons</td>
                                                        <td>Modulator</td>
                                                        <td>6 May 2016</td>
                                                        <td>Gujrat, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c14">
                                                                <label class="custom-control-label" for="c14">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="../../design/admin/assets/images/users/2.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Hanna Gover</td>
                                                        <td>Admin </td>
                                                        <td>13 Jan 2005</td>
                                                        <td>Texas, United states</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c15">
                                                                <label class="custom-control-label" for="c15">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="../../design/admin/assets/images/users/3.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Joshi Nirav</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2001</td>
                                                        <td>Bhavnagar, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table active">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c16" checked="">
                                                                <label class="custom-control-label" for="c16">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="../../design/admin/assets/images/users/4.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Joshi Sunil</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2004</td>
                                                        <td>Gujarat, India</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center p-4 mt-2">
                                        <h3 class="font-light">1 members selected</h3>
                                        <div class="ml-auto">
                                            <button class="btn btn-danger text-white btn-rounded py-2 px-3">Next <i class="ti-arrow-right ml-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Todo list & Calender application  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="calender-sidebar">
                                <div id="calendar"></div>
                            </div>
                            <!-- BEGIN MODAL -->
                            <div class="modal none-border" id="my-event">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title"><strong>Add Event</strong></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body"></div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Social Cards  -->
                <!-- ============================================================== -->
                <!-- <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../design/admin/assets/images/big/img1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center mb-3">
                                    <span class="text-muted"><i class="ti-calendar"></i> May 16</span>
                                    <div class="ml-3">
                                        <a href="javascript:void(0)" class="link"><i class="ti-heart"></i> 30</a>
                                    </div>
                                </div>
                                <h3 class="mt-3">Top 20 Models are on the ramp</h3>
                                <p class="mt-3 font-light">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <button class="btn btn-success btn-rounded waves-effect waves-light mt-2 text-white">Read more</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../design/admin/assets/images/big/img2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center mb-3">
                                    <span class="text-muted"><i class="ti-calendar"></i> Aug 10</span>
                                    <div class="ml-3">
                                        <a href="javascript:void(0)" class="link"><i class="ti-heart"></i> 32</a>
                                    </div>
                                </div>
                                <h3 class="mt-3">Top 20 Models are on the ramp</h3>
                                <p class="mt-3 font-light">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <button class="btn btn-success btn-rounded waves-effect waves-light mt-2 text-white">Read more</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../design/admin/assets/images/big/img3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center mb-3">
                                    <span class="text-muted"><i class="ti-calendar"></i> Jun 16</span>
                                    <div class="ml-3">
                                        <a href="javascript:void(0)" class="link"><i class="ti-heart"></i> 40</a>
                                    </div>
                                </div>
                                <h3 class="mt-3">Top 20 Models are on the ramp</h3>
                                <p class="mt-3 font-light">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <button class="btn btn-success btn-rounded waves-effect waves-light mt-2 text-white">Read more</button>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- ============================================================== -->
                <!-- Chat App, Timeline & Chat Listing  -->
                <!-- ============================================================== -->
              
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
<?php
include("footer.php");
?>