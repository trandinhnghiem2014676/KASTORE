<?php
    class Group extends Controller{
        private $Group;
        function __construct(){
            $this->Group = $this->model('GroupModel');
        }
        function list(){
            $listGroup = $this->Group->getGroup();
            return $this-> view('admin', [
                'page'=> 'group/list',
                'group' => $listGroup
            ]); 
        }
        function add(){
            if(isset($_POST['tennhom']) && $_POST['tennhom'] !='') {
                $tennhom = ($_POST['tennhom']);
                $date = date('Y-m-d H:i:s');
                $add = $this->Group->insertGroup($tennhom, $date);
                if($add){
                    $thongbao = 'Bạn đã thêm thành công';
                } else{
                    $thongbao = 'Không thành công!!';
                    
                }
                return $this-> view('admin', [
                    'page'=> 'group/add',
                    'thongbao'=> $thongbao
                ]); 
            } else{
                return $this-> view('admin', [
                    'page'=> 'group/add'             
                ]);
            }
        }

        function delete($id){
            $result = $this->Group->deleteGroup($id);
            if($result == true){
                $thongbao = 'Bạn đã xóa thành công';
            } else{
                $thongbao = 'Không thành công!!';
                }
                $cate = $this->Group->getGroup();
            return $this-> view('admin', [
                    'page'=> 'group/list',
                    'thongbao'=> $thongbao,
                    'group'=> $cate,
                ]); 
        }
        
        function update($id){
            if(isset($_POST['tennhom']) && $_POST['tennhom'] !='') {
                $tenLoai = ($_POST['tenloai']);
                $date = date('Y-m-d H:i:s');
                $update = $this->Group->updateGroup($id, $tenLoai, $date);
                if($update){
                    $thongbao = 'Bạn đã cập nhật thành công';
                } else{
                    $thongbao = 'Cập nhật không thành công!!';
                    
                }
                $result = $this->Group->getOneGroup($id);
                return $this-> view('admin', [
                    'page'=> 'group/update',
                    'thongbao'=> $thongbao,
                    'group' => $result
                ]); 
            } else{
                $result = $this->Group->getOneGroup($id);
                return $this-> view('admin', [
                    'page'=> 'group/update'  ,
                    'group' => $result

                ]);
            }
        }

    }


?>