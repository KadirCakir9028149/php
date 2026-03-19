<?php

$games = [
    [
        "titel" => "Minecraft", "genre" => "Sandbox", "platform" => "PC", "status" => "Speel ik vaak"
    ],
    [
        "titel" => "FIFA 23", "genre" => "Sport", "platform" => "PlayStation", "status" => "Af en toe"
    ]
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Mijn Games</title>
</head>
<body>

<h1>Mijn Games</h1>

<h2>Game 1</h2>
<p>Titel: <?= $games[0]["titel"]; ?></p>
<p>Genre: <?= $games[0]["genre"]; ?></p>
<p>Platform: <?= $games[0]["platform"]; ?></p>
<p>Status: <?= $games[0]["status"]; ?></p>

<h2>Game 2</h2>
<p>Titel: <?= $games[1]["titel"]; ?></p>
<p>Genre: <?= $games[1]["genre"]; ?></p>
<p>Platform: <?= $games[1]["platform"]; ?></p>
<p>Status: <?= $games[1]["status"]; ?></p>

</body>
</html>