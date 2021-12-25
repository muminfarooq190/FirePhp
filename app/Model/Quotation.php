<?php


namespace app\Model;


class Quotation extends Model
{
    public function GetQueries()
    {
        $Query=$this->createQuery();
        $this->query($Query);

    }

    private function  createQuery(){
        $Query = "Insert into Quotations values ('$this->hotelname',
                               '$this->hotelAddress','$this->hotelRoomType','$this->hotelRating',
                               '$this->Inclusions','$this->Exclusions','$this->Itenary',
                               '$this->Flight','$this->Flight')";

        return $Query;
    }
}