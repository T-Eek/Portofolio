<!DOCTYPE html>
<html>
<head>
<title>gegevens van de database</title>
<link rel="stylesheet" href="css/adres2.css">
</head>
<body>
<table>
<tr>
<th>voornaam</th>
<th>achternaam</th>
<th>adres</th>
<th>huisnummer</th>
<th>woonplaats</th>
<th>postcode</th>
</tr>
<?php
$host = 'localhost';
$dbname = 'adreslijst';
$username = 'root';
$password = '';

$connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';
$db = new PDO($connectStr, $username, $password);

$sql = "SELECT * FROM adressen";
$sth = $db->prepare($sql);
$sth->execute();

while($row = $sth->fetch()) {
echo "<tr>";
    $voornaam = $row["voornaam"];
        echo "<td>$voornaam</td>";
            $achternaam = $row["achternaam"];
                echo "<td>$achternaam</td>";
                    $adres = $row["adres"];
                        echo "<td>$adres</td>";
                            $huisnummer = $row["huisnummer"];
                                echo "<td>$huisnummer</td>";
                                    $woonplaats = $row["woonplaats"];
                                        echo "<td>$woonplaats</td>";
                                            $postcode = $row["postcode"];
                                                echo "<td>$postcode</td>";
echo "</tr>";
}
?>
</table>
</body>
</html>