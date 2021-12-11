<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="<?=STYLE?>style.css">
    <link rel="stylesheet" href="<?=STYLE?>postay.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <!-- Compiled and minified JavaScript -->
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
</head>
<body>
    <div class="wrapper">
        <nav class="navbar ">
            <div class="nav-wrapper">
              <a href="#" class="brand-logo">Fire Fly</a>
              
              <ul style="margin-left: 400px;" id="nav-mobile" class="left hide-on-med-and-down">
              
                <li>
                    <div class="row wrap">
                        <form class="col s12">
                            <div class="row">
                        <div class="search col s12">
                           <input type="text" class="searchTerm" placeholder="What are you looking for?">
                           
                             <i class="material-icons">search</i>
                          
                        </div>
                    </div>
                    </form>
                     </div>
                   
              </ul>

              <ul id="nav-mobile" class="right hide-on-med-and-down">

                <li>
                    <a class="circle dimcolor" href="#">
                        <svg viewBox="0 0 28 23" id="RapidFireIcon">
                            <use href="<?=ICONS?>icons.svg#QuestionIcon-usage" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="circle dimcolor" href="#">
                        <svg viewBox="0 0 28 23" id="RapidFireIcon">
                            <use href="<?=ICONS?>icons.svg#AccountsIcon-usage" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="circle dimcolor" href="#">
                        <svg viewBox="0 0 28 23" id="RapidFireIcon">
                            <use href="<?=ICONS?>icons.svg#StatisticsIcon-usage" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="circle dimcolor" href="#">
                        <svg viewBox="0 0 28 23" id="RapidFireIcon">
                            <use href="<?=ICONS?>icons.svg#CalendarWhiteIcon-usage" />
                        </svg>
                    </a>
                </li><li>
                    <a class="circle dimcolor" href="#">
                        <svg viewBox="0 0 28 23" id="RapidFireIcon">
                            <use href="<?=ICONS?>icons.svg#NotificationWhiteIcon-usage" />
                        </svg>
                    </a>
                </li>
                &nbsp;
                 <li>
                     <img style="width: 27px; margin-top: 18px; " alt="25398730_1970901499792686_5269957657050947601_n" class="circle responsive-img" src="https://img.traveltriangle.com/attachments/users/278401/original/25398730_1970901499792686_5269957657050947601_n.png?tr=,w-100,h-100">
                    <!-- notice the "circle" class -->
                    <a style="margin-top: -71px !important; margin-left: 14px;" class="dropdown-trigger" href="#!" data-target="dropdown1">Fly Paradise to...<i class="material-icons right">arrow_drop_down</i></a></li>
  
              </ul>
            </div>
        </nav>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>