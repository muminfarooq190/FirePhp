<?php


namespace app\Controller;
use framework\Request\Request;

class QuotationFollowUp extends controller
{
    public function page(){
       echo $this->view('quotationfollowup');
    
  
       
    }

    public function quotationFollowupCard(Request $request)
    {
        $file=COMPONENTS_DIR."Quotationfollowup".DS."quotationfollowupcard.php";
       
        $data = ['',''];   
        echo $this->replacePlaceholders($file,$data);
    }
}
