<?php declare(strict_types=1);

$constants = get_defined_constants(true);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Константы PHP</title>
	<style>
		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			background: #f4f4f9;
			color: #333;
			padding: 20px;
			line-height: 1.5;
		}
		h1 {
			color: #2c3e50;
			text-align: center;
			margin-bottom: 30px;
		}
		h2 {
			color: #667eea;
			border-bottom: 2px solid #667eea;
			padding-bottom: 5px;
			margin-top: 40px;
		}
		table {
			width: 100%;
			border-collapse: collapse;
			background: #fff;
			box-shadow: 0 2px 10px rgba(0,0,0,0.1);
			border-radius: 8px;
			overflow: hidden;
			margin-bottom: 20px;
		}
		th, td {
			padding: 10px 15px;
			text-align: left;
			border-bottom: 1px solid #eee;
		}
		th {
			background: #667eea;
			color: #fff;
			font-weight: 600;
		}
		tr:hover {
			background: #f9f9ff;
		}
		code {
			font-family: 'Courier New', Courier, monospace;
			background: #f0f0f0;
			padding: 2px 6px;
			border-radius: 4px;
			color: #d63384;
		}
		.value-null {
			color: #999;
			font-style: italic;
		}
	</style>
</head>
<body>
	<h1>Все определённые константы PHP</h1>

	<?php foreach ($constants as $extension => $extConstants): ?>
		<h2>Расширение: <?= htmlspecialchars((string)$extension, ENT_QUOTES, 'UTF-8') ?></h2>
		<table>
			<thead>
				<tr>
					<th>Имя константы</th>
					<th>Значение</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($extConstants as $name => $value): ?>
					<tr>
						<td><code><?= htmlspecialchars((string)$name, ENT_QUOTES, 'UTF-8') ?></code></td>
						<td>
							<?php 
								if (is_bool($value)) {
									echo $value ? 'true' : 'false';
								} elseif ($value === null) {
									echo '<span class="value-null">null</span>';
								} elseif (is_array($value)) {
									echo 'Array';
								} else {
									echo htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
								}
							?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php endforeach; ?>

</body>
</html>