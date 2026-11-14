<?php declare(strict_types=1);

/**
 * Функция отрисовки меню
 */
function getMenu(array $menu, bool $vertical = true): void
{
    $class = $vertical ? 'menu' : 'menu horizontal';
    echo "<ul class=\"{$class}\">";
    foreach ($menu as $item) {
        echo "<li><a href=\"{$item['href']}\">{$item['link']}</a></li>";
    }
    echo "</ul>";
}

/**
 * Функция отрисовки таблицы умножения
 */
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
