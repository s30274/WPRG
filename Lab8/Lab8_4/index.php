<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4</title>
</head>
<body>
<div class="container">
    <form method="post">
        <input type="text" id="input" name="input">
        <button type="submit" id="wykonaj" value="wykonaj" class="wykonaj">Wykonaj</button>
    </form>
</div>
</body>
</html>

<?php
$input = $_POST['input'];
$input = strtolower($input);
$samo = "aeiou";

foreach (count_chars($input, 1) as $i => $val) {
    if(strpos($samo, chr($i)) !== false){
        echo "Litera ".chr($i)." występuje ".$val;
        if($val==1)
            echo " raz."."<br>";
        else
            echo " razy."."<br>";
    }
}