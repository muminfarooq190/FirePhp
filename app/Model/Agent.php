<?php


namespace app\Model;


class Agent extends Model
{
    public function GetQueries()
    {
        $Query=$this->createQuoteQuery();
        $res = $this->query($Query);
        return $res;

    }
    private function createQuoteQuery()
    {
        $Query = "Select email and password from agents where email = '$this->email' and password = '$this->password' ";


        return $Query;
    }
}