$(document).ready(function() {

	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();

	    if (scroll < 960) {
	    	$('#title').fadeOut("slow", function() { 
	    		$('#logo').fadeIn("slow");
	    	});
	    	
	    	$('#console-large').removeClass("picture");
	    	$('.console-arrow').css('visibility', 'hidden');
	    } 
	    else if (scroll > 960){
	    	$('#title').css("visibility, visible");
	    	$('#logo').fadeOut("slow", function() {
	    		$('#title').fadeIn("slow");
	    		$('#console-large').addClass("picture");
	    		$('.console-arrow').css('visibility', 'visible');
	    	});
	    	
	    }
	});


	$(".left .clip").hover(function(){
		$(this).removeClass("left-inactive");
		$(this).addClass("left-active");
	}, function() { 
		$(this).addClass("left-inactive");
		$(this).removeClass("left-active");
	});

	$(".right .clip").hover(function(){
		$(this).removeClass("right-inactive");
		$(this).addClass("right-active");
	}, function() { 
		$(this).addClass("right-inactive");
		$(this).removeClass("right-active");
	});


	var $window = $("#content-large");

	function boxAdjust() {
		if (700 < $window.width() < 1200) {
			$('.tile').removeClass('full-width').removeClass('third-width').addClass('half-width');
		}
		if ($window.width() < 700) {
			$('.tile').removeClass('half-width').removeClass('third-width').addClass('full-width');
		}
		if ($window.width() > 1200) {
			$('.tile').removeClass('full-width').removeClass('half-width').addClass('third-width');
		}
	}

	boxAdjust();

	$(window).resize(boxAdjust);

});