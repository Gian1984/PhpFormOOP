<?php session_start();
    $login="login.php";
    $subscribe="subscribe.php";
    $msg = "";
    if (isset($_SESSION['user'])) {
        $name = $_SESSION['user'];

        echo 'Welcome '.$name.'</a></li>';
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
    <title>Form php oop mvc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
        <div class="d-grid gap-2 d-md-block">
            <a class="btn btn-outline-success" href="logout.php" role="button">Log out</a>  
            <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
        </div>
      </form>
    </div>
  </div>
</nav>

<div class="container">
    <div class="card mb-3">
      <img src="" class="card-img-top" id="picture0" alt="...">
      <div class="card-body">
        <h5 class="card-title" id="demo0"></h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card mb-3">
      <img src="" class="card-img-top" id="picture1" alt="...">
      <div class="card-body">
        <h5 class="card-title" id="demo1"></h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card mb-3">
      <img src="" class="card-img-top" id="picture2" alt="...">
      <div class="card-body">
        <h5 class="card-title" id="demo2"></h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card mb-3">
      <img src="" class="card-img-top" id="picture3" alt="...">
      <div class="card-body">
        <h5 class="card-title" id="demo3"></h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card mb-3">
      <img src="" class="card-img-top" id="picture4" alt="...">
      <div class="card-body">
        <h5 class="card-title" id="demo4"></h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card mb-3">
      <img src="" class="card-img-top" id="picture5" alt="...">
      <div class="card-body">
        <h5 class="card-title" id="demo5"></h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card mb-3">
      <img src="" class="card-img-top" id="picture6" alt="...">
      <div class="card-body">
        <h5 class="card-title" id="demo6"></h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card mb-3">
      <img src="" class="card-img-top" id="picture7" alt="...">
      <div class="card-body">
        <h5 class="card-title" id="demo7"></h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card mb-3">
      <img src="" class="card-img-top" id="picture8" alt="...">
      <div class="card-body">
        <h5 class="card-title" id="demo8"></h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card mb-3">
      <img src="" class="card-img-top" id="picture9" alt="...">
      <div class="card-body">
        <h5 class="card-title" id="demo9"></h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
</div>

    
<script src="js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>