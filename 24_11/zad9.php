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
        padding: 20px;
    }

    table {
        border-collapse: collapse;
    }

</style>
<body>
    <table>
            <?php
                $data = date("t");
                echo $data;

                for ($i=1; $i<=$data; $i++) {
                    if ($i % 7 == 0) {
                        echo "<tr>";
                        echo "</tr>";
                    } else {
                        echo "<td>";
                        echo "$i";
                        echo "</td>"; 
                    }
    
                }
            ?>
    </table>
</body>
</html>