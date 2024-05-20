<?php

if(!$fd = fopen("./otwarcia.txt", 'r')){
    $file = fopen("./otwarcia.txt", 'w');
    fwrite($file, "1");
    fclose($file);
}
else{
    while(!feof($fd)){
        $str = fgets($fd);
        $str =  strval((int)($str)+1);
    }
    fclose($fd);
    $file = fopen("./otwarcia.txt", 'w');
    fwrite($file, $str);
    fclose($file);
}
