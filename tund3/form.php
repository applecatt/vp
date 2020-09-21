<?php
  //var_dump($_POST);
  require("../../../config.php");
  $database = "if20_harry_lo_1";
  //kui on idee sisestatud ja nuppu vajutatud, salvestame selle andmebaasi
  if(isset($_POST["ideasubmit"]) and !empty($_POST["ideasubmit"])){
	  $conn = new mysqli($serverhost, $serverusername, $serverpassword, $database);
	  //vbalmistan ettte SQL käsu
	  $stmt = $conn->prepare("INSERT INTO myideas (idea) VALUES(?)");
	  echo $conn->error;
	  //seome käsuga pärisandmed
	  //i -integer, d - decimal, s - string
	  $stmt->bind_param("s", $_POST["ideainput"]);
	  $stmt->execute();
	  $stmt->close();
	  $conn->close();
  }
?>
<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title><?php echo $username; ?> programmeerib veebi</title>
</head>
<body>
  <h1>Sisesta oma mõte!</h1>
<form method="POST">
<label>Sisesta oma pähe tulnud mõte!</label>
<input type="text" name="ideainput" placeholder="Kirjuta siia mõte!">
<input type="submit" name="ideasubmit" value="Saada mõte ära!">
</form>
</body>
</html>