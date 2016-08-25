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
<h2>Tims Startseite</h2>

<!--
<hr/>
<?php

$mysqli = new mysqli("localhost", "root", "", "phptest");
if ($mysqli->connect_error) {
  echo "Fehler bei der Verbindung: " . mysqli_connect_error();
  exit();

}
if (!$mysqli->set_charset("utf8")) {
  echo "Fehler beim Laden von UTF8 ". $mysqli->error;
}
$ergebnis = $mysqli->query("SELECT url FROM test ORDER BY nummer DESC;");
while($zeile = $ergebnis->fetch_array()) {
include"{$zeile['url']}";
}
$ergebnis->close();
$mysqli->close();





/*include"blog/vorstellung.php";*/
?>
-->
</main><!--Ende Inhaltsbereich-->



<?php
include"ausgelagerteFiles/fussbereich.php";
?>

</div><!--Ende Wrapper -->
</body>
</html>
