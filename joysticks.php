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

img.arrowlink
{
	height:30px; margin-left:20px; position:absolute;
}
</style>

<style>

div.bottomlinks
{
	margin-top:710px; position:absolute; font-family:'Roboto Lt', 'Roboto', 'sans-serif'; font-size:24px; width:200px; height:50px; cursor:pointer;
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

div.navigationbar
{
	margin-top: 20px; width: 1180px; position: absolute; left: 50%; margin-left: -590px;	
}

</style>

<style>
div.mountingpics{
	height:118px;
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
	margin-top:218px;
}
</style>
<style>
.armtitle{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:36px;
	font-weight:300;

}
</style>
<style>
.handletitle{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:24px;
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
.armpar{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:18px;
	display:none;
}
</style>
<style>
.handlepar{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:18px;
	display:none;
}
</style>
<style>
.mountingpar{
	font-family:"Roboto Lt", "Roboto", "sans-serif";
	font-size:18px;

}
</style>
<style>
.armpics{
	height:800px;
	display:none;
	margin-left:-280px; 
	margin-top:-30px;
	
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
.handles{
	position:absolute;
	height:70px;
	width:80px;
	margin-top:-142px;
	cursor:pointer;	


}
</style>
<style>
@media all and (max-width: 1400px){
	#liftandlocktitle{
		margin-left:30px;
		top:320px;
	}
	#rollingstandopener{
		margin-left:-570px;
		top:81px;
	}
}
 </style>
 <style>
@media all and (min-width: 1400px){

	#liftandlocktitle{
		margin-left:50px; 
		top:410px; 
	}
	#rollingstandopener{
		margin-left:-590px;
		top:171px;
	}
	


}
</style>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->
<!--[if lte IE 8]>
<script>
$(document).ready(function(){
	$("#liftandlocktitle").css({"top":"410px", "margin-left":"50px"})
   	$("#rollingstandopener").css({"top":"171px", "margin-left":"-590px"})
    });
</script>
<![endif]-->
<script>
$(document).ready(function(){
    $("#liftandlocktitle").fadeIn(1000)
	$("#articulaingtitle").show()
	$("#articulatingnum").show()
	$("#articulatingpar").show()
	$("#mountingpic").show()
	$("#customizefeaturette").show()
	$("#customizetitle").show()
	$("#customizepar").show()
	$("#goalpostpic").show()
	$("#goalposttitle").show()
	$("#goalpostpar").show()
	$("#rollingstandspec").show()
	$("#rollingstandextspec").show()
	$("#directmountpic").show()
	$("#directmounttitle").show()
	$("#directmountnum").show()
	$("#directmountpar").show()
	$("#plugplaypar").show()
	$("#plugplaytitle").show()
});

</script>
<script>
function goalpost(x){
	$("#goalpostpic").show()
	$("#tbarpic").hide()
	$("#ballpic").hide()
	$("#standardpic").hide()
	$(".handletitle").hide()
	$("#goalposttitle").show()
	$(".handlepar").hide()
	$("#goalpostpar").show()
	$("#plugplaytitle").show()	
}
</script>
<script>
function tbar(x){
	$("#tbarpic").show()
	$("#goalpostpic").hide()
	$("#ballpic").hide()
	$("#standardpic").hide()
	$(".handletitle").hide()
	$("#tbartitle").show()
	$(".handlepar").hide()
	$("#tbarpar").show()
	$("#plugplaytitle").show()		
}
</script>
<script>
function ball(x){
	$("#ballpic").show()
	$("#tbarpic").hide()
	$("#goalpostpic").hide()
	$("#standardpic").hide()	
	$(".handletitle").hide()
	$("#balltitle").show()
	$(".handlepar").hide()
	$("#ballpar").show()	
	$("#plugplaytitle").show()
}
</script>
<script>
function standard(x){
	$("#standardpic").show()
	$("#tbarpic").hide()
	$("#ballpic").hide()
	$("#goalpostpic").hide()	
	$(".handletitle").hide()
	$("#standardtitle").show()
	$(".handlepar").hide()
	$("#standardpar").show()
	$("#plugplaytitle").show()	
}
</script>

<meta name="description" content="The Ideas for Independent Living USB Joysticks can be a powerful accessory for both computers and wheelchairs. Featuring Plug-and-Play technology." />
<!-- InstanceEndEditable -->

<div style="position:absolute; width:1180px; height:100%; left:50%; margin-left:-590px;">
<div id="opener" style="height:100%; width:1180px;">
<div class="everythingelse" >
<h1><div id="liftandlocktitle" style="top:200px;" class="bigtitles" >USB<br />Joysticks</div></h1>
<div id="rollingstandopener" style=" position:absolute; overflow:hidden; width:1180px; left:50%;z-index:-20;"><img src="tube and socket/joystick-for-powerchair-independent-living-accessible-technology.png" style="height:800px; margin-left:-100px; margin-top:30px; " alt="Wheelchair Joysticks USB Plug and Play"/></div>
</div>
</div>

<div id="secondsection" class="everythingelse" style="height:1035px; width:1180px; background-color:#FFF; opacity:0.999; margin-top:700px;">
<div id="navigationbar" class="menu1 navigationbar"><img src="lift and lock page/menu lines.png" style="width:1180px; height:50px; position:absolute;" alt="accessibility menu"/>
<a class="navigation" href="#modelsscroll"><div class="menuliftandlock" style="z-index:1; margin-left:0px;"><p align="center">Models</p></div></a>
<a class="navigation" href="#mountingscroll" ><div class="menuliftandlock" style="z-index:1; margin-left:786.66px;"><p align="center">Mounting</p></div></a>
<a class="navigation" href="#customizescroll"><div id="customizetab" class="menuliftandlock" style="z-index:1; margin-left:393.33px;"><p align="center">Features</p></div></a>
</div>

<div id="modelsscroll" class="menu1" style="margin-top:-65px; width:1180px; position:absolute; left:50%; margin-left:-590px; "></div>

<div id="models" style="position:absolute; margin-top:80px; width:1180px; left:50%; margin-left:-590px;">

<div id="modelfeaturette" style="position:absolute; margin-top:30px; height:600px; width:1180px;">
<img id="rollingstandpic" class="standpics" src="tube and socket/joystick-models-for-powerchair-independent-living-accessible-technology.png" style="z-index:-2; width:1300px; margin-left:-30px; margin-top:-110px;" alt="Assistive Devices Powerchair Joystick"/>
</div>
<p style=" position:absolute; font-family:'Roboto Lt', 'Roboto', 'sans-serif'; width:590px; top:630px; text-align:center;">USB Joystick<br />Part # 8174</p>
<p style=" position:absolute; font-family:'Roboto Lt', 'Roboto', 'sans-serif'; width:590px; top:630px; text-align:center; margin-left:590px;">USB Joystick with jacks<br />Part # 8215</p>
</div>
</div>


<div id="thirdsection" class="everythingelse" style="width:1180px; height:1035px; background-color:#FFF; opacity:0.999;">
<div id="navigationbar2" class="menu1 navigationbar"><img src="lift and lock page/menu lines.png" style="width:1180px; height:50px; position:absolute;" alt="accessibility menu"/>
<a class="navigation" href="#modelsscroll"><div class="menuliftandlock" style="margin-left:0px;"><p align="center">Models</p></div></a>
<a class="navigation" href="#mountingscroll"><div class="menuliftandlock" style="margin-left:786.66px;"><p align="center">Mounting</p></div></a>
<a class="navigation" href="#customizescroll"><div id="customizetab" class="menuliftandlock" style="margin-left:393.33px;"><p align="center">Features</p></div></a>
</div>

<div id="customizescroll" class="menu1" style="margin-top:-65px; width:1180px; position:absolute; left:50%; margin-left:-590px; "></div>
<div id="customize" style="position:absolute; margin-top:-70px; width:1180px; left:50%; margin-left:-590px; background-color:#959595;">
<div id="customizefeaturette" style="position:absolute; margin-top:180px; height:800px; width:600px; overflow:hidden;">
<img id="goalpostpic" class="armpics" src="tube and socket/joystick-handles-goalpost-independent-living-custom-joysticks.png" alt="Custom Powerchair Joysticks Device Mounting"/>
<img  id="ballpic" class="armpics" src="tube and socket/joystick-handles-ball-independent-living-custom-joysticks.png" alt="Custom Powerchair Joysticks Device Mounting"/>
<img  id="standardpic" class="armpics" src="tube and socket/joystick-handles-standard-independent-living-custom-joysticks.png" alt="Custom Powerchair Joysticks Device Mounting"/>
<img  id="tbarpic" class="armpics" src="tube and socket/joystick-handles-t-bar-independent-living-custom-joysticks.png" alt="Custom Powerchair Joysticks Device Mounting"/>
</div>
<div style="position:absolute; margin-left:625px; width:555px; margin-top:150px; overflow:hidden;">
<h2><p id="customizetitle" class="armtitle">Features</p></h2>

<p id="customizepar" class="armpar">Joysticks give users the ability to control a power chair, computer or some other form of technology, but dexterity can sometimes hinder their accessibility. Everyone has a different range of dexterity and therefore one type of joystick would not suit everyone. In order to create an ergonomic user experience, these joysticks have multiple options to fit the hand or foot of the user better. Click an icon below to see the other handles.</p><h3><p id="plugplaytitle" class="handletitle">Plug and Play</p></h3><p id="plugplaypar" class="armpar">These Joysticks require no extra software to operate assistive devices like computers. Simply plug them in and they are ready to use. Depending on your wheelchair, some additional circuitry may be required to provide steering capability.</p><h4><p id="goalposttitle" class="handletitle">Goalpost Handle</p></h4><p id="goalpostpar" class="handlepar">The goalpost handle cradles the user's hand without making them actively grasp anything. The hand can remain fully open and relaxed while maintaining control over the device. </p><h4><p id="balltitle" class="handletitle">Ball Handle</p></h4><p id="ballpar" class="handlepar">The ball handle is a slightly larger object for the user to grasp. Thus, the user's hand is not restricted to a fully closed position during use. </p><h4><p id="standardtitle" class="handletitle">Standard Handle</p></h4><p id="standardpar" class="handlepar">The standard handle is a smaller object for the user to hold. If the user is more comfortable with closed or pinching hands, this handle would best fit their needs. </p><h4><p id="tbartitle" class="handletitle">T-Bar Handle</p></h4><p id="tbarpar" class="handlepar">The standard handle is a smaller object for the user to hold. If the user is more comfortable with closed or pinching hands, this handle would best fit their needs.</p>


</div><div style="position:absolute; height:100px; width:50px; margin-top:720px; margin-left:680px;"><img src="tube and socket/joystick-handles-custom-powerchair-handles.png" style="height:200px;" /><div onclick="tbar(this)" id="tbar" class="handles" style=" margin-left:5px;"></div><div onclick="standard(this)" id="standard" class="handles" style=" margin-left:125px;"></div><div onclick="goalpost(this)" id="goalpost" class="handles" style=" margin-left:230px;"></div><div onclick="ball(this)" id="ball" class="handles" style=" margin-left:335px;"></div></div>
</div>
</div>


<div id="fourthsection" class="everythingelse" style="width:1180px; height:1035px; background-color:#FFF; opacity:0.999;">
<div id="navigationbar3" class="menu1 navigationbar"><img src="lift and lock page/menu lines.png" style="width:1180px; height:50px; position:absolute;" alt="accessibility menu"/>
<a class="navigation" href="#modelsscroll"><div class="menuliftandlock" style="margin-left:0px;"><p align="center">Models</p></div></a>
<a class="navigation" href="#mountingscroll" ><div class="menuliftandlock" style="margin-left:786.66px;"><p align="center">Mounting</p></div></a>
<a class="navigation" href="#customizescroll"><div id="customizetab" class="menuliftandlock" style="margin-left:393.33px;"><p align="center">Features</p></div></a>
</div>

<div id="mountingscroll" class="menu1" style="margin-top:-65px; width:1180px; position:absolute; left:50%; margin-left:-590px; "></div>
<div id="mounting" style="position:absolute; margin-top:-70px; width:1180px; left:50%; margin-left:-590px; background-color:#959595;">
<div id="mountingfeaturette" style="position:absolute; margin-top:180px; height:800px; width:600px;">
<img id="mountingpic" class="armpics" src="tube and socket/joystick-mounting-independent-living-physical-therapy.png" alt="Custom Powerchair Joysticks Device Mounting" style="margin-left:-150px; margin-top:-20px; height:600px;"/>

</div>
<div style="position:absolute; left:50%; margin-left:-375px; margin-top:540px;"><p style="margin-left:235px;">Lift and Lock</p><p>Tube and Socket</p></div>

<div style="position:absolute; margin-left:625px; width:555px; margin-top:210px; overflow:hidden;">
<h2><p id="customizetitle" class="armtitle">Mounting</p></h2>

<p id="mountingpar" class="mountingpar">USB Joysticks can be mounted to a power chair easily with either the Tube and Socket system or the Lift and Lock system. Each system works well with a joystick and offer their own specific benefits and features. In order to mount to either of these systems a device is required to give the system something to hold onto.<br /><br />In the case of the Tube and Socket system, we offer a switch plate that takes three screws to attach to the bottom of the joystick. This switch plate will fit into the socket end of a Tube and Socket and can be locked in place. <br /><br /> If the Lift and Lock system is preferred,  a wedge must be screwed to the bottom of the joystick. This will allow the joystick to click into the Wedge Receiver of the Lift and Lock system.</p>

</div>
<div onclick="liftandlocksystem(this)" id="buildyoursystems" style="margin-left:660px;" class="bottomlinks">Lift and Lock<img class="arrowlink" src="navigation arrow.png" /></div>
<div onclick="tubeandsocket(this)" id="buildyoursystems" style="margin-left:900px;" class="bottomlinks">Tube and Socket<img class="arrowlink" src="navigation arrow.png" /></div>
</div>
</div>



<div id="specificationsscroll" class="footer" style="top:2900px;">Ideas for Independent Living 2014</div>
</div>

<!-- InstanceEndEditable -->

</body>
<!-- InstanceEnd --></html>
