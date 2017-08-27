jQuery(document).ready(function() {
	
	var time = 800;
	var show = $(".show");

	$('.skill').each(function() { 
		var skill = $(this);
		setTimeout( function(){ $(skill).fadeTo('slow', 1); }, time);
		time += 200;
	});
	
	$(window).scroll(function(d,h) {
		show.each(function(i) {
			a = $(this).offset().top + ($(window).height() / 2);
			b = $(window).scrollTop() + $(window).height();
			if (a < b) $(this).fadeTo(1000,1);
		});
	});
	
});