
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
        console.log(this.id)
        switch(this.id) {
            case 'destclear':
                data.Destination = ['']
                $('.clearFilter')[0].style.display = 'none';
                getFilteredQuote()
                break;
            case 'agentclear':
                data.Agent = ['']
                $('.clearFilter')[1].style.display = 'none';
                getFilteredQuote()
                break;
            case 'monthclear':
                data.Month = ''
                $('.clearFilter')[2].style.display = 'none';
                getFilteredQuote()
                 break;
            case 'leadtypeclear':
                data.LeadType = ''
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
    data.Destination=[];
    $("#destinationform input:checked").each(function() {
        data.Destination.push($(this).val());
    });
    $('.clearFilter')[0].style.display = 'flex';


    getFilteredQuote();

}
function  filterAgent(e){
    data.Agent=[];
    $("#agentform input:checked").each(function() {
        data.Agent.push($(this).val());
    });
    $('.clearFilter')[1].style.display = 'flex';


    getFilteredQuote();
}
function  filterMonth(e){
    data.Month="";
    data.Month = e.target.getAttribute("value");
    $('.clearFilter')[2].style.display = 'flex';
    getFilteredQuote();
}
function filterLead(e) {
    data.LeadType="";
    data.LeadType = e.target.getAttribute("value")
    $('.clearFilter')[3].style.display = 'flex';
    getFilteredQuote();
}



function getFilteredQuote() {
    LoadPage(HTTP_HOST+"createquote/quote",this.data)
        .done(function( Response,textStatus ) {
            $(".quotes-list").html(Response);
            console.log(Response);
        })
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
const LoadPage=($url,$data={})=> {
    return $.ajax({
        url: $url,
        method: "POST",
        data: $data,
    });
}
