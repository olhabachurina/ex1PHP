<?php
// Папка, где находятся изображения
$dir = __DIR__;

// Получаем все файлы из папки
$files = scandir($dir);

// Массив разрешенных расширений файлов изображений
$imageExtensions = ['jpg', 'jpeg', 'png', 'gif'];

// Массив для хранения найденных изображений
$images = [];

// Фильтруем файлы, оставляя только изображения
foreach ($files as $file) {
    $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
    if (in_array(strtolower($fileExtension), $imageExtensions)) {
        $images[] = $file;
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            margin-bottom: 40px;
            font-size: 36px;
            text-transform: uppercase;
            letter-spacing: 2px;
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

        .gallery-container {
            padding: 20px;
            border: 5px solid #ddd;
            border-radius: 20px;
            max-width: 800px; /* Reduced the max-width */
            margin: 0 auto; /* Center the container */
            background: linear-gradient(135deg, red, black); /* Gradient from red to black */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
        }

        .gallery-container:hover {
            box-shadow: 0 10px 40px rgba(255, 0, 0, 0.6); /* Glowing red effect on hover */
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            grid-gap: 20px;
            justify-content: center;
        }

        .gallery img {
            width: 100%;
            max-width: 150px;
            height: 150px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeInImage 1s ease-in-out;
            object-fit: cover;
        }

        @keyframes fadeInImage {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .gallery img:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .gallery img:active {
            transform: scale(0.95);
        }

        @media (max-width: 1000px) {
            .gallery {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .gallery {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>



<div class="gallery-container">
    <div class="gallery">
        <?php
        // Assuming there are exactly 10 images
        foreach ($images as $image) {
            echo "<img src='$image' alt='Изображение'>";
        }
        ?>
    </div>
</div>

</body>
</html>