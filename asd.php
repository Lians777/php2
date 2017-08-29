<?php

funcTion getPrise($cost) {

	return $cost *2 *1.21 +5;
}

funcTion getvolume ($a, $b, $z)
{
	$turis = ($a * $b * $z);
	return $turis;
}

funcTion getarea ($s, $d) {

$vidplotas = (2 *$s + 2 * $d);
return $vidplotas; }


funcTion gettil ($s, $d) {

$vidplotas = (2 *$s + 2 * $d);
return $vidplotas; }

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stilius.cs">
	<title>9paskaita</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container " style="background-color: brown">
	<div class="row">
		<h1>9paskaita</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col">kaire

			<?php

				echo "prekes pardavimo kaina yra" . getPrise(45) . "Eur"

			?>

		</div>
		<div class="col">desine

		<?php
		echo "BASEINO DYDIS YRA" .getvolume(10, 5, 2);

		echo "BASEINO vidinis plotas" .getarea(12,5);

		echo "sveikos plyteles" .gettil(12,0.25);

		for ($i=0; $i <500 ; $i++) { 
			echo "<div class= 'tile'>$i</div>";
		}

		$a = 3;
		$b = 7;

		if ($a ==3 && $b ==7) {
			echo "ir";}
		
		
		
		?>
		</div>
	</div>
</div>


</body>
</html>