<?php
require_once 'config.tpl';
require_once '../framework/Helper/helpers.php';

use framework\Routing\Route;

session_start();
/*********************************Authorization******************************************/
    Route::get("/login","Authorization.ViewLogin");
    Route::post("/login","Authorization.Login");
    Route::middleware("/","Authorization.isAuthorize");

/*********************************CreateQuote Page***********************************/
/***********************************Get Request***********************************/

    Route::get("/", "createquote.page");
    Route::get("/createquote", "createquote.page");
    Route::get("/getQuoteform/?id", "createquote.getQuoteform");
    Route::get("/getAlredyGivenQuote/?id/?srch", "createquote.getAlredyGivenQuote");
    Route::get("/getfilledQuoteform/?id/?c_q_id", "createquote.getfiledQuoteform");

/***********************************Post Request***********************************/

    Route::post("/createquote/quote", "createquote.quote");
    Route::post("/giveQuotation/","give_quotationController._give");

/***********************************Update Request***********************************/

/***********************************Delete Request***********************************/

/*********************************Quotationfollowup Page***********************************/
/***********************************Get Request***********************************/
Route::get("/quotationFollowUp","QuotationFollowUp.page");

/***********************************Post Request***********************************/

/***********************************Update Request***********************************/

/***********************************Delete Request***********************************/


/*********************************Vouchersandpayemnts Page***********************************/
/***********************************Get Request***********************************/
Route::get("/vouchersAndPayments" ,"VouchersAndPayments.page");

/***********************************Post Request***********************************/

/***********************************Update Request***********************************/

/***********************************Delete Request***********************************/

/*********************************During Stay Page***********************************/
/***********************************Get Request***********************************/
Route::get("/duringStay","DuringStay.page");

/***********************************Post Request***********************************/

/***********************************Update Request***********************************/

/***********************************Delete Request***********************************/

/*********************************Post stay Page***********************************/
/***********************************Get Request***********************************/
Route::get("/postStay","PostStay.page");

/***********************************Post Request***********************************/

/***********************************Update Request***********************************/

/***********************************Delete Request***********************************/

/*********************************SpocManagement Page***********************************/
/***********************************Get Request***********************************/
Route::get("/spocManagement","SpocManagement.page");

/***********************************Post Request***********************************/

/***********************************Update Request***********************************/

/***********************************Delete Request***********************************/

/*********************************CreateQuote Page***********************************/
/***********************************Get Request***********************************/
Route::get("/spocManagement", function () {

});

/***********************************Post Request***********************************/

/***********************************Update Request***********************************/

/***********************************Delete Request***********************************/

echo "end of route";