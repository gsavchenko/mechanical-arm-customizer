<?php
require_once('recaptchalib.php');
  $privatekey = "6LfiRvUSAAAAAON-tkNArKmeHYNvB2noQl7-brfD";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } 
  else {
    // Your code here to handle a successful verification
  
function spamcheck($field) {
  // Sanitize e-mail address
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
    return TRUE;
  } else {
    return FALSE;
  }
}

  if (isset($_POST["email"])) {
    // Check if "from" email address is valid
    $mailcheck = spamcheck($_POST["email"]);
    if ($mailcheck==FALSE) {
      echo "Invalid input";
	}
  else{ 
$to = "<bill@ideasfil.com>, <liz@ideasfil.com>";
$subject = "Automated Quote Request";

	


$message = "<p><b>Name: </b>" . $_POST['name'];
$message .= "<p><b>Email: </b>" . $_POST['email'];
$message .= "<p><b>Address: </b>" . $_POST['address'];
$message .= "<p><b>City: </b>" . $_POST['city'];
$message .= "<p><b>Country: </b>" . $_POST['country'];
$message .= "<p><b>Postal/Zip: </b>" . $_POST['postal'];
$message .= "<p><b>Affiliated Organization: </b>" . $_POST['associationname'];
$message .= "<p><b>Phone: </b>" . (int)$_POST['phonenumber'];
$message .= "<p><b>Client Name: </b>" . $_POST['clientname'];
$message .= "<p><b>Device(s) to be Mounted: </b>" . $_POST['devices'];
$message .= "<p><b>Comments: </b>" . $_POST['message'];
$message .= "
<html>
<head>
<title>Quote Request</title>

</head>
<body>
<p> </p>
<table style='border-collapse:collapse;'>
<col width='75px' style='border-width: thin; border-right-style: solid;'>
<col width='250px' style='border-width: thin;'>
<col width='50px' style='border-width: thin; border-left-style: solid;'>
<tr>
<th style='border-width: thin; border-bottom-style: solid;'>Part #</th>
<th style='border-width: thin; border-bottom-style: solid;'>Item</th>
<th style='border-width: thin; border-bottom-style: solid;'>Qty.</th>
</tr>
<tr style='border-top-style:solid; border-width:thin;'>
<td>" . $_POST['items1num'] . "</td>
<td>" . $_POST['items1'] . "</td>
<td>" . $_POST['items1qty'] . "</td>
</tr>
<tr style='border-top-style:solid; border-width:thin;'>
<td>" . $_POST['items2num'] . "</td>
<td>" . $_POST['items2'] . "</td>
<td>" . $_POST['items2qty'] . "</td>
</tr>
<tr style='border-top-style:solid; border-width:thin;'>
<td>" . $_POST['items3num'] . "</td>
<td>" . $_POST['items3'] . "</td>
<td>" . $_POST['items3qty'] . "</td>
</tr>
<tr style='border-top-style:solid; border-width:thin;'>
<td>" . $_POST['items4num'] . "</td>
<td>" . $_POST['items4'] . "</td>
<td>" . $_POST['items4qty'] . "</td>
</tr>
<tr style='border-top-style:solid; border-width:thin;'>
<td>" . $_POST['items5num'] . "</td>
<td>" . $_POST['items5'] . "</td>
<td>" . $_POST['items5qty'] . "</td>
</tr>
<tr style='border-top-style:solid; border-width:thin;'>
<td>" . $_POST['items6num'] . "</td>
<td>" . $_POST['items6'] . "</td>
<td>" . $_POST['items6qty'] . "</td>
</tr>
<tr style='border-top-style:solid; border-width:thin;'>
<td>" . $_POST['items7num'] . "</td>
<td>" . $_POST['items7'] . "</td>
<td>" . $_POST['items7qty'] . "</td>
</tr>
<tr style='border-top-style:solid; border-width:thin;'>
<td>" . $_POST['items8num'] . "</td>
<td>" . $_POST['items8'] . "</td>
<td>" . $_POST['items8qty'] . "</td>
</tr>
<tr style='border-top-style:solid; border-width:thin;'>
<td>" . $_POST['items9num'] . "</td>
<td>" . $_POST['items9'] . "</td>
<td>" . $_POST['items9qty'] . "</td>
</tr>
<tr style='border-top-style:solid; border-width:thin;'>
<td>" . $_POST['items10num'] . "</td>
<td>" . $_POST['items10'] . "</td>
<td>" . $_POST['items10qty'] . "</td>
</tr>
</table>
</body>
</html>
";


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: ' . $_POST['email'] . "\r\n";
$headers .= 'Cc: ' . $_POST['email'] . "\r\n";
$headers .= 'Bcc: <terry@ideasfil.com>, <brian@ideasfil.com>' . "\r\n";

mail($to,$subject,$message,$headers,$address);
  }
  }
  }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/ideas for independent living template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Thank You</title>
<!-- InstanceEndEditable -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,500' rel='stylesheet' type='text/css'>
<link rel="icon" href="favicon.ico">
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  
<style type="text/css" >
@font-face{
	font-family:'Roboto';
	src:'http://fonts.googleapis.com/css?family=Roboto:100,300,400,500';
	
	
	
}

div.centered{
position:absolute;
left:50%;
margin-left:-590px;
overflow:hidden;
}
div.frame{
	position:absolute;
	left:50%;
	margin-left:-600px;
}
div.logo{
	position:absolute;
	left:50%;
	margin-left:-585px;
	cursor:pointer;
	
}
div.menu1{
	position:relative;
	left:50%;
	margin-left:-39px;
	font-family:"Century Gothic", "sans-serif";
}
div.menu{
	position:absolute;
	display:inline;
	vertical-align:central;
	text-align:center;
	margin-top:2px;
	cursor:pointer;
	font-weight:lighter;

}
div.menu2{
	position:absolute;
	margin-top:47px;


	text-align:center;
	height:50px; 
	display:none;
	cursor:pointer;
}
div.menu3{
	position:absolute;
	margin-top:96px;
	vertical-align:central;
	text-align:center;
	height:50px; 
	display:none;
	cursor:pointer;
}
div.menu4{
	position:absolute;
	margin-top:144px;
	vertical-align:central;
	text-align:center;
	height:50px; 
	display:none;
	cursor:pointer;
}
div.menu5{
	position:absolute;
	margin-top:192px;
	vertical-align:central;
	text-align:center;
	height:50px;
	display:none;
	cursor:pointer;
}
div.menu6{
	position:absolute;
	margin-top:240px;
	vertical-align:central;
	text-align:center;
	height:50px;
	display:none;
	cursor:pointer;
}
div.menu7{
	position:absolute;
	margin-top:288px;
	vertical-align:central;
	text-align:center;
	height:60px;
	display:none;
	cursor:pointer;
}
div.behind{
	position:absolute;
	display:none;

}
body { 
	background-image:url(home%20page/background%20gradient.png);
	background-size:cover;
	background-color:#FFF; 
	font-family:'Roboto';
	color:#666;
	font-weight:300;
	-webkit-font-smoothing: antialiased;
	-webkit-text-stroke: 0.3px;
} <!-- just testing -->
@-webkit-keyframes fontfix {
    from { opacity: 1; }
    to   { opacity: 1; }
}

</style>
<style>
@media all and (max-width: 1400px){

	.everythingelse{
		transform:scale(0.80);
		-webkit-transform:scale(0.80); 
		-moz-transform:scale(0.80);
		-ms-transform:scale(0.80);
		transform-origin:top;
		-ms-transform-origin:top;
		-webkit-transform-origin:top;
	}
	
	.structure{
		transform:scale(0.80); 
		zoom:80%;
		-moz-transform:scale(0.80);
		-ms-transform:scale(0.80);
		-ms-zoom:100%;
		-ms-transform-origin:center;
		z-index:20;
		transform-origin:center;
	}

	#secondsection{
		margin-top:-71.5px;
	}
	#thirdsection{
		margin-top:-363.25px;
	}
	#fourthsection{
		margin-top:-363.25px;
	}
	#fifthsection{
		margin-top:-363.25px;
	}
	#sixthsection{
		margin-top:-363.25px;
	}
	#ideastag{
		margin-top:-363.25px;
	}
	.displaybox{
		transform-origin:center;
		-moz-transform-origin:center;
		-ms-transform-origin:center;
		-webkit-transform-origin:center;
	}
 }
 </style>
<!--[if lt IE 9]>
<script>
alert("You are using an outdated internet browser. Updating your browser will allow you to access more dynamic and helpful content. Please update to the latest version to have the best viewing results for this website and others like it.");
window.location.href= "http://windows.microsoft.com/en-us/internet-explorer/download-ie";


$(document).ready(function(){
$("#opener").css("height","800px")
});
</script>
<![endif]-->

 <style>
@media all and (min-width:1400px){

	#secondsection{
		margin-top:-110px;
	}
	.everythingelse{
		transform:scale(1);
		-webkit-transform:scale(1);
		-moz-transform:scale(1);
		-ms-transform:scale(1);
		transform-origin:center;
		-ms-transform-origin:center;
		-webkit-transform-origin:center;
	}
	.menu1{
		z-index:20px;
		
 }
 	#outside{
		height:100%;
	}
 
</style>

<!-- InstanceBeginEditable name="EditRegion5" -->
<style>

</style>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->
<script>


</script>
<!-- InstanceEndEditable -->


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40742743-3', 'ideasfil.com');
  ga('send', 'pageview');

</script>


<script>
function what(x){
	$(".newprojects").show();
	$("#whatsnew").css({"color": "green", "font-weight": "bold", "text-shadow":"1px 1px #C0C0C0"})
	$("#newprojectsbehind").show();
	$("#whatsnew").css("background-color", "#FFF")
}
function whathide(x){
	$(".newprojects").hide();
	$("#whatsnew").css({"color":"#666", "font-weight": "lighter", "text-shadow":"none"})
	$("#newprojectsbehind").hide();
	$("#whatsnew").css("background-color", "transparent");
}

</script>
<script>
function about(x){
	$(".about").show();
	$("#about").css({"color": "green", "font-weight": "bold", "text-shadow":"1px 1px #C0C0C0"})
	$("#about").css("background-color", "#FFF")	
}
function abouthide(x){
	$(".about").hide();
	$("#about").css({"color":"#666", "font-weight": "lighter", "text-shadow":"none"})
	$("#about").css("background-color", "transparent");
}
</script>
<script>
function liftandlock(x){
	$(".liftandlock").show();
	$("#liftandlock").css({"color": "green", "font-weight": "bold", "text-shadow":"1px 1px #C0C0C0"})
	$("#liftandlock").css("background-color", "#FFF")	
}
function liftandlockhide(x){
	$(".liftandlock").hide();
	$("#liftandlock").css({"color":"#666", "font-weight": "lighter", "text-shadow":"none"})
	$("#liftandlock").css("background-color", "transparent");
}
function buildyoursystem(x){
		document.location="http://www.ideasfil.com";
}
</script>
<script>
function switches(x){
	$(".switches").show();
	$("#switches").css({"color": "green", "font-weight": "bold", "text-shadow":"1px 1px #C0C0C0"})
	$("#switches").css("background-color", "#FFF")	
}
function switcheshide(x){
	$(".switches").hide();
	$("#switches").css({"color":"#666", "font-weight": "lighter", "text-shadow":"none"})
	$("#switches").css("background-color", "transparent");
}
</script>
<script>
function products(x){
	$(".product").show();
	$("#products").css({"color": "green", "font-weight": "bold", "text-shadow":"1px 1px #C0C0C0"})
	$("#products").css("background-color", "#FFF")	
}
function productshide(x){
	$(".product").hide();
	$("#products").css({"color":"#666", "font-weight": "lighter", "text-shadow":"none"})
	$("#products").css("background-color", "transparent");
}
</script>
<script>
function homebold(x){
	$("#home").css({"color": "green", "font-weight": "bold", "text-shadow":"1px 1px #C0C0C0"})

}
function homeboldhide(x){
	$("#home").css({"color":"#666", "font-weight": "lighter", "text-shadow":"none"})

}
</script>
<script>
function hm(x){
		document.location="http://www.ideasfil.com";
}
function whatwedo(x){
		document.location="http://www.ideasfil.com/what-we-do.html";
}
function contact(x){
		document.location="http://www.ideasfil.com/contact-us.html";
}
function whatsnew(x){
		document.location="http://www.ideasfil.com/what's-new.html";
}
function wishlist(x){
		document.location="/wishlist.html";
}
function liftandlocksystem(x){
		document.location="http://www.ideasfil.com/lift-and-lock.html";
}
function customizeanarm(x){
		document.location="http://www.ideasfil.com/customize-your-lift-and-lock-arm.html";
}
function buildyoursystem(x){
		document.location="http://www.ideasfil.com/build-your-lift-and-lock-system.html";
}
function rollingfloorstand(x){
		document.location="http://www.ideasfil.com/rolling-floor-stand.html";
}
function wedgereceiverspage(x){
		document.location="http://www.ideasfil.com/wedge-receivers.html";
}
function tubeandsocket(x){
		document.location="http://www.ideasfil.com/tube-and-socket.html";
}
function headswitches(x){
		document.location="http://www.ideasfil.com/access-switches.html";
}
function joysticks(x){
		document.location="http://www.ideasfil.com/joysticks.html";
}
function gallery(x){
		document.location="http://www.ideasfil.com/gallery.html";
}
function catalog(x){
		document.location="http://www.ideasfil.com/catalog.html";
}
function aboutideas(x){
		document.location="http://www.ideasfil.com/about-ideas.html"; 
}
function nw(x){
		document.location="http://www.ideasfil.com/new.html";
}
function devicemounting(x){
		document.location="http://www.ideasfil.com/device-mounting.html";
}
function switchespage(x){
		document.location="http://www.ideasfil.com/switches.html";
}
function productspage(x){
		document.location="http://www.ideasfil.com/resources.html";
}
function videos(x){
		document.location="http://www.ideasfil.com/videos.html";
}

</script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<meta name="robots" content="index, follow" />
</head>

<body>
<!-- InstanceBeginEditable name="EditRegion6" -->
<div class="structure">
  <!--<div id="ideas logo" onclick="hm(this)" class="logo" style="z-index:5; position:absolute; top:75px; height:100px; "><img style="height:100px;" src="../logo.png" /> </div>-->
  <div id="ideas logo" onclick="hm(this)" class="logo" style="z-index:5; position:absolute; top:75px; height:100px; "><img style="height:100px;" src="logo%20ending%20inc_REGISTERED.png" /></div>
  <div class="menu1" style="position:absolute; top:122px; height:47px; width:635px; z-index:20; border-bottom-width:thin; border-bottom-style:solid; border-top-style:solid; border-top-width:thin; border-color:#969696;">
    <div onmouseover="homebold(this)" onmouseout="homeboldhide(this)" onclick="hm(this)" id="home" class="menu" style="height:45px; width:80px; margin-left:-4px;">
      <p align="center" style="margin-top:11px;">Home</p>
    </div>
    <div onclick="aboutideas(this)" onmouseover="about(this)" onmouseout="abouthide(this)" id="about" class="menu" style="margin-left:76px; height:45px; width:80px;">
      <p align="center" style="margin-top:11px; ">About</p>
    </div>
    <div onclick="nw(this)" onmouseover="what(this)" onmouseout="whathide(this)" id="whatsnew" class="menu" style="margin-left:157px; height:45px; width:110px;">
      <p align="center" style="margin-top:11px; ">What's New</p>
    </div>
    <div onclick="devicemounting(this)" onmouseover="liftandlock(this)" onmouseout="liftandlockhide(this)"id="liftandlock" class="menu" style="margin-left:280px; height:45px; width:140px;">
      <p align="center" style="margin-top:11px;">Device Mounting</p>
    </div>
    <div onclick="switchespage(this)" onmouseover="switches(this)" onmouseout="switcheshide(this)"id="switches" class="menu" style="margin-left:424px; height:45px; width:100px;">
      <p align="center" style="margin-top:11px;">Switches</p>
    </div>
    <div onclick="productspage(this)" onmouseover="products(this)" onmouseout="productshide(this)" id="products" class="menu" style="margin-left:524px; height:45px; width:95px;">
      <p align="center" style="margin-top:11px;">Resources</p>
    </div>
    <div onmouseover="about(this)" onmouseout="abouthide(this)" class="behind menu2 about" id="aboutbehind" style="height:100px; width:150px; margin-left:76px; border-bottom-width:thin; border-left-width:thin; border-right-width:thin; border-bottom-style:solid; border-left-style:solid; border-right-style:solid; background-color:#FFF; border-color:#969696;"></div>
    <div onmouseover="liftandlock(this)" onmouseout="liftandlockhide(this)" class="behind menu2 liftandlock" id="liftandlockbehind" style="height:300px; width:200px; margin-left:280px; border-bottom-width:thin; border-left-width:thin; border-right-width:thin; border-bottom-style:solid; border-left-style:solid; border-right-style:solid; background-color:#FFF; border-color:#969696;"></div>
    <div onmouseover="what(this)" onmouseout="whathide(this)" class="behind menu2" id="newprojectsbehind" style="height:50px; width:152px; margin-left:157px; border-bottom-width:thin; border-left-width:thin; border-right-width:thin; border-bottom-style:solid; border-left-style:solid; border-right-style:solid; background-color:#FFF; border-color:#969696;"></div>
    <div onmouseover="switches(this)" onmouseout="switcheshide(this)" class="behind menu2 switches" id="switchesbehind" style="height:150px; width:170px; margin-left:424px; border-bottom-width:thin; border-left-width:thin; border-right-width:thin; border-bottom-style:solid; border-left-style:solid; border-right-style:solid; background-color:#FFF; border-color:#969696;"></div>
    <div onmouseover="products(this)" onmouseout="productshide(this)" class="behind menu2 product" id="productbehind" style="height:103px; width:115px; margin-left:524px; border-bottom-width:thin; border-left-width:thin; border-right-width:thin; border-bottom-style:solid; border-left-style:solid; border-right-style:solid; background-color:#FFF; border-color:#969696;"></div>
    <div onclick="whatwedo(this)" onmouseover="about(this)" onmouseout="abouthide(this)" class="menu2 about" style="margin-left:76px; width:150px;">
      <p align="left" style="text-indent:20px;">What We Do</p>
    </div>
    <div onclick="contact(this)" onmouseover="about(this)" onmouseout="abouthide(this)" class="menu3 about" style=" margin-left:76px; width:150px;">
      <p align="left" style="text-indent:20px;">Contact</p>
    </div>
    <div onclick="liftandlocksystem(this)" onmouseover="liftandlock(this)" onmouseout="liftandlockhide(this)" class="menu2 liftandlock" style="margin-left:280px; width:200px;">
      <p align="left" style="text-indent:20px;">Lift and Lock</p>
    </div>
    <div onclick="customizeanarm(this)" id="customizeanarm"onmouseover="liftandlock(this)" onmouseout="liftandlockhide(this)" class="menu3 liftandlock" style="margin-left:280px; width:200px;">
      <p align="left" style="text-indent:20px;">Customize an Arm</p>
    </div>
    <div onclick="buildyoursystem(this)" id="buildyoursystem"onmouseover="liftandlock(this)" onmouseout="liftandlockhide(this)" class="menu4 liftandlock" style="margin-left:280px; width:200px;">
      <p align="left" style="text-indent:20px;">Build Your System</p>
    </div>
    <div onclick="rollingfloorstand(this)" onmouseover="liftandlock(this)" onmouseout="liftandlockhide(this)" class="menu5 liftandlock" style="margin-left:280px; width:200px;">
      <p align="left" style="text-indent:20px;">Rolling Floor Stand</p>
    </div>
    <div onclick="wedgereceiverspage(this)" onmouseover="liftandlock(this)" onmouseout="liftandlockhide(this)" class="menu6 liftandlock" style="margin-left:280px; width:200px;">
      <p align="left" style="text-indent:20px;">Wedge Receivers</p>
    </div>
    <div onclick="gallery(this)" onmouseover="liftandlock(this)" onmouseout="liftandlockhide(this)" class="menu7 liftandlock" style="margin-left:280px; width:200px;">
      <p align="left" style="text-indent:20px;">Gallery</p>
    </div>
    <div onclick="tubeandsocket(this)" onmouseover="switches(this)" onmouseout="switcheshide(this)"class="menu2 switches" style="margin-left:424px; width:160px;">
      <p align="left" style="text-indent:20px;">Tube and Socket</p>
    </div>
    <div onclick="headswitches(this)" onmouseover="switches(this)" onmouseout="switcheshide(this)"class="menu3 switches" style="margin-left:424px; width:160px;">
      <p align="left" style="text-indent:20px;">Access Switches</p>
    </div>
    <div onclick="joysticks(this)" onmouseover="switches(this)" onmouseout="switcheshide(this)"class="menu4 switches" style="margin-left:424px; width:160px;">
      <p align="left" style="text-indent:20px;">Joysticks</p>
    </div>
    <div onclick="whatsnew(this)" onmouseover="what(this)" onmouseout="whathide(this)" id="newprojects" class="menu2" style="margin-left:157px; width:145px;">
      <p align="left" style="text-indent:20px;">New Projects</p>
    </div>
    <div onclick="catalog(this)" onmouseover="products(this)" onmouseout="productshide(this)"class="menu2 product" style="margin-left:524px; width:115px;">
      <p align="left" style="text-indent:20px;">Catalog</p>
    </div>
    <div onclick="videos(this)" onmouseover="products(this)" onmouseout="productshide(this)"class="menu3 product" style="margin-left:524px; width:115px;">
      <p align="left" style="text-indent:20px;">Videos</p>
    </div>
  </div>
</div>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="EditRegion1" -->
<h1><p style="margin-top:300px; left:50%; margin-left:-400px; width:800px; position:absolute; font-size:48px; font-weight:300;">Thank You for Requesting a Quote.</p></h1><h2><p style="margin-top:400px; left:50%; margin-left:-350px; width:750px; font-weight:300; position:absolute; font-size:24px;">Someone will respond to your email as soon as possible.</p></h2>

<div onclick="buildyoursystem(this)" id="buildyoursystem" style="position:absolute; margin-top:600px; margin-left:-250px; left:50%; font-family:'Roboto Lt', 'Roboto', 'sans-serif'; font-size:24px; width:200px; height:50px; cursor:pointer;">Build Your System<img style="height:30px; margin-left:20px; position:absolute;" src="navigation arrow.png" /></div>
<div onclick="customizeanarm(this)" id="customizeyoursystem" style="position:absolute; margin-top:600px; margin-left:50px; left:50%; font-family:'Roboto Lt', 'Roboto', 'sans-serif'; font-size:24px; width:200px; height:50px; cursor:pointer;">Customize an Arm<img style="height:30px; margin-left:20px; position:absolute;" src="navigation arrow.png" /></div>
<!-- InstanceEndEditable -->

</body>
<!-- InstanceEnd --></html>
