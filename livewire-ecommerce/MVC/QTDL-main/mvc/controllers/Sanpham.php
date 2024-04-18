<?php
    class Sanpham extends Controller{
        private $sanpham, $danhmuc;
        function __construct(){
            $this->sanpham = $this->model('SanphamModel');
            $this->danhmuc = $this->model('DanhmucModel');
        }
        function list(){
            $listSanpham = $this->sanpham->getSanpham();
            $cate = $this->danhmuc->getDanhmuc();
            return $this-> view('admin', [
                'page'=> 'sanpham/list',
                'sanpham' => $listSanpham,
                'cate' => $cate
            ]); 
        }
        function add(){
            if(isset($_POST['tensp']) && $_POST['tensp'] !='') {
                $name = ($_POST['tensp']);
                $cate = ($_POST['cate']);
                $price = ($_POST['giasp']);
                $img = $_FILES['hinh']['name'];

                $target_file = _UPLOAD . '/sanpham/' . basename($_FILES['hinh']['name']);
                if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){

                }else{

                }
                $mota = ($_POST['mota']);
                $date = date('Y-m-d H:i:s');
                $add = $this->sanpham->insertSanpham($name, $price, $img, $mota, $date, $cate);
                if($add){
                    $thongbao = 'Bạn đã thêm thành công';
                } else{
                    $thongbao = 'Không thành công!!';
                    
                }
                $cate = $this->danhmuc->getDanhmuc();
                return $this-> view('admin', [
                    'page'=> 'sanpham/add',
                    'thongbao'=> $thongbao,
                    'cate'=> $cate             
                ]); 
            } else{
                $cate = $this->danhmuc->getDanhmuc();
                return $this-> view('admin', [
                    'page'=> 'sanpham/add',
                    'cate'=> $cate             
                ]);
            }
        }

        function delete($id){
            $result = $this->sanpham->deleteSanpham($id);
            if($result == true){
                $thongbao = 'Bạn đã xóa thành công';
            } else{
                $thongbao = 'Không thành công!!';
                }
                $sp = $this->sanpham->getSanpham();
            return $this-> view('admin', [
                    'page'=> 'sanpham/list',
                    'thongbao'=> $thongbao,
                    'sanpham'=> $sp,
                ]); 
        }
        
        function update($id){
            if(isset($_POST['tensp']) && $_POST['tensp'] !='') {
                $name = ($_POST['tensp']);
                $cate = ($_POST['cate']);
                $price = ($_POST['giasp']);
                $img = $_FILES['hinh']['name'];

                $target_file = _UPLOAD . '/sanpham/' . basename($_FILES['hinh']['name']);
                if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){

                }else{

                }
                $mota = ($_POST['mota']);
                $date = date('Y-m-d H:i:s');
                $add = $this->sanpham->updateSanpham ($id, $name, $price, $img, $mota, $date, $cate);
                if($add){
                    $thongbao = 'Bạn đã cập nhật thành công';
                } else{
                    $thongbao = 'Không thành công!!';
                    
                }
                $sp = $this->sanpham->getOneSanpham($id);
                $cate = $this->danhmuc->getDanhmuc();
                return $this-> view('admin', [
                    'page'=> 'sanpham/update',
                    'thongbao'=> $thongbao,
                    'cate'=> $cate,
                    'sanpham'=> $sp,             
                ]); 
            } else{
                $sp = $this->sanpham->getOneSanpham($id);
                $cate = $this->danhmuc->getDanhmuc();
                return $this-> view('admin', [
                    'page'=> 'sanpham/update',
                    'cate'=> $cate,
                    'sanpham'=> $sp           
                ]);
            }
        }

    }


?>