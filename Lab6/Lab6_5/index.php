<?php
function pangram($input) {
    $input = strtolower(str_replace(' ', '', $input));

    for ($i = 97; $i <= 122; $i++) {
        $char = chr($i);
        if (strpos($input, $char) === false) {
            return false;
        }
    }
    return true;
}

if(pangram("The quick brown fox jumps over the lazy dog."))
    echo "true";
else
    echo "false";

echo "\n";

if(pangram("kajak"))
    echo "true";
else
    echo "false";
?>