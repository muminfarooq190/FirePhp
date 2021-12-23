<@page>
<div class="col page s9">
    <div class="flex bb flexDColumn">
        <div class="dbHeader_optionList apbc1 relative z20">
            <div class="flex flexDColumn at_leadmenu">
                <div class="header_heading flex spaceBetween">
                    <h3 class="f24 sfcw text-uppercase  mainhead relative">
                        <div class="fronticon">
                            <svg viewBox="0 0 25 28" class="icon shape-codepen">
                                <use href="<?= ICONS ?>icons.svg#CreateQuoteIcon-usage"/>
                            </svg>
                        </div>
                        Create Quote
                    </h3>
                    <!-- <div class="mr24 flex spaceBetween">
                        <div class="mr24">
                            <p class="f12 mb4 flex sfcw">Overall Agency Rating</p>
                            <span class="f24 fw9 sfcw">4.00</span>
                        </div>
                        <div class="mr24">
                            <p class="f12 mb4 flex sfcw">Feedback Fill Rate</p>
                            <span class="f24 fw9 sfcw">45.0%</span>
                        </div>
                    </div> -->
                </div>
                <div class="header_filters apbc1">
                    <div class="sticky-outer-wrapper">
                        <div class="sticky-inner-wrapper"
                             style="position: relative; transform: translate3d(0px, 0px, 0px);">
                            <div class="pl15 pr48 navSlider--2O57RuG">
                                <div style="position: relative;">
                                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                                        <div class="swiper-wrapper"
                                             style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                            <div class="swiper-slide menuItem--24kUYsi active--3ZQPyrz swiper-slide-active">
                                                All
                                            </div>


                                        </div>
                                        <span class="swiper-notification" aria-live="assertive"
                                              aria-atomic="true"></span>
                                    </div>
                                    <div class="css-zekgte button-box">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="filters2">
            <div class="select-wrapper">
                <div class="select">
                    <div class="select__trigger"><span>Destinations</span>
                        <i class="material-icons ">arrow_drop_down</i>
                        <!-- <div class="arrow"></div> -->
                    </div>
                    <div class="custom-options">
                        <form id="destinationform" action="">
                            <p>
                                <label>
                                    <input name="ddestfilter[]"  class="custom-option kashmirifilter " value="Kashmir" id="indeterminate-checkbox" type="checkbox"/>
                                    <span class="">Kashmir</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="ddestfilter[]"  class="custom-option Kerelafilter " value="Kerela" id="indeterminate-checkbox" type="checkbox"/>
                                    <span>Kerela</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="ddestfilter[]"  class="custom-option Dubaifilter " value="Dubai" id="indeterminate-checkbox" type="checkbox"/>
                                    <span>Dubai</span>
                                </label>
                            </p>
                            <p>
                                <button class="btn waves-effect waves-light btn-small center" type="submit"
                                        name="action">Apply
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="select-wrapper">
                <div class="select">
                    <div class="select__trigger"><span>Agents</span>
                        <i class="material-icons ">arrow_drop_down</i>
                        <!-- <div class="arrow"></div> -->
                    </div>
                    <div class="custom-options">
                        <form id="agentform" action="">
                            <p>
                                <label>
                                    <input name="agentfilter[]" class="custom-option " value="1" id="indeterminate-checkbox" type="checkbox"/>
                                    <span>Arif</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="agentfilter[]" class="custom-option " value="2" id="indeterminate-checkbox" type="checkbox"/>
                                    <span>Sumaira</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="agentfilter[]" class="custom-option" value="3" id="indeterminate-checkbox" type="checkbox"/>
                                    <span>Ali</span>
                                </label>
                            </p>
                            <p>
                                <button class="btn waves-effect waves-light btn-small center" type="submit"
                                        name="action">Apply
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="select-wrapper">
                <div class="select">
                    <div class="select__trigger"><span>Months</span>
                        <i class="material-icons ">arrow_drop_down</i>
                        <!-- <div class="arrow"></div> -->
                    </div>
                    <div class="custom-options">
                        <form id="monthsfilter" action="">
                            <ul>
                                <li value="1" name="January" class="custom-option ccs">January</li>
                                <li value="2" name="February" class="custom-option ccs">February</li>
                                <li value="3" name="March" class="custom-option ccs">March</li>
                                <li value="4" name="April" class="custom-option ccs">April</li>
                                <li value="5" name="May" class="custom-option ccs">May</li>
                                <li value="6" name="June" class="custom-option ccs">June</li>
                                <li value="7" name="July" class="custom-option ccs">July</li>
                                <li value="8" name="August" class="custom-option ccs">August</li>
                                <li value="9" name="September" class="custom-option ccs">September</li>
                                <li value="10" name="October" class="custom-option ccs">October</li>
                                <li value="11" name="November" class="custom-option ccs">November</li>
                                <li value="12" name="December" class="custom-option ccs">December</li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <div class="select-wrapper">
                <div class="select">
                    <div class="select__trigger"><span>Lead Types</span>
                        <i class="material-icons ">arrow_drop_down</i>
                        <!-- <div class="arrow"></div> -->
                    </div>
                    <div class="custom-options">
                        <form id="LeadType">
                            <ul>
                                <li value="1" class="custom-option dds">Hot</li>
                                <li value="2" class="custom-option dds">Active</li>
                                <li value="3" class="custom-option dds">In Progress</li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       <div style="display: flex">
           <div class="sortfilter">
               <div class="select-wrapper ">
                   <div class="select ss">
                       <div class="select__trigger sorttrigger"><span>Sort By:Task Score</span>
                           <i class="material-icons ">arrow_drop_down</i>
                           <!-- <div class="arrow"></div> -->
                       </div>
                       <div class="custom-options">
                           <form action="">

                               <ul>
                                   <li class="custom-option">Hot</li>
                                   <li class="custom-option">Active</li>
                                   <li class="custom-option">In Progress</li>
                               </ul>

                               </p>


                           </form>

                       </div>
                   </div>
               </div>
           </div>
           <div class="clearFilters">
                <div class="clearFilter">
                    <div>clear</div>
                    <label>x</label>
                </div>
               <div class="clearFilter">
                    <div>clear</div>
                    <label>x</label>
                </div>
               <div class="clearFilter">
                    <div>clear</div>
                    <label>x</label>
                </div>
               <div class="clearFilter">
                    <div>clear</div>
                    <label>x</label>
                </div>
           </div>
       </div>
    </div>
    <div class="quotes-list">

    </div>
    <?php include COMPONENTS_DIR."createquote/quotationform.php"?>
</div>
<script src="<?= SCRIPT ?>createquote.js"></script>
<@page>

