<?php


namespace app\Controller;


use app\Model\customer_querie;
use framework\Request\Request;

class createquote extends controller
{
    public function page(){
       echo $this->view('createquote');
    }
    public function quote(Request $request){
        $file=COMPONENTS_DIR."createquote".DS."quote.php";

        $cs=new customer_querie();
//        print_r ($_POST["Destination"][0]);
        $this->createQuery();
        $cs->get();
        while($cs->next()){
            $data=array(
                "name"=>$cs->departure
            );
            echo $this->replacePlaceholders($file,$data);
        }


    }

    public function createQuery()
    {
        $destination = isset($_POST['Destination'])?$_POST['Destination']:"";
        $agent = isset($_POST['Agent'])?$_POST['Agent']:"";
        $leadType = isset($_POST['LeadType'])?$_POST['LeadType']:"";
        $month = isset($_POST['Month'])?$_POST['Month']:"";
        $Query = "Select * from customer_queries where ";

       if(!empty($destination))
       {

           foreach ($destination as   $value) {
               $Query .= " destination  =  $value and";

           }
       }

        if(!empty($agent))
        {
            foreach ($agent as   $value) {
                $Query .= " agent = '$value' and";
            }
        }
            if(!empty($month)){
                $Query .= " month = $month and";
            }
        if(!empty($leadType)){
            $Query .= " leadType = $leadType ";
        }


        $Query = trim($Query, "where");
        echo $Query;

    }




}