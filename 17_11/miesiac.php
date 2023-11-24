<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        text-align: center;
        padding-top: 2px;
        padding-bottom: 2px;
        border-style: dotted;
        color: pink;
    }
    h3{
        text-align: center;
        font-style: italic;
        padding-top: 2px;
        padding-bottom: 2px;
        border-style: dotted;
        color: pink;
    }
</style>
<body>
    <h1>
        <?php 
            $miesiac = rand(1, 15);
            echo $miesiac;
        ?>    

        <h3>
            <?php
                # 1-3   I
                # 4-6   II
                # 7-9   III
                # 10-12 IV
                switch ($miesiac) {
                    case 0:
                    case 1:
                    case 2:
                        echo ' I kwartał';
                        break;
                    case 3:
                    case 4:
                    case 5:
                        echo ' II kwartał';
                        break;
                    case 6:
                    case 7:
                    case 8:
                        echo ' III kwartał';
                        break;
                    case 9:
                    case 10:
                    case 11:
                        echo ' IV kwartał';
                        break;
                    default:
                        echo ' Błędny numer miesiąca';
                        break; 
                }
            ?>
        </h3>
    </h1>
</body>
</html>