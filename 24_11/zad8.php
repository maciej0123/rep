<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <blockquote>
        <?php
            $plusy = rand(0, 10);
            echo "Numer wylosowany: $plusy <br>";
            if ($plusy == 0 || $plusy == 10) {
                echo 'Wartośc poza zakresem <0, 10>';
            } else {
                echo str_repeat("+", $plusy);
            }
        ?>
    </blockquote>
</body>
</html>