<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
        <?php
            $g = date('h', time());
            $min = date('m', time());
            $s = date('s', time());

            $d = date('d', time());
            $m = date('m', time());
            $y = date('yy', time());

            $x = date(time());

            echo "Jest godzina $g:m:$s $d:$m:$y, jest to dzień $x tego roku"; 
        ?>
    </h3>
</body>
</html>