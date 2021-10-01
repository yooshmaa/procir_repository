<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>1-100までの数字出力（6の倍数の右隣りに「oh six!」)</title>
</head>

<body>
<?php
for ($i = 1; $i <= 100; $i++) {
	echo $i;
	if ($i % 6 == 0) {
		echo ' oh six!';
	}
	echo '<br>';
}
?>
</body>
</html>
