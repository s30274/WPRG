<?php

function zad3($a, $b, $c, $d){
    $arr=array();
    for($i=$a; $i<=$b; $i++){
        $arr+=array($i=>$c);
        if($c<$d){
            $c++;
        }
    }
    print_r($arr);
}

zad3(3, 13, 21, 30);

?>