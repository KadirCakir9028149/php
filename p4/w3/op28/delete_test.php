<?php
require 'includes/db.php';

$id = 1;

$sql = "DELETE FROM mijn_tabel WHERE id = ?";

$stmt = $pdo->prepare($sql);

$stmt->execute([$id]);

echo "Item succesvol verwijderd!";
?>