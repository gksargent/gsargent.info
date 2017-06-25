$(document).ready(function() {
	// get current URL path and assign 'active' class
	var pathname = window.location.pathname;
	$('nav > ul > li > a[href="'+pathname+'"]').parent().addClass('active');
})
