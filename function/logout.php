<?php
  // get connections for all pages
  include("db/connect.php");
?>
<?php
// Initialize the session
session_start();
$activecode = date('Y-m-d H:i:s');
$acuser = $_SESSION["email"];
$activeq = "UPDATE `users` SET users.last_logged ='$activecode' WHERE users.email ='$acuser'";
$rezz = mysqli_query($connection, $activeq);
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: ../account/login.php");

exit;
?>