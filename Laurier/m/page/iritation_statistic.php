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
				<h1 class="hurufiritasi">Tahukah kamu, bahwa faktanya 8 dari 10 cewek </h1>
				<h1 class="hurufiritasi1">berpotensi mengalami iritasi di area kewanitaan </h1>
				<h1 class="hurufiritasi1">mereka saat lagi menstruasi?</h1>
			</div>
			<div class="iritation-statistic" >
				<img  src="img/wanita1-5.png" id="g8" width="80%">
				<img  src="img/wanita6-8.png" id="g2" width="50%" style="margin-left: -5px" >
				<img  src="img/wanita9-10.png" id="g2" width="36%" style="margin-left: -5px" >
			</div>
		</div>
		<div class="col-md-1  menu-lp" >
			<div  class="row" style="margin-left: -80px;color: #59595b;font-family: 'myWebFont';">
				<label style="visibility: hidden;" class="txt-story">
					Full Story	
				</label>
				<a href="index.php" style="float: right;margin-top: -53px;margin-right: 35px"><img class="btn-story" width="80px" src="img/btn-story.png"></a>
				
			</div>
			<div  class="row" style="margin-left: -80px;color: #59595b;font-family: 'myWebFont';">
				<label style="visibility: hidden;" class="txt-meter">
					Irritation<br>
					Meter Test	
				</label>
				<a href="test/iritasiMeter.php" style="float: right;margin-top: -40px;margin-right: 35px"><img class="btn-meter" src="img/btn-meter.png"></a>
				
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