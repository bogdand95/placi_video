<script src="js/script.js"></script>
<div id="page" class="container">
<div class="interior">
<div id="box1">
<?php
echo "Astăzi este:  " . date("Y/m/d") . "<br>";

echo "IP-ul este: " . $_SERVER["REMOTE_ADDR"] . "<br>"; 

echo "Folosiți browserul: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
?>


<button onclick="getLocation()">Coordonate user</button>
<p id="locatie"></p>
</div>
</div>
</div>
