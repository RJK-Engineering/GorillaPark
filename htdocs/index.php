<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GorillaPark login</title>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/login-screen.css">
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
</head>

<body>
    
    <div id="content-container">
    <form action="actions/login.php" method="post">
        Gebruikersnaam:<br>
        <input type="text" name="username" required autofocus><br>
        Wachtwoord:<br>
        <input type="password" name="password" required><br>
        <input id="log-in-button" type="submit" value="Log in">
    </form>
    
    
    <?php
    if (isset($_GET["login_failed"])){
        echo "<span id='login-fail-text'>Inloggen niet gelukt, probeer het opnieuw.</span>";
    }    
    ?>
    </div>
    <a href="pages/home.php">Inloggen</a>
</body>
</html>
