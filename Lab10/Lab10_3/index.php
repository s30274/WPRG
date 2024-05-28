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
    <title>Login</title>
    <style>
        span {color: #cc0000}
    </style>
</head>

<body>
<form method="post">
    <input type="text" name="email" placeholder="e-mail"><br>
    <input type="password" name="password" placeholder="password">
    <input type="submit" name="login" class="login" value="Login"><br>
</form>

<?php
$correm="test@gmail.com";
$corrpass="1234";
$email=$_POST['email'];
$password=$_POST['password'];

if(!empty($email)){
    $emaillow=strtolower($email);
    if($emaillow==$correm){
        if($password==$corrpass){
            session_start();

            $_SESSION["loggedin"] = true;
            $_SESSION["email"] = $emaillow;

            header('Location:loggedin.php');
        }
        else{
            echo "<span>Nieprawidłowe hasło</span><br>";
        }
    }
    else{
        echo "<span>Nieprawidłowy adres e-mail</span><br>";
    }
}

?>

</body>
</html>