<!-- Einbindung des Headers-->
<?php require("templates/header.php"); ?>


        <div class="nahtloser-container">
                <img src="pictures/slider.jpg" alt="Slider" id="slider">
        </div>

        <div class="content"> <!--Innerhalb dieses Divs wird der Inhalt auf jeder Seite geändert-->

            <h2>Erstelle die deine personalisierten Müllsäche <br> ganz einfach in 3 Schritten</h2>
            <br><hr>
            

            <div class="randabstand">
                <h2>1.</h2><h3>Erstelle dir einen Account ODER logg dich mit deinem Account ein</h3>
            </div>            

            <div class="hintergrund_login">
                <div class="shadowlayer_login">

                    <h4>Member-Login</h4>

                    <form action="auswertung.php" method="POST">
                        <input type="e-mail" class="loginfelder" placeholder="E-Mail-Adresse..."/><br>
                        <input type="password" class="loginfelder" placeholder="Passwort..."/><br>
                        <input type="submit" class="submit_button" value="Login"/><br>
                    </form>

                    <a href="" >Passwort vergessen? Hier zurücksetzen.</a>
                    <br><hr>

                    <h4>Noch keinen Account?</h4>
                    <form action="account.php" method="get">
                        <input type="submit" class="submit_button" value="Neuen Account erstellen"/><br>
                    </form>

                </div>
            </div>
    
            <br><hr>
            
            <h2>2.</h2><h3>Erstelle dein Produkt</h3>
            <br><hr>

            <h2>3.</h2><h3>Schicke deine Bestellung ab</h3>

        </div> <!-- Ende des variablen Divs -->


<!-- Einbindung des Footers-->
<?php require("templates/footer.php"); ?>
