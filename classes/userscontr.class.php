<?php
// this upload insert something inside the database passing throug the user users.class.php
class UsersContr extends Users {

    public function createUser($email, $user, $hashs, $firstname, $lastname) {

        $this->setUser($email, $user, $hashs, $firstname, $lastname);
    }

    public function createMessages($email, $messages) {

        $this->setMessage($email, $messages);
    }
   
};



?>