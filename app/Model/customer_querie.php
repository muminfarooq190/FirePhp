<?php


namespace app\Model;


class customer_querie extends Model
{

    public function GetQuerys()
    {
        $Query=$this->createQuoteQuery();
        $this->query($Query);

    }
    private function createQuoteQuery()
    {
        $Query = "Select * from customer_queries where ";
        if($this->destination!="")
        {
            if(count($this->destination) > 0){
                $Query .= " destination IN (";
                foreach ($this->destination as   $value) {
                    $Query.="'$value' , ";
                }
                $Query = trim($Query, " , ");
                $Query .=") and ";
            }
        }
        if($this->agent!="")
        {
            if(count($this->agent) > 0) {
                $Query .= "id IN (Select c_q_id from `agentqueryassined` where agent_id IN (";

                foreach ($this->agent as $value) {

                    $Query .= "$value,";

                }
                $Query = trim($Query, " , ");
                $Query .= ")) and ";

            }
        }
        if($this->month != ""){
            $Query .= " MONTH(FROM_UNIXTIME(UNIX_TIMESTAMP(added_on)))= $this->month and";
        }
        if($this->leadType != ""){
            switch ($this->leadType){
                case 1:
                    $Query .= " i_will_book_in = 'In Next 2-3 Days' ";
                    break;
                case 2:
                    $Query .= " i_will_book_in = 'In Next 2-5 Days' ";
                    break;
                case 3:
                    $Query .= " i_will_book_in = 'In Next 2-9 Days' ";
                    break;
            }

        }

        $Query = trim($Query, "where ");
        $Query = trim($Query, "and ");
        return $Query;
    }

}