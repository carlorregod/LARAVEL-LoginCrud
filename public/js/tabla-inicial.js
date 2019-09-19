$(window).on('hashchange', function() {
    if (window.location.hash) {
        var page = window.location.hash.replace('#', '');
        if (page == Number.NaN || page <= 0) {
            return false;
        }else{
            getData(page);
        }
    }
});

$(document).ready(function()
{
    $(document).on('click', '.pagination a',function(event)
    {
        event.preventDefault();

        $('li').removeClass('active');
        $(this).parent('li').addClass('active');

        var myurl = $(this).attr('href');
        var page=$(this).attr('href').split('page=')[1];

        getData(page);
    });

});

function getData(page){
    $.ajax(
    {
        url: 'main?page=' + page,
        type: "get",
        datatype: "html"
    }).done(function(data){
        //Este método amerita ocultar un cuerpo del html
        $(document.querySelector("body > hr:nth-child(4)")).hide();
        $(document.querySelector("body > div.card.border-success.mx-auto.my-5.align-items-center")).hide();
        $("#tag_container").empty().html(data);
        location.hash = page;
    }).fail(function(jqXHR, ajaxOptions, thrownError){
          alert('No response from server');
    });
}