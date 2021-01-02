<?php
// this class handle the view of the users
class UsersView extends Users {

    public function showUser($user){ // pass a parameter $name that i must query coz it's the same i'm gonna asking from the database

        $results = $this->getUser($user);    //i  refer to a method extended by Users Class 
        echo "Full name: ".$results[0]['id']." ".$results[0]['email']." ".$results[0]['user']." ".$results[0]['hashs']." ".$results[0]['firstname']." ".$results[0]['lastname'];
        
    }

    //working for the table users
    public function user_exists($user){

    $results = $this->getUser($user);
    return $results != null;
	
    }
    
    public function email_exist($email){
        
        $results = $this->getEmail($email);
        return $results != null;
    }

    public function pass_exist($user){
        
        $results = $this->getUser($user);
        return $results[0]['hashs'];
    
    }

    public function id_recoverUser($user){
        
        $results = $this->getUser($user);
        return $results[0]['id'];
    
    }




    //working on the table favourite

    public function showUserFav($user){ // pass a parameter $name that i must query coz it's the same i'm gonna asking from the database

        $results = $this->getUserFav($user);    //i  refer to a method extended by Users Class 
        echo "Full name: ".$results[0]['id']." ".$results[0]['user']." ".$results[0]['science']." ".$results[0]['business']." ".$results[0]['politics']." ".$results[0]['technology'];
        
    }

    public function science_recover($user){
        
        $results = $this->getUserFav($user);
        return $results[0]['science'];
    
    }

    public function business_recover($user){
        
        $results = $this->getUserFav($user);
        return $results[0]['business'];
    
    }

    public function politics_recover($user){
        
        $results = $this->getUserFav($user);
        return $results[0]['politics'];
    
    }

    public function technology_recover($user){
        
        $results = $this->getUserFav($user);
        return $results[0]['technology'];
    
    }

    public function id_recover($user){
        
        $results = $this->getUserFav($user);
        return $results[0]['id'];
    
    }
    public function user_existsFav($user){

        $results = $this->getUserFav($user);
        return $results != null;
        
    }
    
}



?>