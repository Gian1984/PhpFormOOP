
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

            echo 'something goes wrong';

        }

?>