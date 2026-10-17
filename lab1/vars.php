<?php

$name = 'Даниил';
$age  = 20;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Переменные и вывод</title>
</head>
<body>
	<h1>Переменные и вывод</h1>

	<pre><?php

	echo "Меня зовут: $name\n";
	echo "Мне $age лет\n";
 
	echo 'Тип переменной $name: ' . gettype($name) . "\n";
	echo 'Тип переменной $age: '  . gettype($age)  . "\n";

	unset($name, $age);

	echo isset($name) ? '$name ещё существует' . "\n" : '$name удалена' . "\n";
	echo isset($age)  ? '$age ещё существует'  . "\n" : '$age удалена'  . "\n";
	?></pre>
</body>
</html>