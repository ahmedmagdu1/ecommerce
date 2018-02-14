<!DOCTYPE html>
<html>
<style>
body{
	text-align: center;
  background: #ececed;

  font-family: sans-serif;
  font-weight: 100;
}

h1{

color: #7b7b7b;
font-weight: 100;
font-size: 60px;
margin: 100px 0px 100px;

}

#clockdiv{
	font-family: sans-serif;
	color: #fff;
	display: inline-block;
	font-weight: 100;
	text-align: center;
	font-size: 30px;
padding: 100px 0 50px 0;
}

#clockdiv > div{
	padding: 15px;
	border-radius: 3px;
	background: #bdc3c7;
	display: inline-block;

}

#clockdiv div > span{
	padding: 20px;
	border-radius: 3px;
	background: #bdc3c7;
	display: inline-block;
}

.smalltext{
	padding-top: 5px;
	font-size: 16px;
font-widget; bold;
}
.up{
background-color: #fff;
padding: 40px 0 40px 0px;

}

.triangle-down {
	width: 0;
	height: 0;
	border-left: 50px solid transparent;
	border-right: 50px solid transparent;
	border-top: 100px solid #ecf0f1;

 }
</style>
<body>





<div class="up">
<h1>ADSesta.com Will Lunch in</h1>

</div>
<div class="triangle-down"></div>
<div id="clockdiv">
  <div>
    <span class="days" id="d"></span>
    <div class="smalltext">Days</div>
  </div>
  <div>
    <span class="hours" id="hrs"></span>
    <div class="smalltext">Hours</div>
  </div>
  <div>
    <span class="minutes" id="min"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds" id="sec"></span>
    <div class="smalltext">Seconds</div>
  </div>
</div>














<script>
// Set the date we're counting down to
var countDownDate = new Date("June 19, 2017 15:37:25").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"



 document.getElementById("d").innerHTML =  days + " ";
 document.getElementById("hrs").innerHTML =  hours + " ";
 document.getElementById("min").innerHTML =  minutes + " ";
 document.getElementById("sec").innerHTML =  seconds + " ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

</body>
</html>
