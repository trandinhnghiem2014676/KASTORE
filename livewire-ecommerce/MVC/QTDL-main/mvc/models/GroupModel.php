<?php
class GroupModel extends DB{
    function insertGroup($name, $created_at){
        $sql = "INSERT INTO group_user (name, created_at) VALUES('$name','$created_at')";
        if($this->pdo_execute($sql)){
            return true;
        }else{
            return false;
        }

    }

    function getGroup(){
        $sql = "SELECT * FROM group_user";
            return  $this->pdo_query($sql);    
    }
    function getOneGroup($id){
        $sql = "SELECT * FROM group_user WHERE  id = '$id' ";
            return $this->pdo_query($sql);
    }
    function deleteGroup($id){
        $sql = "DELETE FROM group_user WHERE id= '$id' ";
            return($this->pdo_execute($sql));
    }
    function updateGroup ($id, $name, $updated_at){
        $sql = "UPDATE group_user
                SET name = '$name', updated_at = '$updated_at'
                WHERE id = '$id'";
        return($this->pdo_execute($sql));
    }
   

  

}
?>