<?php
    class Danhmuc extends Controller{
        function __construct(){
            $this->danhmuc = $this->model('DanhmucModel');
        }
        function list(){
            $listDanhMuc = $this->danhmuc->getDanhmuc();
            return $this-> view('admin', [
                'page'=> 'danhmuc/list',
                'danhmuc' => $listDanhMuc
            ]); 
        }
        function add(){
            if(isset($_POST['tenloai']) && $_POST['tenloai'] !='') {
                $tenLoai = ($_POST['tenloai']);
                $date = date('Y-m-d H:i:s');
                $add = $this->danhmuc->insertDanhMuc($tenLoai, $date);
                if($add){
                    $thongbao = 'Bạn đã thêm thành công';
                } else{
                    $thongbao = 'Không thành công!!';
                    
                }
                return $this-> view('admin', [
                    'page'=> 'danhmuc/add',
                    'thongbao'=> $thongbao
                ]); 
            } else{
                return $this-> view('admin', [
                    'page'=> 'danhmuc/add'             
                ]);
            }
        }

        function delete($id){
            $result = $this->danhmuc->deleteDanhMuc($id);
            if($result == true){
                $thongbao = 'Bạn đã xóa thành công';
            } else{
                $thongbao = 'Không thành công!!';
                }
                $cate = $this->danhmuc->getDanhmuc();
            return $this-> view('admin', [
                    'page'=> 'danhmuc/list',
                    'thongbao'=> $thongbao,
                    'danhmuc'=> $cate,
                ]); 
        }
        
        function update($id){
            if(isset($_POST['tenloai']) && $_POST['tenloai'] !='') {
                $tenLoai = ($_POST['tenloai']);
                $date = date('Y-m-d H:i:s');
                $update = $this->danhmuc->updateDanhMuc($id, $tenLoai, $date);
                if($update){
                    $thongbao = 'Bạn đã cập nhật thành công';
                } else{
                    $thongbao = 'Cập nhật không thành công!!';
                    
                }
                $result = $this->danhmuc->getOneDanhmuc($id);
                return $this-> view('admin', [
                    'page'=> 'danhmuc/update',
                    'thongbao'=> $thongbao,
                    'cate' => $result
                ]); 
            } else{
                $result = $this->danhmuc->getOneDanhmuc($id);
                return $this-> view('admin', [
                    'page'=> 'danhmuc/update'  ,
                    'cate' => $result

                ]);
            }
        }

    }


?>