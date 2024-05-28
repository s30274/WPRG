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
$email=$_POST['email'];
$password=$_POST['password'];

if(!empty($email)){
    if(checkLogin($email, $password)){
        $emaillow=strtolower($email);
        session_start();

        $_SESSION["loggedin"] = true;
        $_SESSION["email"] = $emaillow;

        header('Location:loggedin.php');
    }
}
function checkLogin($email, $password){
    $emaillow=strtolower($email);
    if(!$fd = fopen('./logins.txt', 'r')){
        echo "problem"."<br>";
        $fc = fopen('./logins.txt', 'w');
        fclose($fc);
    }
    else{
        while (!feof($fd)) {
            $str = fgets($fd);
            $str_arr = explode(";", $str);
            if ($emaillow == $str_arr[0]) {
                fclose($fd);
                $pass=rtrim($str_arr[1]);
                if($password == $pass){
                    return true;
                }
                else{
                    echo "<span>Podane hasło jest nieprawidłowe</span><br>";
                    return false;
                }
            }
        }
        fclose($fd);
    }
    echo "<span>Podane konto nie istnieje</span><br>";
    return false;
}
?>

<br>Nie masz konta? <a href="register.php">Zarejestruj się</a>

</body>
</html>