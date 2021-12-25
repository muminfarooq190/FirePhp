<?php


namespace app\Controller;


class Authorization extends controller
{
    public function ViewLogin(){
        
    }
    public function Login(){

    }
    public function isAuthorize(){
        if(!isset($_SESSION["AUTH"])){
            header("Location: ".HTTP_HOST."login");
            exit();
        }
    }
}