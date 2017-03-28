<script src="js/script.js" type="text/javascript"></script>
<h2 class="title"><a href="#">GPU Quiz</h2></a><br>
<button id="btn" class="button" onclick="countdown()">Start quiz</button>
<div id="showquizDiv" style="display:none" >
<p>Timp rămas:<strong> <span id="countdown"></span></strong></p>

<form name="quiz">
1. Ce inseamnă GPU?
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q1" value="Graphics Processing Unit">Graphics Processing Unit</li>
  <li><input type="radio" name="q1" value="General Processor Unit">General Processor Unit</li>
  <li><input type="radio" name="q1" value="Graphics Processor Unit">Graphics Processor Unit</li>
</ul>

2. Plăcile video actuale sunt conectate la un port PCI Express. Care a fost predecesorul acestui port?
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q2" value="SCSI">SCSI</li>
  <li><input type="radio" name="q2" value="AGP">AGP</li>
  <li><input type="radio" name="q2" value="SATA">SATA</li>
</ul>
3. Ce inseamnă GDDR?
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q3" value="Graphical Double Date Range">Graphical Double Date Range</li>
  <li><input type="radio" name="q3" value="Graphic Double Data Ratio">Graphic Double Data Ratio</li>
  <li><input type="radio" name="q3" value="Graphics Double Data Rate">Graphics Double Data Rate</li>
</ul>
4. Care este frecvența maximă a unui GPU cu memorie de tip GDDR5?
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q4" value="5600 MHz">5600 MHz</li>
  <li><input type="radio" name="q4" value="2500 MHz">2500 MHz</li>
  <li><input type="radio" name="q4" value="768 MHz">768 MHz</li>
</ul>
5. În ce se măsoară lățimea de bandă a unui GPU?
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q5" value="MHz">MHz</li>
  <li><input type="radio" name="q5" value="GB/s">GB/s</li>
  <li><input type="radio" name="q5" value="FLOPS ">FLOPS</li>
</ul>
6. Ce înseamnă RAMDAC?
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q6" value="Recursive Access Memory Digital-to-Analog Converter">Recursive Access Memory Digital-to-Analog Converter</li>
  <li><input type="radio" name="q6" value="Random Access Memory Digital-to-Analog Calculator">Random Access Memory Digital-to-Analog Calculator</li>
  <li><input type="radio" name="q6" value="Random Access Memory Digital-to-Analog Converter">Random Access Memory Digital-to-Analog Converter</li>
</ul>
7. Ce înseamnă HDMI?
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q7" value="High Definition Multimedia Interface">High Definition Multimedia Interface</li>
  <li><input type="radio" name="q7" value="High Definition Multimeter Interface">High Definition Multimeter Interface</li>
  <li><input type="radio" name="q7" value="High Data Measure Interface">High Data Measure Interface</li>
</ul>
8. Radiatorul este:
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q8" value="Dispozitiv de răcire activ">Dispozitiv de răcire activ</li>
  <li><input type="radio" name="q8" value="Dispozitiv de răcire pasiv">Dispozitiv de răcire pasiv</li>
  <li><input type="radio" name="q8" value="Dispozitiv de răcire semiactiv">Dispozitiv de răcire semiactiv</li>
</ul>
9. Ce înseamnă VGA?
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q9" value="Video Graphics Array">Video Graphics Array</li>
  <li><input type="radio" name="q9" value="Video Graphics Adapter">Video Graphics Adapter</li>
  <li><input type="radio" name="q9" value="Variant Graphics Array">Variant Graphics Array</li>
</ul>
10. Ce înseamnă DVI?
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q10" value="Digital Visual Interface">Digital Visual Interface</li>
  <li><input type="radio" name="q10" value="Digital Virtual Interface">Digital Virtual Interface</li>
  <li><input type="radio" name="q10" value="Digital Virtual Integer">Digital Virtual Integer</li>
</ul>
<input type="button" id ="rezultat" class="buttonSubmit" value="Afișează scor" onClick="getScore(this.form)">
<div id="rez">
	<p> Nota obținută: <strong><input type="text"  id="nota" disabled></strong><br><br>
	<input type="button" id ="restart"  class="button" value="Restart quiz" onClick="restartQuiz()">
</div>
</form>
</div>
