<?php
    session_start();


    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location:loggedin.php");
        exit;
    }

    if(array_key_exists('register', $_POST)){
        header('Location:register.php');
    }
    if(array_key_exists('login', $_POST)){
        header('Location:login.php');
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4</title>
</head>
<body>

<form method="post">
    <input type="submit" name="register" class="register" value="register">
    <input type="submit" name="login" class="login" value="login">
</form>

</body>
</html>
