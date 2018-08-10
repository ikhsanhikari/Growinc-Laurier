<?php

$is_mobile =FALSE;

  // if no user agent is set
  if (!isset($_SERVER['HTTP_USER_AGENT'])) {
    $is_mobile = FALSE;
  } else {
    /**
     *  check http://detectmobilebrowsers.com for updates
     */
    $is_mobile = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4))) ? TRUE : FALSE;
  }


if($is_mobile == TRUE){
	?>
	<script>
    window.location = 'm/index.php';
	</script>
	<?php
}
?>

<!doctype html>
<html lang="en">
<head>
		<title>Landing Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="The plugin will detect your mouse wheel and swipe gestures to determine which way the page should scroll." />
	<meta name="keywords" content="scroller, jquery one page scroll, onepagescroll, animated scrolling" />
	<meta name="author" content="Author for Tutorial-webdesign.com" />

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="js/jquery.onepage-scroll.js"></script>
	<link rel="stylesheet" type="text/css" href="css/onepage-scroll.css" />
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

	
	<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>

	<link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
  	<link href="assets/animate.css" rel="stylesheet">
  	<link href="assets/style.css" rel="stylesheet">
  	<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>

  	<link rel="stylesheet" type="text/css" href="font/Just_tell_me_what_regular.otf">
  	<link rel="stylesheet" type="text/css" href="font/Just_tell_me_what_regular_Italic.otf">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/w3.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- texFX -->
	<script type="text/javascript" src="js/jquery.transit.js"></script> 
	<script type="text/javascript" src="jquery.textFx.js"></script>

	
</head>
<body>
	<?php include("../page/modal_try_now.php") ?>
	<?php include("../page/modal_buy_now.php") ?>
	<?php include("../page/modal_form.php") ?>
	<?php include("../page/modal_terimakasih.php") ?>
	<div>
		<!-- <img src="img/Logo.png" style="position: fixed;"> -->
		<!-- <h1 style="color: black; position: fixed;">Logo</h1> -->
	</div>
	<div class="main">
		<section class="page one" > 
			<div class="row">
		<div class="col-md-11" id="container">
			<div class="nomor1">
				<img src="img/nomor1.png" id="nomor1">
			</div>
			
			<div class="col-md-6">
				<div class="hanger">
					<img src="img/hanger.png" class="responsive" id="hanger" onclick="hitung_iritasi(1,20)">
				</div>
				<div class="tisu">
					<img src="img/tisu.png" class="responsive" id="tisu" onclick="hitung_iritasi(1,0)">
				</div>
			</div>
			<div class="col-md-2">
				<div class="bawah">
					<img src="img/meter.png">
				</div>
			</div>
			
		</div>
		
		<div class="col-md-1  menu-lp" >
			<div  class="row" style="margin-left: -80px;color: #59595b;font-family: 'myWebFont';">
				<label style="visibility: hidden;" class="txt-story">
					Full Story	
				</label>
				<a href="../index.php" style="float: right;margin-top: -53px;margin-right: 35px"><img class="btn-story" width="80px" src="img/btn-story.png"></a>
				
			</div>
			<br>
			<div class="row">
				<label style="visibility: hidden;margin-left: -80px;color: #59595b;font-family: 'myWebFont';" class="txt-ask">
					Ask <br>	
					Dr. Laurier	
				</label>
				<a style="float: right;margin-top: -50px;margin-right: 35px" href="https://menstruasi.com/dr-laurier" target="_blank"><img class="btn-ask" src="img/btn-ask.png"></a>	
				
			</div>
			<br>
			<div class="row">
				<label style="visibility: hidden;margin-left: -80px;color: #59595b;font-family: 'myWebFont';" class="txt-try">
					Try <br>	
					Now!	
				</label>
				<a data-toggle="modal" style="float: right;margin-top: -50px;margin-right: 35px" data-target="#myModal" ><img class="btn-try" src="img/btn-try.png"></a>
					
			</div>
		</div>
	</div>
		</section>
		
		<section class="page two" id="two" >
			<div>
		<h1 class="huruf tlt">#DontGetIrritated to Care,#DontDontGetIrritated to Share!</h1>
		<h1 class="huruf2 tlt">Sharing is caring,Girls! pilih dan share faktanya ke orang terdekatmu</h1>
		<h1 class="huruf2 tlt">agar mereka lebih peduli kesehatan kulit selama mensturasi</h1>
	</div>

	<div class="slider">
	  <img src="img/bingkai.png" style="width: 65%; margin-top: -1%;">
	  <img class="mySlides" src="img/sub_iritation.png" style="width: 55%; margin-top: -37%; margin-left: 5%;">
	  <img class="mySlides" src="img/sub_iritation2.png" style="width: 55%; margin-top: -37%; margin-left: 5%;">
	  <img class="mySlides" src="img/sub_iritation3.png" style="width: 55%; margin-top: -37%; margin-left: 5%;">
	  <img class="mySlides" src="img/sub_iritation4.png" style="width: 55%; margin-top: -37%; margin-left: 5%; ">

	  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
	  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
	</div>
	
	<div>
		<a href="http://www.facebook.com/sharer.php?s=100&p[title]=prettySocial%20-%20custom%20social%20share%20buttons.&p[summary]=Custom%20share%20buttons%20for%20Pinterest%2C%20Twitter%2C%20Facebook%20and%20Google%20Plus.&p[url]=http%3A%2F%2F36.72.85.69/Laurier/index.php"><img src="img/btnShare.png" style="margin-left: 38%; margin-top: 3%;"></a>
	</div>



	<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}

		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  if (n > x.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
		     x[i].style.display = "none";  
		  }
		  x[slideIndex-1].style.display = "block";  
		}
	</script>
	<script type="text/javascript">
		$('.btn-meter').hover(function(){
			$('.btn-meter').css("width","80px");
			$('.btn-meter').css("cursor","pointer");
			$('.txt-meter').css("visibility","visible");
		},function(){
			$('.btn-meter').css("width","70px");
			$('.btn-meter').css("cursor","pointer");
			$('.txt-meter').css("visibility","hidden");
		});
		$('.btn-ask').hover(function(){
			$('.btn-ask').css("width","80px");
			$('.btn-ask').css("cursor","pointer");
			$('.txt-ask').css("visibility","visible");
		},function(){
			$('.btn-ask').css("width","70px");
			$('.btn-ask').css("cursor","pointer");
			$('.txt-ask').css("visibility","hidden");
		});
		$('.btn-story').hover(function(){
			$('.btn-story').css("width","80px");
			$('.btn-story').css("cursor","pointer");
			$('.txt-story').css("visibility","visible");
		},function(){
			$('.btn-story').css("width","70px");
			$('.btn-story').css("cursor","pointer");
			$('.txt-story').css("visibility","hidden");
		});
		$('.btn-try').hover(function(){
			$('.btn-try').css("width","80px");
			$('.btn-try').css("cursor","pointer");
			$('.txt-try').css("visibility","visible");
		},function(){
			$('.btn-try').css("width","70px");
			$('.btn-try').css("cursor","pointer");
			$('.txt-try').css("visibility","hidden");
		});
	</script>
		</section>
		
		

		
	</div>


	<script type="text/javascript">
	$(".main").onepage_scroll({
		sectionContainer: "section",
		easing: "cubic-bezier(0.180, 0.900, 0.410, 1.210)"
	});
	
	</script>
	<script type="text/javascript">
		AOS.init({
			two: true,
  			one: false,
  			two: 'animated',
		});

	</script>
	<script type="text/javascript">
		$('.wanita').addClass('animated fadeInUp');
		$('.tangan-wanita').addClass('animated fadeInUp');
		$('.dont-get-iritated').addClass('animated slideInLeft');
		$('.kata_merasa').addClass('animated zoomInUp');
	</script>
</body>
</html>