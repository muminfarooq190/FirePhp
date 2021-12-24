<?php


namespace app\Controller;


class Authorization extends controller
{
    public function ViewLogin(){

        $this->setLayout = false;
        echo $this->view('login');
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