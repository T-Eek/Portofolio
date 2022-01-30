<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adreslijst gegevens</title>
    <link rel="stylesheet" href="css/adres.css">
</head>
<body>
<div class="column" style="background-color:#30A08D;">
<form action="agegevens.php" method="post">
    <div class="kader">
<h1>⇘ Adreslijst ⇙</h1>
    <label for="voornaam">voornaam  </label>
    <input type="text" name="voornaam" id="voornaam">
    <br>
    <label for="achternaam">achternaam</label>
    <input type="text" name="achternaam" id="achternaam">
    <br>
    <label for="adres">adres</label>
    <input type="text" name="adres" id="adres">
    <br>
    <label for="huisnummer">huisnummer</label>
    <input type="text" name="huisnummer" id="huisnummer">
    <br>
    <label for="woonplaats">woonplaats</label>
    <input type="text" name="woonplaats" id="woonplaats">
    <br>
    <label for="postcode">postcode</label>
    <input type="text" name="postcode" id="postcode">
    <br>
    ➤<input type="submit" name="opslaan" value="opslaan">
</div>
</form>
</div>
<?php
    if(isset($_POST["submit"])) {
            $voornaam = empty($_POST["voornaam"]) ? "onbekend" : $_POST["voornaam"];
            echo $voornaam;
                $achternaam = empty($_POST["achtrnaam"]) ? "onbekend" : $_POST["achternaam"];
                echo $achternaam;
                    $adres = empty($_POST["adres"]) ? "onbekend" : $_POST["adres"];
                    echo $adres;
                        $huisnummer = empty($_POST["huisnummer"]) ? "onbekend" : $_POST["huisnummer"];
                        echo $huisnummer;
                            $woonplaats = empty($_POST["woonplaats"]) ? "onbekend" : $_POST["woonplaats"];
                            echo $woonplaats;
                                $postcode = empty($_POST["postcode"]) ? "onbekend" : $_POST["postcode"];
                                echo $postcode;
}


$host = 'localhost';
$dbname = 'adreslijst';
$username = 'root';
$password = '';

$connectStr = 'mysql:host=' . $host . ';username=' . $username . ';dbname=' . $dbname . ';password=' . $password; 
$db = new PDO($connectStr, $username, $password);
?>
</body>
</html>