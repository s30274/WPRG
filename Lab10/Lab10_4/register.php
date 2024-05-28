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
    <title>Register</title>
    <style>
        span {color: #cc0000}
    </style>
</head>

<body>
<form method="post">
    <input type="text" name="email" placeholder="e-mail"><br>
    <input type="password" name="password" placeholder="password">
    <input type="submit" name="register" class="register" value="Register"><br>
</form>

<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email)) {
        if (checkEmail($email)) {
            if (checkPassword($password)) {
                $emaillow=strtolower($email);
                $pass="\n".$emaillow.";".$password;
                $fd = fopen('./logins.txt', 'a');
                fwrite($fd, $pass);
                fclose($fd);
            }
        }
        header('Location:registered.php');
    }
    function checkPassword($password) {
        $good=true;
        $upperCase = preg_match('/[A-Z]/', $password);
        $numericVal = preg_match('/[0-9]/', $password);
        $specialChar = preg_match('/[^A-Za-z0-9]/', $password);
        if(strlen($password)<6){
            echo "<span class='err'>Hasło musi mieć więcej niż 6 znaków</span><br>";
            $good=false;
        }
        if(!$upperCase){
            echo "<span class='err'>Hasło musi zawierać conajmniej 1 wielką literę</span><br>";
            $good=false;
        }
        if(!$numericVal){
            echo "<span class='err'>Hasło musi zawierać conajmniej 1 cyfrę</span><br>";
            $good=false;
        }
        if(!$specialChar){
            echo "<span class='err'>Hasło musi zawierać conajmniej 1 znak specjalny</span><br>";
            $good=false;
        }
        if($good){
            return true;
        }
        else{
            return false;
        }
    }
    function checkEmail($email){
        $emaillow=strtolower($email);
        if(!$fd = fopen('./logins.txt', 'r')){
            $fc = fopen('./logins.txt', 'w');
            fclose($fc);
        }
        else{
            while (!feof($fd)) {
                $str = fgets($fd);
                $str_arr = explode(";", $str);
                if ($emaillow == $str_arr[0]) {
                    echo "<span>Podany adres e-mail jest już zajęty</span><br>";
                    fclose($fd);
                    return false;
                }
            }
            fclose($fd);
        }
        return true;
    }
?>

<br>Masz już konto? <a href="login.php">Zaloguj się</a>

</body>
</html>