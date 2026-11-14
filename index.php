<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Веб — Лабораторные работы</title>
    <style>
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

        .lab-section:nth-child(2) { animation-delay: 0.1s; }
        .lab-section:nth-child(3) { animation-delay: 0.2s; }

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

        .btn-number {
            display: inline-block;
            background: rgba(255, 255, 255, 0.25);
            border-radius: 6px;
            padding: 2px 10px;
            margin-right: 8px;
            font-weight: 700;
        }

        .lab-section:nth-child(3) .btn {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            box-shadow: 0 4px 15px rgba(245, 87, 108, 0.4);
        }

        .lab-section:nth-child(3) .btn:hover {
            box-shadow: 0 8px 25px rgba(245, 87, 108, 0.6);
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

        <div class="lab-section">
            <h2>Лаба № 1</h2>
            <div class="links">
                <a href="lab1/vars.php" class="btn"><span class="btn-number">1</span>Переменные (vars)</a>
                <a href="lab1/if.php" class="btn"><span class="btn-number">2</span>Условие (if)</a>
                <a href="lab1/switch.php" class="btn"><span class="btn-number">3.1</span>Switch</a>
                <a href="lab1/match.php" class="btn"><span class="btn-number">3.2</span>Match</a>
                <a href="lab1/array.php" class="btn"><span class="btn-number">4</span>Массивы</a>
                <a href="lab1/constant.php" class="btn"><span class="btn-number">5</span>Константы</a>
            </div>
        </div>

        <div class="lab-section">
            <h2>Лаба № 2</h2>
            <div class="links">
                <a href="lab2/for.php" class="btn"><span class="btn-number">1</span>Цикл for</a>
                <a href="lab2/while.php" class="btn"><span class="btn-number">2</span>Цикл while</a>
                <a href="lab2/menu.php" class="btn"><span class="btn-number">3</span>menu</a>
                <a href="lab2/table.php" class="btn"><span class="btn-number">4</span>table</a>
                <a href="lab2/func.php" class="btn"><span class="btn-number">5</span>func</a>
                <a href="lab2/getmenu.php" class="btn"><span class="btn-number">6</span>getmenu</a>
                <a href="lab2/gettable.php" class="btn"><span class="btn-number">7</span>gettable</a>

            </div>
        </div>
    </div>
</body>
</html>
