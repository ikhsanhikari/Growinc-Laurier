<?php 
 	if(substr(getOS(), 0,6)=="Mac OS"){
 ?>
 	<style type="text/css">
 		.btn-bunga{
			margin-left: 35px;
			margin-top: 200px;
		}
		.bunga{
			float: right;
			margin-right: 300px;
			margin-top: -505px;
			z-index: 0;
			position: relative;
		    /* Safari 4.0 - 8.0 */
		    -webkit-animation-name: bungaanime;
		    -webkit-animation-duration: 3s;
		    -webkit-animation-timing-function: linear;
		    -webkit-animation-delay: 1s;
		    -webkit-animation-iteration-count: infinite;
		    -webkit-animation-direction: alternate;
		    /* Standard syntax */
		    animation-name: bungaanime;
		    animation-duration: 3s;
		    animation-timing-function: linear;
		    animation-delay: 1s;
		    animation-iteration-count: infinite;
		    animation-direction: alternate;
		}
 	</style>
<?php } ?>

<div class="row">
		<div class="col-md-2">
			<div class=" btn-bunga">
				<div class="btn-merah">
					<img class="btn-kenali" src="img/btn-merah.png">	
				</div>
				<div class="btn-gatal">
					<img class="btn-kenali" src="img/btn-gatal.png">
				</div>
				<div class="btn-ruam">
					<img class="btn-kenali" src="img/btn-ruam.png">
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="nah_kenalin">
				Nah, kenali dulu yuk tanda - tandanya!
			</div>
			<div class="kata-standard">
				<img  id="kata" src="img/kata-standard.png">
			</div>
			<div class="smart-obj">
				<img src="img/bunga-smart-object.png">
			</div>
			<div class="bunga">
				<img id="bungagbr" src="img/bunga-standard.png">
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