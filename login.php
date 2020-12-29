<?php 

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

 include "includes/class-autoload.inc.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <form class="d-flex">
        <div class="d-grid gap-2 d-md-block">
            <a class="btn btn-outline-dark" href="subscribe.php" role="button">Subscribe</a>  
        </div>
      </form>
    </div>
  </div>
</nav>

<div class="container">

    <div class="row">

        <div class="col"></div>

        <div class="col">
            <form>
                <div class="form col-lg mt-5" method="POST" action="">
                    <div class="col mt-2">
                        <label for="username">Username:</label>
                        <input type="text" name="user" id="user" class="form-control" placeholder="Username" required >
                    </div>
                    <div class="col mt-2 mb-2">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required >
                    </div>
                    <div class="col mt-2 mb-2">
                        <label for="password">Password:</label>
                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required >
                    </div>                    
                    <!-- <button type="submit" name="submit" class="btn btn-primary mt-2">Send</button> -->
                    <input type="submit" name="submit" value="Send" style="width:auto">
                </div>
            </form>
        </div>

        <div class="col"></div>
    
    </div>

</div>
    
<?php



    if (isset($_REQUEST['submit'])){
    

        extract($_REQUEST);
        

        if(!empty($user) &&  !empty($email) &&  !empty($pass)) {
                // var_dump($pass);
                
                $usersObj = new UsersView();
                
                if ($usersObj->user_exists($user) == $user) {
                    
                    if ($usersObj->email_exist($email) == $email) {
                        
                        $hashs=$usersObj->pass_exist($user);

                        if (password_verify ($pass, $hashs)){

                            session_start();
                    
                            $_SESSION['user'] = $email;
                                                       
                            header('Location: home.php');

                            exit;

                        

                        } else {
                            echo '<div class="container">
                                    <div class="row">
                                        <div class="col"></div>
                                        <div class="col mt_2">Pass does not match!</div>
                                        <div class="col"></div>
                                    </div>
                                </div>';
                        }    
                    } else {
                        echo '<div class="container">
                            <div class="row">
                                <div class="col"></div>
                                <div class="col mt_2">Email does not exist!</div>
                                <div class="col"></div>
                            </div>
                        </div>'; 

                    }
                    
                }  
                else
                {
                    echo '<div class="container">
                            <div class="row">
                                <div class="col"></div>
                                <div class="col mt_2">User does not exist!</div>
                                <div class="col"></div>
                            </div>
                        </div>'; 
                }     
            
        }

        else
        {
            echo '<div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col mt_2">Something goes wrong!</div>
                        <div class="col"></div>
                    </div>
                </div>'; 
        }

    }
    
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>