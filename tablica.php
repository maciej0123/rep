<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            background-color: aliceblue;
            border-color: dodgerblue;
            padding: 10px;
            text-align: center;
        }

    </style>
</head>
<body>
    <?php
        # Zad. 1
        $owoce = array_fill(8, 5, 'mango');
        print_r($owoce);

        echo "<br>"; echo "<br>";
        echo "<br>"; echo "<br>";

        # Zad. 2
        $parzyste = array(range(0, 12, 2));
        print_r($parzyste);
        echo "<br>"; echo "<br>";

        $dziesiatki = array(range(-10, 100, 10));
        print_r($dziesiatki);
        echo "<br>"; echo "<br>";

        $polowki = array(range(-5.5, 5.5, 0.5));
        print_r($polowki);
        echo "<br>"; echo "<br>";

        $litery_od_em = array(range('m', 'u', 1));
        print_r($litery_od_em);
        echo "<br>"; echo "<br>";

        $litery_wstecz = array(range('X', 'E', 1));
        print_r($litery_wstecz);
        echo "<br>"; echo "<br>";
        echo "<br>"; echo "<br>";

        # Zad. 3
        $zad_3 = array('Tworzenie ', 'stron ', 'aplikacji ', 'internetowych');
        list($n1, $n2, $n3, $n4) = $zad_3;
        print_r($n1 . $n2 . 'i ' . $n3 . $n4);

        /*
        $count = count($zad_3);
        for($n = 0; $n < $count; $n++) {
            if ($n == 2) {
                print($zad_3[$n] . " i ");
            } else {
                print_r($zad_3[$n] . " ") . "<br>";
            }
        } 
        */

        echo "<br>"; echo "<br>";
        echo "<br>"; echo "<br>";

        # Zad. 4
        $zad_4 = range(1, 10);
        shuffle($zad_4);

        echo "<table border>";
            echo "<tr>";
                foreach ($zad_4 as $z) {
                        echo "<td> $z </td>";
                }
            echo "</tr>";
        echo "</table>";
        echo "<br>"; echo "<br>";
        echo "<br>"; echo "<br>";

        # Zad. 5
        $numbers = array(rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99));
        rsort($numbers);

        foreach($numbers as $n) {
            echo "$n ";
        }
        echo "<br>"; echo "<br>";
        echo "<br>"; echo "<br>";

        # Zad. 6
        $zad_6 = array(
            'Skazani na Shawshank' => 'dramat',
            'Nietykalni' => 'biograficzny',
            'Władca Pierścieni: Powrót króla' => 'fantasy',
            'Pulp Fiction' => 'gangsterski',
            'Siedem' => 'kryminał',
            'Podziemny krąg' => 'thriller',
            'Django' => 'western',
            'Król Lew' => 'animacja',
            'Avengers: Wojna bez granic' => 'akcja',
            'Dobry, zły i brzydki' => 'western'
        );

        # Posortuj tablicę rosnąco według wartości
        echo "<table border>";

        asort($zad_6);
        foreach($zad_6 as $z => $w) {
            echo "</tr>";
                echo "$z ";
            echo "</tr>";

        }

        /*
        print_r($zad_6);
        echo "<br>";

        # Posortuj tablicę rosnąco według kluczy
        ksort($zad_6);
        print_r($zad_6);
        echo "<br>";

        # Posortuj tablicę malejąco według wartości
        arsort($zad_6);
        print_r($zad_6);
        echo "<br>";

        # Posortuj tablicę malejąco według kluczy
        krsort($zad_6);
        print_r($zad_6);
        echo "<br>";
        */

    ?>
</body>
</html>