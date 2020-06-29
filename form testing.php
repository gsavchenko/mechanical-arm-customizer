
  
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body{
	font-family:Roboto Lt, Roboto, sans-serif;
	font-weight:300;
}
form{
	position:absolute;
	margin-top:300px;
	margin-left:30px;
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,500' rel='stylesheet' type='text/css'>
<link rel="icon" href="file:///C|/Users/brian.IFIL/Desktop/favicon.ico">
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>





<script>
function cvl(x){
  $("#from").val("brveenstra")
}
//			$("#tr1").val("7106")
function qty1(){
	var c=document.getElementById("tr1c").selectedIndex;
	if(c<10){
	document.getElementById("items1qty").textContent= c
	}
	else if(c=10){
	document.getElementById("items1qty").textContent= "10+"	
	}
}
function product1(){
	var b=document.getElementById("tr1b").selectedIndex;
	if(b==1){
		document.getElementById("items1").textContent= "Direct Mount Socket"
		document.getElementById("tr1a").textContent="7106"
		document.getElementById("items1num").textContent="7106"
	}
	else if(b==2){
		document.getElementById("items1").textContent= "Serrated Direct Mount Socket"
		document.getElementById("tr1a").textContent="8163"
		document.getElementById("items1num").textContent="8163"
	}
	else if(b==3){
		document.getElementById("items1").textContent= "Vertical Serrated Direct Mount Socket"
		document.getElementById("tr1a").textContent="8540"
		document.getElementById("items1num").textContent="8540"
	}
	else if(b==4){
		document.getElementById("items1").textContent= "Full Ring Bracets"
		document.getElementById("tr1a").textContent="6146"
		document.getElementById("items1num").textContent="6146"
	}
	else if(b==5){
		document.getElementById("items1").textContent= "Zero Clearance Brackets"
		document.getElementById("tr1a").textContent="6145"
		document.getElementById("items1num").textContent="6145"
	}
	else if(b==6){
		document.getElementById("items1").textContent= "Square Tube Brackets"
		document.getElementById("tr1a").textContent="6278"
		document.getElementById("items1num").textContent="6278"
	}
	else if(b==7){
		document.getElementById("items1").textContent= "T-Track Brackets"
		document.getElementById("tr1a").textContent="6446"
		document.getElementById("items1num").textContent="6446"
	}
	else if(b==8){
		document.getElementById("items1").textContent= "T-Track Direct Mount Socket"
		document.getElementById("tr1a").textContent="8115"
		document.getElementById("items1num").textContent="8115"
	}
	else if(b==9){
		document.getElementById("items1").textContent= "Double T-Track Brackets"
		document.getElementById("tr1a").textContent="7992"
		document.getElementById("items1num").textContent="7992"
	}
	else if(b==10){
		document.getElementById("items1").textContent= "Double T-Track Direct Mount Socket"
		document.getElementById("tr1a").textContent="8115"
		document.getElementById("items1num").textContent="8115"
	}
	else if(b==11){
		document.getElementById("items1").textContent= "4 Inch Vertical Bar"
		document.getElementById("tr1a").textContent="8222"
		document.getElementById("items1num").textContent="8222"
	}
	else if(b==12){
		document.getElementById("items1").textContent= "6 Inch Vertical Bar"
		document.getElementById("tr1a").textContent="8071"
		document.getElementById("items1num").textContent="8071"
	}
	else if(b==13){
		document.getElementById("items1").textContent= "12 Inch Vertical Bar"
		document.getElementById("tr1a").textContent="8070"
		document.getElementById("items1num").textContent="8070"
	}
	else if(b==14){
		document.getElementById("items1").textContent= "Adjustable Vertical Bar"
		document.getElementById("tr1a").textContent="8114"
		document.getElementById("items1num").textContent="8114"
	}
	else if(b==15){
		document.getElementById("items1").textContent= "8 Inch Vertical Extension Bar"
		document.getElementById("tr1a").textContent="8081"
		document.getElementById("items1num").textContent="8018"
	}
	else if(b==16){
		document.getElementById("items1").textContent= "16 Inch Vertical Extension Bar"
		document.getElementById("tr1a").textContent="8216"
		document.getElementById("items1num").textContent="8216"
	}
	else if(b==17){
		document.getElementById("items1").textContent= "M2 Arm"
		document.getElementById("tr1a").textContent="8074"
		document.getElementById("items1num").textContent="8074"
	}
	else if(b==18){
		document.getElementById("items1").textContent= "M2X Arm"
		document.getElementById("tr1a").textContent="8069"
		document.getElementById("items1num").textContent="8069"
	}
	else if(b==19){
		document.getElementById("items1").textContent= "M2 Max Arm"
		document.getElementById("tr1a").textContent="8127"
		document.getElementById("items1num").textContent="8127"
	}
	else if(b==20){
		document.getElementById("items1").textContent= "Articulating Arm"
		document.getElementById("tr1a").textContent="8072"
		document.getElementById("items1num").textContent="8072"
	}
	else if(b==21){
		document.getElementById("items1").textContent= "Articulating Arm with Riser"
		document.getElementById("tr1a").textContent="8374"
		document.getElementById("items1num").textContent="8374"
	}
	else if(b==22){
		document.getElementById("items1").textContent= "Head and Tail Arm"
		document.getElementById("tr1a").textContent="8224"
		document.getElementById("items1num").textContent="8224"
	}
	else if(b==23){
		document.getElementById("items1").textContent= "Head and Tail Arm with Riser"
		document.getElementById("tr1a").textContent="8374"
		document.getElementById("items1num").textContent="8374"
	}
	else if(b==24){
		document.getElementById("items1").textContent= "Lockable Wedge Receiver"
		document.getElementById("tr1a").textContent="8076"
		document.getElementById("items1num").textContent="8076"
	}
	else if(b==25){
		document.getElementById("items1").textContent= "Rotary Wedge Receiver"
		document.getElementById("tr1a").textContent="8075"
		document.getElementById("items1num").textContent="8075"
	}
}

function partnumbers(x) {			

		
//var amount = document.forms['form1'].orderAmount.options.selectedIndex;
	//document.getElementById("test").firstChild.nodeValue = amount * 6;		
		if($("#firstslct").val("Direct Mount Socket")){
			document.getElementById("tr1a").value="7106"
	
		}
		

		else if($("#firstslct").val("Serrated Direct Mount Socket")){
			$("#tr1a").val("8163")
		}
		else if($("#firstslct").val("--")){
			$("#tr1a").val("")
		};

}
</script>
</head>

<body>

<div id="quoterequest" style="position:fixed; left:50%; margin-left:-400px; height:80%; top:10%; width:800px; background-color:#E8E8E8; border-style:solid; border-width:thin; overflow-y:auto; overflow-x:hidden;">

<div style="position:absolute; margin-left:20px; margin-top:30px; background-color:#C0C0C0;"><p style="font-size:36px;">Ideas for Independent Living</p><p style="margin-top:-10px;">16 Malley Road<br />Scarborough, Ontario<br />M1L 2E2<br />(416)646-4361</p></div>

<form method="post" action="/gdform.php" name="form1">
	<input type="hidden" name="redirect" value="thankyou.html" />
  Name:* <input required type="text" id="name" name="name"><br>
  E-mail:* <input required type="email" name="email"><br>
  
  Association Name:* <input required type="text" id="associationname" name="associationname" placeholder="i.e. East Side Children's Hospital"><br>
  Address:* <input required type="text" id="address" name="address"><br>
  Phone Number:* <input required type="text" id="phonenumber" name="phonenumber"><br>
  Client Name: <input type="text" id="clientname" name="clientname"><br>


  <input type="hidden" id="subject" name="subject" value="Automated Quote Request"><br>

  

  <input type="submit" name="submit" value="Submit Quote" style="position:absolute; margin-top:500px;" />
  
  </form>


</div>


</body>
</html>

<?php
	
	mail($to, $subject, $headers, $message, $from);
   
if (!isset($_POST["submit"]))
  {
  
  $to = "brian@ideasfil.com";
  $subject = $_POST['subject'];
  $headers .= "From: " . strip_tags($POST['email']) . "\r\n";
  $headers .= "Cc: brveenstra@hotmail.com\r\n";
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
 
 $message = '<html><body>';
 $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
 $message .= "<tr height='24px;'><td>let's see</td><td>if this</td><td>works</td></tr>";
 $messgae .= "<tr height='24px;'><td>fingers</td><td>crossed</td><td></td>";
 $message .= "</table>";
 $message .= "</body></html>";
  }?>
