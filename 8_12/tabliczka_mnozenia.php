<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        text-align: center;
    }
    td {
        border-style: solid;
        border-color: black;
        padding: 10px;
        font-size: 20px;
    }

    th {
        border-style: solid;
        border-color: blue;
        padding: 20px;
        padding-left: 25px;
        padding-right: 25px;
        font-size: 20px;
    }

    table {
        border-collapse: collapse;
        background-color: beige;
        display: flex;
    }

</style>
<body>
    <table>
            <?php

                for ($i=0; $i<=100; $i++) {
                    if ($i == 0) {
                        echo "<th>";
                        echo 'x';
                        echo "</th>";
                    } 
                    
                    if ($i <= 10 && $i >= 1) {
                        echo "<th>";
                        echo $i;
                        echo "</th>";
                    }
                }

                for ($i=1; $i<=10; $i++) {
                    echo "<tr>";
                    echo "<th>";
                    echo $i;
                    echo "</th>";
                    echo "</tr>";
                }
            ?>
    </table>
</body>
</html>