<?php session_start();
    $login="login.php";
    $subscribe="subscribe.php";
    $msg = "";
    if (isset($_SESSION['user'])) {
        $name = $_SESSION['user'];

        echo '<h5><span class="badge bg-dark m-2">'.$name.'</span></h5>';
        
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
    <title>NYT Feeds Science</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">NYT Feeds</a>
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
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
        <div class="d-grid gap-2 d-md-block">
            <a class="btn btn-outline-dark" href="../logout.php" role="button">Log out</a>  
            <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
        </div>
      </form>
    </div>
  </div>
</nav>

<div class="container">
    <div class="card mb-3">
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
    <div class="card mb-3">
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
    <div class="card mb-3">
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
    <div class="card mb-3">
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
    <div class="card mb-3">
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
    <div class="card mb-3">
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
    <div class="card mb-3">
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
    <div class="card mb-3">
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
    <div class="card mb-3">
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
    <div class="card mb-3">
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

    
<script src="../js/appscience.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>