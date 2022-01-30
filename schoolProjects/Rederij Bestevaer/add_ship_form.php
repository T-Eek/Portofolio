<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add schip</title>
    <link rel="stylesheet" href="add_ship_form.css">
    <link rel="stylesheet" href="css/rederij Bestevaer_nav.css">
    <link rel="stylesheet" href="css/rederij Bestevaer.css">
    <?php include "add_ship.php"; ?>
</head>
<body>
<img src="https://stegro.nl/59-large_default/smits-shipping-.jpg" alt="Logo" width="200" height="200" style="float:right">
    <ul class="nav">
        <li><a class="nav" href="./rederij Bestevaer.html">Home</a></li>
        <li><a href="./smits.php">SMITS</a></li>   
        <li><a href="./rederij Bestevaer.php">bereken schip </a></li>
        <li><a href="#add_ship_form.php">add schip </a></li>
    </ul>
    </div>

<div class="columnA" style="background-color:#EAEAEA;">
  <form method="POST">
    <select name="schip_S">
      <?php foreach($schepen as $key=>$value): ?>
          <option value="<?php echo $key; ?>"><?php echo $value["naam"]; ?></option>
      <?php endforeach; ?>
    </select>
    <br><br>
    <label for="Code"><br>Code</label>
    <input type="text" name="Code" id="Code" placeholder="typ Code..">
    <label for="Maxlading"><br>Maxlading</label>
    <input type="text" name="Maxlading" id="Maxlading" placeholder="typ Maxlading..">
    <label for="Maxgewicht"><br>Maxgewicht</label>
    <input type="text" name="Maxgewicht" id="Maxgewicht" placeholder="typ Maxgewicht..">
    <br><br>
    <input type="submit" name="submit" value="bereken schip">
</form>
<br><br>

<?php
if(isset($_POST["submit"])) {
  include "add_ship.php";

  $Maxlading = $_POST["Maxlading"];
  $schip = $_POST["schip_S"];
  $Maxgewicht = $_POST["Maxgewicht"];

    $gekozenship = $schepen[$schip];

      $max = $schepen[$schip]["max_L"];
      $Maxgewicht = $schepen[$schip]["Maxgewicht"];

    echo "$schip heeft een Maxlading van: $Maxlading<br>";
    echo "$schip heeft een Maxgewicht van: $Maxgewicht<br>";
  echo "<b>Code van $schip = $Code </b><br>";
  echo "<b>max = van $schip = $max</b><br>";
  echo "<b>m3 van $schip = $Maxgewicht </b>";

} 
if( $Maxlading < $Maxgewicht ) {
  echo "<h1><b>u kunt varen</b></h1>";
  } elseif ( $Maxlading > $Maxgewicht ) {
    echo "<h1><b>u kunt niet varen</b></h1>";
  } else {
    echo "voer de gegevens in en druk op <b>bereken ship</b><br>";
  }
?>
</body>
</html>