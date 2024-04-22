<?php
    function ciag($a1, $q, $n)
    {
        echo "Ciąg arytmetyczny: " . ((2*$a1)+(($n-1)*$q))/2;
        echo "\nCiąg geometryczny: " . $a1*((1-pow($q, $n))/(1-$q));
    }

    ciag(2, 2, 9);
?>