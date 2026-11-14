<?php declare(strict_types=1);


$cols = 10;
$rows = 10;
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
		}

		th,
		td {
			padding: 10px;
			border: 1px solid black;
		}


		th {
			background-color: yellow;
			font-weight: bold;
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Таблица умножения</h1>
	<?php

	?>
	<table>
		<?php for ($r = 1; $r <= $rows; $r++): ?>
			<tr>
				<?php for ($c = 1; $c <= $cols; $c++): ?>
					<?php $product = $r * $c; ?>
					
					<?php if ($r === 1 || $c === 1): ?>
						
						<th><?= $product ?></th>
					<?php else: ?>
						
						<td><?= $product ?></td>
					<?php endif; ?>
					
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>
</body>
</html>