
<?php

// on favourite page echo the favourite categories

include "class-autoload.inc.php";

$usersObj = new UsersView();
        
        if ($usersObj->user_existsFav($user) == $user) {

            $usersObj = new UsersView();
            $science=$usersObj->science_recover($user);
            $business=$usersObj->business_recover($user);
            $politics=$usersObj->politics_recover($user);
            $technology=$usersObj->technology_recover($user);

            echo $business;
            echo $science;
            echo $politics;
            echo $technology;

        } else {

            echo 'Still no favourite added';

        }
        

        // remove favs

        if (isset($_POST['business'])){
  
    
            $usersObj = new UsersView();
            $id=$usersObj->id_recover($user);
            $usersObj = new UsersContr();
            $usersObj->createFavouriteBusiness('', $id);
            echo'';
            header("Refresh:0");
        } else {
            echo'';
        }

        if (isset($_POST['science'])){
  
    
            $usersObj = new UsersView();
            $id=$usersObj->id_recover($user);
            $usersObj = new UsersContr();
            $usersObj->createFavouriteScience('', $id);
            echo'';
            header("Refresh:0");
        } else {
            echo'';
        }

        if (isset($_POST['technology'])){
  
    
            $usersObj = new UsersView();
            $id=$usersObj->id_recover($user);
            $usersObj = new UsersContr();
            $usersObj->createFavouriteTechnology('', $id);
            echo'';
            header("Refresh:0");
        } else {
            echo'';
        }

        if (isset($_POST['politics'])){
  
    
            $usersObj = new UsersView();
            $id=$usersObj->id_recover($user);
            $usersObj = new UsersContr();
            $usersObj->createFavouritePolitics('', $id);
            echo'';
            header("Refresh:0");
        } else {
            echo'';
        }

?>