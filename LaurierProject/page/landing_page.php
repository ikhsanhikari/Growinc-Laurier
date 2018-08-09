<?php 
	include("os.php");
 ?>	
 <?php 
 	if(substr(getOS(), 0,6)=="Mac OS"){
 ?>

 	<style type="text/css">
 		.wanita{
			margin-top: -260px;
			margin-right: -90px;
			float: right;
			z-index: 1;
			width: 70%;
			animation-delay: 0.6s;
		}

		#dont-get{
			width: 80%
		}
		.dont-get-iritated{
			animation-delay: 1.5s;
			/*background-color: blue;*/
			width: 700px;
			margin-left: 150px;
			/*margin-top: 50px;*/
			z-index: 0;
			width: 50%;
		}
		.kata_merasa{
			animation-delay: 1.9s;
			margin-top: -300px;
			width: 30%;
			/*height: 300px;*/
			/*background-color: green;*/
			margin-right: 650px;
			float: right;
		}
		.tangan-wanita{
			/*margin-left: 400px;*/
			animation-delay: 1s;
			z-index: 100;
			/*background-color: red;*/
			width: 200px;
			height: 200px;
			margin-left: 760px;
			margin-top: -130px;
		}
		.menu-lp{
			margin-top: 200px;
			/*margin-left: 50px*/
		}
		.scroll{
			float: left;
			margin-top: -110px;
			margin-left: 270px;
			animation-delay: 2;
			/*background-color: red;*/
		}
 	</style>
 <?php 		
 	}

  ?>
<div class="row">
		<div class="col-md-11">
			<div class="dont-get-iritated">
				<img src="img/popUp_dontGet.png" id="dont-get" >
			</div>
			<div class="wanita">
				<img src="img/cewe3.png" id="wanita-ld" width="90%" >
			</div>
			<div class="kata_merasa">
				<img src="img/kata_merasa.png" class="responsive">
			</div>	
			<div class="scroll">
				<a  data-index="1"><img src="img/scroll.png"></a>
			</div>
				<img class="tangan-wanita" src="img/tangan-wanita.png" width="100%">
			
			
		</div>
		<div class="col-md-1  menu-lp" >
			<div  class="row" style="margin-left: -80px;color: #59595b;font-family: 'myWebFont';">
				<label style="visibility: hidden;" class="txt-meter">
					Irritation<br>
					Meter Test	
				</label>
				<a href="test/iritasiMeter.php" style="float: right;margin-top: -53px;margin-right: 35px"><img class="btn-meter" src="img/btn-meter.png"></a>
				
			</div>
			<br>
			<div class="row">
				<label style="visibility: hidden;margin-left: -80px;color: #59595b;font-family: 'myWebFont';" class="txt-ask">
					Ask <br>	
					Dr. Laurier	
				</label>
				<a style="float: right;margin-top: -50px;margin-right: 35px" href="https://menstruasi.com/dr-laurier" target="_blank" target="_blank"><img class="btn-ask" src="img/btn-ask.png"></a>	
				
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

