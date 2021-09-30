<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>1-100までの数字出力（5の倍数の右隣りに「oh yeah」)</title>
</head>

<body>
<?php
for ($i = 1; $i <= 100; $i++) {
	echo $i;
	if ($i % 5 == 0) {
		echo ' oh yeah';
	}
	echo '<br>';
}
?>
</body>
</html>
