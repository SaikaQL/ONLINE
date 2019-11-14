<?php

    /*Verbindung mit der Datenbank*/

    $db_link = mysqli_connect('localhost', 'root', '', 'webshop');

    if(!$db_link)
    {
        die("<p>Verbindung nicht hergestellt!</p>");
    }

    function runSQL($sql) //SQL-Befehl übergeben
    {

        global $db_link; //Damit ich die Variable von außerhalb der Funktion (oben) verwenden kann

        $db_res = mysqli_query($db_link, $sql) or die("SQL-Abfrage: " . $sql . "Fehler: " . mysqli_error($db_link)); //Ergebnis der Abfrage wird in $db_res geschrieben + Was passiert, wenn SQL-Abfrage falsch ist bei die()

        return $db_res; //Ergebnis der Abfrage wird zurückgegeben
    }
?>