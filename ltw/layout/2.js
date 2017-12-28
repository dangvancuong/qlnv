 $(function(){
 	$('.nutsinhnhat').click(function(){
 	 	// console.log($('.top2').offset().top);
 	 	console.log('da an');
	 	var cuon=$('.top2').offset().top;
	 	$('html,body').animate({scrollTop:cuon},2000);
	 	// return false;	
	 });

 })