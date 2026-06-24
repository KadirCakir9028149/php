<?php
require 'includes/db.php';

$id = $_GET['id'];

$sql = "DELETE FROM mijn_tabel WHERE id = ?";

$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

header("Location: index.php");
exit;
?>