<?php
    include "class-autoload.inc.php";
    // Output the user from already on the database:

    // $usersObj = new UsersView();  
    // $usersObj->showUser("Laura");

    // Insert the value every time i refresh the pages:

    // $usersObj2 = new UsersContr();
    // $usersObj2->createUser("Laura", "Matveeff", "04-08-1983");    

    if (isset($_REQUEST['submit'])){
    

        extract($_REQUEST);
        

        if(!empty($user) &&  !empty($email) && !empty($first) && !empty($last) && !empty($email)) {

                $options = [
                    'cost' => 12,
                ];
            
            
                $hashs = password_hash($pass, PASSWORD_BCRYPT , $options);
                

                $usersObj = new UsersView();
                
                if ($usersObj->user_exists($user) != $user) {
                    
                    if ($usersObj->email_exist($email) != $email) {                        

                        $usersObj = new UsersContr();
                        $usersObj->createUser($email, $user, $hashs, $first, $last);
            

                        echo "<p>You have been registerd on our sistem</p>";
                        header('Location: login.php');

                        exit;
                    } else {
                        echo '<div class="container mt-3"> 
                                <div class="row">
                                <div class="col"></div>
                                <div class="col">
                                    <div class="alert alert-danger text-center" role="alert">
                                    Email already taken!
                                </div>
                                </div>
                                <div class="col"></div>
                                </div>
                                </div>'; 

                    }
                    
                }  
                else
                {
                    echo '<div class="container mt-3"> 
                            <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <div class="alert alert-danger text-center" role="alert">
                                User already taken!
                            </div>
                            </div>
                            <div class="col"></div>
                            </div>
                            </div>'; 
                }     
            
        }

        else
        {
            echo '<div class="container mt-3"> 
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