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
    <title>Home</title>
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
            <li><a class="dropdown-item" href="apppage/science.php">Science</a></li>
            <li><a class="dropdown-item" href="apppage/business.php">Business</a></li>
            <li><a class="dropdown-item" href="apppage/politics.php">Politics</a></li>
            <li><a class="dropdown-item" href="apppage/technology.php">Technology</a></li>
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
    <div class="card text-center mt-5">
    <div class="card-header">
        Welcome to the NYT feeds! 
    </div>
    <div class="card-body">
        
    <div class="row mt-2">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Business</h5>
                <p class="card-text">Exclusive reporting and breaking news about the most important business.</p>
                <a href="../apppage/business.php" class="btn btn-outline-dark">Business</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Politics</h5>
                <p class="card-text">A daily newsletter exploring the people, issues and ideas reshaping our political world.</p>
                <a href="../apppage/politics.php" class="btn btn-outline-dark">Politics</a>
            </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Science</h5>
                <p class="card-text">The latest science news and developments about space, animal behavior, plant life ... </p>
                <a href="../apppage/science.php" class="btn btn-outline-dark">Science</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Technology</h5>
                <p class="card-text">Discover the latest tech gadgets and innovations.</p>
                <a href="../apppage/technology.php" class="btn btn-outline-dark">Technology</a>
            </div>
            </div>
        </div>
    </div>

    </div>
    <div class="card-footer text-muted">
        Select your favourite news!
    </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>