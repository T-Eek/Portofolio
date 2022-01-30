<?php
/*
$schepen = array(
    "TEST" => ["naam"=> "TEST schip", "max_L" => 0, "m3" => 0],
    "HERMES" => ["naam"=> "HERMES", "max_L" => 5809, "m3" => 3806],
    "LUCKY STAR" => ["naam"=> "LUCKY STAR","max_L" => 6800, "m3" => 4178],
    "NS ANGELA" => ["naam"=> "NS ANGELA","max_L" => 5714, "m3" => 3806],
    "SABRINA" => ["naam"=> "SABRINA","max_L" => 10030, "m3" => 6278],
    "TRIUMPH IV" => ["naam"=> "TRIUMPH IV","max_L" => 7100, "m3" => 4039],
    "schip6" => ["naam"=> "SCHIP 6","max_L" => 6000, "m3" => 3000],
    "schip7" => ["naam"=> "SCHIP 7","max_L" => 7000, "m3" => 4000],
    "schip8" => ["naam"=> "SCHIP 8","max_L" => 8000, "m3" => 4000],
    "schip9" => ["naam"=> "SCHIP 9","max_L" => 9000, "m3" => 6000],
    "schip10" => ["naam"=> "SCHIP 10","max_L" => 10000, "m3" => 7000],
    "schip11" => ["naam"=> "SCHIP 11","max_L" => 11000, "m3" => 8000],
    "schip12" => ["naam"=> "SCHIP 12","max_L" => 12000, "m3" => 9000],
    "schip13" => ["naam"=> "SCHIP 13","max_L" => 13000, "m3" => 10000],
    "schip14" => ["naam"=> "SCHIP 14","max_L" => 14000, "m3" => 11000],
    "schip15" => ["naam"=> "SCHIP 15","max_L" => 15000, "m3" => 12000],
    "schip16" => ["naam"=> "SCHIP 16","max_L" => 16000, "m3" => 13000],
    "schip17" => ["naam"=> "SCHIP 17","max_L" => 17000, "m3" => 14000],
    "schip18" => ["naam"=> "SCHIP 18","max_L" => 18000, "m3" => 15000],
    "schip19" => ["naam"=> "SCHIP 19","max_L" => 19000, "m3" => 16000],
    "schip20" => ["naam"=> "SCHIP 20","max_L" => 20000, "m3" => 17000],
    "schip21" => ["naam"=> "SCHIP 21","max_L" => 21000, "m3" => 18000],
    "schip22" => ["naam"=> "SCHIP 22","max_L" => 22000, "m3" => 19000],
    "schip23" => ["naam"=> "SCHIP 23","max_L" => 23000, "m3" => 20000],
    "schip24" => ["naam"=> "SCHIP 24","max_L" => 24000, "m3" => 21000],
    "schip25" => ["naam"=> "SCHIP 25","max_L" => 25000, "m3" => 22000],
    "schip26" => ["naam"=> "SCHIP 26","max_L" => 26000, "m3" => 23000],
    "schip27" => ["naam"=> "SCHIP 27","max_L" => 27000, "m3" => 24000],
    "schip28" => ["naam"=> "SCHIP 28","max_L" => 28000, "m3" => 25000],
    "schip29" => ["naam"=> "SCHIP 29","max_L" => 29000, "m3" => 26000],
    "schip30" => ["naam"=> "SCHIP 30","max_L" => 30000, "m3" => 27000],
    "schip31" => ["naam"=> "SCHIP 31","max_L" => 31000, "m3" => 28000],
    "schip31" => ["naam"=> "SCHIP 31","max_L" => 31000, "m3" => 29000],
    "schip32" => ["naam"=> "SCHIP 32","max_L" => 32000, "m3" => 30000],
    "schip33" => ["naam"=> "SCHIP 33","max_L" => 33000, "m3" => 31000],
    "schip34" => ["naam"=> "SCHIP 34","max_L" => 34000, "m3" => 32000],
    "schip35" => ["naam"=> "SCHIP 35","max_L" => 35000, "m3" => 33000],
    "schip36" => ["naam"=> "SCHIP 36","max_L" => 36000, "m3" => 34000],
    "schip37" => ["naam"=> "SCHIP 37","max_L" => 37000, "m3" => 35000],
    "schip38" => ["naam"=> "SCHIP 38","max_L" => 38000, "m3" => 36000],
    "schip39" => ["naam"=> "SCHIP 39","max_L" => 39000, "m3" => 37000],
    "schip40" => ["naam"=> "SCHIP 40","max_L" => 40000, "m3" => 38000],
    "schip41" => ["naam"=> "SCHIP 41","max_L" => 41000, "m3" => 39000],
    "schip42" => ["naam"=> "SCHIP 42","max_L" => 42000, "m3" => 40000],
    "schip43" => ["naam"=> "SCHIP 43","max_L" => 43000, "m3" => 41000],
    "schip44" => ["naam"=> "SCHIP 44","max_L" => 44000, "m3" => 42000],
    "schip45" => ["naam"=> "SCHIP 45","max_L" => 45000, "m3" => 43000],
    "schip46" => ["naam"=> "SCHIP 46","max_L" => 46000, "m3" => 44000],
    "schip47" => ["naam"=> "SCHIP 47","max_L" => 47000, "m3" => 45000],
    "schip48" => ["naam"=> "SCHIP 48","max_L" => 48000, "m3" => 46000],
    "schip49" => ["naam"=> "SCHIP 49","max_L" => 49000, "m3" => 47000],
    "schip50" => ["naam"=> "SCHIP 50","max_L" => 50000, "m3" => 48000],
);*/

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
  $gewicht = $row["gewicht"];
  $volume = $row["volume"];
  $schepen[$naam] = ["naam"=> $naam, "max_L" => $gewicht, "m3" => $volume];
}