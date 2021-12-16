$( document ).ready(function() {
    var data={
        Destination:[],
        Month:"",
        LeadType:"",
        Agent:[]
    };
    var HTTP_HOST=$("#HTTP_HOST").val();
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