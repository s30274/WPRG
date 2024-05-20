<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1</title>
</head>
<body>
<div class="container">
    <form method="get">
        <input type="date" id="input" name="input">
        <button type="submit" id="wykonaj" value="wykonaj">Wykonaj</button>
    </form>
</div>
</body>
</html>

<?php
setlocale(LC_ALL,'pl_PL.UTF-8');
$input = $_GET['input'];
$date = strtotime($input);
$now = getdate();
$diff = $now["year"]-date('Y', $date);
$day = date('d', $date);
$month = date('m', $date);
$year = strval((int)($now["year"])+1);

if((date('m', $date))==($now["mon"])){
    if(date('d', $date)>$now["mday"]){
        $diff--;
        $year = strval((int)($year)-1);
    }
}
else if(date('m', $date)>$now["mon"]){
    $diff--;
    $year = strval((int)($year)-1);
}



$plusdate =  strtotime($day."-".$month."-".$year);
$days = round(($plusdate - $now[0])/(3600*24));  //3600 to ilość sekund w godzinie, 24 to ilość godzin ile ma doba (zamiana sekund na dni)


if(!is_null($input)){
    echo date('l', $date) . "<br>";
    echo $diff . "<br>";
    echo $days . "<br>";
}
?>