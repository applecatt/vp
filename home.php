<?php
  $username = "Harry O'Loog";
  $fulltimenow = date("d.m.Y H:i:s");
  $hournow = date("H");
  $partofday = "lihtsalt aeg";
  if($hournow < 6){
		$partofday = "uneaeg";
  }//enne kuut
  if($hournow >= 13){
	  $partofday = "peale keskpäeva";
  }
  if($hournow >= 14){
	  $partofday = "pärastlõuna";
  }
  if($hournow >= 15){
	  $partofday = "keset pärastlõunat";
  }
  if($hournow >= 16){
	  $partofday = "kooliaeg";
  }
  if($hournow >= 17){
	  $partofday = "õhtuu";
  }
  if($hournow >= 18){
	  $partofday = "päris õhtu";
  }
  if($hournow >= 19){
	  $partofday = "üsna õhtu";
  }
  if($hournow >= 20){
	  $partofday = "pärispäris õhtu";
  }
  if($hournow >= 21){
	  $partofday = "hilja";
  }
  if($hournow >= 22){
	  $partofday = "hiljem";
  }
  if($hournow >= 23){
	  $partofday = "liiga hilja";
  }
  if($hournow >= 24){
	  $partofday = "kesköö";
  }
    if($hournow = 1){
		$partofday = "südaöö möödas";
  }
    if($hournow = 2){
		$partofday = "öö";
  }
    if($hournow = 3){
		$partofday = "tontide aeg";
  }
    if($hournow = 4){
		$partofday = "2 tundi enne kuut";
  }
    if($hournow = 5){
		$partofday = "päikesetõus";
  }
    if($hournow = 6){
		$partofday = "aeg ärgata";
  }
    if($hournow = 7){
		$partofday = "aeg üles tõusta";
  }
    if($hournow = 8){
		$partofday = "aeg õppida";
  }
    if($hournow = 9){
		$partofday = "aeg hilinenud kodutöid teha";
  }
    if($hournow = 10){
		$partofday = "hommik";
  }
    if($hournow = 11){
		$partofday = "peaaegu keskpäev";
  }
    if($hournow = 12){
		$partofday = "keskpäev";
  }
  
  //vaatame semestri kulgemist
  $semesterstart = new DateTime("2020-8-31");
  $semesterend = new DateTime("2020-12-13");
  $semesterduration = $semesterstart->diff($semesterend);
  $semesterdurationdays = $semesterduration->format("%r%a"); //%a - päevade arv
  $today = new DateTime("now");
  $dayselapsed = $semesterstart->diff($today);
  $dayselapseddays = $dayselapsed->format("%r%a");
  $dayselapsedpercentage = $dayselapseddays/108*100;
?>
<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title><?php echo $username; ?> programmeerib veebi</title>

</head>
<body>
  <h1><?php echo $username; ?></h1>
  <p>See veebileht on loodud õppetöö kaigus ning ei sisalda mingit tõsiseltvõetavat sisu!</p>
  <p>See konkreetne leht on loodud veebiprogrammeerimise kursusel aasta 2020 sügissemestril <a href="https://www.tlu.ee">Tallinna Ülikooli<a/> Digitehnoloogiate instituudis.<p>
  <p>Lehe avamise hetk: <?php echo $fulltimenow; ?>.</p>
  <p><?php echo "Praegu on " .$partofday ."."; ?></p>
  <p>Semestri algusest on möödunud <?php echo $dayselapseddays; ?> päeva.<p/>
  <p>Läbitud on <?php echo $dayselapsedpercentage; ?>% semestrist.</p>
</body>
</html>