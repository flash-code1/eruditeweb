<?php
$web_title = "Create & Manage Institution";
include("header.php");
?>
<!-- new start creation of institution -->
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb border-bottom">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-xs-12 align-self-center">
                        <h5 class="font-medium text-uppercase mb-0">Manage Institution</h5>
                    </div>
                    <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">
                        <button class="btn btn-danger text-white float-right ml-3 d-none d-md-block">Manage Institution</button>
                        <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                            <ol class="breadcrumb mb-0 justify-content-end p-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Manage Institution</li>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <h5 class="card-title">Fill The Institution Data Properly</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Institution Name</label>
                                                    <input type="text" id="int_name" class="form-control" name="int_name" placeholder="Enter Name eg. HIGH SCHOOL - JSS1" required> </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Short Name</label>
                                                    <input type="text" id="int_short_name" name="short_name" class="form-control" placeholder="Enter Short Name eg. JSS1" required> </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Institution Educational Category</label>
                                                    <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="0">choose a category</option>
                                                        <option value="primary">Elementary school</option>
                                                        <option value="Secondary">Secondary school</option>
                                                        <option value="Tertiary">University / Polythenic / College of Education</option>
                                                        <option value="Professional">Professional Courses</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Requirement Notice*</label>
                                                    <input type="text" id="req" name="requirement" class="form-control" placeholder="Enter Requirement eg. Please Make sure your are done with secondary school." required> </div>
                                            </div>
                                            <!--/span-->
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <h5 class="card-title mt-5">Institution Description</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="4">...Description</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <hr> </div>
                                    <div class="form-actions mt-5">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-dark">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="material-card card">
                            <div class="card-body">
                                <h4 class="card-title">Created Institution</h4>
                                <h6 class="card-subtitle">Modify the institution</h6>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped border">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Requirement</th>
                                                <th>Description</th>
                                                <th>Created Date</th>
                                                <th>Modify</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>High School</td>
                                                <td>Done with Junior Secondary</td>
                                                <td>A new path of education after junior high</td>
                                                <td>2011/04/25</td>
                                                <td> <button class="btn btn-success">update</button> </td>
                                                <td> <button class="btn btn-danger">delete</button> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
<!-- end creation -->
<?php
include("footer.php");
?>