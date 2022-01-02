
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

    LoadPage(HTTP_HOST+"createquote/quote",this.dataFilter)
        .done(function( Response,textStatus ) {
            $(".quotes-list").html(Response);
        })
    initializeDiscardBox();

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



function initializeDiscardBox()
{
    function ConfirmBox( element, params ) {
        this.element = element;
        this.params = params || {};
        this.params.ok = params.ok || function() {};
        this.params.cancel = params.cancel || function() {};

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
    var delayInMilliseconds = 5000;
    setTimeout(function (){
        var confirms = document.querySelectorAll(".confirm");

        confirms.forEach(function(confirm){
            var confBox = new ConfirmBox( confirm, {
                ok: function() {
                    // output.innerHTML = "OK";
                    alert("ok")
                    return
                },
                cancel: function() {
                    alert("cancel")
                    return
                    // output.innerHTML = "Cancel";
                }

            });
        })

    },delayInMilliseconds);

}


initializeDiscardBox();
function launch_toast(text,iconname) {
    var x = document.getElementById("toast")
    var y = document.getElementById("img")
    y.innerHTML = '<i class="material-icons">'+iconname+'</i>'

    var z = document.getElementById("desc")
    z.innerText = text
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
}