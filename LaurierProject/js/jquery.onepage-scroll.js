/* ===========================================================
 * jquery-onepage-scroll.js v1
 * ===========================================================
 * Copyright 2013 Pete Rojwongsuriya.
 * http://www.thepetedesign.com
 *
 * Create an Apple-like website that let user scroll
 * one page at a time
 *
 * Credit: Eike Send for the awesome swipe event
 * https://github.com/peachananr/onepage-scroll
 *
 * ========================================================== */

!function($){
  
  var defaults = {
    sectionContainer: "section",
    easing: "ease",
    animationTime: 1000,
    pagination: true,
    updateURL: false
	};
	
	/*------------------------------------------------*/
	/*  Credit: Eike Send for the awesome swipe event */    
	/*------------------------------------------------*/
	
	$.fn.swipeEvents = function() {
      return this.each(function() {

        var startX,
            startY,
            $this = $(this);

        $this.bind('touchstart', touchstart);

        function touchstart(event) {
          var touches = event.originalEvent.touches;
          if (touches && touches.length) {
            startX = touches[0].pageX;
            startY = touches[0].pageY;
            $this.bind('touchmove', touchmove);
          }
          event.preventDefault();
        }

        function touchmove(event) {
          var touches = event.originalEvent.touches;
          if (touches && touches.length) {
            var deltaX = startX - touches[0].pageX;
            var deltaY = startY - touches[0].pageY;

            if (deltaX >= 50) {
              $this.trigger("swipeLeft");
            }
            if (deltaX <= -50) {
              $this.trigger("swipeRight");
            }
            if (deltaY >= 50) {
              $this.trigger("swipeUp");
            }
            if (deltaY <= -50) {
              $this.trigger("swipeDown");
            }
            if (Math.abs(deltaX) >= 50 || Math.abs(deltaY) >= 50) {
              $this.unbind('touchmove', touchmove);
            }
          }
          event.preventDefault();
        }

      });
    };
	

  $.fn.onepage_scroll = function(options){
    var settings = $.extend({}, defaults, options),
        el = $(this),
        sections = $(settings.sectionContainer)
        total = sections.length,
        status = "off",
        topPos = 0,
        lastAnimation = 0,
        quietPeriod = 500,
        paginationList = "";
    
    $.fn.transformPage = function(settings, pos) {
      $(this).css({
        "-webkit-transform": "translate3d(0, " + pos + "%, 0)", 
        "-webkit-transition": "all " + settings.animationTime + "ms " + settings.easing,
        "-moz-transform": "translate3d(0, " + pos + "%, 0)", 
        "-moz-transition": "all " + settings.animationTime + "ms " + settings.easing,
        "-ms-transform": "translate3d(0, " + pos + "%, 0)", 
        "-ms-transition": "all " + settings.animationTime + "ms " + settings.easing,
        "transform": "translate3d(0, " + pos + "%, 0)", 
        "transition": "all " + settings.animationTime + "ms " + settings.easing
      });
    }
    
    $.fn.moveDown = function() {
      var el = $(this)
      index = $(settings.sectionContainer +".active").data("index");
      if(index < total) {
        current = $(settings.sectionContainer + "[data-index='" + index + "']");
        next = $(settings.sectionContainer + "[data-index='" + (index + 1) + "']");
        if(next) {
          current.removeClass("active")
          next.addClass("active");
          if(settings.pagination == true) {
            $(".onepage-pagination li a" + "[data-index='" + index + "']").removeClass("active");
            $(".onepage-pagination li a" + "[data-index='" + (index + 1) + "']").addClass("active");
          }
          $("body")[0].className = $("body")[0].className.replace(/\bviewing-page-\d.*?\b/g, '');
          $("body").addClass("viewing-page-"+next.data("index"))
          
          if (history.replaceState && settings.updateURL == true) {
            var href = window.location.href.substr(0,window.location.href.indexOf('#')) + "#" + (index + 1);
            history.pushState( {}, document.title, href );
          }
        }
        pos = (index * 100) * -1;
        el.transformPage(settings, pos);
      }
    }
    
    $.fn.moveUp = function() {
      var el = $(this)
      index = $(settings.sectionContainer +".active").data("index");
      if(index <= total && index > 1) {
        current = $(settings.sectionContainer + "[data-index='" + index + "']");
        next = $(settings.sectionContainer + "[data-index='" + (index - 1) + "']");

        if(next) {
          current.removeClass("active")
          next.addClass("active")
          if(settings.pagination == true) {
            $(".onepage-pagination li a" + "[data-index='" + index + "']").removeClass("active");
            $(".onepage-pagination li a" + "[data-index='" + (index - 1) + "']").addClass("active");
          }
          $("body")[0].className = $("body")[0].className.replace(/\bviewing-page-\d.*?\b/g, '');
          $("body").addClass("viewing-page-"+next.data("index"))
          
          if (history.replaceState && settings.updateURL == true) {
            var href = window.location.href.substr(0,window.location.href.indexOf('#')) + "#" + (index - 1);
            history.pushState( {}, document.title, href );
          }
        }
        pos = ((next.data("index") - 1) * 100) * -1;
        el.transformPage(settings, pos);
      }
    }
    
    function init_scroll(event, delta) {
        deltaOfInterest = delta;
        var timeNow = new Date().getTime();
        // Cancel scroll if currently animating or within quiet period
        if(timeNow - lastAnimation < quietPeriod + settings.animationTime) {
            event.preventDefault();
            return;
        }

        if (deltaOfInterest < 0) {
          index = $(this).index();
          el.moveDown()
          if(index==1){
            iritation_statistic();
          }else if(index==2){
            kok_bisa();
          }else if(index==3){
            penjabaran_tubuh();
          }else if(index == 4){
            hubungan_iritasi_menstruasi();
            thermometer();
          }else if(index == 5){
            kegiatan();
          }else if(index == 6){
            kenali_tanda_tanda();
          }else if(index == 7){
            solusi();
          }else if(index == 8){
            usp_product();
          }

        } else {
          el.moveUp()
        }
        lastAnimation = timeNow;
    }
    
    // Prepare everything before binding wheel scroll
    
    el.addClass("onepage-wrapper").css("position","relative");
    $.each( sections, function(i) {
      $(this).css({
        position: "absolute",
        top: topPos + "%"
      }).addClass("section").attr("data-index", i+1);
      topPos = topPos + 100;
      if(settings.pagination == true) {
       //  if (i==0) {
       //   paginationList += "<li id='1' style='margin-right: 92px;margin-top: -19px;'><a data-index='"+(i+1)+"' href='#" + (i+1) + "'><img src='img/parameter.jpg' style='width:63px;' ></a></li><br/><br/>"
       // }
       // else if(i==1){
       //   paginationList += "<li id='2' style='margin-right: 30px;'><a data-index='"+(i+1)+"' href='#" + (i+1) + "'><img src='img/wanita.jpg' style='width:60px;' ></a></li><br/><br/>"
       // }
       // else if (i==2) {
       //   paginationList += "<li id='3' style='margin-right: 30px;'><a data-index='"+(i+1)+"' href='#" + (i+1) + "'><img src='img/box.jpg' style='width:60px;'></a></li><br/><br/>"
       // }else if (i==3) {
       //   paginationList += "<li id='4' style='margin-right: 30px;'><a data-index='"+(i+1)+"' href='#" + (i+1) + "'><img src='img/buku.jpg' style='width:60px;'></a></li><br/><br/>"
       // }
        // paginationList += "<li type='none'><a data-index='"+(i+1)+"' href='#" + (i+1) + "'></a></li>"
      }
    });

    el.swipeEvents().bind("swipeDown",  function(){ 
      el.moveUp();
    }).bind("swipeUp", function(){ 
      el.moveDown(); 
    });
    
    // Create Pagination and Display Them
    if(settings.pagination == true) {
      $("<ul class='onepage-pagination'>" + paginationList + "</ul>").prependTo("body");
      posTop = (el.find(".onepage-pagination").height() / 2) * -1;
      el.find(".onepage-pagination").css("margin-top", posTop);
    }
    
    if(window.location.hash != "" && window.location.hash != "#1") {
      init_index =  window.location.hash.replace("#", "")
      $(settings.sectionContainer + "[data-index='" + init_index + "']").addClass("active")
      $("body").addClass("viewing-page-"+ init_index)
      if(settings.pagination == true) $(".onepage-pagination li a" + "[data-index='" + init_index + "']").addClass("active");
      
      next = $(settings.sectionContainer + "[data-index='" + (init_index) + "']");
      if(next) {
        next.addClass("active")
        if(settings.pagination == true) $(".onepage-pagination li a" + "[data-index='" + (init_index) + "']").addClass("active");
        $("body")[0].className = $("body")[0].className.replace(/\bviewing-page-\d.*?\b/g, '');
        $("body").addClass("viewing-page-"+next.data("index"))
        if (history.replaceState && settings.updateURL == true) {
          var href = window.location.href.substr(0,window.location.href.indexOf('#')) + "#" + (init_index);
          history.pushState( {}, document.title, href );
        }
      }
      pos = ((init_index - 1) * 100) * -1;
      el.transformPage(settings, pos);
      
    }else{
      $(settings.sectionContainer + "[data-index='1']").addClass("active")
      $("body").addClass("viewing-page-1")
      if(settings.pagination == true) $(".onepage-pagination li a" + "[data-index='1']").addClass("active");
    }
    if(settings.pagination == true)  {
      $(".onepage-pagination li a").click(function (){
        var page_index = $(this).data("index");
        if (!$(this).hasClass("active")) {
          current = $(settings.sectionContainer + ".active")
          next = $(settings.sectionContainer + "[data-index='" + (page_index) + "']");
          if(next) {
            current.removeClass("active")
            next.addClass("active")
            $(".onepage-pagination li a" + ".active").removeClass("active");
            $(".onepage-pagination li a" + "[data-index='" + (page_index) + "']").addClass("active");
            $("body")[0].className = $("body")[0].className.replace(/\bviewing-page-\d.*?\b/g, '');
            $("body").addClass("viewing-page-"+next.data("index"))
          }
          pos = ((page_index - 1) * 100) * -1;
          el.transformPage(settings, pos);
        }
        if (settings.updateURL == false) return false;
      });
    }
    
    
    
    $(document).bind('mousewheel DOMMouseScroll', function(event) {
      event.preventDefault();
      var delta = event.originalEvent.wheelDelta || -event.originalEvent.detail;
      init_scroll(event, delta);
    });
    return false;
    
  }

  function hubungan_iritasi_menstruasi(){
      $("#kiri").addClass('animated fadeInLeft');
      $(".suhu").addClass('animated fadeInLeft');
  }
  function thermometer(goalAmount, progressAmount, animate) {
      "use strict";
      var $thermo = $("#thermometer"),
          $progress = $(".progress", $thermo),
          $goal = $(".goal", $thermo),
          percentageAmount;

      goalAmount = goalAmount || parseFloat($goal.text()),
      progressAmount = progressAmount || parseFloat($progress.text()),
      percentageAmount = Math.min(Math.round(progressAmount / goalAmount * 1000) / 10, 100); //make sure we have 1 decimal point

      $goal.find(".amount").text();
      $progress.find(".amount").text();

      $progress.find(".amount").hide();
      if (animate !== false) {
          $progress.animate({
              "height": percentageAmount + "%"
          }, 1200, function () {
              // $(this).find(".amount").fadeIn(200);
          });
      } else {
          $progress.css({
              "height": percentageAmount + "%"
          });
          $progress.find(".amount").fadeIn(200);
      }
  }
  function penjabaran_tubuh(){
            $('.kata-kata4').addClass('animated fadeInLeft');
            $('.cewe4').addClass('animated fadeInDown');
            $('.radiokelopak').addClass('animated fadeIn');
            $('.radiokewanitaan').addClass('animated fadeIn');
            $('.radiopipi').addClass('animated fadeIn');
            $('.radiolengan').addClass('animated fadeIn');
            $('.radiotorso').addClass('animated fadeIn');
            $('.radiotumit').addClass('animated fadeIn');
            $('.radiotelapak').addClass('animated fadeIn');

            $(".radiokelopak").click(function(){
              // visible
                $(".kotakkelopak").css("visibility","visible");
                $(".tekskelopak").css("visibility","visible");
                $(".gariskelopak").css("visibility","visible");


                $(".kotakkelopak").addClass('animated fadeIn');
                $(".tekskelopak").addClass('animated fadeIn');
                $(".gariskelopak").addClass('animated fadeIn');

                // hidden other
                $(".kotakkewanitaan").css("visibility","hidden");
                $(".tekskewanitaan").css("visibility","hidden");
                $(".gariskewanitaan").css("visibility","hidden");

                $(".kotaklengan").css("visibility","hidden");
                $(".tekslengan").css("visibility","hidden");
                $(".garislengan").css("visibility","hidden");

                $(".kotaktorso").css("visibility","hidden");
                $(".tekstorso").css("visibility","hidden");
                $(".garistorso").css("visibility","hidden");

                $(".kotaktelapak").css("visibility","hidden");
                $(".tekstelapak").css("visibility","hidden");
                $(".garistelapak").css("visibility","hidden");

                $(".kotakpipi").css("visibility","hidden");
                $(".tekspipi").css("visibility","hidden");
                $(".garispipi").css("visibility","hidden");

              $(".kotaktumit").css("visibility","hidden");
                $(".tekstumit").css("visibility","hidden");
                $(".garistumit").css("visibility","hidden");        



                // removeClass other
                $(".kotakkewanitaan").removeClass('animated fadeIn');
                $(".tekskewanitaan").removeClass('animated fadeIn');
                $(".gariskewanitaan").removeClass('animated fadeIn');

                $(".kotaklengan").removeClass('animated fadeIn');
                $(".tekslengan").removeClass('animated fadeIn');
                $(".garislengan").removeClass('animated fadeIn');
                
                $(".kotaktorso").removeClass('animated fadeIn');
                $(".tekstorso").removeClass('animated fadeIn');
                $(".garistorso").removeClass('animated fadeIn');

                $(".kotaktelapak").removeClass('animated fadeIn');
                $(".tekstelapak").removeClass('animated fadeIn');
                $(".garistelapak").removeClass('animated fadeIn');

                $(".kotakpipi").removeClass('animated fadeIn');
                $(".tekspipi").removeClass('animated fadeIn');
                $(".garispipi").removeClass('animated fadeIn');

                $(".kotaktumit").removeClass('animated fadeIn');
                $(".tekstumit").removeClass('animated fadeIn');
                $(".garistumit").removeClass('animated fadeIn');
            });
            $(".radiokewanitaan").click(function(){
              // visible
                $(".kotakkewanitaan").css("visibility","visible");
                $(".tekskewanitaan").css("visibility","visible");
                $(".gariskewanitaan").css("visibility","visible");


                $(".kotakkewanitaan").addClass('animated fadeIn');
                $(".tekskewanitaan").addClass('animated fadeIn');
                $(".gariskewanitaan").addClass('animated fadeIn');

                // hidden other
                $(".kotakkelopak").css("visibility","hidden");
                $(".tekskelopak").css("visibility","hidden");
                $(".gariskelopak").css("visibility","hidden");

                $(".kotaklengan").css("visibility","hidden");
                $(".tekslengan").css("visibility","hidden");
                $(".garislengan").css("visibility","hidden");

                $(".kotaktorso").css("visibility","hidden");
                $(".tekstorso").css("visibility","hidden");
                $(".garistorso").css("visibility","hidden");

                $(".kotaktelapak").css("visibility","hidden");
                $(".tekstelapak").css("visibility","hidden");
                $(".garistelapak").css("visibility","hidden");

                $(".kotakpipi").css("visibility","hidden");
                $(".tekspipi").css("visibility","hidden");
                $(".garispipi").css("visibility","hidden");

              $(".kotaktumit").css("visibility","hidden");
                $(".tekstumit").css("visibility","hidden");
                $(".garistumit").css("visibility","hidden");        



                // removeClass other
                $(".kotakkelopak").removeClass('animated fadeIn');
                $(".tekskelopak").removeClass('animated fadeIn');
                $(".garisKelopak").removeClass('animated fadeIn');

                $(".kotaklengan").removeClass('animated fadeIn');
                $(".tekslengan").removeClass('animated fadeIn');
                $(".garislengan").removeClass('animated fadeIn');
                
                $(".kotaktorso").removeClass('animated fadeIn');
                $(".tekstorso").removeClass('animated fadeIn');
                $(".garistorso").removeClass('animated fadeIn');

                $(".kotaktelapak").removeClass('animated fadeIn');
                $(".tekstelapak").removeClass('animated fadeIn');
                $(".garistelapak").removeClass('animated fadeIn');

                $(".kotakpipi").removeClass('animated fadeIn');
                $(".tekspipi").removeClass('animated fadeIn');
                $(".garispipi").removeClass('animated fadeIn');

                $(".kotaktumit").removeClass('animated fadeIn');
                $(".tekstumit").removeClass('animated fadeIn');
                $(".garistumit").removeClass('animated fadeIn');
            });
            $(".radiolengan").click(function(){
              // visible
                $(".kotaklengan").css("visibility","visible");
                $(".tekslengan").css("visibility","visible");
                $(".garislengan").css("visibility","visible");


                $(".kotaklengan").addClass('animated fadeIn');
                $(".tekslengan").addClass('animated fadeIn');
                $(".garislengan").addClass('animated fadeIn');

                // hidden other
                $(".kotakkelopak").css("visibility","hidden");
                $(".tekskelopak").css("visibility","hidden");
                $(".gariskelopak").css("visibility","hidden");

                $(".kotakkewanitaan").css("visibility","hidden");
                $(".tekskewanitaan").css("visibility","hidden");
                $(".gariskewanitaan").css("visibility","hidden");

                $(".kotaktorso").css("visibility","hidden");
                $(".tekstorso").css("visibility","hidden");
                $(".garistorso").css("visibility","hidden");

                $(".kotaktelapak").css("visibility","hidden");
                $(".tekstelapak").css("visibility","hidden");
                $(".garistelapak").css("visibility","hidden");

                $(".kotakpipi").css("visibility","hidden");
                $(".tekspipi").css("visibility","hidden");
                $(".garispipi").css("visibility","hidden");

              $(".kotaktumit").css("visibility","hidden");
                $(".tekstumit").css("visibility","hidden");
                $(".garistumit").css("visibility","hidden");        



                // removeClass other
                $(".kotakkelopak").removeClass('animated fadeIn');
                $(".tekskelopak").removeClass('animated fadeIn');
                $(".garisKelopak").removeClass('animated fadeIn');

                $(".kotakkewanitaan").removeClass('animated fadeIn');
                $(".tekskewanitaan").removeClass('animated fadeIn');
                $(".gariskewanitaan").removeClass('animated fadeIn');
                
                $(".kotaktorso").removeClass('animated fadeIn');
                $(".tekstorso").removeClass('animated fadeIn');
                $(".garistorso").removeClass('animated fadeIn');

                $(".kotaktelapak").removeClass('animated fadeIn');
                $(".tekstelapak").removeClass('animated fadeIn');
                $(".garistelapak").removeClass('animated fadeIn');

                $(".kotakpipi").removeClass('animated fadeIn');
                $(".tekspipi").removeClass('animated fadeIn');
                $(".garispipi").removeClass('animated fadeIn');

                $(".kotaktumit").removeClass('animated fadeIn');
                $(".tekstumit").removeClass('animated fadeIn');
                $(".garistumit").removeClass('animated fadeIn');
            });
            $(".radiotelapak").click(function(){
              // visible
                $(".kotaktelapak").css("visibility","visible");
                $(".tekstelapak").css("visibility","visible");
                $(".garistelapak").css("visibility","visible");


                $(".kotaktelapak").addClass('animated fadeIn');
                $(".tekstelapak").addClass('animated fadeIn');
                $(".garistelapak").addClass('animated fadeIn');

                // hidden other
                $(".kotakkelopak").css("visibility","hidden");
                $(".tekskelopak").css("visibility","hidden");
                $(".gariskelopak").css("visibility","hidden");

                $(".kotakkewanitaan").css("visibility","hidden");
                $(".tekskewanitaan").css("visibility","hidden");
                $(".gariskewanitaan").css("visibility","hidden");

                $(".kotaktorso").css("visibility","hidden");
                $(".tekstorso").css("visibility","hidden");
                $(".garistorso").css("visibility","hidden");

                $(".kotaklengan").css("visibility","hidden");
                $(".tekslengan").css("visibility","hidden");
                $(".garislengan").css("visibility","hidden");

                $(".kotakpipi").css("visibility","hidden");
                $(".tekspipi").css("visibility","hidden");
                $(".garispipi").css("visibility","hidden");

              $(".kotaktumit").css("visibility","hidden");
                $(".tekstumit").css("visibility","hidden");
                $(".garistumit").css("visibility","hidden");        



                // removeClass other
                $(".kotakkelopak").removeClass('animated fadeIn');
                $(".tekskelopak").removeClass('animated fadeIn');
                $(".garisKelopak").removeClass('animated fadeIn');

                $(".kotakkewanitaan").removeClass('animated fadeIn');
                $(".tekskewanitaan").removeClass('animated fadeIn');
                $(".gariskewanitaan").removeClass('animated fadeIn');
                
                $(".kotaktorso").removeClass('animated fadeIn');
                $(".tekstorso").removeClass('animated fadeIn');
                $(".garistorso").removeClass('animated fadeIn');

                $(".kotaklengan").removeClass('animated fadeIn');
                $(".tekslengan").removeClass('animated fadeIn');
                $(".garislengan").removeClass('animated fadeIn');

                $(".kotakpipi").removeClass('animated fadeIn');
                $(".tekspipi").removeClass('animated fadeIn');
                $(".garispipi").removeClass('animated fadeIn');

                $(".kotaktumit").removeClass('animated fadeIn');
                $(".tekstumit").removeClass('animated fadeIn');
                $(".garistumit").removeClass('animated fadeIn');
            });
            $(".radiotorso").click(function(){
              // visible
                $(".kotaktorso").css("visibility","visible");
                $(".tekstorso").css("visibility","visible");
                $(".garistorso").css("visibility","visible");


                $(".kotaktorso").addClass('animated fadeIn');
                $(".tekstorso").addClass('animated fadeIn');
                $(".garistorso").addClass('animated fadeIn');

                // hidden other
                $(".kotakkelopak").css("visibility","hidden");
                $(".tekskelopak").css("visibility","hidden");
                $(".gariskelopak").css("visibility","hidden");

                $(".kotakkewanitaan").css("visibility","hidden");
                $(".tekskewanitaan").css("visibility","hidden");
                $(".gariskewanitaan").css("visibility","hidden");

                $(".kotaktelapak").css("visibility","hidden");
                $(".tekstelapak").css("visibility","hidden");
                $(".garistelapak").css("visibility","hidden");

                $(".kotaklengan").css("visibility","hidden");
                $(".tekslengan").css("visibility","hidden");
                $(".garislengan").css("visibility","hidden");

                $(".kotakpipi").css("visibility","hidden");
                $(".tekspipi").css("visibility","hidden");
                $(".garispipi").css("visibility","hidden");

              $(".kotaktumit").css("visibility","hidden");
                $(".tekstumit").css("visibility","hidden");
                $(".garistumit").css("visibility","hidden");        



                // removeClass other
                $(".kotakkelopak").removeClass('animated fadeIn');
                $(".tekskelopak").removeClass('animated fadeIn');
                $(".garisKelopak").removeClass('animated fadeIn');

                $(".kotakkewanitaan").removeClass('animated fadeIn');
                $(".tekskewanitaan").removeClass('animated fadeIn');
                $(".gariskewanitaan").removeClass('animated fadeIn');
                
                $(".kotaktelapak").removeClass('animated fadeIn');
                $(".tekstelapak").removeClass('animated fadeIn');
                $(".garistelapak").removeClass('animated fadeIn');

                $(".kotaklengan").removeClass('animated fadeIn');
                $(".tekslengan").removeClass('animated fadeIn');
                $(".garislengan").removeClass('animated fadeIn');

                $(".kotakpipi").removeClass('animated fadeIn');
                $(".tekspipi").removeClass('animated fadeIn');
                $(".garispipi").removeClass('animated fadeIn');

                $(".kotaktumit").removeClass('animated fadeIn');
                $(".tekstumit").removeClass('animated fadeIn');
                $(".garistumit").removeClass('animated fadeIn');
            });
            $(".radiopipi").click(function(){
              // visible
                $(".kotakpipi").css("visibility","visible");
                $(".tekspipi").css("visibility","visible");
                $(".garispipi").css("visibility","visible");


                $(".kotakpipi").addClass('animated fadeIn');
                $(".tekspipi").addClass('animated fadeIn');
                $(".garispipi").addClass('animated fadeIn');

                // hidden other
                $(".kotakkelopak").css("visibility","hidden");
                $(".tekskelopak").css("visibility","hidden");
                $(".gariskelopak").css("visibility","hidden");

                $(".kotakkewanitaan").css("visibility","hidden");
                $(".tekskewanitaan").css("visibility","hidden");
                $(".gariskewanitaan").css("visibility","hidden");

                $(".kotaktelapak").css("visibility","hidden");
                $(".tekstelapak").css("visibility","hidden");
                $(".garistelapak").css("visibility","hidden");

                $(".kotaklengan").css("visibility","hidden");
                $(".tekslengan").css("visibility","hidden");
                $(".garislengan").css("visibility","hidden");

                $(".kotaktorso").css("visibility","hidden");
                $(".tekstorso").css("visibility","hidden");
                $(".garistorso").css("visibility","hidden");

              $(".kotaktumit").css("visibility","hidden");
                $(".tekstumit").css("visibility","hidden");
                $(".garistumit").css("visibility","hidden");        



                // removeClass other
                $(".kotakkelopak").removeClass('animated fadeIn');
                $(".tekskelopak").removeClass('animated fadeIn');
                $(".garisKelopak").removeClass('animated fadeIn');

                $(".kotakkewanitaan").removeClass('animated fadeIn');
                $(".tekskewanitaan").removeClass('animated fadeIn');
                $(".gariskewanitaan").removeClass('animated fadeIn');
                
                $(".kotaktelapak").removeClass('animated fadeIn');
                $(".tekstelapak").removeClass('animated fadeIn');
                $(".garistelapak").removeClass('animated fadeIn');

                $(".kotaklengan").removeClass('animated fadeIn');
                $(".tekslengan").removeClass('animated fadeIn');
                $(".garislengan").removeClass('animated fadeIn');

                $(".kotaktorso").removeClass('animated fadeIn');
                $(".tekstorso").removeClass('animated fadeIn');
                $(".garistorso").removeClass('animated fadeIn');

                $(".kotaktumit").removeClass('animated fadeIn');
                $(".tekstumit").removeClass('animated fadeIn');
                $(".garistumit").removeClass('animated fadeIn');
            });
            $(".radiotumit").click(function(){
              // visible
                $(".kotaktumit").css("visibility","visible");
                $(".tekstumit").css("visibility","visible");
                $(".garistumit").css("visibility","visible");


                $(".kotaktumit").addClass('animated fadeIn');
                $(".tekstumit").addClass('animated fadeIn');
                $(".garistumit").addClass('animated fadeIn');

                // hidden other
                $(".kotakkelopak").css("visibility","hidden");
                $(".tekskelopak").css("visibility","hidden");
                $(".gariskelopak").css("visibility","hidden");

                $(".kotakkewanitaan").css("visibility","hidden");
                $(".tekskewanitaan").css("visibility","hidden");
                $(".gariskewanitaan").css("visibility","hidden");

                $(".kotaktelapak").css("visibility","hidden");
                $(".tekstelapak").css("visibility","hidden");
                $(".garistelapak").css("visibility","hidden");

                $(".kotaklengan").css("visibility","hidden");
                $(".tekslengan").css("visibility","hidden");
                $(".garislengan").css("visibility","hidden");

                $(".kotaktorso").css("visibility","hidden");
                $(".tekstorso").css("visibility","hidden");
                $(".garistorso").css("visibility","hidden");

              $(".kotakpipi").css("visibility","hidden");
                $(".tekspipi").css("visibility","hidden");
                $(".garispipi").css("visibility","hidden");       



                // removeClass other
                $(".kotakkelopak").removeClass('animated fadeIn');
                $(".tekskelopak").removeClass('animated fadeIn');
                $(".garisKelopak").removeClass('animated fadeIn');

                $(".kotakkewanitaan").removeClass('animated fadeIn');
                $(".tekskewanitaan").removeClass('animated fadeIn');
                $(".gariskewanitaan").removeClass('animated fadeIn');
                
                $(".kotaktelapak").removeClass('animated fadeIn');
                $(".tekstelapak").removeClass('animated fadeIn');
                $(".garistelapak").removeClass('animated fadeIn');

                $(".kotaklengan").removeClass('animated fadeIn');
                $(".tekslengan").removeClass('animated fadeIn');
                $(".garislengan").removeClass('animated fadeIn');

                $(".kotaktorso").removeClass('animated fadeIn');
                $(".tekstorso").removeClass('animated fadeIn');
                $(".garistorso").removeClass('animated fadeIn');

                $(".kotakpipi").removeClass('animated fadeIn');
                $(".tekspipi").removeClass('animated fadeIn');
                $(".garispipi").removeClass('animated fadeIn');
            });
  }
  function kok_bisa(){
    $('#petir').addClass('animated fadeInUp');
    // $('.tlt').addClass('animated fadeInUp');
    $('.tlt').textFx({
          type: 'fadeIn',
          iChar: 100,
          iAnim: 1000
      });
    // $(".tlt").addClass(".AnimatedTitle-letter");
  }
  function kenali_tanda_tanda(){
    $('.nah_kenalin').textFx({
          type: 'fadeIn',
          iChar: 100,
          iAnim: 1000
      });
    $(".btn-ruam").click(function(){
      $("#bungagbr").attr("src","img/bunga-ruam.png");
      $(".kata-standard").css("margin-left","500px");
      $("#kata").attr("src","img/kata-ruam.png");

    });
    $(".btn-gatal").click(function(){
      $("#bungagbr").attr("src","img/bunga-gatal.png");
      $(".kata-standard").css("margin-left","500px");
      $("#kata").attr("src","img/kata_gatal.png");
    });
    $(".btn-merah").click(function(){
      $("#bungagbr").attr("src","img/bunga-merah.png");
      $("#kata").attr("src","img/kata-merah.png");
      $(".kata-standard").css("margin-left","0px");
    });
    $('.btn-bunga').addClass('animated fadeInLeft');
    $('#bungagbr').addClass('animated fadeInUp');
    $('.kata-standard').addClass('animated fadeInUp');
  }

  function usp_product(){
    $(".pad").addClass("animated fadeInRight");
    $(".pointer_1").addClass("animated fadeIn");
    $(".pointer_2").addClass("animated fadeIn");
    $(".pointer_3").addClass("animated fadeIn");
    $(".bebas_lembap").addClass("animated fadeInLeft");
    $(".laurier_healtly").addClass("animated fadeInLeft");
    
    $(".pointer_1").click(function(){
      $("#img_pointer1").attr("src","img/pointer.png");
      
      $(".gambaran_atas").css("visibility","visible");
      
      $(".gambaran_atas").addClass("animated fadeIn");
      $(".pointer_1").addClass("animated fadeIn");
      $(".pointer_2").addClass("animated fadeIn");
      $(".pointer_3").addClass("animated fadeIn");
      // disable
      $("#img_pointer2").attr("src","img/pointer_1.png");
      $("#img_pointer3").attr("src","img/pointer_1.png");

      // remove class
      $(".gambaran_bawah").removeClass('animated fadeIn');
      $(".gambaran_tengah").removeClass('animated fadeIn');

      // hidden
      $(".gambaran_tengah").css("visibility","hidden");
      $(".gambaran_bawah").css("visibility","hidden");
    });
    $(".pointer_2").click(function(){
      $("#img_pointer2").attr("src","img/pointer.png");
      $(".gambaran_tengah").css("visibility","visible");

      $(".gambaran_tengah").addClass("animated fadeIn");
      $(".pointer_2").addClass("animated fadeIn");

      // disable
      $("#img_pointer1").attr("src","img/pointer_1.png");
      $("#img_pointer3").attr("src","img/pointer_1.png");

      // remove class
      $(".gambaran_bawah").removeClass('animated fadeIn');
      $(".gambaran_atas").removeClass('animated fadeIn');

      // hidden
      $(".gambaran_atas").css("visibility","hidden");
      $(".gambaran_bawah").css("visibility","hidden");
    });
    $(".pointer_3").click(function(){
      $("#img_pointer3").attr("src","img/pointer.png");
      $(".gambaran_bawah").css("visibility","visible");

      $(".gambaran_bawah").addClass("animated fadeIn");
      $(".pointer_3").addClass("animated fadeIn");


      // disable
      $("#img_pointer1").attr("src","img/pointer_1.png");
      $("#img_pointer2").attr("src","img/pointer_1.png");

      // removeClass
      $(".gambaran_atas").removeClass('animated fadeIn');
      $(".gambaran_tengah").removeClass('animated fadeIn');

      // hidden
      $(".gambaran_atas").css("visibility","hidden");
      $(".gambaran_tengah").css("visibility","hidden");
    });
  }

  function solusi(){
    $('.hurufsolusi').textFx({
          type: 'fadeIn',
          iChar: 100,
          iAnim: 1000
      });
    $('.hurufsolusi1').textFx({
          type: 'fadeIn',
          iChar: 100,
          iAnim: 1000
      });
    $('.panah').addClass('animated bounceInDown delay-10s');
  }
  function kegiatan(){
    $("#gambar1").click(function(){
      $('.emot').toggleClass("jalan");
    });

    $("#gambar2").click(function(){
      $('.emot').toggleClass("jalan2");
    });

    $("#gambar3").click(function(){
      $('.emot').toggleClass("jalan3");
    });
  }
  function iritation_statistic(){
   
    $('.hurufiritasi').textFx({
          type: 'fadeIn',
          iChar: 50,
          iAnim: 10
    });
    $('.hurufiritasi1').textFx({
          type: 'fadeIn',
          iChar: 50,
          iAnim: 10
    });
    // $("#g2").hide();
    $('#g8').addClass('animated fadeInDown');
    $('#g2').addClass('animated fadeInDown');
    // $(".iritation-statistic").hide();
  }
  
}(window.jQuery);


