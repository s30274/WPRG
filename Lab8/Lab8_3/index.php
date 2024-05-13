<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h3>Prosty</h3>
    <form method="post">
        <input type="text" id="ciag" name="ciag" class="pole">
        <select id="operacja" name="operacja">
            <option value="odwrocenie">Odwrócenie ciągu znaków</option>
            <option value="wielkie">Zamiana wszystkich liter na wielkie</option>
            <option value="male">Zamiana wszystkich liter na małe</option>
            <option value="ile">Liczenie liczby znaków</option>
            <option value="biale">Usuwanie białych znaków z początku i końca ciągu</option>
        </select>
        <button type="submit" id="wykonaj" value="wykonaj" class="wykonaj">Wykonaj</button>
    </form>
</div>
</body>
</html>

<?php
$ciag = $_POST['ciag'];
$operacja = $_POST['operacja'];
if($ciag==='')
    echo "<span class='error'>"."Nie wprowadzono danych"."</span>";
else {
    switch ($operacja) {
        case "odwrocenie":
            echo strrev($ciag);
            break;
        case "wielkie":
            echo strtoupper($ciag);
            break;
        case "male":
            echo strtolower($ciag);
            break;
        case "ile":
            echo strlen($ciag);
            break;
        case "biale":
            echo trim($ciag);
            break;
    }
}
?>