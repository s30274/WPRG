<?php
$samo = "aeiou";
$input = "aeioummmiiiimuafs";
$input = strtolower($input);

foreach (count_chars($input, 1) as $i => $val) {
    if(strpos($samo, chr($i)) !== false){
        echo "Litera ".chr($i)." występuje ".$val;
        if($val==1)
            echo " raz.\n";
        else
            echo " razy.\n";
    }
}