<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td {
        background-color: lightgray;
        padding: 10px;
        border-style: solid;
        border-color: gray;
    }
</style>
    <body>
        <table>
            <?php
                $i = 1;
                while ($i <= 5) {
                    echo "<td>";
                    echo "To jest wiersz numer $i";
                    echo "</td>";
                    $i++;    
                }
            ?>
        </table>
    </body>
</html>