<?php

$pdo = new PDO("mysql:host=localhost;dbname=testdb", "root", "");


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titel = $_POST["titel"];

    $stmt = $pdo->prepare("INSERT INTO posts (titel) VALUES (?)");
    $stmt->execute([$titel]);

    echo "Opgeslagen!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Refresh Test</title>
</head>
<body>

<form method="POST">
    <input type="text" name="titel" placeholder="Titel">
    <button type="submit">Opslaan</button>
</form>

</body>
</html>