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
		var menu = $('.mobile-nav');
		var menu_btn = $('.mobile-btn');
		var close_btn = $('.close-btn');
		var overlay = $('.mobile-overlay');
		var wrap = $('.wrapper');

		menu_btn.on('click', function() {
			activateMenu();
		});

		overlay.on('click', function() {
			resetMenu();
		});

		close_btn.on('click', function() {
			resetMenu();
		});

		$(window).on('resize', function() {
			resetMenu();
		});

		function activateMenu() {
			if (!menu.hasClass('shift')) {
				overlay.show();
				menu.addClass('shift');
				menu_btn.addClass('shift');
				wrap.addClass('blur');
			} else {
				resetMenu();
			}
		}

		function resetMenu() {
			if (menu.hasClass('shift')) {
				overlay.hide();
				menu.removeClass('shift');
				menu_btn.removeClass('shift');
				wrap.removeClass('blur');
			}
		}
	};
}
