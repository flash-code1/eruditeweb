<?php
$link_page = "price";
include("header.php");
?>
  <!--================ Hero sm Banner start =================-->      
  <section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
      <div class="hero-banner--sm__content">
          <div class="ti-credit-card"></div>
        <h1>Payment and Membership</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pricing & Membership</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->
  <!--================ Pricing section start =================-->      
  <section class="section-margin">
      <div class="container">
        <div class="section-intro pb-85px text-center">
          <h2 class="section-intro__title">Choose Your Membership</h2>
          <p class="section-intro__subtitle">Note. <b>Paid Per Course</b> </p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card text-center card-pricing">
              <div class="card-pricing__header">
                <h4>Freshers</h4>
                <p>Per Month</p>
                <h1 class="card-pricing__price"><span>&#8358;</span>1,000.00</h1>
              </div>
              <ul class="card-pricing__list">
                <li> <i class="ti-check"></i>Starter Kit</li>
                <li> <i class="ti-check"></i> Session 3 Times Weekly</li>
                <li class="unvalid"><i class="ti-close"></i>Unlimited Hours & Private Session</li>
                <li class="unvalid"><i class="ti-close"></i>Live Video Class</li>
                <li class="unvalid"><i class="ti-close"></i>Paid Certificate</li>
              </ul>
              <div class="card-pricing__footer">
                <button class="button button-light">Get Started</button>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card text-center card-pricing">
              <div class="card-pricing__header">
                <h4>Smiles</h4>
                <p>Per Month</p>
                <h1 class="card-pricing__price"><span>&#8358;</span>8,000.00</h1>
              </div>
              <ul class="card-pricing__list">
                <li> <i class="ti-check"></i>Starter Kit</li>
                <li> <i class="ti-check"></i> Session 4 Times Weekly</li>
                <li class="unvalid"><i class="ti-close"></i>Unlimited Hours & Private Session</li>
                <li><i class="ti-check"></i>Live Video Class</li>
                <li class="unvalid"><i class="ti-close"></i>Paid Certificate</li>
              </ul>
              <div class="card-pricing__footer">
                <button class="button button-light">Get Started</button>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card text-center card-pricing">
              <div class="card-pricing__header">
                <h4>Ultimate</h4>
                <p>Per Month</p>
                <h1 class="card-pricing__price"><span>&#8358;</span>15,000.00</h1>
              </div>
              <ul class="card-pricing__list">
                <li> <i class="ti-check"></i>Starter Kit</li>
                <li> <i class="ti-check"></i> Session open always</li>
                <li><i class="ti-check"></i>Unlimited Hours & Private Session</li>
                <li><i class="ti-check"></i>Live Video Class</li>
                <li><i class="ti-check"></i>Paid Certificate</li>
              </ul>
              <div class="card-pricing__footer">
                <button class="button button-light">Get Started</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Pricing section end =================-->    
<?php
include("footer.php");
?>