<?php declare(strict_types=1);

// Подключаем функции и данные
require_once __DIR__ . '/inc/lib.inc.php';
require_once __DIR__ . '/inc/data.inc.php';

// Обработка формы (если пользователь нажал "Создать")
$formCols = isset($_POST['cols']) && $_POST['cols'] !== '' ? (int)$_POST['cols'] : $cols;
$formRows = isset($_POST['rows']) && $_POST['rows'] !== '' ? (int)$_POST['rows'] : $rows;
$formColor = isset($_POST['color']) ? $_POST['color'] : $color;

?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Таблица умножения</title>
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
    <h1>Таблица умножения</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form method="post">
      <label>Количество колонок: </label>
      <br>
      <input name='cols' type='text' value='<?= $formCols ?>'>
      <br>
      <label>Количество строк: </label>
      <br>
      <input name='rows' type='text' value='<?= $formRows ?>'>
      <br>
      <label>Цвет: </label>
      <br>
      <input name='color' type='color' value='<?= $formColor ?>' list="listColors">
      <datalist id="listColors">
        <option>#ff0000</option>
        <option>#00ff00</option>
        <option>#0000ff</option>
      </datalist>
      <br>
      <br>
      <input type='submit' value='Создать'>
    </form>
    <br>
    <!-- Таблица -->
    <?php 
      // Вызов функции отрисовки таблицы с параметрами
      getTable($formCols, $formRows, $formColor); 
    ?>
    <!-- Таблица -->
    <!-- Область основного контента -->
  </section>
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
