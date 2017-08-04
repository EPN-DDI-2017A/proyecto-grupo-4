/*$(window).load(function() 
{
	$('#preloader').fadeOut('slow');
	$('body').css({'overflow':'visible'});
});
*/
/*$('body').load(function()
{
	$('#preloader').fadeOut('slow');
	$('body').css({'overflow':'visible'});
});*/

$(window).on('load',(function() {
	$('#preloader').delay(350).fadeOut('slow');
	$('body').delay(350).css("overflow","visible");
}));
