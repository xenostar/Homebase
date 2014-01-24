/* -------------------------------------------------------------------------------------------------
////////////////////////////////////////////////////////////////////////////////////////////////////
// SCRIPTS_LIB.JS : COMMONLY USED JAVASCRIPT
////////////////////////////////////////////////////////////////////////////////////////////////////
------------------------------------------------------------------------------------------------- */
/* FUNC - Creates Console object to avoid IE issues
----------------------------------------------- */
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



/* FUNC - Adds .loaded class to images as they load
----------------------------------------------- */
function imgLoaded(img)
{
	$(img).parent().addClass('loaded');
};



/* FUNC - Creates Console object to avoid IE issues
----------------------------------------------- */
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



/* FUNCT - Validates emails passed to it
----------------------------------------------- */
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