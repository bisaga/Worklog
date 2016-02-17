/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */

/*
var onResize = function() {
  // apply dynamic padding at the top of the body according to the fixed navbar height
  
 
    width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
    if (width > 768) {
        $('nav').removeClass('navbar-static-top');
        $('nav').addClass('navbar-fixed-top');
        $("#page-wrapper").css("margin-top", $(".navbar-fixed-top").height());
    } else {
        $('nav').removeClass('navbar-fixed-top');
        $('nav').addClass('navbar-static-top');
        $("#page-wrapper").css("margin-top", 0);        
    }

};
*/
// attach the function to the window resize event
$(window).resize(onResize);

// call it also when the page is ready after load or reload
$(function() {
  //onResize();
});