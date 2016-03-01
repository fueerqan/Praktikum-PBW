<?php
	$var = "isi";

	$arr = array();

	$arr[0] = "Saya";
	$arr[1] = "PBW";
	$arr[2] = "2";
	$arr["keempat"] = "4";

	$arr[] = "3";

	$arr[] = "Lagi";

	foreach ($arr as $key => $value){
		echo $key;
		echo " - ";
		echo $value;
		echo "<br>";
	}

?>