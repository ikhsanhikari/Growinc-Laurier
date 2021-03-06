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

	<!-- texFX -->
	<script type="text/javascript" src="js/jquery.transit.js"></script> 
	<script type="text/javascript" src="jquery.textFx.js"></script>

	
</head>
<body>
	<?php include("page/modal_try_now.php") ?>
	<?php include("page/modal_buy_now.php") ?>
	<?php include("page/modal_form.php") ?>
	<?php include("page/modal_terimakasih.php") ?>
	<div>
		<img src="img/Logo.png" style="position: fixed;z-index: 100">
		<!-- <h1 style="color: black; position: fixed;">Logo</h1> -->
	</div>
	<div class="main">
		<section class="page one" id="tesOne" style="background-image: url('img/landing-page.png');">
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
	<?php
if(isset($_GET['message'])){
	if($_GET['message']=="success"){
		?>
		<script type="text/javascript">
			document.getelementbyid('modal_tank_you').style.display = "block";
			$('#modal_tank_you').modal('toggle');
    		$('#modal_tank_you').modal('show');
		</script>
		<?php
	}
}
	?>
</body>
</html>