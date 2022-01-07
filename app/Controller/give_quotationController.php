<?php


namespace app\Controller;

use app\Model\customer_querie;
use app\Model\give_quotation;
use app\Model\Model;
use framework\Request\Request;

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
        $quo->cab = $data['cab'];
        $quo->quotationPrice = $data['totalprice'];
        $quo->advancedquotationPrice = $data['halfbooking'];
        $quo->dateofjourney = $data['dateofjourney'];
        $quo->inclusions = $data['inclusions'];
        $quo->exclusions = $data['exclusions'];

    }

    private function filterGiveQuote(give_quotation $quo)
    {
        $connection = Model::Connection();
        $quo->flight = mysqli_real_escape_string($connection, $quo->flight) and htmlspecialchars($quo->flight);
        $quo->cab = mysqli_real_escape_string($connection, $quo->cab) and htmlspecialchars($quo->cab);
        $quo->quotationPrice = mysqli_real_escape_string($connection, $quo->quotationPrice) and htmlspecialchars($quo->quotationPrice);
        $quo->advancedquotationprice = mysqli_real_escape_string($connection,$quo->advancedquotatioprice) and htmlspecialchars($quo->advancedquotationprice);
        $quo->dateofjourney = mysqli_real_escape_string($connection, $quo->dateofjourney) and htmlspecialchars($quo->dateofjourney);
        $quo->inclusions = mysqli_real_escape_string($connection, $quo->inclusions) and htmlspecialchars($quo->inclusions);
        $quo->exclusions = mysqli_real_escape_string($connection, $quo->exclusions) and htmlspecialchars($quo->exclusions);

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
        $query = "SELECT * FROM `give_quotations` gv JOIN `quotation_days` qd on gv.id = qd.g_q_id JOIN days d on qd.d_id = d.id WHERE gv.c_q_id=" . $quo->c_q_id . ";";
        $result = mysqli_query(Model::Connection(), $query);
        $table=mysqli_fetch_all($result,MYSQLI_ASSOC);
        ob_start();
            $this->Pdfpage($table);
        $file=ob_get_clean();
    }
    private function Pdfpage($table)
    {
        require VENDER_DIR."tcpdf/tcpdf_min/tcpdf.php";
        $pdf = new \TCPDF(PDF_PAGE_ORIENTATION, "px", PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetCreator("Fly Paradise");

        $pdf->SetAuthor('Mumin Farooq');
        $pdf->SetTitle('Fly Paradise Quotation Brochure ');
        $pdf->SetSubject('Application Form');
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetPrintHeader(false);
        $pdf->SetPrintFooter(false);
        $pdf->SetFooterMargin(30);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->setImageScale(1);
        $pdf->setFontSubsetting(true);
        $pdf->AddPage();

        $html = '<style type="text/css">
                    .table{width: 100% !important;border-collapse:collapse; }.logo-section{width: 50%;}.logo{width: 160px;}.heading{width: 80%;}.title{font-size: 18px;}.text-secondary{color: #aaa;}.text-danger{color: #044643;}.bordered th,.bordered td{border: .7em solid #044643;}.text-small{font-size: 5px;color: #121212;}.userImage{border: .2em solid #202020;width: 215px; padding: 2px;}.wrapper{display: grid;   background-color: #fff;color:#444; }.box{background-color: #AAC9C4;color:#121212;width:30%;border-radius:5px;height:70px;font-size:130%;}
                
                </style>';
        $html .= '<table class="table" cellpadding="5">
                    <tr>
                        <th class="logo-section">
                            <img src="'.IMAGES.'pdf/11.png " class="logo" />
                        </th>
                        <td class="heading title">
                             <small class="text-secondary">| <strong>It feels good to be lost in the right direction</strong></small>
                        </td>
                    </tr>
                </table>';
        $html .= '<table class="table" cellpadding="5">
                    <tr>
                        <th colspan="4">&nbsp;</th>
                        <td style="border-bottom: 1px solid black" colspan="2"><strong>Trip Id : '.$table[0]["c_q_id"].' </strong> <span class="text-danger"> <b> </b></span></td>
                    </tr>
                    <tr class="">
                         <th style="border-left: 1px solid #ccc" colspan="2">Tour Company  :
						<small style="font-size: 10px"><strong style="color:#000;">Fly Paradise</strong></small></th>
                    </tr>
                    <tr class="">
                         <th style="" colspan="2">Exceutive Person  :
						<small style="font-size: 10px"><strong style="color:#000;">Fly Paradise</strong></small></th>
                        
                         <th  style="border-left: 1px solid #ccc" colspan="2">Company Location  :
						<small style="font-size: 10px"><strong style="color:#000;">  Kashmir</strong></small></th>
                          <th  style="border-left: 1px solid #ccc" colspan="2">Mobile  :
						<small style="font-size: 10px"><strong style="color:#000;">  9906543728</strong></small></th>
                    </tr>
                    <tr class="">
                         <th style="" colspan="2">Total Reviews  :
						<small style="font-size: 10px"><strong style="color:#000;">357</strong></small></th>
                        
                         <th  style="border-left: 1px solid #ccc" colspan="2">Total Trips  :
						<small style="font-size: 10px"><strong style="color:#000;">  560 </strong></small></th>
                    </tr>
                   
                </table>';
        $html .= '<div style="height: 130%;background-color: white" class="box">
                        <img  src="'.IMAGES.'pdf/banner.jpg">
                </div>';
        $html .= '<div  class="wrapper">
                      <div style="" class="">
                          <p style="font-size: 12px;" >
                          <p>Dear <strong> '.$table[0]["c_q_id"].'</strong></p><p>Greetings from flyparadise.in ! Fly Paradise Travels Private Limited,</p> designed below holiday package for your requested trip on flyparadise.in, if you need any modifications in travel package you can contact Fly Paradise Travels Private Limited on 9906444456 keep your Trip ID: '.$table[0]["c_q_id"].' as a reference while contacting with executive</p>
                      </div>
<div style="height:.1em;"></div>
<table class="table" cellpadding="4" cellspacing="0">
     <tr class="">
                        
                         <th  style="border-left: 1px solid #ccc" colspan="2">Total Booking Amount  :
						<small style="font-size: 10px"><strong style="color:#000;"> Rs '.$table[0]["quotationPrice"].' </strong></small></th>
                         <th style="" colspan="2">Advance Amount to pay for trip confirmation :
						<small style="font-size: 10px"><strong style="color:#000;">'.($table[0]["quotationPrice"]).'</strong></small></th>
                        
                    </tr>
</table>
<div style="height:.1em;"></div>

 
</div>';
        $html .= '<div style="height:.1em;"></div>';
        $html .= '<table class="table " cellspacing="0" cellpadding="4">
                <tr>
                    <th colspan="4"><strong style="color:indianred">Summary</strong> 
					<small class="text-small">
					</small>
                </th>
                </tr>
               <tr class="">
                    <th  style="border-left: 1px solid #ccc" colspan="2">Total Duration  :
                    <small style="font-size: 10px"><strong style="color:#000;"> 5 Nights & 6 Days </strong></small></th>
                    <th style="border-left: 1px solid #ccc" colspan="2">Adults :
                    <small style="font-size: 10px"><strong style="color:#000;">2</strong></small></th>       
               </tr>
                <tr class="">
                     <th  style="border-left: 1px solid #ccc" colspan="2">Trip Start Date  :
                     <small style="font-size: 10px"><strong style="color:#000;"> 19/11/2021 </strong></small></th>
                     <th style="border-left: 1px solid #ccc" colspan="2">kids :
                     <small style="font-size: 10px"><strong style="color:#000;">0</strong></small></th>        
                </tr>
               <tr class="">
                     <th  style="border-left: 1px solid #ccc" colspan="2">Trip Start City  :
                    <small style="font-size: 10px"><strong style="color:#000;"> '.$table[0]["distinationPoint"].' </strong></small></th>             
              </tr>
              ';
        $html .= '</table>';
        $html .= '<div style="height:.01em;"></div>';
        $html .= '<table class="table " cellspacing="0" cellpadding="4">
                    <tr>
                        <th style="border-bottom: 2px solid #ccc">Destinations</th>
                         <td>&nbsp;</td>
                        <th style="border-bottom: 2px solid #ccc">HotelHouseboat</th>
                        <td>&nbsp;</td>
                        <td style="border-bottom: 2px solid #ccc">Hotel Type</td>
                    </tr>
                    ';
                    foreach ($table as $row) {
                    $html.='
                        <tr>
                        <td>'.$row["distinationPoint"].'</td>
                         <td>&nbsp;</td>
                        <th >'.$row["hotelName"].'</th>
                        <td>&nbsp;</td>
                        <td >'.$row["hotelRating"].'</td>
                    </tr>
                    ';
                   }
        $html.='</table>';
        $html .= '<div style="height:.01em;"></div>';
        $html .= '<div style="border: .1em solid indianred">';
        $html .= '<table  class="" cellspacing="0" cellpadding="4">
                    <tr class="">
                        <th style="color: indianred" colspan="2">
                            <strong>Cab</strong>
                             &nbsp; &nbsp; &nbsp; &nbsp;
                            <strong>Flight</strong>
                        </th>
                    </tr>
                   <tr>
                        <td>
                            '.$table[0]["cab"].' 
                            &nbsp; &nbsp; &nbsp; &nbsp;
                            '.$table[0]["flight"].'
                        </td>
                   </tr>
                </table>
                </div>';
        $html .= '<div style="height:.01em;"></div>';
        $html .= '<div  style="background-color: white;width: 50%;border:1px solid indianred; padding=5px;" class="box">
                <strong style="color: indianred">Inclusions</strong>
                <table cellspacing="0" cellpadding="0">
                 <div style="height: .2em"></div>';
                    foreach ($table as $row) {
                        $html.='
                               <tr>
                                    <th style="" colspan="2">
                                        <small style="font-size: 12px">'.$row["inclusions"].'</small>
                                        <img style="vertical-align: middle" src="'.IMAGES.'pdf/checked.jpg">
                                     </th>                                
                                </tr>
                                ';
                    }

                $html.='</table>
             <div style="height:.1em;"></div>
             <div style="height:.1em;"></div>
            <strong style="color: indianred">Exclusions</strong>
                <table cellspacing="0" cellpadding="0">
                 <div style="height: .2em"></div>';
                    foreach ($table as $row) {
                        $html.='
                                <tr>
                                    <th style="" colspan="2">
                                        <small style="font-size: 12px">'.$row["exclusions"].'</small>
                                        <img style="vertical-align: middle" src="'.IMAGES.'pdf/checked.jpg">
                                     </th>                                
                                </tr>
    ';
                    }
                $html.='</table>
            </div>';
        $html .= '<table class="table" cellspacing="0" cellpadding="4">
                    <tr>
                        <td width="80%">          
                           <strong style="color: indianred">Itenary</strong>
                        </td>
                    </tr>
                     <tr>
                        <td>
                            <div style="background-color: white" class="box">';
                                foreach ($table as $row) {
                            $html .= '<h5 style="border-bottom: 2px solid indianred">';
                                       $html.=$row["day"].': ARRIVAL - ';
                                       $html.=$row["distinationPoint"];
                                  $html.='</h5>
                                    <p style="font-size: 11px">';
                                        $html.=$row["itenary"];
                            $html.='</p>';
                                }
                    $html.='</div>
                        </td>
                     </tr>
                </table>';
        $html .= '<table class="table " cellspacing="0" cellpadding="4">
                <tr>
                    <th colspan="4"><strong style="color:indianred">Bank Details</strong> 
					<small class="text-small">
					</small>
</th>
                </tr>
               <tr class="">
                        
                         <th  style="border-left: 1px solid #ccc" colspan="2">Account Number  :
						<small style="font-size: 10px"><strong style="color:#000;"> jk293909093329029</strong></small></th>
                         <th style="border-left: 1px solid #ccc" colspan="2">Bank Name
						<small style="font-size: 10px"><strong style="color:#000;">J and k Bank</strong></small></th>
                        
               </tr>
                <tr class="">
                        
                         <th  style="border-left: 1px solid #ccc" colspan="2">IFSC Code
						<small style="font-size: 10px"><strong style="color:#000;"> cdkdksmdksmck</strong></small></th>
                        
                    </tr>
            
              ';
        $html .= '<h2>Enjoy your trip</h2>';
        $html .= '<div style="background-color: #fff" class="box">
                     <img width="3000%" src="'.IMAGES.'pdf/banner_two.jpg">
                  </div>';
        $html .= '<img style="width = 80%" src="'.IMAGES.'pdf/11.png">';
        $pdf->writeHTML($html);
        $pdf->Output('application_form.pdf');

    }

}