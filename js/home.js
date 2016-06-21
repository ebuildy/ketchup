$(function()
{
    js_height_full();

    $('.player').each(function(){
        $(this).height($("#header_video").height() );
        if( $(this).attr('data-background') ){
            $(this).append('<div></div>');
            $(this).find('div').css('background-image', 'url(' + $(this).attr('data-background') + ')' ).height("100%");
        }
        $(this).mb_YTPlayer();
    });
});

$(window).on("resize", function() {

    js_height_full();

});

function js_height_full()
{
    var heightSlide = $(window).outerHeight();
    $(".full-height").css("height",heightSlide);

}