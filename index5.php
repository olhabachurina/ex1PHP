<?php
// Заданное число
$number = 5493256;

// Преобразуем число в массив цифр
$digits = str_split($number);

// Считаем количество цифр
$count = count($digits);

// Находим минимальное, максимальное значения, сумму цифр
$max = max($digits);
$min = min($digits);
$sum = array_sum($digits);

// Вычисляем среднее значение
$avg = $sum / $count;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анализ числа</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        h1, h2 {
            color: #333;
        }
        p {
            font-size: 18px;
        }
        .digits {
            font-weight: bold;
            color: #4CAF50;
        }
        .stats {
            font-weight: bold;
            color: #ff5722;
        }
    </style>
</head>
<body>

<h1>Number is: <?php echo $number; ?></h1>

<p>Digits in the number: <span class="digits"><?php echo implode(', ', $digits); ?></span></p>

<p class="stats">
    Count of digits: <?php echo $count; ?>,
    Max: <?php echo $max; ?>,
    Min: <?php echo $min; ?>,
    Summ: <?php echo $sum; ?>,
    AVG: <?php echo number_format($avg, 2); ?>
</p>

</body>
</html>
