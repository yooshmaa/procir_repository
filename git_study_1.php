<?php
$numbers = array(
	'number1' => 10,
	'number2' => 5,
	'number3' => 7.2,
);

foreach ($numbers as $number) {
	if (is_int($number)) {
		echo $number . ' is integer.' . '<br>';
	} else {
		echo $number . ' is not integer.' . '<br>';
	}
}
?>
