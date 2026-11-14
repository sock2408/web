<?php declare(strict_types=1);


$extensions = get_loaded_extensions();
sort($extensions); 

$totalFunctions = 0;

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Функции модулей PHP</title>
	<style>
		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			background: #f4f4f9;
			color: #333;
			padding: 20px;
			line-height: 1.5;
		}
		h1 {
			text-align: center;
			color: #2c3e50;
			margin-bottom: 30px;
		}
		.module {
			background: #fff;
			border-radius: 8px;
			padding: 15px 20px;
			margin-bottom: 20px;
			box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
			border-left: 5px solid #667eea;
		}
		.module h2 {
			margin-top: 0;
			font-size: 1.3rem;
			color: #667eea;
			border-bottom: 1px solid #eee;
			padding-bottom: 8px;
			display: flex;
			justify-content: space-between;
		}
		.module h2 span {
			font-size: 0.9rem;
			color: #888;
			font-weight: normal;
		}
		.functions-list {
			list-style-type: none;
			padding: 0;
			margin: 0;
			display: grid;
			grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
			gap: 8px;
		}
		.functions-list li {
			background: #f8f9fa;
			padding: 5px 10px;
			border-radius: 4px;
			font-family: 'Courier New', Courier, monospace;
			font-size: 0.9rem;
			color: #444;
			transition: background 0.2s;
		}
		.functions-list li:hover {
			background: #e2e6ea;
		}
		.empty {
			color: #999;
			font-style: italic;
			font-size: 0.95rem;
		}
		.total {
			text-align: center;
			background: #667eea;
			color: #fff;
			padding: 15px;
			border-radius: 8px;
			font-size: 1.4rem;
			margin-top: 40px;
			box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
		}
	</style>
</head>
<body>
	<h1>Загруженные модули и их функции</h1>

	<?php foreach ($extensions as $ext): ?>
		<?php
			$functions = get_extension_funcs($ext);
			if ($functions === false) {
				$functions = [];
			}
			$count = count($functions);
			$totalFunctions += $count;
		?>
		<div class="module">
			<h2>
				<?= htmlspecialchars($ext, ENT_QUOTES, 'UTF-8') ?>
				<span><?= $count ?> функций</span>
			</h2>
			
			<?php if ($count > 0): ?>
				<ul class="functions-list">
					<?php foreach ($functions as $func): ?>
						<li><?= htmlspecialchars($func, ENT_QUOTES, 'UTF-8') ?></li>
					<?php endforeach; ?>
				</ul>
			<?php else: ?>
				<p class="empty">Нет функций</p>
			<?php endif; ?>
		</div>
	<?php endforeach; ?>

	<div class="total">
		Всего <?= $totalFunctions ?> функций
	</div>
</body>
</html>