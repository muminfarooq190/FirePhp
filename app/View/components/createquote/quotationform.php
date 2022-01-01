<div>
    <style>

        .jq-toast-wrap,.jq-toast-wrap *{margin:0;padding:0}.jq-toast-wrap{display:block;position:fixed;width:250px;pointer-events:none!important;letter-spacing:normal;z-index:9000!important}.jq-toast-wrap.bottom-left{bottom:20px;left:20px}.jq-toast-wrap.bottom-right{bottom:20px;right:40px}.jq-toast-wrap.top-left{top:20px;left:20px}.jq-toast-wrap.top-right{top:20px;right:40px}.jq-toast-single{display:block;width:100%;padding:10px;margin:0 0 5px;border-radius:4px;font-size:12px;font-family:arial,sans-serif;line-height:17px;position:relative;pointer-events:all!important;background-color:#444;color:#fff}.jq-toast-single h2{font-family:arial,sans-serif;font-size:14px;margin:0 0 7px;background:0 0;color:inherit;line-height:inherit;letter-spacing:normal}.jq-toast-single a{color:#eee;text-decoration:none;font-weight:700;border-bottom:1px solid #fff;padding-bottom:3px;font-size:12px}.jq-toast-single ul{margin:0 0 0 15px;background:0 0;padding:0}.jq-toast-single ul li{list-style-type:disc!important;line-height:17px;background:0 0;margin:0;padding:0;letter-spacing:normal}.close-jq-toast-single{position:absolute;top:3px;right:7px;font-size:14px;cursor:pointer}.jq-toast-loader{display:block;position:absolute;top:-2px;height:5px;width:0;left:0;border-radius:5px;background:red}.jq-toast-loaded{width:100%}.jq-has-icon{padding:10px 10px 10px 50px;background-repeat:no-repeat;background-position:10px}.jq-icon-info{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhLtZa9SgNBEMc9sUxxRcoUKSzSWIhXpFMhhYWFhaBg4yPYiWCXZxBLERsLRS3EQkEfwCKdjWJAwSKCgoKCcudv4O5YLrt7EzgXhiU3/4+b2ckmwVjJSpKkQ6wAi4gwhT+z3wRBcEz0yjSseUTrcRyfsHsXmD0AmbHOC9Ii8VImnuXBPglHpQ5wwSVM7sNnTG7Za4JwDdCjxyAiH3nyA2mtaTJufiDZ5dCaqlItILh1NHatfN5skvjx9Z38m69CgzuXmZgVrPIGE763Jx9qKsRozWYw6xOHdER+nn2KkO+Bb+UV5CBN6WC6QtBgbRVozrahAbmm6HtUsgtPC19tFdxXZYBOfkbmFJ1VaHA1VAHjd0pp70oTZzvR+EVrx2Ygfdsq6eu55BHYR8hlcki+n+kERUFG8BrA0BwjeAv2M8WLQBtcy+SD6fNsmnB3AlBLrgTtVW1c2QN4bVWLATaIS60J2Du5y1TiJgjSBvFVZgTmwCU+dAZFoPxGEEs8nyHC9Bwe2GvEJv2WXZb0vjdyFT4Cxk3e/kIqlOGoVLwwPevpYHT+00T+hWwXDf4AJAOUqWcDhbwAAAAASUVORK5CYII=);background-color:#31708f;color:#d9edf7;border-color:#bce8f1}.jq-icon-warning{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVEhL5ZSvTsNQFMbXZGICMYGYmJhAQIJAICYQPAACiSDB8AiICQQJT4CqQEwgJvYASAQCiZiYmJhAIBATCARJy+9rTsldd8sKu1M0+dLb057v6/lbq/2rK0mS/TRNj9cWNAKPYIJII7gIxCcQ51cvqID+GIEX8ASG4B1bK5gIZFeQfoJdEXOfgX4QAQg7kH2A65yQ87lyxb27sggkAzAuFhbbg1K2kgCkB1bVwyIR9m2L7PRPIhDUIXgGtyKw575yz3lTNs6X4JXnjV+LKM/m3MydnTbtOKIjtz6VhCBq4vSm3ncdrD2lk0VgUXSVKjVDJXJzijW1RQdsU7F77He8u68koNZTz8Oz5yGa6J3H3lZ0xYgXBK2QymlWWA+RWnYhskLBv2vmE+hBMCtbA7KX5drWyRT/2JsqZ2IvfB9Y4bWDNMFbJRFmC9E74SoS0CqulwjkC0+5bpcV1CZ8NMej4pjy0U+doDQsGyo1hzVJttIjhQ7GnBtRFN1UarUlH8F3xict+HY07rEzoUGPlWcjRFRr4/gChZgc3ZL2d8oAAAAASUVORK5CYII=);background-color:#8a6d3b;color:#fcf8e3;border-color:#faebcc}.jq-icon-error{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa/SgNBEMZzh0WKCClSCKaIYOED+AAKeQQLG8HWztLCImBrYadgIdY+gIKNYkBFSwu7CAoqCgkkoGBI/E28PdbLZmeDLgzZzcx83/zZ2SSXC1j9fr+I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10+8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8+J4C7yAoRTWI3w/4klGRgR4lO7Rpn9+gvMyWp+uxFh8+H+ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc/oO+mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB+oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq/S/B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c/HWOXJGsvVg+RA/k2MC/wN6I2YA2Pt8GkAAAAASUVORK5CYII=);background-color:#a94442;color:#f2dede;border-color:#ebccd1}.jq-icon-success{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==);color:#dff0d8;background-color:#3c763d;border-color:#d6e9c6}
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
        .days{
            position: relative;
        }
        .clearday{
        position: absolute;
        right: 5%;
        top: 5%;
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
                           <input type="hidden" id="c_q_id" name="c_q_id" value="<?=$request->id?>">
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
                                            <input required="required" id="totalprice" class="h2 gg-bound-control-input" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Cab">
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
        /* file */
        "function"!=typeof Object.create&&(Object.create=function(t){function o(){}return o.prototype=t,new o}),function(t,o){"use strict";var i={_positionClasses:["bottom-left","bottom-right","top-right","top-left","bottom-center","top-center","mid-center"],_defaultIcons:["success","error","info","warning"],init:function(o){this.prepareOptions(o,t.toast.options),this.process()},prepareOptions:function(o,i){var s={};"string"==typeof o||o instanceof Array?s.text=o:s=o,this.options=t.extend({},i,s)},process:function(){this.setup(),this.addToDom(),this.position(),this.bindToast(),this.animate()},setup:function(){var o="";if(this._toastEl=this._toastEl||t("<div></div>",{"class":"jq-toast-single"}),o+='<span class="jq-toast-loader"></span>',this.options.allowToastClose&&(o+='<span class="close-jq-toast-single">&times;</span>'),this.options.text instanceof Array){this.options.heading&&(o+='<h2 class="jq-toast-heading">'+this.options.heading+"</h2>"),o+='<ul class="jq-toast-ul">';for(var i=0;i<this.options.text.length;i++)o+='<li class="jq-toast-li" id="jq-toast-item-'+i+'">'+this.options.text[i]+"</li>";o+="</ul>"}else this.options.heading&&(o+='<h2 class="jq-toast-heading">'+this.options.heading+"</h2>"),o+=this.options.text;this._toastEl.html(o),this.options.bgColor!==!1&&this._toastEl.css("background-color",this.options.bgColor),this.options.textColor!==!1&&this._toastEl.css("color",this.options.textColor),this.options.textAlign&&this._toastEl.css("text-align",this.options.textAlign),this.options.icon!==!1&&(this._toastEl.addClass("jq-has-icon"),-1!==t.inArray(this.options.icon,this._defaultIcons)&&this._toastEl.addClass("jq-icon-"+this.options.icon))},position:function(){"string"==typeof this.options.position&&-1!==t.inArray(this.options.position,this._positionClasses)?"bottom-center"===this.options.position?this._container.css({left:t(o).outerWidth()/2-this._container.outerWidth()/2,bottom:20}):"top-center"===this.options.position?this._container.css({left:t(o).outerWidth()/2-this._container.outerWidth()/2,top:20}):"mid-center"===this.options.position?this._container.css({left:t(o).outerWidth()/2-this._container.outerWidth()/2,top:t(o).outerHeight()/2-this._container.outerHeight()/2}):this._container.addClass(this.options.position):"object"==typeof this.options.position?this._container.css({top:this.options.position.top?this.options.position.top:"auto",bottom:this.options.position.bottom?this.options.position.bottom:"auto",left:this.options.position.left?this.options.position.left:"auto",right:this.options.position.right?this.options.position.right:"auto"}):this._container.addClass("bottom-left")},bindToast:function(){var t=this;this._toastEl.on("afterShown",function(){t.processLoader()}),this._toastEl.find(".close-jq-toast-single").on("click",function(o){o.preventDefault(),"fade"===t.options.showHideTransition?(t._toastEl.trigger("beforeHide"),t._toastEl.fadeOut(function(){t._toastEl.trigger("afterHidden")})):"slide"===t.options.showHideTransition?(t._toastEl.trigger("beforeHide"),t._toastEl.slideUp(function(){t._toastEl.trigger("afterHidden")})):(t._toastEl.trigger("beforeHide"),t._toastEl.hide(function(){t._toastEl.trigger("afterHidden")}))}),"function"==typeof this.options.beforeShow&&this._toastEl.on("beforeShow",function(){t.options.beforeShow()}),"function"==typeof this.options.afterShown&&this._toastEl.on("afterShown",function(){t.options.afterShown()}),"function"==typeof this.options.beforeHide&&this._toastEl.on("beforeHide",function(){t.options.beforeHide()}),"function"==typeof this.options.afterHidden&&this._toastEl.on("afterHidden",function(){t.options.afterHidden()})},addToDom:function(){var o=t(".jq-toast-wrap");if(0===o.length?(o=t("<div></div>",{"class":"jq-toast-wrap"}),t("body").append(o)):(!this.options.stack||isNaN(parseInt(this.options.stack,10)))&&o.empty(),o.find(".jq-toast-single:hidden").remove(),o.append(this._toastEl),this.options.stack&&!isNaN(parseInt(this.options.stack),10)){var i=o.find(".jq-toast-single").length,s=i-this.options.stack;s>0&&t(".jq-toast-wrap").find(".jq-toast-single").slice(0,s).remove()}this._container=o},canAutoHide:function(){return this.options.hideAfter!==!1&&!isNaN(parseInt(this.options.hideAfter,10))},processLoader:function(){if(!this.canAutoHide()||this.options.loader===!1)return!1;var t=this._toastEl.find(".jq-toast-loader"),o=(this.options.hideAfter-400)/1e3+"s",i=this.options.loaderBg,s=t.attr("style")||"";s=s.substring(0,s.indexOf("-webkit-transition")),s+="-webkit-transition: width "+o+" ease-in;                       -o-transition: width "+o+" ease-in;                       transition: width "+o+" ease-in;                       background-color: "+i+";",t.attr("style",s).addClass("jq-toast-loaded")},animate:function(){var t=this;if(this._toastEl.hide(),this._toastEl.trigger("beforeShow"),"fade"===this.options.showHideTransition.toLowerCase()?this._toastEl.fadeIn(function(){t._toastEl.trigger("afterShown")}):"slide"===this.options.showHideTransition.toLowerCase()?this._toastEl.slideDown(function(){t._toastEl.trigger("afterShown")}):this._toastEl.show(function(){t._toastEl.trigger("afterShown")}),this.canAutoHide()){var t=this;o.setTimeout(function(){"fade"===t.options.showHideTransition.toLowerCase()?(t._toastEl.trigger("beforeHide"),t._toastEl.fadeOut(function(){t._toastEl.trigger("afterHidden")})):"slide"===t.options.showHideTransition.toLowerCase()?(t._toastEl.trigger("beforeHide"),t._toastEl.slideUp(function(){t._toastEl.trigger("afterHidden")})):(t._toastEl.trigger("beforeHide"),t._toastEl.hide(function(){t._toastEl.trigger("afterHidden")}))},this.options.hideAfter)}},reset:function(o){"all"===o?t(".jq-toast-wrap").remove():this._toastEl.remove()},update:function(t){this.prepareOptions(t,this.options),this.setup(),this.bindToast()}};t.toast=function(t){var o=Object.create(i);return o.init(t,this),{reset:function(t){o.reset(t)},update:function(t){o.update(t)}}},t.toast.options={text:"",heading:"",showHideTransition:"fade",allowToastClose:!0,hideAfter:3e3,loader:!0,loaderBg:"#9EC600",stack:5,position:"bottom-left",bgColor:!1,textColor:!1,textAlign:"left",icon:!1,beforeShow:function(){},afterShown:function(){},beforeHide:function(){},afterHidden:function(){}}}(jQuery,window,document);






        $(".close").click(function () {
            this.parentElement.parentElement.parentElement.parentElement.parentElement.remove();
        });
        function sendQuote(){


            let HTTP_HOST=$("#HTTP_HOST").val();
            let days = {}
            days.c_q_id = $('#c_q_id').val();
            days.flight = $('#flightinput').val();
            days.cab = $('#cabinput').val();
            days.totalprice=$("#totalprice").val();
            let send=false;
            $(".days").each(function (index,day){
                let destinationinpt=$(day).find("#destinationpointinput").val();
                let hotelname=$(day).find("#hotelnameinput").val();
                let hoteladdress=$(day).find("#hoteladdresstinput").val();
                console.log(hoteladdress);
                let hotelroomtypechecked=$(day).find("#roomtypecheckbox:selected").val();
                let hotelratingchecked=$(day).find("#hotelratingcheckbox:selected").val();
                let inclusions=$(day).find("#inclusionstextarea").val();
                let exclusions=$(day).find("#exclusionstextarea").val();
                let itenary=$(day).find("#itenarytextarea").val();

                 hotelroomtypechecked="a";
                 hotelratingchecked="a";
                data={
                    "day":$(day).attr("day"),
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
                if (destinationinpt.length <= 0 ) {
                    alert("Destination is required");
                    $(day).find("#destinationpointinput").focus();
                    send=false;
                    return false;
                }else if (hotelname.length <= 0 ) {
                    alert("Hotelname is required");
                    $(day).find("#hotelnameinput").focus();
                    send=false;
                    return false;
                }else if (hoteladdress.length <= 0 ) {
                    alert("hoteladdress is required");
                    $(day).find("#hoteladdresstinput").focus();
                    send=false;
                    return false;
                }else if (inclusions.length <= 0 ) {
                    alert("inclusions is required");
                    $(day).find("#inclusionstextarea").focus();
                    send=false;
                    return false;
                }else if (exclusions.length <= 0 ) {
                    alert("exlusions is required");
                    $(day).find("#exclusionstextarea").focus();
                    send=false;
                    return false;
                }else if (itenary.length <= 0 ) {
                    alert("itenary is required");
                    $(day).find("#itenarytextarea").focus();
                    send=false;
                    return false;
                }else if (days.flight.length <= 0 ) {
                    alert("flight is required");
                    $('#flightinput').focus();
                    send=false;
                    return false;
                }else if (days.cab.length <= 0 ) {
                    alert("cab is required");
                    $('#cabinput').focus();
                    send=false;
                    return false;
                }else if (days.totalprice.length <= 0 ) {
                    alert("Total Quotation Price is required");
                    $("#totalprice").focus();
                    send=false;
                    return false;
                }else {
                    send=true;
                }

            })
            if(send){
                sendQuoteFormData(HTTP_HOST+"giveQuotation",days)
                    .done(function( Response,textStatus ) {
                        if(Response.Success == true){

                            getFilteredQuote();

                            $.toast({
                                heading:'Info',
                                text:'Quote send successfully',
                                icon:'success',
                                loader: true,
                                loaderBg: '#fff',
                                showHideTransition: 'fade',
                                hideAfter: 5000,
                                allowToastClose: false,
                                position: {
                                    left:1300,
                                    top:90
                                }
                            })

                        }else {
                            $.toast({
                                heading: 'Error',
                                text: Response.Message,
                                icon: 'error',
                                loader: true,
                                loaderBg: '#fff',
                                showHideTransition: 'plain',
                                hideAfter: 3000,
                                position: {
                                    left: 1300,
                                    top: 90
                                }
                            })
                        }
                    })
                    .fail(function( jqXHR, textStatus ) {
                        alert( "form not submitted " + textStatus );
                    });
            }



        }
        function sendQuoteFormData($url,$data={}){
            return  $.ajax({
                url: $url,
                method: "POST",
                data: $data,
            });
        }
        //here i am grabbing form as a parent
        var parent =  document.getElementById("form-main")
        $(parent).children().last().prepend('<a style="margin-top: -10px; cursor:pointer; " onclick="clearDay(this)" title="" class="clearday"><i class="fas fa-times close-btn"></i></a>');
        $("#addDay").on("click",function (){
            $(parent).children().last().find(".clearday").remove();

            let lastdayid = $(".days").last().attr('id');
            lastdayid=lastdayid==undefined?0:lastdayid;
            lastdayid = parseInt(lastdayid)+1
            //here i am creating parent div for new day to be added
            let Day = document.createElement('div');
            Day.id = lastdayid;
            //adding styles to that div
            Day.classList.add('row')
            Day.classList.add('days')
            Day.classList.add('day'+lastdayid)
            Day.setAttribute("day","day"+lastdayid);
            Day.style.width = '100%'
            Day.style.padding = '10px'

            //creating heading for new day

            let heading = document.createElement('h5')
            heading.style.margin = '5px'
            heading.innerText = "Day " + lastdayid

            // creating first part first row

            Day.appendChild(heading)
            Day.innerHTML +=
                '<div style="margin: 6px" class="col md">' +
                '<div class="contine">' +
                    '<div class="gg-bound-control" data-bound-control  onclick="this.classList.add('+"'active-gg-bound-control'"+')">' +
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
                '<div class="gg-bound-control" data-bound-control onclick="this.classList.add('+"'active-gg-bound-control'"+')">' +
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
                '<div class="gg-bound-control" data-bound-control onclick="this.classList.add('+"'active-gg-bound-control'"+')">' +
                ' <div class="gg-bound-control-outer">' +
                '<div class="gg-bound-control-inner">' +
                '<div class="gg-bound-control-wrapper">' +
                '<input required="required" class="h2 gg-bound-control-input" id="hoteladdresstinput" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Hotelname">' +
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
                '<div class="gg-bound-control" data-bound-control onclick="this.classList.add('+"'active-gg-bound-control'"+')">' +
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
                '<div class="gg-bound-control" data-bound-control onclick="this.classList.add('+"'active-gg-bound-control'"+')">' +
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
                '<div class="gg-bound-control" data-bound-control onclick="this.classList.add('+"'active-gg-bound-control'"+')">' +
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
                '<div class="gg-bound-control" data-bound-control onclick="this.classList.add('+"'active-gg-bound-control'"+')">' +
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
                '<div class="gg-bound-control" data-bound-control onclick="this.classList.add('+"'active-gg-bound-control'"+')">' +
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

            parent.appendChild(Day);
            $(parent).children().last().prepend('<a style="margin-top: -10px; cursor:pointer; " onclick="clearDay(this)" title="" class="clearday"><i class="fas fa-times close-btn"></i></a>');
        });

        function clearDay(e)
        {
            e.parentElement.remove();
            $(parent).children().last().prepend('<a style="margin-top: -10px; cursor:pointer; " onclick="clearDay(this)" title="" class="clearday"><i class="fas fa-times close-btn"></i></a>');
        }


        /* Starts from here */
        $("#error").click(function(){

        })

        $("#success").click(function(){

        })

    </script>
</div>

