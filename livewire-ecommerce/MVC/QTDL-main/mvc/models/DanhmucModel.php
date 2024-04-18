<?php
class DanhmucModel extends DB{
    function insertDanhMuc($name, $created_at){
        $sql = "INSERT INTO categories (name, created_at) VALUES('$name','$created_at')";
        if($this->pdo_execute($sql)){
            return true;
        }else{
            return false;
        }

    }

    function getDanhmuc(){
        $sql = "SELECT * FROM categories";
            return  $this->pdo_query($sql);    
    }
    function getOneDanhmuc($id){
        $sql = "SELECT * FROM categories WHERE  id = $id ";
            return $this->pdo_query($sql);
    }
    function deleteDanhMuc($id){
        $sql = "DELETE FROM categories WHERE id= '$id' ";
            return($this->pdo_execute($sql));
    }
    function updateDanhMuc ($id, $name, $updated_at){
        $sql = "UPDATE categories
                SET name = '$name', updated_at = '$updated_at'
                WHERE id = $id";
        return($this->pdo_execute($sql));
    }
   

  

}
?>