<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2</title>
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
$znaki = '\/:*?"<>|+-';

$count=0;
for($i=0; $i<strlen($input); $i++){
    if(strpos($znaki, $input[$i]) !== false){
        $j=$i-1;
        $input=str_replace($input[$i], '', $input, $j);
        $i--;
    }
}
echo $input;
?>