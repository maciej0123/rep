<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        border-style: solid;
        padding: 2px;
        color: black;
    }
</style>
    <body>
        <h1>
            <?php
                $wiek = rand(0, 100);
                echo 'Mam ' . $wiek . ' lat';

                switch ($wiek) {
                    case 18:
                        echo ' Jeszcze nie możesz głosować';
                        break;
                    case 30:
                        echo '';
                }
            ?>
        </h1>
    </body>
</html>