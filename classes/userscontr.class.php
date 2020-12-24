<?php
// this upload insert something inside the database passing throug the user users.class.php
class UsersContr extends Users {

    public function createUser($email, $user, $pass, $firstname, $lastname) {

        $this->setUser($email, $user, $pass, $firstname, $lastname);
    }
   
};

?>