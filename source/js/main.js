// A $( document ).ready() block.

$(document).ready(function() {
	//$(".main").onepage_scroll({ responsiveFallback : 1200 });

	/* Menu button color system */
	$(".main").onepage_scroll({
		beforeMove: function(index) {
			changeMenuColor(index);
		},
		responsiveFallback : 800
	});

	$("#nav .items a").click(function(){
		var page_id = $(this).attr("page_id");
		$(".main").removeClass("navigating");
		$(".btnMenu").removeClass("active");
		$(".main").moveTo(page_id);
		//alert(page_id);

		//setTimeout(function(){ $(".main").moveTo(page_id); }, 1000);
		changeMenuColor(page_id);
	});

	function changeMenuColor(index){
		switch(index){
			case 1:
			$('.btnMenu').removeClass('inverted');
			break;
			case 2:
			$('.btnMenu').addClass('inverted');
			break;
			case 3:
			$('.btnMenu').removeClass('inverted');
			break;
			case 4:
			$('.btnMenu').addClass('inverted');
			break;
			case 5:
			$('.btnMenu').removeClass('inverted');
			break;
			case 6:
			$('.btnMenu').removeClass('inverted');
			break;
		}
	}

});

(function(){
	// Your base, I'm in it!
	var originalAddClassMethod = jQuery.fn.addClass;

	jQuery.fn.addClass = function(){
		// Execute the original method.
		var result = originalAddClassMethod.apply( this, arguments );

		// trigger a custom event
		jQuery(this).trigger('cssClassChanged');

		// return the original result
		return result;
	}
})();

// document ready function
$(function(){
	$(".btnMenu").click(function(){
		$(".main").toggleClass("navigating");
		$(".btnMenu").toggleClass("active");
	});

	$(".main").bind('cssClassChanged', function(){
		/* About */
		if ( $('#About').hasClass('active') ) {
			if (!$('.element-globe').hasClass('animated') ) {
				$(".element-globe").addClass("animated");
			}
			if (!$('.element-message').hasClass('animated') ) {
				$(".element-message").addClass("animated");
			}
			if (!$('.element-aboutus').hasClass('animated') ) {
				$(".element-aboutus").addClass("animated");
			}
			if (!$('.element-side-text').hasClass('animated') ) {
				$(".element-side-text").addClass("animated");
			}
		}

		/* Headquarters */
		else if ( $('#Headquarters').hasClass('active') ) {
			if (!$('#Headquarters .element-title').hasClass('animated') ) {
				$("#Headquarters .element-title").addClass("animated");
			}
			if (!$('.element-country').hasClass('animated') ) {
				$(".element-country").addClass("animated");
			}
		}

		/* Services */
		else if ( $('#Services').hasClass('active') ) {
			if (!$('#Services .big_title').hasClass('animated') ) {
				$("#Services .big_title").addClass("animated");
			}
			if (!$('#Services .service-box1').hasClass('animated') ) {
				$("#Services .service-box1").addClass("animated");
			}
			if (!$('#Services .service-box2').hasClass('animated') ) {
				$("#Services .service-box2").addClass("animated");
			}
			if (!$('#Services .service-box3').hasClass('animated') ) {
				$("#Services .service-box3").addClass("animated");
			}
			if (!$('#Services .service-box4').hasClass('animated') ) {
				$("#Services .service-box4").addClass("animated");
			}
			if (!$('#Services .service-box5').hasClass('animated') ) {
				$("#Services .service-box5").addClass("animated");
			}
			if (!$('#Services .service-box6').hasClass('animated') ) {
				$("#Services .service-box6").addClass("animated");
			}
		}

		/* Network */
		else if ( $('#Network').hasClass('active') ) {
			if (!$('#Network .element-title').hasClass('animated') ) {
				$("#Network .element-title").addClass("animated");
			}
		}

		/* Clients */
		else if ( $('#Clients').hasClass('active') ) {
			if (!$('#Clients .vertical-title').hasClass('animated') ) {
				$("#Clients .vertical-title").addClass("animated");
			}
			if (!$('#Clients .clients-ul li').hasClass('animated') ) {
				$("#Clients .clients-ul li").addClass("animated");
			}
		}
	});


	/* Map controls + slick configurations*/
	$('.slider-nav').on('beforeChange', function(event, slick, currentSlide, nextSlide){
		console.log($(slick.$slides.get(currentSlide)).attr('id'));
		var data_current = $('.slick-current div li').attr('data-country');

		changeCountry(data_current);
		//alert(data_current);
		//$('path#'+data_current).trigger('click');
	});

	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		speed: 500,
		arrows: false,
		fade: true,
		asNavFor: '.slider-nav',
		infinite: true,
		responsive: [{
			breakpoint: 640,
			settings: 'unslick'
		}],
		customOnChange: function justChanged(){

		}
	});

	$('.slider-nav').slick({
		slidesToShow: 10,
		slidesToScroll: 1,
		speed: 500,
		asNavFor: '.slider-for',
		dots: false,
		centerMode: false,
		focusOnSelect: true,
		slide: 'div',
		arrows: true,
		responsive: [{
			breakpoint: 640,
			settings: 'unslick'
		}]
	});

	//$('#world-map').load('mapa.html');



	if($(window).width() < 800){
		$('.slider li').click(function(){
			country_id = $(this).attr('data-country');
			//alert(country_id);
			document.location.href = country_id+".html";
		});
	}
});


function changeCountry(country_id){
	switch(country_id){
		case "brasil":
		country_color = "#3865B2";
		break;
		case "equador":
		country_color = "#3865B2";
		break;
		case "eua":
		country_color = "#FF6900";
		break;
		case "mexico":
		country_color = "#1F8E39";
		break;
		case "espanha":
		country_color = "#C01A2A";
		break;
		case "alemanha":
		country_color = "#C01A2A";
		break;
		case "argentina":
		country_color = "#3865B2";
		break;
		case "chile":
		country_color = "#3865B2";
		break;
		case "chipre":
		country_color = "#C01A2A";
		break;
		case "colombia":
		country_color = "#3865B2";
		break;
		case "emirados":
		country_color = "#C01A2A";
		break;
		case "grecia":
		country_color = "#C01A2A";
		break;
		case "india":
		country_color = "#C01A2A";
		break;
		case "italia":
		country_color = "#C01A2A";
		break;
		case "marrocos":
		country_color = "#C01A2A";
		break;
		case "mocambique":
		country_color = "#C01A2A";
		break;
		case "panama":
		country_color = "#1F8E39";
		break;
		case "polonia":
		country_color = "#C01A2A";
		break;
		case "portugal":
		country_color = "#C01A2A";
		break;
		case "reino-unido":
		country_color = "#C01A2A";
		break;
		case "romenia":
		country_color = "#C01A2A";
		break;
		case "russia":
		country_color = "#C01A2A";
		break;
		case "suecia":
		country_color = "#C01A2A";
		break;
		case "suica":
		country_color = "#C01A2A";
		break;
		default:
		country_color = "#D1D3D4";
		break;
	}

	//alert(country_id);
	/* TINT MAP */
	$('g.box').hide();
	$('.country').removeAttr('style');
	$("#"+country_id).attr('style', "fill:"+country_color+";fill-opacity:1");
	if(country_id == "marrocos"){
		$("#marrocos2").attr('style', "fill:"+country_color+";fill-opacity:1");
	}
	$('#'+country_id+'-box').fadeIn();
	/* END TINT */

	if(country_id != 'brasil'){
		$('.map-box-country').hide();
	}
}
