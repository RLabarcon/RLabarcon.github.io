$("#logo").ready(function() {

	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();

	    if (scroll < 960) {
	    	$('#title').fadeOut("fast", function() { 
	    		$('#logo').fadeIn("fast");
	    	});
	    	
	    	$('#console-large').removeClass("picture");
	    	$('.console-arrow').css('visibility', 'hidden');
	    } 
	    else if (scroll > 960){
	    	$('#title').css("visibility, visible");
	    	$('#logo').fadeOut("fast", function() {
	    		$('#title').fadeIn("fast");
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

});