/* -------------------------------------------------------------------------------------------------
////////////////////////////////////////////////////////////////////////////////////////////////////
// SCRIPTS_TOP.JS : SCRIPTS TO BE PLACED AT THE TOP OF THE PAGE
////////////////////////////////////////////////////////////////////////////////////////////////////
------------------------------------------------------------------------------------------------- */
/* Core Functions
-----------------------------------------------
/////////////////////////////////////////////// */
(function()
{
	var method;
	var noop = function () {};
	var methods = [
		'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
		'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
		'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
		'timeStamp', 'trace', 'warn'
	];
	var length = methods.length;
	var console = (window.console = window.console || {});

	while (length--)
	{
		method = methods[length];

		// Only stub undefined methods.
		if (!console[method])
		{
			console[method] = noop;
		}
	}
}());
function imgLoaded(img)
{
	$(img).parent().addClass('loaded');
};
function preCache()
{
	try
	{
		$.each(imagePreload, function(){
			var img = new Image();
			img.src = this;
		});
	}
	catch(err)
	{
		//console.log("Error Logged: " + err);
	}
};
function validateEmail($email)
{
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	if(!emailReg.test($email))
	{
		return false;
	} else {
		return true;
	}
}



/* Custom Functions
-----------------------------------------------
/////////////////////////////////////////////// */



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

	// Leave this last in here
	preCache();

});