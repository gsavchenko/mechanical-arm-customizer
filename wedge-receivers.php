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
	width:393.33px;
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
	height:128px;
	width:236px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	vertical-align:bottom;
	overflow:hidden; 
	cursor:pointer;

}
</style>
<style>
div.mountingpics2{
	height:128px;
	width:236px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	margin-top:138px;
	z-index:1;
	overflow:hidden; 
	cursor:pointer;
}
</style>
<style>
div.modellabels{
	width:168.57px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	margin-top:200px;
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
	margin-top:238px;
	z-index:1;
}
</style>
<style>
.armtitle{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:36px;
	font-weight:300;
	display:none;
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
.armpar{
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
	margin-left:-150px;
	margin-top:-60px;
	display:none;	
	z-index:-10;
}
</style>
<style>
.mountingftpics{
	height:650px;
	margin-left:-20px;
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
	#liftandlocktitle{
		margin-left:-610px;
		top:80px;
		transform:scale(0.8);
		-webkit-transform:scale(0.8);
		-moz-transform:scale(0.8);
		-ms-transform:scale(0.8);
	}
	#wedgeopener{
		margin-left:20px;
		top:120px;
		transform:scale(0.8);
		-webkit-transform:scale(0.8);
		-moz-transform:scale(0.8);
		-ms-transform:scale(0.8);
	}
}
 </style>
 <style>
@media all and (min-width: 1400px){
	#liftandlocktitle{
		margin-left:-610px;
		top:120px; 
	}
	#wedgeopener{
		margin-left:20px;
		top:171px;
	}
}
 </style>

<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->
<script>
$(document).ready(function(){
    $("#liftandlocktitle").fadeIn(1000)
	$("#rwrtitle").show()
	$("#rwrnum").show()
	$("#rwrpar").show()
	$("#rwrpic").show()
	/*$("#mpwrtitle").show()
	$("#mpwrnum").show()
	$("#mpwrpar").show()
	$("#mpwrpic").show()*/
	$("#customizefeaturette").show()
	$("#customizetitle").show()
	$("#customizepar").show()
	$("#customizepic").show()
	$("#directmountpic").show()
	$("#directmounttitle").show()
	$("#directmountnum").show()
	$("#directmountpar").show()
	$("#buildyoursystems").show()
	//$("#buildyoursystems").hide()
});

</script>
<script>
function rwr(){
	$(".armpar").hide()
	$(".armpics").hide()
	$(".armnumber").hide()
	$(".armtitle").hide()
	$("#buildyoursystems").show()
	$("#rwrtitle").show()
	$("#rwrnum").show()
	$("#rwrpar").show()
	$("#rwrpic").show()
	
	
}
</script>
<script>
function lwr(){
	$(".armpar").hide()
	$(".armpics").hide()
	$(".armnumber").hide()
	$(".armtitle").hide()
	$("#buildyoursystems").show()
	$("#lwrtitle").show()
	$("#lwrnum").show()
	$("#lwrpar").show()
	$("#lwrpic").show()
	
	
}
</script>
<script>
function swr(){
	$(".armpar").hide()
	$(".armpics").hide()
	$(".armnumber").hide()
	$(".armtitle").hide()
	$("#buildyoursystems").hide()
	$("#swrtitle").show()
	$("#swrnum").show()
	$("#swrpar").show()
	$("#swrpic").show()
	
	
}
</script>
<script>
function hdwr(){
	$(".armpar").hide()
	$(".armpics").hide()
	$(".armnumber").hide()
	$(".armtitle").hide()
	$("#buildyoursystems").hide()
	$("#hdwrtitle").show()
	$("#hdwrnum").show()
	$("#hdwrpar").show()
	$("#hdwrpic").show()
	
	
}
</script>
<script>
function bjwr(){
	$(".armpar").hide()
	$(".armpics").hide()
	$(".armnumber").hide()
	$(".armtitle").hide()
	$("#buildyoursystems").hide()
	$("#bjwrtitle").show()
	$("#bjwrnum").show()
	$("#bjwrpar").show()
	$("#bjwrpic").show()
	
	
}
</script>
<script>
function mpwr(){
	$(".armpar").hide()
	$(".armpics").hide()
	$(".armnumber").hide()
	$(".armtitle").hide()
	$("#buildyoursystems").hide()
	$("#mpwrtitle").show()
	$("#mpwrnum").show()
	$("#mpwrpar").show()
	$("#mpwrpic").show()
	
	
}
</script>
<script>
function tbwr(){
	$(".armpar").hide()
	$(".armpics").hide()
	$(".armnumber").hide()
	$(".armtitle").hide()
	$("#buildyoursystems").hide()
	$("#tbwrtitle").show()
	$("#tbwrnum").show()
	$("#tbwrpar").show()
	$("#tbwrpic").show()
	
	
}
</script>
<script>
function egwr(){
	$(".armpar").hide()
	$(".armpics").hide()
	$(".armnumber").hide()
	$(".armtitle").hide()
	$("#buildyoursystems").show()
	$("#egwrtitle").show()
	$("#egwrnum").show()
	$("#egwrpar").show()
	$("#egwrpic").show()
	
	
}
</script>

<script>
function (){
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
function (){
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
function (){
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
<meta name="description" content="Wedge Receivers were designed to hold all kinds of devices. The quick release pin lets you easily move your device and provides a strong, secure hold." />
<!-- InstanceEndEditable -->

<div style="position:absolute; width:1180px; height:100%; left:50%; margin-left:-590px;">
<div id="opener" style="height:100%; width:1180px;">
<div class="everythingelse"> 
<h1><div id="liftandlocktitle" style="margin-left:-550px; top:250px;" class="bigtitles" >Wedge<br />Receivers</div></h1> 
<div id="wedgeopener" style="position:absolute; overflow:hidden;z-index:-20;"><img src="lift and lock page/wedge-receivers-opener-independent-living-wheelchair-device-mounting.png" style="height:700px; left:50%; margin-left:400px; margin-top:-50px;"/></div>
</div>
</div>

<div id="secondsection" class="everythingelse" style="height:1035px; width:1180px; background-color:#FFF; opacity:0.999; margin-top:650px;">
<div id="navigationbar" class="menu1" style="margin-top:0px; width:1180px; position:absolute; left:50%; margin-left:-590px; "><img src="lift and lock page/menu lines.png" style="width:1180px; height:50px; position:absolute;"/>
<a class="navigation" href="#modelsscroll" ><div class="menuliftandlock" style="margin-left:0px;"><p align="center">Models</p></div></a>
<a class="navigation" href="#customizescroll"><div id="customizetab" class="menuliftandlock" style="margin-left:393.33px;"><p align="center">Functionality</p></div></a>
<a class="navigation" href="#specificationsscroll" ><div class="menuliftandlock" style="margin-left:786.66px;"><p align="center">Specifications</p></div></a>
</div>


<div id="modelsscroll" class="menu1" style="margin-top:-65px; width:1180px; position:absolute; left:50%; margin-left:-590px; "></div>
<div id="models" style="position:absolute; margin-top:90px; width:1180px; left:50%; margin-left:-590px;">
<!--<div onclick="rwr(this)"class="mountingpics" id="articulating" style="margin-left:0px; overflow:hidden; cursor:pointer;"><img style="margin-top:-25px; height:165px; margin-left:-60px;" src="lift and lock page/wedge-receivers-rotary-independent-living-device-mounting.png" alt="Wheelchair Disability Device Mounting Equipment"/></div>-->
<!--<div onclick="mpwr(this)"class="mountingpics" id="articulating" style="margin-left:0px; overflow:visible; cursor:pointer;"><img style="margin-top:-25px; height:160px; margin-left:-27px;" src="lift and lock page/wedge-receivers-multi-positional-independent-living-device-mounting.png" alt="Wheelchair Disability Device Mounting Equipment"/></div>-->
<div onclick="rwr(this)"class="mountingpics" id="articulating" style="margin-left:0px;"><img style="margin-top:-40px; height:165px; margin-left:-60px;" src="lift and lock page/rotatrywedge8075_2.png" alt="Wheelchair Disability Device Mounting Equipment"/></div>
<!--<div onclick="tbwr(this)" class="mountingpics" id="articulatingwithriser" style="margin-left:236px; overflow:hidden; cursor:pointer;"><img style="margin-top:-25px; height:165px;  margin-left:-75px;" src="lift and lock page/wedge-receivers-t-bar-independent-living-device-mounting.png" alt="Wheelchair Disability Device Mounting Equipment" /></div>-->
<div onclick="lwr(this)" class="mountingpics" id="articulatingwithriser" style="margin-left:236px;"><img style="margin-top:-25px; height:165px;  margin-left:-75px;" src="lift and lock page/wedge-receivers-lockable--independent-living-device-mounting.png" alt="Wheelchair Disability Device Mounting Equipment" /></div>
<!--<div onclick="swr(this)" class="mountingpics" id="m2" style="margin-left:472px; overflow:hidden; cursor:pointer;"><img style="margin-top:-25px; height:165px; margin-left:-60px;" src="lift and lock page/wedge-receivers-heavy-duty-independent-living-device-mounting.png" alt="Wheelchair Disability Device Mounting Equipment" /></div>-->
<div onclick="egwr(this)"class="mountingpics" id="egwedgereceiver" style="margin-left:472px; "><img style="margin-top:-35px; height:165px; margin-left:-60px;" src="lift and lock page/egwedge8801_backside_1.png" alt="Wheelchair Disability Device Mounting Equipment" /></div>
<!--<div onclick="egwr(this)"class="mountingpics2" id="egwedgereceiver" style="margin-left:472px; overflow:hidden; cursor:pointer;"><img style="margin-top:-35px; height:165px; margin-left:-60px;" src="lift and lock page/egwedge8801_backside_1.png" alt="Wheelchair Disability Device Mounting Equipment" /></div>-->
<!--<div onclick="hdwr(this)"class="mountingpics" id="m2x" style="margin-left:708px; overflow:hidden; cursor:pointer;"><img style="margin-top:-25px; height:165px; margin-left:-60px;" src="lift and lock page/wedge-receivers-heavy-duty-independent-living-device-mounting.png" alt="Wheelchair Disability Device Mounting Equipment" /></div>-->
<!--<div onclick="bjwr(this)"class="mountingpics" id="m2max" style="margin-left:944px; overflow:hidden; cursor:pointer;"><img style="margin-top:-25px; height:160px; margin-left:-40px;" src="lift and lock page/wedge-receivers-ball-joint-independent-living-device-mounting.png" alt="Wheelchair Disability Device Mounting Equipment" /></div>-->
<div onclick="rwr(this)"class="mountingpics2" id="m2max" style="margin-left:0px; "><img style="margin-top:-40px; height:160px; margin-left:-60px;" src="lift and lock page/rotatrywedge8075_2.png" alt="Wheelchair Disability Device Mounting Equipment" /></div>
<div onclick="mpwr(this)"class="mountingpics2" id="m2max" style="margin-left:0px; "><img style="margin-top:-25px; height:160px; margin-left:-27x;" src="lift and lock page/wedge-receivers-multi-positional-independent-living-device-mounting.png" alt="Wheelchair Disability Device Mounting Equipment"/></div>
<div onclick="tbwr(this)"class="mountingpics2" id="m2max" style="margin-left:236px; "><img style="margin-top:-25px; height:165px; margin-left:-60px;"src="lift and lock page/wedge-receivers-t-bar-independent-living-device-mounting.png" alt="Wheelchair Disability Device Mounting Equipment" /></div> 
<!--<div onclick="egwr(this)"class="mountingpics2" id="egwedgereceiver" style="margin-left:472px; overflow:hidden; cursor:pointer;"><img style="margin-top:-25px; height:165px; margin-left:-60px;" src="lift and lock page/wedge-receivers-eye-gaze-independent-living-device-mounting.png" alt="Wheelchair Disability Device Mounting Equipment" /></div>-->
<div onclick="swr(this)" class="mountingpics2" id="m2" style="margin-left:472px; "><img style="margin-top:-25px; height:165px; margin-left:-60px;" src="lift and lock page/wedge-receivers-heavy-duty-independent-living-device-mounting.png" alt="Wheelchair Disability Device Mounting Equipment" /></div>
<div onclick="hdwr(this)"class="mountingpics2" id="m2x" style="margin-left:708px; "><img style="margin-top:-25px; height:165px; margin-left:-60px;" src="lift and lock page/wedge-receivers-heavy-duty-independent-living-device-mounting.png" alt="Wheelchair Disability Device Mounting Equipment" /></div>
<div onclick="bjwr(this)"class="mountingpics2" id="m2max" style="margin-left:944px; "><img style="margin-top:-25px; height:160px; margin-left:-40px;" src="lift and lock page/wedge-receivers-ball-joint-independent-living-device-mounting.png" alt="Wheelchair Disability Device Mounting Equipment" /></div>
<!--<div onclick="egwr(this)"class="mountingpics2" id="egwedgereceiver" style="margin-left:472px; overflow:hidden; cursor:pointer;"><img style="margin-top:-35px; height:165px; margin-left:-60px;" src="lift and lock page/egwedge8801_backside_1.png" alt="Wheelchair Disability Device Mounting Equipment" /></div>-->
<div onclick="rwr(this)"class="mountinglabels" style="margin-left:0px;">Rotary Wedge Receiver</div>
<!--<div onclick="rwr(this)"class="mountinglabels" style="margin-left:0px;">Multi-Positional Wedge Receiver</div>-->
<div onclick="lwr(this)" class="mountinglabels" style="margin-left:236px;">Lockable Wedge Receiver</div>
<!--<div onclick="lwr(this)" class="mountinglabels" style="margin-left:236px;">T-Bar Wedge Receiver</div>-->
<!--<div onclick="swr(this)" class="mountinglabels" style="margin-left:472px;">Standard Wedge Receiver</div>-->
<div onclick="egwr(this)" class="mountinglabels" style="margin-left:472px;">EG Wedge Receiver</div>
<!--<div onclick="hdwr(this)" class="mountinglabels" style="margin-left:708px;">Heavy Duty Wedge Receiver</div>
<div onclick="bjwr(this)" class="mountinglabels" style="margin-left:944px;">Ball Joint Wedge Receiver</div>-->
<!--<div onclick="mpwr(this)" class="mountinglabels2" style="margin-left:0px;">Rotary Wedge Receiver</div>-->
<div onclick="mpwr(this)" class="mountinglabels2" style="margin-left:0px;">Multi-Positional Wedge Receiver</div>
<!--<div onclick="tbwr(this)" class="mountinglabels2" style="margin-left:236px;">Lockable Wedge Receiver</div>-->
<div onclick="tbwr(this)" class="mountinglabels2" style="margin-left:236px;">T-Bar Wedge Receiver</div>
<div onclick="swr(this)" class="mountinglabels2" style="margin-left:472px;">Standard Wedge Receiver</div>
<!--<div onclick="egwr(this)" class="mountinglabels2" style="margin-left:472px;">EG Wedge Receiver</div>-->
<div onclick="hdwr(this)" class="mountinglabels2" style="margin-left:708px;">Heavy Duty Wedge Receiver</div>
<div onclick="bjwr(this)" class="mountinglabels2" style="margin-left:944px;">Ball Joint Wedge Receiver</div>
<div id="modelfeaturette" style="position:absolute; margin-top:275px; height:500px; width:600px;">
<!--<img id="rwrpic" class="armpics" src="lift and lock page/wedge-receivers-models-rotary-independent-living-wheelchair-assistive.png" alt="Assisstive Devices Lift and Lock Mounting" />-->
<img id="rwrpic" class="armpics" src="lift and lock page/rotarywedge_new.png" alt="Assisstive Devices Lift and Lock Mounting" />
<img id="lwrpic" class="armpics" src="lift and lock page/wedge-receivers-models-lockable-independent-living-wheelchair-assisstive.png" alt="Assisstive Devices Lift and Lock Mounting" />
<img id="swrpic" class="armpics" src="lift and lock page/wedge-receivers-models-standard-independent-living-wheelchair-assistive.png" alt="Assisstive Devices Lift and Lock Mounting"/>
<img id="hdwrpic" class="armpics" src="lift and lock page/wedge-receivers-models-heavy-duty-independent-living-wheelchair-assistive.png" alt="Assisstive Devices Lift and Lock Mounting"/>
<img id="bjwrpic" class="armpics" src="lift and lock page/wedge-receivers-models-ball-joint-independent-living-wheelchair-assisstive.png" alt="Assisstive Devices Lift and Lock Mounting"/>
<img id="mpwrpic" class="armpics" src="lift and lock page/wedge-receivers-models-multi-positional-independent-living-wheelchair-assistive.png" alt="Assisstive Devices Lift and Lock Mounting"/>
<img id="tbwrpic" class="armpics" src="lift and lock page/wedge-receivers-models-t-bar-independent-living-wheelchair-assisstive.png" alt="Assisstive Devices Lift and Lock Mounting"/>
<!--<img id="egwrpic" class="armpics" src="lift and lock page/egwedge8801_backside_1.png" alt="Assisstive Devices Lift and Lock Mounting"/>-->
<img id="egwrpic" class="armpics" style="margin-left:-275px;" src="lift and lock page/egwedge8801_backside_1.png" alt="Assisstive Devices Lift and Lock Mounting"/>
<!--<img id="egwrpic" class="armpics" src="lift and lock page/wedge-receivers-models-eye-gaze-independent-living-wheelchair-assisstive.png" alt="Assisstive Devices Lift and Lock Mounting"/>-->

</div>
<div id="featurettetitle" style="position:absolute; margin-left:625px; width:555px; margin-top:275px; overflow:hidden;">
<p id="rwrtitle" class="armtitle">Rotary Wedge Receiver</p>
<p id="lwrtitle" class="armtitle">Lockable Wedge Receiver</p>
<p id="swrtitle" class="armtitle">Standard Wedge Receiver</p>
<p id="hdwrtitle" class="armtitle">Heavy Duty Wedge Receiver</p>
<p id="bjwrtitle" class="armtitle">Ball Joint Wedge Receiver</p>
<p id="mpwrtitle" class="armtitle">Multi-Positional Wedge Receiver</p>
<p id="tbwrtitle" class="armtitle">T-Bar Wedge Receiver</p>
<p id="egwrtitle" class="armtitle">EG Wedge Receiver</p>
<p id="rwrnum" class="armnumber">Part # 8075</p>
<p id="lwrnum" class="armnumber">Part # 8076</p>
<p id="swrnum" class="armnumber">Part # 6523</p>
<p id="hdwrnum" class="armnumber">Part # 7530</p>
<p id="bjwrnum" class="armnumber">Part # 7782</p>
<p id="mpwrnum" class="armnumber">Part # 7580</p>
<p id="tbwrnum" class="armnumber">Part # 7485</p>
<p id="egwrnum" class="armnumber">Part # 8801</p>
<p id="rwrpar" class="armpar"><br />The Rotary Wedge Receiver is designed to conveniently hold devices like tablets or small laptops. It features a double ball attachment, which provides more range in the rotation of whatever it might be holding. Switching a tablet from portrait to landscape format can be done easily without having to remove the device. This wedge receiver is compatible with any Lift and Lock Arm.</p>
<p id="lwrpar" class="armpar"><br />The Lockable Wedge Receiver is intended to hold heavier devices like laptops or computer monitors. The mounting ball gives it a large range of positions to choose from, and then can be locked in place with the turn of a handle. This wedge receiver is compatible with all Lift and Lock arms.</p>
<p id="swrpar" class="armpar"><br />The Standard Wedge Receiver is a basic wedge receiver, meant for mounting to a horizontal bar. The wedge receiver can slide horizontally along the bar or rotate around the bar. Tightening the handle on the back locks the wedge receiver in place.<br /><br />The Standard Wedge Receiver will mount to a tube that is 0.875" in diameter. </p>
<p id="hdwrpar" class="armpar"><br />The Heavy Duty Wedge Receiver is similar to the Standard Wedge Receiver in appearance and function, but come with the added strength of anodized aluminum. This gives the Heavy Duty Wedge Receiver more durability and the ability to hold more weight.<br /><br />The Heavy Duty Wedge Receiver will mount to a tube that is 0.875" in diameter. </p>
<p id="bjwrpar" class="armpar"><br />The Ball Joint Wedge Receiver gives the user the freedom of rotation on all axes, while maintaining a sturdy attachment to a horizontal bar. The ball joint allows the device it's holding to be tilted in a way that best suits the user.<br /><br />The Ball Joint Wedge Receiver will mount to a tube that is 0.875" in diameter.</p>
<p id="mpwrpar" class="armpar"><br />The Multi-Positional Wedge Receiver is much like the Ball Joint Wedge Receiver in that it allows the user to pivot their device on all axes while never losing its connection to the horizontal bar. This wedge receiver comes with the added benefit of being able to lock the receiver's rotation in place once a desirable position is found. <br /><br />The Multi-Positional Wedge Receiver will mount to a tube that is 0.875" in diameter.</p>
<p id="tbwrpar" class="armpar"><br />The T-Bar Wedge Receiver is intended for attachment to a vertical T-bar. The wedge receiver is able to rotate around the horizontal portion of the bar until the rear screws are tightened, locking the receiver in place. <br /><br />The T-Bar Wedge Receiver will mount to a T-Bar with 0.875" diameter tubing.</p>
<p id="egwrpar" class="armpar"><br />The EG Wedge Receiver operates much like the Rotary Wedge Receiver in that it features a double ball. Having two locking pivot points allows the Wedge Receiver to be more flexible when positioning a mounted device. What sets this Receiver apart is its heavy duty construction and heavier weight bearing capacity.This Wedge Receiver is compatible with any Lift and Lock Arm and is ideal for devices equippped with an <i>Eyegaze</i> attachment.</p>
</div>
<div onclick="buildyoursystem(this)" id="buildyoursystems" style="margin-top:650px; margin-left:750px; " class="buildyoursystemlink">Build your system <img style="height:30px; margin-left:20px; position:absolute;" src="navigation arrow.png" /></div>
</div>
</div>


<div id="thirdsection" class="everythingelse" style="width:1180px; height:1035px; background-color:#FFF; opacity:0.999;">
<div id="navigationbar2" class="menu1" style="margin-top:0px; width:1180px; position:absolute; left:50%; margin-left:-590px; "><img src="tube and socket/menu lines.png" style="width:1180px; height:50px; position:absolute;"/>
<a class="navigation" href="#modelsscroll" ><div class="menuliftandlock" style="margin-left:0px;"><p align="center">Models</p></div></a>
<a class="navigation" href="#customizescroll"><div id="customizetab" class="menuliftandlock" style="margin-left:393.33px;"><p align="center">Functionality</p></div></a>
<a class="navigation" href="#specificationsscroll" ><div class="menuliftandlock" style="margin-left:786.66px;"><p align="center">Specifications</p></div></a>
</div>


<div id="customizescroll" class="menu1" style="margin-top:-65px; width:1180px; position:absolute; left:50%; margin-left:-590px; "></div>
<div id="customize" style="position:absolute; margin-top:-70px; width:1180px; left:50%; margin-left:-590px; background-color:#959595;">
<div id="customizefeaturette" style="position:absolute; margin-top:200px; height:500px; width:600px;">
<img id="customizepic" style="margin-left:425px; margin-top:-30px; height:650px;" src="lift and lock page/wedge-receiver-functional-independent-living-wheelchair-device-mounting.png" alt="Assisstive Devices Lift and Lock Mounting"/>

</div>
<div style="position:absolute; margin-left:115px; width:555px; margin-top:200px; overflow:hidden;">
<h2><p id="customizetitle" style=" font-family:'Roboto Lt', 'Roboto', 'sans-serif'; font-size:36px; font-weight:300;">Functionality</p></h2>

<p id="customizepar" style="font-size:18px; font-family:'Roboto Lt', 'Roboto', 'sans-serif';"><br />Wedge Receivers were designed as a system to hold a wide range of devices. Each model has its own capabilities and unique features, but the basic functionality of every wedge receiver is the same. With a wedge receiver there is no need to loosen an assortment of screws every time you wish to use your device in a different setting. Rather, wedge receivers lend themselves to various settings and allow you to easily bring your devices with you. <br /><br /> Using a wedge receiver is simple. First, a wedge is screwed to the device you would like to mount. This wedge will slide into the receiver and automatically click in place. To remove your device, simply pull the aluminum pin at the back of the receiver and your device can be lifted out.</p>

</div>
</div>
</div>


<div id="fourthsection" class="everythingelse" style="height:1235px; width:1180px; opacity:0.999; background-color:#FFF;">
<div id="navigationbar3" class="menu1" style="margin-top:0px; width:1180px; position:absolute; left:50%; margin-left:-590px; "><img src="lift and lock page/menu lines.png" style="width:1180px; height:50px; position:absolute;"/>
<a class="navigation" href="#modelsscroll" ><div class="menuliftandlock" style="margin-left:0px;"><p align="center">Models</p></div></a>
<a class="navigation" href="#customizescroll"><div id="customizetab" class="menuliftandlock" style="margin-left:393.33px;"><p align="center">Functionality</p></div></a>
<a class="navigation" href="#specificationsscroll" ><div class="menuliftandlock" style="margin-left:786.66px;"><p align="center">Specifications</p></div></a>
</div>

<div id="specificationsscroll" class="menu1" style="margin-top:-64.5px; width:1180px; position:absolute; left:50%; margin-left:-590px; "></div>
<div id="specifications" style="position:absolute; margin-top:100px; width:1180px; left:50%; margin-left:-590px;">


<table style="position:absolute; margin-top:100px; left:50%; margin-left:-590px; width:1180px;">
<col width="221px" />
<col width="221px" />
<col width="246px" />
<col width="246px" />
<col width="246px" />

<tr style="height:180px;">
<td><img style="height:130px; margin-left:40px; margin-top:-100px; position:absolute;" src="lift and lock page/rotarywedge_linedrawing.png" alt="Wheelchair Mounting Device Holder"/></td> <!--src="lift and lock page/wedge-receivers-wheelchair-mounting-accessories-multi-positional.png" alt="Wheelchair Mounting Device Holder"/></td>--> <!-- src="lift and lock page/wedge-receivers-wheelchair-mounting-accessories-rotary.png" alt="Wheelchair Mounting Device Holder"/></td>-->
<td><img style="height:200px; margin-left:-20px; margin-top:-100px; position:absolute;" src="lift and lock page/wedge-receivers-wheelchair-mounting-accessories-lockable.png" alt="Wheelchair Mounting Device Holder" /></td>
<td><img style="height:130px; margin-left:20px; margin-top:-100px; position:absolute;" src="lift and lock page/egwedge_linedrawing.png" alt="Wheelchair Mounting Device Holder" /></td>
<!-- src="lift and lock page/wedge-receivers-wheelchair-mounting-accessories-lockable.png" alt="Wheelchair Mounting Device Holder" /></td>-->
<!--<td><img style="height:200px; margin-left:-10px; margin-top:-100px; position:absolute;" src="lift and lock page/wedge-receivers-wheelchair-mounting-accessories-standard.png" alt="Wheelchair Mounting Device Holder" /></td>
<td><img style="height:200px; margin-left:-10px; margin-top:-100px; position:absolute;" src="lift and lock page/wedge-receivers-wheelchair-mounting-accessories-standard.png" alt="Wheelchair Mounting Device Holder"/></td>
<td><img style="height:200px; margin-left:-10px; margin-top:-100px; position:absolute;" src="lift and lock page/wedge-receivers-wheelchair-mounting-accessories-ball-joint.png" alt="Wheelchair Mounting Device Holder"/></td>-->
</tr>

<tr style="font-size:18px; font-weight:300; vertical-align:text-top;">
<td>Rotary Wedge Receiver</td>
<td>Lockable Wedge Receiver</td>
<td>EG Wedge Receiever</td>
<td> </td>
<td> </td>
<!--<td>Multi-Positional Wedge Receiver</td>
<td>T-Bar Wedge Receiver</td>-->
<!--<td>Standard Wedge Receiver</td>
<td>Heavy Duty Wedge Receiver</td>
<td>Ball Joint Wedge Receiver</td>-->
</tr>

<tr style="font-size:14px;">
<td>Width: 3.625"</td>
<td>Width: 3.625"</td>
<td>Width: 3.75"</td>
<!--<td>Width: 3.625"</td>
<td>Width: 3.625"</td>
<td>Width: 3.625"</td>-->
</tr>

<tr style="font-size:14px;">
<td>Height: 2.5"</td>
<td>Height: 2.5"</td>
<td>Height: 2.5"</td>
<!--<td>Height: 2.5"</td>
<td>Height: 2.5"</td>
<td>Height: 2.5"</td>-->
</tr>

<tr style="font-size:14px;">
<td>Depth: 3.0"</td>
<td>Depth: 2.5"</td>
<td>Depth: 3.2"</td>
<!--<td>Depth: 3.625"</td>
<td>Depth: 2.0"</td>-->
<!--<td>Depth: 3.625"</td>
<td>Depth: 3.625"</td>
<td>Depth: 3.75"</td>-->
</tr>

<tr style="font-size:14px;">
<td>Weight: 6.5oz</td>
<td>Weight: 6.2oz</td>
<td>Weight: 7.2oz</td>
<!--<td>Weight: 1lb. 1.8oz</td>
<td>Weight: 5.8oz</td>-->
<!--<td>Weight: 9.2oz</<td>
<td>Weight: 12.7oz</td>
<td>Weight: 12.1oz</td>-->
</tr>


<tr style="height:220px;">
<td><img style="height:200px; margin-left:0px; margin-top:-100px; position:absolute;" src="lift and lock page/wedge-receivers-wheelchair-mounting-accessories-multi-positional.png" alt="Wheelchair Mounting Device Holder"/></td>
<td><img style="height:200px; margin-left:-20px; margin-top:-80px; position:absolute;"  src="lift and lock page/wedge-receivers-wheelchair-mounting-accessories-t-bar.png" alt="Wheelchair Mounting Device Holder" /></td>
<td><img style="height:200px; margin-left:-10px; margin-top:-100px; position:absolute;" src="lift and lock page/wedge-receivers-wheelchair-mounting-accessories-standard.png" alt="Wheelchair Mounting Device Holder" /></td>
<td><img style="height:200px; margin-left:-10px; margin-top:-100px; position:absolute;" src="lift and lock page/wedge-receivers-wheelchair-mounting-accessories-standard.png" alt="Wheelchair Mounting Device Holder"/></td>
<td><img style="height:200px; margin-left:-10px; margin-top:-100px; position:absolute;" src="lift and lock page/wedge-receivers-wheelchair-mounting-accessories-ball-joint.png" alt="Wheelchair Mounting Device Holder"/></td>
</tr>

<tr style="font-size:18px; font-weight:300; vertical-align:text-top;">
<!--<td>Rotary Wedge Receiver</td>
<td>Lockable Wedge Receiver</td>-->
<td>Multi-Positional Wedge Receiver</td>
<td>T-Bar Wedge Receiver</td>
<td>Standard Wedge Receiver</td>
<td>Heavy Duty Wedge Receiver</td>
<td>Ball Joint Wedge Receiver</td>
</tr>

<tr>
<td>Width: 3.625"</td>
<td>Width: 3.625"</td>
<td>Width: 3.625"</td>
<td>Width: 3.625"</td>
<td>Width: 3.625"</td>
</tr>

<tr>
<td>Height: 2.5"</td>
<td>Height: 2.5"</td>
<td>Height: 2.5"</td>
<td>Height: 2.5"</td>
<td>Height: 2.5"</td>
</tr>

<tr style="font-size:14px;">
<!--<td>Depth: 3.625"</td>
<td>Depth: 2.0"</td>-->
<td>Depth: 3.0"</td>
<td>Depth: 2.5"</td>
<td>Depth: 3.625"</td>
<td>Depth: 3.625"</td>
<td>Depth: 3.75"</td>
</tr>

<tr style="font-size:14px;">
<!--<td>Weight: 1lb. 1.8oz</td>
<td>Weight: 5.8oz</td>-->
<td>Weight: 6.5oz</td>
<td>Weight: 6.2oz</td>
<td>Weight: 9.2oz</<td>
<td>Weight: 12.7oz</td>
<td>Weight: 12.1oz</td>
</tr>
</table>
</div>
</div>


<div id="specificationsscroll" class="footer" style="top:3000px;">Ideas for Independent Living 2014</div>
</div>



</div>
<!-- InstanceEndEditable -->

</body>
<!-- InstanceEnd --></html>
