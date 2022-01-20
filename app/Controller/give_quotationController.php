<?php

namespace app\Controller;

use app\Model\customer_querie;
use app\Model\give_quotation;
use app\Model\Model;
use framework\Request\Request;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class give_quotationController extends dayController
{
    public function _give(Request $request)
    {
        $quo = new give_quotation();
        $this->filldata($quo);
        $this->filterGiveQuote($quo);
        if (!$quo->isExist()) {
            $quoId = $this->InsertQuote($quo);
            $quo->Message = "Inserted Successfully";
            $quo->Success = true;
            $quo->Code = 200;
            $this->insertDays($quoId);
            $gc = new customer_querie();
            $gc->status = 2;
            $gc->update("id=" . $quo->c_q_id);
            $this->preparePdf($quo);
        } else {
            $quo->Message = "Quotation is Already Given";
        }
        $quo->Json();
    }
    private function filldata($quo)
    {
        $data = $_POST;
        $quo->c_q_id = $data['c_q_id'];
        $quo->flight = $data['flight'];
        $quo->vehicleType = $data['vehicleType'];
        $quo->quotationPrice = $data['totalprice'];
        $quo->advanceAmountToPay = $data['halfbooking'];
        $quo->dateOfJourney = $data['dateofjourney'];
        $quo->Inclusions = $data['inclusions'];
        $quo->Exclusions = $data['exclusions'];

    }
    private function filterGiveQuote(give_quotation $quo)
    {
        $connection = Model::Connection();
        $quo->flight = mysqli_real_escape_string($connection, $quo->flight) and htmlspecialchars($quo->flight);
        $quo->vehicleType = mysqli_real_escape_string($connection, $quo->vehicleType) and htmlspecialchars($quo->vehicleType);
        $quo->quotationPrice = mysqli_real_escape_string($connection, $quo->quotationPrice) and htmlspecialchars($quo->quotationPrice);
        $quo->advanceAmountToPay = mysqli_real_escape_string($connection,$quo->advanceAmountToPay) and htmlspecialchars($quo->advanceAmountToPay);
        $quo->dateOfJourney = mysqli_real_escape_string($connection, $quo->dateOfJourney) and htmlspecialchars($quo->dateOfJourney);
        $quo->Inclusions = mysqli_real_escape_string($connection, $quo->Inclusions) and htmlspecialchars($quo->Inclusions);
        $quo->Exclusions = mysqli_real_escape_string($connection, $quo->Exclusions) and htmlspecialchars($quo->Exclusions);

    }
    private function InsertQuote(give_quotation $quo)
    {
        return $quo->insertGetId();
    }
    private function insertDays($quoId)
    {
        $data = $_POST;
        $dayCount = 1;
        foreach ($data as $key => $value) {
            if ($key != 'Day-' . $dayCount) continue;
            $dayid = $this->InsertDay($value);
            $qdc = new quotation_daysController();
            $qdc->JoinQuotDays($dayid, $quoId);
            $dayCount++;
        }
    }
    private function preparePdf($quo)
    {
        $query = "SELECT *,cq.id as tripId,cq.email as customerEmail FROM `give_quotations` gv JOIN `customer_queries` cq on cq.id = gv.c_q_id JOIN `quotation_days` qd on gv.id = qd.g_q_id JOIN days d on qd.d_id = d.id LEFT JOIN `agentqueryassineds` aqa on cq.id = aqa.c_q_id LEFT JOIN `agents` age on aqa.agent_id=age.id WHERE gv.c_q_id= " . $quo->c_q_id . ";";
        $result = mysqli_query(Model::Connection(), $query);
        $table=mysqli_fetch_all($result,MYSQLI_ASSOC);
        $pdfname="flyparadise_";
        $pdfname.=$table[0]["customerName"]."_".$table[0]["name"]."_".uniqid();
        ob_start();
            $mpdf=new MakePdf();
            $mpdf->GetPdf($table , $pdfname);
        $file=ob_get_clean();
        $table[0]["fileName"]=$pdfname;
        $ismailed=$this->pdfmail($file,$table);
        if($ismailed===true){
            $quo->Success=true;
            $quo->Message="Email has been sent successfully";
        }else{
            $quo->Success=false;
            $quo->Message=$ismailed;
        }
        $quo->json["PDF"]=$pdfname;
        $quo->json["Phone"]=$table[0]["contact_number"];
        $quo->json["NAME"]=$table[0]["customerName"];
    }
    public function pdfmail($file,$table)
    {
        require VENDOR_DIR ."autoload.php";
        //PHPMailer Object
        $mail = new PHPMailer(true); //Argument true in constructor enables exceptions

        //$mail->SMTPDebug = 2;                   // Enable verbose debug output
        $mail->isSMTP();                        // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com;';    // Specify main SMTP server
        $mail->SMTPAuth   = true;               // Enable SMTP authentication
        $mail->Username   = ADMIN_MAIL;     // SMTP username
        $mail->Password   = ADMIN_MAIL_PASS;         // SMTP password
        $mail->SMTPSecure = 'tls';              // Enable TLS encryption, 'ssl' also accepted
        $mail->Port       = 587;

        //From email address and name
        $mail->setFrom( ADMIN_MAIL,WEBSITE);


        //To address and name
        $mail->addAddress($table[0]["customerEmail"], $table[0]["customerName"]);
        //$mail->addAddress("recepient1@example.com"); //Recipient name is optional

        //Send HTML or Plain Text email
        $mail->isHTML(true);

        $mail->Subject = "Subject Text";
        $mail->addStringAttachment($file,$table[0]["fileName"]);
        $mail->Body = "<i>Mail body in HTML</i>";
        $mail->AltBody = "This is the plain text version of the email content";

        try {
            $mail->send();
            return true;
        } catch (Exception $e) {
            return  $mail->ErrorInfo;
        }
    }

}