<?php
//this will be the only class to interact with the database.
class Users extends Dbh { //here we extend to the database coz this will be the only class to interact with him

    //Working with users table 

    //grab information from the database users
    protected function getUser($user){

        $sql = "SELECT * FROM users WHERE user =  ?"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$user]);

        $result = $stmt->fetchAll();
        return $result;    // i put all the the information of the fetch indise result to be able to send it to the users.view.php 
    }

    protected function getEmail($email){

        $sql = "SELECT * FROM users WHERE email =  ?"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$email]);

        $result = $stmt->fetchAll();
        return $result;    // i put all the the information of the fetch indise result to be able to send it to the users.view.php 
    }

    protected function getPass($hashs){

        $sql = "SELECT * FROM users WHERE hashs =  ?"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$hashs]);

        $result = $stmt->fetchAll();
        return $result;    // i put all the the information of the fetch indise result to be able to send it to the users.view.php 
    }

    //send info to the database 

    protected function setUser($email, $user, $hashs, $firstname, $lastname){

        $sql = "INSERT INTO users (email, user, hashs, firstname, lastname) VALUES (?, ?, ?, ?, ?)"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$email, $user, $hashs, $firstname, $lastname]);

        
    }

    //Working with messages table

    protected function setMessage($email, $messages){

        $sql = "INSERT INTO messages (email, messages) VALUES (?, ?)"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$email, $messages]);

        
    }


    //working for table favourite 

    protected function getUserFav($user){

        $sql = "SELECT * FROM favourite WHERE user =  ?"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$user]);

        $result = $stmt->fetchAll();
        return $result;    // i put all the the information of the fetch indise result to be able to send it to the users.view.php 
    }

    //Working with favourite 

    protected function setUserFav($user, $science, $business, $politics, $technology){

        $sql = "INSERT INTO favourite (user, science, business, politics, technology) VALUES (?, ?, ?, ?, ?)"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$user, $science, $business, $politics, $technology]);

        
    }

    protected function setFavouriteBusiness($business, $id){
       
        $sql = "UPDATE favourite SET business=? WHERE id = $id"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$business]);

        
    }

    protected function setFavouriteScience($science, $id){
       
        $sql = "UPDATE favourite SET science=? WHERE id = $id"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$science]);

        
    }

    protected function setFavouritePolitics($politics, $id){
       
        $sql = "UPDATE favourite SET politics=? WHERE id = $id"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$politics]);

        
    }

    protected function setFavouriteTechnology($technology, $id){
       
        $sql = "UPDATE favourite SET technology=? WHERE id = $id"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$technology]);

        
    }

}


?>