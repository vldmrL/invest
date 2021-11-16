
'use strict';


/* check if elemeni is in viewport*/
$.fn.isOnScreen = function(){
    var win = $(window);
    var viewport = {
        top : win.scrollTop(),
        left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();
    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};


function createCookie(name, value, days) {
  var expires;
    
  if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      expires = "; expires=" + date.toGMTString();
  }
  else {
      expires = "";
  }    
  document.cookie = escape(name) + "=" + 
      escape(value) + expires + "; path=/";
}




$(document).ready(function () {   


    AOS.init({
        duration: 1000,
    });

});       
  
/*
  //mobile nav bg
  $('#bs-main-navbar-collapse-1').on('show.bs.collapse', function () {
    $('.overlay').fadeIn();
  });
  $('#bs-main-navbar-collapse-1').on('hide.bs.collapse', function () {
    $('.overlay').fadeOut();
  });
  $('.overlay').click(function(){  
    $('#bs-main-navbar-collapse-1').collapse('hide');
  });
*/
      


   /*
    //scroll top    
    $('#main').append('<a href="#" id="return-to-top"><i class="icon-chevron-up"></i></a>');
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 150) {        
            $('#return-to-top').fadeIn(400);    
        } else {
            $('#return-to-top').fadeOut(400); 
        }
    });
    $('#return-to-top').click(function() {    
        $('body,html').animate({
            scrollTop : 0                      
        }, 500);
    });
     */

