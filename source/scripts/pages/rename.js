/*
|--------------------------------------------------------------------------
| Global Site Logic
|--------------------------------------------------------------------------
|
| The javascript logic that should apply to the default page.
|
*/
function js_rename()
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
    }


    /**
     * @desc Basic function demo
     *
     */
    this.foo = function()
    {
        console.log("02 - Hello world, LOCAL application logic loaded!");
    };

}