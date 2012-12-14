/* -----------------------------------------------
//////////////////////////////////////////////////
//  Scripts of Awesomness!
//  Author: Bryan Leewood
//  Version: 1.0.0
//////////////////////////////////////////////////
----------------------------------------------- */
$(function(){

  // Setting scroll to top
  $("a[href='#top']").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });

  // Assigning FitText to header
  $("#header h1").fitText(0.49);

});