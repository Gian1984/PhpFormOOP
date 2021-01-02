<?php

include "class-autoload.inc.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




if (isset($_POST['business'])){
  
    
  $usersObj = new UsersView();
                
                if ($usersObj->user_existsFav($user) != $user) {

                  $science = "";
                  $business = "";
                  $politics = "";
                  $technology= "";
                  
                  $usersObj = new UsersContr();
                  $usersObj->createUserFav($user, $science, $business, $politics, $technology);

                  $usersObj = new UsersView();
                  $id=$usersObj->id_recover($user);
                  
                
                  $usersObj = new UsersContr();
                  $usersObj->createFavouriteBusiness('<div class="card text-center mt-2">
                                              <div class="card-header">
                                              Business
                                              </div>
                                              <div class="card-body">
                                              <h5 class="card-title">Business</h5>
                                              <p class="card-text">Exclusive reporting and breaking news about the most important business.</p>
                                              <a href="../apppage/business.php" class="btn btn-outline-dark">Business</a>
                                              </div>
                                              <div class="card-footer text-muted">
                                              Business
                                              </div>
                                              </div>', $id);
            

                  // echo '<div class="container mt-3"> 
                  //       <div class="row">
                  //       <div class="col"></div>
                  //       <div class="col">
                  //         <div class="alert alert-success text-center" role="alert">
                  //             Added to your favourite!
                  //         </div>
                  //       </div>
                  //       <div class="col"></div>
                  //       </div>
                  //       </div>';

                  echo '';

                } else {

                  
                  $usersObj = new UsersView();
                  $id=$usersObj->id_recover($user);
                  $usersObj = new UsersContr();
                  $usersObj->createFavouriteBusiness('<div class="card text-center mt-2">
                                              <div class="card-header">
                                              Business
                                              </div>
                                              <div class="card-body">
                                              <h5 class="card-title">Business</h5>
                                              <p class="card-text">Exclusive reporting and breaking news about the most important business.</p>
                                              <a href="../apppage/business.php" class="btn btn-outline-dark">Business</a>
                                              </div>
                                              <div class="card-footer text-muted">
                                              Business
                                              </div>
                                              </div>', $id);
                  
                  // echo '<div class="container mt-3"> 
                  //       <div class="row">
                  //       <div class="col"></div>
                  //       <div class="col">
                  //         <div class="alert alert-success text-center" role="alert">
                  //             Added to your favourite!
                  //         </div>
                  //       </div>
                  //       <div class="col"></div>
                  //       </div>
                  //       </div>';
                  
                  echo '';

                }

} else {

  
  // echo '<div class="container mt-3"> 
  // <div class="row">
  // <div class="col"></div>
  // <div class="col">
  //     <div class="alert alert-danger text-center" role="alert">
  //     Something goes wrong!
  //     </div>
  // </div>
  // <div class="col"></div>
  // </div>
  // </div>'; 

  echo ''; 
}


if (isset($_POST['politics'])){
  
    
    $usersObj = new UsersView();
                  
                  if ($usersObj->user_existsFav($user) != $user) {
  
                    $science = "";
                    $business = "";
                    $politics = "";
                    $technology= "";
                    
                    $usersObj = new UsersContr();
                    $usersObj->createUserFav($user, $science, $business, $politics, $technology);
  
                    $usersObj = new UsersView();
                    $id=$usersObj->id_recover($user);
                    
                  
                    $usersObj = new UsersContr();
                    $usersObj->createFavouritePolitics('<div class="card text-center mt-2">
                                                <div class="card-header">
                                                Politics
                                                </div>
                                                <div class="card-body">
                                                <h5 class="card-title">Business</h5>
                                                <p class="card-text">Exclusive reporting and breaking news about the most important business.</p>
                                                <a href="../apppage/politics.php" class="btn btn-outline-dark">Business</a>
                                                </div>
                                                <div class="card-footer text-muted">
                                                Politics
                                                </div>
                                                </div>', $id);
  
                    echo '';
  
                  } else {
  
                    
                    $usersObj = new UsersView();
                    $id=$usersObj->id_recover($user);
                    $usersObj = new UsersContr();
                    $usersObj->createFavouritePolitics('<div class="card text-center mt-2">
                                                <div class="card-header">
                                                Politics
                                                </div>
                                                <div class="card-body">
                                                <h5 class="card-title">Politics</h5>
                                                <p class="card-text">A daily newsletter exploring the people, issues and ideas reshaping our political world.</p>
                                                <a href="../apppage/politics.php" class="btn btn-outline-dark">Business</a>
                                                </div>
                                                <div class="card-footer text-muted">
                                                Politics
                                                </div>
                                                </div>', $id);
                    
                    echo '';
  
                  }
  
  } else {
    echo ''; 
  }

  if (isset($_POST['science'])){
  
    
    $usersObj = new UsersView();
                  
                  if ($usersObj->user_existsFav($user) != $user) {
  
                    $science = "";
                    $business = "";
                    $politics = "";
                    $technology= "";
                    
                    $usersObj = new UsersContr();
                    $usersObj->createUserFav($user, $science, $business, $politics, $technology);
  
                    $usersObj = new UsersView();
                    $id=$usersObj->id_recover($user);
                    
                  
                    $usersObj = new UsersContr();
                    $usersObj->createFavouriteTechnology('<div class="card text-center mt-2">
                                                <div class="card-header">
                                                Technology
                                                </div>
                                                <div class="card-body">
                                                <h5 class="card-title">Technology</h5>
                                                <p class="card-text">Discover the latest tech gadgets, innovations, energy & environment.</p>
                                                <a href="../apppage/technology.php" class="btn btn-outline-dark">Business</a>
                                                </div>
                                                <div class="card-footer text-muted">
                                                Technology
                                                </div>
                                                </div>', $id);
  
                    echo '';
  
                  } else {
  
                    
                    $usersObj = new UsersView();
                    $id=$usersObj->id_recover($user);
                    $usersObj = new UsersContr();
                    $usersObj->createFavouriteTechnology('<div class="card text-center mt-2">
                                                <div class="card-header">
                                                Technology
                                                </div>
                                                <div class="card-body">
                                                <h5 class="card-title">Technology</h5>
                                                <p class="card-text">Discover the latest tech gadgets, innovations, energy & environment.</p>
                                                <a href="../apppage/technology.php" class="btn btn-outline-dark">Business</a>
                                                </div>
                                                <div class="card-footer text-muted">
                                                Technology
                                                </div>
                                                </div>', $id);
                    
                    echo '';
  
                  }
  
  } else {
    echo ''; 
  }


  if (isset($_POST['science'])){
  
    
    $usersObj = new UsersView();
                  
                  if ($usersObj->user_existsFav($user) != $user) {
  
                    $science = "";
                    $business = "";
                    $politics = "";
                    $technology= "";
                    
                    $usersObj = new UsersContr();
                    $usersObj->createUserFav($user, $science, $business, $politics, $technology);
  
                    $usersObj = new UsersView();
                    $id=$usersObj->id_recover($user);
                    
                  
                    $usersObj = new UsersContr();
                    $usersObj->createFavouriteScience('<div class="card text-center mt-2">
                                                <div class="card-header">
                                                Science
                                                </div>
                                                <div class="card-body">
                                                <h5 class="card-title">Science</h5>
                                                <p class="card-text">The latest science news and developments about space, animal behavior, plant life ...</p>
                                                <a href="../apppage/science.php" class="btn btn-outline-dark">Business</a>
                                                </div>
                                                <div class="card-footer text-muted">
                                                Science
                                                </div>
                                                </div>', $id);
  
                    echo '';
  
                  } else {
  
                    
                    $usersObj = new UsersView();
                    $id=$usersObj->id_recover($user);
                    $usersObj = new UsersContr();
                    $usersObj->createFavouriteScience('<div class="card text-center mt-2">
                                                <div class="card-header">
                                                Science
                                                </div>
                                                <div class="card-body">
                                                <h5 class="card-title">Science</h5>
                                                <p class="card-text">The latest science news and developments about space, animal behavior, plant life ...</p>
                                                <a href="../apppage/science.php" class="btn btn-outline-dark">Business</a>
                                                </div>
                                                <div class="card-footer text-muted">
                                                Science
                                                </div>
                                                </div>', $id);
                    
                    echo '';
  
                  }
  
  } else {
    echo ''; 
  }

?>