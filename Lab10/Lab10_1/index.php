<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1</title>
</head>
<body>

<?php
    if(!isset($_COOKIE['accesses'])){
        setcookie('accesses', 1);
        $pageAccesses=1;
    }
    else {
        $pageAccesses = $_COOKIE['accesses'];
        setcookie('accesses', ++$pageAccesses);
    }

    echo "Liczba odwiedzin: ".$pageAccesses."<br>";
    if($_COOKIE['accesses']>5){
        echo "Ponad 5!";
    }
?>

<form method="post">
    <input type="submit" name="reset" class="reset" value="reset">
</form>

<?php
    if(isset($_POST['reset'])) {
        setcookie('accesses', 1);
    }
?>

</body>
</html>