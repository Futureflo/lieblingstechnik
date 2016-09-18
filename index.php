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
<h2>Startseite</h2>
<p>Herzlich Willkommen bei <span style="color:red">Lieblingstechnik</span></p>
<p>Auf dieser Seite möchten wir Euch an unseren Erfahrungen im Bereich der Software-Entwicklung teilhaben lassen.
  Wir möchten Techniken und Tools vorstellen, die uns gut gefallen und als hilfreich erscheinen.
</p>
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
