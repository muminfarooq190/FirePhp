<?php


namespace app\Controller;


use app\Model\customer_querie;

class createquote extends controller
{
    public function page(){
       echo $this->view('createquote');
    }
    public function quote(){
        $file=COMPONENTS_DIR."createquote".DS."quote.php";
        $cs=new customer_querie();
        $cs->get();
        while($cs->next()){
            $data=array(
                "name"=>$cs->departure
            );
            echo $this->replacePlaceholders($file,$data);
        }


    }
}