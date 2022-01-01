
var dataFilter = {
    'Destination' : [],
    'Agent' : [],
    'Month' : '',
    'LeadType' : ''
};
let HTTP_HOST=$("#HTTP_HOST").val();
$( document ).ready(function() {

    LoadPage(HTTP_HOST+"createquote/quote",dataFilter)
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
        console.log(this.id)
        switch(this.id) {
            case 'destclear':
                dataFilter.Destination = []
                $('.clearFilter')[0].style.display = 'none';
                getFilteredQuote()
                break;
            case 'agentclear':
                dataFilter.Agent = []
                $('.clearFilter')[1].style.display = 'none';
                getFilteredQuote()
                break;
            case 'monthclear':
                dataFilter.Month = ''
                $('.clearFilter')[2].style.display = 'none';
                getFilteredQuote()
                 break;
            case 'leadtypeclear':
                dataFilter.LeadType = ''
                $('.clearFilter')[3].style.display = 'none';
                getFilteredQuote()
                break;
            default:
                break;
            // code block
        }
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
    dataFilter.Destination=[];
    $("#destinationform input:checked").each(function() {
        dataFilter.Destination.push($(this).val());
    });
    $('.clearFilter')[0].style.display = 'flex';


    getFilteredQuote();

}
function  filterAgent(e){
    dataFilter.Agent=[];
    $("#agentform input:checked").each(function() {
        dataFilter.Agent.push($(this).val());
    });
    $('.clearFilter')[1].style.display = 'flex';


    getFilteredQuote();
}
function  filterMonth(e){
    dataFilter.Month="";
    dataFilter.Month = e.target.getAttribute("value");
    $('.clearFilter')[2].style.display = 'flex';
    getFilteredQuote();
}
function filterLead(e) {
    dataFilter.LeadType="";
    dataFilter.LeadType = e.target.getAttribute("value")
    $('.clearFilter')[3].style.display = 'flex';
    getFilteredQuote();
}

function getFilteredQuote() {
    console.log(this.dataFilter);
    LoadPage(HTTP_HOST+"createquote/quote",this.dataFilter)
        .done(function( Response,textStatus ) {
            $(".quotes-list").html(Response);
        })
}
function getfilledQuoteform(self,id,c_q_id){

    $.ajax({
        url: HTTP_HOST+"getfilledQuoteform/"+id+"/"+c_q_id,
        method: "GET",
    }).done(function (Response)
    {
        let parent=self.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
        $(parent).append(Response);
    });
}
function getQuoteform(self,id){
    $.ajax({
        url: HTTP_HOST+"getQuoteform/"+id,
        method: "GET",
    }).done(function (Response)
    {
        let parent=self.parentElement.parentElement.parentElement.parentElement;
        $(parent).append(Response);
    });
}
function SearchAlreadyGivedQuote(id){
    var srch=$("#srch");
    if(srch.val().length > 0){
        $(".srch ul").addClass("hover");
        getAlredyGivenQuote(id);
    }else {
        $(".srch ul").removeClass("hover");
    }

}
function getAlredyGivenQuote(id){
    $.ajax({
        url: HTTP_HOST+"getAlredyGivenQuote/"+id+"/"+$("#srch").val(),
        method: "GET",
    }).done(function (Response)
    {
        $(".srch ul").html(Response);
    });
}
const LoadPage=($url,$data={})=> {
    return $.ajax({
        url: $url,
        method: "POST",
        data: $data,
    });
}
