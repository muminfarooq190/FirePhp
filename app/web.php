<?php
require_once 'config.tpl';
require_once '../framework/Helper/helpers.php';

use framework\Routing\Route;

session_start();
/*********************************CreateQuote Page***********************************/
/***********************************Get Request***********************************/
    Route::get("/", "createquote.page");
    Route::get("/createquote", "createquote.page");
    Route::get("/createquote/quote", "createquote.quote");

/***********************************Post Request***********************************/

/***********************************Update Request***********************************/

/***********************************Delete Request***********************************/

/*********************************CreateQuote Page***********************************/
/***********************************Get Request***********************************/
Route::get("/quotationFollowUp", function () {

});

/***********************************Post Request***********************************/

/***********************************Update Request***********************************/

/***********************************Delete Request***********************************/


/*********************************CreateQuote Page***********************************/
/***********************************Get Request***********************************/
Route::get("/vouchersAndPayments", function () {

});

/***********************************Post Request***********************************/

/***********************************Update Request***********************************/

/***********************************Delete Request***********************************/

/*********************************CreateQuote Page***********************************/
/***********************************Get Request***********************************/
Route::get("/duringStay", function () {

});

/***********************************Post Request***********************************/

/***********************************Update Request***********************************/

/***********************************Delete Request***********************************/

/*********************************CreateQuote Page***********************************/
/***********************************Get Request***********************************/
Route::get("/postStay", function () {

});

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

/*********************************CreateQuote Page***********************************/
/***********************************Get Request***********************************/
Route::get("/spocManagement", function () {

});

/***********************************Post Request***********************************/

/***********************************Update Request***********************************/

/***********************************Delete Request***********************************/

