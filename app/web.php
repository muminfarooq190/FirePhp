<?php
    require_once 'config.tpl';
    require_once '../framework/Helper/helpers.php';

use app\Model\Model;
use framework\Routing\Route;


    session_start();
    Route::get("/","createquote.page");
    Route::get("/quotationFollowUp",function(){
        view("quotationfollowup");
    });
    Route::get("/vouchersAndPayments",function(){
        view("vouchersandpayments");
    });
    Route::get("/duringStay",function(){
        view("duringstay");
    });
    Route::get("/postStay",function(){
        view("poststay");
    });
    Route::get("/spocManagement",function(){
        view("spocmanagement");
    });

Route::get("/spocManagement",function(){
    view("spocmanagement");
});




view("404");