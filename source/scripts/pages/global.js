/* Global site logic
 *
 * @param routeName - Name of the Laravel route passed from app.js
 *
----------------------------------------------- */
function js_global(routeName)
{
    // Page Selectors
    var banner  = $('.banner');
    // Properties
    var bInfo   = new browserInfo();


    /**
     * @desc Basic function demo
     *
     */
    this.foo = function()
    {
        console.log("01 - Hello world, GLOBAL application logic loaded!");
    };


    /**
     * @desc Load functions in order
     *
     */
    this.start = function()
    {
        this.foo();
    };
};