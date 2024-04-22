<?php
    function sumacyfr($a)
    {
        if($a>=10) {
            $sum = 0;
            while ($a >= 1) {
                $sum += $a % 10;
                $a /= 10;
            }
            return $sum;
        }
        else
            return $a;
    }

    echo sumacyfr(2137);
    echo "\n";
    echo sumacyfr(10);
?>