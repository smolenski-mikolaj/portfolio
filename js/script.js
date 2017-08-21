jQuery(document).ready(function() {
	
	$('body').on({
		'click': function() {
			$('nav').slideToggle(); 
		}
	}, '.nav-trigger');
	
});