/*
|--------------------------------------------------------------------------
| Global Site Logic i.e. website.com/*
|--------------------------------------------------------------------------
|
| The javascript logic that should apply to every page on the website.
| However, there may be some exceptions, so we pass the page/route name
| from your CMS to allow us to check for specific pages.
|
| @param  route name passed from your CMS from ../app.js
|
*/
function js_global(routeName) {
	var bInfo = new browserInfo();

	/**
	 * Load functions in order
	 *
	 */
	this.start = function() {
		this.foo();
		this.mobileNav();
	};

	/**
	 * @desc Basic function demo
	 *
	 */
	this.foo = function() {
		console.log("01 - Hello world, GLOBAL application logic loaded!");
	};

	/**
	 * @desc Mobile navigation logic
	 *
	 */
	this.mobileNav = function() {
		var wrapper      = $('.wrapper');
		var mnav         = $('.mobile-nav--body');
		var mnav_btn     = $('.mobile-nav--btn');
		var mnav_close   = $('.mobile-nav--close');
		var mnav_overlay = $('.mobile-nav--overlay');

		mnav_btn.on('click', function() {
			activateMenu();
		});

		mnav_overlay.on('click', function() {
			resetMenu();
		});

		mnav_close.on('click', function() {
			resetMenu();
		});

		$(window).on('resize', function() {
			resetMenu();
		});

		function activateMenu() {
			if (!mnav.hasClass('shift')) {
				mnav_overlay.show();
				mnav.addClass('shift');
				mnav_btn.addClass('shift');
				wrapper.addClass('blur');
			} else {
				resetMenu();
			}
		}

		function resetMenu() {
			if (mnav.hasClass('shift')) {
				mnav_overlay.hide();
				mnav.removeClass('shift');
				mnav_btn.removeClass('shift');
				wrapper.removeClass('blur');
			}
		}
	};
}
