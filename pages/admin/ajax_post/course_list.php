<?php
$ut = $_POST["int_id"];
$cos = $_POST["c_id"];
if ($ut != "" && $cos != "") {
    include("../../../function/db/connect.php");
    function fill_list($connection, $ut, $cos) {
        $org = "SELECT * FROM `courses` WHERE level_id= '$ut' AND category_id = '$cos'";
        $res = mysqli_query($connection, $org);
        $out = '';
        while ($row = mysqli_fetch_array($res))
        {
          $out .= '<option value="'.$row["listing_id"].'">'.strtoupper($row["name"]).'</option>';
        }
        return $out;
      }
if ($ut != "" && $cos != "") {
    ?>
    <div class="form-group">
                                                    <label>Listing hierarchy</label>
                                                    <br/>
                                                    <select class="form-control" name="listing_value" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="last">Last Course</option>
                                                        <?php echo fill_list($connection, $ut, $cos); ?>
                                                    </select>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" value="before" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline1">Before</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" value="after" checked class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline2">After</label>
                                                    </div>
                                                </div>
    <?php
}
} else { 
}
?>