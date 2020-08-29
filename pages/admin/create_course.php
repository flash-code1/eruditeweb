<?php
$web_title = "Create & Manage Course";
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
                        <h5 class="font-medium text-uppercase mb-0">Create Course</h5>
                    </div>
                    <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">
                        <button class="btn btn-danger text-white float-right ml-3 d-none d-md-block">New Course</button>
                        <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                            <ol class="breadcrumb mb-0 justify-content-end p-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create Course</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $name = preg_replace('/[^\w]/', ' ', $_POST["name"]);
                    $int_id = preg_replace('/[^\w]/', ' ', $_POST["int_id"]);
                    $cat_id = preg_replace('/[^\w]/', ' ', $_POST["category"]);
                    $listing_val = preg_replace('/[^\w]/', ' ', $_POST["listing_value"]);
                    $listing_order = preg_replace('/[^\w]/', ' ', $_POST["customRadioInline1"]);
                    // COMPUTATION  
                    $interval = preg_replace('/[^\w]/', ' ', $_POST["interval"]);
                    $desc = preg_replace('/[^\w]/', ' ', $_POST["desc"]);
                    $date = date('Y-m-d');
                    // echk
                    // onecheck
                    $check = mysqli_query($connection, "SELECT * FROM courses WHERE name = '$name' AND level_id = '$int_id' AND category_id = '$cat_id'");
                    if (mysqli_num_rows($check) <= 0 && $int_id != "" && $name != "") {
                        // BEFORE AND AFTER COMPUTATION
                        $run_query = mysqli_query($connection, "SELECT * FROM `courses` WHERE level_id = '$int_id'");
                        $ord_number = mysqli_num_rows($run_query);
                        // check
                        if ($listing_val == "last" || $listing_val == NULL) {
                        // normal add.
                        $new_number = $ord_number + 1;
                        } else {
                            // run check
                            if ($listing_order == "before") {
                                // check
                                $run_query = mysqli_query($connection, "SELECT * FROM `courses` WHERE (listing_id >= '$listing_val')");
                                while ($x = mysqli_fetch_array($run_query)) {
                                    // making move.
                                    $list_id = $x["id"];
                                    $old_list = $x["listing_id"];
                                    // plus one
                                    $new_list = $old_list + 1;
                                    // update
                                    $update_list = mysqli_query($connection, "UPDATE courses SET listing_id = '$new_list' WHERE id = '$list_id'");
                                }
                                if ($update_list) {
                                    $new_number = $listing_val;
                                } else {
                                    $new_number = $ord_number + 1;
                                }
                            } else {
                                // listing order is after
                                $run_query = mysqli_query($connection, "SELECT * FROM `courses` WHERE (listing_id > '$listing_val')");
                                while ($x = mysqli_fetch_array($run_query)) {
                                    // making move.
                                    $listing_val = $x["id"];
                                    $old_list = $x["listing_id"];
                                    // plus one
                                    $new_list = $old_list + 1;
                                    // update
                                    $update_list = mysqli_query($connection, "UPDATE courses SET listing_id = '$new_list' WHERE id = '$list_id'");
                                }
                                if ($update_list) {
                                    $new_number = $listing_val + 1;
                                } else {
                                    $new_number = $ord_number + 1;
                                }
                            }
                        }
                        // READY
                        $temp1 = explode(".", $_FILES['chooseFile']['name']);
                        $digits = 10;
                        $randms1 = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
                        $sig_passport_one = $randms1. '.' .end($temp1);
                        if (move_uploaded_file($_FILES['chooseFile']['tmp_name'], "course/" . $sig_passport_one)) {
                        $msg = "Image uploaded successfully";
                        } else {
                          $msg = "Image Failed";
                        }
                        // VIDEO PREVIDE
                        $temp2 = explode(".", $_FILES['introVideo']['name']);
                        $randms2 = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
                        $video = $randms2. '.' .end($temp2);
                        if (move_uploaded_file($_FILES['introVideo']['tmp_name'], "preview/" . $video)) {
                        $msg = "Image uploaded successfully";
                        } else {
                          $msg = "Image Failed";
                        }
                        $upload_int = mysqli_query($connection, "INSERT INTO `courses` (`category_id`, `listing_id`, `level_id`, `name`, `description`, `img`, `rate`, `interval_day`, `intro_video`, `date`) VALUES ('{$cat_id}', '{$new_number}', '{$int_id}', '{$name}', '{$desc}', '{$sig_passport_one}', '5', '{$interval}', '{$video}', '{$date}')");
                        if ($upload_int) {
                            echo '<script type="text/javascript">
$(document).ready(function(){
    Swal.fire({
        type: "success",
        title: "Course Created Successfully",
        text: "You Have Successfully Created "'.$name.'" ",
        showConfirmButton: false,
        timer: 5000
    })
});
</script>
';
                        } else {
                            echo '<script type="text/javascript">
$(document).ready(function(){
    Swal.fire({
        type: "error",
        title: "System Error",
        text: "Error Creating "'.$name.'" ",
        showConfirmButton: false,
        timer: 5000
    })
});
</script>
';
                        }
                    } else {
                        echo '<script type="text/javascript">
$(document).ready(function(){
    Swal.fire({
        type: "error",
        title: "Course Creation Error",
        text: "This Course Has Been Created Before or Not Properly Filled",
        showConfirmButton: false,
        timer: 5000
    })
});
</script>
';
                    }
                }
            ?>
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
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <h5 class="card-title">Create Course</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Course Name</label>
                                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Course Name"> </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                            <?php
                                        function fill_int($connection) {
                                            $org = "SELECT * FROM `level`";
                                            $res = mysqli_query($connection, $org);
                                            $out = '';
                                            while ($row = mysqli_fetch_array($res))
                                            {
                                              $out .= '<option value="'.$row["id"].'">'.strtoupper($row["name"])." - ".strtoupper($row["short_name"]).'</option>';
                                            }
                                            return $out;
                                          }
                                        ?>
                                                <div class="form-group">
                                                    <label class="control-label">Education Level</label>
                                                    <select class="form-control" name="int_id" id="int_check" data-placeholder="Choose a Int" tabindex="1">
                                                    <option value="">Select Institution</option>
                                                        <?php echo fill_int($connection); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <script>
                $(document).ready(function() {
                  $('#int_check').on("change", function(){
                    var int_id = $(this).val();
                    $.ajax({
                      url:"ajax_post/cat.php",
                      method:"POST",
                      data:{int_id:int_id},
                      success:function(data){
                        $('#make_display').html(data);
                      }
                    })
                  });
                });
                  </script>
                                        </div>
                                        <!--/row-->
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div id="make_display"></div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div id="check_list"></div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Course Days Interval</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon2"><i class="ti-cut"></i></span>
                                                        </div>
                                                        <input type="number" name="interval" class="form-control" placeholder="Discount" value="1" aria-label="Discount" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Course Image</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon2"><i class="ti-cut"></i></span>
                                                        </div>
                                                        <input type="file" name="chooseFile" accept=".png, .jpg, .jpeg" class="form-control" placeholder="Course Image" aria-label="Discount" aria-describedby="basic-addon2" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="card-title mt-5">Course Description</h5>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <textarea name="desc" class="form-control" rows="4">..course description</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <!--/span-->
                                            <div class="col-md-3">
                                                <h5 class="card-title mt-3">Upload Course Introduction Video</h5>
                                                <div class="el-element-overlay">
                                                    <div class="el-card-item">
                                                        <div class="el-card-avatar el-overlay-1">
                                                            <div class="el-overlay">
                                                                <ul class="list-style-none el-info">
                                                                    <!-- <li class="el-item"></li> -->
                                                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn btn-info waves-effect waves-light"><span>Upload Intro Video</span>
                                                    <input name="introVideo" type="file" class="upload" accept="video/*" required> </div>
                                            </div>
                                        </div>
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
                                        <?php
                        $query1 = "SELECT * FROM `courses`";
                        $result1 = mysqli_query($connection, $query1);
                      ?>
                                            <tr>
                                                <th>Course Name</th>
                                                <th>Course Institution</th>
                                                <th>Course Category</th>
                                                <th>Created Date</th>
                                                <th>Modify</th>
                                                <th>Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if (mysqli_num_rows($result1) > 0) {
                        while($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {?>
                                            <tr>
                                            <?php 
                                                $int_id = $row1["level_id"];
                                                $query_int = mysqli_query($connection, "SELECT * FROM level WHERE id = '$int_id'");
                                                $x = mysqli_fetch_array($query_int);
                                                $int_name = $x["name"];
                                                // category
                                                $cat_id = $row1["category_id"];
                                                $query_cat = mysqli_query($connection, "SELECT * FROM category WHERE id = '$cat_id'");
                                                $xx = mysqli_fetch_array($query_cat);
                                                $cat_name = $xx["name"];
                                                if ($cat_id != "all") {
                                                    $cat_name = $cat_name;
                                                } else {
                                                    $cat_name = $cat_name;
                                                }
                                                ?>
                                                <td><?php echo $row1["name"]; ?></td>
                                                <td><?php echo $int_name; ?></td>
                                                <td><?php echo $cat_name; ?></td>
                                                <td><?php echo $row1["date"]; ?></td>
                                                <td> <button class="btn btn-success">update</button> </td>
                                                <td> <button class="btn btn-warning">manage</button> </td>
                                            </tr>
                                            <?php }
                                          }
                                    else {
                                    // echo "0 Document";
                                    }
                                    ?>
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