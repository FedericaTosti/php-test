<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio PHP</title>
  </head>
  <body>

    <h2>
      Prendere in ingresso 3 variabili (name, mail e age) in get stampare contenuto variabili
    </h2>

    <?php
      $name = $_GET["name"];
      $mail = $_GET["mail"];
      $age = $_GET["age"];

      echo "Nome utente:" . " " . "$name\n";
      echo "Mail utente:" . " " . "$mail\n";
      echo "Età utente:" . " " . "$age";

    ?>

    <h4><?php echo "Nome utente:" . " " . "$name" ?></h4>
    <h4><?php echo "Mail utente:" . " " . "$mail" ?></h4>
    <h4><?php echo "Età utente:" . " " . "$age" ?></h4>

    <h2>
      Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    </h2>

    <?php

      $message = "Accesso negato!";

      if (strlen($name) <= 3) {

        $message;

      } elseif (strpos($mail, "@") === false || strpos($mail, ".") === false ) {

        $message;

      } elseif (!is_numeric($age)) {

        $message;

      } else {

        $message = "Accesso riuscito!";

      }

      echo $message;



      // oppure


      // if (strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age)) {
      //
      //   echo "Accesso riuscito!";
      //
      // } else {
      //
      //   echo "Accesso negato!";
      //
      // }

    ?>

  </body>
</html>
