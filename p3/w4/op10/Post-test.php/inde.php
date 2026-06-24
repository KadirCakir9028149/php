<!DOCTYPE html>
<html>
<head>
<title>POST Test</title>
</head>
<body>

<h2>POST formulier</h2>

<form method="POST" action="">
<label for="titel">Titel:</label>
<input id="titel" name="titel" type="text">
<button type="submit">Verstuur</button>
</form>

<h3>Resultaat:</h3>

<?php

$titel = $_POST['titel'] ?? '';

print_r($_POST);


echo "<p>Titel: " . $titel . "</p>";
?>

</body>
</html>