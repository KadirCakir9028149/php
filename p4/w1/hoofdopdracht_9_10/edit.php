<?php
require 'database.php';

$id = $_GET['id'];


$sql = "SELECT * FROM mijn_tabel WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);

$item = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<title>Item bewerken</title>
</head>
<body>

<h1>Item bewerken</h1>

<form>
<label>Titel:</label><br>
<input type="text" name="titel" value="<?= $item['titel'] ?>"><br><br>

<label>Beschrijving:</label><br>
<textarea name="beschrijving"><?= $item['beschrijving'] ?></textarea><br><br>

<button type="submit">Opslaan</button>
</form>

<footer>
© <?= date("Y") ?>
</footer>

</body>
</html>
<?php
require 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$id = $_POST['id'];
$titel = $_POST['titel'];
$omschrijving = $_POST['omschrijving'];

$sql = "UPDATE mijn_tabel
SET titel = ?, omschrijving = ?
WHERE id = ?";

$stmt = $pdo->prepare($sql);
$stmt->execute([$titel, $omschrijving, $id]);


header("Location: index.php");
exit;
}

$id = $_GET['id'];

$sql = "SELECT * FROM mijn_tabel WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

$item = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<title>Item bewerken</title>
</head>
<body>

<h1>Item bewerken</h1>

<form method="POST">

<input type="hidden" name="id" value="<?= $item['id'] ?>">

<label>Titel:</label><br>
<input type="text" name="titel" value="<?= $item['titel'] ?>"><br><br>

<label>Omschrijving:</label><br>
<textarea name="omschrijving"><?= $item['omschrijving'] ?></textarea><br><br>

<button type="submit">Opslaan</button>

</form>

</body>
</html>