 $(function(){
 		var flag=true;
 	$('.nut1').click(function(){
 	 	console.log($('.top2').offset().top);
	 	var cuon=$('.top2').offset().top;
	 	$('html,body').animate({scrollTop:cuon},2000);
	 	$('.menu').css({'right':-200});
	 	flag=true;
	 	return false;	
	 });
	  $('.nut2').click(function(){
	 	var cuon1=$('.top3').offset().top;
	 	$('html,body').animate({scrollTop:cuon1},2000);
	 	console.log($('.top3').offset().top);
	 	$('.menu').css({'right':-200});
	 	flag=true;
	 	return false;
	 });
	 $('.nut3').click(function(){
	 	var cuon2=$('.top7').offset().top;
	 	$('html,body').animate({scrollTop:cuon2},2000);
	 	$('.menu').css({'right':-200});
	 	flag=true;
	 	return false;
	 });
	  $('.nut4').click(function(){
	 	var cuon3=$('.top1').offset().top;
	 	$('html,body').animate({scrollTop:cuon3},2000);
	 	$('.menu').css({'right':-200});
	 	flag=true;
	 	return false;
	 });
	 $(window).resize(function(){
	 	var cao=$(window).height();
	 	$('.top1').css({'height':cao});
	 	// console.log('ban vua chinh');
	 });
	 $('.row').click(function(){
	 	$('.menu').css({'right':-200});
	 				flag=true;
	 });
	 $('.nut').click(function(){
	 			if (flag==true) {
	 				$('.menu').css({'right':10});
	 				flag=false;
	 			}else{
	 				$('.menu').css({'right':-200});
	 				flag=true;
	 			}  
	 			});

	 // 	});
	 // $('.nut').click(function(){
	 // 	$('.menu').addClass('ra');
	 // 	return false;
	 // });
	 // $('.nut').click(function(){
	 // 	$('.menu').removeClass('ra');
	 // });

 	 //dang nhap
 	 $('.nutdangnhap').click(function(){
 	 	$('.den').addClass('hienden');
 	 	$('.dangnhap').addClass('hiendangnhap');
 	 	$('.menu').css({'right':-200});
	 	flag=true;
 	 	return false;
 	 });
 	 $('.den').click(function(){
 	 	console.log('da click');
 	 	$('.container.den.hienden').removeClass('hienden');
 	 	$('.container.dangnhap.hiendangnhap').removeClass('hiendangnhap');
 	 });
 	 $('.huybo').click(function(){
 	 	$('.container.den.hienden').removeClass('hienden');
 	 	$('.container.dangnhap.hiendangnhap').removeClass('hiendangnhap');
 	 });
 	 $('.dangnhap').click(function(){
 	 	$('.container.den.hienden').removeClass('hienden');
 	 	$('.container.dangnhap.hiendangnhap').removeClass('hiendangnhap');
 	 });


})
 