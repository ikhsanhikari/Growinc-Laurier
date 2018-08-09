<?php 
 	if(substr(getOS(), 0,6)=="Mac OS"){
 ?>
 	<style type="text/css">
 		.bebas_lembap{
			margin-left: 70px;
			margin-top: 100px;
			font-family: 'MyWebFont';
			font-size: 37.39px;
			color: rgb(96,118,156);
		}
		.laurier_healtly{
			margin-left: 70px;
			font-family: 'MyWebFont';
			font-size: 23.73px;
			color: #58595b;
		}
		.produk{
			margin-left: 56px;
			margin-top: 100px;
		}
		.pad{
			margin-top: 30px;
			margin-left: 180px;
		}
		.pointer_1{
			margin-left: 520px;
			margin-top: -426px;
			animation-delay: 1s;
			/*background-color: red;*/
		}
		.pointer_2{
			margin-left: 410px;
			margin-top: 47px;
			animation-delay: 1s;
			/*background-color: red;*/
		}
		.pointer_3{
			margin-left: 420px;
			margin-top: 58px;
			animation-delay: 1s;
			/*background-color: red;*/
		}
		.gambaran_atas{
			margin-top: -550px;
			visibility: hidden;
			margin-left: -11px;
			/*animation-delay: 0.8s;*/
			/*background-color: red;*/
		}
		.gambaran_tengah{
			margin-top: -390px;
			margin-left: -50px;
			visibility: hidden;
			/*background-color: red;*/
		}
		.gambaran_bawah{
			margin-top: -180px;
			margin-left: -45px;
			visibility: hidden;
			/*background-color: red;*/

		}
		.product_detail{
			margin-left: -485px;
			margin-top: 175px;
		}
		#p_detail{
			width: 70%;
		}

 	</style>
<?php } ?>

<div class="row">
		<div class="col-md-5">
			<div class="row bebas_lembap">
				Bebas lembap saat menstruasi <br>
				artinya bebas iritasi, Girls!
			</div>
			<div class="row laurier_healtly">
				Laurier Healthy Skin dengan sirkulasi <br>
				udara yang baik bikin kulit kewanitaanmu <br>
				bernapas lega!
			</div>
			<div class="produk">
				<img src="img/produk.png">
			</div>
		</div>
		<div class="col-md-6">
			<div class="pad">
				<img src="img/pad.png">
			</div>
			
			<div class="gambaran_atas">
				<img id="gbr_atas" src="img/gambaran-atas.png">
			</div>
			<div class="gambaran_tengah">
				<img src="img/gambaran-tengah.png">
			</div>
			<div class="gambaran_bawah">
				<img src="img/gambaran-bawah.png">
			</div>
			<div class="pointer_1">
				<img id="img_pointer1" src="img/pointer_1.png">
			</div>
			<div class="pointer_2">
				<img id="img_pointer2" src="img/pointer_1.png">
			</div>
			<div class="pointer_3">
				<img id="img_pointer3" src="img/pointer_1.png">
			</div>
			<div class="product_detail">
				<img id="p_detail" src="img/product_detail.png">
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
				<a style="float: right;margin-top: -50px;margin-right: 35px" href="https://menstruasi.com/dr-laurier"><img class="btn-ask" src="img/btn-ask.png"></a>	
				
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