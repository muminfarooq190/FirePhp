<?php
 use app\Model\customer_querie;
 use app\Model\give_quotation;

 $cs = new customer_querie();

 $cs->get(2);
 $cs->next();

 $gq = new give_quotation();
 $gq->get('c_q_id',2);
 $gq->next();

?>

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
                                    <span><?= $gq->quotationPrice ?></span>
                                    <span style="color: rgb(133, 132, 132);">Quotation Price</span>
                                    <span>17,500</span>

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
                                    <span><?= $cs->adults ?>adults <?= $cs->children?>children</span>

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

                                        On arrival at Srinagar Airport, refresh your mind at the hotel with a welcome drink. Post hot lunch at the hotel, get ready for some adventure. Drive to visit the famous Mughal gardens in Srinagar which are Nishat Bagh, the garden of Pleasure is a twelve terraced garden built by Mughals. The garden is strategically located on the bank of the Dal Lake, with the snowy Zabarwan Mountains in its backdrop.
                                        Shalimar Bagh, abode of love is the crown of Srinagar city. The largest of the Mughal gardens, thegarden was gift from Mughal Emperor Jahangir to his wife Noor Jahan.
                                        Seek blessing from the Lord Shiva at the Shankaracharya Temple on top of the Shankaracharya Hill on the Zabarwan Mountain in Srinagar, Kashmir.
                                        You will have to climb about 300 m above a magestic view of Srinagar. A birds eyeview of the Srinagar and Dal lake.
                                        Visit the Chasmishahi garden, located in the Zabarwan Range, near Raj Bhawan (Governor‘s house) overlooking Dal Lake.
                                        You can visit the Pari Mahal (Fairy Palace) that lies near the garden where Dara Sikoh used to learn astrology and where he was later killed by his brother Aurengzeb.
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

                                        On arrival at Srinagar Airport, refresh your mind at the hotel with a welcome drink. Post hot lunch at the hotel, get ready for some adventure. Drive to visit the famous Mughal gardens in Srinagar which are Nishat Bagh, the garden of Pleasure is a twelve terraced garden built by Mughals. The garden is strategically located on the bank of the Dal Lake, with the snowy Zabarwan Mountains in its backdrop.
                                        Shalimar Bagh, abode of love is the crown of Srinagar city. The largest of the Mughal gardens, thegarden was gift from Mughal Emperor Jahangir to his wife Noor Jahan.
                                        Seek blessing from the Lord Shiva at the Shankaracharya Temple on top of the Shankaracharya Hill on the Zabarwan Mountain in Srinagar, Kashmir.
                                        You will have to climb about 300 m above a magestic view of Srinagar. A birds eyeview of the Srinagar and Dal lake.
                                        Visit the Chasmishahi garden, located in the Zabarwan Range, near Raj Bhawan (Governor‘s house) overlooking Dal Lake.
                                        You can visit the Pari Mahal (Fairy Palace) that lies near the garden where Dara Sikoh used to learn astrology and where he was later killed by his brother Aurengzeb.
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

                                        On arrival at Srinagar Airport, refresh your mind at the hotel with a welcome drink. Post hot lunch at the hotel, get ready for some adventure. Drive to visit the famous Mughal gardens in Srinagar which are Nishat Bagh, the garden of Pleasure is a twelve terraced garden built by Mughals. The garden is strategically located on the bank of the Dal Lake, with the snowy Zabarwan Mountains in its backdrop.
                                        Shalimar Bagh, abode of love is the crown of Srinagar city. The largest of the Mughal gardens, thegarden was gift from Mughal Emperor Jahangir to his wife Noor Jahan.
                                        Seek blessing from the Lord Shiva at the Shankaracharya Temple on top of the Shankaracharya Hill on the Zabarwan Mountain in Srinagar, Kashmir.
                                        You will have to climb about 300 m above a magestic view of Srinagar. A birds eyeview of the Srinagar and Dal lake.
                                        Visit the Chasmishahi garden, located in the Zabarwan Range, near Raj Bhawan (Governor‘s house) overlooking Dal Lake.
                                        You can visit the Pari Mahal (Fairy Palace) that lies near the garden where Dara Sikoh used to learn astrology and where he was later killed by his brother Aurengzeb.
                                        Overnight stay in hotel at Srinagar.
                                    </p>
                                </div>
                            </div>
                        </div>