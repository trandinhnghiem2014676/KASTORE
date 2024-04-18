<?php
    class Admin extends Controller{
        private $user;
        function __construct(){
            $this->user = $this->model('UserModel');
        }
        function index(){
            return $this-> view('admin', [
                'page'=> 'index'
            ]); 
        }
    }


?>