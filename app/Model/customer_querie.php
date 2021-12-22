<?php


namespace app\Model;


class customer_querie extends Model
{


    private function createQuoteQuery()
    {

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
    public function CallCreateQuoteQuery()
    {
    }
}