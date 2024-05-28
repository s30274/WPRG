<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location:loggedin.php");
    exit;
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registered</title>
</head>

<body>
<p>Zarejestrowano pomyślnie.</p><br>
<p>Przejdź do strony logowania</p>
<form method="post">
    <input type="submit" name="login" class="login" value="Login"><br>
</form>

<?php
    if(array_key_exists('login', $_POST)){
        header('Location:login.php');
    }
?>

</body>
</html>