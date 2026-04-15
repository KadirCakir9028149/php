<?php
session_start();

$_SESSION['kleur'] = 'lila';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Check</title>
</head>
<body>

<h1>Session test</h1>

<p>Mijn opgeslagen waarde is: <?php echo $_SESSION['kleur']; ?></p>

</body>
</html>