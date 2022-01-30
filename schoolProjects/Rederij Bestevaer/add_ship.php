<?php
$host = 'localhost';
$dbname = 'bestevaer';
$username = 'root';
$password = '';

$connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';
$db = new PDO($connectStr, $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM schepen";
try {
    $sth = $db->prepare($sql);
    $sth->execute();
} catch (PDOException $e) {
    // In de catch wordt de fout afgevangen en kan je iets met de foutmelding
    // doen, bijvoorbeeld tonen of loggen
    echo $e->getMessage();
}

$schepen = [];
while($row = $sth->fetch()){
  $naam = $row["naam"];
  $Code = $row["Code"];
  $gewicht = $row["gewicht"];
  $Maxlading = $row["Maxlading"];
  $Maxgewicht = $row["Maxgewicht"];
  $volume = $row["volume"];
  $schepen[$naam] = ["naam"=> $naam, "Code"=> $Code, "max_L"=> $gewicht,
  "Maxlading"=> $Maxlading, "Maxgewicht"=> $Maxgewicht, "m3"=> $volume];
}

?>