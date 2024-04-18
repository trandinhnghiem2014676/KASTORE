<?php
    class User extends Controller{
        private $user;
        function __construct(){
            $this->user = $this->model('UserModel');
            $this->product = $this->model('SanphamModel');
        }
        function register(){
            return $this->view("client",[
                'page'=>'dangky'
            ]);
        }
        function login(){
            return $this->view("client",[
                'page'=>'dangnhap'
            ]);
        }

        function submitRegister(){
         
            if(isset($_POST['register']) && $_POST['register'] != ""){

                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $email = $_POST['email'];
                $passWord = $_POST['password'];
                $confirmPass = $_POST['confirmPass'];
                $thongbao = "";
                $trangthai = "";
                $created_at = date('Y-m-d H:i:s');
                // kiem tra password
                if($passWord === $confirmPass){
                    // insert du lieu
                    $passWord = password_hash($passWord,PASSWORD_DEFAULT);  //hast pass
                    $result = $this->user->insertUser($firstName, $lastName, $email, $passWord, $created_at); // tra ve ket qua true, fale
                    if($result === true){
                        $thongbao = 'Ban dang ky thanh cong';
                        $trangthai = "success";
                    } else{
                        $thongbao = 'Ban khong the dang ky vui long lien he quan tri vien !!';
                        $trangthai = "danger";
    
                        }     
                } else{
                    // thong bao pass ko hop le!!
                    $thongbao = 'Nhap lai mat khau khong dung !!';
                    $trangthai = "danger";
    
                }
                // header('Location: '._WEB_ROOT.'/user/login');
                return $this->view("client",[
                    'page'=>'dangky',
                    'thongbao' => $thongbao,
                    'trangthai' => $trangthai
                ]);
            }
           
        }
        function  index(){
          
            if(isset($_POST['login']) && $_POST['login'] != ""){
                $thongbao = '';
                $trangthai = '';
                $check =-1;
                $email = $_POST['email'];
                $passWord = $_POST['password'];
                //kiem tra email ton tai chua
                if(isset($email)){
                    $user=$this->user->getUser($email);
                    if(!empty($user)){
                        if(password_verify($passWord,$user['password'])){
                            
                            $check=0;

                        }
                        else{
                            $check=1;
                            $thongbao = 'Mat khau khong dung';
                            $trangthai = 'danger';
                        }
                    }else{
                        $check = 1;
                        $thongbao = 'Email khong ton tai';
                        $trangthai = 'danger';
                    }
                }else{
                    $check = 1;
                    $thongbao = 'Tai khoan khong ton tai';
                    $trangthai = 'danger';
                }



                if($check == 1){
                    return $this->view('client',[
                        'page'=>'dangnhap',
                        'thongbao'=>$thongbao,
                        'trangthai'=>$trangthai
                    ]);
                }else if($check == 0){
                    $_SESSION['user'] = $user;
                    header('Location: '._WEB_ROOT.'/user/trangchu');

                }
            
            }
        }
        function trangchu(){
            $products3 = $this->product->getSanpham(3);
            $products6 = $this->product->getSanpham(6);

            return $this->view('client',[
                'page'=>'trangchu',
                'products3' => $products3,
                'products6' => $products6,

                
            ]);
        }

        function logOut(){
            if(isset($_SESSION['user'])){
                unset($_SESSION['user']);
                $this->view('client',[
                    'page'=>'dangnhap',
                ]);
            }else{
                $this->view('client',[
                    'page'=>'dangnhap',
                ]);
            }
        }

        function product(){
            return $this->view('client',[
                'page'=>'product'
            ]);
        }
        function collection(){
            return $this->view('client',[
                'page'=>'collection'
            ]);
        }
        function boots(){
            return $this->view('client',[
                'page'=>'boots'
            ]);
        }
        function climbing(){
            return $this->view('client',[
                'page'=>'climbing'
            ]);
        }

        function about(){
            return $this->view('client',[
                'page'=>'about'
            ]);
        }
        function contact(){
            return $this->view('client',[
                'page'=>'contact'
            ]);
        }
        function blog(){
            return $this->view('client',[
                'page'=>'blog'
            ]);
        }
        function giohang(){
            return $this->view('client',[
                'page'=>'giohang'
            ]);
        }
        function chitietsp(){
            return $this->view('client',[
                'page'=>'chitietsp'
            ]);
        }
}
    

?>