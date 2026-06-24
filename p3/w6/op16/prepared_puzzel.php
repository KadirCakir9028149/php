<?php
// 1) Maak connectie met PDO (gebruik je eigen db.php of zet het hier neer)
require_once('../dbcon.php');

// 2) Testdata (doe alsof dit uit een formulier komt)
$titel = "Test item";
$omschrijving = "Dit is een test.";

// 3) Prepared statement (vul de placeholders aan)
$sql = "INSERT INTO items (titel, omschrijving) VALUES (:titel, :omschrijving)";
$stmt = $pdo->prepare($sql);

// 4) Uitvoeren met execute (kies 1 manier)
// Manier A: execute met array
$stmt->execute([
    ":titel" => $titel,
    ":omschrijving" => $omschrijving
]);

