<?php

$pdo = new PDO("mysql:host=localhost;dbname=jouw_database", "root", "");

if (isset($_GET['id'])) {

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM items WHERE id = ?");
$stmt->execute([$id]);

$item = $stmt->fetch();

if ($item) {
?>
<h1><?= $item['titel'] ?></h1>
<p><?= $item['beschrijving'] ?></p>
<?php
} else {
echo "Item niet gevonden.";
}

} else {
    echo "Geen ID gekozen.";
}
?>