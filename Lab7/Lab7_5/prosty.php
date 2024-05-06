<?php
$pierwsza = $_POST['pierwsza'] + 0;
$druga = $_POST['druga'] + 0;
$znak = $_POST["znak"];
switch($znak)
{
    case "dodawanie":
        echo "Wynik: " . $pierwsza + $druga;
        break;
    case "odejmowanie":
        echo "Wynik: " . $pierwsza - $druga;
        break;
    case "mnozenie":
        echo "Wynik: " . $pierwsza * $druga;
        break;
    case "dzielenie":
        if($druga!=0) {
            echo "Wynik: " . $pierwsza / $druga;
        }
        else
            echo "Nie dziel przez zero";
        break;
}
?>