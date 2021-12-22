
var data = {
    'Destination' : [],
    'Agent' : [],
    'Month' : '',
    'LeadType' : ''
};
let HTTP_HOST=$("#HTTP_HOST").val();
$( document ).ready(function() {

    LoadPage(HTTP_HOST+"createquote/quote",data)
    .done(function( Response,textStatus ) {
        $(".quotes-list").html(Response);
    })
    .fail(function( jqXHR, textStatus ) {
        alert( "Page Not Found " + textStatus );
    });
});

function textAreaAdjust(element) {
    element.style.height = "1px";
    element.style.height = (element.scrollHeight)+"px";
}
$('#destinationform').submit(function (event){
    event.preventDefault()
    filterDestination(event);
})

$('#agentform').submit(function (event){
    event.preventDefault();
    filterAgent(event);
});
let clearfirterbtns = document.querySelectorAll('.clearFilter');
clearfirterbtns.forEach(function (btn) {
    btn.addEventListener('click', function(event){
        clearFilters(event);
    })
});
let month = document.querySelectorAll('#monthsfilter li');
month.forEach(function (m) {
    m.addEventListener('click', function(event){
        filterMonth(event);
    })
});

let leadtype = document.querySelectorAll('#LeadType li')
leadtype.forEach(function (lt) {
    lt.addEventListener('click', function(event){
        filterLead(event)
    })
});

function filterDestination(e){
    data.Destination=[];
    $("#destinationform input:checked").each(function() {
        data.Destination.push($(this).val());
    });

    getFilteredQuote();

}
function  filterAgent(e){
    data.Agent=[];
    $("#agentform input:checked").each(function() {
        data.Agent.push($(this).val());
    });
    getFilteredQuote();
}
function  filterMonth(e){
    data.Month="";
    data.Month = e.target.getAttribute("value");
    getFilteredQuote();
}
function filterLead(e) {
    data.LeadType="";
    data.LeadType = e.target.getAttribute("value")
    getFilteredQuote();
}



function clearFilters(event) {

    console.log(event);
    if(data.Destination.length !== 0){

    }else if(data.Agent.length !== 0){

    }else if(data.Month.length !==0){

    }else if(data.LeadType.length !==0){

    }

}
function getFilteredQuote() {
    LoadPage(HTTP_HOST+"createquote/quote",this.data)
        .done(function( Response,textStatus ) {
            $(".quotes-list").html(Response);
        })
}
const LoadPage=($url,$data={})=>{
    return  $.ajax({
        url: $url,
        method: "POST",
        data: $data,
    });
}