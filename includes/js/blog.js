$(function(){
    var topOfOthDiv = $(".hideshare").offset().top;
    $(window).scroll(function() {
        if($(window).scrollTop() > topOfOthDiv) { //scrolled past the other div?
            $(".share").hide(); //reached the desired point -- show div
        }
        else{
          $(".share").show();
        }
    });
  });
  
  
  (function () {
    'use strict'
  
    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
      var msViewportStyle = document.createElement('style')
      msViewportStyle.appendChild(
        document.createTextNode(
          '@-ms-viewport{width:auto!important}'
        )
      )
      document.head.appendChild(msViewportStyle)
    }
  
  }())