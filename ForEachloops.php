<?php

	$Number = array(8, 60, 168, 995, 45, 25, 5, 100);

	foreach ($Number as $Num ) {

		echo "Numbers: {$Num} <br>";

	}

?> <hr>

<?php 

	$Food = array(

		"item_number" => 1050,

		"name" => "Pizza",

		"region" => "Italy",

		"Side_food" => "Pasta",

		"drink" => "Cook", 

		"package_price" => 'sdsds'

	);

	foreach ($Food as $key => $value) {

		$Data = ucwords(str_replace("_", " ", $key));

		if ( $key == "package_price") {

			if ( is_numeric($value) ) {

			} else 

			{

				$value =  "Can not be determined";

			}

		}
	
		echo "{$Data} : {$value} <br>";

	}

?>