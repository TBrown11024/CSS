$(document).ready(function() {
	$("#headerAnimate").mouseenter(function() {
		$("#headerSearch").fadeTo("fast", 1);
	});
	$("#headerAnimate").mouseleave(function() {
		$("#headerSearch").fadeTo("fast", 0);
	});
});