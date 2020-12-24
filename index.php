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
    <title>Form php oop mvc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>


<div class="container">

    <div class="row">

        <div class="col"></div>

        <div class="col">
            <form>
                <div class="form col-lg mt-5" method="POST" action="">
                    <div class="col mt-2">
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email" required >
                    </div>
                    <div class="col mt-2">
                        <label for="username">Username:</label>
                        <input type="text" name="user" id="user" class="form-control" placeholder="Username" required >
                    </div>
                    <div class="col mt-2">
                        <label for="password">Password:</label>
                        <input type="text" name="pass" id="pass" class="form-control" placeholder="Password" required >
                    </div>
                    <div class="col mt-2">
                        <label for="firstname">First Name:</label>
                        <input type="text" name="first" id="first" class="form-control" placeholder="First name" required >
                    </div>
                    <div class="col mt-2 mb-2">
                        <label for="lastname">Last Name:</label>
                        <input type="text" name="last" id="last" class="form-control" placeholder="Last name" required >
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

    // Output the user from already on the database:

    // $usersObj = new UsersView();  
    // $usersObj->showUser("Laura");

    // Insert the value every time i refresh the pages:

    // $usersObj2 = new UsersContr();
    // $usersObj2->createUser("Laura", "Matveeff", "04-08-1983");    

    if (isset($_REQUEST['submit'])){
    

        extract($_REQUEST);
        

        if(!empty($user) &&  !empty($email) && !empty($first) && !empty($last) && !empty($email)) {

                $usersObj = new UsersView();
                
                if ($usersObj->user_exists($user) != $user ) {

                $usersObj = new UsersContr();
                $usersObj->createUser($email, $user, $pass, $first, $last);
            

                echo "<p>You have been registerd on our sistem</p>";
                header('Location: home.php');

                exit;
                }  
                else
                {
                    echo '<div class="container">
                            <div class="row">
                                <div class="col"></div>
                                <div class="col mt_2">User already taken!</div>
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