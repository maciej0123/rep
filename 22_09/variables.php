<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $br = "<br>";
        $int = 5985;
        $float = 10.365;
        $boolean = true;

        define("STALA_1", 1200);
        define('STALA_2', "tekst");

        echo $int; echo $br; 
        echo $float; echo $br;
        echo $boolean; echo $br;

        echo $br;

        var_dump($int); echo $br;
        var_dump($float); echo $br;
        var_dump($boolean); echo $br;

        echo $br;

        print(STALA_1); echo $br;
        print(STALA_2); echo $br; echo $br;

        
        var_export(STALA_1); echo $br;
        var_export(STALA_2); echo $br;

    ?>

    

</body>
</html>