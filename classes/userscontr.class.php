<?php
// this upload insert something inside the database passing throug the user users.class.php
class UsersContr extends Users {

    // function to send user data to the database
    public function createUser($email, $user, $hashs, $firstname, $lastname) {

        $this->setUser($email, $user, $hashs, $firstname, $lastname);
    }



    // Working with message -> function to send user name & message to the database
    public function createMessages($email, $messages) {

        $this->setMessage($email, $messages);
    }




    //Working with favourite

    public function createUserFav($user, $science, $business, $politics, $technology) {

        $this->setUserFav($user, $science, $business, $politics, $technology);
    }

    // function to send user name & favourite to the database
    public function createFavouriteBusiness($business, $id) {

        $this->setFavouriteBusiness($business, $id);
    }

    public function createFavouriteScience($science, $id) {

        $this->setFavouriteScience($science, $id);
    }

    public function createFavouritePolitics($politics, $id) {

        $this->setFavouritePolitics($politics, $id);
    }

    public function createFavouriteTechnology($technology, $id) {

        $this->setFavouriteTechnology($technology, $id);
    }
   
};



?>