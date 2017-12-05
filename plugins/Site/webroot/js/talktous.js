$(function() {
	$('.btn-logo-clients').click(function(){
		var id = $(this).attr('data-id');
		$('.btn-logo-clients').removeClass('show');
		$('.btn-logo-clients').addClass('hide');
		$('.text-clients[data-id='+id+']').removeClass('hide');
		$('.text-clients[data-id='+id+']').addClass('show');
	});
	$('.close-btn').click(function(){
		$('.text-clients').removeClass('show');
		$('.text-clients').addClass('hide');
		$('.btn-logo-clients').removeClass('hide');
		$('.btn-logo-clients').addClass('show');
	});
	document.body.style.zoom="80%";
});
