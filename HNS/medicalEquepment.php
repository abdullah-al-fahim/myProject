<?php
include('dbConnection.php');
$sql = "SELECT * FROM assets_tb";
$result = $conn->query($sql);
$Products = $result->fetch_all(MYSQLI_ASSOC);

?>

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

    <!-- Start Services -->

    <div class="container rounded bg-light p-5" id="services">
        <h1 class="text-center pt-5 text-primary">Our Products</h1>
        <div class="row mt-5">

            <?php
            foreach ($Products as $key => $ProductItem) {

            ?>
                <div class="col-md-4 ">
                    <div class="card  text-center">
                        <img class="card-img-top shadow-lg imgSizing" src="Admin/image/<?= $ProductItem['product_image']; ?>" alt="">
                        <div class="card-body">
                            <h4 class="card-title  cimg"><?= $ProductItem['pname']; ?></h4>
                            <p>Price: <?= $ProductItem['psellingcost']; ?>/- Taka</p>
                            <a href="Requester/RequesterLogin.php?id=<?= $ProductItem['pid']; ?>" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>



        </div>
    </div>
    <!-- End Services -->

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
                    <p class="text-info">We will provid batter nursing services than other organization.We want to ensure our support door to door.</p>
                </div>
            </div>
            <hr class="bg-info">
            <div class="row">
                <div class="col  text-center">
                    <small>Copyright&#169;2021</small>
                </div>
                <a href="Admin/login.php" class="mr-5 adminDesign"><small class="">Admin Login</small></a>
            </div>
        </div>
    </footer> <!-- End Footer -->

    <!-- Boostrap JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>