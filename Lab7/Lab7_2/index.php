<?php

function zad2($arr, $n){
    if($n<0){
        print("\nBŁĄD\n");
    }
    else{
        array_splice($arr, $n, 0, '$');
        return $arr;
    }
}
$array=array(0, 1, 2, 3, 4, 'f', 'g', 'h', 'i', 'j');
print_r($array);
$narray=zad2($array, 5);
print_r($narray);
$narray=zad2($array, -5);