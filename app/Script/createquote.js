
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

function launch_toast(text,iconname) {

    var x = document.getElementById("toast")
    var y = document.getElementById("img")
    y.innerHTML = '<i class="material-icons">'+iconname+'</i>'
    var z = document.getElementById("desc")
    z.innerText = text
    x.className = "show";
    setTimeout(function(){
        x.className = x.className.replace("show", "");
    }, 5000);
}
class ConfirmBox{
    wrapper="";
    target=""
    constructor(ok,cancel) {
        this.create(ok,cancel)
    }
    create(ok,cancel){
        if( document.querySelector( "#confirm-wrapper" ) === null ) {
            this.wrapper = document.createElement( "div" );
            this.wrapper.id = "confirm-wrapper";
            var html = "<div id='confirm-box'><h2 id='confirm-header'></h2>";
            html += "<div id='confirm-buttons'><button id='confirm-ok'>OK</button><button type='button' id='confirm-cancel'>Cancel</button></div>";
            html += "</div>";
            this.wrapper.innerHTML = html;
            document.body.appendChild(this.wrapper );
        }
        else {
            this.wrapper=document.querySelector( "#confirm-wrapper" );
        }
        this.layout(this.wrapper);
        self=this;
        $(this.wrapper).find("#confirm-ok").on("click",function (){
            self.hide(self);
            ok();
        });
        $(this.wrapper).find("#confirm-cancel").on("click",function (){
            self.hide(self);
            cancel(self);
        });
    }
    layout() {
        var winHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
        this.wrapper.style.height = winHeight + "px";
    }
    Show(target,text) {
        this.target=target;
        $(this.wrapper).find("#confirm-header").html(text)
        this.wrapper.style.display = "block";
        this.wrapper.style.opacity = 1;
    }
    hide(self) {
        self.wrapper.style.opacity = 0;
        setTimeout(function() {
            self.wrapper.style.display = "none";
        }, 500);
    }
}
function InitDiscardBox(){
    let c=new ConfirmBox(
        function (target){
            DiscardCreateQuote($(c.target).attr("cq_id"));
        },
        function (target){
            launch_toast("Quote is Not Discarded","close")
        }
    )
    $(document).on("click",".confirm",function (){
        c.Show(this,$(this).attr("data-question"));
    })
}
function DiscardCreateQuote(id){
    $.ajax({
        url: HTTP_HOST+"DiscardCreateQuote/"+id,
        method: "DELETE",
    }).done(function (responce){
        if(responce.Success) {
            launch_toast(responce.Message, "check")
        }else{
            launch_toast(responce.Message,"close");
        }
        getFilteredQuote();
    }).fail(function (res){
        console.log(res);
    });
}
function AssignAgent(){
    $(document).on("change",".AssignAgent",function (){
        let cqid=($(this).parents("div.card").find(".cq_id").val());
        let agent_id=$(this).val();
        let agentName=$(this).find("option:selected").text();
        $.ajax({
            url: HTTP_HOST+"AssignAgent/customerQuery/"+cqid+"/Agent/"+agent_id,
            method: "POST",
        }).done(function (responce){
            console.log(responce.Message)
            if(responce.Success && responce.Code==200){
                launch_toast(`Quote Assigned To ${agentName}`,"check");
            }else if(responce.Success && responce.Code==201){
                launch_toast("Quote Removed","close");
            }
        }).fail(function (res){
            console.log(res);
        });;
    })
}
InitDiscardBox();
AssignAgent();
