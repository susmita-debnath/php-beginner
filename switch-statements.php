<?php

$Weather = "Cloudyblurr";

switch ($Weather) {

	case "Sunny":

		echo "Weather is quite pleasant outside";

		break;

	case "Rainy":

		echo "Its Raining outside <br>";

		break;

	case "Cloudy":

	echo "It is expected to Rain <br>";

		break;
	
	default:

	echo "Weather can not be forecast <br>";

		break;

}

?> <hr>

<?php

$Restricted_Area = 'Jazeb';

switch ($Restricted_Area) {

	case 'Guard':

		echo "Permission Granted";
		
		break;

	case 'Office boy':

	case 'Public':

	case 'Media':

		echo "Permission Denied";

		break;
	
	default:

		echo "See jazebakram.com for coupons";

		break;
}