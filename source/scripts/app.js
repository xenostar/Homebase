/* -------------------------------------------------------------------------------------------------
////////////////////////////////////////////////////////////////////////////////////////////////////
// Application Logic
////////////////////////////////////////////////////////////////////////////////////////////////////
------------------------------------------------------------------------------------------------- */
function appStart()
{
    /**
     * @desc The Laravel page route name is echo'd into the
     *       HTML tag as the first class
     *
     */
    var routeName = $('html').attr('class').split(' ')[0];


    /**
     * @desc  Load Global Site Logic
     * @param We pass the routeName paramater so we can do things
     *        on a per-route basis without having to grab
     *        the routeName again from the DOM.
     *
     */
    try {
        var site = new js_global(routeName);
        site.start();
    }
    catch(error) {
        console.log("A global error was thrown: " + error);
    }


    /**
     * @desc  Load Local Page Logic
     *        A page-specific JS function is dynamically called based on the
     *        routeName we obtained earlier. We prefix the routeName with 'js_'
     *        so as to not call any malicious function names.
     *
     */
    try {
        var page = new window['js_' + routeName]();
        page.start();
    }
    catch(error) {
        console.log("A local error was thrown: " + error);
    }
};






/* DOCUMENT.READY - Fires as soon as the DOM is ready
-----------------------------------------------
/////////////////////////////////////////////// */
$(document).ready(function()
{
    /**
     * @desc Start the application
     *
     */
    appStart();
});





/* DOCUMENT.LOAD - Fires only when all content for the page has been downloaded and rendered
-----------------------------------------------
/////////////////////////////////////////////// */
$(window).load(function()
{
    /**
     * @desc  Leave this last in here!
     *        Loads images in background after page-load
     *        Edit images that need to be loaded in header template array
     *        We leave them in the template so we can have page-specific loading
     *
     */
    preCache();
});