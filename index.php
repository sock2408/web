<?php declare(strict_types=1);

// Подключаем функции и данные
require_once __DIR__ . '/inc/lib.inc.php';
require_once __DIR__ . '/inc/data.inc.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Сайт нашей школы</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <!-- Верхняя часть страницы -->
    <?php require __DIR__ . '/inc/top.inc.php'; ?>
    <!-- Верхняя часть страницы -->
  </header>

  <section>
    <!-- Заголовок -->
    <h1>Добро пожаловать на наш сайт!</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php require __DIR__ . '/inc/index.inc.php'; ?>
    <!-- Область основного контента -->
  </section>
  <div class="container">
        <h1>📚 Лабораторные работы</h1>

        <?php 
       
        foreach ($labs as $sectionName => $items): 
        ?>
            <div class="lab-section">
                <h2><?= htmlspecialchars($sectionName, ENT_QUOTES, 'UTF-8') ?></h2>
                <div class="links">
                    <?php foreach ($items as $item): ?>
                        <a href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>" class="btn">
                            <?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
        
    </div>
  <nav>
    <!-- Навигация -->
    <?php require __DIR__ . '/inc/menu.inc.php'; ?>
    <!-- Навигация -->
  </nav>
  
  <footer>
    <!-- Нижняя часть страницы -->
    <?php require __DIR__ . '/inc/bottom.inc.php'; ?>
    <!-- Нижняя часть страницы -->
  </footer>
</body>
</html>
