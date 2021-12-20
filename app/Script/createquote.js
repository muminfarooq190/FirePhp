
var data = {}
$( document ).ready(function() {
     data={
        Destination:[],
        Month:"September",
        LeadType:"Progress",
        Agent:[]
    };
    let HTTP_HOST=$("#HTTP_HOST").val();
    LoadPage(HTTP_HOST+"createquote/quote",data)
    .done(function( Response,textStatus ) {
        $(".quotes-list").html(Response);
    })
    .fail(function( jqXHR, textStatus ) {
        alert( "Page Not Found " + textStatus );
    });
});
const LoadPage=($url,$data={})=>{
    return  $.ajax({
        url: $url,
        method: "POST",
        data: $data,
    });
}
function textAreaAdjust(element) {
    element.style.height = "1px";
    element.style.height = (element.scrollHeight)+"px";
}
$('#destinationform').submit(function (){

 filterDestination();

})
function filterDestination(){
    let HTTP_HOST=$("#HTTP_HOST").val();
    this.data = { 'Destination' : []};
    $("input:checked").each(function() {

        data.Destination.push($(this).val());
    });
    LoadPage(HTTP_HOST+"createquote/quote",this.data)
          .done(function( Response,textStatus ) {
              $(".quotes-list").html(Response);
          })

}
$('#agentform').submit(function (){
    filterAgent();
})
function  filterAgent(){
    let HTTP_HOST=$("#HTTP_HOST").val();
    this.data = { 'Agent' : []};
    $("input:checked").each(function() {

        data.Agent.push($(this).val());
    });

    LoadPage(HTTP_HOST+"createquote/quote",this.data)
        .done(function( Response,textStatus ) {
            $(".quotes-list").html(Response);
        })
}
let month = document.querySelector('.ccs')
month.addEventListener('click', function(e){
    filterMonth(e)

})
function  filterMonth(e){
    let HTTP_HOST=$("#HTTP_HOST").val();
    this.data = { 'Month' : ''};

    data.Month = e.target.getAttribute("value")

    LoadPage(HTTP_HOST+"createquote/quote",this.data)
        .done(function( Response,textStatus ) {
            $(".quotes-list").html(Response);
        })
}
let leadtype = document.querySelector('.dds')
leadtype.addEventListener('click', function(e){
    filterLead(e)

})
function filterLead(e)
{
    let HTTP_HOST=$("#HTTP_HOST").val();
    this.data = { 'LeadType' : ''};

    data.LeadType = e.target.getAttribute("value")

    LoadPage(HTTP_HOST+"createquote/quote",this.data)
        .done(function( Response,textStatus ) {
            $(".quotes-list").html(Response);
        })


}

