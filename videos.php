<?php
include './Templates/PHP/header.php'
?>
  
<!-- InstanceBeginEditable name="EditRegion5" -->
<style>
.newsmalltitle1{
	font-weight:500; 
	font-size:64px; 
	text-align:center;
	position:absolute;
	opacity:1.0;
	margin-top:25px;

	color:#FFF;
	cursor:pointer;

}
.newsmalltitle2{
	font-weight:500; 
	font-size:35px; 
	text-align:center;
	opacity:1.0;
	margin-top:50px;
	position:absolute;
	color:#FFF;
	cursor:pointer;

}
.newsmalltitle3{
	font-weight:500; 
	font-size:64px; 
	text-align:center; 
	position:absolute;
	color:#E9E9E9;
	cursor:pointer;

}
.newsmalltitle4{
	font-weight:500; 
	font-size:150px; 
	text-align:center; 
	position:absolute;
	color:#E9E9E9;

	margin-left:40px;
	margin-top:220px;
	cursor:pointer;
}
.videobuttons{
	position:absolute;
	height:200px;
}
#backdrop{
	width:100%;
	height:100%;
	background-color:#424242;
	position:fixed;
	display:none;
	top:0px;
	left:0px;
	opacity:0.5;
	z-index:99;
}
.videobox{
	display:none;
	padding:10px;
	background-color:#FFF;
	position:fixed;
	left:50%;
	margin-left:-480px;
	z-index:100;
	top:50%;
	width:980px;
	height:560px;
	margin-top:-270px;
	transform-origin:center;
}

div.boxes
{
	height:200px; width:266.66px; position:absolute; left:50%; 
}
</style>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->
<script>

function backdrop(){
	$(".videobox").hide()
	$("#backdrop").hide()
	$("#helpbubblebackground").hide()
	
	document.getElementById('player').src="";
	

}
function m2demovideo(){
	$("#m2demovideo").fadeIn(500)
	$("#backdrop").show()
	document.getElementById('player').src="//www.youtube.com/embed/gZHBrvvEXuY?rel=0" 
}
function m2maxdemovideo(){
	$("#m2demovideo").fadeIn(500)
	$("#backdrop").show()
	document.getElementById('player').src="//www.youtube.com/embed/Q6P22ubCiEU?rel=0"
}
function aawrdemovideo(){
	$("#m2demovideo").fadeIn(500)
	$("#backdrop").show()
	document.getElementById('player').src="//www.youtube.com/embed/jWDqim7Q5dE?rel=0"
}
function floorstanddemovideo1(){
	$("#m2demovideo").fadeIn(500)
	$("#backdrop").show()
	document.getElementById('player').src="//www.youtube.com/embed/4aF685_Yiuw?rel=0" 
}
function floorstanddemovideo2(){
	$("#m2demovideo").fadeIn(500)
	$("#backdrop").show()
	document.getElementById('player').src="//www.youtube.com/embed/-0eMv1URTUQ?rel=0" 
}
function tableclampdemovideo1(){
	$("#m2demovideo").fadeIn(500)
	$("#backdrop").show()
	document.getElementById('player').src="//www.youtube.com/embed/Ue31F1mQY5s?rel=0" 
}
function tableclampdemovideo2(){
	$("#m2demovideo").fadeIn(500)
	$("#backdrop").show()
	document.getElementById('player').src="//www.youtube.com/embed/aAbLypbTnyo?rel=0"
}
function frameclampsdemovideo(){
	$("#m2demovideo").fadeIn(500)
	$("#backdrop").show()
	document.getElementById('player').src="//www.youtube.com/embed/65waYQ9_ye0?rel=0" 
}
function sidedswingdemovideo1(){
	$("#m2demovideo").fadeIn(500)
	$("#backdrop").show()
	document.getElementById('player').src="//www.youtube.com/embed/uTHEtCRih-0?rel=0"
}
function sidedswingdemovideo2(){
	$("#m2demovideo").fadeIn(500)
	$("#backdrop").show()
	document.getElementById('player').src="//www.youtube.com/embed/xn3fChGbnhM?rel=0" 
}
</script>
<!-- InstanceEndEditable -->

<div onclick="backdrop(this)" id="backdrop"></div>
<div class="everythingelse">
<h1><div id="liftandlocktitle" style="position:absolute; top:100px; left:50%; margin-left:-490px; overflow:hidden; text-align:left; font-size:100px; font-family:'Roboto'; font-weight:300;">Videos</div></h1>
<h2><p class="armtitle" style="position:absolute; top:250px; left:50%; margin-left:-350px; font-weight:300;">Lift and Lock Demonstrations</p></h2>

<div id="pictures" style="top:-200px; position:relative;">
<div onclick="m2demovideo(this)" id="m2demo" style="margin-left:-550px; top:530px;" class="boxes"><img alt="Wheelchair Mounting Demonstration" class="videobuttons" src="videos/m2 demo.png"/><p class="newsmalltitle1">M2 DEMO</p></div>
<!--<div onclick="aawrdemovideo(this)" id="m2demo" style="height:200px; width:266.66px; position:absolute; left:50%; margin-left:-272.22px; top:530px;"><img alt="Wheelchair Mounting Demonstration" class="videobuttons" src="videos/articulating arm demo.png"/><p class="newsmalltitle2">ARTICULATING ARM DEMO</p></div>-->
<div onclick="floorstanddemovideo1(this)" id="m2demo" style="margin-left:-272.22px; top:530px;" class="boxes"><img alt="Wheelchair Mounting Demonstration" class="videobuttons" src="videos/rolling stand pt1.png"/><p class="newsmalltitle2">ROLLING FLOOR STAND (Pt 1)</p></div>
<div onclick="floorstanddemovideo2(this)" id="m2demo" style="margin-left:5.56px; top:530px;" class="boxes"><img alt="Wheelchair Mounting Demonstration" class="videobuttons" src="videos/rolling stand pt2.png"/><p class="newsmalltitle2">ROLLING FLOOR STAND (Pt 2)</p></div>
<div onclick="tableclampdemovideo1(this)" id="m2demo" style="margin-left:283.34px; top:530px;" class="boxes"><img alt="Wheelchair Mounting Demonstration" class="videobuttons" src="videos/table clamp pt1.png"/><p class="newsmalltitle2">TABLE CLAMP DEMO (Pt 1)</p></div>
<div onclick="tableclampdemovideo2(this)" id="m2demo" style="margin-left:-550px; top:741.12px;" class="boxes"><img alt="Wheelchair Mounting Demonstration" class="videobuttons" src="videos/table clamp pt2.png"/><p class="newsmalltitle2">TABLE CLAMP DEMO (Pt 2)</p></div>
<div onclick="frameclampsdemovideo(this)" id="m2demo" style="margin-left:-272.22px; top:741.12px;" class="boxes"><img alt="Wheelchair Mounting Demonstration" class="videobuttons" src="videos/frame clamps.png"/><p class="newsmalltitle1">FRAME CLAMPS</p></div>
<div onclick="m2maxdemovideo(this)" id="m2demo" style="margin-left:5.56px; top:741.12px;" class="boxes"><img alt="Wheelchair Mounting Demonstration" class="videobuttons" src="videos/m2 max.png"/><p class="newsmalltitle1">M2 MAX DEMO</p></div>
<!--<div onclick="sidedswingdemovideo1(this)" id="m2demo" style="height:200px; width:266.66px; position:absolute; left:50%; margin-left:-550px; top:952.24px;"><img alt="Wheelchair Mounting Demonstration" class="videobuttons" src="videos/2 sided swing away pt1.png"/><p class="newsmalltitle2">2 SIDED SWING AWAY (Pt 1)</p></div>
<div onclick="sidedswingdemovideo2(this)" id="m2demo" style="height:200px; width:266.66px; position:absolute; left:50%; margin-left:-272.22px; top:952.24px;"><img alt="Wheelchair Mounting Demonstration" class="videobuttons" src="videos/2 sided swing away pt2.png"/><p class="newsmalltitle2">2 SIDED SWING AWAY (Pt 2)</p></div>-->
</div>

<div id="specificationsscroll" class="footer" style="top:1500px;">Ideas for Independent Living 2014</div>
</div>

<div class="videobox" id="m2demovideo"><iframe class="videodemo" id="player" style="height:100%; width:100%" frameborder="0" allowfullscreen></iframe><img onclick="backdrop(this);" src="what's new page/exit-icon.jpg" style="position:absolute; top:9px; right:9px; height:25px; cursor:pointer;" /></div>



<!-- InstanceEndEditable -->

</body>
<!-- InstanceEnd --></html>
