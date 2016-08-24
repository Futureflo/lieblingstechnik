<header id="kopfbereich">
<!-- Bild raus genommen	
	<h1><img onclick="wechseln()" onmouseover="bildwechseln()" onmouseout="bildzurueck"() src="smarthome300x156.jpg" alt="Logo der Heimautomatisierung" width="200" height="100" id="logo"></h1>
-->
<h1 style=text-align:center>LieblingsTechnik</h1>
<p class="slogan">Make IT smart <span>together</span>!</p>
</header>

<script language="javascript">
 /*function bildwechseln() {

    var id = document.getElementById("logo");
    id.src= "raspberry128x128.png";

  }

  function bildzurueck() {

    var id = document.getElementById("logo");
    id.src= "smarthome300x156.jpg";
  }*/
  var i = 0;
  function wechseln() {
  var id = document.getElementById("logo");
    if(i%2 == 1) {
       id.src= "smarthome300x156.jpg";
    }
    else {
       id.src= "raspberry128x128.png";
    }
    i++;
  }

</script>
