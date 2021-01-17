<?php
   include './Templates/PHP/header.php'
   ?>
<!-- InstanceBeginEditable name="EditRegion5" -->
<style>
   body{font-family:Georgia,sans-serif;}
   #block{width:506px;padding:100px 6px 0 6px;margin:0 auto;}
   #block h3{background:url(img/h3.png) no-repeat center;color:#dd3c04;font-size:24px;font-weight:normal;text-align:center;text-transform:uppercase;margin-bottom:17px; background-size: 1000px 2px;}
   #block .photo{background:url(img/photo-bg.png) no-repeat center;margin-right:0px;position:relative;float:left;}
   #block .photo img{max-width:115px;max-height:115px;overflow:hidden;position:absolute;}
   #block .photo img.photo-bg{z-index:1;}
   #block .photo img.photo{left:0;}
   #block p.content{font-style:italic;line-height:24px;padding-left:19px;margin-left:121px;position:relative;overflow:hidden; width:210%; text-align:justify; margin-top: 0px;}
   #block p.content span {text-indent;}
   #block p.content span.laquo{background:url(img/laquo.png) no-repeat;width:14px;height:11px;position:absolute;left:0;top:0px;display:block;}
   #block p.content span.raquo{background:url(img/raquo.png) no-repeat right 4px;width:13px;height:15px;padding-left:4px;display:inline-block;}
   #block .sign{text-align:right;float:right; margin-right:-600px;}
   #block .sign a{color:#577302;font-family:Arial,sans-serif;font-size:13px;text-decoration:none;}
   #block .sign a:hover{text-decoration:underline;}
   #block .sign p{color:#5a5a5a;font-size:12px;line-height:15px;margin-top:6px; text-align:right;}
   .closebutton {float:right; width:27px; z-index:10; height:27px; position:absolute; top:-10px; right:-10px; background: url(http://cdn-sg1.pgimgs.com/images/pg/close-button.png) no-repeat center; cursor:pointer;}
</style>

<script>

function enlarge()
{
	$("#backdrop").show();
	$("#enlargeImage").show();
	$("#close").show();	
}


function hideImage()
{
	$("#everythingelse").show();
	$("#enlargeImage").hide();
	$("#close").hide();
	$("#backdrop").hide();
	
}

</script
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->
<!-- InstanceEndEditable -->
<div onclick="backdrop(this)" id="backdrop" style="z-index:0;"></div>
<div class="everythingelse">
   <!--<h2><p class="armtitle" style="position:absolute; top:250px; left:50%; margin-left:-350px; font-weight:300;">Lift and Lock Demonstrations</p></h2>-->
   <div id="block" style="position:relative; margin-bottom:0px; width:500px; height:10px;">
      <h3>Featured testimonials</h3>
   </div>
   <div id="testimonials" style="margin-left:70px;">
      <table border="0">
         <tr>
            <td>
               <div id="block">
			   <div style="margin-left:350px; display:none; z-index:10; position:fixed; box-shadow: 40px 40px 40px black; border:15px solid black;" id="enlargeImage">
			   <a class="closebutton" id="close" onclick="hideImage(this);"></a>
			   <a href="#myPopup" data-rel="popup" data-position-to="window">
                     <img src="img/FIRE DRAGON OVER MUD VOLCANO.jpg" style="width:500px; height:500px;"></a>
			   </div>
                  <div class="photo" id="smallImage">
                     <!--<img src="img/photo-bg.png" alt="" class="photo-bg"/>-->
                     <!--<a href="#myPopup" data-rel="popup" data-position-to="window">-->
                     <img src="img/FIRE DRAGON OVER MUD VOLCANO.jpg" onclick="enlarge(this);" style="width:200px; cursor:pointer; z-index:1;"></a>
                     <div data-role="popup" id="myPopup">
                        <!--<a href="#pageone" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img src="img/FIRE DRAGON OVER MUD VOLCANO.jpg" style="width:800px;height:400px;" alt="Skaret View">-->
                     </div>
                  </div>
                  <p class="content"><span class="laquo">&nbsp;</span>The ability to express one’s exact thoughts and emotions in a way that can be easily accessible to one’s peers is an important aspect of life.  When one wishes to share ideas and sentiments with a broad range of people, this is normally done via the written word or some form of artwork.  So, what does one do if one has no use of hands to accomplish these tasks?<br><br>
                     In my case, the answer is to use a headstick. This simple device consists of a type of crown with a metal wand protruding from the front.  By placing it on my head and sitting in front of a keyboard, I am able to operate a computer with adroitness.  Still, I have always wondered if I might be able to use my headstick to express myself in other ways.  Could I attach a pen to the end of my headstick and sign my name?  If I found a way of securing a paintbrush to the tip, might I contemplate producing some artwork? <br><br>
                     Whenever such questions were put to engineers charged with fabricating a new headstick for me, the answers I received were not very encouraging.  Essentially, I was commended for my enthusiasm, but told that it would be very difficult to address my desires in an appropriate way. <br><br>
                     Recently, I again had to replace my aging headstick. So, my occupational therapist suggested that I visit Bill Johnson at Ideas for Independent Living Inc.  I went to his plant to discuss my ideas.   I found a clean, friendly, professional and cheerful work environment, which made me feel comfortable at once.  As soon as I began explaining my ideas, Bill began running in and out of his workshop inventing possible solutions.  We discussed the benefits and detriments of each one, keeping the ones we liked and discarding the ones which displeased us.<br><br>
                     By the end of the afternoon we had created a prototype, which we were sure could address all of my desires in an elegant manner.  Bill came up with the idea of inserting the ink stick from a ball point pen directly into the wand of the headstick rather than attempting to attach a pen to the wand.   This gave me stability when I wrote and made the exercise more natural.  He next fashioned two caps for the wand; one was made of rubber and would act as my keyboarding tip, the other had a paintbrush attached to it. Simply by changing tips I would be able to change activities. <br><br>
                     I have already created my first  masterpiece  in acrylic using my new headstick.  It is an impressionist work entitled Fire Dragon  over Mud Volcano. <br><br>
                     I have  no hesitation in recommending the professional help of Ideas for Independent Living Inc. for any project you may be contemplating.
                     <span class="raquo">&nbsp;</span>
                  </p>
                  <div class="sign">
                     <a href="#">Richard Emery Sipos</a>
                     <p>B.A.</p>
                  </div>
               </div>
            </td>
            <td width="100"></td>
            <!--<td><div id="block">
               <div class="photo">
               	<img src="img/photo-bg.png" alt="" class="photo-bg"/>
               	<img src="img/photo.jpg" alt="" class="photo" />
               </div>
               <p class="content"><span class="laquo">&nbsp;</span>Lorem ipsum dolor sit amet, sanctus corrumpit ei quo, eu quo meis brute, sed ut possit vocibus graecis. Dicant mandamus ne duo, mazim aperiam ei eos.<span class="raquo">&nbsp;</span></p>
               <div class="sign">
               	<a href="#">Jay Hafling</a>
               	<p>Freelance web-designer</p>
               </div>
               </div></td>-->
         </tr>
         <!--<tr>
            <td>
               <div id="block">
                  <div class="photo">
                     <img src="img/photo-bg.png" alt="" class="photo-bg"/>
                     <img src="img/photo.jpg" alt="" class="photo" />
                  </div>
                  <p class="content"><span class="laquo">&nbsp;</span>Lorem ipsum dolor sit amet, sanctus corrumpit ei quo, eu quo meis brute, sed ut possit vocibus graecis. Dicant mandamus ne duo, mazim aperiam ei eos.<span class="raquo">&nbsp;</span></p>
                  <div class="sign">
                     <a href="#">Jay Hafling</a>
                     <p>Freelance web-designer</p>
                  </div>
               </div>
            </td>-->
            <!--<td width="100"></td>
               <td><div id="block">
               	<div class="photo">
               		<img src="img/photo-bg.png" alt="" class="photo-bg"/>
               		<img src="img/photo.jpg" alt="" class="photo" />
               	</div>
               	<p class="content"><span class="laquo">&nbsp;</span>Lorem ipsum dolor sit amet, sanctus corrumpit ei quo, eu quo meis brute, sed ut possit vocibus graecis. Dicant mandamus ne duo, mazim aperiam ei eos.<span class="raquo">&nbsp;</span></p>
               	<div class="sign">
               		<a href="#">Jay Hafling</a>
               		<p>Freelance web-designer</p>
               	</div>
               </div></td>-->
         </tr>
      </table>
   </div>
</div>
<div id="specificationsscroll" class="footer" style="top:1200px;">Ideas for Independent Living 2014</div>
</div>
<div class="videobox" id="m2demovideo"><iframe class="videodemo" id="player" style="height:100%; width:100%" frameborder="0" allowfullscreen></iframe><img onclick="backdrop(this);" src="what's new page/exit-icon.jpg" style="position:absolute; top:9px; right:9px; height:25px; cursor:pointer;" /></div>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>