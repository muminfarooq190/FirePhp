<?php


namespace app\Controller;


class PostStay extends  controller
{
    public function page(){
       echo $this->view('poststay');
    }
}