<?php
include './Templates/PHP/header.php'
?>

<!--[if lt IE 9]>
<script>
alert("You are using an outdated internet browser. Updating your browser will allow you to access more dynamic and helpful content. Please update to the latest version to have the best viewing results for this website and others like it.");
window.location.href= "http://windows.microsoft.com/en-us/internet-explorer/download-ie";

$(document).ready(function(){
$("#opener").css("height","800px")
});
</script>
<![endif]-->

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
	cursor: pointer;
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

div.navigationbar
{
	margin-top: 20px; width: 1180px; position: absolute; left: 50%; margin-left: -590px;	
}
</style>

<style>
div.hspics{
	height:236px;
	width:236px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	vertical-align:bottom;
	cursor: pointer;
}
</style>
<style>
div.hspics2{
	height:118px;
	width:236px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	margin-top:118px;
	cursor: pointer;
}
</style>

<style>
div.modellabels{
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	margin-top: 90px; 
	width: 180px;
	
}
</style>

<style>

p.labels
{
	font-size: 18px;
}

</style>
<style>
div.mountinglabels{
	width:230px;
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
div.hslabels2{
	width:236px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	margin-top:218px;
}
</style>
<style>

p.modellength
{
	line-height: 200%; text-align: left; margin-left: 30px; font-size: 14px;
}

</style>

<style>
div.hslabels{
	width:236px;
	position:absolute;
	text-align:center;
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	margin-top:100px;
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
.hstitle{
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
.hsnumber{
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
.hspar{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:18px;
	display:none;
}
</style>

<style>
.armpics{
	height:550px;
	margin-left:-120px;
	margin-top:-40px;
	display:none;	
	
}
.button1{
	display:none;
}
.button2{
	display:none;
}
.button3{
	display:none;
}
</style>
<style>
.mountingftpics{
	height:650px;
	margin-left:-140px;
	margin-top:-60px;
	display:none;	
	
}
</style>

<style>
.hsftpics{
	height:500px;
	margin-left:-70px;
	margin-top:-40px;
	display:none;	
	
}
</style>

<style>
.navigation{
	text-decoration:none;
	color:#030303;
	
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
	$("#paddleswitchfeaturette").show()
	$("#paddleswitchtitle").show()
	$("#paddleswitchpar").show()

	$(".button1").show()
	$("#directmountpic").show()
	$("#directmounttitle").show()
	$("#directmountnum").show()
	$("#directmountpar").show()
	$("#modeltitle").show()
	$("#modelpic").show()
	$("#modelpar").show()
	$("#modelpar2").show()
	$("#modelfeaturette").show()
	$("#hdhspic").show()
	$("#hdhstitle").show()
	$("#hdhspar").show()
	$("#hdhsnum").show()
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
function shdhs(){
	$(".hspar").hide()
	$(".hsftpics").hide()
	$(".hsnumber").hide()
	$(".hstitle").hide()
	$("#shdhstitle").show()
	$("#shdhsnum").show()
	$("#shdhspar").show()
	$("#shdhspic").show()
}
</script>
<script>
function hdhs(){
	$(".hspar").hide()
	$(".hsftpics").hide()
	$(".hsnumber").hide()
	$(".hstitle").hide()
	$("#hdhstitle").show()
	$("#hdhsnum").show()
	$("#hdhspar").show()
	$("#hdhspic").show()
}
</script>
<script>
function hdhs90(){
	$(".hspar").hide()
	$(".hsftpics").hide()
	$(".hsnumber").hide()
	$(".hstitle").hide()
	$("#hdhs90title").show()
	$("#hdhs90num").show()
	$("#hdhs90par").show()
	$("#hdhs90pic").show()
}
</script>
<script>
function shdhs90(){
	$(".hspar").hide()
	$(".hsftpics").hide()
	$(".hsnumber").hide()
	$(".hstitle").hide()
	$("#shdhs90title").show()
	$("#shdhs90num").show()
	$("#shdhs90par").show()
	$("#shdhs90pic").show()
}
</script>
<script>
function hdhswf(){
	$(".hspar").hide()
	$(".hsftpics").hide()
	$(".hsnumber").hide()
	$(".hstitle").hide()
	$("#hdhswftitle").show()
	$("#hdhswfnum").show()
	$("#hdhswfpar").show()
	$("#hdhswfpic").show()
}
</script>
<script>
function shdhswf(){
	$(".hspar").hide()
	$(".hsftpics").hide()
	$(".hsnumber").hide()
	$(".hstitle").hide()
	$("#shdhswftitle").show()
	$("#shdhswfnum").show()
	$("#shdhswfpar").show()
	$("#shdhswfpic").show()
}
</script>
<script>
function hdhswf90(){
	$(".hspar").hide()
	$(".hsftpics").hide()
	$(".hsnumber").hide()
	$(".hstitle").hide()
	$("#hdhswf90title").show()
	$("#hdhswf90num").show()
	$("#hdhswf90par").show()
	$("#hdhswf90pic").show()
}
</script>
<script>
function shdhswf90(){
	$(".hspar").hide()
	$(".hsftpics").hide()
	$(".hsnumber").hide()
	$(".hstitle").hide()
	$("#shdhswf90title").show()
	$("#shdhswf90num").show()
	$("#shdhswf90par").show()
	$("#shdhswf90pic").show()
}
</script>
<script>
function lths(){
	$(".hspar").hide()
	$(".hsftpics").hide()
	$(".hsnumber").hide()
	$(".hstitle").hide()
	$("#lthstitle").show()
	$("#lthsnum").show()
	$("#lthspar").show()
	$("#lthspic").show()
}
</script>
<script>
function slths(){
	$(".hspar").hide()
	$(".hsftpics").hide()
	$(".hsnumber").hide()
	$(".hstitle").hide()
	$("#slthstitle").show()
	$("#slthsnum").show()
	$("#slthspar").show()
	$("#slthspic").show()
}
</script>

<script>
function paddleone(){
	$(".button2").hide()
	$(".button3").hide()
	$(".button1").show()
}
function paddletwo(){
	$(".button3").hide()
	$(".button1").hide()
	$(".button2").show()
}
function paddlethree(){
	$(".button2").hide()
	$(".button1").hide()
	$(".button3").show()
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

<meta name="description" content="Head switches can be an important tool in utilizing a wheelchair.  A user need only move their head to control their chair or devices. " />

<div style="position: absolute; width: 1180px; height: 100%; left: 50%; margin-left: -590px;"> 
  <div id="opener" style="height: 100%; width: 1180px;"> 
    <div class="everythingelse"> <h1> 
        <div id="liftandlocktitle" style="top: 120px; margin-right: 75px; text-align: right;" class="bigtitles" >Access<br />Switches</div></h1> 
      <div style="position: absolute; overflow: hidden; top: 150px; left: 50%; margin-left: -590px; z-index: -20;"><img style="margin-top: -10px; height: 900px; margin-left: -200px;" src="tube%20and%20socket/head-switch-opener-independent-living-wheelchair-accessories.png" /> 
      </div> 
    </div> 
  </div> 
  <div id="secondsection" style="height: 1035px; width: 1180px; opacity: 0.999; background-color: rgb(255, 255, 255); margin-top:700px;" class="everythingelse"> 
    <div id="navigationbar" class="menu1 navigationbar" style="top:-50px;"><img style="width: 1180px; height: 50px; position: absolute;" src="tube%20and%20socket/menu%20lines.png" /> <a class="navigation" href="#mountingscroll"> 
        <div style="margin-left: 0px;" class="menuliftandlock"> 
          <p align="center">Models</p> 
        </div></a> <a class="navigation" href="#specificationsscroll"> 
        <div style="margin-left: 295px;" class="menuliftandlock"> 
          <p align="center">Specifications</p> 
        </div></a> <a class="navigation" href="#modelsscroll"> 
        <div style="margin-left: 590px;" class="menuliftandlock"> 
          <p align="center">Mounting Options</p> 
        </div></a> <a class="navigation" href="#customizescroll"> 
        <div id="customizetab" style="margin-left: 885px;" class="menuliftandlock"> 
          <p align="center">Functionality</p> 
        </div></a> 
    </div> 
    <div id="mountingscroll" style="top:-65px; width: 1180px; left: 50%; margin-left: -590px;" class="menu1"></div> 
    <div id="mountingoptions" class="navigationbar"> 
      <div onclick="hdhs(this)" id="directmount" style="margin-left: 0px;" class="hspics"><img alt="Wheechair Access Switch" style="height: 118px;" src="tube%20and%20socket/head-switches-hdhs-independent-living-wheelchairs-accessories.png" /> 
      </div> 
      <div onclick="shdhs(this)" id="serdirectmount" style="margin-left: 236px;" class="hspics"><img alt="Wheechair Access Switch" style="height: 118px;" src="tube%20and%20socket/head-switches-shdhs-independent-living-wheelchairs-accessories.png" /> 
      </div> 
      <div onclick="hdhs90(this)" id="ttrackdirect" style="margin-left: 472px;" class="hspics"><img alt="Wheechair Access Switch" style="height: 118px;" src="tube%20and%20socket/head-switches-hdhs90-independent-living-wheelchairs-accessories.png" /> 
      </div> 
      <div onclick="shdhs90(this)" id="ttrackbracket" style="margin-left: 708px;" class="hspics"><img alt="Wheechair Access Switch" style="height: 118px;" src="tube%20and%20socket/head-switches-shdhs90-independent-living-wheelchairs-accessories.png" /> 
      </div> 
      <div onclick="hdhswf(this)" id="dttrackbracket" style="margin-left: 944px;" class="hspics"><img alt="Wheechair Access Switch" style="height: 118px;" src="tube%20and%20socket/head-switches-hdhswf-independent-living-wheelchairs-accessories.png" /> 
      </div> 
      <div onclick="shdhswf(this)" id="articulating" style="margin-left: 0px;" class="hspics2"><img alt="Wheechair Head Switch" style="height: 118px;" src="tube%20and%20socket/head-switches-shdhswf-independent-living-wheelchairs-accessories.png" /> 
      </div> 
      <div onclick="hdhswf90(this)" id="articulatingwithriser" style="margin-left: 236px;" class="hspics2"><img alt="Wheechair Head Switch" style="height: 118px;" src="tube%20and%20socket/head-switches-hdhswf90-independent-living-wheelchairs-accessories.png" /> 
      </div> 
      <div onclick="shdhswf90(this)" id="m2" style="margin-left: 472px;" class="hspics2"><img alt="Wheechair Head Switch" style="height: 118px;" src="tube%20and%20socket/head-switches-shdhswf90-independent-living-wheelchairs-accessories.png" /> 
      </div> 
      <div onclick="lths(this)" id="m2x" style="margin-left: 708px;" class="hspics2"><img alt="Wheechair Head Switch" style="height: 118px;" src="tube%20and%20socket/head-switches-lths-independent-living-wheelchairs-accessories.png" /> 
      </div> 
      <div onclick="slths(this)" id="m2max" style="margin-left: 944px;" class="hspics2"><img alt="Wheechair Head Switch" style="height: 118px;" src="tube%20and%20socket/head-switches-slths-independent-living-wheelchairs-accessories.png" /> 
      </div> 
      <div onclick="hdhs(this)" style="margin-left: 0px;" class="hslabels">Heavy Duty Head Switch
      
      
      
      </div> 
      <div onclick="shdhs(this)" style="margin-left: 236px;" class="hslabels">Short Heavy Duty Head Switch
      
      
      
      </div> 
      <div onclick="hdhs90(this)" style="margin-left: 472px;" class="hslabels">Heavy Duty Head Switch 90°
      
      
      
      </div> 
      <div onclick="shdhs90(this)" style="margin-left: 708px;" class="hslabels">Short Heavy Duty Head Switch 90°
      
      
      
      </div> 
      <div onclick="hdhswf(this)" style="margin-left: 944px;" class="hslabels">Heavy Duty Head Switch with Flex
      
      
      
      </div> 
      <div onclick="shdhswf(this)" style="margin-left: 0px;" class="hslabels2">Short Heavy Duty Head Switch with Flex
      
      
      
      </div> 
      <div onclick="hdhswf90(this)" style="margin-left: 236px;" class="hslabels2">Heavy Duty Head Switch with Flex 90°
      
      
      
      </div> 
      <div onclick="shdhswf90(this)" style="margin-left: 472px;" class="hslabels2">Short Heavy Duty Head Switch with Flex 90°
      
      
      
      </div> 
      <div onclick="lths(this)" style="margin-left: 708px;" class="hslabels2">Light Touch Head Switch
      
      
      
      </div> 
      <div onclick="slths(this)" style="margin-left: 944px;" class="hslabels2">Short Light Touch Head Switch
      
      
      
      </div> 
      <div id="mountingfeaturette" style="position: absolute; margin-top: 285px; height: 500px; width: 600px;"> <img id="hdhspic" alt="Wheechair Head Switch" class="hsftpics" src="tube%20and%20socket/heavy-duty-head-switch-independent-living-wheelchair-accessories.png" /> <img id="shdhspic" alt="Wheechair Head Switch" class="hsftpics" src="tube%20and%20socket/short-heavy-duty-head-switch-independent-living-wheelchair-accessories.png" /> <img id="hdhs90pic" alt="Wheechair Head Switch" class="hsftpics" src="tube%20and%20socket/heavy-duty-90-head-switch-independent-living-wheelchair-accessories.png" /> <img id="shdhs90pic" alt="Wheechair Head Switch" class="hsftpics" src="tube%20and%20socket/short-heavy-duty-90-head-switch-independent-living-wheelchair-accessories.png" /> <img id="hdhswfpic" alt="Wheechair Head Switch" class="hsftpics" src="tube%20and%20socket/heavy-duty-flex-head-switch-independent-living-wheelchair-accessories.png" /> <img id="shdhswfpic" alt="Wheechair Head Switch" class="hsftpics" src="tube%20and%20socket/short-heavy-duty-flex-head-switch-independent-living-wheelchair-accessories.png" /> <img id="hdhswf90pic" alt="Wheechair Head Switch" class="hsftpics" src="tube%20and%20socket/heavy-duty-flex-90-head-switch-independent-living-wheelchair-accessories.png" /> <img id="shdhswf90pic" alt="Wheechair Head Switch" class="hsftpics" src="tube%20and%20socket/short-heavy-duty-90-head-switch-flex-independent-living-wheelchair-accessories.png" /> <img id="lthspic" alt="Wheechair Head Switch" class="hsftpics" src="tube%20and%20socket/light-touch-head-switch-independent-living-wheelchair-accessories.png" /> <img id="slthspic" alt="Wheechair Head Switch" class="hsftpics" src="tube%20and%20socket/short-light-touch-head-switch-independent-living-wheelchair-accessories.png" /> 
      </div> 
      <div id="featurettetitle" style="position: absolute; margin-left: 625px; width: 555px; margin-top: 285px; overflow: hidden;"> 
        <p id="hdhstitle" class="hstitle">Heavy Duty Head Switch</p> 
        <p id="shdhstitle" class="hstitle">Short Heavy Duty Head Switch</p> 
        <p id="hdhs90title" class="hstitle">Heavy Duty Head Switch 90°</p> 
        <p id="shdhs90title" class="hstitle">Short Heavy Duty Head Switch 90°</p> 
        <p id="hdhswftitle" class="hstitle">Heavy Duty Head Switch with Flex</p> 
        <p id="shdhswftitle" class="hstitle">Short Heavy Duty Head Switch with Flex</p> 
        <p id="hdhswf90title" class="hstitle">Heavy Duty Head Switch with Flex 90°</p> 
        <p id="shdhswf90title" class="hstitle">Short Heavy Duty Head Switch with Flex 90°</p> 
        <p id="lthstitle" class="hstitle">Light Touch Head Switch</p> 
        <p id="slthstitle" class="hstitle">Short Light Touch Head Switch</p> 
        <p id="hdhsnum" class="hsnumber">Part # 3865</p> 
        <p id="shdhsnum" class="hsnumber">Part # 5064</p> 
        <p id="hdhs90num" class="hsnumber">Part # 7526</p> 
        <p id="shdhs90num" class="hsnumber">Part # 8546</p> 
        <p id="hdhswfnum" class="hsnumber">Part # 6185</p> 
        <p id="shdhswfnum" class="hsnumber">Part # 8545</p> 
        <p id="hdhswf90num" class="hsnumber">Part # 7527</p> 
        <p id="shdhswf90num" class="hsnumber">Part # 8046</p> 
        <p id="lthsnum" class="hsnumber">Part # 6247</p> 
        <p id="slthsnum" class="hsnumber">Part # 7196</p> 
        <p id="hdhspar" class="hspar"><br />The Heavy Duty Head Switch is a basic head switch. It can be mounted to a wheelchair with the Tube and Socket system and can be used to control assistive devices with simple gestures.</p> 
        <p id="shdhspar" class="hspar"><br />The Short Heavy Duty Head Switch is similar to the Heavy Duty Head Switch in that it is a basic way to control a user's assistive devices. It can be mounted to the chair using the Tube and Socket system and is ideal for situations where extended length is not needed. </p> 
        <p id="hdhs90par" class="hspar"><br />The Heavy Duty Head Switch 90° is an easy-to-use switch that offers the 90° head. The padded platform rests parallel to the shaft of the switch and performs well for applications where the user is able to move from side to side. </p> 
        <p id="shdhs90par" class="hspar"><br />Similar to the regular Heavy Duty Head Switch 90°, this model is shortened to provide access closer to the chair. If the user's head generally remains close to where the switch might be mounted, the extended length of a regular head switch is unnecessary. </p> 
        <p id="hdhswfpar" class="hspar"><br />The flex elbow sets this model apart from basic Heavy Duty Head Switch. The functionality remains the same with the exception that the switch head is not rigid. A user can use more force when applying the switch without fear of breaking the switch or giving themselves any discomfort. </p> 
        <p id="shdhswfpar" class="hspar"><br />Adding an element of flex to a head switch allows the user to be less constrained in their use of the switch. It becomes easier for the user to apply their desired amount of pressure to the switch without having to worry about damaging the switch or causing discomfort. </p> 
        <p id="hdhswf90par" class="hspar"><br />This model head switch combines the freedom of the Heavy Duty Head Switch with Flex and the functionality of the Heavy Duty Head Switch 90°. There is a simple, flat surface for the user to press against while it is also flexible to assure comfortable usage.</p> 
        <p id="shdhswf90par" class="hspar"><br />When the user's body remains close to the mounting point of the head switch, a shorter length is desirable. In this case, flexibility and a 90° head are also available.</p> 
        <p id="lthspar" class="hspar"><br />The Light Touch Head Switch is ideal for when the range of motion or strength is more limited. This switch is more responsive to finer movements. If activating a regular switch proves too strenuous the Light Touch Head Switch could relieve much of that difficulty. </p> 
        <p id="slthspar" class="hspar"><br />The Short Light Touch Head Switch features the same switch mechanism as the regular length Light Touch Head Switch. This makes it suitable for situations where there is limited range of motion or strength, and activating a regular switch becomes difficult.  </p> 
      </div> 
      <div onclick="buildyoursystem(this)" id="buildyoursystem" style="margin-top: 660px; position: absolute; margin-left: 750px; font-family: 'Roboto Lt', Roboto, sans-serif; font-size: 24px; width: 300px; height: 50px; cursor: pointer;">Tube and Socket System <img style="height: 30px; margin-left: 20px; position: absolute;" src="navigation%20arrow.png" /> 
      </div> 
    </div> 
  </div> 
  <div id="sixthsection" style="width: 1180px; height: 1035px; opacity: 0.999; background-color: rgb(255, 255, 255);" class="everythingelse"> 
    <div id="navigationbar2" class="menu1 navigationbar"><img style="width: 1180px; height: 50px; position: absolute;" src="tube%20and%20socket/menu%20lines.png" /> <a class="navigation" href="#mountingscroll"> 
        <div style="margin-left: 0px;" class="menuliftandlock"> 
          <p align="center">Models</p> 
        </div></a> <a class="navigation" href="#specificationsscroll"> 
        <div style="margin-left: 295px;" class="menuliftandlock"> 
          <p align="center">Specifications</p> 
        </div></a> <a class="navigation" href="#modelsscroll"> 
        <div style="margin-left: 590px;" class="menuliftandlock"> 
          <p align="center">Mounting Options</p> 
        </div></a> <a class="navigation" href="#customizescroll"> 
        <div id="customizetab" style="margin-left: 885px;" class="menuliftandlock"> 
          <p align="center">Functionality</p> 
        </div></a> 
    </div> 
    <div id="paddleswitchscroll" style="margin-top: -65px; width: 1180px; position: absolute; left: 50%; margin-left: -590px;" class="menu1"></div> 
    <div id="paddleswitch" style="position: absolute; margin-top: -70px; width: 1180px; left: 50%; margin-left: -590px; background-color: rgb(149, 149, 149);"> 
      <div id="paddleswitchfeaturette" style="position: absolute; margin-top: 200px; height: 500px; width: 600px;"> <img id="paddleswitchpic" class="armpics button1" src="tube%20and%20socket/disability-access-switches-large-target-button.png" /> <img id="paddleswitchpic2" class="armpics button2" src="tube%20and%20socket/disability-access-switches-large-target-button-big-paddle.png" /> <img id="paddleswitchpic3" class="armpics button3" src="tube%20and%20socket/disability-access-switches-large-target-button-foot-activator.png" /> 
        <div style="position: absolute; top: 450px; left: 250px; height: 15px; width: 150px;"> <img onclick="paddleone(this)" style="height: 15px; position: absolute; cursor: pointer;" src="home%20page/navigation%20dot%20empty.png" /><img style="height: 15px; position: absolute; cursor: pointer;" class="button1" src="home%20page/navigation%20dot%20full%20black.png" /> <img onclick="paddletwo(this)" style="margin-left: 40px; height: 15px; position: absolute; cursor: pointer;" src="home%20page/navigation%20dot%20empty.png" /><img style="height: 15px; position: absolute; margin-left: 40px; cursor: pointer;" class="button2" src="home%20page/navigation%20dot%20full%20black.png" /> <img onclick="paddlethree(this)" style="margin-left: 80px; height: 15px; position: absolute; cursor: pointer;" src="home%20page/navigation%20dot%20empty.png" /><img style="margin-left: 80px; height: 15px; position: absolute; cursor: pointer;" class="button3" src="home%20page/navigation%20dot%20full%20black.png" /> 
        </div> 
      </div> 
      <div style="position: absolute; margin-left: 625px; width: 555px; margin-top: 200px; overflow: hidden;"> <h2> 
          <p id="paddleswitchtitle" class="armtitle">Target Switch</p></h2> 
        <p id="paddleswitchpar" class="armpar"><br />The Target Switch is an easy-to-use large target switch that can be mounted in various situations. Its primary function is to provide a large contact point for switch activation. This allows individuals who might have trouble pressing a smaller sized button to activate the button with ease.<br /><br /> The face paddles come in a number of different shapes and sizes, depending on what the user feels more comfortable and capable with. It can be activated using a simple gesture of the hand, foot or head applying pressure to the paddle.
 </p> 
      </div> 
    </div> 
  </div> 
  <div id="thirdsection" style="width: 1180px; height: 1035px; opacity: 0.999; background-color: rgb(255, 255, 255);" class="everythingelse"> 
    <div id="navigationbar2" style="margin-top: 10px;" class="menu1 navigationbar"><img style="width: 1180px; height: 50px; position: absolute;" src="tube%20and%20socket/menu%20lines.png" /> <a class="navigation" href="#mountingscroll"> 
        <div style="margin-left: 0px;" class="menuliftandlock"> 
          <p align="center">Models</p> 
        </div></a> <a class="navigation" href="#specificationsscroll"> 
        <div style="margin-left: 295px;" class="menuliftandlock"> 
          <p align="center">Specifications</p> 
        </div></a> <a class="navigation" href="#modelsscroll"> 
        <div style="margin-left: 590px;" class="menuliftandlock"> 
          <p align="center">Mounting Options</p> 
        </div></a> <a class="navigation" href="#customizescroll"> 
        <div id="customizetab" style="margin-left: 885px;" class="menuliftandlock"> 
          <p align="center">Functionality</p> 
        </div></a> 
    </div> 
    <div id="customizescroll" style="margin-top: -65px; width: 1180px; position: absolute; left: 50%; margin-left: -590px;" class="menu1"></div> 
    <div id="customize" style="position: absolute; margin-top: -70px; width: 1180px; left: 50%; margin-left: -590px; background-color: rgb(149, 149, 149);"> 
      <div id="customizefeaturette" style="position: absolute; margin-top: 200px; height: 500px; width: 600px; margin-left:-30px;"> <img id="customizepic" class="armpics" src="tube%20and%20socket/functionality-head-switch-independent-living-wheelchair-accessories.png" /> 
      </div> 
      <div style="position: absolute; margin-left: 625px; width: 555px; margin-top: 200px; overflow: hidden;"> <h2> 
          <p id="customizetitle" class="armtitle">Functionality</p></h2> 
        <p id="customizepar" class="armpar" style="display:block;">Access Switches are used to control technology in place of a mouse&nbsp;or joystick. This allows a user to manipulate the device hands&nbsp;free if necessary, using only their alternative movements to control the switch. To activate the switch, the user must simply apply pressure to the switch with whatever movement they feel most comfortable with. Then, like any switch or button under pressure, it will in turn send a signal to the device it is attached to. That signal might tell the device to move the mouse cursor, steer the power chair left or right, or even say something. This gives the user the opportunity to be more independent, using devices without the assistance of others. <br /><br />Installation of a head switch is simple. It can be mounted to a power chair with the Tube and Socket system, which will hold the switch firmly in place. The switch can then be connected to a device using a 3.5mm jack.
 </p>
      </div> 
    </div> 
  </div> 
  <div id="fourthsection" style="height: 1035px; width: 1180px; opacity: 0.999; background-color: rgb(255, 255, 255);" class="everythingelse"> 
    <div id="navigationbar3" class="menu1 navigationbar"><img style="width: 1180px; height: 50px; position: absolute;" src="tube%20and%20socket/menu%20lines.png" /> <a class="navigation" href="#mountingscroll"> 
        <div style="margin-left: 0px;" class="menuliftandlock"> 
          <p align="center">Models</p> 
        </div></a> <a class="navigation" href="#specificationsscroll"> 
        <div style="margin-left: 295px;" class="menuliftandlock"> 
          <p align="center">Specifications</p> 
        </div></a> <a class="navigation" href="#modelsscroll"> 
        <div style="margin-left: 590px;" class="menuliftandlock"> 
          <p align="center">Mounting Options</p> 
        </div></a> <a class="navigation" href="#customizescroll"> 
        <div id="customizetab" style="margin-left: 885px;" class="menuliftandlock"> 
          <p align="center">Functionality</p> 
        </div></a> 
    </div> 
    <div id="modelsscroll" style="margin-top: -65px; width: 1180px; position: absolute; left: 50%; margin-left: -590px;" class="menu1"></div> 
    <div id="mountingoptions" style="position: absolute; margin-top: 70px; width: 1180px; left: 50%; margin-left: -590px;"> 
      
	  <div onclick="directmount(this)" id="directmout" style="margin-left: 0px;" class="mountingpics hspics"><img alt="Accessibility Device Mounting Bracket" style="height: 118px;" src="tube%20and%20socket/tube-socket-mounting-adaptors-single-sided-independent-living-powerchair-mounting.png" /> 
      </div> 
      <div onclick="serdirectmount(this)" id="serdirectmount" style="margin-left: 236px;" class="mountingpics hspics"><img alt="Accessibility Device Mounting Bracket" style="height: 118px;" src="tube%20and%20socket/tube-socket-mounting-adaptors-double-sided-independent-living-powerchair-mounting.png" /> 
      </div> 
      <div onclick="ttrackdirectmount(this)" id="ttrackdirect" style="margin-left: 472px;" class="mountingpics hspics"><img alt="Accessibility Device Mounting Bracket" style="height: 118px;" src="tube%20and%20socket/tube-socket-mounting-adaptors-whitmyer-to-square-independent-living-powerchair-mounting.png" /> 
      </div> 
      <div onclick="ttrackbracket(this)" id="ttrackbracket" style="margin-left: 708px;" class="mountingpics hspics"><img alt="Accessibility Device Mounting Bracket" style="height: 118px;" src="tube%20and%20socket/tube-socket-mounting-adaptors-whitmyer-cobra-to-square-independent-living-powerchair-mounting.png" /> 
      </div> 
      <div onclick="dttrackbracket(this)" id="dttrackbracket" style="margin-left: 944px;" class="mountingpics hspics"><img alt="Accessibility Device Mounting Bracket" style="height: 118px;" src="tube%20and%20socket/tube-socket-mounting-adaptors-whitmyer-lynx-independent-living-powerchair-mounting.png" /> 
      </div> 
      <div onclick="squaretubebracket(this)" id="articulating" style="margin-left: 0px;" class="mountingpics2 hspics"><img alt="Accessibility Device Mounting Bracket" style="height: 118px;" src="tube%20and%20socket/tube-socket-mounting-adaptors-ottobock-to-square-independent-living-powerchair-mounting.png" /> 
      </div> 
      <div onclick="fullringbracket(this)" id="articulatingwithriser" style="margin-left: 236px;" class="mountingpics2 hspics"><img alt="Accessibility Device Mounting Bracket" style="height: 118px;" src="tube%20and%20socket/tube-socket-mounting-adaptors-stealth-eye-to-eye-independent-living-powerchair-mounting.png" /> 
      </div> 
      <div onclick="zeroclearance(this)" id="m2" style="margin-left: 472px;" class="mountingpics2 hspics"><img alt="Accessibility Device Mounting Bracket" style="height: 118px;" src="tube%20and%20socket/tube-socket-mounting-adaptors-wobble-switch-plate-independent-living-powerchair-mounting.png" /> 
      </div> 
      <div onclick="socketbar14(this)" id="m2x" style="margin-left: 708px; " class="mountingpics2 hspics"><img alt="Accessibility Device Mounting Bracket" style="height: 118px;" src="tube%20and%20socket/tube-socket-mounting-adaptors-jelly-beamer-independent-living-powerchair-mounting.png" /> 
      </div> 
      <div onclick="socketbar22(this)" id="m2max" style="margin-left: 944px; " class="mountingpics2 hspics"><img alt="Accessibility Device Mounting Bracket" style="height: 118px;" src="tube%20and%20socket/tube-socket-mounting-adaptors-cane-clamps.png" /> 
      </div> 
      <div onclick="directmount(this)" style="margin-left: 0px;" class="mountinglabels">Single Sided Head Switch Mount
      
      
      
      </div> 
      <div onclick="serdirectmount(this)" style="margin-left: 236px;" class="mountinglabels">Double Sided Head Switch Mount
      
      
      
      </div> 
      <div onclick="ttrackdirectmount(this)" style="margin-left: 472px;" class="mountinglabels">Whitmyer to Square Tube Adapter
      
      
      
      </div> 
      <div onclick="ttrackbracket(this)" style="margin-left: 708px;" class="mountinglabels">Whitmyer Cobra to Square Tube Adapter
      
      
      
      </div> 
      <div onclick="dttrackbracket(this)" style="margin-left: 944px;" class="mountinglabels">Whitmyer Lynx to Square Tube Adapter
      
      
      
      </div> 
      <div onclick="squaretubebracket(this)" style="margin-left: 0px;" class="mountinglabels2">Ottobock to Square Tube Adapter
      
      
      
      </div> 
      <div onclick="fullringbracket(this)" style="margin-left: 236px;" class="mountinglabels2">Stealth i2i Square Tube Adapter
      
      
      
      </div> 
      <div onclick="zeroclearance(this)" style="margin-left: 472px;" class="mountinglabels2">Wobble Switch Plate
      
      
      
      </div> 
      <div onclick="socketbar14(this)" style="margin-left: 708px;" class="mountinglabels2">Jelly Beamer Switch Plate
      
      
      
      </div> 
      <div onclick="socketbar22(this)" style="margin-left: 944px;" class="mountinglabels2">Cane Clamps
      
      
      
      </div> 
      <div id="mountingfeaturette" style="position: absolute; margin-top: 285px; height: 500px; width: 600px;"> <img id="directmountpic" class="mountingftpics" src="tube%20and%20socket/head-switch-adapters-single-sided-mount-wheelchair-mounting-devices.png" /> <img id="serdirectmountpic" class="mountingftpics" src="tube%20and%20socket/head-switch-adapters-double-sided-mount-wheelchair-mounting-devices.png" /> <img id="ttrackdirectmountpic" class="mountingftpics" src="tube%20and%20socket/head-switch-adapters-whitmyer-wheelchair-mounting-devices.png" /> <img id="ttrackpic" class="mountingftpics" src="tube%20and%20socket/head-switch-adapters-whitmyer-cobra-wheelchair-mounting-devices.png" /> <img id="doublettrackpic" class="mountingftpics" src="tube%20and%20socket/head-switch-adapters-whitmyer-lynx-wheelchair-mounting-devices.png" /> <img id="squaretubepic" class="mountingftpics" src="tube%20and%20socket/head-switch-adapters-ottobock-wheelchair-mounting-devices.png" /> <img id="fullringpic" class="mountingftpics" src="tube%20and%20socket/head-switch-adapters-stealth-eye-to-eye-wheelchair-mounting-devices.png" /> <img id="zeroclearancepic" class="mountingftpics" src="tube%20and%20socket/head-switch-adapters-wobble-switch-plate-wheelchair-mounting-devices.png" /> <img id="socketbar14pic" class="mountingftpics" src="tube%20and%20socket/head-switch-adapters-jelly-beamer-wheelchair-mounting-devices.png" /> <img id="socketbar22pic" class="mountingftpics" src="tube%20and%20socket/head-switch-adapters-cane-clamps-wheelchair-mounting-devices.png" /> 
      </div> 
      <div id="featurettetitle" style="position: absolute; margin-left: 625px; width: 555px; margin-top: 285px; overflow: hidden;"> 
        <p id="directmounttitle" class="mountingtitle">Single Sided Head Switch Mount</p> 
        <p id="serdirectmounttitle" class="mountingtitle">Double Sided Head Switch Mount</p> 
        <p id="ttrackdirectmounttitle" class="mountingtitle">Whitmyer to Square Tube Adapter</p> 
        <p id="ttrackbrackettitle" class="mountingtitle">Whitmyer Cobra to Square Tube Adapter</p> 
        <p id="dttrackbrackettitle" class="mountingtitle">Whitmyer Lynx to Square Tube Adapter</p> 
        <p id="squaretubetitle" class="mountingtitle">Ottobock to Square Tube Adapter</p> 
        <p id="fullringtitle" class="mountingtitle">Stealth i2i Square Tube Adapter</p> 
        <p id="zeroclearancetitle" class="mountingtitle">Wobble Switch Plate</p> 
        <p id="socketbar14title" class="mountingtitle">Jelly Beamer Switch Plate</p> 
        <p id="socketbar22title" class="mountingtitle">Cane Clamps</p> 
        <p id="directmountnum" class="mountingnumber">Part # 3151</p> 
        <p id="serdirectmountnum" class="mountingnumber">Part # 2798</p> 
        <p id="ttrackdirectmountnum" class="mountingnumber">Part # 7529</p> 
        <p id="ttrackbracketnum" class="mountingnumber">Part # 7544</p> 
        <p id="dttrackbracketnum" class="mountingnumber">Part # 7718</p> 
        <p id="squaretubenum" class="mountingnumber">Part # 7528</p> 
        <p id="fullringnum" class="mountingnumber">Part # N/A</p> 
        <p id="zeroclearancenum" class="mountingnumber">Part # 8548</p> 
        <p id="socketbar14num" class="mountingnumber">Part # 8128</p> 
        <p id="socketbar22num" class="mountingnumber">Part # 7754</p> 
        <p id="directmountpar" class="mountingpar"><br />The Single Sided Head Switch Mount is a device used when mounting a single head switch. Using a suitable adapter, the mount is fastened to the user's wheelchair on the head rest. The Single Sided Head Switch Mount in turn holds the head switch in place.</p> 
        <p id="serdirectmountpar" class="mountingpar"><br />The Double Sided Head Switch Mount is used when mounting two head switches to a single power chair. One of our adapters will hold the mount to the head rest of the wheelchair.</p> 
        <p id="ttrackdirectmountpar" class="mountingpar"><br />This adapter is meant to mount to a standard Whitmyer head rest. The standard Whitmyer head rest has a horizontal 1.125 inch horizontal tube that the round split ring will tighten onto. The vertical square opening can then hold either a Double Sided Head Switch Mount or a Single Sided Head Switch Mount. Tighten the black knob to lock the Head Switch Mount in place. </p> 
        <p id="ttrackbracketpar" class="mountingpar"><br />The Whitmyer Cobra has a vertical 0.875 inch tube that fits this adapter. The round split ring tightens around the vertical tube and the vertical square opening receives either a Double Sided Head Switch Mount or a Single Sided Head Switch Mount. Tighten the black knob to lock the Head Switch Mount in place.</p> 
        <p id="dttrackbracketpar" class="mountingpar"><br />The Whitmyer Lynx head rest can hold either a Single Sided Head Switch Mount or a Double Sided Head Switch Mount once equipped with this adapter. The round split ring tightens around the horizontal 0.875 inch tube of the Whitmyer Lynx and the vertical square opening holds the Head Switch Mount. Tighten the black knob to lock the Head Switch Mount in place. </p> 
        <p id="squaretubepar" class="mountingpar"><br />This adapter is meant to attach a Head Switch Mount to an Ottobock head rest. The round split ring tightens onto the horizontal 20 millimeter tube of the Ottobock headrest, locking the bracket in place. The vertical square opening is intended to receive either a Double Sided Head Switch Mount or a Single Sided Head Switch Mount. Tightening the black knob will lock the Head Switch Mount in place. </p> 
        <p id="fullringpar" class="mountingpar"><br />The Stealth i2i head and neck support is fitted with a rectangular, horizontal tube. This adaptor has a rectangular slot to fit this horizontal tube with a plate to close it in. This will provide a rigid outlet to house a Double Sided Head Switch Mount or a Single Sided Head Switch Mount.  </p> 
        <p id="zeroclearancepar" class="mountingpar"><br />The Wobble Switch Plate finds its use when mounting a <i>Wobble Switch</i>. The plate screws to the device and fits into the socket end of a Tube and Socket. From there, your <i>Wobble Switch</i> can easily be locked in place or removed. </p> 
        <p id="socketbar14par" class="mountingpar"><br />The Jelly Beamer Switch Plate is similar in function to the standard Switch Plate, with the exception that it is meant to mount to the bottom of a Jelly Beamer button. The plate is screwed to the bottom of the button and can then be inserted into a Tube and Socket.  </p> 
        <p id="socketbar22par" class="mountingpar"><br />Cane Clamps are a multi-purpose bracket for attaching a Tube and Socket to a wheelchair or power chair. The two aluminum jaws come with a bushing for each hole. When mounting your Tube and Socket system, the Cane Clamps will fit around the tubing of a wheelchair and hold one of the bushings in the other hole. Your Tube and Socket will them fit into the bushing. </p> 
      </div> 
    </div> 
  </div> 
  <div id="fifthsection" style="height: 1035px; width: 1180px; opacity: 0.999; background-color: rgb(255, 255, 255);" class="everythingelse"> 
    <div id="navigationbar4" class="menu1 navigationbar"><img style="width: 1180px; height: 50px; position: absolute;" src="lift%20and%20lock%20page/menu%20lines.png" /> <a class="navigation" href="#mountingscroll"> 
        <div style="margin-left: 0px;" class="menuliftandlock"> 
          <p align="center">Models</p> 
        </div></a> <a class="navigation" href="#specificationsscroll"> 
        <div style="margin-left: 295px;" class="menuliftandlock"> 
          <p align="center">Specifications</p> 
        </div></a> <a class="navigation" href="#modelsscroll"> 
        <div style="margin-left: 590px;" class="menuliftandlock"> 
          <p align="center">Mounting Options</p> 
        </div></a> <a class="navigation" href="#customizescroll"> 
        <div id="customizetab" style="margin-left: 885px;" class="menuliftandlock"> 
          <p align="center">Functionality</p> 
        </div></a> 
    </div> 
    <div id="specificationsscroll" style="margin-top: -65px; width: 1180px; position: absolute; left: 50%; margin-left: -590px;" class="menu1"></div> 
    <div id="specifications" style="position: absolute; margin-top: 100px; width: 1180px; left: 50%; margin-left: -590px;"> 
      <div id="articulating" style="margin-left: -30px; margin-top: -20px;" class="modelpics"><img alt="Wheelchair Powerchair Assistive Head Switch Controls" style="height: 100px;" src="tube%20and%20socket/heavy-duty-head-switch-wheelchair-powerchair-controls.png" /> 
      </div> 
      <div id="articulatingwithriser" style="margin-left: 166.66px; margin-top: -20px;" class="modelpics"><img alt="Wheelchair Powerchair Assistive Head Switch Controls" style="height: 100px;" src="tube%20and%20socket/short-heavy-duty-head-switch-wheelchair-powerchair-controls.png" /> 
      </div> 
      <div id="m2" style="margin-left: 363.33px; margin-top: -20px;" class="modelpics"><img alt="Wheelchair Powerchair Assistive Head Switch Controls" style="height: 100px;" src="tube%20and%20socket/heavy-duty-head-switch-with-flex-wheelchair-powerchair-controls.png" /> 
      </div> 
      <div id="m2x" style="margin-left: 560px; margin-top: -20px;" class="modelpics"><img alt="Wheelchair Powerchair Assistive Head Switch Controls" style="height: 100px;" src="tube%20and%20socket/short-heavy-duty-head-switch-with-flex-wheelchair-powerchair-controls.png" /> 
      </div> 
      <div id="m2max" style="margin-left: 756.66px; margin-top: -20px;" class="modelpics"><img alt="Wheelchair Powerchair Assistive Head Switch Controls" style="height: 100px;" src="tube%20and%20socket/light-touch-head-switch-wheelchair-powerchair-controls.png" /> 
      </div> 
      <div id="m2max" style="margin-left: 953.33px; margin-top: -20px;" class="modelpics"><img alt="Wheelchair Powerchair Assistive Head Switch Controls" style="height: 100px;" src="tube%20and%20socket/short-light-touch-head-switch-wheelchair-powerchair-controls.png" /> 
      </div> 
      <div style="margin-left: 0px;" class="modellabels"> 
        <p class="labels">Standard Head Switches</p><br /> 
        <p class="modellength">Overall Length: 13.97"<br />Adjustable Length: 9.14"<br /></p> 
      </div> 
      <div style="margin-left: 196.66px;" class="modellabels"> 
        <p class="labels">Short Head Switches</p><br /><br /> 
        <p style="line-height: 200%; text-align: left; margin-left: 20px; font-size: 14px;">Overall Length: 7.97"<br />Adjustable Length: 3.14"<br /></p> 
      </div> 
      <div style="margin-left: 393.33px;" class="modellabels"> 
        <p class="labels">Head Switches with Flex</p><br /> 
        <p class="modellength">Overall Length: 14.35"<br />Adjustable Length: 8.13"<br /><br /></p> 
      </div> 
      <div style="margin-left: 590px;" class="modellabels"> 
        <p class="labels">Short Head Switches with Flex</p><br /> 
        <p class="modellength">Overall Length: 7.84"<br />Adjustable Length: 1.64"<br /><br /></p> 
      </div> 
      <div style="margin-left: 786.66px;" class="modellabels"> 
        <p class="labels">Light Touch Head Switch</p><br /> 
        <p class="modellength">Overall Length: 13.09"<br />Adjustable Length: 9.14"<br /><br /></p> 
      </div> 
      <div style="margin-left: 983.33px;" class="modellabels"> 
        <p class="labels">Short Light Touch Head Switch</p><br /> 
        <p class="modellength">Overall Length: 7.09"<br />Adjustable Length: 3.15"<br /><br /></p> 
      </div> 
      <div style="margin-left: 30px; margin-top: 400px; width: 500px;" class="modellabels"> 
        <p style="font-size: 18px; text-align: left;">Adjustable Length: The length of tube that a Socket Only is capable of sliding on. When the Socket Only is loosened the head switch can be moved closer or further away within this range.</p> 
      </div> 
    </div> 
  </div> 
  <div id="specificationsscroll" class="footer" style="top:4200px;">Ideas for Independent Living 2014</div>
</div> 
</div><!-- InstanceEndEditable -->

</body>
<!-- InstanceEnd --></html>
