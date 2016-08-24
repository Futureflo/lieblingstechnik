<nav id="navibereich">
  <ul>

    <?php

    /* Hier wird dafür gesorgt, dass die aktive Seite die class-Bezeichung "aktiveSeite" bekommt*/

    $path = $_SERVER['PHP_SELF'];
    $file = basename($path);

    $title= array('Starseite', 'Anleitungen', 'Community', 'Produktcheck', 'Impressum', 'Kontakt');
    $menuepunkte = array('index.php', 'anleitungen.php', 'community.php', 'produktcheck.php', 'impressum.php', 'kontakt.php');


    foreach($menuepunkte as $menuepunkt) {
      static $i=0;
     echo "<li><a title= $title[$i] href=$menuepunkt";
      if($menuepunkt == $file) {
        echo " class= aktiveSeite";

      }

      echo ">$title[$i]</a></li>\n";
      $i++;
    }
    ?>


  </ul>
</nav>
