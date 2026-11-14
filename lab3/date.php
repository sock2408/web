<?php declare(strict_types=1);

$now = time();
$birthday = strtotime('2006-08-24');
$dateArray = getdate();
$hour = $dateArray['hours'];

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Использование функций даты и времени</title>
</head>
<body>
	<h1>Использование функций даты и времени</h1>
	<?php
	if ($hour >= 0 && $hour < 6) {
		$welcome = 'Доброй ночи';
	} elseif ($hour >= 6 && $hour < 12) {
		$welcome = 'Доброе утро';
	} elseif ($hour >= 12 && $hour < 18) {
		$welcome = 'Добрый день';
	} elseif ($hour >= 18 && $hour < 23) {
		$welcome = 'Добрый вечер';
	} else {
		$welcome = 'Доброй ночи';
	}

	echo $welcome . '<br>';

	setlocale(LC_TIME, 'ru_RU.UTF-8');

	$fmt = datefmt_create(
		'ru_RU',
		IntlDateFormatter::FULL,
		IntlDateFormatter::FULL,
		'Europe/Moscow',
		IntlDateFormatter::GREGORIAN,
		"d MMMM y 'года, 'eeee HH:mm:ss"
	);
	echo "Сегодня " . datefmt_format($fmt, $now) . '<br>';

	$currentDateString = date('Y-m-d', $now);
	$birthdayThisYearString = date('Y') . date('-m-d', $birthday);

	if (strtotime($birthdayThisYearString) < strtotime($currentDateString)) {
		$nextBirthday = strtotime((date('Y') + 1) . date('-m-d', $birthday));
	} else {
		$nextBirthday = strtotime($birthdayThisYearString);
	}

	$diff = $nextBirthday - $now;
	
	$days = floor($diff / 86400);
	$hours = floor(($diff % 86400) / 3600);
	$minutes = floor(($diff % 3600) / 60);
	$seconds = $diff % 60;

	echo "До моего дня рождения осталось <br>";
	echo "{$days} дней, {$hours} часов, {$minutes} минут, {$seconds} секунд";
	?>
</body>
</html>