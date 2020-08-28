<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../design/admin/assets/images/favicon">
    <title>Erudite Tutors | Signup</title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/ampleadmin/" />
    <!-- Custom CSS -->
    <link href="../design/admin/dist/css/style.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="../design/admin/assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
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
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <?php
include("../function/db/connect.php");
// Include config file
require_once "../bat/phpmailer/PHPMailerAutoload.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // import DB
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm = $_POST["confirm"];
$hash = password_hash($password, PASSWORD_DEFAULT);
$date_time = date('Y-m-d H:i:s');

$res = mysqli_query($connection, "SELECT * FROM `users` WHERE email = '$email'");
// check if it ex
if (mysqli_num_rows($res) <= 0) {
// pro
//  wow
    if ($confirm == $password) {
        // add up
        $insert = mysqli_query($connection, "INSERT INTO `users` (`fullname`, `email`, `password`, `last_logged`, `created_on`, `usertype`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`, `account_status`) VALUES ('{$fullname}', '{$email}', '{$hash}', '{$date_time}', '{$date}', 'client', NULL, NULL, '2020-09-13 00:00:00.000000', NULL, 'Pending')");
        if ($insert) {
            // select user
            $select_user = mysqli_query($connection, "SELECT * FROM `users` WHERE email = '$email'");
            $pip = mysqli_fetch_array($select_user);
            $user_id = $pip["id"];
        $insert_account = mysqli_query($connection, "INSERT INTO `account` (`user_id`, `total_dep`, `total_with`, `balance_derived`, `date_created`) VALUES ('{$user_id}', '0.00', '0.00', '0.00', '{$date_time}')");
            // create an account 
            if ($insert_account) {
                // echo msg email
                $gen_date = date('Y-m-d');
             // begining of mail
             $mail = new PHPMailer;
             // from email addreess and name
             $mail->From = "info@eruditetutors.com";
             $mail->FromName = "Erudite Tutors";
             // to adress and name
             $mail->addAddress($em, $un);
             // reply address
             //Address to which recipient will reply
             // progressive html images
             $mail->addReplyTo("contactus@eruditetutors.com", "Reply");
             // CC and BCC
             //CC and BCC
             // $mail->addCC("cc@example.com");
             // $mail->addBCC("bcc@example.com");
             // Send HTML or Plain Text Email
             $mail->isHTML(true);
             $mail->Subject = "Welcome to Erudite Tutors";
             $mail->Body = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
             <html dir='ltr' xmlns='http://www.w3.org/1999/xhtml'>
             
             <head>
                 <meta name='viewport' content='width=device-width' />
                 <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
                 <title>Application Successful</title>
             </head>
             
             <body style='margin:0px; background: #f8f8f8; '>
                 <div width='100%' style='background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;'>
                     <div style='max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px'>
                         <table border='0' cellpadding='0' cellspacing='0' style='width: 100%; margin-bottom: 20px'>
                             <tbody>
                                 <tr>
                                     <td style='vertical-align: top; padding-bottom:30px;' align='center'>
                                    Terabyte
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                         <table border='0' cellpadding='0' cellspacing='0' style='width: 100%;'>
                             <tbody>
                                 <tr>
                                     <td style='background:#413e39; padding:20px; color:#fff; text-align:center;'> Terabyte Registration Successful. </td>
                                 </tr>
                             </tbody>
                         </table>
                         <div style='padding: 40px; background: #fff;'>
                             <table border='0' cellpadding='0' cellspacing='0' style='width: 100%;'>
                                 <tbody>
                                     <tr>
                                         <td>
                                             <p>Submitted Date <b>$gen_date</b></p>
                                             <p>Welcome to Erudite Tutors</p>
                                             <p>Find Below Your Login Credentials</p>
                                             <p>E-mail: $un</p>
                                             <p>Password: $hash - Encrypted(Please use your original registered password)</p>
                                             <center>
                                                 <a href='https://eruditetutors.com/' style='display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #4fc3f7; border-radius: 60px; text-decoration:none;'>Login</a>
                                             </center>
                                             <b>- Thanks (Erudite Email bot)</b> </td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                         <div style='text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px'>
                             <p> Powered by Terabyte
                                 <br>
                                 <a href='javascript: void(0);' style='color: #b2b2b5; text-decoration: underline;'>Unsubscribe</a> </p>
                         </div>
                     </div>
                 </div>
             </body>
             
             </html>";
             $mail->AltBody = "This is the plain text version of the email content";
             // mail system
             if(!$mail->send()) 
             {
                 echo "Mailer Error: " . $mail->ErrorInfo;
                 echo '<script type="text/javascript">
    $(document).ready(function(){
        Swal.fire({
            type: "success",
            title: "Account Created",
            text: "Thank you!",
            showConfirmButton: false,
            timer: 4000
        })
    });
    </script>
    ';
                 echo header ("Location: login.php");
             } else
             {
                 echo "Message has been sent successfully";
                 echo '<script type="text/javascript">
    $(document).ready(function(){
        Swal.fire({
            type: "success",
            title: "Account Created",
            text: "Thank you!",
            showConfirmButton: false,
            timer: 4000
        })
    });
    </script>
    ';
                 echo header ("Location: login.php");
             }
                // end email
            } else {
                // client account not created
                echo '
                 <script>
                     Swal.fire({
                title: "User Account Failed",
                animation: true,
                customClass: {
                    popup: "animated tada"
                }
            })
                 </script>
                 ';
            }
        } else {
            // echo account user not created
            echo '<script type="text/javascript">
    $(document).ready(function(){
        Swal.fire({
            type: "error",
            title: "Account Error",
            text: "User Creation Failed",
            showConfirmButton: false,
            timer: 4000
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
            title: "Registration Error",
            text: "Please Check Your Password",
            showConfirmButton: false,
            timer: 4000
        })
    });
    </script>
    ';
                //  echo "Reg Error";
        // $_SESSION["Lack_of_intfund_$randms"] = "Registration Ex";
        // echo header ("Location: index.php?message3=$randms");
        // Echo Name Exist
    }
}  else {
    echo '<script type="text/javascript">
$(document).ready(function(){
    Swal.fire({
        type: "error",
        title: "Registration Error",
        text: "User Already Exist",
        showConfirmButton: false,
        timer: 4000
    })
});
</script>
';
            //  echo "Reg Error";
    // $_SESSION["Lack_of_intfund_$randms"] = "Registration Ex";
    // echo header ("Location: index.php?message3=$randms");
    // Echo Name Exist
}

// insert into client account
// done
}
?>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(course/book.jpg) no-repeat center center;">
            <div class="auth-box">
                <div>
                    <div class="logo">
                        <!-- <span class="db"><img src="../design/admin/assets/images/logos/logo-icon.png" alt="logo" /></span> -->
                        <h5 class="font-medium mb-3">Erudite Tutors | Sign Up</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal mt-3" method="POST">
                                <div class="form-group row ">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" name="fullname" type="text" required=" " placeholder="Fullname">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" name="email" type="email" required=" " placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" name="password" type="password" required=" " placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="password" name="confirm" required=" " placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 ">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                            <label class="custom-control-label" for="customCheck1">I agree to all <a href="javascript:void(0)">Terms</a></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center ">
                                    <div class="col-xs-12 pb-3 ">
                                        <button class="btn btn-block btn-lg btn-info" type="submit">SIGN UP</button>
                                    </div>
                                </div>
                                <div class="form-group mb-0 mt-2 ">
                                    <div class="col-sm-12 text-center ">
                                        Already have an account? <a href="login.php" class="text-info ml-1 "><b>Sign In</b></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="../design/admin/assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../design/admin/assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="../design/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <script src="../design/admin/assets/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="../design/admin/assets/libs/sweetalert2/dist/sweetalert2.min.js"></script>
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip "]').tooltip();
    $(".preloader ").fadeOut();
    </script>
</body>

</html>