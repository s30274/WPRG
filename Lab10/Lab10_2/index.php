<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2</title>
</head>
<body>

<?php

if(array_key_exists('vote', $_POST)) {
    setcookie('votes', "voted");
}

if(!isset($_COOKIE['votes'])) { ?>
    <form method="post">
        <input type="radio" id="option1" name="glos" value="opcja1">
        <label for="opcja1">Opcja 1</label><br>
        <input type="radio" id="option2" name="glos" value="opcja2">
        <label for="opcja2">Opcja 2</label><br>
        <input type="radio" id="option3" name="glos" value="opcja3">
        <label for="opcja3">Opcja 3</label><br>
    <input type="submit" name="vote" class="vote" value="vote">
</form>
<?php }
else{
    echo "Głos został już oddany";
}
?>

</body>
</html>