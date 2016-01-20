/*
|--------------------------------------------------------------------------
| Global Site Logic
|--------------------------------------------------------------------------
|
| The javascript logic that should apply to every page on the website.
| However, there may be some exceptions, so we pass the route name
| from Laravel to allow us to check for specific pages.
|
| @param  route name passed from Laravel
|
*/
function js_global(routeName)
{
    var header  = $('header');
    var nav     = $('nav');
    var bInfo   = new browserInfo();

    /**
     * Load functions in order
     *
     */
    this.start = function()
    {
        this.foo();
    };

    /**
     * @desc Basic function demo
     *
     */
    this.foo = function()
    {
        console.log("01 - Hello world, GLOCAL application logic loaded!");
    };
}
