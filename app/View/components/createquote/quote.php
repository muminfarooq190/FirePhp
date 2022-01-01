<style>
    #confirm-wrapper {
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000000;
        background: rgba( 204, 204, 204, 0.6 );
        display: none;
        transition: opacity 1s ease-in;
    }

    #confirm-box {
        width: 300px;
        background: #fff;
        min-height: 200px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -100px 0 0 -150px;
    }

    #confirm-buttons {
        position: absolute;
        width: 100%;
        text-align: center;
        bottom: 0;
        left: 0;
        padding-bottom: 1em;
    }

    #confirm-buttons button {
        display: inline-block;
        background: transparent;
        color: #000;
        font-size: 1em;
        font-family: 'Lato', Arial, sans-serif;
        font-weight: bold;
        cursor: pointer;
        text-transform: uppercase;
        border: 2px solid;
        margin: 0 0.5em;
        padding: 0.6em 0;
        width: 120px;
    }

    #confirm-header {
        text-align: center;
        font-size: 1em;
        font-weight: bold;
        text-transform: uppercase;
        margin: 2.5em 0 1.5em 0;
    }

    #confirm-header:after {
        content: ' ';
        display: block;
        width: 1em;
        border-top: 1px solid;
        margin: 0.4em auto;
    }
</style>
<div class="card">
    <div class="enquiryheader">
        <a style="background-color: #2a92bd;" class="btn-floating btn-small waves-effect waves-light ">{{card}}</a>
        &nbsp; &nbsp; &nbsp;
        <button style="background-color: #2a92bd;" class="waves-effect waves-light btn trigger"   id="confirm" data-question="Are you sure you want to discard this quote?">{{Active}}</button>
        &nbsp; &nbsp; &nbsp
        <a style="border-bottom: 1px solid #2a92bd; color: #2a92bd;" href="#">TRIP ID {{id}}</a>
        <?php include "Include/createquotebtn.php" ?>
    </div>
    <div class="enquirybody">
        <div class="endiv">
            <small>Destination</small>
            <b>{{destination}}</b>
            &nbsp
            <small>Phone number</small>
            <b>{{contact_number}}</b>
            &nbsp
            <small>Flight</small>
            <b>{{flight}}</b>
            &nbsp
            <small>Tour Type</small>
            <b>{{tour_type}}</b>
        </div>
        <div class="endiv">
            <small>Duration</small>
            <b>{{duration}}</b>
            &nbsp
            <small>Departure</small>
            <b>{{departure}}</b>
            &nbsp
            <small>Email</small>
            <b>{{email}}</b>
            &nbsp
            <small>Cab</small>
            <b>{{cab}}</b>
            &nbsp
            <small>Type of Package</small>
            <b>{{type_of_package}}</b>
        </div>
        <div class="endiv">
            <small>No of People</small>
            <b>{{adults}} adults and {{children}} children</b>
            &nbsp
            <small>Budget</small>
            <b>{{budget}}</b>
            &nbsp
            <small>Hotel category</small>
            <b>{{hotel_category}} star</b>
            &nbsp
            <small>I will book in?</small>
            <b>{{i_will_book_in}}</b>
        </div>
        <div class="endiv">
            <small>Departure Date</small>
            <b>{{departure_date}}</b>
            &nbsp
            <small>Preferred Time To Call</small>
            <b>{{prefered_time_to_call}}</b>
            &nbsp
            <small>Driver Language</small>
            <b>{{driver_language}}</b>
            &nbsp
            <small>Additional Details</small>
            <b>{{Additional_Details}}</b>
        </div>

    </div>
    <div class="enquiryfooter">
        <div style="display: flex; width: 181px;  justify-content: space-around;" class="tourist">
            <h6>Agent Name: </h6>{{agent}}
        </div>
    </div>
</div>
<script>
    (function  () {

        function ConfirmBox( element, params ) {
            this.element = element;
            this.params = params || {};
            this.params.ok = params.ok || function() {};
            this.params.cancel = params.cancel || function() {};
            alert()
            this.init();
        }

        ConfirmBox.prototype = {
            init: function() {
                this.instance = null;
                this.create();
                this.layout();
                this.actions();
            },
            create: function() {
                if( document.querySelector( "#confirm-wrapper" ) === null ) {
                    var wrapper = document.createElement( "div" );
                    wrapper.id = "confirm-wrapper";
                    var html = "<div id='confirm-box'><h2 id='confirm-header'></h2>";
                    html += "<div id='confirm-buttons'><button id='confirm-ok'>OK</button><button type='button' id='confirm-cancel'>Cancel</button></div>";
                    html += "</div>";

                    wrapper.innerHTML = html;
                    document.body.appendChild( wrapper );
                }

                this.instance = document.querySelector( "#confirm-wrapper" );
            },
            layout: function() {
                var wrapper = this.instance;
                var winHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

                wrapper.style.height = winHeight + "px";
            },
            show: function( element ) {
                element.style.display = "block";
                element.style.opacity = 1;
            },
            hide: function( element ) {
                element.style.opacity = 0;
                setTimeout(function() {
                    element.style.display = "none";
                }, 1000);
            },
            actions: function() {
                var self = this;
                self.element.addEventListener( "click", function() {
                    self.instance.querySelector( "#confirm-header" ).innerHTML = self.element.dataset.question;
                    self.show( self.instance );
                }, false);

                self.instance.querySelector( "#confirm-ok" ).
                addEventListener( "click", function() {
                    self.hide( self.instance );
                    setTimeout(function() {
                        self.params.ok();
                    }, 1000);
                }, false);


                self.instance.querySelector( "#confirm-cancel" ).
                addEventListener( "click", function() {
                    self.hide( self.instance );
                    setTimeout(function() {
                        self.params.cancel();
                    }, 1000);
                }, false);
            }
        };



    })();
</script>