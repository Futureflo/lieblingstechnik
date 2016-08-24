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
<h2>Anleitungen</h2>

<!--
<h3>Kühlkörper anbringen</h3>
<iframe width="420" height="315" src="https://www.youtube.com/embed/kbzP3-t6aFw" frameborder="0" allowfullscreen></iframe>
  <p>In diesem kurzen Video zeige ich euch, wie Ihr die Kühlkörper, im Speziellen die Kupfer Kühlkörper anbringen könnt</p>
-->
<!-- Verbindung zu SQL-Server
  <hr>


<?php
$mysqli = new mysqli("localhost", "root", "", "phptest");
if ($mysqli->connect_error) {
  echo "Fehler bei der Verbindung: " . mysqli_connect_error();
  exit();

}
if (!$mysqli->set_charset("utf8")) {
  echo "Fehler beim Laden von UTF8 ". $mysqli->error;
}
$ergebnis = $mysqli->query("SELECT url from test order by nummer desc;");
while($zeile = $ergebnis->fetch_array()) {
echo "{$zeile['url']}";
}
$ergebnis->close();
echo "Verbindung hat geklappt";
$mysqli->close();


?>
-->
</main><!--Ende Inhaltsbereich-->



<?php
include"ausgelagerteFiles/fussbereich.php";
?>

</div><!--Ende Wrapper -->
</body>
</html>
