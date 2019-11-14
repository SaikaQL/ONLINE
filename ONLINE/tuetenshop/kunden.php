<!-- Einbindung des Headers-->
<?php require("templates/header.php"); ?>


        <div class="nahtloser-container">
                <img src="pictures/slider.jpg" alt="Slider" id="slider">
        </div>

        <div class="content">

            <p>Platzhalter</p>
<?php
            require('templates/connectDB.php'); //Einbindung der Datenbank auf der Seite durch die connectDB.php
            

            $db_res = runSQL("SELECT * FROM kunden");

            while($row = mysqli_fetch_array($db_res))
            {
                echo('<p>' . $row['Vorname'] . $row['Nachname'] . '</p>');
            }
            
?>

        </div>



<!-- Einbindung des Footers-->
<?php require("templates/footer.php"); ?>


