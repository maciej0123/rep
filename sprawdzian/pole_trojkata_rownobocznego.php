<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        # (a^2 * a sqrt(3)) / 4

        $a = pow(6, 2);
        $h = sqrt(3);
        $pole = round(($a*$h)/4, 3);
        echo "Pole trójkąta równobcznego o boku długości 6 jest równe $pole" . "j^2";


    ?>
</body>
</html>