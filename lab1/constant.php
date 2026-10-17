<?php
define('SITE_NAME', 'http://lavalunie.xsph.ru/');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Константы</title>
</head>
<body>
	<h1>Константы</h1>
	<?php
	if (defined('SITE_NAME')) {
		echo SITE_NAME . '<br>';
	}

	echo 'Версия PHP: ' . PHP_VERSION . '<br>';
	echo 'Директория скрипта: ' . __DIR__ . '<br>';
	?>
</body>
</html>