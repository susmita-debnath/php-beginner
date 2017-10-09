<?php 

$weather = "SUN";

if ( $weather == "Sunny" ) {

	echo "Weather is pleasant<br>";

} elseif ( $weather == "Rainy" ) {

	echo "its raining";

} elseif ( $weather == "Cloudy" ) {

	echo "Cloud pleasant";

} else {

	echo "Its hard to forecast weather";

}

?><hr>

<?php

	$Bought_Product = false;

	if ( $Bought_Product ) {

		echo "<h1>Thank you</h1>";

		echo "<p>Your product will be dispatch soon</p>";
		
	} else {

		echo "<h1>Please Wait</h1>";

		echo "<p>Your payment is in processing</p>";

	}

?> <hr>

<?php

	$a = 4;

	$b = 3;

	$c = "Result can not be out";

	if ( $b < 5 && $a > 0 ) {

		$c = $a / $b;

	}

	echo $c;

?>