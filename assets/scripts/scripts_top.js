/* -------------------------------------------------------------------------------------------------
////////////////////////////////////////////////////////////////////////////////////////////////////
// SCRIPTS_TOP.JS : SCRIPTS TO BE PLACED AT THE TOP OF THE PAGE
////////////////////////////////////////////////////////////////////////////////////////////////////
------------------------------------------------------------------------------------------------- */
/* Functions
-----------------------------------------------
/////////////////////////////////////////////// */
function imgLoaded(img){
	$(img).parent().addClass('loaded');
};
function preCache(){
	$.each(imagePreload, function(){
		var img = new Image();
		img.src = this;
	});
};
function draw() {
	var canvas = document.getElementById("canvas");
	if (canvas.getContext) {
		var ctx = canvas.getContext("2d");

		ctx.fillStyle = "rgb(200,0,0)";
		ctx.fillRect (10, 10, 55, 50);

		ctx.fillStyle = "rgba(0, 0, 200, 0.5)";
		ctx.fillRect (30, 30, 55, 50);
	}
}


/* DOCUMENT.READY - Fires as soon as the DOM is ready
-----------------------------------------------
/////////////////////////////////////////////// */
$(document).ready(function() {

	// Code Here

});



/* DOCUMENT.LOAD - Fires only when all content for the page has been downloaded and rendered
-----------------------------------------------
/////////////////////////////////////////////// */
$(window).load(function() {

	// Canvas
	draw();

	// Leave this last in here
	preCache();

});