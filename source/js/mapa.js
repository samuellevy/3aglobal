$(document).ready(function(){
	//$(".lightbox").show();
	country_color = "#3865B2";

	$('.country').click(function(){
		country_id = $(this).attr('id');
		$('li[data-country='+country_id+']').trigger('click');
	});

	// $('.unit').click(function(){
	// 	$('.unit-detail').hide();
	// 	var content_item = $(this).attr('data-unit');
	// 	$('.unit-detail[data-unit='+content_item+']').fadeIn();
	// });
	$('path#brasil').css('fill', '#3865B2');

	// $(".click_more_map").click(function(){
	// 	$(".lightbox").fadeIn().css({'display':'table'});
	// });
	// $(".close_btn").click(function(){
	// 	$(".lightbox").fadeOut();
	// });

	$('.slick-dots').click(function(){

	});

	$('.box-detail').click(function(){
		var detail_id = $(this).attr('data-city');
		$('.box-detail').hide();
		$('.box-detail-'+detail_id).show();
		//$(this).addClass('is-active');
	});
});
