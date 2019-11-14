<?php
    session_start();

    function registrieren($email, $passwort)
    {
        
        global $db_link; //holt die Variable in die Funktion
        $email = mysqli_real_escape_string($db_link, $email); //Entfernt sämtlichen SQL-Code aus dem Feld, der Nutzer kann keinen Code zum Auslesen o. Ä. eingeben
/*für alle anderen Felder wiederholen!*/
        $passwort = md5($passwort); //errechnet eine Zahl aus dem Passwort, Passwort wird verschlüsselt weitergegeben

        //Benutzer schon vorhanden?
        $db_res = runSQL("SELECT COUNT(*) FROM kunden WHERE E_Mail='" . $email ."'");
        $row = mysqli_fetch_array($db_res); //Liefert nur 1 Zeile (Count) zurück, ohne While-Schleife möglich, schreibt die Menge in $row
        
        if($row['COUNT(*)'] > 0) //Guckt, pb E-Mail-Adresse zurückgegeben wurde
        {
            return 'Es gibt schon einen Benutzer mit der angegebenen E-Mail-Adresse!'; //Funktion wird hier beendet, sollte die E-Mail schon vorhanden sein und der Rest darunter würde nicht mehr ausgeführt
        }

        //Neuen Benutzer eintragen
        runSQL("INSERT INTO kunden (E_Mail, Passwort) VALUES ('" . $email . "', '" . $passwort . "')");
        return 'Der Benutzer wurder erfolgreich hinzugefügt!';
    }

?>
