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
				<!-- <img class="tangan-wanita" src="img/tangan-wanita.png" width="100%"> -->
			
			
		</div>
		<div class="col-md-1  menu-lp">
			<div  class="row">
				<a href="test/iritasiMeter.php"><img id="btn-meter" src="img/btn-meter.png"></a>
				<!-- <label style="color: #59595b;font-family: 'myWebFont'">
					Irritation<br>
					Meter Test	
				</label> -->
			</div>
			<br>
			<div class="row">
				<a href="http://menstruasi.com"><img id="btn-ask" src="img/btn-ask.png"></a>	
				<!-- <label style="color: #59595b;font-family: 'myWebFont'">
					Ask <br>	
					Dr. Laurier	
				</label> -->
			</div>
			<br>
			<div class="row">
				<a data-toggle="modal" data-target="#myModal" ><img id="btn-try" src="img/btn-try.png"></a>
				<!-- <label style="color: #59595b;font-family: 'myWebFont'">
					Try <br>	
					Now!	
				</label> -->	
			</div>
		</div>
</div>

