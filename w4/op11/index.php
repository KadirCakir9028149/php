<!DOCTYPE html>
<html>
<head>
<title>Formulier verwerken</title>
</head>
<body>

<h2>Formulier</h2>

<form method="POST" action="">
<label for="naam">Naam:</label>
<input id="naam" name="naam" type="text" required><br><br>

<label for="aantal">Aantal:</label>
<input id="aantal" name="aantal" type="number"><br><br>

<button type="submit">Verstuur</button>
</form>

<h3>Resultaat:</h3>

<?php
$naam = $_POST['naam'] ?? '';
$aantal = $_POST['aantal'] ?? '';

if ($naam !== '' || $aantal !== '') {
$naam = htmlspecialchars($naam);
$aantal = htmlspecialchars($aantal);

echo "<p>Naam: " . $naam . "</p>";
echo "<p>Aantal: " . $aantal . "</p>";
}
?>

</body>
</html>