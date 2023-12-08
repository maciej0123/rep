<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <?php
                # 1
                echo "<p>";
                echo "<q>";
                $zmienna = 'Niech będzie, co będzie: czas wszystko równo w swym unosi pędzie.';
                echo $zmienna;
                echo "</q>";
                echo "</p>";

                #2
                $znaki = str_split($zmienna);
                $ile = count($znaki);
                echo $ile;
            ?>

</body>
</html>