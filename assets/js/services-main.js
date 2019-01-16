(function($) {
    
    $(document).ready(function(){

//init func

});

//
$(window).load(function(){

//
setTimeout(function(){
	$('.header__icon').addClass('header__icon-animate');
	setTimeout(function(){
		$('.header').addClass('header--active');
		setTimeout(function(){
			$('.js-boxes').addClass('animate-start');
		}, 1000);
	}, 500);
}, 500);

//$('.box-base__frame').click(function(e){
//    if($(this).attr('href').indexOf("brif") > -1){return false;}    
//});

});

})(jQuery);