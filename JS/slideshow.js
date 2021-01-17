
$(document).ready(function SLIDERSTART(){
  slides = [];
  slideButtons = []
  max = 5;
  for (var i=1;i<=max;i++){
    slides.push($("#" + i));
    slides[i-1].hide();
    slideButtons.push($("#"+ i + "dot"));
  }
  slider(0);
});
function slider(i){
  console.log(i);
  //cancel other animations and clicked states
  for (var j=0 ; j<max ; j++){
    slides[j].hide();
    slides[j].clearQueue();
    slideButtons[j].addClass("unclicked");
  }

  slideButtons[i].removeClass("unclicked");
  slides[i].delay(100).fadeIn(1000);
  slides[i].delay(3500).fadeOut(500, function(){
      slider((i+1)%(max));
  });
}

// Legacy code from here. Verify if it can be deleted and the new version is completely stable

function slider1(){
  $("#firstdot").removeClass("unclicked")
  $("#1").hide()
  $("#2").hide()
  $("#3").hide()
  $("#4").hide()
  $("#5").hide()
  $("#thirddot").addClass("unclicked")
  $("#seconddot").addClass("unclicked")
  $("#forthdot").addClass("unclicked")
  $("#fifthdot").addClass("unclicked")
  $("#fifthdot").css("opacity", "0.5")
  $("#thirddot").css("opacity", "0.5")
  $("#seconddot").css("opacity", "0.5")
  $("#firstdot").css("opacity", "1")
  $("#forthdot").css("opacity", "0.5")
  $("#1").delay(100).fadeIn(1000)
  $("#1").delay(3500).fadeOut(500, function(){
    if(($("#seconddot").hasClass("unclicked"))&&($("#thirddot").hasClass("unclicked"))&&($("#forthdot").hasClass("unclicked"))&&($("#fifthdot").hasClass("unclicked"))){slider2()}
  })
}

function slider2(){
  $("#seconddot").removeClass("unclicked")
  $("#1").hide()
  $("#2").hide()
  $("#3").hide()
  $("#4").hide()
  $("#5").hide()
  $("#firstdot").addClass("unclicked")
  $("#thirddot").addClass("unclicked")
  $("#forthdot").addClass("unclicked")
  $("#fifthdot").addClass("unclicked")
  $("#fifthdot").css("opacity", "0.5")
  $("#thirddot").css("opacity", "0.5")
  $("#seconddot").css("opacity", "1")
  $("#firstdot").css("opacity", "0.5")
  $("#forthdot").css("opacity", "0.5")
  $("#2").delay(100).fadeIn(1000)
  $("#2").delay(3500).fadeOut(500, function(){
    if(($("#firstdot").hasClass("unclicked"))&&($("#thirddot").hasClass("unclicked"))&&($("#forthdot").hasClass("unclicked"))&&($("#fifthdot").hasClass("unclicked"))){slider3()}
  })
}

function slider3(){
  $("#thirddot").removeClass("unclicked")
  $("#1").hide()
  $("#2").hide()
  $("#3").hide()
  $("#4").hide()
  $("#5").hide()
  $("#firstdot").addClass("unclicked")
  $("#seconddot").addClass("unclicked")
  $("#forthdot").addClass("unclicked")
  $("#fifthdot").addClass("unclicked")
  $("#fifthdot").css("opacity", "0.5")
  $("#thirddot").css("opacity", "1")
  $("#seconddot").css("opacity", "0.5")
  $("#firstdot").css("opacity", "0.5")
  $("#forthdot").css("opacity", "0.5")
  $("#3").delay(100).fadeIn(1000)
  $("#3").delay(3500).fadeOut(500, function(){
    if(($("#firstdot").hasClass("unclicked"))&&($("#seconddot").hasClass("unclicked"))&&($("#forthdot").hasClass("unclicked"))&&($("#fifthdot").hasClass("unclicked"))){slider4()}
  })
}

function slider4(){
  $("#forthdot").removeClass("unclicked")
  $("#1").hide()
  $("#2").hide()
  $("#3").hide()
  $("#4").hide()
  $("#5").hide()
  $("#firstdot").addClass("unclicked")
  $("#seconddot").addClass("unclicked")
  $("#thirddot").addClass("unclicked")
  $("#fifthdot").addClass("unclicked")
  $("#fifthdot").css("opacity", "0.5")
  $("#forthdot").css("opacity", "1")
  $("#thirddot").css("opacity", "0.5")
  $("#seconddot").css("opacity", "0.5")
  $("#firstdot").css("opacity", "0.5")
  $("#4").delay(100).fadeIn(1000)
  $("#4").delay(3500).fadeOut(500, function(){
    if(($("#firstdot").hasClass("unclicked"))&&($("#seconddot").hasClass("unclicked"))&&($("#thirddot").hasClass("unclicked"))&&($("#fifthdot").hasClass("unclicked"))){slider5()}
  })


}
function slider5(){
  $("#fifthdot").removeClass("unclicked")
  $("#1").hide()
  $("#2").hide()
  $("#3").hide()
  $("#4").hide()
  $("#5").hide()
  $("#firstdot").addClass("unclicked")
  $("#seconddot").addClass("unclicked")
  $("#thirddot").addClass("unclicked")
  $("#forthdot").addClass("unclicked")
  $("#fifthdot").css("opacity", "1")
  $("#forthdot").css("opacity", "0.5")
  $("#thirddot").css("opacity", "0.5")
  $("#seconddot").css("opacity", "0.5")
  $("#firstdot").css("opacity", "0.5")
  $("#5").delay(100).fadeIn(1000)
  $("#5").delay(3500).fadeOut(500, function(){
    if(($("#firstdot").hasClass("unclicked"))&&($("#seconddot").hasClass("unclicked"))&&($("#thirddot").hasClass("unclicked"))&&($("#forthdot").hasClass("unclicked"))){slider1()}
  })


}
