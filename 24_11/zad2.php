<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td {
        border: 1px dotted black;
        padding: 15px;
    }
</style>
<body>
    <table>
        <tr>
            <?php
                $text = "Kon'nichiwa sekai";
                $str = str_split($text);

                foreach ($str as &$string) {
                    echo "<td>";
                    echo $string;
                    echo "</td>";
                }
            ?>
        </tr>
    </table>
</body>
</html>