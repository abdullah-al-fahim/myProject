<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">
  <title>HNS</title>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-info pl-5 fixed-top">
    <a href="index.php" class="navbar-brand "><img src="images/HNS (2).png" class="rounded-circle mb-1" alt="" style="height:45px; ">HNS</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#about" class="nav-link">About Us</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(images/nurse.jpg);">
    <div class="mainHeading">
      <h1 class="text-primary font-weight-bold">Welcome to Home Nursing Services</h1>
      <p class="font-italic">Health is wealth.</p>
      <a href="#registration" class="btn btn-outline-info">Sign Up</a>
    </div>
  </header> <!-- End Header Jumbotron -->
  <!-- Start Services -->
  <div class="container rounded bg-info  p-5" id="services">
    <h1 class="text-center pb-5 text-white">Our Services</h1>
    <div class="row">
      <div class="col-md-4 ">
        <div class="card  text-center">
          <img class="card-img-top shadow-lg imgSizing" src="images/newborn1.jpg" alt="">
          <div class="card-body">
            <h3 class="card-title  cimg">Baby Care</h3>
            <hr>
            <p class="card-text mt-2">A new born baby is very delicate and needs special attention and care. our care givers are...</p>
            <a href="babyCare.php" class="btn btn-primary">See More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="card  text-center">
          <img class="card-img-top shadow-lg imgSizing" src="images/oldCare.jpg" alt="">
          <div class="card-body">
            <h3 class="card-title cimg">Elderly Care</h3>
            <hr>
            <p class="card-text mt-2">Worried about the medical needs of your parents back home? Avail the Care Plan package from HNS......</p>
            <a href="elderlyCare.php" class="btn btn-primary">See More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card  text-center">
          <img class="card-img-top shadow-lg imgSizing" src="images/covid19.jpg" alt="">
          <div class="card-body">
            <h3 class="card-title  cimg">Covid Care</h3>
            <hr>
            <p class="card-text mt-2">We are supporting covid19 patient and other critical disease at home.Available 24x7 days...</p>
            <a href="spacialCare.php" class="btn btn-primary">See More</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-4">
        <div class="card  text-center">
          <img class="card-img-top shadow-lg imgSizing" src="images/hospitalAttendent.jpg" alt="">
          <div class="card-body">
            <h3 class="card-title  cimg">Hospital Attendent</h3>
            <hr>
            <p class="card-text mt-2">Do your parents need attention round the clock? Is a family member suffering from a chronic...</p>
            <a href="hospitalAttendent.php" class="btn btn-primary">See More...</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="card  text-center">
          <img class="card-img-top shadow-lg imgSizing" src="images/Physiotherapy.jpg" alt="">
          <div class="card-body">
            <h3 class="card-title  cimg">Physiotherapy</h3>
            <hr>
            <p class="card-text mt-2">Whether it’s a lingering back paina frozen shoulder or a sports injury that you’re looking to...</p>
            <a href="physiotherapy.php" class="btn btn-primary">See More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card  text-center">
          <img class="card-img-top shadow-lg imgSizing" src="images/medicalEquipment.jpg" alt="">
          <div class="card-body">
            <h3 class="card-title  cimg">Medical Equepment</h3>
            <hr>
            <p class="card-text mt-2">Getting medical equipment on rent or purchase at your doorstep has never been this convenient...</p>
            <a href="medicalEquepment.php" class="btn btn-primary">Buy</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Services -->

  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->

  <div class="container-flued mt-4" id="about">
    <div class="mb-4 pt-3 pb-4">

      <div class="container rounded bg-light p-5">
        <h2 class="text-center text-info font-weight-bold">About Us</h2>
        <div class="row mt-5">
          <div class="col-md-4 "><img class="card-img-top" src="images/physiotherapy.jpg" alt="">
            <div class="card-body">
            </div>
          </div>
          <div class="col-md-8">
            <p>Home Nursing Services is a organization we want nursing support at home.We work for new born baby,oldage,and covid19 patient.We have day-care nurses.The support available for 24x7 houres.</p>
            <p>We also provide medical equipment like as thermometer,wheel chair, blood pressure meatchin etc</p>
            <p>We strongly monitoring and supervision is in place to ensure that the services are properly rendered through different checklists as well as quarterly meeting with the caregivers to mitigate any challenge or probable risks.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Introduction Section End-->

  <!-- Start Happy Customer  -->
  <div class="jumbotron bg-info" id="Customer">
    <!-- Start Happy Customer Jumbotron -->
    <div class="container">
      <!-- Start Customer Container -->
      <h2 class="text-center text-white">Patient Review</h2>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/AB.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Abdur Rahman</h4>
              <p class="card-text">It's really good.The nurses are very friendly.I hope they will do more better.</p>
              <span class="reviewColor"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            </div>
          </div>
        </div> <!-- End Customer 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/sami.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Samiul Islam</h4>
              <p class="card-text">The behaveor of nurses are realy good.And other services is also nice. </p>
              <span class="reviewColor"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
            </div>
          </div>
        </div> <!-- End Customer 2nd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/nayem.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Md. Nayeem</h4>
              <p class="card-text">Very helpful for old People.The institution is best for health services</p>
              <span class="reviewColor"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></span>
            </div>

          </div>
        </div> <!-- End Customer 3rd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/sojib.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Mr. Sojib</h4>
              <p class="card-text">Best for nursing services at home.They are so careful about patient.</p>
              <span class="reviewColor"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
            </div>
          </div>
        </div> <!-- End Customer 4th Column-->
      </div> <!-- End Customer Row-->
    </div> <!-- End Customer Container -->
  </div> <!-- End Customer Jumbotron -->

  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="mb-4 ml-5">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <div class="col mr-5 mb-4 pt-3 pl-4  bg-info rounded">
        <div class="row mt-4">
          <div class="col text-white">
            <h3>Head-Office:-</h3>
            <p>Gulshan, Dhaka, Bangladesh.</p>
            <span>Phone: 01862500366</span><br>
            <span>Email: abdurrahman9966@gmail.com</span>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col text-white">
            <h3>Branch-Office:-</h3>
            <p>Agrabad, Ctg, Bangladesh.</p>
            <span>Phone: 01862500400</span><br>
            <span>Email: fahim@gmail.com</span>
          </div>
        </div>
      </div> <!-- End Contact Us 2nd Column-->
      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer>
    <div class="container-fluid bg-dark mt-0 p-3 text-light">
      <div class="row">
        <div class="col pl-5 customIcon">
          <div class="do"><a href="#"><i class="fab fa-facebook fa-2x"></i></a></div>
          <div><a href="#"><i class="fas fa-envelope fa-2x"></i></a></div>
          <div><a href="#"><i class="fab fa-instagram fa-2x"></i></a></div>
          <div><a href="#"><i class="fab fa-twitter fa-2x"></i></a></div>
        </div>
        <div class="col ">
          <h5>LINK:</h5>
          <div class="linkDesign"><small><a href="#">About Us</a></small></div>
          <div class="linkDesign"><small><a href="#">Contact Us</a></small></div>
          <div class="linkDesign"><a href="#">Emargency: 01748703196</a></div>
        </div>
        <div class="col">
          <h5>Our Mission & Vission:</h5>
          <p class="text-info">We will provide batter nursing services than other organization.We want to ensure our support door to door.</p>
        </div>
      </div>
      <hr class="bg-info">
      <div class="row">
        <div class="col  text-center">
          <small>Copyright&#169;2022</small>
        </div>
        <a href="Admin/login.php" class="mr-5 adminDesign"><small class="">Admin Login</small></a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>