<?php 
	include("os.php");
 ?>	
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
 margin-top: 20px;
	margin-left: 20px;
}

.topnav a {
  float: left;
  display: block;
  color: #111;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
	 border:1px solid #999;
	margin-right: 20px;
	
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>


<div class="topnav" id="myTopnav">
  <a href="#" ><img src="img/Logo.png" style="width:80%;margin-top:-13%;margin-left: -25%"></a>
  <a href="#">Irritation Meter Test</a>
  <a href="#">Ask Dr. Laurier</a>
  <a href="#">Try Now!</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<div class="row">
		<div class="col-md-12">
			<div class="dont-get-iritated">
				<img src="img/popUp_dontGet.png" id="dont-get" >
			</div>
			<div class="wanita">
				<img src="img/cewe3.png" id="wanita-ld" width="90%" >
			</div>
			<div class="kata_merasa">
				<img src="img/kata_merasa.png" class="responsive" style="width:95%">
			</div>	
			<div class="scroll">
				<a  data-index="1"><img src="img/scroll.png" ></a>
			</div>
				<img class="tangan-wanita" src="img/tangan-wanita.png" width="15%">
			
			
		</div>
		
</div>

<script>
function myFunction() {
	alert('test');
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>