<div>
    <style>
        .xsm{
            width: 120px!important;
        }
        .sm{
            width: 17%!important;
        }
        .md{
            width: 22%!important;
        }
        .lg{
            width: 33%!important;
        }
        .xlg{
            width: 45%!important;
        }
        .full{
            width: 97%!important;
        }
        .half{
            width: 48%!important;
        }
        input.h2,.qff{
            height: 2rem !important;
            margin: 0!important;
            padding: 10px!important;
            border: none!important;

        }
        textarea.h2{
            max-width: 100%;
        }
        .qff{
            width: 100px!important;
        }
        .qff input
        {
            height: 100% !important;
            border: none!important;
            color: rgba(0, 0, 0, 0.38);
            font-size: 17px !important;

        }
        .qff ul{
            width: 116px!important;
            left: -10px!important;
            top: 37px!important;
            border: 2px solid #2a92bd!important;
            border-top: 1px solid #2a92bd6b !important;

        }
        .qff .caret{
            right: -14px!important;
        }
        .dropdown-content li{
            min-height: auto !important;
        }
        .dropdown-content li>span
        {
            padding: 5px 7px;
            border-bottom: 1px solid #2a92bd6b;
            font-size: 13px;
        }
        .modal-main:after {
            content: "";
            display: none;
            background: rgba(0, 0, 0, 0.6);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 9998;

        }
        .modal-main.opened:after {
            display: block;
        }
        .modal-main .modal-form {
            width: calc(100%);
            position: absolute;
            border-radius: 3px;
            background: #ffffff;
            z-index: 9999;
            right: 0;
            top: 0px;
        }
        .modal-main .modal-form .modal-head, .modal-main .modal-form .modal-content, .modal-main .modal-form .modal-footer {
            position: relative;
            padding: 10px 20px;

        }
        .modal-main .modal-form .modal-head {
            border-bottom: 1px solid #e6e6e6;
            display: flex;
            flex-flow: column;
        }
        .modal-main .modal-form .modal-head .modal-btn-close {
            position: absolute;
            right: 0;
            margin-right: 20px;
            cursor: pointer;
            color: rgba(34, 34, 34, 0.5);
        }
        .modal-main .modal-form .modal-head .title {

            font-weight: 700;
            font-size: 16px;
            text-align: center;
            margin: 10px 0;
        }
        .modal-main .modal-form .modal-head .subtitle {
            font-size: 0.8rem;
            text-align: center;
            color: #222222;
        }
        .opened{
            display: block;
        }
        .hide{
            display: none;
        }
        .modal-main .modal-form .modal-contented .form-main {
            display: flex;
            flex-flow: column;
            align-items: center;
            width: 100%;

        }
        .modal-main .modal-form .modal-contented .form-main .form__group {
            position: relative;
            padding: 15px 0 0;
            margin-top: 10px;
            width: 90%;
        }
        .modal-main .modal-form .modal-contented .form-main .form__field {
            font-family: inherit;
            width: 100%;
            border: 0;
            border-bottom: 1px solid #d2d2d2;
            outline: 0;
            font-size: 16px;
            color: #212121;
            padding: 7px 0;
            background: transparent;
            transition: border-color 0.2s;
        }
        .modal-main .modal-form .modal-contented .form-main .form__field::placeholder {
            color: transparent;
        }
        .modal-main .modal-form .modal-contented .form-main .form__field:placeholder-shown ~ .form__label {
            font-size: 16px;
            cursor: text;
            top: 20px;
        }
        .modal-main .modal-form .modal-contented .form-main .form__label {
            position: absolute;
            top: 0;
            display: block;
            transition: 0.2s;
            font-size: 12px;
            color: #9b9b9b;
        }
        .modal-main .modal-form .modal-contented .form-main .form__field:focus {
            padding-bottom: 6px;
            border-bottom: 2px solid #2a92bd;
            font-weight: 700;
        }
        .modal-main .modal-form .modal-contented .form-main .form__field:focus ~ .form__label {
            position: absolute;
            top: 0;
            display: block;
            transition: 0.2s;
            font-size: 12px;
            color: #2a92bd;
        }
        .modal-main .modal-form .modal-footer {
            display: flex;
        }
        .modal-main .modal-form .modal-footer .submit-box {
            display: flex;
            flex-flow: row;
            width: 100%;
            align-items: center;
        }
        .modal-main .modal-form .modal-footer .submit-box .modal-btn, .modal-main .modal-form .modal-footer .submit-box span {
            width: 30%;
        }
        .modal-main .modal-form .modal-footer .submit-box .modal-btn {
            margin-top: 5px;
            padding: 10px;
            background-color: #2a92bd;
            width: 110px;
            color: #ffffff;
            border: 1px solid #2a92bd;
            font-size: 1rem;
            transition: all 250ms cubic-bezier(0.32, 1, 0.23, 1) 100ms;
        }
        .modal-main .modal-form .modal-footer .submit-box .modal-btn:hover, .modal-main .modal-form .modal-footer .submit-box .modal-btn:focus, .modal-main .modal-form .modal-footer .submit-box .modal-btn:active {
            background-color: #2a92bd;
            font-size: 16px;
        }
        .modal-main .modal-form .modal-footer .submit-box span {
            margin-top: 5px;

            text-align: left;
            color: #222222;
        }
        .contine {
            margin: auto;
        }

        .gg-bound-control.hasValue .gg-bound-control-label, .gg-bound-control-input:not([disabled]):focus ~ .gg-bound-control-label {
            transform: scale(0.75) translateY(-39px);
        }
        .gg-bound-control.hasValue .gg-bound-control-label, .gg-bound-control-input:not([disabled]):valid ~ .gg-bound-control-label {
            transform: scale(0.75) translateY(-39px);
        }
        .gg-bound-control {
            -webkit-tap-highlight-color: transparent;
            box-sizing: content-box;
            width: 100%;
            font-size: 15px;
            outline: none;
        }
        .gg-bound-control-outer {
            box-sizing: inherit;

        }
        .gg-bound-control-inner {
            box-sizing: inherit;
            display: flex;
            position: relative;

        }
        .gg-bound-control-wrapper {
            box-sizing: inherit;
            display: flex;
            flex-grow: 1;
            flex-shrink: 1;
            min-width: 0%;
            position: relative;
        }
        .gg-bound-control-input {
            box-sizing: inherit;
            flex-grow: 1;
            flex-shrink: 1;
            background-color: transparent;
            border: none !important;
            display: block;
            font: 400 17px Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            height: 28px;
            line-height: 24px;
            min-width: 0%;
            outline: none;
            border-radius: 4px;
            color: #202124;

            padding: 13px 15px;
            z-index: 1;
        }
        .gg-bound-control-input:not([disabled]):focus ~ .gg-bound-control-label {
            color: #2a92bd;
        }
        .gg-bound-control-label {
            box-sizing: border-box;
            color: #80868b;
            transform-origin: bottom left;
            transition-property: color, bottom, transform;
            color: rgba(0, 0, 0, 0.38);
            font-size: 17px;
            pointer-events: none;
            position: absolute;
            top: 11px;
            left: 8px;
            padding: 0 8px;
            background: #fff;
            transition: transform 150ms cubic-bezier(0.4, 0, 0.2, 1), opacity 150ms cubic-bezier(0.4, 0, 0.2, 1);
            width: auto;
            z-index: 1;
        }
        .gg-bound-control-df-bottom-border {
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            background-color: transparent;
            position: absolute;
            bottom: 0;
            left: 0;
            margin: 0;
            padding: 0;
            border: 1px solid #dadce0;
            border-radius: 4px;
        }
        .gg-bound-control-df-bottom-border:before {
            content: "";
            position: absolute;
            top: 0;
            bottom: -2px;
            left: 0;
            right: 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0);
            pointer-events: none;
        }
        .gg-bound-control-ef-bottom-border {
            box-sizing: content-box;
            -webkit-animation: quantumWizPaperInputRemoveUnderline 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            animation: quantumWizPaperInputRemoveUnderline 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background-color: transparent;
            height: calc(100% - 2*2px);
            width: calc(100% - 2*2px);
            position: absolute;
            bottom: 0;
            left: 0;
            margin: 0;
            padding: 0;
            border-radius: 4px;
            opacity: 0;
            transform: none;
            transition: opacity 150ms cubic-bezier(0.4, 0, 0.2, 1);
        }
        .gg-bound-control.active-gg-bound-control .gg-bound-control-ef-bottom-border {
            -webkit-animation: none;
            animation: none;
            transform: scale(1);
            border: 2px solid #2a92bd;
            opacity: 1;
        }
        @-webkit-keyframes quantumWizPaperInputRemoveUnderline {
            0% {
                transform: scaleX(1);
                opacity: 1;
            }
            100% {
                transform: scaleX(1);
                opacity: 0;
            }
        }
        @keyframes quantumWizPaperInputRemoveUnderline {
            0% {
                transform: scaleX(1);
                opacity: 1;
            }
            100% {
                transform: scaleX(1);
                opacity: 0;
            }
        }
        @-webkit-keyframes quantumWizPaperInputAddUnderline {
            0% {
                transform: scaleX(0);
            }
            100% {
                transform: scaleX(1);
            }
        }
        @keyframes quantumWizPaperInputAddUnderline {
            0% {
                transform: scaleX(0);
            }
            100% {
                transform: scaleX(1);
            }
        }

    </style>
    <div class="modal-main" id="modal">
        <div class="modal-form">
            <div class="modal-head">
            <span class="modal-btn-close">
                <a title="Close" class="close"><i class="fas fa-times close-btn"></i></a>
            </span>
                <h2 style=" font-size: 20px !important;" class="title">Quotation Form</h2>
            </div>
            <div class="modal-contented">
                <?php
                   $cq=new \app\Model\customer_querie();
                   $cq->get($request->id);
                   if($cq->next()){
                       $duration=$cq->duration;
                       ?>
                       <form id="form-main" class="form-main">
                           <input type="hidden" name="id" value="<?=$request->id?>">
                           <?php
                                for ($i=1;$i<=$duration;$i++){
                                    ?>
                                    <div day="day<?=$i?>" style="width: 100%; padding: 10px" id="<?=$i?>" class="row days day<?=$i?>">
                                        <h5 style="margin: 5px">Day <?=$i?></h5>
                                        <div style="margin: 6px" class="col md">
                                            <div class="contine">
                                                <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                                    <div class="gg-bound-control-outer">
                                                        <div class="gg-bound-control-inner">
                                                            <div class="gg-bound-control-wrapper">
                                                                <input required="required" class="h2 gg-bound-control-input" id="destinationpointinput" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Hotelname">
                                                                <div class="gg-bound-control-label">Destination Point</div>
                                                            </div>
                                                            <div class="gg-bound-control-df-bottom-border"></div>
                                                            <div class="gg-bound-control-ef-bottom-border"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin: 6px" class="col md">
                                            <div class="contine">
                                                <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                                    <div class="gg-bound-control-outer">
                                                        <div class="gg-bound-control-inner">
                                                            <div class="gg-bound-control-wrapper">
                                                                <input required="required" class="h2 gg-bound-control-input" id="hotelnameinput" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Hotelname">
                                                                <div class="gg-bound-control-label">Hotel Name</div>
                                                            </div>
                                                            <div class="gg-bound-control-df-bottom-border"></div>
                                                            <div class="gg-bound-control-ef-bottom-border"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin: 6px" class="col md">
                                            <div class="contine">
                                                <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                                    <div class="gg-bound-control-outer">
                                                        <div class="gg-bound-control-inner">
                                                            <div class="gg-bound-control-wrapper">
                                                                <input required="required" class="h2 gg-bound-control-input" id="hoteladdresstinput" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Hotel Address">
                                                                <div class="gg-bound-control-label">Hotel Address</div>
                                                            </div>
                                                            <div class="gg-bound-control-df-bottom-border"></div>
                                                            <div class="gg-bound-control-ef-bottom-border"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin: 6px; " class="col xsm">
                                            <div class="contine">
                                                <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                                    <div class="gg-bound-control-outer">
                                                        <div class="gg-bound-control-inner">
                                                            <div id="dropdowncontainer"  class="qff gg-bound-control-wrapper">
                                                                <select  id="roomtypecheckbox" name="RoomType">
                                                                    <option value="0">Room Type</option>
                                                                    <option value="1">a</option>
                                                                    <option value="2">a</option>
                                                                </select>
                                                            </div>
                                                            <div    class="gg-bound-control-df-bottom-border"></div>
                                                            <div class="gg-bound-control-ef-bottom-border"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin: 6px; " class="col xsm">
                                            <div class="contine">
                                                <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                                    <div class="gg-bound-control-outer">
                                                        <div class="gg-bound-control-inner">
                                                            <div class="qff gg-bound-control-wrapper">
                                                                <select  id="hotelratingcheckbox">
                                                                    <option value="0" selected>Hotel Rating</option>
                                                                    <option value="1">a</option>
                                                                    <option value="2">a</option>
                                                                </select>
                                                            </div>
                                                            <div class="gg-bound-control-df-bottom-border"></div>
                                                            <div class="gg-bound-control-ef-bottom-border"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin: 6px;" class="half col">
                                            <div class="contine">
                                                <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                                    <div class="gg-bound-control-outer">
                                                        <div class="gg-bound-control-inner">
                                                            <div class="gg-bound-control-wrapper">
                                                                <textarea  required="required" id="inclusionstextarea"  rows="1" onkeyup="textAreaAdjust(this)" class="h2 gg-bound-control-input" style="width: 50% !important;"></textarea>
                                                                <div class="gg-bound-control-label">Inclusions</div>
                                                            </div>
                                                            <div class="gg-bound-control-df-bottom-border"></div>
                                                            <div class="gg-bound-control-ef-bottom-border"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin: 6px;" class="half col">
                                            <div class="contine">
                                                <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                                    <div class="gg-bound-control-outer">
                                                        <div class="gg-bound-control-inner">
                                                            <div class="gg-bound-control-wrapper">
                                                                <textarea  required="required" id="exclusionstextarea"  rows="1" onkeyup="textAreaAdjust(this)" class="h2 gg-bound-control-input"></textarea>
                                                                <div class="gg-bound-control-label">Exlusions</div>
                                                            </div>
                                                            <div class="gg-bound-control-df-bottom-border"></div>
                                                            <div class="gg-bound-control-ef-bottom-border"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin: 6px;" class="full col">
                                            <div class="contine">
                                                <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                                    <div class="gg-bound-control-outer">
                                                        <div class="gg-bound-control-inner">
                                                            <div class="gg-bound-control-wrapper">
                                                                <textarea id="itenarytextarea" required="required" rows="1" onkeyup="textAreaAdjust(this)" class="h2 gg-bound-control-input"></textarea>
                                                                <div class="gg-bound-control-label">Itenary</div>
                                                            </div>
                                                            <div class="gg-bound-control-df-bottom-border"></div>
                                                            <div class="gg-bound-control-ef-bottom-border"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                           <?php
                                }
                           ?>
                       </form>
                <?php
                   }
                ?>

            </div>
            <div class="modal-footer">
                <div class="submit-box">
                    <div style="margin: 6px; " class="col sm">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <input required="required" id="flightinput" class="h2 gg-bound-control-input" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Explore ">
                                            <div class="gg-bound-control-label">Flight</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin: 6px; " class="col sm">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <input required="required" id="cabinput" class="h2 gg-bound-control-input" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Cab">
                                            <div class="gg-bound-control-label">Cab</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin: 6px; " class="col half">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <input required="required" id="priceinput" class="h2 gg-bound-control-input" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Cab">
                                            <div class="gg-bound-control-label">Total Quotation Price</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="modal-btn" id="sendQuote" onclick="sendQuote()"  type="submit">Send</button>
                    <button style="margin-left: 20px !important;" class="modal-btn" id="addDay" type="">Add</button>

                </div>
            </div>
        </div>
    </div>
    <script>

        $(".close").click(function () {
            this.parentElement.parentElement.parentElement.parentElement.parentElement.remove();
        });
        function sendQuote(){
            let HTTP_HOST=$("#HTTP_HOST").val();
            let days = {}
            $(".days").each(function (index,day){
                let destinationinpt=$(day).find("#destinationpointinput").val();
                let hotelname=$(day).find("#hotelnameinput").val();
                let hoteladdress=$(day).find("#hoteladdresstinput").val();
                let hotelroomtypechecked=$(day).find("#roomtypecheckbox:selected").val();
                let hotelratingchecked=$(day).find("#hotelratingcheckbox:selected").val();
                let inclusions=$(day).find("#inclusionstextarea").val();
                let exclusions=$(day).find("#exclusionstextarea").val();
                let itenary=$(day).find("#itenarytextarea").val();

                data={
                    "destinationPoint":destinationinpt,
                    "hotelName":hotelname,
                    "hotelAddress":hoteladdress,
                    "hotelRoomType":hotelroomtypechecked,
                    "hotelRating":hotelratingchecked,
                    "inclusions":inclusions,
                    "exclusions":exclusions,
                    "itenary":itenary
                }
                days[$(day).attr("day")]=data;
            })
            let flight = $('#flightinput').val();
            let cab = $('#cabinput').val();
            days.flight=flight;
            days.cab=cab;


            // if (destinationinpt.length <= 0 ) {
            //     alert("Destination is required");
            //     $('#destinationpointinput').focus();
            //     return false;
            // }

            // if (hotelname.length <= 0 ) {
            //     alert("Hotelname is required");
            //     $('#hotelnameinput').focus();
            //     return false;
            // }
            //
            // if (hoteladdress.length <= 0 ) {
            //     alert("hoteladdress is required");
            //     $('#hoteladdresstinput').focus();
            //     return false;
            // }
            //
            // if (inclusions.length <= 0 ) {
            //     alert("inclusions is required");
            //     $('#inclusionstextarea').focus();
            //     return false;
            // }
            //
            // if (exclusions.length <= 0 ) {
            //     alert("exlusions is required");
            //     $('#exclusionstextarea').focus();
            //     return false;
            // }
            // if (itenary.length <= 0 ) {
            //     alert("itenary is required");
            //     $('#itenarytextarea').focus();
            //     return false;
            // }
            //
            // if (flight.length <= 0 ) {
            //     alert("fligh is required");
            //     $('#flightinput').focus();
            //     return false;
            // }
            //
            // if (cab.length <= 0 ) {
            //     alert("cab is required");
            //     $('#cabinput').focus();
            //     return false;
            // }
           /* this.data = {
                'HotelName' : hotelname,
                'HotelAddress':hoteladdress,
                'HotelRoomType':hotelroomtypechecked,
                'HotelRating':hotelratingchecked,
                'Inclusions':inclusions,
                'Exclusions':exclusions,
                'Itenary':itenary,
                'Flight':flight,
                'Cab':cab
            };

            sendQuoteFormData(HTTP_HOST+"giveQuote",this.data)
                .done(function( Response,textStatus ) {
                    alert(Response + "form")
                })
                .fail(function( jqXHR, textStatus ) {
                    alert( "form not submitted " + textStatus );
                });*/

        }
        function sendQuoteFormData($url,$data={}){
            return  $.ajax({
                url: $url,
                method: "POST",
                data: $data,
            });
        }
        $("#addDay").on("click",function (){
            let lastdayid = ($('.form-main').children().last().attr('id'))

            lastdayid = parseInt(lastdayid)
            let lastday = lastdayid + 1
            //here i am grabbing form as a parent
            let parent =  document.getElementById("form-main")

            //here i am creating parent div for new day to be added
            let Day = document.createElement('div')
            Day.id = lastday
            //adding styles to that div
            Day.classList.add('row')
            Day.classList.add('days')
            Day.classList.add('day')
            Day.style.width = '100%'
            Day.style.padding = '10px'

            //creating heading for new day

            let heading = document.createElement('h5')
            heading.style.margin = '5px'
            heading.innerText = "Day" + lastday

            // creating first part first row





            Day.appendChild(heading)
            Day.innerHTML += '<a style="margin-top: -10px; cursor:pointer; " onclick="clearDay(this)" title="" class=""><i class="fas fa-times close-btn"></i></a>' +
                '<div style="margin: 6px" class="col md">' +
                '<div class="contine">' +
                    '<div class="gg-bound-control" data-bound-control  onclick="this.classList.add("active-gg-bound-control")">' +
                        ' <div class="gg-bound-control-outer">' +
                            '<div class="gg-bound-control-inner">' +
                                '<div class="gg-bound-control-wrapper">' +
                                    '<input required="required" class="h2 gg-bound-control-input" id="destinationpointinput" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Hotelname">' +
                                    ' <div class="gg-bound-control-label">Destination Point</div>' +
                                    '</div>' +
                                    ' <div class="gg-bound-control-df-bottom-border"></div>' +
                                    '<div class="gg-bound-control-ef-bottom-border"></div>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>'+
                '</div>'+
                '<div style="margin: 6px" class="col md">' +
                '<div class="contine">' +
                '<div class="gg-bound-control" data-bound-control onclick="this.classList.add("active-gg-bound-control")">' +
                ' <div class="gg-bound-control-outer">' +
                '<div class="gg-bound-control-inner">' +
                '<div class="gg-bound-control-wrapper">' +
                '<input required="required" class="h2 gg-bound-control-input" id="hotelnameinput" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Hotelname">' +
                ' <div class="gg-bound-control-label">Hotel Name</div>' +
                '</div>' +
                ' <div class="gg-bound-control-df-bottom-border"></div>' +
                '<div class="gg-bound-control-ef-bottom-border"></div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>'+
                '</div>'+
                '<div style="margin: 6px" class="col md">' +
                '<div class="contine">' +
                '<div class="gg-bound-control" data-bound-control onclick="this.classList.add("active-gg-bound-control")">' +
                ' <div class="gg-bound-control-outer">' +
                '<div class="gg-bound-control-inner">' +
                '<div class="gg-bound-control-wrapper">' +
                '<input required="required" class="h2 gg-bound-control-input" id="hoteladdressinput" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Hotelname">' +
                ' <div class="gg-bound-control-label">Hotel Address</div>' +
                '</div>' +
                ' <div class="gg-bound-control-df-bottom-border"></div>' +
                '<div class="gg-bound-control-ef-bottom-border"></div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>'+
                '</div>' +
                '<div style="margin: 6px" class="col xsm">' +
                '<div class="contine">' +
                '<div class="gg-bound-control" data-bound-control onclick="this.classList.add("active-gg-bound-control")">' +
                ' <div class="gg-bound-control-outer">' +
                '<div class="gg-bound-control-inner">' +
                '<div class=" qff gg-bound-control-wrapper">' +
                '<select  id="roomtypecheckbox" name="RoomType">'+
                '<option value="0">Room Type</option>'+
                '<option value="1">a</option>'+
                '<option value="2">a</option>'+
                '</select>'+
                '</div>' +
                ' <div class="gg-bound-control-df-bottom-border"></div>' +
                '<div class="gg-bound-control-ef-bottom-border"></div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>'+
                '</div>'+

                '<div style="margin: 6px" class="col xsm">' +
                '<div class="contine">' +
                '<div class="gg-bound-control" data-bound-control onclick="this.classList.add("active-gg-bound-control")">' +
                ' <div class="gg-bound-control-outer">' +
                '<div class="gg-bound-control-inner">' +
                '<div class=" qff gg-bound-control-wrapper">' +
                '<select  id="hotelratingcheckbox" name="RoomType">'+
                '<option value="0">Hotel Rating</option>'+
                '<option value="1">a</option>'+
                '<option value="2">a</option>'+
                '</select>'+
                '</div>' +
                ' <div class="gg-bound-control-df-bottom-border"></div>' +
                '<div class="gg-bound-control-ef-bottom-border"></div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>'+
                '</div>' +
                '<div style="margin: 6px" class="half col">' +
                '<div class="contine">' +
                '<div class="gg-bound-control" data-bound-control onclick="this.classList.add("active-gg-bound-control")">' +
                ' <div class="gg-bound-control-outer">' +
                '<div class="gg-bound-control-inner">' +
                '<div class="gg-bound-control-wrapper">' +
                '<textarea  required="required" id="inclusionstextarea"  rows="1" onkeyup="textAreaAdjust(this)" class="h2 gg-bound-control-input" style="width: 50% !important;"></textarea>' +
                ' <div class="gg-bound-control-label">Inclusions</div>' +
                '</div>' +
                ' <div class="gg-bound-control-df-bottom-border"></div>' +
                '<div class="gg-bound-control-ef-bottom-border"></div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>'+
                '</div>'+
                '<div style="margin: 6px" class="half col">' +
                '<div class="contine">' +
                '<div class="gg-bound-control" data-bound-control onclick="this.classList.add("active-gg-bound-control")">' +
                ' <div class="gg-bound-control-outer">' +
                '<div class="gg-bound-control-inner">' +
                '<div class="gg-bound-control-wrapper">' +
                '<textarea  required="required" id="exclusionstextarea"  rows="1" onkeyup="textAreaAdjust(this)" class="h2 gg-bound-control-input" style="width: 50% !important;"></textarea>' +
                ' <div class="gg-bound-control-label">Exclusions</div>' +
                '</div>' +
                ' <div class="gg-bound-control-df-bottom-border"></div>' +
                '<div class="gg-bound-control-ef-bottom-border"></div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>'+
                '</div>' +
                '<div style="margin: 6px" class="full col">' +
                '<div class="contine">' +
                '<div class="gg-bound-control" data-bound-control onclick="this.classList.add("active-gg-bound-control")">' +
                ' <div class="gg-bound-control-outer">' +
                '<div class="gg-bound-control-inner">' +
                '<div class="gg-bound-control-wrapper">' +
                '<textarea  required="required" id="itenarytextarea"  rows="1" onkeyup="textAreaAdjust(this)" class="h2 gg-bound-control-input" style="width: 50% !important;"></textarea>' +
                ' <div class="gg-bound-control-label">Itenary</div>' +
                '</div>' +
                ' <div class="gg-bound-control-df-bottom-border"></div>' +
                '<div class="gg-bound-control-ef-bottom-border"></div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>'+
                '</div>';

            parent.appendChild(Day)

        });
function clearDay(e)
{
    e.parentElement.remove()
}
    </script>
</div>

