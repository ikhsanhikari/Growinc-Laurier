<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title >Iritasi Meter</title>
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
  
  	<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="../font/Just_tell_me_what_regular.otf" type='text/css'>
</head>
<body style="overflow: hidden;">
	<div class="row">
		<div class="col-md-10">
			<div class="nomor1">
				<img src="img/nomor7.png">
			</div>
			<div>
				<label class="kata2">Undies favorit kamu saat tidur...</label>
			</div>
			<div class="Putih">
				<a href="HasilMeter.php"><img src="img/kolor_putih.png" class="responsive" ></a>
			</div>
			<div class="seneng">
				<a href="HasilMeter.php"><img src="img/kolor_merah.png" class="responsive" id="tisu"></a>
			</div>
			<div >
				<p class="kataPutih">Bahannya</p>
				<p class="kataPutih2">Katun</p>
				
			</div>
			<div >
				<p class="kataMerah">Bahannya</p>
				<p class="kataMerah2">Polyster</p>
			</div>
			<div class="bawah4">
				<img src="img/meter2.png">
			</div>
		</div>
		
		<div class="col-md-2">
			<ol type="none" style="list-style: none; margin-top: 80%; margin-left: 15%">
				<li><img src="img/buku.png" class="responsive"></li>
				<li><img src="img/btn_dokterLaurier.png" class="responsive"></li>
				<li><img src="img/btn_try.png" class="responsive"></li>
			</ol>
		</div>
	</div>
	

	<script type="text/javascript">
	$(function () {
		$('.tlt').textillate(
			{ in: 
				{ 
				effect: 'rollIn' ,
				delayScale: -0.3,
				// reverse: true,
				// shuffle: true,
			} 
		});

		$('.tlt2').textillate(
			{ in: 
				{ 
				effect: 'rollIn' ,
				delayScale: 0.6,
				// reverse: true,
				// shuffle: true,
			} 
		});
	});

	</script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="assets/jquery.fittext.js"></script>
	<script src="assets/jquery.lettering.js"></script>
	<script src="http://yandex.st/highlightjs/7.3/highlight.min.js"></script>
	<script src="jquery.textillate.js"></script>
</body>
</html>