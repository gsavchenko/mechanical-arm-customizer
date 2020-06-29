<?php
include './Templates/PHP/header.php'
?>

<!-- InstanceBeginEditable name="EditRegion5" -->
<style>
div.menuliftandlock{
	vertical-align:central;
	text-align:center;
	height:50px;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	position:absolute;
	width:295px;
	margin-top:-2px;
}
</style>
<style>
div.modelpics{
	height:236px;
	width:236px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	vertical-align:bottom;
}
</style>
<style>
div.mountingpics{
	height:236px;
	width:236px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	vertical-align:bottom;
}
</style>
<style>
div.mountingpics2{
	height:118px;
	width:236px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	margin-top:118px;
}
</style>
<style>
div.modellabels{
	width:236px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	margin-top:160px;
}
</style>
<style>
div.mountinglabels{
	width:236px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	margin-top:100px;
}
</style>
<style>
div.mountinglabels2{
	width:236px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	margin-top:218px;
}
</style>
<style>
.armtitle{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:36px;
	display:none;
	font-weight:300;
}
</style>
<style>
.mountingtitle{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:36px;
	display:none;
}
</style>
<style>
.armnumber{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:18px;
	text-align:right;
	display:none;
}
</style>
<style>
.mountingnumber{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:18px;
	text-align:right;
	display:none;
}
</style>
<style>
p.armpar{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:18px;
	display:none;
}
</style>
<style>
.mountingpar{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:18px;
	display:none;
}
</style>
<style>
.armpics{
	height:650px;
	margin-left:-20px;
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
</style>
<style>
.navigation{
	text-decoration:none;
	color:#030303;
	
}
</style>
<style>
@media all and (max-width: 1400px){
	div.scaled{
		z-index:0;
	}
	#structure{
		z-index:100;
	}
	#secondsection{
		height:1200px;

	}
}
 </style>
 <style>
@media all and (min-width: 1400px){
	div.scaled{
		z-index:0;
	}
	#structure{
		z-index:100;
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
	$("#abouttitle").show()
	$("#modeltitle").show()
	$("#modelpic").show()
	$("#modelpar").show()
	$("#modelpar2").show()
	$("#modelfeaturette").show()
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
function serdirectmount(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$("#serdirectmounttitle").show()
	$("#serdirectmountnum").show()
	$("#serdirectmountpar").show()
	$("#serdirectmountpic").show()
}
</script>
<script>
function directmount(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$("#directmounttitle").show()
	$("#directmountnum").show()
	$("#directmountpar").show()
	$("#directmountpic").show()
}
</script>
<script>
function ttrackdirectmount(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$("#ttrackdirectmounttitle").show()
	$("#ttrackdirectmountnum").show()
	$("#ttrackdirectmountpar").show()
	$("#ttrackdirectmountpic").show()
}
</script>
<script>
function ttrackbracket(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$("#ttrackbrackettitle").show()
	$("#ttrackbracketnum").show()
	$("#ttrackbracketpar").show()
	$("#ttrackpic").show()
}
</script>
<script>
function dttrackbracket(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$("#dttrackbrackettitle").show()
	$("#dttrackbracketnum").show()
	$("#dttrackbracketpar").show()
	$("#doublettrackpic").show()
}
</script>
<script>
function squaretubebracket(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$("#squaretubetitle").show()
	$("#squaretubenum").show()
	$("#squaretubepar").show()
	$("#squaretubepic").show()
}
</script>
<script>
function fullringbracket(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$("#fullringtitle").show()
	$("#fullringnum").show()
	$("#fullringpar").show()
	$("#fullringpic").show()
}
</script>
<script>
function zeroclearance(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$("#zeroclearancetitle").show()
	$("#zeroclearancenum").show()
	$("#zeroclearancepar").show()
	$("#zeroclearancepic").show()
}
</script>
<script>
function socketbar14(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$("#socketbar14title").show()
	$("#socketbar14num").show()
	$("#socketbar14par").show()
	$("#socketbar14pic").show()
}
</script>
<script>
function socketbar22(){
	$(".mountingpar").hide()
	$(".mountingftpics").hide()
	$(".mountingnumber").hide()
	$(".mountingtitle").hide()
	$("#socketbar22title").show()
	$("#socketbar22num").show()
	$("#socketbar22par").show()
	$("#socketbar22pic").show()
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

<meta name="description" content="The Tube and Socket System is a great way to hold devices like phones, tablets, switches or joysticks. Customize your system to best suit your needs." />
<!-- InstanceEndEditable -->

<div class="scaled" style="position:absolute; width:1180px; height:100%; left:50%; margin-left:-590px;">
<div id="opener" class="scaled" style="height:100%; width:1180px;">
<div class="everythingelse">
<h1><div id="liftandlocktitle" style="top:250px; left:50%; margin-right:50px; margin-left: -100px; text-align:right;" class="bigtitles" >Tube and<br />Socket</div></h1>
<div style="position:absolute; overflow:hidden; top:171px; left:50%; margin-left:-590px; overflow:hidden;z-index:-20;"><img src="tube and socket/tube-and-socket-independent-living-wheelchair-accessories.png" style="height:1000px; margin-left:-150px;" alt="Head Switch Mounting Devices"/></div>
</div>
</div>



<div id="secondsection" class="everythingelse" style="width:1180px; opacity:0.999; margin-top:800px;">
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
<img id="aboutpic" style="margin-left:200px; margin-top:-130px; height:750px;" src="tube and socket/buddy-button-mounting-devices.png" alt="Access Mounting for Buttons and Switches"/>

</div>
<div style="position:absolute; margin-left:75px; width:630px; margin-top:52.25%; overflow:hidden;">
<p id="abouttitle" class="armtitle">What Does it Do?</p>

<p id="aboutpar"  style="font-size:18px; font-weight:thin; font-family:'Roboto Lt', Roboto, sans-serif;">The Tube and Socket System is a customizable way to mount smaller devices and accessories.<br /><br />The devices being mounted, which can range anywhere from access buttons to cell phones, are given a mounting plate which fits into a socket. The Tube and Socket System is then used to position the device where it best suits the user. <br />
<br />This system works great for mounting these devices to wheelchairs, beds or tables. </p>



</div>

</div>
</div>



<div class="everythingelse" id="thirdsection" style="height:1035px; width:1180px; background-color:#FFF; opacity:0.999;">
<div id="navigationbar" class="menu1" style="margin-top:0px; width:1180px; position:absolute; left:50%; margin-left:-590px; "><img src="tube and socket/menu lines.png" style="width:1180px; height:50px; position:absolute;"/>
<a class="navigation" href="#aboutscroll" ><div class="menuliftandlock" style="margin-left:0px;"><p align="center">About</p></div></a>
<a class="navigation" href="#modelsscroll" ><div class="menuliftandlock" style="margin-left:236px;"><p align="center">Models</p></div></a>
<a class="navigation" href="#specificationsscroll" ><div class="menuliftandlock" style="margin-left:472px;"><p align="center">Specifications</p></div></a>
<a class="navigation" href="#mountingscroll" ><div class="menuliftandlock" style="margin-left:708px;"><p align="center">Mounting Options</p></div></a>
<a class="navigation" href="#customizescroll"><div id="customizetab" class="menuliftandlock" style="margin-left:944px;"><p align="center">Customize</p></div></a>
</div>

<div id="modelsscroll" class="menu1" style="top:-65px; width:1180px; left:50%; margin-left:-590px; "></div>
<div id="models" style="position:absolute; margin-top:-60px; width:1180px; left:50%; margin-left:-590px;">
<div id="modelfeaturette" style="position:absolute; margin-top:200px; height:500px; width:600px; overflow:hidden;">
<img id="modelpic" class="armpics" src="tube and socket/tube-and-socket-models-independent-living-wheelchair-accessories.png" style="margin-left:-110px; margin-top:-200px;" alt="Head Switch Mounting Devices"/>

</div>
<div style="position:absolute; margin-left:635px; width:555px; margin-top:200px; overflow:hidden;">
<h2><p id="modeltitle" class="armtitle">Models</p></h2>

<p id="modelpar" class="armpar"><br />Tube and Sockets come in varying lengths in order to wrap around obstacles that might otherwise prevent users from utilizing a device. Specifically, we offer a Tube and Socket in 4, 6, 8, 10 and 12 inch lengths. Together, these Tube and Sockets can be used for mounting head switches, phones, tablets and other devices onto a wheelchair, allowing a user to control their switches or devices.</p>
<p id="modelpar2" class="armpar" style="margin-left:50px; line-height:150%;"><br />4 inch  Part # 8542<br />6 inch  Part # 7174<br />8 inch  Part # 7173<br />10 inch  Part # 6155<br />12 inch  Part # 8165</p>

</div>
</div>
</div>


<div id="fourthsection" class="everythingelse" style="width:1180px; height:1035px; background-color:#FFF; opacity:0.999;">
<div id="navigationbar2" class="menu1" style="margin-top:0px; width:1180px; position:absolute; left:50%; margin-left:-590px; "><img src="tube and socket/menu lines.png" style="width:1180px; height:50px; position:absolute;"/>
<a class="navigation" href="#aboutscroll" ><div class="menuliftandlock" style="margin-left:0px;"><p align="center">About</p></div></a>
<a class="navigation" href="#modelsscroll" ><div class="menuliftandlock" style="margin-left:236px;"><p align="center">Models</p></div></a>
<a class="navigation" href="#specificationsscroll" ><div class="menuliftandlock" style="margin-left:472px;"><p align="center">Specifications</p></div></a>
<a class="navigation" href="#mountingscroll" ><div class="menuliftandlock" style="margin-left:708px;"><p align="center">Mounting Options</p></div></a>
<a class="navigation" href="#customizescroll"><div id="customizetab" class="menuliftandlock" style="margin-left:944px;"><p align="center">Customize</p></div></a>
</div>


<div id="customizescroll" class="menu1" style="margin-top:-65px; width:1180px; position:absolute; left:50%; margin-left:-590px; "></div>
<div id="customize" style="position:absolute; margin-top:-70px; width:1180px; left:50%; margin-left:-590px; background-color:#959595;">
<div id="customizefeaturette" style="position:absolute; margin-top:200px; height:800px; width:600px; overflow:hidden;">
<img id="customizepic" class="armpics" style="margin-left:-200px; height:800px;" src="tube and socket/custom-tube-socket-disability-assistance-device-mounting.png" alt="Wheelchair Mounting Arms"/>

</div>
<div style="position:absolute; margin-left:625px; width:555px; margin-top:200px; overflow:hidden;">
<h2><p id="customizetitle" class="armtitle">Customize Your System</p></h2>

<p id="customizepar" class="armpar"><br />The Tube and Socket system is designed be flexible. The sockets cylindrical clamping design creates a pivoting motion to find a suitable location for the mounted device. This pivot action allows the Tube and Sockets to wrap around things like head rests and reach the user easily. It also personalizes the system for each user. The sockets can pivot based on their user's needs to approach them from almost any angle.<br /><br />If a user is only capable of moving in a certain direction with limited range, the Tube and Socket system will let a device come within a manageable distance.</p>

</div>
</div>
</div>


<div id="fifthsection" class="everythingelse" style="height:1035px; width:1180px; background-color:#FFF; opacity:0.999;">
<div id="navigationbar3" class="menu1" style="margin-top:0px; width:1180px; position:absolute; left:50%; margin-left:-590px; "><img src="tube and socket/menu lines.png" style="width:1180px; height:50px; position:absolute;"/>
<a class="navigation" href="#aboutscroll" ><div class="menuliftandlock" style="margin-left:0px;"><p align="center">About</p></div></a>
<a class="navigation" href="#modelsscroll" ><div class="menuliftandlock" style="margin-left:236px;"><p align="center">Models</p></div></a>
<a class="navigation" href="#specificationsscroll" ><div class="menuliftandlock" style="margin-left:472px;"><p align="center">Specifications</p></div></a>
<a class="navigation" href="#mountingscroll" ><div class="menuliftandlock" style="margin-left:708px;"><p align="center">Mounting Options</p></div></a>
<a class="navigation" href="#customizescroll"><div id="customizetab" class="menuliftandlock" style="margin-left:944px;"><p align="center">Customize</p></div></a>
</div>


<div id="mountingscroll" class="menu1" style="margin-top:-65px; width:1180px; position:absolute; left:50%; margin-left:-590px; "></div>
<div id="mountingoptions" style="position:absolute; margin-top:70px; width:1180px; left:50%; margin-left:-590px;">
<div onclick="directmount(this)"class="mountingpics" id="directmout" style="margin-left:0px; cursor:pointer;"><img style="height:155.25px; margin-top:-10px; margin-left:0px;" src="tube and socket/tube-and-socket-pivot-independent-living-wheelchair-accessories.png" alt="Wheelchair access device mounting"/></div>
<div onclick="serdirectmount(this)" class="mountingpics" id="serdirectmount" style="margin-left:236px; cursor:pointer;"><img style="height:155.25px; margin-top:-10px; margin-left:-10px;" src="tube and socket/tube-and-socket-flange-mount-only-independent-living-wheelchair-accessories.png" alt="Wheelchair access device mounting" /></div>
<div onclick="ttrackdirectmount(this)" class="mountingpics" id="ttrackdirect" style="margin-left:472px; cursor:pointer;"><img style="height:142.85px; margin-top:-10px; margin-left:-20px;" src="tube and socket/tube-and-socket-only-independent-living-wheelchair-accessories.png" alt="Wheelchair access device mounting" /></div>
<div onclick="ttrackbracket(this)"class="mountingpics" id="ttrackbracket" style="margin-left:708px; margin-top:-30px; cursor:pointer;"><img style="height:142.85px; margin-left:-10px;" src="tube and socket/whitmyer-single-socket-only-independent-living-wheelchair-accessories.png" alt="Wheelchair access device mounting" /></div>
<div onclick="dttrackbracket(this)"class="mountingpics" id="dttrackbracket" style="margin-left:944px; cursor:pointer;"><img style="height:118px; margin-left:0px; margin-top:0px;" src="tube and socket/tube-and-socket-universal-only-independent-living-wheelchair-accessories.png" alt="Wheelchair access device mounting" /></div>
<div onclick="squaretubebracket(this)" class="mountingpics2" id="articulating" style="margin-left:0px; cursor:pointer;"><img style="height:118px; margin-left:10px; margin-top:0px;" src="tube and socket/tube-socket-mounting-adaptors-cane-clamps.png" alt="Wheelchair access device mounting" /></div>
<div onclick="fullringbracket(this)" class="mountingpics2" id="articulatingriser" style="margin-left:236px; cursor:pointer;"><img style="height:155.25px; margin-top:-30px; margin-left:10px;" src="tube and socket/tube-socket-mounting-adaptors-switch-plate-independent-living-powerchair-mounting.png" alt="Wheelchair access device mounting" /></div>
<div onclick="zeroclearance(this)" class="mountingpics2" id="m2" style="margin-left:472px; cursor:pointer;"><img style="height:175px; margin-top:-30px; margin-left:-5px;" src="tube and socket/tube-socket-mounting-adaptors-ball-joint-pivot-independent-living-powerchair-mounting.png" alt="Wheelchair access device mounting" /></div>
<div onclick="socketbar14(this)" class="mountingpics2" id="m2x" style="margin-left:708px; cursor:pointer;"><img style="height:120px; margin-top:-3px; margin-left:-15px;" src="tube and socket/tube-socket-mounting-adaptors-whitmyer-assembly.png" alt="Wheelchair access device mounting" /></div>


<div onclick="directmount(this)"class="mountinglabels" style="margin-left:0px;">Pivot Base</div>
<div onclick="serdirectmount(this)" class="mountinglabels" style="margin-left:236px;">Tube Flange Mount</div>
<div onclick="ttrackdirectmount(this)" class="mountinglabels" style="margin-left:472px;">Socket Only</div>
<div onclick="ttrackbracket(this)" class="mountinglabels" style="margin-left:708px;">Whitmyer Socket Only</div>
<div onclick="dttrackbracket(this)" class="mountinglabels" style="margin-left:944px;">Universal Switch Mount</div>
<div onclick="squaretubebracket(this)" class="mountinglabels2" style="margin-left:0px;">Cane Clamps</div>
<div onclick="fullringbracket(this)" class="mountinglabels2" style="margin-left:236px;">Switch Plate</div>
<div onclick="zeroclearance(this)" class="mountinglabels2" style="margin-left:472px;">Tube and Socket Ball Joint</div>
<div onclick="socketbar14(this)" class="mountinglabels2" style="margin-left:708px;">Whitmyer Assembly</div>
<div id="mountingfeaturette" style="position:absolute; margin-top:285px; height:500px; width:600px; overflow:hidden;">

<img id="directmountpic" class="mountingftpics" style="height:615px; margin-left:-130px;" src="tube and socket/tube-and-socket-pivot-joint-independent-living-wheelchair-accessories.png" alt="Head Switch Mounting Devices"/>
<img id="serdirectmountpic" class="mountingftpics" src="tube and socket/tube-and-socket-flange-mount-independent-living-wheelchair-accessories.png" alt="Head Switch Mounting Devices"/>
<img id="ttrackdirectmountpic" class="mountingftpics" src="tube and socket/socket-only-together-independent-living-wheelchair-accessories.png" alt="Head Switch Mounting Devices"/>
<img id="ttrackpic" class="mountingftpics" src="tube and socket/whitmyer-socket-only-independent-living-wheelchair-accessories.png" alt="Head Switch Mounting Devices"/>
<img id="doublettrackpic" class="mountingftpics" src="tube and socket/tube-and-socket-universal-mount-independent-living-wheelchair-accessories.png" alt="Head Switch Mounting Devices"/>
<img id="squaretubepic" class="mountingftpics" src="tube and socket/head-switch-adapters-cane-clamps-wheelchair-mounting-devices.png" alt="Head Switch Mounting Devices"/>
<img id="fullringpic" class="mountingftpics" src="tube and socket/head-switch-adapters-switch-plate-wheelchair-mounting-devices.png" alt="Head Switch Mounting Devices"/>
<img id="zeroclearancepic" class="mountingftpics" src="tube and socket/head-switch-adapters-ball-joint-pivot-wheelchair-mounting-devices.png" alt="Head Switch Mounting Devices"/>
<img id="socketbar14pic" class="mountingftpics" style="margin-left:-130px; margin-top:-20px; height:640px;" src="tube and socket/head-switch-adapters-whitmyer-assembly-wheelchair-mounting-devices.png" alt="Head Switch Mounting Devices"/>

</div>
<div id="featurettetitle" style="position:absolute; margin-left:625px; width:555px; margin-top:285px; overflow:hidden;">
<p id="directmounttitle" class="mountingtitle">Pivot Base</p>
<p id="serdirectmounttitle" class="mountingtitle">Tube Flange Mount</p>
<p id="ttrackdirectmounttitle" class="mountingtitle">Socket Only</p>
<p id="ttrackbrackettitle" class="mountingtitle">Whitmyer Socket Only</p>
<p id="dttrackbrackettitle" class="mountingtitle">Universal Switch Mount</p>
<p id="squaretubetitle" class="mountingtitle">Cane Clamps</p>
<p id="fullringtitle" class="mountingtitle">Switch Plate</p>
<p id="zeroclearancetitle" class="mountingtitle">Tube and Socket Ball Joint</p>
<p id="socketbar14title" class="mountingtitle">Whitmyer Assembly</p>

<p id="directmountnum" class="mountingnumber">Part # 7584</p>
<p id="serdirectmountnum" class="mountingnumber">Part # 7747</p>
<p id="ttrackdirectmountnum" class="mountingnumber">Part # 7582</p>
<p id="ttrackbracketnum" class="mountingnumber">Part # 8083</p>
<p id="dttrackbracketnum" class="mountingnumber">Part # 8116</p>
<p id="squaretubenum" class="mountingnumber">Part # 7754</p>
<p id="fullringnum" class="mountingnumber">Part # 7583</p>
<p id="zeroclearancenum" class="mountingnumber">Part # N/A</p>
<p id="socketbar14num" class="mountingnumber">Part # N/A</p>

<p id="directmountpar" class="mountingpar"><br />The Pivot Base is a mounting device that allows our Tube and Socket system to mount to a wheelchair or power chair. What is unique about this mounting device is its capability to fix your system at more unconventional angles to meet your needs better.</p>
<p id="serdirectmountpar" class="mountingpar"><br />The Tube Flange Mount is our standard mounting device for the Tube and Socket system. It holds a Tube and Socket or Socket Only at a 90 degree angle to the head rest it is mounted to. Tightening the lateral bolt clamps your system into place.</p>
<p id="ttrackdirectmountpar" class="mountingpar"><br />The Socket Only is a useful accessory for the Tube and Socket System. Adding one between two tubes gives it the ability to turn on an alternative axis. It is also suitable for instances where the length of a Tube and Socket is not desirable. </p>
<p id="ttrackbracketpar" class="mountingpar"><br />Similar to the Socket Only, the Whitmyer Socket Only can afford you the opportunity to make tighter corners with your Tube and Socket system. As the name would state, it is intended for mounting to a Whitmyer. </p>
<p id="dttrackbracketpar" class="mountingpar"><br />The Universal Switch Mount is a clamping device that provides an outlet for a Tube and Socket. It mounts to the chair by clamping to the wheelchair's head rest and then a Tube and Socket is fixed into the main hole.  </p>
<p id="squaretubepar" class="mountingpar"><br />Cane Clamps are a multi-purpose bracket for attaching a Tube and Socket to a wheelchair or power chair. The two aluminum jaws come with a bushing for each hole. When mounting your Tube and Socket system, the Cane Clamps will fit around the tubing of a wheelchair and hold one of the bushings in the other hole. Your Tube and Socket will them fit into the bushing. </p>
<p id="fullringpar" class="mountingpar"><br />The Switch Plate finds its use when mounting a button, switch or joystick. The plate screws to the device and fits into the socket end of a Tube and Socket. From there, your device can easily be locked in place or removed. The Switch Plate comes with a pre-drilled hole pattern that accepts a <i>Specs Switch</i> or a <i>Buddy Button.</i> </p>
<p id="zeroclearancepar" class="mountingpar"><br />The Universal Switch Mount is a clamping device that provides an outlet for a Tube and Socket. It mounts to the chair by clamping to the wheelchair's head rest and then a Tube and Socket is fixed into the main hole.  </p>
<p id="socketbar14par" class="mountingpar"><br />The Universal Switch Mount is a clamping device that provides an outlet for a Tube and Socket. It mounts to the chair by clamping to the wheelchair's head rest and then a Tube and Socket is fixed into the main hole.  </p>


</div>
<div onclick="headswitches(this)" id="buildyoursystem" style="margin-top:660px; position:absolute; margin-left:750px; font-family:'Roboto Lt', 'Roboto', 'sans-serif'; font-size:24px; width:200px; height:50px; cursor:pointer;">Head Switches <img style="height:30px; margin-left:20px; position:absolute;" src="navigation arrow.png" /></div>
</div>
</div>

<div id="sixthsection" class="everythingelse" style="height:1035px; width:1180px; background-color:#FFF; opacity:0.999;">
<div id="navigationbar4" class="menu1" style="margin-top:0px; width:1180px; position:absolute; left:50%; margin-left:-590px; "><img src="tube and socket/menu lines.png" style="width:1180px; height:50px; position:absolute;"/>
<a class="navigation" href="#aboutscroll" ><div class="menuliftandlock" style="margin-left:0px;"><p align="center">About</p></div></a>
<a class="navigation" href="#modelsscroll" ><div class="menuliftandlock" style="margin-left:236px;"><p align="center">Models</p></div></a>
<a class="navigation" href="#specificationsscroll" ><div class="menuliftandlock" style="margin-left:472px;"><p align="center">Specifications</p></div></a>
<a class="navigation" href="#mountingscroll" ><div class="menuliftandlock" style="margin-left:708px;"><p align="center">Mounting Options</p></div></a>
<a class="navigation" href="#customizescroll"><div id="customizetab" class="menuliftandlock" style="margin-left:944px;"><p align="center">Customize</p></div></a>
</div>

<div id="specificationsscroll" class="menu1" style="margin-top:-65px; width:1180px; position:absolute; left:50%; margin-left:-590px; "></div>
<div id="specifications" style="position:absolute; margin-top:100px; width:1180px; left:50%; margin-left:-590px;">
<div id="customizefeaturette" style="position:absolute; margin-top:70px; width:600px;">
<img id="tubeandsocketspec" src="tube and socket/tube-and-socket-technical-drawing2-independent-living-wheelchair-accessories.png" style="height:750px; margin-top:-50px; margin-left:50px" alt="Rolling Floor Stand Specifications"/>

</div>
<div class="modellabels" style="margin-left:472px; margin-top:20px;"><p style="font-size:18px; text-align:left; font-size:22px;">Tube and Sockets</p><p style=" line-height:200%; text-align:left;">Length: 4 Inches<br />Tube Diameter: 0.50 Inches<br />Weight: 1.52 oz<br /><br />Length: 6 Inches<br />Tube Diameter: 0.50 Inches<br />Weight: 1.78 oz<br /><br />Length: 8 Inches<br />Tube Diameter: 0.50 Inches<br />Weight: 2.04 oz<br /><br />Length: 10 Inches<br />Tube Diameter: 0.50 Inches<br />Weight: 2.30 oz<br /><br />Length: 12 Inches<br />Tube Diameter: 0.50 Inches<br />Weight: 2.56 oz</p></div>

</div>
</div>


<div id="specificationsscroll" class="footer" style="top:4500px; ">Ideas for Independent Living 2014</div>
</div>


</div>
<!-- InstanceEndEditable -->

</body>
<!-- InstanceEnd --></html>
