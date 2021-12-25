<?php


namespace app\Controller;


use app\Model\Model;
use framework\Request\Request;
use app\Model\Quotation;

class giveQuote extends  controller
{
        public  function  _give(Request $request)
        {
            $quo = new Quotation();
           $this->filterInputs($quo);
           $quo->GetQueries();
        }
        private function  filterInputs(Quotation $quo)
        {

            $connection = Model::Connection();
            $hotelName = mysqli_real_escape_string($connection, $_POST['HotelName']) and htmlspecialchars($_POST['HotelName']);
            $hotelAddress = mysqli_real_escape_string($connection, $_POST['HotelAddress']) and htmlspecialchars($_POST['HotelAddress']);
            $hotelRoomType = mysqli_real_escape_string($connection, $_POST['HotelRoomType']) and htmlspecialchars($_POST['HotelRoomType']);
            $hotelRating = mysqli_real_escape_string($connection, $_POST['HotelRating']) and htmlspecialchars($_POST['HotelRating']);
            $Inclusions= mysqli_real_escape_string($connection, $_POST['Inclusions']) and htmlspecialchars($_POST['Inclusions']);
            $Exclusions = mysqli_real_escape_string($connection, $_POST['Exclusions']) and htmlspecialchars($_POST['Exclusions']);
            $Itenary = mysqli_real_escape_string($connection, $_POST['Itenary']) and htmlspecialchars($_POST['Itenary']);
            $Flight = mysqli_real_escape_string($connection, $_POST['Flight']) and htmlspecialchars($_POST['Flight']);
            $Cab = mysqli_real_escape_string($connection, $_POST['Cab']) and htmlspecialchars($_POST['Cab']);

            $quo->hotelname = $hotelName;
            $quo->hotelAddress = $hotelAddress;
            $quo->hotelRoomType = $hotelRoomType;
            $quo->hotelRating = $hotelRating;
            $quo->Inclusions = $Inclusions;
            $quo->Exclusions = $Exclusions;
            $quo->Itenary = $Itenary;
            $quo->Flight = $Flight;
            $quo->Cab = $Cab;



        }
}