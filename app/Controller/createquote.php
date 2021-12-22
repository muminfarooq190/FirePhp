<?php


namespace app\Controller;


use app\Model\customer_querie;
use framework\Request\Request;
use app\Model\Model;

class createquote extends controller
{

    public function page(){
       echo $this->view('createquote');
    }
    public function quote(Request $request){
        $file=COMPONENTS_DIR."createquote".DS."quote.php";


//        print_r ($_POST["Destination"][0]);
        $this->getFilterParams();
        $cs = new customer_querie();
        $cs->get();
        while($cs->next()){
            $data=array(
                "name"=>$cs->departure
            );
            echo $this->replacePlaceholders($file,$data);
        }


    }

    public function getFilterParams()
    {
            $connection = Model::Connection();
            $cs = new customer_querie();
            $destination = isset($_POST['Destination']) ? $_POST['Destination'] : "";
            $agent = isset($_POST['Agent']) ? $_POST['Agent'] : "";
            $leadType = isset($_POST['LeadType']) ? $_POST['LeadType'] : "";
            $month = isset($_POST['Month']) ? $_POST['Month'] : "";
            if (!empty($destination)) {
                foreach ($destination as $value) {

                    $value = mysqli_real_escape_string($connection, $value) and htmlspecialchars($value);
                    $destination[] .= $value;

                }
                $cs->destination = $destination;
            }
            if(!empty($agent))
            {
                foreach ($agent as $value){
                    $value = mysqli_real_escape_string($connection, $value) and htmlspecialchars($value);
                    $agent[] .= $value;
                }
                $cs->agent = $agent;
            }
            if(!empty($month))
            {
                $month = mysqli_real_escape_string($connection, $month) and htmlspecialchars($month);
                $cs->month = $month;

            }
            if(!empty($leadType)){
                $leadType = mysqli_real_escape_string($connection, $leadType) and htmlspecialchars($leadType);
                $cs->leadType = $leadType;
            }

        }


}