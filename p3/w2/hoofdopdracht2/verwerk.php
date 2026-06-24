<?php

if (isset($_POST["titel"])) {
    $titel = htmlspecialchars($_POST["titel"]);
    $genre = htmlspecialchars($_POST["genre"]);
} else {
    echo "Formulier niet verzonden.";
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Verwerkt</title>
</head>
<body>

<h1>Item succesvol ontvangen</h1>

<p><strong>Titel:</strong> <?= $titel; ?></p>
<p><strong>Genre:</strong> <?= $genre; ?></p>

<br>

<a href="toevoegen.php">Terug naar toevoegen</a>

</body>
</html>