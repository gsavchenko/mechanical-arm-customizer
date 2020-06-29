<?php
   include './Templates/PHP/header.php'
   ?>
<script>
   $(document).ready(function(e) {
   	document.getElementById("tr1b").selectedIndex="0"
   	document.getElementById("tr1c").selectedIndex="0"
   	document.getElementById("tr2b").selectedIndex="0"
   	document.getElementById("tr2c").selectedIndex="0"
   	document.getElementById("tr3b").selectedIndex="0"
   	document.getElementById("tr3c").selectedIndex="0"
   	document.getElementById("tr4b").selectedIndex="0"
   	document.getElementById("tr4c").selectedIndex="0"
   	document.getElementById("tr5b").selectedIndex="0"
   	document.getElementById("tr5c").selectedIndex="0"
   	document.getElementById("tr6b").selectedIndex="0"
   	document.getElementById("tr6c").selectedIndex="0"
   	document.getElementById("tr7b").selectedIndex="0"
   	document.getElementById("tr7c").selectedIndex="0"
   	document.getElementById("tr8b").selectedIndex="0"
   	document.getElementById("tr8c").selectedIndex="0"
   	document.getElementById("tr9b").selectedIndex="0"
   	document.getElementById("tr9c").selectedIndex="0"
   	document.getElementById("tr10b").selectedIndex="0"
   	document.getElementById("tr10c").selectedIndex="0"
   	$("#tr1b").fadeIn(0, product1)
   	$("#tr1c").fadeIn(0, qty1)
   	$("#tr2b").fadeIn(0, product2)
   	$("#tr2c").fadeIn(0, qty2)
   	$("#tr3b").fadeIn(0, product3)
   	$("#tr3c").fadeIn(0, qty3)
   	$("#tr4b").fadeIn(0, product4)
   	$("#tr4c").fadeIn(0, qty4)
   	$("#tr5b").fadeIn(0, product5)
   	$("#tr5c").fadeIn(0, qty5)
   	$("#tr6b").fadeIn(0, product6)
   	$("#tr6c").fadeIn(0, qty6)
   	$("#tr7b").fadeIn(0, product7)
   	$("#tr7c").fadeIn(0, qty7)
   	$("#tr8b").fadeIn(0, product8)
   	$("#tr8c").fadeIn(0, qty8)
   	$("#tr9b").fadeIn(0, product9)
   	$("#tr9c").fadeIn(0, qty9)
   	$("#tr10b").fadeIn(0, product10)
   	$("#tr10c").fadeIn(0, qty10)
   });
   
</script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->
<meta name="description" content="Ideas for Independent contact information. Feel free to call our office of send us an email with any questions you might have." />
<div class="everythingelse">
   <h1>
      <div id="liftandlocktitle" style="position:absolute; top:200px; left:50%; margin-left:-540px; overflow:hidden; text-align:left; font-size:100px; font-weight:300; font-family:'Roboto Lt', 'Roboto', 'sans-serif';">Contact Us</div>
   </h1>
   <div style="position:absolute; left:50%; margin-left:-30px; margin-top:350px;">
      <p style="font-family:'Roboto Lt', Roboto, sans-serif; margin-top:15px;">Phone: (416) 646-4361<br /><br />Fax: (416) 646-4358<br /><br />Address: 16 Malley Road<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scarborough, Ontario<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M1L 2E2<br /><br /><br />Bill Johnson, President: <a href="mailto:bill@ideasfil.com">bill@ideasfil.com</a><br /><br />John Kupers, Vice President: <a href="mailto:john@ideasfil.com">john@ideasfil.com</a></p>
      <div onclick="showquote(this)" class="chairoptions" id="showquote" style="margin-top:0px; margin-left:60px; font-family:'Roboto Lt', 'Roboto', 'sans-serif'; font-size:20px; width:200px; height:50px; cursor:pointer; ">Request a Quote<img style="height:25px; margin-left:10px; position:absolute;" src="navigation arrow.png" /></div>
   </div>
   <div style="position:absolute; left:50%; margin-left:-515px; margin-top:370px;"><img src="about us/map-frame.png" style="margin-left:-10.25px; margin-top:-7px; height:368px; width:443px; position:absolute; z-index:-1;" />
      <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?ie=UTF8&amp;q=Ideas+for+Independent+Living&amp;fb=1&amp;gl=ca&amp;hq=ideas+for+independent+living&amp;cid=0,0,15890233150965097626&amp;t=m&amp;ll=43.722482,-79.284897&amp;spn=0.02171,0.036478&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.ca/maps?ie=UTF8&amp;q=Ideas+for+Independent+Living&amp;fb=1&amp;gl=ca&amp;hq=ideas+for+independent+living&amp;cid=0,0,15890233150965097626&amp;t=m&amp;ll=43.722482,-79.284897&amp;spn=0.02171,0.036478&amp;z=14&amp;source=embed" style="color:#0000FF;text-align:left; font-family:'Roboto Lt', Roboto, sans-serif;"><br />View Larger Map</a></small>
   </div>
   <div id="specificationsscroll" class="footer" style="top:950px;">Ideas for Independent Living 2014</div>
</div>
<div id="quotebackground" onclick="quotebackground(this)" style="height:100%; width:100%; position:fixed; background-color:#FFF; opacity:0.5; z-index:99; display:none; top:0px; left:0px;"></div>
<div id="quoterequest" style="display:none; z-index:100; position:fixed; left:50%; margin-left:-400px; height:80%; top:10%; width:800px; background-color:#F5F5F5; border-style:solid; border-width:thin; overflow-y:auto; overflow-x:hidden;">
   <div style="position:absolute; margin-left:20px; margin-top:30px;">
      <p style="font-size:48px">Quote Request</p>
      <p style="margin-top:-15px; font-size:36px;">Ideas for Independent Living</p>
      <p style="margin-top:-10px;">16 Malley Road<br />Scarborough, Ontario<br />M1L 2E2<br />(416)646-4361</p>
   </div>
   <form method="post" action="thank-you.php" name="form1">
      <input type="hidden" name="redirect" value="thankyou.html" />
      <p>Name:* <input required type="text" id="name" name="name"></p>
      <p>E-mail:* <input required type="email" name="email" placeholder="email@example.com"></p>
      <p>Affiliated Organization: <input type="text" id="associationname" name="associationname" placeholder="i.e. East Side Children's Hospital"></p>
      <p>Address:* <input required type="text" id="address" name="address"></p>
      <p>City:* <input required type="text" id="city" name="city"></p>
      <p>Country:* <input required type="text" id="country" name="country"></p>
      <p>Postal Code/Zip Code:* <input required type="text" id="postal" name="postal"></p>
      <p> Phone Number:* <input required type="tel" id="phonenumber" name="phonenumber"></p>
      <p>Client Name: <input type="text" id="clientname" name="clientname"></p>
      <p>Device(s) to be Mounted: <textarea rows="2" id="devices" name="devices" /></textarea></p>
      <p style=" vertical-align:text-top">Comments:<textarea rows="4" name="message"></textarea></p>
      <input type="submit" name="submit" value="Submit Quote" style="position:absolute; margin-top:470px;" />
      <div style="height:3px; background-color:inherit; position:absolute; margin-top:520px; width:100%;"></div>
      <table style=" margin-top:30px; position:absolute; width:675px;">
         <col width="150px" />
         <col width="450px" />
         <col width="75px" />
         <tr>
            <th>Part #</th>
            <th>Items</th>
            <th>Qty.</th>
         <tr >
            <td id="tr1a"></td>
            <td>
               <select onchange="product1(this)" required id="tr1b" style="width:450px;" >
                  <option selected="selected" value="--">--</option>
                  <option value="Direct Mount Socket">Direct Mount Socket</option>
                  <option value="Serrated Direct Mount Socket">Serrated Direct Mount Socket</option>
                  <option value="Vertical Serrated Direct Mount Socket">Vertical Serrated Direct Mount Socket</option>
                  <option value="Full Ring Brackets">Full Ring Brackets (Pair)</option>
                  <option value="Zero Clearance Brackets">Zero Clearance Brackets (Pair)</option>
                  <option value="Square Tube Brackets">Square Tube Brackets (Pair)</option>
                  <option value="T-Track Brackets">T-Track Brackets (Pair)</option>
                  <option value="T-Track Direct Mount Socket">T-Track Direct Mount Socket</option>
                  <option value="Double T-Track Brackets">Double T-Track Brackets (Pair)</option>
                  <option value="Double T-Track Direct Mount Socket">Double T-Track Direct Mount Socket</option>
                  <option value="14 Inch Socket Bar">14 Inch Socket Bar</option>
                  <option value="22 Inch Socket Bar">22 Inch Socket Bar</option>
                  <option value="4 Inch Vertical Bar">4 Inch Vertical Bar</option>
                  <option value="6 Inch Vertical Bar">6 Inch Vertical Bar</option>
                  <option value="12 Inch Vertical Bar">12 Inch Vertical Bar</option>
                  <option value="Adjustable Vertical Bar">Adjustable Vertical Bar</option>
                  <option value="8 Inch Vertical Extension Bar">8 Inch Vertical Extension Bar</option>
                  <option value="16 Inch Vertical Extension Bar">16 Inch Vertical Extension Bar</option>
                  <option value="M2 Arm">M2 Arm</option>
                  <option value="M2X Arm">M2X Arm</option>
                  <option value="M2 Max Arm">M2 Max Arm</option>
                  <option value="Articulating Arm">Articulating Arm</option>
                  <option value="Articulating Arm with Riser">Articulating Arm with Riser</option>
                  <option value="Head and Tail Arm">Head and Tail Arm</option>
                  <option value="Head and Tail Arm with Riser">Head and Tail Arm with Riser</option>
                  <option value="Lockable Wedge Receiver">Lockable Wedge Receiver</option>
                  <option value="Rotary Wedge Receiver">Rotary Wedge Receiver</option>
                  <option value="Rolling Floor Stand">Rolling Floor Stand</option>
                  <option value="Rolling Floor Stand with Extended Legs">Rolling Floor Stand with Extended Legs</option>
                  <option value="Table Clamp">Table Clamp</option>
                  <option value="Table Mount">Table Mount</option>
                  <option value="Wall Track">Wall Track</option>
                  <option value="--">--</option>
                  <option value="Standard Wedge Reciever">Standard Wedge Reciever</option>
                  <option value="Heavy Duty Wedge Reciever">Heavy Duty Wedge Reciever</option>
                  <option value="Ball Joint Wedge Reciever">Ball Joint Wedge Reciever</option>
                  <option value="Multi-Positional Wedge Reciever">Multi-Positional Wedge Reciever</option>
                  <option value="T-Bar Wedge Reciever">T-Bar Wedge Reciever</option>
                  <option value="--">--</option>
                  <option value="4 Inch Tube and Socket">4 Inch Tube and Socket</option>
                  <option value="6 Inch Tube and Socket">6 Inch Tube and Socket</option>
                  <option value="8 Inch Tube and Socket">8 Inch Tube and Socket</option>
                  <option value="10 Inch Tube and Socket">10 Inch Tube and Socket</option>
                  <option value="12 Inch Tube and Socket">12 Inch Tube and Socket</option>
                  <option value="Pivot Base">Pivot Base</option>
                  <option value="Tube Flange Mount">Tube Flange Mount</option>
                  <option value="Socket Only">Socket Only</option>
                  <option value="Whitmyer Socket Only">Whitmyer Socket Only</option>
                  <option value="Universal Switch Mount">Universal Switch Mount</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="Switch Plate">Switch Plate</option>
                  <option value="Tube and Socket Ball Joint">Tube and Socket Ball Joint</option>
                  <option value="Whitmyer Assembly">Whitmyer Assembly</option>
                  <option value="--">--</option>
                  <option value="Heavy Duty Head Switch">Heavy Duty Head Switch</option>
                  <option value="short Heavy Duty Head Switch">Short Heavy Duty Head Switch</option>
                  <option value="Heavy Duty Head Switch 90 Degrees">Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch 90 Degrees">Short Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Heavy Duty Head Switch with Flex">Heavy Duty Head Switch with Flex</option>
                  <option value="Short Heavy Duty Head Switch with Flex">Short Heavy Duty Head Switch with Flex</option>
                  <option value="Heavy Duty Head Switch with Flex 90 Degrees">Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch with Flex 90 Degrees">Short Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Light Touch Head Switch">Light Touch Head Switch</option>
                  <option value="Short Light Touch Head Switch">Short Light Touch Head Switch</option>
                  <option value="Paddle Switch">Paddle Switch</option>
                  <option value="Single Sided Head Switch Mount">Single Sided Head Switch Mount</option>
                  <option value="Double Sided Head Switch Mount">Double Sided Head Switch Mount</option>
                  <option value="Whitmyer to Square Tube Adapter">Whitmyer to Square Tube Adapter</option>
                  <option value="Whitmyer Cobra to Square Tube Adapter">Whitmyer Cobra to Square Tube Adapter</option>
                  <option value="Whitmyer Lynx to Square Tube Adapter">Whitmyer Lynx to Square Tube Adapter</option>
                  <option value="Ottobock to Square Tube Adapter">Ottobock to Square Tube Adapter</option>
                  <option value="Stealth i2i Square Tube Adapter">Stealth i2i Square Tube Adapter</option>
                  <option value="Wobble Switch Plate">Wobble Switch Plate</option>
                  <option value="Jelly Beamer Switch Plate">Jelly Beamer Switch Plate</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="USB Joystick">USB Joystick</option>
                  <option value="USB Joystick with Jacks">USB Joystick with Jacks</option>
               </select>
            </td>
            <td>
               <select style="width:75px;" required id="tr1c" onchange="qty1(this)">
                  <option selected="selected" value="0">-</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10+">10+</option>
               </select>
         </tr>
         <tr>
            <td id="tr2a"></td>
            <td>
               <select onchange="product2(this)" id="tr2b" style="width:450px;">
                  <option selected="selected" value="">--</option>
                  <option value="Direct Mount Socket">Direct Mount Socket</option>
                  <option value="Serrated Direct Mount Socket">Serrated Direct Mount Socket</option>
                  <option value="Vertical Serrated Direct Mount Socket">Vertical Serrated Direct Mount Socket</option>
                  <option value="Full Ring Brackets">Full Ring Brackets (Pair)</option>
                  <option value="Zero Clearance Brackets">Zero Clearance Brackets (Pair)</option>
                  <option value="Square Tube Brackets">Square Tube Brackets (Pair)</option>
                  <option value="T-Track Brackets">T-Track Brackets (Pair)</option>
                  <option value="T-Track Direct Mount Socket">T-Track Direct Mount Socket</option>
                  <option value="Double T-Track Brackets">Double T-Track Brackets (Pair)</option>
                  <option value="Double T-Track Direct Mount Socket">Double T-Track Direct Mount Socket</option>
                  <option value="14 Inch Socket Bar">14 Inch Socket Bar</option>
                  <option value="22 Inch Socket Bar">22 Inch Socket Bar</option>
                  <option value="4 Inch Vertical Bar">4 Inch Vertical Bar</option>
                  <option value="6 Inch Vertical Bar">6 Inch Vertical Bar</option>
                  <option value="12 Inch Vertical Bar">12 Inch Vertical Bar</option>
                  <option value="Adjustable Vertical Bar">Adjustable Vertical Bar</option>
                  <option value="8 Inch Vertical Extension Bar">8 Inch Vertical Extension Bar</option>
                  <option value="16 Inch Vertical Extension Bar">16 Inch Vertical Extension Bar</option>
                  <option value="M2 Arm">M2 Arm</option>
                  <option value="M2X Arm">M2X Arm</option>
                  <option value="M2 Max Arm">M2 Max Arm</option>
                  <option value="Articulating Arm">Articulating Arm</option>
                  <option value="Articulating Arm with Riser">Articulating Arm with Riser</option>
                  <option value="Head and Tail Arm">Head and Tail Arm</option>
                  <option value="Head and Tail Arm with Riser">Head and Tail Arm with Riser</option>
                  <option value="Lockable Wedge Receiver">Lockable Wedge Receiver</option>
                  <option value="Rotary Wedge Receiver">Rotary Wedge Receiver</option>
                  <option value="Rolling Floor Stand">Rolling Floor Stand</option>
                  <option value="Rolling Floor Stand with Extended Legs">Rolling Floor Stand with Extended Legs</option>
                  <option value="Table Clamp">Table Clamp</option>
                  <option value="Table Mount">Table Mount</option>
                  <option value="Wall Track">Wall Track</option>
                  <option value="--">--</option>
                  <option value="Standard Wedge Reciever">Standard Wedge Reciever</option>
                  <option value="Heavy Duty Wedge Reciever">Heavy Duty Wedge Reciever</option>
                  <option value="Ball Joint Wedge Reciever">Ball Joint Wedge Reciever</option>
                  <option value="Multi-Positional Wedge Reciever">Multi-Positional Wedge Reciever</option>
                  <option value="T-Bar Wedge Reciever">T-Bar Wedge Reciever</option>
                  <option value="--">--</option>
                  <option value="4 Inch Tube and Socket">4 Inch Tube and Socket</option>
                  <option value="6 Inch Tube and Socket">6 Inch Tube and Socket</option>
                  <option value="8 Inch Tube and Socket">8 Inch Tube and Socket</option>
                  <option value="10 Inch Tube and Socket">10 Inch Tube and Socket</option>
                  <option value="12 Inch Tube and Socket">12 Inch Tube and Socket</option>
                  <option value="Pivot Base">Pivot Base</option>
                  <option value="Tube Flange Mount">Tube Flange Mount</option>
                  <option value="Socket Only">Socket Only</option>
                  <option value="Whitmyer Socket Only">Whitmyer Socket Only</option>
                  <option value="Universal Switch Mount">Universal Switch Mount</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="Switch Plate">Switch Plate</option>
                  <option value="Tube and Socket Ball Joint">Tube and Socket Ball Joint</option>
                  <option value="Whitmyer Assembly">Whitmyer Assembly</option>
                  <option value="--">--</option>
                  <option value="Heavy Duty Head Switch">Heavy Duty Head Switch</option>
                  <option value="short Heavy Duty Head Switch">Short Heavy Duty Head Switch</option>
                  <option value="Heavy Duty Head Switch 90 Degrees">Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch 90 Degrees">Short Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Heavy Duty Head Switch with Flex">Heavy Duty Head Switch with Flex</option>
                  <option value="Short Heavy Duty Head Switch with Flex">Short Heavy Duty Head Switch with Flex</option>
                  <option value="Heavy Duty Head Switch with Flex 90 Degrees">Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch with Flex 90 Degrees">Short Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Light Touch Head Switch">Light Touch Head Switch</option>
                  <option value="Short Light Touch Head Switch">Short Light Touch Head Switch</option>
                  <option value="Paddle Switch">Paddle Switch</option>
                  <option value="Single Sided Head Switch Mount">Single Sided Head Switch Mount</option>
                  <option value="Double Sided Head Switch Mount">Double Sided Head Switch Mount</option>
                  <option value="Whitmyer to Square Tube Adapter">Whitmyer to Square Tube Adapter</option>
                  <option value="Whitmyer Cobra to Square Tube Adapter">Whitmyer Cobra to Square Tube Adapter</option>
                  <option value="Whitmyer Lynx to Square Tube Adapter">Whitmyer Lynx to Square Tube Adapter</option>
                  <option value="Ottobock to Square Tube Adapter">Ottobock to Square Tube Adapter</option>
                  <option value="Stealth i2i Square Tube Adapter">Stealth i2i Square Tube Adapter</option>
                  <option value="Wobble Switch Plate">Wobble Switch Plate</option>
                  <option value="Jelly Beamer Switch Plate">Jelly Beamer Switch Plate</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="USB Joystick">USB Joystick</option>
                  <option value="USB Joystick with Jacks">USB Joystick with Jacks</option>
               </select>
            </td>
            <td>
               <select style="width:75px;" onchange="qty2(this)" id="tr2c" required>
                  <option selected="selected" value="0">-</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10+">10+</option>
               </select>
            </td>
         </tr>
         <tr>
            <td id="tr3a"></td>
            <td>
               <select onchange="product3(this)" id="tr3b" style="width:450px;">
                  <option selected="selected" value="">--</option>
                  <option value="Direct Mount Socket">Direct Mount Socket</option>
                  <option value="Serrated Direct Mount Socket">Serrated Direct Mount Socket</option>
                  <option value="Vertical Serrated Direct Mount Socket">Vertical Serrated Direct Mount Socket</option>
                  <option value="Full Ring Brackets">Full Ring Brackets (Pair)</option>
                  <option value="Zero Clearance Brackets">Zero Clearance Brackets (Pair)</option>
                  <option value="Square Tube Brackets">Square Tube Brackets (Pair)</option>
                  <option value="T-Track Brackets">T-Track Brackets (Pair)</option>
                  <option value="T-Track Direct Mount Socket">T-Track Direct Mount Socket</option>
                  <option value="Double T-Track Brackets">Double T-Track Brackets (Pair)</option>
                  <option value="Double T-Track Direct Mount Socket">Double T-Track Direct Mount Socket</option>
                  <option value="14 Inch Socket Bar">14 Inch Socket Bar</option>
                  <option value="22 Inch Socket Bar">22 Inch Socket Bar</option>
                  <option value="4 Inch Vertical Bar">4 Inch Vertical Bar</option>
                  <option value="6 Inch Vertical Bar">6 Inch Vertical Bar</option>
                  <option value="12 Inch Vertical Bar">12 Inch Vertical Bar</option>
                  <option value="Adjustable Vertical Bar">Adjustable Vertical Bar</option>
                  <option value="8 Inch Vertical Extension Bar">8 Inch Vertical Extension Bar</option>
                  <option value="16 Inch Vertical Extension Bar">16 Inch Vertical Extension Bar</option>
                  <option value="M2 Arm">M2 Arm</option>
                  <option value="M2X Arm">M2X Arm</option>
                  <option value="M2 Max Arm">M2 Max Arm</option>
                  <option value="Articulating Arm">Articulating Arm</option>
                  <option value="Articulating Arm with Riser">Articulating Arm with Riser</option>
                  <option value="Head and Tail Arm">Head and Tail Arm</option>
                  <option value="Head and Tail Arm with Riser">Head and Tail Arm with Riser</option>
                  <option value="Lockable Wedge Receiver">Lockable Wedge Receiver</option>
                  <option value="Rotary Wedge Receiver">Rotary Wedge Receiver</option>
                  <option value="Rolling Floor Stand">Rolling Floor Stand</option>
                  <option value="Rolling Floor Stand with Extended Legs">Rolling Floor Stand with Extended Legs</option>
                  <option value="Table Clamp">Table Clamp</option>
                  <option value="Table Mount">Table Mount</option>
                  <option value="Wall Track">Wall Track</option>
                  <option value="--">--</option>
                  <option value="Standard Wedge Reciever">Standard Wedge Reciever</option>
                  <option value="Heavy Duty Wedge Reciever">Heavy Duty Wedge Reciever</option>
                  <option value="Ball Joint Wedge Reciever">Ball Joint Wedge Reciever</option>
                  <option value="Multi-Positional Wedge Reciever">Multi-Positional Wedge Reciever</option>
                  <option value="T-Bar Wedge Reciever">T-Bar Wedge Reciever</option>
                  <option value="--">--</option>
                  <option value="4 Inch Tube and Socket">4 Inch Tube and Socket</option>
                  <option value="6 Inch Tube and Socket">6 Inch Tube and Socket</option>
                  <option value="8 Inch Tube and Socket">8 Inch Tube and Socket</option>
                  <option value="10 Inch Tube and Socket">10 Inch Tube and Socket</option>
                  <option value="12 Inch Tube and Socket">12 Inch Tube and Socket</option>
                  <option value="Pivot Base">Pivot Base</option>
                  <option value="Tube Flange Mount">Tube Flange Mount</option>
                  <option value="Socket Only">Socket Only</option>
                  <option value="Whitmyer Socket Only">Whitmyer Socket Only</option>
                  <option value="Universal Switch Mount">Universal Switch Mount</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="Switch Plate">Switch Plate</option>
                  <option value="Tube and Socket Ball Joint">Tube and Socket Ball Joint</option>
                  <option value="Whitmyer Assembly">Whitmyer Assembly</option>
                  <option value="--">--</option>
                  <option value="Heavy Duty Head Switch">Heavy Duty Head Switch</option>
                  <option value="short Heavy Duty Head Switch">Short Heavy Duty Head Switch</option>
                  <option value="Heavy Duty Head Switch 90 Degrees">Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch 90 Degrees">Short Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Heavy Duty Head Switch with Flex">Heavy Duty Head Switch with Flex</option>
                  <option value="Short Heavy Duty Head Switch with Flex">Short Heavy Duty Head Switch with Flex</option>
                  <option value="Heavy Duty Head Switch with Flex 90 Degrees">Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch with Flex 90 Degrees">Short Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Light Touch Head Switch">Light Touch Head Switch</option>
                  <option value="Short Light Touch Head Switch">Short Light Touch Head Switch</option>
                  <option value="Paddle Switch">Paddle Switch</option>
                  <option value="Single Sided Head Switch Mount">Single Sided Head Switch Mount</option>
                  <option value="Double Sided Head Switch Mount">Double Sided Head Switch Mount</option>
                  <option value="Whitmyer to Square Tube Adapter">Whitmyer to Square Tube Adapter</option>
                  <option value="Whitmyer Cobra to Square Tube Adapter">Whitmyer Cobra to Square Tube Adapter</option>
                  <option value="Whitmyer Lynx to Square Tube Adapter">Whitmyer Lynx to Square Tube Adapter</option>
                  <option value="Ottobock to Square Tube Adapter">Ottobock to Square Tube Adapter</option>
                  <option value="Stealth i2i Square Tube Adapter">Stealth i2i Square Tube Adapter</option>
                  <option value="Wobble Switch Plate">Wobble Switch Plate</option>
                  <option value="Jelly Beamer Switch Plate">Jelly Beamer Switch Plate</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="USB Joystick">USB Joystick</option>
                  <option value="USB Joystick with Jacks">USB Joystick with Jacks</option>
               </select>
            </td>
            <td>
               <select style="width:75px;" onchange="qty3(this)" id="tr3c" required>
                  <option selected="selected" value="0">-</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10+">10+</option>
               </select>
            </td>
         </tr>
         <tr>
            <td id="tr4a"></td>
            <td>
               <select onchange="product4(this)" id="tr4b" style="width:450px;">
                  <option selected="selected" value="">--</option>
                  <option value="Direct Mount Socket">Direct Mount Socket</option>
                  <option value="Serrated Direct Mount Socket">Serrated Direct Mount Socket</option>
                  <option value="Vertical Serrated Direct Mount Socket">Vertical Serrated Direct Mount Socket</option>
                  <option value="Full Ring Brackets">Full Ring Brackets (Pair)</option>
                  <option value="Zero Clearance Brackets">Zero Clearance Brackets (Pair)</option>
                  <option value="Square Tube Brackets">Square Tube Brackets (Pair)</option>
                  <option value="T-Track Brackets">T-Track Brackets (Pair)</option>
                  <option value="T-Track Direct Mount Socket">T-Track Direct Mount Socket</option>
                  <option value="Double T-Track Brackets">Double T-Track Brackets (Pair)</option>
                  <option value="Double T-Track Direct Mount Socket">Double T-Track Direct Mount Socket</option>
                  <option value="14 Inch Socket Bar">14 Inch Socket Bar</option>
                  <option value="22 Inch Socket Bar">22 Inch Socket Bar</option>
                  <option value="4 Inch Vertical Bar">4 Inch Vertical Bar</option>
                  <option value="6 Inch Vertical Bar">6 Inch Vertical Bar</option>
                  <option value="12 Inch Vertical Bar">12 Inch Vertical Bar</option>
                  <option value="Adjustable Vertical Bar">Adjustable Vertical Bar</option>
                  <option value="8 Inch Vertical Extension Bar">8 Inch Vertical Extension Bar</option>
                  <option value="16 Inch Vertical Extension Bar">16 Inch Vertical Extension Bar</option>
                  <option value="M2 Arm">M2 Arm</option>
                  <option value="M2X Arm">M2X Arm</option>
                  <option value="M2 Max Arm">M2 Max Arm</option>
                  <option value="Articulating Arm">Articulating Arm</option>
                  <option value="Articulating Arm with Riser">Articulating Arm with Riser</option>
                  <option value="Head and Tail Arm">Head and Tail Arm</option>
                  <option value="Head and Tail Arm with Riser">Head and Tail Arm with Riser</option>
                  <option value="Lockable Wedge Receiver">Lockable Wedge Receiver</option>
                  <option value="Rotary Wedge Receiver">Rotary Wedge Receiver</option>
                  <option value="Rolling Floor Stand">Rolling Floor Stand</option>
                  <option value="Rolling Floor Stand with Extended Legs">Rolling Floor Stand with Extended Legs</option>
                  <option value="Table Clamp">Table Clamp</option>
                  <option value="Table Mount">Table Mount</option>
                  <option value="Wall Track">Wall Track</option>
                  <option value="--">--</option>
                  <option value="Standard Wedge Reciever">Standard Wedge Reciever</option>
                  <option value="Heavy Duty Wedge Reciever">Heavy Duty Wedge Reciever</option>
                  <option value="Ball Joint Wedge Reciever">Ball Joint Wedge Reciever</option>
                  <option value="Multi-Positional Wedge Reciever">Multi-Positional Wedge Reciever</option>
                  <option value="T-Bar Wedge Reciever">T-Bar Wedge Reciever</option>
                  <option value="--">--</option>
                  <option value="4 Inch Tube and Socket">4 Inch Tube and Socket</option>
                  <option value="6 Inch Tube and Socket">6 Inch Tube and Socket</option>
                  <option value="8 Inch Tube and Socket">8 Inch Tube and Socket</option>
                  <option value="10 Inch Tube and Socket">10 Inch Tube and Socket</option>
                  <option value="12 Inch Tube and Socket">12 Inch Tube and Socket</option>
                  <option value="Pivot Base">Pivot Base</option>
                  <option value="Tube Flange Mount">Tube Flange Mount</option>
                  <option value="Socket Only">Socket Only</option>
                  <option value="Whitmyer Socket Only">Whitmyer Socket Only</option>
                  <option value="Universal Switch Mount">Universal Switch Mount</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="Switch Plate">Switch Plate</option>
                  <option value="Tube and Socket Ball Joint">Tube and Socket Ball Joint</option>
                  <option value="Whitmyer Assembly">Whitmyer Assembly</option>
                  <option value="--">--</option>
                  <option value="Heavy Duty Head Switch">Heavy Duty Head Switch</option>
                  <option value="short Heavy Duty Head Switch">Short Heavy Duty Head Switch</option>
                  <option value="Heavy Duty Head Switch 90 Degrees">Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch 90 Degrees">Short Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Heavy Duty Head Switch with Flex">Heavy Duty Head Switch with Flex</option>
                  <option value="Short Heavy Duty Head Switch with Flex">Short Heavy Duty Head Switch with Flex</option>
                  <option value="Heavy Duty Head Switch with Flex 90 Degrees">Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch with Flex 90 Degrees">Short Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Light Touch Head Switch">Light Touch Head Switch</option>
                  <option value="Short Light Touch Head Switch">Short Light Touch Head Switch</option>
                  <option value="Paddle Switch">Paddle Switch</option>
                  <option value="Single Sided Head Switch Mount">Single Sided Head Switch Mount</option>
                  <option value="Double Sided Head Switch Mount">Double Sided Head Switch Mount</option>
                  <option value="Whitmyer to Square Tube Adapter">Whitmyer to Square Tube Adapter</option>
                  <option value="Whitmyer Cobra to Square Tube Adapter">Whitmyer Cobra to Square Tube Adapter</option>
                  <option value="Whitmyer Lynx to Square Tube Adapter">Whitmyer Lynx to Square Tube Adapter</option>
                  <option value="Ottobock to Square Tube Adapter">Ottobock to Square Tube Adapter</option>
                  <option value="Stealth i2i Square Tube Adapter">Stealth i2i Square Tube Adapter</option>
                  <option value="Wobble Switch Plate">Wobble Switch Plate</option>
                  <option value="Jelly Beamer Switch Plate">Jelly Beamer Switch Plate</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="USB Joystick">USB Joystick</option>
                  <option value="USB Joystick with Jacks">USB Joystick with Jacks</option>
               </select>
            </td>
            <td>
               <select style="width:75px;" id="tr4c" onchange="qty4(this)" required>
                  <option selected="selected" value="0">-</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10+">10+</option>
               </select>
            </td>
         </tr>
         <tr>
            <td id="tr5a"></td>
            <td>
               <select onchange="product5(this)" id="tr5b" style="width:450px;">
                  <option selected="selected" value="">--</option>
                  <option value="Direct Mount Socket">Direct Mount Socket</option>
                  <option value="Serrated Direct Mount Socket">Serrated Direct Mount Socket</option>
                  <option value="Vertical Serrated Direct Mount Socket">Vertical Serrated Direct Mount Socket</option>
                  <option value="Full Ring Brackets">Full Ring Brackets (Pair)</option>
                  <option value="Zero Clearance Brackets">Zero Clearance Brackets (Pair)</option>
                  <option value="Square Tube Brackets">Square Tube Brackets (Pair)</option>
                  <option value="T-Track Brackets">T-Track Brackets (Pair)</option>
                  <option value="T-Track Direct Mount Socket">T-Track Direct Mount Socket</option>
                  <option value="Double T-Track Brackets">Double T-Track Brackets (Pair)</option>
                  <option value="Double T-Track Direct Mount Socket">Double T-Track Direct Mount Socket</option>
                  <option value="14 Inch Socket Bar">14 Inch Socket Bar</option>
                  <option value="22 Inch Socket Bar">22 Inch Socket Bar</option>
                  <option value="4 Inch Vertical Bar">4 Inch Vertical Bar</option>
                  <option value="6 Inch Vertical Bar">6 Inch Vertical Bar</option>
                  <option value="12 Inch Vertical Bar">12 Inch Vertical Bar</option>
                  <option value="Adjustable Vertical Bar">Adjustable Vertical Bar</option>
                  <option value="8 Inch Vertical Extension Bar">8 Inch Vertical Extension Bar</option>
                  <option value="16 Inch Vertical Extension Bar">16 Inch Vertical Extension Bar</option>
                  <option value="M2 Arm">M2 Arm</option>
                  <option value="M2X Arm">M2X Arm</option>
                  <option value="M2 Max Arm">M2 Max Arm</option>
                  <option value="Articulating Arm">Articulating Arm</option>
                  <option value="Articulating Arm with Riser">Articulating Arm with Riser</option>
                  <option value="Head and Tail Arm">Head and Tail Arm</option>
                  <option value="Head and Tail Arm with Riser">Head and Tail Arm with Riser</option>
                  <option value="Lockable Wedge Receiver">Lockable Wedge Receiver</option>
                  <option value="Rotary Wedge Receiver">Rotary Wedge Receiver</option>
                  <option value="Rolling Floor Stand">Rolling Floor Stand</option>
                  <option value="Rolling Floor Stand with Extended Legs">Rolling Floor Stand with Extended Legs</option>
                  <option value="Table Clamp">Table Clamp</option>
                  <option value="Table Mount">Table Mount</option>
                  <option value="Wall Track">Wall Track</option>
                  <option value="--">--</option>
                  <option value="Standard Wedge Reciever">Standard Wedge Reciever</option>
                  <option value="Heavy Duty Wedge Reciever">Heavy Duty Wedge Reciever</option>
                  <option value="Ball Joint Wedge Reciever">Ball Joint Wedge Reciever</option>
                  <option value="Multi-Positional Wedge Reciever">Multi-Positional Wedge Reciever</option>
                  <option value="T-Bar Wedge Reciever">T-Bar Wedge Reciever</option>
                  <option value="--">--</option>
                  <option value="4 Inch Tube and Socket">4 Inch Tube and Socket</option>
                  <option value="6 Inch Tube and Socket">6 Inch Tube and Socket</option>
                  <option value="8 Inch Tube and Socket">8 Inch Tube and Socket</option>
                  <option value="10 Inch Tube and Socket">10 Inch Tube and Socket</option>
                  <option value="12 Inch Tube and Socket">12 Inch Tube and Socket</option>
                  <option value="Pivot Base">Pivot Base</option>
                  <option value="Tube Flange Mount">Tube Flange Mount</option>
                  <option value="Socket Only">Socket Only</option>
                  <option value="Whitmyer Socket Only">Whitmyer Socket Only</option>
                  <option value="Universal Switch Mount">Universal Switch Mount</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="Switch Plate">Switch Plate</option>
                  <option value="Tube and Socket Ball Joint">Tube and Socket Ball Joint</option>
                  <option value="Whitmyer Assembly">Whitmyer Assembly</option>
                  <option value="--">--</option>
                  <option value="Heavy Duty Head Switch">Heavy Duty Head Switch</option>
                  <option value="short Heavy Duty Head Switch">Short Heavy Duty Head Switch</option>
                  <option value="Heavy Duty Head Switch 90 Degrees">Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch 90 Degrees">Short Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Heavy Duty Head Switch with Flex">Heavy Duty Head Switch with Flex</option>
                  <option value="Short Heavy Duty Head Switch with Flex">Short Heavy Duty Head Switch with Flex</option>
                  <option value="Heavy Duty Head Switch with Flex 90 Degrees">Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch with Flex 90 Degrees">Short Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Light Touch Head Switch">Light Touch Head Switch</option>
                  <option value="Short Light Touch Head Switch">Short Light Touch Head Switch</option>
                  <option value="Paddle Switch">Paddle Switch</option>
                  <option value="Single Sided Head Switch Mount">Single Sided Head Switch Mount</option>
                  <option value="Double Sided Head Switch Mount">Double Sided Head Switch Mount</option>
                  <option value="Whitmyer to Square Tube Adapter">Whitmyer to Square Tube Adapter</option>
                  <option value="Whitmyer Cobra to Square Tube Adapter">Whitmyer Cobra to Square Tube Adapter</option>
                  <option value="Whitmyer Lynx to Square Tube Adapter">Whitmyer Lynx to Square Tube Adapter</option>
                  <option value="Ottobock to Square Tube Adapter">Ottobock to Square Tube Adapter</option>
                  <option value="Stealth i2i Square Tube Adapter">Stealth i2i Square Tube Adapter</option>
                  <option value="Wobble Switch Plate">Wobble Switch Plate</option>
                  <option value="Jelly Beamer Switch Plate">Jelly Beamer Switch Plate</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="USB Joystick">USB Joystick</option>
                  <option value="USB Joystick with Jacks">USB Joystick with Jacks</option>
               </select>
            </td>
            <td>
               <select style="width:75px;" id="tr5c" onchange="qty5(this)" required>
                  <option selected="selected" value="0">-</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10+">10+</option>
               </select>
            </td>
         </tr>
         <tr>
            <td id="tr6a"></td>
            <td>
               <select onchange="product6(this)" id="tr6b" style="width:450px;">
                  <option selected="selected" value="">--</option>
                  <option value="Direct Mount Socket">Direct Mount Socket</option>
                  <option value="Serrated Direct Mount Socket">Serrated Direct Mount Socket</option>
                  <option value="Vertical Serrated Direct Mount Socket">Vertical Serrated Direct Mount Socket</option>
                  <option value="Full Ring Brackets">Full Ring Brackets (Pair)</option>
                  <option value="Zero Clearance Brackets">Zero Clearance Brackets (Pair)</option>
                  <option value="Square Tube Brackets">Square Tube Brackets (Pair)</option>
                  <option value="T-Track Brackets">T-Track Brackets (Pair)</option>
                  <option value="T-Track Direct Mount Socket">T-Track Direct Mount Socket</option>
                  <option value="Double T-Track Brackets">Double T-Track Brackets (Pair)</option>
                  <option value="Double T-Track Direct Mount Socket">Double T-Track Direct Mount Socket</option>
                  <option value="14 Inch Socket Bar">14 Inch Socket Bar</option>
                  <option value="22 Inch Socket Bar">22 Inch Socket Bar</option>
                  <option value="4 Inch Vertical Bar">4 Inch Vertical Bar</option>
                  <option value="6 Inch Vertical Bar">6 Inch Vertical Bar</option>
                  <option value="12 Inch Vertical Bar">12 Inch Vertical Bar</option>
                  <option value="Adjustable Vertical Bar">Adjustable Vertical Bar</option>
                  <option value="8 Inch Vertical Extension Bar">8 Inch Vertical Extension Bar</option>
                  <option value="16 Inch Vertical Extension Bar">16 Inch Vertical Extension Bar</option>
                  <option value="M2 Arm">M2 Arm</option>
                  <option value="M2X Arm">M2X Arm</option>
                  <option value="M2 Max Arm">M2 Max Arm</option>
                  <option value="Articulating Arm">Articulating Arm</option>
                  <option value="Articulating Arm with Riser">Articulating Arm with Riser</option>
                  <option value="Head and Tail Arm">Head and Tail Arm</option>
                  <option value="Head and Tail Arm with Riser">Head and Tail Arm with Riser</option>
                  <option value="Lockable Wedge Receiver">Lockable Wedge Receiver</option>
                  <option value="Rotary Wedge Receiver">Rotary Wedge Receiver</option>
                  <option value="Rolling Floor Stand">Rolling Floor Stand</option>
                  <option value="Rolling Floor Stand with Extended Legs">Rolling Floor Stand with Extended Legs</option>
                  <option value="Table Clamp">Table Clamp</option>
                  <option value="Table Mount">Table Mount</option>
                  <option value="Wall Track">Wall Track</option>
                  <option value="--">--</option>
                  <option value="Standard Wedge Reciever">Standard Wedge Reciever</option>
                  <option value="Heavy Duty Wedge Reciever">Heavy Duty Wedge Reciever</option>
                  <option value="Ball Joint Wedge Reciever">Ball Joint Wedge Reciever</option>
                  <option value="Multi-Positional Wedge Reciever">Multi-Positional Wedge Reciever</option>
                  <option value="T-Bar Wedge Reciever">T-Bar Wedge Reciever</option>
                  <option value="--">--</option>
                  <option value="4 Inch Tube and Socket">4 Inch Tube and Socket</option>
                  <option value="6 Inch Tube and Socket">6 Inch Tube and Socket</option>
                  <option value="8 Inch Tube and Socket">8 Inch Tube and Socket</option>
                  <option value="10 Inch Tube and Socket">10 Inch Tube and Socket</option>
                  <option value="12 Inch Tube and Socket">12 Inch Tube and Socket</option>
                  <option value="Pivot Base">Pivot Base</option>
                  <option value="Tube Flange Mount">Tube Flange Mount</option>
                  <option value="Socket Only">Socket Only</option>
                  <option value="Whitmyer Socket Only">Whitmyer Socket Only</option>
                  <option value="Universal Switch Mount">Universal Switch Mount</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="Switch Plate">Switch Plate</option>
                  <option value="Tube and Socket Ball Joint">Tube and Socket Ball Joint</option>
                  <option value="Whitmyer Assembly">Whitmyer Assembly</option>
                  <option value="--">--</option>
                  <option value="Heavy Duty Head Switch">Heavy Duty Head Switch</option>
                  <option value="short Heavy Duty Head Switch">Short Heavy Duty Head Switch</option>
                  <option value="Heavy Duty Head Switch 90 Degrees">Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch 90 Degrees">Short Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Heavy Duty Head Switch with Flex">Heavy Duty Head Switch with Flex</option>
                  <option value="Short Heavy Duty Head Switch with Flex">Short Heavy Duty Head Switch with Flex</option>
                  <option value="Heavy Duty Head Switch with Flex 90 Degrees">Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch with Flex 90 Degrees">Short Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Light Touch Head Switch">Light Touch Head Switch</option>
                  <option value="Short Light Touch Head Switch">Short Light Touch Head Switch</option>
                  <option value="Paddle Switch">Paddle Switch</option>
                  <option value="Single Sided Head Switch Mount">Single Sided Head Switch Mount</option>
                  <option value="Double Sided Head Switch Mount">Double Sided Head Switch Mount</option>
                  <option value="Whitmyer to Square Tube Adapter">Whitmyer to Square Tube Adapter</option>
                  <option value="Whitmyer Cobra to Square Tube Adapter">Whitmyer Cobra to Square Tube Adapter</option>
                  <option value="Whitmyer Lynx to Square Tube Adapter">Whitmyer Lynx to Square Tube Adapter</option>
                  <option value="Ottobock to Square Tube Adapter">Ottobock to Square Tube Adapter</option>
                  <option value="Stealth i2i Square Tube Adapter">Stealth i2i Square Tube Adapter</option>
                  <option value="Wobble Switch Plate">Wobble Switch Plate</option>
                  <option value="Jelly Beamer Switch Plate">Jelly Beamer Switch Plate</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="USB Joystick">USB Joystick</option>
                  <option value="USB Joystick with Jacks">USB Joystick with Jacks</option>
               </select>
            </td>
            <td>
               <select style="width:75px;" id="tr6c" onchange="qty6(this)" required>
                  <option selected="selected" value="0">-</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10+">10+</option>
               </select>
            </td>
         </tr>
         <tr>
            <td id="tr7a"></td>
            <td>
               <select onchange="product7(this)" id="tr7b" style="width:450px;">
                  <option selected="selected" value="">--</option>
                  <option value="Direct Mount Socket">Direct Mount Socket</option>
                  <option value="Serrated Direct Mount Socket">Serrated Direct Mount Socket</option>
                  <option value="Vertical Serrated Direct Mount Socket">Vertical Serrated Direct Mount Socket</option>
                  <option value="Full Ring Brackets">Full Ring Brackets (Pair)</option>
                  <option value="Zero Clearance Brackets">Zero Clearance Brackets (Pair)</option>
                  <option value="Square Tube Brackets">Square Tube Brackets (Pair)</option>
                  <option value="T-Track Brackets">T-Track Brackets (Pair)</option>
                  <option value="T-Track Direct Mount Socket">T-Track Direct Mount Socket</option>
                  <option value="Double T-Track Brackets">Double T-Track Brackets (Pair)</option>
                  <option value="Double T-Track Direct Mount Socket">Double T-Track Direct Mount Socket</option>
                  <option value="14 Inch Socket Bar">14 Inch Socket Bar</option>
                  <option value="22 Inch Socket Bar">22 Inch Socket Bar</option>
                  <option value="4 Inch Vertical Bar">4 Inch Vertical Bar</option>
                  <option value="6 Inch Vertical Bar">6 Inch Vertical Bar</option>
                  <option value="12 Inch Vertical Bar">12 Inch Vertical Bar</option>
                  <option value="Adjustable Vertical Bar">Adjustable Vertical Bar</option>
                  <option value="8 Inch Vertical Extension Bar">8 Inch Vertical Extension Bar</option>
                  <option value="16 Inch Vertical Extension Bar">16 Inch Vertical Extension Bar</option>
                  <option value="M2 Arm">M2 Arm</option>
                  <option value="M2X Arm">M2X Arm</option>
                  <option value="M2 Max Arm">M2 Max Arm</option>
                  <option value="Articulating Arm">Articulating Arm</option>
                  <option value="Articulating Arm with Riser">Articulating Arm with Riser</option>
                  <option value="Head and Tail Arm">Head and Tail Arm</option>
                  <option value="Head and Tail Arm with Riser">Head and Tail Arm with Riser</option>
                  <option value="Lockable Wedge Receiver">Lockable Wedge Receiver</option>
                  <option value="Rotary Wedge Receiver">Rotary Wedge Receiver</option>
                  <option value="Rolling Floor Stand">Rolling Floor Stand</option>
                  <option value="Rolling Floor Stand with Extended Legs">Rolling Floor Stand with Extended Legs</option>
                  <option value="Table Clamp">Table Clamp</option>
                  <option value="Table Mount">Table Mount</option>
                  <option value="Wall Track">Wall Track</option>
                  <option value="--">--</option>
                  <option value="Standard Wedge Reciever">Standard Wedge Reciever</option>
                  <option value="Heavy Duty Wedge Reciever">Heavy Duty Wedge Reciever</option>
                  <option value="Ball Joint Wedge Reciever">Ball Joint Wedge Reciever</option>
                  <option value="Multi-Positional Wedge Reciever">Multi-Positional Wedge Reciever</option>
                  <option value="T-Bar Wedge Reciever">T-Bar Wedge Reciever</option>
                  <option value="--">--</option>
                  <option value="4 Inch Tube and Socket">4 Inch Tube and Socket</option>
                  <option value="6 Inch Tube and Socket">6 Inch Tube and Socket</option>
                  <option value="8 Inch Tube and Socket">8 Inch Tube and Socket</option>
                  <option value="10 Inch Tube and Socket">10 Inch Tube and Socket</option>
                  <option value="12 Inch Tube and Socket">12 Inch Tube and Socket</option>
                  <option value="Pivot Base">Pivot Base</option>
                  <option value="Tube Flange Mount">Tube Flange Mount</option>
                  <option value="Socket Only">Socket Only</option>
                  <option value="Whitmyer Socket Only">Whitmyer Socket Only</option>
                  <option value="Universal Switch Mount">Universal Switch Mount</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="Switch Plate">Switch Plate</option>
                  <option value="Tube and Socket Ball Joint">Tube and Socket Ball Joint</option>
                  <option value="Whitmyer Assembly">Whitmyer Assembly</option>
                  <option value="--">--</option>
                  <option value="Heavy Duty Head Switch">Heavy Duty Head Switch</option>
                  <option value="short Heavy Duty Head Switch">Short Heavy Duty Head Switch</option>
                  <option value="Heavy Duty Head Switch 90 Degrees">Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch 90 Degrees">Short Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Heavy Duty Head Switch with Flex">Heavy Duty Head Switch with Flex</option>
                  <option value="Short Heavy Duty Head Switch with Flex">Short Heavy Duty Head Switch with Flex</option>
                  <option value="Heavy Duty Head Switch with Flex 90 Degrees">Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch with Flex 90 Degrees">Short Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Light Touch Head Switch">Light Touch Head Switch</option>
                  <option value="Short Light Touch Head Switch">Short Light Touch Head Switch</option>
                  <option value="Paddle Switch">Paddle Switch</option>
                  <option value="Single Sided Head Switch Mount">Single Sided Head Switch Mount</option>
                  <option value="Double Sided Head Switch Mount">Double Sided Head Switch Mount</option>
                  <option value="Whitmyer to Square Tube Adapter">Whitmyer to Square Tube Adapter</option>
                  <option value="Whitmyer Cobra to Square Tube Adapter">Whitmyer Cobra to Square Tube Adapter</option>
                  <option value="Whitmyer Lynx to Square Tube Adapter">Whitmyer Lynx to Square Tube Adapter</option>
                  <option value="Ottobock to Square Tube Adapter">Ottobock to Square Tube Adapter</option>
                  <option value="Stealth i2i Square Tube Adapter">Stealth i2i Square Tube Adapter</option>
                  <option value="Wobble Switch Plate">Wobble Switch Plate</option>
                  <option value="Jelly Beamer Switch Plate">Jelly Beamer Switch Plate</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="USB Joystick">USB Joystick</option>
                  <option value="USB Joystick with Jacks">USB Joystick with Jacks</option>
               </select>
            </td>
            <td>
               <select style="width:75px;" id="tr7c" onchange="qty7(this)" required>
                  <option selected="selected" value="0">-</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10+">10+</option>
               </select>
            </td>
         </tr>
         <tr>
            <td id="tr8a"></td>
            <td>
               <select onchange="product8(this)" id="tr8b" style="width:450px;">
                  <option selected="selected" value="">--</option>
                  <option value="Direct Mount Socket">Direct Mount Socket</option>
                  <option value="Serrated Direct Mount Socket">Serrated Direct Mount Socket</option>
                  <option value="Vertical Serrated Direct Mount Socket">Vertical Serrated Direct Mount Socket</option>
                  <option value="Full Ring Brackets">Full Ring Brackets (Pair)</option>
                  <option value="Zero Clearance Brackets">Zero Clearance Brackets (Pair)</option>
                  <option value="Square Tube Brackets">Square Tube Brackets (Pair)</option>
                  <option value="T-Track Brackets">T-Track Brackets (Pair)</option>
                  <option value="T-Track Direct Mount Socket">T-Track Direct Mount Socket</option>
                  <option value="Double T-Track Brackets">Double T-Track Brackets (Pair)</option>
                  <option value="Double T-Track Direct Mount Socket">Double T-Track Direct Mount Socket</option>
                  <option value="14 Inch Socket Bar">14 Inch Socket Bar</option>
                  <option value="22 Inch Socket Bar">22 Inch Socket Bar</option>
                  <option value="4 Inch Vertical Bar">4 Inch Vertical Bar</option>
                  <option value="6 Inch Vertical Bar">6 Inch Vertical Bar</option>
                  <option value="12 Inch Vertical Bar">12 Inch Vertical Bar</option>
                  <option value="Adjustable Vertical Bar">Adjustable Vertical Bar</option>
                  <option value="8 Inch Vertical Extension Bar">8 Inch Vertical Extension Bar</option>
                  <option value="16 Inch Vertical Extension Bar">16 Inch Vertical Extension Bar</option>
                  <option value="M2 Arm">M2 Arm</option>
                  <option value="M2X Arm">M2X Arm</option>
                  <option value="M2 Max Arm">M2 Max Arm</option>
                  <option value="Articulating Arm">Articulating Arm</option>
                  <option value="Articulating Arm with Riser">Articulating Arm with Riser</option>
                  <option value="Head and Tail Arm">Head and Tail Arm</option>
                  <option value="Head and Tail Arm with Riser">Head and Tail Arm with Riser</option>
                  <option value="Lockable Wedge Receiver">Lockable Wedge Receiver</option>
                  <option value="Rotary Wedge Receiver">Rotary Wedge Receiver</option>
                  <option value="Rolling Floor Stand">Rolling Floor Stand</option>
                  <option value="Rolling Floor Stand with Extended Legs">Rolling Floor Stand with Extended Legs</option>
                  <option value="Table Clamp">Table Clamp</option>
                  <option value="Table Mount">Table Mount</option>
                  <option value="Wall Track">Wall Track</option>
                  <option value="--">--</option>
                  <option value="Standard Wedge Reciever">Standard Wedge Reciever</option>
                  <option value="Heavy Duty Wedge Reciever">Heavy Duty Wedge Reciever</option>
                  <option value="Ball Joint Wedge Reciever">Ball Joint Wedge Reciever</option>
                  <option value="Multi-Positional Wedge Reciever">Multi-Positional Wedge Reciever</option>
                  <option value="T-Bar Wedge Reciever">T-Bar Wedge Reciever</option>
                  <option value="--">--</option>
                  <option value="4 Inch Tube and Socket">4 Inch Tube and Socket</option>
                  <option value="6 Inch Tube and Socket">6 Inch Tube and Socket</option>
                  <option value="8 Inch Tube and Socket">8 Inch Tube and Socket</option>
                  <option value="10 Inch Tube and Socket">10 Inch Tube and Socket</option>
                  <option value="12 Inch Tube and Socket">12 Inch Tube and Socket</option>
                  <option value="Pivot Base">Pivot Base</option>
                  <option value="Tube Flange Mount">Tube Flange Mount</option>
                  <option value="Socket Only">Socket Only</option>
                  <option value="Whitmyer Socket Only">Whitmyer Socket Only</option>
                  <option value="Universal Switch Mount">Universal Switch Mount</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="Switch Plate">Switch Plate</option>
                  <option value="Tube and Socket Ball Joint">Tube and Socket Ball Joint</option>
                  <option value="Whitmyer Assembly">Whitmyer Assembly</option>
                  <option value="--">--</option>
                  <option value="Heavy Duty Head Switch">Heavy Duty Head Switch</option>
                  <option value="short Heavy Duty Head Switch">Short Heavy Duty Head Switch</option>
                  <option value="Heavy Duty Head Switch 90 Degrees">Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch 90 Degrees">Short Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Heavy Duty Head Switch with Flex">Heavy Duty Head Switch with Flex</option>
                  <option value="Short Heavy Duty Head Switch with Flex">Short Heavy Duty Head Switch with Flex</option>
                  <option value="Heavy Duty Head Switch with Flex 90 Degrees">Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch with Flex 90 Degrees">Short Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Light Touch Head Switch">Light Touch Head Switch</option>
                  <option value="Short Light Touch Head Switch">Short Light Touch Head Switch</option>
                  <option value="Paddle Switch">Paddle Switch</option>
                  <option value="Single Sided Head Switch Mount">Single Sided Head Switch Mount</option>
                  <option value="Double Sided Head Switch Mount">Double Sided Head Switch Mount</option>
                  <option value="Whitmyer to Square Tube Adapter">Whitmyer to Square Tube Adapter</option>
                  <option value="Whitmyer Cobra to Square Tube Adapter">Whitmyer Cobra to Square Tube Adapter</option>
                  <option value="Whitmyer Lynx to Square Tube Adapter">Whitmyer Lynx to Square Tube Adapter</option>
                  <option value="Ottobock to Square Tube Adapter">Ottobock to Square Tube Adapter</option>
                  <option value="Stealth i2i Square Tube Adapter">Stealth i2i Square Tube Adapter</option>
                  <option value="Wobble Switch Plate">Wobble Switch Plate</option>
                  <option value="Jelly Beamer Switch Plate">Jelly Beamer Switch Plate</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="USB Joystick">USB Joystick</option>
                  <option value="USB Joystick with Jacks">USB Joystick with Jacks</option>
               </select>
            </td>
            <td>
               <select style="width:75px;" id="tr8c" onchange="qty8(this)" required>
                  <option selected="selected" value="0">-</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10+">10+</option>
               </select>
            </td>
         </tr>
         <tr>
            <td id="tr9a"></td>
            <td>
               <select onchange="product9(this)" id="tr9b" style="width:450px;">
                  <option selected="selected" value="">--</option>
                  <option value="Direct Mount Socket">Direct Mount Socket</option>
                  <option value="Serrated Direct Mount Socket">Serrated Direct Mount Socket</option>
                  <option value="Vertical Serrated Direct Mount Socket">Vertical Serrated Direct Mount Socket</option>
                  <option value="Full Ring Brackets">Full Ring Brackets (Pair)</option>
                  <option value="Zero Clearance Brackets">Zero Clearance Brackets (Pair)</option>
                  <option value="Square Tube Brackets">Square Tube Brackets (Pair)</option>
                  <option value="T-Track Brackets">T-Track Brackets (Pair)</option>
                  <option value="T-Track Direct Mount Socket">T-Track Direct Mount Socket</option>
                  <option value="Double T-Track Brackets">Double T-Track Brackets (Pair)</option>
                  <option value="Double T-Track Direct Mount Socket">Double T-Track Direct Mount Socket</option>
                  <option value="14 Inch Socket Bar">14 Inch Socket Bar</option>
                  <option value="22 Inch Socket Bar">22 Inch Socket Bar</option>
                  <option value="4 Inch Vertical Bar">4 Inch Vertical Bar</option>
                  <option value="6 Inch Vertical Bar">6 Inch Vertical Bar</option>
                  <option value="12 Inch Vertical Bar">12 Inch Vertical Bar</option>
                  <option value="Adjustable Vertical Bar">Adjustable Vertical Bar</option>
                  <option value="8 Inch Vertical Extension Bar">8 Inch Vertical Extension Bar</option>
                  <option value="16 Inch Vertical Extension Bar">16 Inch Vertical Extension Bar</option>
                  <option value="M2 Arm">M2 Arm</option>
                  <option value="M2X Arm">M2X Arm</option>
                  <option value="M2 Max Arm">M2 Max Arm</option>
                  <option value="Articulating Arm">Articulating Arm</option>
                  <option value="Articulating Arm with Riser">Articulating Arm with Riser</option>
                  <option value="Head and Tail Arm">Head and Tail Arm</option>
                  <option value="Head and Tail Arm with Riser">Head and Tail Arm with Riser</option>
                  <option value="Lockable Wedge Receiver">Lockable Wedge Receiver</option>
                  <option value="Rotary Wedge Receiver">Rotary Wedge Receiver</option>
                  <option value="Rolling Floor Stand">Rolling Floor Stand</option>
                  <option value="Rolling Floor Stand with Extended Legs">Rolling Floor Stand with Extended Legs</option>
                  <option value="Table Clamp">Table Clamp</option>
                  <option value="Table Mount">Table Mount</option>
                  <option value="Wall Track">Wall Track</option>
                  <option value="--">--</option>
                  <option value="Standard Wedge Reciever">Standard Wedge Reciever</option>
                  <option value="Heavy Duty Wedge Reciever">Heavy Duty Wedge Reciever</option>
                  <option value="Ball Joint Wedge Reciever">Ball Joint Wedge Reciever</option>
                  <option value="Multi-Positional Wedge Reciever">Multi-Positional Wedge Reciever</option>
                  <option value="T-Bar Wedge Reciever">T-Bar Wedge Reciever</option>
                  <option value="--">--</option>
                  <option value="4 Inch Tube and Socket">4 Inch Tube and Socket</option>
                  <option value="6 Inch Tube and Socket">6 Inch Tube and Socket</option>
                  <option value="8 Inch Tube and Socket">8 Inch Tube and Socket</option>
                  <option value="10 Inch Tube and Socket">10 Inch Tube and Socket</option>
                  <option value="12 Inch Tube and Socket">12 Inch Tube and Socket</option>
                  <option value="Pivot Base">Pivot Base</option>
                  <option value="Tube Flange Mount">Tube Flange Mount</option>
                  <option value="Socket Only">Socket Only</option>
                  <option value="Whitmyer Socket Only">Whitmyer Socket Only</option>
                  <option value="Universal Switch Mount">Universal Switch Mount</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="Switch Plate">Switch Plate</option>
                  <option value="Tube and Socket Ball Joint">Tube and Socket Ball Joint</option>
                  <option value="Whitmyer Assembly">Whitmyer Assembly</option>
                  <option value="--">--</option>
                  <option value="Heavy Duty Head Switch">Heavy Duty Head Switch</option>
                  <option value="short Heavy Duty Head Switch">Short Heavy Duty Head Switch</option>
                  <option value="Heavy Duty Head Switch 90 Degrees">Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch 90 Degrees">Short Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Heavy Duty Head Switch with Flex">Heavy Duty Head Switch with Flex</option>
                  <option value="Short Heavy Duty Head Switch with Flex">Short Heavy Duty Head Switch with Flex</option>
                  <option value="Heavy Duty Head Switch with Flex 90 Degrees">Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch with Flex 90 Degrees">Short Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Light Touch Head Switch">Light Touch Head Switch</option>
                  <option value="Short Light Touch Head Switch">Short Light Touch Head Switch</option>
                  <option value="Paddle Switch">Paddle Switch</option>
                  <option value="Single Sided Head Switch Mount">Single Sided Head Switch Mount</option>
                  <option value="Double Sided Head Switch Mount">Double Sided Head Switch Mount</option>
                  <option value="Whitmyer to Square Tube Adapter">Whitmyer to Square Tube Adapter</option>
                  <option value="Whitmyer Cobra to Square Tube Adapter">Whitmyer Cobra to Square Tube Adapter</option>
                  <option value="Whitmyer Lynx to Square Tube Adapter">Whitmyer Lynx to Square Tube Adapter</option>
                  <option value="Ottobock to Square Tube Adapter">Ottobock to Square Tube Adapter</option>
                  <option value="Stealth i2i Square Tube Adapter">Stealth i2i Square Tube Adapter</option>
                  <option value="Wobble Switch Plate">Wobble Switch Plate</option>
                  <option value="Jelly Beamer Switch Plate">Jelly Beamer Switch Plate</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="USB Joystick">USB Joystick</option>
                  <option value="USB Joystick with Jacks">USB Joystick with Jacks</option>
               </select>
            </td>
            <td>
               <select style="width:75px;" id="tr9c" onchange="qty9(this)" required>
                  <option selected="selected" value="0">-</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10+">10+</option>
               </select>
            </td>
         </tr>
         <tr>
            <td id="tr10a"></td>
            <td>
               <select onchange="product10(this)" id="tr10b" style="width:450px;">
                  <option selected="selected" value="">--</option>
                  <option value="Direct Mount Socket">Direct Mount Socket</option>
                  <option value="Serrated Direct Mount Socket">Serrated Direct Mount Socket</option>
                  <option value="Vertical Serrated Direct Mount Socket">Vertical Serrated Direct Mount Socket</option>
                  <option value="Full Ring Brackets">Full Ring Brackets (Pair)</option>
                  <option value="Zero Clearance Brackets">Zero Clearance Brackets (Pair)</option>
                  <option value="Square Tube Brackets">Square Tube Brackets (Pair)</option>
                  <option value="T-Track Brackets">T-Track Brackets (Pair)</option>
                  <option value="T-Track Direct Mount Socket">T-Track Direct Mount Socket</option>
                  <option value="Double T-Track Brackets">Double T-Track Brackets (Pair)</option>
                  <option value="Double T-Track Direct Mount Socket">Double T-Track Direct Mount Socket</option>
                  <option value="14 Inch Socket Bar">14 Inch Socket Bar</option>
                  <option value="22 Inch Socket Bar">22 Inch Socket Bar</option>
                  <option value="4 Inch Vertical Bar">4 Inch Vertical Bar</option>
                  <option value="6 Inch Vertical Bar">6 Inch Vertical Bar</option>
                  <option value="12 Inch Vertical Bar">12 Inch Vertical Bar</option>
                  <option value="Adjustable Vertical Bar">Adjustable Vertical Bar</option>
                  <option value="8 Inch Vertical Extension Bar">8 Inch Vertical Extension Bar</option>
                  <option value="16 Inch Vertical Extension Bar">16 Inch Vertical Extension Bar</option>
                  <option value="M2 Arm">M2 Arm</option>
                  <option value="M2X Arm">M2X Arm</option>
                  <option value="M2 Max Arm">M2 Max Arm</option>
                  <option value="Articulating Arm">Articulating Arm</option>
                  <option value="Articulating Arm with Riser">Articulating Arm with Riser</option>
                  <option value="Head and Tail Arm">Head and Tail Arm</option>
                  <option value="Head and Tail Arm with Riser">Head and Tail Arm with Riser</option>
                  <option value="Lockable Wedge Receiver">Lockable Wedge Receiver</option>
                  <option value="Rotary Wedge Receiver">Rotary Wedge Receiver</option>
                  <option value="Rolling Floor Stand">Rolling Floor Stand</option>
                  <option value="Rolling Floor Stand with Extended Legs">Rolling Floor Stand with Extended Legs</option>
                  <option value="Table Clamp">Table Clamp</option>
                  <option value="Table Mount">Table Mount</option>
                  <option value="Wall Track">Wall Track</option>
                  <option value="--">--</option>
                  <option value="Standard Wedge Reciever">Standard Wedge Reciever</option>
                  <option value="Heavy Duty Wedge Reciever">Heavy Duty Wedge Reciever</option>
                  <option value="Ball Joint Wedge Reciever">Ball Joint Wedge Reciever</option>
                  <option value="Multi-Positional Wedge Reciever">Multi-Positional Wedge Reciever</option>
                  <option value="T-Bar Wedge Reciever">T-Bar Wedge Reciever</option>
                  <option value="--">--</option>
                  <option value="4 Inch Tube and Socket">4 Inch Tube and Socket</option>
                  <option value="6 Inch Tube and Socket">6 Inch Tube and Socket</option>
                  <option value="8 Inch Tube and Socket">8 Inch Tube and Socket</option>
                  <option value="10 Inch Tube and Socket">10 Inch Tube and Socket</option>
                  <option value="12 Inch Tube and Socket">12 Inch Tube and Socket</option>
                  <option value="Pivot Base">Pivot Base</option>
                  <option value="Tube Flange Mount">Tube Flange Mount</option>
                  <option value="Socket Only">Socket Only</option>
                  <option value="Whitmyer Socket Only">Whitmyer Socket Only</option>
                  <option value="Universal Switch Mount">Universal Switch Mount</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="Switch Plate">Switch Plate</option>
                  <option value="Tube and Socket Ball Joint">Tube and Socket Ball Joint</option>
                  <option value="Whitmyer Assembly">Whitmyer Assembly</option>
                  <option value="--">--</option>
                  <option value="Heavy Duty Head Switch">Heavy Duty Head Switch</option>
                  <option value="short Heavy Duty Head Switch">Short Heavy Duty Head Switch</option>
                  <option value="Heavy Duty Head Switch 90 Degrees">Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch 90 Degrees">Short Heavy Duty Head Switch 90 Degrees</option>
                  <option value="Heavy Duty Head Switch with Flex">Heavy Duty Head Switch with Flex</option>
                  <option value="Short Heavy Duty Head Switch with Flex">Short Heavy Duty Head Switch with Flex</option>
                  <option value="Heavy Duty Head Switch with Flex 90 Degrees">Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Short Heavy Duty Head Switch with Flex 90 Degrees">Short Heavy Duty Head Switch with Flex 90 Degrees</option>
                  <option value="Light Touch Head Switch">Light Touch Head Switch</option>
                  <option value="Short Light Touch Head Switch">Short Light Touch Head Switch</option>
                  <option value="Paddle Switch">Paddle Switch</option>
                  <option value="Single Sided Head Switch Mount">Single Sided Head Switch Mount</option>
                  <option value="Double Sided Head Switch Mount">Double Sided Head Switch Mount</option>
                  <option value="Whitmyer to Square Tube Adapter">Whitmyer to Square Tube Adapter</option>
                  <option value="Whitmyer Cobra to Square Tube Adapter">Whitmyer Cobra to Square Tube Adapter</option>
                  <option value="Whitmyer Lynx to Square Tube Adapter">Whitmyer Lynx to Square Tube Adapter</option>
                  <option value="Ottobock to Square Tube Adapter">Ottobock to Square Tube Adapter</option>
                  <option value="Stealth i2i Square Tube Adapter">Stealth i2i Square Tube Adapter</option>
                  <option value="Wobble Switch Plate">Wobble Switch Plate</option>
                  <option value="Jelly Beamer Switch Plate">Jelly Beamer Switch Plate</option>
                  <option value="Cane Clamps">Cane Clamps</option>
                  <option value="USB Joystick">USB Joystick</option>
                  <option value="USB Joystick with Jacks">USB Joystick with Jacks</option>
               </select>
            </td>
            <td>
               <select style="width:75px;" id="tr10c" onchange="qty10(this)" required>
                  <option selected="selected" value="0">-</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10+">10+</option>
               </select>
            </td>
         </tr>
      </table>
      <table width="400px" style="display:none; margin-top:800px;" id="producttable">
         <col width="50px" />
         <col width="300px" />
         <col width="50px" />
         <tr height="24px;" style="border-style:solid; border-width:thin;">
            <td ><textarea name="items1num" id="items1num"></textarea></td>
            <td ><textarea required="required" id="items1" name="items1"></textarea></td>
            <td ><textarea id="items1qty" name="items1qty"></textarea></td>
         </tr>
         <tr height="24px;" style="border-style:solid; border-width:thin;">
            <td><textarea name="items2num" id="items2num"></textarea></td>
            <td><textarea name="items2" id="items2"></textarea></td>
            <td><textarea name="items2qty" id="items2qty"></textarea></td>
         </tr>
         <tr height="24px;" style="border-style:solid; border-width:thin;">
            <td><textarea name="items3num" id="items3num"></textarea></td>
            <td><textarea name="items3" id="items3"></textarea></td>
            <td><textarea name="items3qty" id="items3qty"></textarea></td>
         </tr>
         <tr height="24px;" style="border-style:solid; border-width:thin;">
            <td><textarea name="items4num" id="items4num"></textarea></td>
            <td><textarea name="items4" id="items4"></textarea></td>
            <td><textarea name="items4qty" id="items4qty"></textarea></td>
         </tr>
         <tr height="24px;" style="border-style:solid; border-width:thin;">
            <td><textarea name="items5num" id="items5num"></textarea></td>
            <td><textarea name="items5" id="items5"></textarea></td>
            <td><textarea name="items5qty" id="items5qty"></textarea></td>
         </tr>
         <tr height="24px;" style="border-style:solid; border-width:thin;">
            <td><textarea name="items6num" id="items6num"></textarea></td>
            <td><textarea name="items6" id="items6"></textarea></td>
            <td><textarea name="items6qty" id="items6qty"></textarea></td>
         </tr>
         <tr height="24px;" style="border-style:solid; border-width:thin;">
            <td><textarea name="items7num" id="items7num"></textarea></td>
            <td><textarea name="items7" id="items7"></textarea></td>
            <td><textarea name="items7qty" id="items7qty"></textarea></td>
         </tr>
         <tr height="24px;" style="border-style:solid; border-width:thin;">
            <td><textarea name="items8num" id="items8num"></textarea></td>
            <td><textarea name="items8" id="items8"></textarea></td>
            <td><textarea name="items8qty" id="items8qty"></textarea></td>
         </tr>
         <tr height="24px;" style="border-style:solid; border-width:thin;">
            <td><textarea name="items9num" id="items9num"></textarea></td>
            <td><textarea name="items9" id="items9"></textarea></td>
            <td><textarea name="items9qty" id="items9qty"></textarea></td>
         </tr>
         <tr height="24px;" style="border-style:solid; border-width:thin;">
            <td><textarea name="items10num" id="items10num"></textarea></td>
            <td><textarea name="items10" id="items10"></textarea></td>
            <td><textarea name="items10qty" id="items10qty"></textarea></td>
         </tr>
         </col>
         </col>
         </col>
      </table>
      <div style="position:absolute; margin-top:320px;">
         <script type="text/javascript"
            src="http://www.google.com/recaptcha/api/challenge?k=6LfiRvUSAAAAAB2_e7fShfiSBoB8NDbIDJU1s7p0"></script>
         <noscript>
            <iframe src="http://www.google.com/recaptcha/api/noscript?k=your_public_key"
            height:"300"; width:"500"; frameborder="0"></iframe><br>
            <textarea name="recaptcha_challenge_field" rows="3" cols="40">
            </textarea>
            <input type="hidden" name="recaptcha_response_field"
               value="manual_challenge">
         </noscript>
      </div>
   </form>
</div>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>