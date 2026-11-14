<?php declare(strict_types=1);

/*
ЗАДАНИЕ 1
- Напишите анонимную функцию, которая меняет местами аргументы, переданные по ссылке. 
- Поместите её в переменную $swap.
*/
$swap = function (&$x, &$y): void {
	// Меняем значения местами с помощью временной переменной 
	// (или современного синтаксиса деструктуризации: [$x, $y] = [$y, $x];)
	$temp = $x;
	$x = $y;
	$y = $temp;
};

/*
ЗАДАНИЕ 2
- Напишите функцию map, принимающую массив и коллбэк.
- Функция должна возвращать изменённый массив.
*/
function map(array $arr, callable $callback): array {
	$result = [];
	foreach ($arr as $item) {
		$result[] = $callback($item);
	}
	return $result;
}

// --- ВЫПОЛНЕНИЕ И ВЫВОД РЕЗУЛЬТАТОВ ---

// Тестируем $swap
$a = 5;
$b = 8;

// Вызываем анонимную функцию
$swap($a, $b); 

// Тестируем функцию map
$numbers = [1, 2, 3, 4, 5];
// Передаем массив и стрелочную функцию для возведения в квадрат
$squaredNumbers = map($numbers, fn($n) => $n ** 2);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Работа с функциями</title>
	<style>
		body { font-family: sans-serif; line-height: 1.6; padding: 20px; }
		.result-box {
			background: #f4f4f9;
			border-left: 4px solid #667eea;
			padding: 15px;
			margin-bottom: 20px;
			border-radius: 4px;
		}
		code { background: #e0e0e0; padding: 2px 6px; border-radius: 4px; }
	</style>
</head>
<body>
	<h1>Работа с функциями</h1>

	<h2>1. Анонимная функция $swap</h2>
	<div class="result-box">
		<p>Изначальные значения: <code>$a = 5</code>, <code>$b = 8</code></p>
		<p>После вызова <code>$swap($a, $b)</code>:</p>
		<ul>
			<li>Значение <code>$a</code>: <strong><?= $a ?></strong> (ожидалось 8)</li>
			<li>Значение <code>$b</code>: <strong><?= $b ?></strong> (ожидалось 5)</li>
		</ul>
	</div>

	<h2>2. Функция map и стрелочная функция</h2>
	<div class="result-box">
		<p>Изначальный массив: <code>[<?= implode(', ', $numbers) ?>]</code></p>
		<p>Массив после возведения в квадрат: <code>[<?= implode(', ', $squaredNumbers) ?>]</code></p>
	</div>

</body>
</html>