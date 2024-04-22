<?php
    function pierwsza($a, $b)
    {
        while($a<$b){
            $czypierwsza=true;
            for($i=2; $i<$a; $i++){
                if($a%$i==0){
                    $czypierwsza=false;
                }
            }
            if($czypierwsza==true){
                echo $a . ' ';
            }
            $a++;
        }
    }

    $c = 1;
    $d = 20;
    pierwsza($c, $d);
?>