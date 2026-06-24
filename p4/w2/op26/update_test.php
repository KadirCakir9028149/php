<?php
require 'includes/db.php';

$titel = "Nieuwe titel";
$id = 1;


$sql = "UPDATE mijn_tabel
 SET titel = ?
WHERE id = ?";

$stmt = $conn->prepare($sql);


$stmt->execute([$titel, $id]);

echo "Record succesvol bijgewerkt!";
?>