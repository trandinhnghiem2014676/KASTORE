<?php
class SanphamModel extends DB{
    function insertSanpham($name, $price, $img, $mota, $created_at, $cate){
        $sql = "INSERT INTO sanpham (name, price, img, mota, created_at, iddanhmuc) VALUES('$name',  '$price', '$img', '$mota', '$created_at','$cate')";
        if($this->pdo_execute($sql)){
            return true;
        }else{
            return false;
        }

    }

    function getSanpham($limit = 0){
        if($limit > 0){
            $sql = "SELECT * FROM sanpham limit $limit";

        }else{

            $sql = "SELECT * FROM sanpham";
        }
            return  $this->pdo_query($sql);    
    }
    function getOneSanpham($id){
        $sql = "SELECT * FROM sanpham WHERE  id = $id ";
            return $this->pdo_query($sql);
    }
    function deleteSanpham($id){
        $sql = "DELETE FROM sanpham WHERE id= '$id' ";
            return($this->pdo_execute($sql));
    }
    function updateSanpham ($id, $name, $price, $img, $mota, $updated_at, $cate){
        if($img){

        $sql = "UPDATE sanpham
                SET name = '$name',
                    price = '$price',
                    img = '$img',
                    mota = '$mota',
                    update_at = '$updated_at',
                    iddanhmuc = $cate
                WHERE id = $id";
        }else{
            $sql = "UPDATE sanpham
            SET name = '$name',
                price = '$price',
                mota = '$mota',
                update_at = '$updated_at',
                iddanhmuc = $cate
            WHERE id = $id";
        }
        return($this->pdo_execute($sql));
    }
   

  

}
?>