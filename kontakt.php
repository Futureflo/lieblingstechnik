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
  
  <form class="kontaktformular" action="http://www.formular-chef.de/fc.cgi" method="post" onsubmit="return checkForm()">
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
  
  <!--- Nicht nötig da bereits durch das Attribut required ein Text ausgegeben wird, wenn kein Wert eingetragen wurde !--->
  <script type="text/javascript">
  
    function checkForm() {
      
      if(document.kontakformular.besuchername.value=="") {
        
        alert("Bitte geben Sie Ihren namen ein!");
        document.kontaktformular.besuchername.focus();
        
        return false;
      }
    }
  
  </script>
</main><!--Ende Inhaltsbereich-->



<?php
include"ausgelagerteFiles/fussbereich.php";
?>
  
</div><!--Ende Wrapper -->
</body>
</html>
