<?php 

 include "includes/subscribe.inc.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/log.sub.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
      <form class="d-flex">
        <div class="d-grid gap-2 d-md-block">
            <a class="btn btn-outline-light" href="login.php" role="button">Log In</a>  
        </div>
      </form>
    </div>
  </div>
</nav>
<section class="row main-image">
<div class="container">

    <div class="card text-center m-4 mx-auto" style="width: 40rem;">
    <div class="card-header text-white bg-secondary">
        <img src="../img/370px-NewYorkTimes.svg.png" style="" alt="logo" class="img-thumbnail">
    </div>
    <div class="card-body">
        <h5 class="card-title fw-lighter">Please fill the fields to subscribe</h5>
    <div class="row">

        <div class="col"></div>

        <div class="col">
            <form>
                <div class="form col-lg mt-2" method="POST" action="">

                    <div class="col mt-2 fw-lighter">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    </div>

                    <div class="col mt-2 fw-lighter">
                        <label for="username">Username:</label>
                        <input type="text" name="user" id="user" class="form-control" placeholder="Username" required >
                    </div>

                    <div class="col mt-2 fw-lighter">
                        <label for="password">Password:</label>
                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required >
                    </div>

                    
                    <div class="col mt-2 fw-lighter">
                        <label for="firstname">First Name:</label>
                        <input type="text" name="first" id="first" class="form-control" placeholder="First name" required >
                    </div>

                    <div class="col mt-2 mb-2 fw-lighter">
                        <label for="lastname">Last Name:</label>
                        <input type="text" name="last" id="last" class="form-control" placeholder="Last name" required >
                    </div>
                    

                    <input type="submit" name="submit" value="Subscribe" style="width:auto">
                </div>
            </form>
        </div>

        <div class="col"></div>

        </div>
    </div>
    <div class="card-footer text-white bg-secondary">
        The best way to keep up to date!
    </div>
    </div>

</div>
</section>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>