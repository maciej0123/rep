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
        $x=0;
        for ($n=0; $n<=99; $n++) {
            if ($n >= 10){
                if ($n % 2 == 0){
                    $x+=$n;
                    if ($n == 98){
                        echo $n;
                    } else {
                        echo "$n | ";
                    }
                }   
            }
        }
        echo "</p>";

        # 2
        echo "<p>";
        echo "Suma powższych liczb jest równa " . $x;
        echo "</p>";
    ?>
</body>
</html>