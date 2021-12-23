<div class="card">
    <div class="enquiryheader">
        <a style="background-color: #2a92bd;" class="btn-floating btn-small waves-effect waves-light ">1</a>
        &nbsp; &nbsp; &nbsp;
        <label style="background-color: #2a92bd;" class="waves-effect waves-light btn">{{Active}}</label>
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
        <div class="tourist">
            <h6>Agent Name: {{agent}}</h6>
        </div>
    </div>
</div>