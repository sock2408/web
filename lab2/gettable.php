<?php declare(strict_types=1);

function getTable(int $cols = 10, int $rows = 10, string $color = 'yellow'): int
{

    static $count = 0;
    $count++;

    
    echo '<table>';
    for ($r = 1; $r <= $rows; $r++) {
        echo '<tr>';
        for ($c = 1; $c <= $cols; $c++) {
            $product = $r * $c;
            
            
            if ($r === 1 || $c === 1) {
                
                echo "<th style='background-color: {$color};'>{$product}</th>";
            } else {
                echo "<td>{$product}</td>";
            }
        }
        echo '</tr>';
    }
    echo '</table>';

    return $count;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Таблица умножения</title>
	<style>
		table {
			border: 2px solid black;
			border-collapse: collapse;
			margin-bottom: 30px; 
		}

		th,
		td {
			padding: 10px;
			border: 1px solid black;
            text-align: center;
		}


	</style>
</head>
<body> 
	<h1>Таблица умножения</h1>
	<?php

	echo '<h2>Вызов 1 (5x5, красный фон)</h2>';
	getTable(5, 5, '#ffb3b3');

	echo '<h2>Вызов 2 (8x8, голубой фон)</h2>';
	getTable(8, 8, '#b3d9ff');

	echo '<h2>Вызов 3 (без параметров)</h2>';
	getTable(); 

	echo '<h2>Вызов 4 (с одним параметром)</h2>';
	getTable(6); 

	echo '<h2>Вызов 5 (с двумя параметрами)</h2>';

	$totalCalls = getTable(4, 3, '#c2f0c2'); 

	echo "<p style='font-size: 1.2rem;'><strong>Общее число вызовов функции getTable():</strong> {$totalCalls}</p>";
	?> 
</body>
</html>