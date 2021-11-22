
'use strict';


$(document).ready(function () {   

    window.setTimeout(function(){
        AOS.init({
            duration: 1000,
        });
    }, 50);
   

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

