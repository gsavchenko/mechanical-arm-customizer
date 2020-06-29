<?php
include './Templates/PHP/header.php'
?>

<style>
div.menuliftandlock{
	vertical-align:central;
	text-align:center;
	height:50px;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	position:absolute;
	width:236px;
	margin-top:-2px;
	font-weight:100;
}
</style>
<style>
div.modelpics{
	height:236px;
	width:168.57px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	vertical-align:bottom;
	font-weight:100;

}
</style>
<style>
div.mountingpics{
	height:118px;
	width:168.57px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	vertical-align:bottom;
	font-weight:100;
}
</style>
<style>
div.mountingpics2{
	height:118px;
	width:168.57px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	margin-top:118px;
	font-weight:100;
}
</style>
<style>
div.modellabels{
	width:168.57px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	margin-top:185px;
	font-weight:100;
}
</style>
<style>
div.mountinglabels{
	width:168.5px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	margin-top:100px;
	font-weight:100;
}
</style>
<style>
div.mountinglabels2{
	width:168.5px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	margin-top:218px;
	font-weight:100;
}
</style>
<style>
.armtitle{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:36px;
	display:none;
	font-weight:100;
}
</style>
<style>
.mountingtitle{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:36px;
	display:none;
	font-weight:100;
}
</style>
<style>
.armnumber{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:18px;
	text-align:right;
	display:none;
	font-weight:100;
}
</style>
<style>
.mountingnumber{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:18px;
	text-align:right;
	display:none;
	font-weight:100;
}
</style>
<style>
.armpar{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:18px;
	display:none;
	font-weight:100;
}
</style>
<style>
.mountingpar{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:18px;
	display:none;
	font-weight:100;
}
</style>
<style>
.armpics{
	height:650px;
	margin-left:-180px;
	margin-top:-60px;
	display:none;	
	
}
</style>
<style>
.mountingftpics{
	height:650px;
	margin-left:-180px;
	margin-top:-60px;
	display:none;	
	
}
.mountinginstructions{
 display:none; 
 height:25px; 
 width:25px; 
 cursor:pointer;	
}
</style>
<style>
.navigation{
	text-decoration:none;
	color:#030303;
	
}
body{
	padding:0px;
}
</style>
<style>
@media all and (max-width: 1400px){
	#liftandlocktitle{
		margin-left:-490px;
	}
	#llopener{
		margin-left:-600px;
		margin-top:-555px;
	}
	#secondsection{
		height:1200px;

	}
}
 </style>
 <style>
@media all and (min-width: 1400px){

	#liftandlocktitle{
		margin-left:-630px; 
		
	}
	#llopener{
		margin-left:-640px;
		margin-top:-525px;
	}
	#secondsection{
		height:1035px;
		background-color:#FFF;
	}


}
</style>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->
<script>
$(document).ready(function(){
    $("#liftandlocktitle").fadeIn(1000)
	$("#articulaingtitle").show()
	$("#articulatingnum").show()
	$("#articulatingpar").show()
	$("#articulatingpic").show()
	$("#customizefeaturette").show()
	$("#customizetitle").show()
	$("#customizepar").show()
	$("#customizepic").show()
	$("#directmountpic").show()
	$("#directmounttitle").show()
	$("#directmountnum").show()
	$("#directmountpar").show()
	$("#directmountsocketinfo").show()
	$("#aboutpar").show()
	$("#abouttitle").show()
	$("#aboutpic").show()
});

</script>
<script>
function articulating(){
	$(".armpar").hide()
	$(".armpics").hide()
	$(".armnumber").hide()
	$(".armtitle").hide()
	$("#articulaingtitle").show()
	$("#articulatingnum").show()
	$("#articulatingpar").show()
	$("#articulatingpic").show()
	
	
}
</script>
<script>
function articulatingriser(){
	$(".armpar").hide()
	$(".armpics").hide()
	$(".armnumber").hide()
	$(".armtitle").hide()
	$("#articulaingrisertitle").show()
	$("#articulatingrisernum").show()
	$("#articulatingriserpar").show()
	$("#articulatingriserpic").show()
	
	
}
</script>
<script>
function m2(){
	$(".armpar").hide()
	$(".armpics").hide()
	$(".armnumber").hide()
	$(".armtitle").hide()
	$("#m2title").show()
	$("#m2num").show()
	$("#m2par").show()
	$("#m2pic").show()
	
	
}
</script>
<script>
function m2x(){
	$(".armpar").hide()
	$(".armpics").hide()
	$(".armnumber").hide()
	$(".armtitle").hide()
	$("#m2xtitle").show()
	$("#m2xnum").show()
	$("#m2xpar").show()
	$("#m2xpic").show()
	
	
}
</script>
<script>
function m2max(){
	$(".armpar").hide()
	$(".armpics").hide()
	$(".armnumber").hide()
	$(".armtitle").hide()
	$("#m2maxtitle").show()
	$("#m2maxnum").show()
	$("#m2maxpar").show()
	$("#m2maxpic").show()
	
	
}
</script>
<script>
function ht(){
	$(".armpar").hide()
	$(".armpics").hide()
	$(".armnumber").hide()
	$(".armtitle").hide()
	$("#httitle").show()
	$("#htnum").show()
	$("#htpar").show()
	$("#htpic").show()
	
	
}
</script>
<script>
function htwr(){
	$(".armpar").hide()
	$(".armpics").hide()
	$(".armnumber").hide()
	$(".armtitle").hide()
	$("#htwrtitle").show()
	$("#htwrm2maxnum").show()
	$("#htwrpar").show()
	$("#htwrpic").show()
	
	
}
</script>

<script>
function serdirectmount(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$(".mountinginstructions").hide()
	$("#serdirectmounttitle").show()
	$("#serdirectmountnum").show()
	$("#serdirectmountpar").show()
	$("#serdirectmountpic").show()
	$("#serdirectmountsocketinfo").show()
}
</script>
<script>
function verserdirectmount(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$(".mountinginstructions").hide()
	$("#verserdirectmounttitle").show()
	$("#verserdirectmountnum").show()
	$("#verserdirectmountpar").show()
	$("#verserdirectmountpic").show()
	$("#verserdirectmountsocketinfo").show()
}
</script>
<script>
function directmount(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$(".mountinginstructions").hide()
	$("#directmounttitle").show()
	$("#directmountnum").show()
	$("#directmountpar").show()
	$("#directmountpic").show()
	$("#directmountsocketinfo").show()
}
</script>
<script>
function ttrackdirectmount(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$(".mountinginstructions").hide()
	$("#ttrackdirectmounttitle").show()
	$("#ttrackdirectmountnum").show()
	$("#ttrackdirectmountpar").show()
	$("#ttrackdirectmountpic").show()
	$("#ttrackdirectmountsocketinfo").show()
}
</script>
<script>
function ttrackbracket(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$(".mountinginstructions").hide()
	$("#ttrackbrackettitle").show()
	$("#ttrackbracketnum").show()
	$("#ttrackbracketpar").show()
	$("#ttrackpic").show()
	$("#ttrackbracketinfo").show()
}
</script>
<script>
function dttrackbracket(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$(".mountinginstructions").hide()
	$("#dttrackbrackettitle").show()
	$("#dttrackbracketnum").show()
	$("#dttrackbracketpar").show()
	$("#doublettrackpic").show()
	$("#doublettrackbracketinfo").show()
}
</script>
<script>
function degreebracket(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$(".mountinginstructions").hide()
	$("#90degreebrackettitle").show()
	$("#90degreebracketnum").show()
	$("#90degreebracketpar").show()
	$("#90degreepic").show()
	$("#90degreebracketinfo").show()
}
</script>
<script>
function squaretubebracket(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$(".mountinginstructions").hide()
	$("#squaretubetitle").show()
	$("#squaretubenum").show()
	$("#squaretubepar").show()
	$("#squaretubepic").show()
	$("#squaretubeinfo").show()
}
</script>
<script>
function fullringbracket(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$(".mountinginstructions").hide()
	$("#fullringtitle").show()
	$("#fullringnum").show()
	$("#fullringpar").show()
	$("#fullringpic").show()
	$("#fullringinfo").show()
}
</script>
<script>
function zeroclearance(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$(".mountinginstructions").hide()
	$("#zeroclearancetitle").show()
	$("#zeroclearancenum").show()
	$("#zeroclearancepar").show()
	$("#zeroclearancepic").show()
	$("#zeroclearanceinfo").show()
}
</script>
<script>
function serratedsocketbar(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$(".mountinginstructions").hide()
	$("#serratedsocketbartitle").show()
	$("#serratedsocketbarnum").show()
	$("#serratedsocketbarpar").show()
	$("#serratedsocketbarpic").show()
	$("#serratedsocketbarinfo").show()
}
</script>
<script>
function socketbar14(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$(".mountinginstructions").hide()
	$("#socketbar14title").show()
	$("#socketbar14num").show()
	$("#socketbar14par").show()
	$("#socketbar14pic").show()
	$("#14inchsocketbarinfo").show()
}
</script>
<script>
function socketbar22(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$(".mountinginstructions").hide()
	$("#socketbar22title").show()
	$("#socketbar22num").show()
	$("#socketbar22par").show()
	$("#socketbar22pic").show()

}
</script>
<script>
function heliobracket(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$(".mountinginstructions").hide()
	$("#heliotitle").show()
	$("#helionum").show()
	$("#heliopar").show()
	$("#heliopic").show()
	$("#helioinfo").show()
}
</script>

<script>
function modelsscrolling(x){
		$("#navigationbar").css({"top":"820px"})
	
}
function customizescrolling(x){
		$("#navigationbar").css({"top":"1670px"})
	
}
function specificationscrolling(x){
		$("#navigationbar").css({"top":"1670px"})
	
}
function customizescrolling(x){
		$("#navigationbar").css({"top":"1670px"})
	
}
</script>

<meta name="description" content="The Lift and Lock System is meant to hold all kinds of devices and accessories. A dependable, high quality mounting arm for a range of situations." />

<div style="position:absolute; width:1180px; height:100%; left:50%; margin-left:-590px;">
<div  id="opener" style="height:100%; width:1180px; position:relative;">
<div class="everythingelse" style="background-color:#424242;"> 
<h1><div id="liftandlocktitle" style="margin-left:-550px; top:300px;" class="bigtitles">Lift and<br />Lock</div></h1>
<div id="llopener" style="position:absolute; overflow:hidden; margin-top:80px; width:1000px; left:50%; margin-left:-300px;z-index:-20;"><img  src="lift and lock page/lift-and-lock-wheelchair-disability-assistive-devices-mounting.png" style="height:750px;" alt="Occupational Therapy Device Mounting"/></div>
</div>
</div>



<div id="secondsection" class="everythingelse" style="width:1180px; opacity:0.999; margin-top: 750px;">
<div id="navigationbarabout" class="menu1" style="margin-top:0px; width:1180px; position:absolute; left:50%; margin-left:-590px; background-color:#818181; "><img src="lift and lock page/menu lines.png" style="width:1180px; height:50px; position:absolute; background-color:#FFF;"/>
<a class="navigation" href="#aboutscroll" ><div class="menuliftandlock" style="margin-left:0px;"><p align="center">About</p></div></a>
<a class="navigation" href="#modelsscroll" ><div class="menuliftandlock" style="margin-left:236px;"><p align="center">Models</p></div></a>
<a class="navigation" href="#specificationsscroll" ><div class="menuliftandlock" style="margin-left:472px;"><p align="center">Specifications</p></div></a>
<a class="navigation" href="#mountingscroll" ><div class="menuliftandlock" style="margin-left:708px;"><p align="center">Mounting Options</p></div></a>
<a class="navigation" href="#customizescroll"><div id="customizetab" class="menuliftandlock" style="margin-left:944px;"><p align="center">Customize</p></div></a>
</div>
<div id="aboutscroll" class="menu1" style="top:-65px; width:1180px; left:50%; margin-left:-590px; opacity:0.5;"></div>

<div id="about" style="position:absolute; margin-top:-70px; width:1180px; left:50%; margin-left:-590px; background-color:#FFF;">
<div id="aboutfeaturette" style="position:absolute; margin-top:120px; height:1000px; width:1180px; overflow:hidden; background-color:#FFF;">
<img id="aboutpic" style="margin-left:-150px; margin-top:-60px; height:810px;" src="lift and lock page/manual-chair-and-stand-together-wheelchair-mounting.png" alt="Occupation Therapy Device Mounting"/>

</div>
<div style="position:absolute; margin-left:75px; width:630px; margin-top:52.25%; overflow:hidden;">
<p id="abouttitle" class="armtitle">What Does it Do?</p>

<p id="aboutpar"  style="font-size:18px; font-weight:thin; font-family:'Roboto Lt', Roboto, sans-serif;">The Lift and Lock System is a line of mounting arms and attachments designed to make other objects more accessible and functional.<br /><br />Lift and Lock arms hold other items for the user and connect to a bed, wheelchair, table or floor stand. Making this mounting possible is the variety of mounting brackets that we have that address the broad variety of mounting scenarios. <br />
<br />To get a better visual of how the system all fits together, click the link below to build your own virtual system.</p>



</div>

<div onclick="buildyoursystem(this)" id="buildyoursystem" style="margin-top:84.75%; margin-left:350px; " class="buildyoursystemlink">Build your system <img style="height:30px; margin-left:20px; position:absolute;" src="navigation arrow.png" /></div>
</div>
</div>

<div class="everythingelse" id="thirdsection"  style="height:1035px; width:1180px; background-color:#FFF; opacity:0.999;">
<div id="navigationbar" class="menu1" style="margin-top:0px; width:1180px; position:absolute; left:50%; margin-left:-590px; "><img src="lift and lock page/menu lines.png" style="width:1180px; height:50px; position:absolute;"/>
<a class="navigation" href="#aboutscroll" ><div class="menuliftandlock" style="margin-left:0px;"><p align="center">About</p></div></a>
<a class="navigation" href="#modelsscroll" ><div class="menuliftandlock" style="margin-left:236px;"><p align="center">Models</p></div></a>
<a class="navigation" href="#specificationsscroll" ><div class="menuliftandlock" style="margin-left:472px;"><p align="center">Specifications</p></div></a>
<a class="navigation" href="#mountingscroll" ><div class="menuliftandlock" style="margin-left:708px;"><p align="center">Mounting Options</p></div></a>
<a class="navigation" href="#customizescroll"><div id="customizetab" class="menuliftandlock" style="margin-left:944px;"><p align="center">Customize</p></div></a>
</div>

<div id="modelsscroll" class="menu1" style="top:-65px; width:1180px; left:50%; margin-left:-590px; opacity:0.5;"></div>

<div id="models" style="position:absolute; margin-top:110px; width:1180px; left:50%; margin-left:-590px;">
<div onclick="articulating(this)"class="modelpics" id="articulating" style="margin-left:0px; cursor:pointer;"><img style="height:150px; margin-left:-45px;" src="lift and lock page/articulating-arm-wheechair-disability-assistance-devices.png" alt="Wheelchair Accessibility Device Mounting Arm"/></div>
<div onclick="articulatingriser(this)" class="modelpics" id="articulatingwithriser" style="margin-left:168.57px; cursor:pointer;"><img style="height:145px; margin-left:-40px;" src="lift and lock page/articulating-arm-with-riser-wheechair-disability-assistance-devices.png" alt="Wheelchair Accessibility Device Mounting Arm" /></div>
<div onclick="m2(this)" class="modelpics" id="m2" style="margin-left:337.14px; cursor:pointer;"><img style="height:170px; margin-left:-45px;" src="lift and lock page/m2-wheechair-disability-assistance-devices.png" alt="Wheelchair Accessibility Device Mounting Arm" /></div>
<div onclick="m2x(this)"class="modelpics" id="m2x" style="margin-left:505.71px; cursor:pointer;"><img style="height:170px; margin-left:-55px;" src="lift and lock page/m2x-wheechair-disability-assistance-devices.png" alt="Wheelchair Accessibility Device Mounting Arm" /></div>
<div onclick="m2max(this)"class="modelpics" id="m2max" style="margin-left:674.28px; cursor:pointer;"><img style="height:170px; margin-left:-60px;" src="lift and lock page/m2-max-wheechair-disability-assistance-devices.png" alt="Wheelchair Accessibility Device Mounting Arm" /></div>
<div onclick="ht(this)"class="modelpics" id="ht" style="margin-left:842.85px; overflow:hidden; cursor:pointer;"><img style="height:160px; margin-top:3px; margin-left:-45px;" src="lift and lock page/head-and-tail-arm-handicapped-disability-assistive-devices.png" alt="Wheelchair Accessibility Device Mounting Arm" /></div>
<div onclick="htwr(this)"class="modelpics" id="htwr" style="margin-left:1011.42px; overflow:hidden; cursor:pointer;"><img style="height:140px; margin-top:6px; margin-left:-15px;" src="lift and lock page/head-and-tail-arm-with-riser-handicapped-disability-assistive-devices.png" alt="Wheelchair Accessibility Device Mounting Arm" /></div>

<div onclick="articulating(this)"class="modellabels" style="margin-left:0px;">Articulating Arm</div>
<div onclick="articulatingriser(this)" class="modellabels" style="margin-left:168.57px;">Articulating Arm with Riser</div>
<div onclick="m2(this)" class="modellabels" style="margin-left:337.14px;">M2</div>
<div onclick="m2x(this)" class="modellabels" style="margin-left:505.71px;">M2X</div>
<div onclick="m2max(this)" class="modellabels" style="margin-left:674.28px;">M2 Max</div>
<div onclick="mpwr(this)" class="modellabels" style="margin-left:842.85px;">Head and Tail Arm</div>
<div onclick="tbwr(this)" class="modellabels" style="margin-left:1011.42px;">Head and Tail Arm with Riser</div>

<div id="modelfeaturette" style="position:absolute; margin-top:275px; height:500px; width:600px;">
<img id="articulatingpic" class="armpics" src="lift and lock page/articulating-arm-wheelchair-disability-mounting-systems.png" />
<img id="articulatingriserpic" class="armpics" src="lift and lock page/articulating-arm-with-riser-wheelchair-disability-mounting-systems.png" />
<img id="m2pic" class="armpics" src="lift and lock page/m2-arm-wheelchair-disability-mounting-systems.png" />
<img id="m2xpic" class="armpics" src="lift and lock page/m2x-arm-wheelchair-disability-mounting-systems.png" />
<img id="m2maxpic" class="armpics" src="lift and lock page/m2-max-arm-wheelchair-disability-mounting-systems.png" />
<img id="htpic" class="armpics" src="lift and lock page/head-and-tail-arm-wheelchair-disability-assistive-devices.png" />
<img id="htwrpic" class="armpics" src="lift and lock page/head-and-tail-arm-with-riser-wheelchair-disability-assistive-devices.png" />
</div>
<div id="featurettetitle" style="position:absolute; margin-left:625px; width:555px; margin-top:275px; overflow:hidden;">
<p id="articulaingtitle" class="armtitle">Articulating Arm</p>
<p id="articulaingrisertitle" class="armtitle">Articulating Arm with Riser</p>
<p id="m2title" class="armtitle">M2</p>
<p id="m2xtitle" class="armtitle">M2X</p>
<p id="m2maxtitle" class="armtitle">M2 Max</p>
<p id="httitle" class="armtitle">Head and Tail Arm</p>
<p id="htwrtitle" class="armtitle">Head and Tail Arm with Riser</p>
<p id="articulatingnum" class="armnumber">Part # 8072</p>
<p id="articulatingrisernum" class="armnumber">Part # 8073</p>
<p id="m2num" class="armnumber">Part # 8074</p>
<p id="m2xnum" class="armnumber">Part # 8069</p>
<p id="m2maxnum" class="armnumber">Part # 8127</p>
<p id="htnum" class="armnumber">Part # 8224</p>
<p id="htwrm2maxnum" class="armnumber">Part # 8374</p>
<p id="articulatingpar" class="armpar"><br />The Articulating Arm is a strong and sturdy system that is ideal for holding items that only require horizontal movement. With easily locking joints, the arm can be fixed in a desired position or loosed to move out of the way. The standard three joints of this arm allow for it to conveniently reach around obstacles if needed.</p>
<p id="articulatingriserpar" class="armpar"><br />The Articulating Arm with Riser offers the strength and stability of the Articulating Arm with the added convenience of vertical movement. The riser is operated with two simple buttons that lock it at set increments. This feature prevents the arm from lowering over time and makes it easier for you to place your device with precision.</p>
<p id="m2par" class="armpar"><br />The M2 Arm is our lightest weight-yielding compression cylinder arm. Meant to hold anything from 0 to 5 pounds, this arm works great for holder your smaller devices like a tablet. The compression cylinder riser gives it a smooth, floating movement and can easily be locked in place with a turn of a handle. </p>
<p id="m2xpar" class="armpar"><br />The M2X Arm is our middle-weight compression cylinder arm. This arm can hold items that range from 5 to 10 pounds like a laptop. The compression cylinder riser gives it a smooth, floating movement and can easily be locked in place with a turn of a handle.</p>
<p id="m2maxpar" class="armpar"><br />The M2 Max Arm is our heaviest weight-yielding compression cylinder arm. It is capable of holding heavier items, ranging from 10 to 15 pounds. Items that would fall into this weight class would include certain computer monitors and various communication systems. The compression cylinder riser gives it a smooth, floating movement and can easily be locked in place with a turn of a handle.</p>
<p id="htpar" class="armpar"><br />The Head and Tail Arm is our shortest length mounting arm. It is intended to hold heavy items that are beyond the weight yielding range of our other arms. It is mounted onto a Vertical Bar, on which is can slide vertical to a desired location and lock in place. The strong arm gives it a smooth lateral range of motion.</p>
<p id="htwrpar" class="armpar"><br />The Head and Tail Arm with Riser is another heavy weight-bearing arm. Like the Head and Tail Arm, it is intended to hold devices that would be too heavy for other arms. This arm has the added feature of vertical adjustability. The Riser clicks into place allowing the user to customize its height easily as well as manoeuvre it laterally.</p>
</div>
<div onclick="buildyoursystem(this)" id="buildyoursystem" style="margin-top:650px; margin-left:750px; " class="buildyoursystemlink">Build your system <img style="height:30px; margin-left:20px; position:absolute;" src="navigation arrow.png" /></div>
</div>
</div>


<div id="fourthsection" class="everythingelse" style="width:1180px; height:1035px; background-color:#FFF; opacity:0.999;">
<div id="navigationbar2" class="menu1" style="margin-top:0px; width:1180px; position:absolute; left:50%; margin-left:-590px; "><img src="lift and lock page/menu lines.png" style="width:1180px; height:50px; position:absolute;"/>
<a class="navigation" href="#aboutscroll" ><div class="menuliftandlock" style="margin-left:0px;"><p align="center">About</p></div></a>
<a class="navigation" href="#modelsscroll" ><div class="menuliftandlock" style="margin-left:236px;"><p align="center">Models</p></div></a>
<a class="navigation" href="#specificationsscroll" ><div class="menuliftandlock" style="margin-left:472px;"><p align="center">Specifications</p></div></a>
<a class="navigation" href="#mountingscroll" ><div class="menuliftandlock" style="margin-left:708px;"><p align="center">Mounting Options</p></div></a>
<a class="navigation" href="#customizescroll"><div id="customizetab" class="menuliftandlock" style="margin-left:944px;"><p align="center">Customize</p></div></a>
</div>



<div id="customizescroll" class="menu1" style="margin-top:-65px; width:1180px; position:absolute; left:50%; margin-left:-590px; "></div>
<div id="customize" style="position:absolute; margin-top:-70px; width:1180px; left:50%; margin-left:-590px; background-color:#959595;">
<div id="customizefeaturette" style="position:absolute; margin-top:230px; height:500px; width:600px;">
<img id="customizepic" class="armpics" style="margin-left:-240px;" src="lift and lock page/multi-arm.png" alt="Occupation Therapy Device Mounting"/>

</div>
<div style="position:absolute; margin-left:625px; width:555px; margin-top:230px; overflow:hidden;">
<p id="customizetitle" class="armtitle">Customize Your System</p>

<p id="customizepar" class="armpar"><br />Lift and Lock Systems are designed to cater to the needs of the user. Everyone user's needs are specific and unique. In order to account for this, the system must offer a diverse range in customization. By utilizing universal joints, each bone of the arm can be interchanged to transform it into exactly what you need. <br /><br />Lift and Lock arms are capable of holding a wide range of communication and assistive living devices, as well as more personalized items. Because each individual may require a different assistive device, these mounting arms can be easily modified to suit a specific scenario. </p>

</div>
</div>
</div>

<div id="fifthsection" class="everythingelse" style="height:1035px; width:1180px; background-color:#FFF; opacity:0.999;">
<div id="navigationbar3" class="menu1" style="margin-top:0px; width:1180px; position:absolute; left:50%; margin-left:-590px; "><img src="lift and lock page/menu lines.png" style="width:1180px; height:50px; position:absolute;"/>
<a class="navigation" href="#aboutscroll" ><div class="menuliftandlock" style="margin-left:0px;"><p align="center">About</p></div></a>
<a class="navigation" href="#modelsscroll" ><div class="menuliftandlock" style="margin-left:236px;"><p align="center">Models</p></div></a>
<a class="navigation" href="#specificationsscroll" ><div class="menuliftandlock" style="margin-left:472px;"><p align="center">Specifications</p></div></a>
<a class="navigation" href="#mountingscroll" ><div class="menuliftandlock" style="margin-left:708px;"><p align="center">Mounting Options</p></div></a>
<a class="navigation" href="#customizescroll"><div id="customizetab" class="menuliftandlock" style="margin-left:944px;"><p align="center">Customize</p></div></a>
</div>


<div id="mountingscroll" class="menu1" style="margin-top:-65px; width:1180px; position:absolute; left:50%; margin-left:-590px; "></div>
<div id="mountingoptions" style="position:absolute; margin-top:70px; width:1180px; left:50%; margin-left:-590px;">
<div onclick="directmount(this)" class="mountingpics" id="directmout" style="margin-left:0px; cursor:pointer;"><img style="height:118px;" src="lift and lock page/direct-mount-socket.png" alt="Occupation Therapy Device Mounting Bracket"/></div>
<div onclick="serdirectmount(this)" class="mountingpics" id="serdirectmount" style="margin-left:168px; cursor:pointer;"><img style="height:118px;" src="lift and lock page/serrated-direct-mount-socket.png" alt="Occupation Therapy Device Mounting Bracket" /></div>
<div onclick="verserdirectmount(this)" class="mountingpics" id="verserdirectmount" style="margin-left:336px; cursor:pointer;"><img style="height:118px;" src="lift and lock page/vertical-serrated-direct-mount-socket.png" alt="Occupation Therapy Device Mounting Bracket" /></div>
<div onclick="ttrackdirectmount(this)" class="mountingpics" id="ttrackdirect" style="margin-left:504px; cursor:pointer;"><img style="height:118px;" src="lift and lock page/t-track-direct-mount-socket.png" alt="Occupation Therapy Device Mounting Bracket" /></div>
<div onclick="ttrackbracket(this)" class="mountingpics" id="ttrackbracket" style="margin-left:672px; cursor:pointer;"><img style="height:118px;" src="lift and lock page/t-track-bracket.png" alt="Occupation Therapy Device Mounting Bracket" /></div>
<div onclick="dttrackbracket(this)" class="mountingpics" id="dttrackbracket" style="margin-left:850px; cursor:pointer;"><img style="height:118px;" src="lift and lock page/double-t-track-bracket.png" alt="Occupation Therapy Device Mounting Bracket" /></div>
<div onclick="degreebracket(this)" class="mountingpics" id="90degreebracket" style="margin-left:1008px; cursor:pointer;"><img style="height:118px;" src="lift and lock page/90-degree-bracket.png" alt="Occupation Therapy Device Mounting Bracket" /></div>

<div onclick="squaretubebracket(this)" class="mountingpics2" id="articulating" style="margin-left:0px; cursor:pointer;"><img style="height:118px;" src="lift and lock page/square-tube-bracket.png" alt="Occupation Therapy Device Mounting Bracket"/></div>
<div onclick="fullringbracket(this)" class="mountingpics2" id="articulatingwithriser" style="margin-left:168px; cursor:pointer;"><img style="height:118px;" src="lift and lock page/full-ring-bracket.png" alt="Occupation Therapy Device Mounting Bracket" /></div>
<div onclick="zeroclearance(this)" class="mountingpics2" id="m2" style="margin-left:336px; cursor:pointer;"><img style="height:118px;" src="lift and lock page/zero-clearance-bracket.png" alt="Occupation Therapy Device Mounting Bracket" /></div>
<div onclick="serratedsocketbar(this)"class="mountingpics2" id="serratedsocketbar" style="margin-left:504px; cursor:pointer;"><img style="height:118px;" src="lift and lock page/serrated-socket-bar.png" alt="Occupation Therapy Device Mounting Bracket" /></div>
<div onclick="socketbar14(this)" class="mountingpics2" id="m2x" style="margin-left:672px; cursor:pointer;"><img style="height:118px;" src="lift and lock page/14-inch-socket-bar.png" alt="Occupation Therapy Device Mounting Bracket" /></div>
<div onclick="socketbar22(this)" class="mountingpics2" id="m2max" style="margin-left:850px; cursor:pointer;"><img style="height:118px;" src="lift and lock page/telescopic-block.png" alt="Occupation Therapy Device Mounting Bracket" /></div>
<div onclick="heliobracket(this)" class="mountingpics2" id="heliobracket" style="margin-left:1008px; cursor:pointer;"><img style="height:118px;" src="lift and lock page/helio-adapter-bracket.png" alt="Occupation Therapy Device Mounting Bracket" /></div>

<div onclick="directmount(this)" class="mountinglabels" style="margin-left:0px;">Direct Mount Socket</div>
<div onclick="serdirectmount(this)" class="mountinglabels" style="margin-left:168.5px;">Serrated Direct Mount Socket</div>
<div onclick="verserdirectmount(this)" class="mountinglabels" style="margin-left:337px;">Vertical Serration Direct Mount Socket</div>
<div onclick="ttrackdirectmount(this)" class="mountinglabels" style="margin-left:505.5px;">T-Track Direct Mount Socket</div>
<div onclick="ttrackbracket(this)" class="mountinglabels" style="margin-left:674px;">T-Track Bracket</div>
<div onclick="dttrackbracket(this)" class="mountinglabels" style="margin-left:842.5px;">Double T-Track Bracket</div>
<div onclick="degreebracket(this)" class="mountinglabels" style="margin-left:1011px;">90 Degree Bracket</div>
<div onclick="squaretubebracket(this)" class="mountinglabels2" style="margin-left:0px;">Square Tube Bracket</div>
<div onclick="fullringbracket(this)" class="mountinglabels2" style="margin-left:168.5px;">Full Ring Bracket</div>
<div onclick="zeroclearance(this)" class="mountinglabels2" style="margin-left:337px;">Zero Clearance Bracket</div>
<div onclick="serratedsocketbar(this)" class="mountinglabels2" style="margin-left:505.5px;">Serrated Socket Bar</div>
<div onclick="socketbar14(this)" class="mountinglabels2" style="margin-left:674px;">Socket Bar</div>
<div onclick="socketbar22(this)" class="mountinglabels2" style="margin-left:842.5px;">Telescopic Block</div>
<div onclick="heliobracket(this)" class="mountinglabels2" style="margin-left:1011px;">Helio Adapter Bracket</div>
<div id="mountingfeaturette" style="position:absolute; margin-top:285px; height:500px; width:600px; overflow:hidden;">

<img id="directmountpic" class="mountingftpics" src="lift and lock page/disability-assistive-device-mounting-direct-mount-socket.png" />
<img id="serdirectmountpic" class="mountingftpics" src="lift and lock page/disability-assistive-device-mounting-serrated-direct-mount-socket.png" />
<img id="verserdirectmountpic" class="mountingftpics" src="lift and lock page/disability-assistive-device-mounting-vertical-serrated-direct-mount-socket.png" />
<img id="ttrackdirectmountpic" class="mountingftpics" src="lift and lock page/disability-assistive-device-mounting-t-track-direct-mount-socket.png"/>
<img id="ttrackpic" class="mountingftpics" src="lift and lock page/disability-assistive-device-mounting-t-track-bracket.png" />
<img id="doublettrackpic" class="mountingftpics" src="lift and lock page/disability-assistive-device-mounting-double-t-track-bracket.png" />
<img id="90degreepic" class="mountingftpics" src="lift and lock page/disability-assistive-device-mounting-90-degree-bracket.png" />
<img id="squaretubepic" class="mountingftpics" src="lift and lock page/disability-assistive-device-mounting-square-tube-bracket.png" />
<img id="fullringpic" class="mountingftpics" src="lift and lock page/disability-assistive-device-mounting-full-ring-bracket.png" />
<img id="zeroclearancepic" class="mountingftpics" src="lift and lock page/disability-assistive-device-mounting-zero-clearance-bracket.png" />
<img id="serratedsocketbarpic" class="mountingftpics" src="lift and lock page/disability-assistive-device-mounting-serrated-socket-bar.png" />
<img id="socketbar14pic" class="mountingftpics" src="lift and lock page/disability-assistive-device-mounting-14-inch-socket-bar.png" />
<img id="socketbar22pic" class="mountingftpics" src="lift and lock page/disability-assistive-device-mounting-telescopic-block.png" />
<img id="heliopic" class="mountingftpics" src="lift and lock page/disability-assistive-device-mounting-helio-adapter.png" />
</div>
<div id="featurettetitle" style="position:absolute; margin-left:625px; width:555px; margin-top:285px; overflow:hidden;">
<p id="directmounttitle" class="mountingtitle">Direct Mount Socket</p>
<p id="serdirectmounttitle" class="mountingtitle">Serrated Direct Mount Socket</p>
<p id="verserdirectmounttitle" class="mountingtitle">Vertical Serration Direct Mount Socket</p>
<p id="ttrackdirectmounttitle" class="mountingtitle">T-Track Direct Mount Socket</p>
<p id="ttrackbrackettitle" class="mountingtitle">T-Nut Bracket</p>
<p id="dttrackbrackettitle" class="mountingtitle">Double T-Nut Bracket</p>
<p id="90degreebrackettitle" class="mountingtitle">90 Degree Bracket</p>
<p id="squaretubetitle" class="mountingtitle">Square Tube Bracket</p>
<p id="fullringtitle" class="mountingtitle">Full Ring Bracket</p>
<p id="zeroclearancetitle" class="mountingtitle">Zero Clearance</p>
<p id="serratedsocketbartitle" class="mountingtitle">Serrated Socket Bar</p>
<p id="socketbar14title" class="mountingtitle">Socket Bar</p>
<p id="socketbar22title" class="mountingtitle">Telescopic Block</p>
<p id="heliotitle" class="mountingtitle">Helio Adapter Bracket</p>
<p id="directmountnum" class="mountingnumber">Part # 7106</p>
<p id="serdirectmountnum" class="mountingnumber">Part # 8163</p>
<p id="verserdirectmountnum" class="mountingnumber">Part # 8540</p>
<p id="ttrackdirectmountnum" class="mountingnumber">Part # 8115</p>
<p id="ttrackbracketnum" class="mountingnumber">Part # 6446</p>
<p id="dttrackbracketnum" class="mountingnumber">Part # 7992</p>
<p id="90degreebracketnum" class="mountingnumber">Part # 6320</p>
<p id="squaretubenum" class="mountingnumber">Part # 6278</p>
<p id="fullringnum" class="mountingnumber">Part # 6146</p>
<p id="zeroclearancenum" class="mountingnumber">Part # 6145</p>
<p id="serratedsocketbarnum" class="mountingnumber">Part # 8511</p>
<p id="socketbar14num" class="mountingnumber"><b>14 Inch</b> Part # 6147 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>22 Inch</b> Part # 7635</p>
<p id="socketbar22num" class="mountingnumber">Part # 7107</p>
<p id="helionum" class="mountingnumber">Part # 8471</p>
<p id="directmountpar" class="mountingpar"><br />The Direct Mount Socket is used in instances where vertical bars are available to be mounted on. It offers a close and secure connection to a frame and does not require a socket bar.</p>
<p id="serdirectmountpar" class="mountingpar"><br />The Serrated Direct Mount Socket mounts to vertical bars. It offers the close connection of a Direct Mount Socket with the added serrated feature, adding another level of customization to the mounting system.</p>
<p id="verserdirectmountpar" class="mountingpar"><br />This type of Serrated Direct Mount Socket features a vertical serration. Vertical serration allows it to change degrees vertically while mounted to a vertical bar. </p>
<p id="ttrackdirectmountpar" class="mountingpar"><br />The T-Track Direct Mount Socket is useful when a single or double T-Track is present. The T-Nuts allow the socket to slide to a desired position and are then tightened to clamp to the track. </p>
<p id="ttrackbracketpar" class="mountingpar"><br />The T-Nut Bracket is useful when a single T-Track is present. The T-Nuts slide into the track and are tightened to clamp to the track. T-Nut Brackets come in pairs to remove any movement in the socket bar. </p>
<p id="dttrackbracketpar" class="mountingpar"><br />The Double T-Nut Bracket is useful when a double T-Track is present. The T-Nuts slide into the track and are tightened to clamp to the track. Double T-Nut Brackets come in pairs to remove any movement in the socket bar. </p>
<p id="90degreebracketpar" class="mountingpar"><br />The 90 Degree Bracket is a special mounting device that allows a Direct Mount Socket to mount onto a horizontal tube. It comes with two different mounting hole sizes to accomodate either 1 inch or 0.875 inch tubing. </p>
<p id="squaretubepar" class="mountingpar"><br />The Square Tube Bracket is designed to fit on 1 inch square tubing. By mounting to a square tube, the corners affectively deter the clamp from shifting. Square Tube Brackets come in pairs to remove any movement in the socket bar.</p>
<p id="fullringpar" class="mountingpar"><br />The Full Ring Bracket is intended to mount to a round, horizontal bar and is coupled with a socket bar. Full Ring Brackets come in pairs to remove any movement in the socket bar. </p>
<p id="zeroclearancepar" class="mountingpar"><br />The Zero Clearance Bracket is intended to mount to a round, horizontal bar in circumstances where the full circumference of the tube is not accessible and works in tandem with a socket bar. Zero Clearance Brackets come in pairs to remove any movement in the socket bar. </p>
<p id="serratedsocketbarpar" class="mountingpar"><br />The Serrated Socket Bar is much like other socket bars in function except for the serration. This allows the bar to mount to a chair that tilts or is on an angle while maintaining an acceptable outlet for a vertical bar.  </p>
<p id="socketbar14par" class="mountingpar"><br />Socket Bars are what bridge the gap between vertical bars and frame clamps. While being held in place by a pair of frame clamps, a Socket Bar will in turn hold a vertical bar in place. A 14 inch and 22 inch length are available to better provide custom positioning.  </p>
<p id="socketbar22par" class="mountingpar"><br />The Telescopic Block is another way to add more adjustability to your system. Used to hold a Socket Bar, the Telescopic Block allows the Socket Bar to slide in and out and can lock in place at a desired location. A pair of frame clamps is required for mounting to a wheelchair.  </p>
<p id="heliopar" class="mountingpar"><br />The Helio Adapter Bracket is the connection between the Lift and Lock System and a Helio wheelchair. This adapter clamps onto the frame of the wheelchair and provides a location for a Direct Mount Socket to be fixed to.</p>
</div>
<div style="margin-top:662px; position:absolute; margin-left:685px; overflow:visible;">
<a href="http://ideasfil.com/instructions/instructions-7106-direct-mount-socket.pdf" target="_blank"><img src="info-icon-large.png" class="mountinginstructions" id="directmountsocketinfo"/></a>
<a href="http://ideasfil.com/instructions/instructions-8163-serrated-direct-mount-socket.pdf" target="_blank"><img src="info-icon-large.png" class="mountinginstructions" id="serdirectmountsocketinfo"/></a>
<a href="http://ideasfil.com/instructions/instructions-8540-vertical-serrated-direct-mount-socket.pdf" target="_blank"><img src="info-icon-large.png" class="mountinginstructions" id="verserdirectmountsocketinfo"/></a>
<a href="http://ideasfil.com/instructions/instructions-8115-t-track-direct-mount-socket.pdf" target="_blank"><img src="info-icon-large.png" class="mountinginstructions" id="ttrackdirectmountsocketinfo"/></a>
<a href="http://ideasfil.com/instructions/instructions-6446-t-nut-brackets.pdf" target="_blank"><img src="info-icon-large.png" class="mountinginstructions" id="ttrackbracketinfo"/></a>
<a href="http://ideasfil.com/instructions/instructions-7992-double-t-nut.pdf" target="_blank"><img src="info-icon-large.png" class="mountinginstructions" id="doublettrackbracketinfo"/></a>
<a href="http://ideasfil.com/instructions/instructions-6320-90-degree-bracket.pdf" target="_blank"><img src="info-icon-large.png" class="mountinginstructions" id="90degreebracketinfo"/></a>
<a href="http://ideasfil.com/instructions/instructions-6278-square-tube.pdf" target="_blank"><img src="info-icon-large.png" class="mountinginstructions" id="squaretubeinfo"/></a>
<a href="http://ideasfil.com/instructions/instructions-6146-full-ring.pdf" target="_blank"><img src="info-icon-large.png" class="mountinginstructions" id="fullringinfo"/></a>
<a href="http://ideasfil.com/instructions/instructions-6145-zero-clearance.pdf" target="_blank"><img src="info-icon-large.png" class="mountinginstructions" id="zeroclearanceinfo"/></a>
<a href="http://ideasfil.com/instructions/instructions-6147-14inch-socekt-bar.pdf" target="_blank"><img src="info-icon-large.png" class="mountinginstructions" id="14inchsocketbarinfo"/></a>
<a href="http://ideasfil.com/instructions/instructions-8511-serrated-socket-bar.pdf" target="_blank"><img src="info-icon-large.png" class="mountinginstructions" id="serratedsocketbarinfo"/></a>
<a href="http://ideasfil.com/instructions/instructions-7635-22inch-socket-bar.pdf" target="_blank"><img src="info-icon-large.png" class="mountinginstructions" id="22inchsocketbarinfo"/></a>
<a href="http://ideasfil.com/instructions/instructions-8471-helio-adapter-bracket.pdf" target="_blank"><img src="info-icon-large.png" class="mountinginstructions" id="helioinfo"/></a>
</div>

<div onclick="buildyoursystem(this)" id="buildyoursystem" style="margin-top:660px; margin-left:750px; " class="buildyoursystemlink">Build your system <img style="height:30px; margin-left:20px; position:absolute;" src="navigation arrow.png" /></div>
</div>
</div>

<div id="sixthsection" class="everythingelse" style="height:1000px; width:1180px; opacity:0.999; background-color:#FFF;">
<div id="navigationbar4" class="menu1" style="margin-top:0px; width:1180px; position:absolute; left:50%; margin-left:-590px; "><img src="lift and lock page/menu lines.png" style="width:1180px; height:50px; position:absolute;"/>
<a class="navigation" href="#aboutscroll" ><div class="menuliftandlock" style="margin-left:0px;"><p align="center">About</p></div></a>
<a class="navigation" href="#modelsscroll" ><div class="menuliftandlock" style="margin-left:236px;"><p align="center">Models</p></div></a>
<a class="navigation" href="#specificationsscroll" ><div class="menuliftandlock" style="margin-left:472px;"><p align="center">Specifications</p></div></a>
<a class="navigation" href="#mountingscroll" ><div class="menuliftandlock" style="margin-left:708px;"><p align="center">Mounting Options</p></div></a>
<a class="navigation" href="#customizescroll"><div id="customizetab" class="menuliftandlock" style="margin-left:944px;"><p align="center">Customize</p></div></a>
</div>

<div id="specificationsscroll" class="menu1" style="margin-top:-64.5px; width:1180px; position:absolute; left:50%; margin-left:-590px; "></div>
<div id="specifications" style="position:absolute; margin-top:100px; width:1180px; left:50%; margin-left:-590px;">


<table style="position:absolute; margin-top:100px; left:50%; margin-left:-590px; width:1180px;" >
<col width="236px" />
<col width="236px" />
<col width="236px" />
<col width="236px" />
<col width="236px" />

<tr style="height:240px;">
<td><img style="height:300px; margin-left:-50px; position:inherit;" src="lift and lock page/articulating-line-drawing.png" alt="Occupation Therapy Articulating Arm"/></td>
<td><img style="height:300px; margin-left:-55px; position:inherit;" src="lift and lock page/articulating-riser-line-drawing.png" alt="Occupation Therapy Articulating Arm" /></td>
<td><img style="height:300px; margin-left:-60px; position:inherit;" src="lift and lock page/m2-assembly-line-drawing.png" alt="Occupation Therapy M2 Arm" /></td>
<td><img style="height:300px; margin-left:-65px; position:inherit;" src="lift and lock page/m2-assembly-line-drawing.png" alt="Occupation Therapy M2X Arm"/></td>
<td><img style="height:300px; margin-left:-70px; position:inherit;" src="lift and lock page/m2-assembly-line-drawing.png" alt="Occupation Therapy M2 Max Arm"/></td>
</tr>

<tr style="font-size:18px; font-weight:300;">
<td>Articulating Arm</td>
<td>Articulating Arm with Riser</td>
<td>M2</td>
<td>M2X</td>
<td>M2 Max</td>
</tr>

<tr style="font-size:14px;">
<td>Horizontal Reach: 15.875"</td>
<td>Horizontal Reach: 22.375"</td>
<td>Horizontal Reach: 17.48"</td>
<td>Horizontal Reach: 17.48"</td>
<td>Horizontal Reach: 17.48"</td>
</tr>

<tr style="font-size:14px;">
<td>Vertical Reach: 6.75"</td>
<td>Vertical Reach: 12.80"</td>
<td>Vertical Reach: 14.25"</td>
<td>Vertical Reach: 14.25"</td>
<td>Vertical Reach: 14.25"</td>
</tr>

<tr style="font-size:14px;">
<td>Weight: 2lbs. 3.3oz</td>
<td>Weight: 3lbs. 9.2oz</td>
<td>Weight: 3lbs. 5.1oz</td>
<td>Weight: 3lbs. 5.3oz</td>
<td>Weight: 3lbs. 5.5oz</td>
</tr>

<tr style="font-size:14px;">
<td></td>
<td></td>
<td>Holds: 0 to 5lbs</td>
<td>Holds: 5 to 10lbs.</td>
<td>Holds: 10 to 15lbs.</td>
</tr>

<tr style="height:220px;">
<td><img style="height:300px; margin-left:-50px; position:inherit;" src="lift and lock page/head-and-tail-line-drawing.png" alt="Occupation Therapy Articulating Arm"/></td>
<td><img style="height:300px; margin-left:-50px; position:inherit;" src="lift and lock page/head-and-tail-with-riser-line-drawing.png" alt="Occupation Therapy Articulating Arm" /></td>
<td></td>
<td></td>
<td></td>
</tr>

<tr style="font-size:18px; font-weight:300;">
<td>Head and Tail Arm</td>
<td>Head and Tail Arm with Riser</td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td>Horizontal Reach: 4.56"</td>
<td>Horizontal Reach: 11.06"</td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td>Vertical Reach: 1.25"</td>
<td>Vertical Reach: 10.94"</td>
<td></td>
<td></td>
<td></td>
</tr>

<tr style="font-size:14px;">
<td>Weight: 14.7oz</td>
<td>Weight: 2lbs. 4.7oz</td>
<td></td>
<td></td>
<td></td>
</tr>
</table>
</div>
</div>

<div id="specificationsscroll" class="footer" style="width:1180px;" >Ideas for Independent Living 2014</div>

</div>


<!-- InstanceEndEditable -->

</body>
<!-- InstanceEnd --></html>
