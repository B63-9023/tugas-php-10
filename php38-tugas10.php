<?php
	$arr = array(1,3,8,2,5,7,4,0);

	print("Sebelum Disorting :<br>");
	print_r($arr);

echo "<br>";

	sort($arr);
	print("Setelah Disorting <i>(Buble Sort)</i> :<br>");
	for($x = 0; $x < count($arr); $x++) {
	   $arrs[] = $arr[$x];
	}
	print_r($arrs);
?>