<?php
require_once('functions.php');
authenticate(array("user", "admin", "service"));
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GorillaPark home</title>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/home.css">
</head>

<body>
    <!-- check of ingelogd -->
    <div id="content-container">
         <header>
            <h1><img id="logo" src="images/gorilla_park_blink_logo.svg" alt="GorillaPark"></h1>
        </header>
    <?php
        if (getUserCheckedin() == 1) {
            echo '<form action="actions/checkout.php" method="GET">';
            echo '<button type="submit" id="check-in-out-button">Uitchecken</button>';
            echo '</form>';
        } else {
            echo '<form action="actions/checkin.php" method="GET">';
            echo '<button type="submit" id="check-in-out-button">Inchecken</button>';
            echo '</form>';
        }
    ?>
    </div>




    <!-- check status ingecheckt of uitgecheckt, buttons aanpassen -->



    <!--Log in blink animation-->
    <script>
        setTimeout(function() {
        document.getElementById("logo").src="images/gorilla_park_logo.svg";
        }, 200)
    </script>

</body>
</html>
