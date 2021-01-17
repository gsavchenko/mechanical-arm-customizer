function english(){
  $("#languagebackdrop").hide()
  $("#chooselanguage").hide()
}
function french(){
  document.location="http://www.ideasfil.com/fr-index.html";
}
function showquote(x){
  $("#quotebackground").show()
  $("#quoterequest").show()
}
function quotebackground(x){
  $("#quoterequest").hide()
  $("#quotebackground").hide()

}

function qty1(){
  var c=document.getElementById("tr1c").selectedIndex;
  if(c<10){
    document.getElementById("items1qty").textContent= c
  }
  else if(c=10){
    document.getElementById("items1qty").textContent= "10+"
  }
}

function qty2(){
  var e=document.getElementById("tr2c").selectedIndex;
  if(e<10){
    document.getElementById("items2qty").textContent= e
  }
  else if(e=10){
    document.getElementById("items2qty").textContent= "10+"
  }
}
function qty3(){
  var g=document.getElementById("tr3c").selectedIndex;
  if(g<10){
    document.getElementById("items3qty").textContent= g
  }
  else if(g=10){
    document.getElementById("items3qty").textContent= "10+"
  }
}
function qty4(){
  var i=document.getElementById("tr4c").selectedIndex;
  if(i<10){
    document.getElementById("items4qty").textContent= i
  }
  else if(i=10){
    document.getElementById("items4qty").textContent= "10+"
  }
}
function qty5(){
  var k=document.getElementById("tr5c").selectedIndex;
  if(k<10){
    document.getElementById("items5qty").textContent= k
  }
  else if(k=10){
    document.getElementById("items5qty").textContent= "10+"
  }
}
function qty6(){
  var m=document.getElementById("tr6c").selectedIndex;
  if(m<10){
    document.getElementById("items6qty").textContent= m
  }
  else if(m=10){
    document.getElementById("items6qty").textContent= "10+"
  }
}
function qty7(){
  var o=document.getElementById("tr7c").selectedIndex;
  if(o<10){
    document.getElementById("items7qty").textContent= o
  }
  else if(o=10){
    document.getElementById("items7qty").textContent= "10+"
  }
}
function qty8(){
  var q=document.getElementById("tr8c").selectedIndex;
  if(q<10){
    document.getElementById("items8qty").textContent= q
  }
  else if(q=10){
    document.getElementById("items8qty").textContent= "10+"
  }
}
function qty9(){
  var s=document.getElementById("tr9c").selectedIndex;
  if(s<10){
    document.getElementById("items9qty").textContent= s
  }
  else if(s=10){
    document.getElementById("items9qty").textContent= "10+"
  }
}
function qty10(){
  var u=document.getElementById("tr10c").selectedIndex;
  if(u<10){
    document.getElementById("items10qty").textContent= u
  }
  else if(u=10){
    document.getElementById("items10qty").textContent= "10+"
  }
}

$(document).ready(function(e) {
  // document.getElementById("tr1b").selectedIndex="0"
  // document.getElementById("tr1c").selectedIndex="0"
  // document.getElementById("tr2b").selectedIndex="0"
  // document.getElementById("tr2c").selectedIndex="0"
  // document.getElementById("tr3b").selectedIndex="0"
  // document.getElementById("tr3c").selectedIndex="0"
  // document.getElementById("tr4b").selectedIndex="0"
  // document.getElementById("tr4c").selectedIndex="0"
  // document.getElementById("tr5b").selectedIndex="0"
  // document.getElementById("tr5c").selectedIndex="0"
  // document.getElementById("tr6b").selectedIndex="0"
  // document.getElementById("tr6c").selectedIndex="0"
  // document.getElementById("tr7b").selectedIndex="0"
  // document.getElementById("tr7c").selectedIndex="0"
  // document.getElementById("tr8b").selectedIndex="0"
  // document.getElementById("tr8c").selectedIndex="0"
  // document.getElementById("tr9b").selectedIndex="0"
  // document.getElementById("tr9c").selectedIndex="0"
  // document.getElementById("tr10b").selectedIndex="0"
  // document.getElementById("tr10c").selectedIndex="0"
  // $("#tr1b").fadeIn(0, product1)
  // $("#tr1c").fadeIn(0, qty1)
  // $("#tr2b").fadeIn(0, product2)
  // $("#tr2c").fadeIn(0, qty2)
  // $("#tr3b").fadeIn(0, product3)
  // $("#tr3c").fadeIn(0, qty3)
  // $("#tr4b").fadeIn(0, product4)
  // $("#tr4c").fadeIn(0, qty4)
  // $("#tr5b").fadeIn(0, product5)
  // $("#tr5c").fadeIn(0, qty5)
  // $("#tr6b").fadeIn(0, product6)
  // $("#tr6c").fadeIn(0, qty6)
  // $("#tr7b").fadeIn(0, product7)
  // $("#tr7c").fadeIn(0, qty7)
  // $("#tr8b").fadeIn(0, product8)
  // $("#tr8c").fadeIn(0, qty8)
  // $("#tr9b").fadeIn(0, product9)
  // $("#tr9c").fadeIn(0, qty9)
  // $("#tr10b").fadeIn(0, product10)
  // $("#tr10c").fadeIn(0, qty10)
});

function product1(){
  var b=document.getElementById("tr1b").selectedIndex;
  if(b==1){

    document.getElementById("items1").textContent="Direct Mount Socket"
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
    document.getElementById("items1").textContent= "Full Ring Bracets (Pair)"
    document.getElementById("tr1a").textContent="6146"
    document.getElementById("items1num").textContent="6146"
  }
  else if(b==5){
    document.getElementById("items1").textContent= "Zero Clearance Brackets (Pair)"
    document.getElementById("tr1a").textContent="6145"
    document.getElementById("items1num").textContent="6145"
  }
  else if(b==6){
    document.getElementById("items1").textContent= "Square Tube Brackets (Pair)"
    document.getElementById("tr1a").textContent="6278"
    document.getElementById("items1num").textContent="6278"
  }
  else if(b==7){
    document.getElementById("items1").textContent= "T-Track Brackets (Pair)"

    document.getElementById("tr1a").textContent="6446"
    document.getElementById("items1num").textContent="6446"
  }
  else if(b==8){
    document.getElementById("items1").textContent= "T-Track Direct Mount Socket"
    document.getElementById("tr1a").textContent="8115"
    document.getElementById("items1num").textContent="8115"
  }
  else if(b==9){
    document.getElementById("items1").textContent= "Double T-Track Brackets (Pair)"
    document.getElementById("tr1a").textContent="7992"
    document.getElementById("items1num").textContent="7992"
  }
  else if(b==10){
    document.getElementById("items1").textContent= "Double T-Track Direct Mount Socket"
    document.getElementById("tr1a").textContent="8115"
    document.getElementById("items1num").textContent="8115"
  }
  else if(b==11){
    document.getElementById("items1").textContent= "14 Inch Socket Bar"
    document.getElementById("tr1a").textContent="6147"
    document.getElementById("items1num").textContent="6147"
  }
  else if(b==12){
    document.getElementById("items1").textContent= "22 Inch Socket Bar"
    document.getElementById("tr1a").textContent="7635"
    document.getElementById("items1num").textContent="7635"
  }
  else if(b==13){
    document.getElementById("items1").textContent= "4 Inch Vertical Bar"
    document.getElementById("tr1a").textContent="8222"
    document.getElementById("items1num").textContent="8222"
  }
  else if(b==14){
    document.getElementById("items1").textContent= "6 Inch Vertical Bar"
    document.getElementById("tr1a").textContent="8071"
    document.getElementById("items1num").textContent="8071"
  }
  else if(b==15){
    document.getElementById("items1").textContent= "12 Inch Vertical Bar"
    document.getElementById("tr1a").textContent="8070"
    document.getElementById("items1num").textContent="8070"
  }
  else if(b==16){
    document.getElementById("items1").textContent= "Adjustable Vertical Bar"
    document.getElementById("tr1a").textContent="8114"
    document.getElementById("items1num").textContent="8114"
  }
  else if(b==17){
    document.getElementById("items1").textContent= "8 Inch Vertical Extension Bar"
    document.getElementById("tr1a").textContent="8081"
    document.getElementById("items1num").textContent="8018"
  }
  else if(b==18){
    document.getElementById("items1").textContent= "16 Inch Vertical Extension Bar"
    document.getElementById("tr1a").textContent="8216"
    document.getElementById("items1num").textContent="8216"
  }
  else if(b==19){
    document.getElementById("items1").textContent= "M2 Arm"
    document.getElementById("tr1a").textContent="8074"
    document.getElementById("items1num").textContent="8074"
  }
  else if(b==20){
    document.getElementById("items1").textContent= "M2X Arm"
    document.getElementById("tr1a").textContent="8069"
    document.getElementById("items1num").textContent="8069"
  }
  else if(b==21){
    document.getElementById("items1").textContent= "M2 Max Arm"
    document.getElementById("tr1a").textContent="8127"
    document.getElementById("items1num").textContent="8127"
  }
  else if(b==22){
    document.getElementById("items1").textContent= "Articulating Arm"
    document.getElementById("tr1a").textContent="8072"
    document.getElementById("items1num").textContent="8072"
  }
  else if(b==23){
    document.getElementById("items1").textContent= "Articulating Arm with Riser"
    document.getElementById("tr1a").textContent="8073"
    document.getElementById("items1num").textContent="8073"
  }
  else if(b==24){
    document.getElementById("items1").textContent= "Head and Tail Arm"
    document.getElementById("tr1a").textContent="8224"
    document.getElementById("items1num").textContent="8224"
  }
  else if(b==25){
    document.getElementById("items1").textContent= "Head and Tail Arm with Riser"
    document.getElementById("tr1a").textContent="8374"
    document.getElementById("items1num").textContent="8374"
  }
  else if(b==26){
    document.getElementById("items1").textContent= "Lockable Wedge Receiver"
    document.getElementById("tr1a").textContent="8076"
    document.getElementById("items1num").textContent="8076"
  }
  else if(b==27){
    document.getElementById("items1").textContent= "Rotary Wedge Receiver"
    document.getElementById("tr1a").textContent="8075"
    document.getElementById("items1num").textContent="8075"
  }
  else if(b==28){
    document.getElementById("items1").textContent= "Rolling Floor Stand"
    document.getElementById("tr1a").textContent="8213"
    document.getElementById("items1num").textContent="8213"
  }
  else if(b==29){
    document.getElementById("items1").textContent= "Rolling Floor Stand with Extended Legs"
    document.getElementById("tr1a").textContent="8294"
    document.getElementById("items1num").textContent="8294"
  }
  else if(b==30){
    document.getElementById("items1").textContent= "Table Clamp"
    document.getElementById("tr1a").textContent="8214"
    document.getElementById("items1num").textContent="8214"
  }
  else if(b==31){
    document.getElementById("items1").textContent= "Table Mount"
    document.getElementById("tr1a").textContent="8404"
    document.getElementById("items1num").textContent="8404"
  }
  else if(b==32){
    document.getElementById("items1").textContent= "Wall Track"
    document.getElementById("tr1a").textContent="N/A"
    document.getElementById("items1num").textContent="N/A"
  }
  else if(b==34){
    document.getElementById("items1").textContent= "Standard Wedge Reciever"
    document.getElementById("tr1a").textContent="6523"
    document.getElementById("items1num").textContent="6523"
  }
  else if(b==35){
    document.getElementById("items1").textContent= "Heavy Duty Wedge Reciever"
    document.getElementById("tr1a").textContent="7530"
    document.getElementById("items1num").textContent="7530"
  }
  else if(b==36){
    document.getElementById("items1").textContent= "Ball Joint Wedge Reciever"
    document.getElementById("tr1a").textContent="7782"
    document.getElementById("items1num").textContent="7782"
  }
  else if(b==37){
    document.getElementById("items1").textContent= "Multi-Positional Wedge Reciever"
    document.getElementById("tr1a").textContent="7580"
    document.getElementById("items1num").textContent="7580"
  }
  else if(b==38){
    document.getElementById("items1").textContent= "T-Bar Wedge Reciever"
    document.getElementById("tr1a").textContent="7485"
    document.getElementById("items1num").textContent="7485"
  }
  else if(b==40){
    document.getElementById("items1").textContent= "4 Inch Tube and Socket"
    document.getElementById("tr1a").textContent="8542"
    document.getElementById("items1num").textContent="8542"
  }
  else if(b==41){
    document.getElementById("items1").textContent= "6 Inch Tube and Socket"
    document.getElementById("tr1a").textContent="7174"
    document.getElementById("items1num").textContent="7174"
  }
  else if(b==42){
    document.getElementById("items1").textContent= "8 Inch Tube and Socket"
    document.getElementById("tr1a").textContent="7173"
    document.getElementById("items1num").textContent="7173"
  }
  else if(b==43){
    document.getElementById("items1").textContent= "10 Inch Tube and Socket"
    document.getElementById("tr1a").textContent="6155"
    document.getElementById("items1num").textContent="6155"
  }
  else if(b==44){
    document.getElementById("items1").textContent= "12 Inch Tube and Socket"
    document.getElementById("tr1a").textContent="8165"
    document.getElementById("items1num").textContent="8165"
  }
  else if(b==45){
    document.getElementById("items1").textContent= "Pivot Base"
    document.getElementById("tr1a").textContent="7584"
    document.getElementById("items1num").textContent="7584"
  }
  else if(b==46){
    document.getElementById("items1").textContent= "Tube Flange Mount"
    document.getElementById("tr1a").textContent="7747"
    document.getElementById("items1num").textContent="7747"
  }
  else if(b==47){
    document.getElementById("items1").textContent= "Socket Only"
    document.getElementById("tr1a").textContent="7582"
    document.getElementById("items1num").textContent="7582"
  }
  else if(b==48){
    document.getElementById("items1").textContent= "Whitmyer Socket Only"
    document.getElementById("tr1a").textContent="8083"
    document.getElementById("items1num").textContent="8083"
  }
  else if(b==49){
    document.getElementById("items1").textContent= "Universal Switch Mount"
    document.getElementById("tr1a").textContent="8116"
    document.getElementById("items1num").textContent="8116"
  }
  else if(b==50){
    document.getElementById("items1").textContent= "Cane Clamps"
    document.getElementById("tr1a").textContent="7754"
    document.getElementById("items1num").textContent="7754"
  }
  else if(b==51){
    document.getElementById("items1").textContent= "Switch Plate"
    document.getElementById("tr1a").textContent="7583"
    document.getElementById("items1num").textContent="7583"
  }
  else if(b==52){
    document.getElementById("items1").textContent= "Tube and Socket Ball Joint"
    document.getElementById("tr1a").textContent="N/A"
    document.getElementById("items1num").textContent="N/A"
  }
  else if(b==53){
    document.getElementById("items1").textContent= "Whitmyer Assembly"
    document.getElementById("tr1a").textContent="N/A"
    document.getElementById("items1num").textContent="N/A"
  }
  else if(b==55){
    document.getElementById("items1").textContent= "Heavy Duty Head Switch"
    document.getElementById("tr1a").textContent="3865"
    document.getElementById("items1num").textContent="3865"
  }
  else if(b==56){
    document.getElementById("items1").textContent= "Short Heavy Duty Head Switch"
    document.getElementById("tr1a").textContent="5064"
    document.getElementById("items1num").textContent="5064"
  }
  else if(b==57){
    document.getElementById("items1").textContent= "Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr1a").textContent="7526"
    document.getElementById("items1num").textContent="7526"
  }
  else if(b==58){
    document.getElementById("items1").textContent= "Short Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr1a").textContent="N/A"
    document.getElementById("items1num").textContent="N/A"
  }
  else if(b==59){
    document.getElementById("items1").textContent= "Heavy Duty Head Switch with Flex"
    document.getElementById("tr1a").textContent="6185"
    document.getElementById("items1num").textContent="6185"
  }
  else if(b==60){
    document.getElementById("items1").textContent= "Short Heavy Duty Head Switch with Flex"
    document.getElementById("tr1a").textContent="8545"
    document.getElementById("items1num").textContent="8545"
  }
  else if(b==61){
    document.getElementById("items1").textContent= "Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr1a").textContent="7527"
    document.getElementById("items1num").textContent="7527"
  }
  else if(b==62){
    document.getElementById("items1").textContent= "Short Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr1a").textContent="8046"
    document.getElementById("items1num").textContent="8046"
  }
  else if(b==63){
    document.getElementById("items1").textContent= "Light Touch Head Switch"
    document.getElementById("tr1a").textContent="6247"
    document.getElementById("items1num").textContent="6247"
  }
  else if(b==64){
    document.getElementById("items1").textContent= "Short Light Touch Head Switch"
    document.getElementById("tr1a").textContent="7196"
    document.getElementById("items1num").textContent="7196"
  }
  else if(b==65){
    document.getElementById("items1").textContent= "Paddle Switch"
    document.getElementById("tr1a").textContent="N/A"
    document.getElementById("items1num").textContent="N/A"
  }
  else if(b==66){
    document.getElementById("items1").textContent= "Single Sided Head Switch Mount"
    document.getElementById("tr1a").textContent="3151"
    document.getElementById("items1num").textContent="3151"
  }
  else if(b==67){
    document.getElementById("items1").textContent= "Double Sided Head Switch Mount"
    document.getElementById("tr1a").textContent="2798"
    document.getElementById("items1num").textContent="2798"
  }
  else if(b==68){
    document.getElementById("items1").textContent= "Whitmyer to Square Tube Adapter"
    document.getElementById("tr1a").textContent="7529"
    document.getElementById("items1num").textContent="7529"
  }
  else if(b==69){
    document.getElementById("items1").textContent= "Whitmyer Cobra to Square Tube Adapter"
    document.getElementById("tr1a").textContent="7544"
    document.getElementById("items1num").textContent="7544"
  }
  else if(b==70){
    document.getElementById("items1").textContent= "Whitmyer Lynx to Square Tube Adapter"
    document.getElementById("tr1a").textContent="7718"
    document.getElementById("items1num").textContent="7718"
  }
  else if(b==71){
    document.getElementById("items1").textContent= "Ottobock to Square Tube Adapter"
    document.getElementById("tr1a").textContent="7528"
    document.getElementById("items1num").textContent="7528"
  }
  else if(b==72){
    document.getElementById("items1").textContent= "Stealth i2i Square Tube Adapter"
    document.getElementById("tr1a").textContent="N/A"
    document.getElementById("items1num").textContent="N/A"
  }
  else if(b==73){
    document.getElementById("items1").textContent= "Wobble Switch Plate"
    document.getElementById("tr1a").textContent="8548"
    document.getElementById("items1num").textContent="8548"
  }
  else if(b==74){
    document.getElementById("items1").textContent= "Jelly Beamer Switch Plate"
    document.getElementById("tr1a").textContent="8128"
    document.getElementById("items1num").textContent="8128"
  }
  else if(b==75){
    document.getElementById("items1").textContent= "Cane Clamps"
    document.getElementById("tr1a").textContent="7754"
    document.getElementById("items1num").textContent="7754"
  }
  else if(b==76){
    document.getElementById("items1").textContent= "USB Joystick"
    document.getElementById("tr1a").textContent="8174"
    document.getElementById("items1num").textContent="8174"
  }
  else if(b==77){
    document.getElementById("items1").textContent= "USB Joystick with Jacks"
    document.getElementById("tr1a").textContent="8215"
    document.getElementById("items1num").textContent="8215"
  }
  else{
    document.getElementById("items1").textContent= ""
    document.getElementById("tr1a").textContent=""
    document.getElementById("items1num").textContent=""
  }
}

function product2(){
  var d=document.getElementById("tr2b").selectedIndex;
  if(d==1){

    document.getElementById("items2").textContent="Direct Mount Socket"
    document.getElementById("tr2a").textContent="7106"
    document.getElementById("items2num").textContent="7106"
  }
  else if(d==2){
    document.getElementById("items2").textContent= "Serrated Direct Mount Socket"
    document.getElementById("tr2a").textContent="8163"
    document.getElementById("items2num").textContent="8163"
  }
  else if(d==3){
    document.getElementById("items2").textContent= "Vertical Serrated Direct Mount Socket"
    document.getElementById("tr2a").textContent="8540"
    document.getElementById("items2num").textContent="8540"
  }
  else if(d==4){
    document.getElementById("items2").textContent= "Full Ring Bracets (Pair)"
    document.getElementById("tr2a").textContent="6146"
    document.getElementById("items2num").textContent="6146"
  }
  else if(d==5){
    document.getElementById("items2").textContent= "Zero Clearance Brackets (Pair)"
    document.getElementById("tr2a").textContent="6145"
    document.getElementById("items2num").textContent="6145"
  }
  else if(d==6){
    document.getElementById("items2").textContent= "Square Tube Brackets (Pair)"
    document.getElementById("tr2a").textContent="6278"
    document.getElementById("items2num").textContent="6278"
  }
  else if(d==7){
    document.getElementById("items2").textContent= "T-Track Brackets (Pair)"
    document.getElementById("tr2a").textContent="6446"
    document.getElementById("items2num").textContent="6446"
  }
  else if(d==8){
    document.getElementById("items2").textContent= "T-Track Direct Mount Socket"
    document.getElementById("tr2a").textContent="8115"
    document.getElementById("items2num").textContent="8115"
  }
  else if(d==9){
    document.getElementById("items2").textContent= "Double T-Track Brackets (Pair)"
    document.getElementById("tr2a").textContent="7992"
    document.getElementById("items2num").textContent="7992"
  }
  else if(d==10){
    document.getElementById("items2").textContent= "Double T-Track Direct Mount Socket"
    document.getElementById("tr2a").textContent="8115"
    document.getElementById("items2num").textContent="8115"
  }
  else if(d==11){
    document.getElementById("items2").textContent= "14 Inch Socket Bar"
    document.getElementById("tr2a").textContent="6147"
    document.getElementById("items2num").textContent="6147"
  }
  else if(d==12){
    document.getElementById("items2").textContent= "22 Inch Socket Bar"
    document.getElementById("tr2a").textContent="7635"
    document.getElementById("items2num").textContent="7635"
  }
  else if(d==13){
    document.getElementById("items2").textContent= "4 Inch Vertical Bar"
    document.getElementById("tr2a").textContent="8222"
    document.getElementById("items2num").textContent="8222"
  }
  else if(d==14){
    document.getElementById("items2").textContent= "6 Inch Vertical Bar"
    document.getElementById("tr2a").textContent="8071"
    document.getElementById("items2num").textContent="8071"
  }
  else if(d==15){
    document.getElementById("items2").textContent= "12 Inch Vertical Bar"
    document.getElementById("tr2a").textContent="8070"
    document.getElementById("items2num").textContent="8070"
  }
  else if(d==16){
    document.getElementById("items2").textContent= "Adjustable Vertical Bar"
    document.getElementById("tr2a").textContent="8114"
    document.getElementById("items2num").textContent="8114"
  }
  else if(d==17){
    document.getElementById("items2").textContent= "8 Inch Vertical Extension Bar"
    document.getElementById("tr2a").textContent="8081"
    document.getElementById("items2num").textContent="8018"
  }
  else if(d==18){
    document.getElementById("items2").textContent= "16 Inch Vertical Extension Bar"
    document.getElementById("tr2a").textContent="8216"
    document.getElementById("items2num").textContent="8216"
  }
  else if(d==19){
    document.getElementById("items2").textContent= "M2 Arm"
    document.getElementById("tr2a").textContent="8074"
    document.getElementById("items2num").textContent="8074"
  }
  else if(d==20){
    document.getElementById("items2").textContent= "M2X Arm"
    document.getElementById("tr2a").textContent="8069"
    document.getElementById("items2num").textContent="8069"
  }
  else if(d==21){
    document.getElementById("items2").textContent= "M2 Max Arm"
    document.getElementById("tr2a").textContent="8127"
    document.getElementById("items2num").textContent="8127"
  }
  else if(d==22){
    document.getElementById("items2").textContent= "Articulating Arm"
    document.getElementById("tr2a").textContent="8072"
    document.getElementById("items2num").textContent="8072"
  }
  else if(d==23){
    document.getElementById("items2").textContent= "Articulating Arm with Riser"
    document.getElementById("tr2a").textContent="8073"
    document.getElementById("items2num").textContent="8073"
  }
  else if(d==24){
    document.getElementById("items2").textContent= "Head and Tail Arm"
    document.getElementById("tr2a").textContent="8224"
    document.getElementById("items2num").textContent="8224"
  }
  else if(d==25){
    document.getElementById("items2").textContent= "Head and Tail Arm with Riser"
    document.getElementById("tr2a").textContent="8374"
    document.getElementById("items2num").textContent="8374"
  }
  else if(d==26){
    document.getElementById("items2").textContent= "Lockable Wedge Receiver"
    document.getElementById("tr2a").textContent="8076"
    document.getElementById("items2num").textContent="8076"
  }
  else if(d==27){
    document.getElementById("items2").textContent= "Rotary Wedge Receiver"
    document.getElementById("tr2a").textContent="8075"
    document.getElementById("items2num").textContent="8075"
  }
  else if(d==28){
    document.getElementById("items2").textContent= "Rolling Floor Stand"
    document.getElementById("tr2a").textContent="8213"
    document.getElementById("items2num").textContent="8213"
  }
  else if(d==29){
    document.getElementById("items2").textContent= "Rolling Floor Stand with Extended Legs"
    document.getElementById("tr2a").textContent="8294"
    document.getElementById("items2num").textContent="8294"
  }
  else if(d==30){
    document.getElementById("items2").textContent= "Table Clamp"
    document.getElementById("tr2a").textContent="8214"
    document.getElementById("items2num").textContent="8214"
  }
  else if(d==31){
    document.getElementById("items2").textContent= "Table Mount"
    document.getElementById("tr2a").textContent="8404"
    document.getElementById("items2num").textContent="8404"
  }
  else if(d==32){
    document.getElementById("items2").textContent= "Wall Track"
    document.getElementById("tr2a").textContent="N/A"
    document.getElementById("items2num").textContent="N/A"
  }
  else if(d==34){
    document.getElementById("items2").textContent= "Standard Wedge Reciever"
    document.getElementById("tr2a").textContent="6523"
    document.getElementById("items2num").textContent="6523"
  }
  else if(d==35){
    document.getElementById("items2").textContent= "Heavy Duty Wedge Reciever"
    document.getElementById("tr2a").textContent="7530"
    document.getElementById("items2num").textContent="7530"
  }
  else if(d==36){
    document.getElementById("items2").textContent= "Ball Joint Wedge Reciever"
    document.getElementById("tr2a").textContent="7782"
    document.getElementById("items2num").textContent="7782"
  }
  else if(d==37){
    document.getElementById("items2").textContent= "Multi-Positional Wedge Reciever"
    document.getElementById("tr2a").textContent="7580"
    document.getElementById("items2num").textContent="7580"
  }
  else if(d==38){
    document.getElementById("items2").textContent= "T-Bar Wedge Reciever"
    document.getElementById("tr2a").textContent="7485"
    document.getElementById("items2num").textContent="7485"
  }
  else if(d==40){
    document.getElementById("items2").textContent= "4 Inch Tube and Socket"
    document.getElementById("tr2a").textContent="8542"
    document.getElementById("items2num").textContent="8542"
  }
  else if(d==41){
    document.getElementById("items2").textContent= "6 Inch Tube and Socket"
    document.getElementById("tr2a").textContent="7174"
    document.getElementById("items2num").textContent="7174"
  }
  else if(d==42){
    document.getElementById("items2").textContent= "8 Inch Tube and Socket"
    document.getElementById("tr2a").textContent="7173"
    document.getElementById("items2num").textContent="7173"
  }
  else if(d==43){
    document.getElementById("items2").textContent= "10 Inch Tube and Socket"
    document.getElementById("tr2a").textContent="6155"

    document.getElementById("items2num").textContent="6155"
  }
  else if(d==44){
    document.getElementById("items2").textContent= "12 Inch Tube and Socket"
    document.getElementById("tr2a").textContent="8165"
    document.getElementById("items2num").textContent="8165"
  }
  else if(d==45){
    document.getElementById("items2").textContent= "Pivot Base"
    document.getElementById("tr2a").textContent="7584"
    document.getElementById("items2num").textContent="7584"
  }
  else if(d==46){
    document.getElementById("items2").textContent= "Tube Flange Mount"
    document.getElementById("tr2a").textContent="7747"
    document.getElementById("items2num").textContent="7747"
  }
  else if(d==47){
    document.getElementById("items2").textContent= "Socket Only"
    document.getElementById("tr2a").textContent="7582"
    document.getElementById("items2num").textContent="7582"
  }
  else if(d==48){
    document.getElementById("items2").textContent= "Whitmyer Socket Only"
    document.getElementById("tr2a").textContent="8083"
    document.getElementById("items2num").textContent="8083"
  }
  else if(d==49){
    document.getElementById("items2").textContent= "Universal Switch Mount"
    document.getElementById("tr2a").textContent="8116"
    document.getElementById("items2num").textContent="8116"
  }
  else if(d==50){
    document.getElementById("items2").textContent= "Cane Clamps"
    document.getElementById("tr2a").textContent="7754"
    document.getElementById("items2num").textContent="7754"
  }
  else if(d==51){
    document.getElementById("items2").textContent= "Switch Plate"
    document.getElementById("tr2a").textContent="7583"
    document.getElementById("items2num").textContent="7583"
  }
  else if(d==52){
    document.getElementById("items2").textContent= "Tube and Socket Ball Joint"
    document.getElementById("tr2a").textContent="N/A"
    document.getElementById("items2num").textContent="N/A"
  }
  else if(d==53){
    document.getElementById("items2").textContent= "Whitmyer Assembly"
    document.getElementById("tr2a").textContent="N/A"
    document.getElementById("items2num").textContent="N/A"
  }
  else if(d==55){
    document.getElementById("items2").textContent= "Heavy Duty Head Switch"
    document.getElementById("tr2a").textContent="3865"
    document.getElementById("items2num").textContent="3865"
  }
  else if(d==56){
    document.getElementById("items2").textContent= "Short Heavy Duty Head Switch"
    document.getElementById("tr2a").textContent="5064"
    document.getElementById("items2num").textContent="5064"
  }
  else if(d==57){
    document.getElementById("items2").textContent= "Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr2a").textContent="7526"
    document.getElementById("items2num").textContent="7526"
  }
  else if(d==58){
    document.getElementById("items2").textContent= "Short Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr2a").textContent="N/A"
    document.getElementById("items2num").textContent="N/A"
  }
  else if(d==59){
    document.getElementById("items2").textContent= "Heavy Duty Head Switch with Flex"
    document.getElementById("tr2a").textContent="6185"
    document.getElementById("items2num").textContent="6185"
  }
  else if(d==60){
    document.getElementById("items2").textContent= "Short Heavy Duty Head Switch with Flex"
    document.getElementById("tr2a").textContent="8545"
    document.getElementById("items2num").textContent="8545"
  }
  else if(d==61){
    document.getElementById("items2").textContent= "Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr2a").textContent="7527"
    document.getElementById("items2num").textContent="7527"
  }
  else if(d==62){
    document.getElementById("items2").textContent= "Short Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr2a").textContent="8046"
    document.getElementById("items2num").textContent="8046"
  }
  else if(d==63){
    document.getElementById("items2").textContent= "Light Touch Head Switch"
    document.getElementById("tr2a").textContent="6247"
    document.getElementById("items2num").textContent="6247"
  }
  else if(d==64){
    document.getElementById("items2").textContent= "Short Light Touch Head Switch"
    document.getElementById("tr2a").textContent="7196"
    document.getElementById("items2num").textContent="7196"
  }
  else if(d==65){
    document.getElementById("items2").textContent= "Paddle Switch"
    document.getElementById("tr2a").textContent="N/A"
    document.getElementById("items2num").textContent="N/A"
  }
  else if(d==66){
    document.getElementById("items2").textContent= "Single Sided Head Switch Mount"
    document.getElementById("tr2a").textContent="3151"
    document.getElementById("items2num").textContent="3151"
  }
  else if(d==67){
    document.getElementById("items2").textContent= "Double Sided Head Switch Mount"
    document.getElementById("tr2a").textContent="2798"
    document.getElementById("items2num").textContent="2798"
  }
  else if(d==68){
    document.getElementById("items2").textContent= "Whitmyer to Square Tube Adapter"
    document.getElementById("tr2a").textContent="7529"
    document.getElementById("items2num").textContent="7529"
  }
  else if(d==69){
    document.getElementById("items2").textContent= "Whitmyer Cobra to Square Tube Adapter"
    document.getElementById("tr2a").textContent="7544"
    document.getElementById("items2num").textContent="7544"
  }
  else if(d==70){
    document.getElementById("items2").textContent= "Whitmyer Lynx to Square Tube Adapter"
    document.getElementById("tr2a").textContent="7718"
    document.getElementById("items2num").textContent="7718"
  }
  else if(d==71){
    document.getElementById("items2").textContent= "Ottobock to Square Tube Adapter"
    document.getElementById("tr2a").textContent="7528"
    document.getElementById("items2num").textContent="7528"
  }
  else if(d==72){
    document.getElementById("items2").textContent= "Stealth i2i Square Tube Adapter"
    document.getElementById("tr2a").textContent="N/A"
    document.getElementById("items2num").textContent="N/A"
  }
  else if(d==73){
    document.getElementById("items2").textContent= "Wobble Switch Plate"
    document.getElementById("tr2a").textContent="8548"
    document.getElementById("items2num").textContent="8548"
  }
  else if(d==74){
    document.getElementById("items2").textContent= "Jelly Beamer Switch Plate"
    document.getElementById("tr2a").textContent="8128"
    document.getElementById("items2num").textContent="8128"
  }
  else if(d==75){
    document.getElementById("items2").textContent= "Cane Clamps"
    document.getElementById("tr2a").textContent="7754"
    document.getElementById("items2num").textContent="7754"
  }
  else if(d==76){
    document.getElementById("items2").textContent= "USB Joystick"
    document.getElementById("tr2a").textContent="8174"
    document.getElementById("items2num").textContent="8174"
  }
  else if(d==77){
    document.getElementById("items2").textContent= "USB Joystick with Jacks"
    document.getElementById("tr2a").textContent="8215"
    document.getElementById("items2num").textContent="8215"
  }
  else{
    document.getElementById("items2").textContent= ""
    document.getElementById("tr2a").textContent=""
    document.getElementById("items2num").textContent=""
  }
}

function product3(){
  var f=document.getElementById("tr3b").selectedIndex;
  if(f==1){

    document.getElementById("items3").textContent="Direct Mount Socket"
    document.getElementById("tr3a").textContent="7106"
    document.getElementById("items3num").textContent="7106"
  }
  else if(f==2){
    document.getElementById("items3").textContent= "Serrated Direct Mount Socket"
    document.getElementById("tr3a").textContent="8163"
    document.getElementById("items3num").textContent="8163"
  }
  else if(f==3){
    document.getElementById("items3").textContent= "Vertical Serrated Direct Mount Socket"
    document.getElementById("tr3a").textContent="8540"
    document.getElementById("items3num").textContent="8540"
  }
  else if(f==4){
    document.getElementById("items3").textContent= "Full Ring Bracets (Pair)"
    document.getElementById("tr3a").textContent="6146"
    document.getElementById("items3num").textContent="6146"
  }
  else if(f==5){
    document.getElementById("items3").textContent= "Zero Clearance Brackets (Pair)"
    document.getElementById("tr3a").textContent="6145"
    document.getElementById("items3num").textContent="6145"
  }
  else if(f==6){
    document.getElementById("items3").textContent= "Square Tube Brackets (Pair)"
    document.getElementById("tr3a").textContent="6278"
    document.getElementById("items3num").textContent="6278"
  }
  else if(f==7){
    document.getElementById("items3").textContent= "T-Track Brackets (Pair)"
    document.getElementById("tr3a").textContent="6446"
    document.getElementById("items3num").textContent="6446"
  }
  else if(f==8){
    document.getElementById("items3").textContent= "T-Track Direct Mount Socket"
    document.getElementById("tr3a").textContent="8115"
    document.getElementById("items3num").textContent="8115"
  }
  else if(f==9){
    document.getElementById("items3").textContent= "Double T-Track Brackets (Pair)"
    document.getElementById("tr3a").textContent="7992"
    document.getElementById("items3num").textContent="7992"
  }
  else if(f==10){
    document.getElementById("items3").textContent= "Double T-Track Direct Mount Socket"
    document.getElementById("tr3a").textContent="8115"
    document.getElementById("items3num").textContent="8115"
  }
  else if(f==11){
    document.getElementById("items3").textContent= "14 Inch Socket Bar"
    document.getElementById("tr3a").textContent="6147"
    document.getElementById("items3num").textContent="6147"
  }
  else if(f==12){
    document.getElementById("items3").textContent= "22 Inch Socket Bar"
    document.getElementById("tr3a").textContent="7635"
    document.getElementById("items3num").textContent="7635"
  }
  else if(f==13){
    document.getElementById("items3").textContent= "4 Inch Vertical Bar"
    document.getElementById("tr3a").textContent="8222"
    document.getElementById("items3num").textContent="8222"
  }
  else if(f==14){
    document.getElementById("items3").textContent= "6 Inch Vertical Bar"
    document.getElementById("tr3a").textContent="8071"
    document.getElementById("items3num").textContent="8071"
  }
  else if(f==15){
    document.getElementById("items3").textContent= "12 Inch Vertical Bar"
    document.getElementById("tr3a").textContent="8070"
    document.getElementById("items3num").textContent="8070"
  }
  else if(f==16){
    document.getElementById("items3").textContent= "Adjustable Vertical Bar"
    document.getElementById("tr3a").textContent="8114"
    document.getElementById("items3num").textContent="8114"
  }
  else if(f==17){
    document.getElementById("items3").textContent= "8 Inch Vertical Extension Bar"
    document.getElementById("tr3a").textContent="8081"
    document.getElementById("items3num").textContent="8018"
  }
  else if(f==18){
    document.getElementById("items3").textContent= "16 Inch Vertical Extension Bar"
    document.getElementById("tr3a").textContent="8216"
    document.getElementById("items3num").textContent="8216"
  }
  else if(f==19){
    document.getElementById("items3").textContent= "M2 Arm"
    document.getElementById("tr3a").textContent="8074"
    document.getElementById("items3num").textContent="8074"
  }
  else if(f==20){
    document.getElementById("items3").textContent= "M2X Arm"
    document.getElementById("tr3a").textContent="8069"
    document.getElementById("items3num").textContent="8069"
  }
  else if(f==21){
    document.getElementById("items3").textContent= "M2 Max Arm"
    document.getElementById("tr3a").textContent="8127"
    document.getElementById("items3num").textContent="8127"
  }
  else if(f==22){
    document.getElementById("items3").textContent= "Articulating Arm"
    document.getElementById("tr3a").textContent="8072"
    document.getElementById("items3num").textContent="8072"
  }
  else if(f==23){
    document.getElementById("items3").textContent= "Articulating Arm with Riser"
    document.getElementById("tr3a").textContent="8073"
    document.getElementById("items3num").textContent="8073"
  }
  else if(f==24){
    document.getElementById("items3").textContent= "Head and Tail Arm"
    document.getElementById("tr3a").textContent="8224"
    document.getElementById("items3num").textContent="8224"
  }
  else if(f==25){
    document.getElementById("items3").textContent= "Head and Tail Arm with Riser"
    document.getElementById("tr3a").textContent="8374"
    document.getElementById("items3num").textContent="8374"
  }
  else if(f==26){
    document.getElementById("items3").textContent= "Lockable Wedge Receiver"
    document.getElementById("tr3a").textContent="8076"
    document.getElementById("items3num").textContent="8076"
  }
  else if(f==27){
    document.getElementById("items3").textContent= "Rotary Wedge Receiver"
    document.getElementById("tr3a").textContent="8075"
    document.getElementById("items3num").textContent="8075"
  }
  else if(f==28){
    document.getElementById("items3").textContent= "Rolling Floor Stand"
    document.getElementById("tr3a").textContent="8213"
    document.getElementById("items3num").textContent="8213"
  }
  else if(f==29){
    document.getElementById("items3").textContent= "Rolling Floor Stand with Extended Legs"
    document.getElementById("tr3a").textContent="8294"
    document.getElementById("items3num").textContent="8294"
  }
  else if(f==30){
    document.getElementById("items3").textContent= "Table Clamp"
    document.getElementById("tr3a").textContent="8214"
    document.getElementById("items3num").textContent="8214"
  }
  else if(f==31){
    document.getElementById("items3").textContent= "Table Mount"
    document.getElementById("tr3a").textContent="8404"
    document.getElementById("items3num").textContent="8404"
  }
  else if(f==32){
    document.getElementById("items3").textContent= "Wall Track"
    document.getElementById("tr3a").textContent="N/A"
    document.getElementById("items3num").textContent="N/A"
  }
  else if(f==34){
    document.getElementById("items3").textContent= "Standard Wedge Reciever"
    document.getElementById("tr3a").textContent="6523"
    document.getElementById("items3num").textContent="6523"
  }
  else if(f==35){
    document.getElementById("items3").textContent= "Heavy Duty Wedge Reciever"
    document.getElementById("tr3a").textContent="7530"
    document.getElementById("items3num").textContent="7530"
  }
  else if(f==36){
    document.getElementById("items3").textContent= "Ball Joint Wedge Reciever"
    document.getElementById("tr3a").textContent="7782"
    document.getElementById("items3num").textContent="7782"
  }
  else if(f==37){
    document.getElementById("items3").textContent= "Multi-Positional Wedge Reciever"
    document.getElementById("tr3a").textContent="7580"
    document.getElementById("items3num").textContent="7580"
  }
  else if(f==38){
    document.getElementById("items3").textContent= "T-Bar Wedge Reciever"
    document.getElementById("tr3a").textContent="7485"
    document.getElementById("items3num").textContent="7485"
  }
  else if(f==40){
    document.getElementById("items3").textContent= "4 Inch Tube and Socket"
    document.getElementById("tr3a").textContent="8542"
    document.getElementById("items3num").textContent="8542"
  }
  else if(f==41){
    document.getElementById("items3").textContent= "6 Inch Tube and Socket"
    document.getElementById("tr3a").textContent="7174"
    document.getElementById("items3num").textContent="7174"
  }
  else if(f==42){
    document.getElementById("items3").textContent= "8 Inch Tube and Socket"
    document.getElementById("tr3a").textContent="7173"
    document.getElementById("items3num").textContent="7173"
  }
  else if(f==43){
    document.getElementById("items3").textContent= "10 Inch Tube and Socket"
    document.getElementById("tr3a").textContent="6155"
    document.getElementById("items3num").textContent="6155"
  }
  else if(f==44){
    document.getElementById("items3").textContent= "12 Inch Tube and Socket"
    document.getElementById("tr3a").textContent="8165"
    document.getElementById("items3num").textContent="8165"
  }
  else if(f==45){
    document.getElementById("items3").textContent= "Pivot Base"
    document.getElementById("tr3a").textContent="7584"
    document.getElementById("items3num").textContent="7584"
  }
  else if(f==46){
    document.getElementById("items3").textContent= "Tube Flange Mount"
    document.getElementById("tr3a").textContent="7747"
    document.getElementById("items3num").textContent="7747"
  }
  else if(f==47){
    document.getElementById("items3").textContent= "Socket Only"
    document.getElementById("tr3a").textContent="7582"
    document.getElementById("items3num").textContent="7582"
  }
  else if(f==48){
    document.getElementById("items3").textContent= "Whitmyer Socket Only"
    document.getElementById("tr3a").textContent="8083"
    document.getElementById("items3num").textContent="8083"
  }
  else if(f==49){
    document.getElementById("items3").textContent= "Universal Switch Mount"
    document.getElementById("tr3a").textContent="8116"
    document.getElementById("items3num").textContent="8116"
  }
  else if(f==50){
    document.getElementById("items3").textContent= "Cane Clamps"
    document.getElementById("tr3a").textContent="7754"
    document.getElementById("items3num").textContent="7754"
  }
  else if(f==51){
    document.getElementById("items3").textContent= "Switch Plate"
    document.getElementById("tr3a").textContent="7583"
    document.getElementById("items3num").textContent="7583"
  }
  else if(f==52){
    document.getElementById("items3").textContent= "Tube and Socket Ball Joint"
    document.getElementById("tr3a").textContent="N/A"
    document.getElementById("items3num").textContent="N/A"
  }
  else if(f==53){
    document.getElementById("items3").textContent= "Whitmyer Assembly"
    document.getElementById("tr3a").textContent="N/A"
    document.getElementById("items3num").textContent="N/A"
  }
  else if(f==55){
    document.getElementById("items3").textContent= "Heavy Duty Head Switch"
    document.getElementById("tr3a").textContent="3865"
    document.getElementById("items3num").textContent="3865"
  }
  else if(f==56){
    document.getElementById("items3").textContent= "Short Heavy Duty Head Switch"
    document.getElementById("tr3a").textContent="5064"
    document.getElementById("items3num").textContent="5064"
  }
  else if(f==57){
    document.getElementById("items3").textContent= "Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr3a").textContent="7526"
    document.getElementById("items3num").textContent="7526"
  }
  else if(f==58){
    document.getElementById("items3").textContent= "Short Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr3a").textContent="N/A"
    document.getElementById("items3num").textContent="N/A"
  }
  else if(f==59){
    document.getElementById("items3").textContent= "Heavy Duty Head Switch with Flex"
    document.getElementById("tr3a").textContent="6185"
    document.getElementById("items3num").textContent="6185"
  }
  else if(f==60){
    document.getElementById("items3").textContent= "Short Heavy Duty Head Switch with Flex"
    document.getElementById("tr3a").textContent="8545"
    document.getElementById("items3num").textContent="8545"
  }
  else if(f==61){
    document.getElementById("items3").textContent= "Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr3a").textContent="7527"
    document.getElementById("items3num").textContent="7527"
  }
  else if(f==62){
    document.getElementById("items3").textContent= "Short Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr3a").textContent="8046"
    document.getElementById("items3num").textContent="8046"
  }
  else if(f==63){
    document.getElementById("items3").textContent= "Light Touch Head Switch"
    document.getElementById("tr3a").textContent="6247"
    document.getElementById("items3num").textContent="6247"
  }
  else if(f==64){
    document.getElementById("items3").textContent= "Short Light Touch Head Switch"
    document.getElementById("tr3a").textContent="7196"
    document.getElementById("items3num").textContent="7196"
  }
  else if(f==65){
    document.getElementById("items3").textContent= "Paddle Switch"
    document.getElementById("tr3a").textContent="N/A"
    document.getElementById("items3num").textContent="N/A"
  }
  else if(f==66){
    document.getElementById("items3").textContent= "Single Sided Head Switch Mount"
    document.getElementById("tr3a").textContent="3151"
    document.getElementById("items3num").textContent="3151"
  }
  else if(f==67){
    document.getElementById("items3").textContent= "Double Sided Head Switch Mount"
    document.getElementById("tr3a").textContent="2798"
    document.getElementById("items3num").textContent="2798"
  }
  else if(f==68){
    document.getElementById("items3").textContent= "Whitmyer to Square Tube Adapter"
    document.getElementById("tr3a").textContent="7529"
    document.getElementById("items3num").textContent="7529"
  }
  else if(f==69){
    document.getElementById("items3").textContent= "Whitmyer Cobra to Square Tube Adapter"
    document.getElementById("tr3a").textContent="7544"
    document.getElementById("items3num").textContent="7544"
  }
  else if(f==70){
    document.getElementById("items3").textContent= "Whitmyer Lynx to Square Tube Adapter"
    document.getElementById("tr3a").textContent="7718"
    document.getElementById("items3num").textContent="7718"
  }
  else if(f==71){
    document.getElementById("items3").textContent= "Ottobock to Square Tube Adapter"
    document.getElementById("tr3a").textContent="7528"
    document.getElementById("items3num").textContent="7528"
  }
  else if(f==72){
    document.getElementById("items3").textContent= "Stealth i2i Square Tube Adapter"
    document.getElementById("tr3a").textContent="N/A"
    document.getElementById("items3num").textContent="N/A"
  }
  else if(f==73){
    document.getElementById("items3").textContent= "Wobble Switch Plate"
    document.getElementById("tr3a").textContent="8548"
    document.getElementById("items3num").textContent="8548"
  }
  else if(f==74){
    document.getElementById("items3").textContent= "Jelly Beamer Switch Plate"
    document.getElementById("tr3a").textContent="8128"
    document.getElementById("items3num").textContent="8128"
  }
  else if(f==75){
    document.getElementById("items3").textContent= "Cane Clamps"
    document.getElementById("tr3a").textContent="7754"
    document.getElementById("items3num").textContent="7754"
  }
  else if(f==76){
    document.getElementById("items3").textContent= "USB Joystick"
    document.getElementById("tr3a").textContent="8174"
    document.getElementById("items3num").textContent="8174"
  }
  else if(f==77){
    document.getElementById("items3").textContent= "USB Joystick with Jacks"
    document.getElementById("tr3a").textContent="8215"
    document.getElementById("items3num").textContent="8215"
  }
  else{
    document.getElementById("items3").textContent= ""
    document.getElementById("tr3a").textContent=""
    document.getElementById("items3num").textContent=""
  }
}

function product4(){
  var h=document.getElementById("tr4b").selectedIndex;
  if(h==1){

    document.getElementById("items4").textContent="Direct Mount Socket"
    document.getElementById("tr4a").textContent="7106"
    document.getElementById("items4num").textContent="7106"
  }
  else if(h==2){
    document.getElementById("items4").textContent= "Serrated Direct Mount Socket"
    document.getElementById("tr4a").textContent="8163"
    document.getElementById("items4num").textContent="8163"
  }
  else if(h==3){
    document.getElementById("items4").textContent= "Vertical Serrated Direct Mount Socket"
    document.getElementById("tr4a").textContent="8540"
    document.getElementById("items4num").textContent="8540"
  }
  else if(h==4){
    document.getElementById("items4").textContent= "Full Ring Bracets (Pair)"
    document.getElementById("tr4a").textContent="6146"
    document.getElementById("items4num").textContent="6146"
  }
  else if(h==5){
    document.getElementById("items4").textContent= "Zero Clearance Brackets (Pair)"
    document.getElementById("tr4a").textContent="6145"
    document.getElementById("items4num").textContent="6145"
  }
  else if(h==6){
    document.getElementById("items4").textContent= "Square Tube Brackets (Pair)"
    document.getElementById("tr4a").textContent="6278"
    document.getElementById("items4num").textContent="6278"
  }
  else if(h==7){
    document.getElementById("items4").textContent= "T-Track Brackets (Pair)"
    document.getElementById("tr4a").textContent="6446"
    document.getElementById("items4num").textContent="6446"
  }
  else if(h==8){
    document.getElementById("items4").textContent= "T-Track Direct Mount Socket"
    document.getElementById("tr4a").textContent="8115"
    document.getElementById("items4num").textContent="8115"
  }
  else if(h==9){
    document.getElementById("items4").textContent= "Double T-Track Brackets (Pair)"
    document.getElementById("tr4a").textContent="7992"
    document.getElementById("items4num").textContent="7992"
  }
  else if(h==10){
    document.getElementById("items4").textContent= "Double T-Track Direct Mount Socket"
    document.getElementById("tr4a").textContent="8115"
    document.getElementById("items4num").textContent="8115"
  }
  else if(h==11){
    document.getElementById("items4").textContent= "14 Inch Socket Bar"
    document.getElementById("tr4a").textContent="6147"
    document.getElementById("items4num").textContent="6147"
  }
  else if(h==12){
    document.getElementById("items4").textContent= "22 Inch Socket Bar"
    document.getElementById("tr4a").textContent="7635"
    document.getElementById("items4num").textContent="7635"
  }
  else if(h==13){
    document.getElementById("items4").textContent= "4 Inch Vertical Bar"
    document.getElementById("tr4a").textContent="8222"
    document.getElementById("items4num").textContent="8222"
  }
  else if(h==14){
    document.getElementById("items4").textContent= "6 Inch Vertical Bar"
    document.getElementById("tr4a").textContent="8071"
    document.getElementById("items4num").textContent="8071"
  }
  else if(h==15){
    document.getElementById("items4").textContent= "12 Inch Vertical Bar"
    document.getElementById("tr4a").textContent="8070"
    document.getElementById("items4num").textContent="8070"
  }
  else if(h==16){
    document.getElementById("items4").textContent= "Adjustable Vertical Bar"
    document.getElementById("tr4a").textContent="8114"
    document.getElementById("items4num").textContent="8114"
  }
  else if(h==17){
    document.getElementById("items4").textContent= "8 Inch Vertical Extension Bar"
    document.getElementById("tr4a").textContent="8081"
    document.getElementById("items4num").textContent="8018"
  }
  else if(h==18){
    document.getElementById("items4").textContent= "16 Inch Vertical Extension Bar"
    document.getElementById("tr4a").textContent="8216"
    document.getElementById("items4num").textContent="8216"
  }
  else if(h==19){
    document.getElementById("items4").textContent= "M2 Arm"
    document.getElementById("tr4a").textContent="8074"
    document.getElementById("items4num").textContent="8074"
  }
  else if(h==20){
    document.getElementById("items4").textContent= "M2X Arm"
    document.getElementById("tr4a").textContent="8069"
    document.getElementById("items4num").textContent="8069"
  }
  else if(h==21){
    document.getElementById("items4").textContent= "M2 Max Arm"
    document.getElementById("tr4a").textContent="8127"
    document.getElementById("items4num").textContent="8127"
  }
  else if(h==22){
    document.getElementById("items4").textContent= "Articulating Arm"
    document.getElementById("tr4a").textContent="8072"
    document.getElementById("items4num").textContent="8072"
  }
  else if(h==23){
    document.getElementById("items4").textContent= "Articulating Arm with Riser"
    document.getElementById("tr4a").textContent="8073"
    document.getElementById("items4num").textContent="8073"
  }
  else if(h==24){
    document.getElementById("items4").textContent= "Head and Tail Arm"
    document.getElementById("tr4a").textContent="8224"
    document.getElementById("items4num").textContent="8224"
  }
  else if(h==25){
    document.getElementById("items4").textContent= "Head and Tail Arm with Riser"
    document.getElementById("tr4a").textContent="8374"
    document.getElementById("items4num").textContent="8374"
  }
  else if(h==26){
    document.getElementById("items4").textContent= "Lockable Wedge Receiver"
    document.getElementById("tr4a").textContent="8076"
    document.getElementById("items4num").textContent="8076"
  }
  else if(h==27){
    document.getElementById("items4").textContent= "Rotary Wedge Receiver"
    document.getElementById("tr4a").textContent="8075"
    document.getElementById("items4num").textContent="8075"
  }
  else if(h==28){
    document.getElementById("items4").textContent= "Rolling Floor Stand"
    document.getElementById("tr4a").textContent="8213"
    document.getElementById("items4num").textContent="8213"
  }
  else if(h==29){
    document.getElementById("items4").textContent= "Rolling Floor Stand with Extended Legs"
    document.getElementById("tr4a").textContent="8294"
    document.getElementById("items4num").textContent="8294"
  }
  else if(h==30){
    document.getElementById("items4").textContent= "Table Clamp"
    document.getElementById("tr4a").textContent="8214"
    document.getElementById("items4num").textContent="8214"
  }
  else if(h==31){
    document.getElementById("items4").textContent= "Table Mount"
    document.getElementById("tr4a").textContent="8404"
    document.getElementById("items4num").textContent="8404"
  }
  else if(h==32){
    document.getElementById("items4").textContent= "Wall Track"
    document.getElementById("tr4a").textContent="N/A"
    document.getElementById("items4num").textContent="N/A"
  }
  else if(h==34){
    document.getElementById("items4").textContent= "Standard Wedge Reciever"
    document.getElementById("tr4a").textContent="6523"
    document.getElementById("items4num").textContent="6523"
  }
  else if(h==35){
    document.getElementById("items4").textContent= "Heavy Duty Wedge Reciever"
    document.getElementById("tr4a").textContent="7530"
    document.getElementById("items4num").textContent="7530"
  }
  else if(h==36){
    document.getElementById("items4").textContent= "Ball Joint Wedge Reciever"
    document.getElementById("tr4a").textContent="7782"
    document.getElementById("items4num").textContent="7782"
  }
  else if(h==37){
    document.getElementById("items4").textContent= "Multi-Positional Wedge Reciever"
    document.getElementById("tr4a").textContent="7580"
    document.getElementById("items4num").textContent="7580"
  }
  else if(h==38){
    document.getElementById("items4").textContent= "T-Bar Wedge Reciever"
    document.getElementById("tr4a").textContent="7485"
    document.getElementById("items4num").textContent="7485"
  }
  else if(h==40){
    document.getElementById("items4").textContent= "4 Inch Tube and Socket"
    document.getElementById("tr4a").textContent="8542"
    document.getElementById("items4num").textContent="8542"
  }
  else if(h==41){
    document.getElementById("items4").textContent= "6 Inch Tube and Socket"
    document.getElementById("tr4a").textContent="7174"
    document.getElementById("items4num").textContent="7174"
  }
  else if(h==42){
    document.getElementById("items4").textContent= "8 Inch Tube and Socket"
    document.getElementById("tr4a").textContent="7173"
    document.getElementById("items4num").textContent="7173"
  }
  else if(h==43){
    document.getElementById("items4").textContent= "10 Inch Tube and Socket"
    document.getElementById("tr4a").textContent="6155"
    document.getElementById("items4num").textContent="6155"
  }
  else if(h==44){
    document.getElementById("items4").textContent= "12 Inch Tube and Socket"
    document.getElementById("tr4a").textContent="8165"
    document.getElementById("items4num").textContent="8165"
  }
  else if(h==45){
    document.getElementById("items4").textContent= "Pivot Base"
    document.getElementById("tr4a").textContent="7584"
    document.getElementById("items4num").textContent="7584"
  }
  else if(h==46){
    document.getElementById("items4").textContent= "Tube Flange Mount"
    document.getElementById("tr4a").textContent="7747"
    document.getElementById("items4num").textContent="7747"
  }
  else if(h==47){
    document.getElementById("items4").textContent= "Socket Only"
    document.getElementById("tr4a").textContent="7582"
    document.getElementById("items4num").textContent="7582"
  }
  else if(h==48){
    document.getElementById("items4").textContent= "Whitmyer Socket Only"
    document.getElementById("tr4a").textContent="8083"
    document.getElementById("items4num").textContent="8083"
  }
  else if(h==49){
    document.getElementById("items4").textContent= "Universal Switch Mount"
    document.getElementById("tr4a").textContent="8116"
    document.getElementById("items4num").textContent="8116"
  }
  else if(h==50){
    document.getElementById("items4").textContent= "Cane Clamps"
    document.getElementById("tr4a").textContent="7754"
    document.getElementById("items4num").textContent="7754"
  }
  else if(h==51){
    document.getElementById("items4").textContent= "Switch Plate"
    document.getElementById("tr4a").textContent="7583"
    document.getElementById("items4num").textContent="7583"
  }
  else if(h==52){
    document.getElementById("items4").textContent= "Tube and Socket Ball Joint"
    document.getElementById("tr4a").textContent="N/A"
    document.getElementById("items4num").textContent="N/A"
  }
  else if(h==53){
    document.getElementById("items4").textContent= "Whitmyer Assembly"
    document.getElementById("tr4a").textContent="N/A"
    document.getElementById("items4num").textContent="N/A"
  }
  else if(h==55){
    document.getElementById("items4").textContent= "Heavy Duty Head Switch"
    document.getElementById("tr4a").textContent="3865"
    document.getElementById("items4num").textContent="3865"
  }
  else if(h==56){
    document.getElementById("items4").textContent= "Short Heavy Duty Head Switch"
    document.getElementById("tr4a").textContent="5064"
    document.getElementById("items4num").textContent="5064"
  }
  else if(h==57){
    document.getElementById("items4").textContent= "Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr4a").textContent="7526"
    document.getElementById("items4num").textContent="7526"
  }
  else if(h==58){
    document.getElementById("items4").textContent= "Short Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr4a").textContent="N/A"
    document.getElementById("items4num").textContent="N/A"
  }
  else if(h==59){
    document.getElementById("items4").textContent= "Heavy Duty Head Switch with Flex"
    document.getElementById("tr4a").textContent="6185"
    document.getElementById("items4num").textContent="6185"
  }
  else if(h==60){
    document.getElementById("items4").textContent= "Short Heavy Duty Head Switch with Flex"
    document.getElementById("tr4a").textContent="8545"
    document.getElementById("items4num").textContent="8545"
  }
  else if(h==61){
    document.getElementById("items4").textContent= "Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr4a").textContent="7527"
    document.getElementById("items4num").textContent="7527"
  }
  else if(h==62){
    document.getElementById("items4").textContent= "Short Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr4a").textContent="8046"
    document.getElementById("items4num").textContent="8046"
  }
  else if(h==63){
    document.getElementById("items4").textContent= "Light Touch Head Switch"
    document.getElementById("tr4a").textContent="6247"
    document.getElementById("items4num").textContent="6247"
  }
  else if(h==64){
    document.getElementById("items4").textContent= "Short Light Touch Head Switch"
    document.getElementById("tr4a").textContent="7196"
    document.getElementById("items4num").textContent="7196"
  }
  else if(h==65){
    document.getElementById("items4").textContent= "Paddle Switch"
    document.getElementById("tr4a").textContent="N/A"
    document.getElementById("items4num").textContent="N/A"
  }
  else if(h==66){
    document.getElementById("items4").textContent= "Single Sided Head Switch Mount"
    document.getElementById("tr4a").textContent="3151"
    document.getElementById("items4num").textContent="3151"
  }
  else if(h==67){
    document.getElementById("items4").textContent= "Double Sided Head Switch Mount"
    document.getElementById("tr4a").textContent="2798"
    document.getElementById("items4num").textContent="2798"
  }
  else if(h==68){
    document.getElementById("items4").textContent= "Whitmyer to Square Tube Adapter"
    document.getElementById("tr4a").textContent="7529"
    document.getElementById("items4num").textContent="7529"
  }
  else if(h==69){
    document.getElementById("items4").textContent= "Whitmyer Cobra to Square Tube Adapter"
    document.getElementById("tr4a").textContent="7544"
    document.getElementById("items4num").textContent="7544"
  }
  else if(h==70){
    document.getElementById("items4").textContent= "Whitmyer Lynx to Square Tube Adapter"
    document.getElementById("tr4a").textContent="7718"
    document.getElementById("items4num").textContent="7718"
  }
  else if(h==71){
    document.getElementById("items4").textContent= "Ottobock to Square Tube Adapter"
    document.getElementById("tr4a").textContent="7528"
    document.getElementById("items4num").textContent="7528"
  }
  else if(h==72){
    document.getElementById("items4").textContent= "Stealth i2i Square Tube Adapter"
    document.getElementById("tr4a").textContent="N/A"
    document.getElementById("items4num").textContent="N/A"
  }
  else if(h==73){
    document.getElementById("items4").textContent= "Wobble Switch Plate"
    document.getElementById("tr4a").textContent="8548"
    document.getElementById("items4num").textContent="8548"
  }
  else if(h==74){
    document.getElementById("items4").textContent= "Jelly Beamer Switch Plate"
    document.getElementById("tr4a").textContent="8128"
    document.getElementById("items4num").textContent="8128"
  }
  else if(h==75){
    document.getElementById("items4").textContent= "Cane Clamps"
    document.getElementById("tr4a").textContent="7754"
    document.getElementById("items4num").textContent="7754"
  }
  else if(h==76){
    document.getElementById("items4").textContent= "USB Joystick"
    document.getElementById("tr4a").textContent="8174"
    document.getElementById("items4num").textContent="8174"
  }
  else if(h==77){
    document.getElementById("items4").textContent= "USB Joystick with Jacks"
    document.getElementById("tr4a").textContent="8215"
    document.getElementById("items4num").textContent="8215"
  }
  else{
    document.getElementById("items4").textContent= ""
    document.getElementById("tr4a").textContent=""
    document.getElementById("items4num").textContent=""
  }
}

function product5(){
  var j=document.getElementById("tr5b").selectedIndex;
  if(j==1){

    document.getElementById("items5").textContent="Direct Mount Socket"
    document.getElementById("tr5a").textContent="7106"
    document.getElementById("items5num").textContent="7106"
  }
  else if(j==2){
    document.getElementById("items5").textContent= "Serrated Direct Mount Socket"
    document.getElementById("tr5a").textContent="8163"
    document.getElementById("items5num").textContent="8163"
  }
  else if(j==3){
    document.getElementById("items5").textContent= "Vertical Serrated Direct Mount Socket"
    document.getElementById("tr5a").textContent="8540"
    document.getElementById("items5num").textContent="8540"
  }
  else if(j==4){
    document.getElementById("items5").textContent= "Full Ring Bracets (Pair)"
    document.getElementById("tr5a").textContent="6146"
    document.getElementById("items5num").textContent="6146"
  }
  else if(j==5){
    document.getElementById("items5").textContent= "Zero Clearance Brackets (Pair)"
    document.getElementById("tr5a").textContent="6145"
    document.getElementById("items5num").textContent="6145"
  }
  else if(j==6){
    document.getElementById("items5").textContent= "Square Tube Brackets (Pair)"
    document.getElementById("tr5a").textContent="6278"
    document.getElementById("items5num").textContent="6278"
  }
  else if(j==7){
    document.getElementById("items5").textContent= "T-Track Brackets (Pair)"
    document.getElementById("tr5a").textContent="6446"
    document.getElementById("items5num").textContent="6446"
  }
  else if(j==8){
    document.getElementById("items5").textContent= "T-Track Direct Mount Socket"
    document.getElementById("tr5a").textContent="8115"
    document.getElementById("items5num").textContent="8115"
  }
  else if(j==9){
    document.getElementById("items5").textContent= "Double T-Track Brackets (Pair)"
    document.getElementById("tr5a").textContent="7992"
    document.getElementById("items5num").textContent="7992"
  }
  else if(j==10){
    document.getElementById("items5").textContent= "Double T-Track Direct Mount Socket"
    document.getElementById("tr5a").textContent="8115"
    document.getElementById("items5num").textContent="8115"
  }
  else if(j==11){
    document.getElementById("items5").textContent= "14 Inch Socket Bar"
    document.getElementById("tr5a").textContent="6147"
    document.getElementById("items5num").textContent="6147"
  }
  else if(j==12){
    document.getElementById("items5").textContent= "22 Inch Socket Bar"
    document.getElementById("tr5a").textContent="7635"
    document.getElementById("items5num").textContent="7635"
  }
  else if(j==13){
    document.getElementById("items5").textContent= "4 Inch Vertical Bar"
    document.getElementById("tr5a").textContent="8222"
    document.getElementById("items5num").textContent="8222"
  }
  else if(j==14){
    document.getElementById("items5").textContent= "6 Inch Vertical Bar"
    document.getElementById("tr5a").textContent="8071"
    document.getElementById("items5num").textContent="8071"
  }
  else if(j==15){
    document.getElementById("items5").textContent= "12 Inch Vertical Bar"
    document.getElementById("tr5a").textContent="8070"
    document.getElementById("items5num").textContent="8070"
  }
  else if(j==16){
    document.getElementById("items5").textContent= "Adjustable Vertical Bar"
    document.getElementById("tr5a").textContent="8114"
    document.getElementById("items5num").textContent="8114"
  }
  else if(j==17){
    document.getElementById("items5").textContent= "8 Inch Vertical Extension Bar"
    document.getElementById("tr5a").textContent="8081"
    document.getElementById("items5num").textContent="8018"
  }
  else if(j==18){
    document.getElementById("items5").textContent= "16 Inch Vertical Extension Bar"
    document.getElementById("tr5a").textContent="8216"
    document.getElementById("items5num").textContent="8216"
  }
  else if(j==19){
    document.getElementById("items5").textContent= "M2 Arm"
    document.getElementById("tr5a").textContent="8074"
    document.getElementById("items5num").textContent="8074"
  }
  else if(j==20){
    document.getElementById("items5").textContent= "M2X Arm"
    document.getElementById("tr5a").textContent="8069"
    document.getElementById("items5num").textContent="8069"
  }
  else if(j==21){
    document.getElementById("items5").textContent= "M2 Max Arm"
    document.getElementById("tr5a").textContent="8127"
    document.getElementById("items5num").textContent="8127"
  }
  else if(j==22){
    document.getElementById("items5").textContent= "Articulating Arm"
    document.getElementById("tr5a").textContent="8072"
    document.getElementById("items5num").textContent="8072"
  }
  else if(j==23){
    document.getElementById("items5").textContent= "Articulating Arm with Riser"
    document.getElementById("tr5a").textContent="8073"
    document.getElementById("items5num").textContent="8073"
  }
  else if(j==24){
    document.getElementById("items5").textContent= "Head and Tail Arm"
    document.getElementById("tr5a").textContent="8224"
    document.getElementById("items5num").textContent="8224"
  }
  else if(j==25){
    document.getElementById("items5").textContent= "Head and Tail Arm with Riser"
    document.getElementById("tr5a").textContent="8374"
    document.getElementById("items5num").textContent="8374"
  }
  else if(j==26){
    document.getElementById("items5").textContent= "Lockable Wedge Receiver"
    document.getElementById("tr5a").textContent="8076"
    document.getElementById("items5num").textContent="8076"
  }
  else if(j==27){
    document.getElementById("items5").textContent= "Rotary Wedge Receiver"
    document.getElementById("tr5a").textContent="8075"
    document.getElementById("items5num").textContent="8075"
  }
  else if(j==28){
    document.getElementById("items5").textContent= "Rolling Floor Stand"
    document.getElementById("tr5a").textContent="8213"
    document.getElementById("items5num").textContent="8213"
  }
  else if(j==29){
    document.getElementById("items5").textContent= "Rolling Floor Stand with Extended Legs"
    document.getElementById("tr5a").textContent="8294"
    document.getElementById("items5num").textContent="8294"
  }
  else if(j==30){
    document.getElementById("items5").textContent= "Table Clamp"
    document.getElementById("tr5a").textContent="8214"
    document.getElementById("items5num").textContent="8214"
  }
  else if(j==31){
    document.getElementById("items5").textContent= "Table Mount"
    document.getElementById("tr5a").textContent="8404"
    document.getElementById("items5num").textContent="8404"
  }
  else if(j==32){
    document.getElementById("items5").textContent= "Wall Track"
    document.getElementById("tr5a").textContent="N/A"
    document.getElementById("items5num").textContent="N/A"
  }
  else if(j==34){
    document.getElementById("items5").textContent= "Standard Wedge Reciever"
    document.getElementById("tr5a").textContent="6523"
    document.getElementById("items5num").textContent="6523"
  }
  else if(j==35){
    document.getElementById("items5").textContent= "Heavy Duty Wedge Reciever"
    document.getElementById("tr5a").textContent="7530"
    document.getElementById("items5num").textContent="7530"
  }
  else if(j==36){
    document.getElementById("items5").textContent= "Ball Joint Wedge Reciever"
    document.getElementById("tr5a").textContent="7782"
    document.getElementById("items5num").textContent="7782"
  }
  else if(j==37){
    document.getElementById("items5").textContent= "Multi-Positional Wedge Reciever"
    document.getElementById("tr5a").textContent="7580"
    document.getElementById("items5num").textContent="7580"
  }
  else if(j==38){
    document.getElementById("items5").textContent= "T-Bar Wedge Reciever"
    document.getElementById("tr5a").textContent="7485"
    document.getElementById("items5num").textContent="7485"
  }
  else if(j==40){
    document.getElementById("items5").textContent= "4 Inch Tube and Socket"
    document.getElementById("tr5a").textContent="8542"
    document.getElementById("items5num").textContent="8542"
  }
  else if(j==41){
    document.getElementById("items5").textContent= "6 Inch Tube and Socket"
    document.getElementById("tr5a").textContent="7174"
    document.getElementById("items5num").textContent="7174"
  }
  else if(j==42){
    document.getElementById("items5").textContent= "8 Inch Tube and Socket"
    document.getElementById("tr5a").textContent="7173"
    document.getElementById("items5num").textContent="7173"
  }
  else if(j==43){
    document.getElementById("items5").textContent= "10 Inch Tube and Socket"
    document.getElementById("tr5a").textContent="6155"
    document.getElementById("items5num").textContent="6155"
  }
  else if(j==44){
    document.getElementById("items5").textContent= "12 Inch Tube and Socket"
    document.getElementById("tr5a").textContent="8165"
    document.getElementById("items5num").textContent="8165"
  }
  else if(j==45){
    document.getElementById("items5").textContent= "Pivot Base"
    document.getElementById("tr5a").textContent="7584"
    document.getElementById("items5num").textContent="7584"
  }
  else if(j==46){
    document.getElementById("items5").textContent= "Tube Flange Mount"
    document.getElementById("tr5a").textContent="7747"
    document.getElementById("items5num").textContent="7747"
  }
  else if(j==47){
    document.getElementById("items5").textContent= "Socket Only"
    document.getElementById("tr5a").textContent="7582"
    document.getElementById("items5num").textContent="7582"
  }
  else if(j==48){
    document.getElementById("items5").textContent= "Whitmyer Socket Only"
    document.getElementById("tr5a").textContent="8083"
    document.getElementById("items5num").textContent="8083"
  }
  else if(j==49){
    document.getElementById("items5").textContent= "Universal Switch Mount"
    document.getElementById("tr5a").textContent="8116"
    document.getElementById("items5num").textContent="8116"
  }
  else if(j==50){
    document.getElementById("items5").textContent= "Cane Clamps"
    document.getElementById("tr5a").textContent="7754"
    document.getElementById("items5num").textContent="7754"
  }
  else if(j==51){
    document.getElementById("items5").textContent= "Switch Plate"
    document.getElementById("tr5a").textContent="7583"
    document.getElementById("items5num").textContent="7583"
  }
  else if(j==52){
    document.getElementById("items5").textContent= "Tube and Socket Ball Joint"
    document.getElementById("tr5a").textContent="N/A"
    document.getElementById("items5num").textContent="N/A"
  }
  else if(j==53){
    document.getElementById("items5").textContent= "Whitmyer Assembly"
    document.getElementById("tr5a").textContent="N/A"
    document.getElementById("items5num").textContent="N/A"
  }
  else if(j==55){
    document.getElementById("items5").textContent= "Heavy Duty Head Switch"
    document.getElementById("tr5a").textContent="3865"
    document.getElementById("items5num").textContent="3865"
  }
  else if(j==56){
    document.getElementById("items5").textContent= "Short Heavy Duty Head Switch"
    document.getElementById("tr5a").textContent="5064"
    document.getElementById("items5num").textContent="5064"
  }
  else if(j==57){
    document.getElementById("items5").textContent= "Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr5a").textContent="7526"
    document.getElementById("items5num").textContent="7526"
  }
  else if(j==58){
    document.getElementById("items5").textContent= "Short Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr5a").textContent="N/A"
    document.getElementById("items5num").textContent="N/A"
  }
  else if(j==59){
    document.getElementById("items5").textContent= "Heavy Duty Head Switch with Flex"
    document.getElementById("tr5a").textContent="6185"
    document.getElementById("items5num").textContent="6185"
  }
  else if(j==60){
    document.getElementById("items5").textContent= "Short Heavy Duty Head Switch with Flex"
    document.getElementById("tr5a").textContent="8545"
    document.getElementById("items5num").textContent="8545"
  }
  else if(j==61){
    document.getElementById("items5").textContent= "Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr5a").textContent="7527"
    document.getElementById("items5num").textContent="7527"
  }
  else if(j==62){
    document.getElementById("items5").textContent= "Short Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr5a").textContent="8046"
    document.getElementById("items5num").textContent="8046"
  }
  else if(j==63){
    document.getElementById("items5").textContent= "Light Touch Head Switch"
    document.getElementById("tr5a").textContent="6247"
    document.getElementById("items5num").textContent="6247"
  }
  else if(j==64){
    document.getElementById("items5").textContent= "Short Light Touch Head Switch"
    document.getElementById("tr5a").textContent="7196"
    document.getElementById("items5num").textContent="7196"
  }
  else if(j==65){
    document.getElementById("items5").textContent= "Paddle Switch"
    document.getElementById("tr5a").textContent="N/A"
    document.getElementById("items5num").textContent="N/A"
  }
  else if(j==66){
    document.getElementById("items5").textContent= "Single Sided Head Switch Mount"
    document.getElementById("tr5a").textContent="3151"
    document.getElementById("items5num").textContent="3151"
  }
  else if(j==67){
    document.getElementById("items5").textContent= "Double Sided Head Switch Mount"
    document.getElementById("tr5a").textContent="2798"
    document.getElementById("items5num").textContent="2798"
  }
  else if(j==68){
    document.getElementById("items5").textContent= "Whitmyer to Square Tube Adapter"
    document.getElementById("tr5a").textContent="7529"
    document.getElementById("items5num").textContent="7529"
  }
  else if(j==69){
    document.getElementById("items5").textContent= "Whitmyer Cobra to Square Tube Adapter"
    document.getElementById("tr5a").textContent="7544"
    document.getElementById("items5num").textContent="7544"
  }
  else if(j==70){
    document.getElementById("items5").textContent= "Whitmyer Lynx to Square Tube Adapter"
    document.getElementById("tr5a").textContent="7718"
    document.getElementById("items5num").textContent="7718"
  }
  else if(j==71){
    document.getElementById("items5").textContent= "Ottobock to Square Tube Adapter"
    document.getElementById("tr5a").textContent="7528"
    document.getElementById("items5num").textContent="7528"
  }
  else if(j==72){
    document.getElementById("items5").textContent= "Stealth i2i Square Tube Adapter"
    document.getElementById("tr5a").textContent="N/A"
    document.getElementById("items5num").textContent="N/A"
  }
  else if(j==73){
    document.getElementById("items5").textContent= "Wobble Switch Plate"
    document.getElementById("tr5a").textContent="8548"
    document.getElementById("items5num").textContent="8548"
  }
  else if(j==74){
    document.getElementById("items5").textContent= "Jelly Beamer Switch Plate"
    document.getElementById("tr5a").textContent="8128"
    document.getElementById("items5num").textContent="8128"
  }
  else if(j==75){
    document.getElementById("items5").textContent= "Cane Clamps"
    document.getElementById("tr5a").textContent="7754"
    document.getElementById("items5num").textContent="7754"
  }
  else if(j==76){
    document.getElementById("items5").textContent= "USB Joystick"
    document.getElementById("tr5a").textContent="8174"
    document.getElementById("items5num").textContent="8174"
  }
  else if(j==77){
    document.getElementById("items5").textContent= "USB Joystick with Jacks"
    document.getElementById("tr5a").textContent="8215"
    document.getElementById("items5num").textContent="8215"
  }
  else{
    document.getElementById("items5").textContent= ""
    document.getElementById("tr5a").textContent=""
    document.getElementById("items5num").textContent=""
  }
}

function product6(){
  var l=document.getElementById("tr6b").selectedIndex;
  if(l==1){

    document.getElementById("items6").textContent="Direct Mount Socket"
    document.getElementById("tr6a").textContent="7106"
    document.getElementById("items6num").textContent="7106"
  }
  else if(l==2){
    document.getElementById("items6").textContent= "Serrated Direct Mount Socket"
    document.getElementById("tr6a").textContent="8163"
    document.getElementById("items6num").textContent="8163"
  }
  else if(l==3){
    document.getElementById("items6").textContent= "Vertical Serrated Direct Mount Socket"
    document.getElementById("tr6a").textContent="8540"
    document.getElementById("items6num").textContent="8540"
  }
  else if(l==4){
    document.getElementById("items6").textContent= "Full Ring Bracets (Pair)"
    document.getElementById("tr6a").textContent="6146"
    document.getElementById("items6num").textContent="6146"
  }
  else if(l==5){
    document.getElementById("items6").textContent= "Zero Clearance Brackets (Pair)"
    document.getElementById("tr6a").textContent="6145"
    document.getElementById("items6num").textContent="6145"
  }
  else if(l==6){
    document.getElementById("items6").textContent= "Square Tube Brackets (Pair)"
    document.getElementById("tr6a").textContent="6278"
    document.getElementById("items6num").textContent="6278"
  }
  else if(l==7){
    document.getElementById("items6").textContent= "T-Track Brackets (Pair)"
    document.getElementById("tr6a").textContent="6446"
    document.getElementById("items6num").textContent="6446"
  }
  else if(l==8){
    document.getElementById("items6").textContent= "T-Track Direct Mount Socket"
    document.getElementById("tr6a").textContent="8115"
    document.getElementById("items6num").textContent="8115"
  }
  else if(l==9){
    document.getElementById("items6").textContent= "Double T-Track Brackets (Pair)"
    document.getElementById("tr6a").textContent="7992"
    document.getElementById("items6num").textContent="7992"
  }
  else if(l==10){
    document.getElementById("items6").textContent= "Double T-Track Direct Mount Socket"
    document.getElementById("tr6a").textContent="8115"
    document.getElementById("items6num").textContent="8115"
  }
  else if(l==11){
    document.getElementById("items6").textContent= "14 Inch Socket Bar"
    document.getElementById("tr6a").textContent="6147"
    document.getElementById("items6num").textContent="6147"
  }
  else if(l==12){
    document.getElementById("items6").textContent= "22 Inch Socket Bar"
    document.getElementById("tr6a").textContent="7635"
    document.getElementById("items6num").textContent="7635"
  }
  else if(l==13){
    document.getElementById("items6").textContent= "4 Inch Vertical Bar"
    document.getElementById("tr6a").textContent="8222"
    document.getElementById("items6num").textContent="8222"
  }
  else if(l==14){
    document.getElementById("items6").textContent= "6 Inch Vertical Bar"
    document.getElementById("tr6a").textContent="8071"
    document.getElementById("items6num").textContent="8071"
  }
  else if(l==15){
    document.getElementById("items6").textContent= "12 Inch Vertical Bar"
    document.getElementById("tr6a").textContent="8070"
    document.getElementById("items6num").textContent="8070"
  }
  else if(l==16){
    document.getElementById("items6").textContent= "Adjustable Vertical Bar"
    document.getElementById("tr6a").textContent="8114"
    document.getElementById("items6num").textContent="8114"
  }
  else if(l==17){
    document.getElementById("items6").textContent= "8 Inch Vertical Extension Bar"
    document.getElementById("tr6a").textContent="8081"
    document.getElementById("items6num").textContent="8018"
  }
  else if(l==18){
    document.getElementById("items6").textContent= "16 Inch Vertical Extension Bar"
    document.getElementById("tr6a").textContent="8216"
    document.getElementById("items6num").textContent="8216"
  }
  else if(l==19){
    document.getElementById("items6").textContent= "M2 Arm"
    document.getElementById("tr6a").textContent="8074"
    document.getElementById("items6num").textContent="8074"
  }
  else if(l==20){
    document.getElementById("items6").textContent= "M2X Arm"
    document.getElementById("tr6a").textContent="8069"
    document.getElementById("items6num").textContent="8069"
  }
  else if(l==21){
    document.getElementById("items6").textContent= "M2 Max Arm"
    document.getElementById("tr6a").textContent="8127"
    document.getElementById("items6num").textContent="8127"
  }
  else if(l==22){
    document.getElementById("items6").textContent= "Articulating Arm"
    document.getElementById("tr6a").textContent="8072"
    document.getElementById("items6num").textContent="8072"
  }
  else if(l==23){
    document.getElementById("items6").textContent= "Articulating Arm with Riser"
    document.getElementById("tr6a").textContent="8073"
    document.getElementById("items6num").textContent="8073"
  }
  else if(l==24){
    document.getElementById("items6").textContent= "Head and Tail Arm"
    document.getElementById("tr6a").textContent="8224"
    document.getElementById("items6num").textContent="8224"
  }
  else if(l==25){
    document.getElementById("items6").textContent= "Head and Tail Arm with Riser"
    document.getElementById("tr6a").textContent="8374"
    document.getElementById("items6num").textContent="8374"
  }
  else if(l==26){
    document.getElementById("items6").textContent= "Lockable Wedge Receiver"
    document.getElementById("tr6a").textContent="8076"
    document.getElementById("items6num").textContent="8076"
  }
  else if(l==27){
    document.getElementById("items6").textContent= "Rotary Wedge Receiver"
    document.getElementById("tr6a").textContent="8075"
    document.getElementById("items6num").textContent="8075"
  }
  else if(l==28){
    document.getElementById("items6").textContent= "Rolling Floor Stand"
    document.getElementById("tr6a").textContent="8213"
    document.getElementById("items6num").textContent="8213"
  }
  else if(l==29){
    document.getElementById("items6").textContent= "Rolling Floor Stand with Extended Legs"
    document.getElementById("tr6a").textContent="8294"
    document.getElementById("items6num").textContent="8294"
  }
  else if(l==30){
    document.getElementById("items6").textContent= "Table Clamp"
    document.getElementById("tr6a").textContent="8214"
    document.getElementById("items6num").textContent="8214"
  }
  else if(l==31){
    document.getElementById("items6").textContent= "Table Mount"
    document.getElementById("tr6a").textContent="8404"
    document.getElementById("items6num").textContent="8404"
  }
  else if(l==32){
    document.getElementById("items6").textContent= "Wall Track"
    document.getElementById("tr6a").textContent="N/A"
    document.getElementById("items6num").textContent="N/A"
  }
  else if(l==34){
    document.getElementById("items6").textContent= "Standard Wedge Reciever"
    document.getElementById("tr6a").textContent="6523"
    document.getElementById("items6num").textContent="6523"
  }
  else if(l==35){
    document.getElementById("items6").textContent= "Heavy Duty Wedge Reciever"
    document.getElementById("tr6a").textContent="7530"
    document.getElementById("items6num").textContent="7530"
  }
  else if(l==36){
    document.getElementById("items6").textContent= "Ball Joint Wedge Reciever"
    document.getElementById("tr6a").textContent="7782"
    document.getElementById("items6num").textContent="7782"
  }
  else if(l==37){
    document.getElementById("items6").textContent= "Multi-Positional Wedge Reciever"
    document.getElementById("tr6a").textContent="7580"
    document.getElementById("items6num").textContent="7580"
  }
  else if(l==38){
    document.getElementById("items6").textContent= "T-Bar Wedge Reciever"
    document.getElementById("tr6a").textContent="7485"
    document.getElementById("items6num").textContent="7485"
  }
  else if(l==40){
    document.getElementById("items6").textContent= "4 Inch Tube and Socket"
    document.getElementById("tr6a").textContent="8542"
    document.getElementById("items6num").textContent="8542"
  }
  else if(l==41){
    document.getElementById("items6").textContent= "6 Inch Tube and Socket"
    document.getElementById("tr6a").textContent="7174"
    document.getElementById("items6num").textContent="7174"
  }
  else if(l==42){
    document.getElementById("items6").textContent= "8 Inch Tube and Socket"
    document.getElementById("tr6a").textContent="7173"
    document.getElementById("items6num").textContent="7173"
  }
  else if(l==43){
    document.getElementById("items6").textContent= "10 Inch Tube and Socket"
    document.getElementById("tr6a").textContent="6155"
    document.getElementById("items6num").textContent="6155"
  }
  else if(l==44){
    document.getElementById("items6").textContent= "12 Inch Tube and Socket"
    document.getElementById("tr6a").textContent="8165"
    document.getElementById("items6num").textContent="8165"
  }
  else if(l==45){
    document.getElementById("items6").textContent= "Pivot Base"
    document.getElementById("tr6a").textContent="7584"
    document.getElementById("items6num").textContent="7584"
  }
  else if(l==46){
    document.getElementById("items6").textContent= "Tube Flange Mount"
    document.getElementById("tr6a").textContent="7747"
    document.getElementById("items6num").textContent="7747"
  }
  else if(l==47){
    document.getElementById("items6").textContent= "Socket Only"
    document.getElementById("tr6a").textContent="7582"
    document.getElementById("items6num").textContent="7582"
  }
  else if(l==48){
    document.getElementById("items6").textContent= "Whitmyer Socket Only"
    document.getElementById("tr6a").textContent="8083"
    document.getElementById("items6num").textContent="8083"
  }
  else if(l==49){
    document.getElementById("items6").textContent= "Universal Switch Mount"
    document.getElementById("tr6a").textContent="8116"
    document.getElementById("items6num").textContent="8116"
  }
  else if(l==50){
    document.getElementById("items6").textContent= "Cane Clamps"
    document.getElementById("tr6a").textContent="7754"
    document.getElementById("items6num").textContent="7754"
  }
  else if(l==51){
    document.getElementById("items6").textContent= "Switch Plate"
    document.getElementById("tr6a").textContent="7583"
    document.getElementById("items6num").textContent="7583"
  }
  else if(l==52){
    document.getElementById("items6").textContent= "Tube and Socket Ball Joint"
    document.getElementById("tr6a").textContent="N/A"
    document.getElementById("items6num").textContent="N/A"
  }
  else if(l==53){
    document.getElementById("items6").textContent= "Whitmyer Assembly"
    document.getElementById("tr6a").textContent="N/A"
    document.getElementById("items6num").textContent="N/A"
  }
  else if(l==55){
    document.getElementById("items6").textContent= "Heavy Duty Head Switch"
    document.getElementById("tr6a").textContent="3865"
    document.getElementById("items6num").textContent="3865"
  }
  else if(l==56){
    document.getElementById("items6").textContent= "Short Heavy Duty Head Switch"
    document.getElementById("tr6a").textContent="5064"
    document.getElementById("items6num").textContent="5064"
  }
  else if(l==57){
    document.getElementById("items6").textContent= "Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr6a").textContent="7526"
    document.getElementById("items6num").textContent="7526"
  }
  else if(l==58){
    document.getElementById("items6").textContent= "Short Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr6a").textContent="N/A"
    document.getElementById("items6num").textContent="N/A"
  }
  else if(l==59){
    document.getElementById("items6").textContent= "Heavy Duty Head Switch with Flex"
    document.getElementById("tr6a").textContent="6185"
    document.getElementById("items6num").textContent="6185"
  }
  else if(l==60){
    document.getElementById("items6").textContent= "Short Heavy Duty Head Switch with Flex"
    document.getElementById("tr6a").textContent="8545"
    document.getElementById("items6num").textContent="8545"
  }
  else if(l==61){
    document.getElementById("items6").textContent= "Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr6a").textContent="7527"
    document.getElementById("items6num").textContent="7527"
  }
  else if(l==62){
    document.getElementById("items6").textContent= "Short Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr6a").textContent="8046"
    document.getElementById("items6num").textContent="8046"
  }
  else if(l==63){
    document.getElementById("items6").textContent= "Light Touch Head Switch"
    document.getElementById("tr6a").textContent="6247"
    document.getElementById("items6num").textContent="6247"
  }
  else if(l==64){
    document.getElementById("items6").textContent= "Short Light Touch Head Switch"
    document.getElementById("tr6a").textContent="7196"
    document.getElementById("items6num").textContent="7196"
  }
  else if(l==65){
    document.getElementById("items6").textContent= "Paddle Switch"
    document.getElementById("tr6a").textContent="N/A"
    document.getElementById("items6num").textContent="N/A"
  }
  else if(l==66){
    document.getElementById("items6").textContent= "Single Sided Head Switch Mount"
    document.getElementById("tr6a").textContent="3151"
    document.getElementById("items6num").textContent="3151"
  }
  else if(l==67){
    document.getElementById("items6").textContent= "Double Sided Head Switch Mount"
    document.getElementById("tr6a").textContent="2798"
    document.getElementById("items6num").textContent="2798"
  }
  else if(l==68){
    document.getElementById("items6").textContent= "Whitmyer to Square Tube Adapter"
    document.getElementById("tr6a").textContent="7529"
    document.getElementById("items6num").textContent="7529"
  }
  else if(l==69){
    document.getElementById("items6").textContent= "Whitmyer Cobra to Square Tube Adapter"
    document.getElementById("tr6a").textContent="7544"
    document.getElementById("items6num").textContent="7544"
  }
  else if(l==70){
    document.getElementById("items6").textContent= "Whitmyer Lynx to Square Tube Adapter"
    document.getElementById("tr6a").textContent="7718"
    document.getElementById("items6num").textContent="7718"
  }
  else if(l==71){
    document.getElementById("items6").textContent= "Ottobock to Square Tube Adapter"
    document.getElementById("tr6a").textContent="7528"
    document.getElementById("items6num").textContent="7528"
  }
  else if(l==72){
    document.getElementById("items6").textContent= "Stealth i2i Square Tube Adapter"
    document.getElementById("tr6a").textContent="N/A"
    document.getElementById("items6num").textContent="N/A"
  }
  else if(l==73){
    document.getElementById("items6").textContent= "Wobble Switch Plate"
    document.getElementById("tr6a").textContent="8548"
    document.getElementById("items6num").textContent="8548"
  }
  else if(l==74){
    document.getElementById("items6").textContent= "Jelly Beamer Switch Plate"
    document.getElementById("tr6a").textContent="8128"
    document.getElementById("items6num").textContent="8128"
  }
  else if(l==75){
    document.getElementById("items6").textContent= "Cane Clamps"
    document.getElementById("tr6a").textContent="7754"
    document.getElementById("items6num").textContent="7754"
  }
  else if(l==76){
    document.getElementById("items6").textContent= "USB Joystick"
    document.getElementById("tr6a").textContent="8174"
    document.getElementById("items6num").textContent="8174"
  }
  else if(l==77){
    document.getElementById("items6").textContent= "USB Joystick with Jacks"
    document.getElementById("tr6a").textContent="8215"
    document.getElementById("items6num").textContent="8215"
  }
  else{
    document.getElementById("items6").textContent= ""
    document.getElementById("tr6a").textContent=""
    document.getElementById("items6num").textContent=""
  }
}

function product7(){
  var n=document.getElementById("tr7b").selectedIndex;
  if(n==1){

    document.getElementById("items7").textContent="Direct Mount Socket"
    document.getElementById("tr7a").textContent="7106"
    document.getElementById("items7num").textContent="7106"
  }
  else if(n==2){
    document.getElementById("items7").textContent= "Serrated Direct Mount Socket"
    document.getElementById("tr7a").textContent="8163"
    document.getElementById("items7num").textContent="8163"
  }
  else if(n==3){
    document.getElementById("items7").textContent= "Vertical Serrated Direct Mount Socket"
    document.getElementById("tr7a").textContent="8540"
    document.getElementById("items7num").textContent="8540"
  }
  else if(n==4){
    document.getElementById("items7").textContent= "Full Ring Bracets (Pair)"
    document.getElementById("tr7a").textContent="6146"
    document.getElementById("items7num").textContent="6146"
  }
  else if(n==5){
    document.getElementById("items7").textContent= "Zero Clearance Brackets (Pair)"
    document.getElementById("tr7a").textContent="6145"
    document.getElementById("items7num").textContent="6145"
  }
  else if(n==6){
    document.getElementById("items7").textContent= "Square Tube Brackets (Pair)"
    document.getElementById("tr7a").textContent="6278"
    document.getElementById("items7num").textContent="6278"
  }
  else if(n==7){
    document.getElementById("items7").textContent= "T-Track Brackets (Pair)"
    document.getElementById("tr7a").textContent="6446"
    document.getElementById("items7num").textContent="6446"
  }
  else if(n==8){
    document.getElementById("items7").textContent= "T-Track Direct Mount Socket"
    document.getElementById("tr7a").textContent="8115"
    document.getElementById("items7num").textContent="8115"
  }
  else if(n==9){
    document.getElementById("items7").textContent= "Double T-Track Brackets (Pair)"
    document.getElementById("tr7a").textContent="7992"
    document.getElementById("items7num").textContent="7992"
  }
  else if(n==10){
    document.getElementById("items7").textContent= "Double T-Track Direct Mount Socket"
    document.getElementById("tr7a").textContent="8115"
    document.getElementById("items7num").textContent="8115"
  }
  else if(n==11){
    document.getElementById("items7").textContent= "14 Inch Socket Bar"
    document.getElementById("tr7a").textContent="6147"
    document.getElementById("items7num").textContent="6147"
  }
  else if(n==12){
    document.getElementById("items7").textContent= "22 Inch Socket Bar"
    document.getElementById("tr7a").textContent="7635"
    document.getElementById("items7num").textContent="7635"
  }
  else if(n==13){
    document.getElementById("items7").textContent= "4 Inch Vertical Bar"
    document.getElementById("tr7a").textContent="8222"
    document.getElementById("items7num").textContent="8222"
  }
  else if(n==14){
    document.getElementById("items7").textContent= "6 Inch Vertical Bar"
    document.getElementById("tr7a").textContent="8071"
    document.getElementById("items7num").textContent="8071"
  }
  else if(n==15){
    document.getElementById("items7").textContent= "12 Inch Vertical Bar"
    document.getElementById("tr7a").textContent="8070"
    document.getElementById("items7num").textContent="8070"
  }
  else if(n==16){
    document.getElementById("items7").textContent= "Adjustable Vertical Bar"
    document.getElementById("tr7a").textContent="8114"
    document.getElementById("items7num").textContent="8114"
  }
  else if(n==17){
    document.getElementById("items7").textContent= "8 Inch Vertical Extension Bar"
    document.getElementById("tr7a").textContent="8081"
    document.getElementById("items7num").textContent="8018"
  }
  else if(n==18){
    document.getElementById("items7").textContent= "16 Inch Vertical Extension Bar"
    document.getElementById("tr7a").textContent="8216"
    document.getElementById("items7num").textContent="8216"
  }
  else if(n==19){
    document.getElementById("items7").textContent= "M2 Arm"
    document.getElementById("tr7a").textContent="8074"
    document.getElementById("items7num").textContent="8074"
  }
  else if(n==20){
    document.getElementById("items7").textContent= "M2X Arm"
    document.getElementById("tr7a").textContent="8069"
    document.getElementById("items7num").textContent="8069"
  }
  else if(n==21){
    document.getElementById("items7").textContent= "M2 Max Arm"
    document.getElementById("tr7a").textContent="8127"
    document.getElementById("items7num").textContent="8127"
  }
  else if(n==22){
    document.getElementById("items7").textContent= "Articulating Arm"
    document.getElementById("tr7a").textContent="8072"
    document.getElementById("items7num").textContent="8072"
  }
  else if(n==23){
    document.getElementById("items7").textContent= "Articulating Arm with Riser"
    document.getElementById("tr7a").textContent="8073"
    document.getElementById("items7num").textContent="8073"
  }
  else if(n==24){
    document.getElementById("items7").textContent= "Head and Tail Arm"
    document.getElementById("tr7a").textContent="8224"
    document.getElementById("items7num").textContent="8224"
  }
  else if(n==25){
    document.getElementById("items7").textContent= "Head and Tail Arm with Riser"
    document.getElementById("tr7a").textContent="8374"
    document.getElementById("items7num").textContent="8374"
  }
  else if(n==26){
    document.getElementById("items7").textContent= "Lockable Wedge Receiver"
    document.getElementById("tr7a").textContent="8076"
    document.getElementById("items7num").textContent="8076"
  }
  else if(n==27){
    document.getElementById("items7").textContent= "Rotary Wedge Receiver"
    document.getElementById("tr7a").textContent="8075"
    document.getElementById("items7num").textContent="8075"
  }
  else if(n==28){
    document.getElementById("items7").textContent= "Rolling Floor Stand"
    document.getElementById("tr7a").textContent="8213"
    document.getElementById("items7num").textContent="8213"
  }
  else if(n==29){
    document.getElementById("items7").textContent= "Rolling Floor Stand with Extended Legs"
    document.getElementById("tr7a").textContent="8294"
    document.getElementById("items7num").textContent="8294"
  }
  else if(n==30){
    document.getElementById("items7").textContent= "Table Clamp"
    document.getElementById("tr7a").textContent="8214"
    document.getElementById("items7num").textContent="8214"
  }
  else if(n==31){
    document.getElementById("items7").textContent= "Table Mount"
    document.getElementById("tr7a").textContent="8404"
    document.getElementById("items7num").textContent="8404"
  }
  else if(n==32){
    document.getElementById("items7").textContent= "Wall Track"
    document.getElementById("tr7a").textContent="N/A"
    document.getElementById("items7num").textContent="N/A"
  }
  else if(n==34){
    document.getElementById("items7").textContent= "Standard Wedge Reciever"
    document.getElementById("tr7a").textContent="6523"
    document.getElementById("items7num").textContent="6523"
  }
  else if(n==35){
    document.getElementById("items7").textContent= "Heavy Duty Wedge Reciever"
    document.getElementById("tr7a").textContent="7530"
    document.getElementById("items7num").textContent="7530"
  }
  else if(n==36){
    document.getElementById("items7").textContent= "Ball Joint Wedge Reciever"
    document.getElementById("tr7a").textContent="7782"
    document.getElementById("items7num").textContent="7782"
  }
  else if(n==37){
    document.getElementById("items7").textContent= "Multi-Positional Wedge Reciever"
    document.getElementById("tr7a").textContent="7580"
    document.getElementById("items7num").textContent="7580"
  }
  else if(n==38){
    document.getElementById("items7").textContent= "T-Bar Wedge Reciever"
    document.getElementById("tr7a").textContent="7485"
    document.getElementById("items7num").textContent="7485"
  }
  else if(n==40){
    document.getElementById("items7").textContent= "4 Inch Tube and Socket"
    document.getElementById("tr7a").textContent="8542"
    document.getElementById("items7num").textContent="8542"
  }
  else if(n==41){
    document.getElementById("items7").textContent= "6 Inch Tube and Socket"
    document.getElementById("tr7a").textContent="7174"
    document.getElementById("items7num").textContent="7174"
  }
  else if(n==42){
    document.getElementById("items7").textContent= "8 Inch Tube and Socket"
    document.getElementById("tr7a").textContent="7173"
    document.getElementById("items7num").textContent="7173"
  }
  else if(n==43){
    document.getElementById("items7").textContent= "10 Inch Tube and Socket"
    document.getElementById("tr7a").textContent="6155"
    document.getElementById("items7num").textContent="6155"
  }
  else if(n==44){
    document.getElementById("items7").textContent= "12 Inch Tube and Socket"
    document.getElementById("tr7a").textContent="8165"
    document.getElementById("items7num").textContent="8165"
  }
  else if(n==45){
    document.getElementById("items7").textContent= "Pivot Base"
    document.getElementById("tr7a").textContent="7584"
    document.getElementById("items7num").textContent="7584"
  }
  else if(n==46){
    document.getElementById("items7").textContent= "Tube Flange Mount"
    document.getElementById("tr7a").textContent="7747"
    document.getElementById("items7num").textContent="7747"
  }
  else if(n==47){
    document.getElementById("items7").textContent= "Socket Only"
    document.getElementById("tr7a").textContent="7582"
    document.getElementById("items7num").textContent="7582"
  }
  else if(n==48){
    document.getElementById("items7").textContent= "Whitmyer Socket Only"
    document.getElementById("tr7a").textContent="8083"
    document.getElementById("items7num").textContent="8083"
  }
  else if(n==49){
    document.getElementById("items7").textContent= "Universal Switch Mount"
    document.getElementById("tr7a").textContent="8116"
    document.getElementById("items7num").textContent="8116"
  }
  else if(n==50){
    document.getElementById("items7").textContent= "Cane Clamps"
    document.getElementById("tr7a").textContent="7754"
    document.getElementById("items7num").textContent="7754"
  }
  else if(n==51){
    document.getElementById("items7").textContent= "Switch Plate"
    document.getElementById("tr7a").textContent="7583"
    document.getElementById("items7num").textContent="7583"
  }
  else if(n==52){
    document.getElementById("items7").textContent= "Tube and Socket Ball Joint"
    document.getElementById("tr7a").textContent="N/A"
    document.getElementById("items7num").textContent="N/A"
  }
  else if(n==53){
    document.getElementById("items7").textContent= "Whitmyer Assembly"
    document.getElementById("tr7a").textContent="N/A"
    document.getElementById("items7num").textContent="N/A"
  }
  else if(n==55){
    document.getElementById("items7").textContent= "Heavy Duty Head Switch"
    document.getElementById("tr7a").textContent="3865"
    document.getElementById("items7num").textContent="3865"
  }
  else if(n==56){
    document.getElementById("items7").textContent= "Short Heavy Duty Head Switch"
    document.getElementById("tr7a").textContent="5064"
    document.getElementById("items7num").textContent="5064"
  }
  else if(n==57){
    document.getElementById("items7").textContent= "Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr7a").textContent="7526"
    document.getElementById("items7num").textContent="7526"
  }
  else if(n==58){
    document.getElementById("items7").textContent= "Short Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr7a").textContent="N/A"
    document.getElementById("items7num").textContent="N/A"
  }
  else if(n==59){
    document.getElementById("items7").textContent= "Heavy Duty Head Switch with Flex"
    document.getElementById("tr7a").textContent="6185"
    document.getElementById("items7num").textContent="6185"
  }
  else if(n==60){
    document.getElementById("items7").textContent= "Short Heavy Duty Head Switch with Flex"
    document.getElementById("tr7a").textContent="8545"
    document.getElementById("items7num").textContent="8545"
  }
  else if(n==61){
    document.getElementById("items7").textContent= "Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr7a").textContent="7527"
    document.getElementById("items7num").textContent="7527"
  }
  else if(n==62){
    document.getElementById("items7").textContent= "Short Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr7a").textContent="8046"
    document.getElementById("items7num").textContent="8046"
  }
  else if(n==63){
    document.getElementById("items7").textContent= "Light Touch Head Switch"
    document.getElementById("tr7a").textContent="6247"
    document.getElementById("items7num").textContent="6247"
  }
  else if(n==64){
    document.getElementById("items7").textContent= "Short Light Touch Head Switch"
    document.getElementById("tr7a").textContent="7196"
    document.getElementById("items7num").textContent="7196"
  }
  else if(n==65){
    document.getElementById("items7").textContent= "Paddle Switch"
    document.getElementById("tr7a").textContent="N/A"
    document.getElementById("items7num").textContent="N/A"
  }
  else if(n==66){
    document.getElementById("items7").textContent= "Single Sided Head Switch Mount"
    document.getElementById("tr7a").textContent="3151"
    document.getElementById("items7num").textContent="3151"
  }
  else if(n==67){
    document.getElementById("items7").textContent= "Double Sided Head Switch Mount"
    document.getElementById("tr7a").textContent="2798"
    document.getElementById("items7num").textContent="2798"
  }
  else if(n==68){
    document.getElementById("items7").textContent= "Whitmyer to Square Tube Adapter"
    document.getElementById("tr7a").textContent="7529"
    document.getElementById("items7num").textContent="7529"
  }
  else if(n==69){
    document.getElementById("items7").textContent= "Whitmyer Cobra to Square Tube Adapter"
    document.getElementById("tr7a").textContent="7544"
    document.getElementById("items7num").textContent="7544"
  }
  else if(n==70){
    document.getElementById("items7").textContent= "Whitmyer Lynx to Square Tube Adapter"
    document.getElementById("tr7a").textContent="7718"
    document.getElementById("items7num").textContent="7718"
  }
  else if(n==71){
    document.getElementById("items7").textContent= "Ottobock to Square Tube Adapter"
    document.getElementById("tr7a").textContent="7528"
    document.getElementById("items7num").textContent="7528"
  }
  else if(n==72){
    document.getElementById("items7").textContent= "Stealth i2i Square Tube Adapter"
    document.getElementById("tr7a").textContent="N/A"
    document.getElementById("items7num").textContent="N/A"
  }
  else if(n==73){
    document.getElementById("items7").textContent= "Wobble Switch Plate"
    document.getElementById("tr7a").textContent="8548"
    document.getElementById("items7num").textContent="8548"
  }
  else if(n==74){
    document.getElementById("items7").textContent= "Jelly Beamer Switch Plate"
    document.getElementById("tr7a").textContent="8128"
    document.getElementById("items7num").textContent="8128"
  }
  else if(n==75){
    document.getElementById("items7").textContent= "Cane Clamps"
    document.getElementById("tr7a").textContent="7754"
    document.getElementById("items7num").textContent="7754"
  }
  else if(n==76){
    document.getElementById("items7").textContent= "USB Joystick"
    document.getElementById("tr7a").textContent="8174"
    document.getElementById("items7num").textContent="8174"
  }
  else if(n==77){
    document.getElementById("items7").textContent= "USB Joystick with Jacks"
    document.getElementById("tr7a").textContent="8215"
    document.getElementById("items7num").textContent="8215"
  }
  else{
    document.getElementById("items7").textContent= ""
    document.getElementById("tr7a").textContent=""
    document.getElementById("items7num").textContent=""
  }
}

function product8(){
  var p=document.getElementById("tr8b").selectedIndex;
  if(p==1){

    document.getElementById("items8").textContent="Direct Mount Socket"
    document.getElementById("tr8a").textContent="7106"
    document.getElementById("items8num").textContent="7106"
  }
  else if(p==2){
    document.getElementById("items8").textContent= "Serrated Direct Mount Socket"
    document.getElementById("tr8a").textContent="8163"
    document.getElementById("items8num").textContent="8163"
  }
  else if(p==3){
    document.getElementById("items8").textContent= "Vertical Serrated Direct Mount Socket"
    document.getElementById("tr8a").textContent="8540"
    document.getElementById("items8num").textContent="8540"
  }
  else if(p==4){
    document.getElementById("items8").textContent= "Full Ring Bracets (Pair)"
    document.getElementById("tr8a").textContent="6146"
    document.getElementById("items8num").textContent="6146"
  }
  else if(p==5){
    document.getElementById("items8").textContent= "Zero Clearance Brackets (Pair)"
    document.getElementById("tr8a").textContent="6145"
    document.getElementById("items8num").textContent="6145"
  }
  else if(p==6){
    document.getElementById("items8").textContent= "Square Tube Brackets (Pair)"
    document.getElementById("tr8a").textContent="6278"
    document.getElementById("items8num").textContent="6278"
  }
  else if(p==7){
    document.getElementById("items8").textContent= "T-Track Brackets (Pair)"
    document.getElementById("tr8a").textContent="6446"
    document.getElementById("items8num").textContent="6446"
  }
  else if(p==8){
    document.getElementById("items8").textContent= "T-Track Direct Mount Socket"
    document.getElementById("tr8a").textContent="8115"
    document.getElementById("items8num").textContent="8115"
  }
  else if(p==9){
    document.getElementById("items8").textContent= "Double T-Track Brackets (Pair)"
    document.getElementById("tr8a").textContent="7992"
    document.getElementById("items8num").textContent="7992"
  }
  else if(p==10){
    document.getElementById("items8").textContent= "Double T-Track Direct Mount Socket"
    document.getElementById("tr8a").textContent="8115"
    document.getElementById("items8num").textContent="8115"
  }
  else if(p==11){
    document.getElementById("items8").textContent= "14 Inch Socket Bar"
    document.getElementById("tr8a").textContent="6147"
    document.getElementById("items8num").textContent="6147"
  }
  else if(p==12){
    document.getElementById("items8").textContent= "22 Inch Socket Bar"
    document.getElementById("tr8a").textContent="7635"
    document.getElementById("items8num").textContent="7635"
  }
  else if(p==13){
    document.getElementById("items8").textContent= "4 Inch Vertical Bar"
    document.getElementById("tr8a").textContent="8222"
    document.getElementById("items8num").textContent="8222"
  }
  else if(p==14){
    document.getElementById("items8").textContent= "6 Inch Vertical Bar"
    document.getElementById("tr8a").textContent="8071"
    document.getElementById("items8num").textContent="8071"
  }
  else if(p==15){
    document.getElementById("items8").textContent= "12 Inch Vertical Bar"
    document.getElementById("tr8a").textContent="8070"
    document.getElementById("items8num").textContent="8070"
  }
  else if(p==16){
    document.getElementById("items8").textContent= "Adjustable Vertical Bar"
    document.getElementById("tr8a").textContent="8114"
    document.getElementById("items8num").textContent="8114"
  }
  else if(p==17){
    document.getElementById("items8").textContent= "8 Inch Vertical Extension Bar"
    document.getElementById("tr8a").textContent="8081"
    document.getElementById("items8num").textContent="8018"
  }
  else if(p==18){
    document.getElementById("items8").textContent= "16 Inch Vertical Extension Bar"
    document.getElementById("tr8a").textContent="8216"
    document.getElementById("items8num").textContent="8216"
  }
  else if(p==19){
    document.getElementById("items8").textContent= "M2 Arm"
    document.getElementById("tr8a").textContent="8074"
    document.getElementById("items8num").textContent="8074"
  }
  else if(p==20){
    document.getElementById("items8").textContent= "M2X Arm"
    document.getElementById("tr8a").textContent="8069"
    document.getElementById("items8num").textContent="8069"
  }
  else if(p==21){
    document.getElementById("items8").textContent= "M2 Max Arm"
    document.getElementById("tr8a").textContent="8127"
    document.getElementById("items8num").textContent="8127"
  }
  else if(p==22){
    document.getElementById("items8").textContent= "Articulating Arm"
    document.getElementById("tr8a").textContent="8072"
    document.getElementById("items8num").textContent="8072"
  }
  else if(p==23){
    document.getElementById("items8").textContent= "Articulating Arm with Riser"
    document.getElementById("tr8a").textContent="8073"
    document.getElementById("items8num").textContent="8073"
  }
  else if(p==24){
    document.getElementById("items8").textContent= "Head and Tail Arm"
    document.getElementById("tr8a").textContent="8224"
    document.getElementById("items8num").textContent="8224"
  }
  else if(p==25){
    document.getElementById("items8").textContent= "Head and Tail Arm with Riser"
    document.getElementById("tr8a").textContent="8374"
    document.getElementById("items8num").textContent="8374"
  }
  else if(p==26){
    document.getElementById("items8").textContent= "Lockable Wedge Receiver"
    document.getElementById("tr8a").textContent="8076"
    document.getElementById("items8num").textContent="8076"
  }
  else if(p==27){
    document.getElementById("items8").textContent= "Rotary Wedge Receiver"
    document.getElementById("tr8a").textContent="8075"
    document.getElementById("items8num").textContent="8075"
  }
  else if(p==28){
    document.getElementById("items8").textContent= "Rolling Floor Stand"
    document.getElementById("tr8a").textContent="8213"
    document.getElementById("items8num").textContent="8213"
  }
  else if(p==29){
    document.getElementById("items8").textContent= "Rolling Floor Stand with Extended Legs"
    document.getElementById("tr8a").textContent="8294"
    document.getElementById("items8num").textContent="8294"
  }
  else if(p==30){
    document.getElementById("items8").textContent= "Table Clamp"
    document.getElementById("tr8a").textContent="8214"
    document.getElementById("items8num").textContent="8214"
  }
  else if(p==31){
    document.getElementById("items8").textContent= "Table Mount"
    document.getElementById("tr8a").textContent="8404"
    document.getElementById("items8num").textContent="8404"
  }
  else if(p==32){
    document.getElementById("items8").textContent= "Wall Track"
    document.getElementById("tr8a").textContent="N/A"
    document.getElementById("items8num").textContent="N/A"
  }
  else if(p==34){
    document.getElementById("items8").textContent= "Standard Wedge Reciever"
    document.getElementById("tr8a").textContent="6523"
    document.getElementById("items8num").textContent="6523"
  }
  else if(p==35){
    document.getElementById("items8").textContent= "Heavy Duty Wedge Reciever"
    document.getElementById("tr8a").textContent="7530"
    document.getElementById("items8num").textContent="7530"
  }
  else if(p==36){
    document.getElementById("items8").textContent= "Ball Joint Wedge Reciever"
    document.getElementById("tr8a").textContent="7782"
    document.getElementById("items8num").textContent="7782"
  }
  else if(p==37){
    document.getElementById("items8").textContent= "Multi-Positional Wedge Reciever"
    document.getElementById("tr8a").textContent="7580"
    document.getElementById("items8num").textContent="7580"
  }
  else if(p==38){
    document.getElementById("items8").textContent= "T-Bar Wedge Reciever"
    document.getElementById("tr8a").textContent="7485"
    document.getElementById("items8num").textContent="7485"
  }
  else if(p==40){
    document.getElementById("items8").textContent= "4 Inch Tube and Socket"
    document.getElementById("tr8a").textContent="8542"
    document.getElementById("items8num").textContent="8542"
  }
  else if(p==41){
    document.getElementById("items8").textContent= "6 Inch Tube and Socket"
    document.getElementById("tr8a").textContent="7174"
    document.getElementById("items8num").textContent="7174"
  }
  else if(p==42){
    document.getElementById("items8").textContent= "8 Inch Tube and Socket"
    document.getElementById("tr8a").textContent="7173"
    document.getElementById("items8num").textContent="7173"
  }
  else if(p==43){
    document.getElementById("items8").textContent= "10 Inch Tube and Socket"
    document.getElementById("tr8a").textContent="6155"
    document.getElementById("items8num").textContent="6155"
  }
  else if(p==44){
    document.getElementById("items8").textContent= "12 Inch Tube and Socket"
    document.getElementById("tr8a").textContent="8165"
    document.getElementById("items8num").textContent="8165"
  }
  else if(p==45){
    document.getElementById("items8").textContent= "Pivot Base"
    document.getElementById("tr8a").textContent="7584"
    document.getElementById("items8num").textContent="7584"
  }
  else if(p==46){
    document.getElementById("items8").textContent= "Tube Flange Mount"
    document.getElementById("tr8a").textContent="7747"
    document.getElementById("items8num").textContent="7747"
  }
  else if(p==47){
    document.getElementById("items8").textContent= "Socket Only"
    document.getElementById("tr8a").textContent="7582"
    document.getElementById("items8num").textContent="7582"
  }
  else if(p==48){
    document.getElementById("items8").textContent= "Whitmyer Socket Only"
    document.getElementById("tr8a").textContent="8083"
    document.getElementById("items8num").textContent="8083"
  }
  else if(p==49){
    document.getElementById("items8").textContent= "Universal Switch Mount"
    document.getElementById("tr8a").textContent="8116"
    document.getElementById("items8num").textContent="8116"
  }
  else if(p==50){
    document.getElementById("items8").textContent= "Cane Clamps"
    document.getElementById("tr8a").textContent="7754"
    document.getElementById("items8num").textContent="7754"
  }
  else if(p==51){
    document.getElementById("items8").textContent= "Switch Plate"
    document.getElementById("tr8a").textContent="7583"
    document.getElementById("items8num").textContent="7583"
  }
  else if(p==52){
    document.getElementById("items8").textContent= "Tube and Socket Ball Joint"
    document.getElementById("tr8a").textContent="N/A"
    document.getElementById("items8num").textContent="N/A"
  }
  else if(p==53){
    document.getElementById("items8").textContent= "Whitmyer Assembly"
    document.getElementById("tr8a").textContent="N/A"
    document.getElementById("items8num").textContent="N/A"
  }
  else if(p==55){
    document.getElementById("items8").textContent= "Heavy Duty Head Switch"
    document.getElementById("tr8a").textContent="3865"
    document.getElementById("items8num").textContent="3865"
  }
  else if(p==56){
    document.getElementById("items8").textContent= "Short Heavy Duty Head Switch"
    document.getElementById("tr8a").textContent="5064"
    document.getElementById("items8num").textContent="5064"
  }
  else if(p==57){
    document.getElementById("items8").textContent= "Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr8a").textContent="7526"
    document.getElementById("items8num").textContent="7526"
  }
  else if(p==58){
    document.getElementById("items8").textContent= "Short Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr8a").textContent="N/A"
    document.getElementById("items8num").textContent="N/A"
  }
  else if(p==59){
    document.getElementById("items8").textContent= "Heavy Duty Head Switch with Flex"
    document.getElementById("tr8a").textContent="6185"
    document.getElementById("items8num").textContent="6185"
  }
  else if(p==60){
    document.getElementById("items8").textContent= "Short Heavy Duty Head Switch with Flex"
    document.getElementById("tr8a").textContent="8545"
    document.getElementById("items8num").textContent="8545"
  }
  else if(p==61){
    document.getElementById("items8").textContent= "Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr8a").textContent="7527"
    document.getElementById("items8num").textContent="7527"
  }
  else if(p==62){
    document.getElementById("items8").textContent= "Short Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr8a").textContent="8046"
    document.getElementById("items8num").textContent="8046"
  }
  else if(p==63){
    document.getElementById("items8").textContent= "Light Touch Head Switch"
    document.getElementById("tr8a").textContent="6247"
    document.getElementById("items8num").textContent="6247"
  }
  else if(p==64){
    document.getElementById("items8").textContent= "Short Light Touch Head Switch"
    document.getElementById("tr8a").textContent="7196"
    document.getElementById("items8num").textContent="7196"
  }
  else if(p==65){
    document.getElementById("items8").textContent= "Paddle Switch"
    document.getElementById("tr8a").textContent="N/A"
    document.getElementById("items8num").textContent="N/A"
  }
  else if(p==66){
    document.getElementById("items8").textContent= "Single Sided Head Switch Mount"
    document.getElementById("tr8a").textContent="3151"
    document.getElementById("items8num").textContent="3151"
  }
  else if(p==67){
    document.getElementById("items8").textContent= "Double Sided Head Switch Mount"
    document.getElementById("tr8a").textContent="2798"
    document.getElementById("items8num").textContent="2798"
  }
  else if(p==68){
    document.getElementById("items8").textContent= "Whitmyer to Square Tube Adapter"
    document.getElementById("tr8a").textContent="7529"
    document.getElementById("items8num").textContent="7529"
  }
  else if(p==69){
    document.getElementById("items8").textContent= "Whitmyer Cobra to Square Tube Adapter"
    document.getElementById("tr8a").textContent="7544"
    document.getElementById("items8num").textContent="7544"
  }
  else if(p==70){
    document.getElementById("items8").textContent= "Whitmyer Lynx to Square Tube Adapter"
    document.getElementById("tr8a").textContent="7718"
    document.getElementById("items8num").textContent="7718"
  }
  else if(p==71){
    document.getElementById("items8").textContent= "Ottobock to Square Tube Adapter"
    document.getElementById("tr8a").textContent="7528"
    document.getElementById("items8num").textContent="7528"
  }
  else if(p==72){
    document.getElementById("items8").textContent= "Stealth i2i Square Tube Adapter"
    document.getElementById("tr8a").textContent="N/A"
    document.getElementById("items8num").textContent="N/A"
  }
  else if(p==73){
    document.getElementById("items8").textContent= "Wobble Switch Plate"
    document.getElementById("tr8a").textContent="8548"
    document.getElementById("items8num").textContent="8548"
  }
  else if(p==74){
    document.getElementById("items8").textContent= "Jelly Beamer Switch Plate"
    document.getElementById("tr8a").textContent="8128"
    document.getElementById("items8num").textContent="8128"
  }
  else if(p==75){
    document.getElementById("items8").textContent= "Cane Clamps"
    document.getElementById("tr8a").textContent="7754"
    document.getElementById("items8num").textContent="7754"
  }
  else if(p==76){
    document.getElementById("items8").textContent= "USB Joystick"
    document.getElementById("tr8a").textContent="8174"
    document.getElementById("items8num").textContent="8174"
  }
  else if(p==77){
    document.getElementById("items8").textContent= "USB Joystick with Jacks"
    document.getElementById("tr8a").textContent="8215"
    document.getElementById("items8num").textContent="8215"
  }
  else{
    document.getElementById("items8").textContent= ""
    document.getElementById("tr8a").textContent=""
    document.getElementById("items8num").textContent=""
  }
}

function product9(){
  var r=document.getElementById("tr9b").selectedIndex;
  if(r==1){

    document.getElementById("items9").textContent="Direct Mount Socket"
    document.getElementById("tr9a").textContent="7106"
    document.getElementById("items9num").textContent="7106"
  }
  else if(r==2){
    document.getElementById("items9").textContent= "Serrated Direct Mount Socket"
    document.getElementById("tr9a").textContent="8163"
    document.getElementById("items9num").textContent="8163"
  }
  else if(r==3){
    document.getElementById("items9").textContent= "Vertical Serrated Direct Mount Socket"
    document.getElementById("tr9a").textContent="8540"
    document.getElementById("items9num").textContent="8540"
  }
  else if(r==4){
    document.getElementById("items9").textContent= "Full Ring Bracets (Pair)"
    document.getElementById("tr9a").textContent="6146"
    document.getElementById("items9num").textContent="6146"
  }
  else if(r==5){
    document.getElementById("items9").textContent= "Zero Clearance Brackets (Pair)"
    document.getElementById("tr9a").textContent="6145"
    document.getElementById("items9num").textContent="6145"
  }
  else if(r==6){
    document.getElementById("items9").textContent= "Square Tube Brackets (Pair)"
    document.getElementById("tr9a").textContent="6278"
    document.getElementById("items9num").textContent="6278"
  }
  else if(r==7){
    document.getElementById("items9").textContent= "T-Track Brackets (Pair)"
    document.getElementById("tr9a").textContent="6446"
    document.getElementById("items9num").textContent="6446"
  }
  else if(r==8){
    document.getElementById("items9").textContent= "T-Track Direct Mount Socket"
    document.getElementById("tr9a").textContent="8115"
    document.getElementById("items9num").textContent="8115"
  }
  else if(r==9){
    document.getElementById("items9").textContent= "Double T-Track Brackets (Pair)"
    document.getElementById("tr9a").textContent="7992"
    document.getElementById("items9num").textContent="7992"
  }
  else if(r==10){
    document.getElementById("items9").textContent= "Double T-Track Direct Mount Socket"
    document.getElementById("tr9a").textContent="8115"
    document.getElementById("items9num").textContent="8115"
  }
  else if(r==11){
    document.getElementById("items9").textContent= "14 Inch Socket Bar"
    document.getElementById("tr9a").textContent="6147"
    document.getElementById("items9num").textContent="6147"
  }
  else if(r==12){
    document.getElementById("items9").textContent= "22 Inch Socket Bar"
    document.getElementById("tr9a").textContent="7635"
    document.getElementById("items9num").textContent="7635"
  }
  else if(r==13){
    document.getElementById("items9").textContent= "4 Inch Vertical Bar"
    document.getElementById("tr9a").textContent="8222"
    document.getElementById("items9num").textContent="8222"
  }
  else if(r==14){
    document.getElementById("items9").textContent= "6 Inch Vertical Bar"
    document.getElementById("tr9a").textContent="8071"
    document.getElementById("items9num").textContent="8071"
  }
  else if(r==15){
    document.getElementById("items9").textContent= "12 Inch Vertical Bar"
    document.getElementById("tr9a").textContent="8070"
    document.getElementById("items9num").textContent="8070"
  }
  else if(r==16){
    document.getElementById("items9").textContent= "Adjustable Vertical Bar"
    document.getElementById("tr9a").textContent="8114"
    document.getElementById("items9num").textContent="8114"
  }
  else if(r==17){
    document.getElementById("items9").textContent= "8 Inch Vertical Extension Bar"
    document.getElementById("tr9a").textContent="8081"
    document.getElementById("items9num").textContent="8018"
  }
  else if(r==18){
    document.getElementById("items9").textContent= "16 Inch Vertical Extension Bar"
    document.getElementById("tr9a").textContent="8216"
    document.getElementById("items9num").textContent="8216"
  }
  else if(r==19){
    document.getElementById("items9").textContent= "M2 Arm"
    document.getElementById("tr9a").textContent="8074"
    document.getElementById("items9num").textContent="8074"
  }
  else if(r==20){

    document.getElementById("items9").textContent= "M2X Arm"
    document.getElementById("tr9a").textContent="8069"
    document.getElementById("items9num").textContent="8069"
  }
  else if(r==21){
    document.getElementById("items9").textContent= "M2 Max Arm"
    document.getElementById("tr9a").textContent="8127"
    document.getElementById("items9num").textContent="8127"
  }
  else if(r==22){
    document.getElementById("items9").textContent= "Articulating Arm"
    document.getElementById("tr9a").textContent="8072"
    document.getElementById("items9num").textContent="8072"
  }
  else if(r==23){
    document.getElementById("items9").textContent= "Articulating Arm with Riser"
    document.getElementById("tr9a").textContent="8073"
    document.getElementById("items9num").textContent="8073"
  }
  else if(r==24){
    document.getElementById("items9").textContent= "Head and Tail Arm"
    document.getElementById("tr9a").textContent="8224"
    document.getElementById("items9num").textContent="8224"
  }
  else if(r==25){
    document.getElementById("items9").textContent= "Head and Tail Arm with Riser"
    document.getElementById("tr9a").textContent="8374"
    document.getElementById("items9num").textContent="8374"
  }
  else if(r==26){
    document.getElementById("items9").textContent= "Lockable Wedge Receiver"
    document.getElementById("tr9a").textContent="8076"
    document.getElementById("items9num").textContent="8076"
  }
  else if(r==27){
    document.getElementById("items9").textContent= "Rotary Wedge Receiver"
    document.getElementById("tr9a").textContent="8075"
    document.getElementById("items9num").textContent="8075"
  }
  else if(r==28){
    document.getElementById("items9").textContent= "Rolling Floor Stand"
    document.getElementById("tr9a").textContent="8213"
    document.getElementById("items9num").textContent="8213"
  }
  else if(r==29){
    document.getElementById("items9").textContent= "Rolling Floor Stand with Extended Legs"
    document.getElementById("tr9a").textContent="8294"
    document.getElementById("items9num").textContent="8294"
  }
  else if(r==30){
    document.getElementById("items9").textContent= "Table Clamp"
    document.getElementById("tr9a").textContent="8214"
    document.getElementById("items9num").textContent="8214"
  }
  else if(r==31){
    document.getElementById("items9").textContent= "Table Mount"
    document.getElementById("tr9a").textContent="8404"
    document.getElementById("items9num").textContent="8404"
  }
  else if(r==32){
    document.getElementById("items9").textContent= "Wall Track"
    document.getElementById("tr9a").textContent="N/A"
    document.getElementById("items9num").textContent="N/A"
  }
  else if(r==34){
    document.getElementById("items9").textContent= "Standard Wedge Reciever"
    document.getElementById("tr9a").textContent="6523"
    document.getElementById("items9num").textContent="6523"
  }
  else if(r==35){
    document.getElementById("items9").textContent= "Heavy Duty Wedge Reciever"
    document.getElementById("tr9a").textContent="7530"
    document.getElementById("items9num").textContent="7530"
  }
  else if(r==36){
    document.getElementById("items9").textContent= "Ball Joint Wedge Reciever"
    document.getElementById("tr9a").textContent="7782"
    document.getElementById("items9num").textContent="7782"
  }
  else if(r==37){
    document.getElementById("items9").textContent= "Multi-Positional Wedge Reciever"
    document.getElementById("tr9a").textContent="7580"
    document.getElementById("items9num").textContent="7580"
  }
  else if(r==38){
    document.getElementById("items9").textContent= "T-Bar Wedge Reciever"
    document.getElementById("tr9a").textContent="7485"
    document.getElementById("items9num").textContent="7485"
  }
  else if(r==40){
    document.getElementById("items9").textContent= "4 Inch Tube and Socket"
    document.getElementById("tr9a").textContent="8542"
    document.getElementById("items9num").textContent="8542"
  }
  else if(r==41){
    document.getElementById("items9").textContent= "6 Inch Tube and Socket"
    document.getElementById("tr9a").textContent="7174"
    document.getElementById("items9num").textContent="7174"
  }
  else if(r==42){
    document.getElementById("items9").textContent= "8 Inch Tube and Socket"
    document.getElementById("tr9a").textContent="7173"
    document.getElementById("items9num").textContent="7173"
  }
  else if(r==43){
    document.getElementById("items9").textContent= "10 Inch Tube and Socket"
    document.getElementById("tr9a").textContent="6155"
    document.getElementById("items9num").textContent="6155"
  }
  else if(r==44){
    document.getElementById("items9").textContent= "12 Inch Tube and Socket"
    document.getElementById("tr9a").textContent="8165"
    document.getElementById("items9num").textContent="8165"
  }
  else if(r==45){
    document.getElementById("items9").textContent= "Pivot Base"
    document.getElementById("tr9a").textContent="7584"
    document.getElementById("items9num").textContent="7584"
  }
  else if(r==46){
    document.getElementById("items9").textContent= "Tube Flange Mount"
    document.getElementById("tr9a").textContent="7747"
    document.getElementById("items9num").textContent="7747"
  }
  else if(r==47){
    document.getElementById("items9").textContent= "Socket Only"
    document.getElementById("tr9a").textContent="7582"
    document.getElementById("items9num").textContent="7582"
  }
  else if(r==48){
    document.getElementById("items9").textContent= "Whitmyer Socket Only"
    document.getElementById("tr9a").textContent="8083"
    document.getElementById("items9num").textContent="8083"
  }
  else if(r==49){
    document.getElementById("items9").textContent= "Universal Switch Mount"
    document.getElementById("tr9a").textContent="8116"
    document.getElementById("items9num").textContent="8116"
  }
  else if(r==50){
    document.getElementById("items9").textContent= "Cane Clamps"
    document.getElementById("tr9a").textContent="7754"
    document.getElementById("items9num").textContent="7754"
  }
  else if(r==51){
    document.getElementById("items9").textContent= "Switch Plate"
    document.getElementById("tr9a").textContent="7583"
    document.getElementById("items9num").textContent="7583"
  }
  else if(r==52){
    document.getElementById("items9").textContent= "Tube and Socket Ball Joint"
    document.getElementById("tr9a").textContent="N/A"
    document.getElementById("items9num").textContent="N/A"
  }
  else if(r==53){
    document.getElementById("items9").textContent= "Whitmyer Assembly"
    document.getElementById("tr9a").textContent="N/A"
    document.getElementById("items9num").textContent="N/A"
  }
  else if(r==55){
    document.getElementById("items9").textContent= "Heavy Duty Head Switch"
    document.getElementById("tr9a").textContent="3865"
    document.getElementById("items9num").textContent="3865"
  }
  else if(r==56){
    document.getElementById("items9").textContent= "Short Heavy Duty Head Switch"
    document.getElementById("tr9a").textContent="5064"
    document.getElementById("items9num").textContent="5064"
  }
  else if(r==57){
    document.getElementById("items9").textContent= "Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr9a").textContent="7526"
    document.getElementById("items9num").textContent="7526"
  }
  else if(r==58){
    document.getElementById("items9").textContent= "Short Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr9a").textContent="N/A"
    document.getElementById("items9num").textContent="N/A"
  }
  else if(r==59){
    document.getElementById("items9").textContent= "Heavy Duty Head Switch with Flex"
    document.getElementById("tr9a").textContent="6185"
    document.getElementById("items9num").textContent="6185"
  }
  else if(r==60){
    document.getElementById("items9").textContent= "Short Heavy Duty Head Switch with Flex"
    document.getElementById("tr9a").textContent="8545"
    document.getElementById("items9num").textContent="8545"
  }
  else if(r==61){
    document.getElementById("items9").textContent= "Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr9a").textContent="7527"
    document.getElementById("items9num").textContent="7527"
  }
  else if(r==62){
    document.getElementById("items9").textContent= "Short Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr9a").textContent="8046"
    document.getElementById("items9num").textContent="8046"
  }
  else if(r==63){
    document.getElementById("items9").textContent= "Light Touch Head Switch"
    document.getElementById("tr9a").textContent="6247"
    document.getElementById("items9num").textContent="6247"
  }
  else if(r==64){
    document.getElementById("items9").textContent= "Short Light Touch Head Switch"
    document.getElementById("tr9a").textContent="7196"
    document.getElementById("items9num").textContent="7196"
  }
  else if(r==65){
    document.getElementById("items9").textContent= "Paddle Switch"
    document.getElementById("tr9a").textContent="N/A"
    document.getElementById("items9num").textContent="N/A"
  }
  else if(r==66){
    document.getElementById("items9").textContent= "Single Sided Head Switch Mount"
    document.getElementById("tr9a").textContent="3151"
    document.getElementById("items9num").textContent="3151"
  }
  else if(r==67){
    document.getElementById("items9").textContent= "Double Sided Head Switch Mount"
    document.getElementById("tr9a").textContent="2798"
    document.getElementById("items9num").textContent="2798"
  }
  else if(r==68){
    document.getElementById("items9").textContent= "Whitmyer to Square Tube Adapter"
    document.getElementById("tr9a").textContent="7529"
    document.getElementById("items9num").textContent="7529"
  }
  else if(r==69){
    document.getElementById("items9").textContent= "Whitmyer Cobra to Square Tube Adapter"
    document.getElementById("tr9a").textContent="7544"
    document.getElementById("items9num").textContent="7544"
  }
  else if(r==70){
    document.getElementById("items9").textContent= "Whitmyer Lynx to Square Tube Adapter"
    document.getElementById("tr9a").textContent="7718"
    document.getElementById("items9num").textContent="7718"
  }
  else if(r==71){
    document.getElementById("items9").textContent= "Ottobock to Square Tube Adapter"
    document.getElementById("tr9a").textContent="7528"
    document.getElementById("items9num").textContent="7528"
  }
  else if(r==72){
    document.getElementById("items9").textContent= "Stealth i2i Square Tube Adapter"
    document.getElementById("tr9a").textContent="N/A"
    document.getElementById("items9num").textContent="N/A"
  }
  else if(r==73){
    document.getElementById("items9").textContent= "Wobble Switch Plate"
    document.getElementById("tr9a").textContent="8548"
    document.getElementById("items9num").textContent="8548"
  }
  else if(r==74){
    document.getElementById("items9").textContent= "Jelly Beamer Switch Plate"
    document.getElementById("tr9a").textContent="8128"
    document.getElementById("items9num").textContent="8128"
  }
  else if(r==75){
    document.getElementById("items9").textContent= "Cane Clamps"
    document.getElementById("tr9a").textContent="7754"
    document.getElementById("items9num").textContent="7754"
  }
  else if(r==76){
    document.getElementById("items9").textContent= "USB Joystick"
    document.getElementById("tr9a").textContent="8174"
    document.getElementById("items9num").textContent="8174"
  }
  else if(r==77){
    document.getElementById("items9").textContent= "USB Joystick with Jacks"
    document.getElementById("tr9a").textContent="8215"
    document.getElementById("items9num").textContent="8215"
  }
  else{
    document.getElementById("items9").textContent= ""
    document.getElementById("tr9a").textContent=""
    document.getElementById("items9num").textContent=""
  }
}

function product10(){
  var t=document.getElementById("tr10b").selectedIndex;
  if(t==1){

    document.getElementById("items10").textContent="Direct Mount Socket"
    document.getElementById("tr10a").textContent="7106"
    document.getElementById("items10num").textContent="7106"
  }
  else if(t==2){
    document.getElementById("items10").textContent= "Serrated Direct Mount Socket"
    document.getElementById("tr10a").textContent="8163"
    document.getElementById("items10num").textContent="8163"
  }
  else if(t==3){
    document.getElementById("items10").textContent= "Vertical Serrated Direct Mount Socket"
    document.getElementById("tr10a").textContent="8540"
    document.getElementById("items10num").textContent="8540"
  }
  else if(t==4){
    document.getElementById("items10").textContent= "Full Ring Bracets (Pair)"
    document.getElementById("tr10a").textContent="6146"
    document.getElementById("items10num").textContent="6146"
  }
  else if(t==5){
    document.getElementById("items10").textContent= "Zero Clearance Brackets (Pair)"
    document.getElementById("tr10a").textContent="6145"
    document.getElementById("items10num").textContent="6145"
  }
  else if(t==6){
    document.getElementById("items10").textContent= "Square Tube Brackets (Pair)"
    document.getElementById("tr10a").textContent="6278"
    document.getElementById("items10num").textContent="6278"
  }
  else if(t==7){
    document.getElementById("items10").textContent= "T-Track Brackets (Pair)"
    document.getElementById("tr10a").textContent="6446"
    document.getElementById("items10num").textContent="6446"
  }
  else if(t==8){
    document.getElementById("items10").textContent= "T-Track Direct Mount Socket"

    document.getElementById("tr10a").textContent="8115"
    document.getElementById("items10num").textContent="8115"
  }
  else if(t==9){
    document.getElementById("items10").textContent= "Double T-Track Brackets (Pair)"
    document.getElementById("tr10a").textContent="7992"
    document.getElementById("items10num").textContent="7992"
  }
  else if(t==10){
    document.getElementById("items10").textContent= "Double T-Track Direct Mount Socket"
    document.getElementById("tr10a").textContent="8115"
    document.getElementById("items10num").textContent="8115"
  }
  else if(t==11){
    document.getElementById("items10").textContent= "14 Inch Socket Bar"
    document.getElementById("tr10a").textContent="6147"
    document.getElementById("items10num").textContent="6147"
  }
  else if(t==12){
    document.getElementById("items10").textContent= "22 Inch Socket Bar"
    document.getElementById("tr10a").textContent="7635"
    document.getElementById("items10num").textContent="7635"
  }
  else if(t==13){
    document.getElementById("items10").textContent= "4 Inch Vertical Bar"
    document.getElementById("tr10a").textContent="8222"
    document.getElementById("items10num").textContent="8222"
  }
  else if(t==14){
    document.getElementById("items10").textContent= "6 Inch Vertical Bar"
    document.getElementById("tr10a").textContent="8071"
    document.getElementById("items10num").textContent="8071"

  }
  else if(t==15){
    document.getElementById("items10").textContent= "12 Inch Vertical Bar"
    document.getElementById("tr10a").textContent="8070"
    document.getElementById("items10num").textContent="8070"
  }
  else if(t==16){
    document.getElementById("items10").textContent= "Adjustable Vertical Bar"
    document.getElementById("tr10a").textContent="8114"
    document.getElementById("items10num").textContent="8114"
  }
  else if(t==17){
    document.getElementById("items10").textContent= "8 Inch Vertical Extension Bar"
    document.getElementById("tr10a").textContent="8081"
    document.getElementById("items10num").textContent="8018"
  }
  else if(t==18){
    document.getElementById("items10").textContent= "16 Inch Vertical Extension Bar"
    document.getElementById("tr10a").textContent="8216"
    document.getElementById("items10num").textContent="8216"
  }
  else if(t==19){
    document.getElementById("items10").textContent= "M2 Arm"
    document.getElementById("tr10a").textContent="8074"
    document.getElementById("items10num").textContent="8074"
  }
  else if(t==20){
    document.getElementById("items10").textContent= "M2X Arm"
    document.getElementById("tr10a").textContent="8069"
    document.getElementById("items10num").textContent="8069"
  }
  else if(t==21){
    document.getElementById("items10").textContent= "M2 Max Arm"
    document.getElementById("tr10a").textContent="8127"
    document.getElementById("items10num").textContent="8127"
  }
  else if(t==22){
    document.getElementById("items10").textContent= "Articulating Arm"
    document.getElementById("tr10a").textContent="8072"
    document.getElementById("items10num").textContent="8072"
  }
  else if(t==23){
    document.getElementById("items10").textContent= "Articulating Arm with Riser"
    document.getElementById("tr10a").textContent="8073"
    document.getElementById("items10num").textContent="8073"
  }
  else if(t==24){
    document.getElementById("items10").textContent= "Head and Tail Arm"
    document.getElementById("tr10a").textContent="8224"
    document.getElementById("items10num").textContent="8224"
  }
  else if(t==25){
    document.getElementById("items10").textContent= "Head and Tail Arm with Riser"
    document.getElementById("tr10a").textContent="8374"
    document.getElementById("items10num").textContent="8374"
  }
  else if(t==26){
    document.getElementById("items10").textContent= "Lockable Wedge Receiver"
    document.getElementById("tr10a").textContent="8076"
    document.getElementById("items10num").textContent="8076"
  }
  else if(t==27){
    document.getElementById("items10").textContent= "Rotary Wedge Receiver"
    document.getElementById("tr10a").textContent="8075"
    document.getElementById("items10num").textContent="8075"
  }
  else if(t==28){
    document.getElementById("items10").textContent= "Rolling Floor Stand"
    document.getElementById("tr10a").textContent="8213"
    document.getElementById("items10num").textContent="8213"
  }
  else if(t==29){
    document.getElementById("items10").textContent= "Rolling Floor Stand with Extended Legs"
    document.getElementById("tr10a").textContent="8294"
    document.getElementById("items10num").textContent="8294"
  }
  else if(t==30){
    document.getElementById("items10").textContent= "Table Clamp"
    document.getElementById("tr10a").textContent="8214"
    document.getElementById("items10num").textContent="8214"
  }
  else if(t==31){
    document.getElementById("items10").textContent= "Table Mount"
    document.getElementById("tr10a").textContent="8404"
    document.getElementById("items10num").textContent="8404"
  }
  else if(t==32){
    document.getElementById("items10").textContent= "Wall Track"
    document.getElementById("tr10a").textContent="N/A"
    document.getElementById("items10num").textContent="N/A"
  }
  else if(t==34){
    document.getElementById("items10").textContent= "Standard Wedge Reciever"
    document.getElementById("tr10a").textContent="6523"
    document.getElementById("items10num").textContent="6523"
  }
  else if(t==35){
    document.getElementById("items10").textContent= "Heavy Duty Wedge Reciever"
    document.getElementById("tr10a").textContent="7530"
    document.getElementById("items10num").textContent="7530"
  }
  else if(t==36){
    document.getElementById("items10").textContent= "Ball Joint Wedge Reciever"
    document.getElementById("tr10a").textContent="7782"
    document.getElementById("items10num").textContent="7782"
  }
  else if(t==37){
    document.getElementById("items10").textContent= "Multi-Positional Wedge Reciever"
    document.getElementById("tr10a").textContent="7580"
    document.getElementById("items10num").textContent="7580"
  }
  else if(t==38){
    document.getElementById("items10").textContent= "T-Bar Wedge Reciever"
    document.getElementById("tr10a").textContent="7485"
    document.getElementById("items10num").textContent="7485"
  }
  else if(t==40){
    document.getElementById("items10").textContent= "4 Inch Tube and Socket"
    document.getElementById("tr10a").textContent="8542"
    document.getElementById("items10num").textContent="8542"
  }
  else if(t==41){
    document.getElementById("items10").textContent= "6 Inch Tube and Socket"
    document.getElementById("tr10a").textContent="7174"
    document.getElementById("items10num").textContent="7174"
  }
  else if(t==42){
    document.getElementById("items10").textContent= "8 Inch Tube and Socket"
    document.getElementById("tr10a").textContent="7173"
    document.getElementById("items10num").textContent="7173"
  }
  else if(t==43){
    document.getElementById("items10").textContent= "10 Inch Tube and Socket"
    document.getElementById("tr10a").textContent="6155"
    document.getElementById("items10num").textContent="6155"
  }
  else if(t==44){
    document.getElementById("items10").textContent= "12 Inch Tube and Socket"
    document.getElementById("tr10a").textContent="8165"
    document.getElementById("items10num").textContent="8165"
  }
  else if(t==45){
    document.getElementById("items10").textContent= "Pivot Base"
    document.getElementById("tr10a").textContent="7584"
    document.getElementById("items10num").textContent="7584"
  }
  else if(t==46){
    document.getElementById("items10").textContent= "Tube Flange Mount"
    document.getElementById("tr10a").textContent="7747"
    document.getElementById("items10num").textContent="7747"
  }
  else if(t==47){
    document.getElementById("items10").textContent= "Socket Only"
    document.getElementById("tr10a").textContent="7582"
    document.getElementById("items10num").textContent="7582"
  }
  else if(t==48){
    document.getElementById("items10").textContent= "Whitmyer Socket Only"
    document.getElementById("tr10a").textContent="8083"
    document.getElementById("items10num").textContent="8083"
  }
  else if(t==49){
    document.getElementById("items10").textContent= "Universal Switch Mount"
    document.getElementById("tr10a").textContent="8116"
    document.getElementById("items10num").textContent="8116"
  }
  else if(t==50){
    document.getElementById("items10").textContent= "Cane Clamps"
    document.getElementById("tr10a").textContent="7754"
    document.getElementById("items10num").textContent="7754"
  }
  else if(t==51){
    document.getElementById("items10").textContent= "Switch Plate"
    document.getElementById("tr10a").textContent="7583"
    document.getElementById("items10num").textContent="7583"
  }
  else if(t==52){
    document.getElementById("items10").textContent= "Tube and Socket Ball Joint"
    document.getElementById("tr10a").textContent="N/A"
    document.getElementById("items10num").textContent="N/A"
  }
  else if(t==53){
    document.getElementById("items10").textContent= "Whitmyer Assembly"
    document.getElementById("tr10a").textContent="N/A"
    document.getElementById("items10num").textContent="N/A"
  }
  else if(t==55){
    document.getElementById("items10").textContent= "Heavy Duty Head Switch"
    document.getElementById("tr10a").textContent="3865"
    document.getElementById("items10num").textContent="3865"
  }
  else if(t==56){
    document.getElementById("items10").textContent= "Short Heavy Duty Head Switch"
    document.getElementById("tr10a").textContent="5064"
    document.getElementById("items10num").textContent="5064"
  }
  else if(t==57){
    document.getElementById("items10").textContent= "Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr10a").textContent="7526"
    document.getElementById("items10num").textContent="7526"
  }
  else if(t==58){
    document.getElementById("items10").textContent= "Short Heavy Duty Head Switch 90 Degrees"
    document.getElementById("tr10a").textContent="N/A"
    document.getElementById("items10num").textContent="N/A"
  }
  else if(t==59){
    document.getElementById("items10").textContent= "Heavy Duty Head Switch with Flex"
    document.getElementById("tr10a").textContent="6185"
    document.getElementById("items10num").textContent="6185"
  }
  else if(t==60){
    document.getElementById("items10").textContent= "Short Heavy Duty Head Switch with Flex"
    document.getElementById("tr10a").textContent="8545"
    document.getElementById("items10num").textContent="8545"
  }
  else if(t==61){
    document.getElementById("items10").textContent= "Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr10a").textContent="7527"
    document.getElementById("items10num").textContent="7527"
  }
  else if(t==62){
    document.getElementById("items10").textContent= "Short Heavy Duty Head Switch with Flex 90 Degrees"
    document.getElementById("tr10a").textContent="8046"
    document.getElementById("items10num").textContent="8046"
  }
  else if(t==63){
    document.getElementById("items10").textContent= "Light Touch Head Switch"
    document.getElementById("tr10a").textContent="6247"
    document.getElementById("items10num").textContent="6247"
  }
  else if(t==64){
    document.getElementById("items10").textContent= "Short Light Touch Head Switch"
    document.getElementById("tr10a").textContent="7196"
    document.getElementById("items10num").textContent="7196"
  }
  else if(t==65){
    document.getElementById("items10").textContent= "Paddle Switch"
    document.getElementById("tr10a").textContent="N/A"
    document.getElementById("items10num").textContent="N/A"
  }
  else if(t==66){
    document.getElementById("items10").textContent= "Single Sided Head Switch Mount"
    document.getElementById("tr10a").textContent="3151"
    document.getElementById("items10num").textContent="3151"
  }
  else if(t==67){
    document.getElementById("items10").textContent= "Double Sided Head Switch Mount"
    document.getElementById("tr10a").textContent="2798"
    document.getElementById("items10num").textContent="2798"
  }
  else if(t==68){
    document.getElementById("items10").textContent= "Whitmyer to Square Tube Adapter"
    document.getElementById("tr10a").textContent="7529"
    document.getElementById("items10num").textContent="7529"
  }
  else if(t==69){
    document.getElementById("items10").textContent= "Whitmyer Cobra to Square Tube Adapter"
    document.getElementById("tr10a").textContent="7544"
    document.getElementById("items10num").textContent="7544"
  }
  else if(t==70){
    document.getElementById("items10").textContent= "Whitmyer Lynx to Square Tube Adapter"
    document.getElementById("tr10a").textContent="7718"
    document.getElementById("items10num").textContent="7718"
  }
  else if(t==71){
    document.getElementById("items10").textContent= "Ottobock to Square Tube Adapter"
    document.getElementById("tr10a").textContent="7528"
    document.getElementById("items10num").textContent="7528"
  }
  else if(t==72){
    document.getElementById("items10").textContent= "Stealth i2i Square Tube Adapter"
    document.getElementById("tr10a").textContent="N/A"
    document.getElementById("items10num").textContent="N/A"
  }
  else if(t==73){
    document.getElementById("items10").textContent= "Wobble Switch Plate"
    document.getElementById("tr10a").textContent="8548"
    document.getElementById("items10num").textContent="8548"
  }
  else if(t==74){
    document.getElementById("items10").textContent= "Jelly Beamer Switch Plate"
    document.getElementById("tr10a").textContent="8128"
    document.getElementById("items10num").textContent="8128"
  }
  else if(t==75){
    document.getElementById("items10").textContent= "Cane Clamps"
    document.getElementById("tr10a").textContent="7754"
    document.getElementById("items10num").textContent="7754"
  }
  else if(t==76){
    document.getElementById("items10").textContent= "USB Joystick"
    document.getElementById("tr10a").textContent="8174"
    document.getElementById("items10num").textContent="8174"
  }
  else if(t==77){
    document.getElementById("items10").textContent= "USB Joystick with Jacks"
    document.getElementById("tr10a").textContent="8215"
    document.getElementById("items10num").textContent="8215"
  }
  else{
    document.getElementById("items10").textContent= ""
    document.getElementById("tr10a").textContent=""
    document.getElementById("items10num").textContent=""
  }
}

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

  function showSubMenu(id){
    $("#"+id).show();
  }
  function hideSubMenu(id){
    $("#"+id).hide();
  }

  function about(x){
    $("#aboutsubmenu").show();
  }
  function abouthide(x){
    $("#aboutsubmenu").hide();
  }

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

    function homebold(x){
      $("#home").css({"color": "green", "font-weight": "bold", "text-shadow":"1px 1px #C0C0C0"})

    }
    function homeboldhide(x){
      $("#home").css({"color":"#666", "font-weight": "lighter", "text-shadow":"none"})

    }

    function hm(x){
      document.location="./index.php";
    }
    function whatwedo(x){
      document.location="./what-we-do.php";
    }
    function contact(x){
      document.location="./contact-us.php";
    }
    function whatsnew(x){
      document.location="./what's-new.php";
    }
    function wishlist(x){
      document.location="/wishlist.html";
    }
    function liftandlocksystem(x){
      document.location="./lift-and-lock.php";
    }
    function customizeanarm(x){
      document.location="./customize-your-lift-and-lock-arm.php";
    }
    function buildyoursystem(x){
      document.location="./build-your-lift-and-lock-system.php";
    }
    function rollingfloorstand(x){
      document.location="./rolling-floor-stand.php";
    }
    function wedgereceiverspage(x){
      document.location="./wedge-receivers.php";
    }
    function tubeandsocket(x){
      document.location="./tube-and-socket.php";
    }
    function headswitches(x){
      document.location="./access-switches.php";
    }
    function joysticks(x){
      document.location="./joysticks.php";
    }
    function gallery(x){
      document.location="./gallery.php";
    }
    function catalog(x){
      document.location="./catalog.php";
    }
    function aboutideas(x){
      document.location="./about-ideas.php";
    }
    function nw(x){
      document.location="./new.php";
    }
    function devicemounting(x){
      document.location="./device-mounting.php";
    }
    function switchespage(x){
      document.location="./switches.php";
    }
    function productspage(x){
      document.location="./resources.php";
    }
    function videos(x){
      document.location="./videos.php";
    }
	function testimonials(x){
      document.location="./testimonials.php";
    }
	function liftandlockconfiguration(x){
      document.location="./lift-and-lock-configuration-videos.php";
    }
	
    function backdrop(){
    	$(".videobox").hide();
    	$("#backdrop").hide();
    	//document.getElementById('player').src="";
    }

    function showVideo(url){
    	$("#m2demovideo").fadeIn(500);
    	$("#backdrop").show();
    	document.getElementById('player').src = './videos/'+ url + '.mp4';
    }

	function movieiconhide(x)
{
	$('#movieiconpic').remove();
}