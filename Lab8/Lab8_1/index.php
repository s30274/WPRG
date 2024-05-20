<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1</title>
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
echo strtolower($input)."<br>";
echo strtoupper($input)."<br>";
echo ucfirst($input)."<br>";
echo ucwords($input)."<br>";
?>