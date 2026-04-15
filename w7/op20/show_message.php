<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Flash Message</title>
</head>
<body>

<h1>Bericht</h1>

<?php
if (isset($_SESSION['flash'])) {
    echo "<p>" . $_SESSION['flash'] . "</p>";
    
    // meteen verwijderen
    unset($_SESSION['flash']);
}
?>

</body>
</html>