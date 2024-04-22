<?php
function pomnozMacierze($macierz1, $macierz2) {
    $wynik = array();

    // Sprawdzenie czy liczba kolumn pierwszej macierzy równa się liczbie wierszy drugiej macierzy
    $liczbaWierszy1 = count($macierz1);
    $liczbaKolumn1 = count($macierz1[0]);
    $liczbaWierszy2 = count($macierz2);
    $liczbaKolumn2 = count($macierz2[0]);

    if ($liczbaKolumn1 != $liczbaWierszy2) {
        return "Nie można pomnożyć macierzy - niezgodne wymiary.";
    }

    for ($i = 0; $i < $liczbaWierszy1; $i++) {
        for ($j = 0; $j < $liczbaKolumn2; $j++) {
            $wynik[$i][$j] = 0;
        }
    }


    for ($i = 0; $i < $liczbaWierszy1; $i++) {
        for ($j = 0; $j < $liczbaKolumn2; $j++) {
            for ($k = 0; $k < $liczbaKolumn1; $k++) {
                $wynik[$i][$j] += $macierz1[$i][$k] * $macierz2[$k][$j];
            }
        }
    }

    return $wynik;
}


$macierz1 = array(
    array(1, 2),
    array(3, 4),
);

$macierz2 = array(
    array(5, 6),
    array(7, 8),
);

$wynik = pomnozMacierze($macierz1, $macierz2);


echo "Macierz wynikowa:<br>";
foreach ($wynik as $wiersz) {
    echo implode(" ", $wiersz) . "<br>";
}
//    function wyswietl($m)
//    {
//        for($i = 0; $i < count($m); $i++){
//            for($j = 0; $j < count($m); $j++){
//                echo $m[$i][$j];
//            }
//            echo "\n";
//        }
//    }

    $m1[2][3]=array(
        array(1, 2, 3),
        array(4, 5, 6)
    );

//    wyswietl($m1);
    $m2[3][2]=2;
    mnozenie($m1, $m2);
?>
