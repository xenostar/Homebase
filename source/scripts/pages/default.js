/* Default page logic
----------------------------------------------- */
function js_default()
{
    // Page Selectors
    var banner = $('.banner');
    // Properties
    var bInfo  = new browserInfo();


    /**
     * @desc Basic function demo
     *
     */
    this.foo = function()
    {
        console.log("02 - Hello world, LOCAL application logic loaded!");
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