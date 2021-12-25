<?php


namespace app\Controller;


use app\Model\Agent;
use app\Model\Model;
use framework\Request\Request;

class Authorization extends controller
{
    public function ViewLogin(){

        $this->setLayout = false;
        echo $this->view('login');
    }

    public function Login(Request $request){

        $this->filterParams();
            $agent = new Agent();
            $this->filterParams($agent);
            $agent->GetQueries();

    }

    private function filterParams(Agent $agent){

        $connection = Model::Connection();
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $password = isset($_POST['password']) ? $_POST['password'] : "";
        $rememberme = isset($_POST['rememberme']) ? $_POST['rememberme'] : "";
        if(!empty($email))
        {
            $email = mysqli_real_escape_string($connection, $email )and htmlspecialchars($email);

        }
        if(!empty($password))
        {
            $password = mysqli_real_escape_string($connection, $password )and htmlspecialchars($password);

        }
        if(!empty($rememberme))
        {
            $rememberme = mysqli_real_escape_string($connection, $rememberme )and htmlspecialchars($rememberme);

        }
        $agent->email = $email;
        $agent->password = $password;
    }
    public function isAuthorize(){
        if(!isset($_SESSION["AUTH"])){
            header("Location: ".HTTP_HOST."login");
            exit();
        }
    }
}