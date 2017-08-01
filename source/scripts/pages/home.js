/*
|--------------------------------------------------------------------------
| Local Page Logic: website.com/home
|--------------------------------------------------------------------------
*/
function js_home() {
	var bInfo = new browserInfo();

	/**
	 * Load functions in order
	 *
	 */
	this.start = function() {
		this.foo();
	};

	/**
	 * @desc Basic function demo
	 *
	 */
	this.foo = function() {
		console.log("02 - Hello world, LOCAL application logic loaded!");
	};
}
