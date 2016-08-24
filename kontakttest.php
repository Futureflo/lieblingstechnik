<!DOCTYPE html>
<html lang="de">
<?php
include"ausgelagerteFiles/head.php";
?>

<div id="wrapper">
  
<?php
include"ausgelagerteFiles/kopfbereich.php";
?>

<?php
include"ausgelagerteFiles/navibereich.php";
?>
  
<main id="inhaltsbereich">
<h2>Kontakt</h2>
  
  <form class="kontaktformular" action="http://www.formular-chef.de/fc.cgi" method="post">
	<input type="hidden" name="empfaenger" value="myhomeautomationX§Xgmx.de">
	<div>
		<label for"besuchername">Ihr Name: </label>
		
		<input type="text" id="besuchername" name="besuchername" required>
	</div>
	<div>
		<label for"mailadresse">Ihre Mailadresse: </label>
		
		<input type="email" id="mailadresse" name="mailadresse" required>
	</div>
	<div>
		<label for"nachricht">Ihre Nachricht: </label>
		
		<textarea id="nachricht" name="nachricht" cols="20" rows="5" required></textarea>
	</div>
	<div>
		<input type="submit" value="Abschicken">

	</div>
</form>
  
  <?php
$empfaenger = "myhomeautomationX§Xgmx.de";
$betreff = "Die Mail-Funktion";
$from = "From: Nils Reimers <myhomeautomationX§Xgmx.de>";
$text = "Hier lernt Ihr, wie man mit PHP Mails
verschickt";

mail($empfaenger, $betreff, $text, $from);
?>
  
</main><!--Ende Inhaltsbereich-->
  




<?php
include"ausgelagerteFiles/fussbereich.php";
?>
  
</div><!--Ende Wrapper -->
</body>
</html>
