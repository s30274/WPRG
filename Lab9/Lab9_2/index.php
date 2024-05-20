<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2</title>
</head>
<body>
<div class="container">
    <form method="post">
        <input type="text" id="path" name="path">
        <input type="text" id="dirname" name="dirname">
        <select id="operacja" name="operacja">
            <option value="read">read</option>
            <option value="delete">delete</option>
            <option value="create">create</option>
        </select>
        <button type="submit" id="wykonaj" value="wykonaj" class="wykonaj">Wykonaj</button>
    </form>
</div>
</body>
</html>

<?php
$path = $_POST['path'];
$dir = $_POST['dirname'];
$operacja = $_POST['operacja'];
function dirmanager($path, $dirname, $operation = "read")
{
    $path = rtrim($path, "/");

    opendir($path);
    if (!($fd = opendir($path))){
        exit("Nie mogę otworzyć ścieżki $path");
    }
    $dirpath = $path . "/" . $dirname;

    switch ($operation){
        case "read":
            while (($file = readdir($fd)) !== false)
                echo "$file<br/>";
            closedir($fd);
            break;
        case "delete":
            if (!file_exists($dirpath)){
                echo "Katalog " . $dirname . " nie istnieje" . "<br>";
            }
            else{
                if(count(scandir($dirpath)) > 2){
                    echo "Katalog " . $dirname . "nie jest pusty" . "<br>";
                }
                else{
                    rmdir($dirpath);
                }
            }
            break;
        case "create":
            mkdir($dirpath);
            break;
    }
    closedir($path);
}

if(is_null($path)){
    $path = "./";
}
if(is_null($operacja)){
    $operacja = "read";
}


dirmanager($path, $dir, $operacja);

?>