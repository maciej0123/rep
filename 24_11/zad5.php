<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($i=-15; $i<=10; $i++) {
            echo $i;
            if ($i != 10) {
                echo ", ";
            }
        }
        echo ".";
    ?>
</body>
</html>