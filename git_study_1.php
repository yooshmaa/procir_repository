<?php
$numbers = array(
	'number1' => 10,
	'number2' => 5,
	'number3' => 7.2,
);

foreach ($numbers as $number) {
	if (is_float($number)) {
		echo $number . ' is decimal number.' . '<br>';
	} else {
		echo $number . ' is not decimal number.' . '<br>';
	}
}
?>
