
<?php 
    session_start();
    require('templates/header.php');
?>

        <div class="nahtloser-container">
                <img src="pictures/slider.jpg" alt="Slider" id="slider">
        </div>

        <div class="content">

        <h4>Geheime Seite, bitch!</h4>
        
<?php  /*Hier wird geschaut, ob der User bereits eingeloggt ist*/

    if(isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'] == 1) 
    {
        echo('<p>Hi du geile Sau</p>');
    }
?>

        </div>


<?php
    require('templates/footer.php');
?>