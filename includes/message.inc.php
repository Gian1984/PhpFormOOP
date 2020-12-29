<?php

if(isset($_POST['logout'])){ //logging out
    session_destroy();
    header("location: logout.php");
}

include "includes/class-autoload.inc.php";


    if (isset($_REQUEST['submit'])){
    

        extract($_REQUEST);
        

        if(!empty($email) &&  !empty($messages)) {
                
                
                $usersObj = new UsersContr();
                $usersObj->createMessages($email, $messages);

                echo '<div class="container mt-4"> 
                      <div class="row">
                      <div class="col"></div>
                      <div class="col">
                      <div class="alert alert-success text-center" role="alert">
                      Message has been sent!
                      </div>
                    </div>
                    <div class="col"></div>
                    </div>
                    </div>';
            
        }

        else
        {
            echo '<div class="container mt-4"> 
                    <div class="row">
                    <div class="col"></div>
                    <div class="col">
                      <div class="alert alert-danger text-center" role="alert">
                      Something goes wrong!
                    </div>
                  </div>
                  <div class="col"></div>
                  </div>
                  </div>'; 
        }

    }
    
?>