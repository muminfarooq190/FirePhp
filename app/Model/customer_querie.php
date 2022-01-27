<?php


namespace app\Model;


class customer_querie extends Model
{

    public function GetQuerys()
    {
        $Query=$this->createQuoteQuery();
        $Query .=" status=1";
        $Query = trim($Query, "where ");
        $Query = trim($Query, "and ");
        $this->query($Query);

    }
    public function GetQuerysForQuotationFollowUp(){
        $Query=$this->createQuoteQuery();

        switch ($this->FollowedUp){
            case "1 day":
                $Query .= " TIMESTAMPDIFF(hour, `added_on`,CURRENT_TIMESTAMP) BETWEEN 0 AND 24 and";
                break;
            case "2 days":
                $Query .= " TIMESTAMPDIFF(hour, `added_on`,CURRENT_TIMESTAMP) BETWEEN 25 AND 48 and";
                break;
            case "3 days":
                $Query .= " TIMESTAMPDIFF(hour, `added_on`,CURRENT_TIMESTAMP) BETWEEN 49 AND 72 and";
                break;
            case "4 days":
                $Query .= " TIMESTAMPDIFF(hour, `added_on`,CURRENT_TIMESTAMP) > 72 and";
                break;
        }
        if($this->tab == "followed"){
            $Query .=" status = 3";
        }elseif($this->tab == "pendingFollowUp"){
            $Query .=" status = 2";
        }else{
            $Query .=" (status != 0 and status != 1)";
        }

        $Query = trim($Query, "where ");
        $Query = trim($Query, "and ");

        $this->query($Query);
        //echo $Query;
    }
    private function createQuoteQuery()
    {
        $Query = "Select cq.*,a.name from customer_queries cq ";
        $Query .= "left join agentqueryassineds aqs on cq.id = aqs.c_q_id
                    left join agents a on a.id=aqs.agent_id
                    where ";
        if($_SESSION["fullPrivilege"]==0){
            $this->agent=array($_SESSION["id"]);
        }
        if($this->agent!="")
        {

            if(count($this->agent) > 0) {
                $Query .= "a.id IN (";

                foreach ($this->agent as $value) {

                    $Query .= "$value,";

                }
                $Query = trim($Query, " , ");
                $Query .= ") and ";

            }
        }else{
            $Query .= "a.id IS NULL and ";
        }
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
        if($this->month != ""){
            $Query .= " MONTH(FROM_UNIXTIME(UNIX_TIMESTAMP(added_on)))= $this->month and";
        }
        if($this->leadType != ""){
            switch ($this->leadType){
                case 1:
                    $Query .= " i_will_book_in = 'In Next 2-3 Days' || i_will_book_in = 'In This Week' and ";
                    break;
                case 2:
                    $Query .= " i_will_book_in = 'In This Month' and";
                    break;
                case 3:
                    $Query .= " i_will_book_in = 'Later Sometime' and";
                    break;
                case 4:
                    $Query .= " i_will_book_in = 'Just Checking Price' and";
                    break;
            }
        }

        return $Query;
    }

}