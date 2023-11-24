<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td {
        background-color: greenyellow;
        border-style: solid;
        border-color: lawngreen;
        padding: 10px;
    }

    table {
        border-collapse: collapse;
    }
    
</style>
<body>
    <table>
        <?php
            $i=1;
            do {
                echo "<td>";
                echo "To jest kolumna numer $i";
                echo "</td>";
                $i++;
            } while ($i<=5)
        ?>
    </table>
</body>
</html>