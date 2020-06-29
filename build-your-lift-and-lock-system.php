<?php
   include './Templates/PHP/header.php'
   ?>
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
   
   div.mainoptions
   {
	   position: absolute; 
	   width: 180px; 
	   left:50%; 
	   margin-left:-90px; 
	   word-wrap:break-word; 
	   text-align:center;
   }
   
   div.armquestions
   {
	   display:none; 
	   position: absolute;
	   left:50%;
	   word-wrap:break-word; 
	   text-align:center; 
	   cursor:auto;
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
   .ihidden5
   {
   display:none;
   }
   .ihidden6
   {
   display:none;
   }
   .ihidden7
   {
   display:none;
   }
   .ihidden8
   {
   display:none;
   }
   .unhidden
   {
   display:inline-block;
   }
   .movieiconpic{
   cursor:pointer;
   height:30px;
   z-index:5;
   position:absolute;
   }
   
   img.exiticon
   {
   position:absolute; 
   top:9px; 
   right:9px; 
   height:25px; 
   cursor:pointer;
   }
   #backdrop{
   z-index:1;
   }
   
  .videobox{
   display:none;
   padding:10px;
   background-color:#FFF;
   position:fixed;
   left:50%;
   margin-left:-320px;
   z-index:1000;
   top:50%;
   height: 300px;
   width: 550px;
   margin-top:-180px;
   transform-origin:center;
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
   margin-left:-50px;
   overflow:hidden;
   }
</style>
<style type="text/css">
   .refbar{
   position:absolute;
   top:10px;
   height:70px;
   left:50%;
   margin-left:75px;
   overflow:hidden;
   }
</style>
<style type="text/css">
   .inptlist{
   display:none;
   margin-left:28px;
   overflow:hidden;
   width:230px;
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
</style>
<style>
   @media all and (max-width: 1400px){
   #frame{
   top:192px;
   margin-left:-597px;
   }
   #framepic{
   width:1208px;	
   }
   #overall{
   margin-top:200px;
   }
   @-moz-document url-prefix(){
   #frame{
   top:192px;
   }
   .helpbubble{
   z-index:26;
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
   #framepic{
   width:1209px;	
   }
   #overall{
   margin-top:200px;
   }
   .helpbubble{
   z-index:26;
   }
   #helpbubblebackground{
   z-index:25;
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
   }
   }
</style>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->
<script>
function backdrop(x){
	   console.log("in backdrop");
	$(".videobox").hide()
   	$("#backdrop").hide()
   	$("#helpbubblebackground").hide()
   }

</script>

<script>
   $("#vertical4").click(function(){
   	$("#verticalbar4pic").show().addClass("chosen")
   })
   $("#vertical6").click(function(){
   	$("#verticalbar6pic").css("display","none").addClass("chosen")
   })
   $("#vertical12").click(function(){
   	$("#verticalbar12pic").css("display","none").addClass("chosen")
   })
   $("#verticalextension8").click(function(){
   	$("#verticalextension8pic").show().addClass("chosen")
   })
</script>
<script>
   function vertical4(x){
   	$("#verticalbar4pic").fadeIn(2000).addClass("chosen")
	
	if($("#manualchair").hasClass("chosen"))
	{
			if($("#manualchair").hasClass("chosen") && $("#directmountpic").hasClass("chosen"))
			{
				if($("#directmountpic").hasClass("chosen"))
					{
						if($("#ninetydegreebracket").hasClass("chosen"))
						{
							$("#fourinchtodirectmountmovieicon").css({"display":"block"})
							$("#fourinchtodirectmountmovieiconimg").css({"top":"297px"}).fadeIn(300)
							$("#vertical4inputpar").css({"margin-top":"40px"}).show()
						}
						else
						{
							$("#fourinchtodirectmountmovieicon").fadeIn(300)
						}
					
					}
				
			}
			
			if($("#manualchair").hasClass("chosen") && $("#directmountpic").hasClass("chosen") || $("#serdirectmountpic").hasClass("chosen") || $("#vertserdirectmountpic").hasClass("chosen"))
			{
				if($("#verticalextension8pic").hasClass("chosen"))
				{
					$("#fourinchtoeightinchmovieicon").fadeIn(300)	
				}
			}
			
			if($("#serdirectmountpic").hasClass("chosen"))
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#fourinchtoserdirectmountmovieicon").css({"display":"block"})
					$("#fourinchtoserdirectmountmovieiconimg").css({"top":"298px"}).fadeIn(300)
					$("#vertical4inputpar").css({"margin-top":"40px"}).show()
				}
				else
				{
					$("#fourinchtoserdirectmountmovieicon").fadeIn(300)
				}
				
			}
			if($("#vertserdirectmountpic").hasClass("chosen"))
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#fourinchtovertserdirectmountmovieicon").css({"display":"block"})
					$("#fourinchtovertserdirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
					$("#vertical4inputpar").css({"margin-top":"40px"}).show()
				}
				else
				{
				$("#fourinchtovertserdirectmountmovieicon").fadeIn(300)	
				}
			}
			
			if($("#fullringbracketmanual").hasClass("chosen") || $("#zeroclearancebracketmanual").hasClass("chosen"))
			{
				if($("#telescopicBlockpic").hasClass("chosen"))
				{
					if($("#14socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar4to14socketbarmovieicon").css({"display":"block"})
						$("#verticalbar4to14socketbarmovieiconimg").css({"top":"330px"}).fadeIn(200)
						$("#vertical4inputpar").css({"margin-top":"43px"}).show()
					}
					else if($("#22socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar4to22socketbarmovieicon").css({"display":"block"})
						$("#verticalbar4to22socketbarmovieiconimg").css({"top":"330px"})
						$("#vertical4inputpar").css({"margin-top":"43px"}).show()
					}
					else if($("#sersocketbar14pic").hasClass("chosen"))
					{
						$("#verticalbar4tosersocketbar14movieicon").css({"display":"block"})
						$("#verticalbar4tosersocketbar14movieiconimg").css({"top":"330px"})
						$("#vertical4inputpar").css({"margin-top":"43px"}).show()
					}

				}
				else
				{
					if($("#14socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar4to14socketbarmovieicon").fadeIn(300)	
					}
					else if($("#22socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar4to22socketbarmovieicon").fadeIn(300)	
					}
					else if($("#sersocketbar14pic").hasClass("chosen"))
					{
						$("#verticalbar4tosersocketbar14movieicon").fadeIn(300)	
					}
				}
			}
			
			if($("#roundtube").hasClass("chosen"))
			{
				if($("#directmounthorizontal").hasClass("chosen"))
				{
					$("#fourinchtodirectmounthorizontalmovieicon").fadeIn(300)
					$("#vertical4inputpar").css({"margin-top":"0px"}).show()
				}
			}
			
	}
	
	else if($("#powerchair").hasClass("chosen"))
	{
			if($("#powerchair").hasClass("chosen") && $("#directmountpic").hasClass("chosen"))
			{
				if($("#directmountpic").hasClass("chosen"))
					{
						if($("#ninetydegreebracket").hasClass("chosen"))
						{
							$("#fourinchtodirectmountmovieicon").css({"display":"block"})
							$("#fourinchtodirectmountmovieiconimg").css({"top":"297px"}).fadeIn(300)
							$("#vertical4inputpar").css({"margin-top":"40px"}).show()
						}
						else
						{
							$("#fourinchtodirectmountmovieicon").fadeIn(300)
						}
					
					}
				
			}
			
			if($("#powerchair").hasClass("chosen") && $("#directmountpic").hasClass("chosen") || $("#serdirectmountpic").hasClass("chosen") || $("#vertserdirectmountpic").hasClass("chosen"))
			{
				if($("#verticalextension8pic").hasClass("chosen"))
				{
					$("#fourinchtoeightinchmovieicon").fadeIn(300)	
				}
			}
			
			if($("#serdirectmountpic").hasClass("chosen"))
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#fourinchtoserdirectmountmovieicon").css({"display":"block"})
					$("#fourinchtoserdirectmountmovieiconimg").css({"top":"298px"}).fadeIn(300)
					$("#vertical4inputpar").css({"margin-top":"40px"}).show()
				}
				else
				{
					$("#fourinchtoserdirectmountmovieicon").fadeIn(300)
				}
				
			}
			if($("#vertserdirectmountpic").hasClass("chosen"))
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#fourinchtovertserdirectmountmovieicon").css({"display":"block"})
					$("#fourinchtovertserdirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
					$("#vertical4inputpar").css({"margin-top":"40px"}).show()
				}
				else
				{
				$("#fourinchtovertserdirectmountmovieicon").fadeIn(300)	
				}
			}
			
			if($("#fullringbracketmanual").hasClass("chosen") || $("#zeroclearancebracketmanual").hasClass("chosen") || $("#ttrack").hasClass("chosen") || $("#doublettrack").hasClass("chosen"))
			{
				if($("#telescopicBlockpic").hasClass("chosen"))
				{
					if($("#14socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar4to14socketbarmovieicon").css({"display":"block"})
						$("#verticalbar4to14socketbarmovieiconimg").css({"top":"330px"}).fadeIn(200)
						$("#vertical4inputpar").css({"margin-top":"43px"}).show()
					}
					else if($("#22socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar4to22socketbarmovieicon").css({"display":"block"})
						$("#verticalbar4to22socketbarmovieiconimg").css({"top":"330px"})
						$("#vertical4inputpar").css({"margin-top":"43px"}).show()
					}
					else if($("#sersocketbar14pic").hasClass("chosen"))
					{
						$("#verticalbar4tosersocketbar14movieicon").css({"display":"block"})
						$("#verticalbar4tosersocketbar14movieiconimg").css({"top":"330px"})
						$("#vertical4inputpar").css({"margin-top":"43px"}).show()
					}

				}
				else
				{
					if($("#14socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar4to14socketbarmovieicon").fadeIn(300)	
					}
					else if($("#22socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar4to22socketbarmovieicon").fadeIn(300)	
					}
					else if($("#sersocketbar14pic").hasClass("chosen"))
					{
						$("#verticalbar4tosersocketbar14movieicon").fadeIn(300)	
					}
				}
			}
			
			if($("#roundtube").hasClass("chosen"))
			{
				if($("#directmounthorizontal").hasClass("chosen"))
				{
					$("#fourinchtodirectmounthorizontalmovieicon").fadeIn(300)
					$("#vertical4inputpar").css({"margin-top":"0px"}).show()
				}
			}
			
			
			if($("#ttrack").hasClass("chosen") || $("#doublettrack").hasClass("chosen"))
			{
				if($("#ttrackdirectpic").hasClass("chosen") || $("#dttrackdirectpic").hasClass("chosen"))
				{
					$("#verticalbar4tottrackdirectmovieicon").fadeIn(300)
					$("#vertical4inputpar").css({"margin-top":"0px"}).show()
				}
			}
			
	}
	
	else if($("#powerchair").hasClass("chosen"))
	{
		if($("#14socketbarpic").hasClass("chosen") && $("#verticalbar4pic").hasClass("chosen"))
					{
						$("#verticalbar4to14socketbarmovieicon").fadeIn(300)	
					}
					else if($("#22socketbarpic").hasClass("chosen") && $("#verticalbar4pic").hasClass("chosen"))
					{
						$("#verticalbar4to22socketbarmovieicon").fadeIn(300)	
					}
					else if($("#sersocketbar14pic").hasClass("chosen") && $("#verticalbar4pic").hasClass("chosen"))
					{
						$("#verticalbar4tosersocketbar14movieicon").fadeIn(300)	
					}
	}
	 
	
	else if($("#deskclamp").hasClass("chosen"))
	{
	   if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
		{
			if($("#verticalextension8pic").hasClass("chosen") && $("#verticalbar4pic").hasClass("chosen"))
			{
				$("#fourinchtoeightinchmovieicon").css({"display":"block"})
				$("#fourinchtoeightinchmovieiconimg").css({"top":"237px"}).fadeIn(300)	
			}
			else if($("#verticalextension16pic").hasClass("chosen") && $("#verticalbar4pic").hasClass("chosen"))
			{
				$("#fourinchtosixteeninchmovieicon").css({"display":"block"})
				$("#fourinchtosixteeninchmovieiconimg").css({"top":"237px"}).fadeIn(300)	
			}
		}
		else
		{
		if($("#verticalbar4pic").hasClass("chosen"))
			{
				$("#fourinchtotableclampmovieicon").fadeIn(300)	
			}
			
		}
	}
	
	else if($("#extrollingstand").hasClass("chosen"))
	{
			$("#fourinchtostandmovieicon").fadeIn(300)	
	}
   	$("#vertical4inputpar").show()
   }
   
   function v4tov8extension()
   {
	if($("#14socketbarpic").hasClass("chosen"))
   {
	  if($("#verticalextension8pic").hasClass("chosen") && $("#verticalbar4pic").hasClass("chosen"))
	{
		if($("#telescopicBlockpic").hasClass("chosen"))
		{
			$("#fourinchtoeightinchviasocketbarsmovieicon").css({"display":"block"})
			$("#fourinchtoeightinchviasocketbarsmovieiconimg").css({"top":"360px"}).fadeIn(200)
			$("#vertical4inputpar").css({"margin-top":""}).show()
		}
		else
		{
			$("#fourinchtoeightinchviasocketbarsmovieicon").fadeIn(300)
		}
			$("#fourinchtodirectmountmovieicon").fadeOut(300)
			$("#fourinchtoeightinchmovieicon").fadeOut(300)
			$("#verticalbar4to14socketbarmovieicon").fadeOut(300)
	}
   }
   else if($("#22socketbarpic").hasClass("chosen"))
   {
	  if($("#verticalextension8pic").hasClass("chosen") && $("#verticalbar4pic").hasClass("chosen"))
	{
		if($("#telescopicBlockpic").hasClass("chosen"))
		{
			$("#fourinchtoeightinchvia22socketbarmovieicon").css({"display":"block"})
			$("#fourinchtoeightinchvia22socketbarmovieiconimg").css({"top":"360px"}).fadeIn(200)
			$("#vertical4inputpar").css({"margin-top":""}).show()
		}
		else
		{
			$("#fourinchtoeightinchvia22socketbarmovieicon").fadeIn(300)
		}
		
		$("#fourinchtodirectmountmovieicon").fadeOut(300)
		$("#fourinchtoeightinchmovieicon").fadeOut(300)
		$("#verticalbar4to22socketbarmovieicon").fadeOut(300)		
	}
   }
   else if($("#sersocketbar14pic").hasClass("chosen"))
   {
	  if($("#verticalextension8pic").hasClass("chosen") && $("#verticalbar4pic").hasClass("chosen"))
	{
		if($("#telescopicBlockpic").hasClass("chosen"))
		{
			$("#fourinchtoeightinchviasersocketbar14movieicon").css({"display":"block"})
			$("#fourinchtoeightinchviasersocketbar14movieiconimg").css({"top":"360px"}).fadeIn(200)
			$("#vertical4inputpar").css({"margin-top":""}).show()
		}
		else
		{
			$("#fourinchtoeightinchviasersocketbar14movieicon").fadeIn(300)
		}
		$("#fourinchtodirectmountmovieicon").fadeOut(300)
		$("#fourinchtoeightinchmovieicon").fadeOut(300)
		$("#verticalbar4tosersocketbar14movieicon").fadeOut(300)		
	}
   }
   
   else if($("#manualchair").hasClass("chosen") && $("#serdirectmountpic").hasClass("chosen"))
   {
	   if($("#verticalbar4pic").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
	   {
		   if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#fourinchtoeightinchmovieicon").css({"display": "block"})
					$("#fourinchtoeightinchmovieiconimg").css({"top": "328px"}).fadeIn(300)
					$("#vertical4inputpar").css({"margin-top":"15px"}).show()
				}
				else
				{
					$("#fourinchtoeightinchmovieicon").css({"display": "block"})
					$("#fourinchtoeightinchmovieiconimg").css({"top": "297px"}).fadeIn(300)
				}
			$("#fourinchtodirectmountmovieicon").fadeOut(300)
			$("#fourinchtosixteeninchmovieiconimg").fadeOut(300)
			$("#fourinchtoserdirectmountmovieicon").fadeOut(300)
			$("#verticalbar4to14socketbarmovieicon").fadeOut(300)
	   }
	  
   }
   
   else if($("#extrollingstand").hasClass("chosen"))
   {
	   if($("#verticalextension8pic").hasClass("chosen") && $("#verticalbar4pic").hasClass("chosen"))
	   {
			  $("#fourinchtoeightinchmovieicon").css({"display": "block"})
			  $("#fourinchtoeightinchmovieiconimg").css({"top": "237px"}).fadeIn(300)
			  $("#fourinchtostandmovieicon").fadeOut(300)
	   }
	  
   }
   
   else if($("#verticalbar4pic").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen"))
		   {
			   $("#fourinchtoeightinchmovieicon").css({"display": "block"})
				$("#fourinchtoeightinchmovieiconimg").css({"top": "237px"}).fadeIn(300)
				$("#fourinchtodirectmountmovieicon").fadeOut(300)
				$("#fourinchtosixteeninchmovieiconimg").fadeOut(300)
				$("#verticalbar4to14socketbarmovieicon").fadeOut(300)
				$("#fourinchtoserdirectmountmovieicon").fadeOut(300)
				$("#fourinchtostandmovieicon").fadeOut(300)
				$("#fourinchtovertserdirectmountmovieicon").fadeOut(300)
				$("#fourinchtodirectmounthorizontalmovieicon").fadeOut(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#fourinchtoeightinchmovieicon").css({"display": "block"})
					$("#fourinchtoeightinchmovieiconimg").css({"top": "328px"}).fadeIn(300)
					$("#vertical4inputpar").css({"margin-top":"15px"}).show()
				}
				else
				{
					$("#fourinchtoeightinchmovieicon").css({"display": "block"})
					$("#fourinchtoeightinchmovieiconimg").css({"top": "297px"}).fadeIn(300)
				}
				
				$("#fourinchtodirectmountmovieicon").fadeOut(300)
				$("#fourinchtosixteeninchmovieiconimg").fadeOut(300)
				$("#verticalbar4to14socketbarmovieicon").fadeOut(300)
				$("#fourinchtoserdirectmountmovieicon").fadeOut(300)
				$("#fourinchtostandmovieicon").fadeOut(300)
				$("#fourinchtovertserdirectmountmovieicon").fadeOut(300)
				$("#fourinchtodirectmounthorizontalmovieicon").fadeOut(300)
				$("#verticalbar4tottrackdirectmovieicon").fadeOut(300)
		   }
			
	   }
   
	
	modelManager.addModel("3005");
   }
   
   function v6tov8extension()
   {
	if($("#14socketbarpic").hasClass("chosen"))
   {
	 
	  if($("#verticalextension8pic").hasClass("chosen") && $("#verticalbar6pic").hasClass("chosen"))
	{
		if($("#telescopicBlockpic").hasClass("chosen"))
		{
			$("#sixinchtoeightinchviasocketbarsmovieicon").css({"display": "block"})
			$("#sixinchtoeightinchviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
			$("#vertical6inputpar").css({"margin-top":""}).show()
		}
		else
		{
			$("#sixinchtoeightinchviasocketbarsmovieicon").fadeIn(300)
		}
		$("#sixinchtoeightinchmovieicon").fadeOut(300)
		$("#sixinchtodirectmountmovieicon").fadeOut(300)
		$("#verticalbar6to14socketbarmovieicon").fadeOut(300)
	} 
   }
   else if($("#22socketbarpic").hasClass("chosen"))
   {
	  if($("#verticalextension8pic").hasClass("chosen") && $("#verticalbar6pic").hasClass("chosen"))
	{
		if($("#telescopicBlockpic").hasClass("chosen"))
		{
			$("#sixinchtoeightinchvia22socketbarmovieicon").css({"display": "block"})
			$("#sixinchtoeightinchvia22socketbarmovieiconimg").css({"top": "360px"}).fadeIn(300)
			$("#vertical6inputpar").css({"margin-top":""}).show()
		}
		else
		{
			$("#sixinchtoeightinchvia22socketbarmovieicon").fadeIn(300)			
		}
		$("#sixinchtoeightinchmovieicon").fadeOut(300)
		$("#sixinchtodirectmountmovieicon").fadeOut(300)
		$("#verticalbar6to22socketbarmovieicon").fadeOut(300)
	} 
   }
   else if($("#sersocketbar14pic").hasClass("chosen"))
   {
	  if($("#verticalextension8pic").hasClass("chosen") && $("#verticalbar6pic").hasClass("chosen"))
	{
		if($("#telescopicBlockpic").hasClass("chosen"))
		{
			$("#sixinchtoeightinchviasersocketbar14movieicon").css({"display": "block"})
			$("#sixinchtoeightinchviasersocketbar14movieiconimg").css({"top": "360px"}).fadeIn(300)
			$("#vertical6inputpar").css({"margin-top":""}).show()
			
		}
		else
		{
			$("#sixinchtoeightinchviasersocketbar14movieicon").fadeIn(300)
		}
		$("#sixinchtoeightinchmovieicon").fadeOut(300)
		$("#sixinchtodirectmountmovieicon").fadeOut(300)
		$("#verticalbar6tosersocketbar14movieicon").fadeOut(300)
	} 
   }
	   
	else if($("#manualchair").hasClass("chosen") && $("#serdirectmountpic").hasClass("chosen"))
	   {
		   if($("#verticalbar6pic").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
			   {
				   if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#sixinchtoeightinchmovieicon").css({"display": "block"})
					$("#sixinchtoeightinchmovieiconimg").css({"top": "328px"}).fadeIn(300)
					$("#vertical6inputpar").css({"margin-top":"15px"}).show()
				}
				else
				{
					$("#sixinchtoeightinchmovieicon").css({"display": "block"})
					$("#sixinchtoeightinchmovieiconimg").css({"top": "297px"}).fadeIn(300)
				}
	
				$("#sixinchtodirectmountmovieicon").fadeOut(300)
				$("#sixinchtoserdirectmountmovieicon").fadeOut(300)
				$("#sixinchtosixteeninchmovieiconimg").fadeOut(300)
				$("#verticalbar6to14socketbarmovieicon").fadeOut(300) 
			   }
	   }
   else if($("#extrollingstand").hasClass("chosen"))
   {
	   if( $("#verticalextension8pic").hasClass("chosen") && $("#verticalbar6pic").hasClass("chosen"))
	   {
		  $("#sixinchtoeightinchmovieicon").css({"display": "block"})
		  $("#sixinchtoeightinchmovieiconimg").css({"top": "237px"}).fadeIn(300)
		  $("#sixinchtostandmovieicon").fadeOut(300) 
	   }
	  
   }
   
   else if($("#verticalbar6pic").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen"))
		   {
			   $("#sixinchtoeightinchmovieicon").css({"display": "block"})
				$("#sixinchtoeightinchmovieiconimg").css({"top": "237px"}).fadeIn(300)
				$("#sixinchtodirectmountmovieicon").fadeOut(300)
				$("#sixinchtosixteeninchmovieiconimg").fadeOut(300)
				$("#sixinchtoserdirectmountmovieicon").fadeOut(300)
				$("#sixinchtovertserdirectmountmovieicon").fadeOut(300)
				$("#sixinchtostandmovieicon").fadeOut(300)
				$("#verticalbar6to14socketbarmovieicon").fadeOut(300)
				$("#sixinchtodirectmounthorizontalmovieicon").fadeOut(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#sixinchtoeightinchmovieicon").css({"display": "block"})
					$("#sixinchtoeightinchmovieiconimg").css({"top": "328px"}).fadeIn(300)
					$("#vertical6inputpar").css({"margin-top":"15px"}).show()
				}
				else
				{
					$("#sixinchtoeightinchmovieicon").css({"display": "block"})
					$("#sixinchtoeightinchmovieiconimg").css({"top": "297px"}).fadeIn(300)
				}
				
				$("#sixinchtodirectmountmovieicon").fadeOut(300)
				$("#sixinchtosixteeninchmovieiconimg").fadeOut(300)
				$("#sixinchtoserdirectmountmovieicon").fadeOut(300)
				$("#sixinchtovertserdirectmountmovieicon").fadeOut(300)
				$("#sixinchtostandmovieicon").fadeOut(300)
				$("#verticalbar6to14socketbarmovieicon").fadeOut(300)
				$("#sixinchtodirectmounthorizontalmovieicon").fadeOut(300)
				$("#verticalbar6tottrackdirectmovieicon").fadeOut(300)
		   }
		   
	   }
	   
   }
   
   function v12tov8extension()
   {
	   if($("#14socketbarpic").hasClass("chosen"))
	{
	  if($("#verticalextension8pic").hasClass("chosen") && $("#verticalbar12pic").hasClass("chosen"))
	{
		if($("#telescopicBlockpic").hasClass("chosen"))
		{
			$("#twelveinchtoeightinchviasocketbarsmovieicon").css({"display": "block"})
			$("#twelveinchtoeightinchviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
			$("#vertical12inputpar").css({"margin-top":""}).show()
		}
		else
		{
			$("#twelveinchtoeightinchviasocketbarsmovieicon").fadeIn(300)
		}
		$("#twelveinchtoeightinchmovieicon").fadeOut(300)
		$("#twelveinchtodirectmountmovieicon").fadeOut(300)
		$("#verticalbar12to14socketbarmovieicon").fadeOut(300)
	}
	}
	else if($("#22socketbarpic").hasClass("chosen"))
	{
	  if($("#verticalextension8pic").hasClass("chosen") && $("#verticalbar12pic").hasClass("chosen"))
	{
		if($("#telescopicBlockpic").hasClass("chosen"))
		{
			$("#twelveinchtoeightinchvia22socketbarmovieicon").css({"display": "block"})
			$("#twelveinchtoeightinchvia22socketbarmovieiconimg").css({"top": "360px"}).fadeIn(300)
			$("#vertical12inputpar").css({"margin-top":""}).show()
		}
		else
		{
			$("#twelveinchtoeightinchvia22socketbarmovieicon").fadeIn(300)
		}
		$("#twelveinchtoeightinchmovieicon").fadeOut(300)
		$("#twelveinchtodirectmountmovieicon").fadeOut(300)
		$("#verticalbar12to22socketbarmovieicon").fadeOut(300)
	}
	}
	else if($("#sersocketbar14pic").hasClass("chosen"))
	{
	  if($("#verticalextension8pic").hasClass("chosen") && $("#verticalbar12pic").hasClass("chosen"))
		{
			if($("#telescopicBlockpic").hasClass("chosen"))
			{
				$("#twelveinchtoeightinchviasersocketbar14movieicon").css({"display": "block"})
				$("#twelveinchtoeightinchviasersocketbar14movieiconimg").css({"top": "360px"}).fadeIn(300)
				$("#vertical12inputpar").css({"margin-top":""}).show()
			}
			else
			{
				$("#twelveinchtoeightinchviasersocketbar14movieicon").fadeIn(300)
			}
			$("#twelveinchtoeightinchmovieicon").fadeOut(300)
			$("#twelveinchtodirectmountmovieicon").fadeOut(300)
			$("#verticalbar12tosersocketbar14movieicon").fadeOut(300)
		}
	}
	
		
	else if($("#manualchair").hasClass("chosen") && $("#serdirectmountpic").hasClass("chosen"))
		{
			if($("#verticalbar12pic").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#twelveinchtoeightinchmovieicon").css({"display": "block"})
					$("#twelveinchtoeightinchmovieiconimg").css({"top": "328px"}).fadeIn(300)
					$("#vertical12inputpar").css({"margin-top":"15px"}).show()
				}
				else
				{
					$("#twelveinchtoeightinchmovieicon").css({"display": "block"})
					$("#twelveinchtoeightinchmovieiconimg").css({"top": "297px"}).fadeIn(300)
				}

				$("#twelveinchtodirectmountmovieicon").fadeOut(300)
				$("#twelveinchtosixteeninchmovieiconimg").fadeOut(300)
				$("#twelveinchtoserdirectmountmovieicon").fadeOut(300)
				$("#verticalbar12to14socketbarmovieicon").fadeOut(300)
			}
		}
	else if($("#extrollingstand").hasClass("chosen"))
   {
	   if($("#verticalextension8pic").hasClass("chosen") && $("#verticalbar12pic").hasClass("chosen"))
	   {
		  $("#twelveinchtoeightinchmovieicon").css({"display": "block"})
		  $("#twelveinchtoeightinchmovieiconimg").css({"top": "237px"}).fadeIn(300)
		  $("#twelveinchtostandmovieicon").fadeOut(300)
	   }
	  
   }
   
   else if($("#verticalbar12pic").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
		{
			if($("#deskclamp").hasClass("chosen"))
			{
				$("#twelveinchtoeightinchmovieicon").css({"display": "block"})
				$("#twelveinchtoeightinchmovieiconimg").css({"top": "237px"}).fadeIn(300)
				$("#twelveinchtodirectmountmovieicon").fadeOut(300)
				$("#twelveinchtosixteeninchmovieiconimg").fadeOut(300)
				$("#twelveinchtoserdirectmountmovieicon").fadeOut(300)
				$("#twelveinchtovertserdirectmountmovieicon").fadeOut(300)
				$("#twelveinchtostandmovieicon").fadeOut(300)
				$("#verticalbar12to14socketbarmovieicon").fadeOut(300)
				$("#twelveinchtodirectmounthorizontalmovieicon").fadeOut(300)
			}
			else
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#twelveinchtoeightinchmovieicon").css({"display": "block"})
					$("#twelveinchtoeightinchmovieiconimg").css({"top": "328px"}).fadeIn(300)
					$("#vertical12inputpar").css({"margin-top":"15px"}).show()
				}
				else
				{
					$("#twelveinchtoeightinchmovieicon").css({"display": "block"})
					$("#twelveinchtoeightinchmovieiconimg").css({"top": "297px"}).fadeIn(300)
				}
				
				$("#twelveinchtodirectmountmovieicon").fadeOut(300)
				$("#twelveinchtosixteeninchmovieiconimg").fadeOut(300)
				$("#twelveinchtoserdirectmountmovieicon").fadeOut(300)
				$("#twelveinchtovertserdirectmountmovieicon").fadeOut(300)
				$("#twelveinchtostandmovieicon").fadeOut(300)
				$("#verticalbar12to14socketbarmovieicon").fadeOut(300)
				$("#twelveinchtodirectmounthorizontalmovieicon").fadeOut(300)
				$("#verticalbar12tottrackdirectmovieicon").fadeOut(300)
			}
			
		}
   }
   
   function v4tov16extension()
   { 
   if($("#14socketbarpic").hasClass("chosen"))
   {
	   if($("#verticalextension16pic").hasClass("chosen") && $("#verticalbar4pic").hasClass("chosen"))
	{
		if($("#telescopicBlockpic").hasClass("chosen"))
			{
				$("#fourinchtosixteeninchviasocketbarsmovieicon").css({"display": "block"})
				$("#fourinchtosixteeninchviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(200)
				$("#vertical4inputpar").css({"margin-top":""}).show()
			}
			else
			{
				$("#fourinchtosixteeninchviasocketbarsmovieicon").fadeIn(300)
			}
		$("#fourinchtodirectmountmovieicon").fadeOut(300)
		$("#fourinchtosixteeninchmovieicon").fadeOut(300)
		$("#verticalbar4to14socketbarmovieicon").fadeOut(300)
	} 
   }
   else if($("#22socketbarpic").hasClass("chosen"))
   {
	   if($("#verticalextension16pic").hasClass("chosen") && $("#verticalbar4pic").hasClass("chosen"))
	{
		if($("#telescopicBlockpic").hasClass("chosen"))
			{
				$("#fourinchtosixteeninchvia22socketbarmovieicon").css({"display": "block"})
				$("#fourinchtosixteeninchvia22socketbarmovieiconimg").css({"top": "360px"}).fadeIn(200)
				$("#vertical4inputpar").css({"margin-top":""}).show()
			}
			else
			{
				$("#fourinchtosixteeninchvia22socketbarmovieicon").fadeIn(300)
			}
		$("#fourinchtodirectmountmovieicon").fadeOut(300)
		$("#fourinchtosixteeninchmovieicon").fadeOut(300)
		$("#verticalbar4to22socketbarmovieicon").fadeOut(300)
	} 
   }
   else if($("#sersocketbar14pic").hasClass("chosen"))
   {
	   if($("#verticalextension16pic").hasClass("chosen") && $("#verticalbar4pic").hasClass("chosen"))
	{
		if($("#telescopicBlockpic").hasClass("chosen"))
			{
				$("#fourinchtosixteeninchviasersocketbar14movieicon").css({"display": "block"})
				$("#fourinchtosixteeninchviasersocketbar14movieiconimg").css({"top": "360px"}).fadeIn(200)
				$("#vertical4inputpar").css({"margin-top":""}).show()
			}
			else
			{
				$("#fourinchtosixteeninchviasersocketbar14movieicon").fadeIn(300)
			}
		$("#fourinchtodirectmountmovieicon").fadeOut(300)
		$("#fourinchtosixteeninchmovieicon").fadeOut(300)
		$("#verticalbar4tosersocketbar14movieicon").fadeOut(300)
	} 
   }
		
	else if($("#manualchair").hasClass("chosen") && $("#serdirectmountpic").hasClass("chosen"))
		{
			if($("#verticalbar4pic").hasClass("chosen") && $("#verticalextension16pic").hasClass("chosen"))
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#fourinchtosixteeninchmovieicon").css({"display": "block"})
					$("#fourinchtosixteeninchmovieiconimg").css({"top": "328px"}).fadeIn(300)
					$("#vertical4inputpar").css({"margin-top":""}).show()
				}
				else
				{
					$("#fourinchtosixteeninchmovieicon").css({"display": "block"})
					$("#fourinchtosixteeninchmovieiconimg").css({"top": "297px"}).fadeIn(300)
				}

				$("#fourinchtodirectmountmovieicon").fadeOut(300)
				$("#fourinchtoeightinchmovieiconimg").fadeOut(300)
				$("#fourinchtoserdirectmountmovieicon").fadeOut(300)
				$("#verticalbar4to14socketbarmovieicon").fadeOut(300)
			}
		}
	else if($("#extrollingstand").hasClass("chosen"))
   {
	   if($("#verticalextension16pic").hasClass("chosen") && $("#verticalbar4pic").hasClass("chosen"))
	   {
		  $("#fourinchtosixteeninchmovieicon").css({"display": "block"})
		  $("#fourinchtosixteeninchmovieiconimg").css({"top": "237px"}).fadeIn(300)
		  $("#fourinchtostandmovieicon").fadeOut(300)
	   }
	  
   }

   else if($("#verticalbar4pic").hasClass("chosen") && $("#verticalextension16pic").hasClass("chosen"))
		{
			if($("#deskclamp").hasClass("chosen"))
			{
				$("#fourinchtosixteeninchmovieicon").css({"display": "block"})
				$("#fourinchtosixteeninchmovieiconimg").css({"top": "237px"}).fadeIn(300)
				$("#fourinchtodirectmountmovieicon").fadeOut(300)
				$("#fourinchtoeightinchmovieiconimg").fadeOut(300)
				$("#fourinchtoserdirectmountmovieicon").fadeOut(300)
				$("#fourinchtostandmovieicon").fadeOut(300)
				$("#fourinchtovertserdirectmountmovieicon").fadeOut(300)
				$("#verticalbar4to14socketbarmovieicon").fadeOut(300)
				$("#fourinchtodirectmounthorizontalmovieicon").fadeOut(300)
			}
			else
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#fourinchtosixteeninchmovieicon").css({"display": "block"})
					$("#fourinchtosixteeninchmovieiconimg").css({"top": "328px"}).fadeIn(300)
					$("#vertical4inputpar").css({"margin-top":"15px"}).show()
				}
				else
				{
					$("#fourinchtosixteeninchmovieicon").css({"display": "block"})
					$("#fourinchtosixteeninchmovieiconimg").css({"top": "297px"}).fadeIn(300)
				}
				
				$("#fourinchtodirectmountmovieicon").fadeOut(300)
				$("#fourinchtoeightinchmovieiconimg").fadeOut(300)
				$("#fourinchtoserdirectmountmovieicon").fadeOut(300)
				$("#fourinchtostandmovieicon").fadeOut(300)
				$("#fourinchtovertserdirectmountmovieicon").fadeOut(300)
				$("#verticalbar4to14socketbarmovieicon").fadeOut(300)
				$("#fourinchtodirectmounthorizontalmovieicon").fadeOut(300)
				$("#verticalbar4tottrackdirectmovieicon").fadeOut(300)
			}
			
		}
   }
   
   function v6tov16extension()
   {
	   if($("#14socketbarpic").hasClass("chosen"))
		{
	  if($("#verticalextension16pic").hasClass("chosen") && $("#verticalbar6pic").hasClass("chosen"))
			{
				if($("#telescopicBlockpic").hasClass("chosen"))
				{
					$("#sixinchtosixteeninchviasocketbarsmovieicon").css({"display": "block"})
					$("#sixinchtosixteeninchviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
					$("#vertical6inputpar").css({"margin-top":""}).show()
				}
			else
			{
				$("#sixinchtosixteeninchviasocketbarsmovieicon").fadeIn(300)
			}
			$("#sixinchtosixteeninchmovieicon").fadeOut(300)
			$("#sixinchtodirectmountmovieicon").fadeOut(300)
			$("#verticalbar6to14socketbarmovieicon").fadeOut(300)
			
			} 
		}
		else if($("#22socketbarpic").hasClass("chosen"))
		{
	  if($("#verticalextension16pic").hasClass("chosen") && $("#verticalbar6pic").hasClass("chosen"))
			{
				if($("#telescopicBlockpic").hasClass("chosen"))
				{
					$("#sixinchtosixteeninchvia22socketbarmovieicon").css({"display": "block"})
					$("#sixinchtosixteeninchvia22socketbarmovieiconimg").css({"top": "360px"}).fadeIn(300)
					$("#vertical6inputpar").css({"margin-top":""}).show()
				}
				else
				{
					$("#sixinchtosixteeninchvia22socketbarmovieicon").fadeIn(300)
				}
			$("#sixinchtosixteeninchmovieicon").fadeOut(300)
			$("#sixinchtodirectmountmovieicon").fadeOut(300)
			$("#verticalbar6to22socketbarmovieicon").fadeOut(300)
			
			} 
		}
		else if($("#sersocketbar14pic").hasClass("chosen"))
		{
	  if($("#verticalextension16pic").hasClass("chosen") && $("#verticalbar6pic").hasClass("chosen"))
			{
				if($("#telescopicBlockpic").hasClass("chosen"))
				{
					$("#sixinchtosixteeninchviasersocketbar14movieicon").css({"display": "block"})
					$("#sixinchtosixteeninchviasersocketbar14movieiconimg").css({"top": "360px"}).fadeIn(300)
					$("#vertical6inputpar").css({"margin-top":""}).show()
					
				}
				else
				{
					$("#sixinchtosixteeninchviasersocketbar14movieicon").fadeIn(300)
				}
			$("#sixinchtosixteeninchmovieicon").fadeOut(300)
			$("#sixinchtodirectmountmovieicon").fadeOut(300)
			$("#verticalbar6tosersocketbar14movieicon").fadeOut(300)
			
			} 
		}
		
		
		else if($("#manualchair").hasClass("chosen") && $("#serdirectmountpic").hasClass("chosen"))
			{
				if($("#verticalbar6pic").hasClass("chosen") && $("#verticalextension16pic").hasClass("chosen"))
				{
					if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#sixinchtosixteeninchmovieicon").css({"display": "block"})
						$("#sixinchtosixteeninchmovieiconimg").css({"top": "328px"}).fadeIn(300)
						$("#vertical6inputpar").css({"margin-top":"15px"}).show()
					}	
				else
					{
						$("#sixinchtosixteeninchmovieicon").css({"display": "block"})
						$("#sixinchtosixteeninchmovieiconimg").css({"top": "297px"}).fadeIn(300)
					}
					
					$("#sixinchtodirectmountmovieicon").fadeOut(300)
					$("#sixinchtoeightinchmovieiconimg").fadeOut(300)
					$("#sixinchtoserdirectmountmovieicon").fadeOut(300)
					$("#verticalbar6to14socketbarmovieicon").fadeOut(300)
				}
				
			}
		else if($("#extrollingstand").hasClass("chosen"))
	   {
		   if($("#verticalextension16pic").hasClass("chosen") && $("#verticalbar6pic").hasClass("chosen"))
		   {
			  $("#sixinchtosixteeninchmovieicon").css({"display": "block"})
			  $("#sixinchtosixteeninchmovieiconimg").css({"top": "237px"}).fadeIn(300)
			  $("#sixinchtostandmovieicon").fadeOut(300)
		   }
		  
	   }
	  
	  else if($("#verticalbar6pic").hasClass("chosen") && $("#verticalextension16pic").hasClass("chosen"))
			{
				if($("#deskclamp").hasClass("chosen"))
				{
					$("#sixinchtosixteeninchmovieicon").css({"display": "block"})
					$("#sixinchtosixteeninchmovieiconimg").css({"top": "237px"}).fadeIn(300)
					$("#sixinchtodirectmountmovieicon").fadeOut(300)
					$("#sixinchtoeightinchmovieiconimg").fadeOut(300)
					$("#sixinchtoserdirectmountmovieicon").fadeOut(300)
					$("#sixinchtostandmovieicon").fadeOut(300)
					$("#sixinchtovertserdirectmountmovieicon").fadeOut(300)
					$("#verticalbar6to14socketbarmovieicon").fadeOut(300)
					$("#sixinchtodirectmounthorizontalmovieicon").fadeOut(300)
				}
				else
				{
					if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#sixinchtosixteeninchmovieicon").css({"display": "block"})
						$("#sixinchtosixteeninchmovieiconimg").css({"top": "328px"}).fadeIn(300)
						$("#vertical6inputpar").css({"margin-top":"15px"}).show()
					}	
				else
					{
						$("#sixinchtosixteeninchmovieicon").css({"display": "block"})
						$("#sixinchtosixteeninchmovieiconimg").css({"top": "297px"}).fadeIn(300)
					}
					
					$("#sixinchtodirectmountmovieicon").fadeOut(300)
					$("#sixinchtoeightinchmovieiconimg").fadeOut(300)
					$("#sixinchtoserdirectmountmovieicon").fadeOut(300)
					$("#sixinchtostandmovieicon").fadeOut(300)
					$("#sixinchtovertserdirectmountmovieicon").fadeOut(300)
					$("#verticalbar6to14socketbarmovieicon").fadeOut(300)
					$("#sixinchtodirectmounthorizontalmovieicon").fadeOut(300)
					$("#verticalbar6tottrackdirectmovieicon").fadeOut(300)
				}
				
			}
   }
   
   function v12tov16extension()
   {
	   if($("#14socketbarpic").hasClass("chosen"))
		{
	  if($("#verticalextension16pic").hasClass("chosen") && $("#verticalbar12pic").hasClass("chosen"))
			{
				if($("#telescopicBlockpic").hasClass("chosen"))
				{
					$("#twelveinchtosixteeninchviasocketbarsmovieicon").css({"display": "block"})
					$("#twelveinchtosixteeninchviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
					$("#vertical12inputpar").css({"margin-top":""}).show()
				}
				else
				{
					$("#twelveinchtosixteeninchviasocketbarsmovieicon").fadeIn(300)
				}
				$("#twelveinchtosixteeninchmovieicon").fadeOut(300)
				$("#twelveinchtodirectmountmovieicon").fadeOut(300)
				$("#verticalbar12to14socketbarmovieicon").fadeOut(300)
			}
		}
	 else if($("#22socketbarpic").hasClass("chosen"))
		{
	  if($("#verticalextension16pic").hasClass("chosen") && $("#verticalbar12pic").hasClass("chosen"))
			{
				if($("#telescopicBlockpic").hasClass("chosen"))
				{
					$("#twelveinchtosixteeninchvia22socketbarmovieicon").css({"display": "block"})
					$("#twelveinchtosixteeninchvia22socketbarmovieiconimg").css({"top": "360px"}).fadeIn(300)
					$("#vertical12inputpar").css({"margin-top":""}).show()
				}
				else
				{
					$("#twelveinchtosixteeninchvia22socketbarmovieicon").fadeIn(300)
				}
				$("#twelveinchtosixteeninchmovieicon").fadeOut(300)
				$("#twelveinchtodirectmountmovieicon").fadeOut(300)
				$("#verticalbar12to22socketbarmovieicon").fadeOut(300)
			}
		}
	else if($("#sersocketbar14pic").hasClass("chosen"))
		{
	  if($("#verticalextension16pic").hasClass("chosen") && $("#verticalbar12pic").hasClass("chosen"))
			{
				if($("#telescopicBlockpic").hasClass("chosen"))
				{
					$("#twelveinchtosixteeninchviasersocketbar14movieicon").css({"display": "block"})
					$("#twelveinchtosixteeninchviasersocketbar14movieiconimg").css({"top": "360px"}).fadeIn(300)
					$("#vertical12inputpar").css({"margin-top":""}).show()
				}
				else
				{
					$("#twelveinchtosixteeninchviasersocketbar14movieicon").fadeIn(300)
				}
				$("#twelveinchtosixteeninchmovieicon").fadeOut(300)
				$("#twelveinchtodirectmountmovieicon").fadeOut(300)
				$("#verticalbar12tosersocketbar14movieicon").fadeOut(300)
			}
		}
	
	
	 else if($("#manualchair").hasClass("chosen") && $("#serdirectmountpic").hasClass("chosen"))
			{
				if($("#verticalbar12pic").hasClass("chosen") && $("#verticalextension16pic").hasClass("chosen"))
				{
					if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#twelveinchtosixteeninchmovieicon").css({"display": "block"})
						$("#twelveinchtosixteeninchmovieiconimg").css({"top": "328px"}).fadeIn(300)
						$("#vertical12inputpar").css({"margin-top":"15px"}).show()
					}	
					else
					{
						$("#twelveinchtosixteeninchmovieicon").css({"display": "block"})
						$("#twelveinchtosixteeninchmovieiconimg").css({"top": "297px"}).fadeIn(300)
					}
					
					$("#twelveinchtodirectmountmovieicon").fadeOut(300)
					$("#twelveinchtoserdirectmountmovieicon").fadeOut(300)
					$("#twelveinchtoeightinchmovieiconimg").fadeOut(300)
					$("#verticalbar12to14socketbarmovieicon").fadeOut(300)
				}
			}
		else if($("#extrollingstand").hasClass("chosen"))
		   {
			   if($("#verticalextension16pic").hasClass("chosen") && $("#verticalbar12pic").hasClass("chosen"))
			   {
				  $("#twelveinchtosixteeninchmovieicon").css({"display": "block"})
				  $("#twelveinchtosixteeninchmovieiconimg").css({"top": "237px"}).fadeIn(300)
				  $("#twelveinchtostandmovieicon").fadeOut(300)
			   }
			  
		   }
	
	else if($("#verticalbar12pic").hasClass("chosen") && $("#verticalextension16pic").hasClass("chosen"))
			{
				if($("#deskclamp").hasClass("chosen"))
				{
					$("#twelveinchtosixteeninchmovieicon").css({"display": "block"})
					$("#twelveinchtosixteeninchmovieiconimg").css({"top": "237px"}).fadeIn(300)
					$("#twelveinchtodirectmountmovieicon").fadeOut(300)
					$("#twelveinchtoeightinchmovieiconimg").fadeOut(300)
					$("#twelveinchtoserdirectmountmovieicon").fadeOut(300)
					$("#twelveinchtostandmovieicon").fadeOut(300)
					$("#twelveinchtovertserdirectmountmovieicon").fadeOut(300)
					$("#verticalbar12to14socketbarmovieicon").fadeOut(300)
					$("#twelveinchtodirectmounthorizontalmovieicon").fadeOut(300)
				}
				else
				{
					if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#twelveinchtosixteeninchmovieicon").css({"display": "block"})
						$("#twelveinchtosixteeninchmovieiconimg").css({"top": "328px"}).fadeIn(300)
						$("#vertical12inputpar").css({"margin-top":"15px"}).show()
					}	
					else
					{
						$("#twelveinchtosixteeninchmovieicon").css({"display": "block"})
						$("#twelveinchtosixteeninchmovieiconimg").css({"top": "297px"}).fadeIn(300)
					}
					
					$("#twelveinchtodirectmountmovieicon").fadeOut(300)
					$("#twelveinchtoeightinchmovieiconimg").fadeOut(300)
					$("#twelveinchtoserdirectmountmovieicon").fadeOut(300)
					$("#twelveinchtostandmovieicon").fadeOut(300)
					$("#twelveinchtovertserdirectmountmovieicon").fadeOut(300)
					$("#verticalbar12to14socketbarmovieicon").fadeOut(300)
					$("#twelveinchtodirectmounthorizontalmovieicon").fadeOut(300)
					$("#verticalbar12tottrackdirectmovieicon").fadeOut(300)
				}
				
			}
   }
</script>
<script>
   $(document).ready(function(){
   	$(".inptlist").hide()
   })
</script>
<script>
   $(document).ready(function(){	
   
   	$("#loadinggif").delay(200).fadeOut(300)
   	$("#bothchairs").delay(400).fadeIn(600)	
   	$("#languagebackdrop").fadeIn(300)
   	$("#chooselanguage").fadeIn(300)
   })
   
 
</script>
<script>
   function vertical6(x){
   	$("#verticalbar6pic").fadeIn(2000).addClass("chosen")
	
	if($("#manualchair").hasClass("chosen"))
	{
		
		if($("#manualchair").hasClass("chosen") && $("#directmountpic").hasClass("chosen"))
		{
			if($("#directmountpic").hasClass("chosen"))
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#sixinchtodirectmountmovieicon").css({"display":"block"})
					$("#sixinchtodirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
					$("#vertical6inputpar").css({"margin-top":"40px"}).show()
				}
				else
				{
				$("#sixinchtodirectmountmovieicon").fadeIn(300)
				}
			}
		}
		if($("#manualchair").hasClass("chosen") && $("#directmountpic").hasClass("chosen") || $("#serdirectmountpic").hasClass("chosen") || $("#vertserdirectmountpic").hasClass("chosen"))
		{
			if($("#verticalextension8pic").hasClass("chosen"))
			{
				$("#sixinchtoeightinchmovieicon").fadeIn(300)
			}
		}
		
		if($("#serdirectmountpic").hasClass("chosen"))
		{
			if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#sixinchtoserdirectmountmovieicon").css({"display":"block"})
					$("#sixinchtoserdirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
					$("#vertical6inputpar").css({"margin-top":"40px"}).show()
				}
				else
				{
					$("#sixinchtoserdirectmountmovieicon").fadeIn(300)
				}
		}
		
		if($("#vertserdirectmountpic").hasClass("chosen"))
		{
			if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#sixinchtovertserdirectmountmovieicon").css({"display":"block"})
					$("#sixinchtovertserdirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
					$("#vertical6inputpar").css({"margin-top":"40px"}).show()
				}
				else
				{
					$("#sixinchtovertserdirectmountmovieicon").fadeIn(300)
				}
		}
		
		if($("#fullringbracketmanual").hasClass("chosen") || $("#zeroclearancebracketmanual").hasClass("chosen"))
		{
			if($("#telescopicBlockpic").hasClass("chosen"))
			{
				if($("#14socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar6to14socketbarmovieicon").css({"display":"block"})
						$("#verticalbar6to14socketbarmovieiconimg").css({"top":"330px"}).fadeIn(300)
						$("#vertical6inputpar").css({"margin-top":"43px"}).show()
					}
				else if($("#22socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar6to22socketbarmovieicon").css({"display":"block"})
						$("#verticalbar6to22socketbarmovieiconimg").css({"top":"330px"}).fadeIn(300)
						$("#vertical6inputpar").css({"margin-top":"43px"}).show()
					}
				else if($("#sersocketbar14pic").hasClass("chosen"))
					{
						$("#verticalbar6tosersocketbar14movieicon").css({"display":"block"})
						$("#verticalbar6tosersocketbar14movieiconimg").css({"top":"330px"}).fadeIn(300)
						$("#vertical6inputpar").css({"margin-top":"43px"}).show()
					}
			}
			else
			{
				if($("#14socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar6to14socketbarmovieicon").fadeIn(300)	
					}
				else if($("#22socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar6to22socketbarmovieicon").fadeIn(300)	
					}
				else if($("#sersocketbar14pic").hasClass("chosen"))
					{
						$("#verticalbar6tosersocketbar14movieicon").fadeIn(300)	
					}
			}
			
		}
		
		if($("#roundtube").hasClass("chosen"))
			{
				if($("#directmounthorizontal").hasClass("chosen"))
				{
					$("#sixinchtodirectmounthorizontalmovieicon").fadeIn(300)
					$("#vertical6inputpar").css({"margin-top":"0px"}).show()
				}
			}
	
	}
	
	else if($("#powerchair").hasClass("chosen"))
	{
		
		if($("#powerchair").hasClass("chosen") && $("#directmountpic").hasClass("chosen"))
		{
			if($("#directmountpic").hasClass("chosen"))
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#sixinchtodirectmountmovieicon").css({"display":"block"})
					$("#sixinchtodirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
					$("#vertical6inputpar").css({"margin-top":"40px"}).show()
				}
				else
				{
				$("#sixinchtodirectmountmovieicon").fadeIn(300)
				}
			}
		}
		if($("#powerchair").hasClass("chosen") && $("#directmountpic").hasClass("chosen") || $("#serdirectmountpic").hasClass("chosen") || $("#vertserdirectmountpic").hasClass("chosen"))
		{
			if($("#verticalextension8pic").hasClass("chosen"))
			{
				$("#sixinchtoeightinchmovieicon").fadeIn(300)
			}
		}
		
		if($("#serdirectmountpic").hasClass("chosen"))
		{
			if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#sixinchtoserdirectmountmovieicon").css({"display":"block"})
					$("#sixinchtoserdirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
					$("#vertical6inputpar").css({"margin-top":"40px"}).show()
				}
				else
				{
					$("#sixinchtoserdirectmountmovieicon").fadeIn(300)
				}
		}
		
		if($("#vertserdirectmountpic").hasClass("chosen"))
		{
			if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#sixinchtovertserdirectmountmovieicon").css({"display":"block"})
					$("#sixinchtovertserdirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
					$("#vertical6inputpar").css({"margin-top":"40px"}).show()
				}
				else
				{
					$("#sixinchtovertserdirectmountmovieicon").fadeIn(300)
				}
		}
		
		if($("#fullringbracketmanual").hasClass("chosen") || $("#zeroclearancebracketmanual").hasClass("chosen") || $("#ttrack").hasClass("chosen") || $("#doublettrack").hasClass("chosen"))
		{
			if($("#telescopicBlockpic").hasClass("chosen"))
			{
				if($("#14socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar6to14socketbarmovieicon").css({"display":"block"})
						$("#verticalbar6to14socketbarmovieiconimg").css({"top":"330px"}).fadeIn(300)
						$("#vertical6inputpar").css({"margin-top":"43px"}).show()
					}
				else if($("#22socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar6to22socketbarmovieicon").css({"display":"block"})
						$("#verticalbar6to22socketbarmovieiconimg").css({"top":"330px"}).fadeIn(300)
						$("#vertical6inputpar").css({"margin-top":"43px"}).show()
					}
				else if($("#sersocketbar14pic").hasClass("chosen"))
					{
						$("#verticalbar6tosersocketbar14movieicon").css({"display":"block"})
						$("#verticalbar6tosersocketbar14movieiconimg").css({"top":"330px"}).fadeIn(300)
						$("#vertical6inputpar").css({"margin-top":"43px"}).show()
					}
			}
			else
			{
				if($("#14socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar6to14socketbarmovieicon").fadeIn(300)	
					}
				else if($("#22socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar6to22socketbarmovieicon").fadeIn(300)	
					}
				else if($("#sersocketbar14pic").hasClass("chosen"))
					{
						$("#verticalbar6tosersocketbar14movieicon").fadeIn(300)	
					}
			}
			
		}
		
		if($("#roundtube").hasClass("chosen"))
			{
				if($("#directmounthorizontal").hasClass("chosen"))
				{
					$("#sixinchtodirectmounthorizontalmovieicon").fadeIn(300)
					$("#vertical6inputpar").css({"margin-top":"0px"}).show()
				}
			}
			
		if($("#ttrack").hasClass("chosen") || $("#doublettrack").hasClass("chosen"))
			{
				if($("#ttrackdirectpic").hasClass("chosen") || $("#dttrackdirectpic").hasClass("chosen"))
				{
					$("#verticalbar6tottrackdirectmovieicon").fadeIn(300)
					$("#vertical6inputpar").css({"margin-top":"0px"}).show()
				}
			}
	
	}
	
	
	else if($("#powerchair").hasClass("chosen"))
	{
		if($("#14socketbarpic").hasClass("chosen") && $("#verticalbar6pic").hasClass("chosen"))
					{
						$("#verticalbar6to14socketbarmovieicon").fadeIn(300)	
					}
					else if($("#22socketbarpic").hasClass("chosen")  && $("#verticalbar6pic").hasClass("chosen"))
					{
						$("#verticalbar6to22socketbarmovieicon").fadeIn(300)	
					}
					else if($("#sersocketbar14pic").hasClass("chosen")  && $("#verticalbar6pic").hasClass("chosen"))
					{
						$("#verticalbar6tosersocketbar14movieicon").fadeIn(300)	
					}
	}
	
	else if($("#deskclamp").hasClass("chosen"))
	{
	   if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
		{
			if($("#verticalextension8pic").hasClass("chosen") && $("#verticalbar6pic").hasClass("chosen"))
			{
				$("#sixinchtoeightinchmovieicon").css({"display":"block"})
				$("#sixinchtoeightinchmovieiconimg").css({"top":"237px"}).fadeIn(300)	
			}
			else if($("#verticalextension16pic").hasClass("chosen") && $("#verticalbar6pic").hasClass("chosen"))
			{
				$("#sixinchtosixteeninchmovieicon").css({"display":"block"})
				$("#sixinchtosixteeninchmovieiconimg").css({"top":"237px"}).fadeIn(300)	
			}
		}
	 
	else
		{
		if($("#verticalbar6pic").hasClass("chosen"))
			{
				$("#sixinchtotableclampmovieicon").fadeIn(300)	
			}
			
		}
	}
	
	else if($("#extrollingstand").hasClass("chosen"))
	{
		if($("#verticalbar6pic").hasClass("chosen"))
			{
				$("#sixinchtostandmovieicon").fadeIn(300)	
			}
	}
   	$("#vertical6inputpar").show()
	
	modelManager.addModel("3006");
   }
</script>
<script>
   function vertical12(x){
   	$("#verticalbar12pic").fadeIn(2000).addClass("chosen")
	
	if($("#manualchair").hasClass("chosen"))
	{
			if($("#manualchair").hasClass("chosen") && $("#directmountpic").hasClass("chosen"))
			{
				if($("#directmountpic").hasClass("chosen"))
				{
					if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#twelveinchtodirectmountmovieicon").css({"display":"block"})
						$("#twelveinchtodirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
						$("#vertical12inputpar").css({"margin-top":"40px"}).show()
					}
					else
					{
						$("#twelveinchtodirectmountmovieicon").fadeIn(300)
					}
				
				}
			}
			
			if($("#manualchair").hasClass("chosen") && $("#directmountpic").hasClass("chosen") || $("#serdirectmountpic").hasClass("chosen") || $("#vertserdirectmountpic").hasClass("chosen"))
				{
					if($("#verticalextension8pic").hasClass("chosen"))
					{
						$("#twelveinchtoeightinchmovieicon").fadeIn(300)
					}
				}
			
			if($("#serdirectmountpic").hasClass("chosen"))
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#twelveinchtoserdirectmountmovieicon").css({"display":"block"})
					$("#twelveinchtoserdirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
					$("#vertical12inputpar").css({"margin-top":"40px"}).show()
				}
				
				else
				{
				$("#twelveinchtoserdirectmountmovieicon").fadeIn(300)
				}
			}
			
			if($("#vertserdirectmountpic").hasClass("chosen"))
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#twelveinchtovertserdirectmountmovieicon").css({"display":"block"})
					$("#twelveinchtovertserdirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
					$("#vertical12inputpar").css({"margin-top":"40px"}).show()
				}
				else
				{
				$("#twelveinchtovertserdirectmountmovieicon").fadeIn(300)
				}
			}
			
			if($("#fullringbracketmanual").hasClass("chosen") || $("#zeroclearancebracketmanual").hasClass("chosen"))
			{
				if($("#telescopicBlockpic").hasClass("chosen"))
				{
					if($("#14socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar12to14socketbarmovieicon").css({"display":"block"})
						$("#verticalbar12to14socketbarmovieiconimg").css({"top":"330px"}).fadeIn(200)
						$("#vertical12inputpar").css({"margin-top":"43px"}).show()						
					}
					else if($("#22socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar12to22socketbarmovieicon").css({"display":"block"})
						$("#verticalbar12to22socketbarmovieiconimg").css({"top":"330px"}).fadeIn(200)
						$("#vertical12inputpar").css({"margin-top":"43px"}).show()
					}
					else if($("#sersocketbar14pic").hasClass("chosen"))
					{
						$("#verticalbar12tosersocketbar14movieicon").css({"display":"block"})
						$("#verticalbar12tosersocketbar14movieicon").css({"top":"330px"}).fadeIn(200)
						$("#vertical12inputpar").css({"margin-top":"43px"}).show()
					}
				}
				
				else
				{
					if($("#14socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar12to14socketbarmovieicon").fadeIn(300)	
					}
					else if($("#22socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar12to22socketbarmovieicon").fadeIn(300)	
					}
					else if($("#sersocketbar14pic").hasClass("chosen"))
					{
						$("#verticalbar12tosersocketbar14movieicon").fadeIn(300)	
					}
				}
				
			}
			
			if($("#roundtube").hasClass("chosen"))
			{
				if($("#directmounthorizontal").hasClass("chosen"))
				{
					$("#twelveinchtodirectmounthorizontalmovieicon").fadeIn(300)
					$("#vertical12inputpar").css({"margin-top":"0px"}).show()					
				}
			}
			
	}
	
	else if($("#powerchair").hasClass("chosen"))
	{
			if($("#powerchair").hasClass("chosen") && $("#directmountpic").hasClass("chosen"))
			{
				if($("#directmountpic").hasClass("chosen"))
				{
					if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#twelveinchtodirectmountmovieicon").css({"display":"block"})
						$("#twelveinchtodirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
						$("#vertical12inputpar").css({"margin-top":"40px"}).show()
					}
					else
					{
						$("#twelveinchtodirectmountmovieicon").fadeIn(300)
					}
				
				}
			}
			
			if($("#powerchair").hasClass("chosen") && $("#directmountpic").hasClass("chosen") || $("#serdirectmountpic").hasClass("chosen") || $("#vertserdirectmountpic").hasClass("chosen"))
				{
					if($("#verticalextension8pic").hasClass("chosen"))
					{
						$("#twelveinchtoeightinchmovieicon").fadeIn(300)
					}
				}
			
			if($("#serdirectmountpic").hasClass("chosen"))
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#twelveinchtoserdirectmountmovieicon").css({"display":"block"})
					$("#twelveinchtoserdirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
					$("#vertical12inputpar").css({"margin-top":"40px"}).show()
				}
				
				else
				{
				$("#twelveinchtoserdirectmountmovieicon").fadeIn(300)
				}
			}
			
			if($("#vertserdirectmountpic").hasClass("chosen"))
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#twelveinchtovertserdirectmountmovieicon").css({"display":"block"})
					$("#twelveinchtovertserdirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
					$("#vertical12inputpar").css({"margin-top":"40px"}).show()
				}
				else
				{
				$("#twelveinchtovertserdirectmountmovieicon").fadeIn(300)
				}
			}
			
			if($("#fullringbracketmanual").hasClass("chosen") || $("#zeroclearancebracketmanual").hasClass("chosen") || $("#ttrack").hasClass("chosen") || $("#doublettrack").hasClass("chosen"))
			{
				if($("#telescopicBlockpic").hasClass("chosen"))
				{
					if($("#14socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar12to14socketbarmovieicon").css({"display":"block"})
						$("#verticalbar12to14socketbarmovieiconimg").css({"top":"330px"}).fadeIn(200)
						$("#vertical12inputpar").css({"margin-top":"43px"}).show()						
					}
					else if($("#22socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar12to22socketbarmovieicon").css({"display":"block"})
						$("#verticalbar12to22socketbarmovieiconimg").css({"top":"330px"}).fadeIn(200)
						$("#vertical12inputpar").css({"margin-top":"43px"}).show()
					}
					else if($("#sersocketbar14pic").hasClass("chosen"))
					{
						$("#verticalbar12tosersocketbar14movieicon").css({"display":"block"})
						$("#verticalbar12tosersocketbar14movieicon").css({"top":"330px"}).fadeIn(200)
						$("#vertical12inputpar").css({"margin-top":"43px"}).show()
					}
				}
				
				else
				{
					if($("#14socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar12to14socketbarmovieicon").fadeIn(300)	
					}
					else if($("#22socketbarpic").hasClass("chosen"))
					{
						$("#verticalbar12to22socketbarmovieicon").fadeIn(300)	
					}
					else if($("#sersocketbar14pic").hasClass("chosen"))
					{
						$("#verticalbar12tosersocketbar14movieicon").fadeIn(300)	
					}
				}
				
			}
			
			if($("#roundtube").hasClass("chosen"))
			{
				if($("#directmounthorizontal").hasClass("chosen"))
				{
					$("#twelveinchtodirectmounthorizontalmovieicon").fadeIn(300)
					$("#vertical12inputpar").css({"margin-top":"0px"}).show()					
				}
			}
			
		
		if($("#ttrack").hasClass("chosen") || $("#doublettrack").hasClass("chosen"))
			{
				if($("#ttrackdirectpic").hasClass("chosen") || $("#dttrackdirectpic").hasClass("chosen"))
				{
					$("#verticalbar12tottrackdirectmovieicon").fadeIn(300)
					$("#vertical12inputpar").css({"margin-top":"0px"}).show()
				}
			}
			
	}
	
	
	else if($("#powerchair").hasClass("chosen"))
	{
		if($("#14socketbarpic").hasClass("chosen")  && $("#verticalbar12pic").hasClass("chosen"))
					{
						$("#verticalbar12to14socketbarmovieicon").fadeIn(300)	
					}
					else if($("#22socketbarpic").hasClass("chosen")  && $("#verticalbar12pic").hasClass("chosen"))
					{
						$("#verticalbar12to22socketbarmovieicon").fadeIn(300)	
					}
					else if($("#sersocketbar14pic").hasClass("chosen")  && $("#verticalbar12pic").hasClass("chosen"))
					{
						$("#verticalbar12tosersocketbar14movieicon").fadeIn(300)	
					}
	}
	
	else if($("#deskclamp").hasClass("chosen"))
	{
	   if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
		{
			if($("#verticalextension8pic").hasClass("chosen") && $("#verticalbar12pic").hasClass("chosen"))
			{
				$("#twelveinchtoeightinchmovieicon").css({"display":"block"})
				$("#twelveinchtoeightinchmovieiconimg").css({"top":"237px"}).fadeIn(300)	
			}
			else if($("#verticalextension16pic").hasClass("chosen") && $("#verticalbar12pic").hasClass("chosen"))
			{
				$("#twelveinchtosixteeninchmovieicon").css({"display":"block"})
				$("#twelveinchtosixteeninchmovieiconimg").css({"top":"237px"}).fadeIn(300)	
			}
		}
		
	else
		{
		if($("#verticalbar12pic").hasClass("chosen"))
			{
				$("#twelveinchtotableclampmovieicon").fadeIn(300)	
			}
			
		}
	}
	
	else if($("#extrollingstand").hasClass("chosen"))
	{
		if($("#verticalbar12pic").hasClass("chosen"))
			{
				$("#twelveinchtostandmovieicon").fadeIn(300)	
			}
	}
   	$("#vertical12inputpar").show()
	
	modelManager.addModel("3007");
   }
</script>
<script>
   function verticaladj(x){
   	$("#verticalbaradjpic").fadeIn(2000).addClass("chosen")
   	$("#verticaladjinputpar").show()
   }
</script>
<script>
   function vertical8(x){
   	$("#verticalextension8pic").fadeIn(2000).addClass("chosen")
	if($("#directmountpic").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
	{
		if($("#ninetydegreebracket").hasClass("chosen"))
		{
			$("#eightinchtodirectmountmovieicon").css({"display":"block"})
			$("#eightinchtodirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
			$("#vertical8inputpar").css({"margin-top":"40px"}).show()
		}
		else
		{
		$("#eightinchtodirectmountmovieicon").fadeIn(300)
		$("#vertical8inputpar").css({"margin-top":"0px"}).show()
		}
	}
	else if($("#serdirectmountpic").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
	{
		if($("#ninetydegreebracket").hasClass("chosen"))
		{
			$("#eightinchtoserdirectmountmovieicon").css({"display":"block"})
			$("#eightinchtoserdirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
			$("#vertical8inputpar").css({"margin-top":"40px"}).show()
		}
		else
		{
		$("#eightinchtoserdirectmountmovieicon").fadeIn(300)
		$("#vertical8inputpar").css({"margin-top":"0px"}).show()		
		}
	}
	else if($("#vertserdirectmountpic").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
	{
		if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#eightinchtovertserdirectmountmovieicon").css({"display":"block"})
					$("#eightinchtovertserdirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
					$("#vertical8inputpar").css({"margin-top":"40px"}).show()
				}
				else
				{
					$("#eightinchtovertserdirectmountmovieicon").fadeIn(300)
					$("#vertical8inputpar").css({"margin-top":"0px"}).show()					
				}
	}
	else if($("#14socketbarpic").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
	{
		if($("#telescopicBlockpic").hasClass("chosen"))
		{
			$("#eightinchto14socketbarmovieicon").css({"display":"block"})
			$("#eightinchto14socketbarmovieiconimg").css({"top":"330px"}).fadeIn(200)
			$("#vertical8inputpar").css({"margin-top":"43px"}).show()
		}
		else
		{
			$("#eightinchto14socketbarmovieicon").fadeIn(300)
			$("#vertical8inputpar").css({"margin-top":"17px"}).show()			
		}
	}
	else if($("#22socketbarpic").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
	{
		if($("#telescopicBlockpic").hasClass("chosen"))
		{
			$("#eightinchto22socketbarmovieicon").css({"display":"block"})
			$("#eightinchto22socketbarmovieiconimg").css({"top":"330px"}).fadeIn(200)
			$("#vertical8inputpar").css({"margin-top":"43px"}).show()
		}
		else
		{
			$("#eightinchto22socketbarmovieicon").fadeIn(300)
			$("#vertical8inputpar").css({"margin-top":"17px"}).show()			
		}
		
	}
	else if($("#sersocketbar14pic").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
	{
		if($("#telescopicBlockpic").hasClass("chosen"))
		{
			$("#eightinchtosersocketbar14movieicon").css({"display":"block"})
			$("#eightinchtosersocketbar14movieiconimg").css({"top":"330px"}).fadeIn(200)
			$("#vertical8inputpar").css({"margin-top":"43px"}).show()
		}
		else
		{
			$("#eightinchtosersocketbar14movieicon").fadeIn(300)
			$("#vertical8inputpar").css({"margin-top":"17px"}).show()			
		}	
	}
	
	else if($("#powerchair").hasClass("chosen"))
	{
		if($("#socketbar14pic").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
		{
			$("#eightinchtosocketbar14movieicon").fadeIn(300)
		}
		else if($("#socketbar22pic").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
		{
			$("#eightinchtosocketbar22movieicon").fadeIn(300)
		}
		else if($("#sersocketbar14pic").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
		{
			$("#eightinchtosersocketbar14movieicon").fadeIn(300)
		}
		else if($("#directmounthorizontal").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
			{
				$("#eightinchtodirectmounthorizontalmovieicon").fadeIn(300)
				$("#vertical8inputpar").css({"margin-top":"0px"}).show()
			}
		else if($("#ttrack").hasClass("chosen") || $("#doublettrack").hasClass("chosen"))
			{
				if($("#ttrackdirectpic").hasClass("chosen") || $("#dttrackdirectpic").hasClass("chosen"))
				{
					$("#eightinchtottrackdirectmovieicon").fadeIn(300)
					$("#vertical8inputpar").css({"margin-top":"0px"}).show()
				}
			}
	}
	else if($("#deskclamp").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
	{
		$("#eightinchtotableclampmovieicon").fadeIn(300)	
	}
	else if($("#extrollingstand").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
	{
		$("#eightinchtostandmovieicon").fadeIn(300)	
	}
	else if($("#roundtube").hasClass("chosen") && $("#directmounthorizontal").hasClass("chosen"))
	{
		$("#eightinchtodirectmounthorizontalmovieicon").fadeIn(300)
		$("#vertical8inputpar").css({"margin-top":"0px"}).show()
	}
   	$("#vertical8inputpar").show()
	
	modelManager.addModel("2025");
   }
</script>
<script>
   function vertical16(x){
   	$("#verticalextension16pic").fadeIn(2000).addClass("chosen")
	if($("#directmountpic").hasClass("chosen"))
	{
		if($("#ninetydegreebracket").hasClass("chosen"))
		{
			$("#sixteeninchtodirectmountmovieicon").css({"display":"block"})
			$("#sixteeninchtodirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
			$("#vertical16inputpar").css({"margin-top":"40px"}).show()
		}
		else
		{
		$("#sixteeninchtodirectmountmovieicon").fadeIn(300)
		$("#vertical16inputpar").css({"margin-top":"0px"}).show()
		}
	}
	else if($("#serdirectmountpic").hasClass("chosen"))
	{
		if($("#ninetydegreebracket").hasClass("chosen"))
		{
			$("#sixteeninchtoserdirectmountmovieicon").css({"display":"block"})
			$("#sixteeninchtoserdirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
			$("#vertical16inputpar").css({"margin-top":"40px"}).show()
		}
		else
		{
		$("#sixteeninchtoserdirectmountmovieicon").fadeIn(300)
		$("#vertical16inputpar").css({"margin-top":"0px"}).show()		
		}
	}
	else if($("#vertserdirectmountpic").hasClass("chosen"))
	{
		if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#sixteeninchtovertserdirectmountmovieicon").css({"display":"block"})
					$("#sixteeninchtovertserdirectmountmovieiconimg").css({"top":"297px"}).fadeIn(200)
					$("#vertical16inputpar").css({"margin-top":"40px"}).show()
				}
				else
				{
					$("#sixteeninchtovertserdirectmountmovieicon").fadeIn(300)
					$("#vertical16inputpar").css({"margin-top":"0px"}).show()
				}
	}
	else if($("#14socketbarpic").hasClass("chosen") && $("#verticalextension16pic").hasClass("chosen"))
	{
		if($("#telescopicBlockpic").hasClass("chosen"))
		{
			$("#sixteeninchto14socketbarmovieicon").css({"display":"block"})
			$("#sixteeninchto14socketbarmovieiconimg").css({"top":"330px"}).fadeIn(200)
			$("#vertical16inputpar").css({"margin-top":"43px"}).show()
		}
		else
		{
			$("#sixteeninchto14socketbarmovieicon").fadeIn(300)				
		}
		
	}
	else if($("#22socketbarpic").hasClass("chosen") && $("#verticalextension16pic").hasClass("chosen"))
	{
		if($("#telescopicBlockpic").hasClass("chosen"))
		{
			$("#sixteeninchto22socketbarmovieicon").css({"display":"block"})
			$("#sixteeninchto22socketbarmovieiconimg").css({"top":"330px"}).fadeIn(200)
			$("#vertical16inputpar").css({"margin-top":"43px"}).show()
		}
		else
		{
			$("#sixteeninchto22socketbarmovieicon").fadeIn(300)				
		}
	}
	else if($("#sersocketbar14pic").hasClass("chosen") && $("#verticalextension16pic").hasClass("chosen"))
	{
		if($("#telescopicBlockpic").hasClass("chosen"))
		{
			$("#sixteeninchtosersocketbar14movieicon").css({"display":"block"})
			$("#sixteeninchtosersocketbar14movieiconimg").css({"top":"330px"}).fadeIn(200)
			$("#vertical16inputpar").css({"margin-top":"43px"}).show()
		}
		else
		{
			$("#sixteeninchtosersocketbar14movieicon").fadeIn(300)				
		}	
	}
	
	else if($("#powerchair").hasClass("chosen"))
	{
		if($("#socketbar14pic").hasClass("chosen") && $("#verticalextension16pic").hasClass("chosen"))
		{
			$("#sixteeninchtosocketbar14movieicon").fadeIn(300)
		}
		else if($("#socketbar22pic").hasClass("chosen") && $("#verticalextension16pic").hasClass("chosen"))
		{
			$("#sixteeninchtosocketbar22movieicon").fadeIn(300)
		}
		else if($("#sersocketbar14pic").hasClass("chosen") && $("#verticalextension16pic").hasClass("chosen"))
		{
			$("#sixteeninchtosersocketbar14movieicon").fadeIn(300)
		}
		else if($("#powerchair").hasClass("chosen") && $("#directmounthorizontal").hasClass("chosen") && $("#verticalextension16pic").hasClass("chosen"))
		{
			$("#sixteeninchtodirectmounthorizontalmovieicon").fadeIn(300)
			$("#vertical16inputpar").css({"margin-top":"0px"}).show()
		}
		else if($("#ttrack").hasClass("chosen") || $("#doublettrack").hasClass("chosen"))
			{
				if($("#ttrackdirectpic").hasClass("chosen") || $("#dttrackdirectpic").hasClass("chosen"))
				{
					$("#sixteeninchtottrackdirectmovieicon").fadeIn(300)
					$("#vertical16inputpar").css({"margin-top":"0px"}).show()
				}
			}
	}
	
	else if($("#deskclamp").hasClass("chosen") && $("#verticalextension16pic").hasClass("chosen"))
	{
		$("#sixteeninchtotableclampmovieicon").fadeIn(300)	
	}
	else if($("#extrollingstand").hasClass("chosen") && $("#verticalextension16pic").hasClass("chosen"))
	{
		$("#sixteeninchtostandmovieicon").fadeIn(300)	
	}
	else if($("#roundtube").hasClass("chosen") && $("#directmounthorizontal").hasClass("chosen"))
	{
		$("#sixteeninchtodirectmounthorizontalmovieicon").fadeIn(300)
		$("#vertical16inputpar").css({"margin-top":"0px"}).show()
		
	}
   	$("#vertical16inputpar").show()
	
	modelManager.addModel("2026");	
   }
</script>
<script>
   function m2(x){
   	$("#m2inputpar").show()
   	$("#m2pic").fadeIn(2000).addClass("chosen")
	
	modelManager._armPartsCount = 4;
	modelManager.addModel("101");
	modelManager.addModel("203");
	modelManager.addModel("206");
	modelManager.addModel("301");
   }
   
   function mountingarmstov4()
   {
	   if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
	   {
	   if($("#verticalbar4pic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
	   {
			if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
			{
				$("#m2tov4movieicon").css({"display": "block"})
				$("#m2tov4movieiconimg").css({"top": "267px"}).fadeIn(300)
			}
			else
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#m2tov4movieicon").css({"display": "block"})
					$("#m2tov4movieiconimg").css({"top": "360px"}).fadeIn(300)
					$("#m2tov4directmovieicon").hide()
				}
				else
				{
					$("#m2tov4movieicon").css({"display": "block"})
					$("#m2tov4movieiconimg").css({"top": "330px"}).fadeIn(300)
					$("#m2tov4directmovieicon").hide()
				}
				
			}
		   
	   }
	   else if($("#verticalbar4pic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
			{
				$("#m2xtov4movieicon").css({"display": "block"})
				$("#m2xtov4movieiconimg").css({"top": "267px"}).fadeIn(300)
			}
			else
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#m2xtov4movieicon").css({"display": "block"})
					$("#m2xtov4movieiconimg").css({"top": "360px"}).fadeIn(300)
					$("#m2xtov4directmovieicon").hide()
				}
				else
				{
					$("#m2xtov4movieicon").css({"display": "block"})
					$("#m2xtov4movieiconimg").css({"top": "330px"}).fadeIn(300)
					$("#m2xtov4directmovieicon").hide()
				}
			}
		   
	   }
	   else if($("#verticalbar4pic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
			{
				$("#m2maxtov4movieicon").css({"display": "block"})
				$("#m2maxtov4movieiconimg").css({"top": "267px"}).fadeIn(300)
			}
			else
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#m2maxtov4movieicon").css({"display": "block"})
					$("#m2maxtov4movieiconimg").css({"top": "360px"}).fadeIn(300)
					$("#m2maxtov4directmovieicon").hide()
				}
				else
				{
					$("#m2maxtov4movieicon").css({"display": "block"})
					$("#m2maxtov4movieiconimg").css({"top": "330px"}).fadeIn(300)
					$("#m2maxtov4directmovieicon").hide()
				}
			}
		   
	   }
	   else if($("#verticalbar4pic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
			{
				$("#articulatingtov4movieicon").css({"display": "block"})
				$("#articulatingtov4movieiconimg").css({"top": "267px"}).fadeIn(300)
			}
			else
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#articulatingtov4movieicon").css({"display": "block"})
					$("#articulatingtov4movieiconimg").css({"top": "360px"}).fadeIn(300)
					$("#articulatingarmtov4directmovieicon").hide()
				}
				else
				{
					$("#articulatingtov4movieicon").css({"display": "block"})
					$("#articulatingtov4movieiconimg").css({"top": "330px"}).fadeIn(300)
					$("#articulatingarmtov4directmovieicon").hide()
				}
				
			}
		   
	   }
	   else if($("#verticalbar4pic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
			{
				$("#articulatingrisertov4movieicon").css({"display": "block"})
				$("#articulatingrisertov4movieiconimg").css({"top": "267px"}).fadeIn(300)
			}
			else
			{
				if($("#ninetydegreebracket").hasClass("chosen"))
				{
					$("#articulatingrisertov4movieicon").css({"display": "block"})
					$("#articulatingrisertov4movieiconimg").css({"top": "360px"}).fadeIn(300)
					$("#articulatingrisertov4directmovieicon").hide()
				}
				else
				{
					$("#articulatingrisertov4movieicon").css({"display": "block"})
					$("#articulatingrisertov4movieiconimg").css({"top": "330px"}).fadeIn(300)
					$("#articulatingrisertov4directmovieicon").hide()
				}
			
			}
		   
	   }
	   
	   }
	   else
	   {
		   mountingarmstov4direct(this);
	   }
   }
   
   function mountingarmstov4viasocketbars()
   {
	   if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
			{
			   if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
			   {
			   if($("#verticalbar4pic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
					{
						$("#m2tov4viasocketbarsmovieicon").css({"display": "block"})
						$("#m2tov4viasocketbarsmovieiconimg").css({"top": "390px"}).fadeIn(300)
					}
					else
					{
						$("#m2tov4viasocketbarsmovieicon").fadeIn(300)
					}
				   $("#m2tov4movieicon").hide()
				   $("#m2tov4directmovieicon").hide()
			   }
			   else if($("#verticalbar4pic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
					{
						$("#m2xtov4viasocketbarsmovieicon").css({"display": "block"})
						$("#m2xtov4viasocketbarsmovieiconimg").css({"top": "390px"}).fadeIn(300)
					}
					else
					{
						$("#m2xtov4viasocketbarsmovieicon").fadeIn(300)
					}
				   $("#m2xtov4movieicon").hide()
				   $("#m2xtov4directmovieicon").hide()
			   }
			   else if($("#verticalbar4pic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
					{
						$("#m2maxtov4viasocketbarsmovieicon").css({"display": "block"})
						$("#m2maxtov4viasocketbarsmovieiconimg").css({"top": "390px"}).fadeIn(300)
					}
					else
					{
						$("#m2maxtov4viasocketbarsmovieicon").fadeIn(300)
					}
				   $("#m2maxtov4movieicon").hide()
				   $("#m2maxtov4directmovieicon").hide()
			   }
			   else if($("#verticalbar4pic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
					{
						$("#articulatingtov4viasocketbarsmovieicon").css({"display": "block"})
						$("#articulatingtov4viasocketbarsmovieiconimg").css({"top": "390px"}).fadeIn(300)
					}
					else
					{
						 $("#articulatingtov4viasocketbarsmovieicon").fadeIn(300)
					}
				   $("#articulatingtov4movieicon").hide()
				   $("#articulatingarmtov4directmovieicon").hide()
			   }
			   else if($("#verticalbar4pic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
					{
						$("#articulatingrisertov4viasocketbarsmovieicon").css({"display": "block"})
						$("#articulatingrisertov4viasocketbarsmovieiconimg").css({"top": "390px"}).fadeIn(300)
					}
					else
					{
						$("#articulatingrisertov4viasocketbarsmovieicon").fadeIn(300)
					}
				   $("#articulatingrisertov4movieicon").hide()
				   $("#articulatingrisertov4directmovieicon").hide()
			   }
			   }
			   else
			   {
				   mountingarmstov4viasocketbarsdirect(this);
			   }
			}
   }
   
   function mountingarmstov6viasocketbars()
   {
	   if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
			{
			   if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
			   {
			   if($("#verticalbar6pic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
					{
						$("#m2tov6viasocketbarsmovieicon").css({"display": "block"})
						$("#m2tov6viasocketbarsmovieiconimg").css({"top": "390px"}).fadeIn(300)
					}
					else
					{
						$("#m2tov6viasocketbarsmovieicon").fadeIn(300)
					}
				   $("#m2tov6movieicon").hide()
				   $("#m2tov6directmovieicon").hide()
			   }
			   else if($("#verticalbar6pic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
					{
						$("#m2xtov6viasocketbarsmovieicon").css({"display": "block"})
						$("#m2xtov6viasocketbarsmovieiconimg").css({"top": "390px"}).fadeIn(300)
					}
					else
					{
						$("#m2xtov6viasocketbarsmovieicon").fadeIn(300)
					}
				   $("#m2xtov6movieicon").hide()
				   $("#m2xtov6directmovieicon").hide()
			   }
			   else if($("#verticalbar6pic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
					{
						$("#m2maxtov6viasocketbarsmovieicon").css({"display": "block"})
						$("#m2maxtov6viasocketbarsmovieiconimg").css({"top": "390px"}).fadeIn(300)
					}
					else
					{
						$("#m2maxtov6viasocketbarsmovieicon").fadeIn(300)
					}
				   $("#m2maxtov6movieicon").hide()
				   $("#m2maxtov6directmovieicon").hide()
			   }
			   else if($("#verticalbar6pic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
					{
						$("#articulatingtov6viasocketbarsmovieicon").css({"display": "block"})
						$("#articulatingtov6viasocketbarsmovieiconimg").css({"top": "390px"}).fadeIn(300)
					}
					else
					{
						$("#articulatingtov6viasocketbarsmovieicon").fadeIn(300)
					}
				   $("#articulatingtov6movieicon").hide()
				   $("#articulatingarmtov6directmovieicon").hide()
			   }
			   else if($("#verticalbar6pic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
					{
						$("#articulatingrisertov6viasocketbarsmovieicon").css({"display": "block"})
						$("#articulatingrisertov6viasocketbarsmovieiconimg").css({"top": "390px"}).fadeIn(300)
					}
					else
					{
						$("#articulatingrisertov6viasocketbarsmovieicon").fadeIn(300)
					}
				   $("#articulatingrisertov6movieicon").hide()
				   $("#articulatingrisertov6directmovieicon").hide()
			   }
			   }
			   else
			   {
				   mountingarmstov6viasocketbarsdirect(this);
			   }
			}
   }
   
   function mountingarmstov12viasocketbars()
   {
	   if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
			{
			   if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
			   {
			   if($("#verticalbar12pic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
					{
						$("#m2tov12viasocketbarsmovieicon").css({"display": "block"})
						$("#m2tov12viasocketbarsmovieiconimg").css({"top": "390px"}).fadeIn(300)
					}
					else
					{
						$("#m2tov12viasocketbarsmovieicon").fadeIn(300)
					}
				   $("#m2tov12movieicon").hide()
				   $("#m2tov12directmovieicon").hide()
			   }
			   else if($("#verticalbar12pic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
					{
						$("#m2xtov12viasocketbarsmovieicon").css({"display": "block"})
						$("#m2xtov12viasocketbarsmovieiconimg").css({"top": "390px"}).fadeIn(300)
					}
					else
					{
						$("#m2xtov12viasocketbarsmovieicon").fadeIn(300)
					}
				   $("#m2xtov12movieicon").hide()
				   $("#m2xtov12directmovieicon").hide()
			   }
			   else if($("#verticalbar12pic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
					{
						$("#m2maxtov12viasocketbarsmovieicon").css({"display": "block"})
						$("#m2maxtov12viasocketbarsmovieiconimg").css({"top": "390px"}).fadeIn(300)
					}
					else
					{
						$("#m2maxtov12viasocketbarsmovieicon").fadeIn(300)
					}
				   $("#m2maxtov12movieicon").hide()
				   $("#m2maxtov12directmovieicon").hide()
			   }
			   else if($("#verticalbar12pic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
					{
						$("#articulatingtov12viasocketbarsmovieicon").css({"display": "block"})
						$("#articulatingtov12viasocketbarsmovieiconimg").css({"top": "390px"}).fadeIn(300)
					}
					else
					{
						 $("#articulatingtov12viasocketbarsmovieicon").fadeIn(300)
					}
				   $("#articulatingtov12movieicon").hide()
				   $("#articulatingarmtov12directmovieicon").hide()
			   }
			   else if($("#verticalbar12pic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
					{
						$("#articulatingrisertov12viasocketbarsmovieicon").css({"display": "block"})
						$("#articulatingrisertov12viasocketbarsmovieiconimg").css({"top": "390px"}).fadeIn(300)
					}
					else
					{
						 $("#articulatingrisertov12viasocketbarsmovieicon").fadeIn(300)
					}
				   $("#articulatingrisertov12movieicon").hide()
				   $("#articulatingrisertov12directmovieicon").hide()
			   }
			   }
			   else
			   {
				   mountingarmstov12viasocketbarsdirect(this);
			   }
			}
   }
   
   
   function customarmmovieiconenable()
   {
	 if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
	   {
		   if($("#verticalbar4pic").hasClass("chosen") || $("#verticalbar6pic").hasClass("chosen") || $("#verticalbar12pic").hasClass("chosen"))
		   {
			   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				{
					$("#customarmtomountingmovieicon").css({"display": "block"})
					$("#customarmtomountingmovieiconimg").css({"top": "267px"}).fadeIn(300)
				}
				else
				{
					if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#customarmtomountingmovieicon").css({"display": "block"})
						$("#customarmtomountingmovieiconimg").css({"top": "360px"}).fadeIn(300)
						$("#customarmtomountingdirectmovieicon").hide()
					}
					else
					{
						$("#customarmtomountingmovieicon").css({"display": "block"})
						$("#customarmtomountingmovieiconimg").css({"top": "330px"}).fadeIn(300)
						$("#customarmtomountingdirectmovieicon").hide()
					}
				
				}
		   }
	   }
	   else
	   {
		customarmmovieicondirectenable(this);
	   }
   }
   
   function customarmmovieiconviasocketbarsenable()
   {
	    if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
			{
				 if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
				   {
					   if($("#verticalbar4pic").hasClass("chosen") || $("#verticalbar6pic").hasClass("chosen") || $("#verticalbar12pic").hasClass("chosen"))
				   {
					   $("#customarmtomountingviasocketbarsmovieicon").fadeIn(300)
					   $("#customarmtomountingmovieicon").hide()
					   $("#customarmtomountingdirectmovieicon").hide()
				   }
				   }
				   else
				   {
					customarmmovieiconviasocketbarsdirectenable(this);
				   }
			}
   }
   
   function customarmmovieicondirectenable()
   {
	  if($("#verticalbar4pic").hasClass("chosen") || $("#verticalbar6pic").hasClass("chosen") || $("#verticalbar12pic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#customarmtomountingdirectmovieicon").css({"display": "block"})
			   $("#customarmtomountingdirectmovieiconimg").css({"top": "237px"}).fadeIn(300)
		   }
		   else if($("#manualchair").hasClass("chosen"))
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#customarmtomountingdirectmovieicon").css({"display": "block"})
					    $("#customarmtomountingdirectmovieiconimg").css({"top": "330px"}).fadeIn(300)
					    $("#customarmtomountingmovieicon").hide() 
					}	
					else
					{
						$("#customarmtomountingdirectmovieicon").css({"display": "block"})
						$("#customarmtomountingdirectmovieiconimg").css({"top": "300px"}).fadeIn(300)
						$("#customarmtomountingmovieicon").hide()
					}
			   
		   }
	   } 
   }
   
   function customarmmovieiconviasocketbarsdirectenable()
   {
	  if($("#verticalbar4pic").hasClass("chosen") || $("#verticalbar6pic").hasClass("chosen") || $("#verticalbar12pic").hasClass("chosen"))
	   {
		if($("#telescopicBlockpic").hasClass("chosen"))
					{
						$("#customarmtomountingviasocketbarsdirectmovieicon").css({"display": "block"})
						$("#customarmtomountingviasocketbarsdirectmovieiconimg").css({"top": "360px"}).fadeIn(300)
					}
					else
					{
						 $("#customarmtomountingviasocketbarsdirectmovieicon").fadeIn(300)
					}
		   $("#customarmtomountingdirectmovieicon").hide()
		   $("#customarmtomountingmovieicon").hide()
	   } 
   }
   
   function mountingarmstov4direct()
   {
	   if($("#verticalbar4pic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#m2tov4directmovieicon").css({"display": "block"})
			   $("#m2tov4directmovieiconimg").css({"top": "237px"}).fadeIn(300)
		   }
		   else if($("#manualchair").hasClass("chosen"))
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#m2tov4directmovieicon").css({"display": "block"})
					    $("#m2tov4directmovieiconimg").css({"top": "330px"}).fadeIn(300)
					    $("#m2tov4movieicon").hide() 
					}	
					else
					{
						$("#m2tov4directmovieicon").css({"display": "block"})
						$("#m2tov4directmovieiconimg").css({"top": "300px"}).fadeIn(300)
						$("#m2tov4movieicon").hide()
					}
			   
		   }
	   }
	   else if($("#verticalbar4pic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			  $("#m2xtov4directmovieicon").css({"display": "block"})
			  $("#m2xtov4directmovieiconimg").css({"top": "237px"}).fadeIn(300)
		   }
		   
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#m2xtov4directmovieicon").css({"display": "block"})
					    $("#m2xtov4directmovieiconimg").css({"top": "330px"}).fadeIn(300)
					    $("#m2xtov4movieicon").hide() 
					}	
					else
					{
						$("#m2xtov4directmovieicon").css({"display": "block"})
					    $("#m2xtov4directmovieiconimg").css({"top": "300px"}).fadeIn(300)
					    $("#m2xtov4movieicon").hide()
					}			      
		   }
	   }
	   else if($("#verticalbar4pic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#m2maxtov4directmovieicon").css({"display": "block"})
			   $("#m2maxtov4directmovieiconimg").css({"top": "237px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#m2maxtov4directmovieicon").css({"display": "block"})
					    $("#m2maxtov4directmovieiconimg").css({"top": "330px"}).fadeIn(300)
					    $("#m2maxtov4movieicon").hide() 
					}	
					else
					{
						$("#m2maxtov4directmovieicon").css({"display": "block"})
					    $("#m2maxtov4directmovieiconimg").css({"top": "300px"}).fadeIn(300)
					    $("#m2maxtov4movieicon").hide()
					}			      
		   }
	   }
	   else if($("#verticalbar4pic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			 $("#articulatingtov4directmovieicon").css({"display": "block"})
			 $("#articulatingtov4directmovieiconimg").css({"top": "237px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#articulatingtov4directmovieicon").css({"display": "block"})
					    $("#articulatingtov4directmovieiconimg").css({"top": "330px"}).fadeIn(300)
					    $("#articulatingarmtov4movieicon").hide() 
					}	
					else
					{
						$("#articulatingtov4directmovieicon").css({"display": "block"})
					    $("#articulatingtov4directmovieiconimg").css({"top": "300px"}).fadeIn(300)
					    $("#articulatingarmtov4movieicon").hide()
					}   
		   }
	   }
	   else if($("#verticalbar4pic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#articulatingrisertov4directmovieicon").css({"display": "block"})
			   $("#articulatingrisertov4directmovieiconimg").css({"top": "237px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#articulatingrisertov4directmovieicon").css({"display": "block"})
					    $("#articulatingrisertov4directmovieiconimg").css({"top": "330px"}).fadeIn(300)
					    $("#articulatingrisertov4movieicon").hide() 
					}	
					else
					{
						$("#articulatingrisertov4directmovieicon").css({"display": "block"})
					    $("#articulatingrisertov4directmovieiconimg").css({"top": "300px"}).fadeIn(300)
					    $("#articulatingrisertov4movieicon").hide()
					}  			      
		   }
	   }
   }
   
   function mountingarmstov4viasocketbarsdirect()
   {
	    if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
			{
			   if($("#verticalbar4pic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   $("#m2tov4directviasocketbarsmovieicon").css({"display": "block"})
					   $("#m2tov4directviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
				   }
				   else
				   {
					   $("#m2tov4directviasocketbarsmovieicon").fadeIn(300)
				   }
				   $("#m2tov4directmovieicon").hide()
				   $("#m2tov4movieicon").hide()
			   }
			   else if($("#verticalbar4pic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					    $("#m2xtov4directviasocketbarsmovieicon").css({"display": "block"})
						$("#m2xtov4directviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
				   }
				   else
				   {
					   $("#m2xtov4directviasocketbarsmovieicon").fadeIn(300)
				   }
				   $("#m2xtov4directmovieicon").hide()
				   $("#m2xtov4movieicon").hide()
			   }
			   else if($("#verticalbar4pic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   $("#m2maxtov4directviasocketbarsmovieicon").css({"display": "block"})
					   $("#m2maxtov4directviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
				   }
				   else
				   {
						$("#m2maxtov4directviasocketbarsmovieicon").fadeIn(300)
				   }
				   $("#m2maxtov4directmovieicon").hide()
				   $("#m2maxtov4movieicon").hide()
			   }
			   else if($("#verticalbar4pic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   $("#articulatingtov4directviasocketbarsmovieicon").css({"display": "block"})
					   $("#articulatingtov4directviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
				   }
				   else
				   {
					   $("#articulatingtov4directviasocketbarsmovieicon").fadeIn(300)
				   }
				   $("#articulatingtov4directmovieicon").hide()
				   $("#articulatingarmtov4movieicon").hide()
			   }
			   else if($("#verticalbar4pic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   $("#articulatingrisertov4directviasocketbarsmovieicon").css({"display": "block"})
					   $("#articulatingrisertov4directviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
				   }
				   else
				   {
					   $("#articulatingrisertov4directviasocketbarsmovieicon").fadeIn(300)
				   }
				   $("#articulatingrisertov4directmovieicon").hide()
				   $("#articulatingrisertov4movieicon").hide()
			   }
			}
   }
   
   function mountingarmstov6viasocketbarsdirect()
   {
	    if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
			{
			   if($("#verticalbar6pic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   $("#m2tov6directviasocketbarsmovieicon").css({"display": "block"})
					   $("#m2tov6directviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
				   }
				   else
				   {
					  $("#m2tov6directviasocketbarsmovieicon").fadeIn(300) 
				   }
				   $("#m2tov6directmovieicon").hide()
				   $("#m2tov6movieicon").hide()
			   }
			   else if($("#verticalbar6pic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   $("#m2xtov6directviasocketbarsmovieicon").css({"display": "block"})
					   $("#m2xtov6directviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
				   }
				   else
				   {
					   $("#m2xtov6directviasocketbarsmovieicon").fadeIn(300)
				   }
				   $("#m2xtov6directmovieicon").hide()
				   $("#m2xtov6movieicon").hide()
			   }
			   else if($("#verticalbar6pic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   $("#m2maxtov6directviasocketbarsmovieicon").css({"display": "block"})
					   $("#m2maxtov6directviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
				   }
				   else
				   {
					   $("#m2maxtov6directviasocketbarsmovieicon").fadeIn(300)
				   }
				   $("#m2maxtov6directmovieicon").hide()
				   $("#m2maxtov6movieicon").hide()
			   }
			   else if($("#verticalbar6pic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   $("#articulatingtov6directviasocketbarsmovieicon").css({"display": "block"})
					   $("#articulatingtov6directviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
				   }
				   else
				   {
					   $("#articulatingtov6directviasocketbarsmovieicon").fadeIn(300)
				   }
				   $("#articulatingtov6directmovieicon").hide()
				   $("#articulatingarmtov6movieicon").hide()
			   }
			   else if($("#verticalbar6pic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   $("#articulatingrisertov6directviasocketbarsmovieicon").css({"display": "block"})
					   $("#articulatingrisertov6directviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
				   }
				   else
				   {
					    $("#articulatingrisertov6directviasocketbarsmovieicon").fadeIn(300)
				   }
				   $("#articulatingrisertov6directmovieicon").hide()
				   $("#articulatingrisertov6movieicon").hide()
			   }
			}
   }
   
   function mountingarmstov12viasocketbarsdirect()
   {
	    if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
			{
			   if($("#verticalbar12pic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   $("#m2tov12directviasocketbarsmovieicon").css({"display": "block"})
					   $("#m2tov12directviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
				   }
				   else
				   {
					  $("#m2tov12directviasocketbarsmovieicon").fadeIn(300) 
				   }
				   $("#m2tov12directmovieicon").hide()
				   $("#m2tov12movieicon").hide()
			   }
			   else if($("#verticalbar12pic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   $("#m2xtov12directviasocketbarsmovieicon").css({"display": "block"})
					   $("#m2xtov12directviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
				   }
				   else
				   {
					  $("#m2xtov12directviasocketbarsmovieicon").fadeIn(300) 
				   }
				   $("#m2xtov12directmovieicon").hide()
				   $("#m2xtov12movieicon").hide()
			   }
			   else if($("#verticalbar12pic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   $("#m2maxtov12directviasocketbarsmovieicon").css({"display": "block"})
					   $("#m2maxtov12directviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
				   }
				   else
				   {
					   $("#m2maxtov12directviasocketbarsmovieicon").fadeIn(300)
				   }
				   $("#m2maxtov12directmovieicon").hide()
				   $("#m2maxtov12movieicon").hide()
			   }
			   else if($("#verticalbar12pic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   $("#articulatingtov12directviasocketbarsmovieicon").css({"display": "block"})
					   $("#articulatingtov12directviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
				   }
				   else
				   {
					   $("#articulatingtov12directviasocketbarsmovieicon").fadeIn(300)
				   }
				   $("#articulatingtov12directmovieicon").hide()
				   $("#articulatingarmtov12movieicon").hide()
			   }
			   else if($("#verticalbar12pic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   $("#articulatingrisertov12directviasocketbarsmovieicon").css({"display": "block"})
					   $("#articulatingrisertov12directviasocketbarsmovieiconimg").css({"top": "360px"}).fadeIn(300)
				   }
				   else
				   {
					   $("#articulatingrisertov12directviasocketbarsmovieicon").fadeIn(300)
				   }
				   $("#articulatingrisertov12directmovieicon").hide()
				   $("#articulatingrisertov12movieicon").hide()
			   }
			}
   }
   
   function mountingarmstov6direct()
   {
	   
	   if($("#verticalbar6pic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#m2tov6directmovieicon").css({"display": "block"})
			   $("#m2tov6directmovieiconimg").css({"top": "237px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#m2tov6directmovieicon").css({"display": "block"})
						$("#m2tov6directmovieiconimg").css({"top": "330px"}).fadeIn(300)
						$("#m2tov6movieicon").hide()
					}	
					else			
					{
						$("#m2tov6directmovieicon").css({"display": "block"})
						$("#m2tov6directmovieiconimg").css({"top": "300px"}).fadeIn(300)
						$("#m2tov6movieicon").hide()
					}   
		   }
	   }
	   else if($("#verticalbar6pic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			$("#m2xtov6directmovieicon").css({"display": "block"})
			$("#m2xtov6directmovieiconimg").css({"top": "237px"}).fadeIn(300)			
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#m2xtov6directmovieicon").css({"display": "block"})
						$("#m2xtov6directmovieiconimg").css({"top": "330px"}).fadeIn(300)	
						$("#m2xtov6movieicon").hide() 
					}	
					else			
					{
						$("#m2xtov6directmovieicon").css({"display": "block"})
						$("#m2xtov6directmovieiconimg").css({"top": "300px"}).fadeIn(300)	
						$("#m2xtov6movieicon").hide() 
					}
			  
		   }
	   }
	   else if($("#verticalbar6pic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#m2maxtov6directmovieicon").css({"display": "block"})
			   $("#m2maxtov6directmovieiconimg").css({"top": "237px"}).fadeIn(300)	
		   }
		   
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#m2maxtov6directmovieicon").css({"display": "block"})
					    $("#m2maxtov6directmovieiconimg").css({"top": "330px"}).fadeIn(300)	
					    $("#m2maxtov6movieicon").hide() 
					}	
					else			
					{
						$("#m2maxtov6directmovieicon").css({"display": "block"})
					    $("#m2maxtov6directmovieiconimg").css({"top": "300px"}).fadeIn(300)	
					    $("#m2maxtov6movieicon").hide()  
					}
			     
		   }
	   }
	   else if($("#verticalbar6pic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#articulatingtov6directmovieicon").css({"display": "block"})
			   $("#articulatingtov6directmovieiconimg").css({"top": "237px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#articulatingtov6directmovieicon").css({"display": "block"})
					    $("#articulatingtov6directmovieiconimg").css({"top": "330px"}).fadeIn(300)
					    $("#articulatingtov6movieicon").hide() 
					}	
					else			
					{
						$("#articulatingtov6directmovieicon").css({"display": "block"})
					    $("#articulatingtov6directmovieiconimg").css({"top": "300px"}).fadeIn(300)
					    $("#articulatingtov6movieicon").hide()  
					}
			   
		   }
	   }
	   else if($("#verticalbar6pic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			    $("#articulatingrisertov6directmovieicon").css({"display": "block"})
				$("#articulatingrisertov6directmovieiconimg").css({"top": "237px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#articulatingrisertov6directmovieicon").css({"display": "block"})
					    $("#articulatingrisertov6directmovieiconimg").css({"top": "330px"}).fadeIn(300)
					    $("#articulatingrisertov6movieicon").hide() 
					}	
					else			
					{
						$("#articulatingrisertov6directmovieicon").css({"display": "block"})
					    $("#articulatingrisertov6directmovieiconimg").css({"top": "300px"}).fadeIn(300)
					    $("#articulatingrisertov6movieicon").hide()  
					}
		   }
		  
	   }
	   
   }
   
   function mountingarmstov6()
   {
	   if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
	   {
	   if($("#verticalbar6pic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#m2tov6movieicon").css({"display": "block"})
			   $("#m2tov6movieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#m2tov6movieicon").css({"display": "block"})
						$("#m2tov6movieiconimg").css({"top": "360px"}).fadeIn(300)
						$("#m2tov6directmovieicon").fadeOut(300) 
					}	
					else
					{
						$("#m2tov6movieicon").css({"display": "block"})
						$("#m2tov6movieiconimg").css({"top": "330px"}).fadeIn(300)
						$("#m2tov6directmovieicon").fadeOut(300)
					}
			  
		   }
		   
	   }
	   else if($("#verticalbar6pic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#m2xtov6movieicon").css({"display": "block"})
			   $("#m2xtov6movieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#m2xtov6movieicon").css({"display": "block"})
						$("#m2xtov6movieiconimg").css({"top": "360px"}).fadeIn(300)
						$("#m2xtov6directmovieicon").fadeOut(300) 
					}	
					else
					{
						$("#m2xtov6movieicon").css({"display": "block"})
					    $("#m2xtov6movieiconimg").css({"top": "330px"}).fadeIn(300)
					    $("#m2xtov6directmovieicon").fadeOut(300)
					}
		   }
		   
	   }
	   else if($("#verticalbar6pic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			  $("#m2maxtov6movieicon").css({"display": "block"})
			  $("#m2maxtov6movieiconimg").css({"top": "267px"}).fadeIn(300)		  
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#m2maxtov6movieicon").css({"display": "block"})
					    $("#m2maxtov6movieiconimg").css({"top": "360px"}).fadeIn(300)
					    $("#m2maxtov6directmovieicon").fadeOut(300)
					}	
					else
					{
						$("#m2maxtov6movieicon").css({"display": "block"})
					    $("#m2maxtov6movieiconimg").css({"top": "330px"}).fadeIn(300)
					    $("#m2maxtov6directmovieicon").fadeOut(300)
					}
		   }
		   
	   }
	   else if($("#verticalbar6pic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#articulatingtov6movieicon").css({"display": "block"})
			   $("#articulatingtov6movieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#articulatingtov6movieicon").css({"display": "block"})
						$("#articulatingtov6movieiconimg").css({"top": "360px"}).fadeIn(300)
						$("#articulatingtov6directmovieicon").fadeOut(300)
					}	
					else
					{
						$("#articulatingtov6movieicon").css({"display": "block"})
						$("#articulatingtov6movieiconimg").css({"top": "330px"}).fadeIn(300)
						$("#articulatingtov6directmovieicon").fadeOut(300)
					}
			 
		   }
		   
	   }
	   else if($("#verticalbar6pic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#articulatingrisertov6movieicon").css({"display": "block"})
			   $("#articulatingrisertov6movieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#articulatingrisertov6movieicon").css({"display": "block"})
						$("#articulatingrisertov6movieiconimg").css({"top": "360px"}).fadeIn(300)
						$("#articulatingrisertov6directmovieicon").fadeOut(300)
					}	
					else
					{
						$("#articulatingrisertov6movieicon").css({"display": "block"})
						$("#articulatingrisertov6movieiconimg").css({"top": "330px"}).fadeIn(300)
						$("#articulatingrisertov6directmovieicon").fadeOut(300)
					}
			   
		   }
		   
	   }
	   }
	   else
	   {
		   mountingarmstov6direct(this);
	   }
   }
   
   function mountingarmstov12()
   {
	   if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
	   {
	   if($("#verticalbar12pic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#m2tov12movieicon").css({"display": "block"})
			   $("#m2tov12movieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#m2tov12movieicon").css({"display": "block"})
						$("#m2tov12movieiconimg").css({"top": "360px"}).fadeIn(300)
						$("#m2tov12directmovieicon").hide() 
					}	
					else
					{
						$("#m2tov12movieicon").css({"display": "block"})
						$("#m2tov12movieiconimg").css({"top": "330px"}).fadeIn(300)
						$("#m2tov12directmovieicon").hide() 
					}
		   }
		   
	   }
	   else if($("#verticalbar12pic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#m2xtov12movieicon").css({"display": "block"})
			   $("#m2xtov12movieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#m2xtov12movieicon").css({"display": "block"})
						$("#m2xtov12movieiconimg").css({"top": "360px"}).fadeIn(300)
						$("#m2xtov12directmovieicon").hide() 
					}	
					else
					{
						$("#m2xtov12movieicon").css({"display": "block"})
						$("#m2xtov12movieiconimg").css({"top": "330px"}).fadeIn(300)
						$("#m2xtov12directmovieicon").hide() 
					}
				
		   }
		   
	   }
	   else if($("#verticalbar12pic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#m2maxtov12movieicon").css({"display": "block"})
			   $("#m2maxtov12movieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#m2maxtov12movieicon").css({"display": "block"})
						$("#m2maxtov12movieiconimg").css({"top": "360px"}).fadeIn(300)
						$("#m2maxtov12directmovieicon").hide()  
					}	
					else
					{
						$("#m2maxtov12movieicon").css({"display": "block"})
						$("#m2maxtov12movieiconimg").css({"top": "330px"}).fadeIn(300)
						$("#m2maxtov12directmovieicon").hide()  
					}
				
		   }
		   
	   }
	   else if($("#verticalbar12pic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#articulatingtov12movieicon").css({"display": "block"})
			   $("#articulatingtov12movieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#articulatingtov12movieicon").css({"display": "block"})
						$("#articulatingtov12movieiconimg").css({"top": "360px"}).fadeIn(300)
						$("#articulatingarmtov12directmovieicon").hide()  
					}	
					else
					{
						$("#articulatingtov12movieicon").css({"display": "block"})
						$("#articulatingtov12movieiconimg").css({"top": "330px"}).fadeIn(300)
						$("#articulatingarmtov12directmovieicon").hide()  
					}
				
		   }
		   
	   }
	   else if($("#verticalbar12pic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#articulatingrisertov12movieicon").css({"display": "block"})
			   $("#articulatingrisertov12movieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#articulatingrisertov12movieicon").css({"display": "block"})
					    $("#articulatingrisertov12movieiconimg").css({"top": "360px"}).fadeIn(300)
						$("#articulatingrisertov12directmovieicon").hide()  
					}	
					else
					{
						$("#articulatingrisertov12movieicon").css({"display": "block"})
					    $("#articulatingrisertov12movieiconimg").css({"top": "330px"}).fadeIn(300)
						$("#articulatingrisertov12directmovieicon").hide()  
					}
				
		   }
		   
	   }
	   }
	   else
	   {
		   mountingarmstov12direct(this);
	   }
   }
   
   function mountingarmstov12direct()
   {
	   if($("#verticalbar12pic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
				$("#m2tov12directmovieicon").css({"display": "block"})
				$("#m2tov12directmovieiconimg").css({"top": "237px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#m2tov12directmovieicon").css({"display": "block"})
						$("#m2tov12directmovieiconimg").css({"top": "330px"}).fadeIn(300)
						$("#m2tov12movieicon").hide() 
					}	
					else
					{
						$("#m2tov12directmovieicon").css({"display": "block"})
						$("#m2tov12directmovieiconimg").css({"top": "300px"}).fadeIn(300)
						$("#m2tov12movieicon").hide() 
					}
				
		   }
		   
	   }
	   else if($("#verticalbar12pic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#m2xtov12directmovieicon").css({"display": "block"})
			   $("#m2xtov12directmovieiconimg").css({"top": "237px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#m2xtov12directmovieicon").css({"display": "block"})
					    $("#m2xtov12directmovieiconimg").css({"top": "330px"}).fadeIn(300)
					    $("#m2xtov12movieicon").hide() 
					}	
					else
					{
						$("#m2xtov12directmovieicon").css({"display": "block"})
					    $("#m2xtov12directmovieiconimg").css({"top": "300px"}).fadeIn(300)
					    $("#m2xtov12movieicon").hide() 
					}
			   
		   }
	   }
	   
	   else if($("#verticalbar12pic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#m2maxtov12directmovieicon").css({"display": "block"})
			   $("#m2maxtov12directmovieiconimg").css({"top": "237px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#m2maxtov12directmovieicon").css({"display": "block"})
					    $("#m2maxtov12directmovieiconimg").css({"top": "330px"}).fadeIn(300)
					    $("#m2maxtov12movieicon").hide() 
					}	
					else
					{
						$("#m2maxtov12directmovieicon").css({"display": "block"})
					    $("#m2maxtov12directmovieiconimg").css({"top": "300px"}).fadeIn(300)
					    $("#m2maxtov12movieicon").hide() 
					}
		   }
		   
	   }
	   else if($("#verticalbar12pic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			  $("#articulatingtov12directmovieicon").css({"display": "block"})
			  $("#articulatingtov12directmovieiconimg").css({"top": "237px"}).fadeIn(300)			  
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#articulatingtov12directmovieicon").css({"display": "block"})
					    $("#articulatingtov12directmovieiconimg").css({"top": "330px"}).fadeIn(300)
					    $("#articulatingarmtov12movieicon").hide() 
					}	
					else
					{
						$("#articulatingtov12directmovieicon").css({"display": "block"})
					    $("#articulatingtov12directmovieiconimg").css({"top": "300px"}).fadeIn(300)
					    $("#articulatingarmtov12movieicon").hide() 
					}
		   }
		  
	   }
	   else if($("#verticalbar12pic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#articulatingrisertov12directmovieicon").css({"display": "block"})
			   $("#articulatingrisertov12directmovieiconimg").css({"top": "237px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
					{
						$("#articulatingrisertov12directmovieicon").css({"display": "block"})
					    $("#articulatingrisertov12directmovieiconimg").css({"top": "330px"}).fadeIn(300)
					    $("#articulatingrisertov12movieicon").hide() 
					}	
					else
					{
						$("#articulatingrisertov12directmovieicon").css({"display": "block"})
					    $("#articulatingrisertov12directmovieiconimg").css({"top": "300px"}).fadeIn(300)
					    $("#articulatingrisertov12movieicon").hide() 
					}
		   }
		   
	   }
   }
   
   function mountingarmstov4video()
   {
		$("#mountingarmstov4").fadeIn(300)   
   }
   
   function mountingarmstov6video()
   {
	   $("#mountingarmstov6").fadeIn(300)
   }
   
   function customarmvideo()
   {
	    $("#mountingarmstov6").fadeIn(300)
   }
   
   function mountingarmstov12video()
   {
	   $("#mountingarmstov12").fadeIn(300)
   }
   
   function lockabletomountingarmsvideo()
   {
	   $("#lockabletomountingarms").fadeIn(300)
   }
   
   function rotarytomountingarmsvideo()
   {
	   $("#rotarytomountingarms").fadeIn(300)
   }
   
   function devicestolockablevideo()
   {
	   $("#rotarywedgereceiverpic").removeClass("chosen")
	   if($("#tabletpic").hasClass("chosen") && $("#lockablewedgereceiverpic").hasClass("chosen"))
	   {
	   $("#tablettolockable").fadeIn(300)
	   }
	   else if($("#laptopplatepic").hasClass("chosen") && $("#lockablewedgereceiverpic").hasClass("chosen"))
	   {
	   $("#laptopplatetolockable").fadeIn(300)
	   }
	   else if($("#ipadairplatepic").hasClass("chosen") && $("#lockablewedgereceiverpic").hasClass("chosen"))
	   {
	   $("#ipadairplatetolockable").fadeIn(300)
	   }
	   else if($("#ipadaircradlepic").hasClass("chosen") && $("#lockablewedgereceiverpic").hasClass("chosen"))
	   {
	   $("#ipadaircradletolockable").fadeIn(300)
	   }
	   else if($("#literacyplatepic").hasClass("chosen") && $("#lockablewedgereceiverpic").hasClass("chosen"))
	   {
	   $("#literacyplatetolockable").fadeIn(300)
	   }
	   else if($("#camerapic").hasClass("chosen") && $("#lockablewedgereceiverpic").hasClass("chosen"))
	   {
	   $("#cameratolockable").fadeIn(300)
	   }
	   else if($("#cupholderpic").hasClass("chosen") && $("#lockablewedgereceiverpic").hasClass("chosen"))
	   {
	   $("#cupholdertolockable").fadeIn(300)
	   }
   }
   
   function devicestorotaryvideo()
   {
	   $("#lockablewedgereceiverpic").removeClass("chosen")
	   if($("#tabletpic").hasClass("chosen") && $("#rotarywedgereceiverpic").hasClass("chosen"))
	   {
	   $("#tablettorotary").fadeIn(300)
	   }
	   else if($("#laptopplatepic").hasClass("chosen") && $("#rotarywedgereceiverpic").hasClass("chosen"))
	   {
	   $("#laptopplatetorotary").fadeIn(300)
	   }
	   else if($("#ipadairplatepic").hasClass("chosen") && $("#rotarywedgereceiverpic").hasClass("chosen"))
	   {
	   $("#ipadairplatetorotary").fadeIn(300)
	   }
	   else if($("#ipadaircradlepic").hasClass("chosen") && $("#rotarywedgereceiverpic").hasClass("chosen"))
	   {
	   $("#ipadaircradletorotary").fadeIn(300)
	   }
	   else if($("#literacyplatepic").hasClass("chosen") && $("#rotarywedgereceiverpic").hasClass("chosen"))
	   {
	   $("#literacyplatetorotary").fadeIn(300)
	   }
	   else if($("#camerapic").hasClass("chosen") && $("#rotarywedgereceiverpic").hasClass("chosen"))
	   {
	   $("#cameratorotary").fadeIn(300)
	   }
	   else if($("#cupholderpic").hasClass("chosen") && $("#rotarywedgereceiverpic").hasClass("chosen"))
	   {
	   $("#cupholdertorotary").fadeIn(300)
	   }
   }
   
   function devicestowedgemountvideo()
   {
	   $("#lockablewedgereceiverpic").removeClass("chosen")
	   $("#rotarywedgereceiverpic").removeClass("chosen")
	   if($("#tabletpic").hasClass("chosen"))
	   {
	   $("#tablettowedgemount").fadeIn(300)
	   }
	   else if($("#laptopplatepic").hasClass("chosen"))
	   {
	   $("#laptopplatetowedgemount").fadeIn(300)
	   }
	   else if($("#ipadairplatepic").hasClass("chosen"))
	   {
	   $("#ipadairplatetowedgemount").fadeIn(300)
	   }
	   else if($("#ipadaircradlepic").hasClass("chosen"))
	   {
	   $("#ipadaircradletowedgemount").fadeIn(300)
	   }
	   else if($("#literacyplatepic").hasClass("chosen"))
	   {
	   $("#literacyplatetowedgemount").fadeIn(300)
	   }
	   else if($("#camerapic").hasClass("chosen"))
	   {
	   $("#cameratowedgemount").fadeIn(300)
	   }
   }
</script>
<script>
   function mx(x){
   	$("#m2xinputpar").show()
   	$("#m2xpic").fadeIn(2000).addClass("chosen")
	
	modelManager._armPartsCount = 4;
	modelManager.addModel("101");
	modelManager.addModel("204");
	modelManager.addModel("206");
	modelManager.addModel("301");
   }
</script>
<script>
   function m2max(x){
   	$("#m2maxinputpar").show()
   	$("#m2maxpic").fadeIn(2000).addClass("chosen")
	
	modelManager._armPartsCount = 4;
	modelManager.addModel("101");
	modelManager.addModel("205");
	modelManager.addModel("206");
	modelManager.addModel("301");
   }
</script>
<script>
   function articulating(x){
   	$("#articulatinginputpar").show()
   	$("#articulatingarmpic").fadeIn(2000).addClass("chosen")

	modelManager._armPartsCount = 4;
	modelManager.addModel("101");
	modelManager.addModel("201");
	modelManager.addModel("201");
	modelManager.addModel("301");
   }
</script>
<script>
   function articulatingriser(x){
   	$("#articulatingriserinputpar").show()	
   	$("#articulatingarmriserpic").fadeIn(2000).addClass("chosen")
	
	modelManager._armPartsCount = 4;
	modelManager.addModel("101");
	modelManager.addModel("202");
	modelManager.addModel("201");
	modelManager.addModel("201");
	modelManager.addModel("301");
   }
</script>
<script>
   function lockablewedge(x){
   	$("#lockableinputpar").show()	
   	$("#lockablewedgereceiverpic").fadeIn(2000).addClass("chosen")
	$("#rotarywedgereceiverpic").removeClass("chosen")
	
	if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
	   {
		if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
		   {
				if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
					 $("#lockabletomountingarmsmovieicon").css({"display":"block"})
					 $("#lockabletomountingarmsmovieiconimg").css({"top":"297px"}).fadeIn(300)
				   }
				   else
				   {
					   if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						 $("#lockabletomountingarmsmovieicon").css({"display":"block"})
						 $("#lockabletomountingarmsmovieiconimg").css({"top":"390px"}).fadeIn(300)
					   }
					   else
					   {
						$("#lockabletomountingarmsmovieicon").css({"display":"block"})
						$("#lockabletomountingarmsmovieiconimg").css({"top":"360px"}).fadeIn(300)   
					   }
					
				   }
		   }
		   else if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
		   {
			   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
					 $("#lockabletomountingarmsmovieicon").css({"display":"block"})
					 $("#lockabletomountingarmsmovieiconimg").css({"top":"297px"}).fadeIn(300)
				   }
				   else
				   {
					if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						 $("#lockabletomountingarmsmovieicon").css({"display":"block"})
						 $("#lockabletomountingarmsmovieiconimg").css({"top":"390px"}).fadeIn(300)
					   }
					   else
					   {
						$("#lockabletomountingarmsmovieicon").css({"display":"block"})
						$("#lockabletomountingarmsmovieiconimg").css({"top":"360px"}).fadeIn(300)   
					   }
				   }
		   }
		   else if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
		   {
			   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
					 $("#lockabletomountingarmsmovieicon").css({"display":"block"})
					 $("#lockabletomountingarmsmovieiconimg").css({"top":"297px"}).fadeIn(300)
				   }
				   else
				   {
					if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						 $("#lockabletomountingarmsmovieicon").css({"display":"block"})
						 $("#lockabletomountingarmsmovieiconimg").css({"top":"390px"}).fadeIn(300)
					   }
					   else
					   {
						$("#lockabletomountingarmsmovieicon").css({"display":"block"})
						$("#lockabletomountingarmsmovieiconimg").css({"top":"360px"}).fadeIn(300)   
					   }
				   }
		   }
		   else if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
		   {
			   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
					 $("#lockabletomountingarmsmovieicon").css({"display":"block"})
					 $("#lockabletomountingarmsmovieiconimg").css({"top":"297px"}).fadeIn(300)
				   }
				   else
				   {
					if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						 $("#lockabletomountingarmsmovieicon").css({"display":"block"})
						 $("#lockabletomountingarmsmovieiconimg").css({"top":"390px"}).fadeIn(300)
					   }
					   else
					   {
						$("#lockabletomountingarmsmovieicon").css({"display":"block"})
						$("#lockabletomountingarmsmovieiconimg").css({"top":"360px"}).fadeIn(300)   
					   }
				   }
		   }
		   else if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
		   {
			  if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
					 $("#lockabletomountingarmsmovieicon").css({"display":"block"})
					 $("#lockabletomountingarmsmovieiconimg").css({"top":"297px"}).fadeIn(300)
				   }
				   else
				   {
					if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						 $("#lockabletomountingarmsmovieicon").css({"display":"block"})
						 $("#lockabletomountingarmsmovieiconimg").css({"top":"390px"}).fadeIn(300)
					   }
					   else
					   {
						$("#lockabletomountingarmsmovieicon").css({"display":"block"})
						$("#lockabletomountingarmsmovieiconimg").css({"top":"360px"}).fadeIn(300)   
					   }
				   }
		   }
		   else
		   {
			if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
					 $("#lockabletomountingarmsmovieicon").css({"display":"block"})
					 $("#lockabletomountingarmsmovieiconimg").css({"top":"297px"}).fadeIn(300)
				   }
				   else
				   {
					if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						 $("#lockabletomountingarmsmovieicon").css({"display":"block"})
						 $("#lockabletomountingarmsmovieiconimg").css({"top":"390px"}).fadeIn(300)
					   }
					   else
					   {
						$("#lockabletomountingarmsmovieicon").css({"display":"block"})
						$("#lockabletomountingarmsmovieiconimg").css({"top":"360px"}).fadeIn(300)   
					   }
					$("#lockabletomountingarmsdirectmovieicon").hide()
				   }
		   }
	   }
	   else
	   {
		   lockablewedgedirect(this);
	   }
	   
	modelManager.addModel("4002");
   }
   
   function lockablewedgeviasocketbars()
   {
	   if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
			{
				if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
				   {
					if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
					   {
						   if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#lockabletomountingarmsviasocketbarsmovieicon").css({"display":"block"})
								   $("#lockabletomountingarmsviasocketbarsmovieiconimg").css({"top":"420px"}).fadeIn(300)
							   }
							   else
							   {
								   $("#lockabletomountingarmsviasocketbarsmovieicon").fadeIn(300)
							   }
						   $("#lockabletomountingarmsmovieicon").hide()
					   }
					   else if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
					   {
						   if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#lockabletomountingarmsviasocketbarsmovieicon").css({"display":"block"})
								   $("#lockabletomountingarmsviasocketbarsmovieiconimg").css({"top":"420px"}).fadeIn(300)
							   }
							   else
							   {
								   $("#lockabletomountingarmsviasocketbarsmovieicon").fadeIn(300)
							   }
						   $("#lockabletomountingarmsmovieicon").hide()
					   }
					   else if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
					   {
						    if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#lockabletomountingarmsviasocketbarsmovieicon").css({"display":"block"})
								   $("#lockabletomountingarmsviasocketbarsmovieiconimg").css({"top":"420px"}).fadeIn(300)
							   }
							   else
							   {
								   $("#lockabletomountingarmsviasocketbarsmovieicon").fadeIn(300)
							   }
						   $("#lockabletomountingarmsmovieicon").hide()
					   }
					   else if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
					   {
						  if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#lockabletomountingarmsviasocketbarsmovieicon").css({"display":"block"})
								   $("#lockabletomountingarmsviasocketbarsmovieiconimg").css({"top":"420px"}).fadeIn(300)
							   }
							   else
							   {
								   $("#lockabletomountingarmsviasocketbarsmovieicon").fadeIn(300)
							   }
						   $("#lockabletomountingarmsmovieicon").hide()
					   }
					   
					   else if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
					   {
						   if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#lockabletomountingarmsviasocketbarsmovieicon").css({"display":"block"})
								   $("#lockabletomountingarmsviasocketbarsmovieiconimg").css({"top":"420px"}).fadeIn(300)
							   }
							   else
							   {
								   $("#lockabletomountingarmsviasocketbarsmovieicon").fadeIn(300)
							   }
						   $("#lockabletomountingarmsmovieicon").hide()
					   }
					   else
					   {
						if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#lockabletomountingarmsviasocketbarsmovieicon").css({"display":"block"})
								   $("#lockabletomountingarmsviasocketbarsmovieiconimg").css({"top":"420px"}).fadeIn(300)
							   }
							   else
							   {
								   $("#lockabletomountingarmsviasocketbarsmovieicon").fadeIn(300)
							   }
						   //$("#lockabletomountingarmsmovieicon").hide()
						$("#lockabletomountingarmsviasocketbarsdirectmovieicon").hide()
					   }
				   }
				   else
				   {
					   lockablewedgeviasocketbarsdirect(this);
				   }
			}
   }
   
   function lockablewedgedirect(x)
   {
	if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
				$("#lockabletomountingarmsdirectmovieicon").css({"display": "block"})
				$("#lockabletomountingarmsdirectmovieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
			   {
				  $("#lockabletomountingarmsdirectmovieicon").css({"display": "block"})
				  $("#lockabletomountingarmsdirectmovieiconimg").css({"top": "360px"}).fadeIn(300) 
			   }
			   else
			   {
				$("#lockabletomountingarmsdirectmovieicon").css({"display": "block"})
				$("#lockabletomountingarmsdirectmovieiconimg").css({"top": "330px"}).fadeIn(300)   
			   }
		   }
	   }
	   else if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
				$("#lockabletomountingarmsdirectmovieicon").css({"display": "block"})
				$("#lockabletomountingarmsdirectmovieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
			   {
				  $("#lockabletomountingarmsdirectmovieicon").css({"display": "block"})
				  $("#lockabletomountingarmsdirectmovieiconimg").css({"top": "360px"}).fadeIn(300) 
			   }
			   else
			   {
				$("#lockabletomountingarmsdirectmovieicon").css({"display": "block"})
				$("#lockabletomountingarmsdirectmovieiconimg").css({"top": "330px"}).fadeIn(300)   
			   }
		   }
	   }
	   else if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
				$("#lockabletomountingarmsdirectmovieicon").css({"display": "block"})
				$("#lockabletomountingarmsdirectmovieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
				if($("#ninetydegreebracket").hasClass("chosen"))
			   {
				  $("#lockabletomountingarmsdirectmovieicon").css({"display": "block"})
				  $("#lockabletomountingarmsdirectmovieiconimg").css({"top": "360px"}).fadeIn(300) 
			   }
			   else
			   {
				$("#lockabletomountingarmsdirectmovieicon").css({"display": "block"})
				$("#lockabletomountingarmsdirectmovieiconimg").css({"top": "330px"}).fadeIn(300)   
			   }
		   }
	   }
	   else if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
				$("#lockabletomountingarmsdirectmovieicon").css({"display": "block"})
				$("#lockabletomountingarmsdirectmovieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
				if($("#ninetydegreebracket").hasClass("chosen"))
			   {
				  $("#lockabletomountingarmsdirectmovieicon").css({"display": "block"})
				  $("#lockabletomountingarmsdirectmovieiconimg").css({"top": "360px"}).fadeIn(300) 
			   }
			   else
			   {
				$("#lockabletomountingarmsdirectmovieicon").css({"display": "block"})
				$("#lockabletomountingarmsdirectmovieiconimg").css({"top": "330px"}).fadeIn(300)   
			   }
		   }
	   }
	   else if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
				$("#lockabletomountingarmsdirectmovieicon").css({"display": "block"})
				$("#lockabletomountingarmsdirectmovieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
				if($("#ninetydegreebracket").hasClass("chosen"))
			   {
				  $("#lockabletomountingarmsdirectmovieicon").css({"display": "block"})
				  $("#lockabletomountingarmsdirectmovieiconimg").css({"top": "360px"}).fadeIn(300) 
			   }
			   else
			   {
				$("#lockabletomountingarmsdirectmovieicon").css({"display": "block"})
				$("#lockabletomountingarmsdirectmovieiconimg").css({"top": "330px"}).fadeIn(300)   
			   }
		   }
	   }
	   else
	   {
		    if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
				$("#lockabletomountingarmsdirectmovieicon").css({"display": "block"})
				$("#lockabletomountingarmsdirectmovieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
			   {
				  $("#lockabletomountingarmsdirectmovieicon").css({"display": "block"})
				  $("#lockabletomountingarmsdirectmovieiconimg").css({"top": "360px"}).fadeIn(300) 
			   }
			   else
			   {
				$("#lockabletomountingarmsdirectmovieicon").css({"display": "block"})
				$("#lockabletomountingarmsdirectmovieiconimg").css({"top": "330px"}).fadeIn(300)   
			   }
				$("#lockabletomountingarmsmovieicon").hide()
		   }
			 
	   }
   }
   
   function lockablewedgeviasocketbarsdirect(x)
   {
	   if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
			{
			if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#lockabletomountingarmsviasocketbarsdirectmovieicon").css({"display":"block"})
								   $("#lockabletomountingarmsviasocketbarsdirectmovieiconimg").css({"top":"390px"}).fadeIn(300)
							   }
							   else
							   {
								   $("#lockabletomountingarmsviasocketbarsdirectmovieicon").fadeIn(300)
							   }
				   $("#lockabletomountingarmsdirectmovieicon").hide()
			   }
			   else if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#lockabletomountingarmsviasocketbarsdirectmovieicon").css({"display":"block"})
								   $("#lockabletomountingarmsviasocketbarsdirectmovieiconimg").css({"top":"390px"}).fadeIn(300)
							   }
							   else
							   {
								   $("#lockabletomountingarmsviasocketbarsdirectmovieicon").fadeIn(300)
							   }
				   $("#lockabletomountingarmsdirectmovieicon").hide()
			   }
			   else if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#lockabletomountingarmsviasocketbarsdirectmovieicon").css({"display":"block"})
								   $("#lockabletomountingarmsviasocketbarsdirectmovieiconimg").css({"top":"390px"}).fadeIn(300)
							   }
							   else
							   {
								   $("#lockabletomountingarmsviasocketbarsdirectmovieicon").fadeIn(300)
							   }
				   $("#lockabletomountingarmsdirectmovieicon").hide()
			   }
			   else if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
			   {
				  if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#lockabletomountingarmsviasocketbarsdirectmovieicon").css({"display":"block"})
								   $("#lockabletomountingarmsviasocketbarsdirectmovieiconimg").css({"top":"390px"}).fadeIn(300)
							   }
							   else
							   {
								   $("#lockabletomountingarmsviasocketbarsdirectmovieicon").fadeIn(300)
							   }
				   $("#lockabletomountingarmsdirectmovieicon").hide()
			   }
			   else if($("#lockablewedgereceiverpic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
			   {
				  if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#lockabletomountingarmsviasocketbarsdirectmovieicon").css({"display":"block"})
								   $("#lockabletomountingarmsviasocketbarsdirectmovieiconimg").css({"top":"390px"}).fadeIn(300)
							   }
							   else
							   {
								   $("#lockabletomountingarmsviasocketbarsdirectmovieicon").fadeIn(300)
							   }
				   $("#lockabletomountingarmsdirectmovieicon").hide()
			   }
			   else
			   {
					if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#lockabletomountingarmsviasocketbarsdirectmovieicon").css({"display":"block"})
								   $("#lockabletomountingarmsviasocketbarsdirectmovieiconimg").css({"top":"390px"}).fadeIn(300)
							   }
							   else
							   {
								   $("#lockabletomountingarmsviasocketbarsdirectmovieicon").fadeIn(300)
							   }
				    $("#lockabletomountingarmsviasocketbarsmovieicon").hide()
			   }
			}
   }
</script>
<script>
   function rotarywedge(x){
   	$("#rotaryinputpar").show()	
   	$("#rotarywedgereceiverpic").fadeIn(2000).addClass("chosen")
	$("#lockablewedgereceiverpic").removeClass("chosen")
	
	if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
	   {
		if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
		   {
			   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
					   $("#rotarytomountingarmsmovieicon").css({"display":"block"})
					   $("#rotarytomountingarmsmovieiconimg").css({"top":"297px"}).fadeIn(300)
				   }
				   else
				   {
					   if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						  $("#rotarytomountingarmsmovieicon").css({"display":"block"})
						  $("#rotarytomountingarmsmovieiconimg").css({"top":"390px"}).fadeIn(300)
					   }
					   else
					   {
						$("#rotarytomountingarmsmovieicon").css({"display":"block"})
					    $("#rotarytomountingarmsmovieiconimg").css({"top":"360px"}).fadeIn(300)   
					   }
					   
				   }
		   }
		   else if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
		   {
			   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
					   $("#rotarytomountingarmsmovieicon").css({"display":"block"})
					   $("#rotarytomountingarmsmovieiconimg").css({"top":"297px"}).fadeIn(300)
				   }
				   else
				   {
					   if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						  $("#rotarytomountingarmsmovieicon").css({"display":"block"})
						  $("#rotarytomountingarmsmovieiconimg").css({"top":"390px"}).fadeIn(300)
					   }
					   else
					   {
						$("#rotarytomountingarmsmovieicon").css({"display":"block"})
					    $("#rotarytomountingarmsmovieiconimg").css({"top":"360px"}).fadeIn(300)   
					   }
				   }
		   }
		   else if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
		   {
			   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
					   $("#rotarytomountingarmsmovieicon").css({"display":"block"})
					   $("#rotarytomountingarmsmovieiconimg").css({"top":"297px"}).fadeIn(300)
				   }
				   else
				   {
					   if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						  $("#rotarytomountingarmsmovieicon").css({"display":"block"})
						  $("#rotarytomountingarmsmovieiconimg").css({"top":"390px"}).fadeIn(300)
					   }
					   else
					   {
						$("#rotarytomountingarmsmovieicon").css({"display":"block"})
					    $("#rotarytomountingarmsmovieiconimg").css({"top":"360px"}).fadeIn(300)   
					   }
				   }
		   }
		   else if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
		   {
			   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
					   $("#rotarytomountingarmsmovieicon").css({"display":"block"})
					   $("#rotarytomountingarmsmovieiconimg").css({"top":"297px"}).fadeIn(300)
				   }
				   else
				   {
					   if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						  $("#rotarytomountingarmsmovieicon").css({"display":"block"})
						  $("#rotarytomountingarmsmovieiconimg").css({"top":"390px"}).fadeIn(300)
					   }
					   else
					   {
						$("#rotarytomountingarmsmovieicon").css({"display":"block"})
					    $("#rotarytomountingarmsmovieiconimg").css({"top":"360px"}).fadeIn(300)   
					   }
				   }
		   }
		   else if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
		   {
			   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
					   $("#rotarytomountingarmsmovieicon").css({"display":"block"})
					   $("#rotarytomountingarmsmovieiconimg").css({"top":"297px"}).fadeIn(300)
				   }
				   else
				   {
					   if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						  $("#rotarytomountingarmsmovieicon").css({"display":"block"})
						  $("#rotarytomountingarmsmovieiconimg").css({"top":"390px"}).fadeIn(300)
					   }
					   else
					   {
						$("#rotarytomountingarmsmovieicon").css({"display":"block"})
					    $("#rotarytomountingarmsmovieiconimg").css({"top":"360px"}).fadeIn(300)   
					   }
				   }
		   }
		   else
		   {
			  if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
					   $("#rotarytomountingarmsmovieicon").css({"display":"block"})
					   $("#rotarytomountingarmsmovieiconimg").css({"top":"297px"}).fadeIn(300)
				   }
				   else
				   {
					   if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						  $("#rotarytomountingarmsmovieicon").css({"display":"block"})
						  $("#rotarytomountingarmsmovieiconimg").css({"top":"390px"}).fadeIn(300)
					   }
					   else
					   {
						$("#rotarytomountingarmsmovieicon").css({"display":"block"})
					    $("#rotarytomountingarmsmovieiconimg").css({"top":"360px"}).fadeIn(300)   
					   }
					   $("#rotarytomountingarmsdirectmovieicon").hide()
				   }
		   }
	   }
	   else
	   {
		   rotarywedgedirect(this);
	   }
	   
		modelManager.addModel("4001");
   }
   
   function rotarywedgeviasocketbars()
   {
	    if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
			{
				if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
				   {
					if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
					   {
						   if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#rotarytomountingarmsviasocketbarsmovieicon").css({"display":"block"})
								   $("#rotarytomountingarmsviasocketbarsmovieiconimg").css({"top":"420px"}).fadeIn(300)
							   }
							   else
							   {
								   $("#rotarytomountingarmsviasocketbarsmovieicon").fadeIn(300)
							   }
						   $("#rotarytomountingarmsmovieicon").hide()
					   }
					   else if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
					   {
						   if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#rotarytomountingarmsviasocketbarsmovieicon").css({"display":"block"})
								   $("#rotarytomountingarmsviasocketbarsmovieiconimg").css({"top":"420px"}).fadeIn(300)
							   }
							   else
							   {
								   $("#rotarytomountingarmsviasocketbarsmovieicon").fadeIn(300)
							   }
						   $("#rotarytomountingarmsmovieicon").hide()
					   }
					   else if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
					   {
						   if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#rotarytomountingarmsviasocketbarsmovieicon").css({"display":"block"})
								   $("#rotarytomountingarmsviasocketbarsmovieiconimg").css({"top":"420px"}).fadeIn(300)
							   }
							   else
							   {
								   $("#rotarytomountingarmsviasocketbarsmovieicon").fadeIn(300)
							   }
						   $("#rotarytomountingarmsmovieicon").hide()
					   }
					   else if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
					   {
						   if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#rotarytomountingarmsviasocketbarsmovieicon").css({"display":"block"})
								   $("#rotarytomountingarmsviasocketbarsmovieiconimg").css({"top":"420px"}).fadeIn(300)
							   }
							   else
							   {
								   $("#rotarytomountingarmsviasocketbarsmovieicon").fadeIn(300)
							   }
						   $("#rotarytomountingarmsmovieicon").hide()
					   }
					   else if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
					   {
						   if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#rotarytomountingarmsviasocketbarsmovieicon").css({"display":"block"})
								   $("#rotarytomountingarmsviasocketbarsmovieiconimg").css({"top":"420px"}).fadeIn(300)
							   }
							   else
							   {
								   $("#rotarytomountingarmsviasocketbarsmovieicon").fadeIn(300)
							   }
						   $("#rotarytomountingarmsmovieicon").hide()
					   }
					   else
					   {
						 if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#rotarytomountingarmsviasocketbarsmovieicon").css({"display":"block"})
								   $("#rotarytomountingarmsviasocketbarsmovieiconimg").css({"top":"420px"}).fadeIn(300)
							   }
							   else
							   {
								   $("#rotarytomountingarmsviasocketbarsmovieicon").fadeIn(300)
							   }
						  $("#rotarytomountingarmsviasocketbarsdirectmovieicon").hide()
					   }
				   }
				   else
				   {
					   rotarywedgeviasocketbarsdirect(this);
				   }
			}				
   }
   
   
   function rotarywedgedirect(x){
	
	if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#rotarytomountingarmsdirectmovieicon").css({"display": "block"})
			   $("#rotarytomountingarmsdirectmovieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
			   {
				  $("#rotarytomountingarmsdirectmovieicon").css({"display": "block"})
				  $("#rotarytomountingarmsdirectmovieiconimg").css({"top": "360px"}).fadeIn(300) 
			   }
			   else
			   {
				$("#rotarytomountingarmsdirectmovieicon").css({"display": "block"})
			    $("#rotarytomountingarmsdirectmovieiconimg").css({"top": "330px"}).fadeIn(300)   
			   }
			   
		   }
	   }
	   else if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#rotarytomountingarmsdirectmovieicon").css({"display": "block"})
			   $("#rotarytomountingarmsdirectmovieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
			   {
				  $("#rotarytomountingarmsdirectmovieicon").css({"display": "block"})
				  $("#rotarytomountingarmsdirectmovieiconimg").css({"top": "360px"}).fadeIn(300) 
			   }
			   else
			   {
				$("#rotarytomountingarmsdirectmovieicon").css({"display": "block"})
			    $("#rotarytomountingarmsdirectmovieiconimg").css({"top": "330px"}).fadeIn(300)   
			   }
		   }
	   }
	   else if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#rotarytomountingarmsdirectmovieicon").css({"display": "block"})
			   $("#rotarytomountingarmsdirectmovieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
			   {
				  $("#rotarytomountingarmsdirectmovieicon").css({"display": "block"})
				  $("#rotarytomountingarmsdirectmovieiconimg").css({"top": "360px"}).fadeIn(300) 
			   }
			   else
			   {
				$("#rotarytomountingarmsdirectmovieicon").css({"display": "block"})
			    $("#rotarytomountingarmsdirectmovieiconimg").css({"top": "330px"}).fadeIn(300)   
			   }
		   }
	   }
	   else if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#rotarytomountingarmsdirectmovieicon").css({"display": "block"})
			   $("#rotarytomountingarmsdirectmovieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
			   {
				  $("#rotarytomountingarmsdirectmovieicon").css({"display": "block"})
				  $("#rotarytomountingarmsdirectmovieiconimg").css({"top": "360px"}).fadeIn(300) 
			   }
			   else
			   {
				$("#rotarytomountingarmsdirectmovieicon").css({"display": "block"})
			    $("#rotarytomountingarmsdirectmovieiconimg").css({"top": "330px"}).fadeIn(300)   
			   }
		   }
	   }
	   else if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#rotarytomountingarmsdirectmovieicon").css({"display": "block"})
			   $("#rotarytomountingarmsdirectmovieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
			   {
				  $("#rotarytomountingarmsdirectmovieicon").css({"display": "block"})
				  $("#rotarytomountingarmsdirectmovieiconimg").css({"top": "360px"}).fadeIn(300) 
			   }
			   else
			   {
				$("#rotarytomountingarmsdirectmovieicon").css({"display": "block"})
			    $("#rotarytomountingarmsdirectmovieiconimg").css({"top": "330px"}).fadeIn(300)   
			   }
		   }
	   }
	   else
	   {
		  if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   $("#rotarytomountingarmsdirectmovieicon").css({"display": "block"})
			   $("#rotarytomountingarmsdirectmovieiconimg").css({"top": "267px"}).fadeIn(300)
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
			   {
				  $("#rotarytomountingarmsdirectmovieicon").css({"display": "block"})
				  $("#rotarytomountingarmsdirectmovieiconimg").css({"top": "360px"}).fadeIn(300) 
			   }
			   else
			   {
				$("#rotarytomountingarmsdirectmovieicon").css({"display": "block"})
			    $("#rotarytomountingarmsdirectmovieiconimg").css({"top": "330px"}).fadeIn(300)   
			   }
			   $("#rotarytomountingarmsmovieicon").hide()
		   } 
	   }
   }
   
   
   function rotarywedgeviasocketbarsdirect(x){
	
	 if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
			{
			if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#m2pic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#rotarytomountingarmsviasocketbarsdirectmovieicon").css({"display":"block"})
								   $("#rotarytomountingarmsviasocketbarsdirectmovieiconimg").css({"top":"390px"}).fadeIn(300)
							   }
							   else
							   {
								    $("#rotarytomountingarmsviasocketbarsdirectmovieicon").fadeIn(300)
							   }
				   $("#rotarytomountingarmsdirectmovieicon").hide()
			   }
			   else if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#m2xpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#rotarytomountingarmsviasocketbarsdirectmovieicon").css({"display":"block"})
								   $("#rotarytomountingarmsviasocketbarsdirectmovieiconimg").css({"top":"390px"}).fadeIn(300)
							   }
							   else
							   {
								    $("#rotarytomountingarmsviasocketbarsdirectmovieicon").fadeIn(300)
							   }
				   $("#rotarytomountingarmsdirectmovieicon").hide()
			   }
			   else if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#m2maxpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#rotarytomountingarmsviasocketbarsdirectmovieicon").css({"display":"block"})
								   $("#rotarytomountingarmsviasocketbarsdirectmovieiconimg").css({"top":"390px"}).fadeIn(300)
							   }
							   else
							   {
								    $("#rotarytomountingarmsviasocketbarsdirectmovieicon").fadeIn(300)
							   }
				   $("#rotarytomountingarmsdirectmovieicon").hide()
			   }
			   else if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#articulatingarmpic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#rotarytomountingarmsviasocketbarsdirectmovieicon").css({"display":"block"})
								   $("#rotarytomountingarmsviasocketbarsdirectmovieiconimg").css({"top":"390px"}).fadeIn(300)
							   }
							   else
							   {
								    $("#rotarytomountingarmsviasocketbarsdirectmovieicon").fadeIn(300)
							   }
				   $("#rotarytomountingarmsdirectmovieicon").hide()
			   }
			   else if($("#rotarywedgereceiverpic").hasClass("chosen") && $("#articulatingarmriserpic").hasClass("chosen"))
			   {
				  if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#rotarytomountingarmsviasocketbarsdirectmovieicon").css({"display":"block"})
								   $("#rotarytomountingarmsviasocketbarsdirectmovieiconimg").css({"top":"390px"}).fadeIn(300)
							   }
							   else
							   {
								    $("#rotarytomountingarmsviasocketbarsdirectmovieicon").fadeIn(300)
							   }
				   $("#rotarytomountingarmsdirectmovieicon").hide()
			   }
			   else
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
							   {
								   $("#rotarytomountingarmsviasocketbarsdirectmovieicon").css({"display":"block"})
								   $("#rotarytomountingarmsviasocketbarsdirectmovieiconimg").css({"top":"390px"}).fadeIn(300)
							   }
							   else
							   {
								    $("#rotarytomountingarmsviasocketbarsdirectmovieicon").fadeIn(300)
							   }
				   $("#rotarytomountingarmsdirectmovieicon").hide()
			   }
			}
   }
</script>
<script>
   function ttrack(x){
   	$(".chairoptions").fadeOut(100)	
   	$("#backstart").fadeOut(100)
   	$("#ttrackref").fadeOut(100)
   	$("#ttrack").addClass("chosen")
   	$("#ttrackinputpar").show()	
   	$("#recommend").delay(1500).fadeIn(200)
   	$("#ttrackpic").delay(200).fadeIn(2000)
   	$("#ttrackbracket").delay(1500).fadeIn(300)
   	$("#ttrackdirect").delay(1500).fadeIn(400)
   	$("#back1").delay(1500).fadeIn(500)	
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble3").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	
	modelManager.addModel("1009");
   }
</script>
<script>	
   function ttrackbracket(x){
   	
	if($("#powerchair").hasClass("chosen") && $("#ttrack").hasClass("chosen"))
	{
		$("#ttrackbrackettottrackmovieicon").fadeIn(300)
	}
	
	$(".chairoptions").fadeOut(100)	
   	$("#back1").fadeOut(100)
   	$("#ttrackbracketref").fadeOut(200)
   	$("#ttrackbracketinputpar").show()	
   	$("#recommend").delay(1500).fadeIn(200)
   	$("#ttrackbracket1").delay(200).fadeIn(2000).addClass("chosen")
   	$("#14socketbar").delay(1500).fadeIn(300)
   	$("#22socketbar").delay(1500).fadeIn(400)
	$("#sersocketbar14").delay(1500).fadeIn(400)
   	$("#back2").delay(1500).fadeIn(500)
	
	modelManager.addModel("2006");
   }
</script>
<script>	
   function ttrackdirect(x){
	
	if($("#powerchair").hasClass("chosen") && $("#ttrack").hasClass("chosen"))
	{
		$("#ttrackdirecttottrackmovieicon").fadeIn(300)
	}
	
   	$(".chairoptions").fadeOut(100)	
   	$("#back1").fadeOut(100)
   	$("#ttrackdirectref").fadeOut(200)
   	$("#ttrackdirectmountinputpar").show()	
   	$("#verticaloptions").delay(1500).fadeIn(200)
   	$("#ttrackdirectpic").delay(200).fadeIn(2000).addClass("chosen")
   	$("#vertical4").delay(1500).fadeIn(300)
   	$("#vertical6").delay(1500).fadeIn(400)
   	$("#vertical12").delay(1500).fadeIn(500)
   	$("#verticaladj").delay(1500).fadeIn(600)
   	$("#verticalextension16").delay(1500).fadeIn(700)
   	$("#verticalextension8").delay(1500).fadeIn(800)
   	$("#back2").delay(1500).fadeIn(900)
	
	modelManager.addModel("2008");
   }
</script>
<script>
   function doublettrack(x){
   	$(".chairoptions").fadeOut(100)	
   	$("#backstart").fadeOut(100)
   	$("#dttrackref").fadeOut(100)
   	$("#doublettrack").addClass("chosen")
   	$("#dttrackinputpar").show()	
   	$("#recommend").delay(1500).fadeIn(200)
   	$("#doublettrackpic").delay(200).fadeIn(2000)
   	$("#doublettrackbracket").delay(1500).fadeIn(300)
   	$("#doublettrackdirect").delay(1500).fadeIn(400)	
   	$("#back1").delay(1500).fadeIn(500)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble3").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	
	modelManager.addModel("1010");
   }
</script>
<script>	
   function dttrackbracket(x){
	
	if($("#powerchair").hasClass("chosen") && $("#doublettrack").hasClass("chosen"))
	{
		$("#dttrackbrackettodttrackmovieicon").fadeIn(300)
	}
	
   	$(".chairoptions").fadeOut(100)	
   	$("#back1").fadeOut(100)
   	$("#dttrackbracketref").fadeOut(200)
   	$("#dttrackbracketinputpar").show()	
   	$("#recommend").delay(1500).fadeIn(200)
   	$("#dttrackbracket1").delay(200).fadeIn(2000).addClass("chosen")
   	$("#14socketbar").delay(1500).fadeIn(300)
   	$("#22socketbar").delay(1500).fadeIn(400)
	$("#sersocketbar14").delay(1500).fadeIn(400)
   	$("#back2").delay(1500).fadeIn(500)
	
	modelManager.addModel("2007");
   }
</script>
<script>	
   function dttrackdirect(x){
	
	if($("#powerchair").hasClass("chosen") && $("#doublettrack").hasClass("chosen"))
	{
		$("#ttrackdirecttodttrackmovieicon").fadeIn(300)
	}
	
   	$(".chairoptions").fadeOut(100)
   	$("#back1").fadeOut(100)
   	$("#ttrackdirectref").fadeOut(200)
   	$("#ttrackdirectmountinputpar").show()		
   	$("#verticaloptions").delay(1500).fadeIn(200)
   	$("#dttrackdirectpic").delay(200).fadeIn(2000).addClass("chosen")
   	$("#vertical4").delay(1500).fadeIn(300)
   	$("#vertical6").delay(1500).fadeIn(400)
   	$("#vertical12").delay(1500).fadeIn(500)
   	$("#verticaladj").delay(1500).fadeIn(600)
   	$("#verticalextension16").delay(1500).fadeIn(700)
   	$("#verticalextension8").delay(1500).fadeIn(800)
   	$("#back2").delay(1500).fadeIn(900)
	
	modelManager.addModel("2008");
   }
</script>
<script>
   function directmount(x){
   	$(".chairoptions").fadeOut(100)
   	$("#backstart").fadeOut(100)
   	$("#verttube").addClass("chosen")
   	$("#roundverttubeinputpar").show()	
   	$("#recommend").delay(200).fadeIn(200)
   	$("#directmount").delay(200).fadeIn(300)
   	$("#serdirectmount").delay(200).fadeIn(400)
	$("#vertserdirectmount").delay(200).fadeIn(400)		
   
   	$("#back1").delay(1500).fadeIn(500)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble3").delay(500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	
	modelManager.addModel("1001");
   }
</script>
<script>	
   function directmountsocket(x){
	   $("#directmountpic").delay(200).fadeIn(2000).addClass("chosen")
	   
	   if($("#manualchair").hasClass("chosen") && $("#ninetydegreebracket").hasClass("chosen"))
	   {
		   $("#directsockettoninetydegreebracketmovieicon").fadeIn(300)
		   $("#directsockettomanualchairmovieicon").fadeOut(200)
		   $("#directmountinputpar").css({"margin-top":"45px"}).show()
		   $("#ninetydegreebracketinputpar").css({"margin-top": "-60px"}).show()
	   }
	   
	   else if($("#powerchair").hasClass("chosen") && $("#ninetydegreebracket").hasClass("chosen"))
	   {
		   $("#directsockettoninetydegreebracketmovieicon").fadeIn(300)
		   $("#directsockettomanualchairmovieicon").fadeOut(200)
		   $("#directmountinputpar").css({"margin-top":"45px"}).show()
		   $("#ninetydegreebracketinputpar").css({"margin-top": "-60px"}).show()
	   }
	   
	   else if($("#manualchair").hasClass("chosen") && $("#directmountpic").hasClass("chosen"))
	   {
		   $("#directsockettomanualchairmovieicon").fadeIn(300)
		   $("#directsockettoninetydegreebracketmovieicon").fadeOut(200)
		   $("#directmountinputpar").show()
	   }
	   
   	$(".chairoptions").fadeOut(100)	
   	$("#back1").fadeOut(100)
   	$("#directmountsocketref").fadeOut(200)	
   	$("#verticaloptions").delay(1500).fadeIn(200)
   	$(".glow").show()
   	$("#vertical4").delay(1500).fadeIn(300)
   	$("#vertical6").delay(1500).fadeIn(400)
   	$("#vertical12").delay(1500).fadeIn(500)
   	$("#verticaladj").delay(1500).fadeIn(600)
   	$("#verticalextension16").delay(1500).fadeIn(700)
   	$("#verticalextension8").delay(1500).fadeIn(800)
   	$("#back2").delay(1500).fadeIn(900)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	   
	   
	   
	modelManager.addModel("2001");
   }
</script>
<script>	
   function serdirectmountsocket(x){
	   $("#serdirectmountpic").delay(200).fadeIn(2000).addClass("chosen")	
	   
	   if($("#manualchair").hasClass("chosen") && $("#ninetydegreebracket").hasClass("chosen"))
	   {
		   $("#serdirectsockettoninetydegreebracketmovieicon").fadeIn(300)
		   $("#sersockettomanualchairmovieicon").fadeOut(200)
		   $("#serdirectmountinputpar").css({"margin-top":"45px"}).show()
		   $("#ninetydegreebracketinputpar").css({"margin-top": "-60px"}).show()
	   }
	   
	   else if($("#powerchair").hasClass("chosen") && $("#ninetydegreebracket").hasClass("chosen"))
	   {
		   $("#serdirectsockettoninetydegreebracketmovieicon").fadeIn(300)
		   $("#sersockettomanualchairmovieicon").fadeOut(200)
		   $("#serdirectmountinputpar").css({"margin-top":"45px"}).show()
		   $("#ninetydegreebracketinputpar").css({"margin-top": "-60px"}).show()
	   }
	   
	   else if($("#manualchair").hasClass("chosen") && $("#serdirectmountpic").hasClass("chosen"))
	   {
		   $("#sersockettomanualchairmovieicon").fadeIn(300)
		   $("#serdirectsockettoninetydegreebracketmovieicon").fadeOut(200)
		   $("#serdirectmountinputpar").show()
	   }
   	$(".chairoptions").fadeOut(100)
   	$("#back1").fadeOut(100)
   	$("#serdirectmountsocketref").fadeOut(200)
   	$("#serdirectmountinputpar").show()		
   	$("#verticaloptions").delay(1500).fadeIn(200)
   	$(".glow").show()
   	$("#vertical4").delay(1500).fadeIn(300)
   	$("#vertical6").delay(1500).fadeIn(400)
   	$("#vertical12").delay(1500).fadeIn(500)
   	$("#verticaladj").delay(1500).fadeIn(600)
   	$("#verticalextension16").delay(1500).fadeIn(700)
   	$("#verticalextension8").delay(1500).fadeIn(800)
   	$("#back2").delay(1500).fadeIn(900)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}

	modelManager.addModel("2002");
   }
</script>
<script>	
   function vertserdirectmountsocket(x){
	   $("#vertserdirectmountpic").delay(200).fadeIn(2000).addClass("chosen")	
	   
	   if($("#manualchair").hasClass("chosen") && $("#ninetydegreebracket").hasClass("chosen"))
	   {
		   $("#vertserdirectsockettoninetydegreebracketmovieicon").fadeIn(300)
		   $("#vertsersockettomanualchairmovieicon").fadeOut(200)
		   $("#vertserdirectmountinputpar").css({"margin-top":"45px"}).show()
		   $("#ninetydegreebracketinputpar").css({"margin-top": "-60px"}).show()
	   }
	   
	   else if($("#powerchair").hasClass("chosen") && $("#ninetydegreebracket").hasClass("chosen"))
	   {
		   $("#vertserdirectsockettoninetydegreebracketmovieicon").fadeIn(300)
		   $("#vertsersockettomanualchairmovieicon").fadeOut(200)
		   $("#vertserdirectmountinputpar").css({"margin-top":"45px"}).show()
		   $("#ninetydegreebracketinputpar").css({"margin-top": "-60px"}).show()
	   }
	   
	   else if($("#manualchair").hasClass("chosen") && $("#vertserdirectmountpic").hasClass("chosen"))
	   {
		   $("#vertsersockettomanualchairmovieicon").fadeIn(300)
		   $("#vertserdirectsockettoninetydegreebracketmovieicon").fadeOut(200)
		   $("#vertserdirectmountinputpar").css({"margin-top":"0px"}).show()
	   }
   	$(".chairoptions").fadeOut(100)
   	$("#back1").fadeOut(100)
   	$("#vertserdirectmountsocketref").fadeOut(200)
   	$("#vertserdirectmountinputpar").show()		
   	$("#verticaloptions").delay(1500).fadeIn(200)
   	$(".glow").show()
   	$("#vertical4").delay(1500).fadeIn(300)
   	$("#vertical6").delay(1500).fadeIn(400)
   	$("#vertical12").delay(1500).fadeIn(500)
   	$("#verticaladj").delay(1500).fadeIn(600)
   	$("#verticalextension16").delay(1500).fadeIn(700)
   	$("#verticalextension8").delay(1500).fadeIn(800)
   	$("#back2").delay(1500).fadeIn(900)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}

	modelManager.addModel("2015");
   }
</script>
<script>
   function squaretube(x){
   	$(".chairoptions").fadeOut(100)	
   	$("#backstart").fadeOut(100)
   	$("#squaretube").addClass("chosen")
   	$("#squaretubeinputpar").show()	
   	$("#recommend").delay(200).fadeIn(200)
   	$("#squaretubebracket").delay(200).fadeIn(150)
   	$("#back1").delay(200).fadeIn(500)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble3").delay(500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
   
	modelManager.addModel("1008");
   }
</script>
<script>	
   function squaretubebracket(x){
   	$(".chairoptions").fadeOut(100)	
   	$("#back1").fadeOut(100)
   	$("#squaretubebracketref").fadeOut(200)
   	$("#squaretubebracketinputpar").show()	
   	$("#recommend").delay(1500).fadeIn(200)
   	$("#squaretubebracketpic").delay(200).fadeIn(2000).addClass("chosen")
   	$("#14socketbar").delay(1500).fadeIn(300)
   	$("#22socketbar").delay(1500).fadeIn(400)
	$("#sersocketbar14").delay(1500).fadeIn(400)
   	$("#back2").delay(1500).fadeIn(500)
	
	if($("#squaretube").hasClass("chosen"))
	{
		$("#squaretubebrackettosquaretubemovieicon").fadeIn(200)
	}
	modelManager.addModel("2003");
   }
   
   function squaretubebrackettosquaretubevideo()
   {
	   $("#squaretubebrackettosquaretube").fadeIn(200)
   }
</script>
<script>
   function roundtube(x){
   	$(".chairoptions").fadeOut(100)	
   	$("#backstart").fadeOut(100)
   	$("#roundtube").addClass("chosen")
   	$("#roundtubeinputpar").show()
   	$("#recommend").delay(200).fadeIn(200)
   	$("#fullring").delay(200).fadeIn(300)
   	$("#zeroclearance").delay(200).fadeIn(400)
	$("#ninetydegreebracket").delay(200).fadeIn(400)
	$("#directmounthorizontal").delay(200).fadeIn(400)
   	$("#back1").delay(200).fadeIn(500)	
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble3").delay(500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	
	modelManager.addModel("1006");
   }
</script>
<script>	
   function fullring(x){
	   
	   if($("#manualchair").hasClass("chosen") && $("#roundtube").hasClass("chosen"))
	   {
		   $("#fullringtomanualchairmovieicon").fadeIn(300)
	   }
	   if($("#powerchair").hasClass("chosen") && $("#roundtube").hasClass("chosen"))
	   {
		   $("#fullringtomanualchairmovieicon").fadeIn(300)
	   }
   	$(".chairoptions").fadeOut(100)
   	$("#fullringref").fadeOut(200)
   	$("#back1").fadeOut(100)
   	$("#fullringbracketinputpar").show()	
   	$("#recommend").delay(1500).fadeIn(200)
   	if($("#manualchair").hasClass("chosen") || $("#powerchair").hasClass("chosen")){
   		$("#fullringbracketmanual").delay(200).fadeIn(2000).addClass("chosen")
   		$("#manualwheel").delay(200).fadeIn(2000)
   	}
   	else{
   		$("#fullringbracket").delay(200).fadeIn(2000).addClass("chosen")
   	}
   	$("#14socketbar").delay(1500).fadeIn(300)
   	$("#22socketbar").delay(1500).fadeIn(400)
	
	if($("#powerchair").hasClass("chosen"))
	{
		
	}
	else
	{
	$("#telescopicBlock").delay(1500).fadeIn(400)
	}
	$("#sersocketbar14").delay(1500).fadeIn(400)
   	$("#back2").delay(1500).fadeIn(500)
   
	modelManager.addModel("2004");
   }
</script>
<script>	
   function zeroclearance(x){
	   if($("#manualchair").hasClass("chosen") && $("#roundtube").hasClass("chosen"))
	   {
		   $("#zeroclearancetomanualchairmovieicon").fadeIn(300)
	   }
	   if($("#powerchair").hasClass("chosen") && $("#roundtube").hasClass("chosen"))
	   {
		   $("#zeroclearancetomanualchairmovieicon").fadeIn(300)
	   }
   	$(".chairoptions").fadeOut(100)	
   	$("#back1").fadeOut(100)
   	$("#zeroclearanceref").fadeOut(200)
   	$("#zeroclearanceinputpar").show()
   	$("#recommend").delay(1500).fadeIn(200)
   	if($("#manualchair").hasClass("chosen") || $("#powerchair").hasClass("chosen")){
   		$("#zeroclearancebracketmanual").delay(200).fadeIn(2000).addClass("chosen")
   		$("#manualwheel").delay(200).fadeIn(2000)
   	}
   	else{
   		$("#zeroclearancebracket").delay(200).fadeIn(2000).addClass("chosen")
   	}
   	$("#14socketbar").delay(1500).fadeIn(300)
   	$("#22socketbar").delay(1500).fadeIn(400)
	if($("#powerchair").hasClass("chosen"))
	{
		
	}
	else
	{
	$("#telescopicBlock").delay(1500).fadeIn(400)
	}
	$("#sersocketbar14").delay(1500).fadeIn(400)
   	$("#back2").delay(1500).fadeIn(500)
	
	modelManager.addModel("2005");
   }
   
   function ninetydegreebracket(x)
   {
	  $(".chairoptions").fadeOut(100)
   	$("#backstart").fadeOut(100)
   	$("#recommend").delay(200).fadeIn(200)
   	$("#directmount").delay(200).fadeIn(300)
   	$("#serdirectmount").delay(200).fadeIn(400)
	$("#vertserdirectmount").delay(200).fadeIn(400)	
   	$("#ninetydegreebracket").fadeOut(200)
   	$("#ninetydegreebracketinputpar").css({"margin-top": "15px"}).show()
	$("#ninetydegreebracket").addClass("chosen")
   	
	if($("#roundtube").hasClass("chosen") && $("#manualchair").hasClass("chosen"))
	   {
		   $("#ninetydegreebrackettomanualchairmovieicon").fadeIn(300)
	   }
	   
	else if($("#verttube").hasClass("chosen") && $("#manualchair").hasClass("chosen"))
	   {
		   $("#ninetydegreebrackettomanualchairmovieicon").fadeIn(300)
	   }
   	
	else if($("#roundtube").hasClass("chosen") && $("#powerchair").hasClass("chosen"))
	   {
		   $("#ninetydegreebrackettomanualchairmovieicon").fadeIn(300)
	   }
	   
	 else if($("#verttube").hasClass("chosen") && $("#powerchair").hasClass("chosen"))
	   {
		   $("#ninetydegreebrackettomanualchairmovieicon").fadeIn(300)
	   }
   		
   
   	$("#back2").delay(1500).fadeIn(500)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble3").delay(500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	
	modelManager.addModel("2011");
   }
   
   function directmounthorizontal(x)
   {
	   $("#directmounthorizontal").addClass("chosen")
	   
	   if($("#manualchair").hasClass("chosen") && $("#roundtube").hasClass("chosen"))
	   {
		   $("#directmounthorizontaltomanualchairmovieicon").fadeIn(300)
	   }
	   
	   if($("#powerchair").hasClass("chosen") && $("#roundtube").hasClass("chosen"))
	   {
		   $("#directmounthorizontaltomanualchairmovieicon").fadeIn(300)
	   }
	   
	   $(".chairoptions").fadeOut(100)	
   	$("#back1").fadeOut(100)
   	$("#directmounthorizontal").fadeOut(200)
   	$("#directmounthorizontalinputpar").show()
   	$("#verticaloptions").delay(1500).fadeIn(200)
   	$("#vertical4").delay(1500).fadeIn(300)
   	$("#vertical6").delay(1500).fadeIn(400)
   	$("#vertical12").delay(1500).fadeIn(500)
   	$("#verticaladj").delay(1500).fadeIn(600)
   	$("#verticalextension16").delay(1500).fadeIn(700)
   	$("#verticalextension8").delay(1500).fadeIn(800)
   	$("#back2").delay(1500).fadeIn(900)
	
	modelManager.addModel("2014");
   }
</script>
<script>
   function socketbar14(x){
   	$(".chairoptions").fadeOut(100)	
   	$("#back2").fadeOut(100)
   	$("#socketbar14ref").fadeOut(200)
   	//$("#socketbar14inputpar").show()
   	$("#verticaloptions").delay(1500).fadeIn(200)
   	$("#vertical4").delay(1500).fadeIn(300)
   	$("#vertical6").delay(1500).fadeIn(400)
   	$("#vertical12").delay(1500).fadeIn(500)
   	$("#verticaladj").delay(1500).fadeIn(600)
   	$("#verticalextension16").delay(1500).fadeIn(700)
   	$("#verticalextension8").delay(1500).fadeIn(800)
   	if($("#fullringbracket").hasClass("chosen")){
   		$("#14socketbarpic").css({"margin-left":"-587px", "margin-top":"-1.25px"})
   		$("#14socketbarpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#fullringclamps").delay(200).fadeIn(2000)	}
   	else if($("#zeroclearancebracket").hasClass("chosen")){
   		$("#14socketbarpic").css({"margin-left":"-595px", "margin-top":"2.5px"})
   		$("#14socketbarpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#zeroclearanceclamps").delay(200).fadeIn(2000)	}
   	else if($("#fullringbracketmanual").hasClass("chosen")){
   		$("#14socketbarpic").css({"margin-left":"-587px", "margin-top":"-1.25px"})
   		$("#14socketbarpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#fullringclampsmanual").delay(200).fadeIn(2000)	}
   	else if($("#zeroclearancebracketmanual").hasClass("chosen")){
   		$("#14socketbarpic").css({"margin-left":"-595px", "margin-top":"2.5px"})
   		$("#14socketbarpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#zeroclearanceclampsmanual").delay(200).fadeIn(2000)	}
   	else if($("#squaretubebracketpic").hasClass("chosen")){
   		$("#14socketbarpic").css({"margin-left":"-595px", "margin-top":"-15.5px"})
   		$("#14socketbarpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#squaretubeclamps").delay(200).fadeIn(2000)	}
   	else if($("#dttrackbracket1").hasClass("chosen")){
   		$("#14socketbarpic").css({"margin-left":"-586.5px", "margin-top":"-15.5px"})
   		$("#14socketbarpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#dttrackbracketclamps").delay(200).fadeIn(2000)	}
   	else if($("#ttrackbracket1").hasClass("chosen")){
   		$("#14socketbarpic").css({"margin-left":"-582.5px", "margin-top":"2.25px"})
   		$("#14socketbarpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#ttrackbracketclamps").delay(200).fadeIn(2000)	}
	else if($("#telescopicBlockpic").hasClass("chosen")){
   		$("#14socketbarpic").css({"margin-left":"-582.5px", "margin-top":"2.25px"})
   		$("#14socketbarpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#telescopicBlockpic").delay(200).fadeIn(2000)	}
	else if($("#squaretubebracketpic").hasClass("chosen")){
   		$("#14socketbarpic").css({"margin-left":"-582.5px", "margin-top":"2.25px"})
   		$("#14socketbarpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#squaretubebracketpic").delay(200).fadeIn(2000)	}	
		
   	$("#back3").delay(1500).fadeIn(900)
	
	if($("#fullringbracketmanual").hasClass("chosen"))
	{
		if($("#14socketbarpic").hasClass("chosen"))
		{
			$("#14socketbartofullringmovieicon").fadeIn(300)
			$("#socketbar14inputpar").css({"margin-top":"17px"}).show()
		}
	}
	if($("#zeroclearancebracketmanual").hasClass("chosen"))
	   {
		   if($("#14socketbarpic").hasClass("chosen"))
		{
			$("#14socketbartozeroclearancemovieicon").fadeIn(300)
			$("#socketbar14inputpar").css({"margin-top":"17px"}).show()
		}
	   }

	  if($("#fullringbracketmanual").hasClass("chosen") || $("#zeroclearancebracketmanual").hasClass("chosen"))
		   { 
		 if($("#telescopicBlockpic").hasClass("chosen") && $("#14socketbarpic").hasClass("chosen"))
		   {
			   $("#14socketbartotelescopicblockmovieicon").css({"display":"block"})
			   $("#14socketbartotelescopicblockmovieiconimg").css({"top":"297px"}).fadeIn(200)
			   $("#socketbar14inputpar").css({"margin-top":"42px"}).show()
			   $("#telescopicBlockinputpar").css({"margin-top":"-60px"}).show()
			   $("#14socketbartozeroclearancemovieicon").fadeOut(200)
			   $("#14socketbartofullringmovieicon").fadeOut(300)
		   }
		   else
		   {
			   
		   }
		   
	   }
	   
	  if($("#squaretubebracketpic").hasClass("chosen"))
	   {
			$("#14socketbartosquaretubebracketmovieicon").fadeIn(300)
			$("#socketbar14inputpar").css({"margin-top":"17px"}).show()
	   }
	   
	   if($("#powerchair").hasClass("chosen") && $("#ttrackbracket1").hasClass("chosen"))
	   {
		   $("#14socketbartottrackbracketmovieicon").fadeIn(200)
		   $("#socketbar14inputpar").css({"margin-top":"17px"}).show()
	   }
	   
	   if($("#powerchair").hasClass("chosen") && $("#dttrackbracket1").hasClass("chosen"))
	   {
		   $("#14socketbartodttrackbracketmovieicon").fadeIn(200)
		   $("#socketbar14inputpar").css({"margin-top":"17px"}).show()
	   }
	   
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	
	modelManager.addModel("2018");
   }
</script>
<script>
   function socketbar22(x){
   	$(".chairoptions").fadeOut(100)	
   	$("#back2").fadeOut(100)
   	$("#socketbar22ref").fadeOut(200)
   	$("#verticaloptions").delay(200).fadeIn(200)
   	$("#vertical4").delay(1500).fadeIn(300)
   	$("#vertical6").delay(1500).fadeIn(400)
   	$("#vertical12").delay(1500).fadeIn(500)
   	$("#verticaladj").delay(1500).fadeIn(600)
   	$("#verticalextension16").delay(1500).fadeIn(700)
   	$("#verticalextension8").delay(1500).fadeIn(800)
   	if($("#fullringbracket").hasClass("chosen")){
   		$("#22socketbarpic").css({"margin-left":"-587px", "margin-top":"-1.25px"})
   		$("#22socketbarpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#fullringclamps").delay(200).fadeIn(2000)	}
   	else if($("#zeroclearancebracket").hasClass("chosen")){
   		$("#22socketbarpic").css({"margin-left":"-595px", "margin-top":"2.5px"})
   		$("#22socketbarpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#zeroclearanceclamps").delay(200).fadeIn(2000)	}
   	else if($("#fullringbracketmanual").hasClass("chosen")){
   		$("#22socketbarpic").css({"margin-left":"-587px", "margin-top":"-1.25px"})
   		$("#22socketbarpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#fullringclampsmanual").delay(200).fadeIn(2000)	}
   	else if($("#zeroclearancebracketmanual").hasClass("chosen")){
   		$("#22socketbarpic").css({"margin-left":"-595px", "margin-top":"2.5px"})
   		$("#22socketbarpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#zeroclearanceclampsmanual").delay(200).fadeIn(2000)	}
   	else if($("#squaretubebracketpic").hasClass("chosen")){
   		$("#22socketbarpic").css({"margin-left":"-595px", "margin-top":"-15.5px"})
   		$("#22socketbarpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#squaretubeclamps").delay(200).fadeIn(2000)	}
   	else if($("#dttrackbracket1").hasClass("chosen")){
   		$("#22socketbarpic").css({"margin-left":"-586.5px", "margin-top":"-15.5px"})
   		$("#22socketbarpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#dttrackbracketclamps").delay(200).fadeIn(2000)	}
   	else if($("#ttrackbracket1").hasClass("chosen")){
   		$("#22socketbarpic").css({"margin-left":"-582.5px", "margin-top":"2.25px"})
   		$("#22socketbarpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#ttrackbracketclamps").delay(200).fadeIn(2000)	}
   	$("#back3").delay(1500).fadeIn(800)
	
	if($("#fullringbracketmanual").hasClass("chosen"))
	   {
		   if($("#22socketbarpic").hasClass("chosen"))
		   {
			   $("#22socketbartofullringmovieicon").fadeIn(300)
			   $("#socketbar22inputpar").css({"margin-top":"17px"}).show()
		   }
		   
	   }
	if($("#zeroclearancebracketmanual").hasClass("chosen"))
	   {
		   if($("#22socketbarpic").hasClass("chosen"))
		   {
			  $("#22socketbartozeroclearancemovieicon").fadeIn(300)
			  $("#socketbar22inputpar").css({"margin-top":"17px"}).show()
		   }
		   
	   }
	
	if($("#fullringbracketmanual").hasClass("chosen") || $("#zeroclearancebracketmanual").hasClass("chosen"))
		{
		if($("#telescopicBlockpic").hasClass("chosen") && $("#22socketbarpic").hasClass("chosen"))
			{
		   $("#22socketbartotelescopicblockmovieicon").css({"display":"block"})
		   $("#22socketbartotelescopicblockmovieiconimg").css({"top":"297px"}).fadeIn(200)
		   $("#socketbar22inputpar").css({"margin-top":"42px"}).show()
		   $("#telescopicBlockinputpar").css({"margin-top":"-60px"}).show()
		   $("#22socketbartofullringmovieicon").fadeOut(200)
		   $("#22socketbartozeroclearancemovieicon").fadeOut(300)
		   }
		   else
		   {
			   
		   }
	   }
	 
	 if($("#squaretubebracketpic").hasClass("chosen") && $("#powerchair").hasClass("chosen"))
	   {
			$("#22socketbartosquaretubebracketmovieicon").fadeIn(300)
			$("#socketbar22inputpar").css({"margin-top":"17px"}).show()
	   }
	   
	if($("#powerchair").hasClass("chosen") && $("#ttrackbracket1").hasClass("chosen"))
	   {
		   $("#22socketbartottrackbracketmovieicon").fadeIn(200)
		   $("#socketbar22inputpar").css({"margin-top":"17px"}).show()
	   }
	   
	if($("#powerchair").hasClass("chosen") && $("#dttrackbracket1").hasClass("chosen"))
	   {
		   $("#22socketbartodttrackbracketmovieicon").fadeIn(200)
		   $("#socketbar22inputpar").css({"margin-top":"17px"}).show()
	   }
	   
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	
	modelManager.addModel("2019");
   }
</script>

<script>
   function sersocketbar14(x){
   	$(".chairoptions").fadeOut(100)	
   	$("#back2").fadeOut(100)
   	//$("#sersocketbar14ref").fadeOut(200)
   	//$("#sersocketbar14inputpar").show()
   	$("#verticaloptions").delay(200).fadeIn(200)
   	$("#vertical4").delay(1500).fadeIn(300)
   	$("#vertical6").delay(1500).fadeIn(400)
   	$("#vertical12").delay(1500).fadeIn(500)
   	$("#verticaladj").delay(1500).fadeIn(600)
   	$("#verticalextension16").delay(1500).fadeIn(700)
   	$("#verticalextension8").delay(1500).fadeIn(800)
   	if($("#fullringbracket").hasClass("chosen")){
   		$("#sersocketbar14pic").css({"margin-left":"-587px", "margin-top":"-1.25px"})
   		$("#sersocketbar14pic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#fullringclamps").delay(200).fadeIn(2000)	}
   	else if($("#zeroclearancebracket").hasClass("chosen")){
   		$("#sersocketbar14pic").css({"margin-left":"-595px", "margin-top":"2.5px"})
   		$("#sersocketbar14pic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#zeroclearanceclamps").delay(200).fadeIn(2000)	}
	else if($("#telescopicBlock").hasClass("chosen")){
   		$("#sersocketbar14inputpar").css({"margin-left":"28px", "margin-top":"20px"})
   		$("#sersocketbar14pic").delay(200).fadeIn(2000).addClass("chosen")
		$("#sersocketbar14inputpar").show()
   		//$("#ttrackbracketclamps").delay(200).fadeIn(2000)
		}
   	else if($("#fullringbracketmanual").hasClass("chosen")){
   		$("#sersocketbar14pic").css({"margin-left":"-587px", "margin-top":"-1.25px"})
   		$("#sersocketbar14pic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#fullringclampsmanual").delay(200).fadeIn(2000)	}
   	else if($("#zeroclearancebracketmanual").hasClass("chosen")){
   		$("#sersocketbar14pic").css({"margin-left":"-595px", "margin-top":"2.5px"})
   		$("#sersocketbar14pic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#zeroclearanceclampsmanual").delay(200).fadeIn(2000)	}
   	else if($("#squaretubebracketpic").hasClass("chosen")){
   		$("#sersocketbar14pic").css({"margin-left":"-595px", "margin-top":"-15.5px"})
   		$("#sersocketbar14pic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#squaretubeclamps").delay(200).fadeIn(2000)	}
   	else if($("#dttrackbracket1").hasClass("chosen")){
   		$("#sersocketbar14pic").css({"margin-left":"-586.5px", "margin-top":"-15.5px"})
   		$("#sersocketbar14pic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#dttrackbracketclamps").delay(200).fadeIn(2000)	}
   	else if($("#ttrackbracket1").hasClass("chosen")){
   		$("#sersocketbar14pic").css({"margin-left":"-582.5px", "margin-top":"2.25px"})
   		$("#sersocketbar14pic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#ttrackbracketclamps").delay(200).fadeIn(2000)	}
	
   	$("#back3").delay(1500).fadeIn(800)
	
	if($("#fullringbracketmanual").hasClass("chosen"))
	   {
		   if($("#sersocketbar14pic").hasClass("chosen"))
		   {
				$("#sersocketbar14tofullringmovieicon").fadeIn(300)
				$("#sersocketbar14inputpar").css({"margin-top":"17px"}).show()
		   }
	   }
	
	if($("#zeroclearancebracketmanual").hasClass("chosen"))
	   {
		   if($("#sersocketbar14pic").hasClass("chosen"))
		   {
			   $("#sersocketbar14tozeroclearancemovieicon").fadeIn(300)
			   $("#sersocketbar14inputpar").css({"margin-top":"17px"}).show()
		   }
		   
	   }
	
	if($("#fullringbracketmanual").hasClass("chosen") || $("#zeroclearancebracketmanual").hasClass("chosen"))
	{
	if($("#telescopicBlockpic").hasClass("chosen") && $("#sersocketbar14pic").hasClass("chosen"))
	   {
		   $("#sersocketbartotelescopicblockmovieicon").css({"display":"block"})
		   $("#sersocketbartotelescopicblockmovieiconimg").css({"top":"297px"}).fadeIn(200)
		   $("#sersocketbar14inputpar").css({"margin-top":"42px"}).show()
		   $("#telescopicBlockinputpar").css({"margin-top":"-60px"}).show()
		   $("#sersocketbar14tofullringmovieicon").fadeOut(200)
		   $("#sersocketbar14tozeroclearancemovieicon").fadeOut(200)
	   }
	   else
	   {

	   }
	}
	
	if($("#squaretubebracketpic").hasClass("chosen") && $("#powerchair").hasClass("chosen"))
	   {
			$("#sersocketbartosquaretubebracketmovieicon").fadeIn(300)
			$("#sersocketbar14inputpar").css({"margin-top":"17px"}).show()
	   }
	   
	if($("#powerchair").hasClass("chosen") && $("#ttrackbracket1").hasClass("chosen"))
	   {
		   $("#sersocketbartottrackbracketmovieicon").fadeIn(200)
		   $("#sersocketbar14inputpar").css({"margin-top":"17px"}).show()
	   }
	   
	if($("#powerchair").hasClass("chosen") && $("#dttrackbracket1").hasClass("chosen"))
	   {
		   $("#sersocketbartodttrackbracketmovieicon").fadeIn(200)
		   $("#sersocketbar14inputpar").css({"margin-top":"17px"}).show()
	   }
	
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	
	modelManager.addModel("2020");
   }
</script>

<script>
   function telescopicBlock(x){
   	/*$("#verticaloptions").delay(200).fadeIn(200)
   	$("#vertical4").delay(1500).fadeIn(300)
   	$("#vertical6").delay(1500).fadeIn(400)
   	$("#vertical12").delay(1500).fadeIn(500)
   	$("#verticaladj").delay(1500).fadeIn(600)
   	$("#verticalextension16").delay(1500).fadeIn(700)
   	$("#verticalextension8").delay(1500).fadeIn(800)*/
	
	if($("#manualchair").hasClass("chosen"))
	{
		if($("#fullringbracketmanual").hasClass("chosen"))
	   {
		   $("#telescopicBlocktofullringmovieicon").fadeIn(300)
		   $("#telescopicBlockinputpar").css({"margin-top":"17px"}).show()
	   }
	   
	   else if($("#zeroclearancebracketmanual").hasClass("chosen"))
	   {
		   $("#telescopicBlocktozeroclearancemovieicon").fadeIn(300)
		   $("#telescopicBlockinputpar").css({"margin-top":"17px"}).show()
	   }
	}
	   
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble4").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	
	modelManager.addModel("2017");
   }
   
   
   function extensionSocketBars(x)
   {
	 $(".chairoptions").fadeOut(100)	
   	$("#back2").fadeOut(100)
	$("#14socketbar").fadeOut(200)
   	$("#22socketbar").fadeOut(200)
	$("#sersocketbar14").fadeOut(200)
	$("#telescopicBlock").fadeOut(200)
   	$("#telescopicBlockref").fadeOut(200)
	$("#recommend").delay(1500).fadeIn(200)
	$("#14socketbar").delay(1500).fadeIn(300)
   	$("#22socketbar").delay(1500).fadeIn(400)
	$("#sersocketbar14").delay(1500).fadeIn(400)  
	
	if($("#fullringbracket").hasClass("chosen")){
   		$("#telescopicBlockpic").css({"margin-left":"-587px", "margin-top":"-1.25px"})
   		$("#telescopicBlockpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#fullringclamps").delay(200).fadeIn(2000)	}
   	else if($("#zeroclearancebracket").hasClass("chosen")){
   		$("#telescopicBlockpic").css({"margin-left":"-595px", "margin-top":"2.5px"})
   		$("#telescopicBlockpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#zeroclearanceclamps").delay(200).fadeIn(2000)	}
   	else if($("#fullringbracketmanual").hasClass("chosen")){
   		$("#telescopicBlockpic").css({"margin-left":"-587px", "margin-top":"-1.25px"})
   		$("#telescopicBlockpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#fullringclampsmanual").delay(200).fadeIn(2000)	}
   	else if($("#zeroclearancebracketmanual").hasClass("chosen")){
   		$("#telescopicBlockpic").css({"margin-left":"-595px", "margin-top":"2.5px"})
   		$("#telescopicBlockpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#zeroclearanceclampsmanual").delay(200).fadeIn(2000)	}
   	else if($("#squaretubebracketpic").hasClass("chosen")){
   		$("#telescopicBlockpic").css({"margin-left":"-595px", "margin-top":"-15.5px"})
   		$("#telescopicBlockpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#squaretubeclamps").delay(200).fadeIn(2000)	}
   	else if($("#dttrackbracket1").hasClass("chosen")){
   		$("#telescopicBlockpic").css({"margin-left":"-586.5px", "margin-top":"-15.5px"})
   		$("#telescopicBlockpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#dttrackbracketclamps").delay(200).fadeIn(2000)	}
   	else if($("#ttrackbracket1").hasClass("chosen")){
   		$("#telescopicBlockpic").css({"margin-left":"-582.5px", "margin-top":"2.25px"})
   		$("#telescopicBlockpic").delay(200).fadeIn(2000).addClass("chosen")
   		$("#ttrackbracketclamps").delay(200).fadeIn(2000)	}
		
   	$("#back3").delay(1500).fadeIn(800)
   }
</script>

<script>
   function verticalbars(x){
   	$(".chairoptions").fadeOut(100)
   	$("#backstart").fadeOut(100)
   	$("#back2").fadeOut(100)
   	$("#back3").fadeOut(100)	
   	$("#back4").fadeOut(100)
   	$("#vertical4ref").fadeOut(200)
   	$("#vertical6ref").fadeOut(200)
   	$("#vertical12ref").fadeOut(200)
   	$("#verticaladjref").fadeOut(200)
   	$("#verticalext8ref").fadeOut(200)
   	$("#verticalext16ref").fadeOut(200)
   	$("#armoptions").delay(1500).fadeIn(200)	
   	$("#m2").delay(1500).fadeIn(300)
   	$("#m2x").delay(1500).fadeIn(400)
   	$("#m2max").delay(1500).fadeIn(500)
   	$("#articulatingarm").delay(1500).fadeIn(600)
   	$("#articulatingarmwithriser").delay(1500).fadeIn(700)
	$("#loadcustomarm").delay(1500).fadeIn(700)
   	if(($("#verticalextension8pic").hasClass("chosen"))&&($("#extrollingstand:not('.chosen')"))&&($("#deskclamp:not('.chosen')"))){
   		$("#verticalbars").css({"margin-top":"-101.5px"})
   		$("#verticalbars").delay(200).fadeIn(2000).addClass("chosen")}	
   	else if(($("#verticalextension16pic").hasClass("chosen"))&&($("#extrollingstand:not('.chosen')"))&&($("#deskclamp:not('.chosen')"))){
   		$("#verticalbars").css({"margin-top":"-202.5px"})
   		$("#verticalbars").delay(200).fadeIn(2000).addClass("chosen")}	
   	else if($("#extrollingstand").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-623.5px", "margin-top":"-38.5px"})
   		$("#verticalbars").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#deskclamp").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-525.5px", "margin-top":"-42px"})
   		$("#verticalbars").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#fullringbracket").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-587px", "margin-top":"-2px"})
   		$("#verticalbars").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#zeroclearancebracket").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-595px", "margin-top":"2.25px"})
   		$("#verticalbars").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#fullringbracketmanual").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-615.5px", "margin-top":"14.25px"})
   		$("#verticalbars").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#zeroclearancebracketmanual").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-623.5px", "margin-top":"17.5px"})
   		$("#verticalbars").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#squaretubebracketpic").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-595px", "margin-top":"-16px"})
   		$("#verticalbars").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#dttrackbracket1").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-586.5px", "margin-top":"-16px"})
   		$("#verticalbars").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#ttrackbracket1").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-582.5px", "margin-top":"2px"})
   		$("#verticalbars").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#directmountpic").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-616.5px", "margin-top":"22px"})
   		$("#verticalbars").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#serdirectmountpic").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-604px", "margin-top":"25.25px"})
   		$("#verticalbars").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#dttrackdirectpic").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-567.5px", "margin-top":"-31px"})
   		$("#verticalbars").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#ttrackdirectpic").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-566px", "margin-top":"-12px"})
   		$("#verticalbars").delay(200).fadeIn(2000).addClass("chosen")}
   	$("#back5").delay(1500).fadeIn(800)
   }
</script>
<script>
   function verticalextension(x){
   	$(".chairoptions").fadeOut(100)	
	$("#backstart").fadeOut(100)
   	$("#back2").fadeOut(100)
   	$("#back3").fadeOut(100)
   	$("#vertical4ref").fadeOut(200)
   	$("#vertical6ref").fadeOut(200)
   	$("#vertical12ref").fadeOut(200)
   	$("#verticaladjref").fadeOut(200)
   	$("#verticalext8ref").fadeOut(200)
   	$("#verticalext16ref").fadeOut(200)
   	$("#verticaloptions2").delay(1500).fadeIn(200)
   	$("#vertical4").delay(1500).fadeIn(300)
   	$("#vertical6").delay(1500).fadeIn(400)
   	$("#vertical12").delay(1500).fadeIn(500)
	$("#back4").delay(1500).fadeIn(700)
   	$("#verticaladj").delay(1500).fadeIn(600)
   	if($("#fullringbracket").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-587px", "margin-top":"-2px"})
   		$("#verticalextension").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#zeroclearancebracket").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-595px", "margin-top":"2.25px"})
   		$("#verticalextension").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#squaretubebracketpic").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-595px", "margin-top":"-16px"})
   		$("#verticalextension").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#dttrackbracket1").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-586.5px", "margin-top":"-16px"})
   		$("#verticalextension").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#ttrackbracket1").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-582.5px", "margin-top":"2px"})
   		$("#verticalextension").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#directmountpic").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-616.5px", "margin-top":"21.5px"})
   		$("#verticalextension").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#serdirectmountpic").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-604px", "margin-top":"25.25px"})
   		$("#verticalextension").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#dttrackdirectpic").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-567.5px", "margin-top":"-31px"})
   		$("#verticalextension").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#ttrackdirectpic").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-566px", "margin-top":"-12px"})
   		$("#verticalextension").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#extrollingstand").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-623.5px", "margin-top":"-38.5px"})
   		$("#verticalextension").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#deskclamp").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-525.5px", "margin-top":"-42px"})
   		$("#verticalextension").delay(200).fadeIn(2000).addClass("chosen")}
   
   }
</script>
<script>
   function arms(x){
	  
	console.log("false");
   	$(".chairoptions").fadeOut(100)	
   	$("#back4").fadeOut(100)
   	$("#back5").fadeOut(100)
   	$("#wedgereceiveroptions").delay(1500).fadeIn(200)
   	$("#rotarywedgereceiver").delay(1500).fadeIn(300)
   	$("#lockablewedgereceiver").delay(1500).fadeIn(400)	
   	/*if($("#verticalbar4pic").hasClass("chosen")){
   		$("#arms").css({"margin-top":"80px"})
   		$("#arms").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#verticalbar6pic").hasClass("chosen")){
   		$("#arms").css({"margin-top":"60px"})
   		$("#arms").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#verticalbar12pic").hasClass("chosen")){
   		$("#arms").css({"margin-top":"5px"})
   		$("#arms").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#verticalbaradjpic").hasClass("chosen")){
   		$("#arms").css({"margin-top":"79px"})
   		$("#arms").delay(200).fadeIn(2000).addClass("chosen")}*/
   	$("#back6").delay(1500).fadeIn(500)
	$("#backwedgereceivers").fadeOut(100)
   }
   
   function afterLoadCustomArm()
   {
	   if(modelManager.checkCustomArmForWedgeMount())
	   {
	  console.log("true");
	$(".chairoptions").fadeOut(100)	
   	$("#back4").fadeOut(100)
   	$("#back5").fadeOut(100)
   	$("#m2ref").fadeOut(200)
   	$("#m2xref").fadeOut(200)
   	$("#m2maxref").fadeOut(200)
   	$("#articulatingarmref").fadeOut(200)
   	$("#articulatingarmriserref").fadeOut(200)
	$("#loadCustomArm").fadeOut(200)
   	if($("#verticalbar4pic").hasClass("chosen")){
   		$("#arms").css({"margin-top":"80px"})
   		$("#arms").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#verticalbar6pic").hasClass("chosen")){
   		$("#arms").css({"margin-top":"60px"})
   		$("#arms").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#verticalbar12pic").hasClass("chosen")){
   		$("#arms").css({"margin-top":"5px"})
   		$("#arms").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#verticalbaradjpic").hasClass("chosen")){
   		$("#arms").css({"margin-top":"79px"})
   		$("#arms").delay(200).fadeIn(2000).addClass("chosen")}
   	//$("#back6").delay(1500).fadeIn(500)
	$("#mountingplate").delay(200).fadeIn(300)
   	$("#wedgereceiveripad").delay(200).fadeIn(400)
   	$("#wedgereceiverlaptop").delay(200).fadeIn(500)
	$("#wedgereceiverlaptopplate").delay(200).fadeIn(500)
	$("#wedgereceiveripadairplate").delay(200).fadeIn(500)
	$("#wedgereceiveripadaircradle").delay(200).fadeIn(500)
	$("#wedgereceiverliteracyplate").delay(200).fadeIn(500)
	$("#wedgereceivercamera").delay(200).fadeIn(500)
	
	if(modelManager.checkCustomArmForWedgeMount())
	{
		$("#wedgereceivercupholder").hide()
		$("#wedgereceiverempty").css({"margin-top":"-40px"}).delay(200).fadeIn(600)
	}
	else
	{
	$("#wedgereceivercupholder").delay(200).fadeIn(500)
	$("#wedgereceiverempty").css({"margin-top":"0px"}).delay(200).fadeIn(600)
	}
   	
	$("#backwedgereceivers").delay(200).fadeIn(600) 
	   }
	   else
	   {
		   arms(this);
	   }
   }
</script>
<script>
   function wedgereceivers(x){
   	$("#back6").fadeOut(100)
   	$("#lockablewedgereceiverref").fadeOut(200)
   	$("#rotarywedgereceiverref").fadeOut(200)
   	$("#wedgereceiveroptions").fadeOut(100)
   	$("#lockablewedgereceiver").fadeOut(100)
   	$("#rotarywedgereceiver").fadeOut(100)
   	
   	if($("#m2pic").hasClass("chosen")){
   		$("#wedgereceivers").css({"margin-left":"-590px", "margin-top":"-86.5px"})
   		$("#m2head").show()
   		$("#wedgereceivers").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#m2xpic").hasClass("chosen")){
   		$("#wedgereceivers").css({ "margin-left":"-556px", "margin-top":"-127.75px"})
   		$("#m2xhead").show()
   		$("#wedgereceivers").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#m2maxpic").hasClass("chosen")){
   		$("#wedgereceivers").css({"margin-left":"-529px", "margin-top":"-51.25px"})
   		$("#m2maxhead").show()
   		$("#wedgereceivers").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#articulatingarmpic").hasClass("chosen")){
   		$("#wedgereceivers").css({"margin-left":"-534px", "margin-top":"-48px"})
   		$("#articulatingarmhead").show()
   		$("#wedgereceivers").delay(200).fadeIn(2000).addClass("chosen")}
   	else if($("#articulatingarmriserpic").hasClass("chosen")){
   		$("#wedgereceivers").css({"margin-left":"-530px", "margin-top":"-127px"})
   		$("#articulatingarmriserhead").show()
   		$("#wedgereceivers").delay(200).fadeIn(2000).addClass("chosen")}
  
   	$("#mountingplate").delay(200).fadeIn(300)
   	$("#wedgereceiveripad").delay(200).fadeIn(400)
   	$("#wedgereceiverlaptop").delay(200).fadeIn(500)
	$("#wedgereceiverlaptopplate").delay(200).fadeIn(500)
	$("#wedgereceiveripadairplate").delay(200).fadeIn(500)
	$("#wedgereceiveripadaircradle").delay(200).fadeIn(500)
	$("#wedgereceiverliteracyplate").delay(200).fadeIn(500)
	$("#wedgereceivercamera").delay(200).fadeIn(500)
	$("#wedgereceivercupholder").delay(200).fadeIn(500)
   	$("#wedgereceiverempty").delay(200).fadeIn(600)
	$("#backwedgereceivers").delay(200).fadeIn(600)
	
   	
   }
   function wedgereceivermountingplate(x){
   	if($("#lockablewedgereceiverpic").hasClass("chosen")){
   		$("#lockablewedgereceiveripadpic").delay(200).fadeIn(2000)
   	}
   	else if($("#rotarywedgereceiverpic").hasClass("chosen")){
   		$("#rotarywedgereceiveripadpic").delay(200).fadeIn(2000)
   	}
   	$("#mountingplate").fadeOut(100)
   	$("#wedgereceiveripad").fadeOut(100)
   	$("#wedgereceiverlaptop").fadeOut(100)
   	$("#wedgereceiverempty").fadeOut(100)
	$("#wedgereceiverlaptopplate").fadeOut(100)
	$("#wedgereceiveripadairplate").fadeOut(100)
	$("#wedgereceiveripadaircradle").fadeOut(100)
	$("#wedgereceiverliteracyplate").fadeOut(100)
	$("#wedgereceivercamera").fadeOut(100)
	$("#wedgereceivercupholder").fadeOut(100)
   	//$("#inputframe").fadeOut(100)
   	$("#complete").delay(200).fadeIn(200)	
   	$(".inptlist").appendTo("#inputparend")	
   	$(".inptlist").css("text-align","center")
   	$("#inputparend").delay(200).fadeIn(300)
   	$("#compatible").delay(200).fadeIn(400)
   	$("#showquote").delay(200).fadeIn(400)
   	$("#back7").delay(200).fadeIn(500)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble5").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	
	modelManager.addModel("5005");
   }
   
   function wedgereceiverlaptopplate(x){
	   $("#laptopplatepic").addClass("chosen")
	   
	  if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
	  {
		  if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#laptopplatetolockable2movieicon").css({"display":"block"})
							$("#laptopplatetolockable2movieiconimg").css({"top":"450px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#laptopplatetorotary2movieicon").css({"display":"block"})
							$("#laptopplatetorotary2movieiconimg").css({"top":"450px"}).fadeIn(300)
						}
						else
						{
							$("#laptopplatetowedgemount2movieicon").css({"display":"block"})
							$("#laptopplatetowedgemount2movieiconimg").css({"top":"450px"}).fadeIn(300)
						}
				   }
				   else
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#laptopplatetolockable2movieicon").css({"display":"block"})
							$("#laptopplatetolockable2movieiconimg").css({"top":"420px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#laptopplatetorotary2movieicon").css({"display":"block"})
							$("#laptopplatetorotary2movieiconimg").css({"top":"420px"}).fadeIn(300)
						}
						else
						{
							$("#laptopplatetowedgemount2movieicon").css({"display":"block"})
							$("#laptopplatetowedgemount2movieiconimg").css({"top":"420px"}).fadeIn(300)
						}
				   }
			
			   }
			   else
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#laptopplatetolockablemovieicon").css({"display":"block"})
							$("#laptopplatetolockablemovieiconimg").css({"top":"420px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#laptopplatetorotarymovieicon").css({"display":"block"})
							$("#laptopplatetorotarymovieiconimg").css({"top":"420px"}).fadeIn(300)
						}
						else
						{
							$("#laptopplatetowedgemountmovieicon").css({"display":"block"})
							$("#laptopplatetowedgemountmovieiconimg").css({"top":"420px"}).fadeIn(300)
						}
				   }
				   else
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#laptopplatetolockablemovieicon").css({"display":"block"})
							$("#laptopplatetolockablemovieiconimg").css({"top":"395px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#laptopplatetorotarymovieicon").css({"display":"block"})
							$("#laptopplatetorotarymovieiconimg").css({"top":"395px"}).fadeIn(300)
						}
						else
						{
							$("#laptopplatetowedgemountmovieicon").css({"display":"block"})
							$("#laptopplatetowedgemountmovieiconimg").css({"top":"395px"}).fadeIn(300)
						}
				   }
				   
			   }
	  }
	
	else if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
			   {
				   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#laptopplatetolockable2movieicon").css({"display":"block"})
							$("#laptopplatetolockable2movieiconimg").css({"top":"330px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#laptopplatetorotary2movieicon").css({"display":"block"})
							$("#laptopplatetorotary2movieiconimg").css({"top":"330px"}).fadeIn(300)
						}
						else
						{
							$("#laptopplatetowedgemount2movieicon").fadeIn(300)
						}
				   }
				   else
				   {
					   if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#laptopplatetolockable2movieicon").css({"display":"block"})
							$("#laptopplatetolockable2movieiconimg").css({"top":"420px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#laptopplatetorotary2movieicon").css({"display":"block"})
							$("#laptopplatetorotary2movieiconimg").css({"top":"420px"}).fadeIn(300)
						}
						else
						{
							$("#laptopplatetowedgemount2movieicon").fadeIn(300)
						}
					   }
					   else
					   {
						   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#laptopplatetolockable2movieicon").css({"display":"block"})
							$("#laptopplatetolockable2movieiconimg").css({"top":"395px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#laptopplatetorotary2movieicon").css({"display":"block"})
							$("#laptopplatetorotary2movieiconimg").css({"top":"395px"}).fadeIn(300)
						}
						else
						{
							$("#laptopplatetowedgemount2movieicon").fadeIn(300)
						}
					   }
					   
				   }
			
			   }
			   else
			   {
				   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#laptopplatetolockablemovieicon").css({"display":"block"})
							$("#laptopplatetolockablemovieiconimg").css({"top":"297px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#laptopplatetorotarymovieicon").css({"display":"block"})
							$("#laptopplatetorotarymovieiconimg").css({"top":"297px"}).fadeIn(300)
						}
						else
						{
							$("#laptopplatetowedgemountmovieicon").fadeIn(300)
						}
				   }
				   else
				   {
					   if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#laptopplatetolockablemovieicon").css({"display":"block"})
							$("#laptopplatetolockablemovieiconimg").css({"top":"390px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#laptopplatetorotarymovieicon").css({"display":"block"})
							$("#laptopplatetorotarymovieiconimg").css({"top":"390px"}).fadeIn(300)
						}
						else
						{
							$("#laptopplatetowedgemountmovieicon").fadeIn(300)
						}
					   
					   }
					   else
					   {
						   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#laptopplatetolockablemovieicon").css({"display":"block"})
							$("#laptopplatetolockablemovieiconimg").css({"top":"360px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#laptopplatetorotarymovieicon").css({"display":"block"})
							$("#laptopplatetorotarymovieiconimg").css({"top":"360px"}).fadeIn(300)
						}
						else
						{
							$("#laptopplatetowedgemountmovieicon").fadeIn(300)
						}
					   }
						
				   }
				   
			   }
			   
   	$("#mountingplate").fadeOut(100)
   	$("#wedgereceiveripad").fadeOut(100)
   	$("#wedgereceiverlaptop").fadeOut(100)
   	$("#wedgereceiverempty").fadeOut(100)
	$("#wedgereceiverlaptopplate").fadeOut(100)
	$("#wedgereceiveripadairplate").fadeOut(100)
	$("#wedgereceiveripadaircradle").fadeOut(100)
	$("#wedgereceiverliteracyplate").fadeOut(100)
	$("#wedgereceivercamera").fadeOut(100)
	$("#wedgereceivercupholder").fadeOut(100)
	$("#laptopplateinputpar").show()
   	//$("#inputframe").fadeOut(100)
   	$("#complete").delay(200).fadeIn(200)	
   	$(".inptlist").appendTo("#inputparend")	
   	$(".inptlist").css("text-align","center")
   	$("#inputparend").delay(200).fadeIn(300)
	$(".inptlist").appendTo("#input")	
	$(".inptlist").css("text-align","left")
   	$("#inputframe").fadeIn(200)
	$("#inputparend").delay(200).hide()
   	$("#compatible").delay(200).fadeIn(400)
   	$("#showquote").delay(200).fadeIn(400)
   	$("#back7").delay(200).fadeIn(500)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble5").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	
	modelManager.addModel("5003");
   }
   
   function wedgereceivertablet(x){
	   $("#tabletpic").addClass("chosen")

	if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
			{
				if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#tablettolockable2movieicon").css({"display":"block"})
							$("#tablettolockable2movieiconimg").css({"top":"450px"}).fadeIn(300)
							}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#tablettorotary2movieicon").css({"display":"block"})
							$("#tablettorotary2movieiconimg").css({"top":"450px"}).fadeIn(300)
							}
							else
							{
							$("#tablettowedgemount2movieicon").css({"display":"block"})
							$("#tablettowedgemount2movieiconimg").css({"top":"450px"}).fadeIn(300)
							}
				   }
				   else
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#tablettolockable2movieicon").css({"display":"block"})
							$("#tablettolockable2movieiconimg").css({"top":"420px"}).fadeIn(300)
							}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#tablettorotary2movieicon").css({"display":"block"})
							$("#tablettorotary2movieiconimg").css({"top":"420px"}).fadeIn(300)
							}
							else
							{
							$("#tablettowedgemount2movieicon").css({"display":"block"})
							$("#tablettowedgemount2movieiconimg").css({"top":"420px"}).fadeIn(300)
							}
				   }
				   
			   }
			   
			   else
				   {
					   if($("#telescopicBlockpic").hasClass("chosen"))
						{
							if($("#lockablewedgereceiverpic").hasClass("chosen")){
								$("#lockablewedgereceiverpic").fadeOut(2000)
								$("#tablettolockablemovieicon").css({"display":"block"})
								$("#tablettolockablemovieiconimg").css({"top":"420px"}).fadeIn(300)
								}
								
								else if($("#rotarywedgereceiverpic").hasClass("chosen")){
								$("#rotarywedgereceiverpic").fadeOut(2000)
								$("#tablettorotarymovieicon").css({"display":"block"})
								$("#tablettorotarymovieiconimg").css({"top":"420px"}).fadeIn(300)
								}
								else
								{
									$("#tablettowedgemountmovieicon").css({"display":"block"})
									$("#tablettowedgemountmovieiconimg").css({"top":"420px"}).fadeIn(300)
								}
						}
						else
						{
							if($("#lockablewedgereceiverpic").hasClass("chosen")){
								$("#lockablewedgereceiverpic").fadeOut(2000)
								$("#tablettolockablemovieicon").css({"display":"block"})
								$("#tablettolockablemovieiconimg").css({"top":"395px"}).fadeIn(300)
								}
								
								else if($("#rotarywedgereceiverpic").hasClass("chosen")){
								$("#rotarywedgereceiverpic").fadeOut(2000)
								$("#tablettorotarymovieicon").css({"display":"block"})
								$("#tablettorotarymovieiconimg").css({"top":"395px"}).fadeIn(300)
								}
								else
								{
									$("#tablettowedgemountmovieicon").css({"display":"block"})
									$("#tablettowedgemountmovieiconimg").css({"top":"395px"}).fadeIn(300)
								}
						}
				   }
			}
		else if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
		{
			if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				{
					if($("#lockablewedgereceiverpic").hasClass("chosen")){
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#tablettolockable2movieicon").css({"display":"block"})
						$("#tablettolockable2movieiconimg").css({"top":"330px"}).fadeIn(300)
						}
					else if($("#rotarywedgereceiverpic").hasClass("chosen")){
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#tablettorotary2movieicon").css({"display":"block"})
						$("#tablettorotary2movieiconimg").css({"top":"330px"}).fadeIn(300)
						}
						else
						{
						$("#tablettowedgemount2movieicon").fadeIn(300)
						}
				}
				else
				{
					if($("#ninetydegreebracket").hasClass("chosen"))
					{
						if($("#lockablewedgereceiverpic").hasClass("chosen")){
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#tablettolockable2movieicon").css({"display":"block"})
						$("#tablettolockable2movieiconimg").css({"top":"420px"}).fadeIn(300)
						}
					else if($("#rotarywedgereceiverpic").hasClass("chosen")){
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#tablettorotary2movieicon").css({"display":"block"})
						$("#tablettorotary2movieiconimg").css({"top":"420px"}).fadeIn(300)
						}
						else
						{
						$("#tablettowedgemount2movieicon").fadeIn(300)
						}
					}
					else
					{
						if($("#lockablewedgereceiverpic").hasClass("chosen")){
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#tablettolockable2movieicon").css({"display":"block"})
						$("#tablettolockable2movieiconimg").css({"top":"395px"}).fadeIn(300)
						}
					else if($("#rotarywedgereceiverpic").hasClass("chosen")){
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#tablettorotary2movieicon").css({"display":"block"})
						$("#tablettorotary2movieiconimg").css({"top":"395px"}).fadeIn(300)
						}
						else
						{
						$("#tablettowedgemount2movieicon").fadeIn(300)
						}
					}
					
				}
			
		}
	
		   else
		   {
			   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				{
				   if($("#lockablewedgereceiverpic").hasClass("chosen"))
						{
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#tablettolockablemovieicon").css({"display":"block"})
						$("#tablettolockablemovieiconimg").css({"top":"297px"}).fadeIn(300)
						}
						
						else if($("#rotarywedgereceiverpic").hasClass("chosen"))
						{
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#tablettorotarymovieicon").css({"display":"block"})
						$("#tablettorotarymovieiconimg").css({"top":"297px"}).fadeIn(300)
						}
						else
						{
							$("#tablettowedgemountmovieicon").fadeIn(300)
						}
				}
			   
			   else
			   {
				   if($("#ninetydegreebracket").hasClass("chosen"))
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen"))
						{
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#tablettolockablemovieicon").css({"display":"block"})
						$("#tablettolockablemovieiconimg").css({"top":"390px"}).fadeIn(300)
						}
						
						else if($("#rotarywedgereceiverpic").hasClass("chosen"))
						{
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#tablettorotarymovieicon").css({"display":"block"})
						$("#tablettorotarymovieiconimg").css({"top":"390px"}).fadeIn(300)
						}
						else
						{
							$("#tablettowedgemountmovieicon").fadeIn(300)
						}
				   }
				   else
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen"))
						{
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#tablettolockablemovieicon").css({"display":"block"})
						$("#tablettolockablemovieiconimg").css({"top":"360px"}).fadeIn(300)
						}
						
						else if($("#rotarywedgereceiverpic").hasClass("chosen"))
						{
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#tablettorotarymovieicon").css({"display":"block"})
						$("#tablettorotarymovieiconimg").css({"top":"360px"}).fadeIn(300)
						}
						else
						{
							$("#tablettowedgemountmovieicon").fadeIn(300)
						}
				   }
			   }
		   }
   	$("#mountingplate").fadeOut(100)
   $("#wedgereceiveripad").fadeOut(100)
   	$("#wedgereceiverlaptop").fadeOut(100)
   	$("#wedgereceiverempty").fadeOut(100)
	$("#wedgereceiverlaptopplate").fadeOut(100)
	$("#wedgereceiveripadairplate").fadeOut(100)
	$("#wedgereceiveripadaircradle").fadeOut(100)
	$("#wedgereceiverliteracyplate").fadeOut(100)
	$("#wedgereceivercamera").fadeOut(100)
	$("#wedgereceivercupholder").fadeOut(100)
	$("#tabletinputpar").show()
   	//$("#inputframe").fadeOut(100)
   	$("#complete").delay(200).fadeIn(200)	
   	$(".inptlist").appendTo("#inputparend")	
   	$(".inptlist").css("text-align","center")
   	$("#inputparend").delay(200).fadeIn(300)
	$(".inptlist").appendTo("#input")	
	$(".inptlist").css("text-align","left")
   	$("#inputframe").fadeIn(200)
	$("#inputparend").delay(200).hide()
   	$("#compatible").delay(200).fadeIn(400)
   	$("#showquote").delay(200).fadeIn(400)
   	$("#back7").delay(200).fadeIn(500)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble5").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	modelManager.addModel("5001");
   }
   
   
   function wedgereceiveripadairplate(x){
	   $("#ipadairplatepic").addClass("chosen")
	   
	   if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
			{
				if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
				   {
					   if($("#telescopicBlockpic").hasClass("chosen"))
					   {
						   if($("#lockablewedgereceiverpic").hasClass("chosen")){
								$("#lockablewedgereceiverpic").fadeOut(2000)
								$("#ipadairplatetolockable2movieicon").css({"display":"block"})
								$("#ipadairplatetolockable2movieiconimg").css({"top":"450px"}).fadeIn(300)
							}
							else if($("#rotarywedgereceiverpic").hasClass("chosen")){
								$("#rotarywedgereceiverpic").fadeOut(2000)
								$("#ipadairplatetorotary2movieicon").css({"display":"block"})
								$("#ipadairplatetorotary2movieiconimg").css({"top":"450px"}).fadeIn(300)
								}
								else
								{
									$("#ipadairplatetowedgemount2movieicon").css({"display":"block"})
									$("#ipadairplatetowedgemount2movieiconimg").css({"top":"450px"}).fadeIn(300)
								}
					   }
					   else
					   {
						   if($("#lockablewedgereceiverpic").hasClass("chosen")){
								$("#lockablewedgereceiverpic").fadeOut(2000)
								$("#ipadairplatetolockable2movieicon").css({"display":"block"})
								$("#ipadairplatetolockable2movieiconimg").css({"top":"420px"}).fadeIn(300)
							}
							else if($("#rotarywedgereceiverpic").hasClass("chosen")){
								$("#rotarywedgereceiverpic").fadeOut(2000)
								$("#ipadairplatetorotary2movieicon").css({"display":"block"})
								$("#ipadairplatetorotary2movieiconimg").css({"top":"420px"}).fadeIn(300)
								}
								else
								{
									$("#ipadairplatetowedgemount2movieicon").css({"display":"block"})
									$("#ipadairplatetowedgemount2movieiconimg").css({"top":"420px"}).fadeIn(300)
								}
					   }
					
				   }
				   else
				   {
					   if($("#telescopicBlockpic").hasClass("chosen"))
					   {
						   if($("#lockablewedgereceiverpic").hasClass("chosen")){
								$("#lockablewedgereceiverpic").fadeOut(2000)
								$("#ipadairplatetolockablemovieicon").css({"display":"block"})
								$("#ipadairplatetolockablemovieiconimg").css({"top":"420px"}).fadeIn(300)
								}
								
								else if($("#rotarywedgereceiverpic").hasClass("chosen")){
								$("#rotarywedgereceiverpic").fadeOut(2000)
								$("#ipadairplatetorotarymovieicon").css({"display":"block"})
								$("#ipadairplatetorotarymovieiconimg").css({"top":"420px"}).fadeIn(300)
								}
								else
								{
									$("#ipadairplatetowedgemountmovieicon").css({"display":"block"})
									$("#ipadairplatetowedgemountmovieiconimg").css({"top":"420px"}).fadeIn(300)
								}
								   }
					   else
					   {
						   if($("#lockablewedgereceiverpic").hasClass("chosen")){
								$("#lockablewedgereceiverpic").fadeOut(2000)
								$("#ipadairplatetolockablemovieicon").css({"display":"block"})
								$("#ipadairplatetolockablemovieiconimg").css({"top":"395px"}).fadeIn(300)
								}
								
								else if($("#rotarywedgereceiverpic").hasClass("chosen")){
								$("#rotarywedgereceiverpic").fadeOut(2000)
								$("#ipadairplatetorotarymovieicon").css({"display":"block"})
								$("#ipadairplatetorotarymovieiconimg").css({"top":"395px"}).fadeIn(300)
								}
								else
								{
									$("#ipadairplatetowedgemountmovieicon").css({"display":"block"})
									$("#ipadairplatetowedgemountmovieiconimg").css({"top":"395px"}).fadeIn(300)
								}
					   }
					   
				   }
			}
	   
	   
	else if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   if($("#lockablewedgereceiverpic").hasClass("chosen")){
					$("#lockablewedgereceiverpic").fadeOut(2000)
					$("#ipadairplatetolockable2movieicon").css({"display":"block"})
					$("#ipadairplatetolockable2movieiconimg").css({"top":"330px"}).fadeIn(300)
				}
				else if($("#rotarywedgereceiverpic").hasClass("chosen")){
					$("#rotarywedgereceiverpic").fadeOut(2000)
					$("#ipadairplatetorotary2movieicon").css({"display":"block"})
					$("#ipadairplatetorotary2movieiconimg").css({"top":"330px"}).fadeIn(300)
					}
					else
					{
						$("#ipadairplatetowedgemount2movieicon").fadeIn(300)
					}
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
			   {
				   if($("#lockablewedgereceiverpic").hasClass("chosen")){
					$("#lockablewedgereceiverpic").fadeOut(2000)
					$("#ipadairplatetolockable2movieicon").css({"display":"block"})
					$("#ipadairplatetolockable2movieiconimg").css({"top":"420px"}).fadeIn(300)
				}
				else if($("#rotarywedgereceiverpic").hasClass("chosen")){
					$("#rotarywedgereceiverpic").fadeOut(2000)
					$("#ipadairplatetorotary2movieicon").css({"display":"block"})
					$("#ipadairplatetorotary2movieiconimg").css({"top":"420px"}).fadeIn(300)
					}
					else
					{
						$("#ipadairplatetowedgemount2movieicon").fadeIn(300)
					}
			   }
			   else
			   {
				   if($("#lockablewedgereceiverpic").hasClass("chosen")){
					$("#lockablewedgereceiverpic").fadeOut(2000)
					$("#ipadairplatetolockable2movieicon").css({"display":"block"})
					$("#ipadairplatetolockable2movieiconimg").css({"top":"395px"}).fadeIn(300)
				}
				else if($("#rotarywedgereceiverpic").hasClass("chosen")){
					$("#rotarywedgereceiverpic").fadeOut(2000)
					$("#ipadairplatetorotary2movieicon").css({"display":"block"})
					$("#ipadairplatetorotary2movieiconimg").css({"top":"395px"}).fadeIn(300)
					}
					else
					{
						$("#ipadairplatetowedgemount2movieicon").fadeIn(300)
					}
			   }
			   
		   }
		
	   }
	   
	   else
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   if($("#lockablewedgereceiverpic").hasClass("chosen")){
				$("#lockablewedgereceiverpic").fadeOut(2000)
				$("#ipadairplatetolockablemovieicon").css({"display":"block"})
				$("#ipadairplatetolockablemovieiconimg").css({"top":"297px"}).fadeIn(300)
				}
				
				else if($("#rotarywedgereceiverpic").hasClass("chosen")){
				$("#rotarywedgereceiverpic").fadeOut(2000)
				$("#ipadairplatetorotarymovieicon").css({"display":"block"})
				$("#ipadairplatetorotarymovieiconimg").css({"top":"297px"}).fadeIn(300)
				}
				else
				{
					$("#ipadairplatetowedgemountmovieicon").fadeIn(300)
				}
			}
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
			   {
				   if($("#lockablewedgereceiverpic").hasClass("chosen")){
					$("#lockablewedgereceiverpic").fadeOut(2000)
					$("#ipadairplatetolockablemovieicon").css({"display":"block"})
					$("#ipadairplatetolockablemovieiconimg").css({"top":"390px"}).fadeIn(300)
					}
					
					else if($("#rotarywedgereceiverpic").hasClass("chosen")){
					$("#rotarywedgereceiverpic").fadeOut(2000)
					$("#ipadairplatetorotarymovieicon").css({"display":"block"})
					$("#ipadairplatetorotarymovieiconimg").css({"top":"390px"}).fadeIn(300)
					}
					else
					{
						$("#ipadairplatetowedgemountmovieicon").fadeIn(300)
					}
			   }
			   else
			   {
				   if($("#lockablewedgereceiverpic").hasClass("chosen")){
					$("#lockablewedgereceiverpic").fadeOut(2000)
					$("#ipadairplatetolockablemovieicon").css({"display":"block"})
					$("#ipadairplatetolockablemovieiconimg").css({"top":"360px"}).fadeIn(300)
					}
					
					else if($("#rotarywedgereceiverpic").hasClass("chosen")){
					$("#rotarywedgereceiverpic").fadeOut(2000)
					$("#ipadairplatetorotarymovieicon").css({"display":"block"})
					$("#ipadairplatetorotarymovieiconimg").css({"top":"360px"}).fadeIn(300)
					}
					else
					{
						$("#ipadairplatetowedgemountmovieicon").fadeIn(300)
					}				   
			   }
				   
		   }
		   
		
	   }
   	$("#mountingplate").fadeOut(100)
   $("#wedgereceiveripad").fadeOut(100)
   	$("#wedgereceiverlaptop").fadeOut(100)
   	$("#wedgereceiverempty").fadeOut(100)
	$("#wedgereceiverlaptopplate").fadeOut(100)
	$("#wedgereceiveripadairplate").fadeOut(100)
	$("#wedgereceiveripadaircradle").fadeOut(100)
	$("#wedgereceiverliteracyplate").fadeOut(100)
	$("#wedgereceivercamera").fadeOut(100)
	$("#wedgereceivercupholder").fadeOut(100)
	$("#ipadairplateinputpar").show()
   	//$("#inputframe").fadeOut(100)
	$("#complete").delay(200).fadeIn(200)	
   	$(".inptlist").appendTo("#inputparend")	
   	$(".inptlist").css("text-align","center")
   	$("#inputparend").delay(200).fadeIn(300)
	$(".inptlist").appendTo("#input")	
	$(".inptlist").css("text-align","left")
   	$("#inputframe").fadeIn(200)
	$("#inputparend").delay(200).hide()
   	$("#compatible").delay(200).fadeIn(400)
   	$("#showquote").delay(200).fadeIn(400)
   	$("#back7").delay(200).fadeIn(500)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble5").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	modelManager.addModel("5005");
   }
   
   function wedgereceiveripadaircradle(x){
	   $("#ipadaircradlepic").addClass("chosen")
	 
	  if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
			{
			   if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
				{
					if($("#telescopicBlockpic").hasClass("chosen"))
					{
						if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#ipadaircradletolockable2movieicon").css({"display":"block"})
							$("#ipadaircradletolockable2movieiconimg").css({"top":"450px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#ipadaircradletorotary2movieicon").css({"display":"block"})
							$("#ipadaircradletorotary2movieiconimg").css({"top":"450px"}).fadeIn(300)
							}
							else
							{
								$("#ipadaircradletowedgemount2movieicon").css({"display":"block"})
								$("#ipadaircradletowedgemount2movieiconimg").css({"top":"450px"}).fadeIn(300)
							}
					}
					else
					{
						if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#ipadaircradletolockable2movieicon").css({"display":"block"})
							$("#ipadaircradletolockable2movieiconimg").css({"top":"420px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#ipadaircradletorotary2movieicon").css({"display":"block"})
							$("#ipadaircradletorotary2movieiconimg").css({"top":"420px"}).fadeIn(300)
							}
							else
							{
								$("#ipadaircradletowedgemount2movieicon").css({"display":"block"})
								$("#ipadaircradletowedgemount2movieiconimg").css({"top":"420px"}).fadeIn(300)
							}
					}
				
			   }
			   else
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#ipadaircradletolockablemovieicon").css({"display":"block"})
							$("#ipadaircradletolockablemovieiconimg").css({"top":"420px"}).fadeIn(300)
							}
							
							else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#ipadaircradletorotarymovieicon").css({"display":"block"})
							$("#ipadaircradletorotarymovieiconimg").css({"top":"420px"}).fadeIn(300)
							}
							else
							{
								$("#ipadaircradletowedgemountmovieicon").css({"display":"block"})
								$("#ipadaircradletowedgemountmovieiconimg").css({"top":"420px"}).fadeIn(300)
							}
				   }
				   else
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#ipadaircradletolockablemovieicon").css({"display":"block"})
							$("#ipadaircradletolockablemovieiconimg").css({"top":"395px"}).fadeIn(300)
							}
							
							else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#ipadaircradletorotarymovieicon").css({"display":"block"})
							$("#ipadaircradletorotarymovieiconimg").css({"top":"395px"}).fadeIn(300)
							}
							else
							{
								$("#ipadaircradletowedgemountmovieicon").css({"display":"block"})
								$("#ipadaircradletowedgemountmovieiconimg").css({"top":"395px"}).fadeIn(300)
							}
				   }
				   
			   }
			}
	else if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
				{
					if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
					{
						if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#ipadaircradletolockable2movieicon").css({"display":"block"})
							$("#ipadaircradletolockable2movieiconimg").css({"top":"330px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#ipadaircradletorotary2movieicon").css({"display":"block"})
							$("#ipadaircradletorotary2movieiconimg").css({"top":"330px"}).fadeIn(300)
							}
							else
							{
								$("#ipadaircradletowedgemount2movieicon").fadeIn(300)
							}
					}
					else
					{
						if($("#ninetydegreebracket").hasClass("chosen"))
						{
							if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#ipadaircradletolockable2movieicon").css({"display":"block"})
							$("#ipadaircradletolockable2movieiconimg").css({"top":"420px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#ipadaircradletorotary2movieicon").css({"display":"block"})
							$("#ipadaircradletorotary2movieiconimg").css({"top":"420px"}).fadeIn(300)
							}
							else
							{
								$("#ipadaircradletowedgemount2movieicon").fadeIn(300)
							}
						}
						else
						{
							if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#ipadaircradletolockable2movieicon").css({"display":"block"})
							$("#ipadaircradletolockable2movieiconimg").css({"top":"395px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#ipadaircradletorotary2movieicon").css({"display":"block"})
							$("#ipadaircradletorotary2movieiconimg").css({"top":"395px"}).fadeIn(300)
							}
							else
							{
								$("#ipadaircradletowedgemount2movieicon").fadeIn(300)
							}
						}
						
					}
				
			   }
			   else
			   {
				   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
						if($("#lockablewedgereceiverpic").hasClass("chosen")){
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#ipadaircradletolockablemovieicon").css({"display":"block"})
						$("#ipadaircradletolockablemovieiconimg").css({"top":"297px"}).fadeIn(300)
						}
						
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#ipadaircradletorotarymovieicon").css({"display":"block"})
						$("#ipadaircradletorotarymovieiconimg").css({"top":"297px"}).fadeIn(300)
						}
						else
						{
							$("#ipadaircradletowedgemountmovieicon").fadeIn(300)
						}
				   }
				   else
				   {
					   if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						   if($("#lockablewedgereceiverpic").hasClass("chosen")){
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#ipadaircradletolockablemovieicon").css({"display":"block"})
						$("#ipadaircradletolockablemovieiconimg").css({"top":"390px"}).fadeIn(300)
						}
						
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#ipadaircradletorotarymovieicon").css({"display":"block"})
						$("#ipadaircradletorotarymovieiconimg").css({"top":"390px"}).fadeIn(300)
						}
						else
						{
							$("#ipadaircradletowedgemountmovieicon").fadeIn(300)
						}
					   }
					   
					   else
					   {
						 if($("#lockablewedgereceiverpic").hasClass("chosen")){
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#ipadaircradletolockablemovieicon").css({"display":"block"})
						$("#ipadaircradletolockablemovieiconimg").css({"top":"360px"}).fadeIn(300)
						}
						
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#ipadaircradletorotarymovieicon").css({"display":"block"})
						$("#ipadaircradletorotarymovieiconimg").css({"top":"360px"}).fadeIn(300)
						}
						else
						{
							$("#ipadaircradletowedgemountmovieicon").fadeIn(300)
						}  
					   }
					   
				   }
				   
			   }
			   
   	$("#mountingplate").fadeOut(100)
   $("#wedgereceiveripad").fadeOut(100)
   	$("#wedgereceiverlaptop").fadeOut(100)
   	$("#wedgereceiverempty").fadeOut(100)
	$("#wedgereceiverlaptopplate").fadeOut(100)
	$("#wedgereceiveripadairplate").fadeOut(100)
	$("#wedgereceiveripadaircradle").fadeOut(100)
	$("#wedgereceiverliteracyplate").fadeOut(100)
	$("#wedgereceivercamera").fadeOut(100)
	$("#wedgereceivercupholder").fadeOut(100)
	$("#ipadaircradleinputpar").show()
   	//$("#inputframe").fadeOut(100)
	$("#complete").delay(200).fadeIn(200)	
   	$(".inptlist").appendTo("#inputparend")	
   	$(".inptlist").css("text-align","center")
   	$("#inputparend").delay(200).fadeIn(300)
	$(".inptlist").appendTo("#input")	
	$(".inptlist").css("text-align","left")
   	$("#inputframe").fadeIn(200)
	$("#inputparend").delay(200).hide()
   	$("#compatible").delay(200).fadeIn(400)
   	$("#showquote").delay(200).fadeIn(400)
   	$("#back7").delay(200).fadeIn(500)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble5").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	modelManager.addModel("5006");
   }
   
   function wedgereceiverliteracyplate(x){
	   $("#literacyplatepic").addClass("chosen")
	   
	 if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
			{
			   if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#literacyplatetolockable2movieicon").css({"display":"block"})
							$("#literacyplatetolockable2movieiconimg").css({"top":"450px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#literacyplatetorotary2movieicon").css({"display":"block"})
							$("#literacyplatetorotary2movieiconimg").css({"top":"450px"}).fadeIn(300)
							}
							else
							{
								$("#literacyplatetorotary2movieiconimg").css({"display":"block"})
								$("#literacyplatetowedgemount2movieiconimg").css({"top":"450px"}).fadeIn(300)
							}
				   }
				   else
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#literacyplatetolockable2movieicon").css({"display":"block"})
							$("#literacyplatetolockable2movieiconimg").css({"top":"420px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#literacyplatetorotary2movieicon").css({"display":"block"})
							$("#literacyplatetorotary2movieiconimg").css({"top":"420px"}).fadeIn(300)
							}
							else
							{
								$("#literacyplatetorotary2movieiconimg").css({"display":"block"})
								$("#literacyplatetowedgemount2movieiconimg").css({"top":"420px"}).fadeIn(300)
							}
				   }
				
			   }
			   else
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#literacyplatetolockablemovieicon").css({"display":"block"})
							$("#literacyplatetolockablemovieiconimg").css({"top":"420px"}).fadeIn(300)
							}
							
							else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#literacyplatetorotarymovieicon").css({"display":"block"})
							$("#literacyplatetorotarymovieiconimg").css({"top":"420px"}).fadeIn(300)
							}
							else
							{
								$("#literacyplatetowedgemountmovieicon").css({"display":"block"})
								$("#literacyplatetowedgemountmovieiconimg").css({"top":"420px"}).fadeIn(300)
							}
				   }
				   else
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#literacyplatetolockablemovieicon").css({"display":"block"})
							$("#literacyplatetolockablemovieiconimg").css({"top":"395px"}).fadeIn(300)
							}
							
							else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#literacyplatetorotarymovieicon").css({"display":"block"})
							$("#literacyplatetorotarymovieiconimg").css({"top":"395px"}).fadeIn(300)
							}
							else
							{
								$("#literacyplatetowedgemountmovieicon").css({"display":"block"})
								$("#literacyplatetowedgemountmovieiconimg").css({"top":"395px"}).fadeIn(300)
							}
				   }
				   
			   }
			}
	else if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
			   {
				   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#literacyplatetolockable2movieicon").css({"display":"block"})
						$("#literacyplatetolockable2movieiconimg").css({"top":"330px"}).fadeIn(300)
					}
					else if($("#rotarywedgereceiverpic").hasClass("chosen")){
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#literacyplatetorotary2movieicon").css({"display":"block"})
						$("#literacyplatetorotary2movieiconimg").css({"top":"330px"}).fadeIn(300)
						}
						else
						{
							$("#literacyplatetowedgemount2movieicon").fadeIn(300)
						}
				   }
				   else
				   {
					   if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						   if($("#lockablewedgereceiverpic").hasClass("chosen")){
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#literacyplatetolockable2movieicon").css({"display":"block"})
						$("#literacyplatetolockable2movieiconimg").css({"top":"420px"}).fadeIn(300)
					}
					else if($("#rotarywedgereceiverpic").hasClass("chosen")){
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#literacyplatetorotary2movieicon").css({"display":"block"})
						$("#literacyplatetorotary2movieiconimg").css({"top":"420px"}).fadeIn(300)
						}
						else
						{
							$("#literacyplatetowedgemount2movieicon").fadeIn(300)
						} 
					   }
					   else
					   {
						   if($("#lockablewedgereceiverpic").hasClass("chosen")){
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#literacyplatetolockable2movieicon").css({"display":"block"})
						$("#literacyplatetolockable2movieiconimg").css({"top":"395px"}).fadeIn(300)
					}
					else if($("#rotarywedgereceiverpic").hasClass("chosen")){
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#literacyplatetorotary2movieicon").css({"display":"block"})
						$("#literacyplatetorotary2movieiconimg").css({"top":"395px"}).fadeIn(300)
						}
						else
						{
							$("#literacyplatetowedgemount2movieicon").fadeIn(300)
						} 
					   }
					  
				   }
				
			   }
			   else
			   {
				   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#literacyplatetolockablemovieicon").css({"display":"block"})
						$("#literacyplatetolockablemovieiconimg").css({"top":"297px"}).fadeIn(300)
						}
						
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#literacyplatetorotarymovieicon").css({"display":"block"})
						$("#literacyplatetorotarymovieiconimg").css({"top":"297px"}).fadeIn(300)
						}
						else
						{
							$("#literacyplatetowedgemountmovieicon").fadeIn(300)
						}
				   }
				   else
				   {
					   if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						  if($("#lockablewedgereceiverpic").hasClass("chosen")){
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#literacyplatetolockablemovieicon").css({"display":"block"})
						$("#literacyplatetolockablemovieiconimg").css({"top":"390px"}).fadeIn(300)
						}
						
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#literacyplatetorotarymovieicon").css({"display":"block"})
						$("#literacyplatetorotarymovieiconimg").css({"top":"390px"}).fadeIn(300)
						}
						else
						{
							$("#literacyplatetowedgemountmovieicon").fadeIn(300)
						} 
					   }
					   else
					   {
						   if($("#lockablewedgereceiverpic").hasClass("chosen")){
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#literacyplatetolockablemovieicon").css({"display":"block"})
						$("#literacyplatetolockablemovieiconimg").css({"top":"360px"}).fadeIn(300)
						}
						
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#literacyplatetorotarymovieicon").css({"display":"block"})
						$("#literacyplatetorotarymovieiconimg").css({"top":"360px"}).fadeIn(300)
						}
						else
						{
							$("#literacyplatetowedgemountmovieicon").fadeIn(300)
						}
					   }
					   
				   }
				   
			   }
   	$("#mountingplate").fadeOut(100)
   $("#wedgereceiveripad").fadeOut(100)
   	$("#wedgereceiverlaptop").fadeOut(100)
   	$("#wedgereceiverempty").fadeOut(100)
	$("#wedgereceiverlaptopplate").fadeOut(100)
	$("#wedgereceiveripadairplate").fadeOut(100)
	$("#wedgereceiveripadaircradle").fadeOut(100)
	$("#wedgereceiverliteracyplate").fadeOut(100)
	$("#wedgereceivercamera").fadeOut(100)
	$("#wedgereceivercupholder").fadeOut(100)
	$("#literacyplateinputpar").show()
   	//$("#inputframe").fadeOut(100)
	$("#complete").delay(200).fadeIn(200)	
   	$(".inptlist").appendTo("#inputparend")	
   	$(".inptlist").css("text-align","center")
   	$("#inputparend").delay(200).fadeIn(300)
	$(".inptlist").appendTo("#input")	
	$(".inptlist").css("text-align","left")
   	$("#inputframe").fadeIn(200)
	$("#inputparend").delay(200).hide()
   	$("#compatible").delay(200).fadeIn(400)
   	$("#showquote").delay(200).fadeIn(400)
   	$("#back7").delay(200).fadeIn(500)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble5").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	modelManager.addModel("5007");
   }
   
   function wedgereceivercamera(x){
	   $("#camerapic").addClass("chosen")
	   if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
			{
			   if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#cameratolockable2movieicon").css({"display":"block"})
							$("#cameratolockable2movieiconimg").css({"top":"450px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#cameratorotary2movieicon").css({"display":"block"})
							$("#cameratorotary2movieiconimg").css({"top":"450px"}).fadeIn(300)
							}
							else
							{
								$("#cameratowedgemount2movieicon").css({"display":"block"})
								$("#cameratowedgemount2movieiconimg").css({"top":"450px"}).fadeIn(300)
							}
				   }
				   else
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#cameratolockable2movieicon").css({"display":"block"})
							$("#cameratolockable2movieiconimg").css({"top":"420px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#cameratorotary2movieicon").css({"display":"block"})
							$("#cameratorotary2movieiconimg").css({"top":"420px"}).fadeIn(300)
							}
							else
							{
								$("#cameratowedgemount2movieicon").css({"display":"block"})
								$("#cameratowedgemount2movieiconimg").css({"top":"420px"}).fadeIn(300)
							}
				   }
				
			   }
			   else
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#cameratolockablemovieicon").css({"display":"block"})
							$("#cameratolockablemovieiconimg").css({"top":"420px"}).fadeIn(300)
							}
							
							else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#cameratorotarymovieicon").css({"display":"block"})
							$("#cameratorotarymovieiconimg").css({"top":"420px"}).fadeIn(300)
							}
							else
							{
								$("#cameratowedgemountmovieicon").css({"display":"block"})
								$("#cameratowedgemountmovieiconimg").css({"top":"420px"}).fadeIn(300)
							}
				   }
				   else
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#cameratolockablemovieicon").css({"display":"block"})
							$("#cameratolockablemovieiconimg").css({"top":"395px"}).fadeIn(300)
							}
							
							else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#cameratorotarymovieicon").css({"display":"block"})
							$("#cameratorotarymovieiconimg").css({"top":"395px"}).fadeIn(300)
							}
							else
							{
								$("#cameratowedgemountmovieicon").css({"display":"block"})
								$("#cameratowedgemountmovieiconimg").css({"top":"395px"}).fadeIn(300)
							}
				   }
				   
			   }
			}
			
	else if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   if($("#lockablewedgereceiverpic").hasClass("chosen")){
					$("#lockablewedgereceiverpic").fadeOut(2000)
					$("#cameratolockable2movieicon").css({"display":"block"})
					$("#cameratolockable2movieiconimg").css({"top":"330px"}).fadeIn(300)
				}
				else if($("#rotarywedgereceiverpic").hasClass("chosen")){
					$("#rotarywedgereceiverpic").fadeOut(2000)
					$("#cameratorotary2movieicon").css({"display":"block"})
					$("#cameratorotary2movieiconimg").css({"top":"330px"}).fadeIn(300)
					}
					else
					{
						$("#cameratowedgemount2movieicon").css({"display":"block"})
						$("#cameratowedgemount2movieiconimg").css({"top":"300px"}).fadeIn(300)
					}
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
			   {
				   if($("#lockablewedgereceiverpic").hasClass("chosen")){
					$("#lockablewedgereceiverpic").fadeOut(2000)
					$("#cameratolockable2movieicon").css({"display":"block"})
					$("#cameratolockable2movieiconimg").css({"top":"420px"}).fadeIn(300)
				}
				else if($("#rotarywedgereceiverpic").hasClass("chosen")){
					$("#rotarywedgereceiverpic").fadeOut(2000)
					$("#cameratorotary2movieicon").css({"display":"block"})
					$("#cameratorotary2movieiconimg").css({"top":"420px"}).fadeIn(300)
					}
					else
					{
						$("#cameratowedgemount2movieicon").fadeIn(300)
					}
			   }
			   else
			   {
				   if($("#lockablewedgereceiverpic").hasClass("chosen")){
					$("#lockablewedgereceiverpic").fadeOut(2000)
					$("#cameratolockable2movieicon").css({"display":"block"})
					$("#cameratolockable2movieiconimg").css({"top":"395px"}).fadeIn(300)
				}
				else if($("#rotarywedgereceiverpic").hasClass("chosen")){
					$("#rotarywedgereceiverpic").fadeOut(2000)
					$("#cameratorotary2movieicon").css({"display":"block"})
					$("#cameratorotary2movieiconimg").css({"top":"395px"}).fadeIn(300)
					}
					else
					{
						$("#cameratowedgemount2movieicon").fadeIn(300)
					}
			   }
				
		   }
		
	   }
	   else
	   {
		   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
		   {
			   if($("#lockablewedgereceiverpic").hasClass("chosen")){
				$("#lockablewedgereceiverpic").fadeOut(2000)
				$("#cameratolockablemovieicon").css({"display":"block"})
				$("#cameratolockablemovieiconimg").css({"top":"297px"}).fadeIn(300)
				}
				
				else if($("#rotarywedgereceiverpic").hasClass("chosen")){
				$("#rotarywedgereceiverpic").fadeOut(2000)
				$("#cameratorotarymovieicon").css({"display":"block"})
				$("#cameratorotarymovieiconimg").css({"top":"297px"}).fadeIn(300)
				}
				else
				{
					$("#cameratowedgemountmovieicon").css({"display":"block"})
					$("#cameratowedgemountmovieiconimg").css({"top":"267px"}).fadeIn(300)
				}
		   }
		   else
		   {
			   if($("#ninetydegreebracket").hasClass("chosen"))
			   {
				 if($("#lockablewedgereceiverpic").hasClass("chosen")){
				$("#lockablewedgereceiverpic").fadeOut(2000)
				$("#cameratolockablemovieicon").css({"display":"block"})
				$("#cameratolockablemovieiconimg").css({"top":"390px"}).fadeIn(300)
				}
				
				else if($("#rotarywedgereceiverpic").hasClass("chosen")){
				$("#rotarywedgereceiverpic").fadeOut(2000)
				$("#cameratorotarymovieicon").css({"display":"block"})
				$("#cameratorotarymovieiconimg").css({"top":"390px"}).fadeIn(300)
				}
				else
				{
					$("#cameratowedgemountmovieicon").fadeIn(300)
				}  
			   }
			   else
			   {
				   if($("#lockablewedgereceiverpic").hasClass("chosen")){
				$("#lockablewedgereceiverpic").fadeOut(2000)
				$("#cameratolockablemovieicon").css({"display":"block"})
				$("#cameratolockablemovieiconimg").css({"top":"360px"}).fadeIn(300)
				}
				
				else if($("#rotarywedgereceiverpic").hasClass("chosen")){
				$("#rotarywedgereceiverpic").fadeOut(2000)
				$("#cameratorotarymovieicon").css({"display":"block"})
				$("#cameratorotarymovieiconimg").css({"top":"360px"}).fadeIn(300)
				}
				else
				{
					$("#cameratowedgemountmovieicon").fadeIn(300)
				}
			   }
			   
		   }
		   
	   }
	   
   	$("#mountingplate").fadeOut(100)
   $("#wedgereceiveripad").fadeOut(100)
   	$("#wedgereceiverlaptop").fadeOut(100)
   	$("#wedgereceiverempty").fadeOut(100)
	$("#wedgereceiverlaptopplate").fadeOut(100)
	$("#wedgereceiveripadairplate").fadeOut(100)
	$("#wedgereceiveripadaircradle").fadeOut(100)
	$("#wedgereceiverliteracyplate").fadeOut(100)
	$("#wedgereceivercamera").fadeOut(100)
	$("#wedgereceivercupholder").fadeOut(100)
	$("#camerainputpar").show()
   	//$("#inputframe").fadeOut(100)
	$("#complete").delay(200).fadeIn(200)	
   	$(".inptlist").appendTo("#inputparend")	
   	$(".inptlist").css("text-align","center")
   	$("#inputparend").delay(200).fadeIn(300)
	$(".inptlist").appendTo("#input")	
	$(".inptlist").css("text-align","left")
   	$("#inputframe").fadeIn(200)
	$("#inputparend").delay(200).hide()
   	$("#compatible").delay(200).fadeIn(400)
   	$("#showquote").delay(200).fadeIn(400)
   	$("#back7").delay(200).fadeIn(500)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble5").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	modelManager.addModel("5008");
   }
   
   function wedgereceivercupholder(x){
	   $("#cupholderpic").addClass("chosen")
	  if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
			{
			   if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#cupholdertolockable2movieicon").css({"display":"block"})
							$("#cupholdertolockable2movieiconimg").css({"top":"450px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#cupholdertorotary2movieicon").css({"display":"block"})
							$("#cupholdertorotary2movieiconimg").css({"top":"450px"}).fadeIn(300)
							}
							else
							{
								//$("#cameratowedgemount2movieicon").fadeIn(300)
							}
				   }
				   else
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#cupholdertolockable2movieicon").css({"display":"block"})
							$("#cupholdertolockable2movieiconimg").css({"top":"420px"}).fadeIn(300)
						}
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#cupholdertorotary2movieicon").css({"display":"block"})
							$("#cupholdertorotary2movieiconimg").css({"top":"420px"}).fadeIn(300)
							}
							else
							{
								//$("#cameratowedgemount2movieicon").fadeIn(300)
							}
				   }
				
			   }
			   else
			   {
				   if($("#telescopicBlockpic").hasClass("chosen"))
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#cupholdertolockablemovieicon").css({"display":"block"})
							$("#cupholdertolockablemovieiconimg").css({"top":"420px"}).fadeIn(300)
							}
							
							else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#cupholdertorotarymovieicon").css({"display":"block"})
							$("#cupholdertorotarymovieiconimg").css({"top":"420px"}).fadeIn(300)
							}
							else
							{
								//$("#cameratowedgemountmovieicon").fadeIn(300)
							}
				   }
				   else
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
							$("#lockablewedgereceiverpic").fadeOut(2000)
							$("#cupholdertolockablemovieicon").css({"display":"block"})
							$("#cupholdertolockablemovieiconimg").css({"top":"395px"}).fadeIn(300)
							}
							
							else if($("#rotarywedgereceiverpic").hasClass("chosen")){
							$("#rotarywedgereceiverpic").fadeOut(2000)
							$("#cupholdertorotarymovieicon").css({"display":"block"})
							$("#cupholdertorotarymovieiconimg").css({"top":"395px"}).fadeIn(300)
							}
							else
							{
								//$("#cameratowedgemountmovieicon").fadeIn(300)
							}
				   }
				   
			   }
			}
	else if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
			   {
				   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#cupholdertolockable2movieicon").css({"display":"block"})
						$("#cupholdertolockable2movieiconimg").css({"top":"330px"}).fadeIn(300)
					}
					else if($("#rotarywedgereceiverpic").hasClass("chosen")){
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#cupholdertorotary2movieicon").css({"display":"block"})
						$("#cupholdertorotary2movieiconimg").css({"top":"330px"}).fadeIn(300)
						}
						else
						{
							//$("#cameratowedgemount2movieicon").fadeIn(300)
						}
				   }
				   else
				   {
					   if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						   if($("#lockablewedgereceiverpic").hasClass("chosen")){
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#cupholdertolockable2movieicon").css({"display":"block"})
						$("#cupholdertolockable2movieiconimg").css({"top":"420px"}).fadeIn(300)
					}
					else if($("#rotarywedgereceiverpic").hasClass("chosen")){
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#cupholdertorotary2movieicon").css({"display":"block"})
						$("#cupholdertorotary2movieiconimg").css({"top":"420px"}).fadeIn(300)
						}
						else
						{
							//$("#cameratowedgemount2movieicon").fadeIn(300)
						}
					   }
					   else
					   {
						   if($("#lockablewedgereceiverpic").hasClass("chosen")){
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#cupholdertolockable2movieicon").css({"display":"block"})
						$("#cupholdertolockable2movieiconimg").css({"top":"395px"}).fadeIn(300)
					}
					else if($("#rotarywedgereceiverpic").hasClass("chosen")){
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#cupholdertorotary2movieicon").css({"display":"block"})
						$("#cupholdertorotary2movieiconimg").css({"top":"395px"}).fadeIn(300)
						}
						else
						{
							//$("#cameratowedgemount2movieicon").fadeIn(300)
						}
					   }
					   
				   }
				
			   }
			   else
			   {
				   if($("#deskclamp").hasClass("chosen") || $("#extrollingstand").hasClass("chosen"))
				   {
					   if($("#lockablewedgereceiverpic").hasClass("chosen")){
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#cupholdertolockablemovieicon").css({"display":"block"})
						$("#cupholdertolockablemovieiconimg").css({"top":"297px"}).fadeIn(300)
						}
						
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#cupholdertorotarymovieicon").css({"display":"block"})
						$("#cupholdertorotarymovieiconimg").css({"top":"297px"}).fadeIn(300)
						}
						else
						{
							//$("#cameratowedgemountmovieicon").fadeIn(300)
						}
				   }
				   else
				   {
					   if($("#ninetydegreebracket").hasClass("chosen"))
					   {
						   if($("#lockablewedgereceiverpic").hasClass("chosen")){
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#cupholdertolockablemovieicon").css({"display":"block"})
						$("#cupholdertolockablemovieiconimg").css({"top":"390px"}).fadeIn(300)
						}
						
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#cupholdertorotarymovieicon").css({"display":"block"})
						$("#cupholdertorotarymovieiconimg").css({"top":"390px"}).fadeIn(300)
						}
						else
						{
							//$("#cameratowedgemountmovieicon").fadeIn(300)
						}
					   }
					   else
					   {
						   if($("#lockablewedgereceiverpic").hasClass("chosen")){
						$("#lockablewedgereceiverpic").fadeOut(2000)
						$("#cupholdertolockablemovieicon").css({"display":"block"})
						$("#cupholdertolockablemovieiconimg").css({"top":"360px"}).fadeIn(300)
						}
						
						else if($("#rotarywedgereceiverpic").hasClass("chosen")){
						$("#rotarywedgereceiverpic").fadeOut(2000)
						$("#cupholdertorotarymovieicon").css({"display":"block"})
						$("#cupholdertorotarymovieiconimg").css({"top":"360px"}).fadeIn(300)
						}
						else
						{
							//$("#cameratowedgemountmovieicon").fadeIn(300)
						}
					   }
					   
				   }
				   
			   }
			   
   	$("#mountingplate").fadeOut(100)
   $("#wedgereceiveripad").fadeOut(100)
   	$("#wedgereceiverlaptop").fadeOut(100)
   	$("#wedgereceiverempty").fadeOut(100)
	$("#wedgereceiverlaptopplate").fadeOut(100)
	$("#wedgereceiveripadairplate").fadeOut(100)
	$("#wedgereceiveripadaircradle").fadeOut(100)
	$("#wedgereceiverliteracyplate").fadeOut(100)
	$("#wedgereceivercamera").fadeOut(100)
	$("#wedgereceivercupholder").fadeOut(100)
	$("#cupholderinputpar").show()
   	//$("#inputframe").fadeOut(100)
	$("#complete").delay(200).fadeIn(200)	
   	$(".inptlist").appendTo("#inputparend")	
   	$(".inptlist").css("text-align","center")
   	$("#inputparend").delay(200).fadeIn(300)
	$(".inptlist").appendTo("#input")	
	$(".inptlist").css("text-align","left")
   	$("#inputframe").fadeIn(200)
	$("#inputparend").delay(200).hide()
   	$("#compatible").delay(200).fadeIn(400)
   	$("#showquote").delay(200).fadeIn(400)
   	$("#back7").delay(200).fadeIn(500)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble5").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
	modelManager.addModel("5009");
   }
   
   
   function wedgereceiverempty(x){
   	$("#mountingplate").fadeOut(100)
   	$("#wedgereceiveripad").fadeOut(100)
   	$("#wedgereceiverlaptop").fadeOut(100)
   	$("#wedgereceiverempty").fadeOut(100)
	$("#wedgereceiverlaptopplate").fadeOut(100)
	$("#wedgereceiveripadairplate").fadeOut(100)
	$("#wedgereceiveripadaircradle").fadeOut(100)
	$("#wedgereceiverliteracyplate").fadeOut(100)
	$("#wedgereceivercamera").fadeOut(100)
	$("#wedgereceivercupholder").fadeOut(100)
   	//$("#inputframe").fadeOut(100)
   	$("#complete").delay(200).fadeIn(200)	
   	$(".inptlist").appendTo("#inputparend")	
   	$(".inptlist").css("text-align","center")
   	$("#inputparend").delay(200).fadeIn(300)
	$(".inptlist").appendTo("#input")	
	$(".inptlist").css("text-align","left")
   	$("#inputframe").fadeIn(200)
	$("#inputparend").delay(200).hide()
   	$("#compatible").delay(200).fadeIn(400)
   	$("#showquote").delay(200).fadeIn(400)
   	$("#back7").delay(200).fadeIn(500)
   	if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble5").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   	}
   }
</script>
<script>
   function backfirst(x){
   	$(".chairoptions").fadeOut(100)
   	$("#back1").fadeOut(100)
   	$("#ttrackpic").fadeOut(100)
   	$("#doublettrackpic").fadeOut(100)
   	$("#roundtubeinputpar").hide()
   	$("#roundverttubeinputpar").hide()
   	$("#squaretubebracketinputpar").hide()
   	$("#ttrackinputpar").hide()
   	$("#dttrackinputpar").hide()
	$(".ihidden1").hide()
   	if($("#powerchair").hasClass("chosen")){
   		$("#firsttellus").delay(200).fadeIn(200)
   		$("#whichisfound").delay(200).fadeIn(300)
   		$("#squaretube").delay(200).fadeIn(400).removeClass("chosen")	
   		$("#roundtube").delay(200).fadeIn(500).removeClass("chosen")
   		$("#ttrack").delay(200).fadeIn(600).removeClass("chosen")
   		$("#doublettrack").delay(200).fadeIn(700).removeClass("chosen")
   		$("#backstart").delay(200).fadeIn(800)
   	}

	/*if($("#ninetydegreebracket").hasClass("chosen"))
	{
		$("#foryour").delay(200).fadeIn(200)
   		$("#zeroclearancebracket").fadeOut(100).removeClass("chosen")
		$("#zeroclearanceclamps").fadeOut(100).removeClass("chosen")	
		$("#fullringbracket").fadeOut(100).removeClass("chosen")
		$("#fullringclamps").fadeOut(100).removeClass("chosen")
		$("#zeroclearancebracketmanual").fadeOut(100).removeClass("chosen")
		$("#zeroclearanceclampsmanual").fadeOut(100).removeClass("chosen")	
		$("#fullringbracketmanual").fadeOut(100).removeClass("chosen")
		$("#fullringclampsmanual").fadeOut(100).removeClass("chosen")
		$("#ninetydegreebracket").fadeOut(100).removeClass("chosen")
		$("#directmounthorizontal").fadeOut(100).removeClass("chosen")
		$("#fullring").delay(200).fadeIn(300)
		$("#zeroclearance").delay(200).fadeIn(400)
		$("#ninetydegreebracket").delay(200).fadeIn(300) 
		$("#directmounthorizontal").delay(200).fadeIn(300)
		$("#backstart").delay(200).fadeIn(300)
	}*/
	
	else if($("#manualchair").hasClass("chosen") && $("#roundtube").hasClass("chosen")){
		
		$("#foryour").delay(200).fadeIn(200)
		$("#verttube").delay(200).fadeIn(300).removeClass("chosen")
   		$("#roundtube").delay(200).fadeIn(300).removeClass("chosen")
		$("#backstart").delay(200).fadeIn(400)
	}
	
	modelManager.removePrevious();
   }
</script>
<script>
   function backsecond(x){
   	$(".chairoptions").fadeOut(100)
   	$("#back2").fadeOut(100)
   	if($("#ninetydegreebracket").hasClass("chosen"))
	{
		$(".ihidden2").hide()
		$("#directmountinputpar").hide()
		$("#serdirectmountinputpar").hide()
		$("#vertserdirectmountinputpar").hide()
	}
	$("#directmounthorizontalinputpar").hide()
	$(".ihidden1").hide();
   	//$("#serdirectmountinputpar").hide()
   	$("#fullringbracketinputpar").hide()
   	$("#zeroclearanceinputpar").hide()
   	$("#squaretubebracketinputpar").hide()
   	$("#ttrackbracketinputpar").hide()
   	$("#dttrackbracketinputpar").hide()
   	$("#ttrackdirectmountinputpar").hide()
   	$("#recommend").delay(200).fadeIn(200)
   	if($("#verttube").hasClass("chosen")){
   		$("#serdirectmountpic").fadeOut(100).removeClass("chosen")
   		$("#directmountpic").fadeOut(100).removeClass("chosen")	
   		$("#vertical4").fadeOut(100)
   		$("#vertical6").fadeOut(100)
   		$("#vertical12").fadeOut(100)
   		$("#verticalextension8").fadeOut(100)
   		$("#directmount").delay(200).fadeIn(300)
   		$("#serdirectmount").delay(200).fadeIn(400)
		$("#vertserdirectmount").delay(200).fadeIn(400)
   	}
	
	if($("#ninetydegreebracket").hasClass("chosen") && $("#directmountpic").hasClass("chosen") && $("#powerchair").hasClass("chosen") && $("#roundtube").hasClass("chosen"))
		 {
			$("#zeroclearancebracket").fadeOut(100).removeClass("chosen")
			$("#zeroclearanceclamps").fadeOut(100).removeClass("chosen")	
			$("#fullringbracket").fadeOut(100).removeClass("chosen")
			$("#fullringclamps").fadeOut(100).removeClass("chosen")
			$("#zeroclearancebracketmanual").fadeOut(100).removeClass("chosen")
			$("#zeroclearanceclampsmanual").fadeOut(100).removeClass("chosen")	
			$("#fullringbracketmanual").fadeOut(100).removeClass("chosen")
			$("#fullringclampsmanual").fadeOut(100).removeClass("chosen")
			//$("#ninetydegreebracket").fadeOut(100).removeClass("chosen")
			$("#directmounthorizontal").fadeOut(100).removeClass("chosen")
			$("#directmount").delay(200).fadeIn(300)
			$("#serdirectmount").delay(200).fadeIn(400)
			$("#vertserdirectmount").delay(200).fadeIn(300) 
			$("#back2").delay(200).fadeIn(300)
		 }
   	 if($("#roundtube").hasClass("chosen")){
		 
		 if($("#ninetydegreebracket").hasClass("chosen") && $("#directmountpic").hasClass("chosen"))
		 {
			$("#ninetydegreebracketinputpar").css({"margin-top":"17px"})
			$("#zeroclearancebracket").fadeOut(100).removeClass("chosen")
			$("#zeroclearanceclamps").fadeOut(100).removeClass("chosen")	
			$("#fullringbracket").fadeOut(100).removeClass("chosen")
			$("#fullringclamps").fadeOut(100).removeClass("chosen")
			$("#zeroclearancebracketmanual").fadeOut(100).removeClass("chosen")
			$("#zeroclearanceclampsmanual").fadeOut(100).removeClass("chosen")	
			$("#fullringbracketmanual").fadeOut(100).removeClass("chosen")
			$("#fullringclampsmanual").fadeOut(100).removeClass("chosen")
			$("#ninetydegreebracket").fadeOut(100).removeClass("chosen")
			$("#directmounthorizontal").fadeOut(100).removeClass("chosen")
			$("#directmount").delay(200).fadeIn(300)
			$("#serdirectmount").delay(200).fadeIn(400)
			$("#vertserdirectmount").delay(200).fadeIn(300) 
		 }
		 else
		 {
			 $("#ninetydegreebracketinputpar").hide()
   		$("#zeroclearancebracket").fadeOut(100).removeClass("chosen")
   		$("#zeroclearanceclamps").fadeOut(100).removeClass("chosen")	
   		$("#fullringbracket").fadeOut(100).removeClass("chosen")
   		$("#fullringclamps").fadeOut(100).removeClass("chosen")
   		$("#zeroclearancebracketmanual").fadeOut(100).removeClass("chosen")
   		$("#zeroclearanceclampsmanual").fadeOut(100).removeClass("chosen")	
   		$("#fullringbracketmanual").fadeOut(100).removeClass("chosen")
   		$("#fullringclampsmanual").fadeOut(100).removeClass("chosen")
		//$("#ninetydegreebracket").fadeOut(100).removeClass("chosen")
		$("#directmounthorizontal").fadeOut(100).removeClass("chosen")
   		$("#manualwheel").fadeOut(100)
   		$("#14socketbar").fadeOut(100)
   		$("#22socketbar").fadeOut(100)
   		$("#fullring").delay(200).fadeIn(300)
   		$("#zeroclearance").delay(200).fadeIn(400)
		$("#ninetydegreebracket").delay(200).fadeIn(300)
		$("#directmounthorizontal").delay(200).fadeIn(300)
		 }
   	}	
   	if($("#ttrack").hasClass("chosen")){
   		$("#ttrackdirectpic").fadeOut(100).removeClass("chosen")
   		$("#ttrackbracketclamps").fadeOut(100).removeClass("chosen")	
   		$("#ttrackbracket1").fadeOut(100).removeClass("chosen")
   		$("#14socketbar").fadeOut(100)
   		$("#22socketbar").fadeOut(100)
   		$("#ttrackdirect").delay(200).fadeIn(300)
   		$("#ttrackbracket").delay(200).fadeIn(400)
   	}
   	if($("#doublettrack").hasClass("chosen")){
   		$("#dttrackdirectpic").fadeOut(100).removeClass("chosen")
   		$("#dttrackbracketclamps").fadeOut(100).removeClass("chosen")	
   		$("#dttrackbracket1").fadeOut(100).removeClass("chosen")
   		$("#14socketbar").fadeOut(100)
   		$("#22socketbar").fadeOut(100)
   		$("#doublettrackbracket").delay(200).fadeIn(300)
   		$("#doublettrackdirect").delay(200).fadeIn(400)
   	}
   	if($("#squaretube").hasClass("chosen")){
   		$("#squaretubebracketpic").fadeOut(100).removeClass("chosen")
   		$("#squaretubeclamps").fadeOut(100).removeClass("chosen")	
   		$("#14socketbar").fadeOut(100)
   		$("#22socketbar").fadeOut(100)
   		$("#squaretubebracket").delay(200).fadeIn(300)
   	}
   	$("#back1").delay(200).fadeIn(500)
	modelManager.removePrevious();
   }
</script>
<script>
   function backthird(x){
   	$(".chairoptions").fadeOut(100)
   	$("#back3").fadeOut(100)
	$(".ihidden2").hide();
   	if(($("#fullringbracket").hasClass("chosen"))||($("#zeroclearancebracket").hasClass("chosen"))||($("#fullringbracketmanual").hasClass("chosen"))||($("#zeroclearancebracketmanual").hasClass("chosen"))||($("#squaretubebracketpic").hasClass("chosen"))||($("#ttrackbracket1").hasClass("chosen"))||($("#dttrackbracket1").hasClass("chosen"))){
   		$("#14socketbarpic").fadeOut(100).removeClass("chosen")
   		$("#22socketbarpic").fadeOut(100).removeClass("chosen")
		$("#telescopicBlockpic").fadeOut(100).removeClass("chosen")
		$("#sersocketbar14pic").fadeOut(100).removeClass("chosen")
   		$("#14socketbarpicmanual").fadeOut(100).removeClass("chosen")
   		$("#22socketbarpicmanual").fadeOut(100).removeClass("chosen")	
   		$("#fullringclamps").fadeOut(100).removeClass("chosen")
   		$("#zeroclearanceclamps").fadeOut(100).removeClass("chosen")
   		$("#fullringclampsmanual").fadeOut(100).removeClass("chosen")
   		$("#zeroclearanceclampsmanual").fadeOut(100).removeClass("chosen")
   		$("#squaretubeclamps").fadeOut(100).removeClass("chosen")
   		$("#dttrackbracketclamps").fadeOut(100).removeClass("chosen")
   		$("#ttrackbracketclamps").fadeOut(100).removeClass("chosen")
   		$("#vertical4").fadeOut(100)
   		$("#vertical6").fadeOut(100)
   		$("#vertical12").fadeOut(100)
   		$("#verticalextension8").fadeOut(100)
   		$("#verticalextension16").fadeOut(100)	
   		$("#socketbar14inputpar").hide()
   		$("#socketbar22inputpar").hide()
		$("#sersocketbar14inputpar").hide()
		$("#telescopicBlockinputpar").hide()
   		$("#recommend").fadeIn(200)		
   		$("#14socketbar").fadeIn(200)
   		$("#22socketbar").fadeIn(300)
		$("#sersocketbar14").fadeIn(300)
		if($("#powerchair").hasClass("chosen"))
		{
			$("#telescopicBlock").hide()
		}
		else
		{
		$("#telescopicBlock").fadeIn(300)
		}
   	}	
	
	if($("#powerchair").hasClass("chosen"))
	{
		if($("#fullringbracketmanual").hasClass("chosen")|| $("#zeroclearancebracketmanual").hasClass("chosen") || $("#ninetydegreebracket").hasClass("chosen")|| $("#directmounthorizontal").hasClass("chosen"))
		{
			
		}
		else
		{
			if($("#ttrack").hasClass("chosen") || $("#doublettrack").hasClass("chosen"))
			{
				
			}
			else
			{
			$(".ihidden1").hide()
			}
		}
		
	}
   	$("#back2").fadeIn(400)
	modelManager.removePrevious();
   }
</script>
<script>
   function backforth(x){
   	$(".chairoptions").fadeOut(100)
   	$("#back4").fadeOut(100)
	/*if($(".ihidden2").hasClass("chosen"))
	{
		//$(".ihidden2").addClass("chosen")
	}*/
	if($("#telescopicBlockpic").hasClass("chosen"))
	{
		
	}
	else
	{
		if($("#powerchair").hasClass("chosen"))
		{
			
		}
		else
		{
			$(".ihidden").hide()
			$(".ihidden2").hide()
			$(".ihidden3").hide()
		}
		
	}
	
	if($("#powerchair").hasClass("chosen"))
		{
			$(".ihidden3").hide()
		}
	
	if($("#powerchair").hasClass("chosen"))
		{
			if($("#ttrack").hasClass("chosen") || $("#doublettrack").hasClass("chosen"))
			{
				if($("#ttrackdirectpic").hasClass("chosen") || $("#dttrackdirectpic").hasClass("chosen"))
				{
					$(".ihidden4").hide()
				}
			}
		}
		
   	$("#verticalbar4pic").fadeOut(100).removeClass("chosen")
   	$("#verticalbar6pic").fadeOut(100).removeClass("chosen")
   	$("#verticalbar12pic").fadeOut(100).removeClass("chosen")
   	$("#verticalbaradjpic").fadeOut(100).removeClass("chosen")
   	$("#verticalextension16pic").fadeOut(100).removeClass("chosen")
   	$("#verticalextension8pic").fadeOut(100).removeClass("chosen")
   	$("#verticalbars").css({"margin-top":"0px"})	
   	$("#m2").fadeOut(100)
   	$("#m2x").fadeOut(100)
   	$("#m2max").fadeOut(100)
   	$("#articulatingarm").fadeOut(100)		
   	$("#articulatingarmwithriser").fadeOut(100)
   	$("#vertical12inputpar").hide()
   	$("#vertical6inputpar").hide()
   	$("#vertical4inputpar").hide()
   	$("#verticaladjinputpar").hide()
   	$("#vertical8inputpar").hide()
   	$("#vertical16inputpar").hide()
   	$("#verticaloptions").delay(200).fadeIn(200)	
   	$("#vertical4").delay(200).fadeIn(300)	
   	$("#vertical6").delay(200).fadeIn(400)	
   	$("#vertical12").delay(200).fadeIn(500)
   	$("#verticaladj").delay(200).fadeIn(600)
   	$("#verticalextension16").delay(200).fadeIn(700)	
   	$("#verticalextension8").delay(200).fadeIn(800)	
   	if(($("#squaretube").hasClass("chosen"))||($("#fullringbracket").hasClass("chosen"))||($("#zeroclearancebracket").hasClass("chosen"))||($("#fullringbracketmanual").hasClass("chosen"))||($("#zeroclearancebracketmanual").hasClass("chosen"))||($("#ttrackbracket1").hasClass("chosen"))||($("#dttrackbracket1").hasClass("chosen"))){
   		$("#back3").delay(200).fadeIn(900)
   	}
   	else if(($("#extrollingstand").hasClass("chosen"))){
   		$("#backstart").delay(200).fadeIn(900)
   	}
	else if(($("#deskclamp").hasClass("chosen"))){
   		$("#backstart").delay(200).fadeIn(900)
   	}
   	else{
   		$("#back2").delay(200).fadeIn(900)
   	}
	modelManager.removePrevious();
   }
</script>
<script>
   function backfifth(x){
   	$(".chairoptions").fadeOut(100)
   	$("#back5").fadeOut(100)
	if(!$(".ihidden3").hasClass("chosen"))
		{
		//$(".ihidden2").hide();	
		}
	else
	{
		if($("#fullringbracketmanual").hasClass("chosen") || $("#zeroclearancebracketmanual").hasClass("chosen") || $("#ninetydegreebracket").hasClass("chosen"))
		{
			
		}
		else
		{
			
		}	
	}
			
	
	if($("#fullringbracketmanual").hasClass("chosen") || $("#zeroclearancebracketmanual").hasClass("chosen") || $("#ninetydegreebracket").hasClass("chosen"))
			{
				if($("#directmountpic").hasClass("chosen") || $("#serdirectmountpic").hasClass("chosen") || $("#vertserdirectmountpic").hasClass("chosen"))
				{
					
				}
				else
				{
					if($("#telescopicBlockpic").hasClass("chosen"))
					{
						
					}
					else
					{
						/*if($(".ihidden2:not('.chosen')"))
						{
						}
						else
						{
						$(".ihidden2").show();
						}*/
					}
				}
			}
	
	if($("#fullringbracketmanual").hasClass("chosen") || $("#zeroclearancebracketmanual").hasClass("chosen"))
		{
			if($("#14socketbarpic").hasClass("chosen") || $("#22socketbarpic").hasClass("chosen") || $("#sersocketbar14pic").hasClass("chosen"))
			{
				
			}
			else
			{
				$(".ihidden4").hide();
			}
		}
		
	if($("#powerchair").hasClass("chosen"))
	{
		if(($("#verticalextension8pic").hasClass("chosen"))||($("#verticalextension16pic").hasClass("chosen")))
		{
			if($("#ttrack").hasClass("chosen") && $("#ttrackdirectpic").hasClass("chosen") || $("#doublettrack").hasClass("chosen") && $("#dttrackdirectpic").hasClass("chosen"))
			{
				$(".ihidden3").hide();
			}
		}
		else
		{
			$(".ihidden4").hide();
		}
	}
	
	if($("#powerchair").hasClass("chosen"))
	{
		if($("#roundtube").hasClass("chosen") && $("#directmounthorizontal").hasClass("chosen"))
		{
			$(".ihidden2").hide();
		}
	}
		
   	if(($("#verticalextension8pic").hasClass("chosen"))||($("#verticalextension16pic").hasClass("chosen"))){
		if($("#telescopicBlockpic").hasClass("chosen"))
		{
						
		}
		
		else
		{
			if($("#powerchair").hasClass("chosen"))
			{
				if(($("#verticalextension8pic").hasClass("chosen"))||($("#verticalextension16pic").hasClass("chosen")))
				{
					$(".ihidden4").hide();
				}
				else
				{
					$(".ihidden3").hide();
				}
			}
			
		}
		
   		$("#verticalbar4pic").fadeOut(100).removeClass("chosen")
   		$("#verticalbar6pic").fadeOut(100).removeClass("chosen")	
   		$("#verticalbar12pic").fadeOut(100).removeClass("chosen")
   		$("#verticalbaradjpic").fadeOut(100).removeClass("chosen")	
   		$("#m2").fadeOut(100)
   		$("#m2x").fadeOut(100)
   		$("#m2max").fadeOut(100)
   		$("#articulatingarm").fadeOut(100)		
   		$("#articulatingarmwithriser").fadeOut(100)
   		$("#vertical12inputpar").hide()
   		$("#vertical6inputpar").hide()
   		$("#vertical4inputpar").hide()
   		$("#verticaladjinputpar").hide()
   		$("#verticaltype2").css({"top":"270px"})
   		$("#verticaloptions2").delay(200).fadeIn(200)		
   		$("#vertical4").delay(200).fadeIn(300)	
   		$("#vertical6").delay(200).fadeIn(400)	
   		$("#vertical12").delay(200).fadeIn(500)
   		$("#verticaladj").delay(200).fadeIn(600)
   		$("#back4").delay(200).fadeIn(700)
   	}	
   	else{
		
		if($("#powerchair").hasClass("chosen"))
		{
			
		}
		else
		{
		$(".ihidden").hide()
		}
		if($("#fullringbracketmanual").hasClass("chosen") || $("#zeroclearancebracketmanual").hasClass("chosen"))
		{
			if($("#directmountpic").hasClass("chosen") || $("#serdirectmountpic").hasClass("chosen") || $("#vertserdirectmountpic").hasClass("chosen"))
				{
					if($("#verticalbar4pic").hasClass("chosen") || $("#verticalbar6pic").hasClass("chosen") || $("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen") || $("#verticalbar12pic").hasClass("chosen"))
					{
						
					}
					else
					{
						$(".ihidden2").hide();
					}
				}
				
				/*else
				{
					$(".ihidden2").hide();
				}*/
				
		}
		
		if($("#ninetydegreebracket").hasClass("chosen") && $("#verticalbar4pic").hasClass("chosen") || $("#verticalbar6pic").hasClass("chosen") || $("#verticalbar12pic").hasClass("chosen"))
		{
			if($("#ttrack").hasClass("chosen") || $("#doublettrack").hasClass("chosen"))
			{
			}
			else
			{
			$(".ihidden2").hide();
			}
		}
		
		
   		$("#verticalbar4pic").fadeOut(100).removeClass("chosen")
   		$("#verticalbar6pic").fadeOut(100).removeClass("chosen")
   		$("#verticalbar12pic").fadeOut(100).removeClass("chosen")
   		$("#verticalbaradjpic").fadeOut(100).removeClass("chosen")
   		$("#m2").fadeOut(100)
   		$("#m2x").fadeOut(100)
   		$("#m2max").fadeOut(100)
   		$("#articulatingarm").fadeOut(100)		
   		$("#articulatingarmwithriser").fadeOut(100)
   		$("#vertical12inputpar").hide()
   		$("#vertical6inputpar").hide()
   		$("#vertical4inputpar").hide()
   		$("#verticaladjinputpar").hide()
   		$("#vertical8inputpar").hide()
   		$("#vertical16inputpar").hide()
   		$("#verticaltype").css({"top":"270px"})
   		$("#verticaltype2").css({"top":"270px"})
   		$("#verticaloptions").delay(200).fadeIn(200)	
   		$("#vertical4").delay(200).fadeIn(300)	
   		$("#vertical6").delay(200).fadeIn(400)	
   		$("#vertical12").delay(200).fadeIn(500)
   		$("#verticaladj").delay(200).fadeIn(600)
   		$("#verticalextension16").delay(200).fadeIn(700)
   		$("#verticalextension8").delay(200).fadeIn(800)	
   		
		if(($("#22socketbarpic").hasClass("chosen"))||($("#14socketbarpic").hasClass("chosen"))||($("#22socketbarpicmanual").hasClass("chosen"))||($("#14socketbarpicmanual").hasClass("chosen"))){
   			$("#back3").delay(200).fadeIn(900)
   		}
   		else if($("#extrollingstand").hasClass("chosen")){
   			$("#backstart").delay(200).fadeIn(900)
   		}
		else if($("#deskclamp").hasClass("chosen"))
		{
			$("#backstart").delay(200).fadeIn(900)
		}
   		else{
   			$("#back2").delay(200).fadeIn(900)
   		}
   	}
	modelManager.removePrevious();
   }
</script>
<script>
   function backsixth(x){
   	$(".chairoptions").fadeOut(100)
	
	if($("#deskclamp").hasClass("chosen"))
		{
		if($(".ihidden4").css({'display' : 'block'}))
			{
				//$(".ihidden3").hide();
			}
			$(".ihidden3").hide();
		}
	else
	{
		//if($(".ihidden3").css({'display' : 'block'}))
		//{
		//==$(".ihidden3").hide();
		//}
	}
	
	if($("#powerchair").hasClass("chosen"))
	{
		if($("#m2pic").hasClass("chosen") || $("#m2xpic").hasClass("chosen") || $("#m2maxpic").hasClass("chosen") || $("#articulatingarmpic").hasClass("chosen") || $("#articulatingarmriserpic").hasClass("chosen"))
		{
			
		}
		else
		{
			$(".ihidden4").fadeOut(300)
		}
	}
	else
	{
			$(".ihidden4").fadeOut(300)
			$(".ihidden6").fadeOut(300)
		
	}
	
	//
	if($("#ninetydegreebracket").hasClass("chosen"))
	{
		$(".ihidden3").hide();		
	}
	
	if($("#deskclamp").hasClass("chosen"))
	{
		if($(".ihidden").hasClass("chosen"))
		{
			$(".ihidden").hide()
		}
		if($(".ihidden3").hasClass("chosen"))
		{
			$(".ihidden3").hide()
		}
	}
	if($("#powerchair").hasClass("chosen"))
	{
		if($("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
		{
			
		}
		else
		{
		$(".ihidden3").hide();
		}
	}
	
	if($("#powerchair").hasClass("chosen"))
	{
		if($("#ttrack").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen") || $("#verticalextension16pic").hasClass("chosen"))
		{
			
		}
		else
		{
		$(".ihidden4").hide();
		}
	}
	
	if($("#powerchair").hasClass("chosen") && $("#roundtube").hasClass("chosen") && $("#ninetydegreebracket").hasClass("chosen"))
	{
		if($("#verticalextension16pic").hasClass("chosen") || $("#verticalextension8pic").hasClass("chosen"))
		{
			$(".ihidden4").hide()
		}
	}
	
   	$("#back6").fadeOut(100)
   	$("#m2pic").fadeOut(100).removeClass("chosen")
   	$("#m2xpic").fadeOut(100).removeClass("chosen")
   	$("#m2maxpic").fadeOut(100).removeClass("chosen")
   	$("#articulatingarmpic").fadeOut(100).removeClass("chosen")
   	$("#articulatingarmriserpic").fadeOut(100).removeClass("chosen")
   	$("#articulatinginputpar").hide()
   	$("#articulatingriserinputpar").hide()
   	$("#m2inputpar").hide()
   	$("#m2xinputpar").hide()
   	$("#m2maxinputpar").hide()
	$("#customarminputpar").hide()
	$("#lockablewedgereceiverpic").removeClass("chosen")
	$("#rotarywedgereceiverpic").removeClass("chosen")
	$("#lockableinputpar").hide()
	$("#rotaryinputpar").hide()
   	$("#armtype").css({"top":"300px"})
   	$("#armoptions").delay(200).fadeIn(200)	
   	$("#m2").delay(200).fadeIn(300)
   	$("#m2").delay(200).fadeIn(400)
   	$("#m2x").delay(200).fadeIn(500)
   	$("#m2max").delay(200).fadeIn(600)
   	$("#articulatingarm").delay(200).fadeIn(700)
   	$("#articulatingarmwithriser").delay(200).fadeIn(800)
	$("#loadcustomarm").delay(200).fadeIn(800)
   	$("#back5").delay(200).fadeIn(900)
	modelManager.removePrevious();
   }
   
   
   function backtowedgereceivers()
   {
   	$(".chairoptions").fadeOut(100)
	//$(".ihidden4").fadeOut(300)
	$(".ihidden6").fadeOut(300)
	$(".ihidden5").fadeOut(300)
	/*if($(".ihidden3").css({'display' : 'block'}))
		{
			$(".ihidden3").hide();
		}*/
   	/*$("#m2pic").fadeOut(100).removeClass("chosen")
   	$("#m2xpic").fadeOut(100).removeClass("chosen")
   	$("#m2maxpic").fadeOut(100).removeClass("chosen")
   	$("#articulatingarmpic").fadeOut(100).removeClass("chosen")
   	$("#articulatingarmriserpic").fadeOut(100).removeClass("chosen")*/
   	$("#backwedgereceivers").fadeOut(100)
	$("#armtype").css({"top":"300px"})
	
	if($("#lockablewedgereceiverpic").hasClass("chosen") || $("#rotarywedgereceiverpic").hasClass("chosen"))
	{
   	$("#lockableinputpar").hide()
	$("#rotaryinputpar").hide()
	$("#wedgereceiveroptions").delay(200).fadeIn(200)	
   	$("#lockablewedgereceiver").delay(200).fadeIn(300)
   	$("#rotarywedgereceiver").delay(200).fadeIn(400)
   	$("#back6").delay(200).fadeIn(900)
	}
	else
	{
	if($(".ihidden4").css({'display' : 'block'}))
		{
			$(".ihidden4").hide();
			$(".ihidden").hide();
		}
	$("#articulatinginputpar").hide()
   	$("#articulatingriserinputpar").hide()
   	$("#m2inputpar").hide()
   	$("#m2xinputpar").hide()
   	$("#m2maxinputpar").hide()
	$("#customarminputpar").hide()
	$("#armtype").css({"top":"300px"})
   	$("#armoptions").delay(200).fadeIn(200)	
   	$("#m2").delay(200).fadeIn(300)
   	$("#m2").delay(200).fadeIn(400)
   	$("#m2x").delay(200).fadeIn(500)
   	$("#m2max").delay(200).fadeIn(600)
   	$("#articulatingarm").delay(200).fadeIn(700)
   	$("#articulatingarmwithriser").delay(200).fadeIn(800)
	$("#loadcustomarm").delay(200).fadeIn(800)
   	$("#back5").delay(200).fadeIn(900)
	}
	
	modelManager.removePrevious();
   }

</script>
<script>
   function backseventh(x){
   	$(".chairoptions").fadeOut(100)
	//$(".ihidden5").hide();
	$(".ihidden6").hide();
   	$("#back7").fadeOut(100)
   	//$("#lockablewedgereceiverpic").fadeOut(100).removeClass("chosen")
   	//$("#rotarywedgereceiverpic").fadeOut(100).removeClass("chosen")
   	$("#lockablewedgereceiveripadpic").fadeOut(100)
   	$("#rotarywedgereceiveripadpic").fadeOut(100)
   	$("#lockablewedgereceiverlaptoppic").fadeOut(100)
   	$("#rotarywedgereceiverlaptoppic").fadeOut(100)
   	$("#m2head").fadeOut(100).removeClass("chosen")
   	$("#m2xhead").fadeOut(100).removeClass("chosen")
   	$("#m2maxhead").fadeOut(100).removeClass("chosen")
   	$("#articulatingarmhead").fadeOut(100).removeClass("chosen")
   	$("#articulatingarmriserhead").fadeOut(100).removeClass("chosen")
	$("#tabletpic").fadeOut(100).removeClass("chosen")
   	$("#laptopplatepic").fadeOut(100).removeClass("chosen")
	$("#ipadairplatepic").fadeOut(100).removeClass("chosen")
	$("#ipadaircradlepic").fadeOut(100).removeClass("chosen")
	$("#literacyplatepic").fadeOut(100).removeClass("chosen")
	$("#cupholderpic").fadeOut(100).removeClass("chosen")
	$("#camerapic").fadeOut(100).removeClass("chosen")
   	//$("#lockableinputpar").hide()
	$("#tabletinputpar").hide()
	$("#literacyplateinputpar").hide()
	$("#camerainputpar").hide()
   	//$("#rotaryinputpar").hide()	
	$("#laptopplateinputpar").hide()	
	$("#ipadairplateinputpar").hide()
	$("#ipadaircradleinputpar").hide()
	$("#cupholderinputpar").hide()
   	/*$("#wedgereceivertype").css({"top":"330px"})
   	$("#wedgereceiveroptions").delay(200).fadeIn(200)
   	$("#lockablewedgereceiver").delay(200).fadeIn(300)
   	$("#rotarywedgereceiver").delay(200).fadeIn(400)*/
	$(".inptlist").appendTo("#input")
   	$("#inputparend").delay(200).hide()
   	$(".inptlist").css("text-align","left")
   	$("#inputframe").fadeIn(200)
	$("#mountingplate").delay(200).fadeIn(200)
   	$("#wedgereceiveripad").delay(200).fadeIn(400)
   	$("#wedgereceiverlaptop").delay(200).fadeIn(500)
	$("#wedgereceiverlaptopplate").delay(200).fadeIn(500)
	$("#wedgereceiveripadairplate").delay(200).fadeIn(500)
	$("#wedgereceiveripadaircradle").delay(200).fadeIn(500)
	$("#wedgereceiverliteracyplate").delay(200).fadeIn(500)
	$("#wedgereceivercamera").delay(200).fadeIn(500)
	
	//if(modelManager.checkCustomArmForWedgeMount())
	//{
		//$("#wedgereceivercupholder").hide()
		//$("#wedgereceiverempty").css({"margin-top":"-40px"}).fadeIn(600)
	//}
	//else
	//{
		$("#wedgereceivercupholder").delay(200).fadeIn(500)
		$("#wedgereceiverempty").css({"margin-top":"0px"}).fadeIn(600)
//	}
	
   	
	$("#backwedgereceivers").delay(200).fadeIn(600)
   	//$("#back6").delay(200).fadeIn(500)
	//modelManager.removePrevious();
	modelManager.removePrevious();
   }
</script>
<script>
   function backstart(x){
   	$(".chairoptions").fadeOut(100)
	$(".ihidden1").hide()
	$(".ihidden").hide()
   	$("#backstart").fadeOut(100).removeClass("chosen")
   	$("#restart").fadeOut(100)
   	$("#tellus").fadeOut(100).removeClass("chosen")
   	$("#whichisfound").fadeOut(100).removeClass("chosen")
   	$("#roundtube").fadeOut(100).removeClass("chosen")
   	$("#ttrack").fadeOut(100).removeClass("chosen")
   	$("#squaretube").fadeOut(100).removeClass("chosen")
   	$("#foryour").fadeOut(100).removeClass("chosen")
   	$("#verttube").fadeOut(100).removeClass("chosen")
   	$("#powerchair").fadeOut(300).removeClass("chosen")
   	$("#manualchair").fadeOut(300).removeClass("chosen")
   	$("#directmountpic").fadeOut(100).removeClass("chosen")
   	$("#serdirectmountpic").fadeOut(100).removeClass("chosen")
   	$(".inptlist").hide()
   	$("#bothchairs").fadeIn(200)
   	$("#extrollingstand").fadeOut(100).removeClass("chosen")
   	$("#deskclamp").fadeOut(100).removeClass("chosen")
   	$("#firsttellus").delay(200).fadeIn(200)
   	$("#manual").delay(200).fadeIn(300)
   	$("#power").delay(200).fadeIn(400)
   	$("#stand").delay(200).fadeIn(500)
   	$("#desk").delay(200).fadeIn(600)
   	document.getElementById("tr1b").selectedIndex="0"
   	document.getElementById("tr1c").selectedIndex="0"
   	document.getElementById("tr2b").selectedIndex="0"
   	document.getElementById("tr2c").selectedIndex="0"
   	document.getElementById("tr3b").selectedIndex="0"
   	document.getElementById("tr3c").selectedIndex="0"
   
   	$("#tr1b").fadeIn(0, product1)
   	$("#tr1c").fadeIn(0, qty1)
   	$("#tr2b").fadeIn(0, product2)
   	$("#tr2c").fadeIn(0, qty2)
   	$("#tr3b").fadeIn(0, product3)
   	$("#tr3c").fadeIn(0, qty3)
	
	changeCameraFocus("build-your-system");
   }
</script>
<script>
   function rstrt(x){
   	$(".chairoptions").fadeOut(100)
	$(".ihidden").hide()
	$(".ihidden1").hide();
	$(".ihidden2").hide();
	$(".ihidden3").hide();
	$(".ihidden4").hide();
	$(".ihidden5").hide();
	$(".ihidden6").hide();
	$(".ihidden7").hide();
   	$("#back1").fadeOut(100).removeClass("chosen")
   	$("#back2").fadeOut(100).removeClass("chosen")
   	$("#back3").fadeOut(100).removeClass("chosen")
   	$("#back4").fadeOut(100).removeClass("chosen")
   	$("#back5").fadeOut(100).removeClass("chosen")
   	$("#back6").fadeOut(100).removeClass("chosen")
   	$("#back7").fadeOut(100).removeClass("chosen")
   	$("#back8").fadeOut(100).removeClass("chosen")
   	$("#backstart").fadeOut(100).removeClass("chosen")
	$("#backwedgereceivers").fadeOut(100).removeClass("chosen")
   	$("#restart").fadeOut(100)
   	$("#manualwheel").fadeOut(100)
   
   	$(".inptlist").hide()
   	$(".pics").removeClass("chosen").fadeOut(100, function(){
   		$("#chairpictures").css("transform","scale(1,1)").css({"margin-left":"-590px","margin-top":"0px"});
   	})
   	$("#roundtube").removeClass("chosen")
   	$("#squaretube").removeClass("chosen")
   	$("#verttube").removeClass("chosen")
   	$("#ttrack").removeClass("chosen")
   	$("#doublettrack").removeClass("chosen")
   	$("#verticalextension8pic").removeClass("chosen")
   	$("#verticalextension16pic").removeClass("chosen")
   	$("#verticalbars").css({"margin-top":"0px"})	
   	$("#verticaltype").css({"top":"270px"})
   	$("#verticaltype2").css({"top":"270px"})
   	$("#armtype").css({"top":"300px"})
   	$("#wedgereceivertype").css({"top":"330px"})
   	$("#powerchair").fadeOut(100).removeClass("chosen")
   	$("#manualchair").fadeOut(100).removeClass("chosen")
   	$("#extrollingstand").fadeOut(100).removeClass("chosen")
   	$("#deskclamp").fadeOut(100).removeClass("chosen")
   	$("#compatiblepics").fadeOut(100)
   	$("#lockablewedgereceiverpic").fadeOut(100).removeClass("chosen")
   	$("#rotarywedgereceiverpic").fadeOut(100).removeClass("chosen")
   	$("#lockablewedgereceiveripadpic").fadeOut(100)
   	$("#rotarywedgereceiveripadpic").fadeOut(100)
	$("#wedgereceiveripad").fadeOut(400)
   	$("#wedgereceiverlaptop").fadeOut(400)
	$("#wedgereceiverlaptopplate").fadeOut(400)
	$("#wedgereceiveripadairplate").fadeOut(400)
	$("#wedgereceiveripadaircradle").fadeOut(400)
	$("#wedgereceiverliteracyplate").fadeOut(400)
	$("#wedgereceivercamera").fadeOut(400)
	$("#wedgereceivercupholder").fadeOut(400)
   	$("#wedgereceiverempty").fadeOut(400)
   	$("#walltrackpic").hide().removeClass("chosen")
   	$("#rollingstandpic").hide().removeClass("chosen")
   	$("#tableclamppic").hide().removeClass("chosen")
	$("#verticalbar4pic").hide().removeClass("chosen")
	$("#verticalbar6pic").hide().removeClass("chosen")
	$("#verticalbar12pic").hide().removeClass("chosen")
	$("#verticalextension8pic").hide().removeClass("chosen")
	$("#verticalextension16pic").hide().removeClass("chosen")
	$("#tabletpic").fadeOut(100).removeClass("chosen")
   	$("#laptopplatepic").fadeOut(100).removeClass("chosen")
	$("#ipadairplatepic").fadeOut(100).removeClass("chosen")
	$("#ipadaircradlepic").fadeOut(100).removeClass("chosen")
	$("#literacyplatepic").fadeOut(100).removeClass("chosen")
	$("#cupholderpic").fadeOut(100).removeClass("chosen")
	$("#camerapic").fadeOut(100).removeClass("chosen")
	$("#ninetydegreebracket").fadeOut(100).removeClass("chosen")
	$("#directmounthorizontal").fadeOut(100).removeClass("chosen")
	$("#manualchair").hide().removeClass("chosen")
	$("#directmountpic").hide().removeClass("chosen")
	$("#serdirectmountpic").hide().removeClass("chosen")
	$("#vertserdirectmountpic").hide().removeClass("chosen")
	$("#deskclamp").hide().removeClass("chosen")
   	$("#inputparend").delay(200).hide()
   	$(".glow").show()
   	$(".inptlist").appendTo("#input")
   	$(".inptlist").css("text-align","left")
   	$("#rollingfloorstand").fadeOut(200, function(){
   		$("#rollingstandpic").css({"margin-left":"220px"})
   	})
   	$("#inputframe").fadeIn(200)
   	$("#bothchairs").fadeIn(200)
   	$("#firsttellus").delay(200).fadeIn(200)
   	$("#manual").delay(200).fadeIn(300)
   	$("#power").delay(200).fadeIn(400)
   	$("#stand").delay(200).fadeIn(500)
   	$("#desk").delay(200).fadeIn(600)
	$("#wedgereceivercupholder").hide()
	$("#wedgereceiverempty").css({"margin-top":"0px"})
   	
   
   	if($("#chooselanguage").hasClass("newby")){
   		$("#chooselanguage").delay(300).fadeIn(500)
   		$("#languagebackdrop").delay(100).fadeIn(500)
   		$("#chooselanguagepar").hide()
   		$("#chooselanguagepar2").show()
   		$("#chooselanguage").removeClass("newby")
   	}
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
	
	changeCameraFocus("build-your-system");
   }
</script>
<script>
   $(document).ready(function(){
   	$("#power").click(function startpower(x){
   		$(".chairoptions").fadeOut(100)
   		$("#bothchairs").fadeOut(2000)
   		$("#powerchair").delay(200).fadeIn(2000).addClass("chosen")
   		$("#powerchairinputpar").show()
   		$("#tellus").delay(200).fadeIn(200)
   		$("#whichisfound").delay(200).fadeIn(300)
   		$("#squaretube").delay(200).fadeIn(400)
   		$("#roundtube").delay(200).fadeIn(500)
   		$("#ttrack").delay(200).fadeIn(600)
   		$("#doublettrack").delay(200).fadeIn(700)
   		$("#backstart").delay(200).fadeIn(800)
   		$("#restart").delay(200).fadeIn(800)
   		if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble1").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   		}
   		document.getElementById('vb12').src="powerchair renderings/good renderings/photoshopped/for web/vertical-bar-12-independent-living-wheelchairs.png"
   		document.getElementById('vb4').src="powerchair renderings/good renderings/photoshopped/for web/vertical-bar-4-independent-living-wheelchairs.png"
   		document.getElementById('vb6').src="powerchair renderings/good renderings/photoshopped/for web/vertical-bar-6-independent-living-wheelchairs.png"
   		document.getElementById('vbadj').src="powerchair renderings/good renderings/photoshopped/for web/adjustable-vertical-bar-independent-living-wheelchairs.png"
   		document.getElementById('ve16').src="powerchair renderings/good renderings/photoshopped/for web/vertical-extension-16-independent-living-wheelchairs.png"
   		document.getElementById('ve8').src="powerchair renderings/good renderings/photoshopped/for web/vertical-extension-8-independent-living-wheelchairs.png"
		
		changeCameraFocus("power_chair");
   });
   })
</script>
<script>
   $(document).ready(function(){
   	$("#manual").click(function startmanual(x){
   		$(".chairoptions").fadeOut(100)
   		$("#bothchairs").fadeOut(2000)
   		$("#manualchair").delay(200).fadeIn(2000).addClass("chosen")
   		$("#manualchairinputpar").show()
   		$("#foryour").delay(200).fadeIn(200)
   		$("#verttube").delay(200).fadeIn(300)
   		$("#roundtube").delay(200).fadeIn(400)
   		$("#backstart").delay(200).fadeIn(600)	
   		$("#restart").delay(200).fadeIn(600)
   		if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble1").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   		}
   		document.getElementById('vb12').src="powerchair renderings/good renderings/photoshopped/for web/vertical-bar-12-independent-living-wheelchairs.png"
   		document.getElementById('vb4').src="powerchair renderings/good renderings/photoshopped/for web/vertical-bar-4-independent-living-wheelchairs.png"
   		document.getElementById('vb6').src="powerchair renderings/good renderings/photoshopped/for web/vertical-bar-6-independent-living-wheelchairs.png"
   		document.getElementById('vbadj').src="powerchair renderings/good renderings/photoshopped/for web/adjustable-vertical-bar-independent-living-wheelchairs.png"
   		document.getElementById('ve16').src="powerchair renderings/good renderings/photoshopped/for web/vertical-extension-16-independent-living-wheelchairs.png"
   		document.getElementById('ve8').src="powerchair renderings/good renderings/photoshopped/for web/vertical-extension-8-independent-living-wheelchairs.png"
		
		changeCameraFocus("manual_chair");
   	});
   })
</script>
<script>
   $(document).ready(function(){
   	$("#stand").click(function startstand(x){
   		$(".chairoptions").fadeOut(100)
   		$("#bothchairs").fadeOut(2000)
   		$("#extrollingstand").delay(200).fadeIn(2000).addClass("chosen")
   		$("#rollingstandinputpar").show()
   		$("#verticaloptions").delay(1500).fadeIn(200)
   		$("#vertical4").delay(1500).fadeIn(300)
   		$("#vertical6").delay(1500).fadeIn(400)
   		$("#vertical12").delay(1500).fadeIn(500)
   		$("#verticaladj").delay(1500).fadeIn(600)
   		$("#verticalextension16").delay(1500).fadeIn(700)
   		$("#verticalextension8").delay(1500).fadeIn(800)
   		$("#backstart").delay(200).fadeIn(600)	
   		$("#restart").delay(200).fadeIn(600)
   		if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble1").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   		}
   		document.getElementById('vb12').src="powerchair renderings/good renderings/photoshopped/for web/vertical-bar-12-independent-living-floor-stands.png"
   		document.getElementById('vb4').src="powerchair renderings/good renderings/photoshopped/for web/vertical-bar-4-independent-living-floor-stands.png"
   		document.getElementById('vb6').src="powerchair renderings/good renderings/photoshopped/for web/vertical-bar-6-independent-living-floor-stands.png"
   		document.getElementById('vbadj').src="powerchair renderings/good renderings/photoshopped/for web/adjustable-vertical-bar-independent-living-floor-stands.png"
   		document.getElementById('ve16').src="powerchair renderings/good renderings/photoshopped/for web/vertical-extension-16-independent-living-floor-stands.png"
   		document.getElementById('ve8').src="powerchair renderings/good renderings/photoshopped/for web/vertical-extension-8-independent-living-floor-stands.png"
		
		changeCameraFocus("2021");
   	});
   })
</script>
<script>
   	function startdesk(x){
   		$(".chairoptions").fadeOut(100)
   		$("#bothchairs").fadeOut(2000)
   		$("#deskclamp").delay(200).fadeIn(2000).addClass("chosen")
   		$("#tableclampinputpar").show()
   		$("#verticaloptions").delay(1500).fadeIn(200)
   		$("#vertical4").delay(1500).fadeIn(300)
   		$("#vertical6").delay(1500).fadeIn(400)
   		$("#vertical12").delay(1500).fadeIn(500)
   		$("#verticaladj").delay(1500).fadeIn(600)
   		$("#verticalextension16").delay(1500).fadeIn(700)
   		$("#verticalextension8").delay(1500).fadeIn(800)
   		$("#backstart").delay(200).fadeIn(600)	
   		$("#restart").delay(200).fadeIn(600)
   		if($("#chooselanguage").hasClass("newby")){
   			$("#helpbubble1").delay(1500).fadeIn(300)
   			$("#helpbubblebackground").fadeIn(300)
   		}
   		document.getElementById('vb12').src="powerchair renderings/good renderings/photoshopped/for web/vertical-bar-12-independent-living-floor-stands.png"
   		document.getElementById('vb4').src="powerchair renderings/good renderings/photoshopped/for web/vertical-bar-4-independent-living-floor-stands.png"
   		document.getElementById('vb6').src="powerchair renderings/good renderings/photoshopped/for web/vertical-bar-6-independent-living-floor-stands.png"
   		document.getElementById('vbadj').src="powerchair renderings/good renderings/photoshopped/for web/adjustable-vertical-bar-independent-living-floor-stands.png"
   		document.getElementById('ve16').src="powerchair renderings/good renderings/photoshopped/for web/vertical-extension-16-independent-living-floor-stands.png"
   		document.getElementById('ve8').src="powerchair renderings/good renderings/photoshopped/for web/vertical-extension-8-independent-living-floor-stands.png"
		
    changeCameraFocus("1004");
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
   function directmountsocketref(x){
   	$("#directmountsocketref").show();
   
   }
</script>
<script>
   function directmountsocketrefhide(x){
   	$("#directmountsocketref").hide();
   
   }
</script>
<script>
   function serdirectmountsocketref(x){
   	$("#serdirectmountsocketref").show();
   }
</script>
<script>
   function serdirectmountsocketrefhide(x){
   	$("#serdirectmountsocketref").hide();
   }
</script>
<script>
   function zeroclearanceref(x){
   	$("#zeroclearanceref").show();
   }
</script>
<script>
   function zeroclearancerefhide(x){
   	$("#zeroclearanceref").hide();
   }
</script>
<script>
   function fullringref(x){
   	$("#fullringref").show();
   }
</script>
<script>
   function fullringrefhide(x){
   	$("#fullringref").hide();
   }
</script>
<script>
   function squaretubebracketref(x){
   	$("#squaretubebracketref").show();
   }
</script>
<script>
   function squaretubebracketrefhide(x){
   	$("#squaretubebracketref").hide();
   }
</script>
<script>
   function ttrackref(x){
   	$("#ttrackref").show();
   }
</script>
<script>
   function ttrackrefhide(x){
   	$("#ttrackref").hide();
   }
</script>
<script>
   function dttrackref(x){
   	$("#dttrackref").show();
   }
</script>
<script>
   function dttrackrefhide(x){
   	$("#dttrackref").hide();
   }
</script>
<script>
   function ttrackbracketref(x){
   	$("#ttrackbracketref").show();
   }
</script>
<script>
   function ttrackbracketrefhide(x){
   	$("#ttrackbracketref").hide();
   }
</script>
<script>
   function dttrackbracketref(x){
   	$("#dttrackbracketref").show();
   }
</script>
<script>
   function dttrackbracketrefhide(x){
   	$("#dttrackbracketref").hide();
   }
</script>
<script>
   function ttrackdirectref(x){
   	$("#ttrackdirectref").show();
   }
</script>
<script>
   function ttrackdirectrefhide(x){
   	$("#ttrackdirectref").hide();
   }
</script>
<script>
   function socketbar14ref(x){
   	$("#socketbar14ref").show();
   }
</script>
<script>
   function socketbar14refhide(x){
   	$("#socketbar14ref").hide();
   }
</script>
<script>
   function socketbar22ref(x){
   	$("#socketbar22ref").show();
   }
</script>
<script>
   function socketbar22refhide(x){
   	$("#socketbar22ref").hide();
   }
</script>
<script>
   function vertical4ref(x){
   	$("#vertical4ref").show();
   }
</script>
<script>
   function vertical4refhide(x){
   	$("#vertical4ref").hide();
   }
</script>
<script>
   function vertical6ref(x){
   	$("#vertical6ref").show();
   }
</script>
<script>
   function vertical6refhide(x){
   	$("#vertical6ref").hide();
   }
</script>
<script>
   function vertical12ref(x){
   	$("#vertical12ref").show();
   }
</script>
<script>
   function vertical12refhide(x){
   	$("#vertical12ref").hide();
   }
</script>
<script>
   function verticaladjref(x){
   	$("#verticaladjref").show();
   }
</script>
<script>
   function verticaladjrefhide(x){
   	$("#verticaladjref").hide();
   }
</script>
<script>
   function verticalext8ref(x){
   	$("#verticalext8ref").show();
   }
</script>
<script>
   function verticalext8refhide(x){
   	$("#verticalext8ref").hide();
   
   }
</script>
<script>
   function verticalext16ref(x){
   	$("#verticalext16ref").show();
   }
</script>
<script>
   function verticalext16refhide(x){
   	$("#verticalext16ref").hide();
   }
</script>
<script>
   function m2ref(x){
   	$("#m2ref").show();
   }
</script>
<script>
   function m2refhide(x){
   	$("#m2ref").hide();
   }
</script>
<script>
   function m2xref(x){
   	$("#m2xref").show();
   }
</script>
<script>
   function m2xrefhide(x){
   	$("#m2xref").hide();
   }
</script>
<script>
   function m2maxref(x){
   	$("#m2maxref").show();
   }
</script>
<script>
   function m2maxrefhide(x){
   	$("#m2maxref").hide();
   }
</script>
<script>
   function articulatingarmref(x){
   	$("#articulatingarmref").show();
   }
</script>
<script>
   function articulatingarmrefhide(x){
   	$("#articulatingarmref").hide();
   }
</script>
<script>
   function articulatingarmriserref(x){
   	$("#articulatingarmriserref").show();
   }
</script>
<script>
   function articulatingarmriserrefhide(x){
   	$("#articulatingarmriserref").hide();
   }
</script>
<script>
   function lockablewedgereceiverref(x){
   	$("#lockablewedgereceiverref").show();
   }
</script>
<script>
   function lockablewedgereceiverrefhide(x){
   	$("#lockablewedgereceiverref").hide();
   }
</script>
<script>
   function rotarywedgereceiverref(x){
   	$("#rotarywedgereceiverref").show();
   }
</script>
<script>
   function rotarywedgereceiverrefhide(x){
   	$("#rotarywedgereceiverref").hide();
   }
</script>
<script>
   function rollingstandref(x){
   	$("#rollingstandref").show();
   }
</script>
<script>
   function rollingstandrefhide(x){
   	$("#rollingstandref").hide();
   }
</script>
<script>
   function walltrackref(x){
   	$("#walltrackref").show();
   }
</script>
<script>
   function walltrackrefhide(x){
   	$("#walltrackref").hide();
   }
</script>
<script>
   function tableclampref(x){
   	$("#tableclampref").show();
   }
</script>
<script>
   function tableclamprefhide(x){
   	$("#tableclampref").hide();
   }
</script>
<script>
   function verttubeglow(x){
   	$("#verticaltubeglow").show();
   }
</script>
<script>
   function verttubeglowhide(x){
   	$("#verticaltubeglow").hide();
   }
</script>
<script>
   function rndtubeglow(x){
   	$("#roundtubeglow").show();
   }
</script>
<script>
   function rndtubeglowhide(x){
   	$("#roundtubeglow").hide();
   }
</script>
<script>
   function squtubeglow(x){
   	$("#squaretubeglow").show();
   }
</script>
<script>
   function squtubeglowhide(x){
   	$("#squaretubeglow").hide();
   }
</script>
<script>
   function ttrckglow(x){
   	$("#ttrackglow").show();
   }
</script>
<script>
   function ttrckglowhide(x){
   	$("#ttrackglow").hide();
   }
</script>
<script>
   function dttrckglow(x){
   	$("#dttrackglow").show();
   }
</script>
<script>
   function dttrckglowhide(x){
   	$("#dttrackglow").hide();
   }
</script>
<script>
   function directmountrefchange(x){
   	$("#directmountrb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function directmountrefchangeback(x){
   	$("#directmountrb").attr('src', 'refbar.png');
   }
</script>
<script>
   function serdirectmountrefchange(x){
   	$("#serdirectmountrb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function serdirectmountrefchangeback(x){
   	$("#serdirectmountrb").attr('src', 'refbar.png');
   }
</script>
<script>
   function fullringrefchange(x){
   	$("#fullringrb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function fullringrefchangeback(x){
   	$("#fullringrb").attr('src', 'refbar.png');
   }
</script>
<script>
   function squaretuberefchange(x){
   	$("#squaretuberb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function squaretuberefchangeback(x){
   	$("#squaretuberb").attr('src', 'refbar.png');
   }
</script>
<script>
   function zeroclearancerefchange(x){
   	$("#zeroclearancerb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function zeroclearancerefchangeback(x){
   	$("#zeroclearancerb").attr('src', 'refbar.png');
   }
</script>
<script>
   function ttrackbracketrefchange(x){
   	$("#ttrackbrrb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function ttrackbracketrefchangeback(x){
   	$("#ttrackbrrb").attr('src', 'refbar.png');
   }
</script>
<script>
   function ttrackrefchange(x){
   	$("#ttrackrb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function ttrackrefchangeback(x){
   	$("#ttrackrb").attr('src', 'refbar.png');
   }
</script>
<script>
   function dttrackrefchange(x){
   	$("#dttrackrb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function dttrackrefchangeback(x){
   	$("#dttrackrb").attr('src', 'refbar.png');
   }
</script>
<script>
   function dttrackdirectrefchange(x){
   	$("#dttrackdmrb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function dttrackdirectrefchangeback(x){
   	$("#dttrackdmrb").attr('src', 'refbar.png');
   }
</script>
<script>
   function dttrackbracketrefchange(x){
   	$("#dttrackbrrb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function dttrackbracketrefchangeback(x){
   	$("#dttrackbrrb").attr('src', 'refbar.png');
   }
</script>
<script>
   function ttrackdirectrefchange(x){
   	$("#ttrackdmrb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function ttrackdirectrefchangeback(x){
   	$("#ttrackdmrb").attr('src', 'refbar.png');
   }
</script>
<script>
   function vertical12refchange(x){
   	$("#vertical12rb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function vertical12refchangeback(x){
   	$("#vertical12rb").attr('src', 'refbar.png');
   }
</script>
<script>
   function vertical16refchange(x){
   	$("#vertical16rb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function vertical16refchangeback(x){
   	$("#vertical16rb").attr('src', 'refbar.png');
   }
</script>
<script>
   function vertical4refchange(x){
   	$("#vertical4rb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function vertical4refchangeback(x){
   	$("#vertical4rb").attr('src', 'refbar.png');
   }
</script>
<script>
   function verticaladjrefchange(x){
   	$("#verticaladjrb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function verticaladjrefchangeback(x){
   	$("#verticaladjrb").attr('src', 'refbar.png');
   }
</script>
<script>
   function vertical6refchange(x){
   	$("#vertical6rb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function vertical6refchangeback(x){
   	$("#vertical6rb").attr('src', 'refbar.png');
   }
</script>
<script>
   function vertical8refchange(x){
   	$("#vertical8rb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function vertical8refchangeback(x){
   	$("#vertical8rb").attr('src', 'refbar.png');
   }
</script>
<script>
   function socketbar14refchange(x){
   	$("#14socketbarrb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function socketbar14refchangeback(x){
   	$("#14socketbarrb").attr('src', 'refbar.png');
   }
</script>
<script>
   function socketbar22refchange(x){
   	$("#22socketbarrb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function socketbar22refchangeback(x){
   	$("#22socketbarrb").attr('src', 'refbar.png');
   }
</script>
<script>
   function m2refchange(x){
   	$("#m2rb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function m2refchangeback(x){
   	$("#m2rb").attr('src', 'refbar.png');
   }
</script>
<script>
   function m2xrefchange(x){
   	$("#m2xrb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function m2xrefchangeback(x){
   	$("#m2xrb").attr('src', 'refbar.png');
   }
</script>
<script>
   function m2maxrefchange(x){
   	$("#m2maxrb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function m2maxrefchangeback(x){
   	$("#m2maxrb").attr('src', 'refbar.png');
   }
</script>
<script>
   function articulatingarmrefchange(x){
   	$("#articulatingarmrb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function articulatingarmrefchangeback(x){
   	$("#articulatingarmrb").attr('src', 'refbar.png');
   }
</script>
<script>
   function articulatingarmriserrefchange(x){
   	$("#articulatingarmriserrb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function articulatingarmriserrefchangeback(x){
   	$("#articulatingarmriserrb").attr('src', 'refbar.png');
   }
</script>
<script>
   function lockablerefchange(x){
   	$("#lockablerb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function lockablerefchangeback(x){
   	$("#lockablerb").attr('src', 'refbar.png');
   }
</script>
<script>
   function rotaryrefchange(x){
   	$("#rotaryrb").attr('src', 'REFBAR.gif');	
   }
</script>
<script>
   function rotaryrefchangeback(x){
   	$("#rotaryrb").attr('src', 'refbar.png');
   }
</script>
<script>
   function sclpoptions(x){
   	$(".glow").delay(100).fadeOut(500)	
   	$("#chairpictures").css("transform","scale(0.85)").css("overflow","visible").css({"margin-left":"-800px","margin-top":"25px"});
   	$("#compatible").fadeOut(100)
   	$("#showquote").fadeOut(100)
   	$(".chairoptions").fadeOut(100)
   	$("#inputparend").fadeOut(100)	
   	$("#back7").fadeOut(100)
   	$("#compatiblechoice").delay(200).fadeIn(200)
   	if(!$("#extrollingstand").hasClass("chosen")){
   		$("#rollingstandopt").delay(200).fadeIn(300)
   
   	}
   	if(!$("#deskclamp").hasClass("chosen")){
   		$("#tableclampopt").delay(200).fadeIn(300)
   
   	}
   
   	$("#walltrackopt").delay(200).fadeIn(400)
   
   	$("#back8").delay(200).fadeIn(500)
   
   }
</script>
<script>
   function sclp(x){
   	$(".chairoptions").fadeOut(100)
   	if($("#rollingstandpic").hasClass("chosen")){
   		$("#rollingstandpic").show()
   		$("#compatiblepics").delay(500).fadeIn(1000)		
   		$("#barsandarms").delay(1000).fadeOut(500, function(){
   			$("#barsandarms").css({"margin-left":"-246px","margin-top":"-170px"})
   		})	
   
   	}
   	if($("#walltrackpic").hasClass("chosen")){
   		$("#walltrackpic").show()
   		$("#compatiblepics").delay(500).fadeIn(1000)			
   		$("#barsandarms").delay(1000).fadeOut(500, function(){
   			$("#barsandarms").css({"margin-left":"-282px","margin-top":"-120px"})
   		})
   
   	}
   	if($("#tableclamppic").hasClass("chosen")){
   		$("#tableclamppic").show()
   		$("#compatiblepics").delay(500).fadeIn(1000)
   		$("#barsandarms").delay(1000).fadeOut(500, function(){
   			$("#barsandarms").css({"margin-left":"-70.5px","margin-top":"-237px"})
   		})
   	}
   	
   	$("#barsandarms").delay(500).fadeIn(500)
   
   
   	$("#complete").delay(200).fadeIn(200)
   	$("#inputparend").delay(200).fadeIn(300)
   }
</script>
<script>
   function backeighth(x){
   	$("#back8").fadeOut(100)
   	$("#barsandarms").fadeOut(200, function(){
   		
   	if($("#fullringbracket").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-587px", "margin-top":"-2px"})}
   	else if($("#zeroclearancebracket").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-595px", "margin-top":"2.25px"})}
   
   	else if($("#squaretubebracketpic").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-595px", "margin-top":"-16px"})}
   
   	else if($("#dttrackbracket1").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-586.5px", "margin-top":"-16px"})}
   		
   	else if($("#ttrackbracket1").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-582.5px", "margin-top":"2px"})}
   		
   	else if($("#directmountpic").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-616.5px", "margin-top":"21.5px"})}
   		
   	else if($("#serdirectmountpic").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-604px", "margin-top":"25.25px"})}
   		
   	else if($("#dttrackdirectpic").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-567.5px", "margin-top":"-31px"})}
   		
   	else if($("#ttrackdirectpic").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-566px", "margin-top":"-12px"})}	
   		
   	else if($("#extrollingstand").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-623.5px", "margin-top":"-38.5px"})}
   	else if($("#deskclamp").hasClass("chosen")){
   		$("#barsandarms").css({"margin-left":"-525.5px", "margin-top":"-42px"})}
   	
   	$("#barsandarms").delay(200).fadeIn(500)
   	$(".glow").delay(1300).fadeIn(1000)
   	
   	})
   	
   	$("#rollingstandpic").removeClass("chosen").fadeOut(200)
   	$("#walltrackpic").removeClass("chosen").fadeOut(200)
   	$("#tableclamppic").removeClass("chosen").fadeOut(200)
   	$("#compatiblechoice").fadeOut(100)
   	$("#rollingstandopt").delay(100).hide()
   	$("#walltrackopt").delay(100).hide()
   	$("#compatiblepics").fadeOut(100)
   	$("#tableclampopt").delay(100).hide()
   
   	$("#chairpictures").delay(500).show(1, function(){
   		$("#chairpictures").css("transform","scale(1,1)").css({"margin-left":"-590px","margin-top":"0px"});
   	})
   
   	$("#rollingstand").fadeOut(100).removeClass("chosen")
   	$("#compatible").delay(200).fadeIn(200)
   	$("#showquote").delay(200).fadeIn(200)
   	$("#complete").delay(200).fadeIn(300)
   	$("#inputparend").delay(200).fadeIn(400)
   	$("#back7").delay(200).fadeIn(500)
   }
</script>
<script>
   function english(){
   	$("#languagebackdrop").hide()
   	$("#chooselanguage").hide()
   	$("#chooselanguage").addClass("newby")
   	$("#helpbubble2").delay(200).fadeIn(300)
   	$("#helpbubblebackground").delay(300).fadeIn(300)
   }
   function french(){
   	$("#languagebackdrop").hide()
   	$("#chooselanguage").hide()
   	$("#chooselanguage").removeClass("newby")
	$("#loadinggif").fadeIn(300)
	$("#loadinggif").fadeOut(2000)
   }
   function ok(){
   	$(".helpbubble").fadeOut(300)
   	$("#helpbubblebackground").fadeOut(300)
   }
</script>
<meta name="description" content="Create your own custom wheelchair mounting system. Pick from a range of mounting brackets or direct mount sockets and build for what suits you best." />
<script>
   function directmountsocketquote(x){
     $("#tr2b").val("Direct Mount Socket")
     $("#tr2c").val("1")
     $("#tr3b").val("")
     $("#tr3c").val("0")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   function serdirectmountsocketquote(x){
     $("#tr2b").val("Serrated Direct Mount Socket")
     $("#tr2c").val("1")
     $("#tr3b").val("")
     $("#tr3c").val("0")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   function verserdirectmountsocketquote(x){
     $("#tr2b").val("Vertical Serrated Direct Mount Socket")
     $("#tr2c").val("1")
     $("#tr3b").val("")
     $("#tr3c").val("0")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   function fullringquote(x){
     $("#tr2b").val("Full Ring Brackets")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   function zeroclearancequote(x){
     $("#tr2b").val("Zero Clearance Brackets")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   function ninetydegreebracketquote(x){
     $("#tr2b").val("90 Degree Bracket")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   function directmounthorizontalquote()
   {
	 $("#tr2b").val("Direct Mount Socket for Horizontal Tube")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2) 
   }
   function squaretubequote(x){
     $("#tr2b").val("Square Tube Brackets")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   function ttrackbracketsquote(x){
     $("#tr2b").val("T-Track Brackets")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   function ttrackdirectmountsocketquote(x){
     $("#tr2b").val("T-Track Direct Mount Socket")
     $("#tr2c").val("1")
     $("#tr3b").val("")
     $("#tr3c").val("0")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   function dttrackdirectmountsocketquote(x){
     $("#tr2b").val("Double T-Track Direct Mount Socket")
     $("#tr2c").val("1")
     $("#tr3b").val("")
     $("#tr3c").val("0")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   function dttrackbracketsquote(x){
     $("#tr2b").val("Double T-Track Brackets")
     $("#tr2c").val("1")
     $("#tr2b").fadeIn(0, product2)
     $("#tr2c").fadeIn(0, qty2)
   }
   function socketbar14quote(x){
     $("#tr3b").val("14 Inch Socket Bar")
     $("#tr3c").val("1")
     $("#tr3b").fadeIn(0, product3)
     $("#tr3c").fadeIn(0, qty3)
   }
   function socketbar22quote(x){
     $("#tr3b").val("22 Inch Socket Bar")
     $("#tr3c").val("1")
     $("#tr3b").fadeIn(0, product3)
     $("#tr3c").fadeIn(0, qty3)
   }
   function sersocketbar14quote(x){
     $("#tr3b").val("Serrated Socket Bar 14 Inch")
     $("#tr3c").val("1")
     $("#tr3b").fadeIn(0, product3)
     $("#tr3c").fadeIn(0, qty3)
   }
   function telescopicBlockQuote(x){
     $("#tr3b").val("Telescopic Block")
     $("#tr3c").val("1")
     $("#tr3b").fadeIn(0, product3)
     $("#tr3c").fadeIn(0, qty3)
   }
   function vertical4quote(x){
     $("#tr5b").val("4 Inch Vertical Bar")
     $("#tr5c").val("1")
     $("#tr5b").fadeIn(0, product5)
     $("#tr5c").fadeIn(0, qty5)
   }
   function vertical6quote(x){
     $("#tr5b").val("6 Inch Vertical Bar")
     $("#tr5c").val("1")
     $("#tr5b").fadeIn(0, product5)
     $("#tr5c").fadeIn(0, qty5)
   }
   function vertical12quote(x){
     $("#tr5b").val("12 Inch Vertical Bar")
     $("#tr5c").val("1")
     $("#tr5b").fadeIn(0, product5)
     $("#tr5c").fadeIn(0, qty5)
   }
   function verticaladjquote(x){
     $("#tr5b").val("Adjustable Vertical Bar")
     $("#tr5c").val("1")
     $("#tr5b").fadeIn(0, product5)
     $("#tr5c").fadeIn(0, qty5)
   }
   function vertical8quote(x){
     $("#tr4b").val("8 Inch Vertical Extension Bar")
     $("#tr4c").val("1")
     $("#tr4b").fadeIn(0, product4)
     $("#tr4c").fadeIn(0, qty4)
   }
   function vertical16quote(x){
     $("#tr4b").val("16 Inch Vertical Extension Bar")
     $("#tr4c").val("1")
     $("#tr4b").fadeIn(0, product4)
     $("#tr4c").fadeIn(0, qty4)
   }
   function m2quote(x){
     $("#tr6b").val("M2 Arm")
     $("#tr6c").val("1")
     $("#tr6b").fadeIn(0, product6)
     $("#tr6c").fadeIn(0, qty6)
   }
   function m2xquote(x){
     $("#tr6b").val("M2X Arm")
     $("#tr6c").val("1")
     $("#tr6b").fadeIn(0, product6)
     $("#tr6c").fadeIn(0, qty6)
   }
   function m2maxquote(x){
     $("#tr6b").val("M2 Max Arm")
     $("#tr6c").val("1")
     $("#tr6c").fadeIn(0, product6)
     $("#tr6c").fadeIn(0, qty6)
   }
   function articulatingquote(x){
     $("#tr6b").val("Articulating Arm")
     $("#tr6c").val("1")
     $("#tr6b").fadeIn(0, product6)
     $("#tr6c").fadeIn(0, qty6)
   }
   function articulatingarmriserquote(x){
     $("#tr6b").val("Articulating Arm with Riser")
     $("#tr6c").val("1")
     $("#tr6b").fadeIn(0, product6)
     $("#tr6c").fadeIn(0, qty6)
   }
   function headtailquote(x){
     $("#tr6b").val("Head and Tail Arm")
     $("#tr6c").val("1")
     $("#tr6b").fadeIn(0, product6)
     $("#tr6c").fadeIn(0, qty6)
   }
   function headtailriserquote(x){
     $("#tr6b").val("Head and Tail Arm with Riser")
     $("#tr6c").val("1")
     $("#tr6b").fadeIn(0, product6)
     $("#tr6c").fadeIn(0, qty6)
   }
   function lockablequote(x){
     $("#tr7b").val("Lockable Wedge Receiver")
     $("#tr7c").val("1")
     $("#tr7b").fadeIn(0, product7)
     $("#tr7c").fadeIn(0, qty7)
   }
   function rotaryquote(x){
     $("#tr7b").val("Rotary Wedge Receiver")
     $("#tr7c").val("1")
     $("#tr7b").fadeIn(0, product7)
     $("#tr7c").fadeIn(0, qty7)
   }
   function floorstandquote(x){
     $("#tr1b").val("Rolling Floor Stand")
     $("#tr1c").val("1")
     $("#tr1b").fadeIn(0, product1)
     $("#tr1c").fadeIn(0, qty1)
   }
   function floorstandextquote(x){
     $("#tr1b").val("Rolling Floor Stand with Extended Legs")
     $("#tr1c").val("1")
     $("#tr1b").fadeIn(0, product1)
     $("#tr1c").fadeIn(0, qty1)
   }
   function tableclampquote(x){
     $("#tr1b").val("Table Clamp")
     $("#tr1c").val("1")
     $("#tr1b").fadeIn(0, product1)
     $("#tr1c").fadeIn(0, qty1)
   }
   function tablemountquote(x){
     $("#tr1b").val("Table Mount")
     $("#tr1c").val("1")
     $("#tr1b").fadeIn(0, product1)
     $("#tr1c").fadeIn(0, qty1)
   }
   function walltrackquote(x){
     $("#tr1b").val("Wall Track")
     $("#tr1c").val("1")
     $("#tr1b").fadeIn(0, product1)
     $("#tr1c").fadeIn(0, qty1)
   }
   //			$("#tr1").val("7106")
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
<script>

function fourinchtotableclampvideo()
{
	if($("#deskclamp").hasClass("chosen"))
	{
		$("#fourinchtotableclamp").fadeIn(300)
	}
}

function verticalbarstostandvideo()
{
	if($("#extrollingstand").hasClass("chosen"))
	{
		$("#verticalbarstostand").fadeIn(300)
	}
}

function extensionbarstostandvideo()
{
	if($("#extrollingstand").hasClass("chosen"))
	{
		$("#extensionbarstostand").fadeIn(300)
	}
}

function directsockettomanualchairvideo()
{
	if($("#manualchair").hasClass("chosen"))
	{
		$("#directsockettomanualchair").fadeIn(300)
	}	
}

function directsockettoninetydegreebracketvideo()
{
	if($("#ninetydegreebracket").hasClass("chosen"))
	{
		$("#directsockettoninetydegreebracket").fadeIn(300)
	}
}

function serdirectsockettoninetydegreebracketvideo()
{
	if($("#ninetydegreebracket").hasClass("chosen"))
	{
		$("#serdirectsockettoninetydegreebracket").fadeIn(300)
	}
}

function vertserdirectsockettoninetydegreebracketvideo()
{
	if($("#ninetydegreebracket").hasClass("chosen") && $("#vertserdirectmountpic").hasClass("chosen"))
	{
		$("#vertserdirectsockettoninetydegreebracket").fadeIn(300)
	}
}

function sersockettomanualchairvideo()
{
	if($("#manualchair").hasClass("chosen"))
	{
		$("#sersockettomanualchair").fadeIn(300)
	}
}

function fullringtomanualchairvideo()
{
	if($("#manualchair").hasClass("chosen") && $("#fullringbracketmanual").hasClass("chosen"))
	{
		$("#fullringtomanualchair").fadeIn(300)
	}
	else if($("#powerchair").hasClass("chosen") && $("#fullringbracketmanual").hasClass("chosen"))
	{
		$("#fullringtomanualchair").fadeIn(300)
	}
}

function zeroclearancetomanualchairvideo()
{
	if($("#manualchair").hasClass("chosen") && $("#zeroclearancebracketmanual").hasClass("chosen"))
	{
		$("#zeroclearancetomanualchair").fadeIn(300)
	}
	else if($("#powerchair").hasClass("chosen") && $("#zeroclearancebracketmanual").hasClass("chosen"))
	{
		$("#zeroclearancetomanualchair").fadeIn(300)
	}
}

function ninetydegreebrackettomanualchairvideo()
{
	if($("#manualchair").hasClass("chosen") && $("#ninetydegreebracket").hasClass("chosen"))
	{
		$("#ninetydegreebrackettomanualchair").fadeIn(300)
	}
	
	else if($("#powerchair").hasClass("chosen") && $("#ninetydegreebracket").hasClass("chosen"))
	{
		$("#ninetydegreebrackettomanualchair").fadeIn(300)
	}
}

function directmounthorizontaltomanualchairvideo()
{
	if($("#manualchair").hasClass("chosen") && $("#directmounthorizontal").hasClass("chosen"))
	{
		$("#directmounthorizontaltomanualchair").fadeIn(300)
	}
	else if($("#powerchair").hasClass("chosen") && $("#directmounthorizontal").hasClass("chosen"))
	{
		$("#directmounthorizontaltomanualchair").fadeIn(300)
	}
}

function ttrackbrackettottrackvideo()
{
	if($("#powerchair").hasClass("chosen") && $("#ttrack").hasClass("chosen"))
	{
		$("#ttrackbrackettottrack").fadeIn(300)
	}
}

function dttrackbrackettodttrackvideo()
{
	if($("#powerchair").hasClass("chosen") && $("#doublettrack").hasClass("chosen"))
	{
		$("#dttrackbrackettodttrack").fadeIn(300)
	}
}

function ttrackdirecttodttrackvideo()
{
	if($("#powerchair").hasClass("chosen") && $("#doublettrack").hasClass("chosen"))
	{
		$("#ttrackdirecttodttrack").fadeIn(300)
	}
}

function ttrackdirecttottrackvideo()
{
	if($("#powerchair").hasClass("chosen") && $("#ttrack").hasClass("chosen"))
	{
		$("#ttrackdirecttottrack").fadeIn(300)
	}
}

function socketbarstofullringvideo()
{
	if($("#fullringbracketmanual").hasClass("chosen") && $("#14socketbarpic").hasClass("chosen"))
	{
		$("#socketbarstofullring").fadeIn(300)
	}
	else if($("#fullringbracketmanual").hasClass("chosen") && $("#22socketbarpic").hasClass("chosen"))
	{
		$("#socketbarstofullring").fadeIn(300)
	}
	else if($("#fullringbracketmanual").hasClass("chosen") && $("#sersocketbar14pic").hasClass("chosen"))
	{
		$("#socketbarstofullring").fadeIn(300)
	}
	else if($("#fullringbracketmanual").hasClass("chosen") && $("#telescopicBlockpic").hasClass("chosen"))
	{
		$("#telescopictofullring").fadeIn(300)
	}	
}

function socketbarstosquaretubevideo()
{
	if($("#14socketbarpic").hasClass("chosen"))
	{
		$("#socketbarstosquaretube").fadeIn(300)
	}
	else if($("#22socketbarpic").hasClass("chosen"))
	{
		$("#socketbarstosquaretube").fadeIn(300)
	}
	else if($("#sersocketbar14pic").hasClass("chosen"))
	{
		$("#socketbarstosquaretube").fadeIn(300)
	}
}


function socketbarstottrackbracketvideo()
{
	if($("#14socketbarpic").hasClass("chosen"))
	{
		$("#socketbarstottrackbracket").fadeIn(300)
	}
	else if($("#22socketbarpic").hasClass("chosen"))
	{
		$("#socketbarstottrackbracket").fadeIn(300)
	}
	else if($("#sersocketbar14pic").hasClass("chosen"))
	{
		$("#socketbarstottrackbracket").fadeIn(300)
	}
}


function socketbarstodttrackbracketvideo()
{
	if($("#14socketbarpic").hasClass("chosen"))
	{
		$("#socketbarstodttrackbracket").fadeIn(300)
	}
	else if($("#22socketbarpic").hasClass("chosen"))
	{
		$("#socketbarstodttrackbracket").fadeIn(300)
	}
	else if($("#sersocketbar14pic").hasClass("chosen"))
	{
		$("#socketbarstodttrackbracket").fadeIn(300)
	}
}


function socketbarstozeroclearancevideo()
{
	if($("#zeroclearancebracketmanual").hasClass("chosen") && $("#14socketbarpic").hasClass("chosen"))
	{
		$("#socketbarstozeroclearance").fadeIn(300)
	}
	else if($("#zeroclearancebracketmanual").hasClass("chosen") && $("#22socketbarpic").hasClass("chosen"))
	{
		$("#socketbarstozeroclearance").fadeIn(300)
	}
	else if($("#zeroclearancebracketmanual").hasClass("chosen") && $("#sersocketbar14pic").hasClass("chosen"))
	{
		$("#socketbarstozeroclearance").fadeIn(300)
	}
	else if($("#zeroclearancebracketmanual").hasClass("chosen") && $("#telescopicBlockpic").hasClass("chosen"))
	{
		$("#telescopictozeroclearance").fadeIn(300)
	}	
}

function socketbarstotelescopicblockvideo()
{
    if($("#telescopicBlockpic").hasClass("chosen") && $("#14socketbarpic").hasClass("chosen"))
	{
		$("#socketbarstotelescopicblock").fadeIn(300)
	}
	else if($("#telescopicBlockpic").hasClass("chosen") && $("#22socketbarpic").hasClass("chosen"))
	{
		$("#socketbarstotelescopicblock").fadeIn(300)
	}
	else if($("#telescopicBlockpic").hasClass("chosen") && $("#sersocketbar14pic").hasClass("chosen"))
	{
		$("#sersocketbarstotelescopicblock").fadeIn(300)
	}
}

function vertsersockettomanualchairvideo()
{
	if($("#manualchair").hasClass("chosen"))
	{
		$("#sersockettomanualchair").fadeIn(300)
	}
}

function fourinchtodirectmountvideo()
{
	if($("#directmountpic").hasClass("chosen"))
	{
		$("#fourinchtodirectmount").fadeIn(300)
	}
}

function fourinchtoserdirectmount()
{
	if($("#serdirectmountpic").hasClass("chosen"))
	{
		$("#fourinchtoserdirectmount").fadeIn(300)
	}
}

function fourinchtovertserdirectmount()
{
	if($("#vertserdirectmountpic").hasClass("chosen"))
	{
		$("#fourinchtovertserdirectmount").fadeIn(300)
	}
}

function verticalbarstodirectmounthorizontalvideo()
{
	if($("#directmounthorizontal").hasClass("chosen"))
	{
		$("#verticalbarstodirectmounthorizontal").fadeIn(300)
	}
}

function extensionbarstodirectmounthorizontalvideo()
{
	if($("#directmounthorizontal").hasClass("chosen"))
	{
		$("#extensionbarstodirectmounthorizontal").fadeIn(300)
	}
}

function sixinchtodirectmountvideo()
{
	if($("#directmountpic").hasClass("chosen"))
	{
		$("#sixinchtodirectmount").fadeIn(300)
	}
}

function sixinchtoserdirectmountvideo()
{
	if($("#serdirectmountpic").hasClass("chosen"))
	{
		$("#fourinchtoserdirectmount").fadeIn(300)
	}
}

function sixinchtovertserdirectmountvideo()
{
	if($("#vertserdirectmountpic").hasClass("chosen"))
	{
		$("#fourinchtovertserdirectmount").fadeIn(300)
	}
}
function twelveinchtodirectmountvideo()
{
	if($("#directmountpic").hasClass("chosen"))
	{
		$("#twelveinchtodirectmount").fadeIn(300)
	}
}

function twelveinchtoserdirectmountvideo()
{
	if($("#serdirectmountpic").hasClass("chosen"))
	{
		$("#fourinchtoserdirectmount").fadeIn(300)
	}
}

function twelveinchtovertserdirectmountvideo()
{
	if($("#vertserdirectmountpic").hasClass("chosen"))
	{
		$("#fourinchtovertserdirectmount").fadeIn(300)
	}
}

function eightinchtodirectmountvideo()
{
	if($("#directmountpic").hasClass("chosen"))
	{
		$("#eightinchtodirectmount").fadeIn(300)
	}
}

function extensionbarstotableclampvideo()
{
	if($("#deskclamp").hasClass("chosen"))
	{
		$("#extensionbarstotableclamp").fadeIn(300)
	}
}

function eightinchtoserdirectmountvideo()
{
	if($("#serdirectmountpic").hasClass("chosen"))
	{
		$("#eightinchtoserdirectmount").fadeIn(300)
	}
}

function eightinchtovertserdirectmountvideo()
{
	if($("#vertserdirectmountpic").hasClass("chosen"))
	{
		$("#eightinchtovertserdirectmount").fadeIn(300)
	}
}


function sixteeninchtodirectmountvideo()
{
	if($("#directmountpic").hasClass("chosen"))
	{
		$("#sixteeninchtodirectmount").fadeIn(300)
	}
}

function sixteeninchtoserdirectmountvideo()
{
	if($("#serdirectmountpic").hasClass("chosen"))
	{
		$("#eightinchtoserdirectmount").fadeIn(300)
	}
}

function sixteeninchtovertserdirectmountvideo()
{
	if($("#vertserdirectmountpic").hasClass("chosen"))
	{
		$("#eightinchtoserdirectmount").fadeIn(300)
	}
}

function fourinchtoeightinchvideo()
{
	if($("#verticalextension8pic").hasClass("chosen"))
	{
		$("#fourinchtoeightinch").fadeIn(300)
	}
}

function sixinchtoeightinchvideo()
{
	if($("#verticalextension8pic").hasClass("chosen"))
	{
		$("#sixinchtoeightinch").fadeIn(300)
	}
}

function twelveinchtoeightinchvideo()
{
	if($("#verticalextension8pic").hasClass("chosen"))
	{
		$("#twelveinchtoeightinch").fadeIn(300)
	}
}

function fourinchtosixteeninchvideo()
{
	if($("#verticalextension16pic").hasClass("chosen"))
	{
		$("#fourinchtosixteeninch").fadeIn(300)
	}
}

function fourinchtosixteeninchviasocketbarsvideo()
{
	if($("#verticalextension16pic").hasClass("chosen"))
	{
		$("#fourinchtosixteeninch").fadeIn(300)
	}
}

function fourinchtoeightinchviasocketbarsvideo()
{
	if($("#verticalextension8pic").hasClass("chosen"))
	{
		$("#fourinchtoeightinch").fadeIn(300)
	}
}

function sixinchtoeightinchviasocketbarsvideo()
{
	if($("#verticalextension8pic").hasClass("chosen"))
	{
		$("#sixinchtoeightinch").fadeIn(300)
	}
}

function twelveinchtoeightinchviasocketbarsvideo()
{
	if($("#verticalextension8pic").hasClass("chosen"))
	{
		$("#twelveinchtoeightinch").fadeIn(300)
	}
}

function sixinchtosixteeninchviasocketbarsvideo()
{
	if($("#verticalextension16pic").hasClass("chosen"))
	{
		$("#sixinchtosixteeninch").fadeIn(300)
	}
}

function twelveinchtosixteeninchviasocketbarsvideo()
{
	if($("#verticalextension16pic").hasClass("chosen"))
	{
		$("#twelveinchtosixteeninch").fadeIn(300)
	}
}

function fourinchtosocketbarsvideo()
{
	if($("#14socketbarpic").hasClass("chosen"))
	{
		$("#fourinchtosocketbars").fadeIn(300)
	}
	else if($("#22socketbarpic").hasClass("chosen"))
	{
		$("#fourinchtosocketbars").fadeIn(300)
	}
	else if($("#sersocketbar14pic").hasClass("chosen"))
	{
		$("#fourinchtosersocketbar").fadeIn(300)
	}
}

function verticalbarstottrackdirectvideo()
{
	if($("#dttrackdirectpic").hasClass("chosen") || $("#ttrackdirectpic").hasClass("chosen") && $("#verticalbar4pic").hasClass("chosen"))
	{
		$("#verticalbarstottrackdirect").fadeIn(300)
	}
	else if($("#dttrackdirectpic").hasClass("chosen") || $("#ttrackdirectpic").hasClass("chosen") && $("#verticalbar6pic").hasClass("chosen"))
	{
		$("#verticalbarstottrackdirect").fadeIn(300)
	}
	else if($("#dttrackdirectpic").hasClass("chosen") || $("#ttrackdirectpic").hasClass("chosen") && $("#verticalbar12pic").hasClass("chosen"))
	{
		$("#verticalbarstottrackdirect").fadeIn(300)
	}
}

function extensionbarstottrackdirectvideo()
{
	if($("#dttrackdirectpic").hasClass("chosen") || $("#ttrackdirectpic").hasClass("chosen") && $("#verticalextension8pic").hasClass("chosen"))
	{
		$("#extensionbarstottrackdirect").fadeIn(300)
	}
	else if($("#dttrackdirectpic").hasClass("chosen") || $("#ttrackdirectpic").hasClass("chosen") && $("#verticalextension16pic").hasClass("chosen"))
	{
		$("#extensionbarstottrackdirect").fadeIn(300)
	}
}

function extensionbarstosocketbarsvideo()
{
	if($("#14socketbarpic").hasClass("chosen"))
	{
		$("#extensionbarstosocketbars").fadeIn(300)
	}
	if($("#22socketbarpic").hasClass("chosen"))
	{
		$("#extensionbarstosocketbars").fadeIn(300)
	}
	if($("#sersocketbar14pic").hasClass("chosen"))
	{
		$("#extensionbarstosersocketbar14").fadeIn(300)
	}
}

function sixinchtosocketbarsvideo()
{
	if($("#14socketbarpic").hasClass("chosen"))
	{
		$("#fourinchtosocketbars").fadeIn(300)
	}
	else if($("#22socketbarpic").hasClass("chosen"))
	{
		$("#fourinchtosocketbars").fadeIn(300)
	}
	else if($("#sersocketbar14pic").hasClass("chosen"))
	{
		$("#fourinchtosersocketbar").fadeIn(300)
	}
}

function twelveinchtosocketbarsvideo()
{
	if($("#14socketbarpic").hasClass("chosen"))
	{
		$("#fourinchtosocketbars").fadeIn(300)
	}
	else if($("#22socketbarpic").hasClass("chosen"))
	{
		$("#fourinchtosocketbars").fadeIn(300)
	}
	else if($("#sersocketbar14pic").hasClass("chosen"))
	{
		$("#fourinchtosersocketbar").fadeIn(300)
	}
}

function sixinchtosixteeninchvideo()
{
	if($("#verticalextension16pic").hasClass("chosen"))
	{
		$("#sixinchtosixteeninch").fadeIn(300)
	}
}

function twelveinchtosixteeninchvideo()
{
	if($("#verticalextension16pic").hasClass("chosen"))
	{
		$("#twelveinchtosixteeninch").fadeIn(300)
	}
}

</script>
<div class="everythingelse">
   <div id="frame" class="frame" style="left:50%; height:740px; width:1200px; z-index:-5;"><img id="framepic" style="height:746px; margin-top:-6px; margin-left:3px;" src="powerchair renderings/slider-frame.png" /></div>
   <div id="overall" style="height:715px; width:1180px; left:50%; margin-left:-577px; position:absolute; overflow:hidden;">
      <div id="loadinggif" style="top:300px; left:50%; margin-left:-150px; position:absolute;"><img src="loading2.gif" /></div>
      <div id="backgropdiv" style="left: 50%; margin-left: -590px; position: absolute; width: 1180px; height:715px; z-index:1; overflow: hidden;">
         <img id="backdrop" style="position:absolute; height:800px; left:50%; margin-left:-590px; margin-top:-85px;" src="blockbuttons.png" />
      </div>
      <div class="powerchair" id="chairpics" style="left: 50%; margin-left: -590px; position: absolute; width: 1180px; height:715px; z-index:-1; overflow: hidden;">
         <!--<img id="bothchairs" style="position:absolute; display:none; height:800px; left:50%; margin-left:-940px; top:-85px;" src="powerchair renderings/good renderings/both-chairs-independent-living-wheelchairs.png" />-->
      </div>
      <div class="options" id="options" style="height:690px; width:250px; left:50%; margin-left:315px; position:absolute; top:11px; background-color:#E9E9E9;">
         <div class="arrows" style="height:45px; width:130px; position: relative; top:620px; left:50%; margin-left:-65px; opacity:0.5;">
            <div class="forwardback" id="next" style="display:none; position:absolute; right:0px; height:45px; cursor:pointer;"><img style="height:45px; opacity:0.5;  filter:alpha(opacity=50);" src="navigation arrow.png" /></div>
            <div onclick="backfirst(this)" class="forwardback backicon" id="back1"><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation arrow3.png" /></div>
            <div onclick="backsecond(this)" class="forwardback backicon" id="back2"><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation arrow3.png" /></div>
            <div onclick="backthird(this)" class="forwardback backicon" id="back3"><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation arrow3.png" /></div>
            <div onclick="backforth(this)" class="forwardback backicon" id="back4"><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation arrow3.png" /></div>
            <div onclick="backfifth(this)" class="forwardback backicon" id="back5"><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation arrow3.png" /></div>
            <div onclick="backsixth(this)" class="forwardback backicon" id="back6"><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation arrow3.png" /></div>
			<div onclick="backtowedgereceivers(this)" class="forwardback backicon" id="backwedgereceivers"><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation arrow3.png" /></div>
            <div onclick="backseventh(this)" class="forwardback backicon" id="back7"><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation arrow3.png" /></div>
            <div onclick="backeighth(this)" class="forwardback backicon" id="back8"><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation arrow3.png" /></div>
            <div onclick="backstart(this)" class="forwardback backicon" id="backstart"><img style="height:45px; opacity:1.0;  filter:alpha(opacity=100);" src="navigation arrow3.png" /></div>
            <div onclick="rstrt(this)" class="forwardback" id="restart" style="display:none; left:70%; position:absolute; height:45px; cursor:pointer;"><img style="height:45px; margin-left:20px; opacity:1.0; filter:alpha(opacity=100);" src="restart-red-icon.png" /></div>
         </div>
         <div class="chairoptions" id="firsttellus" style="position: absolute; width: 200px; top: 40px; left:50%; margin-left:-100px; word-wrap:break-word; text-align:center; cursor:auto;">
            <p style="font-size:26px;"> First, tell us what you want to mount to.</p>
         </div>
         <div class="chairoptions mainoptions" id="manual" style="top: 225px;">
            <p style="font-size:16px;"> Manual Chair</p>
         </div>
         <div class="chairoptions mainoptions" id="power" style="top: 300px;">
            <p style="font-size:16px;"> Power Chair</p>
         </div>
         <div onclick="floorstandextquote(this);" class="chairoptions mainoptions" id="stand" style="top: 365px;">
            <p style="font-size:16px;"> Rolling Floor Stand with Extended Legs</p>
         </div>
         <div onclick="tableclampquote(this); startdesk(this);" class="chairoptions mainoptions" id="desk" style="top: 445px;">
            <p style="font-size:16px;"> Table or Desk</p>
         </div>
         <div class="chairoptions armquestions" id="foryour" style="width: 200px; top: 40px; margin-left: -100px;">
            <p style="font-size:26px;"> For your selection, we are currently able to mount to these configurations:</p>
         </div>
         <div class="chairoptions armquestions" id="tellus" style="width: 200px; top: 40px; margin-left:-100px;">
            <p style="font-size:26px;"> Tell us more about your chair.</p>
         </div>
         <div class="chairoptions armquestions" id="whichisfound" style="width: 180px; top: 150px; margin-left:-90px;">
            <p style="font-size:16px;"> Which of the follow is found on your chair?</p>
         </div>
         <div class="chairoptions armquestions" id="recommend" style="width: 200px; top: 30px; margin-left:-100px;">
            <p style="font-size:26px;">Based on your selection, the following could mount to your chair:</p>
         </div>
         <div class="chairoptions armquestions" id="armoptions" style="width: 200px; top: 30px; margin-left:-100px;">
            <p style="font-size:30px;"> Choose your mounting arm</p>
         </div>
         <div class="chairoptions armquestions" id="verticaloptions" style="width: 200px; top: 40px; margin-left:-100px;">
            <p style="font-size:26px;"> Next, choose a Vertical Bar</p>
         </div>
         <div class="chairoptions armquestions" id="verticaloptions2" style="width: 200px; top: 40px; margin-left:-100px;">
            <p style="font-size:26px;"> Choose another Vertical Bar</p>
         </div>
         <div class="chairoptions armquestions" id="wedgereceiveroptions" style="width: 200px; top: 40px; margin-left:-100px;">
            <p style="font-size:26px;"> Choose a Wedge Receiver to hold your device</p>
         </div>
         <div class="chairoptions armquestions" id="complete" style="width: 200px; top: 35px; margin-left:-100px;">
            <p style="font-size:26px;"> Your Lift and Lock System is complete.</p>
         </div>
         <div onclick="showquote(this)" class="chairoptions" id="showquote" style="position:absolute; top:465px; margin-left:-80px; left:50%; font-family:'Roboto Lt', 'Roboto', 'sans-serif'; font-size:20px; width:200px; height:50px; cursor:pointer; display:none;">Request a Quote<img style="height:25px; margin-left:10px; position:absolute;" src="navigation arrow.png" /></div>
         <div onclick="sclpoptions(this)" class="chairoptions" id="compatible" style="position: absolute; width: 200px; top: 500px; left:50%; margin-left:-100px; word-wrap:break-word; text-align:center; display:none; z-index:5;">
            <p style="font-size:18px;"> Click Here to see what your system is compatible with</p>
         </div>
         <div class="chairoptions armquestions" id="compatiblechoice" style="width: 200px; top: 100px; margin-left:-100px;">
            <p style="font-size:26px;">Choose one of the following:</p>
         </div>
         <div onclick="$('#rollingstandpic').addClass('chosen');sclp(this)" class="chairoptions" id="rollingstandopt" style="position: absolute; width: 200px; top: 250px; left:50%; margin-left:-100px; word-wrap:break-word; text-align:center; display:none; z-index:5;">
            <p style="font-size:16px;"> Rolling Floor Stand with Extended Legs</p>
            <p style="font-size:14px; line-height:50%;"> (Shown with 16 Inch Extension)</p>
            <img id="rollingstandrb" onmouseover="rollingstandref(this)" onmouseout="rollingstandrefhide(this)" src="refbar.png" class="refbar" style="top:0px;"/>
         </div>
         <div  onclick="$('#walltrackpic').addClass('chosen');sclp(this)" class="chairoptions" id="walltrackopt" style="position: absolute; width: 200px; top: 350px; left:50%; margin-left:-100px; word-wrap:break-word; text-align:center; display:none; z-index:5;">
            <p style="font-size:18px;"> Wall Track</p>
            <img id="walltrackrb" onmouseover="walltrackref(this)" onmouseout="walltrackrefhide(this)" src="refbar.png" class="refbar" style="top:0px;"/>
         </div>
         <div  onclick="$('#tableclamppic').addClass('chosen');sclp(this)" class="chairoptions" id="tableclampopt" style="position: absolute; width: 200px; top: 450px; left:50%; margin-left:-100px; word-wrap:break-word; text-align:center; display:none; z-index:5;">
            <p style="font-size:18px;">Table Clamp</p>
            <img id="tableclamprb" onmouseover="tableclampref(this)" onmouseout="tableclamprefhide(this)" src="refbar.png" class="refbar" style="top:0px;"/>
         </div>
         <div class="chairoptions" id="mountingplate" style="position: absolute; width: 200px; top: 35px; left:50%; margin-left:-100px; word-wrap:break-word; text-align:center; display:none; cursor:auto;">
            <p style="font-size:26px;"> We offer a broad range of mounting plates for different devices. As a placeholder you can choose any of the below</p>
         </div>
         <div onmouseout="squtubeglowhide(this);" onmouseover="squtubeglow(this);" onclick="squaretube(this)" class="chairoptions" id="squaretube" style="display:none; position:absolute; top:270px; left:50%; margin-left:-110px; width:220px; height: 75px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">1 Inch Square Tube</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/square-tube-independent-living-wheelchairs.png" />
         </div>
         <div onmouseover="rndtubeglow(this)" onmouseout="rndtubeglowhide(this)" onclick="roundtube(this)"class="chairoptions" id="roundtube" style="display:none;position:absolute; top:340px; left:50%; margin-left:-110px; width:220px; height: 75px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">1 Inch Horizontal Tube</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/horizontal-tube-independent-living-wheelchairs.png" />
         </div>
         <div onmouseover="verttubeglow(this)" onmouseout="verttubeglowhide(this)" onclick="directmount(this)"class="chairoptions" id="verttube" style="display:none;position:absolute; top:270px; left:50%; margin-left:-110px; width:220px; height: 75px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">1 Inch Vertical Tube</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/vertical-tube-independent-living-wheelchairs.png" />
         </div>
         <div onmouseover="ttrckglow(this)" onmouseout="ttrckglowhide(this)" onclick="ttrack(this)" class="chairoptions" id="ttrack" style="display:none;position:absolute; top:410px; left:50%; margin-left:-110px; width:220px; height: 75px; word-wrap:break-word; text-align:center; overflow:hidden;">
            <p style=" margin-top:0px; font-size:14px;">Single T-Track</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/ttrack-independent-living-wheelchairs.png" /><img id="ttrackrb" onmouseover="ttrackref(this)" onmouseout="ttrackrefhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onmouseover="dttrckglow(this)" onmouseout="dttrckglowhide(this)" onclick="doublettrack(this)" class="chairoptions" id="doublettrack" style="display:none; position:absolute; top:480px; left:50%; margin-left:-110px; width:220px; height: 80px; word-wrap:break-word; text-align:center; overflow:hidden;">
            <p style=" margin-top:0px; font-size:14px;">Double T-Track</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/double-ttrack-independent-living-wheelchairs.png" /><img id="dttrackrb" onmouseover="dttrackref(this)" onmouseout="dttrackrefhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onclick="directmountsocket(this);directmountsocketquote(this);" class="chairoptions" id="directmount" style="position:absolute; top:240px; left:50%; margin-left:-110px; width:220px; height: 105px; word-wrap:break-word; text-align:center; display:none; ">
            <p style=" margin-top:0px; font-size:14px;">Direct Mount Socket</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/direct-mount-socket-independent-living-wheelchairs.png" /><img id="directmountrb" onmouseover="directmountsocketref(this)" onmouseout="directmountsocketrefhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onclick="serdirectmountsocket(this);serdirectmountsocketquote(this);" class="chairoptions" id="serdirectmount" style="position:absolute; top:320px; left:50%; margin-left:-110px; width:220px; height: 80px; word-wrap:break-word; text-align:center; display:none; overflow:hidden;">
            <p style=" margin-top:0px; font-size:14px;">Serrated Direct Mount Socket</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/serrated-direct-mount-socket-independent-living-wheelchairs.png"/><img id="serdirectmountrb" onmouseover="serdirectmountsocketref(this)" onmouseout="serdirectmountsocketrefhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onclick="vertserdirectmountsocket(this);verserdirectmountsocketquote(this)" class="chairoptions" id="vertserdirectmount" style="position:absolute; top:400px; left:50%; margin-left:-110px; width:220px; height: 80px; word-wrap:break-word; text-align:center; display:none; overflow:hidden;">
            <p style=" margin-top:0px; font-size:14px;">Vertical Serrated Direct Mount Socket</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/2015.png" style="margin-top:20px;"/><img id="vertserdirectmountrb" onmouseover="" onmouseout="" src="refbar.png" class="refbar" />
         </div>
         <div onclick="fullring(this);fullringquote(this);" class="chairoptions" id="fullring" style="position:absolute; top:270px; left:50%; margin-left:-90px; width:180px; height: 75px; word-wrap:break-word; text-align:center; display:none;">
            <p style=" margin-top:0px; font-size:14px;">Full Ring Bracket</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/full-ring-independent-living-wheelchairs.png" /><img id="fullringrb" onmouseover="fullringref(this)" onmouseout="fullringrefhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onclick="zeroclearance(this);zeroclearancequote(this)" class="chairoptions" id="zeroclearance" style="position:absolute; top:340px; left:50%; margin-left:-90px; width:180px; height: 80px; word-wrap:break-word; text-align:center; display:none;">
            <p style=" margin-top:0px; font-size:14px;">Zero Clearance Bracket</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/zero-clearance-independent-living-wheelchairs.png" /><img id="zeroclearancerb" onmouseover="zeroclearanceref(this)" onmouseout="zeroclearancerefhide(this)" src="refbar.png" class="refbar" />
         </div>
		 <div onclick="ninetydegreebracket(this);ninetydegreebracketquote(this)" class="chairoptions" id="ninetydegreebracket" style="position:absolute; top:420px; left:50%; margin-left:-90px; width:180px; height: 80px; word-wrap:break-word; text-align:center; display:none;">
            <p style=" margin-top:0px; font-size:14px;">90 Degree Bracket</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/2011.png" /><img id="ninetydegreebracketrb" onmouseover="" onmouseout="" src="refbar.png" class="refbar" />
         </div>
		 <div onclick="directmounthorizontal(this);directmounthorizontalquote(this)" class="chairoptions" id="directmounthorizontal" style="position:absolute; top:490px; left:50%; margin-left:-90px; width:180px; height: 80px; word-wrap:break-word; text-align:center; display:none;">
            <p style=" margin-top:0px; font-size:14px;">Direct Mount Socket for Horizontal Bar</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/2014.png" style="margin-top:20px;"/><img id="ninetydegreebracketrb" onmouseover="" onmouseout="" src="refbar.png" class="refbar" />
         </div>
         <div onclick="squaretubebracket(this);squaretubequote(this);" class="chairoptions" id="squaretubebracket" style="position:absolute; top:270px; left:50%; margin-left:-90px; width:180px; height: 80px; word-wrap:break-word; text-align:center; display:none;">
            <p style=" margin-top:0px; font-size:14px;">Square Tube Bracket</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/square-tube-bracket-independent-living-wheelchairs.png" /><img id="squaretuberb" onmouseover="squaretubebracketref(this)" onmouseout="squaretubebracketrefhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onclick="ttrackbracket(this);ttrackbracketsquote(this);" class="chairoptions" id="ttrackbracket" style="position:absolute; top:270px; left:50%; margin-left:-90px; width:180px; height: 75px; word-wrap:break-word; text-align:center; display:none;">
            <p style=" margin-top:0px; font-size:14px;">T-Track Bracket</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/ttrack-bracket-independent-living-wheelchairs.png" /><img id="ttrackbrrb" onmouseover="ttrackbracketref(this)" onmouseout="ttrackbracketrefhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onclick="ttrackdirect(this);ttrackdirectmountsocketquote(this);" class="chairoptions" id="ttrackdirect" style="position:absolute; top:340px; left:50%; margin-left:-90px; width:180px; height: 80px; word-wrap:break-word; text-align:center; display:none;">
            <p style=" margin-top:0px; font-size:14px;">T-Track Direct Mount Socket</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/ttrack-direct-independent-living-wheelchairs.png" /><img id="ttrackdmrb" onmouseover="ttrackdirectref(this)" onmouseout="ttrackdirectrefhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onclick="dttrackbracket(this);dttrackbracketsquote(this);" class="chairoptions" id="doublettrackbracket" style="position:absolute; top:270px; left:50%; margin-left:-90px; width:180px; height: 75px; word-wrap:break-word; text-align:center; display:none;">
            <p style=" margin-top:0px; font-size:14px;">Double T-Track Bracket</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/double-ttrack-bracket-independent-living-wheelchairs.png" /><img id="dttrackbrrb" onmouseover="dttrackbracketref(this)" onmouseout="dttrackbracketrefhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onclick="dttrackdirect(this);dttrackdirectmountsocketquote(this);" class="chairoptions" id="doublettrackdirect" style="position:absolute; top:340px; left:50%; margin-left:-90px; width:180px; height: 80px; word-wrap:break-word; text-align:center; display:none;">
            <p style=" margin-top:0px; font-size:14px;">T-Track Direct Mount Socket</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/ttrack-direct-independent-living-wheelchairs.png" /><img id="dttrackdmrb" onmouseover="ttrackdirectref(this)" onmouseout="ttrackdirectrefhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onclick="socketbar14(this);socketbar14quote(this);" class="chairoptions" id="14socketbar" style="display:none; position:absolute; top:270px; left:50%; margin-left:-90px; width:180px; height: 85px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">14 Inch Socket Bar</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/2018.png" /><img id="14socketbarrb" onmouseover="socketbar14ref(this)" onmouseout="socketbar14refhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onclick="socketbar22(this);socketbar22quote(this);" class="chairoptions" id="22socketbar" style="display:none; position:absolute; top:350px; left:50%; margin-left:-90px; width:180px; height: 85px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">22 Inch Socket Bar</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/2019.png" /><img id="22socketbarrb" onmouseover="socketbar22ref(this)" onmouseout="socketbar22refhide(this)" src="refbar.png" class="refbar" />
         </div>
		 <div onclick="sersocketbar14(this);sersocketbar14quote(this);" class="chairoptions" id="sersocketbar14" style="display:none; position:absolute; top:430px; left:50%; margin-left:-90px; width:180px; height: 85px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">Serrated Socket bar 14 Inch</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/2020.png" /><!--<img id="sersocketbar14rb" onmouseover="sersocketbar14ref(this)" onmouseout="sersocketbar14refhide(this)" src="refbar.png" class="refbar" />-->
         </div>
		 <div onclick="telescopicBlock(this);telescopicBlockQuote(this);extensionSocketBars(this);" class="chairoptions" id="telescopicBlock" style="display:none; position:absolute; top:510px; left:50%; margin-left:-90px; width:180px; height: 85px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">Telescopic Block</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/2017.png" /><img id="telescopicBlockrb" onmouseover="" onmouseout="" src="refbar.png" class="refbar" />
         </div>
         <div onclick="verticalbars(this);vertical4(this);vertical4quote(this);v4tov8extension(this);v4tov16extension(this);" class="chairoptions" id="vertical4" style="display:none; position:absolute; top:140px; left:50%; margin-left:-90px; width:180px; height: 82px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">4 Inch Vertical Bar</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/vertical-bar-4-independent-living-wheelchairs.png" /><img id="vertical4rb" onmouseover="vertical4ref(this)" onmouseout="vertical4refhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onclick="verticalbars(this);vertical6(this);vertical6quote(this);v6tov8extension(this);v6tov16extension(this);" class="chairoptions" id="vertical6" style="display:none; position:absolute; top:220px; left:50%; margin-left:-90px; width:180px; height: 82px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">6 Inch Vertical Bar</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/vertical-bar-6-independent-living-wheelchairs.png" /><img id="vertical6rb" onmouseover="vertical6ref(this)" onmouseout="vertical6refhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onclick="verticalbars(this);vertical12(this);vertical12quote(this);v12tov8extension(this);v12tov16extension(this);" class="chairoptions" id="vertical12" style="display:none; position:absolute; top:300px; left:50%; margin-left:-90px; width:180px; height: 82px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">12 Inch Vertical Bar</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/vertical-bar-12-independent-living-wheelchairs.png" /><img id="vertical12rb" onmouseover="vertical12ref(this)" onmouseout="vertical12refhide(this)" src="refbar.png" class="refbar" />
         </div>
         <!--<div onclick="verticalbars(this);verticaladj(this);verticaladjquote(this);" class="chairoptions" id="verticaladj" style="display:none; position: absolute; top:380px; left:50%; margin-left:-90px; width:180px; height: 82px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">Adjustable Vertical Bar</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/adjustable-vertical-bar-independent-living-wheelchairs.png" /><img id="verticaladjrb" onmouseover="verticaladjref(this)" onmouseout="verticaladjrefhide(this)" src="refbar.png" class="refbar" />
         </div>-->
         <div onclick="verticalextension(this);vertical8(this);vertical8quote(this);" class="chairoptions" id="verticalextension8" style="display:none; position:absolute; top:380px; left:50%; margin-left:-90px; width:180px; height: 82px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">8 Inch Vertical Extension Bar</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/vertical-extension-8-independent-living-wheelchairs.png" /><img id="vertical8rb" onmouseover="verticalext8ref(this)" onmouseout="verticalext8refhide(this)" src="refbar.png" class="refbar" />
         </div>
		 <div onclick="verticalextension(this);vertical16(this);vertical16quote(this);" class="chairoptions" id="verticalextension16" style="display:none; position:absolute; top:460px; left:50%; margin-left:-90px; width:180px; height: 82px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">16 Inch Vertical Extension Bar</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/vertical-extension-16-independent-living-wheelchairs.png" /><img id="vertical16rb" onmouseover="verticalext16ref(this)" onmouseout="verticalext16refhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onclick="arms(this);m2(this);m2quote(this);mountingarmstov4(this);mountingarmstov6(this);mountingarmstov12(this);mountingarmstov4viasocketbars(this);mountingarmstov6viasocketbars(this);mountingarmstov12viasocketbars(this);" class="chairoptions" id="m2" style="display:none; position:absolute; top:150px; left:50%; margin-left:-90px; width:180px; height: 85px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">M2</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/m2-independent-living-wheelchairs.png" /><img id="m2rb" onmouseover="m2ref(this)" onmouseout="m2refhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onclick="arms(this);mx(this);m2xquote(this);mountingarmstov4(this);mountingarmstov6(this);mountingarmstov12(this);mountingarmstov4viasocketbars(this);mountingarmstov6viasocketbars(this);mountingarmstov12viasocketbars(this);" class="chairoptions" id="m2x" style="display:none; position:absolute; top:230px; left:50%; margin-left:-90px; width:180px; height: 85px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">M2X</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/m2x-independent-living-wheelchairs.png" /><img id="m2xrb" onmouseover="m2xref(this)" onmouseout="m2xrefhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onclick="arms(this);m2max(this);m2maxquote(this);mountingarmstov4(this);mountingarmstov6(this);mountingarmstov12(this);mountingarmstov4viasocketbars(this);mountingarmstov6viasocketbars(this);mountingarmstov12viasocketbars(this);" class="chairoptions" id="m2max" style="display:none; position:absolute; top:310px; left:50%; margin-left:-90px; width:180px; height: 85px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">M2 Max</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/m2-max-independent-living-wheelchairs.png" /><img id="m2maxrb" onmouseover="m2maxref(this)" onmouseout="m2maxrefhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onclick="arms(this);articulating(this);articulatingquote(this);mountingarmstov4(this);mountingarmstov6(this);mountingarmstov12(this);mountingarmstov4viasocketbars(this);mountingarmstov6viasocketbars(this);mountingarmstov12viasocketbars(this);" class="chairoptions" id="articulatingarm" style="display:none; position:absolute; top:390px; left:50%; margin-left:-90px; width:180px; height: 85px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">Articulating Arm</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/articulating-arm-independent-living-wheelchairs.png" /><img id="articulatingarmrb" onmouseover="articulatingarmref(this)" onmouseout="articulatingarmrefhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onclick="arms(this);articulatingriser(this);articulatingarmriserquote(this);mountingarmstov4(this);mountingarmstov6(this);mountingarmstov12(this);mountingarmstov4viasocketbars(this);mountingarmstov6viasocketbars(this);mountingarmstov12viasocketbars(this);" class="chairoptions" id="articulatingarmwithriser" style="display:none; position:absolute; top:470px; left:50%; margin-left:-90px; width:180px; height: 85px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">Articulating Arm with Riser</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/articulating-arm-with-riser-independent-living-wheelchairs.png" /><img id="articulatingarmriserrb" onmouseover="articulatingarmriserref(this)" onmouseout="articulatingarmriserrefhide(this)"  src="refbar.png" class="refbar" />
         </div>
		  <div onclick="afterLoadCustomArm(this);modelManager.loadCustomArm(this);customarmmovieiconenable(this);customarmmovieiconviasocketbarsenable(this);$('#customarminputpar').show();" class="chairoptions" id="loadcustomarm" style="display:none; position:absolute; top:550px; left:50%; margin-left:-90px; width:180px; height: 60px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:16px;">Click here to Load your <br>saved custom arm</p>
            <!--<img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/articulating-arm-with-riser-independent-living-wheelchairs.png" /><img id="loadcustomarm" onmouseover="articulatingarmriserref(this)" onmouseout="articulatingarmriserrefhide(this)"  src="refbar.png" class="refbar" />-->
         </div>
         <div onclick="wedgereceivers(this);lockablewedge(this);lockablewedgeviasocketbars(this);lockablequote(this);" class="chairoptions" id="lockablewedgereceiver" style="display:none; position:absolute; top:220px; left:50%; margin-left:-90px; width:180px; height: 85px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">Lockable Wedge Receiver</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/lockable-wedge-receiver-independent-living-wheelchairs.png" /><img id="lockablerb" onmouseover="lockablewedgereceiverref(this)" onmouseout="lockablewedgereceiverrefhide(this)" src="refbar.png" class="refbar" />
         </div>
         <div onclick="wedgereceivers(this);rotarywedge(this);rotarywedgeviasocketbars(this);rotaryquote(this);" class="chairoptions" id="rotarywedgereceiver" style="display:none; position:absolute; top:300px; left:50%; margin-left:-90px; width:180px; height: 85px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">Rotary Wedge Receiver</p>
            <img class="listpic" src="powerchair renderings/good renderings/photoshopped/list pics/rotary-wedge-receiver-independent-living-wheelchairs.png" /><img id="rotaryrb" onmouseover="rotarywedgereceiverref(this)" onmouseout="rotarywedgereceiverrefhide(this)" src="refbar.png" class="refbar" />
         </div>
		 <!--<div id="wedgereceivermoutings" style="display:none; position:absolute; top:420px; left:50%; margin-left:-90px; width:180px; height: 750px; word-wrap:break-word; text-align:center; overflow-y: scroll;">-->
         <div onclick="wedgereceivertablet(this);" class="chairoptions" id="wedgereceiveripad" style="display:none; position:absolute; top:340px; left:50%; margin-left:-90px; width:180px; height: 30px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">Tablet</p>
         </div>
         <div onclick="wedgereceiverlaptopplate(this);" class="chairoptions" id="wedgereceiverlaptop" style="display:none; position:absolute; top:380px; left:50%; margin-left:-90px; width:180px; height: 30px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">Laptop Plate</p>
         </div>
		 <div onclick="wedgereceiveripadairplate(this);" class="chairoptions" id="wedgereceiveripadairplate" style="display:none; position:absolute; top:420px; left:50%; margin-left:-90px; width:180px; height: 30px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">Ipad Air Plate</p>
         </div>
		 <div onclick="wedgereceiveripadaircradle(this);" class="chairoptions" id="wedgereceiveripadaircradle" style="display:none; position:absolute; top:460px; left:50%; margin-left:-90px; width:180px; height: 30px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">Ipad Air Cradle-Otter</p>
         </div>
		 <div onclick="wedgereceiverliteracyplate(this);" class="chairoptions" id="wedgereceiverliteracyplate" style="display:none; position:absolute; top:500px; left:50%; margin-left:-90px; width:180px; height: 30px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">Literacy Plate</p>
         </div>
		 <div onclick="wedgereceivercamera(this);" class="chairoptions" id="wedgereceivercamera" style="display:none; position:absolute; top:540px; left:50%; margin-left:-90px; width:180px; height: 30px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">Camera</p>
         </div>
		 <div onclick="wedgereceivercupholder(this);" class="chairoptions" id="wedgereceivercupholder" style="display:none; position:absolute; top:580px; left:50%; margin-left:-50px; width:100px; height: 30px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">Cup Holder</p>
         </div>
         <div onclick="wedgereceiverempty(this);" class="chairoptions" id="wedgereceiverempty" style="display:none; position:absolute; top:620px; left:50%; margin-left:-20px; width:50px; height: 30px; word-wrap:break-word; text-align:center;">
            <p style=" margin-top:0px; font-size:14px;">Empty</p>
         </div>
		 <!--</div>-->
      </div>
		 <div id="build-your-system-canvas" style="position:absolute; width:1180px; height:715px; left:50%; margin-left:-590px; z-index:-1; ">
		 
		<!--<div id="chairpictures" style="position:absolute; width:1180px; height:715px; left:50%; margin-left:-590px; z-index:-1; ">
         <img id="manualchair" style="position:absolute; display:none; height:800px; left:50%; margin-left:-940px; top:-85px; z-index:-3;" src="powerchair renderings/good renderings/manual-independent-living-wheelchair.png" />
         <img id="powerchair" style="position:absolute; display:none; height:800px; left:50%; margin-left:-940px; top:-85px; z-index:-3;" src="powerchair renderings/good renderings/power-independent-living-wheelchair.png" /> 
         <img id="squaretubeglow" style="position:absolute; display:none; height:800px; left:50%; margin-left:-940px; top:-85px;" src="powerchair renderings/good renderings/chair-square-tube-selection-glow.png" /> 
         <img id="roundtubeglow" style="position:absolute; display:none; height:800px; left:50%; margin-left:-940px; top:-85px; " src="powerchair renderings/good renderings/chair-horizontal-tube-selection-glow.png" /> 
         <img id="verticaltubeglow" style="position:absolute; display:none; height:800px; left:50%; margin-left:-940px; top:-85px; " src="powerchair renderings/good renderings/manual-chair-vertical-tube-selection-glow.png" /> 
         <img id="ttrackglow" style="position:absolute; display:none; height:800px; left:50%; margin-left:-940px; top:-85px; " src="powerchair renderings/good renderings/chair-ttrack-selection-glow.png" /> 
         <img id="dttrackglow" style="position:absolute; display:none; height:800px; left:50%; margin-left:-940px; top:-85px; " src="powerchair renderings/good renderings/chair-double-ttrack-selection-glow.png" /> 
         <img id="extrollingstand" style="position:absolute; display:none; height:800px; left:50%; margin-left:-940px; top:-85px; z-index:-3;" src="powerchair renderings/good renderings/extended-rolling-floor-stand-independent-living-wheelchair.png" />
         <img id="deskclamp" style="display:none; z-index:-3; position:absolute; height:800px; left:50%; margin-left:-1040px; top:145px;" src="powerchair renderings/good renderings/desk-clamp-mounting-arms-table.png" />
         <img id="manualwheel" style="display:none; z-index:20; position:absolute; height:800px; left:50%; margin-left:-940px; top:-85px;" src="powerchair renderings/good renderings/manual-chair-vertical-tube-wheel.png" /> -->
		 
		 <div id="manualchair"></div>
		 <div id="powerchair"></div>
		 <div id="squaretubeglow"></div>
		 <div id="roundtubeglow"></div>
		 <div id="ttrackglow"></div>
		 <div id="dttrackglow"></div>
		 <div id="extrollingstand"></div>
		 <div id="deskclamp"></div>
		 <div id="tabletpic"></div>
		 <div id="laptopplatepic"></div>
		 <div id="ipadairplatepic"></div>
		 <div id="ipadaircradlepic"></div>
		 <div id="literacyplatepic"></div>
		 <div id="camerapic"></div>
		 <div id="cupholderpic"></div>
		 
         <div class="pics" id="doublettrackpic" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img class="glow" src="glow.png" style="left: 66.66%; margin-top:25px; margin-left: -520px; position:absolute; height:900px; z-index:-3;"/><img src="powerchair renderings/good renderings/photoshopped/for web/double-t-track-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="ttrackpic" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img class="glow" src="glow.png" style="left: 66.66%; margin-top:25px; margin-left: -520px; position:absolute; height:900px; z-index:-3;"/><img src="powerchair renderings/good renderings/photoshopped/for web/t-track-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="directmountpic" style="display:none; left: 50%;  position: absolute; width: 900px; height:715px; margin-left: -590px; overflow: hidden;"><!--<img class="glow" src="glow.png" style="left: 66.66%; margin-top:75px; margin-left: -520px; position:absolute; height:900px; z-index:-3;"/><img src="powerchair renderings/good renderings/photoshopped/for web/direct-mount-socket-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px; position:absolute;"/>--> </div>
         <div class="pics" id="serdirectmountpic" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img class="glow" src="glow.png" style="left: 66.66%; margin-top:75px; margin-left: -520px; position:absolute; height:900px; z-index:-3;"/><img src="powerchair renderings/good renderings/photoshopped/for web/serrated-direct-mount-socket-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
		 <div class="pics" id="vertserdirectmountpic" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img class="glow" src="glow.png" style="left: 66.66%; margin-top:75px; margin-left: -520px; position:absolute; height:900px; z-index:-3;"/><img src="powerchair renderings/good renderings/photoshopped/for web/serrated-direct-mount-socket-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="dttrackdirectpic" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/double-t-track-direct-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="ttrackdirectpic" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/t-track-direct-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="ttrackbracket1" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/t-track-bracket-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="dttrackbracket1" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/double-t-nut-bracket-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="squaretubebracketpic" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img class="glow" src="glow.png" style="left: 66.66%; margin-top:25px; margin-left: -520px; position:absolute; height:900px; z-index:-3;"/><img src="powerchair renderings/good renderings/photoshopped/for web/square-tube-bracket-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="fullringbracket" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img class="glow" src="glow.png" style="left: 66.66%; margin-top:25px; margin-left: -520px; position:absolute; height:900px; z-index:-3;"/><img src="powerchair renderings/good renderings/photoshopped/for web/full-ring-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="fullringbracketmanual" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img class="glow" src="glow.png" style="left: 66.66%; margin-top:25px; margin-left: -520px; position:absolute; height:900px; z-index:-3;"/><img src="powerchair renderings/good renderings/photoshopped/full-ring-for-manual-chair.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="zeroclearancebracket" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img class="glow" src="glow.png" style="left: 66.66%; margin-top:25px; margin-left: -520px; position:absolute; height:900px; z-index:-3;"/><img src="powerchair renderings/good renderings/photoshopped/for web/zero-clearance-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="zeroclearancebracketmanual" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img class="glow" src="glow.png" style="left: 66.66%; margin-top:25px; margin-left: -520px; position:absolute; height:900px; z-index:-3;"/><img src="powerchair renderings/good renderings/photoshopped/zero-clearance-for-manual-chair.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="14socketbarpic" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/socket-bar-14-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="14socketbarpicmanual" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/socket-bar-for-manual-chair.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="22socketbarpic" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/socket-bar-22-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
		 <div class="pics" id="sersocketbar14pic" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/socket-bar-22-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
		 <div class="pics" id="telescopicBlockpic" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/socket-bar-22-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="22socketbarpicmanual" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/socket-bar22-for-manual-chair.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="fullringclamps" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/full-ring-clamps-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="fullringclampsmanual" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/full-ring-clamps-for-manual-chair.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="zeroclearanceclamps" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/zero-clearance-clamps-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="zeroclearanceclampsmanual" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/zero-clearance-clamps-for-manual-chair.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="squaretubeclamps" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/square-tube-bracket-clamps-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="dttrackbracketclamps" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/double-t-nut-bracket-clamps-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div class="pics" id="ttrackbracketclamps" style="left: 50%; margin-left: -590px; position: absolute; display:none; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/t-track-bracket-clamps-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
         <div  style="height:715px; width:885px; left: 50%; margin-left: -590px; position: absolute; " id="barsandarms">
            <div id="verticalextension" style="display:none;">
               <div class="pics" id="verticalextension16pic" style="display:none; left: 66.66%; margin-left: -590px; position: absolute; width: 900px; height:715px; overflow: hidden;"><div id="ve16"></div><!--<img id="ve16" style=" height:800px; margin-top:-84.5px; margin-left:-350px;"/>--> </div>
               <div class="pics" id="verticalextension8pic" style="display:none; left: 66.66%; margin-left: -590px; position: absolute; width: 900px; height:715px; overflow: hidden;"><div id="ve8"></div><!--<img id="ve8" style=" height:800px; margin-top:-84.5px; margin-left:-350px;"/>--> </div>
            </div>
            <div id="verticalbars" style="display:none;">
               <div class="pics" id="verticalbar12pic" style="display:none; left: 66.66%; margin-left: -590px; position: absolute; width: 900px; height:715px; overflow: hidden;"><div id="vb12"></div><!--<img id="vb12" style=" height:800px; margin-top:-87px; margin-left:-350px;"/>--> </div>
               <div class="pics" id="verticalbar6pic" style="display:none; left: 66.66%; margin-left: -590px; position: absolute; width: 900px; height:715px; overflow: hidden;"><div id="vb6"></div><!--<img id="vb6" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
               <div class="pics" id="verticalbar4pic" style="display:none; left: 66.66%; margin-left: -590px; position: absolute; width: 900px; height:715px; overflow: hidden;"><div id="vb4"></div><!--<img id="vb4" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
               <div class="pics" id="verticalbaradjpic" style="display:none; left: 66.66%; margin-left: -590px; position: absolute; width: 900px; height:715px; overflow: hidden;"><div id="vbadj"></div><!--<img id="vbadj" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
            </div>
            <div id="arms" style="display:none;">
               <div class="pics" id="m2pic" style="display:none; left: 66.66%; margin-left: -584px; position: absolute; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/m2-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-356px;"/>--> </div>
               <div class="pics" id="m2xpic" style="display:none; left: 66.66%; margin-left: -584px; position: absolute; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/m2x-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-356.5px;"/>--> </div>
               <div class="pics" id="m2maxpic" style="display:none; left: 66.66%; margin-left: -584px; position: absolute; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/m2-max-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
               <div class="pics" id="articulatingarmpic" style="display:none; left: 66.66%; margin-left: -590px; position: absolute; width: 900px; height: 715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/articulating-arm-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
               <div class="pics" id="articulatingarmriserpic" style="display:none; left: 66.66%; margin-left: -590px; position: absolute; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/articulating-arm-with-riser-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
               <div id="wedgereceivers" class="pics" style="display:none; left: 66.66%; margin-left: -584px; position:absolute; width: 900px; height:715px; z-index:-1; overflow:visible;">
                  <!--<img id="lockablewedgereceiverpic" src="powerchair renderings/good renderings/photoshopped/for web/lockable-wedge-receiver-independent-living-wheelchairs-mounts-empty.png" style="display:none; position:absolute; height:800px; margin-top:0px; margin-left:-350px;"/>
                  <img id="rotarywedgereceiverpic" src="powerchair renderings/good renderings/photoshopped/for web/rotary-wedge-receiver-independent-living-wheelchairs-mounting-empty.png" style="display:none; position:absolute; height:800px; margin-top:0px; margin-left:-350px;"/>
                  <img id="lockablewedgereceiveripadpic" src="powerchair renderings/good renderings/photoshopped/for web/lockable-wedge-receiver-independent-living-wheelchairs.png" style="display:none; position:absolute; height:800px; margin-top:0px; margin-left:-350px;"/>
                  <img id="rotarywedgereceiveripadpic" src="powerchair renderings/good renderings/photoshopped/for web/rotary-wedge-receiver-independent-living-wheelchairs.png" style="display:none; position:absolute; height:800px; margin-top:0px; margin-left:-350px;"/>
                  <img id="rotarywedgereceiverlaptoppic" src="powerchair renderings/good renderings/photoshopped/for web/rotary-laptop-plate-independent-living-wheelchair-computers.png" style="display:none; position:absolute; height:800px; margin-top:0px; margin-left:-350px;"/>
                  <img id="lockablewedgereceiverlaptoppic" src="powerchair renderings/good renderings/photoshopped/for web/lockable-laptop-plate-independent-living-wheelchair-computers.png" style="display:none; position:absolute; height:800px; margin-top:0px; margin-left:-350px;"/>-->
				<div id="lockablewedgereceiverpic"></div>
				<div id="rotarywedgereceiverpic"></div>
				<div id="lockablewedgereceiveripadpic"></div>
				<div id="rotarywedgereceiveripadpic"></div>
				<div id="rotarywedgereceiverlaptoppic"></div>
				<div id="lockablewedgereceiverlaptoppic"></div>
               </div>
               <div class="pics" id="articulatingarmriserhead" style="display:none; left: 66.66%; margin-left: -590px; position: absolute; width: 900px; height:715px; overflow: hidden;"><<!--img src="powerchair renderings/good renderings/photoshopped/for web/articulating-arm-with-riser-head-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
               <div class="pics" id="articulatingarmhead" style="display:none; left: 66.66%; margin-left: -590px; position: absolute; width: 900px; height:715px; overflow: hidden;"><<!--img src="powerchair renderings/good renderings/photoshopped/for web/articulating-arm-head-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
               <div class="pics" id="m2maxhead" style="display:none; left: 66.66%; margin-left: -584px; position: absolute; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/m2-max-head-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-350px;"/>--> </div>
               <div class="pics" id="m2xhead" style="display:none; left: 66.66%; margin-left: -584px; position: absolute; width: 900px; height: 715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/m2x-head-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-356.5px;"/> --></div>
               <div class="pics" id="m2head" style="display:none; left: 66.66%; margin-left: -584px; position: absolute; width: 900px; height:715px; overflow: hidden;"><!--<img src="powerchair renderings/good renderings/photoshopped/for web/m2-head-independent-living-wheelchairs.png" style=" height:800px; margin-top:-85px; margin-left:-356px;"/>--> </div>
            </div>
         </div>
      </div>
      <div class="ref" id="rollingstandref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/8123-ROLLING-FLOOR-STAND-independent-living-wheelchair.jpg" /></div>
         <p class="refparheader">Rolling Floor Stand</p>
         <p class="refpar">This Rolling Floor Stand is another opportunity to use your Lift and Lock System. Simple detach your system by the Vertical Bar and move it to the Floor Stand. </p>
         <p class="refpartnum">Part # 8123</p>
      </div>
      <div class="ref" id="walltrackref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/WALL-TRACK-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">Wall Mounted Track</p>
         <p class="refpar">A Wall Mounted Track is a useful fixture in a room that allow a sliding Direct Mount to host a Vertical Bar. By being attached to the wall, this system provides great stability while being able to maneuver around the perimeter of the room. </p>
         <p class="refpartnum">Part # N/A</p>
      </div>
      <div class="ref" id="tableclampref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/8214-table-clamp-lift-and-lock-wheelchair-table-compatibility.jpg"/></div>
         <p class="refparheader">Table Clamp</p>
         <p class="refpar">A Lift and Lock Table Clamp is a strong way to mount onto tables and desks. Clamping onto a table adds that structure to your system while not requiring a large footprint on the surface of the furniture. </p>
         <p class="refpartnum">Part # 8214</p>
      </div>
      <div class="ref" id="directmountsocketref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/7106-DIRECT-MOUNT-SOCKET-independent-living-wheelchair.jpg" /></div>
         <p class="refparheader">Direct Mount Socket</p>
         <p class="refpar">The Direct Mount Socket is used in instances where vertical bars are available to be mounted on. It offers a close and secure connection to a frame and does not require a socket bar.</p>
         <p class="refpartnum">Part # 7106</p>
      </div>
      <div  class="ref" id="serdirectmountsocketref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/8163-SERRATED-DIRECT-MOUNT-SOCKET-independent-living-wheelchair.jpg" /></div>
         <p class="refparheader">Serrated Direct Mount Socket</p>
         <p class="refpar">The Serrated Direct Mount Socket mounts to vertical bars. It offers the close connection of a Direct Mount Socket with the added serrated feature, adding another level of customization to the mounting system.</p>
         <p class="refpartnum">Part # 8163</p>
      </div>
      <div class="ref" id="zeroclearanceref" >
         <div class="refpicframe"><img style="margin-left:-350px;" class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/6145-ZERO-CLEARANCE-BRACKET-independent-living-wheelchair.jpg" /></div>
         <p class="refparheader">Zero Clearance Bracket</p>
         <p class="refpar">The Zero Clearance Bracket is intended to mount to a round, horizontal bar and is coupled with a socket bar. These brackets come in pairs to remove any movement in the socket bar. </p>
         <p class="refpartnum">Part # 6145</p>
      </div>
      <div class="ref" id="fullringref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/6146-FULL-RING-BRACKET-independent-living-wheelchair.jpg" /></div>
         <p class="refparheader">Full Ring Bracket</p>
         <p class="refpar">The Full Ring Bracket is intended to mount to a round, horizontal bar and is coupled with a socket bar. These brackets come in pairs to remove any movement in the socket bar. </p>
         <p class="refpartnum">Part # 6146</p>
      </div>
      <div class="ref" id="ttrackbracketref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/6446-T-NUT-BRACKET-independent-living-wheelchair.jpg" /></div>
         <p class="refparheader">T-Nut Bracket</p>
         <p class="refpar">The T-Nut Bracket is useful when a single T-Track is present. The T-Nuts slide into the track and are tightened to clamp to the track. </p>
         <p class="refpartnum">Part # 6446</p>
      </div>
      <div class="ref" id="ttrackdirectref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/8115-T-TRACK-DIRECT-MOUNT-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">T-Track Direct Mount Socket</p>
         <p class="refpar">The T-Track Direct Mount Socket is useful when a single or double T-Track is present. The T-Nuts allow the socket to slide to a desired position and are then tightened to clamp to the track. </p>
         <p class="refpartnum">Part # 8115</p>
      </div>
      <div class="ref" id="squaretubebracketref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/6278-SQUARE-TUBE-BRACKET-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">Square Tube Bracket</p>
         <p class="refpar">The Square Tube Bracket is designed to fit on 1 inch square tubing. By mounting to a square tube, the corners affectively deter the clamp from shifting.  </p>
         <p class="refpartnum">Part # 8115</p>
      </div>
      <div class="ref" id="dttrackbracketref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/7992-DOUBLE-T-NUT-BRACKET-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">Double T-Nut Bracket</p>
         <p class="refpar">The Double T-Nut Bracket is useful when a double T-Track is present. The T-Nuts slide into the track and are tightened to clamp to the track. </p>
         <p class="refpartnum">Part # 7992</p>
      </div>
      <div class="ref" id="socketbar14ref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/6147-SOCKET-BAR-14-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">14 Inch Socket Bar</p>
         <p class="refpar">The 14 Inch Socket Bar is a general purpose length bar. It accepts vertical bars in situations where frame clamps were necessary and added distance is not.  </p>
         <p class="refpartnum">Part # 6147</p>
      </div>
      <div class="ref" id="socketbar22ref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/7635-SOCKET-BAR-22-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">22 Inch Socket Bar</p>
         <p class="refpar">The 22 Inch Socket Bar is an extended length bar. It accepts vertical bars in situations where frame clamps were necessary and there is a need for added distance between the chair and the vertical bar.   </p>
         <p class="refpartnum">Part # 7635</p>
      </div>
      <div class="ref" id="ttrackref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/T-TRACK-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">Single T-Track</p>
         <p class="refpar">T-Tracks are commonly found on Invacare chairs and appear similar to this. A Single T-Track only has one slot running the length of the part for T-Nuts. A bracket with T-Nuts would slide into the track. </p>
      </div>
      <div class="ref" id="dttrackref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/DOUBLE-T-TRACK-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">Double T-Track</p>
         <p class="refpar">T-Tracks are commonly found on Permobile chairs and appear similar to this. A Double T-Track has two slots running the length of the part for T-Nuts. A bracket with T-Nuts would have a nut slide into each track. </p>
      </div>
      <div class="ref" id="vertical4ref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/8385-VERTICAL-BAR-4-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">4 Inch Vertical Bar</p>
         <p class="refpar">Vertical Bars can be mounted off either Direct Mount Sockets or Socket Bars. A vertical bar is your connection to our variety of arms.  </p>
         <p class="refpartnum">Part # 8385</p>
      </div>
      <div class="ref" id="vertical6ref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/8071-VERTICAL-BAR-6-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">6 Inch Vertical Bar</p>
         <p class="refpar">Vertical Bars can be mounted off either Direct Mount Sockets or Socket Bars. A vertical bar is your connection to our variety of arms.  </p>
         <p class="refpartnum">Part # 8071</p>
      </div>
      <div class="ref" id="vertical12ref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/8070-VERTICAL-BAR-12-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">12 Inch Vertical Bar</p>
         <p class="refpar">Vertical Bars can be mounted off either Direct Mount Sockets or Socket Bars. A vertical bar is your connection to our variety of arms.  </p>
         <p class="refpartnum">Part # 8070</p>
      </div>
      <div class="ref" id="verticaladjref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/8114-ADJUSTABLE-VERTICAL-BAR-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">Adjustable Vertical Bar</p>
         <p class="refpar">The Adjustable Vertical Bar offers an adjustable height for your arm's resting position. Loosen the screw in the larger split clamp to raise or lower the height and simply tighten it back up.   </p>
         <p class="refpartnum">Part # 8114</p>
      </div>
      <div class="ref" id="verticalext8ref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/8081-VERTICAL-EXT-8-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">8 Inch Extension Bar</p>
         <p class="refpar">The 8 Inch Extension Bar can be used in between any socket bar or direct mount and a vertical bar. It provides additional height to the vertical reach of the assembly.  </p>
         <p class="refpartnum">Part # 8081</p>
      </div>
      <div class="ref" id="verticalext16ref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/8216-VERTICAL-EXT-16-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">16 Inch Extension Bar</p>
         <p class="refpar">The 16 Inch Extension Bar is similar to the 8 Inch Extension in installation, but is used only in specific circumstances. An example of such a circumstance would be the use of an Eyegaze system.   </p>
         <p class="refpartnum">Part # 8216</p>
      </div>
      <div class="ref" id="m2ref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/8074-M2-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">M2 Arm</p>
         <p class="refpar">The M2 arm is our lightest weight hydraulic arm. It provides a smooth, flowing, horizontal and vertical motion and is used to hold objects that range from 0 to 5 lbs. It is distinguished by two aluminum cylinders.  </p>
         <p class="refpartnum">Part # 8074</p>
      </div>
      <div class="ref" id="m2xref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/8069-M2X-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">M2X Arm</p>
         <p class="refpar">The M2X arm is our middle weight hydraulic arm. It provides a smooth, flowing, horizontal and vertical motion and is used to hold objects that range from 5 to 10 lbs. It is distinguished by one black cylinder.  </p>
         <p class="refpartnum">Part # 8069</p>
      </div>
      <div class="ref" id="m2maxref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/8127-M2-MAX-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">M2 Max Arm</p>
         <p class="refpar">The M2 Max arm is our heaviest weight hydraulic arm. It provides a smooth, flowing, horizontal and vertical motion and is used to hold objects that range from 10 to 15 lbs. It is distinguished by two black cylinders.  </p>
         <p class="refpartnum">Part # 8127</p>
      </div>
      <div class="ref" id="articulatingarmref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/8072-ARTICULATING-ARM-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">Articulating Arm</p>
         <p class="refpar">The Articulating Arm offers smooth horizontal movement and can hold large amounts of weight. It is easily locked in place or swung out of the way by tightening or loosening a handle.</p>
         <p class="refpartnum">Part # 8072</p>
      </div>
      <div class="ref" id="articulatingarmriserref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/8073-ARTICULATING-ARM-WITH-RISER-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">Articulating Arm with Riser</p>
         <p class="refpar">The Articulating Arm with Riser can hold as much weight as the Articulating Arm with the added vertical movement. The Click Riser locks the arm vertically in place but allow for easy movement.</p>
         <p class="refpartnum">Part # 8073</p>
      </div>
      <div class="ref" id="rotarywedgereceiverref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/8075-ROTARY-WEDGE-RECEIVER-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">Rotary Wedge Receiver</p>
         <p class="refpar">The Rotary Wedge Receiver works on two pivot points to acheive more flexibility. The spring-loaded locator pin holds your device in place once the wedge slides into place. This receiver is intended to hold lighter weight objects.</p>
         <p class="refpartnum">Part # 8075</p>
      </div>
      <div class="ref" id="lockablewedgereceiverref" >
         <div class="refpicframe"><img class="refpic" src="powerchair renderings/good renderings/photoshopped/refpics/8076-LOCKABLE-WEDGE-RECEIVER-independent-living-wheelchair.jpg"/></div>
         <p class="refparheader">Lockable Wedge Receiver</p>
         <p class="refpar">The Lockable Wedge Receiver pivots on the rear-mounted pilon to tilt your device as desired. The spring-loaded locator pin holds your device in place once the wedge slides into place. This receiver is intended to hold heaver weight objects.</p>
         <p class="refpartnum">Part # 8076</p>
      </div>
      <div  id="inputframe" style="left: 50%; margin-left: -580px; width: 300px; height: 690px; top: 11px; position: absolute; overflow: hidden;">
         <div onmouseover="inputshow(this)" onmouseout="inputhide(this)" id="input" style="width:300px; height:690px; background-color:#E9E9E9; position:absolute; margin-left:-276px;">
            <p id="manualchairinputpar" class="inptlist" style="margin-top:180px;">Manual Wheelchair</p>
            <p id="powerchairinputpar" class="inptlist" style="margin-top:180px;">Powerchair</p>
            <p id="rollingstandinputpar" class="inptlist" style="margin-top:180px;">Rolling Stand with Extended Legs</p>
            <p id="tableclampinputpar" class="inptlist" style="margin-top:180px;">Table Clamp</p>
            <p id="roundtubeinputpar" class="inptlist">1 Inch Round Tube</p>
            <p id="roundverttubeinputpar" class="inptlist">1 Inch Vertical Tube</p>
            <p id="squaretubeinputpar" class="inptlist">1 Inch Square Tube</p>
            <p id="ttrackinputpar" class="inptlist">Single T-Track</p>
            <p id="dttrackinputpar" class="inptlist">Double T-Track</p>
			<p id="squaretubebracketinputpar" class="inptlist">Square Tube Bracket 6278</p>
			<div id="squaretubebrackettosquaretubemovieicon" class="ihidden">
                  <img class="movieiconpic" src="img/play.png" onclick="squaretubebrackettosquaretubevideo(this);" style="margin-left:240px; top:235px;"/>
            </div>
            <p id="directmountinputpar" class="inptlist">Direct Mount Socket 7106</p>
			<div id="directsockettomanualchairmovieicon" class="ihidden1">
                  <img class="movieiconpic" src="img/play.png" onclick="directsockettomanualchairvideo(this);" style="margin-left:240px; top:235px;"/>
            </div>
			<div id="directsockettoninetydegreebracketmovieicon" class="ihidden2">
                  <img class="movieiconpic" src="img/play.png" onclick="directsockettoninetydegreebracketvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
            <p id="serdirectmountinputpar" class="inptlist">Serrated Direct Mount Socket 8163</p>
			<div id="sersockettomanualchairmovieicon" class="ihidden1">
                  <img class="movieiconpic" src="img/play.png" onclick="sersockettomanualchairvideo(this);" style="margin-left:240px; top:235px;"/>
            </div>
			<div id="serdirectsockettoninetydegreebracketmovieicon" class="ihidden2">
                  <img class="movieiconpic" src="img/play.png" onclick="serdirectsockettoninetydegreebracketvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<p id="vertserdirectmountinputpar" class="inptlist">Vert Serrated Direct Mount Socket</p>
			<div id="vertsersockettomanualchairmovieicon" class="ihidden1">
                  <img class="movieiconpic" src="img/play.png" onclick="vertsersockettomanualchairvideo(this);" style="margin-left:240px; top:235px;"/>
            </div>
			<div id="vertserdirectsockettoninetydegreebracketmovieicon" class="ihidden2">
                  <img class="movieiconpic" src="img/play.png" onclick="vertserdirectsockettoninetydegreebracketvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
            <p id="fullringbracketinputpar" class="inptlist">Full Ring Bracket 6146</p>
			<div id="fullringtomanualchairmovieicon" class="ihidden1">
                  <img class="movieiconpic" src="img/play.png" onclick="fullringtomanualchairvideo(this);" style="margin-left:240px; top:235px;"/>
            </div>
            <p id="zeroclearanceinputpar" class="inptlist">Zero Clearance Bracket 6145</p>
			<div id="zeroclearancetomanualchairmovieicon" class="ihidden1">
                  <img class="movieiconpic" src="img/play.png" onclick="zeroclearancetomanualchairvideo(this);" style="margin-left:240px; top:235px;"/>
            </div>
			<p id="ninetydegreebracketinputpar" class="inptlist">90 Degree Bracket</p>
			<div id="ninetydegreebrackettomanualchairmovieicon" class="ihidden1">
                  <img class="movieiconpic" src="img/play.png" onclick="ninetydegreebrackettomanualchairvideo(this);" style="margin-left:240px; top:235px;"/>
            </div>
			<p id="directmounthorizontalinputpar" class="inptlist">Direct Mount Horizontal</p>
			<div id="directmounthorizontaltomanualchairmovieicon" class="ihidden1">
                  <img class="movieiconpic" src="img/play.png" onclick="directmounthorizontaltomanualchairvideo(this);" style="margin-left:240px; top:235px;"/>
            </div>
            <p id="ttrackbracketinputpar" class="inptlist">T-Track Bracket 6446</p>
			<div id="ttrackbrackettottrackmovieicon" class="ihidden1">
                  <img class="movieiconpic" src="img/play.png" onclick="ttrackbrackettottrackvideo(this);" style="margin-left:240px; top:235px;"/>
            </div>
            <p id="ttrackdirectmountinputpar" class="inptlist">T-Track Direct Mount Socket 8115</p>
			<div id="ttrackdirecttottrackmovieicon" class="ihidden1">
                  <img class="movieiconpic" src="img/play.png" onclick="ttrackdirecttottrackvideo(this);" style="margin-left:240px; top:235px;"/>
            </div>
			<div id="ttrackdirecttodttrackmovieicon" class="ihidden1">
                  <img class="movieiconpic" src="img/play.png" onclick="ttrackdirecttodttrackvideo(this);" style="margin-left:240px; top:235px;"/>
            </div>
            <p id="dttrackbracketinputpar" class="inptlist">Double T-Track Bracket 7992</p>
			<div id="dttrackbrackettodttrackmovieicon" class="ihidden1">
                  <img class="movieiconpic" src="img/play.png" onclick="dttrackbrackettodttrackvideo(this);" style="margin-left:240px; top:235px;"/>
            </div>
            <p id="socketbar14inputpar" class="inptlist">14 Inch Socket Bar 6147</p>
			<div id="14socketbartofullringmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="14socketbartofullringmovieiconimg" src="img/play.png" onclick="socketbarstofullringvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="14socketbartozeroclearancemovieicon" class="ihidden2">
                  <img class="movieiconpic" id="14socketbartozeroclearancemovieiconimg" src="img/play.png" onclick="socketbarstozeroclearancevideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="14socketbartotelescopicblockmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="14socketbartotelescopicblockmovieiconimg" src="img/play.png" onclick="socketbarstotelescopicblockvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="14socketbartosquaretubebracketmovieicon" class="ihidden1">
                  <img class="movieiconpic" id="14socketbartosquaretubebracketmovieiconimg" src="img/play.png" onclick="socketbarstosquaretubevideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="14socketbartottrackbracketmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="14socketbartottrackbracketmovieiconimg" src="img/play.png" onclick="socketbarstottrackbracketvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="14socketbartodttrackbracketmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="14socketbartodttrackbracketmovieiconimg" src="img/play.png" onclick="socketbarstodttrackbracketvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
            <p id="socketbar22inputpar" class="inptlist">22 Inch Socket Bar 7635</p>
			<div id="22socketbartofullringmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="22socketbartofullringmovieiconimg" src="img/play.png" onclick="socketbarstofullringvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="22socketbartozeroclearancemovieicon" class="ihidden2">
                  <img class="movieiconpic" id="22socketbartozeroclearancemovieiconimg" src="img/play.png" onclick="socketbarstozeroclearancevideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="22socketbartotelescopicblockmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="22socketbartotelescopicblockmovieiconimg" src="img/play.png" onclick="socketbarstotelescopicblockvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="22socketbartosquaretubebracketmovieicon" class="ihidden1">
                  <img class="movieiconpic" id="22socketbartosquaretubebracketmovieiconimg" src="img/play.png" onclick="socketbarstosquaretubevideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="22socketbartottrackbracketmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="22socketbartottrackbracketmovieiconimg" src="img/play.png" onclick="socketbarstottrackbracketvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="22socketbartodttrackbracketmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="22socketbartodttrackbracketmovieiconimg" src="img/play.png" onclick="socketbarstodttrackbracketvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<p id="sersocketbar14inputpar" class="inptlist">Serrated Socket Bar 14 Inch</p>
			<div id="sersocketbar14tofullringmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="sersocketbar14tofullringmovieiconimg" src="img/play.png" onclick="socketbarstofullringvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="sersocketbar14tozeroclearancemovieicon" class="ihidden2">
                  <img class="movieiconpic" id="sersocketbar14tozeroclearancemovieiconimg" src="img/play.png" onclick="socketbarstozeroclearancevideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="sersocketbartotelescopicblockmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="sersocketbartotelescopicblockmovieiconimg" src="img/play.png" onclick="socketbarstotelescopicblockvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="sersocketbartosquaretubebracketmovieicon" class="ihidden1">
                  <img class="movieiconpic" id="sersocketbartosquaretubebracketmovieiconimg" src="img/play.png" onclick="socketbarstosquaretubevideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="sersocketbartottrackbracketmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="sersocketbartottrackbracketmovieiconimg" src="img/play.png" onclick="socketbarstottrackbracketvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="sersocketbartodttrackbracketmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="sersocketbartodttrackbracketmovieiconimg" src="img/play.png" onclick="socketbarstodttrackbracketvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<p id="telescopicBlockinputpar" class="inptlist">Telescopic Block</p>
			<div id="telescopicBlocktofullringmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="telescopicBlocktofullringmovieiconimg" src="img/play.png" onclick="socketbarstofullringvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="telescopicBlocktozeroclearancemovieicon" class="ihidden2">
                  <img class="movieiconpic" id="telescopicBlocktozeroclearancemovieiconimg" src="img/play.png" onclick="socketbarstozeroclearancevideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
            <p id="vertical8inputpar" class="inptlist">8 Inch Vertical Extension Bar 8081</p>
			<div id="eightinchtotableclampmovieicon" class="ihidden">
                  <img class="movieiconpic" src="img/play.png" onclick="extensionbarstotableclampvideo(this);" style="margin-left:240px; top:205px;"/>
            </div>
			<div id="eightinchtostandmovieicon" class="ihidden">
                  <img class="movieiconpic" src="img/play.png" onclick="extensionbarstostandvideo(this);" style="margin-left:240px; top:205px;"/>
            </div>
			<div id="eightinchtodirectmountmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="eightinchtodirectmountmovieiconimg" src="img/play.png" onclick="eightinchtodirectmountvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="eightinchtoserdirectmountmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="eightinchtoserdirectmountmovieiconimg" src="img/play.png" onclick="eightinchtoserdirectmountvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="eightinchtovertserdirectmountmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="eightinchtovertserdirectmountmovieiconimg" src="img/play.png" onclick="eightinchtovertserdirectmountvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="eightinchtodirectmounthorizontalmovieicon" class="ihidden2">
                  <img class="movieiconpic" src="img/play.png" onclick="extensionbarstodirectmounthorizontalvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="eightinchto14socketbarmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="eightinchto14socketbarmovieiconimg" src="img/play.png" onclick="extensionbarstosocketbarsvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="eightinchto22socketbarmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="eightinchto22socketbarmovieiconimg" src="img/play.png" onclick="extensionbarstosocketbarsvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="eightinchtosersocketbar14movieicon" class="ihidden3">
                  <img class="movieiconpic" id="eightinchtosersocketbar14movieiconimg" src="img/play.png" onclick="extensionbarstosocketbarsvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="eightinchtottrackdirectmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="eightinchtottrackdirectmovieiconimg" src="img/play.png" onclick="extensionbarstottrackdirectvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
            <p id="vertical16inputpar" class="inptlist">16 Inch Vertical Extension Bar 8216</p>
			<div id="sixteeninchtotableclampmovieicon" class="ihidden">
                  <img class="movieiconpic" src="img/play.png" onclick="extensionbarstotableclampvideo(this);" style="margin-left:240px; top:205px;"/>
            </div>
			<div id="sixteeninchtostandmovieicon" class="ihidden">
                  <img class="movieiconpic" src="img/play.png" onclick="extensionbarstostandvideo(this);" style="margin-left:240px; top:205px;"/>
            </div>
			<div id="sixteeninchtodirectmountmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="sixteeninchtodirectmountmovieiconimg" src="img/play.png" onclick="sixteeninchtodirectmountvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="sixteeninchtoserdirectmountmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="sixteeninchtoserdirectmountmovieiconimg" src="img/play.png" onclick="sixteeninchtoserdirectmountvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="sixteeninchtovertserdirectmountmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="sixteeninchtovertserdirectmountmovieiconimg" src="img/play.png" onclick="sixteeninchtovertserdirectmountvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="sixteeninchtodirectmounthorizontalmovieicon" class="ihidden2">
                  <img class="movieiconpic" src="img/play.png" onclick="extensionbarstodirectmounthorizontalvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="sixteeninchto14socketbarmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="sixteeninchto14socketbarmovieiconimg" src="img/play.png" onclick="extensionbarstosocketbarsvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="sixteeninchto22socketbarmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="sixteeninchto22socketbarmovieiconimg" src="img/play.png" onclick="extensionbarstosocketbarsvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="sixteeninchtosersocketbar14movieicon" class="ihidden3">
                  <img class="movieiconpic" id="sixteeninchtosersocketbar14movieiconimg" src="img/play.png" onclick="extensionbarstosocketbarsvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="sixteeninchtottrackdirectmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="sixteeninchtottrackdirectmovieiconimg" src="img/play.png" onclick="extensionbarstottrackdirectvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
            <p id="vertical4inputpar" class="inptlist">4 Inch Vertical Bar 8385</p>
			<div id="fourinchtotableclampmovieicon" class="ihidden">
                  <img class="movieiconpic" src="img/play.png" onclick="fourinchtotableclampvideo(this);" style="margin-left:240px; top:205px;"/>
            </div>
			<div id="fourinchtostandmovieicon" class="ihidden">
                  <img class="movieiconpic" src="img/play.png" onclick="verticalbarstostandvideo(this);" style="margin-left:240px; top:205px;"/>
            </div>
			<div id="fourinchtodirectmountmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="fourinchtodirectmountmovieiconimg" src="img/play.png" onclick="fourinchtodirectmountvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="fourinchtoserdirectmountmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="fourinchtoserdirectmountmovieiconimg" src="img/play.png" onclick="fourinchtoserdirectmount(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="fourinchtovertserdirectmountmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="fourinchtovertserdirectmountmovieiconimg" src="img/play.png" onclick="fourinchtovertserdirectmount(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="fourinchtodirectmounthorizontalmovieicon" class="ihidden2">
                  <img class="movieiconpic" src="img/play.png" onclick="verticalbarstodirectmounthorizontalvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="fourinchtoeightinchmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="fourinchtoeightinchmovieiconimg" src="img/play.png" onclick="fourinchtoeightinchvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="fourinchtosixteeninchmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="fourinchtosixteeninchmovieiconimg" src="img/play.png" onclick="fourinchtosixteeninchvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="verticalbar4to14socketbarmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="verticalbar4to14socketbarmovieiconimg" src="img/play.png" onclick="fourinchtosocketbarsvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="verticalbar4to22socketbarmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="verticalbar4to22socketbarmovieiconimg" src="img/play.png" onclick="fourinchtosocketbarsvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="verticalbar4tosersocketbar14movieicon" class="ihidden4">
                  <img class="movieiconpic" id="verticalbar4tosersocketbar14movieiconimg" src="img/play.png" onclick="fourinchtosocketbarsvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="verticalbar4tottrackdirectmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="verticalbar4tottrackdirectmovieiconimg" src="img/play.png" onclick="verticalbarstottrackdirectvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="fourinchtosixteeninchviasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="fourinchtosixteeninchviasocketbarsmovieiconimg" src="img/play.png" onclick="fourinchtosixteeninchviasocketbarsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="fourinchtosixteeninchvia22socketbarmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="fourinchtosixteeninchvia22socketbarmovieiconimg" src="img/play.png" onclick="fourinchtosixteeninchviasocketbarsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="fourinchtosixteeninchviasersocketbar14movieicon" class="ihidden4">
                  <img class="movieiconpic" id="fourinchtosixteeninchviasersocketbar14movieiconimg" src="img/play.png" onclick="fourinchtosixteeninchviasocketbarsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="fourinchtoeightinchviasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="fourinchtoeightinchviasocketbarsmovieiconimg" src="img/play.png" onclick="fourinchtoeightinchviasocketbarsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="fourinchtoeightinchvia22socketbarmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="fourinchtoeightinchvia22socketbarmovieiconimg" src="img/play.png" onclick="fourinchtoeightinchviasocketbarsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="fourinchtoeightinchviasersocketbar14movieicon" class="ihidden4">
                  <img class="movieiconpic" id="fourinchtoeightinchviasersocketbar14movieiconimg" src="img/play.png" onclick="fourinchtoeightinchviasocketbarsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
            <p id="vertical6inputpar" class="inptlist">6 Inch Vertical Bar 8071</p>
			<div id="sixinchtotableclampmovieicon" class="ihidden">
                  <img class="movieiconpic" src="img/play.png" onclick="fourinchtotableclampvideo(this);" style="margin-left:240px; top:205px;"/>
            </div>
			<div id="sixinchtostandmovieicon" class="ihidden">
                  <img class="movieiconpic" src="img/play.png" onclick="verticalbarstostandvideo(this);" style="margin-left:240px; top:205px;"/>
            </div>
			<div id="sixinchtodirectmountmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="sixinchtodirectmountmovieiconimg" src="img/play.png" onclick="sixinchtodirectmountvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="sixinchtoserdirectmountmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="sixinchtoserdirectmountmovieiconimg" src="img/play.png" onclick="sixinchtoserdirectmountvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="sixinchtovertserdirectmountmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="sixinchtovertserdirectmountmovieiconimg" src="img/play.png" onclick="sixinchtovertserdirectmountvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="sixinchtodirectmounthorizontalmovieicon" class="ihidden2">
                  <img class="movieiconpic" src="img/play.png" onclick="verticalbarstodirectmounthorizontalvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="sixinchtoeightinchmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="sixinchtoeightinchmovieiconimg" src="img/play.png" onclick="sixinchtoeightinchvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="sixinchtosixteeninchmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="sixinchtosixteeninchmovieiconimg" src="img/play.png" onclick="sixinchtosixteeninchvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="verticalbar6to14socketbarmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="verticalbar6to14socketbarmovieiconimg" src="img/play.png" onclick="sixinchtosocketbarsvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="verticalbar6to22socketbarmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="verticalbar6to22socketbarmovieiconimg" src="img/play.png" onclick="sixinchtosocketbarsvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="verticalbar6tosersocketbar14movieicon" class="ihidden4">
                  <img class="movieiconpic" id="verticalbar6tosersocketbar14movieiconimg" src="img/play.png" onclick="sixinchtosocketbarsvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="verticalbar6tottrackdirectmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="verticalbar6tottrackdirectmovieiconimg" src="img/play.png" onclick="verticalbarstottrackdirectvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="sixinchtosixteeninchviasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="sixinchtosixteeninchviasocketbarsmovieiconimg" src="img/play.png" onclick="sixinchtosixteeninchviasocketbarsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="sixinchtosixteeninchvia22socketbarmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="sixinchtosixteeninchvia22socketbarmovieiconimg" src="img/play.png" onclick="sixinchtosixteeninchviasocketbarsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="sixinchtosixteeninchviasersocketbar14movieicon" class="ihidden4">
                  <img class="movieiconpic" id="sixinchtosixteeninchviasersocketbar14movieiconimg" src="img/play.png" onclick="sixinchtosixteeninchviasocketbarsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="sixinchtoeightinchviasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="sixinchtoeightinchviasocketbarsmovieiconimg" src="img/play.png" onclick="sixinchtoeightinchviasocketbarsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="sixinchtoeightinchvia22socketbarmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="sixinchtoeightinchvia22socketbarmovieiconimg" src="img/play.png" onclick="sixinchtoeightinchviasocketbarsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="sixinchtoeightinchviasersocketbar14movieicon" class="ihidden4">
                  <img class="movieiconpic" id="sixinchtoeightinchviasersocketbar14movieiconimg" src="img/play.png" onclick="sixinchtoeightinchviasocketbarsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
            <p id="vertical12inputpar" class="inptlist">12 Inch Vertical Bar 8070</p>
			<div id="twelveinchtotableclampmovieicon" class="ihidden">
                  <img class="movieiconpic" src="img/play.png" onclick="fourinchtotableclampvideo(this);" style="margin-left:240px; top:205px;"/>
            </div>
			<div id="twelveinchtostandmovieicon" class="ihidden">
                  <img class="movieiconpic" src="img/play.png" onclick="verticalbarstostandvideo(this);" style="margin-left:240px; top:205px;"/>
            </div>
			<div id="twelveinchtodirectmountmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="twelveinchtodirectmountmovieiconimg" src="img/play.png" onclick="twelveinchtodirectmountvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="twelveinchtoserdirectmountmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="twelveinchtoserdirectmountmovieiconimg" src="img/play.png" onclick="twelveinchtoserdirectmountvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="twelveinchtovertserdirectmountmovieicon" class="ihidden2">
                  <img class="movieiconpic" id="twelveinchtovertserdirectmountmovieiconimg" src="img/play.png" onclick="twelveinchtovertserdirectmountvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="twelveinchtodirectmounthorizontalmovieicon" class="ihidden2">
                  <img class="movieiconpic" src="img/play.png" onclick="verticalbarstodirectmounthorizontalvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="twelveinchtoeightinchmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="twelveinchtoeightinchmovieiconimg" src="img/play.png" onclick="twelveinchtoeightinchvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="twelveinchtosixteeninchmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="twelveinchtosixteeninchmovieiconimg" src="img/play.png" onclick="twelveinchtosixteeninchvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="verticalbar12to14socketbarmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="verticalbar12to14socketbarmovieiconimg" src="img/play.png" onclick="twelveinchtosocketbarsvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="verticalbar12to22socketbarmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="verticalbar12to22socketbarmovieiconimg" src="img/play.png" onclick="twelveinchtosocketbarsvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="verticalbar12tosersocketbar14movieicon" class="ihidden4">
                  <img class="movieiconpic" id="verticalbar12tosersocketbar14movieiconimg" src="img/play.png" onclick="twelveinchtosocketbarsvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="verticalbar12tottrackdirectmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="verticalbar12tottrackdirectmovieiconimg" src="img/play.png" onclick="verticalbarstottrackdirectvideo(this);" style="margin-left:240px; top:267px;"/>
            </div>
			<div id="twelveinchtosixteeninchviasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="twelveinchtosixteeninchviasocketbarsmovieiconimg" src="img/play.png" onclick="twelveinchtosixteeninchviasocketbarsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="twelveinchtosixteeninchvia22socketbarmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="twelveinchtosixteeninchvia22socketbarmovieiconimg" src="img/play.png" onclick="twelveinchtosixteeninchviasocketbarsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="twelveinchtosixteeninchviasersocketbar14movieicon" class="ihidden4">
                  <img class="movieiconpic" id="twelveinchtosixteeninchviasersocketbar14movieiconimg" src="img/play.png" onclick="twelveinchtosixteeninchviasocketbarsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="twelveinchtoeightinchviasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="twelveinchtoeightinchviasocketbarsmovieiconimg" src="img/play.png" onclick="twelveinchtoeightinchviasocketbarsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="twelveinchtoeightinchvia22socketbarmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="twelveinchtoeightinchvia22socketbarmovieiconimg" src="img/play.png" onclick="twelveinchtoeightinchviasocketbarsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="twelveinchtoeightinchviasersocketbar14movieicon" class="ihidden4">
                  <img class="movieiconpic" id="twelveinchtoeightinchviasersocketbar14movieiconimg" src="img/play.png" onclick="twelveinchtoeightinchviasocketbarsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
            <p id="verticaladjinputpar" class="inptlist">Adjustable Vertical Bar 8114</p>
            <p id="m2inputpar" class="inptlist">M2 Arm 8074</p>
			<div id="m2tov4movieicon" class="ihidden4">
                  <img class="movieiconpic" id="m2tov4movieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="m2tov6movieicon" class="ihidden4">
                  <img class="movieiconpic" id="m2tov6movieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="m2tov12movieicon" class="ihidden4">
                  <img class="movieiconpic" id="m2tov12movieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="m2tov4directmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="m2tov4directmovieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="m2tov6directmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="m2tov6directmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="m2tov12directmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="m2tov12directmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="m2tov4directviasocketbarsmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="m2tov4directviasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="m2tov6directviasocketbarsmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="m2tov6directviasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="m2tov12directviasocketbarsmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="m2tov12directviasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov12video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="m2tov4viasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="m2tov4viasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="m2tov6viasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="m2tov6viasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="m2tov12viasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="m2tov12viasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov12video(this);" style="margin-left:240px; top:360px;"/>
            </div>
            <p id="m2xinputpar" class="inptlist">M2X Arm 8069</p>
			<div id="m2xtov4movieicon" class="ihidden4">
                  <img class="movieiconpic" id="m2xtov4movieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="m2xtov6movieicon" class="ihidden4">
                  <img class="movieiconpic" id="m2xtov6movieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="m2xtov12movieicon" class="ihidden4">
                  <img class="movieiconpic" id="m2xtov12movieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="m2xtov4directmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="m2xtov4directmovieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="m2xtov6directmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="m2xtov6directmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="m2xtov12directmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="m2xtov12directmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="m2xtov4directviasocketbarsmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="m2xtov4directviasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="m2xtov6directviasocketbarsmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="m2xtov6directviasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="m2xtov12directviasocketbarsmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="m2xtov12directviasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov12video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="m2xtov4viasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="m2xtov4viasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="m2xtov6viasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="m2xtov6viasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="m2xtov12viasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="m2xtov12viasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov12video(this);" style="margin-left:240px; top:360px;"/>
            </div>
            <p id="m2maxinputpar" class="inptlist">M2 Max Arm 8127</p>
			<div id="m2maxtov4movieicon" class="ihidden4">
                  <img class="movieiconpic" id="m2maxtov4movieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="m2maxtov6movieicon" class="ihidden4">
                  <img class="movieiconpic" id="m2maxtov6movieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="m2maxtov12movieicon" class="ihidden4">
                  <img class="movieiconpic" id="m2maxtov12movieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="m2maxtov4directmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="m2maxtov4directmovieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="m2maxtov6directmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="m2maxtov6directmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="m2maxtov12directmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="m2maxtov12directmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="m2maxtov4directviasocketbarsmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="m2maxtov4directviasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="m2maxtov6directviasocketbarsmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="m2maxtov6directviasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="m2maxtov12directviasocketbarsmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="m2maxtov12directviasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov12video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="m2maxtov4viasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="m2maxtov4viasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="m2maxtov6viasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="m2maxtov6viasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="m2maxtov12viasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="m2maxtov12viasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov12video(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<p id="articulatinginputpar" class="inptlist">Articulating Arm 8072</p>
			<div id="articulatingtov4movieicon" class="ihidden4">
                  <img class="movieiconpic" id="articulatingtov4movieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="articulatingtov6movieicon" class="ihidden4">
                  <img class="movieiconpic" id="articulatingtov6movieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="articulatingtov12movieicon" class="ihidden4">
                  <img class="movieiconpic" id="articulatingtov12movieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="articulatingtov4directmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="articulatingtov4directmovieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="articulatingtov6directmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="articulatingtov6directmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="articulatingtov12directmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="articulatingtov12directmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="articulatingtov4directviasocketbarsmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="articulatingtov4directviasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="articulatingtov6directviasocketbarsmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="articulatingtov6directviasocketbarsmovieiconimg"  src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="articulatingtov12directviasocketbarsmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="articulatingtov12directviasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov12video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="articulatingtov4viasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="articulatingtov4viasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="articulatingtov6viasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="articulatingtov6viasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="articulatingtov12viasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="articulatingtov12viasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov12video(this);" style="margin-left:240px; top:360px;"/>
            </div>
            <p id="articulatingriserinputpar" class="inptlist">Articulating Arm with Riser 8073</p>
			<div id="articulatingrisertov4movieicon" class="ihidden4">
                  <img class="movieiconpic" id="articulatingrisertov4movieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="articulatingrisertov6movieicon" class="ihidden4">
                  <img class="movieiconpic" id="articulatingrisertov6movieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="articulatingrisertov12movieicon" class="ihidden4">
                  <img class="movieiconpic" id="articulatingrisertov12movieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="articulatingrisertov4directmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="articulatingrisertov4directmovieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="articulatingrisertov6directmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="articulatingrisertov6directmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="articulatingrisertov12directmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="articulatingrisertov12directmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="articulatingrisertov4directviasocketbarsmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="articulatingrisertov4directviasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="articulatingrisertov6directviasocketbarsmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="articulatingrisertov6directviasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="articulatingrisertov12directviasocketbarsmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="articulatingrisertov12directviasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov12video(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="articulatingrisertov4viasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="articulatingrisertov4viasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov4video(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="articulatingrisertov6viasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="articulatingrisertov6viasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov6video(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="articulatingrisertov12viasocketbarsmovieicon" class="ihidden4">
                  <img class="movieiconpic" id="articulatingrisertov12viasocketbarsmovieiconimg" src="img/play.png" onclick="mountingarmstov12video(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<p id="customarminputpar" class="inptlist">Custom Arm</p>
			<div id="customarmtomountingmovieicon" class="ihidden">
                  <img class="movieiconpic" id="customarmtomountingmovieiconimg" src="img/play.png" onclick="customarmvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="customarmtomountingdirectmovieicon" class="ihidden">
                  <img class="movieiconpic" id="customarmtomountingdirectmovieiconimg" src="img/play.png" onclick="customarmvideo(this);" style="margin-left:240px; top:300px;"/>
            </div>
			<div id="customarmtomountingviasocketbarsmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="customarmtomountingviasocketbarsmovieiconimg" src="img/play.png" onclick="customarmvideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="customarmtomountingviasocketbarsdirectmovieicon" class="ihidden3">
                  <img class="movieiconpic" id="customarmtomountingviasocketbarsdirectmovieiconimg" src="img/play.png" onclick="customarmvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
            <p id="lockableinputpar" class="inptlist">Lockable Wedge Receiver 8076</p>
			<div id="lockabletomountingarmsmovieicon" class="ihidden5">
                  <img class="movieiconpic" id="lockabletomountingarmsmovieiconimg" src="img/play.png" onclick="lockabletomountingarmsvideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="lockabletomountingarmsdirectmovieicon" class="ihidden5">
                  <img class="movieiconpic" id="lockabletomountingarmsdirectmovieiconimg" src="img/play.png" onclick="lockabletomountingarmsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="lockabletomountingarmsviasocketbarsmovieicon" class="ihidden5">
                  <img class="movieiconpic" id="lockabletomountingarmsviasocketbarsmovieiconimg" src="img/play.png" onclick="lockabletomountingarmsvideo(this);" style="margin-left:240px; top:390px;"/>
            </div>
			<div id="lockabletomountingarmsviasocketbarsdirectmovieicon" class="ihidden5">
                  <img class="movieiconpic" id="lockabletomountingarmsviasocketbarsdirectmovieiconimg" src="img/play.png" onclick="lockabletomountingarmsvideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
            <p id="rotaryinputpar" class="inptlist">Rotary Wedge Receiver 8075</p>
			<div id="rotarytomountingarmsmovieicon" class="ihidden5">
                  <img class="movieiconpic" id="rotarytomountingarmsmovieiconimg" src="img/play.png" onclick="rotarytomountingarmsvideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="rotarytomountingarmsdirectmovieicon" class="ihidden5">
                  <img class="movieiconpic" id="rotarytomountingarmsdirectmovieiconimg" src="img/play.png" onclick="rotarytomountingarmsvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="rotarytomountingarmsviasocketbarsmovieicon" class="ihidden5">
                  <img class="movieiconpic" id="rotarytomountingarmsviasocketbarsmovieiconimg" src="img/play.png" onclick="rotarytomountingarmsvideo(this);" style="margin-left:240px; top:390px;"/>
            </div>
			<div id="rotarytomountingarmsviasocketbarsdirectmovieicon" class="ihidden5">
                  <img class="movieiconpic" id="rotarytomountingarmsviasocketbarsdirectmovieiconimg" src="img/play.png" onclick="rotarytomountingarmsvideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			 <p id="tabletinputpar" class="inptlist">Tablet</p>
			 <div id="tablettolockablemovieicon" class="ihidden6">
                  <img class="movieiconpic" id="tablettolockablemovieiconimg" src="img/play.png" onclick="devicestolockablevideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="tablettorotarymovieicon" class="ihidden6">
                  <img class="movieiconpic" id="tablettorotarymovieiconimg" src="img/play.png" onclick="devicestorotaryvideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="tablettowedgemountmovieicon" class="ihidden6">
                  <img class="movieiconpic" id="tablettowedgemountmovieiconimg" src="img/play.png" onclick="devicestowedgemountvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			 <div id="tablettolockable2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="tablettolockable2movieiconimg" src="img/play.png" onclick="devicestolockablevideo(this);" style="margin-left:240px; top:395px;"/>
            </div>
			<div id="tablettorotary2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="tablettorotary2movieiconimg" src="img/play.png" onclick="devicestorotaryvideo(this);" style="margin-left:240px; top:395px;"/>
            </div>
			<div id="tablettowedgemount2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="tablettowedgemount2movieiconimg" src="img/play.png" onclick="devicestowedgemountvideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			 <p id="laptopplateinputpar" class="inptlist">Laptop Plate</p>
			  <div id="laptopplatetolockablemovieicon" class="ihidden6">
                  <img class="movieiconpic" id="laptopplatetolockablemovieiconimg" src="img/play.png" onclick="devicestolockablevideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="laptopplatetorotarymovieicon" class="ihidden6">
                  <img class="movieiconpic" id="laptopplatetorotarymovieiconimg" src="img/play.png" onclick="devicestorotaryvideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="laptopplatetowedgemountmovieicon" class="ihidden6">
                  <img class="movieiconpic" id="laptopplatetowedgemountmovieiconimg" src="img/play.png" onclick="devicestowedgemountvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			 <div id="laptopplatetolockable2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="laptopplatetolockable2movieiconimg" src="img/play.png" onclick="devicestolockablevideo(this);" style="margin-left:240px; top:395px;"/>
            </div>
			<div id="laptopplatetorotary2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="laptopplatetorotary2movieiconimg" src="img/play.png" onclick="devicestorotaryvideo(this);" style="margin-left:240px; top:395px;"/>
            </div>
			<div id="laptopplatetowedgemount2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="laptopplatetowedgemount2movieiconimg" src="img/play.png" onclick="devicestowedgemountvideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			 <p id="ipadairplateinputpar" class="inptlist">Ipad Air Plate</p>
			 <div id="ipadairplatetolockablemovieicon" class="ihidden6">
                  <img class="movieiconpic" id="ipadairplatetolockablemovieiconimg" src="img/play.png" onclick="devicestolockablevideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="ipadairplatetorotarymovieicon" class="ihidden6">
                  <img class="movieiconpic" id="ipadairplatetorotarymovieiconimg" src="img/play.png" onclick="devicestorotaryvideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="ipadairplatetowedgemountmovieicon" class="ihidden6">
                  <img class="movieiconpic" id="ipadairplatetowedgemountmovieiconimg" src="img/play.png" onclick="devicestowedgemountvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="ipadairplatetolockable2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="ipadairplatetolockable2movieiconimg" src="img/play.png" onclick="devicestolockablevideo(this);" style="margin-left:240px; top:395px;"/>
            </div>
			<div id="ipadairplatetorotary2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="ipadairplatetorotary2movieiconimg" src="img/play.png" onclick="devicestorotaryvideo(this);" style="margin-left:240px; top:395px;"/>
            </div>
			<div id="ipadairplatetowedgemount2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="ipadairplatetowedgemount2movieiconimg" src="img/play.png" onclick="devicestowedgemountvideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			 <p id="ipadaircradleinputpar" class="inptlist">Ipad Air Cradle-Otter</p>
			 <div id="ipadaircradletolockablemovieicon" class="ihidden6">
                  <img class="movieiconpic" id="ipadaircradletolockablemovieiconimg" src="img/play.png" onclick="devicestolockablevideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="ipadaircradletorotarymovieicon" class="ihidden6">
                  <img class="movieiconpic" id="ipadaircradletorotarymovieiconimg" src="img/play.png" onclick="devicestorotaryvideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="ipadaircradletowedgemountmovieicon" class="ihidden6">
                  <img class="movieiconpic" id="ipadaircradletowedgemountmovieiconimg" src="img/play.png" onclick="devicestowedgemountvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="ipadaircradletolockable2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="ipadaircradletolockable2movieiconimg" src="img/play.png" onclick="devicestolockablevideo(this);" style="margin-left:240px; top:395px;"/>
            </div>
			<div id="ipadaircradletorotary2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="ipadaircradletorotary2movieiconimg" src="img/play.png" onclick="devicestorotaryvideo(this);" style="margin-left:240px; top:395px;"/>
            </div>
			<div id="ipadaircradletowedgemount2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="ipadaircradletowedgemount2movieiconimg" src="img/play.png" onclick="devicestowedgemountvideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			 <p id="literacyplateinputpar" class="inptlist">Literacy Plate</p>
			 <div id="literacyplatetolockablemovieicon" class="ihidden6">
                  <img class="movieiconpic" id="literacyplatetolockablemovieiconimg" src="img/play.png" onclick="devicestolockablevideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="literacyplatetorotarymovieicon" class="ihidden6">
                  <img class="movieiconpic" id="literacyplatetorotarymovieiconimg" src="img/play.png" onclick="devicestorotaryvideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="literacyplatetowedgemountmovieicon" class="ihidden6">
                  <img class="movieiconpic" id="literacyplatetowedgemountmovieiconimg" src="img/play.png" onclick="devicestowedgemountvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="literacyplatetolockable2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="literacyplatetolockable2movieiconimg" src="img/play.png" onclick="devicestolockablevideo(this);" style="margin-left:240px; top:395px;"/>
            </div>
			<div id="literacyplatetorotary2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="literacyplatetorotary2movieiconimg" src="img/play.png" onclick="devicestorotaryvideo(this);" style="margin-left:240px; top:395px;"/>
            </div>
			<div id="literacyplatetowedgemount2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="literacyplatetowedgemount2movieiconimg" src="img/play.png" onclick="devicestowedgemountvideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			 <p id="camerainputpar" class="inptlist">Camera</p>
			<div id="cameratolockablemovieicon" class="ihidden6">
                  <img class="movieiconpic" id="cameratolockablemovieiconimg" src="img/play.png" onclick="devicestolockablevideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="cameratorotarymovieicon" class="ihidden6">
                  <img class="movieiconpic" id="cameratorotarymovieiconimg" src="img/play.png" onclick="devicestorotaryvideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="cameratowedgemountmovieicon" class="ihidden6">
                  <img class="movieiconpic" id="cameratowedgemountmovieiconimg" src="img/play.png" onclick="devicestowedgemountvideo(this);" style="margin-left:240px; top:330px;"/>
            </div>
			<div id="cameratolockable2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="cameratolockable2movieiconimg" src="img/play.png" onclick="devicestolockablevideo(this);" style="margin-left:240px; top:395px;"/>
            </div>
			<div id="cameratorotary2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="cameratorotary2movieiconimg" src="img/play.png" onclick="devicestorotaryvideo(this);" style="margin-left:240px; top:395px;"/>
            </div>
			<div id="cameratowedgemount2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="cameratowedgemount2movieiconimg" src="img/play.png" onclick="devicestowedgemountvideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			 <p id="cupholderinputpar" class="inptlist">Cup Holder</p>
			 <div id="cupholdertolockablemovieicon" class="ihidden6">
                  <img class="movieiconpic" id="cupholdertolockablemovieiconimg" src="img/play.png" onclick="devicestolockablevideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="cupholdertorotarymovieicon" class="ihidden6">
                  <img class="movieiconpic" id="cupholdertorotarymovieiconimg" src="img/play.png" onclick="devicestorotaryvideo(this);" style="margin-left:240px; top:360px;"/>
            </div>
			<div id="cupholdertolockable2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="cupholdertolockable2movieiconimg" src="img/play.png" onclick="devicestolockablevideo(this);" style="margin-left:240px; top:395px;"/>
            </div>
			<div id="cupholdertorotary2movieicon" class="ihidden6">
                  <img class="movieiconpic" id="cupholdertorotary2movieiconimg" src="img/play.png" onclick="devicestorotaryvideo(this);" style="margin-left:240px; top:395px;"/>
            </div>
            <img style="width:22px; position:absolute; margin-left:275px; top:50%; margin-top:-77.5px;" src="powerchair renderings/good renderings/photoshopped/list pics/your-selections-independent-living-wheelchairs.png" />
         </div>
      </div>
      <div id="compatiblepics" style="display:none; position:absolute; width:1000px; height:715px; left:50%; margin-left:-590px; overflow:hidden; z-index:-2;">
         <img id="rollingstandpic" src="powerchair renderings/good renderings/rolling-floor-stand-independent-living-wheelchair.png" style="display:none; z-index:-2; position:absolute; height:680px; left:50%; margin-left:-607.25px; top:50px;"/>
         <img id="walltrackpic" src="powerchair renderings/good renderings/wall-track-independent-living-wheelchair.png" style="display:none; z-index:-2; position:absolute; height:680px; left:50%; margin-left:-557.25px; top:44.5px;"/>
         <img id="tableclamppic" src="powerchair renderings/good renderings/desk.png" style="display:none; z-index:-2; position:absolute; height:680px; left:50%; margin-left:-617.5px; top:33px;"/>
      </div>
      <div id="inputparend" style="top:25px; height: 420px; overflow:hidden; left:50%; margin-left:300px; position:absolute; display:none; width:255px; z-index:1;"></div>
      <div id="helpbubblebackground" style="height:100%; width:100%; position:absolute; background-color:transparent; display:none;"></div>
   </div>
   
   
   <div class="helpbubble" id="helpbubble1" style="margin-left:-632px; margin-top:600px;">
      <img style="width:350px; position:absolute;" src="menu-lines-for-bys-left.png" />
      <p class="helppar">Move your mouse here to see what you have selected so far.</p>
      <p onclick="ok(this)" class="helpok">OK</p>
   </div>
   <div class="helpbubble" id="helpbubble2" style="margin-left:175px; margin-top:470px;">
      <img style="width:350px; position:absolute;" src="menu-lines-for-bys.png" />
      <p class="helppar" style="margin-right:5px;">Choose one of these options by clicking on it. Exit this pop-up by clicking "OK".</p>
      <p onclick="ok(this)" class="helpok">OK</p>
   </div>
   <div class="helpbubble" id="helpbubble3" style="margin-left:281px; margin-top:550px;">
      <img style="width:350px; position:absolute;" src="menu-lines-for-bys.png" />
      <p class="helppar">Move your mouse over these bars to see more information about each item.</p>
      <p onclick="ok(this)" class="helpok">OK</p>
   </div>
   <div class="helpbubble" id="helpbubble4" style="margin-left:183px; margin-top:680px;">
      <img style="width:350px; position:absolute;" src="menu-lines-for-bys-bottom.png" />
      <p class="helpparbottom">If you want to undo a selection or start over, your navigation buttons are here.</p>
      <p onclick="ok(this)" class="helpokbottom">OK</p>
   </div>
   <div class="helpbubble" id="helpbubble5" style="margin-left:-820px; margin-top:600px;">
      <img style="width:350px; position:absolute;" src="menu-lines-for-bys.png" />
      <p class="helppar">Lastly, here is a list of everything you selected with applicable part numbers.</p>
      <p onclick="ok(this)" class="helpok">OK</p>
   </div>
   <div id="specificationsscroll" class="footer" style="top:1000px;">Ideas for Independent Living 2014</div>
</div>

<!-- Video links-->
   
<div class="videobox" id="directsockettomanualchair">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/1002-2001-0001b.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"> <img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="directsockettoninetydegreebracket">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/2011-2001-0051.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"> <img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
  <div class="videobox" id="serdirectsockettoninetydegreebracket">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/2011-2002-0052.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"> <img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
  <div class="videobox" id="vertserdirectsockettoninetydegreebracket">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/2011-2015-0053--.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"> <img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="sersockettomanualchair">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/1001-2002-0002b.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="fourinchtodirectmount">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0032.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
  <div class="videobox" id="fourinchtoserdirectmount">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0034.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="fourinchtovertserdirectmount">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/2015-3005-0068.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="verticalbarstodirectmounthorizontal">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/2014-3005-0065.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="extensionbarstodirectmounthorizontal">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/2014-2025-0064.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="eightinchtoserdirectmount">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0033.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="eightinchtovertserdirectmount">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/2015-2025-0067.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="sixinchtodirectmount">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0032.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="twelveinchtodirectmount">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0032.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
  <div class="videobox" id="eightinchtodirectmount">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0032.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="fourinchtoeightinch">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0093.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="sixteeninchtodirectmount">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0031.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="sixinchtoeightinch">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0093.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="laptopplatetolockable">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4002-5003-0116.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="laptopplatetorotary">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4001-5003-0144.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="twelveinchtoeightinch">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0093.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
  <div class="videobox" id="fourinchtosixteeninch">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0093.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="sixinchtosixteeninch">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0093.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="twelveinchtosixteeninch">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0093.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="mountingarmstov4">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/3005-3011-0096.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="mountingarmstov6">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/3005-3011-0096.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="mountingarmstov12">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/3005-3011-0096.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="lockabletomountingarms">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/3011-4002-0099.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="rotarytomountingarms">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/3011-4001-0098.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="tablettorotary">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4001-5001-0107.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="tablettolockable">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4002-5001-0114.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="ipadairplatetolockable">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4002-5005-0118.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="ipadairplatetorotary">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4001-5005-0109.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="ipadaircradletolockable">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4002-5006-0119.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="ipadaircradletorotary">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4001-5006-0110.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="literacyplatetolockable">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4002-5007-0120.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="literacyplatetorotary">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4001-5007-0111.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="cameratolockable">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4002-5008-0121c.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="cameratorotary">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4001-5008-0112c.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="tablettowedgemount">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4004-5001-132c.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="laptopplatetowedgemount">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4004-5003-0134c.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="ipadairplatetowedgemount">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4004-5005-0136c.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="ipadaircradletowedgemount">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4004-5006-0137c.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="literacyplatetowedgemount">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4004-5007-0138c.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="cameratowedgemount">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4004-5008-0139c.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="fullringtomanualchair">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/1002-2004-0003b.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="zeroclearancetomanualchair">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/1006-2005-0019b.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="ninetydegreebrackettomanualchair">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/1002-2011-0009b.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="directmounthorizontaltomanualchair">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/1002-2014-0010b.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="cupholdertolockable">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4002-5009-0122.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="cupholdertorotary">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/4001-5009-0113.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="socketbarstofullring">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0039.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="socketbarstosquaretube">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0036.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="telescopictofullring">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/2004-2017-0038.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="socketbarstozeroclearance">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0040.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="telescopictozeroclearance">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/2005-2017-0041.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="socketbarstotelescopicblock">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/2017-2018-0073c.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="sersocketbarstotelescopicblock">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/2017-2020-0074c.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="fourinchtosocketbars">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0076.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="fourinchtosersocketbar">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/2020-3005-0079.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="extensionbarstosocketbars">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0075.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="extensionbarstosersocketbar14">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/2020-2025-0078.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="fourinchtotableclamp">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/2009-3005-0056.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="extensionbarstotableclamp">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/2009-2025-0049.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="verticalbarstostand">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/2021-3005-0082.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
<div class="videobox" id="extensionbarstostand">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/2021-2025-0081.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="squaretubebrackettosquaretube">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/1008-2003-0025.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="ttrackbrackettottrack">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/1009-2006-0026b.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="ttrackdirecttottrack">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/1009-2008-0027.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="dttrackbrackettodttrack">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/1010-2007-0029b.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="ttrackdirecttodttrack">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/1010-2008-0030.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="socketbarstottrackbracket">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0043.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="socketbarstodttrackbracket">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0046.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="verticalbarstottrackdirect">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0054.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>
 <div class="videobox" id="extensionbarstottrackdirect">
      <video style="height:100%; width:100%" frameborder="0" controls>
         <source src="videos/byos/0048.mp4" type="video/mp4"></source>
      </video>
      <div onclick="$('.videobox').hide();"><img src="what's new page/exit-icon.jpg" class="exiticon" /></div>
 </div>

<div id="languagebackdrop" style="display:none; height:100%; width:100%; position:fixed; background-color:#FFF;  z-index:99; top:0px; left:0px; opacity:0.75;"></div>
<div  id="chooselanguage" style="top:50%; margin-top:-150px; position:fixed; height:300px; width:500px; border-style:solid; border-width:thin;" >
   <p id="chooselanguagepar" style=" position:absolute; font-family:'Roboto', 'sans-serif'; font-size:36px; text-align:center; margin-top:50px; width:400px; margin-left:50px; font-weight:300;">First time using our Virtual Tools? <br />Let us show you around.</p>
   <p id="chooselanguagepar2" style="display:none; position:absolute; font-family:'Roboto', 'sans-serif'; font-size:36px; text-align:center; margin-top:50px; width:400px; margin-left:50px; font-weight:300;">Would you like us to continue helping you build your system?</p>
   <div id="english" onclick="english(this)" style="position:absolute; font-family:'Roboto', 'sans-serif'; font-size:24px; font-weight:500; text-align:center; width:200px; height:30px; margin-left:30px; margin-top:220px; font-weight:100; cursor:pointer;">OK</div>
   <div id="french" onclick="french(this)" style="position:absolute; font-family:'Roboto', 'sans-serif'; font-size:24px; font-weight:500; text-align:center; width:200px; height:30px; margin-left:270px; margin-top:220px; font-weight:100; cursor:pointer;">No, Thanks</div>
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
      <p style=" vertical-align:text-top">Comment:<textarea rows="4" name="message"></textarea></p>
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