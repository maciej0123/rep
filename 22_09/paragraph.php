<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style> 
body{   color: red; }
p{      color: #336ee1; }
.php{   color: green;
        text-decoration: overline underline; }
</style>
<body>

    <h3 color> 
        <?php $a = 97;
        echo $a;
        echo (' jest liczbą pierwszą')
        ?> 
    </h3>

    <p> 
        <?php $b = 3.14; 
        echo ('Liczba Pi zaokrąglona do dwówch miejsc po przecinku: ');
        echo $b;
        ?>
    </p>

    <div class='php'>
        <?php $c = 'PHP';
        echo $c;
        echo (' to język skryptowy wykonywany po stronie serwera') 
        ?>
    </div>


    <br><br>
    <?php
        $poczatek = 'Ala ma';
        $liczba = 123;
        $koniec = ' koty';
        $br = "<br>";

        echo '$poczatek $liczba $koniec'; echo $br;
        echo "$poczatek $liczba $koniec"; echo $br;
    ?>


</body>
</html>