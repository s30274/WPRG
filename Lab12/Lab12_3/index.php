<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3</title>
</head>
<body>

<?php
$db = new mysqli("localhost", "root", "", "WPRG");
$create = ("
    CREATE TABLE IF NOT EXISTS Users (
    id int PRIMARY KEY AUTO_INCREMENT,
    firstname varchar(255) NOT NULL,
    lastname varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL
    )");
try {
    $db->query($create);
}
catch (Exception $e){
    echo $e;
}

$count="SELECT COUNT(id) FROM Users";
$result=mysqli_fetch_array($db->query($count));
    echo "Liczba zarejestrowanych użytkowników: ".$result['COUNT(id)']."<br>";
?>

<form method="post">
    <input type="text" name="firstname" class="firstname" placeholder="First name">
    <input type="text" name="lastname" class="lastname" placeholder="Last name">
    <input type="text" name="email" class="email"  placeholder="E-mail">
    <input type="password" name="password" class="password" placeholder="password">
    <input type="submit" name="register" class="register" value="register">
</form>

<?php
if(isset($_POST['register'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordhash = password_hash($password, PASSWORD_DEFAULT);
    $adduser = ("
        INSERT INTO Users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$passwordhash')");
    $git=true;
    try {
        $db->query($adduser);
    }
    catch(Exception $e) {
        $git=false;
        echo $e;
    }
    if($git){
        header("location:registered.php");
    }
}
?>