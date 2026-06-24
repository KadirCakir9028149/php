<?php
// mijn mini-app word een : series die ik nu kijk tracker
$appnaam = "watching";
$trackertype = "series";
$tagline = "ik hou van series kijken";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>welkom bij $appnaam</h1>";
    echo "<p>hier kan je bijhouden welke $trackertype je allemaal kijkt</p>";
    echo "<p>$tagline</p>";
    ?>

<footer> <?= date("Y") ?> </footer>
</body>
</html>