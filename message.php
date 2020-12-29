
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
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

    <div class="card text-center mt-5">
    <div class="card-header">
        Write us your opinions or ideas to make us greater!
    </div>
    <div class="card-body">
    <h5 class="card-title mb-2">Please fill the fields to send us a message</h5>
            <form>
            <div class="form-group mt-2">
                <label for="exampleFormControlInput1">Email address:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
            </div>
            
            <div class="form-group mt-2 mb-2">
                <label for="exampleFormControlTextarea1">Message:</label>
                <textarea class="form-control" id="messages" name="messages" rows="3" required></textarea>
            </div>
            <input type="submit" name="submit" value="Send" style="width:auto">
        </form>

    </div>
    <div class="card-footer text-muted">
        Thanks for your feedback!
    </div>
    </div>

</div>
<?php 
    include "includes/message.inc.php"
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>