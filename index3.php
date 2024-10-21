<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Расчет депозита</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('imagesfon.jpg') no-repeat center center fixed;
            background-size: cover; /* Ensure the image covers the entire background */
            text-align: center;
            padding: 50px;
            margin: 0;
        }

        h1 {
            color: #fff;
            font-size: 36px;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 10px;
            display: inline-block;
            border-radius: 10px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
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
            background: linear-gradient(135deg, #ff6347, #6a11cb); /* Gradient background */
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

        td, th {
            padding: 15px 25px;
            border: 1px solid #ddd;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.2); /* Transparent cells */
            color: #fff;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        th {
            background-color: #ff3b3b; /* Bright red for headers */
            color: white;
            font-weight: bold;
            text-transform: uppercase;
        }

        tr:nth-child(even) td {
            background-color: rgba(255, 255, 255, 0.1);
        }

        tr:hover td {
            background-color: rgba(255, 255, 255, 0.3);
            transform: scale(1.05);
            cursor: pointer;
        }

        .profit {
            color: #4caf50;
            font-weight: bold;
            font-size: 18px;
            text-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
        }

        table:hover {
            transform: scale(1.02);
            transition: transform 0.3s ease;
        }

    </style>
</head>
<body>

<h1>Таблица расчета депозита</h1>

<table>
    <thead>
    <tr>
        <th>Year</th>
        <th>Sum Start</th>
        <th>Sum End</th>
        <th>Profit</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $initialAmount = 300;  // Начальная сумма
    $rate = 0.20;  // 20% годовых
    $years = 20;   // Количество лет

    for ($year = 1; $year <= $years; $year++) {
        $sumStart = $initialAmount;
        $profit = $sumStart * $rate; // Прибыль за год
        $sumEnd = $sumStart + $profit; // Сумма на конец года

        echo "<tr>";
        echo "<td>$year</td>";
        echo "<td>" . number_format($sumStart, 2) . "</td>";
        echo "<td>" . number_format($sumEnd, 2) . "</td>";
        echo "<td class='profit'>" . number_format($profit, 2) . "</td>";
        echo "</tr>";

        // Обновляем сумму на начало следующего года
        $initialAmount = $sumEnd;
    }
    ?>
    </tbody>
</table>

</body>
</html>
