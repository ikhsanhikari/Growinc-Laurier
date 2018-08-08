<?php 
 	if(substr(getOS(), 0,6)=="Mac OS"){
 ?>
 <style type="text/css">
 	.iritation-statistic{
 		width: 100%; 
		margin-left: 5%; 
		margin-top: 5%;
 	}
 	.hurufiritasi{
		font-family: "MyWebFont";
		color: rgb(89,89,91);
		font-size: 30px;
		margin-top: 10%;
		margin-left: 4%;
		/*text-align: center;*/
	}

	.hurufiritasi1{
		font-family: "MyWebFont";
		color: rgb(89,89,91);
		font-size: 30px;
		margin-top: -1%;
		margin-left: 1%;
		/*text-align: center;*/
	}
 </style>
<?php } ?>

<div class="row">
		<div class="col-md-11">
			<div>
				<h1 class="hurufiritasi">Tahukah kamu, bahwa faktanya 8 dari 10 cewek berpotensi</h1>
				<h1 class="hurufiritasi1">mengalami iritasi di area kewanitaan mereka saat lagi menstruasi?</h1>
			</div>
			<div class="iritation-statistic" >
				<img  src="img/8girl.png" id="g8">
				<img  src="img/2girl.png" id="g2" style="margin-left: -40px" >
			</div>
		</div>
		<div class="col-md-1">
			<div class="row menu_kok_bisa" >
				<a href="index.php"><img id="btn-story" src="img/btn-story.png" class="responsive"></a>
			</div>
			<br>
			<div class="row">
				<a href="test/iritasiMeter.php"><img id="btn-meter" src="img/btn-meter.png" class="responsive"></a>
			</div>
			<br>
			<div class="row">
				<a href="http://menstruasi.com"><img id="btn-ask" src="img/btn-ask.png" class="responsive"></a>
			</div>
			<br>
			<div class="row">
				<a data-toggle="modal" data-target="#myModal" ><img id="btn-try" src="img/btn-try.png"></a>	
			</div>
		</div>
		
	</div>