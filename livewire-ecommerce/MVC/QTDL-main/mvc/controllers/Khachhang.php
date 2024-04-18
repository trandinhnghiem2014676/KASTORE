<?php
    class Khachhang extends Controller{
        function __construct(){
            $this->khachhang = $this->model('KhachhangModel');
        }
        function list(){
            $listKhachhang = $this->khachhang->getkhachhang();
            return $this-> view('admin', [
                'page'=> 'khachhang/list',
                'khachhang' => $listKhachhang
            ]); 
        }
        function add(){
            if(isset($_POST['tenkh']) && $_POST['tenkh'] !='') {
                $tenkh = ($_POST['tenkh']);
                $date = date('Y-m-d H:i:s');
                $add = $this->khachhang->insertKhachhang($tenkh, $date);
                if($add){
                    $thongbao = 'Bạn đã thêm thành công';
                } else{
                    $thongbao = 'Không thành công!!';
                    
                }
                return $this-> view('admin', [
                    'page'=> 'khachhang/add',
                    'thongbao'=> $thongbao
                ]); 
            } else{
                return $this-> view('admin', [
                    'page'=> 'khachhang/add'             
                ]);
            }
        }

        function delete($id){
            $result = $this->khachhang->deleteKhachhang($id);
            if($result == true){
                $thongbao = 'Bạn đã xóa thành công';
            } else{
                $thongbao = 'Không thành công!!';
                }
                $cate = $this->khachhang->getKhachhang();
            return $this-> view('admin', [
                    'page'=> 'khachhang/list',
                    'thongbao'=> $thongbao,
                    'khachhang'=> $cate,
                ]); 
        }
        
        function update($id){
            if(isset($_POST['tenkh']) && $_POST['tenkh'] !='') {
                $tenkh = ($_POST['tenkh']);
                $date = date('Y-m-d H:i:s');
                $update = $this->khachhang->updateKhachhang($id, $tenkh, $date);
                if($update){
                    $thongbao = 'Bạn đã cập nhật thành công';
                } else{
                    $thongbao = 'Cập nhật không thành công!!';
                    
                }
                $result = $this->khachhang->getOneKhachhang($id);
                return $this-> view('admin', [
                    'page'=> 'khachhang/update',
                    'thongbao'=> $thongbao,
                    'cate' => $result
                ]); 
            } else{
                $result = $this->khachhang->getOneKhachhang($id);
                return $this-> view('admin', [
                    'page'=> 'khachhang/update'  ,
                    'cate' => $result

                ]);
            }
        }

    }


?>