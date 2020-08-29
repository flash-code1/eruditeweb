<?php
$web_title = "Create & Manage Category";
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
                        <h5 class="font-medium text-uppercase mb-0">Manage Category</h5>
                    </div>
                    <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">
                        <button class="btn btn-danger text-white float-right ml-3 d-none d-md-block">Manage Category</button>
                        <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                            <ol class="breadcrumb mb-0 justify-content-end p-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Manage Category</li>
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
                    $name = preg_replace('/[^\w]/', ' ', $_POST["cat_name"]);
                    $sht_name = preg_replace('/[^\w]/', ' ', $_POST["sht_name"]);
                    $int_id = preg_replace('/[^\w]/', ' ', $_POST["int"]);
                    $tag = preg_replace('/[^\w]/', ' ', $_POST["customRadioInline1"]);
                    $desc = preg_replace('/[^\w]/', ' ', $_POST["desc"]);
                    $date = date('Y-m-d');
                    // echk
                    // onecheck
                    $check = mysqli_query($connection, "SELECT * FROM category WHERE name = '$name' AND short_name = '$sht_name'");
                    if (mysqli_num_rows($check) <= 0 && $int_id != "") {
                        // checkl it out
                        $temp1 = explode(".", $_FILES['chooseFile']['name']);
                        $digits = 10;
                        $randms1 = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
                        $sig_passport_one = $randms1. '.' .end($temp1);
                        if (move_uploaded_file($_FILES['chooseFile']['tmp_name'], "category/" . $sig_passport_one)) {
                        $msg = "Image uploaded successfully";
                        } else {
                          $msg = "Image Failed";
                        }
                        $upload_int = mysqli_query($connection, "INSERT INTO `category` (`level_id`, `name`, `short_name`, `description`, `background_img`, `date`) VALUES ('{$int_id}', '{$name}', '{$sht_name}', '{$desc}', '{$sig_passport_one}', '{$date}')");
                        if ($upload_int) {
                            echo '<script type="text/javascript">
$(document).ready(function(){
    Swal.fire({
        type: "success",
        title: "Category Created",
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
        title: "Category Exist",
        text: "This Category Has Been Created Before",
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
                                        <h5 class="card-title">Create an Institution Product Category</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Category Name</label>
                                                    <input type="text" id="c_name" name="cat_name" class="form-control" placeholder="Enter Category eg. Science" required> </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Short Name</label>
                                                    <input type="text" id="shrt_name" name="sht_name" class="form-control" placeholder="Enter Short Name eg. SC" required> </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
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
                                                    <label class="control-label">Institution</label>
                                                    <select class="form-control" data-placeholder="Choose a Category" name="int" tabindex="1">
                                                        <option value="">Select Institution</option>
                                                        <?php echo fill_int($connection); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Search Tags</label>
                                                    <br/>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" value="1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline1">Active</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" value="0" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline2">Not Active</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <h5 class="card-title mt-5">Category Description</h5>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <textarea name="desc" class="form-control" rows="4">..Description</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 class="card-title mt-3">Upload Image</h5>
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
                                                <div class="btn btn-info waves-effect waves-light"><span>Select Image</span>
                                                    <input type="file" class="upload" name="chooseFile" accept="image/*"> </div>
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
                        $query1 = "SELECT * FROM `category`";
                        $result1 = mysqli_query($connection, $query1);
                      ?>
                                            <tr>
                                                <th>Institution Name</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Created Date</th>
                                                <th>Modify</th>
                                                <th>Copy</th>
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
                                                ?>
                                                <td><?php echo $int_name; ?></td>
                                                <td><?php echo $row1["name"]; ?> - <?php echo $row1["short_name"]; ?></td>
                                                <td><?php echo $row1["description"]; ?></td>
                                                <td><?php echo $row1["date"]; ?></td>
                                                <td> <button class="btn btn-success">update</button> </td>
                                                <td> <button class="btn btn-warning">copy</button> </td>
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