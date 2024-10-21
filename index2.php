<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица умножения</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding: 50px;
            margin: 0;
        }

        h1 {
            color: #333;
            font-size: 36px;
            margin-bottom: 20px;
            text-transform: uppercase;
            animation: fadeInTitle 1.5s ease-out;
        }

        @keyframes fadeInTitle {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        table {
            border-collapse: collapse;
            margin: 0 auto;
            font-size: 18px;
            background: linear-gradient(135deg, #ff6347, #000000); /* Gradient from red to black */
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            animation: fadeInTable 1s ease-out;
        }

        @keyframes fadeInTable {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        td {
            padding: 10px 20px;
            border: 1px solid #ddd;
            color: #fff;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        td:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Subtle hover effect */
            cursor: pointer;
        }

        .highlight {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }

        /* For a little animation when the table is hovered */
        table:hover {
            transform: scale(1.02);
            transition: transform 0.3s ease;
        }

    </style>
</head>
<body>

<h1>Таблица умножения</h1>

<table>
    <tbody>
    <tr>
        <?php
        // Генерируем столбики для чисел от 2 до 10
        for ($i = 2; $i <= 10; $i++) {
            echo "<td>";
            // Внутренний цикл для умножения
            for ($j = 2; $j <= 10; $j++) {
                echo "{$i} * {$j} = " . ($i * $j) . "<br>";
            }
            echo "</td>";
        }
        ?>
    </tr>
    </tbody>
</table>


</body>
</html></table>


