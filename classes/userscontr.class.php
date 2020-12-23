<?php
// this upload insert something inside the database passing throug the user users.class.php
class UsersContr extends Users {

    public function createUser($firstname, $lastname, $birthdate) {

        $this->setUser($firstname, $lastname, $birthdate);
    }
   
}

?>