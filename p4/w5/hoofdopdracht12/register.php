<?php
require 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

if (empty($username)) {
echo "Gebruikersnaam is verplicht.";
exit;
}

if (strlen($username) < 3) {
echo "Gebruikersnaam moet minimaal 3 karakters hebben.";
exit;
}

if (empty($password)) {
echo "Wachtwoord is verplicht.";
exit;
}

if (strlen($password) < 6) {
echo "Wachtwoord moet minimaal 6 karakters hebben.";
exit;
}

$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password)
VALUES (?, ?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([$username, $hash]);

echo "Registratie gelukt!";
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<title>Registreren</title>
</head>
<body>

<h1>Registreren</h1>

<form method="POST" action="">

<label for="username">Gebruikersnaam</label><br>
<input
type="text"
id="username"
name="username"
>
<br><br>

<label for="password">Wachtwoord</label><br>
<input
type="password"
id="password"
 name="password"
    >
<br><br>

<button type="submit">Registreren</button>

</form>

</body>
</html>