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
                <div class="form col-lg-6 mt-5" method="POST" action="">
                    <div class="col mt-2">
                    <label for="exampleInputEmail1">Insert First Name:</label>
                    <input type="text" name="first" id="first" class="form-control" placeholder="First name" require>
                    </div>
                    <div class="col mt-2">
                    <label for="exampleInputEmail1">Insert Last Name:</label>
                    <input type="text" name="last" id="last" class="form-control" placeholder="Last name" require>
                    </div>
                    <div class="col mt-2 mb-2">
                    <label for="exampleInputEmail1">Insert Birth date:</label>
                    <input type="text" name="birth" id="birth" class="form-control" placeholder="Birth date" require>
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

    // Output the user Gianluca from already on the database:

    // $usersObj = new UsersView();  
    // $usersObj->showUser("Laura");

    // Insert the value every time i refresh the pages:

    // $usersObj2 = new UsersContr();
    // $usersObj2->createUser("Laura", "Matveeff", "04-08-1983");    

    if (isset($_REQUEST['submit'])){
    

        extract($_REQUEST);
        

        if(!empty($first) && !empty($last) && !empty($birth)){

            $usersObj2 = new UsersContr();
            $usersObj2->createUser($first, $last, $birth);
            // $usersObj2->createUser($_POST['first'], $_POST['last'], $_POST['birth']);

            echo "<p>You have been registerd on our sistem</p>";
            header('Location: home.php');
             exit;
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