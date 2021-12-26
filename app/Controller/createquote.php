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
        $cs = new customer_querie();
        $this->getFilterParams($cs);
        $cs->GetQuerys();
        $card=1;
        while($cs->next()){
            $data=array(
                "id"=>$cs->id,
                "destination"=>$cs->destination,
                "departure"=>$cs->departure,
                "duration"=>$cs->duration,
                "email"=>$cs->email,
                "contact_number"=>$cs->contact_number,
                "hotel_category"=>$cs->hotel_category,
                "flight"=>$cs->flight,
                "cab"=>$cs->cab,
                "budget"=>$cs->budget,
                "adults"=>$cs->adults,
                "children"=>$cs->children,
                "infants"=>$cs->infants,
                "departure_date"=>$cs->departure_date,
                "i_will_book_in"=>$cs->i_will_book_in,
                "type_of_package"=>$cs->type_of_package,
                "prefered_time_to_call"=>$cs->prefered_time_to_call,
                "driver_language"=>$cs->driver_language,
                "tour_type"=>$cs->tour_type,
                "Additional_Details"=>$cs->Additional_Details,
                "Active"=>$cs->status?"Active":"Not Active",
                "agent"=>$cs->name,
                "card"=>$card
            );
            echo $this->replacePlaceholders($file,$data);
        }
    }

    public function getFilterParams(customer_querie $cs)
    {
            $connection = Model::Connection();

            $destination = isset($_POST['Destination']) ? $_POST['Destination'] : "";
            $agent = isset($_POST['Agent']) ? $_POST['Agent'] : "";
            $leadType = isset($_POST['LeadType']) ? $_POST['LeadType'] : "";
            $month = isset($_POST['Month']) ? $_POST['Month'] : "";
            if (!empty($destination)) {
                foreach ($destination as $key=>$value) {

                    $value = mysqli_real_escape_string($connection, $value);
                    $value=htmlspecialchars($value);
                    $destination[$key] = $value;

                }
                $cs->destination = $destination;

            }
            if(!empty($agent))
            {
                foreach ($agent as $key=>$value){
                    $value = mysqli_real_escape_string($connection, $value) and htmlspecialchars($value);
                    $agent[$key] = $value;
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
    public function getQuoteform(Request $request){
       include_once COMPONENTS_DIR."createquote/quotationform.php";
    }


}