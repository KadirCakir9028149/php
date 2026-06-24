<?php

$wachtwoord = "geheim123";

$hash = password_hash($wachtwoord, PASSWORD_DEFAULT);

echo "<h1>Password Hash Test</h1>";

echo "Wachtwoord: " . $wachtwoord . "<br><br>";

echo "Hash:<br>";
echo $hash;

?>