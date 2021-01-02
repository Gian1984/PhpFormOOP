<?php session_start();
    $login="login.php";
    $subscribe="subscribe.php";
    $msg = "";
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];


        echo'<form class="d-flex bg-dark">
              <h5><span class="badge bg-dark ml-4 mt-3 fw-lighter">Welcome '.$user.' !</span></h5>  
            </form>';
        
    }else {
        header("location: login.php");
    }

    if(isset($_POST['logout'])){ //logging out
        session_destroy();
        header("location: logout.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/message.css">
</head>
<body>

<!-- start navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    
    <img src="../img/370px-NewYorkTimes.svg.png" style="" alt="logo" class="img-thumbnail">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../message.php">Write us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../favourites.php">Favourites</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../apppage/science.php">Science</a></li>
            <li><a class="dropdown-item" href="../apppage/business.php">Business</a></li>
            <li><a class="dropdown-item" href="../apppage/politics.php">Politics</a></li>
            <li><a class="dropdown-item" href="../apppage/technology.php">Technology</a></li>
          </ul>
        </li>
      </ul>
      
      <form class="d-flex">
            <a class="btn btn-outline-light mt-3" href="../logout.php" role="button">Log out</a>  
      </form>
    </div>
  </div>
</nav>

<!-- end navabar -->

<section class="row main-image">

<div class="container">

    <div class="card text-center mt-5 mb-3 mx-auto" style="max-width: 40rem;">
    <div class="card-header text-white bg-secondary">
        Write us your opinions or ideas to make us greater!
    </div>
    <div class="card-body">
    
            <form>
            <div class="form-group mt-2 fw-lighter">
                <label for="exampleFormControlInput1">Email address:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
            </div>
            
            <div class="form-group mt-2 mb-2 fw-lighter">
                <label for="exampleFormControlTextarea1">Message:</label>
                <textarea class="form-control" id="messages" name="messages" rows="3" required></textarea>
            </div>
            <input type="submit" name="submit" value="Send" style="width:auto">
        </form>

    </div>
    <div class="card-footer text-white bg-secondary">
        Thanks for your feedback!
    </div>
    </div>

</div>
<?php 
    include "includes/message.inc.php"
?>

  </section>

<!----------- Footer ------------>
<footer class="footer-bs">
        <div class="row">
        	<div class="col-md-3 footer-brand animated fadeInLeft">
          <div class="text-center mb-3">
            <img src="../img/nytfeeds.png" style="width:100px;height:100px;" alt="logo" class="img-thumbnail">
            </div>
                <p>© 2020 Createweb.info, All rights reserved</p>
            </div>
        	<div class="col-md-4 footer-nav animated fadeInUp">
            	<div class="col-md-6">
                    <ul class="list">
                        <li><a href="https://www.createweb.info/">About Us</a></li>
                        <li><a href="../message.php">Contacts</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        	<div class="col-md-2 footer-social animated fadeInDown">
            	<h4>Follow Us</h4>
            	<ul>
                	<li><a href="https://www.facebook.com/createwebinfo/about/?ref=page_internal">Facebook</a></li>
                	<li><a href="https://twitter.com/createwebinfo">Twitter</a></li>
                	<li><a href="https://www.instagram.com/createwebinfo/">Instagram</a></li>
                </ul>
            </div>
        	<div class="col-md-3 footer-ns animated fadeInRight">
            	<h4>Newsletter</h4>
                <p>Join the our universe and subscribe to our newsletter! Your benefits: ... Exclusive offers ... Promotional discounts ... Vouchers ... New ...</p>
                <p>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                      </span>
                    </div><!-- /input-group -->
                 </p>
            </div>
        </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>