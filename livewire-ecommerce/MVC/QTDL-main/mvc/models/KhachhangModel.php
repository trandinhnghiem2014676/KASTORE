<?php
class KhachhangModel extends DB{
    function insertKhachhang($name, $created_at){
        $sql = "INSERT INTO users (name, created_at) VALUES('$name','$created_at')";
        if($this->pdo_execute($sql)){
            return true;
        }else{
            return false;
        }

    }

    function getKhachhang(){
        $sql = "SELECT * FROM users";
            return  $this->pdo_query($sql);    
    }
    function getOneKhachhang($id){
        $sql = "SELECT * FROM users WHERE  id = $id ";
            return $this->pdo_query($sql);
    }
    function deleteKhachhang($id){
        $sql = "DELETE FROM users WHERE id= '$id' ";
            return($this->pdo_execute($sql));
    }
    function updateKhachhang ($id, $name, $updated_at){
        $sql = "UPDATE users
                SET name = '$name', updated_at = '$updated_at'
                WHERE id = $id";
        return($this->pdo_execute($sql));
    }
   

  

}
?>