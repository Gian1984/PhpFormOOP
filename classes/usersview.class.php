<?php
// this class handle the view of the users
class UsersView extends Users {

    public function showUser($name){ // pass a parameter $name that i must query coz it's the same i'm gonna asking from the database

        $results = $this->getUser($name);    //i  refer to a method extended by Users Class 
        echo "Full name: ".$results[0]['firstname']." ".$results[0]['lastname']." ".$results[0]['birthdate'];
        
    }


}

?>