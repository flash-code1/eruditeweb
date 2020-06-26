<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Erudite Tutors - Landing</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="design/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="design/vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="design/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="design/vendors/linericon/style.css">
  <link rel="stylesheet" href="design/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="design/vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="design/css/style.css">
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item <?php if ($link_page == "home") { echo "active";} else { echo ""; } ?>"><a class="nav-link" href="index.php">Home</a></li> 
              <li class="nav-item <?php if ($link_page == "news") { echo "active";} else { echo ""; }  ?>"><a class="nav-link" href="news.php">News & Blog</a></li> 
              <li class="nav-item <?php if ($link_page == "price") { echo "active";} else { echo ""; } ?>"><a class="nav-link" href="pricing.php">Pricing</a>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Courses</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="#">Professional Course</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Short Course</a></li>
                  <li class="nav-item"><a class="nav-link" href="sec_course.php">High School</a></li>
                </ul>
							</li>
              <li class="nav-item <?php if ($link_page == "contact") { echo "active";} else { echo ""; } ?>"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>

            <ul class="navbar-right">
              <li class="nav-item">
                <a href="account/login.php" class="button button-header bg">Sign up</a>
              </li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

