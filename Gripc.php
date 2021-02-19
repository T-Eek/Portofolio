<?php
$host = 'localhost';
$dbname = 'grip';
$username = 'root';
$password = '';

$connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';
$db = new PDO($connectStr, $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM colors";
try {
    $sth = $db->prepare($sql);
    $sth->execute();
} catch (PDOException $e) {
    // In de catch wordt de fout afgevangen en kan je iets met de foutmelding
    // doen, bijvoorbeeld tonen of loggen
    echo $e->getMessage();
}

$colors = [];
while($row = $sth->fetch()){
  $naam = $row["naam"];
  $id = $row["id"];
  $color = $row["color"];
  $colors[$naam] = ["naam"=> $naam, "id" => $id, "color" => $color];
}