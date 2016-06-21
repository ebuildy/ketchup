$(document).ready(function(){
	bz_stick_menu();
	
});


$(window).on("resize", function() {
	bz_stick_menu();
});


 function bz_stick_menu(){
 	if($('.header-fix').length >0){
 		var h = $(window).scrollTop();
        var width = $(window).width();
        if(width > 991){
            if((h > 10) ){
                $('.header-fix,.wrapper, .page-footer').addClass('scroll');
            }else{
                $('.header-fix,.wrapper,.page-footer').removeClass('scroll');
            }
        }else{
            $('.header-fix, .wrapper,.page-footer').removeClass('scroll');
        }
    }
 }
 
 $(window).scroll(function(){
	bz_stick_menu();
	// Show hide scrolltop button
    if( $(window).scrollTop() == 0 ) {
        $('.scroll_top').stop(false,true).fadeOut(600);
    }else{
        $('.scroll_top').stop(false,true).fadeIn(600);
    }
});
