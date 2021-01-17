<?php include './Templates/PHP/header.php' ?>
<!-- InstanceBeginEditable name="EditRegion5" -->
<style type="text/css">
  .chairoptions{
   font-family:"Roboto Lt","Roboto",  "sans-serif";
   position: absolute;
   cursor:pointer;
   }
   #chairpictures{
   transition-duration:3s;
   }
   #rollingstandpic{
   transition-duration:3s;
   }
   #walltrackpic{
   transition-duration:3s;
   }
   div.mainchairoptions
   {
   display:none; 
   position:absolute; 
   top:210px; 
   left:50%;
   width:105px; 
   height: 85px; 
   word-wrap:break-word; 
   text-align:center;
   }
   div.armquestions
   {
   position: relative; 
   width: 200px; 
   top:-15px; 
   left:50%; 
   margin-left:-100px; 
   word-wrap:break-word; 
   text-align:center;
   }
   div.armquotations
   {
   position: absolute; 
   width: 200px; 
   top: 225px; 
   left:50%; 
   margin-left:-100px; 
   word-wrap:break-word; 
   text-align:center; 
   display:none;
   }
   div.standardarmoptions
   {
   display:none; 
   position:absolute;
   left:50%; 
   margin-left:-90px; 
   width:180px; 
   height: 85px; 
   word-wrap:break-word; 
   text-align:center;
   }
   div.removearms
   {
   padding-top:10px; 
   margin-bottom:10px; 
   display:none; 
   position:relative;
   top:40px; left:50%; 
   margin-left:-90px; 
   width:180px; 
   height: 62px; 
   word-wrap:break-word; 
   text-align:center;
   }
   div.alertbox
   {
   position:absolute; 
   font-family:'Roboto', 'sans-serif'; 
   font-size:24px; 
   font-weight:500; 
   text-align:center; 
   width:200px; 
   height:30px;
   margin-top:220px; 
   font-weight:100; 
   cursor:pointer;
   }
   div.armtext
   {
   word-wrap:break-word; 
   text-align:center; 
   height:93%; 
   width:100%; 
   overflow:hidden;
   }
   img.dot
   {
   display:none; 
   position:absolute; 
   top:30px; 
   margin-left:-70px; 
   height:15px; 
   width:15px;
   opacity:0.5;
   }
   .ihidden
   {
   display:none;
   }
   .ihidden1
   {
   display:none;
   }
   .ihidden2
   {
   display:none;
   }
   .ihidden3
   {
   display:none;
   }
   .ihidden4
   {
	display:none;	   
   }
   .unhidden
   {
   display:inline-block;
   }
   
   #everythingelse
   {
	   width:100%;
	   margin:0px auto 0px auto;
   }
</style>
<style type="text/css">
   .ref{
   font-family:"Roboto Lt", 'Roboto', 'sans-serif';
   word-spacing:1px;	
   height:690px; 
   width:700px; 
   left:50%; 
   margin-left:-385px; 
   position:absolute; 
   top:20px; 
   position: absolute;
   overflow: hidden;
   display:none;
   }
</style>
<style type="text/css">
   .refpicframe{
   height:690px; 
   width:690px; 
   position:absolute; 
   position: absolute;
   overflow: hidden;
   }
</style>
<style type="text/css">
   .refparheader{
   font-family:"Roboto Lt", 'Roboto', 'sans-serif';
   margin-left:100px; 
   margin-top:100px; 
   position:absolute; 
   font-size:32px;
   }
</style>
<style type="text/css">
   .refpar{
   font-family:"Roboto Lt", 'Roboto', 'sans-serif';
   margin-left:150px; 
   margin-top:150px; 
   position:absolute; 
   font-size:20px;
   width:450px;
   overflow:hidden;
   }
</style>
<style type="text/css">
   .refpartnum{
   font-family:"Roboto Lt", 'Roboto', 'sans-serif';
   margin-left:480px; 
   margin-top:560px; 
   position:absolute; 
   font-size:16px;
   overflow:hidden;
   }
</style>
<style>
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
   img.exiticon
   {
   position:absolute; 
   top:9px; 
   right:9px; 
   height:25px; 
   cursor:pointer;
   }
   div.backicon
   {
   display:none; 
   position:absolute; 
   height:45px; 
   cursor:pointer;
   }
</style>
<style type="text/css">
   .refpic{
   margin-left:-380px;  
   height:690px;
   position:absolute; 
   overflow:hidden;
   }
</style>
<style type="text/css">
   .listpic{
   position:absolute;
   top:20px;
   height:45px;
   left:50%;
   margin-left:-40px;
   overflow:hidden;
   opacity:0.8;
   }
</style>
<style type="text/css">
   .refbar{
   position:absolute;
   top:10px;
   height:70px;
   width:15px;
   left:50%;
   margin-left:95px;
   overflow:hidden;
   }
</style>
<style>
   .firstclass{
   position:absolute; 
   height:400px; 
   left:50%; 
   margin-left:-380px; 
   top:185px;
   }
   .secondclass{
   position:absolute; 
   height:400px; 
   left:50%; 
   top:185px;
   }
   .thirdclass{
   position:absolute; 
   height:400px; 
   left:50%; 
   top:185px;
   }
   .fourthclass{
   position:absolute; 
   height:400px; 
   left:50%; 
   top:185px;
   margin-left:-380px; 
   top:185px;
   }
   .videobox{
   display:none;
   padding:10px;
   background-color:#FFF;
   position:fixed;
   left:50%;
   z-index:1000;
   margin-left:-318.5px;
   margin-top:350px;	
   height:364px;
   width:637px;
   top:50%;
   transform-origin:center;
   }
   .movieiconpic{
   cursor:pointer;
   height:30px;
   z-index:5;
   position:absolute;
   }
   .first{
   display:none;
   }
   .second{
   display:none;
   }
   .third{
   display:none;
   }
   .wedge{
   display:none;
   }  
   .firstarmoptions
   {
   position:relative; 
   margin-top:-5px; 
   left:50%; 
   margin-left:-90px; 
   width:180px; 
   height: 70px;
   }
</style>
<style type="text/css">
   .inptlist{
   display:none;
   margin-left:28px;
   left:50%;
   overflow:hidden;
   width:200px;
   background-color:transparent;
   border:none;
   font-family:"Roboto Lt", 'Roboto', 'sans-serif';
   font-size:14px;
   }
   #chooselanguage{
   display:none; 
   height:300px; 
   width:500px; 
   background-color:#FFF; 
   left:50%; 
   margin-left:-250px; 
   z-index:100;
   }
   .helpbubble{
   display:none;
   width:350px;
   position:absolute;
   height:229px;
   left:50%;	
   }
   .helpbubblepic{
   width:565px;
   height:235.54px;	
   }
   .helppar{
   position:absolute;
   margin:20px;
   font-size:18px;
   top:15px;
   }
   .helpparbottom{
   position:absolute;
   margin:20px;
   font-size:18px;
   }
   .helpok{
   position:absolute;
   margin-top:120px;
   margin-left:270px;
   cursor:pointer;
   }
   .helpokbottom{
   position:absolute;
   margin-top:105px;
   margin-left:270px;
   cursor:pointer;
   }
   form{
   position:absolute;
   margin-top:350px;
   margin-left:25px;
   }
   input{
   width:200px;
   }
   table{
   border-style:solid;
   border-width:thin;
   border-collapse:collapse;
   }
   td{
   border-right-style:solid;
   border-left-style:solid;
   border-width:thin;
   }
   th{
   border-style:solid;
   border-width:thin;
   font-weight:300;
   }
</style>
<style>
   @media all and (max-width: 1400px){
   #frame{
   top:192px;
   margin-left:-597px;
   }
   #backdrop{
   z-index:1;
   }
   .videobox{
   z-index:1000;
   margin-left:-318.5px;
   margin-top:350px;	
   height:364px;
   width:637px;
   }
   #overall{
   margin-top:200px;
   z-index:-1;
   }
   @-moz-document url-prefix(){
   #frame{
   top:192px;
   }
   .helpbubble{
   z-index:52;
   }
   #helpbubblebackground{
   z-index:51;
   }	
   }
</style>
<style>
   @media all and (min-width: 1400px){
   #frame{
   top:192px; 
   margin-left:-597px; 
   }
   #overall{
   margin-top:200px;
   }
   .helpbubble{
   z-index:52;
   }
   #helpbubblebackground{
   z-index:51;
   }
   }
</style>
<style>
   @media print{
   .structure{display:none}
   body{
   transform:scale(0.75);
   -webkit-transform:scale(0.75);
   -moz-transform:scale(0.75);
   -ms-transform:scale(0.75);
	max-width:1300px;
   }
   }
</style>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->
<script>
var M2count=0;
  $(document).ready(function(){
   	$(".inptlist").hide()
   })
</script>
<script>
   $(document).ready(function(){	
   
   	$("#loadinggif").delay(200).fadeOut(300)
   	$("#bothchairs").delay(400).fadeIn(600)
   	$(".beginning").fadeIn(700)
   	$("#languagebackdrop").fadeIn(300)
   	$("#chooselanguage").fadeIn(300)
   })
</script>
<script>
   function standardarm(x){
   	$("#loadinggif").delay(200).fadeOut(300)
   	$(".beginning").fadeOut(300)
   	$("#bothchairs").delay(400).fadeIn(600).addClass("chosen")	
   	$(".starting").fadeIn(700)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble1").delay(800).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
   
   }
   function tail(x){
   	$(".starting").fadeOut(300)
   	$(".beginning").fadeOut(300)
   	$(".first").delay(350).fadeIn(600)
   $("#firstscrollview").delay(300).fadeIn(400)
   $("#secondscrollview").hide()
   $("#thirdscrollview").hide()
   $("#riserdiv").show();
   //$("#oneinch1riserdiv").css({"position":"absolute", "top":"600px", "display":"none"})
   //$("#oneinchriser1inputpar").css({"position":"absolute", "top":"600px" ,"display":"none"})
   		if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble1").delay(500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   		}
   	
   }
   
</script>
<script>
   function m2(x){
   	$(".starting").fadeOut(300)
   	$("#m2").addClass("chosen")
   	$("#m2riserpic").fadeIn(2000).addClass("chosen")
	//modelManager.addModel("203");
   	$("#m2riserinputpar").show()
   	$("#m2xriser2").removeClass("second").fadeOut(0)
   	$("#m2maxriser2").removeClass("second").fadeOut(0)
   	$("#m2riser2").removeClass("second").fadeOut(0)
   	$("#clickriser2").removeClass("second").fadeOut(0)
   	$("#m2riser3").removeClass("third").fadeOut(0)
   	$("#m2xriser3").removeClass("third").fadeOut(0)
   	$("#m2maxriser3").removeClass("third").fadeOut(0)
   	$("#clickriser3").removeClass("third").fadeOut(0)
   	$(".secondclass").css({"margin-top":"14.5px", "margin-left":"-82px"})
   	$(".thirdclass").css({"margin-top":"14.5px", "margin-left":"-82px"})
   	$(".fourthclass").css({"margin-top":"14.5px", "margin-left":"-82px"})
   	$("#liftshaftpic2").fadeIn(2000).addClass("chosen")
	//modelManager.addModel("206");
   	$("#liftshaftinputpar2").show()
   	$(".thirdclass").animate({marginTop:"-=141.5px", marginLeft:"-=113px"},0)
   	$(".fourthclass").animate({marginTop:"-=141.5px", marginLeft:"-=113px"},0)
   	$("#headpic").fadeIn(1000).addClass("chosen")
	
   			$("#tr2c").val("1")
   			$("#tr2b").val("M2 Riser").fadeIn(0, product2)
   			$("#tr3c").val("1")
   			$("#tr3b").val("Lift Shaft").fadeIn(0, product3)
   			$("#tr4c").val("1")
   			$("#tr4b").val("Lift and Lock Head").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)
   	//$("#chooselose").delay(350).fadeIn(500)
	//modelManager.addModel("301");
   	//$("#liftshaftremove").delay(400).fadeIn(500)
   	//$("#m2riserremove").delay(400).fadeIn(600)
	//modelManager.addModel("203");
	$("#m2riser1movieicon").fadeIn(300)
	$("#m2riserstoliftshaftmovieicon").fadeIn(300)
	$("#gotocustomize").delay(400).fadeIn(700)
   	//$("#headremove").delay(400).fadeIn(700)
   	$("#restart").delay(400).fadeIn(900)
   	//$("#select").delay(400).fadeIn(900)
	//modelManager.addModel("301");
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	//
	modelManager.addModel("203");
	modelManager.addModel("206");
	modelManager.addModel("301");
	
   }
</script>
<script>
   function m2x(x){
   	$(".starting").fadeOut(300)
   	$("#m2x").addClass("chosen")
   	$("#m2xriserpic").fadeIn(2000).addClass("chosen")
   	$("#m2xriserinputpar").show()
   	$("#m2xriser2").removeClass("second").fadeOut(0)
   	$("#m2maxriser2").removeClass("second").fadeOut(0)
   	$("#m2riser2").removeClass("second").fadeOut(0)
   	$("#clickriser2").removeClass("second").fadeOut(0)
   	$("#m2riser3").removeClass("third").fadeOut(0)
   	$("#m2xriser3").removeClass("third").fadeOut(0)
   	$("#m2maxriser3").removeClass("third").fadeOut(0)
   	$("#clickriser3").removeClass("third").fadeOut(0)
   	$(".secondclass").css({"margin-top":"14.5px", "margin-left":"-82px"})
   	$(".thirdclass").css({"margin-top":"14.5px", "margin-left":"-82px"})
   	$(".fourthclass").css({"margin-top":"14.5px", "margin-left":"-82px"})
   	$("#liftshaftpic2").fadeIn(2000).addClass("chosen")
   	$("#liftshaftinputpar2").show()
   	$(".thirdclass").animate({marginTop:"-=141.5px", marginLeft:"-=113px"},0)
   	$(".fourthclass").animate({marginTop:"-=141.5px", marginLeft:"-=113px"},0)
   	$("#headpic").fadeIn(2000).addClass("chosen")
   			$("#tr2c").val("1")
   			$("#tr2b").val("M2X Riser").fadeIn(0, product2)
   			$("#tr3c").val("1")
   			$("#tr3b").val("Lift Shaft").fadeIn(0, product3)
   			$("#tr4c").val("1")
   			$("#tr4b").val("Lift and Lock Head").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)
   	//$("#chooselose").delay(350).fadeIn(500)
   	//$("#liftshaftremove").delay(400).fadeIn(500)
   	//$("#m2xriserremove").delay(400).fadeIn(600)
   	//$("#headremove").delay(400).fadeIn(700)
	$("#m2riser1movieicon").fadeIn(300)
	$("#m2riserstoliftshaftmovieicon").fadeIn(300)
   	$("#restart").delay(400).fadeIn(900)
	$("#gotocustomize").delay(400).fadeIn(700)
   	//$("#select").delay(400).fadeIn(900)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	modelManager.addModel("204");
	modelManager.addModel("206");
	modelManager.addModel("301");	
   	
   }
</script>
<script>
   function m2max(x){
   	$(".starting").fadeOut(300)
   	$("#m2max").addClass("chosen")
   	$("#m2maxriserpic").fadeIn(2000).addClass("chosen")
   	$("#m2maxriserinputpar").show()
   	$("#m2xriser2").removeClass("second").fadeOut(0)
   	$("#m2maxriser2").removeClass("second").fadeOut(0)
   	$("#m2riser2").removeClass("second").fadeOut(0)
   	$("#clickriser2").removeClass("second").fadeOut(0)
   	$("#m2riser3").removeClass("third").fadeOut(0)
   	$("#m2xriser3").removeClass("third").fadeOut(0)
   	$("#m2maxriser3").removeClass("third").fadeOut(0)
   	$("#clickriser3").removeClass("third").fadeOut(0)
   	$(".secondclass").css({"margin-top":"14.5px", "margin-left":"-82px"})
   	$(".thirdclass").css({"margin-top":"14.5px", "margin-left":"-82px"})
   	$(".fourthclass").css({"margin-top":"14.5px", "margin-left":"-82px"})
   	$("#liftshaftpic2").fadeIn(2000).addClass("chosen")
   			$("#tr2c").val("1")
   			$("#tr2b").val("M2 Max Riser").fadeIn(0, product2)
   			$("#tr3c").val("1")
   			$("#tr3b").val("Lift Shaft").fadeIn(0, product3)
   			$("#tr4c").val("1")
   			$("#tr4b").val("Lift and Lock Head").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)
   	$("#liftshaftinputpar2").show()
   	$(".thirdclass").animate({marginTop:"-=141.5px", marginLeft:"-=113px"},0)
   	$(".fourthclass").animate({marginTop:"-=141.5px", marginLeft:"-=113px"},0)
   	$("#headpic").fadeIn(2000).addClass("chosen")
   	//$("#chooselose").delay(350).fadeIn(500)
   	//$("#liftshaftremove").delay(400).fadeIn(500)
   	//$("#m2maxriserremove").delay(400).fadeIn(600)
   	//$("#headremove").delay(400).fadeIn(700)
	$("#m2riser1movieicon").fadeIn(300)
	$("#m2riserstoliftshaftmovieicon").fadeIn(300)
   	$("#restart").delay(400).fadeIn(900)
	$("#gotocustomize").delay(400).fadeIn(700)
   	//$("#select").delay(400).fadeIn(900)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	modelManager.addModel("205");
	modelManager.addModel("206");
	modelManager.addModel("301");
   	
   }
</script>
<script>
   function articulating(x){
   	$(".starting").fadeOut(300)
   	$("#articulatingarm").addClass("chosen")
   	$("#singlebonepic").fadeIn(2000).addClass("chosen")
   	$("#singleboneinputpar").show()
   	$(".secondclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$(".thirdclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$(".fourthclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$("#singlebonepic2").fadeIn(2000).addClass("chosen")
   	$("#singleboneinputpar2").show()
   	$(".thirdclass").animate({marginTop:"-=25.5px", marginLeft:"+=159px"},0)
   	$(".fourthclass").animate({marginTop:"-=25.5px", marginLeft:"+=159px"},0)
   	$("#headpic").fadeIn(2000).addClass("chosen")
   			$("#tr2c").val("1")
   			$("#tr2b").val("Single Bone").fadeIn(0, product2)
   			$("#tr3c").val("1")
   			$("#tr3b").val("Single Bone").fadeIn(0, product3)
   			$("#tr4c").val("1")
   			$("#tr4b").val("Lift and Lock Head").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)
   	//$("#chooselose").delay(350).fadeIn(500)
   	//$("#singleboneremove").delay(400).fadeIn(500)
   	//$("#singleboneremove1").delay(400).fadeIn(600)
   	//$("#headremove").delay(400).fadeIn(700)
   	$("#singlebone1movieicon").fadeIn(300)
	$("#singlebonemovieicon").fadeIn(300)
   	$("#restart").delay(400).fadeIn(900)
	$("#gotocustomize").delay(400).fadeIn(700)
   	//$("#select").delay(400).fadeIn(900)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	modelManager.addModel("201");
	modelManager.addModel("201");
	modelManager.addModel("301");
   	
   }
</script>
<script>
   function articulatingriser(x){
   	$(".starting").fadeOut(300)
   	$("#clickriserpic").fadeIn(2000).addClass("chosen")
   	$("#m2xriser2").removeClass("second").fadeOut(0)
   	$("#m2maxriser2").removeClass("second").fadeOut(0)
   	$("#m2riser2").removeClass("second").fadeOut(0)
   	$("#clickriser2").removeClass("second").fadeOut(0)
   	$("#liftshaft2").removeClass("second").fadeOut(0)
   	$("#m2riser3").removeClass("third").fadeOut(0)
   	$("#m2xriser3").removeClass("third").fadeOut(0)
   	$("#m2maxriser3").removeClass("third").fadeOut(0)
   	$("#clickriser3").removeClass("third").fadeOut(0)
   	$("#clickriserinputpar").show()
   	$(".secondclass").css({"margin-top":"-143.75px", "margin-left":"-205px"})
   	$(".thirdclass").css({"margin-top":"-143.75px", "margin-left":"-205px"})
   	$(".fourthclass").css({"margin-top":"-143.75px", "margin-left":"-205px"})
   	$("#singlebonepic2").fadeIn(2000).addClass("chosen")
   	$("#singleboneinputpar2").show()
   	$(".thirdclass").animate({marginTop:"-=25.5px", marginLeft:"+=159px"},0)
   	$(".fourthclass").animate({marginTop:"-=25.5px", marginLeft:"+=159px"},0)
   	$("#singlebonepic3").fadeIn(2000).addClass("chosen")
   	$("#singleboneinputpar3").show()
   	$(".fourthclass").animate({marginTop:"-=25.5px", marginLeft:"+=159px"},0)
   	$("#headpic").fadeIn(2000).addClass("chosen")
   			$("#tr2c").val("1")
   			$("#tr2b").val("Click Riser").fadeIn(0, product2)
   			$("#tr3c").val("1")
   			$("#tr3b").val("Single Bone").fadeIn(0, product3)
   			$("#tr4c").val("1")
   			$("#tr4b").val("Single Bone").fadeIn(0, product4)
   			$("#tr5c").val("1")
   			$("#tr5b").val("Lift and Lock Head").fadeIn(0, product5)
   	//$("#chooselose").delay(350).fadeIn(500)
   	//$("#singleboneremove1").delay(400).fadeIn(500)
   	//$("#singleboneremove2").delay(400).fadeIn(600)
   	//$("#clickriserremove").delay(400).fadeIn(700)
   	$("#clickriser1movieicon").fadeIn(300)
	$("#clickrisertosinglebonemovieicon").fadeIn(300)
	$("#singlebone3movieicon").fadeIn(300)
   	$("#restart").delay(400).fadeIn(900)
	$("#gotocustomize").delay(400).fadeIn(700)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	modelManager.addModel("202");
	modelManager.addModel("201");
	modelManager.addModel("201");
	modelManager.addModel("301");
   	
   }
</script>
<script>
   function htriser(x){
   	$(".starting").fadeOut(300)
   	$("#clickriserpic").fadeIn(2000).addClass("chosen")
	modelManager.addModel("202");
   	$("#clickriserinputpar").show()
   	$("#m2xriser2").removeClass("second").fadeOut(0)
   	$("#m2maxriser2").removeClass("second").fadeOut(0)
   	$("#m2riser2").removeClass("second").fadeOut(0)
   	$("#clickriser2").removeClass("second").fadeOut(0)
   	$("#liftshaft2").removeClass("second").fadeOut(0)
   	$("#m2riser3").removeClass("third").fadeOut(0)
   	$("#m2xriser3").removeClass("third").fadeOut(0)
   	$("#m2maxriser3").removeClass("third").fadeOut(0)
   	$("#clickriser3").removeClass("third").fadeOut(0)
   	$(".secondclass").css({"margin-top":"-143.75px", "margin-left":"-205px"})
   	$(".thirdclass").css({"margin-top":"-143.75px", "margin-left":"-205px"})
   	$(".fourthclass").css({"margin-top":"-143.75px", "margin-left":"-205px"})
   	$("#headpic").fadeIn(2000).addClass("chosen")
	modelManager.addModel("301");
   			$("#tr2c").val("1")
   			$("#tr2b").val("Click Riser").fadeIn(0, product2)
   			$("#tr3c").val("1")
   			$("#tr3b").val("Lift and Lock Head").fadeIn(0, product3)
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)
   	//$("#chooselose").delay(350).fadeIn(500)
   	//$("#clickriserremove").delay(400).fadeIn(500)
   	//$("#headremove").delay(400).fadeIn(800)
   	$("#clickriser1movieicon").fadeIn(300)
   	$("#restart").delay(400).fadeIn(900)
	$("#gotocustomize").delay(400).fadeIn(700)	
   	//$("#select").delay(400).fadeIn(900)
   	$("#htwithriser").addClass("lose")
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
   
   	
   }
</script>
<script>
   function m2riserremove(x){
   	if($("#m2riserremove").hasClass("clicked")){
   		$("#m2riserremove").css("background-color","transparent").removeClass("clicked")
   		$("#m2riserpic").removeClass("lose")
   	}
   	else{$("#m2riserremove").css("background-color","#E0E0E0").addClass("clicked")
   		$("#m2riserpic").addClass("lose")
		
   	}
   }
   function m2xriserremove(x){
   	if($("#m2xriserremove").hasClass("clicked")){
   		$("#m2xriserremove").css("background-color","transparent").removeClass("clicked")
   		$("#m2xriserpic").removeClass("lose")
   	}
   	else{$("#m2xriserremove").css("background-color","#E0E0E0").addClass("clicked")
   		$("#m2xriserpic").addClass("lose")
   	}
   }
   function m2maxriserremove(x){
   	if($("#m2maxriserremove").hasClass("clicked")){
   		$("#m2maxriserremove").css("background-color","transparent").removeClass("clicked")
   		$("#m2maxriserpic").removeClass("lose")
   	}
   	else{$("#m2maxriserremove").css("background-color","#E0E0E0").addClass("clicked")
   		$("#m2maxriserpic").addClass("lose")
   	}
   }
   function clickriserremove(x){
   	if($("#clickriserremove").hasClass("clicked")){
   		$("#clickriserremove").css("background-color","transparent").removeClass("clicked")
   		$("#clickriserpic").removeClass("lose")
   	}
   	else{$("#clickriserremove").css("background-color","#E0E0E0").addClass("clicked")
   		$("#clickriserpic").addClass("lose")
   	}
   }
   function liftshaftremove(x){
   	if($("#liftshaftremove").hasClass("clicked")){
   		$("#liftshaftremove").css("background-color","transparent").removeClass("clicked")
   		$("#liftshaftpic2").removeClass("lose")
   	}
   	else{$("#liftshaftremove").css("background-color","#E0E0E0").addClass("clicked")
   		$("#liftshaftpic2").addClass("lose")
	}
   }
   function singleboneremove(x){
   	if($("#singleboneremove").hasClass("clicked")){
   		$("#singleboneremove").css("background-color","transparent").removeClass("clicked")
   
   		$("#singlebonepic").removeClass("lose")
   	}
   	else{$("#singleboneremove").css("background-color","#E0E0E0").addClass("clicked")
   
   		$("#singlebonepic").addClass("lose")
   	}
   }
   function singleboneremove1(x){
   	if($("#singleboneremove1").hasClass("clicked")){
   		$("#singleboneremove1").css("background-color","transparent").removeClass("clicked")
   		$("#singlebonepic2").removeClass("lose")
   	}
   	else{$("#singleboneremove1").css("background-color","#E0E0E0").addClass("clicked")
   		$("#singlebonepic2").addClass("lose")
   	}
   }
   function singleboneremove2(x){
   	if($("#singleboneremove2").hasClass("clicked")){
   		$("#singleboneremove2").css("background-color","transparent").removeClass("clicked")
   		$("#singlebonepic3").removeClass("lose")
   	}
   	else{$("#singleboneremove2").css("background-color","#E0E0E0").addClass("clicked")
   		$("#singlebonepic3").addClass("lose")
   	}
   }
   
   function removesegments(x){
   
   	$("#headpic").fadeOut(300)
   
   	$("#select").fadeOut(300)
   	
   	if($("#clickriserpic").hasClass("chosen")){
   		if(($("#clickriserpic").hasClass("lose"))&&($("#singlebonepic2").hasClass("lose"))&&($("#singlebonepic3").hasClass("lose"))){
   			$("#singleboneinputpar3").hide()
   			$("#singleboneinputpar2").hide()
   			$("#clickriserinputpar").hide()
   			$("#chooselose").addClass("remove")
   			$("#singleboneremove1").addClass("remove")
   			$("#singleboneremove2").addClass("remove")
   			$("#clickriserremove").addClass("remove")
			modelManager.removeModel("202");
   			$("#clickriserpic").fadeOut(300).removeClass("chosen")
			modelManager.removeModel("201");
   			$("#singlebonepic2").fadeOut(300).removeClass("chosen")
   			$("#tr2c").val("0")
   			$("#tr2b").val("").fadeIn(0, product2)
   			$("#tr3c").val("0")
   			$("#tr3b").val("").fadeIn(0, product3)
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)
   			$("#m2xriser2").addClass("second")
   			$("#m2maxriser2").addClass("second")
   			$("#m2riser2").addClass("second")
   			$("#clickriser2").addClass("second")
   			$("#liftshaft2").addClass("second")
   			$("#m2riser3").addClass("third")
   			$("#m2xriser3").addClass("third")
   			$("#m2maxriser3").addClass("third")
   			$("#clickriser3").addClass("third")
			modelManager.removeModel("201");
   			$("#singlebonepic3").removeClass("chosen").fadeOut(300, function(){
   				$(".secondclass").animate({marginTop:"+=144.25px", marginLeft:"-=176px"})
   				$(".thirdclass").animate({marginTop:"+=144.25px", marginLeft:"-=176px"})
   				$(".fourthclass").animate({marginTop:"+=144.25px", marginLeft:"-=176px"})
   				$(".thirdclass").animate({marginTop:"+=25.5px", marginLeft:"-=159px"})
   				$(".fourthclass").animate({marginTop:"+=51px", marginLeft:"-=318px"})
   			})
   			$(".first").delay(400).fadeIn(500)
   $("#firstscrollview").delay(400).fadeIn(500)
   		}
   		else if((($("#clickriserpic").hasClass("lose"))&&($("#singlebonepic2").hasClass("lose")))||(($("#clickriserpic").hasClass("lose"))&&($("#singlebonepic3").hasClass("lose")))){
   			$("#singleboneinputpar3").hide()
   			$("#singleboneinputpar2").hide()
   			$("#clickriserinputpar").hide()
   			$("#chooselose").addClass("remove")
   			$("#singleboneremove1").addClass("remove")
   			$("#singleboneremove2").addClass("remove")
   			$("#clickriserremove").addClass("remove")
			modelManager.removeModel("202");
   			$("#clickriserpic").fadeOut(300).removeClass("chosen")
			modelManager.removeModel("201");
   		 	$("#singlebonepic2").fadeOut(300).removeClass("chosen")
   			$("#tr2c").val("1")
   			$("#tr2b").val("Single Bone").fadeIn(0, product2)
   			$("#tr3c").val("0")
   			$("#tr3b").val("").fadeIn(0, product3)
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)	
   			$("#m2xriser2").addClass("second")
   			$("#m2maxriser2").addClass("second")
   			$("#m2riser2").addClass("second")
   			$("#clickriser2").addClass("second")
   			$("#liftshaft2").addClass("second")
   			$("#m2riser3").addClass("third")
   			$("#m2xriser3").addClass("third")
   			$("#m2maxriser3").addClass("third")
   			$("#clickriser3").addClass("third")
			modelManager.removeModel("201");
   			$("#singlebonepic3").removeClass("chosen").fadeOut(300, function(){
   				$(".secondclass").css({"margin-top":"0px", "margin-left":"-380px"})
   				$(".thirdclass").css({"margin-top":"0px", "margin-left":"-380px"})
   				$(".fourthclass").css({"margin-top":"0px", "margin-left":"-380px"}), singlebone() 
   			});
   		}
   		else if(($("#singlebonepic2").hasClass("lose"))&&($("#singlebonepic3").hasClass("lose"))){
   			$("#singleboneinputpar3").hide()
   			$("#singleboneinputpar2").hide()
   			$("#chooselose").addClass("remove")
   			$("#singleboneremove1").addClass("remove")
   			$("#singleboneremove2").addClass("remove")
   			$("#clickriserremove").addClass("remove")
			modelManager.removeModel("201");   
   		 	$("#singlebonepic2").fadeOut(300).removeClass("chosen")	
   			$("#tr3c").val("0")
   			$("#tr3b").val("").fadeIn(0, product3)
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)	
   			$("#singlebonepic3").removeClass("chosen").fadeOut(300, function(){
				modelManager.removeModel("201");
   				$(".thirdclass").animate({marginTop:"+=25.5px", marginLeft:"-=159px"})
   				$(".fourthclass").animate({marginTop:"+=51px", marginLeft:"-=318px"})
   					
   					$(".second").delay(200).fadeIn(800)
					$("#secondscrollview").delay(200).fadeIn(800)
   					
   			});
   			
   			
   				//$("#helpbubble3").delay(800).fadeIn(500)
   				//$("#helpbubblebackground").fadeIn(300)
   			
   		}
   		else if(($("#singlebonepic3").hasClass("lose"))||($("#singlebonepic2").hasClass("lose"))){	
   			$("#singleboneinputpar3").hide()
   			$("#chooselose").addClass("remove")
   			$("#singleboneremove1").addClass("remove")
   			$("#singleboneremove2").addClass("remove")
   			$("#clickriserremove").addClass("remove")
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)
			modelManager.removeModel("201");
   			$("#singlebonepic3").removeClass("chosen").fadeOut(300, function(){
   					
   					$(".fourthclass").animate({marginTop:"+=25.5px", marginLeft:"-=159px"}) 
   					$(".third").delay(200).fadeIn(300)
   		$("#thirdscrollview").delay(400).fadeIn(500)
   					
   			});
   			
   				//$("#helpbubble3").delay(800).fadeIn(500)
   				//$("#helpbubblebackground").fadeIn(300)
   			
   		}
   		else if(($("#clickriserpic").hasClass("lose"))&&($("#htwithriser").hasClass("lose"))){
   			$("#clickriserinputpar").hide()
   			$("#m2xriser2").addClass("second")
   			$("#m2maxriser2").addClass("second")
   			$("#m2riser2").addClass("second")
   			$("#clickriser2").addClass("second")
   			$("#liftshaft2").addClass("second")
   			$("#m2riser3").addClass("third")
   			$("#m2xriser3").addClass("third")
   			$("#m2maxriser3").addClass("third")
   			$("#clickriser3").addClass("third")
   			$("#clickriserpic").removeClass("chosen").fadeOut(300, function(){
				modelManager.removeModel("202");
   					$(".secondclass").css({"margin-left":"-380px", "margin-top":"0px"})
   					$(".thirdclass").css({"margin-left":"-380px", "margin-top":"0px"})
   					$(".fourthclass").css({"margin-left":"-380px", "margin-top":"0px"})
   			})
   			$(".first").delay(400).fadeIn(500)
   $("#firstscrollview").delay(400).fadeIn(500)
   		}		
   		
   		else if($("#clickriserpic").hasClass("lose")){	
   			$("#singleboneinputpar3").hide()
   			$("#singleboneinputpar2").hide()
   			$("#clickriserinputpar").hide()
   			$("#m2xriser2").addClass("second")
   			$("#m2maxriser2").addClass("second")
   			$("#m2riser2").addClass("second")
   			$("#clickriser2").addClass("second")
   			$("#liftshaft2").addClass("second")
   			$("#m2riser3").addClass("third")
   			$("#m2xriser3").addClass("third")
   			$("#m2maxriser3").addClass("third")
   			$("#clickriser3").addClass("third")
			//modelManager.removeModel("201");
			//modelManager.removeModel("201");
   			$("#singlebonepic3").fadeOut(300).removeClass("chosen")
   		 	$("#singlebonepic2").fadeOut(300).removeClass("chosen")	
   			$("#tr2c").val("1")
   			$("#tr2b").val("Single Bone").fadeIn(0, product2)
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("")	.fadeIn(0, product5)
			modelManager.removeModel("202");
   			$("#clickriserpic").removeClass("chosen").fadeOut(300, function(){
   					$(".secondclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   					$("#singlebonepic").fadeIn(2000).addClass("chosen")
					modelManager.addModel("201");
   					$("#singleboneinputpar").show()
   					$(".thirdclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   					$(".fourthclass").css({"margin-left":"-222px", "margin-top":"-25px"}),singlebone2() 
   			});
   		}
   		else if($("#htwithriser").hasClass("lose")){
   
   			$(".second").delay(200).fadeIn(800)
   $("#secondscrollview").delay(400).fadeIn(500)
   			
   				//$("#helpbubble3").delay(800).fadeIn(500)
   				//$("#helpbubblebackground").fadeIn(300)
   			
   		}
   
   		else if(!$("#htwithriser").hasClass("lose")){
   			alert("Please choose a segment to remove")
   			$("#done").delay(900).fadeOut(0)
   			$("#chooselose").removeClass("remove").fadeIn(500)
   			$("#singleboneremove1").delay(400).removeClass("remove").fadeIn(500)
   			$("#singleboneremove2").delay(400).removeClass("remove").fadeIn(600)
   			$("#clickriserremove").delay(400).removeClass("remove").fadeIn(700)
   			$("#headremove").delay(400).fadeIn(800)
   			$("#select").delay(400).fadeIn(700)
   		}
   	}
   	
   	
   	if($("#singlebonepic").hasClass("chosen")){
   		if(($("#singlebonepic2").hasClass("lose"))&&($("#singlebonepic").hasClass("lose"))){
   			$("#singleboneinputpar").hide()
   			$("#singleboneinputpar2").hide()
			modelManager.removeModel("201");
   			$("#singlebonepic2").fadeOut(300).removeClass("chosen")
   			$("#tr2c").val("0")
   			$("#tr2b").val("").fadeIn(0, product2)
   			$("#tr3c").val("0")
   			$("#tr3b").val("").fadeIn(0, product3)
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)
			modelManager.removeModel("201");
   			$("#singlebonepic").removeClass("chosen").fadeOut(300, function(){
   				$(".secondclass").css({"margin-top":"0px", "margin-left":"-380px"})
   				$(".thirdclass").css({"margin-top":"0px", "margin-left":"-380px"})
   				$(".fourthclass").css({"margin-top":"0px", "margin-left":"-380px"})
   				$(".first").delay(400).fadeIn(500)
   	$("#firstscrollview").delay(400).fadeIn(500)				
   			});
   		}
   		else if(($("#singlebonepic").hasClass("lose"))||($("#singlebonepic2").hasClass("lose"))){	
   			$("#singleboneinputpar2").hide()
   			$("#tr3c").val("0")
   			$("#tr3b").val("").fadeIn(0, product3)
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)
			modelManager.removeModel("201");
			modelManager.removeModel("201");
   			$("#singlebonepic2").removeClass("chosen").fadeOut(300, function(){
   					$(".thirdclass").animate({marginTop:"+=25.5px", marginLeft:"-=159px"})
   					$(".fourthclass").animate({marginTop:"+=25.5px", marginLeft:"-=159px"}), singlebone()
   
   			});
   			
   		}
   	}
   	
   
   	if($("#m2riserpic").hasClass("chosen")){
   		if(($("#m2riserpic").hasClass("lose"))&&($("#liftshaftpic2").hasClass("lose"))){
   			$("#m2riserinputpar").hide()
   			$("#liftshaftinputpar2").hide()	
   			$("#tr2c").val("0")
   			$("#tr2b").val("").fadeIn(0, product2)
   			$("#tr3c").val("0")
   			$("#tr3b").val("").fadeIn(0, product3)
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)	
   			$("#m2xriser2").addClass("second")
   			$("#m2maxriser2").addClass("second")
   			$("#m2riser2").addClass("second")
   			$("#clickriser2").addClass("second")
   			$("#m2riser3").addClass("third")
   			$("#m2xriser3").addClass("third")
   			$("#m2maxriser3").addClass("third")
   			$("#clickriser3").addClass("third")		
   			$("#m2riserpic").removeClass("chosen").fadeOut(300),function (){
   					$(".secondclass").css({"margin-top":"0px", "margin-left":"-380px"})
   					$(".thirdclass").css({"margin-top":"0px", "margin-left":"-380px"})
   					$(".fourthclass").css({"margin-top":"0px", "margin-left":"-380px"})
   					$(".thirdclass").animate({marginTop:"+=283px", marginLeft:"+=223px"})
   					$(".fourthclass").animate({marginTop:"+=283px", marginLeft:"+=223px"})
   			}
   			$("#liftshaftpic2").fadeOut(300).removeClass("chosen")
   			$(".first").delay(400).fadeIn(500)
   $("#firstscrollview").delay(400).fadeIn(500)
   		}
   		else if($("#m2riserpic").hasClass("lose")){
   			$("#m2riserinputpar").hide()
   			$("#liftshaftinputpar2").hide()	
   			$("#tr2c").val("1")
   			$("#tr2b").val("Lift Shaft").fadeIn(0, product2)
   			$("#tr3c").val("0")
   			$("#tr3b").val("").fadeIn(0, product3)
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)			
   			$("#m2riserpic").fadeOut(300).removeClass("chosen")
			modelManager.removeModel("203");
   			$("#liftshaftpic2").removeClass("chosen").fadeOut(300, function(){
   					$(".secondclass").css({"margin-top":"0px", "margin-left":"-380px"})
   					$(".thirdclass").css({"margin-top":"0px", "margin-left":"-380px"})
   					$(".fourthclass").css({"margin-top":"0px", "margin-left":"-380px"}), liftshaft()
   
   			});
   
   			}
   		else if($("#liftshaftpic2").hasClass("lose")){
   			$("#liftshaftinputpar2").hide()		
   			$("#tr3c").val("0")
   			$("#tr3b").val("").fadeIn(0, product3)
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)		
   			$("#liftshaftpic2").removeClass("chosen").fadeOut(300,function (){
				modelManager.removeModel("206");
   					$(".thirdclass").animate({marginTop:"+=141.5px", marginLeft:"+=111.5px"})
   					$(".fourthclass").animate({marginTop:"+=141.5px", marginLeft:"+=111.5px"})
   			})
   			$(".second").delay(400).fadeIn(500)
   $("#secondscrollview").delay(400).fadeIn(500)
   			
   				//$("#helpbubble3").delay(800).fadeIn(500)
   				//$("#helpbubblebackground").fadeIn(300)
   			
   		}
   		else{
   
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)	
   			$(".third").delay(400).fadeIn(500)
   $("#thirdscrollview").delay(400).fadeIn(500)
   			
   				$("#helpbubble3").delay(800).fadeIn(500)
   				$("#helpbubblebackground").fadeIn(300)
   			
   			}
   	}
   	
   	if($("#m2xriserpic").hasClass("chosen")){
   		if(($("#m2xriserpic").hasClass("lose"))&&($("#liftshaftpic2").hasClass("lose"))){
   			$("#m2xriserinputpar").hide()
   			$("#liftshaftinputpar2").hide()		
   			$("#tr2c").val("0")
   			$("#tr2b").val("").fadeIn(0, product2)
   			$("#tr3c").val("0")
   			$("#tr3b").val("").fadeIn(0, product3)
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)	
   			$("#m2xriser2").addClass("second")
   			$("#m2maxriser2").addClass("second")
   			$("#m2riser2").addClass("second")
   			$("#clickriser2").addClass("second")
   			$("#m2riser3").addClass("third")
   			$("#m2xriser3").addClass("third")
   			$("#m2maxriser3").addClass("third")
   			$("#clickriser3").addClass("third")
   			$("#m2xriserpic").removeClass("chosen").fadeOut(300),function (){
   					$(".secondclass").css({"margin-top":"0px", "margin-left":"-380px"})
   					$(".thirdclass").css({"margin-top":"0px", "margin-left":"-380px"})
   					$(".fourthclass").css({"margin-top":"0px", "margin-left":"-380px"})
   					$(".thirdclass").animate({marginTop:"+=283px", marginLeft:"+=223px"})
   					$(".fourthclass").animate({marginTop:"+=283px", marginLeft:"+=223px"})
   			}
   			$("#liftshaftpic2").fadeOut(300).removeClass("chosen")
   			$(".first").delay(400).fadeIn(500)
   $("#firstscrollview").delay(400).fadeIn(500)
   		}
   		else if($("#m2xriserpic").hasClass("lose")){
   			$("#m2xriserinputpar").hide()
   			$("#liftshaftinputpar2").hide()	
   			$("#tr2c").val("1")
   			$("#tr2b").val("Lift Shaft").fadeIn(0, product2)
   			$("#tr3c").val("0")
   			$("#tr3b").val("").fadeIn(0, product3)
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)		
   			$("#m2xriserpic").fadeOut(300) .removeClass("chosen")
			modelManager.removeModel("204")
   			$("#liftshaftpic2").removeClass("chosen").fadeOut(300,function(){
   					$(".secondclass").css({"margin-top":"0px", "margin-left":"-380px"})
   					$(".thirdclass").css({"margin-top":"0px", "margin-left":"-380px"})
   					$(".fourthclass").css({"margin-top":"0px", "margin-left":"-380px"}), liftshaft()
   			});
   	
   			}
   		else if($("#liftshaftpic2").hasClass("lose")){
   			$("#liftshaftinputpar2").hide()
   
   			$("#tr3c").val("0")
   			$("#tr3b").val("").fadeIn(0, product3)
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)	
			modelManager.removeModel("206");			
   			$("#liftshaftpic2").removeClass("chosen").fadeOut(300,function (){
   					$(".thirdclass").animate({marginTop:"+=141.5px", marginLeft:"+=111.5px"})
   					$(".fourthclass").animate({marginTop:"+=141.5px", marginLeft:"+=111.5px"})
   			})
   			$(".second").delay(400).fadeIn(500)
   $("#secondscrollview").delay(400).fadeIn(500)
   			
   				//$("#helpbubble3").delay(800).fadeIn(500)
   				//$("#helpbubblebackground").fadeIn(300)
   			
   		}
   		else{
   
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)
   
   			$(".third").delay(400).fadeIn(500)
   $("#thirdscrollview").delay(400).fadeIn(500)
   			
   				$("#helpbubble3").delay(800).fadeIn(500)
   				$("#helpbubblebackground").fadeIn(300)
   			
   			}
   	}
   	
   	
   
   	if($("#m2maxriserpic").hasClass("chosen")){
   		if(($("#m2maxriserpic").hasClass("lose"))&&($("#liftshaftpic2").hasClass("lose"))){
   			$("#m2maxriserinputpar").hide()
   			$("#liftshaftinputpar2").hide()	
   			$("#tr2c").val("0")
   			$("#tr2b").val("").fadeIn(0, product2)
   			$("#tr3c").val("0")
   			$("#tr3b").val("").fadeIn(0, product3)
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)
   			$("#m2xriser2").addClass("second")
   			$("#m2maxriser2").addClass("second")
   			$("#m2riser2").addClass("second")
   			$("#clickriser2").addClass("second")
   			$("#m2riser3").addClass("third")
   			$("#m2xriser3").addClass("third")
   			$("#m2maxriser3").addClass("third")
   			$("#clickriser3").addClass("third")
   			$("#m2maxriserpic").removeClass("chosen").fadeOut(300),function (){
   					$(".secondclass").css({"margin-top":"0px", "margin-left":"-380px"})
   					$(".thirdclass").css({"margin-top":"0px", "margin-left":"-380px"})
   					$(".fourthclass").css({"margin-top":"0px", "margin-left":"-380px"})
   					$(".thirdclass").animate({marginTop:"+=283px", marginLeft:"+=223px"})
   					$(".fourthclass").animate({marginTop:"+=283px", marginLeft:"+=223px"})
   			}
   			$("#liftshaftpic2").fadeOut(300).removeClass("chosen")
   			$(".first").delay(400).fadeIn(500)
   $("#firstscrollview").delay(400).fadeIn(500)
   		}
   		else if($("#m2maxriserpic").hasClass("lose")){
   			$("#m2maxriserinputpar").hide()
   			$("#liftshaftinputpar2").hide()
   			$("#tr2c").val("1")
   			$("#tr2b").val("Lift Shaft").fadeIn(0, product2)
   			$("#tr3c").val("0")
   			$("#tr3b").val("").fadeIn(0, product3)
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)
   			$("#m2maxriserpic").fadeOut(300).removeClass("chosen")
			modelManager.removeModel("205");
   			$("#liftshaftpic2").removeClass("chosen").fadeOut(300 ,function(){
   					$(".secondclass").css({"margin-top":"0px", "margin-left":"-380px"})
   					$(".thirdclass").css({"margin-top":"0px", "margin-left":"-380px"})
   					$(".fourthclass").css({"margin-top":"0px", "margin-left":"-380px"}), liftshaft()
   			});
   
   			}
   		else if($("#liftshaftpic2").hasClass("lose")){
   			$("#liftshaftinputpar2").hide()
   			$("#tr3c").val("0")
   			$("#tr3b").val("").fadeIn(0, product3)
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)
			modelManager.removeModel("206");
   			$("#liftshaftpic2").removeClass("chosen").fadeOut(300,function (){
   
   					$(".thirdclass").animate({marginTop:"+=141.5px", marginLeft:"+=111.5px"})
   					$(".fourthclass").animate({marginTop:"+=141.5px", marginLeft:"+=111.5px"})
   
   			})
   			$(".second").delay(400).fadeIn(500)
   $("#secondscrollview").delay(400).fadeIn(500)
   			
   				//$("#helpbubble3").delay(800).fadeIn(500)
   				//$("#helpbubblebackground").fadeIn(300)
   			
   			
   		}
   		else{
   
   			$("#tr4c").val("0")
   			$("#tr4b").val("").fadeIn(0, product4)
   			$("#tr5c").val("0")
   			$("#tr5b").val("").fadeIn(0, product5)
   
   			$(".third").delay(400).fadeIn(500)
   $("#thirdscrollview").delay(400).fadeIn(500)
   			
   				$("#helpbubble3").delay(800).fadeIn(500)
   				$("#helpbubblebackground").fadeIn(300)
   			
   			
   			}
   	}
   	$(".remove").fadeOut(200)
   
   }
</script>
<script>
   function head(x){	
   	$("#headpic").fadeIn(2000).addClass("chosen");
   	$("#head1movieicon").fadeIn(300);
   modelManager.addModel("301");
   }
</script>
<script>
   function singlebone(x){
   	$("#helpbubblebackground").show()
	$("#singlebonepic").addClass("chosen").fadeIn(2000)
	
   if($("#oneinchriser1").hasClass("chosen"))
   {
	   $("#oneinchrisertosinglebonemovieicon").fadeIn(300)
   }
   else if($("#threeinchriser1").hasClass("chosen"))
   {
	   $("#threeinchrisertosinglebonemovieicon").fadeIn(300)
   }
   else
   {
   	$("#singlebone1movieicon").show();
   }
   
   $("#wedgereceiverdirectmount2").addClass("second").fadeIn(0, function(){
   })
   
   $(".chairoptions").fadeOut(200)  
   $("#firstscrollview").hide();
   $("#secondscrollview").delay(300).fadeIn(400) 
   	$(".second").delay(200).fadeIn(800)
   	$("#singleboneinputpar").show()
   	$(".secondclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$(".thirdclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$(".fourthclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$("#singlebonepic").addClass("chosen").fadeIn(2000)
	$("#singlebone1").addClass("chosen");
   modelManager.addModel("201")
   
   			//$("#helpbubble3").delay(2200).fadeIn(500)
   			//$("#helpbubblebackground").fadeIn(300)
   
   $('#singlebone1').show();

   //$("#singlebone1movieicon").fadeOut(500)
   	
   }
   
   
   function dualarm1(x){
   	$("#helpbubblebackground").show()
   $("#dualarm1").addClass("chosen");
   $("#dualarm1pic").addClass("chosen").fadeIn(2000)
   
   if($("#oneinchriser1").hasClass("chosen"))
   {
	   $("#dualarm1tooneinchriser1movieicon").fadeIn(300)
   }
   else if($("#threeinchriser1").hasClass("chosen"))
   {
	  $("#dualarm1tothreeinchriser1movieicon").fadeIn(300) 
   }
   else
   {
   $("#bonetodualarm1movieicon").show();	
   }
   
   $("#dualarm2").removeClass("second").fadeOut(0, function(){
   $("#head2").removeClass("second").fadeOut(0, function(){
   $("#wedgereceiverdirectmount2").removeClass("second").fadeOut(0, function(){
   		//$(".second").delay(200).fadeIn(800)
   			})
   		})
   	})
   
   $("#firstscrollview").hide();
   $(".chairoptions").fadeOut(200)  
   $("#secondscrollview").delay(300).fadeIn(400) 
   	$(".second").delay(200).fadeIn(800)
   	$("#dualarm1inputpar").show()
   	$(".secondclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$(".thirdclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$(".fourthclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	modelManager.addModel("207");
   			//$("#helpbubble3").delay(2200).fadeIn(500)
   			//$("#helpbubblebackground").fadeIn(300)
   
   $('#dualarm1').show();
   	
   }
   
   
   function dualarm2(x){
   	$("#helpbubblebackground").show()
   $("#dualarm2").addClass("chosen");
   $("#dualarm2pic").addClass("chosen").fadeIn(2000)
   //$("#bonetodualarm1movieicon").show();	
   if($("#90degreeadapter1pic").hasClass("chosen"))
   {
   $("#ninetydegree1todualarm2movieicon").show();
   }
   else if($("#singlebonepic").hasClass("chosen"))
   {
	  $("#dualarm2tosinglebonemovieicon").show(); 
   }
   else if($("#m2riserpic").hasClass("chosen") || $("#m2xriserpic").hasClass("chosen") || $("#m2maxriserpic").hasClass("chosen"))
   {
	   $("#dualarm2tom2risermovieicon").fadeIn(300)
   }
   
   		$("#dualarm3").removeClass("third").fadeOut(0, function(){
   				$("#wedgereceiverdirectmount3").removeClass("third").fadeOut(0, function(){
   					$("#head3").removeClass("third").fadeOut(0, function(){
   					//$(".third").delay(200).fadeIn(800)
   			})
   		})
   	})
   
   $("#firstscrollview").hide();
   $("#secondscrollview").hide();
   $(".chairoptions").fadeOut(200)
   $("#thirdscrollview").delay(300).fadeIn(400)
   $(".third").delay(200).fadeIn(800)
   	$("#dualarm2inputpar").show()
   $(".secondclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$(".thirdclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$(".fourthclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	modelManager.addModel("207");
   			//$("#helpbubble3").delay(2200).fadeIn(500)
   			//$("#helpbubblebackground").fadeIn(300)
   
   $('#dualarm2').show();
   	
   }
   
   
   function dualarm3(x){
   	$("#helpbubblebackground").show()
	$("#dualarm3").addClass("chosen");

   $("#dualarm3pic").addClass("chosen").fadeIn(2000)

   if($("#singlebonepic2").hasClass("chosen"))
   {
   $("#dualarm3tosinglebonemovieicon").show();
   }
   else if($("#m2riserpic2").hasClass("chosen") || $("#m2xriserpic2").hasClass("chosen") || $("#m2maxriserpic2").hasClass("chosen"))
   {
   $("#dualarm3tom2risermovieicon").show();
   }
   
    $("#firstscrollview").hide();
   $("#secondscrollview").hide();
   $("#thirdscrollview").hide();
   $('#dualarm3').show();
   $("#dualarm3inputpar").show()
   $(".secondclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$(".thirdclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$(".fourthclass").css({"margin-left":"-222px", "margin-top":"-25px"})
	//$(".fourth").delay(200).fadeIn(800)
	$("#dualarm3pic").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").fadeOut(0, done())		
   	})
   	modelManager.addModel("207");
   //	$("#complete").show()
   }
   
   function ninetydegree1(x){
   	$("#helpbubblebackground").show()
   $("#ninetydegree1").addClass("chosen");
   $("#90degreeadapter1pic").addClass("chosen").fadeIn(2000)
   
   if($("#90degreeadapter1pic").hasClass("chosen"))
   {
   $("#boneto90degreeadapter1movieicon").show();	
   }
   
   $("#clickriser2").removeClass("second").fadeOut(0, function(){
   $("#m2riser2").removeClass("second").fadeOut(0, function(){
   $("#m2xriser2").removeClass("second").fadeOut(0, function(){
   	$("#m2maxriser2").removeClass("second").fadeOut(0, function(){
   		$("#head2").removeClass("second").fadeOut(0, function(){										
   							//$(".second").delay(200).fadeIn(800)
   				})
   			})
   		})
   	})
   })
   
   $("#firstscrollview").hide();
   $(".chairoptions").fadeOut(200)
   $("#secondscrollview").delay(300).fadeIn(400)
   $(".second").delay(200).fadeIn(800)
   	$("#90degreeadapter1inputpar").show()
   	modelManager.addModel("104");
   			//$("#helpbubble3").delay(2200).fadeIn(500)
   			//$("#helpbubblebackground").fadeIn(300)
   
   $('#90degreeadapter1').show();
   	
   }
   
   
   function ninetydegree2(x){
   	$("#helpbubblebackground").show()
   $("#ninetydegree2").addClass("chosen");
   $("#90degreeadapter2pic").addClass("chosen").fadeIn(2000)
   if($("#90degreeadapter2pic").hasClass("chosen"))
   {
   $("#boneto90degreeadapter2movieicon").show();
   }
   
   $("#clickriser3").removeClass("third").fadeOut(0, function(){
   $("#m2riser3").removeClass("third").fadeOut(0, function(){
   $("#m2xriser3").removeClass("third").fadeOut(0, function(){
   	$("#m2maxriser3").removeClass("third").fadeOut(0, function(){
   		$("#head3").removeClass("third").fadeOut(0, function(){
   							$(".third").delay(200).fadeIn(800)
   						//$(".third").delay(200).fadeIn(800)
   				})
   			})
   		})
   	})
   })
   
   $("#firstscrollview").hide();
   $("#secondscrollview").hide();
   $("#thirdscrollview").delay(300).fadeIn(400)
   	$(".chairoptions").fadeOut(200)   
   	$(".third").delay(200).fadeIn(800)
   	$("#90degreeadapter2inputpar").show()
   	$(".thirdclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$(".fourthclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	modelManager.addModel("104");
   			//$("#helpbubble3").delay(2200).fadeIn(500)
   			//$("#helpbubblebackground").fadeIn(300)
   
   $('#90degreeadapter2').show();
   	
   }
   
   
   function ninetydegree3(x){
   	$("#helpbubblebackground").show()
   $("#ninetydegree3").addClass("chosen");
   $("#90degreeadapter2pic").addClass("chosen").fadeIn(2000)
   if($("#90degreeadapter2pic").hasClass("chosen"))
   {
   $("#boneto90degreeadapter2movieicon").show();
   }
   
   
   $("#firstscrollview").hide();
   $("#secondscrollview").hide();
   $("#thirdscrollview").hide();
   	$(".chairoptions").fadeOut(200)   
   	$("#90degreeadapter3inputpar").show()
   	$(".thirdclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$(".fourthclass").css({"margin-left":"-222px", "margin-top":"-25px"})
	//$(".fourth").delay(200).fadeIn(800)
   	modelManager.addModel("104");
   			//$("#helpbubble3").delay(2200).fadeIn(500)
   			//$("#helpbubblebackground").fadeIn(300)
	$("#ninetydegree3pic").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").fadeOut(0, done())		
   	})
   
   $('#90degreeadapter3').show();
   	
   }
   
   
   function invertedheadpost1(x){
   	$("#helpbubblebackground").show()
   $("#invertedheadpost1").addClass("chosen");
   $("#invertedheadpost1pic").addClass("chosen").fadeIn(2000)
   $("#bonetoinvertedheadpostmovieicon").show();
   
   $("#dualarm2").removeClass("second").fadeOut(0, function(){
   $("#clickriser2").removeClass("second").fadeOut(0, function(){
   $("#m2riser2").removeClass("second").fadeOut(0, function(){
   $("#m2xriser2").removeClass("second").fadeOut(0, function(){
   $("#m2maxriser2").removeClass("second").fadeOut(0, function(){
   $("#liftshaft2").removeClass("second").fadeOut(0, function(){
   $("#wedgereceiverdirectmount2").removeClass("second").fadeOut(0, function(){
   		//$(".second").delay(200).fadeIn(800)
   						//$(".third").delay(200).fadeIn(800)
   		})
   	})
   })
   })
   			})
   		})
   	})
   
   $("#firstscrollview").hide();
   $("#secondscrollview").delay(300).fadeIn(400)
   	$(".chairoptions").fadeOut(200)   
   	$(".second").delay(200).fadeIn(800)
   	$("#invertedheadpost1inputpar").show()
   	$(".secondclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$(".thirdclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$(".fourthclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	modelManager.addModel("105");
   			//$("#helpbubble3").delay(2200).fadeIn(500)
   			//$("#helpbubblebackground").fadeIn(300)
   
   $('#invertedheadpost1').show();
   	
   }
   
   
   function invertedheadpost2(x){
   	$("#helpbubblebackground").show()
   $("#invertedheadpost2").addClass("chosen");
   $("#invertedheadpost2pic").addClass("chosen").fadeIn(2000)
   $("#bonetoinvertedheadpostmovieicon").show();
   
   $("#dualarm3").removeClass("third").fadeOut(0, function(){
   $("#clickriser3").removeClass("third").fadeOut(0, function(){
   $("#m2riser3").removeClass("third").fadeOut(0, function(){
   $("#m2xriser3").removeClass("third").fadeOut(0, function(){
   $("#m2maxriser3").removeClass("third").fadeOut(0, function(){
   $("#liftshaft3").removeClass("third").fadeOut(0, function(){
   				$("#wedgereceiverdirectmount3").removeClass("third").fadeOut(0, function(){
   		//$(".second").delay(200).fadeIn(800)
   						//$(".third").delay(200).fadeIn(800)
   		})
   	})
   })
   })
   			})
   		})
   	})
   
   $("#firstscrollview").hide();
   $("#secondscrollview").hide();
   $("#thirdscrollview").delay(300).fadeIn(400)
   	$(".chairoptions").fadeOut(200)   
   	$(".third").delay(200).fadeIn(800)
   	$("#invertedheadpost2inputpar").show()
   	$(".secondclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$(".thirdclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$(".fourthclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	modelManager.addModel("105");
   			//$("#helpbubble3").delay(2200).fadeIn(500)
   			//$("#helpbubblebackground").fadeIn(300)
   
   $('#invertedheadpost2').show();
   	
   }
   
   
   function invertedheadpost3(x){
   	$("#helpbubblebackground").show()
   $("#invertedheadpost3").addClass("chosen");
   $("#invertedheadpost2pic").addClass("chosen").fadeIn(2000)
   $("#bonetoinvertedheadpostmovieicon").show();
   
   
   $("#firstscrollview").hide();
   $("#secondscrollview").hide();
   $("#thirdscrollview").hide();
   	$(".chairoptions").fadeOut(200)   
   	$("#invertedheadpost2inputpar").show()
   	$(".secondclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$(".thirdclass").css({"margin-left":"-222px", "margin-top":"-25px"})
   	$(".fourthclass").css({"margin-left":"-222px", "margin-top":"-25px"})
	//$(".fourth").delay(200).fadeIn(800)
   	modelManager.addModel("105");
   			//$("#helpbubble3").delay(2200).fadeIn(500)
   			//$("#helpbubblebackground").fadeIn(300)
   $("#invertedheadpost3pic").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").fadeOut(0, done())		
   	})
   $('#invertedheadpost3').show();
   	
   }
   
   
   function wedgereceiverdirectmount1(x){
   	$("#helpbubblebackground").show()
   $("#wedgereceiverdirectmount1").addClass("chosen");
   $("#wedgereceiverdirectmount1pic").addClass("chosen").fadeIn(2000)
   $("#bonetowedgereceiverdirectmountmovieicon").show();
   
   $("#firstscrollview").hide();
   $("#secondscrollview").hide();
   $("#thirdscrollview").hide();
   	$(".chairoptions").fadeOut(200)   
   	//
   //$("#back4").delay(300).fadeIn(300)
   //$(".fourth").delay(200).fadeIn(800)
   //$("#complete").delay(300).fadeIn(200)
   	//$("#showquote").delay(300).fadeIn(300)
   	$("#wedgereceiverdirectmount1inputpar").show()
   	modelManager.addModel("302");
   			//$("#helpbubble3").delay(2200).fadeIn(500)
   			//$("#helpbubblebackground").fadeIn(300)
   $("#wedgereceiverdirectmount1pic").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").fadeOut(0)
		$("#complete").fadeIn(300)
		$("#savearm").fadeIn(300)
		$("#showquote").fadeIn(300)
		$("#back1").delay(300).fadeIn(300)		
   	})
   $('#wedgereceiverdirectmount1').show();
   	
   }
   
   
   function wedgereceiverdirectmount2(x){
   	$("#helpbubblebackground").show()
   $("#wedgereceiverdirectmount2").addClass("chosen");
   $("#wedgereceiverdirectmount2pic").addClass("chosen").fadeIn(2000)
   if($("#90degreeadapter1pic").hasClass("chosen"))
   {
   $("#90degreeadapter1towedgereceiverdirectmount2movieicon").show();	
   }
   else if($("#singlebonepic").hasClass("chosen"))
   {
   $("#wedgereceiverdirectmount1tosinglebonemovieicon").show();	
   }
   
   $("#firstscrollview").hide();
   $("#secondscrollview").hide();
   $("#thirdscrollview").hide();
   	$(".chairoptions").fadeOut(200)   
   	//
   //$("#back4").delay(300).fadeIn(300)
   //$(".fourth").delay(200).fadeIn(800)
   //$("#complete").delay(300).fadeIn(200)
   	//$("#showquote").delay(300).fadeIn(300)
   	$("#wedgereceiverdirectmount2inputpar").show()
   	modelManager.addModel("302");
   			//$("#helpbubble3").delay(2200).fadeIn(500)
   			//$("#helpbubblebackground").fadeIn(300)
   $("#wedgereceiverdirectmount2pic").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").fadeOut(0)		
		$("#complete").fadeIn(300)
		$("#savearm").fadeIn(300)
		$("#showquote").fadeIn(300)
		$("#back2").delay(300).fadeIn(300)
   	})
   $('#wedgereceiverdirectmount2').show();
   	
   }
   
   function wedgereceiverdirectmount3(x){
   	$("#helpbubblebackground").show()
   $("#wedgereceiverdirectmount3").addClass("chosen");
   $("#wedgereceiverdirectmount3pic").addClass("chosen").fadeIn(2000)
   
   if($("#singlebonepic2").hasClass("chosen"))
   {
   $("#wedgereceiverdirectmount3tosinglebonemovieicon").show();	
   }
   
   $("#firstscrollview").hide();
   $("#secondscrollview").hide();
   $("#thirdscrollview").hide();
   	$(".chairoptions").fadeOut(200)   
   	//
   	$("#wedgereceiverdirectmount3inputpar").show()
   	modelManager.addModel("302");
   			//$("#helpbubble3").delay(2200).fadeIn(500)
   			//$("#helpbubblebackground").fadeIn(300)
   $("#wedgereceiverdirectmount3pic").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").fadeOut(0)
		$("#complete").fadeIn(300)
		$("#savearm").fadeIn(300)
		$("#showquote").fadeIn(300)
		$("#back3").delay(300).fadeIn(300)
   	})
   $('#wedgereceiverdirectmount3').show();
   	
   }
   
   
   function wedgereceiverdirectmount4(x){
   	$("#helpbubblebackground").show()
   $("#wedgereceiverdirectmount4").addClass("chosen");
   $("#wedgereceiverdirectmount4pic").addClass("chosen").fadeIn(2000)
   
   if($("#singlebonepic3").hasClass("chosen"))
   {
   $("#wedgereceiverdirectmount4tosinglebonemovieicon").show();	
   }
   
   $("#firstscrollview").hide();
   $("#secondscrollview").hide();
   $("#thirdscrollview").hide();
   $("#wedgescrollview").hide();
   	$(".chairoptions").fadeOut(200)   
   	//
   	$("#wedgereceiverdirectmount4inputpar").show()
   	modelManager.addModel("302");
   			//$("#helpbubble3").delay(2200).fadeIn(500)
   			//$("#helpbubblebackground").fadeIn(300)
   $("#wedgereceiverdirectmount4pic").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").fadeOut(0)
		$("#complete").fadeIn(300)
		$("#savearm").fadeIn(300)
		$("#showquote").fadeIn(300)
		$("#back4").delay(300).fadeIn(300)
   	})
   $('#wedgereceiverdirectmount4').show();
   	
   }
   
   
    function bonetooneinchriservideo()
   {
   if(($("").hasClass("chosen"))||($("#oneinchriserpic").hasClass("chosen"))){
   		$("#bonetooneinchriser").fadeIn(500)
   		$("#backdrop").show()
   	} 
   }
   
   function bonetothreeinchriservideo()
   {
   if(($("").hasClass("chosen"))||($("#threeinchriserpic").hasClass("chosen"))){
   		$("#bonetothreeinchriser").fadeIn(500)
   		$("#backdrop").show()
   	} 
   }
   
   
   function oneinchriservideo(){
   	if(($("#oneinchriser1").hasClass("chosen"))||($("#singlebonepic").hasClass("chosen"))){
   		$("#oneinchtosinglebone").fadeIn(500)
   		//$("#movieicon").fadeIn(500)
   		$("#backdrop").show()
   	}
   	else if(($("#oneinchriser1").hasClass("chosen"))||($("#m2maxriserpic").hasClass("chosen"))){
   		$("#oneinchtom2risers").fadeIn(500)
   		$("#backdrop").show()
   	}
   	else if(($("#oneinchriser1").hasClass("chosen"))||($("#m2xriserpic").hasClass("chosen"))){
   		$("#oneinchtom2risers").fadeIn(500)
   		$("#backdrop").show()
   	}
   	else if(($("#oneinchriser1").hasClass("chosen"))||($("#m2riserpic").hasClass("chosen"))){
   		$("#oneinchtom2risers").fadeIn(500)
   		$("#backdrop").show()
   	}
   else if(($("#head1").hasClass("chosen")) || ($("#oneinchriser1").hasClass("chosen"))){
   		$("#oneinchtohead").fadeIn(500)
   		$("#backdrop").show()
   	}
   }
   
   
   
   function threeinchriservideo(){
   	if(($("#threeinchriser1").hasClass("chosen"))||($("#singlebonepic").hasClass("chosen"))){
   		$("#threeinchtosinglebone").fadeIn(500)
   		//$("#movieicon").fadeIn(500)
   		$("#backdrop").show()
   	}
   	else if(($("#threeinchriser1").hasClass("chosen"))||($("#m2maxriserpic").hasClass("chosen"))){
   		$("#oneinchtom2risers").fadeIn(500)
   		$("#backdrop").show()
   	}
   	else if(($("#threeinchriser1").hasClass("chosen"))||($("#m2xriserpic").hasClass("chosen"))){
   		$("#oneinchtom2risers").fadeIn(500)
   		$("#backdrop").show()
   	}
   	else if(($("#threeinchriser1").hasClass("chosen"))||($("#m2riserpic").hasClass("chosen"))){
   		$("#oneinchtom2risers").fadeIn(500)
   		$("#backdrop").show()
   	}
   else if(($("#head1").hasClass("chosen")) || ($("#threeinchriser1").hasClass("chosen"))){
   		$("#oneinchtohead").fadeIn(500)
   		$("#backdrop").show()
   	}
   }
   
   function oneInchRiser1(x){
   	$("#helpbubblebackground").show()
	$("#oneinchriser1").addClass("chosen");
	$("#riserdiv").show()
	$("#oneinch1riserdiv").css({"position":"absolute", "top":"600px", "display":"block"})
    $("#oneinchriser1inputpar").css({"position":"absolute", "top":"600px" ,"display":"block"})
	
   if($("#singlebonepic2").hasClass("chosen"))
   {
	   $("#oneinchrisertosinglebonemovieicon").fadeIn(300)
   }
   else if($("#oneinchriser1").hasClass("chosen"))
   {
	   $("#bonetooneinchrisermovieicon").fadeIn(300)
   }
   
   	$("#oneinchriser1").removeClass("first").fadeOut(0, function(){
   		$("#threeinchriser1").removeClass("first").fadeOut(0, function(){
   			$("#clickriser1").removeClass("first").fadeOut(0, function(){
   				$("#liftshaft1").removeClass("first").fadeOut(0, function(){
   		$("#90degreeadapter1").removeClass("first").fadeOut(0, function(){
			$("#dualarm1").removeClass("first").fadeOut(0, function(){
   			$("#invertedheadpost1").removeClass("first").fadeOut(0, function(){
   				$("#wedgereceiverdirectmount1").removeClass("first").fadeOut(0, function(){
   		$(".first").delay(200).fadeIn(800)
   		})	
   			})
   		})					
   			})
   	})
   
   				})
   			})
	})
   
   $("#secondscrollview").hide();
   $("#thirdscrollview").hide();
   $(".chairoptions").fadeOut(200)
   $("#firstscrollview").delay(300).fadeIn(400)
   $(".first").delay(200).fadeIn(800)
   
   //$("#oneinchriser1inputpar").show()
   
   	//$("#clickriserpic").addClass("chosen").fadeIn(2000)
   			//$("#helpbubble3").delay(1500).fadeIn(300)
   			//$("#helpbubblebackground").fadeIn(300)
   	$("#oneinchriserpic").addClass("chosen").fadeIn(2000)
   	modelManager.addModel("102");
   			//$("#helpbubble3").delay(1500).fadeIn(300)
   			//$("#helpbubblebackground").fadeIn(300)
   	
   }
   
   function oneInchRiser2(x){
   	$("#helpbubblebackground").show()
   $("#oneinchriser2").addClass("chosen");
   if($("#oneinchriser2pic").hasClass("chosen"))
   {
   $("#bonetooneinchrisermovieicon").fadeIn(300)
   }
  
   			$("#clickriser2").removeClass("second").fadeOut(0, function(){
   				$("#liftshaft2").removeClass("second").fadeOut(0, function(){
   				$("#wedgereceiverdirectmount2").removeClass("second").fadeOut(0, function(){
   		//$(".first").delay(200).fadeIn(800)
   		})					
   			})
   	})
   
   $("#firstscrollview").hide();
   $("#thirdscrollview").hide();
   $(".chairoptions").fadeOut(200)
   $("#secondscrollview").delay(300).fadeIn(400)
   $(".second").delay(200).fadeIn(800)
   $("#oneinchriser2inputpar").show()
   
   	//$("#clickriserpic").addClass("chosen").fadeIn(2000)
   			//$("#helpbubble3").delay(1500).fadeIn(300)
   			//$("#helpbubblebackground").fadeIn(300)
   	$("#oneinchriser2pic").addClass("chosen").fadeIn(2000)
   	modelManager.addModel("102");
   			//$("#helpbubble3").delay(1500).fadeIn(300)
   			//$("#helpbubblebackground").fadeIn(300)
   	
   }
   
   function oneInchRiser3(x){
   	$("#helpbubblebackground").show()
   $("#oneinchriser3").addClass("chosen");
   if($("#oneinchriser1").hasClass("chosen"))
   {
   $("#bonetooneinchrisermovieicon").fadeIn(300)
   }
  
   			$("#clickriser3").removeClass("third").fadeOut(0, function(){
   				$("#liftshaft3").removeClass("third").fadeOut(0, function(){
   				$("#wedgereceiverdirectmount3").removeClass("third").fadeOut(0, function(){
   		//$(".first").delay(200).fadeIn(800)
   	})
   
   				})
   			})
   
   $("#secondscrollview").hide();
   $("#firstscrollview").hide();
   $(".chairoptions").fadeOut(200)
   $("#thirdscrollview").delay(300).fadeIn(400)
   $(".third").delay(200).fadeIn(800)
   $("#oneinchriser3inputpar").show()
   
   	//$("#clickriserpic").addClass("chosen").fadeIn(2000)
   			//$("#helpbubble3").delay(1500).fadeIn(300)
   			//$("#helpbubblebackground").fadeIn(300)
   	$("#oneinchriser3pic").addClass("chosen").fadeIn(2000)
   	modelManager.addModel("102");
   			//$("#helpbubble3").delay(1500).fadeIn(300)
   			//$("#helpbubblebackground").fadeIn(300)
   	
   }
   
   
   
   function threeInchRiser1(x){
   	$("#helpbubblebackground").show()
   $("#threeinchriser1").addClass("chosen");
   //$("#threeinchriserdiv").show()
   $("#riserdiv").show()
   $("#threeinch1riserdiv").css({"position":"absolute", "top":"600px", "display":"block"})
    $("#threeinchriser1inputpar").css({"position":"absolute", "top":"600px" ,"display":"block"})
	
   if($("#singlebonepic2").hasClass("chosen"))
   {
	   $("#threeinchrisertosinglebonemovieicon").fadeIn(300)
   }
   else
   {
	   $("#bonetothreeinchrisermovieicon").fadeIn(300)
   }
   	$("#oneinchriser1").removeClass("first").fadeOut(0, function(){
   		$("#threeinchriser1").removeClass("first").fadeOut(0, function(){
   			$("#clickriser1").removeClass("first").fadeOut(0, function(){
   				$("#liftshaft1").removeClass("first").fadeOut(0, function(){
   		$("#90degreeadapter1").removeClass("first").fadeOut(0, function(){
			$("#dualarm1").removeClass("first").fadeOut(0, function(){
   			$("#invertedheadpost1").removeClass("first").fadeOut(0, function(){
   				$("#wedgereceiverdirectmount1").removeClass("first").fadeOut(0, function(){
   		//$(".first").delay(200).fadeIn(800)
   		})	
   			})
   		})					
   			})
   	})
   
   				})
   			})
	})
   $("#secondscrollview").hide();
   $("#thirdscrollview").hide();
   $(".chairoptions").fadeOut(200)
   $("#firstscrollview").delay(300).fadeIn(400)
   $(".first").delay(200).fadeIn(800)
   	$("#threeinchriser1inputpar").show()
   	$(".secondclass").css({"margin-top":"-143.75px", "margin-left":"-205px"})
   	$(".thirdclass").css({"margin-top":"-143.75px", "margin-left":"-205px"})
   	$(".fourthclass").css({"margin-top":"-143.75px", "margin-left":"-205px"})
   	//$("#clickriserpic").addClass("chosen").fadeIn(2000)
   			//$("#helpbubble3").delay(1500).fadeIn(300)
   			//$("#helpbubblebackground").fadeIn(300)
   	$("#threeinchriserpic").addClass("chosen").fadeIn(2000)
   	modelManager.addModel("103");
   			//$("#helpbubble3").delay(1500).fadeIn(300)
   			//$("#helpbubblebackground").fadeIn(300)
   	
   }
   
   
   
   function threeInchRiser2(x){
   	$("#helpbubblebackground").show()
   $("#threeinchriser2").addClass("chosen");
   
   			$("#clickriser2").removeClass("second").fadeOut(0, function(){
   				$("#liftshaft2").removeClass("second").fadeOut(0, function(){
   				$("#wedgereceiverdirectmount2").removeClass("second").fadeOut(0, function(){
   		//$(".first").delay(200).fadeIn(800)
   		})					
   			})
   	})

   $("#firstscrollview").hide();
   $("#thirdscrollview").hide();
   $(".chairoptions").fadeOut(200)
   $("#secondscrollview").delay(300).fadeIn(400)
   $(".second").delay(200).fadeIn(800)
   	$("#threeinchriser2inputpar").show()
   	$(".secondclass").css({"margin-top":"-143.75px", "margin-left":"-205px"})
   	$(".thirdclass").css({"margin-top":"-143.75px", "margin-left":"-205px"})
   	$(".fourthclass").css({"margin-top":"-143.75px", "margin-left":"-205px"})
   	//$("#clickriserpic").addClass("chosen").fadeIn(2000)
   			//$("#helpbubble3").delay(1500).fadeIn(300)
   			//$("#helpbubblebackground").fadeIn(300)
   	$("#threeinchriser2pic").addClass("chosen").fadeIn(2000)
   	modelManager.addModel("103");
   			//$("#helpbubble3").delay(1500).fadeIn(300)
   			//$("#helpbubblebackground").fadeIn(300)
   	
   }
   
   
   function threeInchRiser3(x){
   	$("#helpbubblebackground").show()
   $("#threeinchriser3").addClass("chosen");
   	
   			$("#clickriser3").removeClass("third").fadeOut(0, function(){
   				$("#liftshaft3").removeClass("third").fadeOut(0, function(){
   				$("#wedgereceiverdirectmount3").removeClass("third").fadeOut(0, function(){
   		//$(".first").delay(200).fadeIn(800)
   		})					
   			})
   	})
   
   $("#secondscrollview").hide();
   $("#firstscrollview").hide();
   $(".chairoptions").fadeOut(200)
   $("#thirdscrollview").delay(300).fadeIn(400)
   $(".third").delay(200).fadeIn(800)
   	$("#threeinchriser3inputpar").show()
   	$(".secondclass").css({"margin-top":"-143.75px", "margin-left":"-205px"})
   	$(".thirdclass").css({"margin-top":"-143.75px", "margin-left":"-205px"})
   	$(".fourthclass").css({"margin-top":"-143.75px", "margin-left":"-205px"})
   	//$("#clickriserpic").addClass("chosen").fadeIn(2000)
   			//$("#helpbubble3").delay(1500).fadeIn(300)
   			//$("#helpbubblebackground").fadeIn(300)
   	$("#threeinchriser3pic").addClass("chosen").fadeIn(2000)
   	modelManager.addModel("103");
   			//$("#helpbubble3").delay(1500).fadeIn(300)
   			//$("#helpbubblebackground").fadeIn(300)
   	
   }
   
   
   
</script>
<script>
   function head1tobone(x){
   	$("#helpbubblebackground").show()
   	$(".chairoptions").fadeOut(200)
   	$(".second").fadeOut(200)
   	$("#head1movieicon").fadeIn(300)
   
   	$(".third").delay(200).fadeIn(800)
   
   	if($("#m2riserpic").hasClass("chosen")){	
   		$("#doublepostpic").show()
   		$(".secondclass").css({"margin-top":"-14px"})
   		$(".thirdclass").css({"margin-top":"-14px"})
   		$(".fourthclass").css({"margin-top":"-14px"})
   	}
   	else if($("#m2xriserpic").hasClass("chosen")){	
   		$("#doublepostpic").show()
   		$(".secondclass").css({"margin-top":"-14px"})
   		$(".thirdclass").css({"margin-top":"-14px"})
   		$(".fourthclass").css({"margin-top":"-14px"})
   	}
   	else if($("#m2maxriserpic").hasClass("chosen")){	
   		$("#doublepostpic").show()
   		$(".secondclass").css({"margin-top":"-14px"})
   		$(".thirdclass").css({"margin-top":"-14px"})
   		$(".fourthclass").css({"margin-top":"-14px"})
   	}
   	//$("#singleboneinputpar2").show()
   	$(".thirdclass").animate({marginTop:"-=25.5px", marginLeft:"+=159px"})
   	$(".fourthclass").animate({marginTop:"-=25.5px", marginLeft:"+=159px"})	
   	$("#headpic").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").hide()		
   	})
   	if(($("#chooselanguage").hasClass("newby"))&&(!$("#bothchairs").hasClass("chosen"))){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
   }
   
   
   function head2tobone(x){
   	$("#helpbubblebackground").show()
   	$(".chairoptions").fadeOut(200)
   	$(".second").fadeOut(200)
   	$("#head2movieicon").fadeIn(300)
   
   	$(".third").delay(200).fadeIn(800)
   
   	if($("#m2riserpic").hasClass("chosen")){	
   		$("#doublepostpic").show()
   		$(".secondclass").css({"margin-top":"-14px"})
   		$(".thirdclass").css({"margin-top":"-14px"})
   		$(".fourthclass").css({"margin-top":"-14px"})
   	}
   	else if($("#m2xriserpic").hasClass("chosen")){	
   		$("#doublepostpic").show()
   		$(".secondclass").css({"margin-top":"-14px"})
   		$(".thirdclass").css({"margin-top":"-14px"})
   		$(".fourthclass").css({"margin-top":"-14px"})
   	}
   	else if($("#m2maxriserpic").hasClass("chosen")){	
   		$("#doublepostpic").show()
   		$(".secondclass").css({"margin-top":"-14px"})
   		$(".thirdclass").css({"margin-top":"-14px"})
   		$(".fourthclass").css({"margin-top":"-14px"})
   	}
   	//$("#singleboneinputpar2").show()
   	$(".thirdclass").animate({marginTop:"-=25.5px", marginLeft:"+=159px"})
   	$(".fourthclass").animate({marginTop:"-=25.5px", marginLeft:"+=159px"})	
   	$("#headpic").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").hide()		
   	})
   	if(($("#chooselanguage").hasClass("newby"))&&(!$("#bothchairs").hasClass("chosen"))){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
   }
   
   
   function head3tobone(x){
   	$("#helpbubblebackground").show()
   	$(".chairoptions").fadeOut(200)
   	$(".second").fadeOut(200)
   	$("#head3movieicon").fadeIn(300)
   
   	$(".third").delay(200).fadeIn(800)
   
   	if($("#m2riserpic").hasClass("chosen")){	
   		$("#doublepostpic").show()
   		$(".secondclass").css({"margin-top":"-14px"})
   		$(".thirdclass").css({"margin-top":"-14px"})
   		$(".fourthclass").css({"margin-top":"-14px"})
   	}
   	else if($("#m2xriserpic").hasClass("chosen")){	
   		$("#doublepostpic").show()
   		$(".secondclass").css({"margin-top":"-14px"})
   		$(".thirdclass").css({"margin-top":"-14px"})
   		$(".fourthclass").css({"margin-top":"-14px"})
   	}
   	else if($("#m2maxriserpic").hasClass("chosen")){	
   		$("#doublepostpic").show()
   		$(".secondclass").css({"margin-top":"-14px"})
   		$(".thirdclass").css({"margin-top":"-14px"})
   		$(".fourthclass").css({"margin-top":"-14px"})
   	}
   	//$("#singleboneinputpar2").show()
   	$(".thirdclass").animate({marginTop:"-=25.5px", marginLeft:"+=159px"})
   	$(".fourthclass").animate({marginTop:"-=25.5px", marginLeft:"+=159px"})	
   	$("#headpic").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").hide()		
   	})
   	if(($("#chooselanguage").hasClass("newby"))&&(!$("#bothchairs").hasClass("chosen"))){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
   }
   
   function clickrisertohead2movieiconenable()
   {
    if($("#clickriserpic").hasClass("chosen"))
    {
    $("#clickrisertohead2movieicon").fadeIn(300)
    }
    else if($("#singlebonepic").hasClass("chosen"))
   {
   $("#head2movieicon").fadeIn(300)
   }
   else if($("#liftshaftpic").hasClass("chosen"))
   {
   $("#liftshafttohead2movieicon").fadeIn(300)
   }
   else if($("#m2xriserpic").hasClass("chosen"))
    {
    $("#m2riserstohead2movieicon").fadeIn(300)
    }
    else if($("#m2riserpic").hasClass("chosen"))
    {
    $("#m2riserstohead2movieicon").fadeIn(300)
    }
    else if($("#m2maxriserpic").hasClass("chosen"))
    {
    $("#m2riserstohead2movieicon").fadeIn(300)
    }
   }
   
   function singlebonetohead2movieiconenable()
   {
   if($("#singlebonepic").hasClass("chosen"))
   {
   	$("#head2movieicon").addClass("chosen").fadeIn(300)
   $("#head1movieicon").removeClass("chosen").fadeOut(300)
   }
   }
   
   function invertedheadpost1tohead2movieiconenable()
   {
	 if($("#invertedheadpost1pic").hasClass("chosen") || $("#head2").hasClass("chosen"))
	{
		$("#invertedheadpost1tohead2movieicon").fadeIn(300)
	}
   }
   
   
   function head3movieiconenable()
   {
    if($("#m2riserpic2").hasClass("chosen"))
    {
    $("#m2riserstohead3movieicon").fadeIn(300)
    }
    else if($("#m2xriserpic2").hasClass("chosen"))
    {
    $("#m2riserstohead3movieicon").fadeIn(300)
    }
    else if($("#m2maxriserpic2").hasClass("chosen"))
    {
    $("#m2riserstohead3movieicon").fadeIn(300)
    }
    else
    {
     $("#head3toclickrisermovieicon").addClass("ihidden")
      $("#head3movieicon").addClass("ihidden")
    }
   }
   
   function ninetydegree1todualarm2video()
   {
    if($("#90degreeadapter1pic").hasClass("chosen"))
    {
     $("#ninetydegree1todualarm2").fadeIn(300)
    }
   }
   
   function head4movieiconenable()
   {
	   if(($("#singlebonepic3").hasClass("chosen"))){
   		$("#head4movieicon").fadeIn(500)
   	}
   }
   
   function singlebone3tohead4video()
   {
	  if(($("#singlebonepic3").hasClass("chosen"))){
		$("#singlebonetohead2").fadeIn(500)
   		$("#backdrop").show()
   	} 
   }
   
   function dualarm2tom2risersvideo()
   {
	 if($("#m2riserpic").hasClass("chosen"))
    {
    $("#dualarm1tom2risers").fadeIn(300)
    } 
    else if($("#m2xriserpic").hasClass("chosen"))
    {
    $("#dualarm1tom2risers").fadeIn(300)
    }
    else if($("#m2maxriserpic").hasClass("chosen"))
    {
    $("#dualarm1tom2risers").fadeIn(300)
    }  
   }
   
   function dualarm3tom2risersvideo()
   {
	 if($("#m2riserpic2").hasClass("chosen"))
    {
    $("#dualarm1tom2risers").fadeIn(300)
    } 
    else if($("#m2xriserpic2").hasClass("chosen"))
    {
    $("#dualarm1tom2risers").fadeIn(300)
    }
    else if($("#m2maxriserpic2").hasClass("chosen"))
    {
    $("#dualarm1tom2risers").fadeIn(300)
    }  
   }
   
   function m2riserstohead2movieiconenable()
   {
    if($("#m2riserpic").hasClass("chosen"))
    {
    $("#m2riserstohead2movieicon").fadeIn(300)
    } 
    else if($("#m2xriserpic").hasClass("chosen"))
    {
    $("#m2riserstohead2movieicon").fadeIn(300)
    }
    else if($("#m2maxriserpic").hasClass("chosen"))
    {
    $("#m2riserstohead2movieicon").fadeIn(300)
    }
    else
    {
      $("#m2riserstohead2movieicon").addClass("ihidden");
    }
   }
   
   function m2riserstohead3movieiconenable()
   {
    if($("#m2riserpic2").hasClass("chosen"))
    {
    $("#m2riserstohead3movieicon").fadeIn(300)
    } 
    else if($("#m2xriserpic2").hasClass("chosen"))
    {
    $("#m2riserstohead3movieicon").fadeIn(300)
    }
    else if($("#m2maxriserpic2").hasClass("chosen"))
    {
    $("#m2riserstohead3movieicon").fadeIn(300)
    }
    else
    {
      $("#m2riserstohead3movieicon").addClass("ihidden");
    }
   }
   
   function singlebonetohead3movieiconenable()
   {
    if($("#singlebonepic2").hasClass("chosen"))
    {
    $("#head3movieicon").fadeIn(300)
    }
    else if($("#clickriserpic2").hasClass("chosen"))
   {
   $("#head3toclickrisermovieicon").addClass("chosen").fadeIn(300)
   }
   else if($("#liftshaftpic2").hasClass("chosen"))
   {
   $("#liftshaft2tohead3movieicon").addClass("chosen").fadeIn(300)
   }
    else
    {
    $("#head3movieicon").addClass("ihidden")
     $("#head3toclickrisermovieicon").addClass("ihidden")
    }
   }
   
   function clickrisertohead2video()
   {
    if(($("#clickriserpic").hasClass("chosen"))){
   		$("#clickrisertohead2").fadeIn(500)
   		$("#backdrop").show()
   	} 
   }
   
   function dualarm1toclickriservideo()
   {
    if(($("#dualarm1pic").hasClass("chosen"))){
   		$("#dualarm1toclickriser").fadeIn(500)
   		$("#backdrop").show()
   	} 
   }
   
   function dualarm2tosinglebonevideo()
   {
	 if(($("#singlebonepic").hasClass("chosen"))){
   		$("#dualarm1tosinglebone").fadeIn(500)
   		$("#backdrop").show()
   	}  
   }
   
   function liftshafttohead2video()
   {
    if(($("#liftshaftpic").hasClass("chosen"))){
   		$("#liftshafttobone").fadeIn(500)
   		$("#backdrop").show()
   	} 
   }
   
   function clickrisertohead3video()
   {
    if(($("#clickriserpic2").hasClass("chosen"))){
   		$("#clickrisertohead2").fadeIn(500)
   		$("#backdrop").show()
   	} 
   }
   
   function m2riserstohead2video()
   {
    if($("#m2riserpic").hasClass("chosen") || $("#head2").hasClass("chosen"))
    {
    $("#m2riserstohead2").fadeIn(300)
    $("#backdrop").show()
    }
    else if($("#m2xriserpic").hasClass("chosen") || $("#head2").hasClass("chosen"))
    {
    $("#m2riserstohead2").fadeIn(300)
    $("#backdrop").show()
    }
    else if($("#m2maxriserpic").hasClass("chosen") || $("#head2").hasClass("chosen"))
    {
    $("#m2riserstohead2").fadeIn(300)
    $("#backdrop").show()
    }
   }
   
   function m2riserstohead3video()
   {
    if($("#m2riserpic2").hasClass("chosen") || $("#head3").hasClass("chosen"))
    {
    $("#m2riserstohead2").fadeIn(300)
    $("#backdrop").show()
    }
    else if($("#m2xriserpic2").hasClass("chosen") || $("#head3").hasClass("chosen"))
    {
    $("#m2riserstohead2").fadeIn(300)
    $("#backdrop").show()
    }
    else if($("#m2maxriserpic2").hasClass("chosen") || $("#head3").hasClass("chosen"))
    {
    $("#m2riserstohead2").fadeIn(300)
    $("#backdrop").show()
    }
   }
   
   function liftshaft2tohead3video()
   {
    if($("#liftshaftpic2").hasClass("chosen"))
    {
    $("#liftshafttobone").fadeIn(300)
    $("#backdrop").show()
    }
   }
   
   function m2risertodualarmvideo()
   {
   if($("#dualarm2pic").hasClass("chosen"))
    {
    $("#dualarm1tom2risers").fadeIn(300)
    $("#backdrop").show()
    } 
   }
   
   function m2xrisertodualarmvideo()
   {
   if($("#dualarm2pic").hasClass("chosen"))
    {
    $("#dualarm1tom2risers").fadeIn(300)
    $("#backdrop").show()
    }  
   }
   
   function m2maxrisertodualarmvideo()
   {
   if($("#dualarm2pic").hasClass("chosen"))
    {
    $("#dualarm1tom2risers").fadeIn(300)
    $("#backdrop").show()
    }   
   }
   
   function liftshaft2todualarmvideo()
   {
   if($("#dualarm1pic").hasClass("chosen"))
    {
    $("#liftshafttodualarm").fadeIn(300)
    $("#backdrop").show()
    } 
   }
   
   function liftshaft2to90degreeadaptervideo()
   {
   if($("#90degreeadapter1pic").hasClass("chosen"))
    {
    $("#liftshaftto90degreeadapter").fadeIn(300)
    $("#backdrop").show()
    } 
   }
   
   function liftshafttodualarmvideo()
   {
   if($("#dualarm2pic").hasClass("chosen"))
    {
    $("#liftshafttodualarm").fadeIn(300)
    $("#backdrop").show()
    }  
   }
   
   function dualarm3tosinglebonevideo()
   {
	  if($("#singlebonepic2").hasClass("chosen"))
    {
    $("#dualarm1tosinglebone").fadeIn(300)
    $("#backdrop").show()
    } 
   }
   
   function wedgereceiverdirectmount3tosinglebonevideo()
   {
	  if($("#singlebonepic2").hasClass("chosen"))
    {
    $("#wedgereceiverdirectmount3tosinglebone").fadeIn(300)
    $("#backdrop").show()
    } 
   }
   
   function wedgereceiverdirectmount4tosinglebonevideo()
   {
	 if($("#singlebonepic3").hasClass("chosen"))
    {
    $("#wedgereceiverdirectmount3tosinglebone").fadeIn(300)
    $("#backdrop").show()
    }   
   }
   
   
   function m2riserstoliftshaft3video()
   {
    if(($("#m2riserpic2").hasClass("chosen"))){
   		$("#m2bonetom2riser").fadeIn(500)
   		$("#backdrop").show()
   	}
   else if(($("#m2xriserpic2").hasClass("chosen"))){
   		$("#m2bonetom2riser").fadeIn(500)
   		$("#backdrop").show()
   	}
   
   else if(($("#m2maxriserpic2").hasClass("chosen"))){
   		$("#m2bonetom2riser").fadeIn(500)
   		$("#backdrop").show()
   	}
   }
   
   function oneinchtom2risersvideo()
   {
    if(($("#m2riserpic").hasClass("chosen"))){
   		$("#oneinchtom2risers").fadeIn(500)
   		$("#backdrop").show()
   	}
   else if(($("#m2xriserpic").hasClass("chosen"))){
   		$("#oneinchtom2risers").fadeIn(500)
   		$("#backdrop").show()
   	}
   
   else if(($("#m2maxriserpic").hasClass("chosen"))){
   		$("#oneinchtom2risers").fadeIn(500)
   		$("#backdrop").show()
   	}
   }
   
   function threeinchtom2risersvideo()
   {
	   if(($("#m2riserpic").hasClass("chosen"))){
   		$("#oneinchtom2risers").fadeIn(500)
   		$("#backdrop").show()
   	}
   else if(($("#m2xriserpic").hasClass("chosen"))){
   		$("#oneinchtom2risers").fadeIn(500)
   		$("#backdrop").show()
   	}
   
   else if(($("#m2maxriserpic").hasClass("chosen"))){
   		$("#oneinchtom2risers").fadeIn(500)
   		$("#backdrop").show()
   	}
   }
   
   function head1toinchrisersvideo()
   {
	if(($("#oneinchriser1").hasClass("chosen"))){
   		$("#oneinchtohead").fadeIn(500)
   		$("#backdrop").show()
   	}
   else if(($("#threeinchriser1").hasClass("chosen"))){
   		$("#oneinchtohead").fadeIn(500)
   		$("#backdrop").show()
   	}   
   }
   
   
   function singlebone2tohead3video()
   {
    if(($("#singlebonepic2").hasClass("chosen"))){
   		$("#singlebonetohead2").fadeIn(500)
   		$("#backdrop").show()
   	}	
   }
   
   function dualarm1tosinglebonevideo()
   {
    if(($("#dualarm1pic").hasClass("chosen"))){
   		$("#dualarm1tosinglebone").fadeIn(500)
   		$("#backdrop").show()
   	}	
   }
   
   
   function ninetydegreeadapter1tosinglebonevideo()
   {
   if(($("#90degreeadapter1pic").hasClass("chosen"))){
   		$("#90degreeadapter1tosinglebone").fadeIn(500)
   		$("#backdrop").show()
   	}	  
   }
   
   function invertedheadpost1tosinglebonevideo()
   {
   if(($("#invertedheadpost1pic").hasClass("chosen"))){
   		$("#invertedheadpost1tosinglebone").fadeIn(500)
   		$("#backdrop").show()
   	} 
   }
   
   
   function ninetydegree1towedgereceivervideo()
   {
   if(($("#90degreeadapter1pic").hasClass("chosen"))){
   		$("#90degreeadapter1towedgereceiver").fadeIn(500)
   		$("#backdrop").show()
   	}	  
   }
   
   function wedgereceiverdirectmount1tosinglebonevideo()
   {  
	if(($("#singlebonepic").hasClass("chosen"))){
   		$("#wedgereceiverdirectmount3tosinglebone").fadeIn(500)
   		$("#backdrop").show()
   	}   
   }
</script>
<script>
   function singlebone2(x){
   	$("#helpbubblebackground").show()
	$("#singlebone2").addClass("chosen");
   	$("#singlebonepic2").addClass("chosen");
   
   if($('#clickriserpic').hasClass(("chosen")))
   {
   $("#clickrisertosinglebonemovieicon").fadeIn(300)
   }
   else if($('#liftshaftpic').hasClass(("chosen")))
   {
   $("#liftshafttosinglebonemovieicon").fadeIn(300)
   }
   else if($('#invertedheadpost1pic').hasClass(("chosen")))
   {
   $("#invertedheadpost1tosinglebonemovieicon").fadeIn(300)
   }
   else if($('#dualarm1pic').hasClass(("chosen")))
   {
   $("#dualarm1tosinglebonemovieicon").fadeIn(300)
   }
   else if($('#90degreeadapter1pic').hasClass(("chosen")))
   {
   $("#90degreeadapter1tosinglebonemovieicon").fadeIn(300)
   }
   else if($('#m2riserpic').hasClass(("chosen")) || $('#m2xriserpic').hasClass(("chosen")) || $('#m2maxriserpic').hasClass(("chosen")))
   {
   $("#m2riserstosinglebonemovieicon").fadeIn(300)
   }
   else{
   $("#singlebonemovieicon").fadeIn(300)
   }
   
   	/*if($("#m2riserpic").hasClass("chosen")){	
   		$("#doublepostpic").show()
   		$(".secondclass").css({"margin-top":"-14px"})
   		$(".thirdclass").css({"margin-top":"-14px"})
   		$(".fourthclass").css({"margin-top":"-14px"})
   	}
   	else if($("#m2xriserpic").hasClass("chosen")){	
   		$("#doublepostpic").show()
   		$(".secondclass").css({"margin-top":"-14px"})
   		$(".thirdclass").css({"margin-top":"-14px"})
   		$(".fourthclass").css({"margin-top":"-14px"})
   	}
   	else if($("#m2maxriserpic").hasClass("chosen")){	
   		$("#doublepostpic").show()
   		$(".secondclass").css({"margin-top":"-14px"})
   		$(".thirdclass").css({"margin-top":"-14px"})
   		$(".fourthclass").css({"margin-top":"-14px"})
   	}
	else if($("#m2maxriserpic").hasClass("chosen")){	
   		$("#doublepostpic").show()
   		$(".secondclass").css({"margin-top":"-14px"})
   		$(".thirdclass").css({"margin-top":"-14px"})
   		$(".fourthclass").css({"margin-top":"-14px"})
   	}*/
	$("#wedgereceiverdirectmount3").addClass("third").fadeIn(0, function(){
   })
   
   
	$(".chairoptions").fadeOut(200)
   $("#firstscrollview").hide();
   $("#secondscrollview").hide();
   $("#thirdscrollview").delay(300).fadeIn(400)
   $(".third").delay(200).fadeIn(800)
   
   	$("#singleboneinputpar2").show()
   	$(".thirdclass").animate({marginTop:"-=25.5px", marginLeft:"+=159px"})
   	$(".fourthclass").animate({marginTop:"-=25.5px", marginLeft:"+=159px"})	
   	$("#singlebonepic2").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").hide()		
   	})
   modelManager.addModel("201");
   	if(($("#chooselanguage").hasClass("newby"))&&(!$("#bothchairs").hasClass("chosen"))){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
   }
</script>
<script>
   function singlebone3(x){
   
   	$("#helpbubblebackground").show()
	$("#singlebone3").addClass("chosen");
   $("#firstscrollview").hide();
   $("#secondscrollview").hide();
   $("#thirdscrollview").hide();
   
   if($("#clickriserpic2").hasClass("chosen"))
   {
   $("#clickriser2tosinglebonemovieicon").fadeIn(300)
   }
   else if($("#singlebonepic2").hasClass("chosen"))
   {
   $("#singlebone3movieicon").fadeIn(300)
   }
   else if($("#liftshaftpic2").hasClass("chosen"))
   {
   $("#liftshaft2tosinglebonemovieicon").fadeIn(300)
   }
   else if($("#m2riserpic2").hasClass("chosen"))
   {
   $("#singlebone3tom2risersmovieicon").fadeIn(300)
   }
   else if($("#m2xriserpic2").hasClass("chosen"))
   {
   $("#singlebone3tom2risersmovieicon").fadeIn(300)
   }
   else if($("#m2maxriserpic2").hasClass("chosen"))
   {
   $("#singlebone3tom2risersmovieicon").fadeIn(300)
   }
   else if($("#dualarm2pic").hasClass("chosen"))
   {
   $("#singlebone3todualarm2movieicon").fadeIn(300)
   }
   
   	
   	if($("#m2riserpic2").hasClass("chosen")){	
   		$("#doublepostpic2").show()
   		$(".thirdclass").animate({marginTop:"-=28.5px"})
   		$(".fourthclass").animate({marginTop:"-=28.5px"})
   	}
   	else if($("#m2xriserpic2").hasClass("chosen")){	
   		$("#doublepostpic2").show()
   		$(".thirdclass").animate({marginTop:"-=28.5px"})
   		$(".fourthclass").animate({marginTop:"-=28.5px"})
   	}
   	else if($("#m2maxriserpic2").hasClass("chosen")){	
   		$("#doublepostpic2").show()
   		$(".thirdclass").animate({marginTop:"-=28.5px"})
   		$(".fourthclass").animate({marginTop:"-=28.5px"})
   	}
   
   	$("#singleboneinputpar3").show()
	 $(".chairoptions").fadeOut(300)
	//$(".fourth").delay(200).fadeIn(800)
   $(".wedge").delay(200).fadeIn(800)
   $("#back3").delay(200).fadeIn(800)
   	$(".fourthclass").animate({marginTop:"-=25.5px", marginLeft:"+=159px"},0)
   	$("#singlebonepic3").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").fadeOut(0)		
   	})
	
   modelManager.addModel("201");
   
   }
</script>
<script>
   function clickriser(x){
   	$("#helpbubblebackground").show()
	$("#clickriser").addClass("chosen");
   //$("#clickriser1movieicon").fadeOut(500)
   	
   	$("#liftshaft2").removeClass("second").fadeOut(0, function(){
   		$("#clickriser2").removeClass("second").fadeOut(0, function(){
   		$("#wedgereceiverdirectmount2").removeClass("second").fadeOut(0, function(){
   	$("#dualarm2").removeClass("second").fadeOut(0, function(){
   				})
   			})
   		})
   	})
		$(".chairoptions").fadeOut(200)
   $("#firstscrollview").hide();
   $("#secondscrollview").delay(300).fadeIn(400)
   $("#clickriser1movieicon").fadeIn(300)
   $(".second").delay(200).fadeIn(800)
   	$("#clickriserinputpar").show()
   	$(".secondclass").css({"margin-top":"-143.75px", "margin-left":"-205px"})
   	$(".thirdclass").css({"margin-top":"-143.75px", "margin-left":"-205px"})
   	$(".fourthclass").css({"margin-top":"-143.75px", "margin-left":"-205px"})
   	$("#clickriserpic").addClass("chosen").fadeIn(2000)
   modelManager.addModel("202");
   	
   			//$("#helpbubble3").delay(1500).fadeIn(300)
   			//$("#helpbubblebackground").fadeIn(300)
   	
   }
</script>
<script>
   function clickriser2(x){
   	$("#helpbubblebackground").show()
	$("#clickriser2").addClass("chosen");
   
   
   if($("#dualarm1pic").hasClass("chosen"))
   {
   $("#dualarm1toclickrisermovieicon").fadeIn(300);
   }
   else
   {
   $("#clickrisermovieicon").fadeIn(300)	
   }
   
   	$(".second").fadeOut(200)
   //$("#clickrisermovieicon").fadeOut(500)
   
   	
   	$("#liftshaft3").removeClass("third").fadeOut(0, function(){
   		$("#clickriser3").removeClass("third").fadeOut(0, function(){
   					$("#wedgereceiverdirectmount3").removeClass("third").fadeOut(0, function(){
   			$("#dualarm3").removeClass("third").fadeOut(0, function(){
   						
   				})
   			})
   		})
   	})
   	$(".chairoptions").fadeOut(200)
   $("#firstscrollview").hide();
   $("#secondscrollview").hide();
   $("#thirdscrollview").delay(300).fadeIn(400)
   $(".third").delay(200).fadeIn(800)
   	$("#clickriserinputpar2").show()
   	$(".thirdclass").animate({marginTop:"-=144.25px", marginLeft:"+=174px"})
   	$(".fourthclass").animate({marginTop:"-=144.25px", marginLeft:"+=174px"})
   	$("#clickriserpic2").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").hide()		
   	})
   modelManager.addModel("202");
   	if(($("#chooselanguage").hasClass("newby"))&&(!$("#bothchairs").hasClass("chosen"))){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
   }
</script>
<script>
   function clickriser3(x){
   
   	$("#helpbubblebackground").show()
   $("#clickriser3").addClass("chosen");
   if($("#m2riserpic2").hasClass("chosen"))
   {
   	$("#m2riserstoclickriser3movieicon").fadeIn(300)
   }
   else if($("#m2xriserpic2").hasClass("chosen"))
   {
   	$("#m2riserstoclickriser3movieicon").fadeIn(300)
   }
   else if($("#m2maxriserpic2").hasClass("chosen"))
   {
   	$("#m2riserstoclickriser3movieicon").fadeIn(300)
   }
   else if($("#dualarm2pic").hasClass("chosen"))
   {
   	$("#clickrisertodualarm2movieicon").fadeIn(300)
   }
   else
   {
   $("#clickriser3movieicon").fadeIn(300)	
   }
   	$("#clickriserinputpar3").show()
	//$(".fourth").delay(200).fadeIn(800)
   	$(".fourthclass").animate({marginTop:"-=144.25px", marginLeft:"+=174px"})
   	$("#clickriserpic3").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").fadeOut(0, done())		
   	})
   modelManager.addModel("202");
   
   }
</script>
<script>
   function liftshaft(x){
   	$("#helpbubblebackground").show()
	$("#liftshaft").addClass("chosen");
   	
   	
   		$("#clickriser2").removeClass("second").fadeOut(0, function(){
   			$("#m2riser2").removeClass("second").fadeOut(0, function(){
   				$("#m2xriser2").removeClass("second").fadeOut(0, function(){
   					$("#m2maxriser2").removeClass("second").fadeOut(0, function(){
					$("#dualarm2").removeClass("second").fadeOut(0, function(){
						$("#wedgereceiverdirectmount2").removeClass("second").fadeOut(0, function(){
									$("#liftshaft2").removeClass("second").fadeOut(0, function(){
   						
   			})
   		})
   	})
	})
   			})
   		})
   	})
	$(".chairoptions").fadeOut(200)
   $("#firstscrollview").hide();
   $("#secondscrollview").delay(300).fadeIn(400)
   $(".second").delay(200).fadeIn(800)
   $("#liftshaft1movieicon").fadeIn(300)
   	$("#liftshaftinputpar").show()
   	$(".secondclass").css({"margin-top":"-141px", "margin-left":"-493px"})
   	$(".thirdclass").css({"margin-top":"-141px", "margin-left":"-493px"})
   	$(".fourthclass").css({"margin-top":"-141px", "margin-left":"-493px"})
   	$("#liftshaftpic").addClass("chosen").fadeIn(2000)
   	modelManager.addModel("206");
   			//$("#helpbubble3").delay(1500).fadeIn(300)
   			//$("#helpbubblebackground").fadeIn(300)
   	
   }
</script>
<script>
   function liftshaft2(x){
   	$("#helpbubblebackground").show()
	$("#liftshaft2").addClass("chosen");
   
   if($("#m2riserpic").hasClass("chosen"))
   {
   $("#m2riserstoliftshaftmovieicon").fadeIn(300)
   }
   else if($("#m2xriserpic").hasClass("chosen"))
   {
   $("#m2riserstoliftshaftmovieicon").fadeIn(300)
   }
   else if ($("#m2maxriserpic").hasClass("chosen"))
   {
   $("#m2riserstoliftshaftmovieicon").fadeIn(300)
   }
   else if ($("#90degreeadapter1pic").hasClass("chosen"))
   {
   $("#liftshaft2to90degreeadaptermovieicon").fadeIn(300)
   }
   else if ($("#singlebonepic").hasClass("chosen"))
   {
   	$("#liftshaftmovieicon").fadeIn(300)
   }
   else if ($("#dualarm1pic").hasClass("chosen"))
   {
   	$("#liftshaft2todualarmmovieicon").fadeIn(300)
   }
   $(".second").fadeOut(200)
   
   	
   		$("#clickriser3").removeClass("third").fadeOut(0, function(){
   			$("#m2riser3").removeClass("third").fadeOut(0, function(){
   				$("#m2xriser3").removeClass("third").fadeOut(0, function(){
   					$("#m2maxriser3").removeClass("third").fadeOut(0, function(){
					$("#dualarm3").removeClass("third").fadeOut(0, function(){
						$("#wedgereceiverdirectmount3").removeClass("third").fadeOut(0, function(){
									$("#liftshaft3").removeClass("third").fadeOut(0, function(){
   			})
   		})
   	})
	})
   			})
   		})
   	})
   	$("#liftshaftinputpar2").show()
		$(".chairoptions").fadeOut(200)
   $("#firstscrollview").hide();
   $("#secondscrollview").hide();
   $("#thirdscrollview").delay(300).fadeIn(400)
   $(".third").delay(200).fadeIn(800)
   	$(".thirdclass").animate({marginTop:"-=141.5px", marginLeft:"-=113px"})
   	$(".fourthclass").animate({marginTop:"-=141.5px", marginLeft:"-=113px"})
   	$("#liftshaftpic2").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").hide()		
   	})
   modelManager.addModel("206");
   	if(($("#chooselanguage").hasClass("newby"))&&(!$("#bothchairs").hasClass("chosen"))){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
   
   }
</script>
<script>
   function liftshaft3(x){
   
   	$("#helpbubblebackground").show()
   $("#liftshaft3").addClass("chosen");
   if($("#m2riserpic2").hasClass("chosen"))
   {
   $("#m2riserstoliftshaft3movieicon").fadeIn(300)
   }
   else if($("#m2xriserpic2").hasClass("chosen"))
   {
   $("#m2riserstoliftshaft3movieicon").fadeIn(300)
   }
   else if ($("#m2maxriserpic2").hasClass("chosen"))
   {
   $("#m2riserstoliftshaft3movieicon").fadeIn(300)
   }
   else if ($("#dualarm2pic").hasClass("chosen"))
   {
   $("#liftshafttodualarmmovieicon").fadeIn(300)
   }
   else
   {
   $("#liftshaft3movieicon").fadeIn(300)
   }
   
   	$("#liftshaftinputpar3").show()
	//$(".fourth").delay(200).fadeIn(800)
   	$(".fourthclass").animate({marginTop:"-=141.5px", marginLeft:"-=113px"})
   	$("#liftshaftpic3").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").fadeOut(0, done())		
   	})
   modelManager.addModel("206");
   }
</script>
<script>
   function m2riser(x){
   	$("#helpbubblebackground").show()
	$("#m2riser1").addClass("chosen");
	$("#m2riserpic").addClass("chosen");
   
   if($("#oneinchriser1").hasClass("chosen"))
   {
   $("#oneinchtom2risermovieicon").fadeIn(300)
   }
   else if($("#threeinchriser1").hasClass("chosen"))
	{
		$("#threeinchtom2risermovieicon").fadeIn(300)
	}
   else
   {
   $("#m2riser1movieicon").fadeIn(300)
    }
   
  
   modelManager.addModel("203");
   
    M2count++; 
   	$("#clickriser2").removeClass("second").fadeOut(0, function(){
   	$("#wedgereceiverdirectmount2").removeClass("second").fadeOut(0, function(){
				})
				})
   
	$(".chairoptions").fadeOut(200)
   $("#firstscrollview").hide();
   $("#secondscrollview").delay(300).fadeIn(400)
   $(".second").delay(300).fadeIn(400)
   $("#m2riserpic").addClass("chosen").fadeIn(2000)
   	$("#m2riserinputpar").show()
   	$(".secondclass").css({"margin-top":"14.5px", "margin-left":"-82px"})
   	$(".thirdclass").css({"margin-top":"14.5px", "margin-left":"-82px"})
   	$(".fourthclass").css({"margin-top":"14.5px", "margin-left":"-82px"})
   
   			//$("#helpbubble3").delay(1500).fadeIn(300)
   			//$("#helpbubblebackground").fadeIn(300)
   	
   }
</script>
<script>
   function m2riser2(x){
   	$("#helpbubblebackground").show()
	$("#m2riser2").addClass("chosen");
   
   if($("#clickriserpic").hasClass("chosen"))
   {
   $("#m2riser2toclickrisermovieicon").fadeIn(300)
   }
   else if($("#dualarm1pic").hasClass("chosen"))
   {
   $("#dualarm1tom2risermovieicon").fadeIn(300)
   }
   else if($("#singlebonepic").hasClass("chosen"))
   {
   $("#m2riser2movieicon").fadeIn(300)
   }
   else if($("#m2riserpic").hasClass("chosen") || $("#m2xriserpic").hasClass("chosen") || $("#m2maxriserpic").hasClass("chosen"))
   {
   $("#m2risertom2riser2movieicon").fadeIn(300)
   }
   
    
	 var flag = modelManager.checkForModel("203")
	 
	 if(M2count==0)
	 {
		  //M2count++;
		$("#clickriser3").removeClass("third").fadeOut(0, function(){
   	$("#wedgereceiverdirectmount3").removeClass("third").fadeOut(0, function(){
				})
				}) 
	 }
	 else if(M2count==1)
	 {
		 $("#clickriser3").removeClass("third").fadeOut(0, function(){
			$("#m2riser3").removeClass("third").fadeOut(0, function (){
			$("#m2xriser3").removeClass("third").fadeOut(0, function (){
			$("#m2maxriser3").removeClass("third").fadeOut(0, function (){
				//$("#liftshaft3").removeClass("third").fadeOut(0, function (){
   	$("#wedgereceiverdirectmount3").removeClass("third").fadeOut(0, function(){
		 //$(".third").delay(200).fadeIn(800)
				//})
				})
				})
					})
				}) 
		 })
	 }
	 $(".chairoptions").fadeOut(200)
   $("#firstscrollview").hide();
   $("#secondscrollview").hide();
   $("#thirdscrollview").delay(300).fadeIn(400)
	$(".third").delay(200).fadeIn(800)
   	$("#m2riserinputpar2").show()
   	$(".thirdclass").animate({marginTop:"+=14px", marginLeft:"+=300px"})
   	$(".fourthclass").animate({marginTop:"+=14px", marginLeft:"+=300px"})
   	$("#m2riserpic2").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").hide()		
   	})
   
   	if(($("#chooselanguage").hasClass("newby"))&&(!$("#bothchairs").hasClass("chosen"))){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	 modelManager.addModel("203");
    M2count++;
 
   }
   
   function dualarm1tom2risersvideo()
   {
    if($("#dualarm1pic").hasClass("chosen") || $("#m2riserpic2").hasClass("chosen"))
    {
     $("#dualarm1tom2risers").fadeIn(300)
    }
    else if($("#dualarm1pic").hasClass("chosen") || $("#m2xriserpic2").hasClass("chosen"))
    {
     $("#dualarm1tom2risers").fadeIn(300)
    }
    else if($("#dualarm1pic").hasClass("chosen") || $("#m2maxriserpic2").hasClass("chosen"))
    {
     $("#dualarm1tom2risers").fadeIn(300)
    }
   }
   
   function m2riserstoclickriser2video()
   {
	 if($("#clickriserpic2").hasClass("chosen"))
   {
   $("#clickrisertom2riser").fadeIn(300)
   }  
   }
</script>
<script>
   function m2riser3(x){
   
   	$("#helpbubblebackground").show()
	$("#m2riser3").addClass("chosen");
   
   if(($("#singlebonepic2").hasClass("chosen"))||($("#m2riserpic3").hasClass("chosen"))){
   		$("#m2riser3movieicon").fadeIn(300)
   	}
   
   else if($("#clickriserpic2").hasClass("chosen"))
   {
   $("#m2riser3toclickrisermovieicon").fadeIn(300)
   }
   else if($("#dualarm2pic").hasClass("chosen"))
    {
    $("#m2risertodualarmmovieicon").fadeIn(300)
    } 
   else if($("#m2riserpic2").hasClass("chosen") || $("#m2xriserpic2").hasClass("chosen") || $("#m2maxriserpic2").hasClass("chosen"))
   {
   $("#m2riser2tom2risermovieicon").fadeIn(300)
   }
   	$("#m2riserinputpar3").show()
	//$(".fourth").delay(200).fadeIn(800)
   	$(".fourthclass").animate({marginTop:"+=14px", marginLeft:"+=300px"})
   	$("#m2riserpic3").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").fadeOut(0, done())	
   	})
   modelManager.addModel("203");
   }
</script>
<script>
   function m2xriser(x){
   	$("#helpbubblebackground").show()
	$("#m2xriser1").addClass("chosen");
   	
   if($("#oneinchriser1").hasClass("chosen"))
   {
   $("#oneinchtom2xrisermovieicon").fadeIn(300)
   }
   else if($("#threeinchriser1").hasClass("chosen"))
	{
		$("#threeinchtom2xrisermovieicon").fadeIn(300)
	}
   else
   {
   $("#m2xriser1movieicon").fadeIn(300)
   }
   
  
   //var flag = modelManager.checkForModel("204")
   //var M2count=1;
   
   /*if(M2count==1)
   {
	    M2count++;
   	$("#clickriser2").removeClass("second").fadeOut(0, function(){
   	$("#wedgereceiverdirectmount2").removeClass("second").fadeOut(0, function(){
				})
				})
   }
   else
   {*/
	   //M2Xcount++;
	    M2count++;
   	$("#clickriser2").removeClass("second").fadeOut(0, function(){
   	$("#wedgereceiverdirectmount2").removeClass("second").fadeOut(0, function(){
				})
				})
   //}  
   
    $("#m2xriserinputpar").show()
	$(".chairoptions").fadeOut(200)
   $("#firstscrollview").hide();
   $("#secondscrollview").delay(300).fadeIn(400)
   $(".second").delay(300).fadeIn(400)
   	$(".secondclass").css({"margin-top":"14.5px", "margin-left":"-81px"})
   	$(".thirdclass").css({"margin-top":"14.5px", "margin-left":"-81px"})
   	$(".fourthclass").css({"margin-top":"14.5px", "margin-left":"-81px"})
   	$("#m2xriserpic").addClass("chosen").fadeIn(2000)
   	//modelManager.addModel("204");
   			//$("#helpbubble3").delay(1500).fadeIn(300)
   			//$("#helpbubblebackground").fadeIn(300)
   	 modelManager.addModel("204");
   }
</script>
<script>
   function m2xriser2(x){
   	$("#helpbubblebackground").show()
	$("#m2xriser2").addClass("chosen");
   
   if($("#clickriserpic").hasClass("chosen"))
   {
   $("#m2xriser2toclickrisermovieicon").fadeIn(300)
   }
   else if($("#dualarm1pic").hasClass("chosen"))
   {
   $("#dualarm1tom2xrisermovieicon").fadeIn(300)
   }
   else if($("#m2riserpic").hasClass("chosen") || $("#m2xriserpic").hasClass("chosen") || $("#m2maxriserpic").hasClass("chosen"))
   {
   $("#m2risertom2xriser2movieicon").fadeIn(300)
   }
   else
   {
   	$("#m2xriser2movieicon").fadeIn(300)
   }
   
  
   var flag = modelManager.checkForModel("204")
   
   if(M2count==0)
   {
	    //M2count++;
   	$("#clickriser3").removeClass("third").fadeOut(0, function(){
   	$("#wedgereceiverdirectmount3").removeClass("third").fadeOut(0, function(){
		})
	})
   
   }
   
   else if(M2count==1)
	 {
		  M2count++;
   	$("#clickriser3").removeClass("third").fadeOut(0, function(){
		$("#m2riser3").removeClass("third").fadeOut(0, function(){
			$("#m2xriser3").removeClass("third").fadeOut(0, function(){
				$("#m2maxriser3").removeClass("third").fadeOut(0, function(){
					//$("#liftshaft3").removeClass("third").fadeOut(0, function(){
   	$("#wedgereceiverdirectmount3").removeClass("third").fadeOut(0, function(){
				//})
				}) 
				})
				})
					})
				}) 
	 }
   	$("#m2xriserinputpar2").show()
	$(".chairoptions").fadeOut(200)
   $("#firstscrollview").hide();
   $("#secondscrollview").hide();
   $("#thirdscrollview").delay(300).fadeIn(400)
   $(".third").delay(300).fadeIn(400)
   	$(".thirdclass").animate({marginTop:"+=14px", marginLeft:"+=300px"})
   	$(".fourthclass").animate({marginTop:"+=14px", marginLeft:"+=300px"})
   	$("#m2xriserpic2").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").hide()		
   	})
	 
   //modelManager.addModel("204");
   	if(($("#chooselanguage").hasClass("newby"))&&(!$("#bothchairs").hasClass("chosen"))){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	 modelManager.addModel("204");
   }
</script>
<script>
   function m2xriser3(x){
   
   	$("#helpbubblebackground").show()
   $("#m2xriser3").addClass("chosen");
   
   if(($("#singlebonepic2").hasClass("chosen"))||($("#m2xriserpic3").hasClass("chosen"))){
   		$("#m2xriser3movieicon").fadeIn(300)
   }
   else if($("#m2riserpic2").hasClass("chosen") || $("#m2xriserpic2").hasClass("chosen") || $("#m2maxriserpic2").hasClass("chosen"))
   {
	   $("#m2xriser2tom2xrisermovieicon").fadeIn(300)
   }
   else if($("#clickriserpic2").hasClass("chosen"))
   {
   $("#m2xriser3toclickrisermovieicon").fadeIn(300)
   }
   else if($("#dualarm2pic").hasClass("chosen"))
   {
   $("#m2xrisertodualarmmovieicon").fadeIn(300)
   }
   
   	$("#m2xriserinputpar3").show()
	//$(".fourth").delay(200).fadeIn(800)
   	$(".fourthclass").animate({marginTop:"+=14px", marginLeft:"+=300px"})
   	$("#m2xriserpic3").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").fadeOut(0, done())	
   	})
   modelManager.addModel("204");
   }
</script>
<script>
   function m2maxriser(x){
   	$("#helpbubblebackground").show()
	$("#m2maxriser1").addClass("chosen");
   
   if($("#oneinchriser1").hasClass("chosen"))
   {
   $("#oneinchtom2maxrisermovieicon").fadeIn(300)
   }
   else if($("#threeinchriser1").hasClass("chosen"))
	{
		$("#threeinchtom2maxrisermovieicon").fadeIn(300)
	}
   else
   {
   $("#m2maxriser1movieicon").fadeIn(300)
   }
   
  
   //var flag = modelManager.checkForModel("205")
   //var M2count=1;
   
   /*if(M2count==1)
   {
	    M2count++;
   	$("#clickriser2").removeClass("second").fadeOut(0, function(){
   	$("#wedgereceiverdirectmount2").removeClass("second").fadeOut(0, function(){
				})
				})
   }
   else
   {*/
	  // M2Maxcount++;
	   M2count++;
   	$("#clickriser2").removeClass("second").fadeOut(0, function(){
   	$("#wedgereceiverdirectmount2").removeClass("second").fadeOut(0, function(){
				})
				})
   //}
   	$("#m2maxriserinputpar").show()
	$(".chairoptions").fadeOut(200)
   $("#firstscrollview").hide();
   $("#secondscrollview").delay(300).fadeIn(400)
   $(".second").delay(300).fadeIn(400)
   
   	$(".secondclass").css({"margin-top":"14.5px", "margin-left":"-81px"})
   	$(".thirdclass").css({"margin-top":"14.5px", "margin-left":"-81px"})
   	$(".fourthclass").css({"margin-top":"14.5px", "margin-left":"-81px"})
   	$("#m2maxriserpic").addClass("chosen").fadeIn(2000)
  // modelManager.addModel("205");
   	
   			//$("#helpbubble3").delay(1500).fadeIn(300)
   			//$("#helpbubblebackground").fadeIn(300)
   	 modelManager.addModel("205");
   }
</script>
<script>
   function m2maxriser2(x){
   	$("#helpbubblebackground").show()
	$("#m2maxriser2").addClass("chosen");
   	
   if($("#clickriserpic").hasClass("chosen"))
   {
   $("#m2maxriser2toclickrisermovieicon").fadeIn(300)
   }
   else if($("#dualarm1pic").hasClass("chosen"))
   {
   $("#dualarm1tom2maxrisermovieicon").fadeIn(300)
   }
   else if($("#m2riserpic").hasClass("chosen") || $("#m2xriserpic").hasClass("chosen") || $("#m2maxriserpic").hasClass("chosen"))
   {
   $("#m2risertom2maxriser2movieicon").fadeIn(300)
   }
   else
   {
   	$("#m2maxriser2movieicon").fadeIn(300)
   }  
   
  
   var flag = modelManager.checkForModel("205")
   
   if(M2count==0)
	 {
		  //M2count++;
   	$("#clickriser3").removeClass("third").fadeOut(0, function(){
   	$("#wedgereceiverdirectmount3").removeClass("third").fadeOut(0, function(){
					})
				})
	 }
	 
	else if(M2count==1)
	{
		 M2count++;
   	$("#clickriser3").removeClass("third").fadeOut(0, function(){
			$("#m2riser3").removeClass("third").fadeOut(0, function(){
					$("#m2xriser3").removeClass("third").fadeOut(0, function(){
							$("#m2maxriser3").removeClass("third").fadeOut(0, function(){
									//$("#liftshaft3").removeClass("third").fadeOut(0, function(){
   	$("#wedgereceiverdirectmount3").removeClass("third").fadeOut(0, function(){
				//})
				})
				})
				})
					})
				})
				
	}
   	$("#m2maxriserinputpar2").show()
	$(".chairoptions").fadeOut(200)
   $("#firstscrollview").hide();
   $("#secondscrollview").hide();
   $("#thirdscrollview").delay(300).fadeIn(400)
   $(".third").delay(300).fadeIn(400)
   
   	$(".thirdclass").animate({marginTop:"+=14px", marginLeft:"+=300px"})
   	$(".fourthclass").animate({marginTop:"+=14px", marginLeft:"+=300px"})
   	$("#m2maxriserpic2").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").hide()		
   	})
   //modelManager.addModel("205");
   	if(($("#chooselanguage").hasClass("newby"))&&(!$("#bothchairs").hasClass("chosen"))){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	 modelManager.addModel("205");
   }
</script>
<script>
   function m2maxriser3(x){
   
   	$("#helpbubblebackground").show()
	$("#m2maxriser3").addClass("chosen");
    $("#m2maxriserpic3").addClass("chosen")
   if(($("#singlebonepic2").hasClass("chosen")) && ($("#m2maxriserpic3").hasClass("chosen"))){
   		$("#m2maxriser3movieicon").fadeIn(300)
   	}
	else if($("#m2riserpic2").hasClass("chosen") || $("#m2xriserpic2").hasClass("chosen") || $("#m2maxriserpic2").hasClass("chosen"))
   {
   $("#m2maxriser2tom2xrisermovieicon").fadeIn(300)
   }
   else if($("#clickriserpic2").hasClass("chosen"))
   {
   $("#m2maxriser3toclickrisermovieicon").fadeIn(300)
   }
   else if($("#dualarm2pic").hasClass("chosen"))
   {
   $("#m2maxrisertodualarmmovieicon").fadeIn(300)
   }
   
   	$("#m2maxriserinputpar3").show()
	//$(".fourth").delay(200).fadeIn(800)
   	$(".fourthclass").animate({marginTop:"+=14px", marginLeft:"+=300px"})
   	$("#m2maxriserpic3").addClass("chosen").fadeIn(2000, function(){
   		$("#helpbubblebackground").fadeOut(0, done())		
   	})
   modelManager.addModel("205");
   }
   
   
   function bonetodualarm1video()
   {
    if($("#dualarm1pic").hasClass("chosen")){
   		$("#bonetodualarm1").fadeIn(500)
   		$("#backdrop").show()
   	}
   }
   
   function dualarm1toinchrisersvideo()
   {
	if($("#oneinchriser1").hasClass("chosen")){
   		$("#dualarm1toinchrisers").fadeIn(500)
   		$("#backdrop").show()
   	} 
	else if($("#threeinchriser1").hasClass("chosen")){
   		$("#dualarm1toinchrisers").fadeIn(500)
   		$("#backdrop").show()
   	}
   }
   
   function boneto90degreeadapter1video()
   {
    if($("#90degreeadapter1pic").hasClass("chosen")){
   		$("#boneto90degreeadapter1").fadeIn(500)
   		$("#backdrop").show()
   	}
   }
   
   function bonetoinvertedheadpost1video()
   {
   if($("#invertedheadpost1pic").hasClass("chosen")){
   		$("#bonetoinvertedheadpost").fadeIn(500)
   		$("#backdrop").show()
   	}   
   }
   
   
   function bonetowedgereceiverdirectmount1video()
   {
   if($("#wedgereceiverdirectmount1pic").hasClass("chosen")){
   		$("#bonetowedgereceiverdirectmount").fadeIn(500)
   		$("#backdrop").show()
   	} 
   }
   
   function bonetohead1video()
   {
    if(($("#head1").hasClass("chosen"))){
   		$("#bonetohead").fadeIn(500)
   		$("#backdrop").show()
   	}
   }
   
   function invertedheadpost1tohead2video()
   {
   if(($("#invertedheadpost1pic").hasClass("chosen"))){
   		$("#invertedheadposttohead2").fadeIn(500)
   		$("#backdrop").show()
   	}  
   }
   
   function singlebonetohead2video()
   {
   if(($("#head2").hasClass("chosen")) || $("#singlebonepic").hasClass("chosen")){
   		$("#singlebonetohead2").fadeIn(500)
   		$("#backdrop").show()
   	}  
   }
   
   
</script>
<script>
   function bonevideo(){
   	if(($("").hasClass("chosen"))||($("#singlebonepic").hasClass("chosen"))){
   		$("#bonetobone").fadeIn(500)
   		$("#backdrop").show()
   	}
   	else if(($("").hasClass("chosen"))||($("#clickriserpic").hasClass("chosen"))){
   		$("#bonetoclickriser").fadeIn(500)
   		$("#backdrop").show()
   	}
   	else if(($("").hasClass("chosen"))||($("#m2maxriserpic").hasClass("chosen"))){
   		$("#bonetom2riser").fadeIn(500)
   		$("#backdrop").show()
   	}
   	else if(($("").hasClass("chosen"))||($("#m2xriserpic").hasClass("chosen"))){
   		$("#bonetom2riser").fadeIn(500)
   		$("#backdrop").show()
   	}
   	else if(($("").hasClass("chosen"))||($("#m2riserpic").hasClass("chosen"))){
   		$("#bonetom2riser").fadeIn(500)
   		$("#backdrop").show()
   	}
   	else if(($("").hasClass("chosen"))||($("#liftshaftpic").hasClass("chosen"))){
   		$("#bonetom2bone").fadeIn(500)
   		$("#backdrop").show()
   	}
   else if(($("").hasClass("chosen"))||($("#threeinchriser1").hasClass("chosen"))){
   		$("#bonetooneinchriser").fadeIn(500)
   		$("#backdrop").show()
   	}
   }
   
</script>
<script>
   function singlebonevideo(){
   	if(($("#singlebonepic2").hasClass("chosen"))||($("#singlebonepic3").hasClass("chosen"))){
      		$("#singlebonetosinglebone").fadeIn(500)
      		$("#backdrop").show()
      	}
      	else if(($("#clickriserpic2").hasClass("chosen"))||($("#clickriserpic3").hasClass("chosen"))){
      		$("#singlebonetoclickriser").fadeIn(500)
      		$("#backdrop").show()
      	}
   	else if(($("#clickriserpic").hasClass("chosen")) || ($("#singlebonepic2").hasClass("chosen"))){
      		$("#singlebonetoclickriser").fadeIn(500)
      		$("#backdrop").show()
      	}
      	else if(($("#m2maxriserpic2").hasClass("chosen"))||($("#m2maxriserpic3").hasClass("chosen"))){
      		$("#m2riserstosinglebone").fadeIn(500)
      		$("#backdrop").show()
      	}
      	else if(($("#m2xriserpic2").hasClass("chosen"))||($("#m2xriserpic3").hasClass("chosen"))){
      		$("#m2riserstosinglebone").fadeIn(500)
      		$("#backdrop").show()
      	}
      	else if(($("#m2riserpic2").hasClass("chosen"))||($("#m2riserpic3").hasClass("chosen"))){
      		$("#m2riserstosinglebone").fadeIn(500)
      		$("#backdrop").show()
      	}
      	else if(($("#liftshaftpic2").hasClass("chosen"))||($("#liftshaftpic3").hasClass("chosen"))){
      		$("#singlebonetoliftshaft").fadeIn(500)
      		$("#backdrop").show()
      	}
   	else if(($("#dualarm2pic").hasClass("chosen"))||($("#dualarm3pic").hasClass("chosen"))){
      		$("#dualarm1tosinglebone").fadeIn(500)
      		$("#backdrop").show()
      	}
   	else if(($("#head2").hasClass("chosen")) || ($("#head3").hasClass("chosen"))){
      		$("#bonetohead2").fadeIn(500)
      		$("#backdrop").show()
      	}
   }
   
</script>
<script>
   function clickriservideo(){
   	if(($("#singlebonepic2").hasClass("chosen")) || $("#singlebonepic").hasClass("chosen")){
   		$("#clickrisertobone").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
   	else if(($("#m2maxriserpic").hasClass("chosen"))||($("#m2maxriserpic2").hasClass("chosen"))){
   		$("#clickrisertom2riser").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
   	else if(($("#m2xriserpic").hasClass("chosen"))||($("#m2xriserpic2").hasClass("chosen"))){
   		$("#clickrisertom2riser").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
   	else if(($("#m2riserpic").hasClass("chosen"))||($("#m2riserpic2").hasClass("chosen"))){
   		$("#clickrisertom2riser").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
   else if(($("#head2").hasClass("chosen"))){
   		$("#clickrisertohead2").fadeIn(500)
   		$("#backdrop").show()
   	}
   else if(($("#head3").hasClass("chosen"))){
   		$("#clickrisertohead2").fadeIn(500)
   		$("#backdrop").show()
   	}
   }
   
   function clickrisertosinglebonevideo()
   {
   if(($("#clickriserpic").hasClass("chosen")) || ($("#singlebonepic2").hasClass("chosen"))){
   		$("#singlebonetoclickriser").fadeIn(500)
   		$("#backdrop").show()
   	} 
   else if(($("#clickriserpic2").hasClass("chosen")) || ($("#singlebonepic3").hasClass("chosen"))){
   		$("#singlebonetoclickriser").fadeIn(500)
   		$("#backdrop").show()
   	} 
   }
   
   function liftshaft2tosinglebonevideo()
   {
    if(($("#liftshaftpic2").hasClass("chosen"))){
   		$("#singlebonetoliftshaft").fadeIn(500)
   		$("#backdrop").show()
   	} 
   }
   
   function m2riserstosinglebonevideo()
   {
   if(($("#singlebonepic2").hasClass("chosen")) || ($("#m2riserpic").hasClass("chosen"))){
   		$("#m2riserstosinglebone").fadeIn(500)
   		$("#backdrop").show()
   	} 
   else if(($("#singlebonepic2").hasClass("chosen")) || ($("#m2xriserpic").hasClass("chosen"))){
   		$("#m2riserstosinglebone").fadeIn(500)
   		$("#backdrop").show()
   	} 
   else if(($("#singlebonepic2").hasClass("chosen")) || ($("#m2maxriserpic").hasClass("chosen"))){
   		$("#m2riserstosinglebone").fadeIn(500)
   		$("#backdrop").show()
   	} 
   }
   
   function liftshafttosinglebonevideo()
   {
   if(($("#liftshaftpic").hasClass("chosen")) || ($("#singlebonepic2").hasClass("chosen"))){
   		$("#singlebonetoliftshaft").fadeIn(500)
   		$("#backdrop").show()
   	}
   else if(($("#liftshaftpic3").hasClass("chosen")) || ($("#singlebonepic2").hasClass("chosen")))
   {
   $("#singlebonetoliftshaft").fadeIn(500)
   		$("#backdrop").show()
   }
   }
   
   function singlebone3tom2risersvideo()
   {
    if(($("#m2riserpic2").hasClass("chosen"))){
   		$("#m2riserstosinglebone").fadeIn(500)
   		$("#backdrop").show()
   	}
   else if(($("#m2xriserpic2").hasClass("chosen"))){
   		$("#m2riserstosinglebone").fadeIn(500)
   		$("#backdrop").show()
   	}
   
   else if(($("#m2maxriserpic2").hasClass("chosen"))){
   		$("#m2riserstosinglebone").fadeIn(500)
   		$("#backdrop").show()
   	}
   }
   
   function m2risers2tosinglebonevideo()
   {
    if(($("#singlebonepic").hasClass("chosen")) || ($("#m2riserpic").hasClass("chosen"))){
   		$("#singlebonetom2risers").fadeIn(500)
   		$("#backdrop").show()
   	} 
   else if(($("#singlebonepic").hasClass("chosen")) || ($("#m2xriserpic").hasClass("chosen"))){
   		$("#singlebonetom2risers").fadeIn(500)
   		$("#backdrop").show()
   	} 
   else if(($("#singlebonepic").hasClass("chosen")) || ($("#m2maxriserpic").hasClass("chosen"))){
   		$("#singlebonetom2risers").fadeIn(500)
   		$("#backdrop").show()
   	} 
   }
   
   function singlebone3todualarm2video()
   {
   if(($("#dualarm2pic").hasClass("chosen"))){
   		$("#dualarm1tosinglebone").fadeIn(500)
   		$("#backdrop").show()
   	} 
   }
   
   
   function clickrisertodualarm2video()
   {
   if(($("#dualarm2pic").hasClass("chosen"))){
   		$("#dualarm1toclickriser").fadeIn(500)
   		$("#backdrop").show()
   	}   
   }
   
   function m2riserstoclickriser3video()
   {
    if(($("#m2riserpic2").hasClass("chosen"))){
   		$("#clickrisertom2riser").fadeIn(500)
   		$("#backdrop").show()
   	}
   else if(($("#m2xriserpic2").hasClass("chosen"))){
   		$("#clickrisertom2riser").fadeIn(500)
   		$("#backdrop").show()
   	}
   
   else if(($("#m2maxriserpic2").hasClass("chosen"))){
   		$("#clickrisertom2riser").fadeIn(500)
   		$("#backdrop").show()
   	}
   }
</script>
<script>
   function liftshaftvideo(){
   	if(($("#singlebonepic").hasClass("chosen"))||($("#singlebonepic2").hasClass("chosen"))){
   		$("#m2bonetobone").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
   	else if(($("#m2maxriserpic").hasClass("chosen"))||($("#m2maxriserpic2").hasClass("chosen"))){
   		$("#m2bonetom2riser").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
   	else if(($("#m2xriserpic").hasClass("chosen"))||($("#m2xriserpic2").hasClass("chosen"))){
   		$("#m2bonetom2riser").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
   	else if(($("#m2riserpic").hasClass("chosen"))||($("#m2riserpic2").hasClass("chosen"))){
   		$("#m2bonetom2riser").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
   	else{
   		$("#m2bonetobone").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
   }
</script>
<script>
   function m2riservideo(){
   	if(($("#singlebonepic").hasClass("chosen"))||($("#singlebonepic2").hasClass("chosen"))){
   		$("#singlebonetom2risers").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
   	else if(($("#clickriserpic").hasClass("chosen"))||($("#clickriserpic2").hasClass("chosen"))){
   		$("#m2risertoclickriser").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
   	else if(($("#m2maxriserpic").hasClass("chosen"))||($("#m2maxriserpic2").hasClass("chosen"))){
   		$("#m2risertom2riser").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
   	else if(($("#m2xriserpic").hasClass("chosen"))||($("#m2xriserpic2").hasClass("chosen"))){
   		$("#m2risertom2riser").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
   	else if(($("#m2riserpic").hasClass("chosen"))||($("#m2riserpic2").hasClass("chosen"))){
   		$("#m2risertom2riser").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
   else if(($("#m2riserpic3").hasClass("chosen"))||($("#singlebonepic2").hasClass("chosen"))){
   		$("#m2risertom2riser").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
   }
   
   function m2riser2tom2riservideo()
   {
	 if($("#m2riserpic2").hasClass("chosen")){
   		$("#m2risertom2riser").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
	if($("#m2xriserpic2").hasClass("chosen")){
   		$("#m2risertom2riser").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
	if($("#m2maxriserpic2").hasClass("chosen")){
   		$("#m2risertom2riser").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	} 	
   }
   
   function m2risertom2riser2video()
   {
	 if($("#m2riserpic").hasClass("chosen")){
   		$("#m2risertom2riser").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
	if($("#m2xriserpic").hasClass("chosen")){
   		$("#m2risertom2riser").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}
	if($("#m2maxriserpic").hasClass("chosen")){
   		$("#m2risertom2riser").fadeIn(500)
   		$("#backdrop").fadeIn(500)
   	}   
   }
</script>
<script>
   function done(x){
   	$(".chairoptions").fadeOut(100)
   	$(".first").fadeOut(100)
   	$(".second").fadeOut(100)
   	$(".third").fadeOut(100)
   
   if($("#oneinchriser1").hasClass("chosen") && $("#head1").hasClass("chosen"))
   {
   	$("#head1tooneinchrisermovieicon").addClass("chosen").fadeIn(300)
   }
   else if($("#threeinchriser1").hasClass("chosen") && $("#head1").hasClass("chosen"))
   {
   	$("#head1tothreeinchrisermovieicon").addClass("chosen").fadeIn(300)
   }
   else if(modelManager.modelOrder.length==1)
   {
   	$("#head1movieicon").addClass("chosen").fadeIn(300)
   }
   
   	if($("#head1").hasClass("chosen")){
   		$("#back1").delay(300).fadeIn(300)
   $("#head1inputpar").fadeIn(300)
   }
   	else if($("#head2").hasClass("chosen")){
   		$("#back2").delay(300).fadeIn(300)
   $("#head2inputpar").fadeIn(300)}
   	else if($("#head3").hasClass("chosen")){
   		$("#back3").delay(300).fadeIn(300)
   $("#head3inputpar").fadeIn(300)}
   else if($("#head4").hasClass("chosen")){
   		$("#back4").delay(300).fadeIn(300)
   $("#head4inputpar").fadeIn(300)}
   	else{
   		$("#back3").delay(300).fadeIn(300)}
   	
   	$("#headpic").fadeIn(2000).addClass("chosen")
   $("#firstscrollview").hide()
   $("#secondscrollview").hide()
   $("#thirdscrollview").hide()
   //	$(".fourth").delay(200).fadeIn(300)
   $("#complete").delay(300).fadeIn(200)
    $("#savearm").delay(300).fadeIn(200)
   	$("#showquote").delay(300).fadeIn(300)
   modelManager.addModel("301")
   
   	$("#restart").delay(200).fadeIn(300)
   	//$("#done").fadeOut(100)//
   }
   function lockablewedgereceiver(x){
   	$("#inputframe").fadeOut(300)
   $(".ihidden").hide()
   	$(".wedge").fadeOut(300)
   	$("#back3").fadeOut(300)
   	$("#lockablepic").addClass("chosen").fadeIn(2000)
   	$("#lockableinputpar").show()
   	$("#complete").delay(300).fadeIn(200)
   	$("#back4").delay(300).fadeIn(300)
   	$("#showquote").delay(300).fadeIn(300)
   	if(($("#m2riserpic").hasClass("chosen"))&&($("#liftshaftpic2").hasClass("chosen"))&&(!$("#singlebonepic3").hasClass("chosen"))){
   		$("#chosenm2").delay(300).fadeIn(200, clearselected).show(0, m2quote).show(0, lockablequote)
   	}
   
   	else if(($("#m2xriserpic").hasClass("chosen"))&&($("#liftshaftpic2").hasClass("chosen"))&&(!$("#singlebonepic3").hasClass("chosen"))){
   		$("#chosenm2x").delay(300).fadeIn(200, clearselected).show(0, m2xquote).show(0, lockablequote)
   	}
   	else if(($("#m2maxriserpic").hasClass("chosen"))&&($("#liftshaftpic2").hasClass("chosen"))&&(!$("#singlebonepic3").hasClass("chosen"))){
   		$("#chosenm2max").delay(300).fadeIn(200, clearselected).show(0, m2maxquote).show(0, lockablequote)
   	}
   	else if(($("#singlebonepic").hasClass("chosen"))&&($("#singlebonepic2").hasClass("chosen"))&&(!$("#singlebonepic3").hasClass("chosen"))&&(!$("#clickriserpic3").hasClass("chosen"))&&(!$("#m2riserpic3").hasClass("chosen"))&&(!$("#m2xriserpic3").hasClass("chosen"))&&(!$("#m2maxriserpic3").hasClass("chosen"))&&(!$("#liftshaftpic3").hasClass("chosen"))){
   		$("#chosenarticulating").delay(300).fadeIn(200, clearselected).show(0, articulatingquote).show(0, lockablequote)
   	}
   	else if(($("#clickriserpic").hasClass("chosen"))&&($("#singlebonepic2").hasClass("chosen"))&&($("#singlebonepic3").hasClass("chosen"))){
   		$("#chosenarticulatingriser").delay(300).fadeIn(200, clearselected).show(0, articulatingarmriserquote).show(0, lockablequote)
   	}
   	else if(($("#clickriserpic").hasClass("chosen"))&&(!$("#singlebonepic2").hasClass("chosen"))&&(!$("#clickriserpic2").hasClass("chosen"))&&(!$("#m2riserpic2").hasClass("chosen"))&&(!$("#m2xriserpic2").hasClass("chosen"))&&(!$("#m2maxriserpic2").hasClass("chosen"))&&(!$("#liftshaftpic2").hasClass("chosen"))){
   		$("#chosenheadtailriser").delay(300).fadeIn(200, clearselected).show(0, headtailriserquote).show(0, lockablequote)
   	}
   	else if((!$("#singlebonepic").hasClass("chosen"))&&(!$("#clickriserpic").hasClass("chosen"))&&(!$("#m2riserpic").hasClass("chosen"))&&(!$("#m2xriserpic").hasClass("chosen"))&&(!$("#m2maxriserpic").hasClass("chosen"))&&(!$("#liftshaftpic").hasClass("chosen"))){
   		$("#chosenheadtail").delay(300).fadeIn(200, clearselected).show(0, headtailquote).show(0, lockablequote)
   	}
   	else{
   		$(".inptlist").appendTo("#inputparend")
   		$(".inptlist").css("text-align","center")
   		$("#inputparend").delay(200).fadeIn(300)
   
   	}
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble5").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
   
   modelManager.addModel("302")   
   }
   
   function rotarywedgereceiver(x){
   	$("#inputframe").fadeOut(300)
   $(".ihidden").hide()
   	$(".wedge").fadeOut(300)
   	$("#rotarypic").addClass("chosen").fadeIn(2000)
   	$("#rotaryinputpar").show()
   	$("#complete").delay(300).fadeIn(200)
   	$("#showquote").delay(300).fadeIn(300)
   	if(($("#m2riserpic").hasClass("chosen"))&&($("#liftshaftpic2").hasClass("chosen"))&&(!$("#singlebonepic3").hasClass("chosen"))){
   		$("#chosenm2").delay(300).fadeIn(200, clearselected).show(0, m2quote).show(0, rotaryquote)
   	}
   	else if(($("#m2xriserpic").hasClass("chosen"))&&($("#liftshaftpic2").hasClass("chosen"))&&(!$("#singlebonepic3").hasClass("chosen"))){
   		$("#chosenm2x").delay(300).fadeIn(200, clearselected).show(0, m2xquote).show(0, rotaryquote)
   	}
   	else if(($("#m2maxriserpic").hasClass("chosen"))&&($("#liftshaftpic2").hasClass("chosen"))&&(!$("#singlebonepic3").hasClass("chosen"))){
   		$("#chosenm2max").delay(300).fadeIn(200, clearselected).show(0, m2maxquote).show(0, rotaryquote)
   	}
   	else if(($("#singlebonepic").hasClass("chosen"))&&($("#singlebonepic2").hasClass("chosen"))&&(!$("#singlebonepic3").hasClass("chosen"))&&(!$("#clickriserpic3").hasClass("chosen"))&&(!$("#m2riserpic3").hasClass("chosen"))&&(!$("#m2xriserpic3").hasClass("chosen"))&&(!$("#m2maxriserpic3").hasClass("chosen"))&&(!$("#liftshaftpic3").hasClass("chosen"))){
   		$("#chosenarticulating").delay(300).fadeIn(200, clearselected).show(0, articulatingquote).show(0, rotaryquote)
   	}
   	else if(($("#clickriserpic").hasClass("chosen"))&&($("#singlebonepic2").hasClass("chosen"))&&($("#singlebonepic3").hasClass("chosen"))){
   		$("#chosenarticulatingriser").delay(300).fadeIn(200, clearselected).show(0, articulatingarmriserquote).show(0, rotaryquote)
   	}
   	else if(($("#clickriserpic").hasClass("chosen"))&&(!$("#singlebonepic2").hasClass("chosen"))&&(!$("#clickriserpic2").hasClass("chosen"))&&(!$("#m2riserpic2").hasClass("chosen"))&&(!$("#m2xriserpic2").hasClass("chosen"))&&(!$("#m2maxriserpic2").hasClass("chosen"))&&(!$("#liftshaftpic2").hasClass("chosen"))){
   		$("#chosenheadtailriser").delay(300).fadeIn(200, clearselected).show(0, headtailriserquote).show(0, rotaryquote)
   	}
   	else if((!$("#singlebonepic").hasClass("chosen"))&&(!$("#clickriserpic").hasClass("chosen"))&&(!$("#m2riserpic").hasClass("chosen"))&&(!$("#m2xriserpic").hasClass("chosen"))&&(!$("#m2maxriserpic").hasClass("chosen"))&&(!$("#liftshaftpic").hasClass("chosen"))){
   		$("#chosenheadtail").delay(300).fadeIn(200, clearselected).show(0, headtailquote).show(0, rotaryquote)
   	}
   	else{
   		$(".inptlist").appendTo("#inputparend")
   		$(".inptlist").css("text-align","center")
   		$("#inputparend").delay(200).fadeIn(300)
   
   	}
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble5").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
   }
   
</script>
<script>
   function rstrt(x){
	   M2count=0;
   	$(".chairoptions").fadeOut(300)
   	$(".lose").removeClass("lose")
   $(".ihidden").hide()
    $(".ihidden1").hide()
	 $(".ihidden2").hide()
	  $(".ihidden3").hide()
	  $(".ihidden4").hide()
   $("#riserdiv").show();
   $("#oneinch1riserdiv").css({"position":"absolute", "top":"600px", "display":"none"})
   $("#oneinchriser1inputpar").css({"position":"absolute", "top":"600px" ,"display":"none"})
   //$("#oneinch1riserdiv").show()
   //$("#threeinch1riserdiv").show()
   $("#firstscrollview").hide()
   $("#secondscrollview").hide()
   $("#thirdscrollview").hide()
   	
   	$(".remove").removeClass("clicked").css("background-color","transparent")
   	$(".forwardback").fadeOut(500)
	$("#singlebone1").fadeOut(500).removeClass("chosen")
	$("#singlebone2").fadeOut(500).removeClass("chosen")
	$("#singlebone3").fadeOut(500).removeClass("chosen")
   	$("#singlebonepic").fadeOut(500).removeClass("chosen")
   	$("#singlebonepic2").fadeOut(500).removeClass("chosen")
   	$("#singlebonepic3").fadeOut(500).removeClass("chosen")
   	$("#clickriserpic").fadeOut(500).removeClass("chosen")
   	$("#clickriserpic2").fadeOut(500).removeClass("chosen")
   	$("#clickriserpic3").fadeOut(500).removeClass("chosen")
	$("#clickriser1").fadeOut(500).removeClass("chosen")
	$("#clickriser2").fadeOut(500).removeClass("chosen")
	$("#clickriser3").fadeOut(500).removeClass("chosen")
   	$("#liftshaftpic").fadeOut(500).removeClass("chosen")
   	$("#liftshaftpic2").fadeOut(500).removeClass("chosen")
   	$("#liftshaftpic3").fadeOut(500).removeClass("chosen")
	$("#liftshaft1").fadeOut(500).removeClass("chosen")
	$("#liftshaft2").fadeOut(500).removeClass("chosen")
	$("#liftshaft3").fadeOut(500).removeClass("chosen")
   $("#dualarm1pic").fadeOut(500).removeClass("chosen")
   	$("#dualarm2pic").fadeOut(500).removeClass("chosen")
   	$("#dualarm3pic").fadeOut(500).removeClass("chosen")
	$("#dualarm1").fadeOut(500).removeClass("chosen")
	$("#dualarm2").fadeOut(500).removeClass("chosen")
	$("#dualarm3").fadeOut(500).removeClass("chosen")
   $("#invertedheadpost1pic").fadeOut(500).removeClass("chosen")
   	$("#invertedheadpost2pic").fadeOut(500).removeClass("chosen")
   	$("#invertedheadpost3pic").fadeOut(500).removeClass("chosen")
	$("#invertedheadpost1").fadeOut(500).removeClass("chosen")
	$("#invertedheadpost2").fadeOut(500).removeClass("chosen")
	$("#invertedheadpost3").fadeOut(500).removeClass("chosen")
   $("#wedgereceiverdirectmount1pic").fadeOut(500).removeClass("chosen")
   	$("#wedgereceiverdirectmount2pic").fadeOut(500).removeClass("chosen")
   	$("#wedgereceiverdirectmount3pic").fadeOut(500).removeClass("chosen")
	$("#wedgereceiverdirectmount4pic").fadeOut(500).removeClass("chosen")
	$("#wedgereceiverdirectmount1").fadeOut(500).removeClass("chosen")
	$("#wedgereceiverdirectmount2").fadeOut(500).removeClass("chosen")
	$("#wedgereceiverdirectmount3").fadeOut(500).removeClass("chosen")
	$("#wedgereceiverdirectmount4").fadeOut(500).removeClass("chosen")
   $("#90degreeadapter1pic").fadeOut(500).removeClass("chosen")
   	$("#90degreeadapter2pic").fadeOut(500).removeClass("chosen")
   	$("#90degreeadapter3pic").fadeOut(500).removeClass("chosen")
	$("#90degreeadapter1").fadeOut(500).removeClass("chosen")
	$("#90degreeadapter2").fadeOut(500).removeClass("chosen")
	$("#90degreeadapter3").fadeOut(500).removeClass("chosen")
	$("#m2riser1").fadeOut(500).removeClass("chosen")
	$("#m2riser2").fadeOut(500).removeClass("chosen")
	$("#m2riser3").fadeOut(500).removeClass("chosen")
	$("#m2riserpic").fadeOut(500).removeClass("chosen")
   	$("#m2riserpic2").fadeOut(500).removeClass("chosen")
   	$("#m2riserpic3").fadeOut(500).removeClass("chosen")
   	$("#m2xriserpic").fadeOut(500).removeClass("chosen")
   	$("#m2xriserpic2").fadeOut(500).removeClass("chosen")
   	$("#m2xriserpic3").fadeOut(500).removeClass("chosen")
	$("#m2xriser1").fadeOut(500).removeClass("chosen")
	$("#m2xriser2").fadeOut(500).removeClass("chosen")
	$("#m2xriser3").fadeOut(500).removeClass("chosen")
   	$("#m2maxriserpic").fadeOut(500).removeClass("chosen")
   	$("#m2maxriserpic2").fadeOut(500).removeClass("chosen")
   	$("#m2maxriserpic3").fadeOut(500).removeClass("chosen")
	$("#m2maxriser1").fadeOut(500).removeClass("chosen")
	$("#m2maxriser2").fadeOut(500).removeClass("chosen")
	$("#m2maxriser3").fadeOut(500).removeClass("chosen")
   	$("#doublepostpic").fadeOut(500).removeClass("chosen")
   	$("#doublepostpic2").fadeOut(500).removeClass("chosen")
   	$("#lockablepic").fadeOut(500).removeClass("chosen")
   	$("#rotarypic").fadeOut(500).removeClass("chosen")
	$("#oneinchriser1").fadeOut(500).removeClass("chosen");
	$("#threeinchriser1").fadeOut(500).removeClass("chosen");
	$("#oneinchriser2").fadeOut(500).removeClass("chosen");
	$("#threeinchriser2").fadeOut(500).removeClass("chosen");
	$("#oneinchriser3").fadeOut(500).removeClass("chosen");
	$("#threeinchriser3").fadeOut(500).removeClass("chosen");
	$("#oneinchriserpic").fadeOut(500).removeClass("chosen");
	$("#threeinchriserpic").fadeOut(500).removeClass("chosen");
	$("#oneinchriser2pic").fadeOut(500).removeClass("chosen");
	$("#threeinchriser2pic").fadeOut(500).removeClass("chosen");
	$("#oneinchriser3pic").fadeOut(500).removeClass("chosen");
	$("#threeinchriser3pic").fadeOut(500).removeClass("chosen");
	
   $("#head1").fadeOut(500).removeClass("chosen")
   $("#head2").fadeOut(500).removeClass("chosen")
   $("#head3").fadeOut(500).removeClass("chosen")
    $("#head4").fadeOut(500).removeClass("chosen")
   	$("#done").fadeOut(500)
   	$("#restart").fadeOut(500, clearselected).fadeOut(0, function(){
   		$("#tr1c").val("1")
   		$("#tr1b").val("Lift and Lock Tail")
   		$("#tr1a").fadeIn(0, product1)
   	})
   	$("#select").fadeOut(500)
   	$("#headpic").fadeOut(500,function (){
   			$(".secondclass").css({"margin-top":"0px", "margin-left":"-380px"})
   			$(".thirdclass").css({"margin-top":"0px", "margin-left":"-380px"})
   			$(".fourthclass").css({"margin-top":"0px", "margin-left":"-380px"})
   	})
   	$("#headpic").removeClass("chosen")
   	$("#liftshaft2").addClass("second")
   $("#oneinchriser1").addClass("first")
   $("#threeinchriser1").addClass("first")
   $("#clickriser1").addClass("first")
   $("#liftshaft1").addClass("first")
   $("#singlebone1").addClass("first")
	$("#dualarm1").addClass("first")
	$("#invertedheadpost1").addClass("first")
	$("#ninetydegree1").addClass("first")
	 $("#m2riser1").addClass("first")
	  $("#m2xriser1").addClass("first")
	   $("#m2maxriser1").addClass("first")
	    $("#wedgereceiverdirectmount1").addClass("first")
   	$("#clickriser2").addClass("second")	
   	$("#m2xriser2").addClass("second")
   	$("#m2maxriser2").addClass("second")
   	$("#m2riser2").addClass("second")
   	$("#liftshaft3").delay(300).addClass("third")
   	$("#clickriser3").delay(300).addClass("third")
   	$("#m2riser3").addClass("third")
   	$("#m2xriser3").addClass("third")
   	$("#m2maxriser3").addClass("third")
   
   
   	$(".inptlist").hide()
   
   	$("#inputparend").delay(200).hide()
   
   	$(".inptlist").appendTo("#input")
   	$(".inptlist").css("text-align","left")
   
   	$("#inputframe").fadeIn(200)
   	$("#bothchairs").fadeIn(800)
   	$(".beginning").delay(200).fadeIn(800)
   
   modelManager.removeAll();   
   
   }
</script>
<script>
   function english(){
   	$("#languagebackdrop").hide()
   	$("#chooselanguage").hide()
   $("#firstscrollview").hide()
   $("#secondscrollview").hide()
   $("#thirdscrollview").hide()
   	$("#chooselanguage").addClass("newby")
   	$("#helpbubble2").delay(200).fadeIn(300)
   	$("#helpbubblebackground").delay(300).fadeIn(300)
   }
   function french(){
   	$("#languagebackdrop").hide()
   	$("#chooselanguage").hide()
   $("#firstscrollview").hide()
   $("#secondscrollview").hide()
   $("#thirdscrollview").hide()
   	$("#chooselanguage").removeClass("newby")
   }
   function ok(){
   	$(".helpbubble").fadeOut(300)
   	$("#helpbubblebackground").fadeOut(300)
   }
</script>
<script>
   function inputshow(x){
   	$("#input").css({"margin-left":"0px"})
   }
</script>
<script>
   function inputhide(x){
   	$("#input").css({"margin-left":"-276px"})
   }
</script>
<script>
   function backfirst(x){
   	$(".chairoptions").fadeOut(100)
   $(".ihidden1").hide()
   	$(".second").fadeOut(100)
   	$(".one").fadeOut(100).removeClass("chosen")
	$("#oneinchriser1inputpar").hide()
	$("#threeinchriser1inputpar").hide()
	//$("#riserdiv").css({"display:none;"})
   	$("#singleboneinputpar").hide()
   	$("#clickriserinputpar").hide()
   	$("#liftshaftinputpar").hide()
   	$("#m2riserinputpar").hide()
	$("#head1inputpar").hide()
   $("#dualarm1inputpar").hide()
   $("#90degreeadapter1inputpar").hide()
   $("#wedgereceiverdirectmount1inputpar").hide()
   $("#invertedheadpost1inputpar").hide()
   	$("#m2xriserinputpar").hide()
   	$("#m2maxriserinputpar").hide()
   	$("#lockableinputpar").hide()
   	$("#rotaryinputpar").hide()
   	$("#tr1c").val("1")
   	$("#tr1b").val("Lift and Lock Tail")
   	$("#tr2c").val("")
   	$("#tr2b").val("")
   	$("#tr5c").val("0")
   	$("#tr5b").val("")
   	$("#tr6c").val("0")
   	$("#tr6b").val("")
   	$("#headpic").fadeOut(100, function(){
   			$(".secondclass").css({"margin-top":"0px", "margin-left":"-380px"})
   			$(".thirdclass").css({"margin-top":"0px", "margin-left":"-380px"})
   			$(".fourthclass").css({"margin-top":"0px", "margin-left":"-380px"})
   	})
   	$("#lockablepic").fadeOut(100).removeClass("chosen")
   	$("#rotarypic").fadeOut(100).removeClass("chosen")
   	$("#headpic").removeClass("chosen")
   	$("#head1").removeClass("chosen")
   	$("#liftshaft2").addClass("second")
   	$("#clickriser2").addClass("second")	
   	$("#m2xriser2").addClass("second")
   	$("#m2maxriser2").addClass("second")
   	$("#m2riser2").addClass("second")
	/*$("#dualarm2").addClass("second")
	$("#wedgereceiverdirectmount2").addClass("second")
	$("#invertedheadpost2").addClass("second")
	$("#90degreeadapter2").addClass("second")*/
   	$(".inptlist").appendTo("#input")
   	$(".inptlist").css("text-align","left")
   	$("#inputparend").delay(200).hide()
   	$("#inputframe").delay(300).fadeIn(200)
   	$(".first").delay(300).fadeIn(400)
   $("#firstscrollview").delay(300).fadeIn(400)
   $("#secondscrollview").hide();
   $("#thirdscrollview").hide();
   
   if(M2count>0)
	{
		M2count--;
	}
	
   modelManager.removePrevious();
   
   }
</script>
<script>
   function backsecond(x){
   	$(".chairoptions").fadeOut(100)
   $(".ihidden2").hide()
   	$(".third").fadeOut(100)
   	$(".two").fadeOut(100)
   	$("#doublepostpic").fadeOut(100)
   	$("#head2").removeClass("chosen")
   	$("#singleboneinputpar2").hide()
   	$("#clickriserinputpar2").hide()
   	$("#liftshaftinputpar2").hide()
   $("#dualarm2inputpar").hide()
   $("#90degreeadapter2inputpar").hide()
   $("#wedgereceiverdirectmount2inputpar").hide()
   $("#invertedheadpost2inputpar").hide()
   	$("#m2riserinputpar2").hide()
   	$("#m2xriserinputpar2").hide()
   	$("#m2maxriserinputpar2").hide()
	$("#head2inputpar").hide()
   	$("#lockableinputpar").hide()
   	$("#rotaryinputpar").hide()
   	$("#tr1c").val("1")
   	$("#tr1b").val("Lift and Lock Tail")
   	$("#tr3c").val("0")
   	$("#tr3b").val("")
   	$("#tr5c").val("0")
   	$("#tr5b").val("")
   	$("#tr6c").val("0")
   	$("#tr6b").val("")
   
   if(M2count>0)
	{
		M2count--;
	}
	
   	if($("#singlebonepic2").hasClass("chosen")){
   		$(".thirdclass").animate({marginTop:"+=25.5px", marginLeft:"-=159px"})
   		$(".fourthclass").animate({marginTop:"+=25.5px", marginLeft:"-=159px"})	
   		if(($("#m2maxriserpic").hasClass("chosen"))||($("#m2xriserpic").hasClass("chosen"))||($("#m2riserpic").hasClass("chosen"))){
   				$(".secondclass").animate({marginTop:"+=28px"})
   				$(".thirdclass").animate({marginTop:"+=28px"})
   				$(".fourthclass").animate({marginTop:"+=28px"})
   		}
   		$("#singlebonepic2").removeClass("chosen")
   	}
   	else if($("#liftshaftpic2").hasClass("chosen")){
   		$(".thirdclass").animate({marginTop:"+=141.5px", marginLeft:"+=113px"})
   		$(".fourthclass").animate({marginTop:"+=141.5px", marginLeft:"+=113px"})
   		$("#liftshaftpic2").removeClass("chosen")	
   	}
   	else if($("#clickriserpic2").hasClass("chosen")){
   		$(".thirdclass").animate({marginTop:"+=144.25px", marginLeft:"-=174px"})
   		$(".fourthclass").animate({marginTop:"+=144.25px", marginLeft:"-=174px"})
   		$("#clickriserpic2").removeClass("chosen")
   	}
   	else if($("#m2maxriserpic2").hasClass("chosen")){
   		$(".thirdclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})
   		$(".fourthclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})
   		$("#m2maxxriserpic2").removeClass("chosen")	
   	}
   	else if($("#m2xriserpic2").hasClass("chosen")){
   		$(".thirdclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})
   		$(".fourthclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})
   		$("#m2xriserpic2").removeClass("chosen")	
   	}
   	else if($("#m2riserpic2").hasClass("chosen")){
   		$(".thirdclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})
   		$(".fourthclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})
   		$("#m2riserpic2").removeClass("chosen")	
   	}	
	else if($("#dualarm2pic").hasClass("chosen")){
   		$(".thirdclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})
   		$(".fourthclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})
   		$("#dualarm2pic").removeClass("chosen")	
   	}
	else if($("#invertedheadpost2pic").hasClass("chosen")){
   		$(".thirdclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})
   		$(".fourthclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})
   		$("#invertedheadpost2pic").removeClass("chosen")	
   	}
	else if($("#wedgereceiverdirectmount2pic").hasClass("chosen")){
   		$(".thirdclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})
   		$(".fourthclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})
   		$("#wedgereceiverdirectmount2pic").removeClass("chosen")	
   	}	
	else if($("#90degreeadapter2pic").hasClass("chosen")){
   		$(".thirdclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})
   		$(".fourthclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})
   		$("#90degreeadapter2pic").removeClass("chosen")	
   	}		
   	$("#headpic").fadeOut(100).removeClass("chosen")
   	$("#lockablepic").fadeOut(100).removeClass("chosen")
   	$("#rotarypic").fadeOut(100).removeClass("chosen")
	$("#clickriser3").addClass("third");
   	$(".inptlist").appendTo("#input")
   	$(".inptlist").css("text-align","left")
   	$("#inputparend").delay(200).hide()
   	$("#inputframe").delay(300).fadeIn(200)
   	$(".second").delay(200).fadeIn(500)
   	$("#liftshaft3").addClass("third")
   $("#secondscrollview").delay(300).fadeIn(400)
   $("#firstscrollview").hide();
   $("#thirdscrollview").hide();
   	$("#restart").delay(200).fadeIn(300)
   
   modelManager.removePrevious();
   }
</script>
<script>
   function backthird(x){
   	$(".chairoptions").fadeOut(100)
   $(".ihidden3").hide()
   
   	$("#singleboneinputpar3").hide()
   	$("#clickriserinputpar3").hide()
   	$("#liftshaftinputpar3").hide()
   	$("#m2riserinputpar3").hide()
   	$("#m2xriserinputpar3").hide()
   	$("#m2maxriserinputpar3").hide()
	$("#head3inputpar").hide()
   $("#dualarm3inputpar").hide()
   $("#90degreeadapter3inputpar").hide()
   $("#wedgereceiverdirectmount3inputpar").hide()
   $("#invertedheadpost3inputpar").hide()
   	$("#doublepostpic2").fadeOut(100)
   	$("#head3").removeClass("chosen")
   	$("#headpic").fadeOut(100).removeClass("chosen")
   	$(".fourth").fadeOut(100)
   	$(".three").fadeOut(100, function(){
   	
	if(M2count>0)
	{
		M2count--;
	}
   	
   	if($("#singlebonepic3").hasClass("chosen")){
   
   		$(".fourthclass").animate({marginTop:"+=25.5px", marginLeft:"-=159px"})	
   		
   		if(($("#m2maxriserpic2").hasClass("chosen"))||($("#m2xriserpic2").hasClass("chosen"))||($("#m2riserpic2").hasClass("chosen"))){
   				$(".thirdclass").animate({marginTop:"+=28px"})
   				$(".fourthclass").animate({marginTop:"+=28px"})
   		}
   		$("#singlebonepic3").removeClass("chosen")
   	}
   	else if($("#liftshaftpic3").hasClass("chosen")){
   
   		$(".fourthclass").animate({marginTop:"+=141.5px", marginLeft:"+=113px"})	
   		$("#liftshaftpic3").removeClass("chosen")
   	}
   	else if($("#clickriserpic3").hasClass("chosen")){
   
   		$(".fourthclass").animate({marginTop:"+=144.25px", marginLeft:"-=174px"})
   		$("#clickriserpic3").removeClass("chosen")
   	}
   	else if($("#m2maxriserpic3").hasClass("chosen")){
   
   		$(".fourthclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})	
   		$("#m2maxxriserpic3").removeClass("chosen")
   	}
   	else if($("#m2xriserpic3").hasClass("chosen")){
   
   		$(".fourthclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})	
   		$("#m2xriserpic3").removeClass("chosen")
   	}
   	else if($("#m2riserpic3").hasClass("chosen")){
   
   		$(".fourthclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})	
   		$("#m2riserpic3").removeClass("chosen")
   	}
	else if($("#dualarm3pic").hasClass("chosen")){
   
   		$(".fourthclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})	
   		$("#dualarm3pic").removeClass("chosen")
   	}
	else if($("#invertedheadpost3pic").hasClass("chosen")){
   
   		$(".fourthclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})	
   		$("#invertedheadpost3pic").removeClass("chosen")
   	}
	else if($("#wedgereceiverdirectmount3pic").hasClass("chosen")){
   
   		$(".fourthclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})	
   		$("#wedgereceiverdirectmount3pic").removeClass("chosen")
   	}
	else if($("#90degreeadapter3pic").hasClass("chosen")){
   
   		$(".fourthclass").animate({marginTop:"-=14px", marginLeft:"-=300px"})	
   		$("#90degreeadapter3pic").removeClass("chosen")
   	}
	})
   	$("#lockablepic").fadeOut(100).removeClass("chosen")
   	$("#rotarypic").fadeOut(100).removeClass("chosen")
   	$("#lockableinputpar").hide()
   	$("#rotaryinputpar").hide()	
   	$("#tr1c").val("1")
   	$("#tr1b").val("Lift and Lock Tail")
   	$("#tr4c").val("0")
   	$("#tr4b").val("")
   	$("#tr5c").val("0")
   	$("#tr5b").val("")
   	$("#tr6c").val("0")
   	$("#tr6b").val("")
   	$(".inptlist").appendTo("#input")
   	$(".inptlist").css("text-align","left")
   	$("#inputparend").delay(200).hide()
   	$("#inputframe").delay(300).fadeIn(200)
	
	modelManager.removePrevious(true);
	
   	$(".third").delay(200).fadeIn(400)	
   $("#thirdscrollview").delay(300).fadeIn(400)
   $("#secondscrollview").hide();
   $("#firstscrollview").hide();
   	$("#restart").delay(200).fadeIn(300)
  
   }
   
   function backforth(x){
   	$(".chairoptions").fadeOut(100)
    $(".ihidden").hide()
    $(".ihidden4").hide()
   	$(".first").fadeOut(100)
   	$(".second").fadeOut(100)
   	$(".third").fadeOut(100)
   	$("#back4").fadeOut(100)
   	$("#lockablepic").fadeOut(100).removeClass("chosen")
   	$("#rotarypic").fadeOut(100).removeClass("chosen")
   	$("#tr1c").val("1")
   	$("#tr1b").val("Lift and Lock Tail")
   	$("#tr6c").val("0")
   	$("#tr6b").val("")
   	$("#lockableinputpar").hide()
	$("#wedgereceiverdirectmount4inputpar").hide()
	$("#head4inputpar").hide()
	$("#lockableinputpar").hide()
   	$("#rotaryinputpar").hide()
   	if($("#head1").hasClass("chosen")){
   		$("#back1").delay(300).fadeIn(300)}
   	else if($("#head2").hasClass("chosen")){
   		$("#back2").delay(300).fadeIn(300)}
   	else if($("#head3").hasClass("chosen")){
	$("#back3").delay(300).fadeIn(300)}
	else if($("#head4").hasClass("chosen")){
	$("#back3").delay(300).fadeIn(300)}
   	else if($("#wedge").hasClass("chosen")){
   		$("#back3").delay(300).fadeIn(300)}
   	
	
	if($("#head4").hasClass("chosen"))
	{
	modelManager.removePrevious();	
	}
	else
	{
		modelManager.removePrevious(true);
	}
   	$(".wedge").delay(200).fadeIn(300)
   	$(".inptlist").appendTo("#input")
   	$(".inptlist").css("text-align","left")
   	$("#inputparend").delay(200).hide()
   	$("#inputframe").delay(300).fadeIn(200)
   $("#wedgescrollview").delay(300).fadeIn(400)
   $("#secondscrollview").hide();
   $("#thirdscrollview").hide();
   $("#firstscrollview").hide();
   	$("#restart").delay(200).fadeIn(300)
   	
   //modelManager.removePrevious();
   //modelManager.removePrevious();
   
   }
</script>
<script>
   function backdrop(){
   	$(".videobox").hide()
   	$("#backdrop").hide()
   	$("#helpbubblebackground").hide()
   
   }
   
   function movieiconhide()
   {
   	$("#movieicon").hide();
   }
   
   function showmovieicon()
   {
   	$('#movieicon').fadeIn(300);
   }
</script>
<meta name="description" content="Create your own custom wheelchair mounting system. Pick from a range of mounting brackets or direct mount sockets and build for what suits you best." />
<script>
   function m2quote(x){
     $("#tr5b").val("M2 Arm")
     $("#tr5c").val("1")
     $("#tr5b").fadeIn(0, product5)
     $("#tr5c").fadeIn(0, qty5)
   }
   function m2xquote(x){
     $("#tr5b").val("M2X Arm")
     $("#tr5c").val("1")
     $("#tr5b").fadeIn(0, product5)
     $("#tr5c").fadeIn(0, qty5)
   }
   function m2maxquote(x){
     $("#tr5b").val("M2 Max Arm")
     $("#tr5c").val("1")
     $("#tr5b").fadeIn(0, product5)
     $("#tr5c").fadeIn(0, qty5)
   }
   function articulatingquote(x){
     $("#tr5b").val("Articulating Arm")
     $("#tr5c").val("1")
     $("#tr5b").fadeIn(0, product5)
     $("#tr5c").fadeIn(0, qty5)
   }
   function articulatingarmriserquote(x){
     $("#tr5b").val("Articulating Arm with Riser")
     $("#tr5c").val("1")
     $("#tr5b").fadeIn(0, product5)
     $("#tr5c").fadeIn(0, qty5)
   }
   function headtailquote(x){
     $("#tr5b").val("Head and Tail Arm")
     $("#tr5c").val("1")
     $("#tr5b").fadeIn(0, product5)
     $("#tr5c").fadeIn(0, qty5)
   }
   function headtailriserquote(x){
     $("#tr5b").val("Head and Tail Arm with Riser")
     $("#tr5c").val("1")
     $("#tr5b").fadeIn(0, product5)
     $("#tr5c").fadeIn(0, qty5)
   }
   function lockablequote(x){
     $("#tr6b").val("Lockable Wedge Receiver")
     $("#tr6c").val("1")
     $("#tr6b").fadeIn(0, product6)
     $("#tr6c").fadeIn(0, qty6)
   }
   function rotaryquote(x){
     $("#tr6b").val("Rotary Wedge Receiver")
     $("#tr6c").val("1")
     $("#tr6b").fadeIn(0, product6)
     $("#tr6c").fadeIn(0, qty6)
   }
   
   function singlebone1quote(x){
     $("#tr2b").val("Single Bone")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   function liftshaft1quote(x){
     $("#tr2b").val("Lift Shaft")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   function clickriser1quote(x){
     $("#tr2b").val("Click Riser")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   function m2riser1quote(x){
     $("#tr2b").val("M2 Riser")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   function m2xriser1quote(x){
     $("#tr2b").val("M2X Riser")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   function m2maxriser1quote(x){
     $("#tr2b").val("M2 Max Riser")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   function head1quote(x){
     $("#tr2b").val("Lift and Lock Head")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   
   function singlebone2quote(x){
     $("#tr3b").val("Single Bone")
     $("#tr3c").val("1")
     $("#tr3b").fadeIn(0, product3)
     $("#tr3c").fadeIn(0, qty3)
   }
   function liftshaft2quote(x){
     $("#tr3b").val("Lift Shaft")
     $("#tr3c").val("1")
     $("#tr3b").fadeIn(0, product3)
     $("#tr3c").fadeIn(0, qty3)
   }
   function clickriser2quote(x){
     $("#tr3b").val("Click Riser")
     $("#tr3c").val("1")
     $("#tr3b").fadeIn(0, product3)
     $("#tr3c").fadeIn(0, qty3)
   }
   function m2riser2quote(x){
     $("#tr3b").val("M2 Riser")
     $("#tr3c").val("1")
     $("#tr3b").fadeIn(0, product3)
     $("#tr3c").fadeIn(0, qty3)
   }
   function m2xriser2quote(x){
     $("#tr3b").val("M2X Riser")
     $("#tr3c").val("1")
     $("#tr3b").fadeIn(0, product3)
     $("#tr3c").fadeIn(0, qty3)
   }
   function m2maxriser2quote(x){
     $("#tr3b").val("M2 Max Riser")
     $("#tr3c").val("1")
     $("#tr3b").fadeIn(0, product3)
     $("#tr3c").fadeIn(0, qty3)
   }
   function head2quote(x){
     $("#tr3b").val("Lift and Lock Head")
     $("#tr3c").val("1")
     $("#tr3b").fadeIn(0, product3)
     $("#tr3c").fadeIn(0, qty3)
   }
   
   function singlebone3quote(x){
     $("#tr4b").val("Single Bone")
     $("#tr4c").val("1")
     $("#tr4b").fadeIn(0, product4)
     $("#tr4c").fadeIn(0, qty4)
   }
   function liftshaft3quote(x){
     $("#tr4b").val("Lift Shaft")
     $("#tr4c").val("1")
     $("#tr4b").fadeIn(0, product4)
     $("#tr4c").fadeIn(0, qty4)
   }
   function clickriser3quote(x){
     $("#tr4b").val("Click Riser")
     $("#tr4c").val("1")
     $("#tr4b").fadeIn(0, product4)
     $("#tr4c").fadeIn(0, qty4)
   }
   function m2riser3quote(x){
     $("#tr4b").val("M2 Riser")
     $("#tr4c").val("1")
     $("#tr4b").fadeIn(0, product4)
     $("#tr4c").fadeIn(0, qty4)
   }
   function m2xriser3quote(x){
     $("#tr4b").val("M2X Riser")
     $("#tr4c").val("1")
     $("#tr4b").fadeIn(0, product4)
     $("#tr4c").fadeIn(0, qty4)
   }
   function m2maxriser3quote(x){
     $("#tr4b").val("M2 Max Riser")
     $("#tr4c").val("1")
     $("#tr4b").fadeIn(0, product4)
     $("#tr4c").fadeIn(0, qty4)
   }
   function head3quote(x){
     $("#tr4b").val("Lift and Lock Head")
     $("#tr4c").val("1")
     $("#tr4b").fadeIn(0, product4)
     $("#tr4c").fadeIn(0, qty4)
   }
   function dualarm3quote(x){
     $("#tr4b").val("Dual Arm Splitter")
     $("#tr4c").val("1")
     $("#tr4b").fadeIn(0, product4)
     $("#tr4c").fadeIn(0, qty4)
   }
   function invertedheadpost3quote(x){
     $("#tr4b").val("Inverted Head Post")
     $("#tr4c").val("1")
     $("#tr4b").fadeIn(0, product4)
     $("#tr4c").fadeIn(0, qty4)
   }
   
   function wedgereceiverdirectmount3quote(x){
     $("#tr4b").val("Wedge Receiver Direct Mount")
     $("#tr4c").val("1")
     $("#tr4b").fadeIn(0, product4)
     $("#tr4c").fadeIn(0, qty4)
   }
   function wedgereceiverdirectmount4quote(x){
     $("#tr5b").val("Wedge Receiver Direct Mount")
     $("#tr5c").val("1")
     $("#tr5b").fadeIn(0, product5)
     $("#tr5c").fadeIn(0, qty5)
   }
   function head4quote(x){
     $("#tr5b").val("Lift and Lock Head")
     $("#tr5c").val("1")
     $("#tr5b").fadeIn(0, product5)
     $("#tr5c").fadeIn(0, qty5)
   }
   
   function ninetydegree3quote(x){
     $("#tr4b").val("Ninety Degree Adapter")
     $("#tr4c").val("1")
     $("#tr4b").fadeIn(0, product4)
     $("#tr4c").fadeIn(0, qty4)
   }
   
   function oneInch1quote(x){
     $("#tr2b").val("One Inch Riser")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   
   function threeInch1quote(x){
     $("#tr2b").val("Three Inch Riser")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   function dualarm1quote(x){
     $("#tr2b").val("Dual Arm Quote")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   
   function wedgereceiverdirectmount1quote(x){
     $("#tr2b").val("Wedge Receiver Direct Mount")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   
   function invertedheadpost1quote(x){
     $("#tr2b").val("Inverted Head Post")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   
   function ninetydegree1quote(x)
   {
   $("#tr2b").val("90 Degree Adapter")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2) 
   }
   function dualarm2quote(x){
     $("#tr3b").val("Dual Arm Splitter")
     $("#tr3c").val("1")
     $("#tr3b").fadeIn(0, product3)
     $("#tr3c").fadeIn(0, qty3)
   }
   function invertedheadpost2quote(x){
     $("#tr3b").val("Inverted Head Post")
     $("#tr3c").val("1")
     $("#tr3b").fadeIn(0, product3)
     $("#tr3c").fadeIn(0, qty3)
   }
   function wedgereceiverdirectmount2quote(x){
     $("#tr3b").val("Wedge Receiver Direct Mount")
     $("#tr3c").val("1")
     $("#tr3b").fadeIn(0, product3)
     $("#tr3c").fadeIn(0, qty3)
   }
   function ninetydegree2quote(x){
     $("#tr3b").val("90 Degree Adapter")
     $("#tr3c").val("1")
     $("#tr3b").fadeIn(0, product3)
     $("#tr3c").fadeIn(0, qty3)
   }
   function oneInch2quote(x){
     $("#tr3b").val("One Inch Riser")
     $("#tr3c").val("1")
     $("#tr3b").fadeIn(0, product3)
     $("#tr3c").fadeIn(0, qty3)
   }
   function threeInch2quote(x){
     $("#tr3b").val("Three Inch Riser")
     $("#tr3c").val("1")
     $("#tr3b").fadeIn(0, product3)
     $("#tr3c").fadeIn(0, qty3)
   }
   function oneInch3quote(x){
     $("#tr4b").val("One Inch Riser")
     $("#tr4c").val("1")
     $("#tr4b").fadeIn(0, product4)
     $("#tr4c").fadeIn(0, qty4)
   }
   function threeInch3quote(x){
     $("#tr4b").val("Three Inch Riser")
     $("#tr4c").val("1")
     $("#tr4b").fadeIn(0, product4)
     $("#tr4c").fadeIn(0, qty4)
   }
   //			$("#tr1").val("7106")
   
   $(document).ready(function(e) {
   	document.getElementById("tr1b").selectedIndex="86"
   	document.getElementById("tr1c").selectedIndex="1"
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
   
   function clearselected(x){
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
   }
   
</script>
<!--<div onclick="backdrop(this)" id="backdrop"></div>-->
<div class="everythingelse" id="everythingelse">
      <div id="loadinggif" style="top:300px; left:50%; margin-left:-150px; position:absolute;"><img src="loading2.gif" /></div>
      <div id="backgropdiv" style="left: 50%; margin-left: -590px; position: absolute; width: 1180px; height:715px; z-index:1; overflow: hidden;">
         <img id="backdrop1" style="position:absolute; height:800px; width:2000px; left:50%; margin-left:-590px; margin-top:-85px; overflow:auto;" src="blockbuttons.png" />
      </div>
      <div class="powerchair" id="chairpics" style="left: 50%; margin-left: -590px; position: absolute; width: 1250px; height:715px; z-index:-1; overflow: hidden;"></div>
      <div class="options" id="options" style="height:690px; width:250px; left:50%; margin-left:315px; position:absolute; top:11px; background-color:#E9E9E9;">
         <div class="arrows" style="height:45px; width:130px; position: relative; top:620px; left:50%; margin-left:-65px; opacity:0.5;">
            <div onclick="backfirst(this)"class="second forwardback backicon" id="back1" style="margin-top:30px;"><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation arrow3.png" color="blue;"/></div>
            <div onclick="backsecond(this)"class="third forwardback backicon" id="back2" style="margin-top:30px;"><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation arrow3.png" /></div>
            <div onclick="backthird(this)"class="fourth forwardback backicon" id="back3" style="margin-top:30px;"><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation arrow3.png" /></div>
            <div onclick="backforth(this)"class="forwardback backicon" id="back4" style="margin-top:30px;"><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation arrow3.png" /></div>
            <div onclick="backfifth(this)"class="forwardback backicon" id="back5" ><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation arrow3.png" /></div>
            <div onclick="backsixth(this)"class="forwardback backicon" id="back6"><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation arrow3.png /></div>
            <div onclick="backseventh(this)" class="forwardback backicon" id="back7" ><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation arrow3.png" /></div>
            <div onclick="backeighth(this)"class="forwardback backicon" id="back8"><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation arrow3.png" /></div>
            <div onclick="rstrt(this)" class="first forwardback" id="restart" style="display:none; left:70%; top:30px; position:absolute; height:45px; cursor:pointer;"><img style="height:45px; opacity:1.0; filter:alpha(opacity=100);" src="restart-red-icon.png" /></div>
            <div onclick="done(this)"class="forwardback" id="done" style="display:none; position:absolute; height:45px; cursor:pointer;"><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation-done.png" /></div>
            <div onclick="removesegments(this)" class="forwardback" id="select" style="display:none; position:absolute; height:45px; cursor:pointer; top:30px;"><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="approve-green-icon.png" /></div>
         </div>
         <div class="beginning chairoptions" id="beginning" style="position: absolute; width: 210px; top: 10px; left:50%; margin-left:-105px; word-wrap:break-word; text-align:center;">
            <p style="font-size:26px; cursor:auto;">Would you like to customize a standard arm or create a new arm?</p>
         </div>
         <div onclick="standardarm(this);" class="beginning chairoptions mainchairoptions" id="standardarm" style="margin-left:-105px;">
            <p style=" margin-top:0px; font-size:14px;">Standard Arm</p>
         </div>
         <div onclick="tail(this); movieiconhide(this);" class="beginning chairoptions mainchairoptions" id="newarm" style="margin-left:0px; ">
            <p style=" margin-top:0px; font-size:14px;">New Arm</p>
         </div>
         <div class="starting chairoptions" id="startingpoint" style="display:none; position: absolute; width: 210px; top: 10px; left:50%; margin-left:-105px; word-wrap:break-word; text-align:center;">
            <p style="font-size:26px; cursor:auto;">Select an arm to customize.</p>
         </div>
         <div class="first chairoptions armquestions" id="firsttellus" >
            <p style="font-size:26px; cursor:auto;"> Choose your first arm segment.</p>
         </div>
         <div class="second chairoptions armquestions" id="secondtellus" >
            <p style="font-size:26px; cursor:auto;"> Choose another segment.</p>
         </div>
         <div class="third chairoptions armquestions" id="thirdtellus">
            <p style="font-size:26px; cursor:auto;"> Choose another segment.</p>
         </div>
         <div class="wedge chairoptions armquestions" id="wedgechoice">
            <p style="font-size:26px; cursor:auto;"> Choose a Wedge Receiver or a Head</p>
         </div>
         <div class="fourth chairoptions" id="complete" style="position: absolute; width: 200px; top: 100px; left:50%; margin-left:-100px; word-wrap:break-word; text-align:center; display:none;">
            <p style="font-size:26px; cursor:auto;"> Your Lift and Lock System is complete.</p>
         </div>
		 
		 <div class="chairoptions button" id="savearm" onclick="modelManager.saveCustomArm(this); alert('You have saved you arm! Go to Build Your Own System and to attach your saved arm to the available choices.');" style="z-index: 50; position:absolute; top:300px; margin-left:-100px; left:50%; font-family:'Roboto Lt', 'Roboto', 'sans-serif'; font-size:20px; width:200px; height:50px; cursor:pointer; display:none;">Click here to save your arm</div>
		 
         <div onclick="showquote(this)" class="chairoptions" id="showquote" style="z-index: 50; position:absolute; top:465px; margin-left:-80px; left:50%; font-family:'Roboto Lt', 'Roboto', 'sans-serif'; font-size:20px; width:200px; height:50px; cursor:pointer; display:none;">Request a Quote<img style="height:25px; margin-left:10px; position:absolute;" src="navigation arrow.png" /></div>
         <div class="fourth chairoptions armquotations" id="chosenm2">
            <p style="font-size:24px; cursor:auto;"> You've just created an M2 Arm.</p>
            <br />
            <p style="font-size:18px; cursor:auto;">Part # 8074</p>
         </div>
         <div class="fourth chairoptions armquotations" id="chosenm2x">
            <p style="font-size:24px; cursor:auto;"> You've just created an M2X Arm.</p>
            <br />
            <p style="font-size:18px; cursor:auto;">Part # 8069</p>
         </div>
         <div class="fourth chairoptions armquotations" id="chosenm2max">
            <p style="font-size:24px; cursor:auto;"> You've just created an M2 Max Arm.</p>
            <br />
            <p style="font-size:18px; cursor:auto;">Part # 8127</p>
         </div>
         <div class="fourth chairoptions armquotations" id="chosenarticulating">
            <p style="font-size:24px; cursor:auto;"> You've just created an Articulating Arm.</p>
            <br />
            <p style="font-size:18px; cursor:auto;">Part # 8072</p>
         </div>
         <div class="fourth chairoptions armquotations" id="chosenarticulatingriser">
            <p style="font-size:24px; cursor:auto;"> You've just created an Articulating Arm with Riser.</p>
            <br />
            <p style="font-size:18px; cursor:auto;">Part # 8073</p>
         </div>
         <div class="fourth chairoptions armquotations" id="chosenheadtail">
            <p style="font-size:24px; cursor:auto;"> You've just created a Head and Tail Arm.</p>
            <br />
            <p style="font-size:18px; cursor:auto;">Part # 8224</p>
         </div>
         <div class="fourth chairoptions armquotations" id="chosenheadtailriser">
            <p style="font-size:24px; cursor:auto;"> You've just created a Head and Tail Arm with Riser.</p>
            <br />
            <p style="font-size:18px; cursor:auto;">Part # 8374</p>
         </div>
         <div class="remove chairoptions" id="chooselose" style="display:none; position: relative; width: 200px; top: 40px; left:50%; margin-left:-100px; word-wrap:break-word; text-align:center;">
            <p style="font-size:26px; cursor:auto;">Select segments to remove.</p>
         </div>
		 <div class="chairoptions" id="gotocustomize" style="display:none; position: relative; width: 200px; top: 40px; left:50%; margin-left:-100px; word-wrap:break-word; text-align:center;">
            <p style="font-size:26px; cursor:auto;">This is a Standard Arm, if you want to customize, please go to New Arm section by clicking the below restart icon!</p>
         </div>
         <div onclick="m2(this);"class="starting chairoptions standardarmoptions" id="m2" style="top:120px;">
            <p style=" margin-top:0px; font-size:14px;">M2</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/m2-independent-living-wheelchairs.png" />
         </div>
         <div onclick="m2x(this);"class="starting chairoptions standardarmoptions" id="m2x" style="top:200px;">
            <p style=" margin-top:0px; font-size:14px;">M2X</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/m2x-independent-living-wheelchairs.png" />
         </div>
         <div onclick="m2max(this);"class="starting chairoptions standardarmoptions" id="m2max" style="top:280px;">
            <p style=" margin-top:0px; font-size:14px;">M2 Max</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/m2-max-independent-living-wheelchairs.png" />
         </div>
         <div onclick="articulating(this);"class="starting chairoptions standardarmoptions" id="articulatingarm" style="top:360px;">
            <p style=" margin-top:0px; font-size:14px;">Articulating Arm</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/articulating-arm-independent-living-wheelchairs.png" />
         </div>
         <div onclick="articulatingriser(this);" class="starting chairoptions standardarmoptions" id="articulatingarmwithriser" style="top:440px;">
            <p style=" margin-top:0px; font-size:14px;">Articulating Arm with Riser</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/articulating-arm-with-riser-independent-living-wheelchairs.png" />
         </div>
         <div onclick="htriser(this);" class="starting chairoptions standardarmoptions" id="htwithriser" style="top:520px;">
            <p style=" margin-top:0px; font-size:14px;">Head and Tail with Riser</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/head-and-tail-with-riser-lift-and-lock-wheelchair-equipment-mounting-customization-arms.png" />
         </div>
         <div onclick="singleboneremove(this)" class="remove chairoptions removearms" id="singleboneremove">
            <p style=" margin-top:-5px; font-size:14px;">Single Bone</p>
            <img class="listpic" src="arm customization/renderings/201.png" /><img id="singlebonedot" class="dot" src="home page/navigation dot full black.png">
         </div>
         <div onclick="singleboneremove1(this)" class="remove chairoptions removearms" id="singleboneremove1">
            <p style=" margin-top:-5px; font-size:14px;">Single Bone</p>
            <img class="listpic" src="arm customization/renderings/201.png" /><img id="singlebone2dot" class="dot" src="home page/navigation dot full black.png">
         </div>
         <div onclick="singleboneremove2(this)" class="remove chairoptions removearms" id="singleboneremove2">
            <p style=" margin-top:-5px; font-size:14px;">Single Bone</p>
            <img class="listpic" src="arm customization/renderings/201.png" /><img id="singlebone3dot" class="dot" src="home page/navigation dot full black.png">
         </div>
         <div onclick="clickriserremove(this)" class="remove chairoptions removearms" id="clickriserremove">
            <p style=" margin-top:-5px; font-size:14px;">Click Riser</p>
            <img class="listpic" src="arm customization/renderings/202.png" /><img id="clickriserdot" class="dot" src="home page/navigation dot full black.png">
         </div>
         <div onclick="liftshaftremove(this)" class="remove chairoptions removearms" id="liftshaftremove">
            <p style=" margin-top:-5px; font-size:14px;">45 Degree Arm</p>
            <img class="listpic" src="arm customization/renderings/206.png" />
         </div>
         <div onclick="m2riserremove(this)" class="remove chairoptions removearms" id="m2riserremove">
            <p style=" margin-top:-5px; font-size:14px;">M2 Riser</p>
            <img class="listpic" src="arm customization/renderings/203.png" />
         </div>
         <div onclick="m2xriserremove(this)" class="remove chairoptions removearms" id="m2xriserremove">
            <p style=" margin-top:-5px; font-size:14px;">M2X Riser</p>
            <img class="listpic" src="arm customization/renderings/204.png" />
         </div>
         <div onclick="m2maxriserremove(this)" class="remove chairoptions removearms" id="m2maxriserremove">
            <p style=" margin-top:-5px; font-size:14px;">M2 Max Riser</p>
            <img class="listpic" src="arm customization/renderings/205.png" />
         </div>
         <div id="firstscrollview" style="overflow-y:scroll; overflow-x:hidden; height:510px; width:170px; margin-left:60px; margin-top:-30px;">
            <div class="first chairoptions firstarmoptions" id="singlebone1" style="margin-top:10px;">
               <div onclick="singlebone(this); singlebone1quote(this); " class="armtext" >
                  <p style=" margin-top:0px; font-size:14px;">Single Bone</p>
                  <img class="listpic" src="arm customization/renderings/201.png" />
               </div>
			   <hr>
            </div>
            <!-- <div id="singlebone1movieicon" class="ihidden">
               <img class="movieiconpic" onclick="bonevideo(this)" src="img/play.png" style="margin-left:-750px; top:480px;"/>
               </div>-->
            <div class="first chairoptions firstarmoptions" id="clickriser1" style="margin-top:10px;">
               <div onclick="clickriser(this); clickriser1quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Click Riser</p>
                  <img class="listpic" src="arm customization/renderings/202_angle.png" />
               </div>
			   <hr>
            </div>
            <!-- <div id="clickriser1movieicon" class="ihidden">
               <img class="movieiconpic" onclick="bonevideo(this)" src="img/play.png" style="margin-left:-750px; top:480px;"/>
               </div>-->
            <div class="first chairoptions firstarmoptions" id="90degreeadapter1" style="margin-top:10px;">
               <div onclick="ninetydegree1(this); ninetydegree1quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">90 Degree Adapter</p>
                  <img class="listpic" src="arm customization/renderings/104.png" />
               </div>
			   <hr>
            </div>
            <div class="first chairoptions firstarmoptions" id="liftshaft1" style="margin-top:10px;">
               <div onclick="liftshaft(this);liftshaft1quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">45 Degree Arm</p>
                  <img class="listpic" src="arm customization/renderings/206.png" />
               </div>
			   <hr>
            </div>
            <!-- <div id="liftshaft1movieicon" class="ihidden">
               <img class="movieiconpic" onclick="liftshaftvideo(this)" src="img/play.png" style="margin-left:-750px; top:480px;"/>
               </div>-->
            <div class="first chairoptions firstarmoptions" id="m2riser1" style="margin-top:10px;">
               <div onclick="m2riser(this);m2riser1quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">M2 Riser</p>
                  <img class="listpic" src="arm customization/renderings/203.png" />
               </div>
			   <hr>
            </div>
            <!--<div id="m2riser1movieicon" class="ihidden">
               <img class="movieiconpic" onclick="bonevideo(this)" src="img/play.png" style="margin-left:-750px; top:480px;"/>
               </div>-->
            <div class="first chairoptions firstarmoptions" id="m2xriser1" style="margin-top:10px;">
               <div onclick="m2xriser(this);m2xriser1quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">M2X Riser</p>
                  <img class="listpic" src="arm customization/renderings/204.png" />
               </div>
			   <hr>
            </div>
            <!--<div id="m2xriser1movieicon" class="ihidden">
               <img class="movieiconpic" onclick="bonevideo(this)" src="img/play.png" style="margin-left:-750px; top:480px;"/>
               </div>-->
            <div class="first chairoptions firstarmoptions" id="m2maxriser1" style="margin-top:10px;">
               <div onclick="m2maxriser(this);m2maxriser1quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">M2 Max Riser</p>
                  <img class="listpic" src="arm customization/renderings/205.png" />
               </div>
			   <hr>
            </div>
            <div class="first chairoptions firstarmoptions" id="dualarm1" style="margin-top:10px;">
               <div onclick="dualarm1(this);dualarm1quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Dual Arm Splitter</p>
                  <img class="listpic" src="arm customization/renderings/207.png"/>
               </div>
			   <hr>
            </div>
            <div class="first chairoptions firstarmoptions" id="invertedheadpost1" style="margin-top:10px;">
               <div onclick="invertedheadpost1(this);invertedheadpost1quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Inverted Head Post</p>
                  <img class="listpic" src="arm customization/renderings/105.png"/>
               </div>
			   <hr>
            </div>
            <div class="first chairoptions firstarmoptions" id="wedgereceiverdirectmount1" style="margin-top:10px;">
               <div onclick="wedgereceiverdirectmount1(this);wedgereceiverdirectmount1quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Wedge Receiver <br>Direct Mount</p>
                  <img class="listpic" src="arm customization/renderings/302.png" style="margin-top:10px;" />
               </div>
			   <hr>
            </div>
            <!--<div id="m2maxriser1movieicon" class="ihidden">
               <img class="movieiconpic" onclick="bonevideo(this)" src="img/play.png" style="margin-left:-750px; top:480px;"/>
               </div>-->
            <div class="first chairoptions firstarmoptions" id="head1" style="margin-top:10px;">
               <div onclick="$('#head1').addClass('chosen'); done(this); head1quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Lift and Lock Head</p>
                  <img class="listpic" src="arm customization/renderings/301.png"/>
               </div>
			   <hr>
            </div>
            <div class="first chairoptions firstarmoptions" id="oneinchriser1" style="margin-top:10px;">
               <div onclick=" $('#oneinchriser1').addClass('chosen'); oneInchRiser1(this); oneInch1quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">1 Inch Riser</p>
                  <img class="listpic" src="arm customization/renderings/102.png" />
               </div>
			   <hr>
            </div>
            <div class="first chairoptions firstarmoptions" id="threeinchriser1" style="margin-top:10px;">
               <div onclick="$('#threeinchriser1').addClass('chosen'); threeInchRiser1(this);threeInch1quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">3 Inch Riser</p>
                  <img class="listpic" src="arm customization/renderings/103.png" />
               </div>
			   <hr>
            </div>
         </div>
         <!-- Second segment options--->
         <div id="secondscrollview" style="overflow-x:hidden; overflow-y:scroll; height:500px; width:170px; margin-left:60px; margin-top:-30px;">
            <div class="second chairoptions firstarmoptions" id="singlebone2" style="margin-top:10px;">
               <div onclick="singlebone2(this);singlebone2quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Single Bone</p>
                  <img class="listpic" src="arm customization/renderings/201.png" />
               </div>
			   <hr>
            </div>
            <!-- <div id="singlebonemovieicon" class="ihidden" onclick="singlebonevideo(this);">
               <img class="movieiconpic" src="img/play.png" style="margin-left:-590px; top:450px;"/>
               </div>
               
               <div id="clickrisertosinglebonemovieicon" class="ihidden" onclick="clickrisertosinglebonevideo(this);">
               <img class="movieiconpic" src="img/play.png" style="margin-left:-570px; top:420px;"/>
               </div>
               
               
               <div id="liftshafttosinglebonemovieicon" class="ihidden" onclick="liftshafttosinglebonevideo(this);">
               <img class="movieiconpic" src="img/play.png" style="margin-left:-870px; top:210px;"/>
               </div>
               
               <div id="m2riserstosinglebonemovieicon" class="ihidden" onclick="m2riserstosinglebonevideo(this);">
               <img class="movieiconpic" src="img/play.png" style="margin-left:-450px; top:480px;"/>
               </div>-->
            <div class="second chairoptions firstarmoptions" id="clickriser2" style="margin-top:10px;">
               <div onclick="clickriser2(this);clickriser2quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Click Riser</p>
                  <img class="listpic" src="arm customization/renderings/202.png" />
               </div>
			   <hr>
            </div>
            <!--<div class="second chairoptions firstarmoptions" id="90degreeadapter2" style="margin-top:10px;">
               <div onclick="ninetydegree2(this); ninetydegree2quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">90 Degree Adapter</p>
                  <img class="listpic" src="arm customization/renderings/104.png" />
               </div>
			   <hr>
            </div>-->
            <div class="second chairoptions firstarmoptions" id="dualarm2" style="margin-top:10px;">
               <div onclick="dualarm2(this);dualarm2quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Dual Arm Splitter</p>
                  <img class="listpic" src="arm customization/renderings/207.png"/>
               </div>
			   <hr>
            </div>
            <!--<div class="second chairoptions firstarmoptions" id="invertedheadpost2" style="margin-top:10px;">
               <div onclick="invertedheadpost2(this);invertedheadpost2quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Inverted Head Post</p>
                  <img class="listpic" src="arm customization/renderings/105.png"/>
               </div>
			   <hr>
            </div>-->
            <div class="second chairoptions firstarmoptions" id="wedgereceiverdirectmount2" style="margin-top:10px;">
               <div onclick="wedgereceiverdirectmount2(this);wedgereceiverdirectmount2quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Wedge Receiver <br> Direct Mount</p>
                  <img class="listpic" src="arm customization/renderings/302.png" style="margin-top:10px;" />
               </div>
			   <hr>
            </div>
            <!--<div id="clickrisermovieicon" class="ihidden">
               <img class="movieiconpic" onclick="clickriservideo(this)" src="img/play.png" style="margin-left:-590px; top:450px;" />
               </div>-->
            <div class="second chairoptions firstarmoptions" id="liftshaft2" style="margin-top:10px;">
               <div onclick="liftshaft2(this);liftshaft2quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">45 Degree Arm</p>
                  <img class="listpic" src="arm customization/renderings/206.png" />
               </div>
			   <hr>
            </div>
            <!--<div id="liftshaftmovieicon" class="ihidden">
               <img class="movieiconpic" onclick="singlebonevideo(this)" src="img/play.png" style="margin-left:-590px; top:450px;" />
               </div>
               
               <div id="m2riserstoliftshaftmovieicon" class="ihidden">
               <img class="movieiconpic" onclick="liftshaftvideo(this)" src="img/play.png" style="margin-left:-450px; top:490px;" />
               </div>-->
            <div class="second chairoptions firstarmoptions" id="m2riser2" style="margin-top:10px;">
               <div onclick="m2riser2(this);m2riser2quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">M2 Riser</p>
                  <img class="listpic" src="arm customization/renderings/203.png" />
               </div>
			   <hr>
            </div>
            <!--<div id="m2riser2movieicon" class="ihidden">
               <img class="movieiconpic" onclick="singlebonevideo(this)" src="img/play.png" style="margin-left:-590px; top:450px;" />
               <!--<img class="movieiconpic" id="oneinchriser" onclick="$('bonetooneinchriser').fadeIn(300);" src="img/play.png" style="margin-left:-800px; top:350px;" />
               </div>-->
            <div class="second chairoptions firstarmoptions" id="m2xriser2" style="margin-top:10px;">
               <div onclick="m2xriser2(this);m2xriser2quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">M2X Riser</p>
                  <img class="listpic" src="arm customization/renderings/204.png" />
               </div>
			   <hr>
            </div>
            <!--<div id="m2xriser2movieicon" class="ihidden">
               <img class="movieiconpic" onclick="singlebonevideo(this)" src="img/play.png" style="margin-left:-590px; top:450px;" />
               </div>-->
            <div class="second chairoptions firstarmoptions" id="m2maxriser2" style="margin-top:10px;">
               <div onclick="m2maxriser2(this);m2maxriser2quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">M2 Max Riser</p>
                  <img class="listpic" src="arm customization/renderings/205.png" />
               </div>
			   <hr>
            </div>
            <!--<div id="m2maxriser2movieicon" class="ihidden">
               <img class="movieiconpic" onclick="singlebonevideo(this)" src="img/play.png" style="margin-left:-590px; top:450px;"/>
               </div>-->
            <div class="second chairoptions firstarmoptions" id="head2" style="margin-top:10px;">
               <div onclick="$('#head2').addClass('chosen'); invertedheadpost1tohead2movieiconenable(this); singlebonetohead2movieiconenable(this); clickrisertohead2movieiconenable(this); m2riserstohead2movieiconenable(this); done(this); head2quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Lift and Lock Head</p>
                  <img class="listpic" src="arm customization/renderings/301.png" />
               </div>
			   <hr>
            </div>
            <!--<div class="second chairoptions firstarmoptions" id="oneinchriser2" style="margin-top:10px;">
               <div onclick="oneInchRiser2(this);oneInch2quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">1 Inch Riser</p>
                  <img class="listpic" src="arm customization/renderings/102.png" />
               </div>
			   <hr>
            </div>
            <div class="second chairoptions firstarmoptions" id="threeinchriser2" style="margin-top:10px;">
               <div onclick="threeInchRiser2(this);threeInch2quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">3 Inch Riser</p>
                  <img class="listpic" src="arm customization/renderings/103.png" />
               </div>
			   <hr>
            </div>-->
         </div>
         <!-- Third segment options -->
         <div id="thirdscrollview" style="overflow-x:hidden; overflow-y:scroll; height:500px; width:170px; margin-left:60px; margin-top:-30px;">
            <div class="third chairoptions firstarmoptions" id="singlebone3" style="margin-top:10px;">
               <div onclick="singlebone3(this);singlebone3quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Single Bone</p>
                  <img class="listpic" src="arm customization/renderings/201.png" />
               </div>
			   <hr>
            </div>
            <!--<div id="singlebone3movieicon" class="ihidden">
               <img class="movieiconpic" onclick="singlebonevideo(this);" src="img/play.png" style="margin-left:-430px; top:420px;"/>
               </div>
               
               <div id="clickriser2tosinglebonemovieicon" class="ihidden" onclick="clickrisertosinglebonevideo(this);">
               <img class="movieiconpic" src="img/play.png" style="margin-left:-415px; top:370px;"/>
               </div>
               
               <div id="liftshaft2tosinglebonemovieicon" class="ihidden" onclick="liftshaft2tosinglebonevideo(this);">
               <img class="movieiconpic" src="img/play.png" style="margin-left:-710px; top:200px;"/>
               </div>
               
               <div id="singlebone3tom2risersmovieicon" class="ihidden" onclick="singlebone3tom2risersvideo(this);">
               <img class="movieiconpic" src="img/play.png" style="margin-left:-300px; top:470px;"/>
               </div>-->
            <div class="third chairoptions firstarmoptions" id="clickriser3" style="margin-top:10px;">
               <div onclick="clickriser3(this); clickriser3quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Click Riser</p>
                  <img class="listpic" src="arm customization/renderings/202.png" />
               </div>
			   <hr>
            </div>
            <!--<div class="third chairoptions firstarmoptions" id="90degreeadapter3" style="margin-top:10px;">
               <div onclick="ninetydegree3(this); ninetydegree3quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">90 Degree Adapter</p>
                  <img class="listpic" src="arm customization/renderings/104.png" />
               </div>
			   <hr>
            </div>-->
            <div class="third chairoptions firstarmoptions" id="dualarm3" style="margin-top:10px;">
               <div onclick="dualarm3(this); dualarm3quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Dual Arm Splitter</p>
                  <img class="listpic" src="arm customization/renderings/207.png"/>
               </div>
			   <hr>
            </div>
            <!--<div class="third chairoptions firstarmoptions" id="invertedheadpost3" style="margin-top:10px;">
               <div onclick="invertedheadpost3(this);invertedheadpost3quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Inverted Head Post</p>
                  <img class="listpic" src="arm customization/renderings/105.png"/>
               </div>
			   <hr>
            </div>-->
            <div class="third chairoptions firstarmoptions" id="wedgereceiverdirectmount3" style="margin-top:10px;">
               <div onclick="wedgereceiverdirectmount3(this);wedgereceiverdirectmount3quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Wedge Receiver <br> Direct Mount</p>
                  <img class="listpic" src="arm customization/renderings/302.png" style="margin-top:10px;" />
               </div>
			   <hr>
            </div>
            <!--<div id="clickriser3movieicon" class="ihidden">
               <img class="movieiconpic" onclick="clickriservideo(this)" src="img/play.png" style="margin-left:-430px; top:420px;" />
               </div>
               
               <div id="m2riserstoclickriser3movieicon" class="ihidden">
               <img class="movieiconpic" onclick="m2riserstoclickriser3video(this)" src="img/play.png" style="margin-left:-300px; top:460px;" />
               </div>-->
            <div class="third chairoptions firstarmoptions" id="liftshaft3" style="margin-top:10px;">
               <div onclick="liftshaft3(this);liftshaft3quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">45 Degree Arm</p>
                  <img class="listpic" src="arm customization/renderings/206.png" />
               </div>
			   <hr>
            </div>
            <!--<div id="liftshaft3movieicon" class="ihidden">
               <img class="movieiconpic" onclick="liftshafttosinglebonevideo(this)" src="img/play.png" style="margin-left:-430px; top:420px;" />
               </div>
               
               <div id="m2riserstoliftshaft3movieicon" class="ihidden">
                           <img class="movieiconpic" onclick="m2riserstoliftshaft3video(this)" src="img/play.png" style="margin-left:-300px; top:460px;" />
                        </div>-->
            <div class="third chairoptions firstarmoptions" id="m2riser3" style="margin-top:10px;">
               <div onclick="m2riser3(this);m2riser3quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">M2 Riser</p>
                  <img class="listpic" src="arm customization/renderings/203.png" />
               </div>
			   <hr>
            </div>
            <!--<div id="m2riser3movieicon" class="ihidden">
               <img class="movieiconpic" onclick="m2riservideo(this)" src="img/play.png" style="margin-left:-430px; top:420px;"/>
               </div>-->
            <div class="third chairoptions firstarmoptions" id="m2xriser3" style="margin-top:10px;">
               <div onclick="m2xriser3(this);m2xriser3quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">M2X Riser</p>
                  <img class="listpic" src="arm customization/renderings/204.png" />
               </div>
			   <hr>
            </div>
            <!--<div id="m2xriser3movieicon" class="ihidden">
               <img class="movieiconpic" onclick="m2riservideo(this)" src="img/play.png" style="margin-left:-430px; top:420px;"/>
               </div>-->
            <div class="third chairoptions firstarmoptions" id="m2maxriser3" style="margin-top:10px;">
               <div onclick="m2maxriser3(this);m2maxriser3quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">M2 Max Riser</p>
                  <img class="listpic" src="arm customization/renderings/205.png" />
               </div>
			   <hr>
            </div>
            <!--<div id="m2maxriser3movieicon" class="ihidden">
               <img class="movieiconpic" onclick="m2riservideo(this)" src="img/play.png" style="margin-left:-430px; top:420px;"/>
               </div>-->
            <div class="third chairoptions firstarmoptions" id="head3" style="margin-top:10px;">
               <div onclick="$('#head3').addClass('chosen'); done(this); singlebonetohead3movieiconenable(this); m2riserstohead3movieiconenable(this); head3quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Lift and Lock Head</p>
                  <img class="listpic" src="arm customization/renderings/301.png" />
               </div>
			   <hr>
            </div>
           <!-- <div class="third chairoptions firstarmoptions" id="oneinchriser3" style="margin-top:10px;">
               <div onclick="oneInchRiser3(this); oneInch3quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">1 Inch Riser</p>
                  <img class="listpic" src="arm customization/renderings/102.png" />
               </div>
			   <hr>
            </div>
            <div class="third chairoptions firstarmoptions" id="threeinchriser3" style="margin-top:10px;">
               <div onclick="threeInchRiser3(this);threeInch3quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">3 Inch Riser</p>
                  <img class="listpic" src="arm customization/renderings/103.png" />
               </div>
			   <hr>
            </div>-->
         </div>
         <div id="wedgescrollview" style="height:500px; width:180px; margin-left:60px;">
            <!--<div class="wedge chairoptions firstarmoptions" id="lockablewedgereceiver" style="margin-top:10px;">
               <div onclick="lockablewedgereceiver(this);lockablequote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Lockable Wedge Receiver</p>
                  <img class="listpic" src="arm customization/renderings/8076-lockable-receiver.png" />
               </div>
            </div>
            <div class="wedge chairoptions firstarmoptions" id="rotarywedgereceiver">
               <div onclick="rotarywedgereceiver(this);rotaryquote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Rotary Wedge Receiver</p>
                  <img class="listpic" src="arm customization/renderings/8075-rotary-receiver.png" />
               </div>
            </div>-->
			
			<div class="wedge chairoptions firstarmoptions" id="wedgereceiverdirectmount4" style="margin-top:10px;">
               <div onclick="wedgereceiverdirectmount4(this);wedgereceiverdirectmount4quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Wedge Receiver <br> Direct Mount</p>
                 <img class="listpic" src="arm customization/renderings/302.png" style="margin-top:10px;" />
               </div>
			   <hr>
            </div>
			
			 <div class="wedge chairoptions firstarmoptions" id="head4" style="margin-top:10px;">
               <div onclick="$('#head4').addClass('chosen'); done(this); head4movieiconenable(this);head4quote(this);" class="armtext">
                  <p style=" margin-top:0px; font-size:14px;">Lift and Lock Head</p>
                  <img class="listpic" src="arm customization/renderings/301.png" />
               </div>
			   <hr>
            </div>
            </div>
			
         <div onclick="sclpoptions(this)" class="chairoptions" id="compatible" style="position: absolute; width: 200px; top: 500px; left:50%; margin-left:-100px; word-wrap:break-word; text-align:center; display:none; z-index:5;">
            <p style="font-size:18px;"> Click Here to see what your system is compatible with</p>
         </div>
         <div class="chairoptions" id="compatiblechoice" style="position: absolute; width: 200px; top: 100px; left:50%; margin-left:-100px; word-wrap:break-word; text-align:center; display:none;">
            <p style="font-size:26px;">Choose one of the following:</p>
         </div>
         <div onclick="$('#rollingstandpic').addClass('chosen');sclp(this)" class="chairoptions" id="rollingstandopt" style="position: absolute; width: 200px; top: 300px; left:50%; margin-left:-100px; word-wrap:break-word; text-align:center; display:none; z-index:5;">
            <p style="font-size:18px; line-height:50%"> Rolling Floor Stand </p>
            <p style="font-size:14px; line-height:50%;"> (Shown with 16 Inch Extension)</p>
            <img id="rollingstandrb" onmouseover="rollingstandref(this)" onmouseout="rollingstandrefhide(this)" src="refbar.png" class="refbar" style="top:0px;"/>
         </div>
         <div  onclick="$('#walltrackpic').addClass('chosen');sclp(this)" class="chairoptions" id="walltrackopt" style="position: absolute; width: 200px; top: 400px; left:50%; margin-left:-100px; word-wrap:break-word; text-align:center; display:none; z-index:5;">
            <p style="font-size:18px;"> Wall Track</p>
            <img id="rollingstandrb" onmouseover="walltrackref(this)" onmouseout="walltrackrefhide(this)" src="refbar.png" class="refbar" style="top:0px;"/>
         </div>
      </div>
      <!--<div id="chairpictures" style="position:absolute; width:1050px; height:715px; left:50%; margin-left:-590px; z-index:-1; overflow-:scroll;">-->
      <div id="customize-your-arm-canvas" style="position:absolute; width:1180; height:715px; left:50%; margin-left:-590px; z-index:-1; overflow-:scroll;">
         <div class="pics" style="left: 50%; margin-left: -590px; position: absolute; width: 900px; height:715px; overflow-x: auto;"></div>
         <div class="one pics framepics" id="singlebonepic"></div>
         <div class="one pics framepics" id="clickriserpic"></div>
         <div class="one pics framepics" id="liftshaftpic"></div>
         <div class="one pics framepics" id="m2riserpic"></div>
         <div class="one pics framepics" id="m2xriserpic"></div>
         <div class="one pics framepics" id="m2maxriserpic"></div>
         <div class="one pics framepics" id="oneinchriserpic"></div>
         <div class="one pics framepics" id="threeinchriserpic"></div>
         <div class="one pics framepics" id="dualarm1pic"></div>
         <div class="one pics framepics" id="invertedheadpost1pic"></div>
         <div class="one pics framepics" id="90degreeadapter1pic"></div>
         <div class="one pics framepics" id="wedgereceiverdirectmount1pic"></div>
         <div class="one pics framepics" id="doublepostpic"></div>
         <div class="two pics framepics" id="singlebonepic2"></div>
         <div class="two pics framepics" id="clickriserpic2"></div>
         <div class="two pics framepics" id="liftshaftpic2"></div>
         <div class="two pics framepics" id="m2riserpic2"></div>
         <div class="two pics framepics" id="m2xriserpic2"></div>
         <div class="two pics framepics" id="m2maxriserpic2"></div>
         <div class="two pics framepics" id="oneinchriser2pic"></div>
         <div class="two pics framepics" id="threeinchriser2pic"></div>
         <div class="two pics framepics" id="invertedheadpost2pic"></div>
         <div class="two pics framepics" id="dualarm2pic"></div>
         <div class="two pics framepics" id="90degreeadapter2pic"></div>
         <div class="two pics framepics" id="wedgereceiverdirectmount2pic"></div>
         <div class="two pics framepics" id="doublepostpic2"></div>
         <div class="three pics framepics" id="singlebonepic3"></div>
         <div class="three pics framepics" id="clickriserpic3"></div>
         <div class="three pics framepics" id="liftshaftpic3"></div>
         <div class="three pics framepics" id="m2riserpic3"></div>
         <div class="three pics framepics" id="m2xriserpic3"></div>
         <div class="three pics framepics" id="m2maxriserpic3"></div>
         <div class="three pics framepics" id="oneinchriser3pic"></div>
         <div class="three pics framepics" id="threeinchriser3pic"></div>
         <div class="three pics framepics" id="invertedheadpost3pic"></div>
         <div class="three pics framepics" id="dualarm3pic"></div>
         <div class="three pics framepics" id="90degreeadapter3pic"></div>
         <div class="three pics framepics" id="wedgereceiverdirectmount3pic"></div>
		 <div class="four pics framepics" id="wedgereceiverdirectmount4pic"></div>
         <div class="pics framepics" id="headpic"></div>
         <div class="pics framepics" id="lockablepic"></div>
         <div class="pics framepics" id="rotarypic"></div>
         <!--</div>-->
         
         <div id="compatiblepics" style="display:none; position:absolute; width:1000px; height:715px; left:50%; margin-left:-590px; overflow:hidden; z-index:-2;"><img id="rollingstandpic" src="powerchair renderings/good renderings/rolling-floor-stand-independent-living-wheelchair.png" style="display:none; z-index:-2; position:absolute; height:600px; left:50%; margin-left:-520px; top:85px;"/><img id="walltrackpic" src="powerchair renderings/good renderings/wall-track-independent-living-wheelchair.png" style="display:none; z-index:-2; position:absolute; height:600px; left:50%; margin-left:-480px; top:85px;"/></div>
         <div id="inputparend" style="top:300px; height: 200px; overflow:hidden; left:50%; margin-left:300px; position:absolute; display:none; width:255px; z-index:1;"></div>
         <!--<div id="helpbubblebackground" style="height:100%; width:100%; position:absolute; background-color:transparent; display:none;"></div>-->	  
	  <!-- Input Frame starts here -->
	  
	  <div  id="inputframe" style="left: 50%; margin-left: -580px; width: 300px; height: 690px; top: 11px; position: absolute; overflow: hidden;">
            <div onmouseover="inputshow(this)" onmouseout="inputhide(this)" id="input" style="width:300px; height:690px; background-color:#E9E9E9; position:absolute; margin-left:-276px;">
               <div style="position:relative; width:100%; height:160px; display:block; margin-bottom:78px;" id="riserdiv">
			   
			   <div id="oneinch1riserdiv" style="position:absolute; top:600px; display:block;">
			   <div id="bonetooneinchrisermovieicon" class="ihidden1">
                    <img class="movieiconpic" onclick="bonetooneinchriservideo(this)" src="img/play.png" style="top:-5px; display:block; margin-left:210px;"/>
               </div>
			   </div>
			   
			   <div id="threeinch1riserdiv" style="position:absolute; top:600px; display:block;">
				  <div id="bonetothreeinchrisermovieicon" class="ihidden1">
                     <img class="movieiconpic" onclick="bonetothreeinchriservideo(this)" src="img/play.png" style="top:-5px; display:inline; margin-left:210px;"/>
                  </div>
			  </div>
			   <div id="oneinchriser1inputpar" class="inptlist" style="position:absolute; top:600px; margin-left:-130px; display:block;">1 Inch Riser</div>
			   <div id="threeinchriser1inputpar" class="inptlist" style="position:absolute; top:600px; margin-left:-130px; display:block;">3 Inch Riser</div>
			   
			   <div id="oneinchriser2inputpar" class="inptlist">1 Inch Riser</div>
			    <div id="threeinchriser2inputpar" class="inptlist">3 Inch Riser</div>
				 <div id="oneinchriser3inputpar" class="inptlist">1 Inch Riser</div>
				  <div id="threeinchriser3inputpar" class="inptlist">3 Inch Riser</div>
               </div>
               <p id="singleboneinputpar" class="inptlist">Single Bone</p>
               <div id="singlebone1movieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="bonevideo(this)" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
			   <div id="oneinchrisertosinglebonemovieicon" class="ihidden1" onclick="oneinchriservideo(this);">
                  <img class="movieiconpic" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
			    <div id="threeinchrisertosinglebonemovieicon" class="ihidden1" onclick="threeinchriservideo(this);">
                  <img class="movieiconpic" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
               <p id="clickriserinputpar" class="inptlist">Click Riser</p>
               <div id="clickriser1movieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="bonevideo(this)" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
               <p id="90degreeadapter1inputpar" class="inptlist">90 Degree Adapter</p>
               <div id="boneto90degreeadapter1movieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="boneto90degreeadapter1video(this)" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
               <p id="dualarm1inputpar" class="inptlist">Dual Arm Splitter</p>
               <div id="bonetodualarm1movieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="bonetodualarm1video(this)" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
			   <div id="dualarm1tooneinchriser1movieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="dualarm1toinchrisersvideo(this)" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
			   <div id="dualarm1tothreeinchriser1movieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="dualarm1toinchrisersvideo(this)" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
               <p id="invertedheadpost1inputpar" class="inptlist">Inverted Head Post</p>
               <div id="bonetoinvertedheadpostmovieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="bonetoinvertedheadpost1video(this)" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
               <p id="wedgereceiverdirectmount1inputpar" class="inptlist">Wedge Receiver Direct Mount</p>
               <div id="bonetowedgereceiverdirectmountmovieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="bonetowedgereceiverdirectmount1video(this)" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
               <p id="liftshaftinputpar" class="inptlist">45 Degree Arm</p>
               <div id="liftshaft1movieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="liftshaftvideo(this)" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
               <p id="m2riserinputpar" class="inptlist">M2 Riser</p>
               <div id="m2riser1movieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="bonevideo(this)" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
               <div id="oneinchtom2risermovieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="oneinchtom2risersvideo(this)" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
			   <div id="threeinchtom2risermovieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="threeinchtom2risersvideo(this)" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
               <p id="m2xriserinputpar" class="inptlist">M2X Riser</p>
               <div id="m2xriser1movieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="bonevideo(this)" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
               <div id="oneinchtom2xrisermovieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="oneinchtom2risersvideo(this)" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
			   <div id="threeinchtom2xrisermovieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="threeinchtom2risersvideo(this)" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
               <p id="m2maxriserinputpar" class="inptlist">M2 Max Riser</p>
               <div id="m2maxriser1movieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="bonevideo(this)" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
               <div id="oneinchtom2maxrisermovieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="oneinchtom2risersvideo(this)" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
			   <div id="threeinchtom2maxrisermovieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="threeinchtom2risersvideo(this)" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>                 
				  
               <p id="head1inputpar" class="inptlist">Lift and Lock Head</p>
               <div id="head1movieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="bonetohead1video(this);" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
			   <div id="head1tooneinchrisermovieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="head1toinchrisersvideo(this);" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
			   <div id="head1tothreeinchrisermovieicon" class="ihidden1">
                  <img class="movieiconpic" onclick="head1toinchrisersvideo(this);" src="img/play.png" style="margin-left:210px; top:230px;"/>
               </div>
               <p id="singleboneinputpar2" class="inptlist">Single Bone</p>
               <div id="singlebonemovieicon" class="ihidden2" onclick="singlebonevideo(this);">
                  <img class="movieiconpic" src="img/play.png" style="margin-left:210px; top:263px;"/>
               </div>
               <div id="clickrisertosinglebonemovieicon" class="ihidden2" onclick="clickrisertosinglebonevideo(this);">
                  <img class="movieiconpic" src="img/play.png" style="margin-left:210px; top:263px;"/>
               </div>
               <div id="liftshafttosinglebonemovieicon" class="ihidden2" onclick="liftshafttosinglebonevideo(this);">
                  <img class="movieiconpic" src="img/play.png" style="margin-left:210px; top:263px;"/>
               </div>
               <div id="m2riserstosinglebonemovieicon" class="ihidden2" onclick="m2riserstosinglebonevideo(this);">
                  <img class="movieiconpic" src="img/play.png" style="margin-left:210px; top:263px;"/>
               </div>
               <div id="dualarm1tosinglebonemovieicon" class="ihidden2" onclick="dualarm1tosinglebonevideo(this);">
                  <img class="movieiconpic" src="img/play.png" style="margin-left:210px; top:263px;"/>
               </div>
               <div id="90degreeadapter1tosinglebonemovieicon" class="ihidden2" onclick="ninetydegreeadapter1tosinglebonevideo(this);">
                  <img class="movieiconpic" src="img/play.png" style="margin-left:210px; top:263px;"/>
               </div>
               <div id="invertedheadpost1tosinglebonemovieicon" class="ihidden2" onclick="invertedheadpost1tosinglebonevideo(this);">
                  <img class="movieiconpic" src="img/play.png" style="margin-left:210px; top:263px;"/>
               </div>
               <p id="clickriserinputpar2" class="inptlist">Click Riser</p>
               <div id="clickrisermovieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="clickriservideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
               <div id="dualarm1toclickrisermovieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="dualarm1toclickriservideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
               <p id="90degreeadapter2inputpar" class="inptlist">90 Degree Adapter</p>
               <div id="dualarm1toclickrisermovieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="dualarm1toclickriservideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
               <p id="dualarm2inputpar" class="inptlist">Dual Arm Splitter</p>
               <div id="dualarm2tosinglebonemovieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="dualarm2tosinglebonevideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
               <div id="ninetydegree1todualarm2movieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="ninetydegree1todualarm2video(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
			   <div id="dualarm2tom2risermovieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="dualarm2tom2risersvideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
               <p id="invertedheadpost2inputpar" class="inptlist">Inverted Head Post</p>
               <p id="wedgereceiverdirectmount2inputpar" class="inptlist">Wedge Receiver Direct Mount</p>
               <div id="90degreeadapter1towedgereceiverdirectmount2movieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="ninetydegree1towedgereceivervideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
			   <div id="wedgereceiverdirectmount1tosinglebonemovieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="wedgereceiverdirectmount1tosinglebonevideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
               <p id="liftshaftinputpar2" class="inptlist">45 Degree Arm</p>
               <div id="liftshaftmovieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="liftshaft2tosinglebonevideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
               <div id="liftshaft2todualarmmovieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="liftshaft2todualarmvideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
               <div id="liftshaft2to90degreeadaptermovieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="liftshaft2to90degreeadaptervideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
               <div id="m2riserstoliftshaftmovieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="liftshaftvideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
               <p id="m2riserinputpar2" class="inptlist">M2 Riser</p>
               <div id="m2riser2movieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="m2risers2tosinglebonevideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
                  <!--<img class="movieiconpic" id="oneinchriser" onclick="$('bonetooneinchriser').fadeIn(300);" src="img/play.png" style="margin-left:-800px; top:350px;" />-->
               </div>
               <div id="m2riser2toclickrisermovieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="clickriservideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
               <div id="dualarm1tom2risermovieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="dualarm1tom2risersvideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
			   <div id="m2risertom2riser2movieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="m2risertom2riser2video(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
			   
               <p id="m2xriserinputpar2" class="inptlist">M2X Riser</p>
               <div id="m2xriser2movieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="m2risers2tosinglebonevideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
               <div id="m2xriser2toclickrisermovieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="clickriservideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
               <div id="dualarm1tom2xrisermovieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="dualarm1tom2risersvideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
			   <div id="m2risertom2xriser2movieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="m2risertom2riser2video(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
               <p id="m2maxriserinputpar2" class="inptlist">M2 Max Riser</p>
               <div id="m2maxriser2movieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="m2risers2tosinglebonevideo(this)" src="img/play.png" style="margin-left:210px; top:263px;"/>
               </div>
               <div id="m2maxriser2toclickrisermovieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="clickriservideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
               <div id="dualarm1tom2maxrisermovieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="dualarm1tom2risersvideo(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
			   <div id="m2risertom2maxriser2movieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="m2risertom2riser2video(this)" src="img/play.png" style="margin-left:210px; top:263px;" />
               </div>
               <p id="head2inputpar" class="inptlist">Lift and Lock Head</p>
               <div id="invertedheadpost1tohead2movieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="invertedheadpost1tohead2video(this);" src="img/play.png" style="margin-left:210px; top:263px;"/>
               </div>
               <div id="head2movieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="singlebonetohead2video(this);" src="img/play.png" style="margin-left:210px; top:263px;"/>
               </div>
               <div id="clickrisertohead2movieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="clickrisertohead2video(this);" src="img/play.png" style="margin-left:210px; top:263px;"/>
               </div>
               <div id="m2riserstohead2movieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="m2riserstohead2video(this);" src="img/play.png" style="margin-left:210px; top:263px;"/>
               </div>
               <div id="liftshafttohead2movieicon" class="ihidden2">
                  <img class="movieiconpic" onclick="liftshafttohead2video(this);" src="img/play.png" style="margin-left:210px; top:263px;"/>
               </div>
               <p id="singleboneinputpar3" class="inptlist">Single Bone</p>
               <div id="singlebone3movieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="singlebonevideo(this);" src="img/play.png" style="margin-left:210px; top:295px;"/>
               </div>
               <div id="clickriser2tosinglebonemovieicon" class="ihidden3" onclick="clickrisertosinglebonevideo(this);">
                  <img class="movieiconpic" src="img/play.png" style="margin-left:210px; top:295px;"/>
               </div>
               <div id="liftshaft2tosinglebonemovieicon" class="ihidden3" onclick="liftshaft2tosinglebonevideo(this);">
                  <img class="movieiconpic" src="img/play.png" style="margin-left:210px; top:295px;"/>
               </div>
               <div id="singlebone3tom2risersmovieicon" class="ihidden3" onclick="singlebone3tom2risersvideo(this);">
                  <img class="movieiconpic" src="img/play.png" style="margin-left:210px; top:295px;"/>
               </div>
               <div id="singlebone3todualarm2movieicon" class="ihidden3" onclick="singlebone3todualarm2video(this);">
                  <img class="movieiconpic" src="img/play.png" style="margin-left:210px; top:295px;"/>
               </div>
               <p id="clickriserinputpar3" class="inptlist">Click Riser</p>
               <div id="clickriser3movieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="clickriservideo(this)" src="img/play.png" style="margin-left:210px; top:295px;" />
               </div>
               <div id="m2riserstoclickriser3movieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="m2riserstoclickriser3video(this)" src="img/play.png" style="margin-left:210px; top:295px;" />
               </div>
               <div id="clickrisertodualarm2movieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="clickrisertodualarm2video(this)" src="img/play.png" style="margin-left:210px; top:295px;" />
               </div>
               <p id="liftshaftinputpar3" class="inptlist">45 Degree Arm</p>
               <div id="liftshaft3movieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="liftshafttosinglebonevideo(this)" src="img/play.png" style="margin-left:210px; top:295px;" />
               </div>
               <div id="m2riserstoliftshaft3movieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="m2riserstoliftshaft3video(this)" src="img/play.png" style="margin-left:210px; top:295px;" />
               </div>
               <div id="liftshafttodualarmmovieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="liftshafttodualarmvideo(this)" src="img/play.png" style="margin-left:210px; top:295px;" />
               </div>
               
			   <p id="dualarm3inputpar" class="inptlist">Dual Arm Splitter</p>
			   <div id="dualarm3tosinglebonemovieicon" class="ihidden3">
                  <img class="movieiconpic" onclick=" dualarm3tosinglebonevideo(this)" src="img/play.png" style="margin-left:210px; top:295px;" />
               </div>
			   
			    <div id="dualarm3tom2risermovieicon" class="ihidden3">
                  <img class="movieiconpic" onclick=" dualarm3tom2risersvideo(this)" src="img/play.png" style="margin-left:210px; top:295px;" />
               </div>
			  
               <p id="wedgereceiverdirectmount3inputpar" class="inptlist">Wedge Receiver Direct Mount</p>
			   <div id="wedgereceiverdirectmount3tosinglebonemovieicon" class="ihidden3">
                  <img class="movieiconpic" onclick=" wedgereceiverdirectmount3tosinglebonevideo(this)" src="img/play.png" style="margin-left:210px; top:295px;" />
               </div>
			   
               <p id="invertedheadpost3inputpar" class="inptlist">Inverted Head Post</p>
               <p id="90degreeadapter3inputpar" class="inptlist">90 Degree Adapter</p>
               <p id="head3inputpar" class="inptlist">Lift and Lock Head</p>
               <div id="head3movieicon" class="ihidden3">		
                  <img class="movieiconpic" onclick="singlebone2tohead3video(this)" src="img/play.png" style="margin-left:210px; top:295px;"/>
               </div>
               <div id="head3toclickrisermovieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="clickrisertohead3video(this)" src="img/play.png" style="margin-left:210px; top:295px;"/>
               </div>
               <div id="m2riserstohead3movieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="m2riserstohead3video(this);" src="img/play.png" style="margin-left:210px; top:295px;"/>
               </div>
               <div id="liftshaft2tohead3movieicon" class="ihidden3">
                  <img class="movieiconpic" src="img/play.png" onclick="liftshaft2tohead3video(this);" style="margin-left:210px; top:295px;"/>
               </div>
               <p id="m2riserinputpar3" class="inptlist">M2 Riser</p>
               <div id="m2riser3movieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="m2riservideo(this)" src="img/play.png" style="margin-left:210px; top:295px;"/>
               </div>
               <div id="m2riser3toclickrisermovieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="m2riserstoclickriser2video(this)" src="img/play.png" style="margin-left:210px; top:295px;" />
               </div>
               <div id="m2risertodualarmmovieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="m2risertodualarmvideo(this)" src="img/play.png" style="margin-left:210px; top:295px;" />
               </div>
			   <div id="m2riser2tom2risermovieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="m2riser2tom2riservideo(this)" src="img/play.png" style="margin-left:210px; top:295px;" />
               </div>
               <p id="m2xriserinputpar3" class="inptlist">M2X Riser</p>
               <div id="m2xriser3movieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="m2riservideo(this)" src="img/play.png" style="margin-left:210px; top:295px;"/>
               </div>
               <div id="m2xriser3toclickrisermovieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="m2riserstoclickriser2video(this)" src="img/play.png" style="margin-left:210px; top:295px;" />
               </div>
               <div id="m2xrisertodualarmmovieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="m2xrisertodualarmvideo(this)" src="img/play.png" style="margin-left:210px; top:295px;" />
               </div>
			   <div id="m2xriser2tom2xrisermovieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="m2riser2tom2riservideo(this)" src="img/play.png" style="margin-left:210px; top:295px;" />
               </div>
               <p id="m2maxriserinputpar3" class="inptlist">M2 Max Riser</p>
               <div id="m2maxriser3movieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="m2riservideo(this)" src="img/play.png" style="margin-left:210px; top:295px;"/>
               </div>
               <div id="m2maxriser3toclickrisermovieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="m2riserstoclickriser2video(this)" src="img/play.png" style="margin-left:210px; top:295px;" />
               </div>
               <div id="m2maxrisertodualarmmovieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="m2maxrisertodualarmvideo(this)" src="img/play.png" style="margin-left:210px; top:295px;" />
               </div>
			   <div id="m2maxriser2tom2xrisermovieicon" class="ihidden3">
                  <img class="movieiconpic" onclick="m2riser2tom2riservideo(this)" src="img/play.png" style="margin-left:210px; top:295px;" />
               </div>
			   
			   <p id="wedgereceiverdirectmount4inputpar" class="inptlist">Wedge Receiver Direct Mount</p>
			   <div id="wedgereceiverdirectmount4tosinglebonemovieicon" class="ihidden4">
                  <img class="movieiconpic" onclick=" wedgereceiverdirectmount4tosinglebonevideo(this)" src="img/play.png" style="margin-left:210px; top:325px;" />
               </div>
			   
			   <p id="head4inputpar" class="inptlist">Lift and Lock Head</p>
               <div id="head4movieicon" class="ihidden4">		
                  <img class="movieiconpic" onclick="singlebone3tohead4video(this)" src="img/play.png" style="margin-left:210px; top:325px;"/>
               </div>
               <!--<p id="lockableinputpar" class="inptlist">Lockable Wedge Receiver</p>
               <p id="rotaryinputpar" class="inptlist">Rotary Wedge Receiver</p>-->
               <img style="width:22px; position:absolute; margin-left:275px; top:50%; margin-top:-77.5px;" src="powerchair renderings/good renderings/photoshopped/list pics/your-selections-independent-living-wheelchairs.png" />
            </div>
         </div>
	  
	  <!-- Input frame ends here -->
	  
      <div class="helpbubble" id="helpbubble1" style="margin-left:-600px; margin-top:400px;">
         <img style="width:350px; position:absolute;" src="menu-lines-for-bys-left.png" />
         <p class="helppar">Move your mouse here to see what you have selected so far.</p>
         <p onclick="ok(this)" class="helpok">OK</p>
      </div>
      <div class="helpbubble" id="helpbubble2" style="margin-left:180px; margin-top:250px;">
         <img style="width:350px; position:absolute;" src="menu-lines-for-bys.png" />
         <p class="helppar" style="margin-right:5px;">Choose one of these options by clicking on it. Exit this pop-up by clicking "OK".</p>
         <p onclick="ok(this)" class="helpok">OK</p>
      </div>
      <div class="helpbubble" id="helpbubble3" style="margin-left:-670px; margin-top:725px;">
         <img style="width:350px; position:absolute;" src="menu-lines-for-bys.png" />
         <p class="helppar">Click on the camera icons to see more assembly videos of your arm segments.</p>
         <p onclick="ok(this)" class="helpok">OK</p>
      </div>
      <div class="helpbubble" id="helpbubble4" style="margin-left:183px; margin-top:500px;">
         <img style="width:350px; position:absolute;" src="menu-lines-for-bys-bottom.png" />
         <p class="helpparbottom">If you want to undo a selection or start over, your navigation buttons are here.</p>
         <p onclick="ok(this)" class="helpokbottom">OK</p>
      </div>
      <div class="helpbubble" id="helpbubble5" style="margin-left:175px; margin-top:550px; ">
         <img style="width:350px; position:absolute;" src="menu-lines-for-bys.png" />
         <p class="helppar">Lastly, here is a list of everything you selected with applicable part numbers.</p>
         <p onclick="ok(this)" class="helpok">OK</p>
      </div>
	  <!--<div class="helpbubble" id="helpbubble6" style="margin-left:175px; margin-top:370px; ">
         <img style="width:350px; position:absolute;" src="menu-lines-for-bys.png" />
         <p class="helppar">You have saved your custom arm. Go to build your system page to try it out.</p>
         <p onclick="ok(this)" class="helpok">OK</p>
      </div>-->
      
   </div>
   <!-- Video links for arm customization-->
   <div class="videobox" id="bonetobone">
      <video style="height:100%; width:100%" frameborder="0" controls >
         <source src="videos/001.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="bonetoclickriser">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/002.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="bonetom2riser">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/003.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="bonetom2bone">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/003.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="clickrisertobone">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/006M.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="singlebonetoclickriser">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/006.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="bonetodualarm1">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/024.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="boneto90degreeadapter1">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/023.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="dualarm1toinchrisers">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/031.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="singlebonetom2risers">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/007.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
    <div class="videobox" id="m2riserstosinglebone">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/007M.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="clickrisertom2riser">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/010.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="bonetohead">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/016.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="ninetydegree1todualarm2">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/028.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="liftshafttodualarm">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/035.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="singlebonetohead2">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/017.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="90degreeadapter1tosinglebone">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/021.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="dualarm1toclickriser">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/033.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="liftshafttobone">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/020.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="invertedheadpost1tosinglebone">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/037.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="dualarm1tosinglebone">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/022.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="clickrisertohead2">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/018.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="liftshaftto90degreeadapter">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/027.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="90degreeadapter1towedgereceiver">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/042.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="singlebonetoliftshaft">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/009.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="oneinchtom2risers">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/015.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="bonetoinvertedheadpost">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/101-105-046.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="bonetowedgereceiverdirectmount">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/041.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="dualarm1tom2risers">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/034.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="wedgereceiverdirectmount3tosinglebone">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/043.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="oneinchtosinglebone">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/014.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="threeinchtosinglebone">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/014.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="oneinchtohead">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/008.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="bonetooneinchriser">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/013.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="bonetothreeinchriser">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/013.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="m2riserstohead2">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/019.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="m2risertoclickriser">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/010.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="m2risertobone">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/003.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="m2risertom2riser">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/011.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="m2bonetom2riser">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/012.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="m2bonetobone">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/004.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="invertedheadposttohead2">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/105-301-040.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div class="videobox" id="singlebonetosinglebone">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/005.mp4" type="video/mp4"></source>
      </video>
      <img onclick="backdrop(this)" src="what's new page/exit-icon.jpg" class="exiticon" />
   </div>
   <div id="specificationsscroll" class="footer" style="top:1000px;">Ideas for Independent Living 2014</div>
</div>
</div>
<div id="languagebackdrop" style="display:none; height:100%; width:100%; position:fixed; background-color:#FFF;  z-index:99; top:0px; left:0px; opacity:0.75;"></div>
<div  id="chooselanguage" style="top:50%; margin-top:-150px; position:fixed; height:300px; width:500px; border-style:solid; border-width:thin;" >
   <p id="chooselanguagepar" style=" position:absolute; font-family:'Roboto', 'sans-serif'; font-size:36px; text-align:center; margin-top:50px; width:400px; margin-left:50px; font-weight:300;">First time using our Virtual Tools? <br />Let us show you around.</p>
   <p id="chooselanguagepar2" style="display:none; position:absolute; font-family:'Roboto', 'sans-serif'; font-size:36px; text-align:center; margin-top:50px; width:400px; margin-left:50px; font-weight:300;">Would you like us to continue helping you build your system?</p>
   <div id="english" onclick="english(this)" class="alertbox" style="margin-left:30px;">OK</div>
   <div id="french" onclick="french(this)" class="alertbox" style="margin-left:270px;">No, Thanks</div>
</div>
<div id="quotebackground" onclick="quotebackground(this)" style="height:100%; width:100%; position:fixed; background-color:#FFF; opacity:0.5; z-index:99; display:none; top:0px; left:0px;"></div>
<div id="quoterequest" style="display:none; z-index:100; position:fixed; left:50%; margin-left:-400px; height:80%; top:10%; width:800px; background-color:#F5F5F5; border-style:solid; border-width:thin; overflow-y:auto; overflow-x:hidden;">
   <div style="position:absolute; margin-left:20px; margin-top:30px;">
      <p style="font-size:48px">Quote Request</p>
      <p style="margin-top:-15px; font-size:36px;">Ideas for Independent Living</p>
      <p style="margin-top:-10px;">16 Malley Road<br />Scarborough, Ontario<br />M1L 2E2<br />(416)646-4361</p>
   </div>
   <form method="post" action="/thank-you.php" name="form1">
      <input type="hidden" name="redirect" value="thank-you.php" />
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
                  <option value="--">--</option>
                  <option value="Single Bone">Single Bone</option>
                  <option value="Lift Shaft">Lift Shaft</option>
                  <option value="Click Riser">Click Riser</option>
                  <option value="M2 Riser">M2 Riser</option>
                  <option value="M2X Riser">M2X Riser</option>
                  <option value="M2 Max Riser">M2 Max Riser</option>
                  <option value="Lift and Lock Head">Lift and Lock Head</option>
                  <option value="Lift and Lock Tail">Lift and Lock Tail</option>
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
                  <option value="--">--</option>
                  <option value="Single Bone">Single Bone</option>
                  <option value="Lift Shaft">Lift Shaft</option>
                  <option value="Click Riser">Click Riser</option>
                  <option value="M2 Riser">M2 Riser</option>
                  <option value="M2X Riser">M2X Riser</option>
                  <option value="M2 Max Riser">M2 Max Riser</option>
                  <option value="Lift and Lock Head">Lift and Lock Head</option>
                  <option value="Lift and Lock Tail">Lift and Lock Tail</option>
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
                  <option value="--">--</option>
                  <option value="Single Bone">Single Bone</option>
                  <option value="Lift Shaft">Lift Shaft</option>
                  <option value="Click Riser">Click Riser</option>
                  <option value="M2 Riser">M2 Riser</option>
                  <option value="M2X Riser">M2X Riser</option>
                  <option value="M2 Max Riser">M2 Max Riser</option>
                  <option value="Lift and Lock Head">Lift and Lock Head</option>
                  <option value="Lift and Lock Tail">Lift and Lock Tail</option>
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
                  <option value="--">--</option>
                  <option value="Single Bone">Single Bone</option>
                  <option value="Lift Shaft">Lift Shaft</option>
                  <option value="Click Riser">Click Riser</option>
                  <option value="M2 Riser">M2 Riser</option>
                  <option value="M2X Riser">M2X Riser</option>
                  <option value="M2 Max Riser">M2 Max Riser</option>
                  <option value="Lift and Lock Head">Lift and Lock Head</option>
                  <option value="Lift and Lock Tail">Lift and Lock Tail</option>
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
                  <option value="--">--</option>
                  <option value="Single Bone">Single Bone</option>
                  <option value="Lift Shaft">Lift Shaft</option>
                  <option value="Click Riser">Click Riser</option>
                  <option value="M2 Riser">M2 Riser</option>
                  <option value="M2X Riser">M2X Riser</option>
                  <option value="M2 Max Riser">M2 Max Riser</option>
                  <option value="Lift and Lock Head">Lift and Lock Head</option>
                  <option value="Lift and Lock Tail">Lift and Lock Tail</option>
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
                  <option value="--">--</option>
                  <option value="Single Bone">Single Bone</option>
                  <option value="Lift Shaft">Lift Shaft</option>
                  <option value="Click Riser">Click Riser</option>
                  <option value="M2 Riser">M2 Riser</option>
                  <option value="M2X Riser">M2X Riser</option>
                  <option value="M2 Max Riser">M2 Max Riser</option>
                  <option value="Lift and Lock Head">Lift and Lock Head</option>
                  <option value="Lift and Lock Tail">Lift and Lock Tail</option>
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
                  <option value="--">--</option>
                  <option value="Single Bone">Single Bone</option>
                  <option value="Lift Shaft">Lift Shaft</option>
                  <option value="Click Riser">Click Riser</option>
                  <option value="M2 Riser">M2 Riser</option>
                  <option value="M2X Riser">M2X Riser</option>
                  <option value="M2 Max Riser">M2 Max Riser</option>
                  <option value="Lift and Lock Head">Lift and Lock Head</option>
                  <option value="Lift and Lock Tail">Lift and Lock Tail</option>
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
                  <option value="--">--</option>
                  <option value="Single Bone">Single Bone</option>
                  <option value="Lift Shaft">Lift Shaft</option>
                  <option value="Click Riser">Click Riser</option>
                  <option value="M2 Riser">M2 Riser</option>
                  <option value="M2X Riser">M2X Riser</option>
                  <option value="M2 Max Riser">M2 Max Riser</option>
                  <option value="Lift and Lock Head">Lift and Lock Head</option>
                  <option value="Lift and Lock Tail">Lift and Lock Tail</option>
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
                  <option value="--">--</option>
                  <option value="Single Bone">Single Bone</option>
                  <option value="Lift Shaft">Lift Shaft</option>
                  <option value="Click Riser">Click Riser</option>
                  <option value="M2 Riser">M2 Riser</option>
                  <option value="M2X Riser">M2X Riser</option>
                  <option value="M2 Max Riser">M2 Max Riser</option>
                  <option value="Lift and Lock Head">Lift and Lock Head</option>
                  <option value="Lift and Lock Tail">Lift and Lock Tail</option>
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
                  <option value="--">--</option>
                  <option value="Single Bone">Single Bone</option>
                  <option value="Lift Shaft">Lift Shaft</option>
                  <option value="Click Riser">Click Riser</option>
                  <option value="M2 Riser">M2 Riser</option>
                  <option value="M2X Riser">M2X Riser</option>
                  <option value="M2 Max Riser">M2 Max Riser</option>
                  <option value="Lift and Lock Head">Lift and Lock Head</option>
                  <option value="Lift and Lock Tail">Lift and Lock Tail</option>
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
   </form>
</div>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>