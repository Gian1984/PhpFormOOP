<?php

    include "class-autoload.inc.php";

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
                            echo '<div class="container mt-3"> 
                                    <div class="row">
                                    <div class="col"></div>
                                    <div class="col">
                                        <div class="alert alert-danger text-center" role="alert">
                                        Pass does not match!
                                        </div>
                                    </div>
                                    <div class="col"></div>
                                    </div>
                                    </div>';


                                
                        }    
                    } else {
                        echo '<div class="container mt-3"> 
                                <div class="row">
                                <div class="col"></div>
                                <div class="col">
                                    <div class="alert alert-danger text-center" role="alert">
                                    This mail does not exist!
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
                                This user does not exist!
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