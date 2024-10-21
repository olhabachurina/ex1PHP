<?php
// Заданное число
$number = 347689;

// Преобразуем число в строку перед переворотом
$numberString = (string)$number;
$reversedNumber = strrev($numberString); // Переворачиваем строку

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Зеркальное число</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            margin-top: 50px;
            background: linear-gradient(270deg, #ff7e5f, #feb47b, #86a8e7, #91eae4);
            background-size: 600% 600%;
            animation: gradientAnimation 10s ease infinite;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        h1 {
            margin: 10px 0;
            font-size: 48px;
            letter-spacing: 8px;
        }

        .original {
            color: red;
            display: block; /* Размещаем число на отдельной строке */
        }

        .reversed {
            color: green;
            display: block; /* Размещаем перевёрнутое число на новой строке */
        }

        .digit {
            opacity: 0;
            display: inline-block;
            animation: fadeIn 0.5s ease forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Анимация появления цифр */
        .original .digit:nth-child(1) { animation-delay: 0.1s; }
        .original .digit:nth-child(2) { animation-delay: 0.2s; }
        .original .digit:nth-child(3) { animation-delay: 0.3s; }
        .original .digit:nth-child(4) { animation-delay: 0.4s; }
        .original .digit:nth-child(5) { animation-delay: 0.5s; }
        .original .digit:nth-child(6) { animation-delay: 0.6s; }

        .reversed .digit:nth-child(1) { animation-delay: 0.1s; }
        .reversed .digit:nth-child(2) { animation-delay: 0.2s; }
        .reversed .digit:nth-child(3) { animation-delay: 0.3s; }
        .reversed .digit:nth-child(4) { animation-delay: 0.4s; }
        .reversed .digit:nth-child(5) { animation-delay: 0.5s; }
        .reversed .digit:nth-child(6) { animation-delay: 0.6s; }

    </style>
</head>
<body>

<?php
// Выводим каждую цифру отдельно для оригинального числа
echo "<h1 class='original'>";
for ($i = 0; $i < strlen($numberString); $i++) {
    echo "<span class='digit'>" . $numberString[$i] . "</span>";
}
echo "</h1>";

// Выводим перевёрнутое число на новой строке
echo "<h1 class='reversed'>";
for ($i = 0; $i < strlen($reversedNumber); $i++) {
    echo "<span class='digit'>" . $reversedNumber[$i] . "</span>";
}
echo "</h1>";
?>

</body>
</html>