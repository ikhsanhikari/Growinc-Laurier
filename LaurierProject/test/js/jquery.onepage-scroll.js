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
	
  $.fn.test = function(){
    // alert('yyyyyyyyyyy')   
    // $('.tlt').css("color","red");
  //   $(function () {
  //   $('.tlt').textillate(
  //     { in: 
  //       { effect: 'rollIn' ,
  //       // reverse: true,
  //       // shuffle: true,
  //     } 
  //   });
    
  //   $('#judul').textillate({ 
  //     in: { 
  //       effect: 'fadeIn',
  //       delayScale: 10.5,
  //       delay: 50 
  //     } 
  //   });
  // });
  }

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
          // alert('----------')
          // if(index==1){
          //   alert('one')
          //   // $(this).test();
          //   // $('#1').css("visibility", "hidden");
          // }else if(index==2){
          //   alert('two')
          // }else if(index==3){
          //   alert('trhee')
          // }

        } else {
          el.moveUp()
          // alert('up')
          $(this).test();
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
        // if (i==0) {
         // paginationList += "<li id='1' ><a data-index='"+(i+1)+"' href='#" + (i+1) + "'></li>"
       // }
       // else if(i==1){
       //   paginationList += "<li id='2' style='margin-right: 30px;'><a data-index='"+(i+1)+"' href='#" + (i+1) + "'><img src='img/wanita.jpg' style='width:60px;' ></a></li><br/><br/>"
       // }
       // else if (i==2) {
       //   paginationList += "<li id='3' style='margin-right: 30px;'><a data-index='"+(i+1)+"' href='#" + (i+1) + "'><img src='img/box.jpg' style='width:60px;'></a></li><br/><br/>"
       // }else if (i==3) {
       //   paginationList += "<li id='4' style='margin-right: 30px;'><a data-index='"+(i+1)+"' href='#" + (i+1) + "'><img src='img/buku.jpg' style='width:60px;'></a></li><br/><br/>"
       // }
        // paginationList += "<li style='margin-right:90px'><a data-index='"+(i+1)+"' href='#" + (i+1) + "'></a></li>"
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
  
}(window.jQuery);

// Buat Variable score iritasi

var totalscore = 0;
function hitung_iritasi(index,score){
  totalscore+= score;
  if (index == 1) {
    $("#container").html("<div class='nomor2'>"+
    "<img src='img/nomor2.png' id='nomor2'>"+
      "</div>"+
      "<div class='col-md-6'>"+
        "<div class='indorr'>"+
          "<img src='img/indorr.png' class='responsive' onclick='hitung_iritasi(2,0)'>"+
        "</div>"+
        "<div class='outdoor'>"+
          "<img src='img/outdoor.png' class='responsive' onclick='hitung_iritasi(2,10)'>"+
        "</div>"+
      "</div>"+
      "<div class='col-md-2'>"+
        "<div class='bawah'>"+
          "<img src='img/meter.png'>"+
        "</div>"+
      "</div>");
  }else if (index == 2) {
    $("#container").html("<div class='nomor2'>"+
    "<img src='img/nomor3.png' id='nomor2'>"+
      "</div>"+
      "<div class='col-md-6'>"+
        "<div class='jeans'>"+
          "<img src='img/jeans_cewek.png' class='responsive' onclick='hitung_iritasi(3,20)'>"+
        "</div>"+
        "<div class='jeans2'>"+
          "<img src='img/jeans_cewek2.png' class='responsive' onclick='hitung_iritasi(3,0)'>"+
        "</div>"+
      "</div>"+
      "<div class='col-md-2'>"+
        "<div class='bawah'>"+
          "<img src='img/meter.png'>"+
        "</div>"+
      "</div>");
  }else if (index == 3) {
    $("#container").html("<div class='nomor4'>"+
    "<img src='img/nomor4.png' id='nomor2'>"+
      "</div>"+
      "<div class='col-md-6'>"+
        "<div class='kendaraan'>"+
          "<img src='img/kendaraan.png' class='responsive' onclick='hitung_iritasi(4,10)'>"+
        "</div>"+
        "<div class='kendaraan2'>"+
          "<img src='img/mobil.png' class='responsive' onclick='hitung_iritasi(4,0)'>"+
        "</div>"+
      "</div>"+
      "<div class='col-md-2'>"+
        "<div class='bawah'>"+
          "<img src='img/meter.png'>"+
        "</div>"+
      "</div>");
  }else if (index == 4) {
    $("#container").html("<div class='nomor5'>"+
    "<img src='img/nomor5.png' id='nomor2'>"+
      "</div>"+
      "<div class='col-md-6'>"+
        "<div class='matahari'>"+
          "<img src='img/matahari.png' class='responsive' onclick='hitung_iritasi(5,10)'>"+
        "</div>"+
        "<div class='ac'>"+
          "<img src='img/Ac.png' class='responsive' onclick='hitung_iritasi(5,0)'>"+
        "</div>"+
      "</div>"+
      "<div class='col-md-2'>"+
        "<div class='bawah'>"+
          "<img src='img/meter.png'>"+
        "</div>"+
      "</div>");
  }else if (index == 5) {
    $("#container").html("<div class='nomor1'>"+
    "<img src='img/nomor6.png' id='nomor2'>"+
      "</div>"+
      "<div class='col-md-6'>"+
        "<div class='hanger'>"+
          "<img src='img/cewek_sedih.png' class='responsive' id='hanger' onclick='hitung_iritasi(6,20)'>"+
        "</div>"+
        "<div class='seneng'>"+
          "<img src='img/cewek_seneng.png' class='responsive' id='tisu' onclick='hitung_iritasi(6,0)'>"+
        "</div>"+
      "</div>"+
      "<div class='col-md-2'>"+
        "<div class='bawah'>"+
          "<img src='img/meter.png'>"+
        "</div>"+
      "</div>");
  }else if (index == 6) {
    $("#container").html("<div class='nomor7'>"+
    "<img src='img/nomor7.png' id='nomor2'>"+
      "</div>"+
      "<div class='col-md-6'>"+
        "<div class='Putih'>"+
          "<img src='img/kolor_putih.png' class='responsive' id='hanger' onclick='hitung_iritasi(7,0)'>"+
        "</div>"+
        "<div class='seneng'>"+
          "<img src='img/kolor_merah.png' class='responsive' id='tisu' onclick='hitung_iritasi(7,10)'>"+
        "</div>"+
      "</div>"+
      "<div class='col-md-2'>"+
        "<div class='bawah'>"+
          "<img src='img/meter.png'>"+
        "</div>"+
      "</div>");
  }
  // else if (index == 7 ) {
  //   $("#container").html("<div class='hasil'>"+
  //       "<img src='img/50%.png'>"+
  //     "</div>"+
  //     "<div>"+
  //       "<label class='girls'>Kamu hampir aman nih, Girls!</label>"+
  //     "</div>"+
  //     "<div>"+
  //       "<label class='yuk'>Yuk rawat area kewanitaanmu lebih baik. Jaga agar tetap kering dengan memakai tisu setelah buang air</label>"+
  //       "<label class='kurangi'>dan kurangi pemakaian celana ketat terutama jika kamu sering melakukan aktivitas berkeringat.</label>"+
  //       "<label class='iritasi'>Untuk mencegah iritasi, jangan lupa pakai laurier Healty Skin yang lapisan lembutnya aman untuk kulit!</label>"+
  //     "</div>"+
  //     "<div class='coba'>"+
  //       "<a href='IritasiMeter.html'><img src='img/coba.png'></a>"+
  //     "</div>");
  // }
  else if (index == 7) {
    if (totalscore < 50 ) {
      $("#container").html("<div class='hasil'>"+
          "<img src='img/20.png'>"+
          "</div>"+
          "<div class='coba'>"+
          "<a href='IritasiMeter.php'><img src='img/coba.png'></a>"+
          "</div>");
    } else if (totalscore >=50 && totalscore < 80) {
      $("#container").html("<div class='hasil50'>"+
          "<img src='img/50.png'>"+
          "</div>"+
          "<div class='coba'>"+
          "<a href='IritasiMeter.php'><img src='img/coba.png'></a>"+
          "</div>");
    }else if (totalscore >= 80) {
      $("#container").html("<div class='hasil50'>"+
          "<img src='img/80.png'>"+
          "</div>"+
          "<div class='coba'>"+
          "<a href='IritasiMeter.php'><img src='img/coba.png'></a>"+
          "</div>");
    }
  }
}
