<?php


namespace app\Model;


class Agent extends Model
{
    public function GetQueries()
    {
        $Query=$this->createQuoteQuery();
        $this->query($Query);

    }
    private function createQuoteQuery()
    {
        $Query = "Select email and password from agents where ";
        if($this->email!="")
        {
                    if(count($this->email) > 0){
                        $Query .= " email = '$this->email'";

                    }
        }
        if($this->password!="")
        {
            if(count($this->password) > 0) {
                $Query .= "and password = '$this->password'";

            }
        }
        $Query = trim($Query, "where ");
        $Query = trim($Query, "and ");
        return $Query;
    }
}