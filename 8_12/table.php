<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    table {
        border-collapse: collapse;
        border: 1px solid black;
        font-family: Verdana;
        font-size: large;
        margin-left: 5px;
        margin-right: 5px;
    }

    td{
        border: 1px dotted black;
        background-color: beige;
        padding: 5px;
        text-align: center;
    }

</style>
</head>
<body>
    <table>
        <tbody>
            <?php


                

                for ($up = 1; $up <= 10; $up++) {
                    echo "<tr>";
                    echo $up;
                    echo "</tr>";
                }
                for ($row = 1; $row <= 10; $row++) {
                    echo "<tr>";


                    for ($col=1; $col <= 10; $col++) {
                        if ($col == 1) {
                            echo "<th>";
                            echo $row;
                            echo "</th>";
                        }

                        $i = $col * $row; 
                        echo "<td>";

                        echo $i;
                        echo "</td>";
                    }
                                    
    
                    echo "</tr>";
                }
            
            ?>
        </tbody>
    </table>
    
</body>
</html>