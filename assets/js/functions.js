$(document).ready(function(){
	$('.grupo-2').on('click', function(){
		$('.grupo2').addClass("active");
		$('.cad-normal').addClass("active");
	});

	$('.grupo-1').on('click', function(){
		$('.grupo2').removeClass("active");
		$('.cad-normal').removeClass("active");
	});
	$('.grupo-3').on('click', function(){
		$('.grupo2').removeClass("active");
		$('.cad-normal').removeClass("active");
	});
});
