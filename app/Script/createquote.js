$( document ).ready(function() {
    var HTTP_HOST=$("#HTTP_HOST").val();
    LoadPage(HTTP_HOST+"createquote/quote")
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
        method: "GET",
        data: $data,
    });
}