<!DOCTYPE html>
<html>
<head>
<title>GET Test</title>
</head>
<body>

<h2>GET formulier</h2>

<form method="GET" action="">
<label for="titel">Titel:</label>
<input id="titel" name="titel" type="text">
<button type="submit">Verstuur</button>
</form>

<h3>Resultaat:</h3>

<?php

$titel = $_GET['titel'] ?? '';

print_r($_GET);

echo "<p>Titel: " . $titel . "</p>";
?>

</body>
</html>