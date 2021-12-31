<?php


namespace app\Controller;


use app\Model\day;
use app\Model\Model;

class dayController extends controller
{
    public function InsertDay($value){
        $dm=new day();
        $this->fillDayData($dm, $value);
        $this->filterDay($dm, $value);
        if (!$dm->isExist()) {
            $dayid = $dm->insertGetId();
        } else {
            $dayid = $dm->GetId();
        }
        return $dayid;
    }
    private function fillDayData(day $day,$data){
        $day->day=$data['day'];
        $day->distinationPoint=$data['destinationPoint'];
        $day->hotelName=$data['hotelName'];
        $day->hotelAddress=$data['hotelAddress'];
        $day->hotelRoomType=$data['hotelRoomType'];
        $day->hotelRating=$data['hotelRating'];
        $day->inclusions=$data['inclusions'];
        $day->exclusions=$data['exclusions'];
        $day->itenary=$data['itenary'];
        $day->status=1;
    }
    private function  filterDay(day $day, $data)
    {
        $connection = Model::Connection();
        $day->day = mysqli_real_escape_string($connection, $day->day) and htmlspecialchars($day->day);
        $day->distinationPoint = mysqli_real_escape_string($connection, $day->distinationPoint) and htmlspecialchars($day->distinationPoint);
        $day->hotelName = mysqli_real_escape_string($connection, $day->hotelName) and htmlspecialchars($day->hotelName);
        $day->hotelAddress = mysqli_real_escape_string($connection,$day->hotelAddress) and htmlspecialchars($day->hotelAddress);
        $day->hotelRoomType = mysqli_real_escape_string($connection,  $day->hotelRoomType) and htmlspecialchars($data['hotelRoomType']);
        $day->hotelRating = mysqli_real_escape_string($connection, $day->hotelRating) and htmlspecialchars($day->hotelRating);
        $day->inclusions= mysqli_real_escape_string($connection,$day->inclusions) and htmlspecialchars($day->inclusions);
        $day->exclusions = mysqli_real_escape_string($connection, $day->exclusions) and htmlspecialchars($day->exclusions);
        $day->itenary = mysqli_real_escape_string($connection, $day->itenary) and htmlspecialchars($day->itenary);

    }


}