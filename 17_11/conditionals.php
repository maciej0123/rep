<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h2{
        text-align: center;
        color: darkorchid;
    }

    h4{
        text-align: center;
        color: black;

    }
</style>
<body>
    <?php 
        $losowa = rand(1,30); 
    ?>
    <h2>
        <?php
            echo $losowa;
        ?>
    </h2>

    <h4>
        <?php
            
            if ($losowa >= 20){
                echo "<font color='magenta'>" . 'Wylosowana liczba jest większa lub równa 20.' . '</font>';
            }

            else if ($losowa % 2 == 0){
                echo 'Liczba ' . $losowa . ' jest liczbą parzystą';
            }

            else if ($losowa <= 10) {
                echo "<font color='deeppink'>" . 'Liczba należy do pierwszej dziesiątki' . '</font>';
            }

            else if ($losowa <= 20) {
                echo "<font color='deeppink'>" . 'Liczba należy do drugiej dziesiątki' . '</font>';
            }

            else if ($losowa <= 30) {
                echo "<font color='deeppink'>" . 'Liczba należy do trzeciej dziesiątki' . '</font>';
            }
        
        ?>
    </h4>
</body>
</html>