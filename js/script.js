
function getLocation(){
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } 
}
function showPosition(position) {
	var x=document.getElementById("locatie");
    x.innerHTML = "Latitudine: " + position.coords.latitude + "<br>Longitudine: " + position.coords.longitude;
}



var interval;
var minutes = 1;
var seconds = 0;

function timer(){
	
            var el = document.getElementById('countdown');
            if(seconds == 0) {
                if(minutes == 0) {
					clearInterval(interval);
                    document.getElementById("rezultat").click();
					  if(score<10){
							alert("Ai obținut nota : " + score);
						}
					else{
							alert("Felicitări!!! Ai obținut nota " + score);
						}
					location.reload();
					window.location.reload();
                } else {
                    minutes--;
                    seconds = 60;
                }
            }
            if(minutes > 0) {
                var minute_text = minutes + (minutes > 1 ? ' minute' : ' minut');
            } else {
                var minute_text = '';
            }
            var second_text = seconds > 1 ? 'secunde' : 'secundă';
            el.innerHTML = minute_text + ' ' + seconds + ' ' + second_text ;
            seconds--;
			
}

function countdown(element) {
		showQuiz();
        interval = setInterval(timer, 1000);
}

var answers = new Array(10);


var numQues = 10;

var numChoi = 3;

answers[0] = "Graphics Processing Unit";
answers[1] = "AGP";
answers[2] = "Graphics Double Data Rate";
answers[3] = "5600 MHz";
answers[4] = "GB/s";
answers[5] = "Random Access Memory Digital-to-Analog Converter";
answers[6] = "High Definition Multimedia Interface";
answers[7] = "Dispozitiv de răcire pasiv";
answers[8] = "Video Graphics Array";
answers[9] = "Digital Visual Interface";

var score = 0;
function getScore(form) {
  
  clearInterval(interval);
  var currElement;
  var currSelection;
  for (i=0; i<numQues; i++) {
    currElement = i*numChoi;
    for (j=0; j<numChoi; j++) {
      currSelection = form.elements[currElement + j];
      if (currSelection.checked) {
        if (currSelection.value == answers[i]) {
          score++;
          break;
        }
      }
    }
  }
  document.getElementById('rezultat').style.display='none';
  document.getElementById('rez').style.display='block';
  document.getElementById('nota').value = score ;
  


}

function showQuiz(){
	document.getElementById('rez').style.display='none';
	document.getElementById("showquizDiv").style.display='block';
	document.getElementById("btn").style.display='none';

}

function restartQuiz(){
	location.reload();
}


function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("userinfo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "userinfo.php", true);
  xhttp.send();
}