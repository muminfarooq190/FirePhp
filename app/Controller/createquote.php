<?php


namespace app\Controller;


class createquote extends controller
{
    public function page(){
        $this->view('createquote');
    }
    public function quote(){
        $file=COMPONENTS_DIR."createquote".DS."quote.php";
        $data=array(

        );
        echo $this->replacePlaceholders($file,$data);
    }
}