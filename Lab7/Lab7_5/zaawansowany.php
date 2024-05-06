<?php
$liczba = $_POST['liczba'];
$znak = $_POST["funkcja"];
switch($znak)
{
    case "cos":
        echo "Wynik: " . cos($liczba);
        break;
    case "sin":
        echo "Wynik: " . sin($liczba);
        break;
    case "tg":
        echo "Wynik: " . tan($liczba);
        break;
    case "bintodec":
        echo "Wynik: " . bindec($liczba);
        break;
    case "dectobin":
        echo "Wynik: " . decbin($liczba);
        break;
    case "dectohex":
        echo "Wynik: " . dechex($liczba);
        break;
    case "hextodec":
        echo "Wynik: " . hexdec($liczba);
        break;
}
?>