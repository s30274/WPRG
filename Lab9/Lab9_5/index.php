<?php

if (!$fd = fopen('./ip.txt', 'r')) {
    echo "Nie można otworzyć pliku ip.txt";
} else {
    $special = false;
    $current = $_SERVER['REMOTE_ADDR'];
    while (!feof($fd)) {
        $str = fgets($fd);
        if($current==$str){
            $special = true;
        }
    }
    fclose($fd);
}

if($special){
    header("Location: ./special.php");
    exit;
}
else{
    header("Location: ./normal.php");
    exit;
}
