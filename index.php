<?php
// Генерируем 100 случайных чисел
$numbers = [];
for ($i = 0; $i < 100; $i++) {
    $numbers[] = rand(1, 100); // Генерация чисел от 1 до 100
}

// Находим максимум и минимум
$maxNumber = max($numbers);
$minNumber = min($numbers);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Случайные числа</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            color: #fff;
            text-align: center;
            padding: 50px;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            display: inline-block;
            animation: fadeInContainer 1.5s ease-out;
        }

        @keyframes fadeInContainer {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        p {
            font-size: 20px;
            color: #f1f1f1;
        }

        .numbers {
            font-size: 18px;
            color: #ffeaa7;
            margin-bottom: 30px;
            display: inline-block;
            animation: numbersAnim 1.5s ease-in-out;
        }

        @keyframes numbersAnim {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .result {
            font-size: 26px;
            font-weight: bold;
            color: #fdcb6e;
            margin-bottom: 10px;
        }

        .highlight {
            color: #d63031;
            animation: highlightAnim 1.5s infinite alternate;
        }

        @keyframes highlightAnim {
            from {
                transform: scale(1);
                color: #ff7675;
            }
            to {
                transform: scale(1.2);
                color: #fab1a0;
            }
        }

        .result:hover .highlight {
            transform: scale(1.3);
            color: #ff5252;
        }

        .container:hover {
            box-shadow: 0 12px 50px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>

<div class="container">
    <p class="numbers">Числа: <?php echo implode(' ', $numbers); ?></p>
    <p class="result">Максимум: <span class="highlight"><?php echo $maxNumber; ?></span></p>
    <p class="result">Минимум: <span class="highlight"><?php echo $minNumber; ?></span></p>
</div>

</body>
</html>