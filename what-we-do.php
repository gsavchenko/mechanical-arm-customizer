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
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->
<script>
   function slideshow() {
   	$("#dopic1").delay(3500,function(){
   			$("#dopic1").delay(500).fadeOut(700)
   			$("#dopic2").fadeIn(700).delay(3500,function(){
   				$("#dopic2").delay(500).fadeOut(700)
   				$("#dopic3").fadeIn(700).delay(3500),slideshow()	
   			});
   	});
   };
   
   $(document).ready(function start(){
   	$("#dopic1").fadeIn(200),second()
   });
   function first(){
   	$("#dopic3").delay(3500).fadeOut(1000,second)
   	$("#dopic1").delay(2500).fadeIn(1000)
   }
   function second(){
   	$("#dopic1").delay(3500).fadeOut(1000,third)
   	$("#dopic2").delay(2500).fadeIn(1000)	
   }
   function third(){
   	$("#dopic2").delay(3500).fadeOut(1000,first)
   	$("#dopic3").delay(2500).fadeIn(1000)
   }
   
   
   
</script>
<!-- InstanceEndEditable -->
<div class="everythingelse">
   <h1>
      <div id="liftandlocktitle" style="position:absolute; top:200px; left:50%; margin-left:-490px; overflow:hidden; text-align:left; font-size:100px; font-family:'Roboto'; font-weight:300;">Experts in<br />Independent Living</div>
   </h1>
   <h2>
      <p style="top:520px; position:absolute;" class="whatwedoheadings">What We Do</p>
   </h2>
   <p style="top:600px; " class="whatwedotext">Ideas for Independent Living is a company devoted to helping people overcome obstacles in day-to-day life through well designed products and problem solving. We are constantly designing new devices, attachments, mounting systems to meet the needs of each unique user. What drives our design above all else, is the desire to provide customers with high quality, flexible devices and mounting systems that can be depended to make life easier for their users.
      <br /><br />
      We have designed a broad range of mounting brackets to make our assistive living devices compatible with a large variety of manual wheelchairs, power chairs, beds and table mounting systems. Likewise, we are able to mount a broad range of assistive technology devices, communication devices, computers, tablets and more to these wheelchairs. Whether you have a piece of communication assistive technology something as simple as a tray that needs to attach to your wheelchair, we specialize in bridging the gap between user and device and making the overall experience more accessible. 
   </p>
   <h3>
      <p style="top:900px; position:absolute;" class="whatwedoheadings">Design Philosophy</p>
   </h3>
   <p style="top:980px; " class="whatwedotext">We are firm believers that a good customer experience is the best possible thing you can do for a business. In pursuit of this, we dedicate ourselves to creating only the highest quality products. Through close interaction with our users we are able to better understand how these products are used on a daily basis and are constantly improving them based on this knowledge. </p>
   <h4>
      <p style="font-family:'Roboto Lt', Roboto, sans-serif; margin-left:-320px; left:50%; position:absolute; top:1100px; font-weight:300;">Products</p>
   </h4>
   <p style="font-family:'Roboto Lt', Roboto, sans-serif; margin-left:-320px; left:50%; position:absolute; top:1150px; font-weight:100;">Device Mounting Arms<br />Wheelchair Mounting Systems<br />Wheelchair Accessories<br />Computer Keyboard Guards<br />Laptop Trays<br />Tablet Cases<br />Access Switches<br />Joysticks<br />Assistive Living Devices</p>
   <h4>
      <p style="font-family:'Roboto Lt', Roboto, sans-serif; margin-left:-30px; left:50%; position:absolute; top:1100px; font-weight:300;">Services<br /></p>
   </h4>
   <p style="font-family:'Roboto Lt', Roboto, sans-serif; margin-left:-30px; left:50%; position:absolute; top:1150px; font-weight:100;">Custom Design<br />Rehab Engineering<br />Device Mounting<br />Consultation<br />Product Development<br />Product Research</p>
   <div style="background-color:#969696; border-style:solid; border-width:thin; border-color:#969696; width:240px; left:50%; margin-left:240px; top:600px; position:absolute; height:150px; overflow:hidden;"><img id="dopic1" src="about us/what-we-do-precicion-design-engineering-wheelchair-mounting-vernier.jpg" alt="Precision Machining and Design for Wheelchair Equipment and Medical Devices" style="display:none; margin-top:-28px; height:180px; margin-left:-140px; left:50%; position:absolute;" /><img id="dopic2" src="about us/what-we-do-precicion-design-engineering-wheelchair-mounting-sketching.jpg" alt="Precision Machining and Design for Wheelchair Equipment and Medical Devices" style="display:none; margin-top:-15px; height:200px; margin-left:-140px; left:50%; position:absolute;" /><img id="dopic3" src="about us/what-we-do-precicion-design-engineering-wheelchair-mounting-machining.jpg" alt="Precision Machining and Design for Wheelchair Equipment and Medical Devices" style="display:none; margin-top:-28px; height:200px; margin-left:-147.5px; left:50%; position:absolute;" /></div>
   <div style="width:280px; left:50%; margin-left:220px; top:750px; position:absolute; height:150px;">
      <h3>
         <p style="font-family:'Roboto'; font-size:32px; text-align:center; font-weight:300;">"..high quality, customizable devices and mounting systems.."</p>
      </h3>
   </div>
   <div style="width:280px; left:50%; margin-left:220px; top:1000px; position:absolute; height:200px; overflow:hidden;"><img src="about us/made-in-canada.png" alt="Wheelchair Equipment and Medical Devices made in Canada" style="height:200px; margin-left:-147.5px; left:50%; position:absolute;" /></div>
   <div id="specificationsscroll" class="footer" style="top:1400px;">Ideas for Independent Living 2014</div>
</div>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>