<?php
// this class handle the view of the users
class UsersView extends Users {

    public function showUser($user){ // pass a parameter $name that i must query coz it's the same i'm gonna asking from the database

        $results = $this->getUser($user);    //i  refer to a method extended by Users Class 
        echo "Full name: ".$results[0]['email']." ".$results[0]['user']." ".$results[0]['pass']." ".$results[0]['firstname']." ".$results[0]['lastname'];
        
    }

    public function user_exists($user){

    $results = $this->getUser($user);
    return $results != null;
	
    }
    
    public function email_exist($email){
        
        $results = $this->getEmail($email);
        return $results != null;
    }


}

?>