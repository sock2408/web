<?php declare(strict_types=1);


	
	$login = ' User ';
	$password = 'megaP@ssw0rd';
	$name = 'иван';
	$email = 'ivan@petrov.ru';
	$code = '<?=$login?>';
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Использование функций обработки строк</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; }
        .result { background: #f4f4f9; border-left: 4px solid #667eea; padding: 15px; border-radius: 4px; }
        code { background: #e0e0e0; padding: 2px 6px; border-radius: 4px; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Результаты обработки строк</h1>
    <div class="result">
<?php

	$login = mb_strtolower(trim($login), 'UTF-8');
    echo "<p>Очищенный логин: <code>{$login}</code></p>";

    function isStrongPassword(string $pass): bool {
        
        if (mb_strlen($pass, 'UTF-8') < 8) {
            return false;
        }
        
        if (!preg_match('/[A-Z]/', $pass)) {
            return false;
        }
        
        if (!preg_match('/[a-z]/', $pass)) {
            return false;
        }
       
        if (!preg_match('/[0-9]/', $pass)) {
            return false;
        }
        return true;
    }

    $isStrong = isStrongPassword($password) ? 'Да' : 'Нет';
    echo "<p>Пароль <code>{$password}</code> надежный? <strong>{$isStrong}</strong></p>";


    $name = mb_convert_case($name, MB_CASE_TITLE, 'UTF-8');
    echo "<p>Имя с заглавной буквы: <code>{$name}</code></p>";


    $isEmailValid = filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    $emailStatus = $isEmailValid ? 'Корректный' : 'Некорректный';
    echo "<p>Email <code>{$email}</code>: <strong>{$emailStatus}</strong></p>";


    $safeCode = htmlspecialchars($code, ENT_QUOTES, 'UTF-8');
    echo "<p>Переменная \$code: <code>{$safeCode}</code></p>";
?>
    </div>
</body>
</html>