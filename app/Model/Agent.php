<?php


namespace app\Model;


class Agent extends Model
{
    public function GetQueries()
    {
        $password=$this->password;
        $this->get('email',$this->email);
        if ($this->next()){
            if(check($password,$this->password)){
                $this->Code=200;
                $this->success=true;
                $this->message="success";
                return true;
            }
        }
        $this->Code=404;
        $this->success=false;
        $this->message="email/password is incorrect";
       // $this->message=encrypt("mumin@123");
        return false;

    }
}