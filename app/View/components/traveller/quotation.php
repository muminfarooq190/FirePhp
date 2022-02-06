<?php

        use app\Model\customer_querie;
        use app\Model\give_quotation;
        $gq = new give_quotation();
        $gq->get($quoteid);
        $gq->next();


        $cs = new customer_querie();
        $cs->get($gq->c_q_id);
        $cs->next();

        ?>
        <div class="row">
            <div style="border: 2px solid #2a92bd; border-top: 0px; margin-top: -20px; padding: 10px; padding-left: 0px;"
                 class="col s12">
                <div class="col s3">
                    <div style="background-color: #FEFED9;margin:15px; width: 100px; text-align: center; color: red; box-shadow: 1px 1px #c2c2af;"
                         class="">
                        <span>CFEE $550</span>
                    </div>
                </div>
                <div style="padding: 10px; margin-top: 10px;" class="col s5 offset-s4">
                    <div style="display:flex; flex-direction:row" class="">

                        &nbsp;
                        <div style="margin-top: 11px; border-bottom: 1px solid #ccc; width: 190px; text-align: center; height: 25px; display: flex; flex-direction: row;"
                             class="">
                            <b style="vertical-align: middle; ">$</b>
                            <span style="flex-grow: 3; font-weight: normal;">17,500 Total</span>

                        </div>

                        <div style="vertical-align: middle; border: 2px solid red; width: 110px; height: 40px; color: red; text-align:center; margin-left: 8px;"
                             class="">
                            <div style="margin-top: 5px;" class="">
                                <span style="vertical-align: middle; cursor: pointer;">CUSTOMISE</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div style="padding-left: 0px; border:2px solid #ccc;margin-right:2px "
                         class="col s2 offset-s2 ">
                        <a href=""> <i style="vertical-align: middle;" class="material-icons">cloud_download</i>
                            <span style="vertical-align: middle;">Download quote</span></a>
                    </div>
                    <div style="border:2px solid #ccc" class="col s2 ">
                        <a href=""> <i style="vertical-align: middle;"
                                       class="material-icons">compare</i>
                            <span style="vertical-align: middle;">Compare quote</span></a>
                    </div>
                </div>

            </div>

        </div>
        <div style="border-bottom: 1px solid #ccc; border-left: 0px; border-right: 0px; height: 30px;" class="row">
            <div class="col ">
                <i style="vertical-align: middle;" class="material-icons">add</i>
                <span style="vertical-align: middle; font-weight: bold;">Basic Details</span>
            </div>
        </div>
        <div class="row">
            <div class="col s4">
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Trip Type</span>
                    <span><?= $cs->tour_type ?></span>
                    <span style="color: rgb(133, 132, 132);">Quotation Price</span>
                    <span><?= $gq->quotationPrice ?></span>

                </div>
            </div>
            <div class="col s4">
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Days</span>
                    <span><?= $cs->duration ?>days</span>
                    <span style="color: rgb(133, 132, 132);">Destination</span>
                    <span><?= $cs->destination ?></span>

                </div>
            </div>
            <div class="col s4">
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Nights</span>
                    <span><?= $cs->duration ?>nights</span>
                    <span style="color: rgb(133, 132, 132);">No.of Adults and Children</span>
                    <span><?= $cs->adults ?>adults <?= $cs->children ?>children</span>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Hotel Details</span>
                    <span>Night 1,2, Hotel shefaf, Srinagar, Deluxe ,</span>
                    <span>Night 3, Marlin group of houseboat, Srinagar, Deluxe ,</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Flight Details</span>
                    <span>NA,</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Cab Details</span>
                    <span>NA,</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s6">
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Inclusions</span>
                    <span>Meal plan : Breakfast</span>
                    <span>Meal plan : Dinner</span>
                    <span>Type of Transport (non ac)</span>
                    <span>Government Taxes/VAT/ Service Charges</span>
                    <span>Cab for sightseeing (yes)t</span>
                    <span>Siteseeing (yes)</span>
                    <span>Shikara Ride (yes)</span>
                    <span>Hotel (yes)</span>
                    <span>Airport/Railway Station Transfer : Arrival (yes)</span>
                    <span>Airport/Railway Station Transfer : Departure (yes)</span>

                </div>
            </div>

            <div class="col s6">
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Exclusions</span>
                    <span>Meal plan : Breakfast</span>
                    <span>Meal plan : Dinner</span>
                    <span>Type of Transport (non ac)</span>
                    <span>Government Taxes/VAT/ Service Charges</span>
                    <span>Cab for sightseeing (yes)t</span>
                    <span>Siteseeing (yes)</span>
                    <span>Shikara Ride (yes)</span>
                    <span>Hotel (yes)</span>
                    <span>Airport/Railway Station Transfer : Arrival (yes)</span>
                    <span>Airport/Railway Station Transfer : Departure (yes)</span>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s10">
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Day 1 Arrival at Sgr Airport</span>
                    <p style="font-size: 12px;">

                        On arrival at Srinagar Airport, refresh your mind at the hotel with a welcome drink. Post hot lunch at
                        the hotel, get ready for some adventure. Drive to visit the famous Mughal gardens in Srinagar which are
                        Nishat Bagh, the garden of Pleasure is a twelve terraced garden built by Mughals. The garden is
                        strategically located on the bank of the Dal Lake, with the snowy Zabarwan Mountains in its backdrop.
                        Shalimar Bagh, abode of love is the crown of Srinagar city. The largest of the Mughal gardens, thegarden
                        was gift from Mughal Emperor Jahangir to his wife Noor Jahan.
                        Seek blessing from the Lord Shiva at the Shankaracharya Temple on top of the Shankaracharya Hill on the
                        Zabarwan Mountain in Srinagar, Kashmir.
                        You will have to climb about 300 m above a magestic view of Srinagar. A birds eyeview of the Srinagar
                        and Dal lake.
                        Visit the Chasmishahi garden, located in the Zabarwan Range, near Raj Bhawan (Governor‘s house)
                        overlooking Dal Lake.
                        You can visit the Pari Mahal (Fairy Palace) that lies near the garden where Dara Sikoh used to learn
                        astrology and where he was later killed by his brother Aurengzeb.
                        Overnight stay in hotel at Srinagar.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s10">
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Day 2 Holy SIte seeing</span>
                    <p style="font-size: 12px;">

                        On arrival at Srinagar Airport, refresh your mind at the hotel with a welcome drink. Post hot lunch at
                        the hotel, get ready for some adventure. Drive to visit the famous Mughal gardens in Srinagar which are
                        Nishat Bagh, the garden of Pleasure is a twelve terraced garden built by Mughals. The garden is
                        strategically located on the bank of the Dal Lake, with the snowy Zabarwan Mountains in its backdrop.
                        Shalimar Bagh, abode of love is the crown of Srinagar city. The largest of the Mughal gardens, thegarden
                        was gift from Mughal Emperor Jahangir to his wife Noor Jahan.
                        Seek blessing from the Lord Shiva at the Shankaracharya Temple on top of the Shankaracharya Hill on the
                        Zabarwan Mountain in Srinagar, Kashmir.
                        You will have to climb about 300 m above a magestic view of Srinagar. A birds eyeview of the Srinagar
                        and Dal lake.
                        Visit the Chasmishahi garden, located in the Zabarwan Range, near Raj Bhawan (Governor‘s house)
                        overlooking Dal Lake.
                        You can visit the Pari Mahal (Fairy Palace) that lies near the garden where Dara Sikoh used to learn
                        astrology and where he was later killed by his brother Aurengzeb.
                        Overnight stay in hotel at Srinagar.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s10">
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Day 3 Full Day Excursion to Gulmarg</span>
                    <p style="font-size: 12px;">

                        On arrival at Srinagar Airport, refresh your mind at the hotel with a welcome drink. Post hot lunch at
                        the hotel, get ready for some adventure. Drive to visit the famous Mughal gardens in Srinagar which are
                        Nishat Bagh, the garden of Pleasure is a twelve terraced garden built by Mughals. The garden is
                        strategically located on the bank of the Dal Lake, with the snowy Zabarwan Mountains in its backdrop.
                        Shalimar Bagh, abode of love is the crown of Srinagar city. The largest of the Mughal gardens, thegarden
                        was gift from Mughal Emperor Jahangir to his wife Noor Jahan.
                        Seek blessing from the Lord Shiva at the Shankaracharya Temple on top of the Shankaracharya Hill on the
                        Zabarwan Mountain in Srinagar, Kashmir.
                        You will have to climb about 300 m above a magestic view of Srinagar. A birds eyeview of the Srinagar
                        and Dal lake.
                        Visit the Chasmishahi garden, located in the Zabarwan Range, near Raj Bhawan (Governor‘s house)
                        overlooking Dal Lake.
                        You can visit the Pari Mahal (Fairy Palace) that lies near the garden where Dara Sikoh used to learn
                        astrology and where he was later killed by his brother Aurengzeb.
                        Overnight stay in hotel at Srinagar.
                    </p>
                </div>
            </div>
        </div>