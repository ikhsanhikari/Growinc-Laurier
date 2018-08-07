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

	<!-- texFX -->
	<script type="text/javascript" src="js/jquery.transit.js"></script> 
	<script type="text/javascript" src="jquery.textFx.js"></script>

	
</head>
<body>
	
	<div>
		<img src="img/Logo.png" style="position: fixed;">
		<!-- <h1 style="color: black; position: fixed;">Logo</h1> -->
	</div>
	<div class="main">
		<section class="page one" id="tesOne">
			<?php include("page/landing_page.php") ?>
		</section>
		
		<section class="page two" id="two" >
			<?php include("page/iritation_statistic.php") ?>
		</section>
		
		<section class="page three" >
			<?php include("page/kok_bisa.php") ?>
		</section>


		<!-- four -->
		<section class="page four" >
			<?php include("page/penjabaran_tubuh_wanita.php") ?>
		</section>


		<!-- five -->

		<section class="page five" >
			<?php include("page/hubungan_menstruasi_iritasi.php") ?>
		</section>

		<!-- six -->

		<section class="page six" >
			<?php include("page/kegiatan.php") ?>
		</section>

		<!-- seven -->

		<section class="page seven" >
			<?php include("page/kenali_tanda_tanda.php") ?>
		</section>

		<!-- eight -->

		<section class="page eight" >
			<?php include("page/solusi.php") ?>
		</section>

		<!-- nine -->

		<section class="page nine" >
			<?php include("page/usp_product.php") ?>
		</section>				
		
		<!-- nine -->

		<section class="page ten" >
			<?php include("page/mengajak_test.php") ?>
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