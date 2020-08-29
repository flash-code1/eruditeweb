<?php
$ut = $_POST["int_id"];
if ($ut != "") {
    include("../../../function/db/connect.php");
    function fill_int($connection, $ut) {
        $org = "SELECT * FROM `category` WHERE level_id = '$ut'";
        $res = mysqli_query($connection, $org);
        $out = '';
        while ($row = mysqli_fetch_array($res))
        {
          $out .= '<option value="'.$row["id"].'">'.strtoupper($row["name"])." - ".strtoupper($row["short_name"]).'</option>';
        }
        return $out;
      }
if ($ut != "") {
    ?>
    <div class="form-group">
        <label class="control-label">Education Category</label>
             <select class="form-control" id="cat" name="category" data-placeholder="Choose a Category" tabindex="1">
              <option value="all">General Course for All Education Category</option>
              <?php echo fill_int($connection, $ut); ?>
        </select>
    </div>
    <script>
                $(document).ready(function() {
                  $('#cat').on("change", function(){
                    var int_id = $('#int_check').val();
                    var c_id = $(this).val();
                    $.ajax({
                      url:"ajax_post/course_list.php",
                      method:"POST",
                      data:{int_id:int_id, c_id:c_id},
                      success:function(data){
                        $('#check_list').html(data);
                      }
                    })
                  });
                });
                  </script>
    <?php
}
} else {  
    echo '<script type="text/javascript">
$(document).ready(function(){
    Swal.fire({
        type: "error",
        title: "NO Institution Selected",
        text: "Please Seleect or Create an Institution Then Create Course",
        showConfirmButton: false,
        timer: 3000
    })
});
</script>
';
}
?>