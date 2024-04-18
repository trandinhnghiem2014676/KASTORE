<?php
class UserModel extends DB{
    function insertUser($firstName, $lastName, $email, $password,$created_at){
        $sql = "INSERT INTO users (firstName,lastName,email,password,created_at) VALUES('$firstName','$lastName', '$email', '$password', '$created_at' )";
        if($this->pdo_execute($sql)){
            return true;
        }else{
            return false;
        }

    }

    function getUser($email){
        $sql = "SELECT * FROM users WHERE email='$email'";
        $user = $this->pdo_query_one($sql);
        return $user;
    }

  

}
?>