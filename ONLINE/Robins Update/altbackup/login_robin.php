<?php 
    require('templates/connectDB.php');
    require('templates/loginSystem.php');
    require('templates/header.php'); /*Einbindung Header*/
?>
 /*   session_start(); /*Hier wird die Session vergeben*/
  /*  $_SESSION['eingeloggt'] = 1; /*Session eingeloggt*/

  <div class="nahtloser-container">
                <img src="pictures/slider.jpg" alt="Slider" id="slider">
        </div>

        <div class="content">




<?php

/*###################################################################################################################################################################################################################################################################################*/
/*###################################################################################################################################################################################################################################################################################*/


    if(isset($_POST['registrieren']))
    {
        if(empty($_POST['email_registrieren']))
        {
            echo('<p>Bitte eine email eingeben!</p>');
        }
        else if(empty($_POST['passwort_registrieren'])) /*Guckt, ob beide Registry-Felder ausgefüllt sind*/
        {
            echo('<p>Bitte ein Passwort eingeben!</p>');
        }
        else if(empty($_POST['vorname_registrieren']))
        {
            echo('<p>Bitte ein Vornamen eingeben!</p>');
        }
        else if(empty($_POST['nachname_registrieren']))
        {
            echo('<p>Bitte ein Nachnamen eingeben!</p>');
        }
        else if(empty($_POST['straße_registrieren']))
        {
            echo('<p>Bitte eine Straße eingeben!</p>');
        }
        else if(empty($_POST['hausnummer_registrieren']))
        {
            echo('<p>Bitte eine Hausnummer eingeben!</p>');
        }
        else if(empty($_POST['ort_registrieren']))
        {
            echo('<p>Bitte einen Ort eingeben!</p>');
        }
        else if(empty($_POST['postleitzahl_registrieren']))
        {
            echo('<p>Bitte eine Postleitzahl (PLZ) eingeben!</p>');
        }
        else if(empty($_POST['agb_registrieren']))
        {
            echo('<p>Bitte die AGBs lesen und Hacken setzen!</p>');
        }
        else if(empty($_POST['datenschutz_registrieren']))
        {
            echo('<p>Bitte die Datenschutzerklärung lesen und Hacken setzen!</p>');
        }
        else if(!($_POST['passwortwiederholen_registrieren']==$_POST['passwort_registrieren']))
        {
            echo('<p>Die Passwoerter passen nicht zusammen!</p>');
        }
        else if (!filter_var($_POST['email_registrieren'], FILTER_VALIDATE_EMAIL)) /*Guckt, ob gültige Email-Adresse eingegeben wurde*/
        {
            echo('<p>Deine E-Mail-Adresse ist ungültig</p>');
        }
        else
        {
            $erg = registrieren($_POST['email_registrieren'], $_POST['passwort_registrieren']); /*??? vllt falsche variablen?*/
            echo('<p>'. $erg . '</p>');
        }
    }
    else
    {

/*###################################################################################################################################################################################################################################################################################*/
/*###################################################################################################################################################################################################################################################################################*/


?>



            
            <div class="hintergrund_login">
                <div class="shadowlayer_login">

                    <h4>Member-Login</h4>

                    <form action="login.php" method="POST">
                        <input type="e-mail" class="loginfelder" placeholder="E-Mail-Adresse..."/><br>
                        <input type="password" class="loginfelder" placeholder="Passwort..."/><br>
                        <input type="submit" class="submit_button" value="Login"/><br>
                    </form>

                    <a href="" >Passwort vergessen? Hier zurücksetzen.</a>
                    <br><hr>
                    <!--Hier muss noch das PW-Zurücksetzen eingespielt werden-->
                    <h4>Neuen Account erstellen</h4>
                    
                    <form action="login.php" method="POST">
                        
                    

                        <h1>1. Wichtige Angaben</h1>
                        <hr>
                        <b class=registrierfeldernebeneinander_ueberschrift>Firma</b> <b class=registrierfeldernebeneinander_ueberschrift>UID-Nr.</b> <br>                                                          <!--###################################################################################################################################################################################################################################################################################-->
                        <input type="firma" class="registrierfeldernebeneinander" name="firma_registrieren" /> <input type="uid_nr" class="registrierfeldernebeneinander" name="uid_registrieren" /><br>            <!--###################################################################################################################################################################################################################################################################################-->
                        <p> Vorname*</p>                                                                                                                                                                            <!--###################################################################################################################################################################################################################################################################################-->
                        <input type="vorname" class="registrierfelder_ganze_zeile" name="vorname_registrieren"/><br>                                                                                               <!--###################################################################################################################################################################################################################################################################################-->
                        <p> Nachname*</p>                                                                                                                                                                           <!--###################################################################################################################################################################################################################################################################################-->
                        <input type="nachname" class="registrierfelder_ganze_zeile" name="nachname_registrieren"/><br>                                                                                             <!--###################################################################################################################################################################################################################################################################################-->
                        <br>                                                                                                                                                                                        <!--###################################################################################################################################################################################################################################################################################-->
                        <!--Formulare siehe Design hier noch einbinden (Alle Kundendaten)..-->



                        <h1>2. Anschrift</h1>
                        <hr>
                        <b class=registrierfeldernebeneinander_ueberschrift>Straße*</b> <b class=registrierfeldernebeneinander_ueberschrift>Hausnummer*</b> <br>                                                    <!--###################################################################################################################################################################################################################################################################################-->
                        <input type="straße" class="registrierfeldernebeneinander" name="straße_registrieren"/> <input type="hausnummer" class="registrierfeldernebeneinander" name="hausnummer_registrieren"/><br><!--###################################################################################################################################################################################################################################################################################-->
                        <p> Adresszusatz</p>                                                                                                                                                                        <!--###################################################################################################################################################################################################################################################################################-->
                        <input type="adresszusatz" class="registrierfelder_ganze_zeile" name="adresszusatz_registrieren" /><br>                                                                                     <!--###################################################################################################################################################################################################################################################################################-->
                        <b class=registrierfeldernebeneinander_ueberschrift>Ort*</b> <b class=registrierfeldernebeneinander_ueberschrift>PLZ*</b> <br>                                                              <!--###################################################################################################################################################################################################################################################################################-->
                        <input type="ort" class="registrierfeldernebeneinander" name="ort_registrieren" require/> <input type="postleitzahl" class="registrierfeldernebeneinander" name="postleitzahl_registrieren"/><br> <!--###################################################################################################################################################################################################################################################################################-->


                        <h1>3. Anmeldedaten</h1>
                        <input type="e-mail" class="registrierfelder" name="email_registrieren" placeholder="E-Mail-Adresse..."/><br>
                        <input type="password" class="registrierfelder" name="passwort_registrieren" placeholder="Passwort..."/><br>
                        <input type="password" class="registrierfelder" name="passwortwiederholen_registrieren" placeholder="Passwort wiederholen..."/><br>                                                         <!--###################################################################################################################################################################################################################################################################################-->
                        
                        
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <input type="checkbox" name="agb_registrieren">
                        <label class="container">Ich habe die AGB gelesen und stimme diesen zu.*
                        <span class="checkmark"></span>
                        </label>
                        <br>
                        <input type="checkbox" name="datenschutz_registrieren">
                        <label class="container">Ich stimme den Datenschutzbedingeungen zu.*
                        <span class="checkmark"></span>
                        </label>
                        <br>
                        
                        <input type="submit" class="submit_button" name="registrieren" value="Registrieren"/><br>



                    </form>
                    
                </div>
            </div>


<?php
    }
?>

</div>

<?php
    require('templates/footer.php');
?>