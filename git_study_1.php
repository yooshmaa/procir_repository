<?php
$number1 = 10;
$number2 = 5;

if ($number1 - $number2 > 0) {
	echo 'number1 is bigger than number2.';
} elseif ($number2 - $number1 > 0) {
	echo 'number2 is bigger than number1.';
} else {
	echo 'both numbers are equal.';
}
?>
