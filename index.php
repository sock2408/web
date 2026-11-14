<?php declare(strict_types=1);

// Подключаем файл с данными (где лежат массивы $labs и $leftMenu)
require_once __DIR__ . '/inc/data.inc.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Веб — Лабораторные работы</title>
    <style>
        /* Твои красивые стили */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 40px 20px;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: #fff;
            font-size: 2.8rem;
            margin-bottom: 40px;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            letter-spacing: 1px;
        }

        .lab-section {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            font-size: 1.6rem;
            margin-bottom: 20px;
            color: #4a3f8f;
            padding-bottom: 10px;
            border-bottom: 3px solid;
            border-image: linear-gradient(90deg, #667eea, #764ba2) 1;
            display: inline-block;
        }

        .links {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }

        .btn {
            display: block;
            padding: 16px 20px;
            text-decoration: none;
            color: #fff;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 12px;
            font-weight: 500;
            font-size: 1rem;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.6s ease;
        }

        .btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.6);
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn:active {
            transform: translateY(-1px);
        }

        @media (max-width: 600px) {
            h1 { font-size: 2rem; }
            h2 { font-size: 1.3rem; }
            .lab-section { padding: 20px; }
            .links { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
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
</body>
</html>
