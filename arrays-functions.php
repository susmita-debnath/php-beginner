<?php

	$color = array("red", "green", "blue");

	array_pop($color);

	array_push($color, "black", "White", "Pink");

	print_r($color);

?><br>

<?php $Numbers = array(13, 54, 6, 89, 100, 15, 12, 789, 1000); ?><br>

<?php echo count($Numbers); ?><br>

Max:<?php echo max($Numbers); ?><br>

Min:<?php echo min($Numbers); ?><br>

Yes / No:<?php echo in_array(89, $Numbers); ?><br>

<?php echo sort($Numbers); ?><br>

<?php print_r($Numbers); ?><br>

<?php echo rsort($Numbers); ?><br>

<?php print_r($Numbers); ?><br>

Implode:<?php

$Quate = array("Never", "Give", "UP", "in", "life");

?><br>

<?php echo implode(" ", $Quate); ?><br>

Explode:<?php

$Quate = "Never Give UP in life";

print_r(explode(" ", $Quate));


?><br>


