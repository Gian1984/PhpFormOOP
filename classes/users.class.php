<?php
//this will be the only class to interact with the database.
class Users extends Dbh { //here we extend to the database coz this will be the only class to interact with him

    //grab information from the database
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

    //send info to the database 

    protected function setUser($email, $user, $pass, $firstname, $lastname){

        $sql = "INSERT INTO users (email, user, pass, firstname, lastname) VALUES (?, ?, ?, ?, ?)"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$email, $user, $pass, $firstname, $lastname]);

        
    }

}

?>