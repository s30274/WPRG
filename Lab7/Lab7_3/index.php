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

<html>
<body>

<form action="welcome.php" method="POST">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

</body>
</html>

