<?php session_start();
    $login="login.php";
    $subscribe="subscribe.php";
    $msg = "";
    if (isset($_SESSION['user'])) {
        $name = $_SESSION['user'];

        echo '<h5><span class="badge bg-dark m-1">'.$name.'</span></h5>';
        
    }else {
        header("location: login.php");
        // $msg = '<li class="nav-item"><a class="nav-link text-danger" href="'.$login.'">Log in</a></li><li class="nav-item"><a class="nav-link text-danger" href="'.$subscribe.'">Subscribe</a></li>';
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
    <title>NYT Feeds Politics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">NYT Feeds</a> -->
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
            <a class="btn btn-outline-dark mt-3" href="../logout.php" role="button">Log out</a>  
      </form>
    </div>
  </div>
</nav>

<div class="container mb-4">

  <div class="row mt-2">

        <div class="col-sm-6">
        <div class="card h-100">
          <img src="" class="card-img-top" id="picture0">
          <div class="card-body">
            <h5 class="card-title" id="demo0"></h5>
            <p class="card-text" id="abstract0"></p>
            <p class="text-muted fst-italic fw-lighter">
              Read full article <a href="" id="fullArticle0" class="text-reset">here!</a>
            </p>
            <p class="card-text"><small class="text-muted">Last updated:</small></p>
            <p class="card-text"><small class="text-muted fw-lighter" id="updated_date0"></small></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card h-100">
          <img src="" class="card-img-top" id="picture1">
          <div class="card-body">
            <h5 class="card-title" id="demo1"></h5>
            <p class="card-text" id="abstract1"></p>
            <p class="text-muted fst-italic fw-lighter">
              Read full article <a href="" id="fullArticle1" class="text-reset">here!</a>
            </p>
            <p class="card-text"><small class="text-muted">Last updated:</small></p>
            <p class="card-text"><small class="text-muted fw-lighter" id="updated_date1"></small></p>
          </div>
        </div>
      </div>
  
  </div>

  <div class="row mt-2">

        <div class="col-sm-6">
        <div class="card h-100">
          <img src="" class="card-img-top" id="picture2">
          <div class="card-body">
            <h5 class="card-title" id="demo2"></h5>
            <p class="card-text" id="abstract2"></p>
            <p class="text-muted fst-italic fw-lighter">
              Read full article <a href="" id="fullArticle2" class="text-reset">here!</a>
            </p>
            <p class="card-text"><small class="text-muted">Last updated:</small></p>
            <p class="card-text"><small class="text-muted fw-lighter" id="updated_date2"></small></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card h-100">
          <img src="" class="card-img-top" id="picture3">
          <div class="card-body">
            <h5 class="card-title" id="demo3"></h5>
            <p class="card-text" id="abstract3"></p>
            <p class="text-muted fst-italic fw-lighter">
              Read full article <a href="" id="fullArticle3" class="text-reset">here!</a>
            </p>
            <p class="card-text"><small class="text-muted">Last updated:</small></p>
            <p class="card-text"><small class="text-muted fw-lighter" id="updated_date3"></small></p>
          </div>
        </div>
      </div>
  
  </div>

  <div class="row mt-2">

        <div class="col-sm-6">
        <div class="card h-100">
          <img src="" class="card-img-top" id="picture4">
          <div class="card-body">
            <h5 class="card-title" id="demo4"></h5>
            <p class="card-text" id="abstract4"></p>
            <p class="text-muted fst-italic fw-lighter">
              Read full article <a href="" id="fullArticle4" class="text-reset">here!</a>
            </p>
            <p class="card-text"><small class="text-muted">Last updated:</small></p>
            <p class="card-text"><small class="text-muted fw-lighter" id="updated_date4"></small></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card h-100">
          <img src="" class="card-img-top" id="picture5">
          <div class="card-body">
            <h5 class="card-title" id="demo5"></h5>
            <p class="card-text" id="abstract5"></p>
            <p class="text-muted fst-italic fw-lighter">
              Read full article <a href="" id="fullArticle5" class="text-reset">here!</a>
            </p>
            <p class="card-text"><small class="text-muted">Last updated:</small></p>
            <p class="card-text"><small class="text-muted fw-lighter" id="updated_date5"></small></p>
          </div>
        </div>
      </div>
  
  </div>

  <div class="row mt-2">

        <div class="col-sm-6">
        <div class="card h-100">
          <img src="" class="card-img-top" id="picture6">
          <div class="card-body">
            <h5 class="card-title" id="demo6"></h5>
            <p class="card-text" id="abstract6"></p>
            <p class="text-muted fst-italic fw-lighter">
              Read full article <a href="" id="fullArticle6" class="text-reset">here!</a>
            </p>
            <p class="card-text"><small class="text-muted">Last updated:</small></p>
            <p class="card-text"><small class="text-muted fw-lighter" id="updated_date6"></small></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card h-100">
          <img src="" class="card-img-top" id="picture7">
          <div class="card-body">
            <h5 class="card-title" id="demo7"></h5>
            <p class="card-text" id="abstract7"></p>
            <p class="text-muted fst-italic fw-lighter">
              Read full article <a href="" id="fullArticle7" class="text-reset">here!</a>
            </p>
            <p class="card-text"><small class="text-muted">Last updated:</small></p>
            <p class="card-text"><small class="text-muted fw-lighter" id="updated_date7"></small></p>
          </div>
        </div>
      </div>
  
  </div>

  <div class="row mt-2">

        <div class="col-sm-6">
        <div class="card h-100">
          <img src="" class="card-img-top" id="picture8">
          <div class="card-body">
            <h5 class="card-title" id="demo8"></h5>
            <p class="card-text" id="abstract8"></p>
            <p class="text-muted fst-italic fw-lighter">
              Read full article <a href="" id="fullArticle8" class="text-reset">here!</a>
            </p>
            <p class="card-text"><small class="text-muted">Last updated:</small></p>
            <p class="card-text"><small class="text-muted fw-lighter" id="updated_date8"></small></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card h-100">
          <img src="" class="card-img-top" id="picture9">
          <div class="card-body">
            <h5 class="card-title" id="demo9"></h5>
            <p class="card-text" id="abstract9"></p>
            <p class="text-muted fst-italic fw-lighter">
              Read full article <a href="" id="fullArticle9" class="text-reset">here!</a>
            </p>
            <p class="card-text"><small class="text-muted">Last updated:</small></p>
            <p class="card-text"><small class="text-muted fw-lighter" id="updated_date9"></small></p>
          </div>
        </div>
      </div>
  
  </div>

</div>

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

<script src="../js/appbusiness.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>