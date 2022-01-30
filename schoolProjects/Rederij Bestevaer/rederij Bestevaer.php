<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rederij Bestevaer</title>
    <link rel="stylesheet" href="css/rederij Bestevaer_nav.css">
    <link rel="stylesheet" href="css/rederij Bestevaer_info.css">
    <link rel="stylesheet" href="css/rederij Bestevaer.css">
    <?php include "schepen.php"; ?>
</head>
<body>
  <img src="https://stegro.nl/59-large_default/smits-shipping-.jpg" alt="Logo" width="200" height="200" style="float:right">
    <ul class="nav">
        <li><a class="nav" href="./rederij Bestevaer.html">Home</a></li>
        <li><a href="./smits.php">SMITS</a></li>   
        <li><a href="#rederij Bestevaer.php">bereken schip </a></li>
        <li><a href="./add_ship_form.php">add schip </a></li>
    </ul>
    </div>
  <div class="column" style="background-color:#FFF000;">
  <form method="POST">
    <select name="schip_S">
      <?php foreach($schepen as $key=>$value): ?>
          <option value="<?php echo $key; ?>"><?php echo $value["naam"]; ?></option>
      <?php endforeach; ?>
    </select>
    <br><br>
    <label for="lading">lading</label>
    <input type="text" name="lading" id="lading">
    <label for="m3">m3</label>
    <input type="text" name="m3" id="m3">
    <br><br>
    <input type="submit" name="submit" value="bereken schip">
</form>
<br><br>

<?php
if(isset($_POST["submit"])) {
  include "schepen.php";

  $lading = $_POST["lading"];
  $schip = $_POST["schip_S"];
  $m3 = $_POST["m3"];

    $gekozenship = $schepen[$schip];

      $max = $schepen[$schip]["max_L"];
      $m3 = $schepen[$schip]["m3"];

    echo "$schip heeft een lading van: $lading<br>";
    echo "$schip heeft een m3 van: $m3";
  echo "<br>";
  echo "<b>max = van $schip = $max</b>";
  echo "<br>";
  echo "<b>m3 van $schip = $m3 </b><br>";
} 
if( $lading < $m3 ) {
  echo "<h1><b>u kunt varen</b></h1>";
  } elseif ( $lading > $m3 ) {
    echo "<h1><b>u kunt niet varen</b></h1>";
  } else {
    echo "voer de gegevens in en druk op <b>bereken ship</b><br>";
  }
?>
</body>
</html>