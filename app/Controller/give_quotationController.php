<?php


namespace app\Controller;

use app\Model\customer_querie;
use app\Model\day;
use app\Model\give_quotation;
use app\Model\Model;
use framework\Request\Request;

class give_quotationController extends dayController
{
        public  function  _give(Request $request)
        {
            $quo = new give_quotation();
            $this->filldata($quo);
            $this->filterGiveQuote($quo);
            if(!$quo->isExist()) {
                $quoId=$this->InsertQuote($quo);
                $quo->Message="Inserted Successfully";
                $quo->Success=true;
                $quo->Code=200;
                $this->insertDays($quoId);
                $gc=new customer_querie();
                $gc->status=2;
                $gc->update("id=".$quo->c_q_id);
            }else{
                $quo->Message="Quotation is Already Given";
            }
         $quo->Json();
        }
        private function insertDays($quoId)
        {
            $data=$_POST; $dayCount = 1;
            foreach ($data as $key => $value) {
                if ($key != 'day' . $dayCount) continue;
                $dayid=$this->InsertDay($value);
                $qdc=new quotation_daysController();
                $qdc->JoinQuotDays($dayid,$quoId);
                $dayCount++;
            }
        }
        private function  InsertQuote(give_quotation $quo)
        {
            return $quo->insertGetId();
        }
        private function filterGiveQuote(give_quotation $quo){
            $connection = Model::Connection();
            $quo->flight = mysqli_real_escape_string($connection, $quo->flight) and htmlspecialchars($quo->flight);
            $quo->cab = mysqli_real_escape_string($connection, $quo->cab) and htmlspecialchars($quo->cab);
            $quo->quotationPrice = mysqli_real_escape_string($connection, $quo->quotationPrice) and htmlspecialchars($quo->quotationPrice);
        }
        private function filldata($quo){
            $data=$_POST;
            $quo->c_q_id =$data['c_q_id'];
            $quo->flight =$data['flight'];
            $quo->cab = $data['cab'];
            $quo->quotationPrice =$data['totalprice'];
        }

}